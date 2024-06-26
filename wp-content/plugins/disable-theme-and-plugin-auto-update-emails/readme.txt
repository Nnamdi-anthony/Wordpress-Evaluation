=== Disable Theme and Plugin Auto-Update Emails ===
Contributors: KZeni
Donate link: https://www.paypal.me/KZeni
License: GPLv3
Tags: plugin update, theme update, notifications, email, updates, disable
Stable tag: 2.0.5
Requires at least: 5.5
Tested up to: 6.4
Requires PHP: 5.4

Disables the default notification emails sent by a site after an automatic theme and/or plugin update. Simply activate the plugin to disable these email notifications (allows failure notices through unless setting is enabled to disable these as well).

== Description ==

Disables the default notification emails sent by a site after an automatic theme and/or plugin update. Simply activate the plugin to disable these email notifications (allows failure notices through unless setting is enabled to disable these as well).

This is a simple & lightweight plugin that simply uses the official filters made available as of WordPress 5.5 to disable these email notifications upon activation. It does let update failure notifications through by default, but the Settings => General page has a setting to disable these as well.

Check things out on GitHub at [https://github.com/KZeni/Disable-WordPress-Theme-and-Plugin-Auto-Update-Emails](https://github.com/KZeni/Disable-WordPress-Theme-and-Plugin-Auto-Update-Emails)

== Frequently Asked Questions ==

= What else needs to be done? Is there a settings screen to enable/configure it? =

You can simply enable this to disable these notifications. Deactivating the plugin then has it resume default behavior. A simple implementation that's quick & easy to utilize. Consider enabling/disabling the plugin the setting for whether or not these email notifications are disabled or not.

Also, this does let notifications about failed updates to be delivered by default as they can be important. There is a "Disable failed update email notifications" setting on Settings => General to disable update failure notifications as well, if/when there's a need for it.

= What about update failure notifications? =

By default, notifications about failed updates will still be delivered, but there is a "Disable failed update email notifications" setting on Settings => General to disable update failure notifications as well, if/when there's a need for it.

= Looking for WordPress core version update email notifications instead/as well? =

Try out [Disable WordPress Core Update Email](https://wordpress.org/plugins/disable-core-update-email/) (or similar) as that tackles that separate group of emails in this same lightweight fashion (use official WordPress filters to simply disable the email[s] as described.) These two plugins can work together to remove all these notifications (hence why this doesn't also remove core update notifications). Meanwhile, one can use one or the other if a specific set of emails is desired to be blocked (ex. I personally like the core update notifications since they're not too frequent while potentially being substantial so I keep those enabled while I then just use this plugin to disable the more frequent & typically less impactful plugin and theme update notifications.)

== Screenshots ==

1. The Settings => General setting for also disabling failed update email notifications (successful updates are disabled simply by having the plugin active on the site.)

== Changelog ==

= 2.0.5 =

Released October 24th, 2023

* Added new link to the plugin details on the main plugin page.
* Confirmed WordPress 6.4 compliance.

= 2.0.4 =

Released July 24th, 2023

* Confirmed WordPress 6.3 compliance.

= 2.0.3 =

Released March 20th, 2023

* Confirmed WordPress 6.2 compliance.

= 2.0.2 =

Released October 31st, 2022

* Confirmed WordPress 6.1 compliance.

= 2.0.1 =

Released August 31st, 2022

* Fixed potential PHP error where `auto_theme_update_send_email` and/or `auto_plugin_update_send_email` might not have the second attribute supplied.
* Updated settings to help illustrate how the successful update notifications are always blocked per the plugin simply being active on the site while failed update notifications can be blocked as well via that setting.

= 2.0 =

Released August 29th, 2022

* Made the default setup allow failed updates to still send email notifications.
* Added "Disable failed update email notifications" setting to Settings => General to allow failed updates to be disabled as well.
* Added Settings, GitHub, and Support links to the plugin details on the plugins page in the site admin.

= 1.0.6 =

Released May 6th, 2022

* Confirmed WordPress 6.0 compliance.

= 1.0.5 =

Released January 24th, 2022

* Confirmed WordPress 5.9 compliance.

= 1.0.4 =

Released July 12th, 2021

* Confirmed WordPress 5.8 compliance.

= 1.0.3 =

Released March 3rd, 2021

* Confirmed WordPress 5.7 compliance.

= 1.0.2 =

Released November 23rd, 2020

* Confirmed WordPress 5.6 compliance.

= 1.0.1 =

Released August 14th, 2020

* Implemented all necessary assets and pushed to WP.org plugin repository.

= 1.0 =

Released August 12th, 2020

* Initial release.
