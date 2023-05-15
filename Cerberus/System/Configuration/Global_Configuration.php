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
 + [ ^ ] Cerberus :: System Configuration :: Global Configuration
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
 + Configuration Files :: Globally Invokable Variables
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
 + [ @ ] Architect File Parameters
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Kernel File :: Variables :: Kernel File Name
 ============================================================================================================
*/

$_INTERNAL_FILE_ARCHITECT						= "Architect.php";

/*
 ============================================================================================================
 +
 +
 + [ @ ] Kernel File Parameters
 +
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
 + [ @ ] Invokable Application Module Parameters
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Application Module Variables: Administration, Custom, Member and Public
 ============================================================================================================
*/

$_INTERNAL_APPLICATION_MODULE_ADMINISTRATOR				= "Application_Administrator";
$_INTERNAL_APPLICATION_MODULE_CUSTOM					= "Application_Custom";
$_INTERNAL_APPLICATION_MODULE_MEMBER					= "Application_Member";
$_INTERNAL_APPLICATION_MODULE_PUBLIC					= "Application_Public";
$_INTERNAL_APPLICATION_MODULE_INTERNAL					= "Application_Internal";

/*
 ============================================================================================================
 +
 +
 + [ @ ] Maintenance File Parameters
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
 + [ @ ] Internal Software Project Versioning Variables
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
$_PROJECT_VERSION_EXTENDED						= "Cerberus Content Management System - Version Number: 4, Build Number: 0.8 ~ Artemis - Saturday, April 8th of 2023";

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
 + [ @ ] Internal Software Project Engine Version Variables
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
 + Software Project Parent Organization Official Software Project Hosting :: Globally Invokable Variables
 ============================================================================================================
*/

$_PROJECT_SERVER_URL_SOURCEFORGE_CLEARTEXT				= "http://www.SourceForge.net/projects/CerberusCMS";
$_PROJECT_SERVER_URL_SOURCEFORGE_SECURE					= "https://www.SourceForge.net/projects/CerberusCMS";
?>