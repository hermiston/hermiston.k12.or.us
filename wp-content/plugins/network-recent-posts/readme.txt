=== Network Recent Posts ===
Contributors: Robert Silva
Tags: recent posts, shortcode, widget, network, latest posts
Requires at least: 3.5
Tested up to: 3.5.2
Stable tag: 1.0.1

This plugin allows you to pull all the recent posts from the blogs in your WordPress network and display them in any site in your network

== Description ==

This plugin allows you to pull all the recent posts from the blogs in your WordPress network and display them in any site in your network

== Installation ==

1. Upload `network-recent-posts folder` to the `/wp-content/plugins/` directory
2. Network Activate the plugin through the 'Plugins' menu in WordPress Network Admin
3. Activate the plugin on the site(s) you want to use it on
4. If you want to use the Widget, you can add the Network Recent Posts widget under 'Appearance->Widgets'
5. If you want to use the Shortcode, go to a page or post then click the NR_Posts icon (green button in the TinyMCE editor) or use [network_recent_posts]

== Options ==

= CSS Classes =

= Shortcode Options =

This is an just an example with the default values which means I could have used `[network_recent_posts]` instead, but this will show you how the parameters are passed. For more examples please visit the Network Recent Posts website.

`[network_recent_posts title=NULL
          number_posts=10
          time_frame=0
          title_only=TRUE
          display_type=ulist
          blog_id=NULL
          ignore_blog=NULL
          thumbnail=FALSE
          thumbnail_wh=80x80
          thumbnail_class=NULL
          thumbnail_filler=placeholder
          thumbnail_custom=FALSE
          thumbnail_field=NULL
          thumbnail_url=NULL
          custom_post_type=post
          category=NULL
          tag=NULL
          paginate=FALSE
          posts_per_page=NULL
          display_content=FALSE
          excerpt_length=NULL
          auto_excerpt=FALSE
          excerpt_trail=text
          full_meta=FALSE
          sort_by_date=FALSE
          sort_by_blog=FALSE
          sorting_order=NULL
          sorting_limit=NULL
          post_status=publish
          css_style=NULL
          wrapper_list_css='nav nav-tabs nav-stacked'
          wrapper_block_css=content
          instance=NULL
          random=FALSE
          post_ignore=NULL
]`

* @title              : Widget/Shortcode main title (section title)
* @number_posts       : Number of posts BY blog to retrieve. Ex: 10 means, retrieve 10 posts for each blog found in the network
* @time_frame         : Period of time to retrieve the posts from in days. Ex: 5 means, find all articles posted in the last 5 days
* @title_only         : Display post titles only, if false then excerpts will be shown
* @display_type       : How to display the articles, as an: unordered list (ulist), ordered list (olist) or block elements
* @blog_id            : None, one or many blog IDs to be queried. Ex: 1,2 means, retrieve posts for blogs 1 and 2 only
* @ignore_blog        : It takes the same values as blog_id but in this case this blogs will be ignored. Ex: 1,2 means, display all but 1 and 2
* @thumbnail          : If true then thumbnails will be shown, if active and not found then a placeholder will be used instead
* @thumbnail_wh       : Thumbnails size, width and height in pixels, while using the shortcode or a function this parameter must be passed like: '80x80'
* @thumbnail_class    : Thumbnail class, set a custom class (alignleft, alignright, center, etc)
* @thumbnail_filler   : Placeholder to use if the post's thumbnail couldn't be found, options: placeholder, kittens, puppies (what?.. I can be funny sometimes)
* @thumbnail_custom   : Pull thumbnails from custom fields (true or false), thumbnail parameter must be true
* @thumbnail_field    : Custom field which contains the custom thumbnail URL
* @thumbnail_url      : Custom thumbnail filler URL
* @custom_post_type   : Specify a custom post type: post, page or something-you-invented
* @category           : Category or categories you want to display. Ex: cats,dogs means, retrieve posts containing the categories cats or dogs
* @tag                : Same as categoy WordPress treats both taxonomies the same way; by the way, you can pass one or many (separated by commas)
* @paginate           : Display results by pages, if used then the parameter posts_per_page must be specified, otherwise pagination won't be displayed
* @posts_per_page     : Set the number of posts to display by page (paginate must be activated)
* @display_content    : Display post content instead of excerpt (false by default)
* @excerpt_length     : Set the excerpt's length in case you think it's too long for your needs Ex: 40 means, 40 words (55 by default)
* @auto_excerpt       : If true then it will generate an excerpt from the post content, it's useful for those who forget to use the Excerpt field in the post edition page
* @excerpt_trail      : Set the type of trail you want to append to the excerpts: text, image. The text will be _more_, the image is inside the plugin's img directory and it's called excerpt_trail.png
* @full_meta          : Display the date and the author of the post, for the date/time each blog time format will be used
* @sort_by_date       : Sorting capabilities, this will take all posts found (regardless their blogs) and sort them in order of recency, putting newest first
* @sort_by_blog       : Sort by blog ID
* @sorting_order      : Specify the sorting order: 'newer' means from newest to oldest posts, 'older' means from oldest to newest. asc/desc are used when blog ID is true
* @sorting_limit      : Limit the number of posts to display. Ex: 5 means display 5 posts from all those found (even if 20 were found, only 5 will be displayed)
* @post_status        : Specify the status of the posts you want to display: publish, new, pending, draft, auto-draft, future, private, inherit, trash
* @css_style          : Use a custom CSS style instead of the one included by default, useful if you want to customize the front-end display: filename (without extension), this file must be located where your active theme CSS style is located, this parameter should be used only once by page (it will affect all shorcodes/widgets included in that page)
* @wrapper_list_css   : Custom CSS classes for the list wrapper
* @wrapper_block_css  : Custom CSS classes for the block wrapper
* @instance           : This parameter is intended to differenciate each instance of the widget/shortcode/function you use, it's required in order for the asynchronous pagination links to work
* @random             : Pull random articles
* @post_ignore        : Post ID(s) to ignore (default null) comma separated values ex: 1 or 1,2,3 > ignore posts ID 1 or 1,2,3 (post ID 1 = Hello World)

== Changelog ==

= 1.0.0 =
* Plugin based on Network Latest Posts Widget by L'Elite (email : opensource@laelite.info)

== Screenshots ==


== Frequently Asked Questions ==

= Why did you do this plugin? =
Because I have 3 blogs and I needed a way to display the latest posts from them in the main blog of my Network.

= If I want you to add a new feature, will you do it? =
I like new ideas, but please keep it real and be patient, I try to work as fast as I can but I have also other things to do :).

= What do I need in order to make this plugin work for me? =
Technically nothing, but the pagination feature uses jQuery to load the content without reloading the page. It's prettier that way but it's up
to you (pagination is not Javascript dependant, no jQuery = no fancy loading effects that's all). jQuery is included by default in WordPress, so you don't need to do anything or add anything.

= I can't see the thumbnails =
Your theme have to support thumbnails, just add this to the function.php inside your theme folder:
`add_theme_support('post-thumbnails');`

= OMG this plugin is awesome! I want to buy you a coke and send you a message, where can I do it? =
Please visit my website http://laelite.info if you want to support my work please consider making a donation, even $1 can help me pay my web server. If you have no money, then you can write something nice
about me and my work, then send it to opensource[at]laelite.info

= Is there a plugin like this for single WordPress installations? =
Yes, I've released a version for single installations, check it out http://single-latest-posts.laelitenetwork.com, you can also download the lite version for FREE