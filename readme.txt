=== WP isAdmin ===
Contributors: blaine-moore
Donate link: https://www.charitynavigator.org/index.cfm?bay=search.summary&orgid=7614
Tags: shortcode
Requires at least: 4.7
Tested up to: 6.0.0
Stable tag: 1.0
Requires PHP: 7.0
License: GPLv3
License URI: https://www.gnu.org/licenses/gpl-3.0.html

This plugin provides provides a simple short code to add or hide custom content to your posts and pages based on whether a user is an administrator (or other role) or not.

== Description ==

This plugin provides provides a simple short code to add or hide custom content to your posts and pages based on whether a user is an administrator (or other role) or not.

This started as a way around having an automatic redirect if somebody belonged to a specific WishListMember membership level but not wanting to redirect _off_ of the page 
if I was an admin (who always has access to all membership levels.)

== Frequently Asked Questions ==

= What shortcodes are available? =

[isAdmin][/isAdmin] and [isNotAdmin][/isNotAdmin] are both supported, and will only show or hide the content (respectively) if the user is logged in and has an administrator 
role (by default).

= Can I specify other roles than just the administrator role? =

Yes, you can set the *role* or *roles* attribute. So if you'd like content that can only be seen by users with the "editor" role, you would use: [isAdmin roles="editor"][/isAdmin].

= Can I specify more than one role? =

Yes, just provide a comma-separated list to the *roles* attribute. For example: [isAdmin roles="editor,administrator"][/isAdmin]

= What is the difference between the *role* and *roles* attributes? =

There is no difference; both are available as a convenience as I expected that if I wanted to change it I wouldn't remember if I needed it to be plural or not and it would seem 
odd to specify a plural attribute for a singular condition (and vice versa.) Basically, choose one or the other (if you want something other than checking for administrator) and
it will work as expected. If you specify both, then the *roles* attribute takes precedence unless you set it to the default, in which case it will use the *role* attribute.

== Changelog ==

= 1.0.1 (2020-09-17)=
* Initial Version

== Upgrade Notice ==

= 1.0.1 =
This is the initial version. You need this for any functionality at all.

== Screenshots ==

1. A simple example for how to use the shortcodes.
2. An example that includes a javascript redirect for WishListMember private tags, which still allows the admin user to stay on the page.