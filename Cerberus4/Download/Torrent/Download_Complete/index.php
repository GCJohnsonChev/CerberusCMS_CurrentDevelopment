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
 + - File Location: root->Cerberus->Download->Torrent->Download_Complete->index.php
 + - File Version : 0.6
 + - Release Date : Wednesday, March 1st of 2023
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
 + --()()--()()()--()--()--()()()---()()()--()--()--()()()--()()()------------\-/- Build Number: 0.8
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 +
 + [ @ ] Directory Master Index
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 + Directory Master Index :: Variables
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Directory Master Index :: Variables :: Directory Listing Denial File
 ============================================================================================================
*/

$_DIRECTORY_FILE_DENIAL					= "../../../System/Default/Messages/Directory_Denial.php";

/*
 ============================================================================================================
 + Directory Listing Denial: IF Directory Denial File Exists, Include It
 ============================================================================================================
*/

if (file_exists("$_DIRECTORY_FILE_DENIAL")) {

	include_once "$_DIRECTORY_FILE_DENIAL";

} else {

	echo ("Kernel Message: Missing Path: $_DIRECTORY_FILE_DENIAL");

} // [ + ] IF: File Exists: Directory Denial Index File: Redirect To Master Directory Index Listing Denial File
?>