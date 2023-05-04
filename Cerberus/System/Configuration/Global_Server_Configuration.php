<?php
/*
 ============================================================================================================
 + Cerberus Content Management System
 + ---
 + - Author 		     : Gary Christopher Johnson - Rosedale, California
 + - Electronic Mail Address : TinkeSoftware@Protonmail.com, CerberusCMS@Protonmail.com
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
 + - File Location: Master Root Directory->Root Directory->System->Configuration->Global_Server_Configuration.php
 + - File Version : 0.7 - Pure Pre-Hyper-Text-Post-Processor
 + - Release Date : Saturday, April 8th of 2023
 + ---
 + -------------------------------------------------------------------------------
 + --[][]--[][][]--[][][]--[][][]---[][][]--[][][]--[]--[]------[][][]------------
 + -[]-----[]------[]--[]--[]---[]--[]------[]--[]--[]--[]------[]----------------
 + -[]-----[]------[]--[]--[]---[]--[]------[]--[]--[]--[]------[]----------------
 + -[]-----[]------[]--[]--[]---[]--[]------[]--[]--[]--[]------[]----------------
 + -[]-----[][][]--[][][]--[][][]---[][][]--[][][]--[]--[]------[]----------------
 + -[]-----[]------[]--[]--[]---[]--[]------[]--[]--[]--[]------[]----------------
 + -[]-----[]------[]--[]--[]---[]--[]------[]--[]--[]--[]------[]------------/-\-
 + -[]-----[]------[]--[]--[]---[]--[]------[]--[]--[]--[]------[]------------|4|- ~ Artemis ~
 + --[][]--[][][]--[]--[]--[][][]---[][][]--[]--[]--[][][]--[][][]------------\-/- Build Number: 0.8
 + ------------------------------------------------------------------------------- Edit Number : 1,954
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 +
 + System :: Configuration :: Global Server Configuration
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 + Database Server :: Configuration :: Variables :: Strings
 +
 ============================================================================================================
*/

$_ACCESS_DATABASE_SERVER_HOSTNAME 						= "";
$_ACCESS_DATABASE_SERVER_USERNAME 						= "";
$_ACCESS_DATABASE_SERVER_PASSWORD 						= "";
$_ACCESS_DATABASE_SERVER_DATABASE_NAME 						= "";
$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX 					= "";

/*
 ============================================================================================================
 +
 + Pre-Hyper-Text-Post-Processor :: Engine :: Configuration
 +
 ============================================================================================================
*/


$_ACCESS_PHP_ENGINE_VERSION							= "5";

/*
 ============================================================================================================
 +
 + Web Server :: Configuration :: Connection
 +
 ============================================================================================================
*/

$_ACCESS_URL_CLEARTEXT 								= "";
$_ACCESS_URL_SECURE								= "";
$_ACCESS_URL_SECURE_SSL								= "";
$_ACCESS_URL_SECURE_OPENSSL							= "";
$_ACCESS_URL_SECURE_TLS								= "";

/*
 ============================================================================================================
 +
 + System :: Configuration :: Electronic Mail Addresses and Electronic Mail Message Encryption
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + System :: Configuration :: Electronic Mail Addresses
 ============================================================================================================
*/

$_ACCESS_ELECTRONIC_MAIL_ADDRESS_SYSTEM_ADMINISTRATOR				= "";
$_ACCESS_ELECTRONIC_MAIL_ADDRESS_SYSTEM_ROOT					= "";
$_ACCESS_ELECTRONIC_MAIL_ADDRESS_SYSTEM_SERVICES				= "";

/*
 ============================================================================================================
 + System :: Configuration :: Electronic Mail Message Encryption
 ============================================================================================================
*/

$_SYSTEM_SETTINGS_STATUS_ENCRYPTION_PGP_ELECTRONIC_MAIL_MESSAGE			= "1";
$_SYSTEM_SETTINGS_ENCRYPTION_ELECTRONIC_MAIL_MESSAGE_PGP_KEY_PANEL_PUBLIC	= "
";
?>