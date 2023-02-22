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
 + - File Location: root->Cerberus->System->Configuration->Global_Configuration.php
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
$_PROJECT_VERSION_EXTENDED						= "Cerberus Content Management System - Version: 4, Build: 0.8 ~ Wynn-Ghost - Wednesday, March 1st of 2023";

/*
 ============================================================================================================
 + Software Project :: Globally Invokable Variables :: Software Project Strings
 ============================================================================================================
*/

$_PROJECT_STRING_NAME							= "Cerberus Content Management System";
$_PROJECT_STRING_SHORT							= "Cerberus";
$_PROJECT_UNIX_NAME							= "CerberusCMS";

/*
 ============================================================================================================
 +
 +
 + [ @ ] Internal Software Project :: Web Server :: Variables
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Software Project Parent Organization Official Servers :: Globally Invokable Variables
 ============================================================================================================
*/

$_PROJECT_SERVER_URL_CLEARTEXT						= "http://www.TinkeSoftware.com";
$_PROJECT_SERVER_URL_SECURE						= "https://www.TinkeSoftware.com";

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