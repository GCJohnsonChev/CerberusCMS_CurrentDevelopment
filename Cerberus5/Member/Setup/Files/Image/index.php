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
 + - File Location: Master Root Directory->Root Directory->Member->Setup->Files->Image->index.php
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

$_DIRECTORY_DENIAL_FILE					= "../../../../System/Default/Messages/Directory_Denial.php";

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
