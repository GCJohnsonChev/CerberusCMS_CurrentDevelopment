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
 + - File Location: root->Cerberus->Applications->Administration->System_Backup->index.php
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
 ================================================================
 +
 +
 + @ Directory Master Index
 +
 +
 ================================================================
*/

/*
 ================================================================
 +
 + Directory Master Index Variables
 +
 ================================================================
*/

/*
 ================================================================
 + Directory Listing Denial
 ================================================================
*/

$_DIRECTORY_DENIAL_FILE					= "../../../System/Default/Messages/Directory_Denial.php";

/*
 ================================================================
 + Directory Listing Denial: IF Directory Denial File Exists, Include It
 ================================================================
*/

if (file_exists("$_DIRECTORY_DENIAL_FILE")) {

	include_once "$_DIRECTORY_DENIAL_FILE";

} else {

	echo ("Missing Path: $_DIRECTORY_DENIAL_FILE");

} // [ + ] IF_FILE_EXISTS: Directory Denial Index->Redirect To Denial Message
?>