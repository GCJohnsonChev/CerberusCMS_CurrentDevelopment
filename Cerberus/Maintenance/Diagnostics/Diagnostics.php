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
 + - File Location: root->Cerberus->Maintenance->Diagnostics->Diagnostics.php
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
 + Diagnostics
 +
 +
 ================================================================
*/

/*
 ================================================================
 +
 + Diagnose->Error Handling
 +
 ================================================================
*/

//error_reporting("E_WARNING ^ E_NOTICE");

/*
 ================================================================
 +
 + Hyper-Text-Markup-Language Document Header Output
 +
 ================================================================
*/

echo ("
<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01 Transitional//EN\" \"http://www.w3.org/TR/html4/loose.dtd\">

<HTML>
	<HEAD>
		<TITLE>Cerberus Content Management System - Diagnostic Utility - Version: 1.2</TITLE>
		<LINK REL=\"stylesheet\" HREF=\"../../Theme/Global/Style_Sheet/Style.css\" TYPE=\"text/css\">
		<META HTTP-EQUIV=\"Content-Type\" CONTENT=\"text/html;charset=utf-8\">
	</HEAD>

	<BODY>
");

/*
 ================================================================
 +
 + Internal Application->File Checks
 +
 ================================================================
*/

		echo ("<CENTER>[ <A HREF=\"?InternalApplication&#61;File_Testing\" TITLE=\":: Test The File Integrity Of Cerberus' Files ::\">File Integrity Testing</A>&nbsp;&middot;&nbsp;<A HREF=\"?InternalApplication&#61;SQL_Testing\" TITLE=\":: Test The S.Q.L. Database Server Connection ::\">S.Q.L. Server Testing</A>&nbsp;&middot;&nbsp;<A HREF=\"?InternalApplication&#61;Backup_Login\" TITLE=\":: Open & Display The Internal Backup Login Application ::\">Backup Login Application</A> ]</CENTER><HR><BR><BR>");

if ($_GET["InternalApplication"] == "File_Testing") {

include_once "../../../../System/Language/English/Language.cerb";

		echo ("Cerberus Content Management System Diagnostic Utility - Version: 1.3<BR><BR>");

		echo ($_Application_Module_Extras_Diagnostics_EXAMINING_FILES);

		echo ($_Application_Module_Extras_Diagnostics_LISTING_FILES);

/*
 ================================================================
 +
 + Retrieve Files, Include Into An Array
 +
 ================================================================
*/

/*
 ================================================================
 + Directory: Root->Cerberus
 ================================================================
*/

$_ARRAY_SYSTEM_FILES_ROOT_0						= "../../Cerberus.php";
$_ARRAY_SYSTEM_FILES_ROOT_2						= "../../index.php";
$_ARRAY_SYSTEM_FILES_ROOT_3						= "../../Install.php";
$_ARRAY_SYSTEM_FILES_ROOT_4						= "../../RSS.php";
$_ARRAY_SYSTEM_FILES_ROOT_5						= "../../robots.txt";

/*
 ================================================================
 + Directory: Root->Cerberus->Maintenance->Diagnostics
 ================================================================
*/

$_ARRAY_SYSTEM_FILES_DIAGNOSTICS_0					= "./Diagnostics.php";

/*
 ================================================================
 + Directory: Root->System->Configuration
 ================================================================
*/

$_ARRAY_SYSTEM_FILES_CONFIGURATION_0					= "../../System/Configuration/Global_Configuration.php";
$_ARRAY_SYSTEM_FILES_CONFIGURATION_1					= "../../System/Configuration/Global_SQL_Server_Configuration.php";
$_ARRAY_SYSTEM_FILES_CONFIGURATION_2					= "../../System/Configuration/Global_SQL_Server_Database_Class.php";
$_ARRAY_SYSTEM_FILES_CONFIGURATION_3					= "../../System/Configuration/index.php";

/*
 ================================================================
 + Directory: Root->System->Language->English
 ================================================================
*/

$_ARRAY_SYSTEM_FILES_LANGUAGES_0					= "../../System/Language/English/Language.cerb";

/*
 ================================================================
 + Directory: Root->System->Safe-HTML->Default
 ================================================================
*/

$_ARRAY_SYSTEM_FILES_SafeHTML_0						= "../../System/Safe-HTML/Default/Safe-HTML.cerb";
$_ARRAY_SYSTEM_FILES_SafeHTML_1						= "../../System/Safe-HTML/Default/index.php";

/*
 ================================================================
 + Directory: Root->Applications->Administration
 ================================================================
*/

$_ARRAY_SYSTEM_FILES_APPLICATION_MODULES_ADMINISTRATOR_0		= "../../Applications/Administration/Administrators";
$_ARRAY_SYSTEM_FILES_APPLICATION_MODULES_ADMINISTRATOR_1		= "../../Applications/Administration/Applications";
$_ARRAY_SYSTEM_FILES_APPLICATION_MODULES_ADMINISTRATOR_2		= "../../Applications/Administration/Backup";
$_ARRAY_SYSTEM_FILES_APPLICATION_MODULES_ADMINISTRATOR_3		= "../../Applications/Administration/Banish";
$_ARRAY_SYSTEM_FILES_APPLICATION_MODULES_ADMINISTRATOR_4		= "../../Applications/Administration/Blocks";
$_ARRAY_SYSTEM_FILES_APPLICATION_MODULES_ADMINISTRATOR_5		= "../../Applications/Administration/Bot_Monitor";
$_ARRAY_SYSTEM_FILES_APPLICATION_MODULES_ADMINISTRATOR_6		= "../../Applications/Administration/Categories";
$_ARRAY_SYSTEM_FILES_APPLICATION_MODULES_ADMINISTRATOR_7		= "../../Applications/Administration/Control_Panel";
$_ARRAY_SYSTEM_FILES_APPLICATION_MODULES_ADMINISTRATOR_8		= "../../Applications/Administration/Forum";
$_ARRAY_SYSTEM_FILES_APPLICATION_MODULES_ADMINISTRATOR_9		= "../../Applications/Administration/index.php";
$_ARRAY_SYSTEM_FILES_APPLICATION_MODULES_ADMINISTRATOR_10		= "../../Applications/Administration/Modify";
$_ARRAY_SYSTEM_FILES_APPLICATION_MODULES_ADMINISTRATOR_11		= "../../Applications/Administration/phpinfo.php";
$_ARRAY_SYSTEM_FILES_APPLICATION_MODULES_ADMINISTRATOR_12		= "../../Applications/Administration/Publish";
$_ARRAY_SYSTEM_FILES_APPLICATION_MODULES_ADMINISTRATOR_13		= "../../Applications/Administration/Ranks";
$_ARRAY_SYSTEM_FILES_APPLICATION_MODULES_ADMINISTRATOR_14		= "../../Applications/Administration/Referrers";
$_ARRAY_SYSTEM_FILES_APPLICATION_MODULES_ADMINISTRATOR_15		= "../../Applications/Administration/Settings";
$_ARRAY_SYSTEM_FILES_APPLICATION_MODULES_ADMINISTRATOR_16		= "../../Applications/Administration/Submissions";
$_ARRAY_SYSTEM_FILES_APPLICATION_MODULES_ADMINISTRATOR_17		= "../../Applications/Administration/Terminal";
$_ARRAY_SYSTEM_FILES_APPLICATION_MODULES_ADMINISTRATOR_18		= "../../Applications/Administration/Web_Pages";

/*
 ================================================================
 + Directory: Root->Applications->Background
 ================================================================
*/

$_ARRAY_SYSTEM_FILES_APPLICATION_MODULES_BACKGROUND_0			= "../../Applications/Background/index.php";
$_ARRAY_SYSTEM_FILES_APPLICATION_MODULES_BACKGROUND_1			= "../../Applications/Background/Log_Administration";
$_ARRAY_SYSTEM_FILES_APPLICATION_MODULES_BACKGROUND_2			= "../../Applications/Background/Log_Background";
$_ARRAY_SYSTEM_FILES_APPLICATION_MODULES_BACKGROUND_3			= "../../Applications/Background/Log_User";

/*
 ================================================================
 + Directory: Root->Applications->Block
 ================================================================
*/

$_ARRAY_SYSTEM_FILES_APPLICATION_MODULES_BLOCKS_0			= "../../Applications/Block/Administrator.blk";
$_ARRAY_SYSTEM_FILES_APPLICATION_MODULES_BLOCKS_1			= "../../Applications/Block/Articles.blk";
$_ARRAY_SYSTEM_FILES_APPLICATION_MODULES_BLOCKS_2			= "../../Applications/Block/Banned.blk";
$_ARRAY_SYSTEM_FILES_APPLICATION_MODULES_BLOCKS_3			= "../../Applications/Block/Cerberus.blk";
$_ARRAY_SYSTEM_FILES_APPLICATION_MODULES_BLOCKS_4			= "../../Applications/Block/Files.blk";
$_ARRAY_SYSTEM_FILES_APPLICATION_MODULES_BLOCKS_5			= "../../Applications/Block/index.php";
$_ARRAY_SYSTEM_FILES_APPLICATION_MODULES_BLOCKS_6			= "../../Applications/Block/Language.blk";
$_ARRAY_SYSTEM_FILES_APPLICATION_MODULES_BLOCKS_7			= "../../Applications/Block/Member_List.blk";
$_ARRAY_SYSTEM_FILES_APPLICATION_MODULES_BLOCKS_8			= "../../Applications/Block/Members.blk";
$_ARRAY_SYSTEM_FILES_APPLICATION_MODULES_BLOCKS_9			= "../../Applications/Block/Modules.blk";
$_ARRAY_SYSTEM_FILES_APPLICATION_MODULES_BLOCKS_10			= "../../Applications/Block/Shouts.blk";

/*
 ================================================================
 + Directory: Root->Applications->Member
 ================================================================
*/

$_ARRAY_SYSTEM_FILES_APPLICATION_MODULES_USER_0				= "../../Applications/Member/All_News";
$_ARRAY_SYSTEM_FILES_APPLICATION_MODULES_USER_1				= "../../Applications/Member/All_Shouts";
$_ARRAY_SYSTEM_FILES_APPLICATION_MODULES_USER_2				= "../../Applications/Member/Application_List";
$_ARRAY_SYSTEM_FILES_APPLICATION_MODULES_USER_3				= "../../Applications/Member/Articles";
$_ARRAY_SYSTEM_FILES_APPLICATION_MODULES_USER_4				= "../../Applications/Member/Audio_Player";
$_ARRAY_SYSTEM_FILES_APPLICATION_MODULES_USER_5				= "../../Applications/Member/Change_Password";
$_ARRAY_SYSTEM_FILES_APPLICATION_MODULES_USER_6				= "../../Applications/Member/Comment";
$_ARRAY_SYSTEM_FILES_APPLICATION_MODULES_USER_7				= "../../Applications/Member/Contact_Admin";
$_ARRAY_SYSTEM_FILES_APPLICATION_MODULES_USER_8				= "../../Applications/Member/Control_Panel";
$_ARRAY_SYSTEM_FILES_APPLICATION_MODULES_USER_9				= "../../Applications/Member/Documentation";
$_ARRAY_SYSTEM_FILES_APPLICATION_MODULES_USER_10			= "../../Applications/Member/Edit_Profile";
$_ARRAY_SYSTEM_FILES_APPLICATION_MODULES_USER_11			= "../../Applications/Member/Electronic_Mail";
$_ARRAY_SYSTEM_FILES_APPLICATION_MODULES_USER_12			= "../../Applications/Member/Files";
$_ARRAY_SYSTEM_FILES_APPLICATION_MODULES_USER_13			= "../../Applications/Member/Forum";
$_ARRAY_SYSTEM_FILES_APPLICATION_MODULES_USER_14			= "../../Applications/Member/Friend";
$_ARRAY_SYSTEM_FILES_APPLICATION_MODULES_USER_15			= "../../Applications/Member/index.php";
$_ARRAY_SYSTEM_FILES_APPLICATION_MODULES_USER_16			= "../../Applications/Member/Language";
$_ARRAY_SYSTEM_FILES_APPLICATION_MODULES_USER_17			= "../../Applications/Member/Legal";
$_ARRAY_SYSTEM_FILES_APPLICATION_MODULES_USER_18			= "../../Applications/Member/Links";
$_ARRAY_SYSTEM_FILES_APPLICATION_MODULES_USER_19			= "../../Applications/Member/List";
$_ARRAY_SYSTEM_FILES_APPLICATION_MODULES_USER_20			= "../../Applications/Member/Login";
$_ARRAY_SYSTEM_FILES_APPLICATION_MODULES_USER_21			= "../../Applications/Member/Members";
$_ARRAY_SYSTEM_FILES_APPLICATION_MODULES_USER_22			= "../../Applications/Member/Members_Online";
$_ARRAY_SYSTEM_FILES_APPLICATION_MODULES_USER_23			= "../../Applications/Member/Messenger";
$_ARRAY_SYSTEM_FILES_APPLICATION_MODULES_USER_24			= "../../Applications/Member/News";
$_ARRAY_SYSTEM_FILES_APPLICATION_MODULES_USER_25			= "../../Applications/Member/Private_Files";
$_ARRAY_SYSTEM_FILES_APPLICATION_MODULES_USER_26			= "../../Applications/Member/Private_Message";
$_ARRAY_SYSTEM_FILES_APPLICATION_MODULES_USER_27			= "../../Applications/Member/Profile";
$_ARRAY_SYSTEM_FILES_APPLICATION_MODULES_USER_28			= "../../Applications/Member/Referrers";
$_ARRAY_SYSTEM_FILES_APPLICATION_MODULES_USER_29			= "../../Applications/Member/Register";
$_ARRAY_SYSTEM_FILES_APPLICATION_MODULES_USER_30			= "../../Applications/Member/Reset_Password";
$_ARRAY_SYSTEM_FILES_APPLICATION_MODULES_USER_31			= "../../Applications/Member/Search";
$_ARRAY_SYSTEM_FILES_APPLICATION_MODULES_USER_32			= "../../Applications/Member/Send_Friend";
$_ARRAY_SYSTEM_FILES_APPLICATION_MODULES_USER_33			= "../../Applications/Member/Statistics";
$_ARRAY_SYSTEM_FILES_APPLICATION_MODULES_USER_34			= "../../Applications/Member/Submit_News";
$_ARRAY_SYSTEM_FILES_APPLICATION_MODULES_USER_35			= "../../Applications/Member/System_Message";
$_ARRAY_SYSTEM_FILES_APPLICATION_MODULES_USER_36			= "../../Applications/Member/Upload";
$_ARRAY_SYSTEM_FILES_APPLICATION_MODULES_USER_37			= "../../Applications/Member/Video_Player";
$_ARRAY_SYSTEM_FILES_APPLICATION_MODULES_USER_38			= "../../Applications/Member/Webspace";

/*
 ================================================================
 + Directory: Root->Applications->Public
 ================================================================
*/

/*
 ================================================================
 + Directory: Root->Applications->Public
 ================================================================
*/

$_ARRAY_SYSTEM_FILES_CLASSES_0						= "../../System/Configuration/Class_Database.php";
$_ARRAY_SYSTEM_FILES_CLASSES_0						= "../../System/Configuration/Main_Access.php";
$_ARRAY_SYSTEM_FILES_CLASSES_0						= "../../System/Configuration/Main_Configuration.php";

/*
 ================================================================
 + Read Number of Lines of Each System File
 ================================================================
*/

// $_Diagnose_READ_FILE_ARRAY 						= basename($_SERVER['$_ARRAY_SYSTEM_FILES[$i]']); 
// $_Diagnose_COUNT_FILE_ARRAY 						= count(file($_Diagnose_READ_FILE_ARRAY);

/*
 ================================================================
 + Calculate Message Digest, Version: 5 Signatures->Root Files
 ================================================================
*/

$_ARRAY_SYSTEM_FILES_ROOT_0_MD5						= md5_file($_ARRAY_SYSTEM_FILES_ROOT_0);
$_ARRAY_SYSTEM_FILES_ROOT_1_MD5						= md5_file($_ARRAY_SYSTEM_FILES_ROOT_1);
$_ARRAY_SYSTEM_FILES_ROOT_2_MD5						= md5_file($_ARRAY_SYSTEM_FILES_ROOT_2);
$_ARRAY_SYSTEM_FILES_ROOT_3_MD5						= md5_file($_ARRAY_SYSTEM_FILES_ROOT_3);
$_ARRAY_SYSTEM_FILES_ROOT_4_MD5						= md5_file($_ARRAY_SYSTEM_FILES_ROOT_4);
$_ARRAY_SYSTEM_FILES_ROOT_5_MD5						= md5_file($_ARRAY_SYSTEM_FILES_ROOT_5);

/*
 ================================================================
 + Calculate Message Digest, Version: 5 Signatures->System Configuration Files
 ================================================================
*/

$_ARRAY_SYSTEM_FILES_CONFIGURATION_0_MD5				= md5_file($_ARRAY_SYSTEM_FILES_CONFIGURATION_0);
$_ARRAY_SYSTEM_FILES_CONFIGURATION_1_MD5				= md5_file($_ARRAY_SYSTEM_FILES_CONFIGURATION_1);
$_ARRAY_SYSTEM_FILES_CONFIGURATION_2_MD5				= md5_file($_ARRAY_SYSTEM_FILES_CONFIGURATION_2);
$_ARRAY_SYSTEM_FILES_CONFIGURATION_3_MD5				= md5_file($_ARRAY_SYSTEM_FILES_CONFIGURATION_3);

/*
 ================================================================
 +
 + Check For Physical Files, If Files Exist or Do Not Exist
 +
 ================================================================
*/

/*
 ================================================================
 +
 + Check For Root Files
 +
 ================================================================
*/

/*
 ================================================================
 + If File(s) Missing->Root->Cerberus.php
 ================================================================
*/

if (!file_exists($_ARRAY_SYSTEM_FILES_ROOT_0)) {
	echo ("Error, Missing File: $_ARRAY_SYSTEM_FILES_ROOT_0<BR>");
} else {
	echo ("File: <I>$_ARRAY_SYSTEM_FILES_ROOT_0</I> Exists. Message Digest 5 Algorithm Signature: <I>$_ARRAY_SYSTEM_FILES_ROOT_0_MD5</I><BR>");
} // [ + ] IF_FILE_DOES_NOT_EXIST

/*
 ================================================================
 + If File(s) Missing->Root->Diagnose.php
 ================================================================
*/

if (!file_exists($_ARRAY_SYSTEM_FILES_ROOT_1)) {
	echo ("Error, Missing File: $_ARRAY_SYSTEM_FILES_ROOT_1<BR>");
} else {
	echo ("File: <I>$_ARRAY_SYSTEM_FILES_ROOT_1</I> Exists. Message Digest 5 Algorithm Signature: <I>$_ARRAY_SYSTEM_FILES_ROOT_1_MD5</I><BR>");
} // [ + ] IF_FILE_DOES_NOT_EXIST

/*
 ================================================================
 + If File(s) Missing->Root->index.php
 ================================================================
*/

if (!file_exists($_ARRAY_SYSTEM_FILES_ROOT_2)) {
	echo ("Error, Missing File: $_ARRAY_SYSTEM_FILES_ROOT_2<BR>");
} else {
	echo ("File: <I>$_ARRAY_SYSTEM_FILES_ROOT_2</I> Exists. Message Digest 5 Algorithm Signature: <I>$_ARRAY_SYSTEM_FILES_ROOT_2_MD5</I><BR>");
} // [ + ] IF_FILE_DOES_NOT_EXIST

/*
 ================================================================
 + If File(s) Missing->Root->Install.php
 ================================================================
*/

if (!file_exists($_ARRAY_SYSTEM_FILES_ROOT_3)) {
	echo ("Error, Missing File: $_ARRAY_SYSTEM_FILES_ROOT_3<BR>");
} else {
	echo ("File: <I>$_ARRAY_SYSTEM_FILES_ROOT_3</I> Exists. Message Digest 5 Algorithm Signature: <I>$_ARRAY_SYSTEM_FILES_ROOT_3_MD5</I><BR>");
} // [ + ] IF_FILE_DOES_NOT_EXIST

/*
 ================================================================
 + If File(s) Missing->Root->RSS.php
 ================================================================
*/

if (!file_exists($_ARRAY_SYSTEM_FILES_ROOT_4)) {
	echo ("Error, Missing File: $_ARRAY_SYSTEM_FILES_ROOT_4<BR>");
} else {
	echo ("File: <I>$_ARRAY_SYSTEM_FILES_ROOT_4</I> Exists. Message Digest 5 Algorithm Signature: <I>$_ARRAY_SYSTEM_FILES_ROOT_4_MD5</I><BR>");
} // [ + ] IF_FILE_DOES_NOT_EXIST

/*
 ================================================================
 + If File(s) Missing->Root->Robots.txt
 ================================================================
*/

if (!file_exists($_ARRAY_SYSTEM_FILES_ROOT_5)) {
	echo ("Error, Missing File: $_ARRAY_SYSTEM_FILES_ROOT_5<BR>");
} else {
	echo ("File: <I>$_ARRAY_SYSTEM_FILES_ROOT_5</I> Exists. Message Digest 5 Algorithm Signature: <I>$_ARRAY_SYSTEM_FILES_ROOT_5_MD5</I><BR>");
} // [ + ] IF_FILE_DOES_NOT_EXIST

/*
 ================================================================
 +
 + Check For System Files
 +
 ================================================================
*/

/*
 ================================================================
 + If File(s) Missing->System->Configuration->Class_Database.php
 ================================================================
*/

if (!file_exists($_ARRAY_SYSTEM_FILES_CONFIGURATION_0)) {
	echo ("Error, Missing File: $_ARRAY_SYSTEM_FILES_CONFIGURATION_0");
} else {
	echo ("File: <I>$_ARRAY_SYSTEM_FILES_CONFIGURATION_0</I> Exists. Message Digest 5 Algorithm Signature: <I>$_ARRAY_SYSTEM_FILES_CONFIGURATION_0_MD5</I><BR>");
} // [ + ] IF_FILE_DOES_NOT_EXIST

/*
 ================================================================
 + If File(s) Missing->System->Configuration->index.php
 ================================================================
*/

if (!file_exists($_ARRAY_SYSTEM_FILES_CONFIGURATION_1)) {
	echo ("Error, Missing File: $_ARRAY_SYSTEM_FILES_CONFIGURATION_1");
} else {
	echo ("File: <I>$_ARRAY_SYSTEM_FILES_CONFIGURATION_1</I> Exists. Message Digest 5 Algorithm Signature: <I>$_ARRAY_SYSTEM_FILES_CONFIGURATION_1_MD5</I><BR>");
} // [ + ] IF_FILE_DOES_NOT_EXIST

/*
 ================================================================
 + If File(s) Missing->System->Configuration->Main_Access.php
 ================================================================
*/

if (!file_exists($_ARRAY_SYSTEM_FILES_CONFIGURATION_2)) {
	echo ("Error, Missing File: $_ARRAY_SYSTEM_FILES_CONFIGURATION_2");
} else {
	echo ("File: <I>$_ARRAY_SYSTEM_FILES_CONFIGURATION_2</I> Exists. Message Digest 5 Algorithm Signature: <I>$_ARRAY_SYSTEM_FILES_CONFIGURATION_2_MD5</I><BR>");
} // [ + ] IF_FILE_DOES_NOT_EXIST

/*
 ================================================================
 + If File(s) Missing->System->Configuration->Main_Configuration.php
 ================================================================
*/

if (!file_exists($_ARRAY_SYSTEM_FILES_CONFIGURATION_3)) {
	echo ("Error, Missing File: $_ARRAY_SYSTEM_FILES_CONFIGURATION_3");
} else {
	echo ("File: <I>$_ARRAY_SYSTEM_FILES_CONFIGURATION_3</I> Exists. Message Digest 5 Algorithm Signature: <I>$_ARRAY_SYSTEM_FILES_CONFIGURATION_3_MD5</I><BR>");
} // [ + ] IF_FILE_DOES_NOT_EXIST

/*
 ================================================================
 + Diagnostics Finished
 ================================================================
*/

	echo ($_Application_Module_Extras_Diagnostics_DIAGNOSTICS_FINISHED);

} // [ + ] IF Application_File_Checks

/*
 ================================================================
 +
 +
 + S.Q.L. Database Connection Test
 +
 +
 ================================================================
*/

/*
 ================================================================
 +
 + Internal Application->S.Q.L. Checks
 +
 ================================================================
*/

if ($_GET["InternalApplication"] == "SQL_Testing") {

	echo ("[ * ] Including Configuration File...<BR>");

	include_once "../../../../System/Configuration/Global_Configuration.php";

	echo ("[ * ] Configuration File Included Successfully.<BR>");

	echo ("[ * ] Including Database Server Access File...<BR>");

	include_once "../../../../System/Configuration/Global_SQL_Server_Configuration.php";

	echo ("[ * ] Database Server Access File Included Successfully.<BR>");

	echo ("[ * ] Connecting To MyS.Q.L. Database Server Host-Name...<BR>");

	if (mysql_connect($_ACCESS_DATABASE_SERVER_HOSTNAME, $_ACCESS_DATABASE_SERVER_USERNAME, $_ACCESS_DATABASE_SERVER_PASSWORD)) {

	echo ("[ * ] Connection To MyS.Q.L. Server Host-Name: <I>$_ACCESS_DATABASE_SERVER_HOSTNAME</I> With UserName: <I>$_ACCESS_DATABASE_SERVER_USERNAME</I> Was Successful.<BR>");

} else {

	echo ("[ * ] Connection To MyS.Q.L. Server Host-Name: <I>$_ACCESS_DATABASE_SERVER_HOSTNAME</I> With UserName: <I>$_ACCESS_DATABASE_SERVER_USERNAME</I> Was *NOT* Successful.<BR>");

} // [ + ] IF_CONNECT_TO_MySQL_DATABASE_SERVER

	echo ("[ * ] Connecting To MyS.Q.L. Server Database Name...<BR>");

	if (mysql_select_db($_ACCESS_DATABASE_SERVER_DATABASE_NAME)) {

	echo ("[ * ] Connection To MyS.Q.L. Server Database Name: <I>$_ACCESS_DATABASE_SERVER_DATABASE_NAME</I> Was Successful.<BR>");

} else {

	echo ("[ * ] Connection To MyS.Q.L. Server Database Name: <I>$_ACCESS_DATABASE_SERVER_DATABASE_NAME</I> Was *NOT* Successful.<BR>");

} // [ + ] IF_CONNECT_TO_MySQL_SERVER_DATABASE

} // [ + ] IF_Application_MySQL_Test

/*
 ================================================================
 +
 +
 + Backup Login
 +
 +
 ================================================================
*/

/*
 ================================================================
 +
 + Internal Application->Backup Login
 +
 ================================================================
*/

if ($_GET["InternalApplication"] == "Backup_Login") {

echo ("
		<FORM ACTION=\"../../Cerberus.php?InternalApplication&#61;Login\" METHOD=\"POST\">
			<HR>Backup Login Form<HR>
			Are You Locked-Out Of Cerberus Content Management System ?<BR>
			Try Using The Account UserName: <I>'Cerberus'</I> With Original Password<BR><BR>
			<I>Member' Electronic Mail Address</I>:<BR>
				<INPUT TYPE=\"TEXT\" NAME=\"post_login_electronic_mail_address\"><BR>
			<I>Member' Username</I>:<BR>
				<INPUT TYPE=\"TEXT\" NAME=\"post_login_username\"><BR>
			<I>Member' Password</I>:<BR>
				<INPUT TYPE=\"PASSWORD\" NAME=\"post_login_password\"><BR>
			<INPUT TYPE=\"SUBMIT\" VALUE=\"Login\">
		</FORM>
");

} // [ + ] IF_GET_Application_Login

echo ("
	</BODY>
</HTML>
");
?>