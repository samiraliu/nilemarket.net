=== BackWPup Free - WordPress Backup Plugin ===
Contributors: inpsyde, danielhuesken, Bueltge, nullbyte
Tags: Amazon, Amazon S3, back up, backup, chinese, cloud, cloud files, database, db backup, dropbox, dump, file, french, ftp, ftps, german, migrate, multisite, russian, schedule, sftp, storage, S3, time, upload, xml
Requires at least: 3.4
Tested up to: 4.0
Stable tag: 3.1.2
License: GPLv3
License URI: http://www.gnu.org/licenses/gpl-3.0.html

Schedule complete automatic backups of your WordPress installation. Decide which content will be stored (Dropbox, S3…). This is the free version

== Description ==

The **backup plugin** **[BackWPup Free](http://marketpress.com/product/backwpup-pro/)** can be used to save your complete installation including /wp-content/ and push them to an external Backup Service, like **Dropbox**, **S3**, **FTP** and many more, see list below. With a single backup .zip file you are able to easily restore an installation. Please understand: this free version will not be supported as good as the [BackWPup Pro version](http://marketpress.com/product/backwpup-pro/).

BackWPup Free is the number 1 backup-plugin for WordPress with nearly 1.000.000 downloads and in the top 20 of all WordPress Plugins (checked on rankwp.com)

* Database Backup  *(needs mysqli)*
* WordPress XML Export
* Generate a file with installed plugins
* Optimize Database
* Check and repair Database
* File backup
* Backups in zip, tar, tar.gz, tar.bz2 format *(needs gz, bz2, ZipArchive)*
* Store backup to directory
* Store backup to FTP server *(needs ftp)*
* Store backup to Dropbox *(needs curl)*
* Store backup to S3 services *(needs curl)*
* Store backup to Microsoft Azure (Blob) *(needs PHP 5.3.2, curl)*
* Store backup to RackSpaceCloud *(needs PHP 5.3.2, curl)*
* Store backup to SugarSync *(needs curl)*
* PRO: Store backup to Amazon Glacier *(needs PHP 5.3.3, curl)*
* PRO: Store backup to Google Drive *(needs PHP 5.3.3, curl)*
* Send logs and backups by email
* Multi-site support only as network admin
* Pro version and support available - [BackWPup Pro](http://marketpress.com/product/backwpup-pro/)

= Available languages =
* english (standard)
* french / français (fr_FR)
* german / deutsch (de_DE)
* russian / pоссия (ru_RU)
* simplified chinese (zh_CN)

= Requirements =
* WordPress 3.4 and PHP 5.2.6 required!
* To use the Plugin with full functionality PHP 5.3.3 with mysqli, FTP,gz, bz2,  ZipArchive and curl is needed.
* Plugin functions that don't work because of your server settings, will not be displayed in admin area.

**Remember: The most expensive backup is the one you never did! And please test your backups!**

Get the [BackWPup Pro](http://marketpress.com/product/backwpup-pro/) Version with more features on [MarketPress.com](http://marketpress.com/product/backwpup-pro/)

**Made by [Inpsyde](http://inpsyde.com) &middot; We love WordPress**

Have a look at our other premium plugins at [MarketPress.com](http://marketpress.com).

== Frequently Asked Questions ==

= My backup jobs don’t seem to run as scheduled. =

BackWPup uses WordPress’ own cron job system (**WP Cron**) to execute scheduled backup jobs. In order for WordPress to “know” when to execute a job, its “inner clock” needs to be set regularly. That happens whenever someone (including yourself) visits your site.
If your site happens to not being visited for a period of time, WordPress’ inner clock gets sort of slow. In that case it takes an extra server-side cron job to regularly call http://your-site.tld/wp-cron.php and tell WordPress what time it is.

A simple way to find out whether WP Cron works as it should on your site is to create a new post and set its publishing date to some point in the future, i.e. 10 minutes from now. Then leave your site (that’s important), come back after 11 minutes and check whether your scheduled post has been published. If not, you’re very likely to have an issue with WP Cron.

= Yuk! It says: “ERROR: No destination correctly defined for backup!” =

That means a backup job has started, but BackWPup doens’t know where to store the backup files. Please cancel the running job and re-edit its configuration. There should be a Tab “To: …” in your backup job’s configuration. Have you set a backup target correctly?

= A backup job has started, but nothing seems to be happening—not even when I re-start it manually. =

**Solution #1**

* Open BackWPup->Settings
* Go to the Informations tab.
* Find *Server self connect:* in the left column.
* If it says something like *(401) Authorisation required* in the right column, go to the Network tab and set the username and password for server-side authentication.
* Try again starting the backup job.

**Solution #2**

* Open wp-config.php and find the line where it says `if ( !defined('ABSPATH') )`.
* Somewhere before that line add this: `define( 'ALTERNATE_WP_CRON', true );`

**Solution #3**

Not really a solution, but a way to identify the real problem: see remarks on WP Cron at the top.

= I get this error message: `The HTTP response test get a error "Connection time-out"` =

BackWPup performs a simple HTTP request to the server itself every time you click `run now` or whenever a backup job starts automatically. The HTTP response test message could mean:
* Your host does not allow *loop back connections*. (If you know what `WP_ALTERNATE_CRON` is, try it.)
* Your WordPress root directory or backup directory requires authetification. Set username and password in Settings->Network.
* The Server can’t resolve its own hostname.
* A plugin or theme is blocking the request.
* Other issues related to your individual server and/or WordPress configuration.


= I get a fatal error: `Can not create folder: […]/wp-content/backwpup-[…]-logs in […]/wp-content/plugins/backwpup/inc/class-job.php …` =
Please set CHMOD 775 on the /wp-content/ directory and refresh the BackWPup dashboard. If that doesn’t help, try CHMOD 777. You can revert it to 755 once BackWPup has created its folder.


= How do I restore a backup? =
Up to now, there is no feature in BackWPup to restore a backup. You can follow [these instructions from the WordPress Codex](http://codex.wordpress.org/Restoring_Your_Database_From_Backup) or [this tutorial (also Codex)](http://codex.wordpress.org/WordPress_Backups) for more detailed information on cPanel, Plesk, vDeck and others.


= When I edit a job the Files tab loads forever. =
Go to Settings->General and disable “Display folder sizes on files tab if job edited”. Calculating folder sizes can take a while on sites with many folders.

= I generated a list of my installed plugins, but it’s hard to read. =
Try opening the text file in an editor software like Notepad++ (Windows) or TextMate (Mac) to preserve line-breaks.

= My web host notified me BackWPup was causing an inacceptable server load! =
Go to Settings->Jobs and try a different option for “Reduce server load”.

= Can I cancel a running backup job via FTP? =
Yes. Go to your BackWPup temp directory and find a file named `backwpup-xyz-working.json` where “xyz” is a random string of numbers and characters. Delete that file to cancel the currently running backup job.

= Can I move the temp directory to a different location? =
Yes. You need to have writing access to the wp-config.php file (usually residing in the root directory of your WordPress installation).

* Open wp-config.php and find the line where it says `if ( !defined('ABSPATH') )`.
* Somewhere *before* that line add this: `define( 'WP_TEMP_DIR', '/absolute/path/to/wp/your/temp-dir' );`
* Replace `/absolute/path/to/wp/` with the absolute path of your WordPress installation and `your/temp-dir` with the path to your new temp directory.
* Save the file.


= What do those placeholders in file names stand for? =

* %d = Two digit day of the month, with leading zeros
* %j = Day of the month, without leading zeros
* %m = Day of the month, with leading zeros
* %n = Representation of the month (without leading zeros)
* %Y = Four digit representation for the year
* %y = Two digit representation of the year
* %a = Lowercase ante meridiem (am) and post meridiem (pm)
* %A = Uppercase ante meridiem (AM) and post meridiem (PM)
* %B = [Swatch Internet Time](http://en.wikipedia.org/wiki/Swatch_Internet_Time)
* %g = Hour in 12-hour format, without leading zeros
* %G = Hour in 24-hour format, without leading zeros
* %h = Hour in 12-hour format, with leading zeros
* %H = Hour in 24-hour format, with leading zeros
* %i = Two digit representation of the minute
* %s = Two digit representation of the second

== Screenshots ==

1. Working job and jobs overview
2. Job creation/edit
3. Displaying logs
4. Manage backup archives
5. Dashboard

== Upgrade Notice ==
= After an upgrade from version 2 =

Please check all settings after the update:

* Dropbox authentication must be done again
* SugarSync authentication must be done again
* S3 Settings
* Google Storage is now in S3
* Check all your passwords

== Installation ==

1. Download the BackWPup plugin.
2. Decompress the ZIP file and upload the contents of the archive into `/wp-content/plugins/`.
3. Activate the plugin through the 'Plugins' menu in WordPress


== Changelog ==
= Version 3.1.2 =
* Added: .donotbackup file. Folders and sub folders containing this file in will not be included in backups.
* Fixed: New multisite installs did not save jobs.
* Fixed: New multisite installs did not save installed version.
* Fixed: Fatal error when attempting to clean up inactive jobs from cron
* Fixed: Exclude uploads not working
* Fixed: Message "file not readable" of an excluded folder
* Fixed: WP-CLI deprecated and unknown parameter message
* Fixed: Bugs in pagination on logs and backups page
* Removed: Banner from plugins page
* Improved: Memory usage during XML export
* Improved: Mime type detection
* Improved: Dropbox SSL handling
* Improved: Certificate bundle file can now be filtered
* Improved: Auto-loading vendor classes
* Improved: Performance when saving other database tables than MyISAM
* Updated: AWS SDK to Version 2.5.2 (PHP 5.3.3+)
* Updated: RSC SDK to Version 1.9.1
* Updated: Guzzle SDK to Version 3.8.1
* Added: S3 Service: Amazon China (Beijing) region
* Added: Rackspace: Hong Kong (HKG) region
* PRO: Fixed: Duplicating synced files on S3
* PRO: Update: Google SDK to 0.6.7
* PRO: Added: Amazon Glacier China (Beijing) region

= Version 3.1.1 =
* Fixed: Plugins will not backup
* Improved: Dropped quota check for Dropbox. Will cancel upload only when Dropbox API sends error 507.
* Improved: Remove special chars from file names in archives
* Improved: Handling off restarts on archive creation

= Version 3.1 =
* Fixed: Message about aborted step did not display correctly
* Fixed: Incorrect rescheduling of jobs
* Improved: Overall performance while generating backup archives
* Improved: Uploads of backup archives to FTP/S3/Dropbox/Azure/GDrive can be continued
* Improved: Script re-starts based upon time while generating archives and uploading
* Improved: Reduced risk of running scripts being stopped via external processes in fcgi mode
* Improved: Backup destinations and their dependencies only being loaded when needed
* Improved: Required dependencies for destinations being displayed now
* Improved: Displaying of error messages as error messages (red, not yellow)
* Improved: Reduced size of vendor/SDK directory by 50%
* Improved: Regex for BackWPup archive file detection
* Improved: Symlink handling for file backup on WordPress folders
* Improved: Use icon font for menu, adminbar and on other places
* Improved: Responsive for WordPress 3.8
* Updated: AWS SDK to Version 2.4.11 (PHP 5.3.3+)
* Updated: RSC SDK to Version 1.7.3
* Updated: SwiftMailer to Version 5.0.1
* Removed: DB Optimization, because locking of tables that can make the site not accessible
* PRO: Wizards using a separate session handling now
* PRO: Hash that BackWPup uses is changeable
* PRO: Added Google Drive Support
* PRO: Added Amazon Glacier Support

= Version 3.0.13 =
* Improved: Redirect when accessing the WordPress backend
* Added: Debug Informations to Logfile
* Added Sydney region for rackspace cloud
* Added London region for rackspace cloud
* Fixed: Cross-site scripting issue. Thanks to High-Tech Bridge for helping us: https://www.htbridge.com/advisory/HTB23161
* Fixed: Fatal error when uninstalling on WordPress 3.4.2 and older

= Version 3.0.12 =
* Fixed: Redirect when accessing the WordPress backend
* Added: Russian translation
* Added: Simplified chinese translation
* Fixed: German log string typo

= Version 3.0.11 =
* Improved: About page will only be shown after install
* Updated: AWS SDK to Version 2.3.1 (PHP 5.3.3+)
* Fixed: some notices and warnings
* Fixed: Change of BackWPup role for other users
* Added: Message for Pro version to support plugin

= Version 3.0.10 =
* Fixed only Version on WordPress.org because of SVN upload problems with Symfony folder from AWS

= Version 3.0.9 =
* Fixed: Fixed bug in Dropbox temp file fallback
* Fixed: Not working if WP-Cron Control active
* PRO Fixed: Synchronisation of files to Dropbox
* PRO Changed: About page only displays on new installation not on updates
* Added: Sending auth cookie for self requests
* Added: Displaying off last error or waring in execution screen
* Added: Job end message depending on error's or waring's
* Added: Setting of BackWPup role in the user settings
* Improved: Wait time after job start
* Improved: Rights management to work better with Role management Plugins
* Changed: Sessions now only used for wizards in pro version
* Removed: Maintenance Mode support, because to many problems and not really needed
* Updated: RSC SDK to Version 1.5.4
* Updated: AWS SDK to Version 1.6.2
* Updated: AWS SDK to Version 2.3.0 (PHP 5.3.3+)

= Version 3.0.8 =
* Fixed: Selected database tables not save on tab change
* Fixed: Database tables selection on new job
* Fixed: adding empty folder names tow archive
* Improved/Fixed: Dropbox Authentication

= Version 3.0.7 =
* Improved: All job requests will done over wp-cron.php now
* Improved: Ajax calls if blog in maintenance mode
* Improved: Getting of DB_CHARSET
* Improved: FTP file deletion
* Improved: Dropbox authentication (If restrict to job settings page not work you can open the settings page manually again to authenticate)
* Fixed: No maintenance mode, if a maintenance mode already active
* Fixed: Archive file deletion
* Updated: AWS SDK to Version 2.2.1 (PHP 5.3.3+)

= Version 3.0.6 =
* Fixed: Massages on empty DB prefix
* Fixed: Bug in cron calculation
* Improved: Dropbox upload so that it can continuing on next try

= Version 3.0.5 =
* Changed: Display only normal messages on progress bars
* Changed: Detection of multisite blog upload folder
* Changed: Backups list for destination file will not cached.
* Changed: Reduced files of AWS SDK to the only needed.
* Fixed: Side load braking if no folder permissions
* Fixed: Multiple backups deletion on backups page not working
* Fixed: DB optimize and check not only use WP tables if selected
* Fixed: File deletion on Dropbox if folder name has a space
* Fixed: False scheduling time in some timezones
* Removed: Option for excluding file, cache, temp folders. Can done with file/folder exclusion too.
* Added: Option to restart the job on archive creation if a size of files reached
* Added: Option to set Zip method (PclZip or ZipArchive)
* Improved: Performance if PclZip used.
* Updated: AWS SDK to Version 1.6.1
* Updated: AWS SDK to Version 2.2.0 (PHP 5.3.3+)

= Version 3.0.4 =
* Changed: default settings for 'Restart on every main step' and 'Reduce server load' to disabled
* Fixed: Settings not correctly set to default
* Fixed: mysqli::get_charset() undefined method
* Fixed: Settings not saved correctly
* Fixed: Abort on MySQL Functions Backup
* Improved: MySQLi connection
* Added: Server connection test on run now.
* Added: S3 AWS SDK 1.6.0 for PHP lower than 5.3.3

= Version 3.0.3 =
* Improved: Archive creation performance
* Fixed: Problem with S3 Prefix
* Fixed: warnings on excluded folders
* Fixed: message from putenv
* Fixed: not working downloads
* Changed: removed fancybox and uses thickbox because plugin compatibility
* Added: folder checking on run now

= Version 3.0.2 =
* Fixed: Warnings on job edit tab files
* Fixed: folder name on temp cleanup in cron
* Fixed: Setting charset on sql backup
* Fixed: DB Connection on database backup if hostname has a port
* Fixed: Call undefined function apc_clear_cache()
* Fixed: wp-content selected folders not excluded
* Added: Deactivation off multi part upload for S3 Services
* Added: fallback for mysql_ping()
* Added: Options for email senders name
* Changed: 5 minutes cron steps back
* Removed: Flashing admin bar icon
* Updated: OpenCloud API to Version 1.4.1

= Version 3.0 =
* Added: Jobs can now be started with an external link or per command line
* Added: Backups can now be compressed with gz or bzip2
* Added: All file names can now be adjusted
* Added: MySQL dump supports now views
* Added: Settings for access control per capability and role
* Added: Save a list of installed Plugins
* Added: Support for WP-CLI
* Improved: Job edit page with tabs
* Improved: Settings page with tabs
* Improved: Database dump now uses mysqli PHP extension for better performance
* Improved: ZIP archives are now created with PHP Zip if available
* Improved: All passwords are now stored encrypted in database
* Improved: wp-cron job start mechanism
* Improved: Job start mechanism not longer uses URL in plugin directory
* Improved: Use `temp` directory in uploads or set it with `WP_TEMP_DIR`
* Changed: Mailing backup archives now with SwiftMailer
* Changed: Job process now back in the WordPress environment
* Changed: License changed to GPLv3
* Changed: Rewrote almost the complete code base to use classes with auto-loading
* Changed: Logs are now displayed with fancybox
* Updated: AWS SDK v2.1.2 (PHP 5.3.3)
* Updated: OpenCloud SDK to v1.3 (PHP 5.3)
* Updated: Windows Azure SDK v0.3.1_2011-08 (PHP 5.3.2)
* Removed: serialized job export
* Removed: tools section - not needed anymore
* Removed: Dashboard widgets are now on the BackWPup plugin dashboard
* Fixed: many, many minor bugs

= Version 3.0 Pro =

* Wizards
* Export jobs and settings as XML
* Synchronization of files to backup with destination (filename and size checked)
* Wizard to import jobs and settings from XML
* Database dump can backup other MySQL databases
* Database dump can use `mysqldump` command on commend line
* Database dump can create XML files (phpMyAdmin schema)
* Use your own API keys for Dropbox and SugarSync
* Premium Support
* Automatic updates
