=== MediaJel Tracker ===
Contributors: jonathanbaroma
Tags: mediajel, universal tracker, mvp, header script, jpbaroma
Donate link: https://www.mediajel.com/contact-us
Requires at least: 5.0
Tested up to: 5.8
Requires PHP: 7.0
Stable tag: 1.1.2
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

A plugin for adding settings that is mostly used for identifying, tracking and/or monitoring websites of MediaJel clients.

== Description ==
This plugin will provide a section in WP Admin dashboard where MediaJel clients can save some specific details that are needed for identifying, tracking or monitoring performance of their websites.

In this current version of the plugin, it includes a setting for a Universal Tracker where client has to input a unique APP ID that will be provided for them by MediaJel. This setting also has an option where the client has to select if their website is either on a testing mode or a production mode.

The plugin adds a specified script in the head section of each page which includes the details provided by the client on the settings, like the APP ID. The script will be used for specific analytics and tracking performace of their websites.

== Installation ==
Install MediaJel Tracker like you would install any other WordPress plugin.

Dashboard Method:

1. Login to your Wordpress Admin dashboard, and select Plugins -> Add New from the dashboard menu.
2. Input \"MediaJel Tracker\" in the search bar and select MediaJel Tracker from the list of plugins.
3. Click \"Install\", and then click on \"Activate Plugin\".

Upload Method:

1. Unzip the plugin and upload the \"mediajel-tracker\" folder to your \'wp-content/plugins\' directory.
2. Login to your Wordpress Admin dashboard, and go to Plugins page.
3. Look for the MediaJel Tracker from the list of plugins, the click on Activate.

After plugin is activated:
1. Once the plugin is activated, you should see the \\\'MediaJel Tracker\\\' menu just below the \\\'Dashboard\\\' menu. Click that menu, and should be taken to a page for the MediaJel tracker.
2. Under the Universal Tracker (MVP) section, input the APP ID that will be provided to you by MediaJel. Then also tick the option if your site is on testing mode, if not, then just leave it unselected.
3. Click on \\\'Save Changes\\\' button, and you\\\'re all set.

== Frequently Asked Questions ==
= What is the Universal Tracker APP ID? =
It\'s a unique ID that is specific to each client and website, which is used to identify your website. It has a pattern that could be similar to this: \"yourtracker\", \"your_tracker\"

= Where can I get the APP ID? =
The APP ID for the Universal Tracker will be provided to you by MediaJel. You can contact us or reach-out to us if you don\'t have your APP ID yet.

= I don\'t have an APP ID yet, can I already install the MediaJel Tracker plugin? =
Even if you don\'t have your APP ID yet, you can already install the plugin already on the website and add your details later on.

= What does the Testing option on the Universal Tracker section mean? =
You should select or tick this option if your website is in development mode or not yet available to public or not a live site yet.

= After having installed the plugin, and added the details (for example the APP ID), what do we need to do to ensure that the plugin is working on our site? =
There\'s nothing that you have to do on your end, but to inform us that you have already successfully installed the plugin, and has added the necessary details. Then we will check on our end, if the plugin is actually already working on your website.

== Screenshots ==
1. The MediaJel Tracker menu being added on the WP Dashboard menu after plugin is activated
2. The Universal Tracker settings section

== Changelog ==
= 1.1.2 =
*Release Date - 06 March 2022*

*The name of the plugin has been changed to MediaJel Tracker, and all references to files and code has also been updated.to use mediajel-tracker.

= 1.1.1 =
*Release Date - 06 March 2022*

*Changed the name of the plugin to MediaJel Tracker

= 1.1.0 =
*Release Date - 17 November 2021*

*Changed the name of the Universal Tracker ID to APP ID
*Added the Testing Mode option for the Universal Tracker section

= 1.0.0 =
*Release Date - 15 November 2021*

*The very first version of the plugin or the initial release

== Upgrade Notice ==
Upgrade of the plugin is necessary to make it compatible to the recent updates of Wordpress as well. Incompatibility with the latest updates on Wordpress may cause the plugin to not work as expected.

Having the latest version of the plugin is also important to have your plugin included the recent features that we have added to the plugin that may be relevant to your website as well.

Upgrade notices will be provided through email that you have provided to us, or you can also check the Plugins section on the WP Admin Dashboard if we have released a recent update of the plugin and the details for that update.
