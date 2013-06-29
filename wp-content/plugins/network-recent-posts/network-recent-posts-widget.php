<?php
/*
    Network Recent Posts Widget
    Version 1,0
    Author Robert Silva
    Author URI http://hermiston.k12.or.us
 */

if ( !class_exists('WPSocialNetworksWidget') ) {
    class Network_Recent_Posts_Widget extends WP_Widget {

        // Default values
        private $defaults;

        public function __construct() {
            parent::__construct(
                'network-recent-posts-widget', // Base ID
                'Network Recent Posts', // Name
                array( 'classname' => 'network-recent-posts-widget', 'description' => 'Network Recent Posts Widget' ),
                array( 'width' => 300, 'height' => 350, 'id_base' => 'network-recentpost-widget' ); // Args
            );

            $this->defaults = network_recent_posts_defaults();
        }


        public function widget( $args, $instance ) {
            // Duplicate the instances
            $options = $instance;
            if ( is_array( $options ) ) {
                $options = wp_parse_args( $options, $this->defaults );
            }
            
            // Start the output buffer to control the display position
            ob_start();
            // Get the posts
            hsd_network_latest_posts( $options );
            // Grab the content
            $output_string = ob_get_contents();
            // Clean the output buffer
            ob_end_clean();
            // Put the content where we want
            echo $output_string;
        }

        /*
         * Sanitize widget form values as they are saved
         *
         * @see WP_Widget::update()
         *
         * @param array $new_instance Values just sent to be saved.
         * @param array $old_instance Previously saved values from database.
         *
         * @return array Updated safe values to be saved.
         */
        public function update( $new_instance, $old_instance ) {
            // Set an array
            $instance = array();

            // Get the values
            $instance['title']            = strip_tags( $new_instance['title'] );
            $instance['blog_ids']         = strip_tags( implode( ',', $new_instance['blog_ids'] ) );
            $instance['time_frame']       = (int) $new_instance['time_frame'];
            $instance['number_posts']     = (int) $new_instance['number_posts'];
            $instance['post_type']        = strip_tags( $new_instance['post_type'] );
            $instance['category']         = strip_tags( $new_instance['category'] );
            $instance['post_tag']         = strip_tags( $new_instance['post_tag'] );
            $instance['display_thumbnail']= (int) $new_instance['display_thumbnail'];
            $instance['display_title']    = (int) $new_instance['display_title'];
            $instance['display_meta']     = strip_tags( implode( ',', $new_instance['display_meta'] ) );
            $instance['display_content']  = (int) $new_instance['display_content'];
            $instance['display_excerpt']  = (int) $new_instance['display_excerpt'];
            //$instance['display_order']    = strip_tags($new_instance['display_order']);
            $instance['display_limit']    = (int) $new_instance['display_limit'];
            $instance['thumbnail_wh']     = strip_tags($new_instance['thumbnail_wh']);
            $instance['thumbnail_class']  = strip_tags($new_instance['thumbnail_class']);
            $instance['thumbnail_url']    = strip_tags($new_instance['thumbnail_url']);
            $instance['excerpt_length']   = (int) $new_instance['excerpt_length'];
            $instance['auto_excerpt']     = (int) $new_instance['auto_excerpt'];
            $instance['excerpt_trail']    = strip_tags($new_instance['excerpt_trail']);
            //$instance['post_status']      = strip_tags($new_instance['post_status']);

            // Return the sanitized values
            return $instance;
        }

        /*
         * Back-end widget form
         *
         * @see WP_Widget::form()
         *
         * @param array $instance Previously saved values from database.
         */
        public function form( $instance ) {
            global $wpdb;

            $args = wp_parse_args( $instance, $this->defaults );

            // Extract elements as variables
            extract( $args );

            // Get blog ids
            $blog_ids = $wpdb->get_col("select blog_id from $wpdb->blogs where
                public = '1' and archived = '0' and mature = '0' and spam = '0' and deleted = '0'
                order by blog_id");
            
            // Form
?>
<p>
    <label for="<?php echo $this->get_field_id('title'); ?>">Title</label><br>
    <input class="widefat" type="text" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo $title; ?>">
</p>
<p>
    <label for="<?php echo $this->get_field_id('blog_ids'); ?>">Blog(s) to Display</label><br>
    <select id="<?php eho $this->get_field_id('blog_ids'); ?>" name="<?php echo $this->get_field_name('blog_ids'); ?>[]" multiple="multiple">
<?php
    $blog_id = array_map( 'trim', explode( ',', $blog_id ) );
?>
    <option value="" <?php echo ( empty($blog_id) ) ? 'selected="selected"' : ''; ?>>All Blogs</option>
<?php
    // Display the list of blogs
    foreach ( $blog_ids as $single_id ) {
        $blog_details = get_blog_details( $single_id->blog_id );
?>
    <option value="<?php echo $single_id->blog_id; ?>" <?php echo ( in_array( $single_id->blog_id, $blog_id ) ) ? 'selected="selected"' : ''; ?>><?php echo $blog_details->blogname; ?>(ID: <?php echo $single_id->blog_id; ?>)</option>
    </select>
</p>
<p>
    <label for="<?php echo $this->get_field_id('time_frame'); ?>">Not Older Than Days</label><br>
    <input class="widefat" type="text" id="<?php echo $this->get_field_id('time_frame'); ?>" name="<?php echo $this->get_field_name('time_frame'); ?>" value="<?php echo $time_frame; ?>">
</p>
<p>
    <label for="<?php echo $this->get_field_id('number_posts'); ?>">Max Posts per Blog</label><br>
    <input class="widefat" type="text" size="3" id="<?php echo $this->get_field_id('number_posts'); ?>" name="<?php echo $this->get_field_name('number_posts'); ?>" value="<?php echo $number_posts; ?>">
</p>
<fieldset style="border:1px solid #dfdfdf; padding:10px 10px 0; margin-bottom:1em;">
        <legend style="padding:0 5px;">Filters:</legend>
    <p>
        <label for="<?php echo $this->get_field_id('post_type'); ?>">Post Types (post, page, custom)</label><br>
        <input class="widefat" type="text" id="<?php echo $this->get_field_id('post_type'); ?>" name="<?php echo $this->get_field_name('post_type'); ?>" value="<?php echo $post_type; ?>">
    </p>
    <p>
        <label for="<?php echo $this->get_field_id('category'); ?>">Categories</label><br>
        <input class="widefat" type="text" id="<?php echo $this->get_field_id('category'); ?>" name="<?php echo $this->get_field_name('category'); ?>" value="<?php echo $category; ?>">
    </p>
    <p>
        <label for="<?php echo $this->get_field_id('post_tag'); ?>">Post Tags</label><br>
        <input class="widefat" type="text" id="<?php echo $this->get_field_id('post_tag'); ?>" name="<?php echo $this->get_field_name('post_tag'); ?>" value="<?php echo $post_tag; ?>">
    </p>
</fieldset>
<fieldset style="border:1px solid #dfdfdf; padding:10px 10px 0; margin-bottom:1em;">
    <legend style="padding:0 5px;">Thumbnails:</legend>
    <p>
        <label for="<?php echo $this->get_field_id('display_thumbnail'); ?>">Display Post Thumbnail</label><br>
        <input type="checkbox" id="<?php echo $this->get_field_id('display_thumbnail'); ?>" name="<?php echo $this->get_field_name('display_thumbnail'); ?>" value="1" <?php echo ( $display_thumbnail == '1' ) ? 'checked="checked"' : ''; ?>> Yes
    </p>
    <p>
        <label for="<?php echo $this->get_field_id('thumbnail_wh'); ?>">Thumbnail Width/Height (Ex: 75x45)</label><br>
        <input class="widefat" type="text" id="<?php echo $this->get_field_id('thumbnail_wh'); ?>" name="<?php echo $this->get_field_name('thumbnail_wh'); ?>" value="<?php echo $thumbnail_wh; ?>">
    </p>
    <p>
        <label for="<?php echo $this->get_field_id('thumbnail_url'); ?>">Thumbnail Placeholder URL</label><br>
        <input class="widefat" type="text" id="<?php echo $this->get_field_id('thumbnail_url'); ?>" name="<?php echo $this->get_field_name('thumbnail_url'); ?>" value="<?php echo $thumbnail_url; ?>">
    </p>
    <p>
        <label for="<?php echo $this->get_field_id('thumbnail_class'); ?>">Thumbnail CSS Class</label><br>
        <input class="widefat" type="text" id="<?php echo $this->get_field_id('thumbnail_class'); ?>" name="<?php echo $this->get_field_name('thumbnail_class'); ?>" value="<?php echo $thumbnail_class; ?>">
    </p>
</fieldset>
<fieldset style="border:1px solid #dfdfdf; padding:10px 10px 0; margin-bottom:1em;">
    <legend style="padding:0 5px;">Display:</legend>
    <p>
        <label for="<?php echo $this->get_field_id('display_limit'); ?>">Max Posts to Display</label><br>
        <input class="widefat" size="3" type="text" id="<?php echo $this->get_field_id('display_limit'); ?>" name="<?php echo $this->get_field_name('display_limit'); ?>" value="<?php echo $display_limit; ?>">
    </p>
    <p>
        <label for="<?php echo $this->get_field_id('display_title'); ?>">Display Title</label><br>
        <input type="checkbox" id="<?php echo $this->get_field_id('display_title'); ?>" name="<?php echo $this->get_field_name('display_title'); ?>" value="1" <?php echo ( $display_title == '1' ) ? 'checked="checked"' : ''; ?>> Yes
    </p>
    <p>
        <label for="<?php echo $this->get_field_id('display_meta'); ?>[]">Display Meta (Author/Date)</label><br>
        <input type="checkbox" id="<?php echo $this->get_field_id('display_meta'); ?>_author" name="<?php echo $this->get_field_name('display_meta'); ?>[]" value="author" <?php echo ( stripos( $display_meta, 'author' ) ) ? 'checked="checked"' : ''; ?>> Post Author
        &nbsp;&nbsp;&nbsp;&nbsp;
        <input type="checkbox" id="<?php echo $this->get_field_id('display_meta'); ?>_post_date" name="<?php echo $this->get_field_name('display_meta'); ?>[]" value="post_date" <?php echo ( stripos( $display_meta, 'post_date' ) ) ? 'checked="checked"' : ''; ?>> Post Date
    </p>
    <p>
        <label for="<?php echo $this->get_field_id('display_content'); ?>">Display Content</label><br>
        <input type="checkbox" id="<?php echo $this->get_field_id('display_content'); ?>" name="<?php echo $this->get_field_name('display_content'); ?>" value="1" <?php echo ( $display_content == '1' ) ? 'checked="checked"' : ''; ?>>
    </p>
    <p>
        <label for="<?php echo $this->get_field_id('display_excerpt'); ?>">Display Excerpt (Requires Display Content)</label><br>
        <input type="checkbox" id="<?php echo $this->get_field_id('display_excerpt'); ?>" name="<?php echo $this->get_field_name('display_excerpt'); ?>" value="1" <?php echo ( $display_excerpt == '1' ) ? 'checked="checked"' : ''; ?>>
    </p>
    <p>
        <label for="<?php echo $this->get_field_id('auto_excerpt'); ?>">Use Post Excerpt (vs content snippet)</label><br>
        <input type="checkbox" id="<?php echo $this->get_field_id('auto_excerpt'); ?>" name="<?php echo $this->get_field_name('auto_excerpt'); ?>" value="1" <?php echo ( $auto_excerpt == '1' ) ? 'checked="checked"' : ''; ?>>
    </p>
    <p>
        <label for="<?php echo $this->get_field_id('excerpt_length'); ?>">Excerpt Length</label><br>
        <input class="widefat" size="3" type="text" id="<?php echo $this->get_field_id('excerpt_length'); ?>" name="<?php echo $this->get_field_name('excerpt_length'); ?>" value="<?php echo $excerpt_length; ?>">
    </p>
    <p>
        <label for="<?php echo $this->get_field_id('excerpt_trail'); ?>">Excerpt Trail ('...' or image)</label><br>
        <select id="<?php echo $this->get_field_id('excerpt_trail'); ?>" name="<?php echo $this->get_field_name('excerpt_trail'); ?>">
            <option value="text" <?php echo ( empty( $excerpt_trail ) || $excerpt_trail == 'text' ) ? 'selected="selected"' : ''; ?>>Text</option>
            <option value="image" <?php echo ( $excert_trail == 'image' ) ? 'selected="selected"' : ''; ?>>Image</option>
        </select>
    </p>
</fieldset>
<?php            
        }

    }
}
?>