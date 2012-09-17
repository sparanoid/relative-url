=== Relative URL ===
Contributors: Sparanoid
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_xclick&business=VJRCEYRS8GTYE&lc=C2&item_name=Plugin%20Donation&button_subtype=services&currency_code=USD&bn=PP%2dBuyNowBF%3abtn_buynowCC_LG%2egif%3aNonHosted
Tags: admin, administration, comment, comments, content, contents, excerpt, excerpts, feed, feeds, html, multisite, page, pages, plugin, plugins, post, posts, template, templates, text, title, wp_make_link_relative, widget, widgets, wpmu, writing
Requires at least: 2.1.0
Tested up to: 3.4
Stable tag: 0.0.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

A plugin applies wp_make_link_relative function to links to convert them to relative URLs.

== Description ==

A plugin applies `wp_make_link_relative` function to links (posts, categories, pages and etc.) to convert them to relative URLs. Useful for developers when debugging local WordPress instance on a mobile device (iPad. iPhone, etc.).

For example:

`http://localhost:8080/wp/`

Will be converted to:

`/wp/`

And..

`http://localhost:8080/wp/2012/09/01/hello-world/`

Will be converted to:

`/wp/2012/09/01/hello-world/`

And..

`http://localhost:8080/wp/wp-content/themes/twentyeleven/style.css`

Will be converted to:

`/wp/wp-content/themes/twentyeleven/style.css`

Then after activating this plugin, you can simply access your locsl instance using `http://192.168.0.1:8080/wp/` on your iPad or other mobile devices without having styles and navigation issue.

**Notice**: This plugin is mainly used for local development. Haven't tested on a production environment, but it should work, no harm to your sever.

== Installation ==

WordPress (Also works on multisite enabled instance):

1. Upload the extracted files to the `/wp-content/plugins/` directory, or just install this plugin from your WordPress backend.
2. In 'Plugins' page, choose 'Activate'

== Upgrade Notice ==

= 0.0.1 =
* First release

== Changelog ==

= 0.0.1 =
* First release