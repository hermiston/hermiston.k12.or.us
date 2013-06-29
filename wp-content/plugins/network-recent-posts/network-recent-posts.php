<?php
/*
Plugin Name: Network Recent Posts
Plugin URI: http://it.hermiston.k12.or.us/
Description: Display recent posts from blogs in your network using it as a function, shortcode or widget.
Version: 1.0.0
Author: Robert Silva
Author URI: http://it.hermiston.k12.or.us/
 */

// Require widget class
require_once dirname( __FILE__ ) . '/network-recent-posts-widget.php';

/* Network Recent Posts Main Function
 *
 * Where the magic happens ;)
 *
 * List of Parameters
 *
 * -- @title              : Widget/Shortcode main title (section title)
 * -- @blog_ids           : None, one or many blog IDs to be queried. Ex: 1,2 means, retrieve posts for blogs 1 and 2 only
 * -- @time_frame         : Period of time to retrieve the posts from in days. Ex: 5 means, find all articles posted in the last 5 days
 * -- @number_posts       : Number of posts BY blog to retrieve. Ex: 10 means, retrieve 10 posts for each blog found in the network
 * -- @post_type          : Specify a custom post type: post, page or something-you-invented
 * -- @category           : Category or categories you want to display. Ex: cats,dogs means, retrieve posts containing the categories cats or dogs
 * -- @post_tag           : Same as categoy WordPress treats both taxonomies the same way; by the way, you can pass one or many (separated by commas)
 * -- @display_thumbnail  : If true then thumbnails will be shown, if active and not found then a placeholder will be used instead
 * -- @display_title      : Display post titles only, if false then excerpts will be shown
 * -- @display_meta       : Display the date and/or the author of the post, for the date/time each blog time format will be used
 * -- @display_content    : Display post content
 * -- @display_excerpt    : Display post excerpt (when false, full content will be displayed)
 * -- @display_order      : Specify the sorting order: 'newer' means from newest to oldest posts, 'older' means from oldest to newest. Asc and desc for blog IDs
 * -- @display_limit      : Limit the number of posts to display. Ex: 5 means display 5 posts from all those found (even if 20 were found, only 5 will be displayed)
 * -- @thumbnail_wh       : Thumbnails size, width and height in pixels, while using the shortcode or a function this parameter must be passed like: '80x80'
 * -- @thumbnail_class    : Thumbnail class, set a custom class (alignleft, alignright, center, etc)
 * -- @thumbnail_url      : Custom thumbnail URL
 * -- @excerpt_length     : Set the excerpt's length in case you think it's too long for your needs Ex: 40 means, 40 words
 * -- @auto_excerpt       : If true then it will generate an excerpt from the post content, it's useful for those who forget to use the Excerpt field in the post edition page
 * -- @excerpt_trail      : Set the type of trail you want to append to the excerpts: text, image. The text will be _more_, the image is inside the plugin's img directory and it's called excerpt_trail.png
 * -- @post_status        : Specify the status of the posts you want to display: publish, new, pending, draft, auto-draft, future, private, inherit, trash
 * -- @doing_shortcode    : Set to true when using shortcode to prevent before_* and after_* codes
 */

function network_recent_posts_defaults() {
    // Default values
    return array(
        'title'            => 'Recent Posts',
        'blog_ids'         => NULL,             // CSV of ID(s) of the blog(s) you want included, 0 is all blogs
        'time_frame'       => 0,                // Time frame to look for posts in days, 0 is no limit
        'number_posts'     => 5,                // Number of posts to be displayed
        'post_type'        => 'post',           // Type of posts to display
        'category'         => NULL,             // Category(ies) to display
        'post_tag'         => NULL,             // Tag(s) to display
        'display_thumbnail'=> FALSE,            // Display the posts thumbnail
        'display_title'    => TRUE,             // Display the post title only
        'display_meta'     => FALSE,            // Display metadata: Comma separated list of [ author | date ]
        'display_content'  => FALSE,            // Display post content
        'display_excerpt'  => FALSE,            // Display post excerpt (when false, full content will be displayed)
        'display_order'    => NULL,             // Sort posts from Newest to Oldest or vice versa (newer / older), asc / desc for blog ID
        'display_limit'    => 5,                // Limit the number of sorted posts to display        
        'thumbnail_wh'     => '75x45',          // Preferred thumbnail Width & Height in pixels
        'thumbnail_class'  => NULL,             // Thumbnail CSS class
        'thumbnail_url'    => NULL,             // Custom thumbnail URL
        'excerpt_length'   => NULL,             // Excerpt's length
        'auto_excerpt'     => FALSE,            // Generate excerpt from content
        'excerpt_trail'    => 'text',           // Excerpt's trailing element: text, image
        'post_status'      => 'publish',        // Post status (publish, new, pending, draft, auto-draft, future, private, inherit, trash)
        'doing_shortcode'  => FALSE             // Custom CSS classes for the block wrapper
    );
}


function network_recent_posts( $args ) {
    global $wpdb;
    
    $defaults = network_recent_posts_defaults();

    // Sanitize our short_code inputs, only allow authorized arguments and initialize defaults
    foreach(array('title','blog_ids','time_frame','number_posts','post_type','category','post_tag','display_title','display_content','display_excerpt','display_meta','display_thumbnail','display_order','display_limit','thumbnail_wh','thumbnail_class','thumbnail_url','excerpt_length','auto_excerpt','excerpt_trail','post_status','doing_shortcode') as $option ) {
            $$option = isset( $args[$option] ) ? strip_tags( $args[ $option ] ) : $defaults[ $option ];
            //echo $field.": ".$$field."<BR />";
    }
    
    // Sanitize display_meta
    if ( ! empty( $display_meta ) ) {
        $_display_meta = array_map( 'trim', explode( ',', $display_meta ) );
        $display_meta = array( 'date' => false, 'author' => false );
        foreach ( $_display_meta ) as $_meta_item ) {
            if ( isset( $display_meta[ $_meta_item ] ) ) {
                $display_meta[ $_meta_item ] = true;
            }
        }
    }

    // Sanitize the thumbnnail size
    if ( ! preg_match( '/^[0-9]{1,4}x[0-9]{1,4}$/', $thumbnail_wh ) ) {
        $thumbnail_size = array( '70', '45' );
    } else {
        $thumbnail_size = explode( 'x', $thumbnail_wh );
    }
    
    // Sanitize blogids into an array
    $clean_blog_ids = array();
    if ( ! empty( $blog_id ) ) {                
        // Split $blog_id argument on comma into array
        $dirty_blog_ids = array_map( 'trim', explode( ',', $blog_id ) );
        foreach ( $dirty_blog_ids as $val ) {
            $int_val = (int) $val;
            if ( $int_val > 0 ) $clean_blog_ids[] = $int_val;
        } 
    }
    
    // Verify the blogs for each blog_id exist and filter out blogs which havent had posts with time_frame
    $sql = "select blog_id from $wpdb->blogs where public='1' and archived='0' and mature='0' and spam='0' and deleted='0' ";
    if ( ! empty( $clean_blog_ids ) ) {
        $sql .= ' and blog_id in (' . $implode( ',', $clean_blog_ids ) . ') ';
    }
    if ( !empty( (int) $time_frame ) ) {
        $sql .= " and last_updated >= date_sub(current_date(), interval $time_frame day) ";
    }
    $sql .= "order by last_updated desc";

    // Load the blogs from the database
    $blogs = $wpdb->get_col( $sql );

    if ( ! empty( $blogs ) ) {
        
        // Define our global query filters
        $query_args = array(
            'tax_query' => array(),
            'post_status' => $post_status,
            'orderby' => 'post_date',
            'supress_filters' => true
        );

        // Sanitize our post_types
        if ( ! empty( $post_type) ) {
            $query_args['post_type'] = array_map( 'trim', explode( ',', $post_type ) );
        }

        $query_filters = array( 'category' => false, 'post_tag' => false );
        foreach ( array_keys( $query_filters ) as $filter ) {
            if ( ! empty( ${$filter} )) {
                // Mark the filter as being set
                $query_filters[$filter] = true;
                // Array-ize the filter and sanitize it
                ${'query_' . $filter} = array_map( 'trim', explode( ',', ${$filter} ) );

                // Add the filter to the query filters
                $query_args['tax_query'][] = array(
                    'taxonomy' => $filter,
                    'field' => 'slug',
                    'terms' => ${'query_' . $filter}
                );
            }
        }

        // If both filters are set, add the filter relation
        if ( true === $query_filters['category'] && true === $query_filters['post_tag'] ) {
            $query_args['tax_query']['relation'] = 'OR';
        }

        // Initialize variables to store post data
        $all_posts = $all_permalinks = $all_blogkeys = $all_thumbnails = array();

        // Start loading blog posts
        foreach ( $blogs as $blog_key ) {
            // Define a per-blog query filter
            $query_args['numberposts'] => $number_posts;

            // Switch to the blog
            switch_to_blog( $blog_key );
                // Options: Site URL, Blog Name, Date Format
                ${'blog_url_' . $blog_key} = get_option( 'siteurl' );
                ${'blog_name_' . $blog_key} = get_option( 'blogname' );
                ${'date_format_' . $blog_key} = get_option( 'date_format', 'F j, Y' );

                // Get posts
                ${'posts_' . $blog_key} = get_posts( $query_args );

                // Move to next blog if no posts were found
                if ( ! empty( ${'posts_' . $blog_key} ) ) {
                    
                    // Put everything inside an array for sorting purposes
                    foreach ( ${'posts_' . $blog_key} as $_post ) {
                        // Access all post data
                        //setup_postdata( $post );
                        
                        $all_posts[ $_post->post_modified ] = $_post;
                        $all_permalinks[ $_post->guid ] = get_permalink( $_post->ID );
                        $all_blogkeys[ $_post->guid ] = $blog_key;

                        // Store thumbnails
                        if ( ! empty( $thumbnail ) ) {
                            $_thumbnail = get_the_post_thumbnail( $_post->ID, $thumbnail_size, array( 'alt' => $_post->post_title, 'title' => $_post->post_title ) );

                            if ( ! empty( $_thumbnail ) ) {
                                $all_thumbnails[ $_post->guid ] = '<a href="' . $all_permalinks[ $_post->guid ] . '">' . $_thumbnail . '</a>';
                            }

                            // If no post thumbnail, try to use default thumbnail
                            if ( ! empty( $thumbnail_url ) && empty( $all_thumbnails[ $_post->guid ] )) {
                                $all_thumbnails[ $_post->guid ] = '<a href="' . $all_permalinks[ $_post->guid ] . '"><img src="' . $thumbnail_url . '" alt="' . $_post->post_title . '" title="' . $_post->post_title . '" width="' . $thumbnail_size[0] . '" height="' . $thumbnail_size[1] . '" /></a>';
                            }

                            // If no post thumbnail and no default thumbnail, use a placeholder
                            if ( empty( $all_thumbnails[ $_post->guid ] ) ) {
                                $all_thumbnails[ $_post->guid ] = '<a href="' . $all_permalinks[ $_post->guid ] . '"><img src="http://placehold.it/' . $thumbnail_wh . '&text=' . $_post->post_title . '" alt="' . $_post->post_title . '" title="' . $_post->post_title . '" width="' . $thumbnail_size[0] . '" height="' . $thumbnail_size[1] . '" /></a>';
                            }
                        }
                    }
                }
            // Restore the current blog
            restore_current_blog();
        }

        if ( ! $doing_shortcode ) {
            // Start output
            echo $before_widget;
            if ( ! empty($title) ) echo $before_title . $title . $after_title;
        } else {
            echo '<div class="network-reent-posts-widget-container-title">' . $title . '</div>';
        }

        // If no content was found
        if( ! empty( $all_posts ) ) {
      
            // Display order? Newest to oldest or Oldest to newest
            switch( $display_order ) {
                case 'older':
                    @ksort( $all_posts );
                break;
                default:
                    @krsort( $all_posts );
                break;
            }

            // Display limit - 0 means all posts (filtered by number_posts)
            if ( 0 < (int) $display_limit ) ) {
                $all_posts = @array_slice( $all_posts, 0, $display_limit, true );
            }

            // Widget Container
            echo '<div class="network-recent-posts-widget-container">';
            
            foreach ( $all_posts as $_post ) {
                // Post Container
                echo '<div class="network-recent-posts-widget">';

                // Thumbnail
                if ( ! empty( $thumbnail ) ) {
                    echo '<div class="network-recent-posts-widget-thumbnail">' . $all_thumbnails[ $_post->guid ] . '</div>';
                }

                // Title        
                echo '<div class="network-recent-posts-widget-context">';
                echo '<div class="network-recent-posts-widget-title">';
                echo '<a href="' . $all_permalinks[$field->guid] . '">' . $field->post_title . '</a>';
                echo '</div>';

                if ( ! empty( $display_meta ) ) {
                    if ( isset( $display_meta['date'] ) ) {
                        // Recall date format for this blog
                        $format = ${'date_format_' . $all_blogkeys[ $_post->guid ]};
                        $post_date = date_i18n( $format, strtotime( trim( $_post->post_date) ) );
                        
                        echo '<div class="network-recent-posts-widget-date">' . $post_date . '</div>';
                    }

                    if ( isset( $display_meta[ 'author' ] ) ) {
                        $post_author = get_user_by( 'id', $_post->post_author);
                        $post_author_url = ${'blog_url_' . $all_blogkeys[ $_post->guid ]} . '/author/' . $post_author->user_login;
                        
                        echo '<div class="network-recent-posts-widget-author">';
                        echo '<a href="' . $post_author_url . '">' . $post_author->display_name . '</a>';
                        echo '</div>';
                    }    
                }
                        
                if ( ! empty( $display_content ) ) {
                    echo '<div class="network-recent-posts-widget-content">';
                    // Display content or excerpts?
                    if ( empty( $display_excerpt ) ) {
                        // Process content shortcodes
                        echo nl2br( do_shortcode( $_post->post_content ) );
                    } else {
                        if ( empty( $auto_excerpt ) ) {
                            // Print out the post excerpt
                            echo network_recent_posts_excerpt( $excerpt_length, $_post->post_excerpt, $all_permalinks[ $_post->guid ], $excerpt_trail );
                        } else {
                            // Extract excerpt from content
                            echo network_recent_posts_excerpt( $excerpt_length, $_post->post_content, $all_permalinks[ $_post->guid ], $excerpt_trail );
                        }
                    }
                    echo '</div>';
                }
                echo '</div>'; // network-recent-posts-widget-context
                echo '<div class="clear"></div>'; // Clear both
                echo '</div>'; // network-recent-posts-widget       
            }            
            echo '</div>'; // network-recent-posts-widget-container"
        } else {
            echo '<div class="alert">No recent posts found</div>';
        }
        if ( ! $doing_shortcode ) {
            echo $after_widget;
        }
    }
    // Reset post data
    //wp_reset_postdata();
}

/* Limit excerpt length
 * @count: excerpt length
 * @content: excerpt content
 * @permalink: link to the post
 * return customized @excerpt
 */
function network_recent_posts_excerpt( $excerpt_length, $content, $permalink, $excerpt_trail ){
    if ( empty( (int) $excerpt_length ) ) { $excerpt_length = 55; }
    /* Strip shortcodes
     * Due to an incompatibility issue between Visual Composer
     * and WordPress strip_shortcodes hook, I'm stripping
     * shortcodes using regex. (27-09-2012)
     *
     * $content = strip_tags(strip_shortcodes($content));
     *
     * replaced by
     *
     * $content = preg_replace("/\[(.*?)\]/i", '', $content);
     * $content = strip_tags($content);
     */
    $content = preg_replace("/\[(.*?)\]/i", '', $content);
    $content = strip_tags($content);
    // Get the words
    $words = explode(' ', $content, $excerpt_length + 1);
    // Pop everything
    array_pop($words);
    // Add trailing dots
    array_push($words, '...');
    // Add white spaces
    $content = implode(' ', $words);
    // Add the trail
    switch( $excerpt_trail ) {
        case 'image':
            $content = $content . ' <a href="' . $permalink . '"><img src="' . plugins_url( '/img/excerpt_trail.png', __FILE__ ) . '" alt="more" title="more" /></a>';
            break;
        default:
            $content = $content . ' [<a href="' . $permalink . '">more</a>]';
            break;
    }
    return $content;
}

/* Init function
 * Plugin initialization
 */

function network_recent_posts_init() {
    // Check for the required API functions
    if ( ! function_exists( 'register_sidebar_widget' ) || ! function_exists( 'register_widget_control' ) )
        return;
    
    // Register functions
    wp_register_sidebar_widget( 'network-recent-posts-widget', 'Network Recent Posts' );
    //wp_register_widget_control( 'hsd-nlposts-control', __( 'HSD Network Latest Posts', 'trans-nlp' ), 'hsd_network_latest_posts_control' );
    wp_register_style( 'network-recent-posts-form', plugins_url( '/css/form_style.css', __FILE__ ) );
    wp_enqueue_style( 'network-recent-posts-form' );
    register_uninstall_hook( __FILE__, 'network_recent_posts_uninstall' );
    // Load plugins
    wp_enqueue_script( 'jquery' );
}
add_action( 'admin_enqueue_scripts', 'network_recent_posts_init' );

// Load CSS Styles
function network_recent_posts_load_styles( $css_style ) {
    if ( ! empty( $css_style ) ) {
        // Unload default style
        wp_deregister_style( 'hsd-nlpcss' );
        // Load custom style
        wp_register_style( 'hsd-nlp-custom', $css_style );
        wp_enqueue_style( 'hsd-nlp-custom' );
    } else {
        // Unload custom style
        wp_deregister_style( 'hsd-nlp-custom' );
        // Load default style
        wp_register_style( 'hsd-nlpcss', plugins_url( '/css/default_style.css', __FILE__ ) );
        wp_enqueue_style( 'hsd-nlpcss' );
    }
    return;
}
// Load styles
add_action( 'wp_head', 'network_recent_posts_load_styles', 10, 1 );






/* Uninstall function
 * Provides uninstall capabilities
 */
function network_recent_posts_uninstall() {
    // Delete widget options
    //delete_option( 'widget_hsd_nlposts_widget' );
    // Delete the shortcode hook
    remove_shortcode( 'network_recent_posts' );
}


/* Shortcode function
 *
 * @atts: attributes passed to the main function
 * return @shortcode
 */
function network_recent_posts_shortcode( $atts ) {
    $atts['doing_shortcode'] = true;
    // Start the output buffer to control the display position
    ob_start();
    // Get the posts
    network_recent_posts_widget( $atts );
    // Output the content
    $output_string = ob_get_contents();
    // Clean the output buffer
    ob_end_clean();
    // Put the content where we want
    return $output_string;
}

// Add the shortcode functionality
add_shortcode( 'network_recent_posts', 'network_recent_posts_shortcode' );

/*
 * TinyMCE Shortcode Plugin
 * Add a NLPosts button to the TinyMCE editor
 * this will simplify the way it is used
 */
// TinyMCE button settings
function network_recent_posts_shortcode_button() {
    if ( current_user_can( 'edit_posts' ) && current_user_can( 'edit_pages' ) ) {
        add_filter( 'mce_external_plugins', 'network_recent_posts_shortcode_plugin' );
        add_filter( 'mce_buttons', 'network_recent_posts_register_button' );
    }
}
// Hook the button into the TinyMCE editor
function network_recent_posts_register_button( $buttons ) {
    array_push( $buttons, "|" , "hsd_nlposts" );
    return $buttons;
}
// Load the TinyMCE NLposts shortcode plugin
function network_recent_posts_shortcode_plugin( $plugin_array ) {
   $plugin_array['hsd_nlposts'] = plugin_dir_url( __FILE__ ) . 'js/nlp_tinymce_button.js';
   return $plugin_array;
}
// Hook the shortcode button into TinyMCE
add_action( 'init', 'network_recent_posts_shortcode_button' );

// Initialize the widget
add_action( 'widgets_init', function() { register_widget( "Network_Recent_Posts_Widget" ); } );


?>