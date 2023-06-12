<?php
/*
 ============================================================================================================
 + ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
 + ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
 + Cerberus Content Management System
 + ----------------------------------------------------------------------------------------------------------
 + - Author			 : Gary Christopher Johnson of Rosedale In Southern California, U.S.A.
 + - Company			 : Tinke Software, Free and Open Source Software
 + - Company Address		 : Rosedale In Southern California, United States of America
 + - Electronic Mail Address	 : CerberusCMS@Protonmail.com, TinkeSoftware@Protonmail.com
 + - Document Notes		 : View this file in a non-formatting text editor without word-wrap for the
 +				 : correct display of this programming code and its indentation.
 + ----------------------------------------------------------------------------------------------------------
 +    ()  ()  () () --
 +  () ()  () --- ()
 +  ------------------------------
 +  System File
 + ----------------------------------------------------------------------------------------------------------
 + - This File, Location	 : Root Directory => System => Configuration => Global_Configuration.php
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
 +
 +
 +
 + [ ^ ] Cerberus :: System Configuration :: Global Configuration
 +
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 +
 + [ @ ] Global Configuration, Files
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Configuration Files :: Variables :: Globally Invokable Variables
 ============================================================================================================
*/

$_GLOBAL_SERVER_CONFIGURATION_FILE					= "./System/Configuration/Global_Server_Configuration.php";
$_GLOBAL_SQL_SERVER_DATABASE_CLASS_FILE					= "./System/Configuration/Global_SQL_Server_Database_Class_MySQL_Standard.php";

/*
 ============================================================================================================
 + IF: Pre-Hyper-Text-Post-Processor Engine Version Is: 5, Include Specified Database Server Class File
 ============================================================================================================
*/

if ($_ACCESS_PHP_ENGINE_VERSION == "5") {

	$_GLOBAL_SQL_SERVER_DATABASE_CLASS_FILE				= "./System/Configuration/Global_SQL_Server_Database_Class_MySQL_Standard.php";

} // [ + ] IF: Pre-Hyper-Text-Post-Processor Engine Version Is: 5, Include Specified Database Server Class File

/*
 ============================================================================================================
 + IF: Pre-Hyper-Text-Post-Processor Engine Version Is: 8, Include Specified Database Server Class File
 ============================================================================================================
*/

if ($_ACCESS_PHP_ENGINE_VERSION == "8") {

	$_GLOBAL_SQL_SERVER_DATABASE_CLASS_FILE				= "./System/Configuration/Global_SQL_Server_Database_Class_MySQL_Improved.php";

} // [ + ] IF: Pre-Hyper-Text-Post-Processor Engine Version Is: 8, Include Specified Database Server Class File

/*
 ============================================================================================================
 + IF: Global S.Q.L. Configuration Files Exist, Include Them
 ============================================================================================================
*/

if (file_exists($_GLOBAL_SERVER_CONFIGURATION_FILE)) {

	include_once "$_GLOBAL_SERVER_CONFIGURATION_FILE";

} else {

	echo ("Kernel Message: Error, Missing File: $_GLOBAL_SERVER_CONFIGURATION_FILE");

} // [ + ] IF: File Exists: Global S.Q.L. Server Configuration File

/*
 ============================================================================================================
 +
 +
 + [ @ ] Configuration, Database Class Files
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + IF: Global S.Q.L. Server Database Class File Exists, Include It
 ============================================================================================================
*/

if (file_exists($_GLOBAL_SQL_SERVER_DATABASE_CLASS_FILE)) {

	include_once "$_GLOBAL_SQL_SERVER_DATABASE_CLASS_FILE";

} else {

	echo ("Kernel Message: Error, Missing File: $_GLOBAL_SQL_SERVER_DATABASE_CLASS_FILE $_ACCESS_PHP_ENGINE_VERSION");

} // [ + ] IF: File Exists: Global S.Q.L. Server Database Class File

/*
 ============================================================================================================
 +
 +
 + [ @ ] Architect File :: Parameters and Variables
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Kernel File :: Variables :: Kernel File Name
 ============================================================================================================
*/

$_INTERNAL_ARCHITECT_NAME						= "Architect";
$_INTERNAL_FILE_ARCHITECT						= "Architect.php";
$_INTERNAL_FILE_ARCHITECT_DIRECTORY					= "Architect";
$_INTERNAL_FILE_ARCHITECT_INSTALL_ROOT_ACCOUNT_USERNAME			= "Cerberus";
$_INTERNAL_FILE_ARCHITECT_INSTALL_ROOT_ACCOUNT_ELECTRONIC_MAIL_ADDRESS	= "cerberus@local.host";
$_INTERNAL_FILE_ARCHITECT_INSTALL_ROOT_ACCOUNT_PROFILE_ABOUT		= "Hi ! My name is Cerberus ! I am the Automated Root Administrator Level Account ! If you are an Administrator of this system you can send commands to me by Short-Message-Service ( SMS ) Text Message, Multimedia-Message-Service ( MMS ), from your Registered Member Account by Instant Messenger Private Message or from the Terminal Interface in the Administration Control Panel. If you have setup an SIP / VoIP Server you can connect a Phone Number to this account. I can receive Commands. I am always at your Command. You can Login and Authenticate into this account by using the default Administration Account Password that was set during the Installation of this system with Electronic Mail Address: Cerberus@Local.host";
$_INTERNAL_FILE_ARCHITECT_INSTALL_ROOT_ACCOUNT_PROFILE_SIGNATURE	= "I Guard The Entrance To Hades !";
$_INTERNAL_FILE_ARCHITECT_INSTALL_THEME_DIRECTORY_NAME			= "2023_Cerberus_White";

/*
 ============================================================================================================
 +
 +
 + [ @ ] Kernel File :: Parameters and Variables
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 + Kernel File :: Variables
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Kernel File :: Variables :: Kernel File Name
 ============================================================================================================
*/

$_INTERNAL_FILE_KERNEL							= "Cerberus.php";
$_INTERNAL_FILE_EXTENSION						= "cerberus";

/*
 ============================================================================================================
 +
 +
 + [ @ ] Invokable Application Module :: Variables and Parameters
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Application Modules :: Variables :: Services, Root, Administration, Internal, Member, Public and Custom
 ============================================================================================================
*/

/*
 * For an additional layer of security you can change the values of these invokable Application Module variables
 * shown here to a completely random generated string by a random string generation variable. This will make it impossible
 * for an attacker to know the next string generated in the URL once the page executes again thereby making
 * it impossible for any Cross-Site-Request GET and POST Forgery, Data Tampering or S.Q.L. Injection.
 */

$_INTERNAL_APPLICATION_MODULE_SERVICES					= "Application_Services";
$_INTERNAL_APPLICATION_MODULE_ROOT					= "Application_Root";
$_INTERNAL_APPLICATION_MODULE_ADMINISTRATOR				= "Application_Administrator";
$_INTERNAL_APPLICATION_MODULE_INTERNAL					= "Application_Internal";
$_INTERNAL_APPLICATION_MODULE_MEMBER					= "Application_Member";
$_INTERNAL_APPLICATION_MODULE_PUBLIC					= "Application_Public";
$_INTERNAL_APPLICATION_MODULE_CUSTOM					= "Application_Custom";

/*
 ============================================================================================================
 +
 +
 + [ @ ] Maintenance File :: Parameters and Variables
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Maintenance File :: Diagnostics :: Variables :: Maintenance File Name
 ============================================================================================================
*/

$_INTERNAL_FILE_MAINTENANCE_DIAGNOSTICS					= "Asclepius.php";

/*
 ============================================================================================================
 +
 +
 + [ @ ] Internal Software Project :: Variables :: Versioning
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Software Project :: Globally Invokable Variables :: Software Versioning
 ============================================================================================================
*/

$_PROJECT_VERSION_SHORT							= "4.0.8";
$_PROJECT_VERSION_EXTENDED						= "Cerberus Content Management System - Version Number: 4, Build Number: 0.8 ~ Nyx - Wednesday, November 1st of 2023";

/*
 ============================================================================================================
 + Software Project :: Globally Invokable Variables :: Software Project Strings
 ============================================================================================================
*/

$_PROJECT_STRING_NAME_EXTENDED						= "Cerberus Content Management System";
$_PROJECT_STRING_NAME_SHORT						= "Cerberus";
$_PROJECT_STRING_NAME_ROBOT_ELECTRONIC_MAIL				= "Cerberus";
$_PROJECT_STRING_NAME_UNIX						= "CerberusCMS";

/*
 ============================================================================================================
 +
 +
 + [ @ ] Internal Software Project :: Engine Version :: Parameters and Variables
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 + Internal Software Project :: Web Server Technologies :: Variables
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Software Project :: Globally Invokable Variables :: Web Server Technologies :: Variables
 ============================================================================================================
*/

$_PROJECT_WEB_SERVER_TECHNOLOGY_VERSION_APACHE				= apache_get_version();
$_PROJECT_WEB_SERVER_TECHNOLOGY_VERSION_MYSQL				= mysql_get_server_info();
$_PROJECT_WEB_SERVER_TECHNOLOGY_VERSION_OPERATING_SYSTEM		= php_uname();
$_PROJECT_WEB_SERVER_TECHNOLOGY_VERSION_PHP				= phpversion();
$_PROJECT_WEB_SERVER_TECHNOLOGY_VERSION_PHP_ZEND			= zend_version();

/*
 ============================================================================================================
 + Software Project Parent Organization Official Name :: Globally Invokable Variables
 ============================================================================================================
*/

$_PROJECT_DEVELOPER_STRING_NAME_SHORT					= "Tinke";
$_PROJECT_DEVELOPER_STRING_NAME_EXTENDED				= "Tinke Software";

/*
 ============================================================================================================
 + Software Project Parent Organization Official Servers :: Globally Invokable Variables
 ============================================================================================================
*/

$_PROJECT_SERVER_URL_CLEARTEXT						= "http://www.TinkeSoftware.com";
$_PROJECT_SERVER_URL_SECURE						= "https://www.TinkeSoftware.com";
$_PROJECT_SERVER_URL_PARTIAL						= "TinkeSoftware";

/*
 ============================================================================================================
 + Software Project Parent Organization Official GIT :: Globally Invokable Variables
 ============================================================================================================
*/

/*
 ======================
 + BITBucket
 ======================
*/

$_PROJECT_SERVER_URL_BITBUCKET_CLEARTEXT				= "http://www.BITBucket.com/TinkeSoftware/CerberusCMS";
$_PROJECT_SERVER_URL_BITBUCKET_SECURE					= "https://www.BITBucket.com/TinkeSoftware/CerberusCMS";

/*
 ======================
 + GITHub
 ======================
*/

$_PROJECT_SERVER_URL_GITHUB_CLEARTEXT					= "http://www.GITHub.com/TinkeSoftware/CerberusCMS";
$_PROJECT_SERVER_URL_GITHUB_SECURE					= "https://www.GITHub.com/TinkeSoftware/CerberusCMS";

/*
 ======================
 + GITLab
 ======================
*/

$_PROJECT_SERVER_URL_GITLAB_CLEARTEXT					= "http://www.GITLab.com/TinkeSoftware/CerberusCMS";
$_PROJECT_SERVER_URL_GITLAB_SECURE					= "https://www.GITLab.com/TinkeSoftware/CerberusCMS";

/*
 ============================================================================================================
 + Software Project Parent Organization :: Official Software Project Hosting :: Globally Invokable Variables
 ============================================================================================================
*/

$_PROJECT_SERVER_URL_SOURCEFORGE_CLEARTEXT				= "http://www.SourceForge.net/projects/CerberusCMS";
$_PROJECT_SERVER_URL_SOURCEFORGE_SECURE					= "https://www.SourceForge.net/projects/CerberusCMS";
?>