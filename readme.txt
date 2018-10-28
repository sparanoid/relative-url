=== Relative URL ===
Contributors: Sparanoid
Donate link: https://sparanoid.com/donate/
Tags: admin, administration, comment, comments, content, contents, excerpt, excerpts, feed, feeds, html, multisite, page, pages, plugin, plugins, post, posts, template, templates, text, title, wp_make_link_relative, widget, widgets, wpmu, writing
Requires at least: 2.1.0
Tested up to: 5.0
Stable tag: 0.1.7
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Relative URL applies wp_make_link_relative function to links to convert them to relative URLs.

== Description ==

Relative URL applies the `wp_make_link_relative` function to links (posts, categories, pages, etc.) to convert them to relative URLs. Useful for developers when debugging local WordPress instance on a mobile device (iPad, iPhone, etc.).

**Notice**: This plugin SHOULD be used for local development only. I haven't tested on a production environment; it **may** work with some issues, like unwanted URLs in RSS feed or sharing URLs are replaced with relative URLs, etc.

More information please visit my [site](https://sparanoid.com/work/relative-url/).

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

Then after activating this plugin, you can simply access your local instance using `http://10.0.1.5:8888/wp/` on your iPad or other mobile devices without having styles and navigation issue.

== Installation ==

WordPress (Also works on multisite enabled instance):

1. Upload the extracted files to the `/wp-content/plugins/` directory, or just install this plugin from your WordPress backend.
2. In 'Plugins' page, choose 'Activate'

== Frequently Asked Questions ==

= What if I deactivate this plugin? =

The URLs will be changed back to absolute URLs again, there's no database writes with this plugin.

= Why this plugin is not recommend for production environment? =

URLs in RSS feed are also replaced to relative URLs with this plugin, this could causes some issues for RSS readers that they will be confused for URLs without host. Shared URLs (ie Jetpack Sharing module) are also replaced to related URLs, Twitter, Facebook or other social sites won't treat them as valid URLs.

== Upgrade Notice ==

= 0.1.7 =
* Compatibility check for 5.0, nothing new, just bump version to tell everyone this plugin still works.

= 0.1.6 =
* Fix ob_end_flush errors

= 0.1.5 =
* Use buffer method again, it's better with less issues since it mainly works for development environment.

= 0.1.4 =
* Compatibility check for 4.6 and 4.7, nothing new, just bump version to tell everyone this plugin still works.

= 0.1.3 =
* Compatibility check for 4.5, nothing new, just bump version to tell everyone this plugin still works.

= 0.1.2 =
* Fix: reverted back to original method, sorry for the inconvenience.

= 0.1.1 =
* Fix: missing URL for inline sccripts

= 0.1.0 =
* Completely rewrite it from the ground up, now EVERY links, include the ones in your dashboard will be replaced with Relative URLs!

= 0.0.13 =
* Compatibility check for 4.4, nothing new, just bump version to tell everyone this plugin still works.

= 0.0.12 =
* Fix PHP error with latest WordPress 4.3

= 0.0.11 =
* External resources no longer processed.
* Compatibility check for 4.2.2

= 0.0.10 =
* Compatibility check for 4.1 and 4.1 alpha, nothing new, just bump version to tell everyone this plugin still works.

= 0.0.9 =
* Update readme

= 0.0.8 =
* Compatibility check for 3.7, 3.8, and 3.9 alpha, nothing new, just bump version to tell everyone this plugin still works.

= 0.0.7 =
* Compatibility check for 3.6, nothing new, just bump version to tell everyone this plugin still works.

= 0.0.6 =
* Update donate link, If you like this plugin, please consider buying me a cup of coffee.

= 0.0.5 =
* Update plugin description and page design on sparanoid.com, check it out: http://sparanoid.com/work/relative-url/ props @lianghai

= 0.0.4 =
* Update description, props @lianghai

= 0.0.3 =
* Compatibility check for 3.5, nothing new, just bump version to tell everyone this plugin still works.

= 0.0.2 =
* Moving plugin development repo from WordPress.org to GitHub. You can find the new repo at https://github.com/sparanoid/relative-url

= 0.0.1 =
* First release

== Changelog ==

= 0.1.7 =
* Compatibility check for 5.0, nothing new, just bump version to tell everyone this plugin still works.

= 0.1.6 =
* Fix ob_end_flush errors

= 0.1.5 =
* Use buffer method again, it's better with less issues since it mainly works for development environment.

= 0.1.4 =
* Compatibility check for 4.6 and 4.7, nothing new, just bump version to tell everyone this plugin still works.

= 0.1.3 =
* Compatibility check for 4.5, nothing new, just bump version to tell everyone this plugin still works.

= 0.1.2 =
* Fix: reverted back to original method, sorry for the inconvenience.

= 0.1.1 =
* Fix: missing URL for inline sccripts

= 0.1.0 =
* Completely rewrite it from the ground up, now EVERY links, include the ones in your dashboard will be replaced with Relative URLs!

= 0.0.13 =
* Compatibility check for 4.4, nothing new, just bump version to tell everyone this plugin still works.

= 0.0.12 =
* Fix PHP error with latest WordPress 4.3

= 0.0.11 =
* External resources no longer processed.
* Compatibility check for 4.2.2

= 0.0.10 =
* Compatibility check for 4.1 and 4.1 alpha, nothing new, just bump version to tell everyone this plugin still works.

= 0.0.9 =
* Update readme

= 0.0.8 =
* Compatibility check for 3.7, 3.8, and 3.9 alpha, nothing new, just bump version to tell everyone this plugin still works.

= 0.0.7 =
* Compatibility check for 3.6, nothing new, just bump version to tell everyone this plugin still works.

= 0.0.6 =
* Update donate link, If you like this plugin, please consider buying me a cup of coffee.

= 0.0.5 =
* Update plugin description and page design on sparanoid.com, check it out: http://sparanoid.com/work/relative-url/ props @lianghai

= 0.0.4 =
* Update description, props @lianghai

= 0.0.3 =
* Compatibility check for 3.5, nothing new, just bump version to tell everyone this plugin still works.

= 0.0.2 =
* Moving plugin development repo from WordPress.org to GitHub. You can find the new repo at https://github.com/sparanoid/relative-url

= 0.0.1 =
* First release
