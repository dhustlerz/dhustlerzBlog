=== Google Publisher Plugin (beta) ===
Contributors: google
Tags: adsense, google adsense, adsense plugin, ads, advertising, google ads,  advertisement, advertising, google
Requires at least: 3.5
Tested up to: 4.0
Stable tag: trunk
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

The official Google Publisher Plugin for AdSense, written by Google. Supported products include AdSense and Webmaster Tools.

== Description ==

The Google Publisher Plugin enables you to easily use Google's products - including Webmaster Tools - with your WordPress site.

To insert AdSense ads without the plugin would first involve generating the AdSense snippet and then pasting the Adsense snippet into either the text of the site or directly into the PHP. This plugin lets you place AdSense ads using a simple point-and-click UI. Google automatically determines potential placements for AdSense ads, suggests an initial ad layout, and gives you control over the placement of ads on your site.

This version of the Google Publisher Plugin allows you to:

* Easily add AdSense ads to your site to make money from advertising.
* **NEW** [Manually insert ads](https://support.google.com/adsense/answer/6051417?hl=en&ref_topic=3380274) in locations that you determine yourself. This gives you all the power of manual insertion of snippets while also being able to use the plugin’s great UI. You get full control plus point-and-click.
* **NEW** [Exclude pages](https://support.google.com/adsense/answer/6023216#disable) from having ads on them.
* Verify your site with Webmaster Tools with just one click.
* Manage your ads quickly and easily through a point-and-click interface.

[Visit Google Help Center](https://support.google.com/adsense/answer/3380626) for more information.

== Installation ==

Also see the [AdSense help documentation on installing the Google Publisher Plugin](https://support.google.com/adsense/answer/3380627).

After installation, you can [set up the plugin]((https://support.google.com/adsense/answer/answer.py?answer=3380277)).

Make sure you meet the minimum system requirements.

* PHP version 5.2.0 or greater.
* WordPress version 3.5 or greater.
* Ability to install third-party WordPress plugins.
* Site hosted outside WordPress.com. WordPress.com [does not allow](http://en.support.wordpress.com/plugins/) this plugin on its hosted sites.

Sign in to your WordPress account and visit the site admin page. You can quickly view this page if you click the WordPress icon in the upper left corner of your WordPress site. Note that you must have permission as an admin of your site to install plugins. If you need help, try [WordPress support](http://wordpress.org/support/).

In the site admin sidebar, click Plugins and select Add New. Enter “Google Publisher Plugin” in the search bar and click Search Plugins.

Find the Google Publisher Plugin in the list of results and click the Install Now link.

At this point, WordPress should automatically install the plugin.

If you have any trouble with automatic installation, you can try it manually. To do this:

* Visit the [WordPress plugin directory](http://wordpress.org/plugins/google-publisher/) page for the Google Publisher Plugin. If you don't see the plugin page, enter "Google Publisher Plugin" in the Search Plugins box on the left and click Search.
* Download the plugin. It should come in the form of a .zip file.
* Sign in to your WordPress account and visit the site admin page.
* In the site admin sidebar, click Plugins and select Add New.
* Select Upload near the top of the plugins page. Click Choose file and upload your .zip file. Then click Install Now.

Move on to [plugin setup](https://support.google.com/adsense/answer/answer.py?answer=3380277).

== Frequently Asked Questions ==

= Why is this marked "beta"? =

We are still fine-tuning the plugin to make sure it works well on the many WordPress sites out there. We’d love for you to try it and give us feedback on how well it works for you and your site.

= Is this an official Google plugin? =

Yes, this plugin is developed and supported by Google. [Visit Google Help Center](https://support.google.com/adsense/answer/3380626) for more information.

= Can I use the Google Publisher Plugin on WordPress.com? =

At this time, the Google Publisher Plugin cannot be used on WordPress.com. WordPress.com [does not allow](http://en.support.wordpress.com/plugins/) this plugin on its hosted sites.

= The plugin didn’t find a location where I want to put an ad. How do I insert AdSense ads in those locations? =

You can now [manually insert ads](https://support.google.com/adsense/answer/6051417?hl=en&ref_topic=3380274) in locations that you determine yourself. This is an easy-to-use compromise between manual insertion of snippets yourself and the plugin’s easy-to-use UI. You get full control plus point-and-click. See the [help documentation](https://support.google.com/adsense/answer/6051417?hl=en&ref_topic=3380274) for more information.

= Why should I use this plugin as opposed to others? =

Google officially supports this plugin and any other method of putting the AdSense snippet on your page. This is the only plugin that delivers the Google-suggested ad experience for your site.

All plugins and placements must still adhere to the [AdSense Terms and Conditions](https://www.google.com/adsense/localized-terms) and it is the responsibility of the publisher to ensure that any tools used for AdSense obey those terms and conditions. It is usually up to the publisher to determine if your content violates ad policy or a placement is deceptive.

== Screenshots ==

1. Manage your AdSense account and access Webmaster Tools from the plugin.
2. Click to add advertisements to your site. Create different placements for each page template.
3. View the layout for each page, with advertisement areas visualized next to your content flow.
4. Preview example advertisements alongside your content.

== Changelog ==

= 19 Aug 2014, Plugin version 0.3.0  =
* [Exclude pages](https://support.google.com/adsense/answer/6023216#disable) from having ads on them.
* Support to deliver ad layout updates from Google, for example, for fixing broken layouts.

The following changes do not require a plugin update, and have been fixed server-side.

* Ad placements are automatically populated for each template for new users.
* [Manually insert ads](https://support.google.com/adsense/answer/6051417?hl=en&ref_topic=3380274) in locations that you determine yourself. This gives you all the power of manually adding ad slots yet still taking advantage of ease of use of the the plugin.

= 27 May 2014, Plugin version 0.2.0 =
* A notification will now be shown on the WordPress dashboard when one or more ads are not appearing correctly (for example, because the theme has changed). Note that these notifications are currently only updated once a day.
* Ads will now only be shown on the theme they were placed on. For example, when a separate theme is used for mobile devices, ads will no longer be shown on that theme.
* Fixed an incompatibility with a number of other plugins.
* Extended the nonce lifetime, which should reduce the number of failed saves.

= 1 May 2014 =
The following changes do not require a plugin update, and were fixed server-side.

 * Ad units created by the plugin now have understandable names in AdSense, such as "Front page - 1 (yoursite.com)".
 * Added support for placing ads on "Tags" and "Category" pages.
 * Fixed miscellaneous errors when computing possible placements.
 * Improved error messages for various failures.

= 30 Jan 2014 =
The following changes do not require a plugin update, and were fixed server-side.

* No longer show dynamicgoogletags.update() in post content if the theme incorrectly strips HTML.
* Added support for sites with mixed case URLs.
* Fixed bug related to preview of vertical ads.
* Improved margins on ad placements.
* Inverted marker for placement at the top of the page to point at the correct location for placement.
* Added support for sites that use HTTPS but are administered over HTTP.
* Update the view, specifically ad sizes, when user resizes the window in preview mode.
* Fixed miscellaneous errors when computing possible placements.
* Localized AdSense help center pages for the plugin.

= 15 Jan 2014, Plugin version 0.1.0 =
* Initial release.

== Terms of service ==

The plugin source code is GPL, however use of Google Services through the plugin is governed by [Google's Terms of Service](http://www.google.com/policies/terms/) and [Privacy Policy](http://www.google.com/policies/privacy/). For products and services that can be used with the Google Publisher Plugin, such as AdSense, additional Terms of Service may also apply.

