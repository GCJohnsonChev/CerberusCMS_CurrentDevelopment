<?php
/*
 ============================================================================================================
 + Cerberus Content Management System
 + ---
 + - Author 		     : Gary Christopher Johnson - Rosedale, California
 + - Electronic Mail Address : TinkeSoftware@Protonmail.com
 + - Company		     : Tinke Software
 + - Company Address	     : Rosedale, California, U.S.A.
 + - Document Notes	     : View this file in a non-formatting text editor without word-wrap for the correct
 +			       display of this programming code and its indentation.
 + ---
 +
 +
 +
 +
 +
 +
 +
 +
 +
 +
 +
 + ---
 + - File Location: root->Cerberus->Cerberus.php
 + - File Version : 0.6 - Wednesday, March 1st of 2023
 + ---
 + -------------------------------------------------------------------------------
 + --()()--()()()--()()()--()()()---()()()--()()()--()--()------()()()------------
 + -()-----()------()--()--()---()--()------()--()--()--()------()----------------
 + -()-----()------()--()--()---()--()------()--()--()--()------()----------------
 + -()-----()------()--()--()---()--()------()--()--()--()------()----------------
 + -()-----()()()--()()()--()()()---()()()--()()()--()--()------()----------------
 + -()-----()------()--()--()---()--()------()--()--()--()------()----------------
 + -()-----()------()--()--()---()--()------()--()--()--()------()------------/-\-
 + -()-----()------()--()--()---()--()------()--()--()--()------()------------|4|-  ~ Wynn ~
 + --()()--()()()--()--()--()()()---()()()--()--()--()()()--()()()------------\-/- Build: 0.8
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 +
 +
 + [ ^ ] Cerberus Content Management System :: Kernel and Index
 +
 +
 +
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
 + [ @ ] Error Handling Systems
 +
 +
 ============================================================================================================
*/

error_reporting("E_WARNING ^ E_NOTICE");

/*
 ============================================================================================================
 +
 +
 + [ @ ] Internal File Redirection Systems
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 + Internal Redirection :: Installation Files
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Global Installation File Variables
 ============================================================================================================
*/

$_GLOBAL_SYSTEM_INSTALLATION_FILE						= "Architect.php";

/*
 ============================================================================================================
 + IF: Installation File Exists, Redirect To It
 ============================================================================================================
*/

if (file_exists($_GLOBAL_SYSTEM_INSTALLATION_FILE)) {

	header("location: Architect.php");

} // [ + ] IF: File Exists: System Installation Application

/*
 ============================================================================================================
 +
 +
 + [ @ ] Inclusion of All Internal Configuration Files
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 + Internal Configuration :: Global System Configuration Modules
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + IF: Global System Configuration File Exists, Include It
 ============================================================================================================
*/

$_GLOBAL_SYSTEM_CONFIGURATION_FILE						= "./System/Configuration/Global_Configuration.php";

if (file_exists($_GLOBAL_SYSTEM_CONFIGURATION_FILE)) {

	include_once "$_GLOBAL_SYSTEM_CONFIGURATION_FILE";

} else {

			echo ("Kernel Message: Error: System Configuration File Missing: $_GLOBAL_SYSTEM_CONFIGURATION_FILE | <A HREF=\"./Maintenance/Diagnostics/Diagnose.php\" TITLE=\":: $_PROJECT_STRING_NAME :: Diagnostics Application ::\" TARGET=\"_NEW\">Please Click Here For Extensive Diagnostics</A>");

} // [ + ] IF: File Exists: Global System Configuration File

/*
 ============================================================================================================
 +
 +
 + [ @ ] Inclusion of All Security Application Modules
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 + Global System Security :: Master Variable Sanitization Module
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + IF: Global System Security File: Master Sanitization Exists, Include It
 ============================================================================================================
*/

$_GLOBAL_SYSTEM_SECURITY_MASTER_SANITIZATION_FILE				= "./System/Security/Modules/Master_Sanitization.cerberus";

if (file_exists($_GLOBAL_SYSTEM_SECURITY_MASTER_SANITIZATION_FILE)) {

	//include_once "$_GLOBAL_SYSTEM_SECURITY_MASTER_SANITIZATION_FILE";

} else {

	echo ("Kernel Message: Missing :: Master Security Module :: Master Sanitization");

} // [ + ] IF: Include: Global Security Module File: Master Sanitization

/*
 ============================================================================================================
 +
 +
 + [ @ ] Initializations
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 + Initializations :: Global Database Management System Objects, Functions and Variables
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Database Management Server System :: Initialize Database Classes
 ============================================================================================================
*/

$DB										= new DB();
//$DB										= new mysqli($_ACCESS_DATABASE_SERVER_HOSTNAME, $_ACCESS_DATABASE_SERVER_USERNAME, $_ACCESS_DATABASE_SERVER_PASSWORD);

/*
 ============================================================================================================
 +
 + Connect To Defined and Assigned Database Management Server Details
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Database Management Server System Connection Variables :: My Structured Query Language :: Standard
 ============================================================================================================
*/

$_KERNEL_DATABASE_SERVER_CONNECT 						= mysql_connect($_ACCESS_DATABASE_SERVER_HOSTNAME, $_ACCESS_DATABASE_SERVER_USERNAME, $_ACCESS_DATABASE_SERVER_PASSWORD);
$_KERNEL_DATABASE_SERVER_DATABASE_NAME_SELECT 					= mysql_select_db($_ACCESS_DATABASE_SERVER_DATABASE_NAME);

/*
 ============================================================================================================
 + Database Management Server System Connection Variables :: My Structured Query Language :: Improved
 ============================================================================================================
*/

//$_KERNEL_DATABASE_SERVER_CONNECT 						= mysql_connect($_ACCESS_DATABASE_SERVER_HOSTNAME, $_ACCESS_DATABASE_SERVER_USERNAME, $_ACCESS_DATABASE_SERVER_PASSWORD);
//$_KERNEL_DATABASE_SERVER_DATABASE_NAME_SELECT 				= mysql_select_db($_KERNEL_DATABASE_SERVER_CONNECT, $_ACCESS_DATABASE_SERVER_DATABASE_NAME);

/*
 ============================================================================================================
 + IF: Specified Database Server Name Exists, Connect To It
 ============================================================================================================
*/

if ($_KERNEL_DATABASE_SERVER_CONNECT) {

/*
 ============================================================================================================
 + IF: Specified Database Server Database Name Exists, Select It
 ============================================================================================================
*/

if ($_KERNEL_DATABASE_SERVER_DATABASE_NAME_SELECT) {

/*
 ============================================================================================================
 +
 +
 + [ @ ] Global System Variables
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 + Global System :: Variables :: Global System Settings :: System-Wide
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Database Server Query: Retrieve Settings :: System-Wide
 ============================================================================================================
*/

$_DB_Query_Kernel_Select_Main_Settings						= $DB->query("SELECT * FROM {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_settings WHERE id='1'");
$_DB_Query_Kernel_Settings_Fetch_Array						= $DB->fetch_array($_DB_Query_Kernel_Select_Main_Settings);

/*
 ============================================================================================================
 + Global System Settings: Plug-Ins
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Global System S.Q.L. Settings: Plug-Ins :: Location
 ============================================================================================================
*/

$_GLOBAL_SYSTEM_PLUGIN_LOCATION_DIRECTORY					= $_DB_Query_Kernel_Settings_Fetch_Array['settings_system_plugin_directory_location'];
$_GLOBAL_SYSTEM_PLUGIN_LOCATION_STATUS						= $_DB_Query_Kernel_Settings_Fetch_Array['settings_system_plugin_status_location'];

/*
 ============================================================================================================
 + Global System S.Q.L. Settings: Plug-Ins :: Safe-HTML
 ============================================================================================================
*/

$_GLOBAL_SYSTEM_PLUGIN_SAFEHTML_DIRECTORY					= $_DB_Query_Kernel_Settings_Fetch_Array['settings_system_plugin_directory_safeHTML'];
$_GLOBAL_SYSTEM_PLUGIN_SAFEHTML_STATUS						= $_DB_Query_Kernel_Settings_Fetch_Array['settings_system_plugin_status_safeHTML'];

/*
 ============================================================================================================
 + Global System S.Q.L. Settings: Plug-Ins :: Text-Editor
 ============================================================================================================
*/

$_GLOBAL_SYSTEM_PLUGIN_TEXT_EDITOR_DIRECTORY					= $_DB_Query_Kernel_Settings_Fetch_Array['settings_system_plugin_directory_text_editor'];
$_GLOBAL_SYSTEM_PLUGIN_TEXT_EDITOR_STATUS					= $_DB_Query_Kernel_Settings_Fetch_Array['settings_system_plugin_status_text_editor'];

/*
 ============================================================================================================
 + Global System S.Q.L. Settings: Cookies
 ============================================================================================================
*/

$_GLOBAL_SYSTEM_COOKIE_TIME							= $_DB_Query_Kernel_Settings_Fetch_Array['settings_system_time_cookies'];

/*
 ============================================================================================================
 + Global System S.Q.L. Settings: Page Data Compression
 ============================================================================================================
*/

$_GLOBAL_SYSTEM_GZIP_STATUS							= $_DB_Query_Kernel_Settings_Fetch_Array['settings_system_status_embedded_compression_gzip'];

/*
 ============================================================================================================
 + Global System S.Q.L. Settings: Image Extensions
 ============================================================================================================
*/

$_GLOBAL_SYSTEM_IMAGE_EXTENSION							= $_DB_Query_Kernel_Settings_Fetch_Array['settings_system_file_extension_image'];

/*
 ============================================================================================================
 + Global System S.Q.L. Settings: Languages
 ============================================================================================================
*/

$_GLOBAL_SYSTEM_LANGUAGE_DIRECTORY						= $_DB_Query_Kernel_Settings_Fetch_Array['settings_system_directory_language'];

/*
 ============================================================================================================
 + Global System S.Q.L. Settings: Smileys
 ============================================================================================================
*/

$_GLOBAL_SYSTEM_SMILEYS_DIRECTORY						= $_DB_Query_Kernel_Settings_Fetch_Array['settings_system_plugin_directory_smileys'];

/*
 ============================================================================================================
 + Global System S.Q.L. Settings: Offline Mode Status
 ============================================================================================================
*/

$_GLOBAL_SYSTEM_OFFLINE_STATUS							= $_DB_Query_Kernel_Settings_Fetch_Array['settings_system_status_offline_mode'];

/*
 ============================================================================================================
 + Global System S.Q.L. Settings: Theme and Web Site Specific
 ============================================================================================================
*/

$_GLOBAL_SYSTEM_SITE_TITLE							= $_DB_Query_Kernel_Settings_Fetch_Array['settings_system_website_title'];
$_GLOBAL_SYSTEM_SOUND_EXTENSION							= $_DB_Query_Kernel_Settings_Fetch_Array['settings_system_file_extension_audio'];
$_GLOBAL_SYSTEM_THEME_DIRECTORY							= $_DB_Query_Kernel_Settings_Fetch_Array['settings_system_directory_theme'];

/*
 ============================================================================================================
 + Global System S.Q.L. Settings: File Upload Size
 ============================================================================================================
*/

$_GLOBAL_SYSTEM_UPLOAD_SIZE_PRIVATE						= $_DB_Query_Kernel_Settings_Fetch_Array['settings_system_upload_size_private'];
$_GLOBAL_SYSTEM_UPLOAD_SIZE_PUBLIC						= $_DB_Query_Kernel_Settings_Fetch_Array['settings_system_upload_size_public'];

/*
 ============================================================================================================
 +
 + Global System :: Variables :: Global System Security :: System-Wide
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Global System Settings: Security Module :: Master Sanitization
 ============================================================================================================
*/

$_GLOBAL_SYSTEM_PLUGIN_STATUS_MASTER_SANITIZATION				= $_DB_Query_Kernel_Settings_Fetch_Array['settings_system_security_module_status_master_sanitization'];

/*
 ============================================================================================================
 + Global Security :: Variables :: Random Number Generators :: Pure
 ============================================================================================================
*/

$_GLOBAL_SECURITY_RANDOM_NUMBER_GENERATOR_URL_DIGITS				= rand(0,9999999999);

/*
 ============================================================================================================
 + Global Security :: Variables :: Random Number Generators :: Hashed
 ============================================================================================================
*/

$_GLOBAL_SECURITY_RANDOM_NUMBER_GENERATOR_URL_DIGITS_HASH_MD5			= hash('md5',$_GLOBAL_SECURITY_RANDOM_NUMBER_GENERATOR_URL_DIGITS);
$_GLOBAL_SECURITY_RANDOM_NUMBER_GENERATOR_URL_DIGITS_HASH_SHA1			= hash('sha1',$_GLOBAL_SECURITY_RANDOM_NUMBER_GENERATOR_URL_DIGITS);
$_GLOBAL_SECURITY_RANDOM_NUMBER_GENERATOR_URL_DIGITS_HASH_SHA256		= hash('sha256',$_GLOBAL_SECURITY_RANDOM_NUMBER_GENERATOR_URL_DIGITS);
$_GLOBAL_SECURITY_RANDOM_NUMBER_GENERATOR_URL_DIGITS_HASH_SHA512		= hash('sha512',$_GLOBAL_SECURITY_RANDOM_NUMBER_GENERATOR_URL_DIGITS);
$_GLOBAL_SECURITY_RANDOM_NUMBER_GENERATOR_URL_DIGITS_HASH_OF_SHA1_OF_SHA256	= hash('sha256',$_GLOBAL_SECURITY_RANDOM_NUMBER_GENERATOR_URL_DIGITS_HASH_SHA1);

/*
 ============================================================================================================
 + Global Security :: Variables :: Random Number Generators :: Mersenne Twister
 ============================================================================================================
*/

$_GLOBAL_SECURITY_RANDOM_NUMBER_GENERATOR_URL_DIGITS_MERSENNE_TWISTER		= mt_rand(0,9999999999);

/*
 ============================================================================================================
 +
 +
 + [ @ ] Global Cookie Variables
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 + Global Cookie :: Variables :: Global Member Cookie Variables
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Global Member Cookie Variables :: Member Electronic Mail Address
 ============================================================================================================
*/

$_GLOBAL_COOKIE_MEMBER_ELECTRONIC_MAIL_ADDRESS					= $_COOKIE['kernel_member_electronic_mail_address'];

/*
 ============================================================================================================
 + Global Member Cookie Variables :: Member Password
 ============================================================================================================
*/

$_GLOBAL_COOKIE_MEMBER_PASSWORD							= $_COOKIE['kernel_member_password'];

/*
 ============================================================================================================
 + Global Member Cookie Variables :: Member UserName
 ============================================================================================================
*/

$_GLOBAL_COOKIE_MEMBER_USERNAME							= $_COOKIE['kernel_member_username'];

/*
 ============================================================================================================
 + Global Member Cookie Variables :: Member Language
 ============================================================================================================
*/

$_GLOBAL_COOKIE_MEMBER_LANGUAGE							= $_COOKIE['kernel_member_language'];

/*
 ============================================================================================================
 +
 + Global Registered Member Settings :: Variables
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + IF: Member UserName Cookie and Member Password Cookie Are Not Null, Retrieve Details
 ============================================================================================================
*/

if ($_GLOBAL_COOKIE_MEMBER_USERNAME && $_GLOBAL_COOKIE_MEMBER_PASSWORD != null) {

/*
 ============================================================================================================
 + Database Server Query: Fetch Database Stored Member Credentials
 ============================================================================================================
*/

$_DB_Query_Kernel_Select_Member_Credentials 					= $DB->query("SELECT * FROM {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_members WHERE member_username='$_GLOBAL_COOKIE_MEMBER_USERNAME'");
$_DB_Query_Kernel_Select_Member_Credentials_Fetch_Array 			= $DB->fetch_array($_DB_Query_Kernel_Select_Member_Credentials);

/*
 ============================================================================================================
 + Global Member Settings :: Variables :: Priviledge Level
 ============================================================================================================
*/

$_GLOBAL_MEMBER_ACCESS_LEVEL							= $_DB_Query_Kernel_Select_Member_Credentials_Fetch_Array['member_access_level'];

/*
 ============================================================================================================
 + Global Member Settings :: Variables :: Status :: Account Activation
 ============================================================================================================
*/

$_GLOBAL_MEMBER_STATUS_ACCOUNT_ACTIVATION					= $_DB_Query_Kernel_Select_Member_Credentials_Fetch_Array['member_status_account_activation'];

/*
 ============================================================================================================
 + Global Member Settings :: Variables :: Status :: Active
 ============================================================================================================
*/

$_GLOBAL_MEMBER_STATUS_ACCOUNT_ACTIVE						= $_DB_Query_Kernel_Select_Member_Credentials_Fetch_Array['member_status_account_active'];

/*
 ============================================================================================================
 + Global Member Settings :: Variables :: Status :: Last Active Timestamp
 ============================================================================================================
*/

$_GLOBAL_MEMBER_STATUS_ACCOUNT_LAST_ACTIVE					= $_DB_Query_Kernel_Select_Member_Credentials_Fetch_Array['member_status_account_last_active'];
$_GLOBAL_MEMBER_STATUS_ACCOUNT_LAST_ACTIVE_MINUTES				= $_DB_Query_Kernel_Select_Member_Credentials_Fetch_Array['member_status_account_last_active_minutes'];

/*
 ============================================================================================================
 + Global Member Settings :: Variables :: Avatar Image
 ============================================================================================================
*/

$_GLOBAL_MEMBER_IMAGE_AVATAR							= $_DB_Query_Kernel_Select_Member_Credentials_Fetch_Array['member_image_avatar'];

/*
 ============================================================================================================
 + Global Member Settings :: Variables :: Banned Status
 ============================================================================================================
*/

$_GLOBAL_MEMBER_STATUS_ACCOUNT_BANNED						= $_DB_Query_Kernel_Select_Member_Credentials_Fetch_Array['member_status_account_banned'];

/*
 ============================================================================================================
 + Global Member Settings :: Variables :: Electronic Mail Address
 ============================================================================================================
*/

$_GLOBAL_MEMBER_ELECTRONIC_MAIL_ADDRESS						= $_DB_Query_Kernel_Select_Member_Credentials_Fetch_Array['member_electronic_mail_address'];

/*
 ============================================================================================================
 + Global Member Settings :: Variables :: Experience Amount
 ============================================================================================================
*/

$_GLOBAL_MEMBER_EXPERIENCE_AMOUNT						= $_DB_Query_Kernel_Select_Member_Credentials_Fetch_Array['member_experience_amount'];

/*
 ============================================================================================================
 + Global Member Settings :: Variables :: Account Gender
 ============================================================================================================
*/

$_GLOBAL_MEMBER_GENDER								= $_DB_Query_Kernel_Select_Member_Credentials_Fetch_Array['member_gender'];

/*
 ============================================================================================================
 + Global Member Settings :: Variables :: Language
 ============================================================================================================
*/

$_GLOBAL_MEMBER_LANGUAGE							= $_DB_Query_Kernel_Select_Member_Credentials_Fetch_Array['member_language'];

/*
 ============================================================================================================
 + Global Member Settings :: Variables :: Last Login :: Location
 ============================================================================================================
*/

$_GLOBAL_MEMBER_LAST_REFERRER							= $_DB_Query_Kernel_Select_Member_Credentials_Fetch_Array['member_last_referrer'];

/*
 ============================================================================================================
 + Global Member Settings :: Variables :: Last Login :: Number of Posts
 ============================================================================================================
*/

$_GLOBAL_MEMBER_NUMBER_OF_POSTS							= $_DB_Query_Kernel_Select_Member_Credentials_Fetch_Array['member_number_of_posts'];

/*
 ============================================================================================================
 + Global Member Settings :: Variables :: Member Account Personal Profile Image
 ============================================================================================================
*/

$_GLOBAL_MEMBER_IMAGE_PROFILE							= $_DB_Query_Kernel_Select_Member_Credentials_Fetch_Array['member_image_picture'];

/*
 ============================================================================================================
 + Global Member Settings :: Variables :: Member Account Rank Level
 ============================================================================================================
*/

$_GLOBAL_MEMBER_LEVEL_RANK							= $_DB_Query_Kernel_Select_Member_Credentials_Fetch_Array['member_level_rank'];

/*
 ============================================================================================================
 + Global Member Settings :: Variables :: Member Account Theme Directory
 ============================================================================================================
*/

$_GLOBAL_MEMBER_THEME_DIRECTORY							= $_DB_Query_Kernel_Select_Member_Credentials_Fetch_Array['member_settings_theme_directory'];

/*
 ============================================================================================================
 + Global Member Settings :: Variables :: Internet Protocol Address :: Last Login
 ============================================================================================================
*/

$_GLOBAL_MEMBER_IP_ADDRESS_LAST_LOGIN						= $_DB_Query_Kernel_Select_Member_Credentials_Fetch_Array['member_ip_address_last_login'];

/*
 ============================================================================================================
 + Global Member Settings :: Variables :: Internet Protocol Address :: Authorized
 ============================================================================================================
*/

$_GLOBAL_MEMBER_IP_ADDRESS_AUTHORIZED						= $_DB_Query_Kernel_Select_Member_Credentials_Fetch_Array['member_ip_address_authorized'];

/*
 ============================================================================================================
 + Global Member Settings :: Variables :: Internet Protocol Address :: Log
 ============================================================================================================
*/

$_GLOBAL_MEMBER_IP_ADDRESS_LOG							= $_DB_Query_Kernel_Select_Member_Credentials_Fetch_Array['member_ip_address_log'];

/*
 ============================================================================================================
 +
 + Check For Banned Member Account Status
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + IF: Member Banned Status Is Active, Redirect To The Banned Message ( 1 )
 ============================================================================================================
*/

if ($_GLOBAL_MEMBER_STATUS_ACCOUNT_BANNED >= 1) {

	header("location: ./Theme/$_GLOBAL_SYSTEM_THEME_DIRECTORY/HTML/Banned.html");

} // [ + ] IF: Member Is Banned

} // [ + ] IF: Member Is Logged-In

/*
 ============================================================================================================
 +
 + Global Date, Time and Referrer Variables
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Global Local Server Variables :: Date
 ============================================================================================================
*/

$_GLOBAL_LOCAL_SERVER_DATE_STANDARD						= date("l, F j, Y g:i:s A");
$_GLOBAL_LOCAL_SERVER_DATE_RFC							= date("r");

/*
 ============================================================================================================
 + Global Local Server Variables :: Time
 ============================================================================================================
*/

$_GLOBAL_LOCAL_SERVER_TIME_HOURS						= date("g");
$_GLOBAL_LOCAL_SERVER_TIME_MINUTES						= date("i");
$_GLOBAL_LOCAL_SERVER_TIME_SECONDS						= date("s");
$_GLOBAL_LOCAL_SERVER_TIME_HOURS_MINUTES_SECONDS				= date("g-i-s");

/*
 ============================================================================================================
 + Global Local Server Variables :: Hyper-Text-Transfer-Protocol :: Referrer
 ============================================================================================================
*/

$_GLOBAL_LOCAL_SERVER_HTTP_REFERRER						= $_SERVER['HTTP_REFERER'];

/*
 ============================================================================================================
 +
 + Global Remote Server Variables
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Global Remote Server Variables :: Machine Information
 ============================================================================================================
*/

$_GLOBAL_REMOTE_SERVER_ADDRESS							= $_SERVER['REMOTE_ADDR'];
$_GLOBAL_REMOTE_SERVER_HOSTNAME							= $_SERVER['REMOTE_HOST'];
$_GLOBAL_REMOTE_SERVER_PORT							= $_SERVER['REMOTE_PORT'];
$_GLOBAL_REMOTE_USER								= $_SERVER['REMOTE_USER'];

/*
 ============================================================================================================
 +
 + Global Local Server Variables
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Global Local Server Variables :: Machine Information
 ============================================================================================================
*/

$_GLOBAL_LOCAL_SERVER_GATEWAY_INTERFACE						= $_SERVER['GATEWAY_INTERFACE'];
$_GLOBAL_LOCAL_SERVER_ADDRESS							= $_SERVER['SERVER_ADDR'];
$_GLOBAL_LOCAL_SERVER_NAME							= $_SERVER['SERVER_NAME'];
$_GLOBAL_LOCAL_SERVER_SOFTWARE							= $_SERVER['SERVER_SOFTWARE'];
$_GLOBAL_LOCAL_SERVER_PROTOCOL							= $_SERVER['SERVER_PROTOCOL'];
$_GLOBAL_LOCAL_SERVER_SIGNATURE							= $_SERVER['SERVER_SIGNATURE'];

/*
 ============================================================================================================
 + Global Remote Server Variables :: Connection Request Information
 ============================================================================================================
*/

$_GLOBAL_LOCAL_SERVER_REQUEST_METHOD						= $_SERVER['REQUEST_METHOD'];
$_GLOBAL_LOCAL_SERVER_REQUEST_TIME						= $_SERVER['REQUEST_TIME'];
$_GLOBAL_LOCAL_SERVER_REQUEST_TIME_FLOAT					= $_SERVER['REQUEST_TIME_FLOAT'];
$_GLOBAL_LOCAL_SERVER_QUERY_STRING						= $_SERVER['QUERY_STRING'];
$_GLOBAL_LOCAL_SERVER_DOCUMENT_ROOT						= $_SERVER['DOCUMENT_ROOT'];

/*
 ============================================================================================================
 + Global Remote Server Variables :: Hyper-Text-Transfer-Protocol Information
 ============================================================================================================
*/

$_GLOBAL_LOCAL_SERVER_HTTP_ACCEPT						= $_SERVER['HTTP_ACCEPT'];
$_GLOBAL_LOCAL_SERVER_HTTP_ACCEPT_CHARACTER_SET					= $_SERVER['HTTP_ACCEPT_CHARSET'];
$_GLOBAL_LOCAL_SERVER_HTTP_ACCEPT_ENCODING					= $_SERVER['HTTP_ACCEPT_ENCODING'];
$_GLOBAL_LOCAL_SERVER_HTTP_ACCEPT_LOADING					= $_SERVER['HTTP_ACCEPT_LOADING'];
$_GLOBAL_LOCAL_SERVER_HTTP_ACCEPT_LANGUAGE					= $_SERVER['HTTP_ACCEPT_LANGUAGE'];
$_GLOBAL_LOCAL_SERVER_HTTP_CONNECTION_TYPE					= $_SERVER['HTTP_CONNECTION'];
$_GLOBAL_LOCAL_SERVER_HTTP_HOST							= $_SERVER['HTTP_HOST'];
$_GLOBAL_LOCAL_SERVER_HTTP_REFERRER						= $_SERVER['HTTP_REFERER'];
$_GLOBAL_LOCAL_SERVER_HTTP_USER_AGENT						= $_SERVER['HTTP_USER_AGENT'];

/*
 ============================================================================================================
 +
 +
 + [ @ ] Internal Applications
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 +
 + Internal Application :: Login
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
 + Internal Application :: Login Form :: Post Variables
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Internal Security=>Sanitize Electronic Mail Address Post Data
 ============================================================================================================
*/

$_KERNEL_LOGIN_ELECTRONIC_MAIL_ADDRESS_CLEAR					= $_POST['AM_Login_Electronic_Mail_Address'];
$_KERNEL_LOGIN_ELECTRONIC_MAIL_ADDRESS_CLEAR					= preg_replace("/'/","`", $_KERNEL_LOGIN_ELECTRONIC_MAIL_ADDRESS_CLEAR);
$_KERNEL_LOGIN_ELECTRONIC_MAIL_ADDRESS_CLEAR					= stripslashes($_KERNEL_LOGIN_ELECTRONIC_MAIL_ADDRESS_CLEAR);

/*
 ============================================================================================================
 + Internal Security=>Sanitize Password Post Data
 ============================================================================================================
*/

$_KERNEL_LOGIN_PASSWORD_CLEAR							= $_POST['AM_Login_Password'];
$_KERNEL_LOGIN_PASSWORD_CLEAR							= preg_replace("/'/","`", $_KERNEL_LOGIN_PASSWORD_CLEAR);
$_KERNEL_LOGIN_PASSWORD_CLEAR							= stripslashes($_KERNEL_LOGIN_PASSWORD_CLEAR);

/*
 ============================================================================================================
 + Internal Security=>Sanitize UserName Post Data
 ============================================================================================================
*/

$_KERNEL_LOGIN_USERNAME_CLEAR							= $_POST['AM_Login_UserName'];
$_KERNEL_LOGIN_USERNAME_CLEAR							= preg_replace("/'/","`", $_KERNEL_LOGIN_USERNAME_CLEAR);
$_KERNEL_LOGIN_USERNAME_CLEAR							= stripslashes($_KERNEL_LOGIN_USERNAME_CLEAR);

/*
 ============================================================================================================
 +
 + Internal Security :: Login :: Check Post Data Versus Stored Server Data
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Database Server Query: Check Database Entries For Posted UserName
 ============================================================================================================
*/

$DB_Query_Kernel_Check_Member_Account_Credentials 				= $DB->query("SELECT * FROM {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_members WHERE member_username='$_KERNEL_LOGIN_USERNAME_CLEAR' AND member_electronic_mail_address='$_KERNEL_LOGIN_ELECTRONIC_MAIL_ADDRESS_CLEAR'");

/*
 ============================================================================================================
 + Fetch Real Member Data From Database Server Entries
 ============================================================================================================
*/

$DB_Query_Kernel_Check_Member_Account_Credentials_Fetch_Array				= $DB->fetch_array($DB_Query_Kernel_Check_Member_Account_Credentials);
$DB_Query_Kernel_Check_Member_Account_Credentials_Member_Username			= $DB_Query_Kernel_Check_Member_Account_Credentials_Fetch_Array['member_username'];
$DB_Query_Kernel_Check_Member_Account_Credentials_Member_Electronic_Mail_Address	= $DB_Query_Kernel_Check_Member_Account_Credentials_Fetch_Array['member_electronic_mail_address'];
$DB_Query_Kernel_Check_Member_Account_Credentials_Member_Password			= $DB_Query_Kernel_Check_Member_Account_Credentials_Fetch_Array['member_password'];

/*
 ============================================================================================================
 + IF: Encrypted Clear-Text Posted Data Is The Exact Encrypted String Stored In The Database Server, Verify The Password
 ============================================================================================================
*/

if (password_verify($_KERNEL_LOGIN_PASSWORD_CLEAR, $DB_Query_Kernel_Check_Member_Account_Credentials_Member_Password)) {

/*
 ============================================================================================================
 + The Member Account Password Has Been Verified Exactly, Set All Valid Encrypted Credential Cookies
 ============================================================================================================
*/

	setcookie("kernel_member_electronic_mail_address","$_KERNEL_LOGIN_ELECTRONIC_MAIL_ADDRESS_CLEAR", time()+$_GLOBAL_SYSTEM_COOKIE_TIME);
	setcookie("kernel_member_username","$_KERNEL_LOGIN_USERNAME_CLEAR", time()+$_GLOBAL_SYSTEM_COOKIE_TIME);
	setcookie("kernel_member_password","$DB_Query_Kernel_Check_Member_Account_Credentials_Member_Password", time()+$_GLOBAL_SYSTEM_COOKIE_TIME);

/*
 ============================================================================================================
 + Member Account Authentication Log :: Variables
 ============================================================================================================
*/

$_Kernel_Member_Account_Authentication_Log_OPEN_FILE_NAME				= fopen("./Member/$_KERNEL_LOGIN_USERNAME_CLEAR/Files/Document/Activity_Logging/Authentication_Log.php", "a");
$_Kernel_Member_Account_Authentication_Log_TIMESTAMP_HASH				= hash('sha256', $_GLOBAL_LOCAL_SERVER_DATE_STANDARD);

/*
 ============================================================================================================
 + Member Account Authentication Log :: Write Authentication Data To Authentication Log
 ============================================================================================================
*/

fwrite($_Kernel_Member_Account_Authentication_Log_OPEN_FILE_NAME, "
---------------------------------------------------------------------------------------
Kernel Message: 
The Member Account: $_KERNEL_LOGIN_USERNAME_CLEAR Successfully Authenticated
---------------------------------------------------------------------------------------
* Member Account UserName: $_KERNEL_LOGIN_USERNAME_CLEAR
* Member Account Password: ****************************
* Remote Server Internet Protocol Address: $_GLOBAL_REMOTE_SERVER_ADDRESS
* Local Server Internet Protocol Address: $_GLOBAL_LOCAL_SERVER_ADDRESS
* Unique HASH Fingerprint: $_Kernel_Member_Account_Authentication_Log_TIMESTAMP_HASH
* Authentication Timestamp From The Local Server: $_GLOBAL_LOCAL_SERVER_DATE_STANDARD
---------------------------------------------------------------------------------------
");

/*
 ============================================================================================================
 + Close File :: Member Account Authentication Log
 ============================================================================================================
*/

fclose($_Kernel_Member_Account_Authentication_Log_OPEN_FILE_NAME);

/*
 ============================================================================================================
 + The Member Account Password Has Been Verified and Set Exactly: Set Member Account Last Login Internet Protocol Address To Current
 ============================================================================================================
*/

$_DB_Query_Kernel_Login_Set_Member_Status_Account_Last_Login				= $DB->query("UPDATE {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_members SET member_ip_address_last_login='$_GLOBAL_REMOTE_SERVER_ADDRESS' WHERE member_username='$_KERNEL_LOGIN_USERNAME_CLEAR'");
$_DB_Query_Kernel_Login_Set_Member_Status_Account_Active				= $DB->query("UPDATE {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_members SET member_status_account_active='1' WHERE member_username='$_KERNEL_LOGIN_USERNAME_CLEAR'");

/*
 ============================================================================================================
 + IF: Database Server Query: Update Member Account Last Login Internet Protocol Address To Current
 ============================================================================================================
*/

if ($_DB_Query_Kernel_Login_Set_Member_Status_Account_Last_Login && $_DB_Query_Kernel_Login_Set_Member_Status_Account_Active) {
/**
 * Do Nothing
**/
} else {
/**
 * Do Nothing
**/
} // [ + ] IF: Internal Application: Login Is Activated: Set Member Account Active To Active

/*
 ============================================================================================================
 + Header Redirect :: Member Account Control Panel
 ============================================================================================================
*/
	
	header("location: ?$_INTERNAL_APPLICATION_MODULE_MEMBER=Control_Panel");
	
} else {

/*
 ============================================================================================================
 + IF: Posted Data Is Incorrect Information, Redirect To No Known Member Message
 ============================================================================================================
*/

	header("location: ?$_INTERNAL_APPLICATION_MODULE_MEMBER=Login&Message=No_Member");
	
} // [ + ] IF: Verify Password Function: Take Clear-Text Password, Encrypt It and Then Compare It To Encrypted Stored Password

/*
 ============================================================================================================
 + Kill Database Server Query: Check Member Account Credentials Data
 ============================================================================================================
*/

$DB->free($DB_Query_Kernel_Check_Member_Account_Credentials);

/*
 ============================================================================================================
 + Kill Database Server Query: Check Member Account Credentials Data :: Array
 ============================================================================================================
*/

$DB->free($DB_Query_Kernel_Check_Member_Account_Credentials_Array);

} // [ + ] IF: Internal Application: Login Is Activated

/*
 ============================================================================================================
 +
 + Internal Application :: Logout
 +
 ============================================================================================================
*/

if ($_GET["$_INTERNAL_APPLICATION_MODULE_INTERNAL"] == "Logout") {

/*
 ============================================================================================================
 + IF: Check For Valid Member Account Credential Data In Browser Cookies
 ============================================================================================================
*/

if ($_GLOBAL_COOKIE_MEMBER_USERNAME && $_GLOBAL_COOKIE_MEMBER_PASSWORD != null) {

/*
 ============================================================================================================
 + Database Server Query: Remove Authorized Member Account Internet Protocol Address
 ============================================================================================================
*/

$_DB_Query_Kernel_Logout_Remove_Member_Account_Authorized_IP_Address			= $DB->query("UPDATE {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_members SET member_ip_address_authorized='000.000.000.000' WHERE member_username='$_GLOBAL_COOKIE_MEMBER_USERNAME' AND member_electronic_mail_address='$_GLOBAL_COOKIE_MEMBER_ELECTRONIC_MAIL_ADDRESS'");
$_DB_Query_Kernel_Logout_Remove_Member_Account_Status_Active				= $DB->query("UPDATE {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_members SET member_status_account_active='0' WHERE member_username='$_GLOBAL_COOKIE_MEMBER_USERNAME' AND member_electronic_mail_address='$_GLOBAL_COOKIE_MEMBER_ELECTRONIC_MAIL_ADDRESS'");
$_DB_Query_Kernel_Logout_Remove_Member_Account_IP_Authorization_Token			= $DB->query("UPDATE {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_members SET member_ip_address_authorization_token='0' WHERE member_username='$_GLOBAL_COOKIE_MEMBER_USERNAME' AND member_electronic_mail_address='$_GLOBAL_COOKIE_MEMBER_ELECTRONIC_MAIL_ADDRESS'");

/*
 ============================================================================================================
 + IF: Database Server Query: Remove Authorized Member Account Internet Protocol Address
 ============================================================================================================
*/

if ($_DB_Query_Kernel_Logout_Remove_Member_Account_Authorized_IP_Address && $_DB_Query_Kernel_Logout_Remove_Member_Account_Status_Active && $_DB_Query_Kernel_Logout_Remove_Member_Account_IP_Authorization_Token) {

/*
 ============================================================================================================
 + Reduce Time On All Stored Browser Cookies
 ============================================================================================================
*/

	setcookie("kernel_member_electronic_mail_address","", time()-42000);
	setcookie("kernel_member_username","", time()-42000);
	setcookie("kernel_member_password","", time()-42000);
	setcookie("kernel_member_language","", time()-42000);

/*
 ============================================================================================================
 + Member Account Logout Log :: Variables
 ============================================================================================================
*/

$_Kernel_Member_Account_Logout_Log_OPEN_FILE_NAME					= fopen("./Member/$_GLOBAL_COOKIE_MEMBER_USERNAME/Files/Document/Activity_Logging/Authentication_Log.php", "a");
$_Kernel_Member_Account_Logout_Log_TIMESTAMP_HASH					= hash('sha256', $_GLOBAL_LOCAL_SERVER_DATE_STANDARD);

/*
 ============================================================================================================
 + Member Account Logout Log :: Write Logout Data To Authentication Log
 ============================================================================================================
*/

fwrite($_Kernel_Member_Account_Logout_Log_OPEN_FILE_NAME, "
---------------------------------------------------------------------------------------
Kernel Message: 
The Member Account: $_GLOBAL_COOKIE_MEMBER_USERNAME Successfully Logged-Out
---------------------------------------------------------------------------------------
* Member Account UserName: $_GLOBAL_COOKIE_MEMBER_USERNAME
* Member Account Password: ****************************
* Remote Server Internet Protocol Address: $_GLOBAL_REMOTE_SERVER_ADDRESS
* Local Server Internet Protocol Address: $_GLOBAL_LOCAL_SERVER_ADDRESS
* Unique HASH Fingerprint: $_Kernel_Member_Account_Logout_Log_TIMESTAMP_HASH
* Logout Timestamp From The Local Server: $_GLOBAL_LOCAL_SERVER_DATE_STANDARD
---------------------------------------------------------------------------------------
");

/*
 ============================================================================================================
 + Close File :: Member Account Authentication Log
 ============================================================================================================
*/

fclose($_Kernel_Member_Account_Logout_Log_OPEN_FILE_NAME);

} else {
/**
 * Do Nothing
**/
} // [ + ] IF: Internal Application: Logout Is Activated: Set Member Account Active Status To Inactive

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
	
	header("location: ?$_INTERNAL_APPLICATION_MODULE_MEMBER=News");

} // [ + ] IF: Check For Valid Member Account Credential Data In Browser Cookies

} // [ + ] IF: Internal Application: Logout Is Activated

/*
 ============================================================================================================
 +
 + Internal Application :: Set Language
 +
 ============================================================================================================
*/

if ($_GET["$_INTERNAL_APPLICATION_MODULE_INTERNAL"] == "Language") {

$_KERNEL_POST_LANGUAGE	 							= $_POST['AM_Specify_Language'];
	
	setcookie("kernel_member_language","$_KERNEL_POST_LANGUAGE", time()+$_GLOBAL_SYSTEM_COOKIE_TIME);
	header("location: ?$_INTERNAL_APPLICATION_MODULE_MEMBER=System_Message&Message=Language");

} // [ + ] IF: Internal Application: Language Is Activated

/*
 ============================================================================================================
 +
 +
 + [ @ ] Internal Security Protocols
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 + Internal Security :: Account Session :: Restrict Logged-In Members To Authorized Internet Protocol Address
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
 + IF: Member Account Last Login Internet Protocol Address IS NOT Current Connected Internet Protocol Address
 ============================================================================================================
*/

if ($_GLOBAL_MEMBER_IP_ADDRESS_AUTHORIZED != "$_GLOBAL_REMOTE_SERVER_ADDRESS") {

/*
 ============================================================================================================
 + Reduce Time On All Browser Stored Cookies
 ============================================================================================================
*/

	setcookie("kernel_member_electronic_mail_address","", time()-42000);
	setcookie("kernel_member_username","", time()-42000);
	setcookie("kernel_member_password","", time()-42000);
	setcookie("kernel_member_language","", time()-42000);

	header("location: ?$_INTERNAL_APPLICATION_MODULE_MEMBER=Login&Authorization=IP_Address");

} else {
/**
 * Do Nothing
**/
} // [ + ] IF: Member Account Last Known Internet Protocol Address IS NOT Current Internet Protocol Address, Immediately Logout

} // [ + ] IF: Member Account Is Logged-In And Valid Credentials Are Set

/*
 ============================================================================================================
 +
 + Internal Security :: Server Cache :: Cache Web-Page Circumvention
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Cache Web-Page Circumvention :: Variables
 ============================================================================================================
*/

$_GLOBAL_SYSTEM_SECURITY_RANDOM_STRING_GENERATOR_LENGTH_NUMBER			= 100;

/*
 ============================================================================================================
 + Cache Web-Page Circumvention :: Random String Function
 ============================================================================================================
*/

function getRandomString($_GLOBAL_SYSTEM_SECURITY_RANDOM_STRING_GENERATOR_LENGTH_NUMBER) {

/*
 ============================================================================================================
 + Cache Web-Page Circumvention :: Random String Variables
 ============================================================================================================
*/

$_GLOBAL_SYSTEM_SECURITY_RANDOM_STRING_GENERATOR_CHARACTERS			= '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
$_GLOBAL_SYSTEM_SECURITY_RANDOM_STRING						= '';

/*
 ============================================================================================================
 + Cache Web-Page Circumvention :: FOR: Variable < 0 Variable Increment
 ============================================================================================================
*/

for ($_GLOBAL_SYSTEM_SECURITY_RANDOM_STRING_INVISIBLE = 0; $_GLOBAL_SYSTEM_SECURITY_RANDOM_STRING_INVISIBLE < $_GLOBAL_SYSTEM_SECURITY_RANDOM_STRING_GENERATOR_LENGTH_NUMBER; $_GLOBAL_SYSTEM_SECURITY_RANDOM_STRING_INVISIBLE++) {

/*
 ============================================================================================================
 + Cache Web-Page Circumvention :: Randomize Generated Strings
 ============================================================================================================
*/

$_GLOBAL_SYSTEM_SECURITY_RANDOM_STRING_INDEX					= rand(0, strlen($_GLOBAL_SYSTEM_SECURITY_RANDOM_STRING_GENERATOR_CHARACTERS) - 1);
$_GLOBAL_SYSTEM_SECURITY_RANDOM_STRING						.= $_GLOBAL_SYSTEM_SECURITY_RANDOM_STRING_GENERATOR_CHARACTERS[$_GLOBAL_SYSTEM_SECURITY_RANDOM_STRING_INDEX];

} // [ + ] Function: Random Character Generator: Increment Invisible String

return $_GLOBAL_SYSTEM_SECURITY_RANDOM_STRING;

} // [ + ] Function: getRandomString

/*
 ============================================================================================================
 + Cache Web-Page Circumvention :: HASH Algorithm of Randomized Strings
 ============================================================================================================
*/

$_GLOBAL_SYSTEM_SECURITY_RANDOM_STRING_GENERATOR_LENGTH_NUMBER_HASH		= hash('sha512',getRandomString($_GLOBAL_SYSTEM_SECURITY_RANDOM_STRING_GENERATOR_LENGTH_NUMBER));

/*
 ============================================================================================================
 + Global Security Variables: Uniform Resource Location Addition
 ============================================================================================================
*/

$_GLOBAL_SECURITY_RANDOM_STRING_GENERATION_CACHE_CIRCUMVENTION			= "$_GLOBAL_SYSTEM_SECURITY_RANDOM_STRING_GENERATOR_LENGTH_NUMBER_HASH&amp;CacheCircumvention";

/*
 ============================================================================================================
 +
 + Internal Security :: Fake Cookies Versus Real Data
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
 + Database Server Query: Check For Valid Credentials
 ============================================================================================================
*/

$_DB_Query_Kernel_Cookie_Security_Check 					= $DB->query("SELECT * FROM {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_members WHERE member_username='$_GLOBAL_COOKIE_MEMBER_USERNAME' AND member_password='$_GLOBAL_COOKIE_MEMBER_PASSWORD'");

/*
 ============================================================================================================
 + IF: Cookie Data Stored In Browser Match Database Server Table Entry Exactly
 ============================================================================================================
*/

if ($DB->num_rows($_DB_Query_Kernel_Cookie_Security_Check)) {
/**
 * Do Nothing
**/
} else {

	header("location: ?$_INTERNAL_APPLICATION_MODULE_INTERNAL=Logout"); // Fake Data Found - Redirect To Logout Section, Destroy All Cookies

} // [ + ] Fake Cookie Check

/*
 ============================================================================================================
 + Kill Database Server Query: Compare To Stored Cookies
 ============================================================================================================
*/

$DB->free($_DB_Query_Kernel_Cookie_Security_Check);

} // [ + ] IF: Member Credentials Check

/*
 ============================================================================================================
 +
 + Internal Security :: Stored Browser Cookies Versus Physical Directories and Files
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
 + Use Existing UserName Cookie To Search For Physical Directory
 ============================================================================================================
*/

$_MEMBER_DIRECTORY_INDEX_FILE							= "./Member/$_GLOBAL_COOKIE_MEMBER_USERNAME/index.html";

/*
 ============================================================================================================
 + IF: UserName Directory and File Actually Exists
 ============================================================================================================
*/

if (!file_exists($_MEMBER_DIRECTORY_INDEX_FILE)) {

	header("location: ?$_INTERNAL_APPLICATION_MODULE_INTERNAL=Logout"); // Fake Data Found - Redirect To Logout Section

} else {
/**
 * Do Nothing
**/
} // [ + ] File Does Not Exist: Member Directory Index: Force Logout

} // [ + ] IF: Member UserName and Member Password Cookie Check

/*
 ============================================================================================================
 +
 + Internal Security :: Check For Banned and Filtered Network Addresses
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Check Database Entries For Banished Network Addresses
 ============================================================================================================
*/

$_DB_Query_Kernel_Member_Account_Banned_Status_Security_Check 			= $DB->query("SELECT * FROM {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_banned_networks WHERE ip_address_string='$_GLOBAL_REMOTE_SERVER_ADDRESS'");

/*
 ============================================================================================================
 + IF: Current Internet Protocol Address Matches Banned Internet Protocol Addresses In List In Database Server
 ============================================================================================================
*/

if ($DB->num_rows($_DB_Query_Kernel_Member_Account_Banned_Status_Security_Check)) {

	header("location: ./Theme/$_GLOBAL_SYSTEM_THEME_DIRECTORY/HTML/Banned.html"); // Banished Internet Protocol Address Found - Redirect To Internet Protocol Banishment Notification

} // [ + ] Banned Internal Protocol Address Check

/*
 ============================================================================================================
 +
 + Internal Security :: Check For Null Language Cookie Data
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Null Language Security Patch
 ============================================================================================================
*/

if ($_GLOBAL_COOKIE_MEMBER_LANGUAGE == "") {

$_GLOBAL_COOKIE_MEMBER_LANGUAGE							= $_GLOBAL_SYSTEM_LANGUAGE_DIRECTORY;

} // [ + ] IF: Language Cookie Is Null, Set System Configured Language

/*
 ============================================================================================================
 +
 + Internal Security :: Check For Real Cookies and Compare To Real Member Directories
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Check Cookies Against Real Directories: Prevent Local File Inclusion, Remote File Inclusion and S.Q.L. Injection Exploits
 ============================================================================================================
*/

if ($_GLOBAL_COOKIE_MEMBER_LANGUAGE == ".." || $_GLOBAL_COOKIE_MEMBER_LANGUAGE == "." || $_GLOBAL_COOKIE_MEMBER_LANGUAGE == "@" || $_GLOBAL_COOKIE_MEMBER_LANGUAGE == "`") {

	header("location: ?$_INTERNAL_APPLICATION_MODULE_INTERNAL=Logout");

} // [ + ] IF: Language Cookie Was Modified: Instantly Destroy Cookies, Sessions and Logout

/*
 ============================================================================================================
 +
 + Internal Security :: Check For Modified Language Cookie Data
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Check Language Cookie Against String Length
 ============================================================================================================
*/

if (strlen($_GLOBAL_COOKIE_MEMBER_LANGUAGE) > "15") {

	header("location: ?$_INTERNAL_APPLICATION_MODULE_INTERNAL=Logout");

} // [ + ] IF: Language Cookie Data Is Greater Than 15 Characters: Instantly Destroy Cookies, Sessions and Logout

/*
 ============================================================================================================
 +
 + Internal Security :: Fingerprinting :: Registered Member
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + IF: Check For Valid Member Account Credential Data In Browser Cookies
 ============================================================================================================
*/

if ($_GLOBAL_COOKIE_MEMBER_USERNAME && $_GLOBAL_COOKIE_MEMBER_PASSWORD != null) {

$_GLOBAL_SECURITY_MEMBER_FINGERPRINT_STRING_REMOTE_SERVER_ADDRESS		= $_SERVER['REMOTE_ADDR'];
$_GLOBAL_SECURITY_MEMBER_FINGERPRINT_STRING_DATE_TIME				= date("Y-m-j-g-i-s-A");

$_GLOBAL_SECURITY_MEMBER_FINGERPRINT_STRING_LENGTH_REMOTE_SERVER_ADDRESS	= strlen($_GLOBAL_REMOTE_SERVER_ADDRESS);
$_GLOBAL_SECURITY_MEMBER_FINGERPRINT_STRING_LENGTH_MEMBER_USERNAME		= strlen($_GLOBAL_COOKIE_MEMBER_USERNAME);
$_GLOBAL_SECURITY_MEMBER_FINGERPRINT_STRING_LENGTH_MEMBER_PASSWORD		= strlen($_GLOBAL_COOKIE_MEMBER_PASSWORD);

//$_GLOBAL_SYSTEM_SECURITY_RANDOM_STRING_GENERATOR_LENGTH_NUMBER_HASH

$_GLOBAL_SECURITY_MEMBER_FINGERPRINT						= "$_GLOBAL_COOKIE_MEMBER_USERNAME ::: $_GLOBAL_SECURITY_MEMBER_FINGERPRINT_STRING_REMOTE_SERVER_ADDRESS ::: $_GLOBAL_LOCAL_SERVER_HTTP_USER_AGENT ::: $_GLOBAL_SECURITY_MEMBER_FINGERPRINT_STRING_LENGTH_REMOTE_SERVER_ADDRESS ::: $_GLOBAL_SECURITY_MEMBER_FINGERPRINT_STRING_LENGTH_MEMBER_USERNAME ::: $_GLOBAL_SECURITY_MEMBER_FINGERPRINT_STRING_LENGTH_MEMBER_PASSWORD ::: $_GLOBAL_SECURITY_MEMBER_FINGERPRINT_STRING_DATE_TIME ::: $_GLOBAL_SYSTEM_SECURITY_RANDOM_STRING_GENERATOR_LENGTH_NUMBER_HASH";

} // [ + ] IF: Registered Member Is: Logged-In

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

	include_once "./System/Plug-Ins/Location/$_GLOBAL_SYSTEM_PLUGIN_LOCATION_DIRECTORY/Location.cerberus";

} else {

	$_GLOBAL_SYSTEM_PLUGIN_LOCATION_MESSAGE_DEACTIVATED			= "<CENTER>Kernel Message: The Location Plug-In Application Module Is: Deactivated</CENTER>";

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

	include_once "./System/Plug-Ins/Safe-HTML/$_GLOBAL_SYSTEM_PLUGIN_SAFEHTML_DIRECTORY/Safe-HTML.cerberus";

} else {

	$_GLOBAL_PLUGIN_SAFEHTML_LIST_COMMANDS					= "<CENTER>Kernel Message: The Safe-HTML Plug-In Application Module Is: Deactivated</CENTER>";

} // [ + ] IF: System :: Plug-In :: Safe-HTML :: Is: On or Off

/*
 ============================================================================================================
 +
 +
 + [ @ ] Internal Loops
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 + Directory and File Loop :: Change Mode ( CHMOD ) Permissions Loop
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 * 0777 :: Read, Write and Execute
 * 0600 :: Read and Write To Directory and Files. Execution Forbidden
 * 000x :: Executable File
 ===============================================================
*/

/*
 ============================================================================================================
 + Upload Directory Variables
 ============================================================================================================
*/

$_KERNEL_INTERNAL_LOOP_CHMOD_UPLOAD_DIRECTORY_NAME				= "Upload";
$_KERNEL_INTERNAL_LOOP_CHMOD_UPLOAD_DIRECTORY_CHMOD_VALUE			= "0600";
$_KERNEL_INTERNAL_LOOP_OPEN_UPLOAD_DIRECTORY					= opendir($_KERNEL_INTERNAL_LOOP_CHMOD_UPLOAD_DIRECTORY_NAME);

/*
 ============================================================================================================
 + Read Upload Directory: Subdirectory and Files
 ============================================================================================================
*/

while (($_KERNEL_INTERNAL_LOOP_UPLOAD_DIRECTORY_FILES = readdir($_KERNEL_INTERNAL_LOOP_OPEN_UPLOAD_DIRECTORY))) {

/*
 ============================================================================================================
 + Internal Security :: Stop L.F.I. and R.F.I. Exploits
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
 + System Settings Loop :: Set System Theme For Null Member Theme
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
 + IF: Logged-In Member Theme Is Null, Set System Theme
 ============================================================================================================
*/

if ($_GLOBAL_MEMBER_THEME_DIRECTORY == "") {

$_GLOBAL_MEMBER_THEME_DIRECTORY							= $_GLOBAL_SYSTEM_THEME_DIRECTORY;

} // [ + ] IF: Member Theme Directory Settings Are Null

/*
 ============================================================================================================
 + IF: Logged-In Member Theme Is Set, Set System Theme To Member Theme
 ============================================================================================================
*/

if ($_GLOBAL_MEMBER_THEME_DIRECTORY != null) {

$_GLOBAL_SYSTEM_THEME_DIRECTORY							= $_GLOBAL_MEMBER_THEME_DIRECTORY;

} // [ + ] IF: Member Theme Directory Settings Are Null

} // [ + ] IF: Member Is Logged-In

/*
 ============================================================================================================
 + IF: Non-Logged In Member Theme Is Null, Set System Theme
 ============================================================================================================
*/

if ($_GLOBAL_MEMBER_THEME_DIRECTORY == "") {

$_GLOBAL_MEMBER_THEME_DIRECTORY							= $_GLOBAL_SYSTEM_THEME_DIRECTORY;

} // [ + ] IF: Member Theme Directory Settings Are Null

/*
 ============================================================================================================
 +
 + Member Account Loop :: Update Member Account Active Status
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + IF: Check For Valid Member Account Credential Data In Browser Cookies
 ============================================================================================================
*/

//if ($_GLOBAL_COOKIE_MEMBER_USERNAME && $_GLOBAL_COOKIE_MEMBER_PASSWORD != null) {

/*
 ============================================================================================================
 + IF: Member Is Logged-In: Update Member Active Status
 ============================================================================================================
*/

//$_DB_Query_Kernel_Set_Member_Status_Account_Active 				= $DB->query("UPDATE {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_members SET member_status_account_active='1',member_status_account_last_active_minutes='$_GLOBAL_LOCAL_SERVER_TIME_MINUTES' WHERE member_username='$_GLOBAL_COOKIE_MEMBER_USERNAME'");

//if ($_DB_Query_Kernel_Set_Member_Status_Account_Active) {
/**
 * Do Nothing
**/
//} else {
/**
 * Do Nothing
**/
//} // [ + ] IF: Update Member Account Active Status Database Query Variable Is Executed

//} // [ + ] IF: Member Is Logged-In

/*
 ============================================================================================================
 +
 + Member Account Loop :: Update Last Referrer
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
 + IF: Member Credentials Exist And Are Valid: Set Last Post
 ============================================================================================================
*/

$_DB_Query_Kernel_Member_Account_Last_Referrer 					= $DB->query("UPDATE {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_members SET member_last_referrer='$_GLOBAL_LOCAL_SERVER_HTTP_REFERRER' WHERE member_username='$_GLOBAL_COOKIE_MEMBER_USERNAME'");

/*
 ============================================================================================================
 + IF: Database Server Query: Update Was Successful
 ============================================================================================================
*/

if ($_DB_Query_Kernel_Member_Account_Last_Referrer) {
/**
 * Do Nothing
**/
} else {

	echo ($_Message_Kernel_ERROR_SQL_MEMBER_LAST_POST);

} // [ + ] IF: Member Is Logged-In: Update Last Referrer

/*
 ============================================================================================================
 + Kill Database Server Query: Set Member Last Referrer
 ============================================================================================================
*/

$DB->free($_DB_Query_Kernel_Member_Account_Last_Referrer);

} // [ + ] IF: Member Is Logged-In

/*
 ============================================================================================================
 +
 + Member Account Loop :: Member Gender Loop
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + IF: Member Account Gender Is: 0
 ============================================================================================================
*/

if ($_GLOBAL_MEMBER_GENDER <= "0") {

	$_GLOBAL_MEMBER_GENDER_DISPLAY		= "Non-Specified";

} // [ + ] IF: Member Account Gender Is: 1, Define as Non-Specified

/*
 ============================================================================================================
 + IF: Member Account Gender Is: 1
 ============================================================================================================
*/

if ($_GLOBAL_MEMBER_GENDER == "1") {

	$_GLOBAL_MEMBER_GENDER_DISPLAY		= "Male";

} // [ + ] IF: Member Account Gender Is: 1, Define as Male

/*
 ============================================================================================================
 + IF: Member Account Gender Is: 2
 ============================================================================================================
*/

if ($_GLOBAL_MEMBER_GENDER == "2") {

	$_GLOBAL_MEMBER_GENDER_DISPLAY		= "Female";

} // [ + ] IF: Member Account Gender Is: 1, Define as Female

/*
 ============================================================================================================
 +
 + Member Account Loop :: Member Rank Logging Loop
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
 + IF: Member Account Gender Is: 0, Non-Specified
 ============================================================================================================
*/

if ($_GLOBAL_MEMBER_GENDER <= "0") {

	$_MAIN_MEMBER_RANK_UPDATE_DIGIT		= "-";

} // [ + ] IF: Member Account Gender Is: 0, Non-Specified

/*
 ============================================================================================================
 + IF: Member Account Gender Is: 1, Male
 ============================================================================================================
*/

if ($_GLOBAL_MEMBER_GENDER == "1") {

/*
 ============================================================================================================
 + Update Member Account Rank Based On Experience Amount
 ============================================================================================================
*/

/*
 ============================================================================================================
 + IF: Number of Posts Are Less Than 50
 ============================================================================================================
*/

if ($_GLOBAL_MEMBER_NUMBER_OF_POSTS <= 50) {

	$_MAIN_MEMBER_RANK_UPDATE_DIGIT		= "0";

} // [ + ] IF: Member Number Of Posts Is Less Than Or Equal To: 50

/*
 ============================================================================================================
 + IF: Number of Posts Are Greater Than 100
 ============================================================================================================
*/

if ($_GLOBAL_MEMBER_NUMBER_OF_POSTS >= 100) {

	$_MAIN_MEMBER_RANK_UPDATE_DIGIT		= "1";

} // [ + ] IF: Member Number Of Posts Is Greater Than Or Equal To: 100

/*
 ============================================================================================================
 + IF: Number of Posts Are Greater Than 500
 ============================================================================================================
*/

if ($_GLOBAL_MEMBER_NUMBER_OF_POSTS >= 500) {

	$_MAIN_MEMBER_RANK_UPDATE_DIGIT		= "2";

} // [ + ] IF: Member Number Of Posts Is Greater Than Or Equal To: 500

/*
 ============================================================================================================
 + IF: Number of Posts Are Greater Than 1000
 ============================================================================================================
*/

if ($_GLOBAL_MEMBER_NUMBER_OF_POSTS >= 1000) {

	$_MAIN_MEMBER_RANK_UPDATE_DIGIT		= "3";

} // [ + ] IF: Member Number Of Posts Is Greater Than Or Equal To: 1000

/*
 ============================================================================================================
 + IF: Number of Posts Are Greater Than 1500
 ============================================================================================================
*/

if ($_GLOBAL_MEMBER_NUMBER_OF_POSTS >= 1500) {

	$_MAIN_MEMBER_RANK_UPDATE_DIGIT		= "4";

} // [ + ] IF: Member Number Of Posts Is Greater Than Or Equal To: 1500

} // [ + ] IF: Member Account Gender Is: 1, Male

/*
 ============================================================================================================
 + IF: Member Account Gender Is: 2, Female
 ============================================================================================================
*/

if ($_GLOBAL_MEMBER_GENDER == "2") {

/*
 ============================================================================================================
 + Update Member Account Rank Based On Experience Amount
 ============================================================================================================
*/

/*
 ============================================================================================================
 + IF: Number of Posts Are Less Than Or Equal To: 50
 ============================================================================================================
*/

if ($_GLOBAL_MEMBER_NUMBER_OF_POSTS <= 50) {

	$_MAIN_MEMBER_RANK_UPDATE_DIGIT		= "5";

} // [ + ] IF: Member Number Of Posts Is Less Than Or Equal To: 50

/*
 ============================================================================================================
 + IF: Number of Posts Are Less Than Or Equal To: 100
 ============================================================================================================
*/

if ($_GLOBAL_MEMBER_NUMBER_OF_POSTS >= 100) {

	$_MAIN_MEMBER_RANK_UPDATE_DIGIT		= "6";

} // [ + ] IF: Member Number Of Posts Is Greater Than Or Equal To: 100

/*
 ============================================================================================================
 + IF: Number of Posts Are Less Than Or Equal To: 500
 ============================================================================================================
*/

if ($_GLOBAL_MEMBER_NUMBER_OF_POSTS >= 500) {

	$_MAIN_MEMBER_RANK_UPDATE_DIGIT		= "7";

} // [ + ] IF: Member Number Of Posts Is Greater Than Or Equal To: 500

/*
 ============================================================================================================
 + IF: Number of Posts Are Less Than Or Equal To: 1000
 ============================================================================================================
*/

if ($_GLOBAL_MEMBER_NUMBER_OF_POSTS >= 1000) {

	$_MAIN_MEMBER_RANK_UPDATE_DIGIT		= "8";

} // [ + ] IF: Member Number Of Posts Is Greater Than Or Equal To: 1000

/*
 ============================================================================================================
 + IF: Number of Posts Are Less Than Or Equal To: 1500
 ============================================================================================================
*/

if ($_GLOBAL_MEMBER_NUMBER_OF_POSTS >= 1500) {

	$_MAIN_MEMBER_RANK_UPDATE_DIGIT		= "9";

} // [ + ] IF: Member Number Of Posts Is Greater Than Or Equal To: 1500

} // [ + ] IF: Member Account Gender Is: 2, Female

/*
 ============================================================================================================
 +
 + Member Account Loop :: Update Member Account Rank
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Database Server Query: Update Member Account Rank
 ============================================================================================================
*/

$_DB_Query_Main_Member_Update_Rank 						= $DB->query("UPDATE {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_members SET member_level_rank='$_MAIN_MEMBER_RANK_UPDATE_DIGIT' WHERE member_username='$_GLOBAL_COOKIE_MEMBER_USERNAME'");

/*
 ============================================================================================================
 + IF: Database Server Query Is Successful
 ============================================================================================================
*/

if ($_DB_Query_Main_Member_Update_Rank) {
/**
 * Do Nothing
**/
} else {

										echo ($_Message_Kernel_ERROR_SQL_RANK);

} // [ + ] IF: Update Member Account Rank Level

/*
 ============================================================================================================
 + Kill Database Server Query: Update Member Rank
 ============================================================================================================
*/

$DB->free($_DB_Query_Main_Member_Update_Rank);

/*
 ============================================================================================================
 +
 + Global Member Rank Variables
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Database Server Query: Fetch Member Ranks
 ============================================================================================================
*/

$_DB_Query_Kernel_Member_Rank_Select_All_Ranks					= $DB->query("SELECT * FROM {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_ranks ORDER BY id ASC");


while ($_DB_Query_Kernel_Member_Rank_Select_All_Ranks_Fetch_Array = $DB->fetch_array($_DB_Query_Kernel_Member_Rank_Select_All_Ranks)) {

/*
 ============================================================================================================
 + Set Member Rank Variables :: Non-Specified
 ============================================================================================================
*/

$_GLOBAL_MEMBER_LEVEL_RANK_GENDER_NON_SPECIFIED_0				= "Chaos";

/*
 ============================================================================================================
 + Set Member Rank Variables :: Male
 ============================================================================================================
*/

$_GLOBAL_MEMBER_LEVEL_RANK_GENDER_MALE_0					= $_DB_Query_Kernel_Member_Rank_Select_All_Ranks_Fetch_Array['rank_gender_male_0'];
$_GLOBAL_MEMBER_LEVEL_RANK_GENDER_MALE_1					= $_DB_Query_Kernel_Member_Rank_Select_All_Ranks_Fetch_Array['rank_gender_male_1'];
$_GLOBAL_MEMBER_LEVEL_RANK_GENDER_MALE_2					= $_DB_Query_Kernel_Member_Rank_Select_All_Ranks_Fetch_Array['rank_gender_male_2'];
$_GLOBAL_MEMBER_LEVEL_RANK_GENDER_MALE_3					= $_DB_Query_Kernel_Member_Rank_Select_All_Ranks_Fetch_Array['rank_gender_male_3'];
$_GLOBAL_MEMBER_LEVEL_RANK_GENDER_MALE_4					= $_DB_Query_Kernel_Member_Rank_Select_All_Ranks_Fetch_Array['rank_gender_male_4'];

/*
 ============================================================================================================
 + Set Member Rank Variables :: Female
 ============================================================================================================
*/

$_GLOBAL_MEMBER_LEVEL_RANK_GENDER_FEMALE_5					= $_DB_Query_Kernel_Member_Rank_Select_All_Ranks_Fetch_Array['rank_gender_female_0'];
$_GLOBAL_MEMBER_LEVEL_RANK_GENDER_FEMALE_6					= $_DB_Query_Kernel_Member_Rank_Select_All_Ranks_Fetch_Array['rank_gender_female_1'];
$_GLOBAL_MEMBER_LEVEL_RANK_GENDER_FEMALE_7					= $_DB_Query_Kernel_Member_Rank_Select_All_Ranks_Fetch_Array['rank_gender_female_2'];
$_GLOBAL_MEMBER_LEVEL_RANK_GENDER_FEMALE_8					= $_DB_Query_Kernel_Member_Rank_Select_All_Ranks_Fetch_Array['rank_gender_female_3'];
$_GLOBAL_MEMBER_LEVEL_RANK_GENDER_FEMALE_9					= $_DB_Query_Kernel_Member_Rank_Select_All_Ranks_Fetch_Array['rank_gender_female_4'];

/*
 ============================================================================================================
 + Set Member Rank For Display :: Gender :: Non-Specified
 ============================================================================================================
*/

if ($_GLOBAL_MEMBER_LEVEL_RANK == "0" || "-") {

	$_GLOBAL_MEMBER_LEVEL_RANK_DISPLAY = "$_GLOBAL_MEMBER_LEVEL_RANK_GENDER_NON_SPECIFIED_0";

} // [ + ] IF: Male Member Rank Level Is: 0 OR -

/*
 ============================================================================================================
 + Set Member Rank For Display :: Gender :: Male
 ============================================================================================================
*/

if ($_GLOBAL_MEMBER_LEVEL_RANK == "0") {

	$_GLOBAL_MEMBER_LEVEL_RANK_DISPLAY = "$_GLOBAL_MEMBER_LEVEL_RANK_GENDER_MALE_0";

} // [ + ] IF: Male Member Rank Level Is: 1

if ($_GLOBAL_MEMBER_LEVEL_RANK == "1") {

	$_GLOBAL_MEMBER_LEVEL_RANK_DISPLAY = "$_GLOBAL_MEMBER_LEVEL_RANK_GENDER_MALE_1";

} // [ + ] IF: Male Member Rank Level Is: 2

if ($_GLOBAL_MEMBER_LEVEL_RANK == "2") {

	$_GLOBAL_MEMBER_LEVEL_RANK_DISPLAY = "$_GLOBAL_MEMBER_LEVEL_RANK_GENDER_MALE_2";

} // [ + ] IF: Male Member Rank Level Is: 3

if ($_GLOBAL_MEMBER_LEVEL_RANK == "3") {

	$_GLOBAL_MEMBER_LEVEL_RANK_DISPLAY = "$_GLOBAL_MEMBER_LEVEL_RANK_GENDER_MALE_3";

} // [ + ] IF: Male Member Rank Level Is: 4

if ($_GLOBAL_MEMBER_LEVEL_RANK == "4") {

	$_GLOBAL_MEMBER_LEVEL_RANK_DISPLAY = "$_GLOBAL_MEMBER_LEVEL_RANK_GENDER_MALE_4";

} // [ + ] IF: Male Member Rank Level Is: 5

/*
 ============================================================================================================
 + Set Member Rank For Display :: Gender :: Female
 ============================================================================================================
*/

if ($_GLOBAL_MEMBER_LEVEL_RANK == "5") {

	$_GLOBAL_MEMBER_LEVEL_RANK_DISPLAY = "$_GLOBAL_MEMBER_LEVEL_RANK_GENDER_FEMALE_5";

} // [ + ] IF: Female Member Rank Level Is: 5

if ($_GLOBAL_MEMBER_LEVEL_RANK == "6") {

	$_GLOBAL_MEMBER_LEVEL_RANK_DISPLAY = "$_GLOBAL_MEMBER_LEVEL_RANK_GENDER_FEMALE_6";

} // [ + ] IF: Female Member Rank Level Is: 6

if ($_GLOBAL_MEMBER_LEVEL_RANK == "7") {

	$_GLOBAL_MEMBER_LEVEL_RANK_DISPLAY = "$_GLOBAL_MEMBER_LEVEL_RANK_GENDER_FEMALE_7";

} // [ + ] IF: Female Member Rank Level Is: 7

if ($_GLOBAL_MEMBER_LEVEL_RANK == "8") {

	$_GLOBAL_MEMBER_LEVEL_RANK_DISPLAY = "$_GLOBAL_MEMBER_LEVEL_RANK_GENDER_FEMALE_8";

} // [ + ] IF: Female Member Rank Level Is: 8

if ($_GLOBAL_MEMBER_LEVEL_RANK == "9") {

	$_GLOBAL_MEMBER_LEVEL_RANK_DISPLAY = "$_GLOBAL_MEMBER_LEVEL_RANK_GENDER_FEMALE_9";

} // [ + ] IF: Female Member Rank Level Is: 9

/*
 ============================================================================================================
 + Kill Database Server Query: Fetch Ranks
 ============================================================================================================
*/

$DB->free($_DB_Query_Kernel_Member_Rank_Select_All_Ranks);

} // [ + ] WHILE: Retrieving Member Account Rank Level Names

} // [ + ] IF: Member Is Logged-In

/*
 ============================================================================================================
 +
 + Member Account Loop :: Specified Language Cookie Loop
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Null Language Security Patch
 ============================================================================================================
*/

if ($_GLOBAL_COOKIE_MEMBER_LANGUAGE != null) {

$_GLOBAL_SYSTEM_LANGUAGE_DIRECTORY						= $_GLOBAL_COOKIE_MEMBER_LANGUAGE;

} // [ + ] IF: Language Cookie Is Null, Set System Configured Language

/*
 ============================================================================================================
 +
 +
 + [ @ ] Background Application Module Includes
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

	include_once "./System/Language/$_GLOBAL_SYSTEM_LANGUAGE_DIRECTORY/Language.cerberus";

/*
 ============================================================================================================
 +
 + Activity Logging :: Background Application Modules
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Administrator-Level Activity Logging Application Module
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
 + IF: Member Account Access Level Is: Administrator
 ============================================================================================================
*/

if ($_GLOBAL_MEMBER_ACCESS_LEVEL >= 2) {

	include_once "./Applications/Background/Log_Administration";

} // [ + ] IF: Member Account Access Level Is: Administrator, Include Activity Logging Application

} // [ + ] IF: Member Is Logged-In

/*
 ============================================================================================================
 + Background-Level Activity Logging Application Module
 ============================================================================================================
*/

	include_once "./Applications/Background/Log_Background";

/*
 ============================================================================================================
 + Visitor-Level Activity Logging Application Module
 ============================================================================================================
*/

	include_once "./Applications/Background/Log_Visitor";

/*
 ============================================================================================================
 + Member-Level Activity Logging Application Module
 ============================================================================================================
*/

/*
 ============================================================================================================
 + IF: Check For Valid Member Account Credential Data In Browser Cookies
 ============================================================================================================
*/

if ($_GLOBAL_COOKIE_MEMBER_USERNAME && $_GLOBAL_COOKIE_MEMBER_PASSWORD != null) {

	include_once "./Applications/Background/Log_Member";

} // [ + ] IF: Member Is Logged-In: Include Background Application: Member Activity Log

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
 + [ @ ] Plug-In and Extension File Includes
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 + Text-Editor Plug-In
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Plug-In :: Text-Editor Application Plug-In
 ============================================================================================================
*/

	include_once "./System/Plug-Ins/Text-Editor/$_GLOBAL_SYSTEM_PLUGIN_TEXT_EDITOR_DIRECTORY/Text-Editor.cerberus";

/*
 ============================================================================================================
 +
 +
 + [ @ ] System Protocol :: Loops
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
 + IF: Offline-Mode Is On, ( 1 ) and Member Account Access Level Is NOT Administrator, Redirect To Offline-Mode Status Message
 ============================================================================================================
*/

if ($_GLOBAL_SYSTEM_OFFLINE_STATUS >= 1) {

if ($_GLOBAL_MEMBER_ACCESS_LEVEL >= 2) {

	echo ($_Message_Kernel_OFFLINE_MODE_ENABLED);

} else {

	header("location: ./Theme/$_GLOBAL_SYSTEM_THEME_DIRECTORY/HTML/Offline.html");

} // [ + ] IF: Offline Status Is On, Redirect Non-Administrator To Offline Status Web Page

} // [ + ] IF: Check For Offline Mode Status

/*
 ============================================================================================================
 +
 +
 + [ @ ] Internal Header Control
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 + Internal Header Control :: External Browser Cache Control
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Internal Header Control :: External Browser Cache Control :: Store No Cache Data
 ============================================================================================================
*/

header('Cache-Control: no-cache, no-store, must-revalidate');
header('Pragma: no-cache');
header('Expires: 0');

/*
 ============================================================================================================
 +
 +
 + [ @ ] Hyper-Text-Markup-Language Output :: Data Compression Protocols
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

	$_GZIP_STATUS	= "GZIP_Compression: ON";

} else {

	$_GZIP_STATUS	= "GZIP_Compression: OFF";

} // [ + ] IF: GZIP Compression Is On: Specify Status

/*
 ============================================================================================================
 +
 + Pre-Hyper-Text-Markup-Language Data, Time Explosion :: Start
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Hyper-Text-Markup-Language Page Data Generation Variables :: Initialize Microtime
 ============================================================================================================
*/

$_KERNEL_WEBPAGE_GENERATION_TIME_MICROTIME_START				= microtime();

/*
 ============================================================================================================
 + Hyper-Text-Markup-Language Page Data Generation Variables :: Data-Time Explosion
 ============================================================================================================
*/

$_KERNEL_WEBPAGE_GENERATION_DATATIME_EXPLOSION_START_ARRAY			= explode(" ", $_KERNEL_WEBPAGE_GENERATION_TIME_MICROTIME_START);

/*
 ============================================================================================================
 + Hyper-Text-Markup-Language Page Data Generation Variables :: Explode Data, Then Calculate Data Generation Time
 ============================================================================================================
*/

$_KERNEL_WEBPAGE_GENERATION_TIME_MICROTIME_START				= $_KERNEL_WEBPAGE_GENERATION_DATATIME_EXPLOSION_START_ARRAY[1] + $_KERNEL_WEBPAGE_GENERATION_DATATIME_EXPLOSION_START_ARRAY[0];

/*
 ============================================================================================================
 +
 +
 + [ @ ] Hyper-Text-Markup-Language Document-Data Generation: Start
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 + Hyper-Text-Markup-Language Document-Data Generation :: Data Explosion
 +
 ============================================================================================================
*/

echo ("
<!--================================================================================================-->
<!--				    $_PROJECT_STRING_NAME				    -->
<!--================================================================================================-->

<!--================================================================================================-->
<!--			    (C) Tinke Software, Gary Christopher Johnson's Works		    -->
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
		<LINK REL=\"stylesheet\" HREF=\"./Theme/$_GLOBAL_MEMBER_THEME_DIRECTORY/Style_Sheet/Style.css\" TYPE=\"text/css\">
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
 + [ @ ] Theme Template Layout [ 1 ]
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

if ($_GLOBAL_COOKIE_MEMBER_USERNAME && $_GLOBAL_COOKIE_MEMBER_PASSWORD != null && $_GLOBAL_MEMBER_ACCESS_LEVEL >= 2) {

	echo ($_THIS_THEME_APPLICATION_PANEL_1);

		include_once "./Applications/Panel/Administration.panel";

	echo ($_THIS_THEME_APPLICATION_PANEL_2);

} // [ + ] IF: Administrator Credentials Exist: Show Administration Application Panel

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
 + List Panel Application Modules, Aligned :: Left
 +
 ============================================================================================================
*/

$_DB_Query_Kernel_Application_Panels_Aligned_Left 				= $DB->query("SELECT * FROM {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_application_panels WHERE panel_alignment='0' AND panel_file_status='1' ORDER BY panel_row ASC");

while ($_DB_Query_Kernel_Application_Panels_Aligned_Left_Fetch_Array = $DB->fetch_array($_DB_Query_Kernel_Application_Panels_Aligned_Left)) {

$_KERNEL_APPLICATION_PANEL_ALIGNED_LEFT_FILE_NAME				= $_DB_Query_Kernel_Application_Panels_Aligned_Left_Fetch_Array['panel_file_name'];
$_KERNEL_APPLICATION_PANEL_ALIGNED_LEFT_TITLE					= $_DB_Query_Kernel_Application_Panels_Aligned_Left_Fetch_Array['panel_title'];

echo ($_THIS_THEME_APPLICATION_PANEL_1);
echo ($_KERNEL_APPLICATION_PANEL_ALIGNED_LEFT_TITLE);

	include_once "./Applications/Panel/$_KERNEL_APPLICATION_PANEL_ALIGNED_LEFT_FILE_NAME.panel";

echo ($_THIS_THEME_APPLICATION_PANEL_2);

} // [ + ] WHILE: List Panels Aligned Left

/*
 ============================================================================================================
 + Kill Database Server Query: Fetch Panel Application Modules: Aligned=>Left
 ============================================================================================================
*/

$DB->free($_DB_Query_Kernel_Application_Panels_Aligned_Left);

/*
 ============================================================================================================
 +
 +
 + [ @ ] Theme Template Layout [ 2 ]
 +
 +
 ============================================================================================================
*/

echo ($_GLOBAL_THEME_LAYOUT_2);

/*
 ============================================================================================================
 +
 +
 + [ @ ] Administration-Level Application Modules
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 + Read Administrator Application Module Directory
 +
 ============================================================================================================
*/

$_FIND_APPLICATIONS_ADMINISTRATION_DIRECTORY					= "./Applications/Administration/";
$_OPEN_APPLICATIONS_ADMINISTRATION_DIRECTORY					= opendir($_FIND_APPLICATIONS_ADMINISTRATION_DIRECTORY);

while (($_READ_APPLICATIONS_ADMINISTRATION_DIRECTORY = readdir($_OPEN_APPLICATIONS_ADMINISTRATION_DIRECTORY))) {

/*
 ============================================================================================================
 +
 + Internal Security :: Stop Remote-File-Inclusion and Local-File-Inclusion Exploits
 +
 ============================================================================================================
*/

if ($_READ_APPLICATIONS_ADMINISTRATION_DIRECTORY == "." || $_READ_APPLICATIONS_ADMINISTRATION_DIRECTORY == ".." || $_READ_APPLICATIONS_ADMINISTRATION_DIRECTORY == "index.php") {
/**
 * Do Nothing
**/
} else {

/*
 ============================================================================================================
 +
 + Include Administrator Application Module
 +
 ============================================================================================================
*/

if ($_GET[$_INTERNAL_APPLICATION_MODULE_ADMINISTRATOR] == "$_READ_APPLICATIONS_ADMINISTRATION_DIRECTORY") {

/*
 ============================================================================================================
 + Check For Valid Administrator-Level Credentials
 ============================================================================================================
*/

if ($_GLOBAL_COOKIE_MEMBER_USERNAME && $_GLOBAL_COOKIE_MEMBER_PASSWORD != null && $_GLOBAL_MEMBER_ACCESS_LEVEL >= 2) {


	include_once "./Applications/Administration/$_READ_APPLICATIONS_ADMINISTRATION_DIRECTORY";

} else {

	echo ($_Message_Kernel_APPLICATION_ACCESS_RESTRICTED_ADMINISTRATOR);

} // [ + ] IF: Access Level Is >= 2

} // [ + ] IF: Include Administration Application

} // [ + ] IF: NOT The Administration Directory

} // [ + ] WHILE: Reading The Administration Directory

/*
 ============================================================================================================
 + Close Administration Directory
 ============================================================================================================
*/

closedir($_OPEN_APPLICATIONS_ADMINISTRATION_DIRECTORY);

/*
 ============================================================================================================
 +
 +
 + [ @ ] Member-Level Application Modules
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 + Fetch Application Module Access Permissions
 +
 ============================================================================================================
*/

$_DB_Query_Kernel_Select_Applications 						= $DB->query("SELECT * FROM {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications ORDER BY id ASC");

while ($_DB_Query_Kernel_Select_Applications_Fetch_Array = $DB->fetch_array($_DB_Query_Kernel_Select_Applications)) {

$_KERNEL_APPLICATION_FILE_NAME							= $_DB_Query_Kernel_Select_Applications_Fetch_Array['application_file_name'];
$_KERNEL_APPLICATION_FILE_PERMISSION						= $_DB_Query_Kernel_Select_Applications_Fetch_Array['application_file_permission'];
$_KERNEL_APPLICATION_FILE_STATUS						= $_DB_Query_Kernel_Select_Applications_Fetch_Array['application_file_status'];

/*
 ============================================================================================================
 + IF: Application Module Permission Is: Open
 ============================================================================================================
*/

if ($_GET[$_INTERNAL_APPLICATION_MODULE_MEMBER] == "$_KERNEL_APPLICATION_FILE_NAME") {

if (file_exists("./Applications/Member/$_KERNEL_APPLICATION_FILE_NAME")) {

if ($_KERNEL_APPLICATION_FILE_STATUS >= "1") {

if ($_KERNEL_APPLICATION_FILE_PERMISSION <= "0") {

	include_once "./Applications/Member/$_KERNEL_APPLICATION_FILE_NAME";

} // [ + ] IF: Application Module Permission Is Open

/*
 ============================================================================================================
 + IF: Application Module Permission Is: Member-Level ( Open )
 ============================================================================================================
*/

if ($_KERNEL_APPLICATION_FILE_PERMISSION == "1") {

if ($_GLOBAL_COOKIE_MEMBER_USERNAME && $_GLOBAL_COOKIE_MEMBER_PASSWORD != null) {

	include_once "./Applications/Member/$_KERNEL_APPLICATION_FILE_NAME";

} else {

	echo ($_Message_Kernel_APPLICATION_ACCESS_RESTRICTED_MEMBER);

} // [ + ] IF: Member Credentials Exist and Are Valid

} // [ + ] IF: Application Module Permission Is Registered Member-Level

/*
 ============================================================================================================
 + IF: Application Module Permission Is: Administrator-Level
 ============================================================================================================
*/

if ($_KERNEL_APPLICATION_FILE_PERMISSION == "2") {

if ($_GLOBAL_COOKIE_MEMBER_USERNAME && $_GLOBAL_COOKIE_MEMBER_PASSWORD != null && $_GLOBAL_MEMBER_ACCESS_LEVEL >= 2) {

	include_once "./Applications/Member/$_KERNEL_APPLICATION_FILE_NAME";

} else {

	echo ($_Message_Kernel_APPLICATION_ACCESS_RESTRICTED_ADMINISTRATOR);

} // [ + ] Include Administration Application Module

} // [ + ] IF: Application Permission Is 2, Administrator

} else {

	echo ($_Message_Kernel_APPLICATION_DEACTIVATED);

} // [ + ] IF: Application Module Status Is: Deactivated

} else {

	echo ($_Message_Kernel_APPLICATION_NOT_FOUND);

} // [ + ] IF: Application Module File Permission Is Administration-Level ( 2 )

} // [ + ] IF: Member Credentials Exist and Are Valid

} // [ + ] WHILE: Reading Member-Level Application Modules Directory

/*
 ============================================================================================================
 + Kill Database Server Query: Select From Applications
 ============================================================================================================
*/

$DB->free($_DB_Query_Kernel_Select_Applications);

/*
 ============================================================================================================
 +
 +
 + [ @ ] Custom-Level Application Modules
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 + Fetch Custom Application Module Entries
 +
 ============================================================================================================
*/

$_DB_Query_Kernel_Select_Custom_Applications 					= $DB->query("SELECT * FROM {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications_custom ORDER BY id ASC");

while ($_DB_Query_Kernel_Select_Custom_Applications_Fetch_Array = $DB->fetch_array($_DB_Query_Kernel_Select_Custom_Applications)) {

$_KERNEL_APPLICATION_CUSTOM_ID							= $_DB_Query_Kernel_Select_Custom_Applications_Fetch_Array['id'];
$_KERNEL_APPLICATION_CUSTOM_DATA						= $_DB_Query_Kernel_Select_Custom_Applications_Fetch_Array['custom_application_data'];
$_KERNEL_APPLICATION_CUSTOM_NAME						= $_DB_Query_Kernel_Select_Custom_Applications_Fetch_Array['custom_application_name'];
$_KERNEL_APPLICATION_CUSTOM_TIME						= $_DB_Query_Kernel_Select_Custom_Applications_Fetch_Array['custom_application_time'];

/*
 ============================================================================================================
 +
 + Include and Display Custom Applications
 +
 ============================================================================================================
*/

if ($_GET[$_INTERNAL_APPLICATION_MODULE_CUSTOM] == "$_KERNEL_APPLICATION_CUSTOM_ID") {

		echo ("<CENTER><BIG><B>$_KERNEL_APPLICATION_CUSTOM_NAME</B></BIG></CENTER><HR>$_KERNEL_APPLICATION_CUSTOM_DATA<HR>Created: $_KERNEL_APPLICATION_CUSTOM_TIME");

} // [ + ] IF: Dipslay Custom Application

} // [ + ] WHILE: Fetching Custom Application Entries' In Database

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
 + [ @ ] Theme Template Layout [ 3 ]
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
 + List Panel Application Modules, Aligned :: Right
 +
 ============================================================================================================
*/

$_DB_Query_Kernel_Application_Panels_Aligned_Right 				= $DB->query("SELECT * FROM {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_application_panels WHERE panel_alignment='1' AND panel_file_status='1' ORDER BY panel_row ASC");

while ($_DB_Query_Kernel_Application_Panels_Aligned_Right_Fetch_Array = $DB->fetch_array($_DB_Query_Kernel_Application_Panels_Aligned_Right)) {

$_KERNEL_APPLICATION_PANEL_ALIGNED_RIGHT_FILE_NAME				= $_DB_Query_Kernel_Application_Panels_Aligned_Right_Fetch_Array['panel_file_name'];
$_KERNEL_APPLICATION_PANEL_ALIGNED_RIGHT_TITLE					= $_DB_Query_Kernel_Application_Panels_Aligned_Right_Fetch_Array['panel_title'];

echo ($_THIS_THEME_APPLICATION_PANEL_1);

echo ($_KERNEL_APPLICATION_PANEL_ALIGNED_RIGHT_TITLE);

	include_once "./Applications/Panel/$_KERNEL_APPLICATION_PANEL_ALIGNED_RIGHT_FILE_NAME.panel";

echo ($_THIS_THEME_APPLICATION_PANEL_2);

} // [ + ] WHILE: Listing Application Panels Aligned Right

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
 + [ @ ] Theme Template Layout [ 4 ]
 +
 +
 ============================================================================================================
*/

echo ($_GLOBAL_THEME_LAYOUT_4);

/*
 ============================================================================================================
 +
 +
 + [ @ ] Hyper-Text-Markup-Language Document-Data Generation: End
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 + Hyper-Text-Markup-Language Document-Data Generation :: Data Implosion
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 + Pre-Hyper-Text-Markup-Language Data-Time Explosion-Implosion Variables
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Data Implosion :: Microtime, End
 ============================================================================================================
*/

$_KERNEL_WEBPAGE_GENERATION_TIME_MICROTIME_END					= microtime();

/*
 ============================================================================================================
 + Data Implosion :: Time Explosion
 ============================================================================================================
*/

$_KERNEL_WEBPAGE_GENERATION_DATATIME_EXPLOSION_END_ARRAY			= explode(" ", $_KERNEL_WEBPAGE_GENERATION_TIME_MICROTIME_END);

/*
 ============================================================================================================
 + Data Implosion :: Time Implosion
 ============================================================================================================
*/

$_KERNEL_WEBPAGE_GENERATION_DATATIME_IMPLOSION_END_ARRAY			= implode(" ", $_KERNEL_WEBPAGE_GENERATION_TIME_MICROTIME_END);

/*
 ============================================================================================================
 + Data Implosion :: Time Explosion Array, Calculate Data-Time Explosion End-Time
 ============================================================================================================
*/

$_KERNEL_WEBPAGE_GENERATION_TIME_MICROTIME_END					= $_KERNEL_WEBPAGE_GENERATION_DATATIME_EXPLOSION_END_ARRAY[1] + $_KERNEL_WEBPAGE_GENERATION_DATATIME_EXPLOSION_END_ARRAY[0];

/*
 ============================================================================================================
 + Data Implosion :: Calculate Start-Time and End-Time Data-Time Explosion For Page Generation
 ============================================================================================================
*/

$_KERNEL_WEBPAGE_GENERATION_TIME_TOTAL_TIME					= $_KERNEL_WEBPAGE_GENERATION_TIME_MICROTIME_END - $_KERNEL_WEBPAGE_GENERATION_TIME_MICROTIME_START; 
$_KERNEL_WEBPAGE_GENERATION_TIME_TOTAL_TIME					= round($_KERNEL_WEBPAGE_GENERATION_TIME_TOTAL_TIME,5);

/*
 ============================================================================================================
 +
 +
 + [ @ ] Hyper-Text-Markup-Language Document: End: Output
 +
 +
 ============================================================================================================
*/

echo ("
		<CENTER>
			This Web Site Is Powered By:&nbsp;<A HREF=\"https://www.SourceForge.net/projects/cerberuscms\" TARGET=\"_NEW\" TITLE=\"$_PROJECT_STRING_NAME :: SourceForge Software Project Page\">$_PROJECT_STRING_NAME</A>&nbsp;|&nbsp;Web-Page Data Generation Time: " . $_KERNEL_WEBPAGE_GENERATION_TIME_TOTAL_TIME . " Seconds&nbsp;|&nbsp;");

/*
 ============================================================================================================
 +
 +
 + Internal Resources :: Close Visitor and Registered Member Connections
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
 + IF: Check For Valid Member Account Credential Data In Browser Cookies
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

$DB->free($_DB_Query_Kernel_Member_Account_Banned_Status_Security_Check);

/*
 ============================================================================================================
 +
 +
 + [ @ ] Internal Resources :: Force Close All Database Server Connections
 +
 +
 ============================================================================================================
*/

} else {

		echo ("Kernel Message: Error, I Cannot Connect To The Structured Query Language Database Server Name: $_ACCESS_DATABASE_SERVER_DATABASE_NAME. Please Check The Database Server Access Credentials File.");

} // [ + ] IF: Connection To Database Server Name Variables Have Executed

} else {

		//echo ("Kernel Message: Error, I Cannot Connect To The Structured Query Language Database Server Host-Name: $_ACCESS_DATABASE_SERVER_HOSTNAME. Please Check The Database Server Access Credentials File.");

} // [ + ] IF: Connection To Database Server Hostname Variables Have Executed

/*
 ============================================================================================================
 + Kill Database Server Connection: S.Q.L. Database Server Configured Strings
 ============================================================================================================
*/

if ($DB->close($_KERNEL_DATABASE_SERVER_CONNECT)) {

			echo ("Database Server Connection Closed For Internet Protocol Address: <A HREF=\"http://WhoIs.sc/$_GLOBAL_REMOTE_SERVER_ADDRESS\" TITLE=\":: View Detailed Who-Is Information For Internet Protocol Address: $_GLOBAL_REMOTE_SERVER_ADDRESS ::\" TARGET=\"_NEW\">$_GLOBAL_REMOTE_SERVER_ADDRESS</A>&nbsp;|&nbsp;");

} else {

			echo ("Kernel Message: Error: I Cannot Close The Database Server Connection For Internet Protocol Address: <A HREF=\"http://WhoIs.sc/$_GLOBAL_REMOTE_SERVER_ADDRESS\" TITLE=\":: View Detailed Who-Is Information For Internet Protocol Address: $_GLOBAL_REMOTE_SERVER_ADDRESS ::\" TARGET=\"_NEW\">$_GLOBAL_REMOTE_SERVER_ADDRESS</A>&nbsp;|&nbsp;");

} // [ + ] IF: Close Database Server Connection

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
 + Kill Everything Initialized and Running
 ============================================================================================================
*/

die();
?>