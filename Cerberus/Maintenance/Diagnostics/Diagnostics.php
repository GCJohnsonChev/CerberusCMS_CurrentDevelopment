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
 ============================================================================================================
 +
 +
 + [ ^ ] Cerberus Content Management System :: Maintenance :: Diagnostics
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 + Diagnostics Application :: Error Handling Systems 
 +
 ============================================================================================================
*/

error_reporting("E_WARNING ^ E_NOTICE");

/*
 ============================================================================================================
 +
 + Hyper-Text-Markup-Language Document Header Output
 +
 ============================================================================================================
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
 ============================================================================================================
 +
 + Internal Application :: File Integrity Testing
 +
 ============================================================================================================
*/

echo ("
<CENTER>[ <A HREF=\"?InternalApplication&#61;File_Testing\" TITLE=\":: Test The File Integrity Of Cerberus' Files ::\">File Integrity Testing</A>
&nbsp;&middot;&nbsp;<A HREF=\"?InternalApplication&#61;MySQL_Testing\" TITLE=\":: Test The MyS.Q.L. Database Server Connection Through The MyS.Q.L. Driver ::\">MyS.Q.L. Server Standard Driver Testing</A>
&nbsp;&middot;&nbsp;<A HREF=\"?InternalApplication&#61;MySQLi_Testing\" TITLE=\":: Test The MyS.Q.L. Database Server Connection Through The MyS.Q.L. Improved Driver ::\">MyS.Q.L. Server Improved Driver Testing</A>
&nbsp;&middot;&nbsp;<A HREF=\"?InternalApplication&#61;Backup_Login\" TITLE=\":: Open & Display The Internal Backup Login Application ::\">Backup Login Application</A> ]</CENTER><HR><BR><BR>
");

if ($_GET["InternalApplication"] == "File_Testing") {

		include_once "../../../../System/Language/English/Language.cerberus";

		echo ("Cerberus Content Management System Diagnostic Utility - Version: 1.3<BR><BR>");

		echo ($_Application_Module_Extras_Diagnostics_EXAMINING_FILES);

		echo ($_Application_Module_Extras_Diagnostics_LISTING_FILES);

/*
 ============================================================================================================
 +
 + Specify and Retrieve Files, Include Into Arrays
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Directory: Root->Cerberus
 ============================================================================================================
*/

$_ARRAY_SYSTEM_FILES_ROOT_0						= "../../Cerberus.php";
$_ARRAY_SYSTEM_FILES_ROOT_1						= "../../index.php";
$_ARRAY_SYSTEM_FILES_ROOT_2						= "../../RSS.php";
$_ARRAY_SYSTEM_FILES_ROOT_3						= "../../robots.txt";

/*
 ============================================================================================================
 + Directory: Root->Architect
 ============================================================================================================
*/

$_ARRAY_SYSTEM_FILES_ARCHITECT_0					= "../../Architect.php";

/*
 ============================================================================================================
 + Directory: Root->Cerberus->Maintenance->Diagnostics
 ============================================================================================================
*/

$_ARRAY_SYSTEM_FILES_MAINTENANCE_DIAGNOSTICS_0				= "./Diagnostics.php";

/*
 ============================================================================================================
 + Directory: Root->System->Configuration
 ============================================================================================================
*/

$_ARRAY_SYSTEM_FILES_CONFIGURATION_0					= "../../System/Configuration/Global_Configuration.php";
$_ARRAY_SYSTEM_FILES_CONFIGURATION_1					= "../../System/Configuration/Global_SQL_Server_Configuration.php";
$_ARRAY_SYSTEM_FILES_CONFIGURATION_2					= "../../System/Configuration/Global_SQL_Server_Database_Class.php";

/*
 ============================================================================================================
 + Directory: Root->System->Language->English
 ============================================================================================================
*/

$_ARRAY_SYSTEM_FILES_LANGUAGES_0					= "../../System/Language/English/Language.cerb";
$_ARRAY_SYSTEM_FILES_LANGUAGES_1					= "../../System/Language/English/index.php";


/*
 ============================================================================================================
 + Directory: Root->System->Plug-Ins->Text-Editor->Default
 ============================================================================================================
*/

$_ARRAY_SYSTEM_FILES_PLUGINS_TEXTEDITOR_0				= "../../System/Text-Editor/Default/Safe-HTML.cerb";
$_ARRAY_SYSTEM_FILES_PLUGINS_TEXTEDITOR_1				= "../../System/Text-Editor/Default/index.php";

/*
 ============================================================================================================
 + Directory: Root->System->Plug-Ins->Safe-HTML->Default
 ============================================================================================================
*/

$_ARRAY_SYSTEM_FILES_PLUGINS_SafeHTML_0					= "../../System/Safe-HTML/Default/Safe-HTML.cerb";
$_ARRAY_SYSTEM_FILES_PLUGINS_SafeHTML_1					= "../../System/Safe-HTML/Default/index.php";

/*
 ============================================================================================================
 + Directory: Root->Applications->Administration
 ============================================================================================================
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
 ============================================================================================================
 + Directory: Root->Applications->Background
 ============================================================================================================
*/

$_ARRAY_SYSTEM_FILES_APPLICATION_MODULES_BACKGROUND_0			= "../../Applications/Background/index.php";
$_ARRAY_SYSTEM_FILES_APPLICATION_MODULES_BACKGROUND_1			= "../../Applications/Background/Log_Administration";
$_ARRAY_SYSTEM_FILES_APPLICATION_MODULES_BACKGROUND_2			= "../../Applications/Background/Log_Background";
$_ARRAY_SYSTEM_FILES_APPLICATION_MODULES_BACKGROUND_3			= "../../Applications/Background/Log_User";

/*
 ============================================================================================================
 + Directory: Root->Applications->Block
 ============================================================================================================
*/

$_ARRAY_SYSTEM_FILES_APPLICATION_MODULES_PANEL_0			= "../../Applications/Panel/Administration.panel";
$_ARRAY_SYSTEM_FILES_APPLICATION_MODULES_PANEL_1			= "../../Applications/Panel/Applications_Panel.panel";
$_ARRAY_SYSTEM_FILES_APPLICATION_MODULES_PANEL_2			= "../../Applications/Panel/Banned_Networks.panel";
$_ARRAY_SYSTEM_FILES_APPLICATION_MODULES_PANEL_3			= "../../Applications/Panel/Language.panel";
$_ARRAY_SYSTEM_FILES_APPLICATION_MODULES_PANEL_4			= "../../Applications/Panel/Latest_Articles.panel";
$_ARRAY_SYSTEM_FILES_APPLICATION_MODULES_PANEL_5			= "../../Applications/Panel/Latest_Files.php";
$_ARRAY_SYSTEM_FILES_APPLICATION_MODULES_PANEL_6			= "../../Applications/Panel/Latest_Members.panel";
$_ARRAY_SYSTEM_FILES_APPLICATION_MODULES_PANEL_7			= "../../Applications/Panel/Latest_Shouts.panel";
$_ARRAY_SYSTEM_FILES_APPLICATION_MODULES_PANEL_8			= "../../Applications/Panel/Member_Panel.panel";
$_ARRAY_SYSTEM_FILES_APPLICATION_MODULES_PANEL_9			= "../../Applications/Panel/Project_Badges.panel";
$_ARRAY_SYSTEM_FILES_APPLICATION_MODULES_PANEL_10			= "../../Applications/Panel/RSS_Panel.panel";

/*
 ============================================================================================================
 + Directory: Root->Applications->Member
 ============================================================================================================
*/

$_ARRAY_SYSTEM_FILES_APPLICATION_MODULES_MEMBER_0			= "../../Applications/Member/Active_Members";
$_ARRAY_SYSTEM_FILES_APPLICATION_MODULES_MEMBER_1			= "../../Applications/Member/All_News";
$_ARRAY_SYSTEM_FILES_APPLICATION_MODULES_MEMBER_2			= "../../Applications/Member/All_Shouts";
$_ARRAY_SYSTEM_FILES_APPLICATION_MODULES_MEMBER_3			= "../../Applications/Member/Application_List";
$_ARRAY_SYSTEM_FILES_APPLICATION_MODULES_MEMBER_4			= "../../Applications/Member/Articles";
$_ARRAY_SYSTEM_FILES_APPLICATION_MODULES_MEMBER_5			= "../../Applications/Member/Audio_Player";
$_ARRAY_SYSTEM_FILES_APPLICATION_MODULES_MEMBER_6			= "../../Applications/Member/Comment";
$_ARRAY_SYSTEM_FILES_APPLICATION_MODULES_MEMBER_7			= "../../Applications/Member/Contact_Administrator";
$_ARRAY_SYSTEM_FILES_APPLICATION_MODULES_MEMBER_8			= "../../Applications/Member/Control_Panel";
$_ARRAY_SYSTEM_FILES_APPLICATION_MODULES_MEMBER_9			= "../../Applications/Member/Documentation";
$_ARRAY_SYSTEM_FILES_APPLICATION_MODULES_MEMBER_10			= "../../Applications/Member/Electronic_Mail";
$_ARRAY_SYSTEM_FILES_APPLICATION_MODULES_MEMBER_11			= "../../Applications/Member/Files";
$_ARRAY_SYSTEM_FILES_APPLICATION_MODULES_MEMBER_12			= "../../Applications/Member/Forum";
$_ARRAY_SYSTEM_FILES_APPLICATION_MODULES_MEMBER_13			= "../../Applications/Member/Forward_Friend";
$_ARRAY_SYSTEM_FILES_APPLICATION_MODULES_MEMBER_14			= "../../Applications/Member/Language";
$_ARRAY_SYSTEM_FILES_APPLICATION_MODULES_MEMBER_15			= "../../Applications/Member/Legal";
$_ARRAY_SYSTEM_FILES_APPLICATION_MODULES_MEMBER_16			= "../../Applications/Member/Links";
$_ARRAY_SYSTEM_FILES_APPLICATION_MODULES_MEMBER_17			= "../../Applications/Member/List";
$_ARRAY_SYSTEM_FILES_APPLICATION_MODULES_MEMBER_18			= "../../Applications/Member/Login";
$_ARRAY_SYSTEM_FILES_APPLICATION_MODULES_MEMBER_19			= "../../Applications/Member/Member_Directory";
$_ARRAY_SYSTEM_FILES_APPLICATION_MODULES_MEMBER_20			= "../../Applications/Member/Messenger";
$_ARRAY_SYSTEM_FILES_APPLICATION_MODULES_MEMBER_21			= "../../Applications/Member/News";
$_ARRAY_SYSTEM_FILES_APPLICATION_MODULES_MEMBER_22			= "../../Applications/Member/Private_Files";
$_ARRAY_SYSTEM_FILES_APPLICATION_MODULES_MEMBER_23			= "../../Applications/Member/Private_Message";
$_ARRAY_SYSTEM_FILES_APPLICATION_MODULES_MEMBER_24			= "../../Applications/Member/Profile";
$_ARRAY_SYSTEM_FILES_APPLICATION_MODULES_MEMBER_25			= "../../Applications/Member/Referrers";
$_ARRAY_SYSTEM_FILES_APPLICATION_MODULES_MEMBER_26			= "../../Applications/Member/Register";
$_ARRAY_SYSTEM_FILES_APPLICATION_MODULES_MEMBER_27			= "../../Applications/Member/Reset_Password";
$_ARRAY_SYSTEM_FILES_APPLICATION_MODULES_MEMBER_28			= "../../Applications/Member/Search";
$_ARRAY_SYSTEM_FILES_APPLICATION_MODULES_MEMBER_29			= "../../Applications/Member/Statistics";
$_ARRAY_SYSTEM_FILES_APPLICATION_MODULES_MEMBER_30			= "../../Applications/Member/Send_Friend";
$_ARRAY_SYSTEM_FILES_APPLICATION_MODULES_MEMBER_31			= "../../Applications/Member/Submit_News";
$_ARRAY_SYSTEM_FILES_APPLICATION_MODULES_MEMBER_32			= "../../Applications/Member/System_Message";
$_ARRAY_SYSTEM_FILES_APPLICATION_MODULES_MEMBER_33			= "../../Applications/Member/Update_Account";
$_ARRAY_SYSTEM_FILES_APPLICATION_MODULES_MEMBER_34			= "../../Applications/Member/Update_Password";
$_ARRAY_SYSTEM_FILES_APPLICATION_MODULES_MEMBER_35			= "../../Applications/Member/Upload";
$_ARRAY_SYSTEM_FILES_APPLICATION_MODULES_MEMBER_36			= "../../Applications/Member/Video_Player";
$_ARRAY_SYSTEM_FILES_APPLICATION_MODULES_MEMBER_37			= "../../Applications/Member/Webspace";
$_ARRAY_SYSTEM_FILES_APPLICATION_MODULES_MEMBER_38			= "../../Applications/Member/index.php";

/*
 ============================================================================================================
 + Directory: Root->Applications->Public
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Read Number of Lines of Each System File
 ============================================================================================================
*/

$_Diagnose_READ_FILE_ARRAY 						= basename($_SERVER['$_ARRAY_SYSTEM_FILES_ROOT[$i]']); 
//$_Diagnose_COUNT_FILE_ARRAY 						= count(file($_Diagnose_READ_FILE_ARRAY);

/*
 ============================================================================================================
 + Calculate Message Digest, Version: 5 Signatures :: Root Files
 ============================================================================================================
*/

$_ARRAY_SYSTEM_FILES_ROOT_0_MD5						= md5_file($_ARRAY_SYSTEM_FILES_ROOT_0);
$_ARRAY_SYSTEM_FILES_ROOT_1_MD5						= md5_file($_ARRAY_SYSTEM_FILES_ROOT_1);
$_ARRAY_SYSTEM_FILES_ROOT_2_MD5						= md5_file($_ARRAY_SYSTEM_FILES_ROOT_2);
$_ARRAY_SYSTEM_FILES_ROOT_3_MD5						= md5_file($_ARRAY_SYSTEM_FILES_ROOT_3);
$_ARRAY_SYSTEM_FILES_ROOT_4_MD5						= md5_file($_ARRAY_SYSTEM_FILES_ROOT_4);
$_ARRAY_SYSTEM_FILES_ROOT_5_MD5						= md5_file($_ARRAY_SYSTEM_FILES_ROOT_5);

/*
 ============================================================================================================
 + Calculate Message Digest, Version: 5 Signatures :: System Configuration Files
 ============================================================================================================
*/

$_ARRAY_SYSTEM_FILES_CONFIGURATION_0_MD5				= md5_file($_ARRAY_SYSTEM_FILES_CONFIGURATION_0);
$_ARRAY_SYSTEM_FILES_CONFIGURATION_1_MD5				= md5_file($_ARRAY_SYSTEM_FILES_CONFIGURATION_1);
$_ARRAY_SYSTEM_FILES_CONFIGURATION_2_MD5				= md5_file($_ARRAY_SYSTEM_FILES_CONFIGURATION_2);
$_ARRAY_SYSTEM_FILES_CONFIGURATION_3_MD5				= md5_file($_ARRAY_SYSTEM_FILES_CONFIGURATION_3);

/*
 ============================================================================================================
 +
 + Check For Physical Files, If Files Exist or Do Not Exist
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 + Check For Root Files
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + IF: File(s) Missing->Root->Cerberus.php
 ============================================================================================================
*/

if (!file_exists($_ARRAY_SYSTEM_FILES_ROOT_0)) {

	echo ("Error, Missing File: $_ARRAY_SYSTEM_FILES_ROOT_0<BR>");

} else {

	echo ("File: <I>$_ARRAY_SYSTEM_FILES_ROOT_0</I> Exists. Message Digest 5 Algorithm Signature: <I>$_ARRAY_SYSTEM_FILES_ROOT_0_MD5</I><BR>");

} // [ + ] IF: File Does Not Exist: System Root Application Files

/*
 ============================================================================================================
 + IF: File(s) Missing->Root->Maintenance->Diagnostics->Diagnose.php
 ============================================================================================================
*/

if (!file_exists($_ARRAY_SYSTEM_FILES_MAINTENANCE_DIAGNOSTICS_0)) {

	echo ("Error, Missing File: $_ARRAY_SYSTEM_FILES_ROOT_1<BR>");

} else {

	echo ("File: <I>$_ARRAY_SYSTEM_FILES_ROOT_1</I> Exists. Message Digest 5 Algorithm Signature: <I>$_ARRAY_SYSTEM_FILES_ROOT_1_MD5</I><BR>");

} // [ + ] IF: File Does Not Exist: System Maintenance Application Files :: Diagnostics

/*
 ============================================================================================================
 + IF: File(s) Missing->Root->Architect.php
 ============================================================================================================
*/

if (!file_exists($_ARRAY_SYSTEM_FILES_ARCHITECT_0)) {

	echo ("Error, Missing File: $_ARRAY_SYSTEM_FILES_ROOT_1<BR>");

} else {

	echo ("File: <I>$_ARRAY_SYSTEM_FILES_ROOT_1</I> Exists. Message Digest 5 Algorithm Signature: <I>$_ARRAY_SYSTEM_FILES_ROOT_1_MD5</I><BR>");

} // [ + ] IF: File Does Not Exist: Architect Application Files

/*
 ============================================================================================================
 + IF: File(s) Missing->Root->RSS.php
 ============================================================================================================
*/

if (!file_exists($_ARRAY_SYSTEM_FILES_ROOT_4)) {

	echo ("Error, Missing File: $_ARRAY_SYSTEM_FILES_ROOT_4<BR>");

} else {

	echo ("File: <I>$_ARRAY_SYSTEM_FILES_ROOT_4</I> Exists. Message Digest 5 Algorithm Signature: <I>$_ARRAY_SYSTEM_FILES_ROOT_4_MD5</I><BR>");

} // [ + ] IF: File Does Not Exist: Real-Simple-Syndication Application File

/*
 ============================================================================================================
 +
 + Check For System Files :: Class Database Files
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + IF: File(s) Missing->System->Configuration->Global_Configuration.php
 ============================================================================================================
*/

if (!file_exists($_ARRAY_SYSTEM_FILES_CONFIGURATION_0)) {

	echo ("Error, Missing File: $_ARRAY_SYSTEM_FILES_CONFIGURATION_0");

} else {

	echo ("File: <I>$_ARRAY_SYSTEM_FILES_CONFIGURATION_0</I> Exists. Message Digest 5 Algorithm Signature: <I>$_ARRAY_SYSTEM_FILES_CONFIGURATION_0_MD5</I><BR>");

} // [ + ] IF: File Does Not Exist: Class Configuration File

/*
 ============================================================================================================
 + IF: File(s) Missing->System->Configuration->Global_SQL_Server_Configuration.php
 ============================================================================================================
*/

if (!file_exists($_ARRAY_SYSTEM_FILES_CONFIGURATION_1)) {

	echo ("Error, Missing File: $_ARRAY_SYSTEM_FILES_CONFIGURATION_1");

} else {

	echo ("File: <I>$_ARRAY_SYSTEM_FILES_CONFIGURATION_1</I> Exists. Message Digest 5 Algorithm Signature: <I>$_ARRAY_SYSTEM_FILES_CONFIGURATION_1_MD5</I><BR>");

} // [ + ] IF: File Does Not Exist: Global S.Q.L. Server Configuration File

/*
 ============================================================================================================
 + If File(s) Missing->System->Configuration->Global_SQL_Server_Database_Class.php
 ============================================================================================================
*/

if (!file_exists($_ARRAY_SYSTEM_FILES_CONFIGURATION_2)) {

	echo ("Error, Missing File: $_ARRAY_SYSTEM_FILES_CONFIGURATION_2");

} else {

	echo ("File: <I>$_ARRAY_SYSTEM_FILES_CONFIGURATION_2</I> Exists. Message Digest 5 Algorithm Signature: <I>$_ARRAY_SYSTEM_FILES_CONFIGURATION_2_MD5</I><BR>");

} // [ + ] IF: File Does Not Exist: Global S.Q.L. Server Database Class File

/*
 ============================================================================================================
 + Maintenance :: Diagnostics Finished
 ============================================================================================================
*/

	echo ($_Application_Module_Extras_Diagnostics_DIAGNOSTICS_FINISHED);

} // [ + ] IF: Internal Application: File Testing Is Activated

/*
 ============================================================================================================
 +
 +
 + Structured Query Language Database Server :: Testing
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 + Internal Application :: My Structured Query Language Database Server :: Standard Driver Connection Testing
 +
 ============================================================================================================
*/

if ($_GET["InternalApplication"] == "MySQL_Testing") {

	echo ("<B>My Structured Query Language :: Standard Driver :: Connection Testing</B><BR>");

	echo ("[ * ] Including Global Configuration File...<BR>");

	include_once "../../System/Configuration/Global_Configuration.php";

	echo ("[ * ] Global Configuration File Included Successfully.<BR>");

	echo ("[ * ] Including Database Server Access Configuration File...<BR>");

	include_once "../../System/Configuration/Global_SQL_Server_Configuration.php";

	echo ("[ * ] Database Server Access Configuration File Included Successfully.<BR>");

	echo ("[ * ] Connecting To MyS.Q.L. Database Server Host-Name...<BR>");

if (mysql_connect($_ACCESS_DATABASE_SERVER_HOSTNAME, $_ACCESS_DATABASE_SERVER_USERNAME, $_ACCESS_DATABASE_SERVER_PASSWORD)) {

	echo ("[ * ] Connection To MyS.Q.L. Database Server Host-Name: <I>$_ACCESS_DATABASE_SERVER_HOSTNAME</I> With UserName: <I>$_ACCESS_DATABASE_SERVER_USERNAME</I> Was Successful.<BR>");

} else {

	echo ("[ * ] Connection To MyS.Q.L. Database Server Host-Name: <I>$_ACCESS_DATABASE_SERVER_HOSTNAME</I> With UserName: <I>$_ACCESS_DATABASE_SERVER_USERNAME</I> Was ***NOT*** Successful.<BR>");

} // [ + ] IF: Connection To MyS.Q.L. Database Server

	echo ("[ * ] Connecting To MyS.Q.L. Database Server Database Name...<BR>");

if (mysql_select_db($_ACCESS_DATABASE_SERVER_DATABASE_NAME)) {

	echo ("[ * ] Connection To MyS.Q.L. Database Server Database Name: <I>$_ACCESS_DATABASE_SERVER_DATABASE_NAME</I> Was Successful.<BR>");

} else {

	echo ("[ * ] Connection To MyS.Q.L. Database Server Database Name: <I>$_ACCESS_DATABASE_SERVER_DATABASE_NAME</I> Was ***NOT*** Successful.<BR>");

} // [ + ] IF: Connection To MyS.Q.L. Database Server Database Name

} // [ + ] IF: Internal Application: S.Q.L. Testing Is Activated

/*
 ============================================================================================================
 +
 + Internal Application :: My Structured Query Language Database Server :: Improved Driver Connection Testing
 +
 ============================================================================================================
*/

if ($_GET["InternalApplication"] == "MySQLi_Testing") {

	echo ("<B>My Structured Query Language :: Improved Driver :: Connection Testing</B><BR>");

	echo ("[ * ] Including Global Configuration File...<BR>");

	include_once "../../System/Configuration/Global_Configuration.php";

	echo ("[ * ] Global Configuration File Included Successfully.<BR>");

	echo ("[ * ] Including Database Server Access Configuration File...<BR>");

	include_once "../../System/Configuration/Global_SQL_Server_Configuration.php";

	echo ("[ * ] Database Server Access Configuration File Included Successfully.<BR>");

	echo ("[ * ] Including Database Server Class Functions File...<BR>");

	include_once "../../System/Configuration/Global_SQL_Server_Database_Class.php";

	echo ("[ * ] Database Server Class Functions File Included Successfully.<BR>");

	echo ("[ * ] Connecting To MyS.Q.L. Database Server Host-Name...<BR>");

if ($_GLOBAL_SQL_DATABASE_SERVER_CONNECTION) {

	echo ("[ * ] Connection To MyS.Q.L. Database Server Host-Name: <I>$_ACCESS_DATABASE_SERVER_HOSTNAME</I> With UserName: <I>$_ACCESS_DATABASE_SERVER_USERNAME</I> Was Successful.<BR>");

} else {

	echo ("[ * ] Connection To MyS.Q.L. Database Server Host-Name: <I>$_ACCESS_DATABASE_SERVER_HOSTNAME</I> With UserName: <I>$_ACCESS_DATABASE_SERVER_USERNAME</I> Was ***NOT*** Successful.<BR>");

} // [ + ] IF: Connection To MyS.Q.L. Database Server

	echo ("[ * ] Connecting To MyS.Q.L. Database Server Database Name...<BR>");

if (mysqli_select_db($_GLOBAL_SQL_DATABASE_SERVER_CONNECTION, $_ACCESS_DATABASE_SERVER_DATABASE_NAME)) {

	echo ("[ * ] Connection To MyS.Q.L. Database Server Database Name: <I>$_ACCESS_DATABASE_SERVER_DATABASE_NAME</I> Was Successful.<BR>");

} else {

	echo ("[ * ] Connection To MyS.Q.L. Database Server Database Name: <I>$_ACCESS_DATABASE_SERVER_DATABASE_NAME</I> Was ***NOT*** Successful.<BR>");

} // [ + ] IF: Connection To MyS.Q.L. Database Server Database Name

} // [ + ] IF: Internal Application: S.Q.L. Testing Is Activated

/*
 ============================================================================================================
 +
 +
 + Backup Member Account Authentication
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 + Internal Application :: Backup Login
 +
 ============================================================================================================
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

} // [ + ] IF: Internal Application: Backup Login Is Activated

echo ("
	</BODY>
</HTML>
");
?>