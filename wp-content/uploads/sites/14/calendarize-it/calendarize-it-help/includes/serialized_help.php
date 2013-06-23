<?php

/**
 * 
 *
 * @version $Id$
 * @copyright 2003 
 **/
$serialized_help = <<<EOT
a:36:{i:0;O:8:"stdClass":5:{s:5:"title";s:7:"Options";s:7:"content";s:0:"";s:8:"location";a:0:{}s:21:"replace_existing_help";s:1:"0";s:9:"help_type";s:3:"tab";}i:1;O:8:"stdClass":5:{s:5:"title";s:13:"Add New Event";s:7:"content";s:0:"";s:8:"location";a:0:{}s:21:"replace_existing_help";s:1:"0";s:9:"help_type";s:3:"tab";}i:2;O:8:"stdClass":5:{s:5:"title";s:9:"Downloads";s:7:"content";s:709:"<h2>Downloads and Add-ons</h2>
If you enter your License Key also known as the Item Purchase Code in the License tab in the Options Panel you will be able to access Downloads and Add-ons.

<h3>How do I find the License key?</h3>
<ol>
	<li>Go to Codecanyon.net and sign in to your account.</li>
	<li>Click on the Downloads tab</li>
	<li>Find Calendarize it! among the items you have purchased</li>
	<li>Click on the Download button and then select "License Certificate" from the drop down menu</li>
	<li>Open the text file that you have downloaded. Copy the "License Key" (Item Purchase Code) from inside the text document, and paste it in to the License Key field and press "Add License".</li>
</ol>";s:8:"location";a:1:{i:0;s:6:"rhc-dc";}s:21:"replace_existing_help";s:1:"1";s:9:"help_type";s:3:"tab";}i:3;O:8:"stdClass":5:{s:5:"title";s:13:"Event Sources";s:7:"content";s:0:"";s:8:"location";a:0:{}s:21:"replace_existing_help";s:1:"1";s:9:"help_type";s:3:"tab";}i:4;O:8:"stdClass":5:{s:5:"title";s:10:"CSS Editor";s:7:"content";s:2192:"<h2>Visual CSS Editor</h2>
With the CSS Editor you can easily customize the look and feel of your calendar.  When the CSS Editor is activated you can access it from the toolbar in wp-admin or from the toolbar in the public website.
<p style="text-align: center;"><img class="aligncenter  wp-image-12817" style="width: 100%; max-width: 601px; height: auto; border: 0px;" alt="Calendarize it! CSS Editor Menu" src="{dcurl}calendarize-it-css-editor-menu.png" width="100%" height="205" /></p>
No matter which menu you load you will see some parts of the interface will stay the same, but the rest will change every time you select a new menu.
<ol>
	<li>With the red Action button you can "<strong>Reset current settings</strong>". This will remove any customization that you have made since you saved last time. If you click "<strong>Remove all customization</strong>" this will as it says remove all customization and restore the default skin.  The last option "<strong>Scope</strong>" is for experts. It will allow you to add a CSS selector and all the selected style will be prefixed with this CSS selector.  This way the styles ONLY get applied to this specific selector.</li>
	<li>The blue "<strong>Save</strong>" button lets you save the customizations that you make. It is important that you save each of the screens. That means if you first select "<strong>Calendar frame</strong>" and start customizing this and then go to "Venue page" without clicking "Save" you will lose your customization.</li>
	<li>The "<strong>Template</strong>" tab will appear in all screens. This will let you give your customization a name and save it as a "template".  This will let you create multiple custom layouts. The "<strong>Template</strong>" tab is also where you load your custom templates and skins downloaded.</li>
	<li>The "Collapse" button lets you slide the CSS Editor to the left so that you can see the entire screen.</li>
</ol>
<p style="text-align: center;"><img class="aligncenter  wp-image-12819" style="width: 100%; max-width: 396px; height: auto; border: 0px;" alt="Calendarize it! Visual CSS Editor" src="{dcurl}calendarize-it-css-editor.png" width="100%" height="964" /></p>";s:8:"location";a:1:{i:0;s:15:"rhc-css-options";}s:21:"replace_existing_help";s:1:"0";s:9:"help_type";s:3:"tab";}i:5;O:8:"stdClass":5:{s:5:"title";s:17:"Template Settings";s:7:"content";s:946:"<h2>Template Settings</h2>
The Template Integration is one of the steps necessary in setting up Calendarize it!

By default it is set to template integration "Version 2" (Version 1 is the original template integration provided for back compatibility on sites that have already customized their calendar templates, but want to update the plugin).

In the Get Started section we described how you should create templates for the Detailed Event page, Venue and Organizer page and Calendar page. Select the pages in the drop down menus and save the settings.
<h3>Calendarize Templates</h3>
Calendarize it! has its own set of templates that contains all the shortcodes for each element such as the Google Map, Detailed Event Box, Detailed Venue Box and extra info. Should you choose to disable the calendarize templates and use your own theme templates you will need to manually add the shortcodes for showing the different elements.
<h3></h3>";s:8:"location";a:1:{i:0;s:3:"rhc";}s:21:"replace_existing_help";s:1:"0";s:9:"help_type";s:3:"tab";}i:6;O:8:"stdClass":5:{s:5:"title";s:11:"Get Started";s:7:"content";s:1436:"<h2>Get Started with Calendarize it!</h2>
It is easy to setup Calendarize it! and start adding your events to the calendar. Please notice that Calendarize it! is at the same time a very versatile plugin. We will show you the basic step to get started.
<ol>
	<li>Create a Page where you want to insert the calendar. Now go back to Calendarize It and click on <strong>Add New Event</strong>. Now go to the contextual help and click on the <strong>Insert Calendar</strong> tab in the help menu and find the Shortcode that will work for you. Copy it. Now go back to the page you just created and paste it in the body of that page.</li>
	<li>Create a Page that will be used as a template for displaying the Events Details.</li>
	<li>Create a Page that will be used as a template for displaying the Venue and Organizer details.</li>
	<li>Go to the <a href="edit.php?post_type=events&amp;page=rhc">Options</a> menu under Calendarize it and click on the Template Settings tab.  By default it is set to template integration "Version 2" (Version 1 is the original template integration provided for back compatibility on sites that have already customized their calendar templates, but want to update the plugin).  Select the templates you just created for the Detailed Event page, Venue and Organizer page and Calendar page.</li>
</ol>
This is the basic steps you should follow to get started. Now you are ready to enter your first event.";s:8:"location";a:2:{i:0;s:25:"edit.php?post_type=events";i:1;s:29:"post-new.php?post_type=events";}s:21:"replace_existing_help";s:1:"0";s:9:"help_type";s:3:"tab";}i:7;O:8:"stdClass":5:{s:5:"title";s:20:"Show Facebook Events";s:7:"content";s:2877:"<h2>Show Facebook Events</h2>
Facebook requires a Facebook Application ID and Secret Key to access data via the Facebook graph API in order to show events from Facebook. The graph API is the primary way that data is retrieved or posted to Facebook.  Follow the steps below to create your set of credentials to show Facebook Events in your websites calendar.
<h3>Register as a Developer</h3>
<ol>
	<li>Go to the <a href="https://developers.facebook.com/apps" target="_blank">Facebook Developers page</a>, and sign in with your Facebook username and password.</li>
	<li>Click the "<strong>+ Create New App</strong>" button. If you do not see the option to create a new app in the upper right hand corner, click on the green "<strong>Register as Developer</strong>" button.</li>
	<li>Enter a name for the application in the "<strong>App Name</strong>" field.</li>
	<li>Read the Facebook Platform Policies and decide if you accept them.  Once you have read the Facebook Platform Policies and have entered an App Name (under step 2 above), click the "<strong>Continue</strong>" button.</li>
	<li>You may be asked to verify your account by providing a mobile number or credit card number.  If your Facebook account has already been verified, you should not be asked to verify your account.</li>
	<li>You may also encounter a Captcha security check.  Enter the Captcha code and click the "<strong>Continue</strong>" button.</li>
	<li>You should now be on the Basic Settings page for your app, where the App Name you provided under Step 2 will be shown in the "<strong>Detail Name</strong>" field.  Check that the name is correct, and that your contact email address is correct, and then processed to the "<strong>App Domains</strong>" field.</li>
	<li>Enter your domain name in the "<strong>App Domains</strong>" field (e.g. Calendar Feed).</li>
	<li>Next, go down to the "<strong>Select how your app integrates with Facebook</strong>" section of the Basic page, and click "<strong>Website with Facebook login</strong>".  This section will expand to show a "Site URL" field.</li>
	<li>Enter your website URL in the "Site URL" field (e.g. http://calendarize.it).</li>
	<li>Click the "Save Changes" button.</li>
	<li>In the top you will find your App ID (Application ID) and App Secret (Secret Key).</li>
</ol>
<h3>Enter the App ID and Secret</h3>
You have now created your App, and you just need to enter the App ID and App Secret in the Facebook App Setting tab in the <a href="edit.php?post_type=events&amp;page=rhc">Options Panel</a>. Click "<strong>Save</strong>" and you are now ready to add the Facebook URLs.
<h3>Enter Facebook URLs</h3>
You can show events from either a Facebook organization or a Facebook page. It is not possible to show events from personal profiles at the moment. You will need the URL of the organization or page in the Feed URL field.";s:8:"location";a:1:{i:0;s:29:"edit.php?post_type=rhc_source";}s:21:"replace_existing_help";s:1:"0";s:9:"help_type";s:3:"tab";}i:8;O:8:"stdClass":5:{s:5:"title";s:14:"Media Settings";s:7:"content";s:769:"<h2>Media Settings</h2>
In the Media Settings tab you can set the size of the image that is used as source for the image that is inserted. It does not directly modify the size of the actual image displayed, which is controlled by the stylesheet.

You have 3 different featured images that you can insert in Calendarize it!
<ul>
	<li><strong>Featured event image</strong>: This is the image that will be displayed in the Tooltip in the main calendar and in the Venue list.</li>
	<li><strong>Top image</strong>: This image will be displayed in the Top of the Detailed event page. You can turn this on or off.</li>
	<li><strong>Detail box image</strong>: This image will be displayed in the Event details box. You can also choose to turn this on or off.</li>
</ul>";s:8:"location";a:1:{i:0;s:3:"rhc";}s:21:"replace_existing_help";s:1:"0";s:9:"help_type";s:3:"tab";}i:9;O:8:"stdClass":5:{s:5:"title";s:15:"Insert Calendar";s:7:"content";s:4353:"<h2>Insert the Calendar Shortcode</h2>
Calendarize it! uses Shortcodes to display the calendar as it makes it very flexible. You can display specific calendars, venues, organizers or calendars created by specific users. You can even set the view of the calendar by adding specific parameters.

Below we have listed the different shortcodes you can use with Calendarize it!.
<h3>Shortcode for inserting Basic Calendar</h3>
The following Shortcode will insert he main calendar, and in the Options menu under Calendarize shortcode you can set the default view. You can choose between Month, Week, Day, Agenda Week, Agenda Day or Events List.
<p style="padding-left: 20px"><code>&lsqb;calendarizeit&rsqb;</code></p>

<h3>Shortcode for Calendar by Individual User</h3>
The following Shortcode will insert the main calendar and show only events created by a specific user. You can replace "username" with any other user.
<p style="padding-left: 20px"><code>&lsqb;calendarizeit author_name="username"&rsqb;</code></p>

<h3>Shortcode for showing Posts in the Calendar</h3>
The following Shortcode will insert the main calendar and show only Blog Posts.
<p style="padding-left: 20px"><code>&lsqb;calendarizeit post_type="post"&rsqb;</code></p>

<h3>Shortcode for showing Pages in the Calendar</h3>
The following Shortcode will insert the main calendar and show only Pages.
<p style="padding-left: 20px"><code>&lsqb;calendarizeit post_type="page"&rsqb;</code></p>

<h3>Shortcode for showing specific Calendar</h3>
The following Shortcode will make it possible to show a specific Calendar. Lets say you create three calendars (taxonomies) Movie Premiers, Theater and Baseball, and you want to insert a calendar that only show the Movie Premieres. You need to find the "slug" of the calendar. Click on calendar in the Calendarize it menu and you will find the "slug" in the third column.
<p style="padding-left: 20px"><code>&lsqb;calendarizeit calendar="name"&rsqb;</code></p>

<h3>Shortcode for showing events from a specific Venue</h3>
The following Shortcode will make it possible to only show events from a specific Venue. If you have a calendar with many events you might also have many different venues. Click on Venues in the Calendarize it menu and you will find the "slug" in the third column.
<p style="padding-left: 20px"><code>&lsqb;calendarizeit venue="place"&rsqb;</code></p>

<h3>Shortcode for showing events by a specific Organizer</h3>
The following Shortcode will make it possible to only show events by a specific Organizer. If you have a calendar with many events you might also have several different Organizers. Click on Organizers in the Calendarize it menu and you will find the "slug" in the third column.
<p style="padding-left: 20px"><code>&lsqb;calendarizeit organizer="name"&rsqb;</code></p>

<h3>Shortcode for Calendar showing a specific Month</h3>
The following Shortcode will insert the main calendar and show a specific month. Lets say we are in May, but you want the visitors to see September when they enter the calendar.
<p style="padding-left: 20px"><code>&lsqb;calendarizeit gotodate="2013-09-01"&rsqb;</code></p>

You can also use a direct URL to send your visitor to a specific month. Add the following at the end of the URL where you inserted the main calendar <code>/?gotodate=2013-06-01</code> (replace the date with any other date).
<h3>Shortcodes for the different Calendar views</h3>
When inserting the Shortcode for the main Calendar you can add the following parameters for each of the different views: Month, Basic Week, Basic Day, Agenda Week, Agenda Day or Events List.

<code>&lsqb;calendarizeit defaultview="month"&rsqb;</code>
<code>&lsqb;calendarizeit defaultview="basicWeek"&rsqb;</code>
<code>&lsqb;calendarizeit defaultview="basicDay"&rsqb;</code>
<code>&lsqb;calendarizeit defaultview="agendaWeek"&rsqb;</code>
<code>&lsqb;calendarizeit defaultview="agendaDay"&rsqb;</code>
<code>&lsqb;calendarizeit defaultview="rhc_event"&rsqb;</code>

<h3>Shortcodes for Upcoming Events List showing specific number of months</h3>
When inserting the Shortcode for the main Calendar you can add the following parameter for Event List and the number of monhts ahead you want to show.

<code>&lsqb;calendarizeit defaultview="rhc_event" eventlistmonthsahead="6"&rsqb;</code>";s:8:"location";a:1:{i:0;s:29:"post-new.php?post_type=events";}s:21:"replace_existing_help";s:1:"0";s:9:"help_type";s:3:"tab";}i:10;O:8:"stdClass":5:{s:5:"title";s:25:"How to Install Downloads ";s:7:"content";s:1052:"<h2>How to Install Downloads</h2>
This section contains all available downloads for Calendarize it!
<p style="text-align: center;"><img class="aligncenter" style="width: 100%; max-width: 663px; height: auto; border: 0px;" alt="Calendarize it! Downloadable Content" src="{dcurl}calendarize-it-downloads.png" width="100%" height="345" /></p>

<ol>
	<li>At the top you will find 4 links.  If you click <strong>Downloads</strong> it will show you all available downloads. If you click <strong>New</strong> it will only show you the downloads that are new, which means less than 14 days old. <strong>Add-ons</strong> is scripts (plugins) that will install and add new features to Calendarize it! If you click on <strong>Downloaded</strong> it will show you the items that you have already downloaded.</li>
	<li>Simply click on the blue Download button in order to install the item.</li>
	<li>Once downloaded and installed a <strong>ON OFF</strong> button will show.  Switch the button from OFF to ON and the new feature will be available.</li>
</ol>";s:8:"location";a:1:{i:0;s:6:"rhc-dc";}s:21:"replace_existing_help";s:1:"0";s:9:"help_type";s:3:"tab";}i:11;O:8:"stdClass":5:{s:5:"title";s:19:"Setup Editable URLs";s:7:"content";s:587:"<h2>Setup Editable URLs</h2>
The CSS Editor will automatically try to detect the URLs of the following pages used as guidance  for the Visual CSS Editor.
<ul>
	<li>Calendar URL (page template)</li>
	<li>Single Event URL (page template)</li>
	<li>Venue URL (page template)</li>
	<li>Organizer URL (page template)</li>
	<li>Upcoming Events Widget (pages)</li>
</ul>
If you have inserted multiple calendars and upcoming event widgets in your website the URLs that are automatically detected might not be the ones you want to use for the editor. You can just changes these manually.";s:8:"location";a:1:{i:0;s:15:"rhc-css-options";}s:21:"replace_existing_help";s:1:"0";s:9:"help_type";s:3:"tab";}i:12;O:8:"stdClass":5:{s:5:"title";s:27:"Show Google Calendar Events";s:7:"content";s:2537:"<h2>Google Calendar Events</h2>
You can easily show events from Google Calendar in your websites calendar. With Google Calendar you can control who can see your calendars and events. You can use XML feeds from both Public and Private calendars.
<h3>Show events from a Public Calendar</h3>
If the calendar you want to show events from is public you will need to enter the "Calendar Address" XML feed into the Feed URL field in the <a title="Enter the XML feed in the Feed URL field" href="edit.php?post_type=rhc_source">Event Source</a> you are creating.
<ol>
	<li>Go to <a href="https://www.google.com/calendar/render" target="_blank">Google Calendar</a> in order to find the XML feed URL. In the calendar list on the left, click on the down-arrow button next to the appropriate calendar, then select <strong>Share this calendar</strong>.</li>
	<li>Select <strong>Make this calendar public</strong>.</li>
	<li>If you don't want others to view the details of your events, select <strong>See only free/busy (hide details)</strong>.</li>
	<li>Click <strong>Save</strong>.</li>
	<li>Go down to the "Calendar Address" and click on the orange XML button.</li>
	<li>Copy the URL that appears in the pop-up and insert it in the Feed URL in the <a title="Enter the XML feed in the Feed URL field" href="edit.php?post_type=rhc_source">Event Sources</a> you are creating.</li>
</ol>
<h3>Show events from a Calendar that is NOT public</h3>
If the calendar you want to show events from is <strong>NOT public</strong> you will need to enter the "Private Address" XML feed into the Feed URL field in the <a title="Enter the XML feed in the Feed URL field" href="edit.php?post_type=rhc_source">Event Sources</a> you are creating.
<ol>
	<li>Go to <a href="https://www.google.com/calendar/render" target="_blank">Google Calendar</a> in order to find the XML feed URL. In the calendar list on the left, click the down-arrow next to the calendar you'd prefer not to share with the public, then select <strong>Share this calendar</strong></li>
	<li>Make sure the "Make this calendar public" box is not checked.</li>
	<li>Finally, when creating events, make sure that either 'default' or 'Private' is selected under Options &gt; Privacy.</li>
	<li>Go down to the "Private Address" and click on the organe XML button.</li>
	<li>Copy the URL that appears in the pop-up and insert it in the Feed URL in the <a title="Enter the XML feed in the Feed URL field" href="edit.php?post_type=rhc_source">Event Sources</a> you are creating.</li>
</ol>";s:8:"location";a:1:{i:0;s:29:"edit.php?post_type=rhc_source";}s:21:"replace_existing_help";s:1:"0";s:9:"help_type";s:3:"tab";}i:13;O:8:"stdClass":5:{s:5:"title";s:16:"General Settings";s:7:"content";s:0:"";s:8:"location";a:0:{}s:21:"replace_existing_help";s:1:"0";s:9:"help_type";s:3:"tab";}i:14;O:8:"stdClass":5:{s:5:"title";s:13:"Add new event";s:7:"content";s:2263:"<h2>Add new event</h2>
Lets create a new event. First we will enter a title. The title of the event will be displayed in the Calendar, Event list or Upcoming Events widget.
<p style="text-align: center;"><img class="aligncenter" style="width: 100%; max-width: 611px; height: auto;" alt="Enter title here" src="{dcurl}enter-title-of-event.png" width="100%" height="95" /></p>

<h3>Enter the event description</h3>
If you have ever used a text editor like Microsoft Word you will feel right at home with the text editing area in WordPress. The buttons at the top of the edit pane allow you to simply format text by highlighting a word or entire phrase and then clicking the Bold, Italic or Strikethrough to apply the formatting to the selected text.

You can easily insert a numbered or bulleted list by clicking the button for the type of list you wish to create and then add list items one at a time and hitting the return key to add each new list item.

You can draw attention to special sections like quotes by using the blockquote button, and of course you can also align text to the left, center or right. Creating links is as easy as highlighting a word or phrase and then clicking the insert/edit link button. Enter the URL to where you wish the user to be taken when they click this link, a title which will provide more information when the user hovers the cursor over the link, and then choose whether you want this link to open in a new window or tab. You can use this method to link to any website, but you can also easily link to existing content on your website, by simply selecting the post or page to link to from the list. When you are finished click add link.

In the content pane you should enter a detailed description of your event. You do not need to enter information like start date, start time, end date, end time and other specific data like address, email and phone no. The start date, start time, end date and end time is added when you add the actual event to the calendar. And the address, email and phone no. is retrieved from the Venue.

You also have the option to add other meta data from the Venue, Organizer or Calendar taxonomies. As well as you can add any number of custom fields. We will get back to that later.";s:8:"location";a:1:{i:0;s:29:"post-new.php?post_type=events";}s:21:"replace_existing_help";s:1:"0";s:9:"help_type";s:3:"tab";}i:15;O:8:"stdClass":5:{s:5:"title";s:17:"How to load Skins";s:7:"content";s:1124:"<h2>How to load Skins for Calendarize it!</h2>
<ol>
	<li>Click on the blue Download button in order to download the skin.</li>
	<li>Go to the CSS Editor in the top toolbar and click on any of the sub-menus in order to launch the CSS Editor.</li>
	<li>Click on the Templates tab and you will see the downloaded skin.  Check the template (skin) you want to load and then click the blue Load button.</li>
</ol>
<p style="text-align: center;"><img class="aligncenter" style="width: 100%; max-width: 337px; height: auto;" alt="Calendarize it! Download Sample Skin" src="{dcurl}calendarize-it-download-sample-skin.png" width="100%" height="248" /></p>
<p style="text-align: center;"><img class="aligncenter" style="width: 100%; max-width: 601px; height: auto;" alt="Calendarize it! CSS Editor Menu" src="{dcurl}calendarize-it-load-css-editor.png" width="100%" height="205" /></p>
<p style="text-align: center;"><img class="aligncenter" style="width: 100%; max-width: 343px; height: auto;" alt="Calendarize it! CSS Editor - Load Sample Skin" src="{dcurl}calendarize-it-load-sample-skin.png" width="100%" height="551" /></p>";s:8:"location";a:1:{i:0;s:6:"rhc-dc";}s:21:"replace_existing_help";s:1:"0";s:9:"help_type";s:3:"tab";}i:16;O:8:"stdClass":5:{s:5:"title";s:22:"Show Meetup.com Events";s:7:"content";s:776:"<h2>Show Meetup.com Events</h2>
The Meetup API provides a simple interface for accessing the Meetup platform. You just need to enter the API Key in the Meetup.com Settings tab in the <a href="edit.php?post_type=events&amp;page=rhc">Options Panel</a>.
<ol>
	<li><a href="http://www.meetup.com/meetup_api/" target="_blank">Meetup.com API page</a> and click on API Key in the top menu.</li>
	<li>Click on the blue locker to reveal your API Key</li>
	<li>Copy the API Key</li>
	<li>Enter the API key in the Meetup.com Settings tab in the <a href="edit.php?post_type=events&amp;page=rhc">Options Panel</a> and click save.</li>
	<li>You are now ready to enter Meetup.com group URLs in the <a href="edit.php?post_type=rhc_source">Event Source</a> you have created.</li>
</ol>";s:8:"location";a:1:{i:0;s:29:"edit.php?post_type=rhc_source";}s:21:"replace_existing_help";s:1:"0";s:9:"help_type";s:3:"tab";}i:17;O:8:"stdClass":5:{s:5:"title";s:21:"Calendarize Shortcode";s:7:"content";s:0:"";s:8:"location";a:0:{}s:21:"replace_existing_help";s:1:"0";s:9:"help_type";s:3:"tab";}i:18;O:8:"stdClass":5:{s:5:"title";s:21:"Add event to Calendar";s:7:"content";s:3523:"<h2>Add event to Calendar</h2>
It is super easy to add your event to the Calendar. Simply click on the date where you want the event to start, and you will see a pop-up. The pop-up has four tabs: Date, Color, Calendar and Repeat.
<h3>Date tab</h3>
By default the event will be set to "All-day", but as soon as you enter a time the "All-day" will be unchecked. You can either enter your event in 12 hour format by using AM and PM or in 24 hour format.  You can configure your default date/time settings in the Options Panel.

In the date tab you also have the option to create recurring events or arbitrary recurring events. By default the event will be non-recurring. You have an extensive amount of options and we will revisit this later.
<p style="text-align: center;"><img class="aligncenter" style="width: 100%; max-width: 658px; height: auto; border: 0px;" alt="Insert event in calendar" src="{dcurl}calendarize-it-insert-event-in-calendar.png" width="100%" height="596" /></p>

<h3>Color tab</h3>
In the Color tab you can set the color for each event individually, and you can set the text color.  This is the color of the event in the main Calendar.  If you click on the Reset settings button you will remove all recurring events, arbitrary repeat events as well as the main event.
<p style="text-align: center;"><img class="aligncenter" style="width: 100%; max-width: 355px; height: auto;" alt="Select Color for Event" src="{dcurl}calendarize-it-add-event-color-tab.png" width="100%" height="414" /></p>

<h3>Calendar tab</h3>
In the Calendar tab you can select the behavior of the link. By default it is set to show the Tooltip when you click an event in the main Calendar. You can also set the link to go directly to the Event Details Page or completely remove the link.

You can also set the target of the link to same window or tab or new window or tab.
<p style="text-align: center;"><img class="aligncenter" style="width: 100%; max-width: 355px; height: auto;" alt="Set target of link" src="{dcurl}calendarize-it-add-event-calendar-tab.png" width="100%" height="364" /></p>

<h3>Repeat tab</h3>
You can easily add arbitrary repeat events by clicking on any date in the calendar. In the Repeat tab you will see a overview of the dates where you have added arbitrary repeated events.

If you want to remove a arbitrary repeat event simply click on the black × and then click Accept.
<p style="text-align: center;"><img class="aligncenter" style="width: 100%; max-width: 353px; height: auto;" alt="Add arbitrary repeat events" src="{dcurl}calendarize-it-add-event-repeat-tab.png" width="100%" height="363" /></p>

<h3>Exclude tab</h3>
After setting up recurring events you can you can choose to exclude specific dates from the recurring pattern.  Lets say you have setup an event to repeat Weekly, but you would like to exclude 2 weeks where the event is not taking place due a holiday.

Once you have selected the dates to exclude you will see them in the Exclude tab. If you want to add them again to the recurring events simply click on the black × and then Accept.
<p style="text-align: center;"><img class="aligncenter" style="width: 100%; max-width: 353px; height: auto;" alt="Exclude specific events from recurring pattern" src="{dcurl}calendarize-it-add-event-exclude-tab.png" width="100%" height="363" /></p>
For more information about <strong>Recurring Events</strong> and <strong>Arbitrary Recurring Events</strong> please refer to the specific topics in the Help section.";s:8:"location";a:1:{i:0;s:29:"post-new.php?post_type=events";}s:21:"replace_existing_help";s:1:"0";s:9:"help_type";s:3:"tab";}i:19;O:8:"stdClass":5:{s:5:"title";s:17:"Insert Shortcodes";s:7:"content";s:1030:"<h2>Insert Shortcodes</h2>
Below we have listed the different shortcodes you can use when showing External Event Sources (feeds) with Calendarize it!.

<h3>Show both events created in Calendarize it! and from External Sources</h3>
The following Shortcode will insert the main calendar and show both events created in Calendarize it! and events from any of your External Sources (Facebook, Google Calendar and Meetup.com).
<p style="padding-left: 20px"><code>&lsqb;calendarizeit&rsqb;</code></p>

<h3>Show only events created in Calendarize it!</h3>
The following Shortcode will insert the main calendar and only show events created in Calendarize it!.
<p style="padding-left: 20px"><code>&lsqb;calendarizeit feed=0&rsqb;</code></p>

<h3>Show only events from External Sources</h3>
The following Shortcode will insert the main calendar and show only events from any of your External Sources (Facebook, Google Calendar and Meetup.com).
<p style="padding-left: 20px"><code>&lsqb;calendarizeit feed=1&rsqb;</code></p>

";s:8:"location";a:1:{i:0;s:29:"edit.php?post_type=rhc_source";}s:21:"replace_existing_help";s:1:"0";s:9:"help_type";s:3:"tab";}i:20;O:8:"stdClass":5:{s:5:"title";s:16:"Date/Time format";s:7:"content";s:0:"";s:8:"location";a:0:{}s:21:"replace_existing_help";s:1:"0";s:9:"help_type";s:3:"tab";}i:21;O:8:"stdClass":5:{s:5:"title";s:14:"Layout Options";s:7:"content";s:1593:"<h2>Layout Options</h2>
With the Layout Options metabox we let you control the layout of the Event Details Page. You have 5 different sections on the Event Details Page that you can turn ON or OFF.
<p style="text-align: center;"><img class="aligncenter" style="width: 100%; max-width: 338px; height: auto; border: 0px;" alt="Layout Options" src="{dcurl}calendarize-it-layout-options.png" width="100%" height="327" /></p>
Below you will see a illustration that shows the location of the 5 different sections on the Event Details Page that you can turn ON or OFF.  No. 1 is the top image.  In the Options menu under Media Settings you can set the size of the source images that is displayed in section 1 and 2. Notice that changing the size of the source image will not affect the size shown on the page. This is controlled by the CSS in the page and the specific layout you select.

Please notice that if you turn OFF no. 2 (Event Details Box) and no. 4 (Venue Details Box)  you will automatically hide no. 3 (Event Details Box Image) and no. 5 (Venue Details Box Map). However you can turn OFF no. 3  and no. 5 individually and then no. 2 and no. 4 will still be visible.
<p style="text-align: center;"><img class="aligncenter" style="width: 100%; max-width: 379px; height: auto; border: 0px;" alt="The 5 sections on the Event details page" src="{dcurl}calendarize-it-page-layout.png" width="100%" height="354" /></p>
In the Event &amp; Venue Details Box Layout tab you can setup the layout of the Event Details Box and the Venue Details Box. And you can add metadata and custom fields.";s:8:"location";a:1:{i:0;s:29:"post-new.php?post_type=events";}s:21:"replace_existing_help";s:1:"0";s:9:"help_type";s:3:"tab";}i:22;O:8:"stdClass":5:{s:5:"title";s:19:"Shortcode Templates";s:7:"content";s:0:"";s:8:"location";a:0:{}s:21:"replace_existing_help";s:1:"0";s:9:"help_type";s:3:"tab";}i:23;O:8:"stdClass":5:{s:5:"title";s:22:"Insert Featured Images";s:7:"content";s:1418:"<h2>Insert Featured Images</h2>
Calendarize it! uses 3 different featured images.
<p style="padding-left: 20px;">? Event Featured Image</p>
<p style="padding-left: 20px;">? Event Page Top Image</p>
<p style="padding-left: 20px;">? Event Detail Box Image</p>
You will find the three metaboxes in the right side of the Add New Event page and Edit Event Page.
<p style="text-align: center;"><img class="aligncenter" style="width: 100%; max-width: 294px; height: auto; border: 0px;" alt="Insert Featured Images" src="{dcurl}calendarize-it-featured-images.png" width="100%" height="372" /></p>
The <strong>Featured Event Image</strong> is the image that will be displayed in the tooltip in the main calendar and in the Event List in the Event Details Box.

The <strong>Event Page Top Image</strong> is the image that will be displayed in the top of the Event Details Page. In the Layout Options metabox you can turn ON or OFF the image.

The <strong>Event Detail Box Image</strong> is the image that will be displayed in the Event Details Box. In the Layout Options metabox you can turn ON or OFF the image.

In the Options menu under Media Settings you can set the size of the source images that is used for each of the Featured Images.  Notice that changing the size of the source image will not affect the size shown on the page. This is controlled by the CSS in the page and the specific layout you select.";s:8:"location";a:1:{i:0;s:29:"post-new.php?post_type=events";}s:21:"replace_existing_help";s:1:"0";s:9:"help_type";s:3:"tab";}i:24;O:8:"stdClass":5:{s:5:"title";s:20:"Default Event Fields";s:7:"content";s:2229:"<h2>Default Event Fields</h2>
When creating an Event you can add Default Fields to the <strong>Detailed Event Box</strong> and the <strong>Detailed Venue Box</strong>. You can save the layouts as default templates for each box. Lets take a look at how to do this.
<p style="text-align: center;"><img class="aligncenter  wp-image-12660" style="width: 100%; max-width: 703px; height: auto;" alt="Calendarize it! - Event &amp; Venue Details Box Layout" src="{dcurl}calendarize-it-event-venue-details-box-layout.png" width="100%" height="903" /></p>

<ol>
	<li>You can select between 1, 2 or 3 column layout (The Event Details Box Image and Venue Details Map does not count as a column. You can disable the Image or Map in the Layout Options Metabox). Your selection is automatically saved.</li>
	<li>When you have selected your layout you can start adding the fields. When you click on one of the tabs: Custom fields, Event info, Venue, Organizer or Calendar a row of the most commonly used fields will appear directly under the tab. You will be able to drag and drop the fields directly into the columns.</li>
	<li>The fields can easily be reorganized with drag and drop.</li>
	<li>The drop down lets you switch between the Event Details Box and the Venue Details Box</li>
	<li>Once you have inserted a field you can open the bar and customize the settings. Like making the field full width or half width. You are also able to change the field type: Custom, Taxonomy, Taxonomy Meta or Post Meta Data.</li>
	<li>When you are done with customizing the Event Details Box and the Venue Details Box you can choose to save the template as a ?Default Template?. This means that ALL other events will use the same template (This will only apply to new events you create).  Please notice that the inserted fields are automatically saved when you publish or update the event. You only need to click on ?Save as default template? if you wish to create a new default template for your events.  You can also reset to the ?Default Template? if you make changes and regret your choice.  In the Options menu under ?Default event fields? you can restore the custom fields to the default layout that is bundled with the plugin.</li>
</ol>";s:8:"location";a:1:{i:0;s:3:"rhc";}s:21:"replace_existing_help";s:1:"0";s:9:"help_type";s:3:"tab";}i:25;O:8:"stdClass":5:{s:5:"title";s:32:"Event & Venue Details Box Layout";s:7:"content";s:2300:"<h2>Event &amp; Venue Details Box Layout</h2>
An important part of the Detailed Event Page is the <strong>Event Details Box</strong> and the <strong>Venue Details Box</strong>. You can setup a default template for each of them or you can create individual layouts per event. Lets take a look at how to do this.
<p style="text-align: center;"><img class="aligncenter" style="width: 100%; max-width: 703px; height: auto;" alt="Calendarize it! - Event &amp; Venue Details Box Layout" src="{dcurl}calendarize-it-event-venue-details-box-layout.png" width="100%" height="903" /></p>

<ol>
	<li><span style="line-height: 14px;">You can select between 1, 2 or 3 column layout (The Event Details Box Image and Venue Details Map does not count as a column. You can disable the Image or Map in the Layout Options Metabox). Your selection is automatically saved.</span></li>
	<li>When you have selected your layout you can start adding the fields. When you click on one of the tabs: Custom fields, Event info, Venue, Organizer or Calendar a row of the most commonly used fields will appear directly under the tab. You will be able to drag and drop the fields directly into the columns.</li>
	<li>The fields can easily be reorganized with drag and drop.</li>
	<li>The drop down lets you switch between the Event Details Box and the Venue Details Box</li>
	<li>Once you have inserted a field you can open the bar and customize the settings. Like making the field full width or half width. You are also able to change the field type: Custom, Taxonomy, Taxonomy Meta or Post Meta Data.</li>
	<li>When you are done with customizing the Event Details Box and the Venue Details Box you can choose to save the template as a "Default Template". This means that ALL other events will use the same template (This will only apply to new events you create).  Please notice that the inserted fields are automatically saved when you publish or update the event. You only need to click on "Save as default template" if you wish to create a new default template for your events.  You can also reset to the "Default Template" if you make changes and regret your choice.  In the Options menu under "Default event fields" you can restore the custom fields to the default layout that is bundled with the plugin.</li>
</ol>";s:8:"location";a:1:{i:0;s:29:"post-new.php?post_type=events";}s:21:"replace_existing_help";s:1:"0";s:9:"help_type";s:3:"tab";}i:26;O:8:"stdClass":5:{s:5:"title";s:18:"Permalink Settings";s:7:"content";s:1426:"<h2>Permalink Settings</h2>
Permalinks are the permanent URLs to your individual events, venues, organizers, calendar categories and calendar page.

A permalink is used by other people to link to your events, venues, organizers, calendar categories and calendar page, or how you might send a link to someone in an email message. The URL to each event, venue, organizer and calendar should be permanent, and never change - hence <em>perma</em>link.

If you use choose "Pretty Permalinks" in the <a href="options-permalink.php">permalinks</a> menu under Settings you will be able to modify the permalink settings for Calendarize it! Please notice that you don't need to use the Calendarize it! Permalink Settings unless you want to change the URLs.
<h3>Forced rewrite rules</h3>
If you find that the permalinks for some reason is not working you can try and select the "<strong>Forced rewrite rules</strong>". This will attempt an alternative method for adding the rewrite rules.
<h3>Enable calendar end point</h3>
If permalinks are active, choose yes to be able to append /calendar/ to the URL in order to load a calendar for that particular post type, example yourdomain.com/events/calendar/ will display the calendar without the need to setup the shortcode on a page.

If you have a page with permalink<strong> /events/calendar/</strong> you may need to disable this, as it takes precedence over the page permlink.";s:8:"location";a:1:{i:0;s:3:"rhc";}s:21:"replace_existing_help";s:1:"0";s:9:"help_type";s:3:"tab";}i:27;O:8:"stdClass":5:{s:5:"title";s:31:"Calendar, Organizers and Venues";s:7:"content";s:1602:"<h2>Calendar, Organizers and Venues</h2>
There are three default Taxonomies in Calendarize it!: Calendar, Organizers and Venues. You will find the three metaboxes in the right side.  The taxonomies are used in the main calendar filter.

You can easily add Calendars, Organizers and Venues directly in the metaboxes.
<h3>Edit Organizer Details</h3>
In order to edit the details of the Organizers you will need to go to <a title="Edit Organizer Details" href="edit-tags.php?taxonomy=organizer&amp;post_type=events">Organizer</a> in the Calendarize it menu. You can add the following information to the Organizer:
<ul>
	<liDescription (will show in the Organizer page)</span></li>
	<li>Phone</span></li>
	<li>Email</span></li>
	<li>Website (URL)</span></li>
	<li>Image</span></li>
</ul>

<h3>Edit Venue Details</h3>
In order to get the Venue details to show on the Venue Page or in the Detailed Venue Box you will need to go to <a title="Edit Venue Details" href="edit-tags.php?taxonomy=venue&amp;post_type=events">Venues</a> in the Calendarize it menu and add the details.  You can add the following information:
<ul>
	<li>Description (will be shown in the Venue Details Box)</span></li>
	<li>Address</span></li>
	<li>City</span></li>
	<li>State/Province/Other</span></li>
	<li>Postal Code</span></li>
	<li>Country</span></li>
	<li>Google Address</span></li>
	<li>Latitude</span></li>
	<li>Longitude</span></li>
	<li>Zoom</span></li>
	<li>Text for info windows</span></li>
	<li>Phone</span></li>
	<li>Email</span></li>
	<li>Website</span></li>
	<li>Image</span></li>
</ul>";s:8:"location";a:1:{i:0;s:29:"post-new.php?post_type=events";}s:21:"replace_existing_help";s:1:"0";s:9:"help_type";s:3:"tab";}i:28;O:8:"stdClass":5:{s:5:"title";s:17:"Custom Post Types";s:7:"content";s:487:"<h2>Custom Post Types</h2>
The Events in Calendarize it! are Custom Post Types and by default the only type that will be displayed in your calendar.  If you want to enable the Calendarize it! metaboxes for other Custom Post Types just check the appropriate boxes.

You can also choose to automatically show ALL post types in the calendar.  Please notice that enabling this feature you will still need to add the date/time for when your event (post type) should appear in the calendar.";s:8:"location";a:1:{i:0;s:3:"rhc";}s:21:"replace_existing_help";s:1:"0";s:9:"help_type";s:3:"tab";}i:29;O:8:"stdClass":5:{s:5:"title";s:23:"Add Excerpt for tooltip";s:7:"content";s:443:"<h2>Add Excerpt for Tooltip</h2>
You can add short teaser for your event in the tooltip on the main calendar by adding text to the Excerpt metabox when you create the event. You can use HTML tags in the Excerpt metabox.
<p style="text-align: center;"><img class="aligncenter" style="width: 100%; max-width: 712px; height: auto;" alt="Calendarize it - Insert a Excerpt" src="{dcurl}calendarize-it-excerpt.png" width="100%" height="179" /></p>";s:8:"location";a:1:{i:0;s:29:"post-new.php?post_type=events";}s:21:"replace_existing_help";s:1:"0";s:9:"help_type";s:3:"tab";}i:30;O:8:"stdClass":5:{s:5:"title";s:15:"Troubleshooting";s:7:"content";s:1426:"<h2>Troubleshooting</h2>
The troubleshooting tab provides solutions for common compatibility problems. If the calendar doesn't display in your website after following the instructions under Get Started please follow these simple steps:
<ol>
	<li>Try disabling all plugins except Calendarize it! for WordPress.</li>
	<li>Does the calendar now show up in your website - YES or NO ?</li>
	<li>If <strong>YES </strong>then we know that the problem is due to a conflict with another plugin. Start activating one plugin at a time, and each time you activate another plugin reload the page where you inserted the calendar shortcode.  Make sure that the calendar still displays every time you activate another plugin and reload. Once the calendar fails loading remember which plugin you last activated. Then this is the plugin causing the conflict. Either find another plugin or contact us through our HelpDesk and submit a ticket.</li>
	<li>If <strong>NO </strong>then we know that the problem is most likely an incompatibility with your Theme.  To make sure that is the case you can try and view your website with the default WordPress theme. If the calendar shows then we know for sure it is due to incompatibility with your theme.</li>
	<li>You can then try switching the "Ignore WordPress Standard" from NO to YES and see if that makes a difference. If this doesn't help please contact us through our HelpDesk.</li>
</ol>";s:8:"location";a:1:{i:0;s:3:"rhc";}s:21:"replace_existing_help";s:1:"0";s:9:"help_type";s:3:"tab";}i:31;O:8:"stdClass":5:{s:5:"title";s:16:"Recurring Events";s:7:"content";s:3547:"<h2>Recurring Events</h2>
Calendarize it! has an extensive interface for creating recurring events.  You can choose between five basic options: <strong>Every day</strong>, <strong>Every week</strong>, <strong>Every 2 weeks</strong>, <strong>Every month</strong> and <strong>Every year</strong>. And then we have one advanced called <strong>More options</strong>.

Each of these options has several settings that can be tweaked to you needs.  We will go through the basic below.
<p style="text-align: center;"><img class="aligncenter" style="width: 100%; max-width: 353px; height: auto; border: 0px;" alt="Calendarize it! - Recurring Events" src="{dcurl}calendarize-it-recurring-events-never.png" width="100%" height="342" /></p>

<h3>Every day, Every week, Every 2 weeks, Every month and Every year</h3>
The first five options are pretty straight forward. When you select one of them you first need to decide whether the recurring event should end <strong>by date</strong>, <strong>by count</strong> or <strong>never</strong>.  If you select by date you will need to select the date in a calendar that will appear below the drop down. If you select by count you need to enter a number that represents the number of times you want the recurring event to occur.  And the last option is never, which will make the recurring event repeat forever.
<p style="text-align: center;"><img class="aligncenter" style="width: 100%; max-width: 353px; height: auto; border: 0px;" alt="Calendarize it! - Recurring Events - Every day" src="{dcurl}calendarize-it-recurring-events-every-day.png" width="353" height="342" /></p>

<h3>More options</h3>
If you select the More options you will see a drop down where you can select: <strong>minute(s)</strong>, <strong>hour(s)</strong>, <strong>day(s)</strong>, <strong>week(s)</strong>, <strong>month(s)</strong> and <strong>year(s)</strong>.  And you get a field where you can enter the frequency of the repeat pattern you are creating.

E.g. if you want the recurring event to occur every three weeks you enter the number <strong>3</strong> in the field and select <strong>week(s)</strong> from the the drop down.
<p style="text-align: center;"><img class="aligncenter" style="width: 100%; max-width: 353px; height: auto; border: 0px;" alt="Calendarize it! - Recurring Events - More Options" src="{dcurl}calendarize-it-recurring-events-more-options.png" width="100%" height="387" /></p>
You can then select which day(s) of the week you want the recurring event to occur and then select when you want it to end (never, by date or by count).  Or you can click <strong>Several times</strong> after you selected the week day(s) and you will be presented for the option to select the time of the day (it is possible to select multiple hours and minutes of the day).
<p style="text-align: center;"><img class="aligncenter" style="width: 100%; max-width: 353px; height: auto; border: 0px;" alt="Calendarize it! - Recurring Events - More Options" src="{dcurl}calendarize-it-recurring-events-more-options-week.png" width="100%" height="682" /></p>
If you select any of the other repeat patterns under More options the concept is similar as described above, but with minor variations.

Once you have created your recurring event pattern you can still exclude specific dates by clicking on the Exclude tab while you are on the date you want to exclude.  And you can add arbitrary recurring events by clicking on any date.

This gives you an almost endless number of possibilities to create recurring events.";s:8:"location";a:1:{i:0;s:29:"post-new.php?post_type=events";}s:21:"replace_existing_help";s:1:"0";s:9:"help_type";s:3:"tab";}i:32;O:8:"stdClass":5:{s:5:"title";s:22:"Calendarize Taxonomies";s:7:"content";s:0:"";s:8:"location";a:0:{}s:21:"replace_existing_help";s:1:"0";s:9:"help_type";s:3:"tab";}i:33;O:8:"stdClass":5:{s:5:"title";s:26:"Arbitrary Recurring Events";s:7:"content";s:891:"<h2>Arbitrary Recurring Events</h2>
In addition to creating recurring events you can set arbitrary repeat dates. After adding the initial event simply click on any date in order to add the arbitrary repeat date.
<p style="text-align: center;"><img class="aligncenter  wp-image-12609" style="width: 100%; max-width: 353px; height: auto; border: 0px;" alt="Calendarize it! - Arbitrary Recurring Events" src="{dcurl}calendarize-it-arbitrary-recurring-events.png" width="100%" height="341" /></p>
If your initial event is not a full day event you will be able to enter a different start time for your arbitrary recurring event.
<p style="text-align: center;"><img class="aligncenter" style="width: 100%; max-width: 353px; height: auto; border: 0px;" alt="Calendarize it! - Arbitrary Recurring Event" src="{dcurl}calendarize-it-arbitrart-recurring-event2.png" width="100%" height="214" /></p>";s:8:"location";a:1:{i:0;s:29:"post-new.php?post_type=events";}s:21:"replace_existing_help";s:1:"0";s:9:"help_type";s:3:"tab";}i:34;O:8:"stdClass":5:{s:5:"title";s:7:"Licence";s:7:"content";s:930:"<h2>Enter your License Key and get automatic updates</h2>
If you enter your License Key also known as the Item Purchase Code in the License tab in the Options Panel you will be able to download updates for Calendarize it! directly from within your website administration. And you will get access to <a href="edit.php?post_type=events&amp;page=rhc-dc">Downloads</a> where you will find Free Content and Add-ons.
<h3>How do I find the License key?</h3>
<ol>
	<li>Go to Codecanyon.net and sign in to your account.</li>
	<li>Click on the Downloads tab</li>
	<li>Find Calendarize it! among the items you have purchased</li>
	<li>Click on the Download button and then select "License Certificate" from the drop down menu</li>
	<li>Open the text file that you have downloaded. Copy the "License Key" (Item Purchase Code) from inside the text document, and paste it in to the License Key field and press "Add License".</li>
</ol>";s:8:"location";a:1:{i:0;s:3:"rhc";}s:21:"replace_existing_help";s:1:"0";s:9:"help_type";s:3:"tab";}i:35;O:8:"stdClass":5:{s:5:"title";s:24:"Add links to the sidebar";s:7:"content";s:135:"Do you need help?

<a title="Visit our HelpDesk" href="http://support.righthere.com" target="_blank">Visit our HelpDesk</a>

&nbsp;";s:8:"location";a:6:{i:0;s:25:"edit.php?post_type=events";i:1;s:29:"post-new.php?post_type=events";i:2;s:48:"edit-tags.php?taxonomy=calendar&post_type=events";i:3;s:49:"edit-tags.php?taxonomy=organizer&post_type=events";i:4;s:45:"edit-tags.php?taxonomy=venue&post_type=events";i:5;s:3:"rhc";}s:21:"replace_existing_help";s:1:"0";s:9:"help_type";s:7:"sidebar";}}
EOT;

?>