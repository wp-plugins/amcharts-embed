=== amCharts Embed ===
Contributors: ramiy
Tags: amCharts, amMap, charts, map, oEmbed
Requires at least: 3.5
Tested up to: 4.2
Stable tag: 1.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Embed interactive charts and map from amCharts.com into your WordPress site

== Description ==

[AmCharts](https://www.amcharts.com) is a set of stunningly charts for websites and web-based products. It's an advanced charting library that will suit any data visualization need. You can download the complete library or use the [Live Editor](https://live.amcharts.com) to make your charts online.

Using the [Live Editor](https://live.amcharts.com) you can [create](https://live.amcharts.com/new/) beautiful interactive charts with a click of a few buttons. No development knowledge required. Just use the predefined chart templates, add your data and customize the appearance of the chart page, save the chart and share the result with the world.

Using "amCharts Embed" WordPress plugin you can embed charts and maps, created by "amCharts Live Editor", into your WordPress site using nothing but the URL. Just copy the chart URL and paste it to the post text editor. Then simply click over to the visual editor to confirm that it loads properly.

== Installation ==

= Installation =
1. In your WordPress Dashboard go to "Plugins" -> "Add Plugin".
2. Search for "amCharts Embed".
3. Install the plugin by pressing the "Install" button.
4. Activate the plugin by pressing the "Activate" button.

= Updating =
* Use WordPress automatic updates to upgrade to the latest version. Ensure to backup your site just in case.

= Minimum Requirements =
* WordPress version 3.5 or greater.
* PHP version 5.2.4 or greater.
* MySQL version 5.0 or greater.

= Recommended  Requirements =
* The latest WordPress version.
* PHP version 5.4 or greater.
* MySQL version 5.5 or greater.

== Frequently Asked Questions ==

= How do I embed charts from [live.amcharts.com](https://live.amcharts.com)? =

With this plugin you can use the item URL to embed your charts, just paste the chart URL into your post editor:
`https://live.amcharts.com/NjEwN/`

= How do I set custom dimentions to my chart? =

In wordpress 4.2 you can double click the embedded chart and set max `width` and max `height` dimentions. It will add the WordPress `[embed]` shortcode:
`[embed width="600" height="400"]https://live.amcharts.com/NjEwN/[/embed]`

**Note:** Doing it the WordPress way, using the `[embed]` shortcode, is backwards and forward compatible, and it works  with all the themes.

== Changelog ==

= 1.0 =
* Initial release
* Register oEmbed provider.
