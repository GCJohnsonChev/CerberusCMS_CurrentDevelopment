<?php
/*
 ============================================================================================================
 + ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
 + ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
 + Cerberus Content Management System
 + ----------------------------------------------------------------------------------------------------------
 + - Author			 : Gary Christopher Johnson of Bakersfield, Oildale and Los Angeles In Southern California
 + - Company			 : Tinke Software, Free and Open Source Software
 + - Company Address		 : Los Angeles In Southern California, United States of America
 + - Electronic Mail Address	 : CerberusCMS@Protonmail.com, TinkeSoftware@Protonmail.com
 + - Document Notes		 : View this file in a non-formatting text editor without word-wrap for the
 +				 : correct display of this programming code and its indentation.
 + ----------------------------------------------------------------------------------------------------------
 +    ()  -  () - ---
 +  ()  () () () () ()
 +  ------
 + Kernel File
 + ----------------------------------------------------------------------------------------------------------
 + - This File, Location	 : Master Root Directory => Root Directory => Cerberus.php
 + - This File, Version		 : 0.7.1
 + - This File, Programming Code : Pure Pre-Hyper-Text-Post-Processor
 + - Programming Code Model	 : Procedural, Functional, Object Oriented :: Pre-Order Algebraic
 + -				 :					   :: Pre-Order Logical
 + - Compatibility		 : Pre-Hyper-Text-Post-Processor 	   :: Version Numbers: 5, 7, 8
 + -				 : Zend Engine				   :: Version Numbers: 3, 4
 + - Official Release Date	 : Wednesday, November 1st of 2023
 + ----------------------------------------------------------------------------------------------------------
 + -------------------------------------------------------------------------------	- Nyx -
 + --[][]--[][][]--[][][]--[][][]---[][][]--[][][]--[]--[]------[][][]------------   []++++||=======>
 + -[]-----[]------[]--[]--[]---[]--[]------[]--[]--[]--[]------[]----------------
 + -[]-----[]------[]--[]--[]---[]--[]------[]--[]--[]--[]------[]----------------    |'-._/\_.-'|
 + -[]-----[]------[]--[]--[]---[]--[]------[]--[]--[]--[]------[]----------------    |    []    |
 + -[]-----[]------[]--[]--[]---[]--[]------[]--[]--[]--[]------[]----------------    |___-[]-___|
 + -[]-----[][][]--[][][]--[][][]---[][][]--[][][]--[]--[]------[]----------------    |__((**))__|
 + -[]-----[]------[]--[]--[]---[]--[]------[]--[]--[]--[]------[]----------------    \   -[]-   /
 + -[]-----[]------[]--[]--[]---[]--[]------[]--[]--[]--[]------[]------------/-\-     \   []   /
 + -[]-----[]------[]--[]--[]---[]--[]------[]--[]--[]--[]------[]---VERSION--|4|-	\  []  /
 + --[][]--[][][]--[]--[]--[][][]---[][][]--[]--[]--[][][]--[][][]------------\-/-	 '.[].'
 + -------------------------------------------------------------------------------
 + ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ Build Number: 0.8 - Final
 + ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ Edit Number : 3,419
 ============================================================================================================
*/

/*
 ============================================================================================================
 * - This Kernel File Has Complete Control of Everything System-Wide -
 *
 * Refer to the programming architecture documentation videos and portable-document
 * files for this project to get a good understanding of how the entire system works
 * as well as how to write programming code for this project. This entails
 * Application Modules, Application Panels, Custom Themes and more.
 *
 *
 *
 *
 * - Searchable Programming Architecture Keys -
 *
 * Search These Keys With The Text-Editor Application Search Function
 *
 * *** Logical ***
 * [ ^ ], Document Name and Location
 * [ @ ], Header of Programming Code Systems and Programming Code Blocks
 * [ + ], Programming Code Statement Ending With Description
 *
 * *** Logical Object-Oriented ***
 * =>, Ever-Changing Information Within Never-Changing Variables
 * ::, Index Section of Header
 *
 * *** One-Step Mathematical ***
 * [ Σ ], Mathematical Summation and Incrementation
 * [ Ξ ], Mathematical Difference and Decrement
 * :::, Index Section of Header
 * ->, Ever-Changing Information Within Never-Changing Variables
 *
 * *** Pre-Ordered Algebraic Mathematical ***
 * [ > ], Algebraic Statement Ending With Numeral
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 +
 +
 +
 + [ ^ ] Cerberus Content Management System :: Kernel and Index File
 +
 +
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 +
 +
 + [ @ ] Error Handling Systems
 +
 +
 +
 ============================================================================================================
*/

error_reporting("E_WARNING ^ E_NOTICE");

/*
 ============================================================================================================
 +
 +
 +
 + [ @ ] Internal :: Header :: Control
 +
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 + Internal :: Header :: Control :: External Browser Cache Control
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Internal :: Header :: Control :: External Browser Cache Control :: Store No Cache Data
 ============================================================================================================
*/

header("Cache-Control: max-age=0, no-cache, no-store, private, proxy-revalidate, must-revalidate");
header("Cache-Control: Clear-Site-Data");
header("Pragma: no-cache");
header("Expires: 0");

/*
 ============================================================================================================
 +
 +
 +
 + [ @ ] Internal :: File :: Redirection Systems
 +
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 +
 + Internal :: Redirection :: Installation Files
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Global :: Installation :: File :: Variables
 ============================================================================================================
*/

$_GLOBAL_SYSTEM_INSTALLATION_FILE							= "Architect.php";

/*
 ============================================================================================================
 + IF: Global :: Installation :: File :: Exists, Redirect To It
 ============================================================================================================
*/

if (file_exists($_GLOBAL_SYSTEM_INSTALLATION_FILE)) {

	header("Location: Architect.php");

} // [ + ] IF: File Exists: System Installation Application

/*
 ============================================================================================================
 +
 +
 +
 + [ @ ] Internal :: Configuration :: Files
 +
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 +
 + Internal :: Configuration :: Global System Configuration Modules
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + IF: Global :: System :: Configuration File Exists, Include It
 ============================================================================================================
*/

$_GLOBAL_SYSTEM_CONFIGURATION_FILE							= "./System/Configuration/Global_Configuration.php";

if (file_exists($_GLOBAL_SYSTEM_CONFIGURATION_FILE)) {

	include_once "$_GLOBAL_SYSTEM_CONFIGURATION_FILE";

} else {

			echo ("Kernel Message: Error: System Configuration File Missing: $_GLOBAL_SYSTEM_CONFIGURATION_FILE | <A HREF=\"./Maintenance/Diagnostics/$_INTERNAL_FILE_MAINTENANCE_DIAGNOSTICS\" TITLE=\":: $_PROJECT_STRING_NAME_EXTENDED :: Diagnostics Application ::\" TARGET=\"_NEW\">Press or Click Here To Execute The Diagnostics Application</A>");

} // [ + ] IF: File Exists: Configuration File :: Global System Configuration File

/*
 ============================================================================================================
 +
 +
 +
 + [ @ ] Initializations
 +
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 +
 + Initializations :: Global :: Database Management System Objects, Functions and Variables
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Database Management System Server :: System :: Initialize Database Classes
 ============================================================================================================
*/

$DB											= new DB();

/*
 ============================================================================================================
 +
 +
 + Database Management System Server :: System :: Connect To :: Defined and Assigned Database Management System Server Details
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Database Management System Server :: System Connection :: Variables :: My Structured Query Language :: Standard
 ============================================================================================================
*/

$_KERNEL_MYSQL_STANDARD_DATABASE_SERVER_CONNECT 					= mysql_connect($_ACCESS_DATABASE_SERVER_HOSTNAME, $_ACCESS_DATABASE_SERVER_USERNAME, $_ACCESS_DATABASE_SERVER_PASSWORD);
$_KERNEL_MYSQL_STANDARD_DATABASE_SERVER_DATABASE_NAME_SELECT 				= mysql_select_db($_ACCESS_DATABASE_SERVER_DATABASE_NAME);

/*
 ============================================================================================================
 + Database Management System Server :: System Connection :: Variables :: My Structured Query Language :: Improved
 ============================================================================================================
*/

//$_KERNEL_MYSQL_IMPROVED_DATABASE_SERVER_CONNECT 					= mysqli_connect($_ACCESS_DATABASE_SERVER_HOSTNAME, $_ACCESS_DATABASE_SERVER_USERNAME, $_ACCESS_DATABASE_SERVER_PASSWORD);
//$_KERNEL_MYSQL_IMPROVED_DATABASE_SERVER_DATABASE_NAME_SELECT 				= mysqli_select_db($_KERNEL_MYSQL_DATABASE_SERVER_CONNECT, $_ACCESS_DATABASE_SERVER_DATABASE_NAME);

/*
 ============================================================================================================
 + IF: Specified Database Server Name Exists, Connect To It
 ============================================================================================================
*/

if ($_KERNEL_MYSQL_STANDARD_DATABASE_SERVER_CONNECT) {

/*
 ============================================================================================================
 + IF: Specified Database Server Database Name Exists, Select It
 ============================================================================================================
*/

if ($_KERNEL_MYSQL_STANDARD_DATABASE_SERVER_DATABASE_NAME_SELECT) {

/*
 ============================================================================================================
 +
 +
 +
 + [ @ ] Global :: System :: Variables
 +
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 +
 + Global System :: Variables :: Global System Settings :: System-Wide
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Database Server Query: Retrieve Settings :: System-Wide
 ============================================================================================================
*/

$_DB_Query_Kernel_Select_Main_Settings							= $DB->query("SELECT * FROM {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_settings WHERE id='1'");
$_DB_Query_Kernel_Settings_Fetch_Array							= $DB->fetch_array($_DB_Query_Kernel_Select_Main_Settings);

/*
 ============================================================================================================
 + Global :: System :: Settings: Plug-Ins
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Global :: System :: S.Q.L. Settings: Plug-Ins :: Location
 ============================================================================================================
*/

$_GLOBAL_SYSTEM_PLUGIN_LOCATION_DIRECTORY						= $_DB_Query_Kernel_Settings_Fetch_Array['settings_system_plugin_directory_location'];
$_GLOBAL_SYSTEM_PLUGIN_LOCATION_STATUS							= $_DB_Query_Kernel_Settings_Fetch_Array['settings_system_plugin_status_location'];

/*
 ============================================================================================================
 + Global :: System :: S.Q.L. Settings: Plug-Ins :: Safe-HTML
 ============================================================================================================
*/

$_GLOBAL_SYSTEM_PLUGIN_SAFEHTML_DIRECTORY						= $_DB_Query_Kernel_Settings_Fetch_Array['settings_system_plugin_directory_safeHTML'];
$_GLOBAL_SYSTEM_PLUGIN_SAFEHTML_STATUS							= $_DB_Query_Kernel_Settings_Fetch_Array['settings_system_plugin_status_safeHTML'];

/*
 ============================================================================================================
 + Global :: System :: S.Q.L. Settings: Plug-Ins :: Text-Editor
 ============================================================================================================
*/

$_GLOBAL_SYSTEM_PLUGIN_TEXT_EDITOR_DIRECTORY						= $_DB_Query_Kernel_Settings_Fetch_Array['settings_system_plugin_directory_text_editor'];
$_GLOBAL_SYSTEM_PLUGIN_TEXT_EDITOR_STATUS						= $_DB_Query_Kernel_Settings_Fetch_Array['settings_system_plugin_status_text_editor'];

/*
 ============================================================================================================
 + Global :: System :: S.Q.L. Settings: Cookies :: Cookie Lifetime
 ============================================================================================================
*/

$_GLOBAL_SYSTEM_COOKIE_TIME								= $_DB_Query_Kernel_Settings_Fetch_Array['settings_system_time_cookies'];

/*
 ============================================================================================================
 + Global :: System :: S.Q.L. Settings: Web Page :: Output :: Data Compression
 ============================================================================================================
*/

$_GLOBAL_SYSTEM_GZIP_STATUS								= $_DB_Query_Kernel_Settings_Fetch_Array['settings_system_status_embedded_compression_gzip'];

/*
 ============================================================================================================
 + Global :: System :: S.Q.L. Settings: Image Extensions
 ============================================================================================================
*/

$_GLOBAL_SYSTEM_IMAGE_EXTENSION								= $_DB_Query_Kernel_Settings_Fetch_Array['settings_system_file_extension_image'];

/*
 ============================================================================================================
 + Global :: System :: S.Q.L. Settings: Languages
 ============================================================================================================
*/

$_GLOBAL_SYSTEM_LANGUAGE_DIRECTORY							= $_DB_Query_Kernel_Settings_Fetch_Array['settings_system_directory_language'];

/*
 ============================================================================================================
 + Global :: System :: S.Q.L. Settings: Smileys
 ============================================================================================================
*/

$_GLOBAL_SYSTEM_SMILEYS_DIRECTORY							= $_DB_Query_Kernel_Settings_Fetch_Array['settings_system_plugin_directory_smileys'];

/*
 ============================================================================================================
 + Global :: System :: S.Q.L. Settings: Offline Mode Status
 ============================================================================================================
*/

$_GLOBAL_SYSTEM_OFFLINE_STATUS								= $_DB_Query_Kernel_Settings_Fetch_Array['settings_system_status_offline_mode'];

/*
 ============================================================================================================
 + Global :: System :: S.Q.L. Settings: Theme and Web Site Specific
 ============================================================================================================
*/

$_GLOBAL_SYSTEM_SITE_TITLE								= $_DB_Query_Kernel_Settings_Fetch_Array['settings_system_website_title'];
$_GLOBAL_SYSTEM_SOUND_EXTENSION								= $_DB_Query_Kernel_Settings_Fetch_Array['settings_system_file_extension_audio'];
$_GLOBAL_SYSTEM_THEME_DIRECTORY								= $_DB_Query_Kernel_Settings_Fetch_Array['settings_system_directory_theme'];

/*
 ============================================================================================================
 + Global :: System :: S.Q.L. Settings: File Upload Size
 ============================================================================================================
*/

$_GLOBAL_SYSTEM_UPLOAD_SIZE_PRIVATE_MEMBER						= $_DB_Query_Kernel_Settings_Fetch_Array['settings_system_upload_size_private_member'];
$_GLOBAL_SYSTEM_UPLOAD_SIZE_PRIVATE_MEMBER_STREAMS					= $_DB_Query_Kernel_Settings_Fetch_Array['settings_system_upload_size_private_member_streams'];
$_GLOBAL_SYSTEM_UPLOAD_SIZE_PUBLIC_FILE_CATEGORIES					= $_DB_Query_Kernel_Settings_Fetch_Array['settings_system_upload_size_public_file_categories'];
$_GLOBAL_SYSTEM_UPLOAD_SIZE_PUBLIC_FILE_MESSENGER					= $_DB_Query_Kernel_Settings_Fetch_Array['settings_system_upload_size_public_messenger'];

/*
 ============================================================================================================
 + Global :: System :: S.Q.L. Settings: Registered Member Account :: Authentication :: Internet Protocol Address
 ============================================================================================================
*/

$_GLOBAL_SYSTEM_SETTING_ACCOUNT_SECURITY_RESTRICT_AUTHORIZED_INTERNET_PROTOCOL_ADDRESS	= $_DB_Query_Kernel_Settings_Fetch_Array['settings_system_security_account_restrict_ip'];

/*
 ============================================================================================================
 + Global :: System :: S.Q.L. Settings: Registered Member Account :: Authentication :: Web Browser User-Agent String
 ============================================================================================================
*/

$_GLOBAL_SYSTEM_SETTING_ACCOUNT_SECURITY_RESTRICT_AUTHORIZED_WEB_BROWSER	= $_DB_Query_Kernel_Settings_Fetch_Array['settings_system_security_account_restrict_web_browser'];

/*
 ============================================================================================================
 + Global :: System :: S.Q.L. Settings: Registered Member Account :: Authentication :: MAC Address
 ============================================================================================================
*/

$_GLOBAL_SYSTEM_SETTING_ACCOUNT_SECURITY_RESTRICT_AUTHORIZED_MAC_ADDRESS	= $_DB_Query_Kernel_Settings_Fetch_Array['settings_system_security_account_restrict_mac_address'];

/*
 ============================================================================================================
 +
 +
 + [ @ ] Global :: System :: Security :: Variables
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 + Global :: System :: Security :: Variables :: System-Wide
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Global :: System :: Security :: Settings :: Security Module :: Master Sanitization
 ============================================================================================================
*/

$_GLOBAL_SETTING_SYSTEM_SECURITY_MODULE_STATUS_MASTER_SANITIZATION			= $_DB_Query_Kernel_Settings_Fetch_Array['settings_system_security_module_status_sanitization'];
$_GLOBAL_SETTING_SYSTEM_SECURITY_MODULE_DIRECTORY_MASTER_SANITIZATION			= $_DB_Query_Kernel_Settings_Fetch_Array['settings_system_security_module_directory_sanitization'];

/*
 ============================================================================================================
 + Global :: Security :: Variables :: Random Number Generators :: Pure
 ============================================================================================================
*/

$_GLOBAL_SECURITY_RANDOM_NUMBER_GENERATOR_URL_DIGITS					= rand(0,9999999999);
$_GLOBAL_SECURITY_RANDOM_NUMBER_GENERATOR_URL_DIGITS_BANNER				= rand(0,10);

/*
 ============================================================================================================
 + Global :: Security :: Variables :: Random Number Generators :: Hashed
 ============================================================================================================
*/

$_GLOBAL_SECURITY_RANDOM_NUMBER_GENERATOR_URL_DIGITS_HASH_MD5				= hash('md5',$_GLOBAL_SECURITY_RANDOM_NUMBER_GENERATOR_URL_DIGITS);
$_GLOBAL_SECURITY_RANDOM_NUMBER_GENERATOR_URL_DIGITS_HASH_SHA1				= hash('sha1',$_GLOBAL_SECURITY_RANDOM_NUMBER_GENERATOR_URL_DIGITS);
$_GLOBAL_SECURITY_RANDOM_NUMBER_GENERATOR_URL_DIGITS_HASH_SHA256			= hash('sha256',$_GLOBAL_SECURITY_RANDOM_NUMBER_GENERATOR_URL_DIGITS);
$_GLOBAL_SECURITY_RANDOM_NUMBER_GENERATOR_URL_DIGITS_HASH_SHA512			= hash('sha512',$_GLOBAL_SECURITY_RANDOM_NUMBER_GENERATOR_URL_DIGITS);
$_GLOBAL_SECURITY_RANDOM_NUMBER_GENERATOR_URL_DIGITS_HASH_OF_SHA1_OF_SHA256		= hash('sha256',$_GLOBAL_SECURITY_RANDOM_NUMBER_GENERATOR_URL_DIGITS_HASH_SHA1);

/*
 ============================================================================================================
 + Global :: Security :: Variables :: Random Number Generators :: Mersenne Twister
 ============================================================================================================
*/

$_GLOBAL_SECURITY_RANDOM_NUMBER_GENERATOR_URL_DIGITS_MERSENNE_TWISTER			= mt_rand(0,9999999999);

/*
 ============================================================================================================
 +
 +
 +
 + [ @ ] Global :: Cookie :: Variables
 +
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 + Global :: Cookie :: Variables :: Registered Member Account
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Global :: Member :: Cookie :: Variables :: Member Account :: Electronic Mail Address
 ============================================================================================================
*/

$_GLOBAL_COOKIE_MEMBER_ELECTRONIC_MAIL_ADDRESS						= $_COOKIE['kernel_member_electronic_mail_address'];

/*
 ============================================================================================================
 + Global :: Member :: Cookie :: Variables :: Member Account :: Password
 ============================================================================================================
*/

$_GLOBAL_COOKIE_MEMBER_PASSWORD								= $_COOKIE['kernel_member_password'];

/*
 ============================================================================================================
 + Global :: Member :: Cookie :: Variables :: Member Account :: UserName
 ============================================================================================================
*/

$_GLOBAL_COOKIE_MEMBER_USERNAME								= $_COOKIE['kernel_member_username'];

/*
 ============================================================================================================
 + Global :: Member :: Cookie :: Variables :: Member Account :: Member Language
 ============================================================================================================
*/

$_GLOBAL_COOKIE_MEMBER_LANGUAGE								= $_COOKIE['kernel_member_language'];

/*
 ============================================================================================================
 + Global :: Member :: Cookie :: Variables :: Member Account :: Member String :: Fingerprint AS Session :: HASHED
 ============================================================================================================
*/

$_GLOBAL_COOKIE_MEMBER_SECURITY_FINGERPRINT						= $_COOKIE['kernel_member_security_fingerprint'];

/*
 ============================================================================================================
 +
 + Global :: Registered Member Account :: Settings :: Variables
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + IF: Registered Member Account :: UserName Cookie and Password Cookie Are Not Null, Retrieve Details
 ============================================================================================================
*/

if ($_GLOBAL_COOKIE_MEMBER_USERNAME && $_GLOBAL_COOKIE_MEMBER_PASSWORD != null) {

/*
 ============================================================================================================
 + Database Server Query: Fetch Database Stored Member Credentials
 ============================================================================================================
*/

$_DB_Query_Kernel_Select_Member_Credentials 						= $DB->query("SELECT * FROM {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_members WHERE member_username='$_GLOBAL_COOKIE_MEMBER_USERNAME'");
$_DB_Query_Kernel_Select_Member_Credentials_Fetch_Array 				= $DB->fetch_array($_DB_Query_Kernel_Select_Member_Credentials);

/*
 ============================================================================================================
 + Global :: Member Account :: Settings :: Variables :: Priviledge Level
 ============================================================================================================
*/

$_GLOBAL_MEMBER_ACCESS_LEVEL								= $_DB_Query_Kernel_Select_Member_Credentials_Fetch_Array['member_access_level'];

/*
 ============================================================================================================
 + Global :: Member Account :: Settings :: Variables :: Web Browser :: Current
 ============================================================================================================
*/

$_GLOBAL_MEMBER_ACCOUNT_DEVICE_WEB_BROWSER						= $_DB_Query_Kernel_Select_Member_Credentials_Fetch_Array['member_account_device_web_browser'];

/*
 ============================================================================================================
 + Global :: Member Account :: Settings :: Variables :: Web Browser :: Authorized
 ============================================================================================================
*/

$_GLOBAL_MEMBER_ACCOUNT_DEVICE_WEB_BROWSER_AUTHORIZED					= $_DB_Query_Kernel_Select_Member_Credentials_Fetch_Array['member_account_device_web_browser_authorized'];

/*
 ============================================================================================================
 + Global :: Member Account :: Settings :: Variables :: MAC Address :: Current
 ============================================================================================================
*/

$_GLOBAL_MEMBER_ACCOUNT_DEVICE_MAC_ADDRESS						= $_DB_Query_Kernel_Select_Member_Credentials_Fetch_Array['member_account_device_mac_address'];

/*
 ============================================================================================================
 + Global :: Member Account :: Settings :: Variables :: MAC Address :: Authorized
 ============================================================================================================
*/

$_GLOBAL_MEMBER_ACCOUNT_DEVICE_MAC_ADDRESS_AUTHORIZED					= $_DB_Query_Kernel_Select_Member_Credentials_Fetch_Array['member_account_device_mac_address_authorized'];

/*
 ============================================================================================================
 + Global :: Member Account :: Settings :: Variables :: Member Account :: Authentication :: Attempt Number
 ============================================================================================================
*/

$_GLOBAL_MEMBER_ACCOUNT_LOCK_STATUS							= $_DB_Query_Kernel_Select_Member_Credentials_Fetch_Array['member_status_account_locked'];

/*
 ============================================================================================================
 + Global :: Member Account :: Settings :: Variables :: Member Account :: Lock Status
 ============================================================================================================
*/

$_GLOBAL_MEMBER_ATTEMPT_AUTHENTICATION							= $_DB_Query_Kernel_Select_Member_Credentials_Fetch_Array['member_attempt_authentication'];

/*
 ============================================================================================================
 + Global :: Member Account :: Settings :: Variables :: Status :: Account Activation
 ============================================================================================================
*/

$_GLOBAL_MEMBER_STATUS_ACCOUNT_ACTIVATION						= $_DB_Query_Kernel_Select_Member_Credentials_Fetch_Array['member_status_account_activation'];

/*
 ============================================================================================================
 + Global :: Member Account :: Settings :: Variables :: Status :: Active
 ============================================================================================================
*/

$_GLOBAL_MEMBER_STATUS_ACCOUNT_ACTIVE							= $_DB_Query_Kernel_Select_Member_Credentials_Fetch_Array['member_status_account_active'];

/*
 ============================================================================================================
 + Global :: Member Account :: Settings :: Variables :: Status :: Last Active Timestamp
 ============================================================================================================
*/

$_GLOBAL_MEMBER_STATUS_ACCOUNT_LAST_ACTIVE_TIMESTAMP					= $_DB_Query_Kernel_Select_Member_Credentials_Fetch_Array['member_status_account_last_active_timestamp'];
$_GLOBAL_MEMBER_STATUS_ACCOUNT_LAST_ACTIVE_YEAR						= $_DB_Query_Kernel_Select_Member_Credentials_Fetch_Array['member_status_account_last_active_years'];
$_GLOBAL_MEMBER_STATUS_ACCOUNT_LAST_ACTIVE_MONTH					= $_DB_Query_Kernel_Select_Member_Credentials_Fetch_Array['member_status_account_last_active_months'];
$_GLOBAL_MEMBER_STATUS_ACCOUNT_LAST_ACTIVE_MONTH_DAY					= $_DB_Query_Kernel_Select_Member_Credentials_Fetch_Array['member_status_account_last_active_days'];
$_GLOBAL_MEMBER_STATUS_ACCOUNT_LAST_ACTIVE_HOURS					= $_DB_Query_Kernel_Select_Member_Credentials_Fetch_Array['member_status_account_last_active_hours'];
$_GLOBAL_MEMBER_STATUS_ACCOUNT_LAST_ACTIVE_MINUTES					= $_DB_Query_Kernel_Select_Member_Credentials_Fetch_Array['member_status_account_last_active_minutes'];
$_GLOBAL_MEMBER_STATUS_ACCOUNT_LAST_ACTIVE_SECONDS					= $_DB_Query_Kernel_Select_Member_Credentials_Fetch_Array['member_status_account_last_active_seconds'];

/*
 ============================================================================================================
 + Global :: Member Account :: Settings :: Variables :: Avatar Image
 ============================================================================================================
*/

$_GLOBAL_MEMBER_IMAGE_AVATAR								= $_DB_Query_Kernel_Select_Member_Credentials_Fetch_Array['member_image_avatar'];

/*
 ============================================================================================================
 + Global :: Member Account :: Settings :: Variables :: Banned Status
 ============================================================================================================
*/

$_GLOBAL_MEMBER_STATUS_ACCOUNT_BANNED							= $_DB_Query_Kernel_Select_Member_Credentials_Fetch_Array['member_status_account_banned'];

/*
 ============================================================================================================
 + Global :: Member Account :: Settings :: Variables :: Electronic Mail Address
 ============================================================================================================
*/

$_GLOBAL_MEMBER_ELECTRONIC_MAIL_ADDRESS							= $_DB_Query_Kernel_Select_Member_Credentials_Fetch_Array['member_electronic_mail_address'];

/*
 ============================================================================================================
 + Global :: Member Account :: Settings :: Variables :: Experience Amount
 ============================================================================================================
*/

$_GLOBAL_MEMBER_EXPERIENCE_AMOUNT							= $_DB_Query_Kernel_Select_Member_Credentials_Fetch_Array['member_experience_amount'];

/*
 ============================================================================================================
 + Global :: Member Account :: Settings :: Variables :: Account Gender
 ============================================================================================================
*/

$_GLOBAL_MEMBER_GENDER									= $_DB_Query_Kernel_Select_Member_Credentials_Fetch_Array['member_gender'];

/*
 ============================================================================================================
 + Global :: Member Account :: Settings :: Variables :: Language
 ============================================================================================================
*/

$_GLOBAL_MEMBER_LANGUAGE								= $_DB_Query_Kernel_Select_Member_Credentials_Fetch_Array['member_language'];

/*
 ============================================================================================================
 + Global :: Member Account :: Settings :: Variables :: Referrer :: Last Known Referrer
 ============================================================================================================
*/

$_GLOBAL_MEMBER_LAST_REFERRER								= $_DB_Query_Kernel_Select_Member_Credentials_Fetch_Array['member_last_referrer'];

/*
 ============================================================================================================
 + Global :: Member Account :: Settings :: Variables :: Number of Posts
 ============================================================================================================
*/

$_GLOBAL_MEMBER_NUMBER_OF_POSTS								= $_DB_Query_Kernel_Select_Member_Credentials_Fetch_Array['member_number_of_posts'];

/*
 ============================================================================================================
 + Global :: Member Account :: Settings :: Variables :: Member Account Personal Profile Image
 ============================================================================================================
*/

$_GLOBAL_MEMBER_IMAGE_PROFILE								= $_DB_Query_Kernel_Select_Member_Credentials_Fetch_Array['member_image_picture'];

/*
 ============================================================================================================
 + Global :: Member Account :: Settings :: Variables :: Member Account Rank Level
 ============================================================================================================
*/

$_GLOBAL_MEMBER_LEVEL_RANK								= $_DB_Query_Kernel_Select_Member_Credentials_Fetch_Array['member_level_rank'];

/*
 ============================================================================================================
 + Global :: Member Account :: Settings :: Variables :: Member Account Theme Directory
 ============================================================================================================
*/

$_GLOBAL_MEMBER_THEME_DIRECTORY								= $_DB_Query_Kernel_Select_Member_Credentials_Fetch_Array['member_settings_theme_directory'];

/*
 ============================================================================================================
 + Global :: Member Account :: Settings :: Variables :: Internet Protocol Address :: Current
 ============================================================================================================
*/

$_GLOBAL_MEMBER_IP_ADDRESS_CURRENT							= $_DB_Query_Kernel_Select_Member_Credentials_Fetch_Array['member_ip_address'];

/*
 ============================================================================================================
 + Global :: Member Account :: Settings :: Variables :: Internet Protocol Address :: Last Authentication
 ============================================================================================================
*/

$_GLOBAL_MEMBER_IP_ADDRESS_LAST_AUTHENTICATION_SERVER_DEVICE				= $_DB_Query_Kernel_Select_Member_Credentials_Fetch_Array['member_ip_address_last_authentication_server_device'];
$_GLOBAL_MEMBER_IP_ADDRESS_LAST_AUTHENTICATION_SERVER_LOCAL				= $_DB_Query_Kernel_Select_Member_Credentials_Fetch_Array['member_ip_address_last_authentication_server_local'];
$_GLOBAL_MEMBER_IP_ADDRESS_LAST_AUTHENTICATION_SERVER_REMOTE				= $_DB_Query_Kernel_Select_Member_Credentials_Fetch_Array['member_ip_address_last_authentication_server_remote'];

/*
 ============================================================================================================
 + Global :: Member Account :: Settings :: Variables :: Internet Protocol Address :: Authorized
 ============================================================================================================
*/

$_GLOBAL_MEMBER_IP_ADDRESS_AUTHORIZED							= $_DB_Query_Kernel_Select_Member_Credentials_Fetch_Array['member_ip_address_authorized'];

/*
 ============================================================================================================
 + Global :: Member Account :: Settings :: Variables :: Internet Protocol Address :: Log
 ============================================================================================================
*/

$_GLOBAL_MEMBER_IP_ADDRESS_LOG								= $_DB_Query_Kernel_Select_Member_Credentials_Fetch_Array['member_ip_address_log'];

/*
 ============================================================================================================
 + Global :: Member Account :: Settings :: Variables :: Security :: Digital Fingerprint
 ============================================================================================================
*/

$_GLOBAL_MEMBER_SECURITY_FINGERPRINT_CLEARTEXT						= $_DB_Query_Kernel_Select_Member_Credentials_Fetch_Array['member_security_fingerprint_cleartext'];
$_GLOBAL_MEMBER_SECURITY_FINGERPRINT_HASHED						= $_DB_Query_Kernel_Select_Member_Credentials_Fetch_Array['member_security_fingerprint_hashed'];

/*
 ============================================================================================================
 + Global :: Member Account :: Settings :: Variables :: Security :: Setting :: Flag :: Force Logout
 ============================================================================================================
*/

$_GLOBAL_MEMBER_SECURITY_SETTING_FLAG_FORCE_LOGOUT					= $_DB_Query_Kernel_Select_Member_Credentials_Fetch_Array['member_security_setting_flag_force_logout'];

/*
 ============================================================================================================
 +
 + Check For :: Banned Registered Member Account Status
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + IF: Registered Member Account :: Banned Status :: Is: Active, Redirect To The Banned Message ( 1 ), Or ELSEWHERE
 ============================================================================================================
*/

if ($_GLOBAL_MEMBER_STATUS_ACCOUNT_BANNED >= 1) {

	header("Location: ./Theme/$_GLOBAL_SYSTEM_THEME_DIRECTORY/HTML/Banned.html");

} // [ + ] IF: Registered Member Account Is Banned

} // [ + ] IF: Registered Member Account Member Is Logged-In

/*
 ============================================================================================================
 +
 + Global :: Date, Time and Referrer :: Variables
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Global :: Local Server :: Variables :: Date :: Standard
 ============================================================================================================
*/

$_GLOBAL_LOCAL_SERVER_DATE_STANDARD							= date("l, F j, Y g:i:s A");
$_GLOBAL_LOCAL_SERVER_DATE_RFC								= date("r");

/*
 ============================================================================================================
 + Global :: Local Server :: Variables :: Date :: Year
 ============================================================================================================
*/

$_GLOBAL_LOCAL_SERVER_DATE_NUMERICAL_YEAR_FULL						= date("Y");
$_GLOBAL_LOCAL_SERVER_DATE_NUMERICAL_YEAR_SHORT						= date("y");

/*
 ============================================================================================================
 + Global :: Local Server :: Variables :: Date :: Month
 ============================================================================================================
*/

$_GLOBAL_LOCAL_SERVER_DATE_NUMERICAL_MONTH_FULL						= date("m");
$_GLOBAL_LOCAL_SERVER_DATE_NUMERICAL_MONTH_SHORT					= date("n");

/*
 ============================================================================================================
 + Global :: Local Server :: Variables :: Date :: Month :: Day
 ============================================================================================================
*/

$_GLOBAL_LOCAL_SERVER_DATE_NUMERICAL_MONTH_DAY_FULL					= date("d");

/*
 ============================================================================================================
 + Global :: Local Server :: Variables :: Date :: Year :: Month :: Day
 ============================================================================================================
*/

$_GLOBAL_LOCAL_SERVER_DATE_NUMERICAL_FULL						= date("Y-m-d");
$_GLOBAL_LOCAL_SERVER_DATE_TIME_NUMERICAL_FULL						= date("Y-m-d-g-i-s");

/*
 ============================================================================================================
 + Global :: Local Server :: Variables :: Time
 ============================================================================================================
*/

$_GLOBAL_LOCAL_SERVER_TIME_HOURS							= date("g");
$_GLOBAL_LOCAL_SERVER_TIME_MINUTES							= date("i");
$_GLOBAL_LOCAL_SERVER_TIME_SECONDS							= date("s");
$_GLOBAL_LOCAL_SERVER_TIME_HOURS_MINUTES_SECONDS					= date("g-i-s");

/*
 ============================================================================================================
 + Global :: Local Server :: Variables :: Hyper-Text-Transfer-Protocol :: Referrer
 ============================================================================================================
*/

$_GLOBAL_LOCAL_SERVER_HTTP_REFERRER							= $_SERVER['HTTP_REFERER'];

/*
 ============================================================================================================
 +
 + Global :: Remote Server :: Variables
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Global :: Remote Server :: Variables :: Machine Information
 ============================================================================================================
*/

$_GLOBAL_REMOTE_SERVER_ADDRESS								= $_SERVER['REMOTE_ADDR'];
$_GLOBAL_REMOTE_SERVER_HOSTNAME								= $_SERVER['REMOTE_HOST'];
$_GLOBAL_REMOTE_SERVER_PORT								= $_SERVER['REMOTE_PORT'];
$_GLOBAL_REMOTE_SERVER_HTTP_USER_AGENT							= $_SERVER['HTTP_USER_AGENT'];
$_GLOBAL_REMOTE_USER									= $_SERVER['REMOTE_USER'];
//$_GLOBAL_REMOTE_SERVER_LOCATION_REGION						= geoip_region_by_name('$_GLOBAL_REMOTE_SERVER_ADDRESS');

/*
 ============================================================================================================
 +
 + Global :: Local Server :: Variables
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Global :: Local Server :: Variables :: Connection :: Machine Information
 ============================================================================================================
*/

$_GLOBAL_LOCAL_SERVER_GATEWAY_INTERFACE							= $_SERVER['GATEWAY_INTERFACE'];
$_GLOBAL_LOCAL_SERVER_ADDRESS								= $_SERVER['SERVER_ADDR'];
$_GLOBAL_LOCAL_SERVER_NAME								= $_SERVER['SERVER_NAME'];
$_GLOBAL_LOCAL_SERVER_SOFTWARE								= $_SERVER['SERVER_SOFTWARE'];
$_GLOBAL_LOCAL_SERVER_PROTOCOL								= $_SERVER['SERVER_PROTOCOL'];
$_GLOBAL_LOCAL_SERVER_SIGNATURE								= $_SERVER['SERVER_SIGNATURE'];

/*
 ============================================================================================================
 + Global :: Remote Server :: Variables :: Connection :: Request Information
 ============================================================================================================
*/

$_GLOBAL_LOCAL_SERVER_REQUEST_METHOD							= $_SERVER['REQUEST_METHOD'];
$_GLOBAL_LOCAL_SERVER_REQUEST_TIME							= $_SERVER['REQUEST_TIME'];
$_GLOBAL_LOCAL_SERVER_REQUEST_TIME_FLOAT						= $_SERVER['REQUEST_TIME_FLOAT'];
$_GLOBAL_LOCAL_SERVER_QUERY_STRING							= $_SERVER['QUERY_STRING'];
$_GLOBAL_LOCAL_SERVER_DOCUMENT_ROOT							= $_SERVER['DOCUMENT_ROOT'];
$_GLOBAL_LOCAL_SERVER_DIRECTORY_CURRENT							= dirname($_SERVER['PHP_SELF']);
$_GLOBAL_LOCAL_SERVER_DIRECTORY_FILE_CURRENT						= $_SERVER['PHP_SELF'];

/*
 ============================================================================================================
 + Global :: Remote Server :: Variables :: Connection :: Hyper-Text-Transfer-Protocol Information
 ============================================================================================================
*/

$_GLOBAL_LOCAL_SERVER_HTTP_ACCEPT							= $_SERVER['HTTP_ACCEPT'];
$_GLOBAL_LOCAL_SERVER_HTTP_ACCEPT_CHARACTER_SET						= $_SERVER['HTTP_ACCEPT_CHARSET'];
$_GLOBAL_LOCAL_SERVER_HTTP_ACCEPT_ENCODING						= $_SERVER['HTTP_ACCEPT_ENCODING'];
$_GLOBAL_LOCAL_SERVER_HTTP_ACCEPT_LOADING						= $_SERVER['HTTP_ACCEPT_LOADING'];
$_GLOBAL_LOCAL_SERVER_HTTP_ACCEPT_LANGUAGE						= $_SERVER['HTTP_ACCEPT_LANGUAGE'];
$_GLOBAL_LOCAL_SERVER_HTTP_CONNECTION_TYPE						= $_SERVER['HTTP_CONNECTION'];
$_GLOBAL_LOCAL_SERVER_HTTP_HOST								= $_SERVER['HTTP_HOST'];
$_GLOBAL_LOCAL_SERVER_HTTP_REFERRER							= $_SERVER['HTTP_REFERER'];
$_GLOBAL_LOCAL_SERVER_HTTP_USER_AGENT							= $_SERVER['HTTP_USER_AGENT'];

/*
 ============================================================================================================
 +
 +
 + [ @ ] Globals :: Functions
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 + [ @ ] Global :: Function :: Delete :: Directory :: Recursively
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Function :: Delete :: Directory :: Recursively : Global_Directory_Delete_Recursively
 ============================================================================================================
*/

function Global_Directory_Delete_Recursively($Kernel_Global_Directory_Delete_Recursively) {

/*
 ============================================================================================================
 + IF: File Exists: Imaginary Directory, Return True
 ============================================================================================================
*/

if (!file_exists($Kernel_Global_Directory_Delete_Recursively)) {

	return true;

} // [ + ] IF: File Exists: Imaginary :: Directory

/*
 ============================================================================================================
 + IF: IS Directory: Imaginary Directory
 ============================================================================================================
*/

if (!is_dir($Kernel_Global_Directory_Delete_Recursively)) {

	return unlink($Kernel_Global_Directory_Delete_Recursively);

/*
 ============================================================================================================
 + FOR EACH: Imaginary Directory Contents Scanned Within The Imaginary Directory
 ============================================================================================================
*/

foreach (scanddir($Kernel_Global_Directory_Delete_Recursively) as $Kernel_Global_Directory_Delete_Recursively_Item) {

/*
 ============================================================================================================
 + IF: STOP :: Exploit :: Remote-File-Inclusion AND Local-File-Inclusion
 ============================================================================================================
*/

if ($Kernel_Global_Directory_Delete_Recursively_Item == '.' || $Kernel_Global_Directory_Delete_Recursively_Item == '..') {

/*
 ============================================================================================================
 + IF: NOT Delete Directory :: Imaginary Directory Contents, Return False
 ============================================================================================================
*/

if (!delete_directory($Kernel_Global_Directory_Delete_Recursively_Item . DIRECTORY_SEPARATOR . $Kernel_Global_Directory_Delete_Recursively_Item)) {

	return false;

} // [ + ] IF: NOT :: Global_Directory_Delete_Recursively, Return False

} // [ + ] IF: STOP :: Exploit :: Remote-File-Inclusion AND Local-File-Inclusion

/*
 ============================================================================================================
 + AFTER: Recursively Deleting Each Imaginary File Within The Imaginary Directory, Remove The Imaginary Directory Itself
 ============================================================================================================
*/

	return rmdir($Kernel_Global_Directory_Delete_Recursively);

} // [ + ] FOREACH: Scan Directory Contents :: OF :: Imaginary Directory :: AS :: The Imaginary Files

} // [ + ] IS Directory: Imaginary Directory

} // [ + ] FUNCTION: Global Delete Directory Recursively :: Imaginary Directory

//Global_Directory_Delete_Recursively("");

/*
 ============================================================================================================
 +
 +
 +
 + [ @ ] Internal :: Security :: Application Modules
 +
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 +
 + Global :: System :: Security :: Application Module :: Master Sanitization
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + IF: Global :: System :: Security :: Setting :: Master Sanitization :: Status :: Is: On
 ============================================================================================================
*/

if ($_GLOBAL_SETTING_SYSTEM_SECURITY_MODULE_STATUS_MASTER_SANITIZATION >= 1) {

/*
 ============================================================================================================
 + IF: Global :: System :: Security :: File: Master Sanitization :: Exists, Include It
 ============================================================================================================
*/

$_GLOBAL_SYSTEM_SECURITY_MODULE_FILE_MASTER_SANITIZATION					= "./System/Security/Module/Sanitization/$_GLOBAL_SETTING_SYSTEM_SECURITY_MODULE_DIRECTORY_MASTER_SANITIZATION/Sanitization.$_INTERNAL_FILE_EXTENSION";

if (file_exists($_GLOBAL_SYSTEM_SECURITY_MODULE_FILE_MASTER_SANITIZATION)) {

	include_once "$_GLOBAL_SYSTEM_SECURITY_MODULE_FILE_MASTER_SANITIZATION";

} else {

	echo ("Kernel: Message: Error :: Missing :: System :: Security :: Module :: File :: Sanitization :: Master Sanitization");

} // [ + ] IF: Include: Global :: System :: Security :: Module :: File :: Sanitization :: File: Master Sanitization

} // [ + ] IF: Global :: System :: Security :: Setting :: Master Sanitization :: Status :: Is: On OR Off

/*
 ============================================================================================================
 +
 +
 +
 + [ @ ] Internal :: Applications
 +
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 +
 + Internal :: Application :: Login
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + IF: Internal Application :: Login :: Is Activated
 ============================================================================================================
*/

if ($_GET["$_INTERNAL_APPLICATION_MODULE_INTERNAL"] == "Login") {

/*
 ============================================================================================================
 +
 + Internal Application :: Login Form :: Variables :: Post Variables
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Internal Security => Sanitize :: Post Data :: Electronic Mail Address
 ============================================================================================================
*/

$_Kernel_Authenticate_Member_Account_POST_ELECTRONIC_MAIL_ADDRESS_CLEAR				= $_POST['IAM_Login_Electronic_Mail_Address'];

/*
 ============================================================================================================
 + Internal Security => Sanitize :: Post Data :: Password
 ============================================================================================================
*/

$_Kernel_Authenticate_Member_Account_POST_PASSWORD_CLEAR					= $_POST['IAM_Login_Password'];

/*
 ============================================================================================================
 + Internal Security => Sanitize :: Post Data :: UserName
 ============================================================================================================
*/

$_Kernel_Authenticate_Member_Account_POST_USERNAME_CLEAR					= $_POST['IAM_Login_UserName'];

/*
 ============================================================================================================
 + Internal Security => Convert Electronic Mail Address String To LowerCase String
 ============================================================================================================
*/

$_Kernel_Authenticate_Member_Account_POST_ELECTRONIC_MAIL_ADDRESS_CLEAR				= strtolower($_Kernel_Authenticate_Member_Account_POST_ELECTRONIC_MAIL_ADDRESS_CLEAR);

/*
 ============================================================================================================
 + Internal Security => Convert UserName String To LowerCase String With UpperCase First Character
 ============================================================================================================
*/

$_Kernel_Authenticate_Member_Account_POST_USERNAME_CLEAR					= strtolower($_Kernel_Authenticate_Member_Account_POST_USERNAME_CLEAR);
$_Kernel_Authenticate_Member_Account_POST_USERNAME_CLEAR					= ucfirst($_Kernel_Authenticate_Member_Account_POST_USERNAME_CLEAR);

/*
 ============================================================================================================
 +
 + Internal Security :: Login :: Check Post Data To Database Server Stored Data
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Database Server Query: Check Database Entries For Registered Member Account With Provided Credentials
 ============================================================================================================
*/

$DB_Query_Kernel_Authenticate_Check_Member_Account_Credentials 					= $DB->query("SELECT * FROM {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_members WHERE member_username='$_Kernel_Authenticate_Member_Account_POST_USERNAME_CLEAR' AND member_electronic_mail_address='$_Kernel_Authenticate_Member_Account_POST_ELECTRONIC_MAIL_ADDRESS_CLEAR'");
$DB_Query_Kernel_Authenticate_Check_Member_Account_Entry					= $DB->num_rows($DB_Query_Kernel_Authenticate_Check_Member_Account_Credentials);

/*
 ============================================================================================================
 + Database Server Query: Check Database For Existing Registered Member Account With Provided Credentials
 ============================================================================================================
*/

if ($DB_Query_Kernel_Authenticate_Check_Member_Account_Entry >= "1") {

/*
 ============================================================================================================
 + Fetch Real Registered Member Account Data From Database Server Entries
 ============================================================================================================
*/

$DB_Query_Kernel_Authenticate_Check_Member_Account_Credentials_Fetch_Array			= $DB->fetch_array($DB_Query_Kernel_Authenticate_Check_Member_Account_Credentials);
$DB_Query_Kernel_Authenticate_Check_Member_Account_Credentials_Member_UserName			= $DB_Query_Kernel_Authenticate_Check_Member_Account_Credentials_Fetch_Array['member_username'];
$DB_Query_Kernel_Authenticate_Check_Member_Account_Credentials_Member_Electronic_Mail_Address	= $DB_Query_Kernel_Authenticate_Check_Member_Account_Credentials_Fetch_Array['member_electronic_mail_address'];
$DB_Query_Kernel_Authenticate_Check_Member_Account_Credentials_Member_Password			= $DB_Query_Kernel_Authenticate_Check_Member_Account_Credentials_Fetch_Array['member_password'];
$DB_Query_Kernel_Authenticate_Check_Member_Account_Credentials_Member_Status_Account_Locked	= $DB_Query_Kernel_Authenticate_Check_Member_Account_Credentials_Fetch_Array['member_status_account_locked'];
$DB_Query_Kernel_Authenticate_Check_Member_Account_Credentials_Member_Attempt_Authentication	= $DB_Query_Kernel_Authenticate_Check_Member_Account_Credentials_Fetch_Array['member_attempt_authentication'];

/*
 ============================================================================================================
 + IF: Registered Member Account Status Is: Locked, Redirect To Member Account Locked Message
 ============================================================================================================
*/

if ($DB_Query_Kernel_Authenticate_Check_Member_Account_Credentials_Member_Status_Account_Locked > "0") {

	header("Location: ?$_INTERNAL_APPLICATION_MODULE_MEMBER=Login&Message=AccountLocked");

} else {

/*
 ============================================================================================================
 + IF: Registered Member Account Authentication Attempt Is: Greater Than Or Equal To 5, Redirect To Member Account Locked Message
 ============================================================================================================
*/

if ($DB_Query_Kernel_Authenticate_Check_Member_Account_Credentials_Member_Attempt_Authentication >= "5") {

	header("Location: ?$_INTERNAL_APPLICATION_MODULE_MEMBER=Login&Message=AccountLocked");

} else {

/*
 ============================================================================================================
 + IF: Posted Clear-Text Password -> Encrypted Password String Is The Exact Encrypted Password String Stored In The Database Server, Verify The Password
 ============================================================================================================
*/

if (password_verify($_Kernel_Authenticate_Member_Account_POST_PASSWORD_CLEAR, $DB_Query_Kernel_Authenticate_Check_Member_Account_Credentials_Member_Password)) {

/*
 ============================================================================================================
 + The Registered Member Account Password Has Been Verified Exactly, Set All Valid Credential Cookies
 ============================================================================================================
*/

	setcookie("kernel_member_electronic_mail_address", "$_Kernel_Authenticate_Member_Account_POST_ELECTRONIC_MAIL_ADDRESS_CLEAR", time()+$_GLOBAL_SYSTEM_COOKIE_TIME);
	setcookie("kernel_member_username", "$_Kernel_Authenticate_Member_Account_POST_USERNAME_CLEAR", time()+$_GLOBAL_SYSTEM_COOKIE_TIME);
	setcookie("kernel_member_password", "$DB_Query_Kernel_Authenticate_Check_Member_Account_Credentials_Member_Password", time()+$_GLOBAL_SYSTEM_COOKIE_TIME);

/*
 ============================================================================================================
 + Registered Member Account :: Authentication Log :: Private :: Variables
 ============================================================================================================
*/

$_Kernel_Member_Account_Authentication_Log_Private_OPEN_FILE_NAME				= fopen("./Member/$_Kernel_Authenticate_Member_Account_POST_USERNAME_CLEAR/Files/Document/Activity_Logging/Authentication_Log_Private.php", "a");
$_Kernel_Member_Account_Authentication_Log_Private_TIMESTAMP_HASH				= hash('sha256', $_GLOBAL_LOCAL_SERVER_DATE_STANDARD);

/*
 ============================================================================================================
 + Registered Member Account :: Authentication Log :: Public :: Variables
 ============================================================================================================
*/

$_Kernel_Member_Account_Authentication_Log_Public_OPEN_FILE_NAME				= fopen("./Member/$_Kernel_Authenticate_Member_Account_POST_USERNAME_CLEAR/Files/Document/Activity_Logging/Authentication_Log_Public.php", "a");
$_Kernel_Member_Account_Authentication_Log_Public_TIMESTAMP_HASH				= hash('sha256', $_GLOBAL_LOCAL_SERVER_DATE_STANDARD);

/*
 ============================================================================================================
 + Write :: Registered Member Account :: Authentication Log :: Private :: Write Authentication Data To Authentication Log
 ============================================================================================================
*/

fwrite($_Kernel_Member_Account_Authentication_Log_Private_OPEN_FILE_NAME, "
---------------------------------------------------------------------------------------
Kernel Message: 
This Registered Member Account Successfully Authenticated: $_Kernel_Authenticate_Member_Account_POST_USERNAME_CLEAR
---------------------------------------------------------------------------------------
Registered Member Account
---------------------------------------------------------------------------------------
* Registered Member Account :: Electronic Mail Address: $_Kernel_Authenticate_Member_Account_POST_ELECTRONIC_MAIL_ADDRESS_CLEAR
* Registered Member Account :: UserName: $_Kernel_Authenticate_Member_Account_POST_USERNAME_CLEAR
* Registered Member Account :: Password: ****************************

---------------------------------------------------------------------------------------
Internet Protocol Addresses
---------------------------------------------------------------------------------------
* Internet Protocol Address :: Remote Server: $_GLOBAL_REMOTE_SERVER_ADDRESS
* Internet Protocol Address :: Local Server: $_GLOBAL_LOCAL_SERVER_ADDRESS
* Internet Protocol Address :: Connecting Port Number :: Local Server: $_GLOBAL_REMOTE_SERVER_PORT

---------------------------------------------------------------------------------------
Timestamps
---------------------------------------------------------------------------------------
* Timestamp :: Digital Fingerprint :: Timestamp HASH: $_Kernel_Member_Account_Authentication_Log_Private_TIMESTAMP_HASH
* Timestamp :: Authentication From The Local Server: $_GLOBAL_LOCAL_SERVER_DATE_STANDARD
* Timestamp :: Authentication From The Remote Server: $_GLOBAL_LOCAL_SERVER_DATE_STANDARD

---------------------------------------------------------------------------------------
Digital Fingerprints
---------------------------------------------------------------------------------------
* Digital Fingerprint :: Unique :: Clear-Text :: $_GLOBAL_MEMBER_SECURITY_FINGERPRINT_CLEARTEXT
* Digital Fingerprint :: Unique :: HASHED :: $_GLOBAL_MEMBER_SECURITY_FINGERPRINT_CLEARTEXT

---------------------------------------------------------------------------------------
Device
---------------------------------------------------------------------------------------
* Device :: Reported Web Browser :: $_GLOBAL_REMOTE_SERVER_HTTP_USER_AGENT_DISPLAY
* Device :: Location :: From H.T.M.L. :: Global-Positioning-Coordinates In X ::
* Device :: Location :: From H.T.M.L. :: Global-Positioning-Coordinates In Y ::
* Device :: Location :: From P.H.P. :: Global-Positioning-Coordinates In X ::
* Device :: Location :: From P.H.P. :: Global-Positioning-Coordinates In Y ::
* Device :: Location :: Geo-Localization-Objects :: $_GLOBAL_MEMBER_LOCATION_CURRENT_GLO
* Device :: Location :: Region :: $_GLOBAL_MEMBER_LOCATION_CURRENT_REGION
---------------------------------------------------------------------------------------
");

/*
 ============================================================================================================
 + Write :: Registered Member Account :: Authentication Log :: Public :: Write Authentication Data To Authentication Log
 ============================================================================================================
*/

fwrite($_Kernel_Member_Account_Authentication_Log_Public_OPEN_FILE_NAME, "
---------------------------------------------------------------------------------------
Kernel Message: 
This Registered Member Account Successfully Authenticated: $_Kernel_Authenticate_Member_Account_POST_USERNAME_CLEAR
---------------------------------------------------------------------------------------
Registered Member Account
---------------------------------------------------------------------------------------
* Registered Member Account :: Electronic Mail Address: ****************************
* Registered Member Account :: UserName: $_Kernel_Authenticate_Member_Account_POST_USERNAME_CLEAR
* Registered Member Account :: Password: ****************************

---------------------------------------------------------------------------------------
Internet Protocol Addresses
---------------------------------------------------------------------------------------
* Internet Protocol Address :: Remote Server: $_GLOBAL_REMOTE_SERVER_ADDRESS
* Internet Protocol Address :: Local Server: $_GLOBAL_LOCAL_SERVER_ADDRESS
* Internet Protocol Address :: Connecting Port Number :: Local Server: $_GLOBAL_REMOTE_SERVER_PORT

---------------------------------------------------------------------------------------
Timestamps
---------------------------------------------------------------------------------------
* Timestamp :: Digital Fingerprint :: Timestamp HASH: $_Kernel_Member_Account_Authentication_Log_Private_TIMESTAMP_HASH
* Timestamp :: Authentication From The Local Server: $_GLOBAL_LOCAL_SERVER_DATE_STANDARD
* Timestamp :: Authentication From The Remote Server: $_GLOBAL_LOCAL_SERVER_DATE_STANDARD

---------------------------------------------------------------------------------------
Digital Fingerprints
---------------------------------------------------------------------------------------
* Digital Fingerprint :: Unique :: Clear-Text :: $_GLOBAL_MEMBER_SECURITY_FINGERPRINT_CLEARTEXT
* Digital Fingerprint :: Unique :: HASHED :: $_GLOBAL_MEMBER_SECURITY_FINGERPRINT_HASHED

---------------------------------------------------------------------------------------
Device
---------------------------------------------------------------------------------------
* Device :: Reported Web Browser :: $_GLOBAL_REMOTE_SERVER_HTTP_USER_AGENT_DISPLAY
* Device :: Location :: From H.T.M.L. :: Global-Positioning-Coordinates In X ::
* Device :: Location :: From H.T.M.L. :: Global-Positioning-Coordinates In Y ::
* Device :: Location :: From P.H.P. :: Global-Positioning-Coordinates In X ::
* Device :: Location :: From P.H.P. :: Global-Positioning-Coordinates In Y ::
* Device :: Location :: Geo-Localization-Objects :: $_GLOBAL_MEMBER_LOCATION_CURRENT_GLO
* Device :: Location :: Region :: $_GLOBAL_MEMBER_LOCATION_CURRENT_REGION
---------------------------------------------------------------------------------------
");

/*
 ============================================================================================================
 + Close File :: Registered Member Account :: Authentication Log :: Private
 ============================================================================================================
*/

fclose($_Kernel_Member_Account_Authentication_Log_Private_OPEN_FILE_NAME);

/*
 ============================================================================================================
 + Close File :: Registered Member Account :: Authentication Log :: Public
 ============================================================================================================
*/

fclose($_Kernel_Member_Account_Authentication_Log_Public_OPEN_FILE_NAME);

/*
 ============================================================================================================
 + The Registered Member Account Password Has Been Verified and Set Exactly: Set Registered Member Account Last Login Internet Protocol Address To Current
 ============================================================================================================
*/

$_DB_Query_Kernel_Login_Set_Member_Status_Account_IP_Address_Last_Authentication_Server_Remote	= $DB->query("UPDATE {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_members SET member_ip_address_last_authentication_server_remote='$_GLOBAL_REMOTE_SERVER_ADDRESS' WHERE member_username='$_Kernel_Authenticate_Member_Account_POST_USERNAME_CLEAR'");
$_DB_Query_Kernel_Login_Set_Member_Status_Account_IP_Address_Last_Authentication_Server_Local	= $DB->query("UPDATE {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_members SET member_ip_address_last_authentication_server_local='$_GLOBAL_LOCAL_SERVER_ADDRESS' WHERE member_username='$_Kernel_Authenticate_Member_Account_POST_USERNAME_CLEAR'");
$_DB_Query_Kernel_Login_Set_Member_Status_Account_IP_Address_Last_Authentication_Server_Device	= $DB->query("UPDATE {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_members SET member_ip_address_last_authentication_server_device='$_GLOBAL_REMOTE_SERVER_ADDRESS' WHERE member_username='$_Kernel_Authenticate_Member_Account_POST_USERNAME_CLEAR'");
$_DB_Query_Kernel_Login_Set_Member_Status_Account_Active					= $DB->query("UPDATE {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_members SET member_status_account_active='1' WHERE member_username='$_Kernel_Authenticate_Member_Account_POST_USERNAME_CLEAR'");

/*
 ============================================================================================================
 + IF: Database Server Query: Update The Registered Member Account Last Login Internet Protocol Address To Current
 ============================================================================================================
*/

if ($_DB_Query_Kernel_Login_Set_Member_Status_Account_IP_Address_Last_Authentication_Server_Remote && $_DB_Query_Kernel_Login_Set_Member_Status_Account_IP_Address_Last_Authentication_Server_Local && $_DB_Query_Kernel_Login_Set_Member_Status_Account_IP_Address_Last_Authentication_Server_Device && $_DB_Query_Kernel_Login_Set_Member_Status_Account_Active) {
/**
 * Do Nothing
**/
} else {
/**
 * Do Nothing
**/
} // [ + ] IF: Internal Application: Login Is Activated: Set :: Registered Member Account :: Last Authentication Details AND Active Status To Active

/*
 ============================================================================================================
 + Header Redirect :: Registered Member Account Control Panel
 ============================================================================================================
*/
	
	header("Location: ?$_INTERNAL_APPLICATION_MODULE_MEMBER=Control_Panel");
	
} else { // Registered Member Account UserName, Electronic Mail Address AND Password Failed Authentication -> Write To Authentication Log

/*
 ============================================================================================================
 +
 + IF: Posted Data Is Incorrect Information: Log The Authentication Attempt and Redirect To No Known Member Message
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Registered Member Account :: Authentication Log :: Variables
 ============================================================================================================
*/

$_Kernel_Member_Account_Authentication_Log_Private_OPEN_FILE_NAME					= fopen("./Member/$_Kernel_Authenticate_Member_Account_POST_USERNAME_CLEAR/Files/Document/Activity_Logging/Authentication_Log.php", "a");
$_Kernel_Member_Account_Authentication_Log_Private_TIMESTAMP_HASH					= hash('sha256', $_GLOBAL_LOCAL_SERVER_DATE_STANDARD);

/*
 ============================================================================================================
 + Write To File :: Registered Member Account :: Authentication Log :: Write Authentication Attempt Data To Authentication Log
 ============================================================================================================
*/

fwrite($_Kernel_Member_Account_Authentication_Log_Private_OPEN_FILE_NAME, "
---------------------------------------------------------------------------------------
Kernel Message: 
This Registered Member Account Attempted To Authenticate: $_Kernel_Authenticate_Member_Account_POST_USERNAME_CLEAR
---------------------------------------------------------------------------------------
Input :: Credentials
---------------------------------------------------------------------------------------
* Input :: Electronic Mail Address: $_Kernel_Authenticate_Member_Account_POST_ELECTRONIC_MAIL_ADDRESS_CLEAR
* Input :: UserName: $_Kernel_Authenticate_Member_Account_POST_USERNAME_CLEAR
* Input :: Password: ****************************

---------------------------------------------------------------------------------------
Internet Protocol Addresses
---------------------------------------------------------------------------------------
* Internet Protocol Address :: Remote Server: $_GLOBAL_REMOTE_SERVER_ADDRESS
* Internet Protocol Address :: Local Server: $_GLOBAL_LOCAL_SERVER_ADDRESS
* Internet Protocol Address :: Connecting Port Number :: Local Server: $_GLOBAL_REMOTE_SERVER_PORT

---------------------------------------------------------------------------------------
Timestamps
---------------------------------------------------------------------------------------
* Timestamp :: Digital Fingerprint :: Timestamp HASH: $_Kernel_Member_Account_Authentication_Log_Private_TIMESTAMP_HASH
* Timestamp :: Authentication From The Local Server: $_GLOBAL_LOCAL_SERVER_DATE_STANDARD
* Timestamp :: Authentication From The Remote Server: $_GLOBAL_LOCAL_SERVER_DATE_STANDARD

---------------------------------------------------------------------------------------
Digital Fingerprints
---------------------------------------------------------------------------------------
* Digital Fingerprint :: Unique :: Clear-Text :: $_GLOBAL_MEMBER_SECURITY_FINGERPRINT_CLEARTEXT
* Digital Fingerprint :: Unique :: HASHED :: $_GLOBAL_MEMBER_SECURITY_FINGERPRINT_CLEARTEXT

---------------------------------------------------------------------------------------
Device Details
---------------------------------------------------------------------------------------
* Device :: Reported Web Browser :: ****************************
* Device :: Location :: Global-Positioning-Coordinates In X,Y :: $_GLOBAL_MEMBER_LOCATION_CURRENT_GPS
* Device :: Location :: Geo-Localization-Objects :: $_GLOBAL_MEMBER_LOCATION_CURRENT_GLO
* Device :: Location :: Region :: $_GLOBAL_MEMBER_LOCATION_CURRENT_REGION
---------------------------------------------------------------------------------------
");

/*
 ============================================================================================================
 + Database Server Query: Update Authentication Log Attempts In Database Server :: Registered Member Account
 ============================================================================================================
*/

$_Kernel_Check_Member_Account_Credentials_Increment_Member_Attempt_Authentication		= $DB_Query_Kernel_Authenticate_Check_Member_Account_Credentials_Member_Attempt_Authentication + 1;
$DB_Query_Kernel_Member_Account_Update_Attempt_Authentication					= $DB->query("UPDATE {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_members SET member_attempt_authentication='$_Kernel_Check_Member_Account_Credentials_Increment_Member_Attempt_Authentication' WHERE member_username='$_Kernel_Authenticate_Member_Account_POST_USERNAME_CLEAR'");

if ($DB_Query_Kernel_Member_Account_Update_Attempt_Authentication) {
/**
 * Do Nothing
**/
} else {
/**
 * Do Nothing
**/
} // [ + ] IF: Update :: Registered Member Account :: Authentication Attempt Number

/*
 ============================================================================================================
 + Kill Database Server Query: Update :: Registered Member Account :: Last Login :: Server :: Local
 ============================================================================================================
*/

$DB->free($_DB_Query_Kernel_Login_Set_Member_Status_Account_IP_Address_Last_Authentication_Server_Local);

/*
 ============================================================================================================
 + Kill Database Server Query: Update :: Registered Member Account :: Last Login :: Server :: Remote
 ============================================================================================================
*/

$DB->free($_DB_Query_Kernel_Login_Set_Member_Status_Account_IP_Address_Last_Authentication_Server_Remote);

/*
 ============================================================================================================
 + Kill Database Server Query: Update :: Registered Member Account :: Last Login :: Server :: Device
 ============================================================================================================
*/

$DB->free($_DB_Query_Kernel_Login_Set_Member_Status_Account_IP_Address_Last_Authentication_Server_Device);

/*
 ============================================================================================================
 + Kill Database Server Query: Update :: Registered Member Account :: Authentication Attempt Number
 ============================================================================================================
*/

$DB->free($DB_Query_Kernel_Member_Account_Update_Attempt_Authentication);

/*
 ============================================================================================================
 + Redirect To No Known Registered Member Account Message
 ============================================================================================================
*/

	header("Location: ?$_INTERNAL_APPLICATION_MODULE_MEMBER=Login&Message=No_Member");

} // [ + ] IF: Registered Member Account Status Is: Locked, Redirect To Member Account Locked Status Message

} // [ + ] IF: Registered Member Account Authentication Attempt Is: Greater Than Or Equal To 5, Redirect To Member Account Locked Status Message
	
} // [ + ] IF: Verify Password Function: Take Clear-Text Password, Encrypt It and Then Compare It To Encrypted Stored Password

/*
 ============================================================================================================
 + Kill Database Server Query: Check Registered Member Account Credentials Data
 ============================================================================================================
*/

$DB->free($DB_Query_Kernel_Authenticate_Check_Member_Account_Credentials);

/*
 ============================================================================================================
 + Kill Database Server Query: Check Registered Member Account Credentials Data :: Array
 ============================================================================================================
*/

$DB->free($DB_Query_Kernel_Authenticate_Check_Member_Account_Credentials_Array);

} else { // Database Server Query :: Check :: Number of Rows :: Registered Member Account Based On Provided Credentials

/*
 ============================================================================================================
 + Dabatase Server Check: Registered Member Account Entry Does Not Exist :: Redirect To No Known Registered Member Account Message
 ============================================================================================================
*/

	header("Location: ?$_INTERNAL_APPLICATION_MODULE_MEMBER=Login&Message=No_Member");

} // [ + ] IF: Database Server Query :: Check :: Number of Rows :: Registered Member Account Based On Provided Credentials

/*
 ============================================================================================================
 + Kill Database Server Query: Check Registered Member Account Database Table Column Entry
 ============================================================================================================
*/

$DB->free($DB_Query_Kernel_Authenticate_Check_Member_Account_Entry);

} // [ + ] IF: Internal Application: Login Is Activated

/*
 ============================================================================================================
 +
 +
 + Internal :: Application :: Logout
 +
 +
 ============================================================================================================
*/

if ($_GET["$_INTERNAL_APPLICATION_MODULE_INTERNAL"] == "Logout") {

/*
 ============================================================================================================
 + IF: Check For Valid Registered Member Account Credential Data In Browser Cookies
 ============================================================================================================
*/

if ($_GLOBAL_COOKIE_MEMBER_USERNAME && $_GLOBAL_COOKIE_MEMBER_PASSWORD != null) {

/*
 ============================================================================================================
 + Database Server Query: Remove Authorized Registered Member Account Internet Protocol Address
 ============================================================================================================
*/

$_DB_Query_Kernel_Logout_Remove_Member_Account_Authorized_IP_Address				= $DB->query("UPDATE {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_members SET member_ip_address_authorized='000.000.000.000' WHERE member_username='$_GLOBAL_COOKIE_MEMBER_USERNAME' AND member_electronic_mail_address='$_GLOBAL_COOKIE_MEMBER_ELECTRONIC_MAIL_ADDRESS'");
$_DB_Query_Kernel_Logout_Remove_Member_Account_Status_Active					= $DB->query("UPDATE {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_members SET member_status_account_active='0' WHERE member_username='$_GLOBAL_COOKIE_MEMBER_USERNAME' AND member_electronic_mail_address='$_GLOBAL_COOKIE_MEMBER_ELECTRONIC_MAIL_ADDRESS'");
$_DB_Query_Kernel_Logout_Remove_Member_Account_IP_Authorization_Token				= $DB->query("UPDATE {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_members SET member_ip_address_authorization_token='0' WHERE member_username='$_GLOBAL_COOKIE_MEMBER_USERNAME' AND member_electronic_mail_address='$_GLOBAL_COOKIE_MEMBER_ELECTRONIC_MAIL_ADDRESS'");

/*
 ============================================================================================================
 + IF: Database Server Query: Remove Authorized Registered Member Account Internet Protocol Address
 ============================================================================================================
*/

if ($_DB_Query_Kernel_Logout_Remove_Member_Account_Authorized_IP_Address && $_DB_Query_Kernel_Logout_Remove_Member_Account_Status_Active && $_DB_Query_Kernel_Logout_Remove_Member_Account_IP_Authorization_Token) {

/*
 ============================================================================================================
 + Reduce Time On All Stored Browser Cookies
 ============================================================================================================
*/

	setcookie("kernel_member_electronic_mail_address","", time()-42000);
	setcookie("kernel_member_username", "", time()-42000);
	setcookie("kernel_member_password", "", time()-42000);
	setcookie("kernel_member_language", "", time()-42000);

/*
 ============================================================================================================
 + Member Account :: Log :: Logout :: Private :: Variables
 ============================================================================================================
*/

$_Kernel_Member_Account_Logout_Log_Private_OPEN_FILE_NAME					= fopen("./Member/$_GLOBAL_COOKIE_MEMBER_USERNAME/Files/Document/Activity_Logging/Authentication_Log_Private.php", "a");
$_Kernel_Member_Account_Logout_Log_Private_TIMESTAMP_HASH					= hash('sha256', $_GLOBAL_LOCAL_SERVER_DATE_STANDARD);

/*
 ============================================================================================================
 + Member Account :: Log :: Logout :: Public :: Variables
 ============================================================================================================
*/

$_Kernel_Member_Account_Logout_Log_Public_OPEN_FILE_NAME					= fopen("./Member/$_GLOBAL_COOKIE_MEMBER_USERNAME/Files/Document/Activity_Logging/Authentication_Log_Public.php", "a");
$_Kernel_Member_Account_Logout_Log_Public_TIMESTAMP_HASH					= hash('sha256', $_GLOBAL_LOCAL_SERVER_DATE_STANDARD);

/*
 ============================================================================================================
 + Write To File :: Registered Member Account :: Log :: Logout :: Private :: Write Logout Details To Authentication Log
 ============================================================================================================
*/

fwrite($_Kernel_Member_Account_Logout_Log_Private_OPEN_FILE_NAME, "
---------------------------------------------------------------------------------------
Kernel Message: 
This Registered Member Account Successfully Logged-Out: $_Kernel_Authenticate_Member_Account_POST_USERNAME_CLEAR
---------------------------------------------------------------------------------------
Registered Member Account
---------------------------------------------------------------------------------------
* Registered Member Account :: Electronic Mail Address: $_Kernel_Authenticate_Member_Account_POST_ELECTRONIC_MAIL_ADDRESS_CLEAR
* Registered Member Account :: UserName: $_Kernel_Authenticate_Member_Account_POST_USERNAME_CLEAR
* Registered Member Account :: Password: ****************************

---------------------------------------------------------------------------------------
Internet Protocol Address
---------------------------------------------------------------------------------------
* Internet Protocol Address :: Remote Server: $_GLOBAL_REMOTE_SERVER_ADDRESS
* Internet Protocol Address :: Local Server: $_GLOBAL_LOCAL_SERVER_ADDRESS
* Internet Protocol Address :: Connecting Port Number :: Local Server: $_GLOBAL_REMOTE_SERVER_PORT

---------------------------------------------------------------------------------------
Timestamp
---------------------------------------------------------------------------------------
* Timestamp :: Digital Fingerprint :: Timestamp HASH: $_Kernel_Member_Account_Authentication_Log_Private_TIMESTAMP_HASH
* Timestamp :: Authentication From The Local Server: $_GLOBAL_LOCAL_SERVER_DATE_STANDARD
* Timestamp :: Authentication From The Remote Server: $_GLOBAL_LOCAL_SERVER_DATE_STANDARD

---------------------------------------------------------------------------------------
Digital Fingerprints
---------------------------------------------------------------------------------------
* Digital Fingerprint :: Unique :: Clear-Text :: $_GLOBAL_MEMBER_SECURITY_FINGERPRINT_CLEARTEXT
* Digital Fingerprint :: Unique :: HASHED :: $_GLOBAL_MEMBER_SECURITY_FINGERPRINT_CLEARTEXT

---------------------------------------------------------------------------------------
Device
---------------------------------------------------------------------------------------
* Device :: Reported Web Browser :: ****************************
* Device :: Location :: Global-Positioning-Coordinates In X,Y :: $_GLOBAL_MEMBER_LOCATION_CURRENT_GPS
* Device :: Location :: Geo-Localization-Objects :: $_GLOBAL_MEMBER_LOCATION_CURRENT_GLO
* Device :: Location :: Region :: $_GLOBAL_MEMBER_LOCATION_CURRENT_REGION
---------------------------------------------------------------------------------------
");

/*
 ============================================================================================================
 + Write To File :: Registered Member Account :: Log :: Logout :: Public :: Write Logout Details To Authentication Log
 ============================================================================================================
*/

fwrite($_Kernel_Member_Account_Logout_Log_Public_OPEN_FILE_NAME, "
---------------------------------------------------------------------------------------
Kernel Message: 
This Registered Member Account Successfully Logged-Out: $_Kernel_Authenticate_Member_Account_POST_USERNAME_CLEAR
---------------------------------------------------------------------------------------
Registered Member Account
---------------------------------------------------------------------------------------
* Registered Member Account :: Electronic Mail Address: ****************************
* Registered Member Account :: UserName: $_Kernel_Authenticate_Member_Account_POST_USERNAME_CLEAR
* Registered Member Account :: Password: ****************************

---------------------------------------------------------------------------------------
Internet Protocol Address
---------------------------------------------------------------------------------------
* Internet Protocol Address :: Remote Server: $_GLOBAL_REMOTE_SERVER_ADDRESS
* Internet Protocol Address :: Local Server: $_GLOBAL_LOCAL_SERVER_ADDRESS
* Internet Protocol Address :: Connecting Port Number :: Local Server: $_GLOBAL_REMOTE_SERVER_PORT

---------------------------------------------------------------------------------------
Timestamp
---------------------------------------------------------------------------------------
* Timestamp :: Digital Fingerprint :: Timestamp HASH: $_Kernel_Member_Account_Authentication_Log_Private_TIMESTAMP_HASH
* Timestamp :: Authentication From The Local Server: $_GLOBAL_LOCAL_SERVER_DATE_STANDARD
* Timestamp :: Authentication From The Remote Server: $_GLOBAL_LOCAL_SERVER_DATE_STANDARD

---------------------------------------------------------------------------------------
Digital Fingerprints
---------------------------------------------------------------------------------------
* Digital Fingerprint :: Unique :: Clear-Text :: $_GLOBAL_MEMBER_SECURITY_FINGERPRINT_CLEARTEXT

---------------------------------------------------------------------------------------
Device
---------------------------------------------------------------------------------------
* Device :: Reported Web Browser :: $_GLOBAL_REMOTE_SERVER_HTTP_USER_AGENT_DISPLAY
* Device :: Location :: Global-Positioning-Coordinates In X,Y :: $_GLOBAL_MEMBER_LOCATION_CURRENT_GPS
* Device :: Location :: Geo-Localization-Objects :: $_GLOBAL_MEMBER_LOCATION_CURRENT_GLO
* Device :: Location :: Region :: $_GLOBAL_MEMBER_LOCATION_CURRENT_REGION
---------------------------------------------------------------------------------------
");

/*
 ============================================================================================================
 + Close File :: Registered Member Account :: Log :: Logout :: Private
 ============================================================================================================
*/

fclose($_Kernel_Member_Account_Logout_Log_Private_OPEN_FILE_NAME);

/*
 ============================================================================================================
 + Close File :: Registered Member Account :: Log :: Logout :: Public
 ============================================================================================================
*/

fclose($_Kernel_Member_Account_Logout_Log_Public_OPEN_FILE_NAME);

} else {
/**
 * Do Nothing
**/
} // [ + ] IF: Database Server Query :: Update :: Registered Member Account Entry :: Remove Authorized Internet Protocol Address & Token, Set Account To Inactive

/*
 ============================================================================================================
 + Kill Database Server Query: Remove Authorized Member Account Internet Protocol Address
 ============================================================================================================
*/

$DB->free($_DB_Query_Kernel_Logout_Remove_Member_Account_Authorized_IP_Address);

/*
 ============================================================================================================
 + Secure-Destroy All Stored Browser Cookies
 ============================================================================================================
*/

/*
 + Nothing Here Yet
*/

/*
 ============================================================================================================
 + Header Redirect :: News
 ============================================================================================================
*/
	
	header("Location: ?$_INTERNAL_APPLICATION_MODULE_MEMBER=News");

} // [ + ] IF: Check For :: Valid Registered Member Account Credential Data :: In Browser Cookies

} // [ + ] IF: Internal Application: Logout Is Activated

/*
 ============================================================================================================
 +
 +
 + Internal :: Application :: Set Language
 +
 +
 ============================================================================================================
*/

if ($_GET["$_INTERNAL_APPLICATION_MODULE_INTERNAL"] == "Language") {

	$_KERNEL_POST_SET_LANGUAGE	 							= $_POST['IAM_Set_Language'];
	
	setcookie("kernel_member_language", "$_KERNEL_POST_SET_LANGUAGE", time()+$_GLOBAL_SYSTEM_COOKIE_TIME);

	header("Location: ?$_INTERNAL_APPLICATION_MODULE_MEMBER=System_Message&Message=Language");

} // [ + ] IF: Internal Application: Language Is Activated

/*
 ============================================================================================================
 +
 +
 +
 + [ @ ] Internal :: Security :: Protocols
 +
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 +
 + Internal Security :: Registered Member Account :: Session :: Web Browser
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + IF: Check For Valid Registered Member Account Credential Data In Browser Cookies
 ============================================================================================================
*/

if ($_GLOBAL_COOKIE_MEMBER_USERNAME && $_GLOBAL_COOKIE_MEMBER_PASSWORD != null) {

/*
 ============================================================================================================
 + IF: System :: Setting :: Restrict :: Authorized :: Web Browser :: Is: On
 ============================================================================================================
*/

if ($_GLOBAL_SYSTEM_SETTING_ACCOUNT_SECURITY_RESTRICT_AUTHORIZED_WEB_BROWSER == "1") {

/*
 ============================================================================================================
 + IF: Registered Member Account :: Authorized Web Browser User-Agent String :: IS NOT :: Current Web Browser User-Agent String :: Force Logout
 ============================================================================================================
*/

if ($_GLOBAL_MEMBER_ACCOUNT_DEVICE_WEB_BROWSER_AUTHORIZED != "$_GLOBAL_REMOTE_SERVER_HTTP_USER_AGENT") {

/*
 ============================================================================================================
 + Reduce Time On All Browser Stored Cookies
 ============================================================================================================
*/

	setcookie("kernel_member_electronic_mail_address", "", time()-42000);
	setcookie("kernel_member_username", "", time()-42000);
	setcookie("kernel_member_password", "", time()-42000);
	setcookie("kernel_member_language", "", time()-42000);

/*
 ============================================================================================================
 + Redirect To :: Registered Member Account :: Force Logout Message :: Web Browser :: User-Agent String
 ============================================================================================================
*/

	header("Location: ?$_INTERNAL_APPLICATION_MODULE_MEMBER=Login&Message=ForcedLogoutUserAgent");

} else {
/**
 * Do Nothing
**/
} // [ + ] IF: Registered Member Account :: Session :: Authorized Web Browser String IS NOT Current Web Browser String :: Force Logout

} // [ + ] IF: System :: Security :: Setting :: Restrict :: Authorized :: Web Browser: Is: On

} // [ + ] IF: Registered Member Account Is Logged-In And Valid Credentials Are Set

/*
 ============================================================================================================
 +
 +
 + Internal :: Security :: Registered Member Account :: Session :: MAC Address
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + IF: Check For Valid Registered Member Account Credential Data In Browser Cookies
 ============================================================================================================
*/

if ($_GLOBAL_COOKIE_MEMBER_USERNAME && $_GLOBAL_COOKIE_MEMBER_PASSWORD != null) {

/*
 ============================================================================================================
 + IF: System :: Setting :: Restrict :: Authorized :: Web Browser :: Is: On
 ============================================================================================================
*/

if ($_GLOBAL_SYSTEM_SETTING_ACCOUNT_SECURITY_RESTRICT_AUTHORIZED_MAC_ADDRESS == "1") {

/*
 ============================================================================================================
 + IF: Registered Member Account :: Authorized MAC Address :: IS NOT :: Current MAC Address :: Force Logout
 ============================================================================================================
*/

if ($$_GLOBAL_MEMBER_ACCOUNT_DEVICE_MAC_ADDRESS_AUTHORIZED != "$_GLOBAL_REMOTE_DEVICE_MAC_ADDRESS") {

/*
 ============================================================================================================
 + Reduce Time On All Browser Stored Cookies
 ============================================================================================================
*/

	setcookie("kernel_member_electronic_mail_address", "", time()-42000);
	setcookie("kernel_member_username", "", time()-42000);
	setcookie("kernel_member_password", "", time()-42000);
	setcookie("kernel_member_language", "", time()-42000);

/*
 ============================================================================================================
 + Redirect To :: Registered Member Account :: Force Logout Message :: MAC Address
 ============================================================================================================
*/

	header("Location: ?$_INTERNAL_APPLICATION_MODULE_MEMBER=Login&Message=ForcedLogoutMACAddress");

} else {
/**
 * Do Nothing
**/
} // [ + ] IF: Registered Member Account :: Session :: Authorized MAC Address IS NOT Current MAC Address String :: Force Logout

} // [ + ] IF: System :: Security :: Setting :: Restrict :: Authorized :: MAC Address: Is: On

} // [ + ] IF: Registered Member Account Is Logged-In And Valid Credentials Are Set

/*
 ============================================================================================================
 +
 +
 + Internal :: Security :: Registered Member Account :: Session :: Force Logout
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + IF: Check For Valid Registered Member Account Credential Data In Browser Cookies
 ============================================================================================================
*/

if ($_GLOBAL_COOKIE_MEMBER_USERNAME && $_GLOBAL_COOKIE_MEMBER_PASSWORD != null) {

/*
 ============================================================================================================
 + IF: Registered Member Account :: Security :: Setting :: Flag :: Force Logout :: Is: On
 ============================================================================================================
*/

if ($_GLOBAL_MEMBER_SECURITY_SETTING_FLAG_FORCE_LOGOUT == "1") {

/*
 ============================================================================================================
 + Reduce Time On All Browser Stored Cookies
 ============================================================================================================
*/

	setcookie("kernel_member_electronic_mail_address", "", time()-42000);
	setcookie("kernel_member_username", "", time()-42000);
	setcookie("kernel_member_password", "", time()-42000);
	setcookie("kernel_member_language", "", time()-42000);

/*
 ============================================================================================================
 + Redirect To Registered Member Account Locked Message
 ============================================================================================================
*/

	header("Location: ?$_INTERNAL_APPLICATION_MODULE_MEMBER=Login&Message=ForcedLogout");

} else {
/**
 * Do Nothing
**/
} // [ + ] IF: Registered Member Account :: Security :: Setting :: Flag :: Force Logout Is: On

} // [ + ] IF: Registered Member Account Is Logged-In And Valid Credentials Are Set

/*
 ============================================================================================================
 +
 +
 + Internal :: Security :: Member Account :: Session :: Automatically Logout Locked Accounts
 +
 +
 ============================================================================================================
*/

if ($_GLOBAL_MEMBER_ACCOUNT_LOCK_STATUS > "0") {

/*
 ============================================================================================================
 + Reduce Time On All Browser Stored Cookies
 ============================================================================================================
*/

	setcookie("kernel_member_electronic_mail_address", "", time()-42000);
	setcookie("kernel_member_username", "", time()-42000);
	setcookie("kernel_member_password", "", time()-42000);
	setcookie("kernel_member_language", "", time()-42000);

/*
 ============================================================================================================
 + Redirect To Registered Member Account Locked Message
 ============================================================================================================
*/

	header("Location: ?$_INTERNAL_APPLICATION_MODULE_MEMBER=Login&Message=AccountLocked");

} else {
/**
 * Do Nothing
**/
} // [ + ] IF: Registered Member Account Locked Status Is: On, At Any Time: Destroy Credentials In Cookies and Redirect To Account Locked Message

/*
 ============================================================================================================
 +
 +
 + Internal :: Security :: Registered Member Account :: Authorization :: Restrict Logged-In Members To Authorized Internet Protocol Address
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + IF: Check :: The Database Management System Server Database :: Setting :: For Restricted Internet Protocol Address Enforcement
 ============================================================================================================
*/

if ($_GLOBAL_SYSTEM_SETTING_ACCOUNT_SECURITY_RESTRICT_AUTHORIZED_INTERNET_PROTOCOL_ADDRESS == "1") {

/*
 ============================================================================================================
 + IF: Check For Valid Registered Member Account Credential Data In Browser Cookies
 ============================================================================================================
*/

if ($_GLOBAL_COOKIE_MEMBER_USERNAME && $_GLOBAL_COOKIE_MEMBER_PASSWORD != null) {

/*
 ============================================================================================================
 + IF: Registered Member Account Authorized Internet Protocol Address IS NOT Current Connected Internet Protocol Address
 ============================================================================================================
*/

if ($_GLOBAL_MEMBER_IP_ADDRESS_AUTHORIZED != "$_GLOBAL_REMOTE_SERVER_ADDRESS") {

/*
 ============================================================================================================
 + Reduce Time On All Browser Stored Cookies
 ============================================================================================================
*/

	setcookie("kernel_member_electronic_mail_address", "", time()-42000);
	setcookie("kernel_member_username", "", time()-42000);
	setcookie("kernel_member_password", "", time()-42000);
	setcookie("kernel_member_language", "", time()-42000);

	header("Location: ?$_INTERNAL_APPLICATION_MODULE_MEMBER=Login&Authorization=IP_Address");

} else {
/**
 * Do Nothing
**/
} // [ + ] IF: Registered Member Account Authorized Internet Protocol Address IS NOT Current Internet Protocol Address, Immediately Logout

} // [ + ] IF: Registered Member Account Is Logged-In And Valid Credentials Are Set

} else {
/**
 * Do Nothing
**/
} // [ + ] IF: System :: Settings :: Security :: Restricted Internet Protocol Address Enforcement :: Is: Enabled

/*
 ============================================================================================================
 +
 +
 + Internal :: Security :: Man-In-The-Middle :: Local Server Cache and Remote Web Browser Cache :: Circumvention
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 + Internal Security :: MITM :: Server Cache :: Circumvention :: Cached Web Pages
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Cache Web-Page Data :: Circumvention :: Variables :: Random Generator Length Number
 ============================================================================================================
*/

$_GLOBAL_SYSTEM_SECURITY_RANDOM_STRING_GENERATOR_LENGTH_NUMBER					= 100;

/*
 ============================================================================================================
 + Cache Web-Page Data :: Circumvention :: Random String Function
 ============================================================================================================
*/

function getRandomString($_GLOBAL_SYSTEM_SECURITY_RANDOM_STRING_GENERATOR_LENGTH_NUMBER) {

/*
 ============================================================================================================
 + Cache Web-Page Data :: Circumvention :: Random String Variables
 ============================================================================================================
*/

$_GLOBAL_SYSTEM_SECURITY_RANDOM_STRING_GENERATOR_CHARACTERS					= '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
$_GLOBAL_SYSTEM_SECURITY_RANDOM_STRING								= '';

/*
 ============================================================================================================
 + Cache Web-Page Data :: Circumvention :: FOR: Variable < 0 Variable Increment
 ============================================================================================================
*/

for ($_GLOBAL_SYSTEM_SECURITY_RANDOM_STRING_INVISIBLE = 0; $_GLOBAL_SYSTEM_SECURITY_RANDOM_STRING_INVISIBLE < $_GLOBAL_SYSTEM_SECURITY_RANDOM_STRING_GENERATOR_LENGTH_NUMBER; $_GLOBAL_SYSTEM_SECURITY_RANDOM_STRING_INVISIBLE++) {

/*
 ============================================================================================================
 + Cache Web-Page Data :: Circumvention :: Randomize Generated Strings
 ============================================================================================================
*/

$_GLOBAL_SYSTEM_SECURITY_RANDOM_STRING_INDEX							= rand(0, strlen($_GLOBAL_SYSTEM_SECURITY_RANDOM_STRING_GENERATOR_CHARACTERS) - 1);
$_GLOBAL_SYSTEM_SECURITY_RANDOM_STRING								.= $_GLOBAL_SYSTEM_SECURITY_RANDOM_STRING_GENERATOR_CHARACTERS[$_GLOBAL_SYSTEM_SECURITY_RANDOM_STRING_INDEX];

} // [ + ] Function: Random Character Generator: Increment Invisible String

return $_GLOBAL_SYSTEM_SECURITY_RANDOM_STRING;

} // [ + ] Function: getRandomString

/*
 ============================================================================================================
 + Cache Web-Page Data :: Circumvention :: HASH Algorithm of Randomized Strings
 ============================================================================================================
*/

$_GLOBAL_SYSTEM_SECURITY_RANDOM_STRING_GENERATOR_LENGTH_NUMBER_HASH				= hash('sha512',getRandomString($_GLOBAL_SYSTEM_SECURITY_RANDOM_STRING_GENERATOR_LENGTH_NUMBER));

/*
 ============================================================================================================
 + Global Security :: Variables :: Uniform Resource Location Addition
 ============================================================================================================
*/

$_GLOBAL_SECURITY_RANDOM_STRING_GENERATION_CACHE_CIRCUMVENTION					= "$_GLOBAL_SYSTEM_SECURITY_RANDOM_STRING_GENERATOR_LENGTH_NUMBER_HASH&amp;CacheCircumvention";

/*
 ============================================================================================================
 +
 + Internal Security :: MITM :: Server Cache :: Circumvention :: Cached Images
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Cache Images :: Circumvention :: Variables :: Random Generator Length Number
 ============================================================================================================
*/

$_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_IMAGE_RANDOM_STRING_GENERATOR_LENGTH_NUMBER 	= 100;

/*
 ============================================================================================================
 + Cache Images :: Circumvention :: Random String Function
 ============================================================================================================
*/

function getRandomStringImage($_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_IMAGE_RANDOM_STRING_GENERATOR_LENGTH_NUMBER) {

/*
 ============================================================================================================
 + Cache Images :: Circumvention :: Random String Variables
 ============================================================================================================
*/

$_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_IMAGE_RANDOM_STRING_GENERATOR_CHARACTERS		= '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
$_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_IMAGE_RANDOM_STRING				= '';

/*
 ============================================================================================================
 + Cache Images :: Circumvention :: FOR: Variable < 0 Variable Increment
 ============================================================================================================
*/

for ($_GLOBAL_SYSTEM_SECURITY_IMAGE_RANDOM_STRING_INVISIBLE = 0; $_GLOBAL_SYSTEM_SECURITY_IMAGE_RANDOM_STRING_INVISIBLE < $_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_IMAGE_RANDOM_STRING_GENERATOR_LENGTH_NUMBER; $_GLOBAL_SYSTEM_SECURITY_IMAGE_RANDOM_STRING_INVISIBLE++) {

/*
 ============================================================================================================
 + Cache Images :: Circumvention :: Randomize Generated Strings
 ============================================================================================================
*/

$_GLOBAL_SYSTEM_SECURITY_IMAGE_RANDOM_STRING_INDEX						= rand(0, strlen($_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_IMAGE_RANDOM_STRING_GENERATOR_CHARACTERS) - 1);
$_GLOBAL_SYSTEM_SECURITY_IMAGE_RANDOM_STRING							.= $_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_IMAGE_RANDOM_STRING_GENERATOR_CHARACTERS[$_GLOBAL_SYSTEM_SECURITY_IMAGE_RANDOM_STRING_INDEX];

} // [ + ] Function: Random Character Generator :: Image :: Increment Invisible String

return $_GLOBAL_SYSTEM_SECURITY_IMAGE_RANDOM_STRING;

} // [ + ] Function: getRandomStringImage

/*
 ============================================================================================================
 + Cache Images :: Circumvention :: HASH Algorithm of Randomized Strings
 ============================================================================================================
*/

$_GLOBAL_SYSTEM_SECURITY_IMAGE_RANDOM_STRING_GENERATOR_LENGTH_NUMBER_HASH			= hash('sha512',getRandomStringImage($_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_IMAGE_RANDOM_STRING_GENERATOR_LENGTH_NUMBER));

/*
 ============================================================================================================
 + Global Security :: Variables :: Uniform Resource Location Addition
 ============================================================================================================
*/

$_GLOBAL_SYSTEM_SECURITY_IMAGE_RANDOM_STRING_GENERATION_CACHE_CIRCUMVENTION			= "$_GLOBAL_SYSTEM_SECURITY_IMAGE_RANDOM_STRING_GENERATOR_LENGTH_NUMBER_HASH&amp;CacheCircumvention";

/*
 ============================================================================================================
 +
 + Internal Security :: MITM :: Server Cache :: Circumvention :: Cached File Inclusion
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + MITM :: Server Cache :: Circumvention :: Cached File Inclusion :: Variables :: Random Generator Length Number
 ============================================================================================================
*/

$_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_FILE_INCLUSION_RANDOM_STRING_GENERATOR_LENGTH_NUMBER	= 100;

/*
 ============================================================================================================
 + MITM :: Server Cache :: Circumvention :: Cached File Inclusion :: Random String Function
 ============================================================================================================
*/

function getRandomStringFileInclusion($_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_FILE_INCLUSION_RANDOM_STRING_GENERATOR_LENGTH_NUMBER) {

/*
 ============================================================================================================
 + MITM :: Server Cache :: Circumvention :: Cached File Inclusion :: Random String Variables
 ============================================================================================================
*/

$_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_FILE_INCLUSION_RANDOM_STRING_GENERATOR_CHARACTERS		= '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
$_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_FILE_INCLUSION_RANDOM_STRING				= '';

/*
 ============================================================================================================
 + MITM :: Server Cache :: Circumvention :: Cached File Inclusion :: FOR: Variable < 0 Variable Increment
 ============================================================================================================
*/

for ($_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_FILE_INCLUSION_RANDOM_STRING_INVISIBLE = 0; $_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_FILE_INCLUSION_RANDOM_STRING_INVISIBLE < $_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_FILE_INCLUSION_RANDOM_STRING_GENERATOR_LENGTH_NUMBER; $_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_FILE_INCLUSION_RANDOM_STRING_INVISIBLE++) {

/*
 ============================================================================================================
 + MITM :: Server Cache :: Circumvention :: Cached File Inclusion :: Randomize Generated Strings
 ============================================================================================================
*/

$_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_FILE_INCLUSION_RANDOM_STRING_INDEX				= rand(0, strlen($_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_FILE_INCLUSION_RANDOM_STRING_GENERATOR_CHARACTERS) - 1);
$_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_FILE_INCLUSION_RANDOM_STRING				.= $_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_FILE_INCLUSION_RANDOM_STRING_GENERATOR_CHARACTERS[$_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_FILE_INCLUSION_RANDOM_STRING_INDEX];

} // [ + ] Function: Random Character Generator :: Image :: Increment Invisible String

return $_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_FILE_INCLUSION_RANDOM_STRING;

} // [ + ] Function: getRandomStringFileInclusion

/*
 ============================================================================================================
 + MITM :: Server Cache :: Circumvention :: Cached File Inclusion :: HASH Algorithm of Randomized Strings
 ============================================================================================================
*/

$_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_FILE_INCLUSION_RANDOM_STRING_GENERATOR_LENGTH_NUMBER_HASH	= hash('sha512',getRandomStringImage($_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_FILE_INCLUSION_RANDOM_STRING_GENERATOR_LENGTH_NUMBER));

/*
 ============================================================================================================
 + MITM :: Server Cache :: Circumvention :: Cached File Inclusion :: Uniform Resource Location Addition
 ============================================================================================================
*/

$_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_FILE_INCLUSION_RANDOM_STRING_GENERATION_CACHE_CIRCUMVENTION = "$_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_FILE_INCLUSION_RANDOM_STRING_GENERATOR_LENGTH_NUMBER_HASH&amp;CacheCircumvention";

/*
 ============================================================================================================
 +
 + Internal Security :: Fake Cookies Versus Real Data :: Registered Member Account :: UserName AND Password
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + IF: Check For Valid Registered Member Account Credential Data In Browser Cookies
 ============================================================================================================
*/

if ($_GLOBAL_COOKIE_MEMBER_USERNAME && $_GLOBAL_COOKIE_MEMBER_PASSWORD != null) {

/*
 ============================================================================================================
 + Database Server Query: Check For Valid Credentials
 ============================================================================================================
*/

$_DB_Query_Kernel_Security_Check_Cookie_Member_UserName_AND_Password 					= $DB->query("SELECT * FROM {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_members WHERE member_username='$_GLOBAL_COOKIE_MEMBER_USERNAME' AND member_password='$_GLOBAL_COOKIE_MEMBER_PASSWORD'");

/*
 ============================================================================================================
 + IF: Cookie Data Stored In Browser Match Database Management System Server Database Entry Exactly
 ============================================================================================================
*/

if ($DB->num_rows($_DB_Query_Kernel_Security_Check_Cookie_Member_UserName_AND_Password)) {
/**
 * Do Nothing
**/
} else {

	header("Location: ?$_INTERNAL_APPLICATION_MODULE_INTERNAL=Logout"); // Fake Data Found In Cookies - Redirect To Logout Section, Destroy All Cookies

} // [ + ] IF: Database Server Query :: Check The Registered Member Account Data In The Browser Cookies AND Compare That Data To The Registered Member Account Database Management System Server Database Entry

/*
 ============================================================================================================
 + Kill Database Server Query: Compare Registered Member Account Database Management System Server Database Entry To Stored Cookies
 ============================================================================================================
*/

$DB->free($_DB_Query_Kernel_Security_Check_Cookie_Member_UserName_AND_Password);

} // [ + ] IF: Check :: Registered Member Account :: Credentials :: UserName AND Password

/*
 ============================================================================================================
 +
 + Internal Security :: Fake Cookies Versus Real Data :: Registered Member Account :: Electronic Mail Address
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + IF: Check For Valid Registered Member Account Credential Data In Browser Cookies
 ============================================================================================================
*/

if ($_GLOBAL_COOKIE_MEMBER_USERNAME && $_GLOBAL_COOKIE_MEMBER_PASSWORD != null) {

/*
 ============================================================================================================
 + Database Server Query: Check For Valid Credentials
 ============================================================================================================
*/

$_DB_Query_Kernel_Security_Check_Cookie_Member_Electronic_Mail_Address 					= $DB->query("SELECT * FROM {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_members WHERE member_username='$_GLOBAL_COOKIE_MEMBER_USERNAME' AND member_electronic_mail_address='$_GLOBAL_COOKIE_MEMBER_ELECTRONIC_MAIL_ADDRESS'");

/*
 ============================================================================================================
 + IF: Cookie Data Stored In Browser Match Database Management System Server Database Entry Exactly
 ============================================================================================================
*/

if ($DB->num_rows($_DB_Query_Kernel_Security_Check_Cookie_Member_Electronic_Mail_Address)) {
/**
 * Do Nothing
**/
} else {

	header("Location: ?$_INTERNAL_APPLICATION_MODULE_INTERNAL=Logout"); // Fake Data Found In Cookies - Redirect To Logout Section, Destroy All Cookies

} // [ + ] IF: Database Server Query :: Check The Registered Member Account Data In The Browser Cookies AND Compare That Data To The Registered Member Account Database Management System Server Database Entry

/*
 ============================================================================================================
 + Kill Database Server Query: Compare Registered Member Account Database Management System Server Database Entry To Stored Cookies
 ============================================================================================================
*/

$DB->free($_DB_Query_Kernel_Security_Check_Cookie_Member_Electronic_Mail_Address);

} // [ + ] IF: Check :: Registered Member Account :: Credentials :: UserName AND Electronic Mail Address

/*
 ============================================================================================================
 +
 +
 + [ @ ] Internal Security :: Stored Browser Cookies Versus Real Physical Directories and Files
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 + Internal Security :: Check For :: Real Registered Member Account :: Directory AND Files :: Index
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + IF: Check For Valid Registered Member Account Credential Data In Browser Cookies
 ============================================================================================================
*/

if ($_GLOBAL_COOKIE_MEMBER_USERNAME && $_GLOBAL_COOKIE_MEMBER_PASSWORD != null) {

/*
 ============================================================================================================
 + Use Existing Registered Member Account UserName Cookie To Search For Physical Member Directory
 ============================================================================================================
*/

$_MEMBER_DIRECTORY_INDEX_FILE								= "./Member/$_GLOBAL_COOKIE_MEMBER_USERNAME/index.html";

/*
 ============================================================================================================
 + IF: UserName String Found In Registered Member Account UserName Cookie Does Not Match Physical Directory and File
 ============================================================================================================
*/

if (!file_exists($_MEMBER_DIRECTORY_INDEX_FILE)) {

	header("Location: ?$_INTERNAL_APPLICATION_MODULE_INTERNAL=Logout"); // Fake Data Found - Redirect To Logout Section

} else {
/**
 * Do Nothing
**/
} // [ + ] File Does Not Exist: Member Directory Index :: Force Logout

} // [ + ] IF: Registered Member Account UserName and Registered Member Account Password Cookie Check

/*
 ============================================================================================================
 +
 + Internal Security :: Check For :: Real Registered Member Account :: Directory AND Files :: Electronic Mail Address File
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + IF: Check For Valid Registered Member Account Credential Data In Browser Cookies
 ============================================================================================================
*/

if ($_GLOBAL_COOKIE_MEMBER_USERNAME && $_GLOBAL_COOKIE_MEMBER_PASSWORD != null) {

/*
 ============================================================================================================
 + Use Existing Registered Member Account UserName Cookie To Search For Physical Member Directory
 ============================================================================================================
*/

$_MEMBER_DIRECTORY_MASTER_LIST_ELECTRONIC_MAIL_ADDRESS_FILE					= "./Member/Master_List/Electronic_Mail_Addresses/$_GLOBAL_COOKIE_MEMBER_ELECTRONIC_MAIL_ADDRESS";

/*
 ============================================================================================================
 + IF: File Exists: Master List :: Electronic Mail Addresses :: Registered Member Account :: Electronic Mail Address File
 ============================================================================================================
*/

if (!file_exists($_MEMBER_DIRECTORY_MASTER_LIST_ELECTRONIC_MAIL_ADDRESS_FILE)) {

	header("Location: ?$_INTERNAL_APPLICATION_MODULE_INTERNAL=Logout"); // Fake Data Found - Redirect To Internal Application: Logout

} else {
/**
 * Do Nothing
**/
} // [ + ] File Does Not Exist: Member Directory :: Master List :: Electronic Mail Addresses :: Registered Member Account Electronic Mail Address File :: Force Logout

} // [ + ] IF: Cookie Check :: Registered Member Account UserName, Registered Member Account Password and Registered Member Account Electronic Mail Address

/*
 ============================================================================================================
 +
 + Internal Security :: Registered Member Account :: Fingerprint AS Session :: Compare Fingerprint Cookie To Database Server Entry
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 + Internal Security :: Check For Banished, Blocked and Filtered Network Addresses
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Check :: Database Server Entries For Blocked Network Addresses
 ============================================================================================================
*/

$_DB_Query_Kernel_Networking_Status_Security_Check_Blocked_String_Internet_Protocol_Address 		= $DB->query("SELECT * FROM {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_networking WHERE blocked_ip_address_string='$_GLOBAL_REMOTE_SERVER_ADDRESS'");

/*
 ============================================================================================================
 + IF: Current Internet Protocol Address Matches Blocked Internet Protocol Addresses In Database Server Entries
 ============================================================================================================
*/

if ($DB->num_rows($_DB_Query_Kernel_Networking_Status_Security_Check_Blocked_String_Internet_Protocol_Address)) {

	header("Location: ./Theme/$_GLOBAL_SYSTEM_THEME_DIRECTORY/HTML/Banned.html"); // Banished Internet Protocol Address Found - Redirect To Internet Protocol Address and Network Banishment Notification

} // [ + ] IF: Check :: Current Connected Internet Protocol Address To Blocked Interet Protocol Address Strings In The Database Server

/*
 ============================================================================================================
 +
 + Internal Security :: Web Browser :: User-Agent :: Check For Empty and Null Data
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Web Browser :: User-Agent :: Empty Data Check
 ============================================================================================================
*/

if ($_GLOBAL_LOCAL_SERVER_HTTP_USER_AGENT == "") {

	header("Location: ./Theme/$_GLOBAL_SYSTEM_THEME_DIRECTORY/HTML/Banned.html"); // Web Browser :: User-Agent :: Empty Data Found - Redirect To Internet Protocol Address and Network Banishment Notification

} // [ + ] IF: Web Browser :: User-Agent :: Is Null: Redirect

/*
 ============================================================================================================
 + Web Browser :: User-Agent :: Null Data Check
 ============================================================================================================
*/

if ($_GLOBAL_LOCAL_SERVER_HTTP_USER_AGENT == null) {

	header("Location: ./Theme/$_GLOBAL_SYSTEM_THEME_DIRECTORY/HTML/Banned.html"); // Web Browser :: User-Agent :: Null Data Found - Redirect To Internet Protocol Address and Network Banishment Notification

} // [ + ] IF: Web Browser :: User-Agent :: Is Null: Redirect

/*
 ============================================================================================================
 +
 + Internal Security :: Web Browser :: User-Agent :: Check For Spoofed User-Agent String
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Web Browser :: User-Agent :: String :: Tampered OR Altered User-Agent String
 ============================================================================================================
*/

/*
 ==========================================================================
 + IF: User-Agent :: String :: Is NOT Null
 ==========================================================================
*/

if ($_GLOBAL_REMOTE_SERVER_HTTP_USER_AGENT != null) {

$_GLOBAL_REMOTE_SERVER_HTTP_USER_AGENT_DISPLAY	= "$_GLOBAL_REMOTE_SERVER_HTTP_USER_AGENT";

/*
 ==========================================================================
 + IF: User-Agent :: String :: Contains Programming Code OR Exploit Code
 ==========================================================================
*/

if (substr_count($_GLOBAL_REMOTE_SERVER_HTTP_USER_AGENT_DISPLAY,"<") == 1) {

	header("Location: ./Theme/$_GLOBAL_SYSTEM_THEME_DIRECTORY/HTML/Banned.html"); // Web Browser :: User-Agent :: String :: Is Tampered - Redirect To Internet Protocol Address and Network Banishment Notification

} // [ + ] IF: Web Browser :: User-Agent :: String :: Is Tampered: < :: Filter String and Redirect

/*
 ==========================================================================
 + IF: User-Agent :: String :: Contains Programming Code OR Exploit Code
 ==========================================================================
*/

if (substr_count($_GLOBAL_REMOTE_SERVER_HTTP_USER_AGENT_DISPLAY,">") == 1) {

	header("Location: ./Theme/$_GLOBAL_SYSTEM_THEME_DIRECTORY/HTML/Banned.html"); // Web Browser :: User-Agent :: String :: Is Tampered - Redirect To Internet Protocol Address and Network Banishment Notification

} // [ + ] IF: Web Browser :: User-Agent :: String :: Is Tampered: > :: Filter String and Redirect

} // [ + ] IF: Web Browser :: User-Agent :: String :: Is NOT Null

/*
 ==========================================================================
 + IF: User-Agent :: String :: Is Empty
 ==========================================================================
*/

if ($_GLOBAL_REMOTE_SERVER_HTTP_USER_AGENT_DISPLAY == "") {

	header("Location: ./Theme/$_GLOBAL_SYSTEM_THEME_DIRECTORY/HTML/Banned.html"); // Web Browser :: User-Agent :: String :: Is Null - Redirect To Internet Protocol Address and Network Banishment Notification

} // [ + ] IF: Web Browser :: User-Agent :: String :: Is Empty

/*
 ============================================================================================================
 +
 + Internal Security :: Cookie :: Tampered Data :: Local-File-Inclusion, Remote-File-Inclusion, S.Q.L. Injection
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Check :: Registered Member Account :: Cookie :: Language
 ============================================================================================================
*/

if ($_GLOBAL_COOKIE_MEMBER_LANGUAGE == ".." || $_GLOBAL_COOKIE_MEMBER_LANGUAGE == "." || $_GLOBAL_COOKIE_MEMBER_LANGUAGE == "@" || $_GLOBAL_COOKIE_MEMBER_LANGUAGE == "`") {

	header("Location: ?$_INTERNAL_APPLICATION_MODULE_INTERNAL=Logout"); // Exploit and Escaping Found - Redirect To Logout Section, Destroy All Cookies

} // [ + ] IF: Registered Member Account :: Cookie :: Language :: String :: Is Exploit Data, Redirect To Logout

/*
 ==========================================================================
 + IF: Web Browser :: Cookie :: String :: Language :: Contains Programming Code OR Exploit Code
 ==========================================================================
*/

if (substr_count($_GLOBAL_COOKIE_MEMBER_LANGUAGE,"<") == 1) {

	header("Location: ?$_INTERNAL_APPLICATION_MODULE_INTERNAL=Logout"); // Exploit Programming Code Found - Redirect To Logout Section, Destroy All Cookies

} // [ + ] IF: Registered Member Account :: Cookie :: Language :: String :: Is Tampered, Containing: < :: Filter String and Redirect

/*
 ==========================================================================
 + IF: Web Browser :: Cookie :: String :: Language :: Contains Programming Code OR Exploit Code
 ==========================================================================
*/

if (substr_count($_GLOBAL_COOKIE_MEMBER_LANGUAGE,">") == 1) {

	header("Location: ?$_INTERNAL_APPLICATION_MODULE_INTERNAL=Logout"); // Exploit Programming Code Found - Redirect To Logout Section, Destroy All Cookies

} // [ + ] IF: Registered Member Account :: Cookie :: Language :: String :: Is Tampered, Containing: > :: Filter String and Redirect

/*
 ==========================================================================
 + IF: Web Browser :: Cookie :: String :: Language :: Contains Programming Code OR Exploit Code
 ==========================================================================
*/

if (substr_count($_GLOBAL_COOKIE_MEMBER_LANGUAGE,"`") == 1) {

	header("Location: ?$_INTERNAL_APPLICATION_MODULE_INTERNAL=Logout"); // Exploit Programming Code Found - Redirect To Logout Section, Destroy All Cookies

} // [ + ] IF: Registered Member Account :: Cookie :: Language :: String :: Is Tampered, Containing: ` :: Filter String and Redirect

/*
 ==========================================================================
 + IF: Web Browser :: Cookie :: String :: Language :: Contains Programming Code OR Exploit Code
 ==========================================================================
*/

if (substr_count($_GLOBAL_COOKIE_MEMBER_LANGUAGE,".") == 1) {

	header("Location: ?$_INTERNAL_APPLICATION_MODULE_INTERNAL=Logout"); // Exploit Programming Code Found - Redirect To Logout Section, Destroy All Cookies

} // [ + ] IF: Registered Member Account :: Cookie :: Language :: String :: Is Tampered, Containing: . :: Filter String and Redirect


/*
 ============================================================================================================
 + Check :: Registered Member Account :: Cookie :: UserName
 ============================================================================================================
*/

if ($_GLOBAL_COOKIE_MEMBER_USERNAME == ".." || $_GLOBAL_COOKIE_MEMBER_USERNAME == "." || $_GLOBAL_COOKIE_MEMBER_USERNAME == "@" || $_GLOBAL_COOKIE_MEMBER_USERNAME == "`") {

	header("Location: ?$_INTERNAL_APPLICATION_MODULE_INTERNAL=Logout"); // Exploit and Escaping Found - Redirect To Logout Section, Destroy All Cookies

} // [ + ] IF: Registered Member Account :: Cookie :: UserName :: String :: Is Exploit Data, Redirect To Logout

/*
 ==========================================================================
 + IF: Web Browser :: Cookie :: String :: UserName :: Contains Programming Code OR Exploit Code
 ==========================================================================
*/

if (substr_count($_GLOBAL_COOKIE_MEMBER_USERNAME,"<") == 1) {

	header("Location: ?$_INTERNAL_APPLICATION_MODULE_INTERNAL=Logout"); // Exploit Programming Code Found - Redirect To Logout Section, Destroy All Cookies

} // [ + ] IF: Registered Member Account :: Cookie :: UserName :: String :: Is Tampered, Containing: < :: Filter String and Redirect

/*
 ==========================================================================
 + IF: Web Browser :: Cookie :: String :: UserName :: Contains Programming Code OR Exploit Code
 ==========================================================================
*/

if (substr_count($_GLOBAL_COOKIE_MEMBER_USERNAME,">") == 1) {

	header("Location: ?$_INTERNAL_APPLICATION_MODULE_INTERNAL=Logout"); // Exploit Programming Code Found - Redirect To Logout Section, Destroy All Cookies

} // [ + ] IF: Registered Member Account :: Cookie :: UserName :: String :: Is Tampered, Containing: > :: Filter String and Redirect

/*
 ==========================================================================
 + IF: Web Browser :: Cookie :: String :: UserName :: Contains Programming Code OR Exploit Code
 ==========================================================================
*/

if (substr_count($_GLOBAL_COOKIE_MEMBER_USERNAME,"`") == 1) {

	header("Location: ?$_INTERNAL_APPLICATION_MODULE_INTERNAL=Logout"); // Exploit Programming Code Found - Redirect To Logout Section, Destroy All Cookies

} // [ + ] IF: Registered Member Account :: Cookie :: UserName :: String :: Is Tampered, Containing: ` :: Filter String and Redirect

/*
 ==========================================================================
 + IF: Web Browser :: Cookie :: String :: UserName :: Contains Programming Code OR Exploit Code
 ==========================================================================
*/

if (substr_count($_GLOBAL_COOKIE_MEMBER_USERNAME,".") == 1) {

	header("Location: ?$_INTERNAL_APPLICATION_MODULE_INTERNAL=Logout"); // Exploit Programming Code Found - Redirect To Logout Section, Destroy All Cookies

} // [ + ] IF: Registered Member Account :: Cookie :: UserName :: String :: Is Tampered, Containing: . :: Filter String and Redirect

/*
 ============================================================================================================
 + Check :: Registered Member Account :: Cookie :: Password
 ============================================================================================================
*/

if ($_GLOBAL_COOKIE_MEMBER_PASSWORD == ".." || $_GLOBAL_COOKIE_MEMBER_PASSWORD == "." || $_GLOBAL_COOKIE_MEMBER_PASSWORD == "@" || $_GLOBAL_COOKIE_MEMBER_PASSWORD == "`") {

	header("Location: ?$_INTERNAL_APPLICATION_MODULE_INTERNAL=Logout"); // Exploit and Escaping Found - Redirect To Logout Section, Destroy All Cookies

} // [ + ] IF: Registered Member Account :: Cookie :: Password :: String :: Is Exploit Data, Redirect To Logout

/*
 ==========================================================================
 + IF: Web Browser :: Cookie :: String :: Password :: Contains Programming Code OR Exploit Code
 ==========================================================================
*/

if (substr_count($_GLOBAL_COOKIE_MEMBER_PASSWORD,"<") == 1) {

	header("Location: ?$_INTERNAL_APPLICATION_MODULE_INTERNAL=Logout"); // Exploit Programming Code Found - Redirect To Logout Section, Destroy All Cookies

} // [ + ] IF: Registered Member Account :: Cookie :: Password :: String :: Is Tampered, Containing: < :: Filter String and Redirect

/*
 ==========================================================================
 + IF: Web Browser :: Cookie :: String :: Password :: Contains Programming Code OR Exploit Code
 ==========================================================================
*/

if (substr_count($_GLOBAL_COOKIE_MEMBER_PASSWORD,">") == 1) {

	header("Location: ?$_INTERNAL_APPLICATION_MODULE_INTERNAL=Logout"); // Exploit Programming Code Found - Redirect To Logout Section, Destroy All Cookies

} // [ + ] IF: Registered Member Account :: Cookie :: Password :: String :: Is Tampered, Containing: > :: Filter String and Redirect

/*
 ==========================================================================
 + IF: Web Browser :: Cookie :: String :: Password :: Contains Programming Code OR Exploit Code
 ==========================================================================
*/

if (substr_count($_GLOBAL_COOKIE_MEMBER_PASSWORD,"`") == 1) {

	header("Location: ?$_INTERNAL_APPLICATION_MODULE_INTERNAL=Logout"); // Exploit Programming Code Found - Redirect To Logout Section, Destroy All Cookies

} // [ + ] IF: Registered Member Account :: Cookie :: Password :: String :: Is Tampered, Containing: ` :: Filter String and Redirect

/*
 ============================================================================================================
 + Check :: Registered Member Account :: Cookie :: Electronic Mail Address
 ============================================================================================================
*/

if ($_GLOBAL_COOKIE_MEMBER_ELECTRONIC_MAIL_ADDRESS == ".." || $_GLOBAL_COOKIE_MEMBER_ELECTRONIC_MAIL_ADDRESS == "." || $_GLOBAL_COOKIE_MEMBER_ELECTRONIC_MAIL_ADDRESS == "@" || $_GLOBAL_COOKIE_MEMBER_ELECTRONIC_MAIL_ADDRESS == "`") {

	header("Location: ?$_INTERNAL_APPLICATION_MODULE_INTERNAL=Logout"); // Exploit and Escaping Found - Redirect To Logout Section, Destroy All Cookies

} // [ + ] IF: Registered Member Account :: Cookie :: Electronic Mail Address :: String :: Is Exploit Data, Redirect To Logout

/*
 ==========================================================================
 + IF: Web Browser :: Cookie :: String :: Electronic Mail Address :: Contains Programming Code OR Exploit Code
 ==========================================================================
*/

if (substr_count($_GLOBAL_COOKIE_MEMBER_ELECTRONIC_MAIL_ADDRESS,"<") == 1) {

	header("Location: ?$_INTERNAL_APPLICATION_MODULE_INTERNAL=Logout"); // Exploit Programming Code Found - Redirect To Logout Section, Destroy All Cookies

} // [ + ] IF: Registered Member Account :: Cookie :: Electronic Mail Address :: String :: Is Tampered, Containing: < :: Filter String and Redirect

/*
 ==========================================================================
 + IF: Web Browser :: Cookie :: String :: Electronic Mail Address :: Contains Programming Code OR Exploit Code
 ==========================================================================
*/

if (substr_count($_GLOBAL_COOKIE_MEMBER_ELECTRONIC_MAIL_ADDRESS,">") == 1) {

	header("Location: ?$_INTERNAL_APPLICATION_MODULE_INTERNAL=Logout"); // Exploit Programming Code Found - Redirect To Logout Section, Destroy All Cookies

} // [ + ] IF: Registered Member Account :: Cookie :: Electronic Mail Address :: String :: Is Tampered, Containing: > :: Filter String and Redirect

/*
 ==========================================================================
 + IF: Web Browser :: Cookie :: String :: Electronic Mail Address :: Contains Programming Code OR Exploit Code
 ==========================================================================
*/

if (substr_count($_GLOBAL_COOKIE_MEMBER_ELECTRONIC_MAIL_ADDRESS,"`") == 1) {

	header("Location: ?$_INTERNAL_APPLICATION_MODULE_INTERNAL=Logout"); // Exploit Programming Code Found - Redirect To Logout Section, Destroy All Cookies

} // [ + ] IF: Registered Member Account :: Cookie :: Electronic Mail Address :: String :: Is Tampered, Containing: ` :: Filter String and Redirect

/*
 ============================================================================================================
 +
 + Internal Security :: Web Browser :: Cookie :: String :: Enforce String Character Length Limitations
 +
 ============================================================================================================
*/

/*
 ==========================================================================
 + IF: Web Browser :: Cookie :: String :: Language :: String :: Character Length
 ==========================================================================
*/

if (strlen($_GLOBAL_COOKIE_MEMBER_LANGUAGE) >= "15") {

	header("Location: ?$_INTERNAL_APPLICATION_MODULE_INTERNAL=Logout");

} // [ + ] IF: Registered Member Account :: Cookie :: String :: Language :: Character Length Data Is Greater Than OR Equal To 15 Characters: Instantly Destroy Cookies, Sessions and Logout

/*
 ==========================================================================
 + IF: Web Browser :: Cookie :: String :: UserName :: String :: Character Length
 ==========================================================================
*/

if (strlen($_GLOBAL_COOKIE_MEMBER_USERNAME) >= "15") {

	header("Location: ?$_INTERNAL_APPLICATION_MODULE_INTERNAL=Logout");

} // [ + ] IF: Registered Member Account :: Cookie :: String :: UserName :: Character Length Data Is Greater Than OR Equal To 15 Characters: Instantly Destroy Cookies, Sessions and Logout

/*
 ==========================================================================
 + IF: Web Browser :: Cookie :: String :: Password :: String :: Character Length
 ==========================================================================
*/

if (strlen($_GLOBAL_COOKIE_MEMBER_PASSWORD) >= "256") {

	header("Location: ?$_INTERNAL_APPLICATION_MODULE_INTERNAL=Logout");

} // [ + ] IF: Registered Member Account :: Cookie :: String :: Password :: Character Length Data Is Greater Than OR Equal To 256 Characters: Instantly Destroy Cookies, Sessions and Logout

/*
 ==========================================================================
 + IF: Web Browser :: Cookie :: String :: Electronic Mail Address :: String :: Character Length
 ==========================================================================
*/

if (strlen($_GLOBAL_COOKIE_MEMBER_ELECTRONIC_MAIL_ADDRESS) >= "100") {

	header("Location: ?$_INTERNAL_APPLICATION_MODULE_INTERNAL=Logout");

} // [ + ] IF: Registered Member Account :: Cookie :: String :: Electronic Mail Address :: Character Length Data Is Greater Than OR Equal To 100 Characters: Instantly Destroy Cookies, Sessions and Logout

/*
 ============================================================================================================
 +
 + Internal Security :: Fingerprinting :: Registered Member
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + IF: Check For Valid Registered Member Account Credential Data In Browser Cookies
 ============================================================================================================
*/

if ($_GLOBAL_COOKIE_MEMBER_USERNAME && $_GLOBAL_COOKIE_MEMBER_PASSWORD != null) {

/*
 ============================================================================================================
 + Valid Registered Member Account Credential Data In Browser Cookies Is Found, Define Member Digital Fingerprint
 ============================================================================================================
*/

$_GLOBAL_SECURITY_GENERATED_MEMBER_FINGERPRINT_STRING_REMOTE_SERVER_ADDRESS			= $_SERVER['REMOTE_ADDR'];
$_GLOBAL_SECURITY_GENERATED_MEMBER_FINGERPRINT_STRING_REMOTE_SERVER_PORT			= $_SERVER['REMOTE_PORT'];
$_GLOBAL_SECURITY_GENERATED_MEMBER_FINGERPRINT_STRING_DATE_TIME					= date("Y-m-j-g-i-s-A");

$_GLOBAL_SECURITY_GENERATED_MEMBER_FINGERPRINT_STRING_LENGTH_REMOTE_SERVER_ADDRESS		= strlen($_GLOBAL_REMOTE_SERVER_ADDRESS);
$_GLOBAL_SECURITY_GENERATED_MEMBER_FINGERPRINT_STRING_LENGTH_MEMBER_USERNAME			= strlen($_GLOBAL_COOKIE_MEMBER_USERNAME);
$_GLOBAL_SECURITY_GENERATED_MEMBER_FINGERPRINT_STRING_LENGTH_MEMBER_PASSWORD			= strlen($_GLOBAL_COOKIE_MEMBER_PASSWORD);

$_GLOBAL_SECURITY_GENERATED_MEMBER_FINGERPRINT_CLEARTEXT					= "$_GLOBAL_COOKIE_MEMBER_USERNAME ::: $_GLOBAL_SECURITY_GENERATED_MEMBER_FINGERPRINT_STRING_REMOTE_SERVER_ADDRESS ::: $_GLOBAL_SECURITY_GENERATED_MEMBER_FINGERPRINT_STRING_REMOTE_SERVER_PORT ::: $_GLOBAL_REMOTE_SERVER_HTTP_USER_AGENT_DISPLAY ::: $_GLOBAL_SECURITY_GENERATED_MEMBER_FINGERPRINT_STRING_LENGTH_REMOTE_SERVER_ADDRESS ::: $_GLOBAL_SECURITY_GENERATED_MEMBER_FINGERPRINT_STRING_LENGTH_MEMBER_USERNAME ::: $_GLOBAL_SECURITY_GENERATED_MEMBER_FINGERPRINT_STRING_LENGTH_MEMBER_PASSWORD ::: $_GLOBAL_SECURITY_GENERATED_MEMBER_FINGERPRINT_STRING_DATE_TIME ::: $_GLOBAL_SYSTEM_SECURITY_RANDOM_STRING_GENERATOR_LENGTH_NUMBER_HASH";
$_GLOBAL_SECURITY_GENERATED_MEMBER_FINGERPRINT_HASHED						= hash('sha512', $_GLOBAL_SECURITY_GENERATED_MEMBER_FINGERPRINT_CLEARTEXT);

} else {

/*
 ============================================================================================================
 + No Valid Registered Member Account Credential Data In Browser Cookies Is Found, Define Visitor Digital Fingerprint
 ============================================================================================================
*/

$_GLOBAL_SECURITY_GENERATED_MEMBER_FINGERPRINT_STRING_REMOTE_SERVER_ADDRESS			= $_SERVER['REMOTE_ADDR'];
$_GLOBAL_SECURITY_GENERATED_MEMBER_FINGERPRINT_STRING_REMOTE_SERVER_PORT			= $_SERVER['REMOTE_PORT'];
$_GLOBAL_SECURITY_GENERATED_MEMBER_FINGERPRINT_STRING_DATE_TIME					= date("Y-m-j-g-i-s-A");

$_GLOBAL_SECURITY_GENERATED_MEMBER_FINGERPRINT_STRING_LENGTH_REMOTE_SERVER_ADDRESS		= strlen($_GLOBAL_REMOTE_SERVER_ADDRESS);
$_GLOBAL_SECURITY_GENERATED_MEMBER_FINGERPRINT_STRING_LENGTH_MEMBER_USERNAME			= strlen("Visitor");
$_GLOBAL_SECURITY_GENERATED_MEMBER_FINGERPRINT_STRING_LENGTH_MEMBER_PASSWORD			= strlen("Visitor");

$_GLOBAL_SECURITY_GENERATED_MEMBER_FINGERPRINT_CLEARTEXT					= "Non-Registered Visitor ::: $_GLOBAL_SECURITY_GENERATED_MEMBER_FINGERPRINT_STRING_REMOTE_SERVER_ADDRESS ::: $_GLOBAL_SECURITY_GENERATED_MEMBER_FINGERPRINT_STRING_REMOTE_SERVER_PORT ::: $_GLOBAL_REMOTE_SERVER_HTTP_USER_AGENT_DISPLAY ::: $_GLOBAL_SECURITY_GENERATED_MEMBER_FINGERPRINT_STRING_LENGTH_REMOTE_SERVER_ADDRESS ::: $_GLOBAL_SECURITY_GENERATED_MEMBER_FINGERPRINT_STRING_LENGTH_MEMBER_USERNAME ::: $_GLOBAL_SECURITY_GENERATED_MEMBER_FINGERPRINT_STRING_LENGTH_MEMBER_PASSWORD ::: $_GLOBAL_SECURITY_GENERATED_MEMBER_FINGERPRINT_STRING_DATE_TIME ::: $_GLOBAL_SYSTEM_SECURITY_RANDOM_STRING_GENERATOR_LENGTH_NUMBER_HASH";
$_GLOBAL_SECURITY_GENERATED_MEMBER_FINGERPRINT_HASHED						= hash('sha512', $_GLOBAL_SECURITY_GENERATED_MEMBER_FINGERPRINT_CLEARTEXT);

} // [ + ] IF: Registered Member Account Is: Logged-In

/*
 ============================================================================================================
 +
 + System :: Plug-In :: Location :: Directives
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + IF: The Location Plug-In Is On, Include It
 ============================================================================================================
*/

if ($_GLOBAL_SYSTEM_PLUGIN_LOCATION_STATUS >= 1) {

	include_once "./System/Plug-Ins/Location/$_GLOBAL_SYSTEM_PLUGIN_LOCATION_DIRECTORY/Location.$_INTERNAL_FILE_EXTENSION";

} else {

	$_GLOBAL_SYSTEM_PLUGIN_LOCATION_MESSAGE_DEACTIVATED				= "<CENTER>Kernel Message: The Location Plug-In Application Module Is: Deactivated</CENTER>";

} // [ + ] IF: System :: Plug-In :: Location :: Is: On or Off

/*
 ============================================================================================================
 +
 + System :: Plug-In :: Safe Hyper-Text-Markup-Language :: Directives
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + IF: The Safe-Hyper-Text-Markup-Language Plug-In Is On, Include It
 ===========================================================================================================
*/

if ($_GLOBAL_SYSTEM_PLUGIN_SAFEHTML_STATUS >= 1) {

	include_once "./System/Plug-Ins/Safe-HTML/$_GLOBAL_SYSTEM_PLUGIN_SAFEHTML_DIRECTORY/Safe-HTML.$_INTERNAL_FILE_EXTENSION";

} else {

	$_GLOBAL_PLUGIN_SAFEHTML_LIST_COMMANDS						= "<CENTER>Kernel Message: The Safe-HTML Plug-In Application Module Is: Deactivated</CENTER>";

} // [ + ] IF: System :: Plug-In :: Safe-HTML :: Is: On or Off

/*
 ============================================================================================================
 +
 +
 + [ @ ] Internal :: Loops
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 + Directory and File :: Loop :: Change Mode ( CHMOD ) Permissions Loop
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 * 0777 :: Read, Write and Execute
 * 0600 :: Read and Write To Directory and Files. Execution Forbidden
 * 000x :: Executable File
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Permissions :: Upload Directory :: Variables
 ============================================================================================================
*/

$_KERNEL_INTERNAL_LOOP_CHMOD_UPLOAD_DIRECTORY_NAME					= "Upload";
$_KERNEL_INTERNAL_LOOP_CHMOD_UPLOAD_DIRECTORY_CHMOD_VALUE				= "0600";
$_KERNEL_INTERNAL_LOOP_OPEN_UPLOAD_DIRECTORY						= opendir($_KERNEL_INTERNAL_LOOP_CHMOD_UPLOAD_DIRECTORY_NAME);

/*
 ============================================================================================================
 + Read :: Upload Directory: Subdirectory and Files
 ============================================================================================================
*/

while (($_KERNEL_INTERNAL_LOOP_UPLOAD_DIRECTORY_FILES = readdir($_KERNEL_INTERNAL_LOOP_OPEN_UPLOAD_DIRECTORY))) {

/*
 ============================================================================================================
 + Internal Security :: Stop Local-File-Inclusion AND Remote-File-Inclusion Exploits
 ============================================================================================================
*/

if ($_KERNEL_INTERNAL_LOOP_UPLOAD_DIRECTORY_FILES == ".." || $_KERNEL_INTERNAL_LOOP_UPLOAD_DIRECTORY_FILES == "." || $_KERNEL_INTERNAL_LOOP_UPLOAD_DIRECTORY_FILES == "index.php") {
/**
 * Skip These Files
**/
} else {

	chmod("$_KERNEL_INTERNAL_LOOP_CHMOD_UPLOAD_DIRECTORY_CHMOD_VALUE", octdec($_KERNEL_INTERNAL_LOOP_CHMOD_UPLOAD_DIRECTORY_CHMOD_VALUE));
	chmod("$_KERNEL_INTERNAL_LOOP_UPLOAD_DIRECTORY_FILES", octdec($_KERNEL_INTERNAL_LOOP_CHMOD_UPLOAD_DIRECTORY_CHMOD_VALUE));

} // [ + ] IF: Files Are Not Inside of This Directory or Excluded Files: Skip Them

} // [ + ] Else: CHMOD All Sub-Directories and Files Within The Specified Directory

/*
 ============================================================================================================
 +
 + System Settings :: Loop :: Registered Member Account :: Set System Theme IF: Registered Member Account :: Settings :: Theme Is Empty
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + IF: Check For Valid Member Account Credential Data In Browser Cookies
 ============================================================================================================
*/

if ($_GLOBAL_COOKIE_MEMBER_USERNAME && $_GLOBAL_COOKIE_MEMBER_PASSWORD != null) {

/*
 ============================================================================================================
 + IF: Registered Member Account :: Settings :: Theme Directory Is Empty, Set System Theme Directory
 ============================================================================================================
*/

if ($_GLOBAL_MEMBER_THEME_DIRECTORY == "") {

$_GLOBAL_MEMBER_THEME_DIRECTORY								= $_GLOBAL_SYSTEM_THEME_DIRECTORY;

} // [ + ] IF: Registered Member Account :: Setings :: Theme Directory Settings Is Empty

/*
 ============================================================================================================
 + IF: Registered Member Account :: Settings :: Theme Directory Is NOT Null, Set System Theme Directory To Registered Member Account Directory
 ============================================================================================================
*/

if ($_GLOBAL_MEMBER_THEME_DIRECTORY != null) {

$_GLOBAL_SYSTEM_THEME_DIRECTORY								= $_GLOBAL_MEMBER_THEME_DIRECTORY;

} // [ + ] IF: Registered Member Account :: Settings :: Theme Directory Settings Is Null

} // [ + ] IF: Registered Member Account: Is Logged-In

/*
 ============================================================================================================
 + IF: Non-Logged-In Visitor :: Settings :: Theme Is Empty, Set System Theme
 ============================================================================================================
*/

if ($_GLOBAL_MEMBER_THEME_DIRECTORY == "") {

$_GLOBAL_MEMBER_THEME_DIRECTORY								= $_GLOBAL_SYSTEM_THEME_DIRECTORY;

} // [ + ] IF: Non-Logged-In Visitor :: Settings :: Theme Is Empty, Set System Theme

/*
 ============================================================================================================
 +
 + Registerd Member Account :: Loop :: Gender
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + IF: Check For Valid Member Account Credential Data In Browser Cookies
 ============================================================================================================
*/

if ($_GLOBAL_COOKIE_MEMBER_USERNAME && $_GLOBAL_COOKIE_MEMBER_PASSWORD != null) {

/*
 ============================================================================================================
 + IF: Registered Member Account :: Gender Is: 0, Non-Specified
 ============================================================================================================
*/

if (($_GLOBAL_MEMBER_GENDER <= "0") || ($_GLOBAL_MEMBER_GENDER == "-")) {

	$_GLOBAL_MEMBER_GENDER_DISPLAY	= "Non-Specified";

} // [ + ] IF: Registered Member Account Gender Is: 0 OR -, Define as Non-Specified

/*
 ============================================================================================================
 + IF: Registered Member Account :: Gender Is: 1, Male
 ============================================================================================================
*/

if ($_GLOBAL_MEMBER_GENDER == "1") {

	$_GLOBAL_MEMBER_GENDER_DISPLAY	= "Male";

} // [ + ] IF: Registered Member Account Gender Is: 1, Define as Male

/*
 ============================================================================================================
 + IF: Registered Member Account :: Gender Is: 2, Female
 ============================================================================================================
*/

if ($_GLOBAL_MEMBER_GENDER == "2") {

	$_GLOBAL_MEMBER_GENDER_DISPLAY	= "Female";

} // [ + ] IF: Registered Member Account Gender Is: 1, Define as Female

} // [ + ] IF: Registered Member Account Is: Logged-In

/*
 ============================================================================================================
 +
 + Registered Member Account :: Loop :: Rank
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + IF: Check For Valid Member Account Credential Data In Browser Cookies
 ============================================================================================================
*/

if ($_GLOBAL_COOKIE_MEMBER_USERNAME && $_GLOBAL_COOKIE_MEMBER_PASSWORD != null) {

/*
 ============================================================================================================
 + IF: Registered Member Account :: Settings :: Gender :: Is: 1, Male
 ============================================================================================================
*/

if ($_GLOBAL_MEMBER_GENDER == "1") {

/*
 ============================================================================================================
 + Update :: Registered Member Account :: Rank :: Based On Experience Amount
 ============================================================================================================
*/

/*
 ============================================================================================================
 + IF: Registered Member Account :: Number of Posts :: Are Less Than OR Equal To: 50
 ============================================================================================================
*/

if ($_GLOBAL_MEMBER_NUMBER_OF_POSTS <= 50) {

	$_MAIN_MEMBER_RANK_UPDATE_DIGIT	= "0";

} // [ + ] IF: Registered Member Account :: Number of Posts :: Are Less Than OR Equal To: 50

/*
 ============================================================================================================
 + IF: Registered Member Account :: Number of Posts :: Are Less Than OR Equal To: 100
 ============================================================================================================
*/

if ($_GLOBAL_MEMBER_NUMBER_OF_POSTS >= 100) {

	$_MAIN_MEMBER_RANK_UPDATE_DIGIT	= "1";

} // [ + ] IF: Registered Member Account :: Number of Posts :: Are Greater Than OR Equal To: 100

/*
 ============================================================================================================
 + IF: Registered Member Account :: Number of Posts :: Are Less Than OR Equal To: 500
 ============================================================================================================
*/

if ($_GLOBAL_MEMBER_NUMBER_OF_POSTS >= 500) {

	$_MAIN_MEMBER_RANK_UPDATE_DIGIT	= "2";

} // [ + ] IF: Registered Member Account :: Number of Posts :: Are Greater Than Less Than OR Equal To: 500

/*
 ============================================================================================================
 + IF: Registered Member Account :: Number of Posts :: Are Less Than OR Equal To: 1000
 ============================================================================================================
*/

if ($_GLOBAL_MEMBER_NUMBER_OF_POSTS >= 1000) {

	$_MAIN_MEMBER_RANK_UPDATE_DIGIT	= "3";

} // [ + ] IF: Registered Member Account :: Number of Posts :: Are Greater Than OR Equal To 1000

/*
 ============================================================================================================
 + IF: Registered Member Account :: Number of Posts :: Are Less Than OR Equal To 1500
 ============================================================================================================
*/

if ($_GLOBAL_MEMBER_NUMBER_OF_POSTS >= 1500) {

	$_MAIN_MEMBER_RANK_UPDATE_DIGIT	= "4";

} // [ + ] IF: IF: Registered Member Account :: Number of Posts :: Are Greater Than OR Equal To 1500

} // [ + ] IF: Registered Member Account :: Gender :: Is: 1, Male

/*
 ============================================================================================================
 + IF: Registered Member Account :: Settings :: Gender :: Is: 2, Female
 ============================================================================================================
*/

if ($_GLOBAL_MEMBER_GENDER == "2") {

/*
 ============================================================================================================
 + Update :: Registered Member Account :: Rank :: Based On Experience Amount
 ============================================================================================================
*/

/*
 ============================================================================================================
 + IF: Registered Member Account :: Number of Posts :: Are Less Than OR Equal To: 50
 ============================================================================================================
*/

if ($_GLOBAL_MEMBER_NUMBER_OF_POSTS <= 50) {

	$_MAIN_MEMBER_RANK_UPDATE_DIGIT	= "0";

} // [ + ] IF: Registered Member Account :: Number of Posts :: Are Less Than OR Equal To: 50

/*
 ============================================================================================================
 + IF: Registered Member Account :: Number of Posts :: Are Less Than OR Equal To: 100
 ============================================================================================================
*/

if ($_GLOBAL_MEMBER_NUMBER_OF_POSTS >= 100) {

	$_MAIN_MEMBER_RANK_UPDATE_DIGIT	= "1";

} // [ + ] IF: Registered Member Account :: Number of Posts :: Are Greater Than OR Equal To: 100

/*
 ============================================================================================================
 + IF: Registered Member Account :: Number of Posts :: Are Less Than OR Equal To: 500
 ============================================================================================================
*/

if ($_GLOBAL_MEMBER_NUMBER_OF_POSTS >= 500) {

	$_MAIN_MEMBER_RANK_UPDATE_DIGIT	= "2";

} // [ + ] IF: Registered Member Account :: Number of Posts :: Are Greater Than Less Than OR Equal To: 500

/*
 ============================================================================================================
 + IF: Registered Member Account :: Number of Posts :: Are Less Than OR Equal To: 1000
 ============================================================================================================
*/

if ($_GLOBAL_MEMBER_NUMBER_OF_POSTS >= 1000) {

	$_MAIN_MEMBER_RANK_UPDATE_DIGIT	= "3";

} // [ + ] IF: Registered Member Account :: Number of Posts :: Are Greater Than OR Equal To 1000

/*
 ============================================================================================================
 + IF: Registered Member Account :: Number of Posts :: Are Less Than OR Equal To 1500
 ============================================================================================================
*/

if ($_GLOBAL_MEMBER_NUMBER_OF_POSTS >= 1500) {

	$_MAIN_MEMBER_RANK_UPDATE_DIGIT	= "4";

} // [ + ] IF: IF: Registered Member Account :: Number of Posts :: Are Greater Than OR Equal To 1500

} // [ + ] IF: Registered Member Account :: Gender :: Is: 2, Female

} // [ + ] IF: Registered Member Account :: Is Logged-In With Valid Credentials

/*
 ============================================================================================================
 +
 + Registered Member Account :: Loop :: Update :: Registered Member Account Rank
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + IF: Check For Valid Member Account Credential Data In Browser Cookies
 ============================================================================================================
*/

if ($_GLOBAL_COOKIE_MEMBER_USERNAME && $_GLOBAL_COOKIE_MEMBER_PASSWORD != null) {

/*
 ============================================================================================================
 + Database Server Query: Update :: Registered Member Account Rank
 ============================================================================================================
*/

$_DB_Query_Kernel_Update_Member_Rank 							= $DB->query("UPDATE {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_members SET member_level_rank='$_MAIN_MEMBER_RANK_UPDATE_DIGIT' WHERE member_username='$_GLOBAL_COOKIE_MEMBER_USERNAME'");

/*
 ============================================================================================================
 + IF: Database Server Query Is Successful
 ============================================================================================================
*/

if ($_DB_Query_Kernel_Update_Member_Rank) {
/**
 * Do Nothing
**/
} else {

										echo ($_Message_Kernel_ERROR_SQL_RANK);

} // [ + ] IF: Database Server Query :: Update :: Registered Member Account Rank

/*
 ============================================================================================================
 + Kill Database Server Query: Update :: Registered Member Account Rank
 ============================================================================================================
*/

$DB->free($_DB_Query_Kernel_Update_Member_Rank);

} // [ + ] IF: Registered Member Account :: Is Logged-In With Valid Credentials

/*
 ============================================================================================================
 +
 + Global :: Registered Member Account :: Rank :: Variables
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Database Server Query: Select :: All Ranks
 ============================================================================================================
*/

$_DB_Query_Kernel_Member_Rank_Select_All_Ranks						= $DB->query("SELECT * FROM {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_ranks ORDER BY id ASC");


while ($_DB_Query_Kernel_Member_Rank_Select_All_Ranks_Fetch_Array = $DB->fetch_array($_DB_Query_Kernel_Member_Rank_Select_All_Ranks)) {

/*
 ============================================================================================================
 + Set :: Registered Member Account :: Rank Variables :: Non-Specified
 ============================================================================================================
*/

$_GLOBAL_MEMBER_LEVEL_RANK_GENDER_NON_SPECIFIED_0					= "Chaos";

/*
 ============================================================================================================
 + Set :: Registered Member Account :: Rank Variables :: Male
 ============================================================================================================
*/

$_GLOBAL_MEMBER_LEVEL_RANK_GENDER_MALE_0						= $_DB_Query_Kernel_Member_Rank_Select_All_Ranks_Fetch_Array['rank_gender_male_0'];
$_GLOBAL_MEMBER_LEVEL_RANK_GENDER_MALE_1						= $_DB_Query_Kernel_Member_Rank_Select_All_Ranks_Fetch_Array['rank_gender_male_1'];
$_GLOBAL_MEMBER_LEVEL_RANK_GENDER_MALE_2						= $_DB_Query_Kernel_Member_Rank_Select_All_Ranks_Fetch_Array['rank_gender_male_2'];
$_GLOBAL_MEMBER_LEVEL_RANK_GENDER_MALE_3						= $_DB_Query_Kernel_Member_Rank_Select_All_Ranks_Fetch_Array['rank_gender_male_3'];
$_GLOBAL_MEMBER_LEVEL_RANK_GENDER_MALE_4						= $_DB_Query_Kernel_Member_Rank_Select_All_Ranks_Fetch_Array['rank_gender_male_4'];

/*
 ============================================================================================================
 + Set :: Registered Member Account :: Rank Variables :: Female
 ============================================================================================================
*/

$_GLOBAL_MEMBER_LEVEL_RANK_GENDER_FEMALE_5						= $_DB_Query_Kernel_Member_Rank_Select_All_Ranks_Fetch_Array['rank_gender_female_0'];
$_GLOBAL_MEMBER_LEVEL_RANK_GENDER_FEMALE_6						= $_DB_Query_Kernel_Member_Rank_Select_All_Ranks_Fetch_Array['rank_gender_female_1'];
$_GLOBAL_MEMBER_LEVEL_RANK_GENDER_FEMALE_7						= $_DB_Query_Kernel_Member_Rank_Select_All_Ranks_Fetch_Array['rank_gender_female_2'];
$_GLOBAL_MEMBER_LEVEL_RANK_GENDER_FEMALE_8						= $_DB_Query_Kernel_Member_Rank_Select_All_Ranks_Fetch_Array['rank_gender_female_3'];
$_GLOBAL_MEMBER_LEVEL_RANK_GENDER_FEMALE_9						= $_DB_Query_Kernel_Member_Rank_Select_All_Ranks_Fetch_Array['rank_gender_female_4'];

/*
 ============================================================================================================
 + Set :: Registered Member Account :: Rank Variables :: For Display :: Non-Specified
 ============================================================================================================
*/

if ($_GLOBAL_MEMBER_LEVEL_RANK == "0" || "-") {

	$_GLOBAL_MEMBER_LEVEL_RANK_DISPLAY = "$_GLOBAL_MEMBER_LEVEL_RANK_GENDER_NON_SPECIFIED_0";

} // [ + ] IF: Male Member Rank Level Is: 0 OR -

/*
 ============================================================================================================
 + Set :: Registered Member Account :: Rank Variables :: For Display :: Male
 ============================================================================================================
*/

/*
 =======================================================================================
 + Set :: Registered Member Account :: Rank Variables :: For Display :: Male :: Rank 0
 =======================================================================================
*/

if ($_GLOBAL_MEMBER_LEVEL_RANK == "0") {

	$_GLOBAL_MEMBER_LEVEL_RANK_DISPLAY = "$_GLOBAL_MEMBER_LEVEL_RANK_GENDER_MALE_0";

} // [ + ] IF: Registered Member Account :: Male :: Member Rank Level Is: 0

/*
 =======================================================================================
 + Set :: Registered Member Account :: Rank Variables :: For Display :: Male :: Rank 1
 =======================================================================================
*/

if ($_GLOBAL_MEMBER_LEVEL_RANK == "1") {

	$_GLOBAL_MEMBER_LEVEL_RANK_DISPLAY = "$_GLOBAL_MEMBER_LEVEL_RANK_GENDER_MALE_1";

} // [ + ] IF: Registered Member Account :: Male :: Member Rank Level Is: 1

/*
 =======================================================================================
 + Set :: Registered Member Account :: Rank Variables :: For Display :: Male :: Rank 2
 =======================================================================================
*/

if ($_GLOBAL_MEMBER_LEVEL_RANK == "2") {

	$_GLOBAL_MEMBER_LEVEL_RANK_DISPLAY = "$_GLOBAL_MEMBER_LEVEL_RANK_GENDER_MALE_2";

} // [ + ] IF: Registered Member Account :: Male :: Member Rank Level Is: 2

/*
 =======================================================================================
 + Set :: Registered Member Account :: Rank Variables :: For Display :: Male :: Rank 3
 =======================================================================================
*/

if ($_GLOBAL_MEMBER_LEVEL_RANK == "3") {

	$_GLOBAL_MEMBER_LEVEL_RANK_DISPLAY = "$_GLOBAL_MEMBER_LEVEL_RANK_GENDER_MALE_3";

} // [ + ] IF: Registered Member Account :: Male :: Member Rank Level Is: 3

/*
 =======================================================================================
 + Set :: Registered Member Account :: Rank Variables :: For Display :: Male :: Rank 4
 =======================================================================================
*/

if ($_GLOBAL_MEMBER_LEVEL_RANK == "4") {

	$_GLOBAL_MEMBER_LEVEL_RANK_DISPLAY = "$_GLOBAL_MEMBER_LEVEL_RANK_GENDER_MALE_4";

} // [ + ] IF: Registered Member Account :: Male :: Member Rank Level Is: 4

/*
 ============================================================================================================
 + Set :: Registered Member Account :: Rank Variables :: For Display :: Female
 ============================================================================================================
*/

/*
 =======================================================================================
 + Set :: Registered Member Account :: Rank Variables :: For Display :: Female :: Rank 5
 =======================================================================================
*/

if ($_GLOBAL_MEMBER_LEVEL_RANK == "5") {

	$_GLOBAL_MEMBER_LEVEL_RANK_DISPLAY = "$_GLOBAL_MEMBER_LEVEL_RANK_GENDER_MALE_5";

} // [ + ] IF: Registered Member Account :: Female :: Member Rank Level Is: 5

/*
 =======================================================================================
 + Set :: Registered Member Account :: Rank Variables :: For Display :: Female :: Rank 6
 =======================================================================================
*/

if ($_GLOBAL_MEMBER_LEVEL_RANK == "6") {

	$_GLOBAL_MEMBER_LEVEL_RANK_DISPLAY = "$_GLOBAL_MEMBER_LEVEL_RANK_GENDER_MALE_6";

} // [ + ] IF: Registered Member Account :: Female :: Member Rank Level Is: 6

/*
 =======================================================================================
 + Set :: Registered Member Account :: Rank Variables :: For Display :: Female :: Rank 7
 =======================================================================================
*/

if ($_GLOBAL_MEMBER_LEVEL_RANK == "7") {

	$_GLOBAL_MEMBER_LEVEL_RANK_DISPLAY = "$_GLOBAL_MEMBER_LEVEL_RANK_GENDER_MALE_7";

} // [ + ] IF: Registered Member Account :: Female :: Member Rank Level Is: 7

/*
 =======================================================================================
 + Set :: Registered Member Account :: Rank Variables :: For Display :: Female :: Rank 8
 =======================================================================================
*/

if ($_GLOBAL_MEMBER_LEVEL_RANK == "8") {

	$_GLOBAL_MEMBER_LEVEL_RANK_DISPLAY = "$_GLOBAL_MEMBER_LEVEL_RANK_GENDER_MALE_8";

} // [ + ] IF: Registered Member Account :: Female :: Member Rank Level Is: 8

/*
 =======================================================================================
 + Set :: Registered Member Account :: Rank Variables :: For Display :: Female :: Rank 9
 =======================================================================================
*/

if ($_GLOBAL_MEMBER_LEVEL_RANK == "9") {

	$_GLOBAL_MEMBER_LEVEL_RANK_DISPLAY = "$_GLOBAL_MEMBER_LEVEL_RANK_GENDER_MALE_9";

} // [ + ] IF: Registered Member Account :: Female :: Member Rank Level Is: 9

/*
 ============================================================================================================
 + Kill Database Server Query: Select All Ranks
 ============================================================================================================
*/

$DB->free($_DB_Query_Kernel_Member_Rank_Select_All_Ranks);

} // [ + ] WHILE: Retrieving Registered Member Account Rank Level Names

/*
 ============================================================================================================
 +
 + Registered Member Account :: Loop :: Specified Language Cookie Loop
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + IF: Registered Member Account :: Cookie :: Language Is Set => Set The System Language String To The Language Cookie String
 ============================================================================================================
*/

if ($_GLOBAL_COOKIE_MEMBER_LANGUAGE != null) {

$_GLOBAL_SYSTEM_LANGUAGE_DIRECTORY							= $_GLOBAL_COOKIE_MEMBER_LANGUAGE;

} // [ + ] IF: Language Cookie Is NOT Null, Set System Configured Language To The Language Cookie String

/*
 ============================================================================================================
 +
 +
 + [ @ ] Background :: Includes :: Application Modules
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 + Language File
 +
 ============================================================================================================
*/

	include_once "./System/Language/$_GLOBAL_SYSTEM_LANGUAGE_DIRECTORY/Language.$_INTERNAL_FILE_EXTENSION";

/*
 ============================================================================================================
 +
 + Background Application Modules :: Activity Logging
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Administrator-Level Activity Logging :: Application Module
 ============================================================================================================
*/

/*
 ============================================================================================================
 + IF: Check For Valid Registered Member Account Credential Data In Browser Cookies
 ============================================================================================================
*/

if ($_GLOBAL_COOKIE_MEMBER_USERNAME && $_GLOBAL_COOKIE_MEMBER_PASSWORD != null) {

/*
 ============================================================================================================
 + IF: Registered Member Account Access Level Is: Administrator
 ============================================================================================================
*/

if ($_GLOBAL_MEMBER_ACCESS_LEVEL >= 2) {

	include_once "./Applications/Background/Log_Administration";

} // [ + ] IF: Registered Member Account Access Level Is: Administrator, Include Activity Logging Application

} // [ + ] IF: Registered Member Is Logged-In

/*
 ============================================================================================================
 + Background-Level Activity Logging :: Application Module
 ============================================================================================================
*/

	include_once "./Applications/Background/Log_Background";

/*
 ============================================================================================================
 + Visitor-Level Activity Logging :: Application Module
 ============================================================================================================
*/

	include_once "./Applications/Background/Log_Visitor";

/*
 ============================================================================================================
 + Member-Level Activity Logging :: Application Module
 ============================================================================================================
*/

/*
 ============================================================================================================
 + IF: Check For Valid Member Account Credential Data In Browser Cookies
 ============================================================================================================
*/

if ($_GLOBAL_COOKIE_MEMBER_USERNAME && $_GLOBAL_COOKIE_MEMBER_PASSWORD != null) {

	include_once "./Applications/Background/Log_Member";

} // [ + ] IF: Registered Member Is Logged-In: Include Background Application: Member Activity Log

/*
 ============================================================================================================
 +
 + Theme File Includes
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + System Settings Defined Theme
 ============================================================================================================
*/

	include_once "./Theme/$_GLOBAL_SYSTEM_THEME_DIRECTORY/Theme.php";

/*
 ============================================================================================================
 +
 +
 + [ @ ] Plug-In and Extension :: Includes :: Application Modules
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 + Plug-In :: Text-Editor
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Plug-In :: Text-Editor :: Application Module Plug-In
 ============================================================================================================
*/

	include_once "./System/Plug-Ins/Text-Editor/$_GLOBAL_SYSTEM_PLUGIN_TEXT_EDITOR_DIRECTORY/Text-Editor.$_INTERNAL_FILE_EXTENSION";

/*
 ============================================================================================================
 +
 +
 + [ @ ] System :: Protocol :: Loops
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 + System Protocol :: Offline Mode
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + IF: Offline-Mode Is: On, ( 1 ) and Registered Member Account Access Level Is NOT Administrator, Redirect To Offline-Mode Status Message
 ============================================================================================================
*/

if ($_GLOBAL_SYSTEM_OFFLINE_STATUS >= 1) {

if ($_GLOBAL_MEMBER_ACCESS_LEVEL >= 2) {

	echo ($_Message_Kernel_OFFLINE_MODE_ENABLED);

} else {

	header("Location: ./Theme/$_GLOBAL_SYSTEM_THEME_DIRECTORY/HTML/Offline.html");

} // [ + ] IF: Web Site :: Status :: Offline Mode Status Is: On, Redirect Non-Administrator To Offline Mode Status Web Page AND Message

} // [ + ] IF: Check For :: Status :: Web Site Offline Mode

/*
 ============================================================================================================
 +
 +
 + [ @ ] Hyper-Text-Markup-Language Output :: Data Compression :: Protocols
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 + [ @ ] Hyper-Text-Markup-Language Output :: Data Compression :: Start
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + IF: Page Data Compression Is Set To On, Initialize Page Compression
 ============================================================================================================
*/

if ($_GLOBAL_SYSTEM_GZIP_STATUS >= 1) {

	ob_start("ob_gzhandler");

	$_GLOBAL_SYSTEM_GZIP_STATUS_DISPLAY						= "GZIP :: Compression: ON";

} else {

	$_GLOBAL_SYSTEM_GZIP_STATUS_DISPLAY						= "GZIP :: Compression: OFF";

} // [ + ] IF: GZIP Compression Is On: Set Display G.N.U. ZIP Compression Status Variable

/*
 ============================================================================================================
 +
 + Pre-Hyper-Text-Markup-Language Data, Time Explosion :: Start
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Hyper-Text-Markup-Language :: Output :: Page Data :: Generation Variables :: Initialize Microtime
 ============================================================================================================
*/

$_KERNEL_WEBPAGE_GENERATION_TIME_MICROTIME_START					= microtime();

/*
 ============================================================================================================
 + Hyper-Text-Markup-Language :: Output :: Page Data :: Generation Variables :: Data-Time Explosion
 ============================================================================================================
*/

$_KERNEL_WEBPAGE_GENERATION_DATATIME_EXPLOSION_START_ARRAY				= explode(" ", $_KERNEL_WEBPAGE_GENERATION_TIME_MICROTIME_START);

/*
 ============================================================================================================
 + Hyper-Text-Markup-Language :: Output :: Page Data :: Generation Variables :: Explode Data, Then Calculate Data Generation Time
 ============================================================================================================
*/

$_KERNEL_WEBPAGE_GENERATION_TIME_MICROTIME_START					= $_KERNEL_WEBPAGE_GENERATION_DATATIME_EXPLOSION_START_ARRAY[1] + $_KERNEL_WEBPAGE_GENERATION_DATATIME_EXPLOSION_START_ARRAY[0];

/*
 ============================================================================================================
 +
 +
 + [ @ ] Hyper-Text-Markup-Language :: Document-Data :: Generation: Start
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 + Hyper-Text-Markup-Language :: Document-Data :: Generation :: Data Explosion
 +
 ============================================================================================================
*/

echo ("
<!--================================================================================================-->
<!--				    $_PROJECT_STRING_NAME_EXTENDED				    -->
<!--================================================================================================-->

<!--================================================================================================-->
<!--		(C) Tinke Software, Gary Christopher Johnson's Works 2000 - Present-Day		    -->
<!--================================================================================================-->

<!--=============================-->
<!--        DOCUMENT TYPE        -->
<!--=============================-->

<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01 Transitional//EN\" \"http://www.w3.org/TR/html4/loose.dtd\">

<!--==============================-->
<!--        START DOCUMENT        -->
<!--==============================-->

<HTML>

<!--==============================-->
<!--	     HEAD CONTENTS        -->
<!--==============================-->

	<HEAD>
		<TITLE>$_GLOBAL_SYSTEM_SITE_TITLE</TITLE>
		<LINK REL=\"stylesheet\" HREF=\"./Theme/$_GLOBAL_MEMBER_THEME_DIRECTORY/Style_Sheet/Style.css?$_GLOBAL_SYSTEM_SECURITY_IMAGE_RANDOM_STRING_GENERATION_CACHE_CIRCUMVENTION\" TYPE=\"text/css\">
		$_THIS_THEME_META_DATA
	</HEAD>

<!--==============================-->
<!-- 	     BODY CONTENTS	  -->
<!--==============================-->

	<BODY>
");

/*
 ============================================================================================================
 +
 +
 + [ @ ] Theme :: Template Layout [ 1 ]
 +
 +
 ============================================================================================================
*/

echo ($_GLOBAL_THEME_LAYOUT_1);

/*
 ============================================================================================================
 +
 +
 + [ @ ] Administration :: Administration Panel
 +
 +
 ============================================================================================================
*/

if ($_GLOBAL_COOKIE_MEMBER_USERNAME && $_GLOBAL_COOKIE_MEMBER_PASSWORD != null && $_GLOBAL_MEMBER_ACCESS_LEVEL >= 3) {

	echo ($_THIS_THEME_APPLICATION_PANEL_1);

		include_once "./Applications/Panel/Administration.panel";

	echo ($_THIS_THEME_APPLICATION_PANEL_2);

} // [ + ] IF: Administrator-Level Access Credentials Exist: Show Administration Application Panel

/*
 ============================================================================================================
 +
 +
 + [ @ ] Administration :: Moderator Panel
 +
 +
 ============================================================================================================
*/

if ($_GLOBAL_COOKIE_MEMBER_USERNAME && $_GLOBAL_COOKIE_MEMBER_PASSWORD != null && $_GLOBAL_MEMBER_ACCESS_LEVEL >= 2) {

	echo ($_THIS_THEME_APPLICATION_PANEL_1);

		include_once "./Applications/Panel/Moderator.panel";

	echo ($_THIS_THEME_APPLICATION_PANEL_2);

} // [ + ] IF: Moderator-Level Access Credentials Exist: Show Moderator Application Panel

/*
 ============================================================================================================
 +
 +
 + [ @ ] Panel Application Modules, Aligned :: Left
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 + List Panel Application Modules :: Aligned Left
 +
 ============================================================================================================
*/

$_DB_Query_Kernel_Application_Panels_Aligned_Left 					= $DB->query("SELECT * FROM {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_application_panels WHERE panel_alignment='0' AND panel_file_status='1' ORDER BY panel_row ASC");

while ($_DB_Query_Kernel_Application_Panels_Aligned_Left_Fetch_Array = $DB->fetch_array($_DB_Query_Kernel_Application_Panels_Aligned_Left)) {

$_KERNEL_APPLICATION_PANEL_FILE_INTEGRITY_ALIGNED_LEFT					= $_DB_Query_Kernel_Application_Panels_Aligned_Left_Fetch_Array['panel_file_integrity'];
$_KERNEL_APPLICATION_PANEL_FILE_INTEGRITY_INSTALLATION_ALIGNED_LEFT			= $_DB_Query_Kernel_Application_Panels_Aligned_Left_Fetch_Array['panel_file_integrity_installation'];
$_KERNEL_APPLICATION_PANEL_FILE_NAME_ALIGNED_LEFT					= $_DB_Query_Kernel_Application_Panels_Aligned_Left_Fetch_Array['panel_file_name'];
$_KERNEL_APPLICATION_PANEL_TITLE_ALIGNED_LEFT						= $_DB_Query_Kernel_Application_Panels_Aligned_Left_Fetch_Array['panel_title'];
$_KERNEL_APPLICATION_PANEL_FILE_TIMESTAMP_INSTALLATION_ALIGNED_LEFT			= $_DB_Query_Kernel_Application_Panels_Aligned_Left_Fetch_Array['panel_file_timestamp_installation'];

echo ($_THIS_THEME_APPLICATION_PANEL_1);
echo ($_KERNEL_APPLICATION_PANEL_TITLE_ALIGNED_LEFT);

	include_once "./Applications/Panel/$_KERNEL_APPLICATION_PANEL_FILE_NAME_ALIGNED_LEFT.panel";

echo ($_THIS_THEME_APPLICATION_PANEL_2);

} // [ + ] WHILE: List Panels :: Aligned Left

/*
 ============================================================================================================
 + Kill Database Server Query: Fetch Panel Application Modules: Aligned Left
 ============================================================================================================
*/

$DB->free($_DB_Query_Kernel_Application_Panels_Aligned_Left);

/*
 ============================================================================================================
 +
 +
 + [ @ ] Theme :: Template Layout [ 2 ]
 +
 +
 ============================================================================================================
*/

echo ($_GLOBAL_THEME_LAYOUT_2);

/*
 ============================================================================================================
 +
 +
 +
 + [ ^ ] Application Module :: Includes
 +
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 +
 + [ @ ] Application Modules :: Services-Level
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 + Retrieve :: Application Module Entries :: Services
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Database Server Query :: Select :: Application Module Entries :: Services
 ============================================================================================================
*/

$_DB_Query_Kernel_Select_Applications_Services							= $DB->query("SELECT * FROM {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications_services ORDER BY id ASC");

/*
 ============================================================================================================
 + WHILE: Retrieve :: Application Module Entry Data :: From Database Server :: Services-Level
 ============================================================================================================
*/

while ($_DB_Query_Kernel_Select_Applications_Services_Fetch_Array = $DB->fetch_array($_DB_Query_Kernel_Select_Applications_Services)) {

$_KERNEL_APPLICATION_MODULE_SERVICES_FILE_INTEGRITY						= $_DB_Query_Kernel_Select_Applications_Services_Fetch_Array['application_file_integrity'];
$_KERNEL_APPLICATION_MODULE_SERVICES_FILE_INTEGRITY_INSTALLATION				= $_DB_Query_Kernel_Select_Applications_Services_Fetch_Array['application_file_integrity_installation'];
$_KERNEL_APPLICATION_MODULE_SERVICES_FILE_NAME							= $_DB_Query_Kernel_Select_Applications_Services_Fetch_Array['application_file_name'];
$_KERNEL_APPLICATION_MODULE_SERVICES_FILE_PERMISSION						= $_DB_Query_Kernel_Select_Applications_Services_Fetch_Array['application_file_permission'];
$_KERNEL_APPLICATION_MODULE_SERVICES_FILE_PERMISSION_CAMERA					= $_DB_Query_Kernel_Select_Applications_Services_Fetch_Array['application_file_permission_camera'];
$_KERNEL_APPLICATION_MODULE_SERVICES_FILE_PERMISSION_MICROPHONE					= $_DB_Query_Kernel_Select_Applications_Services_Fetch_Array['application_file_permission_microphone'];
$_KERNEL_APPLICATION_MODULE_SERVICES_FILE_PERMISSION_LOCATION_GPS				= $_DB_Query_Kernel_Select_Applications_Services_Fetch_Array['application_file_permission_location_gps'];
$_KERNEL_APPLICATION_MODULE_SERVICES_FILE_PERMISSION_LOCATION_GLO				= $_DB_Query_Kernel_Select_Applications_Services_Fetch_Array['application_file_permission_location_glo'];
$_KERNEL_APPLICATION_MODULE_SERVICES_FILE_PERMISSION_LOCATION_INTERNET_PROTOCOL_ADDRESS		= $_DB_Query_Kernel_Select_Applications_Services_Fetch_Array['application_file_permission_location_internet_protocol_address'];
$_KERNEL_APPLICATION_MODULE_SERVICES_FILE_STATUS						= $_DB_Query_Kernel_Select_Applications_Services_Fetch_Array['application_file_status'];
$_KERNEL_APPLICATION_MODULE_SERVICES_FILE_TIMESTAMP_INSTALLATION				= $_DB_Query_Kernel_Select_Applications_Services_Fetch_Array['application_file_timestamp_installation'];

/*
 ============================================================================================================
 + IF: Services Application :: Display :: Services :: Is: File Name
 ============================================================================================================
*/

if ($_GET[$_INTERNAL_APPLICATION_MODULE_SERVICES] == "$_KERNEL_APPLICATION_MODULE_SERVICES_FILE_NAME") {

/*
 ============================================================================================================
 + IF: Application Module :: Services :: File Status :: Is: On
 ============================================================================================================
*/

if ($_KERNEL_APPLICATION_MODULE_SERVICES_FILE_STATUS >= "1") {

/*
 ============================================================================================================
 + IF: Physical File Exists :: Application Module :: Services :: Application Module File
 ============================================================================================================
*/

if (file_exists("./Applications/Services/$_KERNEL_APPLICATION_MODULE_SERVICES_FILE_NAME")) {

/*
 ============================================================================================================
 + IF: Application Module :: Services :: File Permission :: Is: On, Include Application Module File
 ============================================================================================================
*/

if ($_KERNEL_APPLICATION_MODULE_SERVICES_FILE_PERMISSION >= "5") {

if ($_GLOBAL_COOKIE_MEMBER_USERNAME && $_GLOBAL_COOKIE_MEMBER_PASSWORD != null && $_GLOBAL_MEMBER_ACCESS_LEVEL >= 5) {

	include_once "./Applications/Services/$_KERNEL_APPLICATION_MODULE_SERVICES_FILE_NAME";

} else {

	echo ($_Message_Kernel_APPLICATION_SERVICES_APPLICATION_ACCESS_RESTRICTED_SERVICES);

} // [ + ] IF: Registered Member Account :: Cookies :: Credentials :: Exist, are Valid and Registered Member Account Access-Level Is: Services, >=5

} // [ + ] IF: Application Module :: Services :: Access Level :: Permission Is: Services, >=5

} else {

	echo ($_Message_Kernel_APPLICATION_SERVICES_APPLICATION_DEACTIVATED);

} // [ + ] IF: Application Module :: Services :: Physical File :: DOES OR DOES NOT Exist

} else {

	echo ($_Message_Kernel_APPLICATION_SERVICES_APPLICATION_FILE_NOT_FOUND);

} // [ + ] IF: Application Module :: Services :: File Status :: Is: On OR Off

} // [ + ] IF: Internal Application :: Services :: Is Application Module :: Services :: Is: Activated

} // [ + ] WHILE: Retrieve :: Application Module Entry Data :: From Database Server :: Services-Level

/*
 ============================================================================================================
 + Kill Database Server Query: Select From Applications :: Services
 ============================================================================================================
*/

$DB->free($_DB_Query_Kernel_Select_Applications_Services);

/*
 ============================================================================================================
 +
 +
 + [ @ ] Application Modules :: Root-Level
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 + Retrieve :: Application Module Entries :: Root
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Database Server Query :: Select :: Application Module Entries :: Root
 ============================================================================================================
*/

$_DB_Query_Kernel_Select_Applications_Root							= $DB->query("SELECT * FROM {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications_root ORDER BY id ASC");

/*
 ============================================================================================================
 + WHILE: Retrieve :: Application Module Entry Data :: From Database Server :: Root-Level
 ============================================================================================================
*/

while ($_DB_Query_Kernel_Select_Applications_Root_Fetch_Array = $DB->fetch_array($_DB_Query_Kernel_Select_Applications_Root)) {

$_KERNEL_APPLICATION_MODULE_ROOT_FILE_INTEGRITY						= $_DB_Query_Kernel_Select_Applications_Root_Fetch_Array['application_file_integrity'];
$_KERNEL_APPLICATION_MODULE_ROOT_FILE_INTEGRITY_INSTALLATION				= $_DB_Query_Kernel_Select_Applications_Root_Fetch_Array['application_file_integrity_installation'];
$_KERNEL_APPLICATION_MODULE_ROOT_FILE_NAME						= $_DB_Query_Kernel_Select_Applications_Root_Fetch_Array['application_file_name'];
$_KERNEL_APPLICATION_MODULE_ROOT_FILE_PERMISSION					= $_DB_Query_Kernel_Select_Applications_Root_Fetch_Array['application_file_permission'];
$_KERNEL_APPLICATION_MODULE_ROOT_FILE_PERMISSION_CAMERA					= $_DB_Query_Kernel_Select_Applications_Root_Fetch_Array['application_file_permission_camera'];
$_KERNEL_APPLICATION_MODULE_ROOT_FILE_PERMISSION_MICROPHONE				= $_DB_Query_Kernel_Select_Applications_Root_Fetch_Array['application_file_permission_microphone'];
$_KERNEL_APPLICATION_MODULE_ROOT_FILE_PERMISSION_LOCATION_GPS				= $_DB_Query_Kernel_Select_Applications_Root_Fetch_Array['application_file_permission_location_gps'];
$_KERNEL_APPLICATION_MODULE_ROOT_FILE_PERMISSION_LOCATION_GLO				= $_DB_Query_Kernel_Select_Applications_Root_Fetch_Array['application_file_permission_location_glo'];
$_KERNEL_APPLICATION_MODULE_ROOT_FILE_PERMISSION_LOCATION_INTERNET_PROTOCOL_ADDRESS	= $_DB_Query_Kernel_Select_Applications_Root_Fetch_Array['application_file_permission_location_internet_protocol_address'];
$_KERNEL_APPLICATION_MODULE_ROOT_FILE_STATUS						= $_DB_Query_Kernel_Select_Applications_Root_Fetch_Array['application_file_status'];
$_KERNEL_APPLICATION_MODULE_ROOT_FILE_TIMESTAMP_INSTALLATION				= $_DB_Query_Kernel_Select_Applications_Root_Fetch_Array['application_file_timestamp_installation'];

/*
 ============================================================================================================
 + IF: Root Application :: Display :: Root :: Is: File Name
 ============================================================================================================
*/

if ($_GET[$_INTERNAL_APPLICATION_MODULE_ROOT] == "$_KERNEL_APPLICATION_MODULE_ROOT_FILE_NAME") {

/*
 ============================================================================================================
 + IF: Application Module :: Root :: File Status :: Is: On
 ============================================================================================================
*/

if ($_KERNEL_APPLICATION_MODULE_ROOT_FILE_STATUS >= "1") {

/*
 ============================================================================================================
 + IF: Physical File Exists :: Application Module :: Root :: Application Module File
 ============================================================================================================
*/

if (file_exists("./Applications/Root/$_KERNEL_APPLICATION_MODULE_ROOT_FILE_NAME")) {

/*
 ============================================================================================================
 + IF: Application Module :: Root :: File Permission :: Is: On, Include Application Module File
 ============================================================================================================
*/

if ($_KERNEL_APPLICATION_MODULE_ROOT_FILE_PERMISSION >= "4") {

if ($_GLOBAL_COOKIE_MEMBER_USERNAME && $_GLOBAL_COOKIE_MEMBER_PASSWORD != null && $_GLOBAL_MEMBER_ACCESS_LEVEL >= 4) {

	include_once "./Applications/Root/$_KERNEL_APPLICATION_MODULE_ROOT_FILE_NAME";

} else {

	echo ($_Message_Kernel_APPLICATION_ROOT_APPLICATION_ACCESS_RESTRICTED_ROOT);

} // [ + ] IF: Registered Member Account :: Cookies :: Credentials :: Exist, are Valid and Registered Member Account Access-Level Is: Root, >=4

} // [ + ] IF: Application Module :: Root :: Access Level :: Permission Is: Root, >=4

} else {

	echo ($_Message_Kernel_APPLICATION_ROOT_APPLICATION_DEACTIVATED);

} // [ + ] IF: Application Module :: Root :: Physical File :: DOES OR DOES NOT Exist

} else {

	echo ($_Message_Kernel_APPLICATION_ROOT_APPLICATION_FILE_NOT_FOUND);

} // [ + ] IF: Application Module :: Root :: File Status :: Is: On OR Off

} // [ + ] IF: Internal Application :: Root :: Is Application Module :: Root :: Is: Activated

} // [ + ] WHILE: Retrieve :: Application Module Entry Data :: From Database Server :: Root-Level

/*
 ============================================================================================================
 + Kill Database Server Query: Select From Applications :: Root
 ============================================================================================================
*/

$DB->free($_DB_Query_Kernel_Select_Applications_Root);

/*
 ============================================================================================================
 +
 +
 + [ @ ] Application Modules :: Administration-Level
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 + Retrieve :: Application Module Entries :: Administration
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Database Server Query :: Select :: Application Module Entries :: Administration
 ============================================================================================================
*/

$_DB_Query_Kernel_Select_Applications_Administration 						= $DB->query("SELECT * FROM {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications_administration ORDER BY id ASC");

/*
 ============================================================================================================
 + WHILE: Retrieve :: Application Module Entry Data :: From Database Server :: Non-Registered Visitor, Registered Member Account and Moderator-Level
 ============================================================================================================
*/

while ($_DB_Query_Kernel_Select_Applications_Administration_Fetch_Array = $DB->fetch_array($_DB_Query_Kernel_Select_Applications_Administration)) {

$_KERNEL_APPLICATION_MODULE_ADMINISTRATION_FILE_INTEGRITY					= $_DB_Query_Kernel_Select_Applications_Administration_Fetch_Array['application_file_integrity'];
$_KERNEL_APPLICATION_MODULE_ADMINISTRATION_FILE_INTEGRITY_INSTALLATION				= $_DB_Query_Kernel_Select_Applications_Administration_Fetch_Array['application_file_integrity_installation'];
$_KERNEL_APPLICATION_MODULE_ADMINISTRATION_FILE_NAME						= $_DB_Query_Kernel_Select_Applications_Administration_Fetch_Array['application_file_name'];
$_KERNEL_APPLICATION_MODULE_ADMINISTRATION_FILE_PERMISSION					= $_DB_Query_Kernel_Select_Applications_Administration_Fetch_Array['application_file_permission'];
$_KERNEL_APPLICATION_MODULE_ADMINISTRATION_FILE_PERMISSION_CAMERA				= $_DB_Query_Kernel_Select_Applications_Administration_Fetch_Array['application_file_permission_camera'];
$_KERNEL_APPLICATION_MODULE_ADMINISTRATION_FILE_PERMISSION_MICROPHONE				= $_DB_Query_Kernel_Select_Applications_Administration_Fetch_Array['application_file_permission_microphone'];
$_KERNEL_APPLICATION_MODULE_ADMINISTRATION_FILE_PERMISSION_LOCATION_GPS				= $_DB_Query_Kernel_Select_Applications_Administration_Fetch_Array['application_file_permission_location_gps'];
$_KERNEL_APPLICATION_MODULE_ADMINISTRATION_FILE_PERMISSION_LOCATION_GLO				= $_DB_Query_Kernel_Select_Applications_Administration_Fetch_Array['application_file_permission_location_glo'];
$_KERNEL_APPLICATION_MODULE_ADMINISTRATION_FILE_PERMISSION_LOCATION_INTERNET_PROTOCOL_ADDRESS	= $_DB_Query_Kernel_Select_Applications_Administration_Fetch_Array['application_file_permission_location_internet_protocol_address'];
$_KERNEL_APPLICATION_MODULE_ADMINISTRATION_FILE_STATUS						= $_DB_Query_Kernel_Select_Applications_Administration_Fetch_Array['application_file_status'];
$_KERNEL_APPLICATION_MODULE_ADMINISTRATION_FILE_TIMESTAMP_INSTALLATION				= $_DB_Query_Kernel_Select_Applications_Administration_Fetch_Array['application_file_timestamp_installation'];

/*
 ============================================================================================================
 + IF: Administration Application :: Display :: Administrator :: Is: File Name
 ============================================================================================================
*/

if ($_GET[$_INTERNAL_APPLICATION_MODULE_ADMINISTRATOR] == "$_KERNEL_APPLICATION_MODULE_ADMINISTRATION_FILE_NAME") {

/*
 ============================================================================================================
 + IF: Application Module :: Administration :: File Status :: Is: On
 ============================================================================================================
*/

if ($_KERNEL_APPLICATION_MODULE_ADMINISTRATION_FILE_STATUS >= "1") {

/*
 ============================================================================================================
 + IF: Physical File Exists :: Application Module :: Administration Application Module File
 ============================================================================================================
*/

if (file_exists("./Applications/Administration/$_KERNEL_APPLICATION_MODULE_ADMINISTRATION_FILE_NAME")) {

/*
 ============================================================================================================
 + IF: Application Module :: Administration :: File Permission :: Is: On, Include Application Module File
 ============================================================================================================
*/

if ($_KERNEL_APPLICATION_MODULE_ADMINISTRATION_FILE_PERMISSION >= "3") {

if ($_GLOBAL_COOKIE_MEMBER_USERNAME && $_GLOBAL_COOKIE_MEMBER_PASSWORD != null && $_GLOBAL_MEMBER_ACCESS_LEVEL >= 3) {

	include_once "./Applications/Administration/$_KERNEL_APPLICATION_MODULE_ADMINISTRATION_FILE_NAME";

} else {

	echo ($_Message_Kernel_APPLICATION_ADMINISTRATION_APPLICATION_ACCESS_RESTRICTED_ADMINISTRATOR);

} // [ + ] IF: Registered Member Account :: Cookies :: Credentials :: Exist, are Valid and Registered Member Account Access-Level Is: >=3

} // [ + ] IF: Application Module :: Administrator :: Access Level :: Permission Is: Administration >=3

} else {

	echo ($_Message_Kernel_APPLICATION_ADMINISTRATION_APPLICATION_DEACTIVATED);

} // [ + ] IF: Application Module :: Administrator :: Physical File :: DOES OR DOES NOT Exist

} else {

	echo ($_Message_Kernel_APPLICATION_ADMINISTRATION_APPLICATION_FILE_NOT_FOUND);

} // [ + ] IF: Application Module :: Administrator :: File Status :: Is: On OR Off

} // [ + ] IF: Internal Application :: Administrator :: Is Application Module :: Administrator :: Is: Activated

} // [ + ] WHILE: Retrieve :: Application Module Entry Data :: From Database Server :: Administration-Level

/*
 ============================================================================================================
 + Kill Database Server Query: Select From Applications :: Administration
 ============================================================================================================
*/

$DB->free($_DB_Query_Kernel_Select_Applications_Administration);

/*
 ============================================================================================================
 +
 +
 + [ @ ] Application Modules :: Non-Registered Visitor, Registered Member Account and Moderator-Level
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 + Fetch :: Application Module Entries :: Non-Registered Visitor, Registered Member Account and Moderator-Level
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Database Server Query :: Select :: Application Module Entries :: Non-Registered Visitor, Registered Member Account and Moderator-Level
 ============================================================================================================
*/

$_DB_Query_Kernel_Select_Applications_Member 							= $DB->query("SELECT * FROM {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications ORDER BY id ASC");

/*
 ============================================================================================================
 + WHILE: Retrieve :: Application Module Entry Data :: From Database Server :: Non-Registered Visitor, Registered Member Account and Moderator-Level
 ============================================================================================================
*/

while ($_DB_Query_Kernel_Select_Applications_Member_Fetch_Array	= $DB->fetch_array($_DB_Query_Kernel_Select_Applications_Member)) {

$_KERNEL_APPLICATION_MODULE_MEMBER_FILE_INTEGRITY						= $_DB_Query_Kernel_Select_Applications_Member_Fetch_Array['application_file_integrity'];
$_KERNEL_APPLICATION_MODULE_MEMBER_FILE_INTEGRITY_INSTALLATION					= $_DB_Query_Kernel_Select_Applications_Member_Fetch_Array['application_file_integrity_installation'];
$_KERNEL_APPLICATION_MODULE_MEMBER_FILE_NAME							= $_DB_Query_Kernel_Select_Applications_Member_Fetch_Array['application_file_name'];
$_KERNEL_APPLICATION_MODULE_MEMBER_FILE_PERMISSION						= $_DB_Query_Kernel_Select_Applications_Member_Fetch_Array['application_file_permission'];
$_KERNEL_APPLICATION_MODULE_MEMBER_FILE_PERMISSION_CAMERA					= $_DB_Query_Kernel_Select_Applications_Member_Fetch_Array['application_file_permission_camera'];
$_KERNEL_APPLICATION_MODULE_MEMBER_FILE_PERMISSION_MICROPHONE					= $_DB_Query_Kernel_Select_Applications_Member_Fetch_Array['application_file_permission_microphone'];
$_KERNEL_APPLICATION_MODULE_MEMBER_FILE_PERMISSION_LOCATION_GPS					= $_DB_Query_Kernel_Select_Applications_Member_Fetch_Array['application_file_permission_location_gps'];
$_KERNEL_APPLICATION_MODULE_MEMBER_FILE_PERMISSION_LOCATION_GLO					= $_DB_Query_Kernel_Select_Applications_Member_Fetch_Array['application_file_permission_location_glo'];
$_KERNEL_APPLICATION_MODULE_MEMBER_FILE_PERMISSION_LOCATION_INTERNET_PROTOCOL_ADDRESS		= $_DB_Query_Kernel_Select_Applications_Member_Fetch_Array['application_file_permission_location_internet_protocol_address'];
$_KERNEL_APPLICATION_MODULE_MEMBER_FILE_STATUS							= $_DB_Query_Kernel_Select_Applications_Member_Fetch_Array['application_file_status'];
$_KERNEL_APPLICATION_MODULE_MEMBER_FILE_TIMESTAMP_INSTALLATION					= $_DB_Query_Kernel_Select_Applications_Member_Fetch_Array['application_file_timestamp_installation'];

/*
 ============================================================================================================
 + IF: Non-Registered Visitor OR Registered Member Account-Level :: Application :: Display :: Non-Registered Visitor, Registered Member Account and Moderator-Level :: Is: File Name
 ============================================================================================================
*/

if ($_GET[$_INTERNAL_APPLICATION_MODULE_MEMBER] == "$_KERNEL_APPLICATION_MODULE_MEMBER_FILE_NAME") {

/*
 ============================================================================================================
 + IF: Application Module :: Non-Registered Visitor, Registered Member Account and Moderator-Level :: File Status :: Is: On
 ============================================================================================================
*/

if ($_KERNEL_APPLICATION_MODULE_MEMBER_FILE_STATUS >= "1") {

/*
 ============================================================================================================
 + IF: Physical File Exists :: Application Module :: Non-Registered Visitor, Registered Member Account and Moderator-Level Application Module File
 ============================================================================================================
*/

if (file_exists("./Applications/Member/$_KERNEL_APPLICATION_MODULE_MEMBER_FILE_NAME")) {

/*
 ============================================================================================================
 + IF: Application Module :: File Permission :: Is: Public and No Registered Member Account Credentials Exist: Include Application Module File
 ============================================================================================================
*/

if ($_KERNEL_APPLICATION_MODULE_MEMBER_FILE_PERMISSION == "0") {

	include_once "./Applications/Member/$_KERNEL_APPLICATION_MODULE_MEMBER_FILE_NAME";

} else {

if ($_KERNEL_APPLICATION_MODULE_MEMBER_FILE_PERMISSION == "1") {

if ($_GLOBAL_COOKIE_MEMBER_USERNAME && $_GLOBAL_COOKIE_MEMBER_PASSWORD != null && $_GLOBAL_MEMBER_ACCESS_LEVEL >= 1) {

	include_once "./Applications/Member/$_KERNEL_APPLICATION_MODULE_MEMBER_FILE_NAME";

} else {

	echo ($_Message_Kernel_APPLICATION_MEMBER_APPLICATION_ACCESS_RESTRICTED_MEMBER);

} // [ + ] IF: Registered Member Account :: Cookies :: Credentials :: Exist, are Valid and Registered Member Account Access-Level Is: >= 1

} else {

if ($_KERNEL_APPLICATION_MODULE_MEMBER_FILE_PERMISSION == "2") {

if ($_GLOBAL_COOKIE_MEMBER_USERNAME && $_GLOBAL_COOKIE_MEMBER_PASSWORD != null && $_GLOBAL_MEMBER_ACCESS_LEVEL >= 2) {

	include_once "./Applications/Member/$_KERNEL_APPLICATION_MODULE_MEMBER_FILE_NAME";

} else {

	echo ($_Message_Kernel_APPLICATION_MEMBER_APPLICATION_ACCESS_RESTRICTED_MODERATOR);

} // [ + ] IF: Registered Member Account :: Cookies :: Credentials :: Exist, are Valid and Registered Member Account Access-Level Is: >=2

} // [ + ] IF: Application Module :: File Permission :: Access Level :: Is: 2, Registered Member Account :: Moderator

} // [ + ] IF: Application Module :: File Permission :: Access Level :: Is: 1, Registered Member Account

} // [ + ] IF: Application Module :: File Permission :: Access Level :: Is: 0, Non-Registered Visitor

} else {

	echo ($_Message_Kernel_APPLICATION_MEMBER_APPLICATION_FILE_NOT_FOUND);

} // [ + ] IF: Application Module :: Non-Registered Visitor :: Physical File :: Does Exist

} else {

	echo ($_Message_Kernel_APPLICATION_MEMBER_APPLICATION_DEACTIVATED); 

} // [ + ] IF: Application Module :: Non-Registered Visitor :: File Status :: Is: On OR Off

} // [ + ] IF: Internal Application :: Non-Registered Visitor :: Is Application Module :: Non-Registered Visitor :: Is: Activated

} // [ + ] WHILE: Retrieve :: Application Module Entry Data :: From Database Server :: Non-Registered Visitor, Registered Member Account and Moderator-Level

/*
 ============================================================================================================
 +
 +
 + [ @ ] Application Modules :: Custom-Level
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 + Fetch :: Custom Application Module Entries
 +
 ============================================================================================================
*/

$_DB_Query_Kernel_Select_Custom_Applications 						= $DB->query("SELECT * FROM {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications_custom ORDER BY id ASC");

while ($_DB_Query_Kernel_Select_Custom_Applications_Fetch_Array = $DB->fetch_array($_DB_Query_Kernel_Select_Custom_Applications)) {

$_KERNEL_APPLICATION_MODULE_CUSTOM_ID							= $_DB_Query_Kernel_Select_Custom_Applications_Fetch_Array['id'];
$_KERNEL_APPLICATION_MODULE_CUSTOM_DATA							= $_DB_Query_Kernel_Select_Custom_Applications_Fetch_Array['custom_application_data'];
$_KERNEL_APPLICATION_MODULE_CUSTOM_NAME							= $_DB_Query_Kernel_Select_Custom_Applications_Fetch_Array['custom_application_name'];
$_KERNEL_APPLICATION_MODULE_CUSTOM_TIMESTAMP_INSTALLATION				= $_DB_Query_Kernel_Select_Custom_Applications_Fetch_Array['custom_application_timestamp_installation'];

/*
 ============================================================================================================
 +
 + Include and Display Custom Applications
 +
 ============================================================================================================
*/

if ($_GET[$_INTERNAL_APPLICATION_MODULE_CUSTOM] == "$_KERNEL_APPLICATION_MODULE_CUSTOM_ID") {

		echo ("<CENTER><BIG><B>$_KERNEL_APPLICATION_MODULE_CUSTOM_NAME</B></BIG></CENTER><HR>$_KERNEL_APPLICATION_MODULE_CUSTOM_DATA<HR>Custom Application Module Installed: $_KERNEL_APPLICATION_MODULE_CUSTOM_TIMESTAMP_INSTALLATION");

} // [ + ] IF: Dipslay :: Custom Application Data

} // [ + ] WHILE: Fetching Custom Application Entries'From Database Server

/*
 ============================================================================================================
 + Kill Database Server Query: Select Custom Applications
 ============================================================================================================
*/

$DB->free($_DB_Query_Kernel_Select_Custom_Applications);

/*
 ============================================================================================================
 +
 +
 + [ @ ] Theme :: Template Layout [ 3 ]
 +
 +
 ============================================================================================================
*/

echo ($_GLOBAL_THEME_LAYOUT_3);

/*
 ============================================================================================================
 +
 +
 + [ @ ] Panel Application Modules, Aligned :: Right
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 + List :: Panel Application Modules :: Aligned Right
 +
 ============================================================================================================
*/

$_DB_Query_Kernel_Application_Panels_Aligned_Right 					= $DB->query("SELECT * FROM {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_application_panels WHERE panel_alignment='1' AND panel_file_status='1' ORDER BY panel_row ASC");

while ($_DB_Query_Kernel_Application_Panels_Aligned_Right_Fetch_Array = $DB->fetch_array($_DB_Query_Kernel_Application_Panels_Aligned_Right)) {

$_KERNEL_APPLICATION_PANEL_FILE_INTEGRITY_ALIGNED_RIGHT					= $_DB_Query_Kernel_Application_Panels_Aligned_Right_Fetch_Array['panel_file_integrity'];
$_KERNEL_APPLICATION_PANEL_FILE_INTEGRITY_INSTALLATION_ALIGNED_RIGHT			= $_DB_Query_Kernel_Application_Panels_Aligned_Right_Fetch_Array['panel_file_integrity_installation'];
$_KERNEL_APPLICATION_PANEL_FILE_NAME_ALIGNED_RIGHT					= $_DB_Query_Kernel_Application_Panels_Aligned_Right_Fetch_Array['panel_file_name'];
$_KERNEL_APPLICATION_PANEL_TITLE_ALIGNED_RIGHT						= $_DB_Query_Kernel_Application_Panels_Aligned_Right_Fetch_Array['panel_title'];
$_KERNEL_APPLICATION_PANEL_FILE_TIMESTAMP_INSTALLATION_ALIGNED_RIGHT			= $_DB_Query_Kernel_Application_Panels_Aligned_Right_Fetch_Array['panel_file_timestamp_installation'];

echo ($_THIS_THEME_APPLICATION_PANEL_1);

echo ($_KERNEL_APPLICATION_PANEL_TITLE_ALIGNED_RIGHT);

	include_once "./Applications/Panel/$_KERNEL_APPLICATION_PANEL_FILE_NAME_ALIGNED_RIGHT.panel";

echo ($_THIS_THEME_APPLICATION_PANEL_2);

} // [ + ] WHILE: Listing Application Panels :: Aligned Right

/*
 ============================================================================================================
 + Kill Database Server Query: Fetch Panel Application Modules, Aligned :: Right
 ============================================================================================================
*/

$DB->free($_DB_Query_Kernel_Application_Panels_Aligned_Right);

/*
 ============================================================================================================
 +
 +
 + [ @ ] Theme :: Template Layout [ 4 ]
 +
 +
 ============================================================================================================
*/

echo ($_GLOBAL_THEME_LAYOUT_4);

/*
 ============================================================================================================
 +
 +
 + [ @ ] Hyper-Text-Markup-Language :: Document-Data :: Generation: End
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 + Hyper-Text-Markup-Language :: Document-Data Generation :: Data Implosion
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 + Pre-Hyper-Text-Markup-Language :: Data-Time Explosion-Implosion :: Variables
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Data Implosion :: Microtime, End
 ============================================================================================================
*/

$_KERNEL_WEBPAGE_GENERATION_TIME_MICROTIME_END						= microtime();

/*
 ============================================================================================================
 + Data Implosion :: Time Explosion
 ============================================================================================================
*/

$_KERNEL_WEBPAGE_GENERATION_DATATIME_EXPLOSION_END_ARRAY				= explode(" ", $_KERNEL_WEBPAGE_GENERATION_TIME_MICROTIME_END);

/*
 ============================================================================================================
 + Data Implosion :: Time Implosion
 ============================================================================================================
*/

$_KERNEL_WEBPAGE_GENERATION_DATATIME_IMPLOSION_END_ARRAY				= implode(" ", $_KERNEL_WEBPAGE_GENERATION_TIME_MICROTIME_END);

/*
 ============================================================================================================
 + Data Implosion :: Time Explosion Array, Calculate Data-Time Explosion End-Time
 ============================================================================================================
*/

$_KERNEL_WEBPAGE_GENERATION_TIME_MICROTIME_END						= $_KERNEL_WEBPAGE_GENERATION_DATATIME_EXPLOSION_END_ARRAY[1] + $_KERNEL_WEBPAGE_GENERATION_DATATIME_EXPLOSION_END_ARRAY[0];

/*
 ============================================================================================================
 + Data Implosion :: Calculate Start-Time and End-Time Data-Time Explosion For Page Generation
 ============================================================================================================
*/

$_KERNEL_WEBPAGE_GENERATION_TIME_TOTAL_TIME						= $_KERNEL_WEBPAGE_GENERATION_TIME_MICROTIME_END - $_KERNEL_WEBPAGE_GENERATION_TIME_MICROTIME_START; 
$_KERNEL_WEBPAGE_GENERATION_TIME_TOTAL_TIME						= round($_KERNEL_WEBPAGE_GENERATION_TIME_TOTAL_TIME,5);

/*
 ============================================================================================================
 +
 +
 + [ @ ] Hyper-Text-Markup-Language :: Document: End: Output
 +
 +
 ============================================================================================================
*/

echo ("
		<CENTER>
			This Web Site Is Powered By:&nbsp;<A HREF=\"https://www.SourceForge.net/projects/cerberuscms\" TARGET=\"_NEW\" TITLE=\":: $_PROJECT_STRING_NAME_EXTENDED :: Official SourceForge Software Project Web Page ::\">$_PROJECT_STRING_NAME_EXTENDED</A>&nbsp;|&nbsp;Web-Page Data Generation Time: " . $_KERNEL_WEBPAGE_GENERATION_TIME_TOTAL_TIME . " Seconds&nbsp;|&nbsp;");

/*
 ============================================================================================================
 +
 +
 + Internal Resources :: Network Connections :: Close Connections :: Non-Registered Visitor and Registered Member
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Kill Database Server Query: Select System Settings
 ============================================================================================================
*/

$DB->free($_DB_Query_Kernel_Select_Main_Settings);

/*
 ============================================================================================================
 + Kill Database Server Query: Select Member Credentials
 ============================================================================================================
*/

/*
 ============================================================================================================
 + IF: Check For :: Valid Registered Member Account Credential Data In Browser Cookies
 ============================================================================================================
*/

if ($_GLOBAL_COOKIE_MEMBER_USERNAME && $_GLOBAL_COOKIE_MEMBER_PASSWORD != null) {

	$DB->free($_DB_Query_Kernel_Select_Member_Credentials);

} // [ + ] IF: Check For Valid Member Account Credential Data In Browser Cookies

/*
 ============================================================================================================
 + Kill Database Server Query: Member Banned Status
 ============================================================================================================
*/

$DB->free($_DB_Query_Kernel_Networking_Status_Security_Check_Blocked_String_Internet_Protocol_Address);

/*
 ============================================================================================================
 +
 +
 + [ @ ] Internal Resources :: Force Close :: All Database Server Connections
 +
 +
 ============================================================================================================
*/

} else {

		echo ("Kernel Message: Error, I Cannot Connect To The Structured Query Language Database Server Name: $_ACCESS_DATABASE_SERVER_DATABASE_NAME. Please Check The Database Server Access Credentials File.");

} // [ + ] IF: Connection To :: Database Server Name :: Variable Has Executed

} else {

		echo ("Kernel Message: Error, I Cannot Connect To The Structured Query Language Database Server Host-Name: $_ACCESS_DATABASE_SERVER_HOSTNAME. Please Check The Database Server Access Credentials File.");

} // [ + ] IF: Connection To :: Database Server Hostname :: Variable Has Executed

/*
 ============================================================================================================
 + Kill Database Server Connection: S.Q.L. Database Server Configured Strings
 ============================================================================================================
*/

if ($DB->close($_KERNEL_MYSQL_STANDARD_DATABASE_SERVER_CONNECT)) {

			echo ("Database Server Connection Closed For Internet Protocol Address: <A HREF=\"http://WhoIs.sc/$_GLOBAL_REMOTE_SERVER_ADDRESS\" TITLE=\":: View Detailed Who-Is Information For Internet Protocol Address: $_GLOBAL_REMOTE_SERVER_ADDRESS ::\" TARGET=\"_NEW\">$_GLOBAL_REMOTE_SERVER_ADDRESS</A>&nbsp;|&nbsp;");

} else {

			echo ("Kernel Message: Error: I Cannot Close The Database Server Connection For Internet Protocol Address: <A HREF=\"http://WhoIs.sc/$_GLOBAL_REMOTE_SERVER_ADDRESS\" TITLE=\":: View Detailed Who-Is Information For Internet Protocol Address: $_GLOBAL_REMOTE_SERVER_ADDRESS ::\" TARGET=\"_NEW\">$_GLOBAL_REMOTE_SERVER_ADDRESS</A>&nbsp;|&nbsp;");

} // [ + ] IF: Close :: Database Server Connection

echo ("
			This Web Page Will Close After One Hour Of Inactivity
		</CENTER>
	</BODY>

<!--===============================-->
<!--	     DOCUMENT END	   -->
<!--===============================-->

</HTML>
");

/*
 ============================================================================================================
 +
 +
 + [ @ ] Internal Resources :: Flushing and Destroying Initializations
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 + Flushing and Destroying All Previous Object Initializations
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Flush All Previously Initialized Objects
 ============================================================================================================
*/

ob_end_flush();

/*
 ============================================================================================================
 + Clean All Previously Initialized Objects
 ============================================================================================================
*/

ob_end_clean();

/*
 ============================================================================================================
 + Kill Everything Initialized and Running :: System-Wide
 ============================================================================================================
*/

die();
?>