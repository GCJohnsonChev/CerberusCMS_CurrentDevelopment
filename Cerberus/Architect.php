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
 + - File Location: Master Root Directory->Root Directory->Architect.php
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
 +
 + [ ^ ] Cerberus Content Management System :: Architect Application
 +
 +
 +
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
 + [ @ ] Global Variables
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 + Local Server Variables
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Local Server Date, Time and Referrer
 ============================================================================================================
*/

$_GLOBAL_LOCAL_SERVER_DATE								= date("l, F j, Y g:i:s A");
$_GLOBAL_LOCAL_SERVER_DATE_WITH_SEPARATION						= date("l:F:j:Y:h:i:s:A");
$_GLOBAL_LOCAL_SERVER_DATE_RFC								= date("r");
$_GLOBAL_LOCAL_SERVER_DATE_HOURS							= date("h");
$_GLOBAL_LOCAL_SERVER_DATE_MINUTES							= date("i");
$_GLOBAL_LOCAL_SERVER_DATE_SECONDS							= date("s");
$_GLOBAL_LOCAL_SERVER_HTTP_REFERRER							= $_SERVER['HTTP_REFERER'];

/*
 ============================================================================================================
 +
 + Remote Server Variables
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Remote Server Connection
 ============================================================================================================
*/

$_GLOBAL_REMOTE_SERVER_ADDRESS								= $_SERVER['REMOTE_ADDR'];
$_GLOBAL_REMOTE_SERVER_HOSTNAME								= $_SERVER['REMOTE_HOST'];
$_GLOBAL_REMOTE_SERVER_PORT								= $_SERVER['REMOTE_PORT'];
$_GLOBAL_REMOTE_USER									= $_SERVER['REMOTE_USER'];

/*
 ============================================================================================================
 +
 + Local Server Protocol Variables
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Local Server Connection Information Protocol Variables
 ============================================================================================================
*/

$_GLOBAL_LOCAL_SERVER_GATEWAY_INTERFACE							= $_SERVER['GATEWAY_INTERFACE'];
$_GLOBAL_LOCAL_SERVER_ADDRESS								= $_SERVER['SERVER_ADDR'];
$_GLOBAL_LOCAL_SERVER_NAME								= $_SERVER['SERVER_NAME'];
$_GLOBAL_LOCAL_SERVER_SOFTWARE								= $_SERVER['SERVER_SOFTWARE'];
$_GLOBAL_LOCAL_SERVER_PROTOCOL								= $_SERVER['SERVER_PROTOCOL'];

/*
 ============================================================================================================
 + Local Server Connection Request Protocol Variables
 ============================================================================================================
*/

$_GLOBAL_LOCAL_SERVER_REQUEST_METHOD							= $_SERVER['REQUEST_METHOD'];
$_GLOBAL_LOCAL_SERVER_REQUEST_TIME							= $_SERVER['REQUEST_TIME'];
$_GLOBAL_LOCAL_SERVER_REQUEST_TIME_FLOAT						= $_SERVER['REQUEST_TIME_FLOAT'];
$_GLOBAL_LOCAL_SERVER_QUERY_STRING							= $_SERVER['QUERY_STRING'];
$_GLOBAL_LOCAL_SERVER_DOCUMENT_ROOT							= $_SERVER['DOCUMENT_ROOT'];

/*
 ============================================================================================================
 + Local Server Hyper-Text-Transfer-Protocol Variables
 ============================================================================================================
*/

$_GLOBAL_LOCAL_SERVER_HTTP_ACCEPT							= $_SERVER['HTTP_ACCEPT'];
$_GLOBAL_LOCAL_SERVER_HTTP_ACCEPT_CHARACTER_SET						= $_SERVER['HTTP_ACCEPT_CHARSET'];
$_GLOBAL_LOCAL_SERVER_HTTP_ACCEPT_ENCODING						= $_SERVER['HTTP_ACCEPT_ENCODING'];
$_GLOBAL_LOCAL_SERVER_HTTP_ACCEPT_LOADING						= $_SERVER['HTTP_ACCEPT_LOADING'];
$_GLOBAL_LOCAL_SERVER_HTTP_ACCEPT_LANGUAGE						= $_SERVER['HTTP_ACCEPT_LANGUAGE'];
$_GLOBAL_LOCAL_SERVER_HTTP_CONNECTION_TYPE						= $_SERVER['HTTP_CONNECTION'];
$_GLOBAL_LOCAL_SERVER_HTTP_HOST								= $_SERVER['HTTP_HOST'];
$_GLOBAL_LOCAL_SERVER_HTTP_REFERRER							= $_SERVER['HTTP_REFERER'];
$_GLOBAL_LOCAL_SERVER_HTTP_USER_AGENT							= $_SERVER['HTTP_USER_AGENT'];

/*
 ============================================================================================================
 +
 +
 + [ @ ] System Configuration Settings
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 + File Inclusion :: System :: Configuration
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + File Inclusion :: System :: Configuration :: Global Configuration File
 ============================================================================================================
*/

include_once("./System/Configuration/Global_Configuration.php");

/*
 ============================================================================================================
 +
 +
 + [ @ ] Hyper-Text-Markup-Language Document-Data Generation: Start
 +
 +
 ============================================================================================================
*/

echo ("<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01 Transitional//EN\" \"http://www.w3.org/TR/html4/loose.dtd\">

<HTML>
	<HEAD>
		<TITLE>$_PROJECT_STRING_NAME_EXTENDED - Architect => Installation Process</TITLE>
		<META HTTP-EQUIV=\"Content-Type\" CONTENT=\"text/html;charset=utf-8\">
		<LINK REL=\"stylesheet\" HREF=\"./Theme/Global/Style_Sheet/Style.css\" TYPE=\"text/css\">
	</HEAD>

	<BODY>
		<TABLE WIDTH=\"100%\"><TR><TD VALIGN=\"top\">
");

/*
 ============================================================================================================
 +
 + Installation Form
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Installation Form :: Post Variables
 ============================================================================================================
*/

$_ARCHITECT_INSTALL_FORM_POST_DATABASE_SERVER_HOSTNAME							= $_POST['Architect_SQL_Database_Server_HostName'];
$_ARCHITECT_INSTALL_FORM_POST_DATABASE_SERVER_USERNAME							= $_POST['Architect_SQL_Database_Server_UserName'];
$_ARCHITECT_INSTALL_FORM_POST_DATABASE_SERVER_PASSWORD							= $_POST['Architect_SQL_Database_Server_Password'];
$_ARCHITECT_INSTALL_FORM_POST_DATABASE_SERVER_DATABASE_NAME						= $_POST['Architect_SQL_Database_Server_Database_Name'];
$_ARCHITECT_INSTALL_FORM_POST_DATABASE_SERVER_DATABASE_NAME_TABLE_PREFIX				= $_POST['Architect_SQL_Database_Server_Database_Name_Table_Prefix'];
$_ARCHITECT_INSTALL_FORM_POST_PHP_ENGINE_VERSION							= $_POST['Architect_PHP_Engine_Version'];
$_ARCHITECT_INSTALL_FORM_POST_ELECTRONIC_MAIL_ADDRESS_SYSTEM_ADMINISTRATOR				= $_POST['Architect_Electronic_Mail_Address_System_Administrator'];
$_ARCHITECT_INSTALL_FORM_POST_ELECTRONIC_MAIL_ADDRESS_SYSTEM_ROOT					= $_POST['Architect_Electronic_Mail_Address_System_Root'];
$_ARCHITECT_INSTALL_FORM_POST_ELECTRONIC_MAIL_ADDRESS_SYSTEM_SERVICES					= $_POST['Architect_Electronic_Mail_Address_System_Services'];
$_ARCHITECT_INSTALL_FORM_POST_SYSTEM_SERVICES_ENCRYPTION_STATUS_PGP_ELECTRONIC_MAIL_MESSAGE		= $_POST['Architect_System_Services_Encryption_Status_PGP_Electronic_Mail_Message'];
$_ARCHITECT_INSTALL_FORM_POST_SYSTEM_SERVICES_ENCRYPTION_ELECTRONIC_MAIL_MESSAGE_PGP_KEY_PANEL_PUBLIC	= $_POST['Architect_System_Services_Encryption_Electronic_Mail_Message_PGP_Key_Panel_Public'];
$_ARCHITECT_INSTALL_FORM_POST_URL_SECURE								= $_POST['Architect_URL_Secure'];
$_ARCHITECT_INSTALL_FORM_POST_URL_SECURE_SSL								= $_POST['Architect_URL_Secure_SSL'];
$_ARCHITECT_INSTALL_FORM_POST_URL_SECURE_OPENSSL							= $_POST['Architect_URL_Secure_openssl'];
$_ARCHITECT_INSTALL_FORM_POST_URL_SECURE_TLS								= $_POST['Architect_URL_Secure_TLS'];
$_ARCHITECT_INSTALL_FORM_POST_URL_CLEARTEXT								= $_POST['Architect_URL_ClearText'];

/*
 ============================================================================================================
 + Database Create Form :: Post Variables
 ============================================================================================================
*/

$_ARCHITECT_INSTALL_FORM_POST_CREATE_DATABASE_SERVER_DATABASE_HOSTNAME					= $_POST['Architect_Create_SQL_Database_Server_Database_HostName'];
$_ARCHITECT_INSTALL_FORM_POST_CREATE_DATABASE_SERVER_DATABASE_USERNAME					= $_POST['Architect_Create_SQL_Database_Server_Database_UserName'];
$_ARCHITECT_INSTALL_FORM_POST_CREATE_DATABASE_SERVER_DATABASE_PASSWORD					= $_POST['Architect_Create_SQL_Database_Server_Database_Password'];
$_ARCHITECT_INSTALL_FORM_POST_CREATE_DATABASE_SERVER_DATABASE_NAME					= $_POST['Architect_Create_SQL_Database_Server_Database_Name'];
$_ARCHITECT_INSTALL_FORM_POST_CREATE_DATABASE_SERVER_DATABASE_NAME_DATABASE_TABLE_PREFIX		= $_POST['Architect_Create_SQL_Database_Server_Database_Name_Table_Prefix'];

/*
 ============================================================================================================
 + Retrieve File Contents From :: System Files
 ============================================================================================================
*/

$_ARCHITECT_INSTALL_FORM_GET_FILE_CONTENTS_SYSTEM_FILE_ARCHITECT					= file_get_contents("./$_INTERNAL_FILE_ARCHITECT");
$_ARCHITECT_INSTALL_FORM_GET_FILE_CONTENTS_SYSTEM_FILE_CONFIGURATION					= file_get_contents("./System/Configuration/Global_Configuration.php");
$_ARCHITECT_INSTALL_FORM_GET_FILE_CONTENTS_SYSTEM_FILE_DATABASE_SERVER_CLASS_MySQL_STANDARD		= file_get_contents("./System/Configuration/Global_SQL_Server_Database_Class_MySQL_Standard.php");
$_ARCHITECT_INSTALL_FORM_GET_FILE_CONTENTS_SYSTEM_FILE_DATABASE_SERVER_CLASS_MySQL_IMPROVED		= file_get_contents("./System/Configuration/Global_SQL_Server_Database_Class_MySQL_Improved.php");
$_ARCHITECT_INSTALL_FORM_GET_FILE_CONTENTS_SYSTEM_FILE_KERNEL						= file_get_contents("./$_INTERNAL_FILE_KERNEL");

/*
 ============================================================================================================
 + IF: Installation Form Has Not Posted, Show Installation Form
 ============================================================================================================
*/

if (!$_ARCHITECT_INSTALL_FORM_POST_DATABASE_SERVER_HOSTNAME) {

echo ("
		<HR><CENTER><BIG><B>[ <A HREF=\"$_PROJECT_SERVER_URL_SOURCEFORGE_SECURE/files/Documentation/\" TARGET=\"_NEW\" TITLE=\":: Read The $_PROJECT_STRING_NAME_EXTENDED Architect Installation Documentation ::\">Architect Installation Documentation</A> ]</B></BIG></CENTER><HR>
		<BR>
		<FORM ACTION=\"?\" METHOD=\"post\">
		Database Server Connection Settings<HR>
		* <I>S.Q.L. Database Server Host-Name</I>:<BR>
		[ Usually: 'localhost' ]<BR>
			<INPUT TYPE=\"TEXT\" NAME=\"Architect_SQL_Database_Server_HostName\" VALUE=\"localhost\"><BR>
		* <I>S.Q.L. Database Server Access User-Name</I>:<BR>
			<INPUT TYPE=\"TEXT\" NAME=\"Architect_SQL_Database_Server_UserName\"><BR>
		* <I>S.Q.L. Database Server Access Password</I>:<BR>
			<INPUT TYPE=\"password\" NAME=\"Architect_SQL_Database_Server_Password\"><BR>
		* <I>S.Q.L. Database Server Database Name</I>:<BR>
			<INPUT TYPE=\"TEXT\" NAME=\"Architect_SQL_Database_Server_Database_Name\"><BR>
		* <I>S.Q.L. Database Server Name Table' Prefix</I>:<BR>
		[ Example: <I>'MySQLDatabaseTables'</I> ]<BR>
			<INPUT TYPE=\"TEXT\" NAME=\"Architect_SQL_Database_Server_Database_Name_Table_Prefix\"><BR><BR>

		Pre-Hyper-Text-Post-Processor Engine Settings<HR>
		* <I>Pre-Hyper-Text-Post-Processor Engine Version Number</I>:<BR>
			<INPUT TYPE=\"TEXT\" NAME=\"Architect_PHP_Engine_Version\" VALUE=\"5\" MAXLENGTH=\"1\"><BR><BR>

		Default Encryption Settings<HR>
		* <I>Enable or Disable System-Level Electronic Mail Message Pretty-Good-Privacy Encryption Now ? </I>:<BR>
			<SELECT NAME=\"Architect_System_Services_Encryption_Status_PGP_Electronic_Mail_Message\">
				<OPTION VALUE=\"1\">On</OPTION>
				<OPTION VALUE=\"0\">Off</OPTION>
			</SELECT><BR>
			System-Level Pretty-Good-Privacy Public Key Panel:<BR>
			<TEXTAREA ROWS=\"20\" COLS=\"150\" NAME=\"Architect_System_Services_Encryption_Electronic_Mail_Message_PGP_Key_Panel_Public\" MAXLENGTH=\"4096\">Paste-In The Public Pretty-Good-Privacy Key Panel Here... Maximum Panel Length: 4096 BITS / Characters With Panel Armor.</TEXTAREA><BR><BR>

		System Electronic Mail Address Settings<HR>
		* <I>Server Administrator Electronic Mail Address</I>:<BR>
		[ For System / Activity Notifications ]<BR>
			<INPUT TYPE=\"text\" NAME=\"Architect_Electronic_Mail_Address_System_Administrator\"><BR><BR>
		* <I>System Services Root Administrator Electronic Mail Address</I>:<BR>
		[ For System / Activity Notifications ]<BR>
			<INPUT TYPE=\"text\" NAME=\"Architect_Electronic_Mail_Address_System_Root\"><BR><BR>
		* <I>Server Services Electronic Mail Address</I>:<BR>
		[ For System / Activity Notifications ]<BR>
			<INPUT TYPE=\"text\" NAME=\"Architect_Electronic_Mail_Address_System_Services\"><BR><BR>

		System Hyper-Text-Transfer-Protocol Settings<HR>
		* <I>Secure Uniform Resource Locator With Path-To-Kernel Directory</I>:<BR>
		[ General Secure Uniform Resource Location, Example: $_PROJECT_SERVER_URL_SECURE/$_PROJECT_STRING_NAME_SHORT ]<BR>
			<INPUT TYPE=\"TEXT\" NAME=\"Architect_URL_Secure\"><BR>
		[ Secure Sockets Layer ( S.S.L. ) Uniform Resource Location, Example: https://SSL.TinkeSoftware.com/Cerberus ]<BR>
			<INPUT TYPE=\"TEXT\" NAME=\"Architect_URL_Secure_SSL\"><BR>
		[ Open Secure Sockets Layer ( OpenS.S.L. ) Uniform Resource Location, Example: https://OpenSSL.TinkeSoftware.com/Cerberus ]<BR>
			<INPUT TYPE=\"TEXT\" NAME=\"Architect_URL_Secure_openssl\"><BR>
		[ Transport Layer Security Uniform Resource Location, Example: https://TLS.TinkeSoftware.com/Cerberus ]<BR>
			<INPUT TYPE=\"TEXT\" NAME=\"Architect_URL_Secure_TLS\"><BR>
		* <I>Clear-Text Uniform Resource Locator With Path-To-$_PROJECT_STRING_NAME_SHORT Directory</I>:<BR>
		[ Example: http://TinkeSoftware.com/Cerberus ]<BR>
			<INPUT TYPE=\"TEXT\" NAME=\"Architect_URL_ClearText\"><BR>
			<INPUT TYPE=\"submit\" VALUE=\"Start Installation\">
		</FORM><BR><BR>

		* <I>Current Kernel File: $_INTERNAL_FILE_KERNEL</I><BR>
		<FORM>
			<TEXTAREA ROWS=\"20\" COLS=\"150\">$_ARCHITECT_INSTALL_FORM_GET_FILE_CONTENTS_SYSTEM_FILE_KERNEL</TEXTAREA>
		</FORM><BR><BR>

		* <I>Current Global System Configuration Strings</I>:<BR>
		<FORM>
			<TEXTAREA ROWS=\"20\" COLS=\"150\">$_ARCHITECT_INSTALL_FORM_GET_FILE_CONTENTS_SYSTEM_FILE_CONFIGURATION</TEXTAREA>
		</FORM><BR><BR>

		* <I>Current Global System Database Server Class File For My Structured-Query-Language :: Standard Driver</I>:<BR>
		<FORM>
			<TEXTAREA ROWS=\"20\" COLS=\"150\">$_ARCHITECT_INSTALL_FORM_GET_FILE_CONTENTS_SYSTEM_FILE_DATABASE_SERVER_CLASS_MySQL_STANDARD</TEXTAREA>
		</FORM><BR><BR>

		* <I>Current Global System Database Server Class File For My Structured-Query-Language :: Improved Driver</I>:<BR>
		<FORM>
			<TEXTAREA ROWS=\"20\" COLS=\"150\">$_ARCHITECT_INSTALL_FORM_GET_FILE_CONTENTS_SYSTEM_FILE_DATABASE_SERVER_CLASS_MySQL_IMPROVED</TEXTAREA>
		</FORM><BR><BR>

		<B>Pre-Installation Notes</B><HR>
		<B>Directory and File Permissions Notes</B><BR>
		[&nbsp;!&nbsp;]&nbsp;*Nix Server Users ( Linux, Unix, B.S.D., G.N.U., etcetera. ): Please <A HREF=\"https://en.wikipedia.org/wiki/Chmod\" TARGET=\"_NEW\" TITLE=\":: Open & Display The Wikipedia Entry For :: Access Control List / Change-Mode ( CHMOD ) ::\">Change-Mode ( CHMOD )</A> the following<BR>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;directories, sub-directories and each file within these directories to the correct read and write file permissions before proceeding with this installation:<BR>
		[&nbsp;*&nbsp;]&nbsp;=>&nbsp;Applications<BR>
		[&nbsp;*&nbsp;]&nbsp;=>&nbsp;Architect<BR>
		[&nbsp;*&nbsp;]&nbsp;=>&nbsp;Download<BR>
		[&nbsp;*&nbsp;]&nbsp;=>&nbsp;Maintenance<BR>
		[&nbsp;*&nbsp;]&nbsp;=>&nbsp;Member<BR>
		[&nbsp;*&nbsp;]&nbsp;=>&nbsp;System<BR>
		[&nbsp;*&nbsp;]&nbsp;=>&nbsp;Temporary<BR>
		[&nbsp;*&nbsp;]&nbsp;=>&nbsp;Theme<BR>
		[&nbsp;*&nbsp;]&nbsp;=>&nbsp;Upload<BR><BR>

		<B>Overview :: Microsoft &#8482; Windows Server Operating System</B><BR>
		[&nbsp;*&nbsp;]&nbsp;=>&nbsp;Applications<BR>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Read Directory and Read Files Only :: No Overwriting Existing Files :: Upload Permitted :: Delete / Unlink Not Permitted<BR>
		[&nbsp;*&nbsp;]&nbsp;=>&nbsp;Architect<BR>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Read Directory and Read Files Only :: No Overwriting Existing Files :: Upload Not Permitted :: Delete / Unlink Permitted<BR>
		[&nbsp;*&nbsp;]&nbsp;=>&nbsp;Download<BR>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Read Directory and Read Files Only :: No Overwriting Existing Files :: Upload Permitted :: Delete / Unlink Permitted<BR>
		[&nbsp;*&nbsp;]&nbsp;=>&nbsp;Maintenance<BR>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Read Directory and Read Files Only :: No Overwriting Existing Files :: Delete / Unlink Not Permitted<BR>
		[&nbsp;*&nbsp;]&nbsp;=>&nbsp;Member<BR>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Read Directory and Read Files Only :: No Overwriting Existing Files :: Upload Permitted :: Delete / Unlink Permitted<BR>
		[&nbsp;*&nbsp;]&nbsp;=>&nbsp;System<BR>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Read Directory and Read Files Only :: No Overwriting Existing Files :: Upload Not Permitted :: Delete / Unlink Not Permitted<BR>
		[&nbsp;*&nbsp;]&nbsp;=>&nbsp;Temporary<BR>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Read Directory and Read Files Only :: No Overwriting Existing Files :: Upload Permitted :: Delete / Unlink Permitted<BR>
		[&nbsp;*&nbsp;]&nbsp;=>&nbsp;Theme<BR>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Read Directory and Read Files Only :: No Overwriting Existing Files :: Upload Permitted :: Delete / Unlink Not Permitted<BR>
		[&nbsp;*&nbsp;]&nbsp;=>&nbsp;Upload<BR>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Read Directory and Read Files Only :: No Overwriting Existing Files :: Upload Permitted :: Delete / Unlink Permitted<BR><BR>

		<B>Overview :: Berkley Software Development, G.N.U. Not Unix, Linux and Unix Operating Systems</B><BR>
		[&nbsp;*&nbsp;]&nbsp;=>&nbsp;Applications<BR>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Read Directory and Read Files Only :: No Overwriting Existing Files :: Upload Permitted :: Delete / Unlink Not Permitted<BR>
		[&nbsp;*&nbsp;]&nbsp;=>&nbsp;Architect<BR>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Read Directory and Read Files Only :: No Overwriting Existing Files :: Upload Not Permitted :: Delete / Unlink Permitted<BR>
		[&nbsp;*&nbsp;]&nbsp;=>&nbsp;Download<BR>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Read Directory and Read Files Only :: No Overwriting Existing Files :: Upload Permitted :: Delete / Unlink Permitted<BR>
		[&nbsp;*&nbsp;]&nbsp;=>&nbsp;Maintenance<BR>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Read Directory and Read Files Only :: No Overwriting Existing Files :: Upload Not Permitted :: Delete / Unlink Not Permitted<BR>
		[&nbsp;*&nbsp;]&nbsp;=>&nbsp;Member<BR>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Read Directory and Read Files, No Overwriting Existing Files :: Delete / Unlink Permitted<BR>
		[&nbsp;*&nbsp;]&nbsp;=>&nbsp;System<BR>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Read Directory and Read Files Only :: No Overwriting Existing Files :: Upload Not Permitted :: Delete / Unlink Not Permitted<BR>
		[&nbsp;*&nbsp;]&nbsp;=>&nbsp;Temporary<BR>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Read Directory and Read Files Only :: No Overwriting Existing Files :: Upload Permitted :: Delete / Unlink Permitted<BR>
		[&nbsp;*&nbsp;]&nbsp;=>&nbsp;Theme<BR>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Read Directory and Read Files Only :: No Overwriting Existing Files :: Upload Permitted :: Delete / Unlink Not Permitted<BR>
		[&nbsp;*&nbsp;]&nbsp;=>&nbsp;Upload<BR>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Read Directory and Read Files Only :: No Overwriting Existing Files :: Upload Permitted :: Delete / Unlink Permitted<BR><BR>

		<B>Detailed Directory and File Permissions</B><BR>
		Each specific Directory, Sub-Directory and File requires the correct file permissions before installation so as to completely secure the directory and files within that specific directory from writing or uploading to that specific directory.<BR>
		For instance: The ./Applications/Administration/ directory should be set to:<BR>
		Read Directory and Read Files Only :: Upload Not Permitted :: Writing To Existing Files Not Permitted :: Delete / Unlink Not Permitted<BR><BR>

		[&nbsp;!&nbsp;]&nbsp;*Nix Server Users ( Linux, Unix, B.S.D., G.N.U., etc. ): Please refer to the $_PROJECT_STRING_NAME_EXTENDED Architect Installation Manual for a complete list of file permissions that should be applied to each individual file.<BR><BR>
		[&nbsp;!&nbsp;]&nbsp;This Architect Installation Application is capable of setting the correct file permissions to each directory and file within this system. Click [ <A HREF=\"?InternalApplication&#61;File_Permissions\" TITLE=\":: Execute The File Permissions Settings Loop ::\">here</A> ] to run the File Permissions Loop.<BR>
		[&nbsp;!&nbsp;]&nbsp;Microsoft Windows Server Users: All of $_PROJECT_STRING_NAME_EXTENDED' Files are set to the 'Read Only' flag by default. In order to install $_PROJECT_STRING_NAME_EXTENDED correctly you must remove the 'Read Only' flag on each file listed in the Architect Installation Walkthrough.<BR>
		[&nbsp;!&nbsp;]&nbsp;If you would like additional security for the Administration Control Panel please configure an <I>.htaccess</I> file and then install that configured <I>.htaccess</I> file into the <I>./Application/Administration/</I> directory before proceeding with this installation.<BR><BR>

		<B>Digital Information Security Notes</B><HR>
		[&nbsp;!&nbsp;]&nbsp;$_PROJECT_STRING_NAME_EXTENDED' programming code has been tested manually as well as by vulnerability and exploit scanning software<BR>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;and the entire system has passed checks against all rudimentary vulnerabilities and exploit techniques, such as:<BR><BR>

		<B>Data Sanitization</B><BR>
		[&nbsp;*&nbsp;]&nbsp;Automatic Directory Listing Denial<BR>
		[&nbsp;*&nbsp;]&nbsp;Automatic GET and POST Sanitization<BR>
		[&nbsp;*&nbsp;]&nbsp;Automatic Variable Sanitization<BR><BR>

		<B>Injections</B><BR>
		[&nbsp;*&nbsp;]&nbsp;Structured-Query-Language Code Injection<BR>
		[&nbsp;*&nbsp;]&nbsp;Cookie Injection<BR>
		[&nbsp;*&nbsp;]&nbsp;Cross Server Injection<BR>
		[&nbsp;*&nbsp;]&nbsp;Mixed Information Injection<BR>
		[&nbsp;*&nbsp;]&nbsp;Hyper-Text-Markup-Language Character Injection<BR>
		[&nbsp;*&nbsp;]&nbsp;Lightweight Directory Access Protocol Injection<BR>
		[&nbsp;*&nbsp;]&nbsp;Programming Code Injection<BR>
		[&nbsp;*&nbsp;]&nbsp;Operating System Command Injection<BR>
		[&nbsp;*&nbsp;]&nbsp;Arbitrary Code Injection<BR>
		[&nbsp;*&nbsp;]&nbsp;Cross Site Scripting<BR><BR>

		<B>Information and Data Tampering</B><BR>
		[&nbsp;*&nbsp;]&nbsp;Data Tampering<BR>
		[&nbsp;*&nbsp;]&nbsp;Cookie Tampering<BR>
		[&nbsp;*&nbsp;]&nbsp;File Swapping<BR>
		[&nbsp;*&nbsp;]&nbsp;Internet Protocol Address Tampering<BR>
		[&nbsp;*&nbsp;]&nbsp;Hyper-Text-Transfer-Protocol Verb Tampering<BR><BR>

		<B>Programming Code Execution</B><BR>
		[&nbsp;*&nbsp;]&nbspRemote Code Execution<BR><BR>

		<B>File and Directory Handling</B><BR>
		[&nbsp;*&nbsp;]&nbsp;Local File Inclusion<BR>
		[&nbsp;*&nbsp;]&nbsp;Remote File Inclusion<BR>
		[&nbsp;*&nbsp;]&nbsp;Directory Traversal<BR>
		[&nbsp;*&nbsp;]&nbsp;Fake File Extensions<BR>
		[&nbsp;*&nbsp;]&nbsp;Large File Upload<BR>
		[&nbsp;*&nbsp;]&nbsp;Unrestricted File Upload<BR><BR>

		<B>Buffers</B><BR>
		[&nbsp;*&nbsp;]&nbsp;Buffer Overflow<BR>
		[&nbsp;*&nbsp;]&nbsp;Buffer Underrun<BR>
		[&nbsp;*&nbsp;]&nbsp;Integer Underrun<BR>
		[&nbsp;*&nbsp;]&nbsp;Integer Overflow<BR><BR>

		<B>Web Server Origins</B><BR>
		[&nbsp;*&nbsp;]&nbsp;Cross Request Forgery<BR>
		[&nbsp;*&nbsp;]&nbsp;Cross Site Request Forgery<BR>
		[&nbsp;*&nbsp;]&nbsp;Cross Origin Resources<BR><BR>

		<B>Configurations</B><BR>
		[&nbsp;*&nbsp;]&nbsp;Security Misconfigurations<BR><BR>

		<B>Extensible Markup Language</B><BR>
		[&nbsp;*&nbsp;]&nbsp;Extensible Markup Language External Entity Processing<BR>
		[&nbsp;*&nbsp;]&nbsp;Extensible Markup Language External Entities<BR><BR>

		<B>Password Storage</B><BR>
		[&nbsp;*&nbsp;]&nbsp;Password Decryption<BR><BR>

		<B>Data Exfiltration</B><BR>
		[&nbsp;*&nbsp;]&nbsp;Data Mining and Exfiltration<BR>
		[&nbsp;*&nbsp;]&nbsp;Encapsulation<BR>
		[&nbsp;*&nbsp;]&nbsp;Cross Uniform-Resource-Location Poisoning<BR>
		[&nbsp;*&nbsp;]&nbsp;Hyper-Text-Transfer-Protocol Response Splitting<BR><BR>

		<B>Data Storage</B><BR>
		[&nbsp;*&nbsp;]&nbsp;Insecure Cryptographic Storage<BR>
		[&nbsp;*&nbsp;]&nbsp;Insecure Digest<BR>
		[&nbsp;*&nbsp;]&nbsp;Insecure Direct Object Referencing<BR>
		[&nbsp;*&nbsp;]&nbsp;Sensitive Data Exposure<BR><BR>

		<B>Denial of Service</B><BR>
		[&nbsp;*&nbsp;]&nbsp;Denial of Service Through RAW Connection<BR>
		[&nbsp;*&nbsp;]&nbsp;Denial of Service Through Ping<BR>
		[&nbsp;*&nbsp;]&nbsp;Denial of Service Through Hyper-Text-Transfer-Protocol Code<BR><BR>

		<B>List of Digital Vulnerability Scanning Software Used</B><BR>
		[&nbsp;*&nbsp;]&nbsp;Acunetix<BR>
		[&nbsp;*&nbsp;]&nbsp;beSecure<BR>
		[&nbsp;*&nbsp;]&nbsp;Burp Suite<BR>
		[&nbsp;*&nbsp;]&nbsp;Nessus<BR>
		[&nbsp;*&nbsp;]&nbsp;NMap<BR>
		[&nbsp;*&nbsp;]&nbsp;METASploit<BR><BR>

		<B>List of Programming Code Vulnerability Scanning Software Used</B><BR>
		[&nbsp;*&nbsp;]&nbsp;CodeHax<BR><BR>

		[&nbsp;!&nbsp;]&nbsp;Please keep this server software, this server operating system kernels and its applications up-to-date as well as set server security policies that comply with security standards to prevent any exploitation of the data on this server.<BR>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;It is up to the Administrator of this Web Server that is running $_PROJECT_STRING_NAME_EXTENDED to install $_PROJECT_STRING_NAME_EXTENDED correctly by following each of the important steps stated above<BR>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;as well as all of the steps outlined in the documentation file for this project - not doing so may leave the Internal System open to attacks. Double check the steps before proceeding.<BR><BR>

		[&nbsp;!&nbsp;]&nbsp;This Installation Application has not been secured from vulnerabilities. Do not leave this Installation Web Application on a live server for longer than is needed to install $_PROJECT_STRING_NAME_EXTENDED.<BR><BR>

		[&nbsp;!&nbsp;]&nbsp;If you are unable to install the Structured-Query-Language Tables automatically by this application, please click [ <A HREF=\"./Architect/MySQL/MySQL_Generator.php\" TITLE=\":: Open & Display The Structured-Query-Language Data Generator Application ::\" TARGET=\"_NEW\">here</A> ] to manually generate the S.Q.L. Structure and S.Q.L. Data.<BR>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Once the Structured-Query-Language Table Structure and its data is generated correctly, copy the Structured-Query-Language Tables with generated Table Prefix Name and then manually paste the generated Structured-Query-Language Data Structure into your server Structured-Query-Language Manager / Editor.<BR><BR>

		<B>Pre-Installation Tools</B><HR>
		=>&nbsp;<A HREF=\"?InternalApplication&#61;Create_Database\" TARGET=\"_NEW\" TITLE=\":: Open & Display The Internal Application :: Structured-Query-Language Database Server Name Creator ::\">Structured-Query-Language Database Server Name Creator</A><BR>
		=>&nbsp;<A HREF=\"./Architect/MySQL/MySQL_Generator.php\" TARGET=\"_NEW\" TITLE=\":: Open & Display The Internal Application :: Structured-Query-Language Database Table Structure Generator ::\">Structured-Query-Language Table Structure Generator</A><BR>
		=>&nbsp;<A HREF=\"./Architect/ToolKit/Installation_ToolKit.php\" TARGET=\"_NEW\" TITLE=\":: Open & Display The Post-Installation ToolKit ::\">Post-Installation Toolkit</A><BR>
		=>&nbsp;<A HREF=\"?InternalApplication&#61;File_Permissions\" TITLE=\":: Open & Display The Internal Application :: Change-Mode ( CHMOD ) File Permissions Loop ::\">File Permissions Loop</A><BR>
		=>&nbsp;<A HREF=\"./Maintenance/Diagnostics/$_INTERNAL_FILE_MAINTENANCE_DIAGNOSTICS\" TARGET=\"_NEW\" TITLE=\":: Open & Display The System Diagnostics Application ::\">System Diagnostics Application</A><BR><BR>

		<B>Post-Installation Tools</B><HR>
		=>&nbsp;<A HREF=\"?InternalApplication&#61;Install_Defaults\" TARGET=\"_NEW\" TITLE=\":: Open & Display The Administration Account Installer & Default Database Server Data Installer ::\">Database Data Installer</A><BR><BR>

		<B>Server Software, Server Software Engine Versions and Extended Information</B><HR>
		<B>Detailed Server Software and User-Interface Information:</B><BR>
		=>&nbsp;<A HREF=\"?InternalApplication&#61;ServerSoftware_Information\" TITLE=\":: View Detailed Information About What Server Software Versions Are Currently Running On This Web Server ::\">Information About What Server Software Versions Are Currently Running On This Web Server</A><BR><BR>

		<B>$_PROJECT_STRING_NAME_EXTENDED Information:</B><BR>
		=>&nbsp;<A HREF=\"?InternalApplication&#61;SoftwareProject_Information\" TITLE=\":: View Detailed Information About What $_PROJECT_STRING_NAME_EXTENDED Version Is Currently Running On This Web Server ::\">Information About What $_PROJECT_STRING_NAME_EXTENDED Version Is Currently Running On This Web Server</A><BR><BR>
		
		<B>Pre-Hyper-Text-Post-Processor ( P.H.P. ) Interpreter & Zend Engine Information:</B><BR>
		=>&nbsp;<A HREF=\"?InternalApplication&#61;PHP_Information\" TITLE=\":: View Detailed Information About What Pre-Hyper-Text-Post-Processor Version Is Currently Running On This Web Server ::\">Information About What P.H.P. Server Engine Is Currently Running On This Web Server</A></B><BR>
		=>&nbsp;<A HREF=\"?InternalApplication&#61;PHP_Extensions\" TITLE=\":: View Detailed Information About What Pre-Hyper-Text-Post-Processor Server Extensions Are Currently Loaded On This Pre-Hyper-Text-Post-Processor Engine Running On This Web Server ::\">Information About What Extensions Are Currently Loaded On This Executed P.H.P. Engine</A></B><BR><BR>

		<B>Internal Documents</B><HR>
		=>&nbsp;<A HREF=\"About.txt\" TITLE=\":: Open & Display The About File ::\">About</A><BR>
		=>&nbsp;<A HREF=\"Bug_Tracker.txt\" TITLE=\":: Open & Display The Bug Tracker File ::\">Bug Tracker</A><BR>
		=>&nbsp;<A HREF=\"Change-Log.txt\" TITLE=\":: Open & Display The Change Log File ::\">Change Log</A><BR>
		=>&nbsp;<A HREF=\"File-List.txt\" TITLE=\":: Open & Display The File List Document - This Document Was Generated By The Programmers of $_PROJECT_STRING_NAME_EXTENDED, It Shows Detailed File and Directory Listings, Progress Reports On Files Within The Default $_PROJECT_STRING_NAME_EXTENDED Releases ::\">File List</A><BR>
		=>&nbsp;<A HREF=\"License.txt\" TITLE=\":: Open & Display The License File ::\">License</A><BR>
		=>&nbsp;<A HREF=\"Read_Me.txt\" TITLE=\":: Open & Display The Read Me File ::\">Read Me</A><BR>
		=>&nbsp;<A HREF=\"Security.txt\" TITLE=\":: Open & Display The Security Notes File ::\">Security Notes</A><BR>
		=>&nbsp;<A HREF=\"To-Do.txt\" TITLE=\":: Open & Display The To-Do Notes File ::\">To-Do Notes</A><BR>
		=>&nbsp;<A HREF=\"Version.txt\" TITLE=\":: Open & Display The Version Notes File ::\">Version Notes</A><BR><BR>

		<B>Hand Update and Configure These Specific Documents Before Proceeeding With This Installation:</B><BR>
		=>&nbsp;<A HREF=\"robots.txt\" TITLE=\":: Open & Display The Robots File ::\">Robots</A><BR>
		=>&nbsp;<A HREF=\"TOS-PP.txt\" TITLE=\":: Open & Display The Terms of Service & Privacy Policy File ::\">Terms of Service & Privacy Policy</A><BR><BR>
");

} else {

/*
 ============================================================================================================
 + Delete Original System Database Server Connection Configuration File
 ============================================================================================================
*/

	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Secure-Deleting Original System Configuration File...<BR>");

		unlink("./System/Configuration/Global_Server_Configuration.php");

	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Creating New System Configuration File With Installer Specifications...<BR>");

/*
 ============================================================================================================
 + Create New System Database Server Connection Configuration File
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Define New System Database Server Connection Configuration File Variables
 ============================================================================================================
*/

$_SYSTEM_CONFIGURATION_ACCESS_FILE_FILENAME						= "./System/Configuration/Global_Server_Configuration.php";
$_SYSTEM_CONFIGURATION_ACCESS_FILE_DATA								= "<?php
\$_ACCESS_DATABASE_SERVER_HOSTNAME 							= \"$_ARCHITECT_INSTALL_FORM_POST_DATABASE_SERVER_HOSTNAME\";
\$_ACCESS_DATABASE_SERVER_USERNAME 							= \"$_ARCHITECT_INSTALL_FORM_POST_DATABASE_SERVER_USERNAME\";
\$_ACCESS_DATABASE_SERVER_PASSWORD 							= \"$_ARCHITECT_INSTALL_FORM_POST_DATABASE_SERVER_PASSWORD\";
\$_ACCESS_DATABASE_SERVER_DATABASE_NAME 						= \"$_ARCHITECT_INSTALL_FORM_POST_DATABASE_SERVER_DATABASE_NAME\";
\$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX 					= \"$_ARCHITECT_INSTALL_FORM_POST_DATABASE_SERVER_DATABASE_NAME_TABLE_PREFIX\";
\$_ACCESS_PHP_ENGINE_VERSION								= \"$_ARCHITECT_INSTALL_FORM_POST_PHP_ENGINE_VERSION\";
\$_ACCESS_URL_CLEARTEXT 								= \"$_ARCHITECT_INSTALL_FORM_POST_URL_CLEARTEXT\";
\$_ACCESS_URL_SECURE									= \"$_ARCHITECT_INSTALL_FORM_POST_URL_SECURE\";
\$_ACCESS_URL_SECURE_SSL								= \"$_ARCHITECT_INSTALL_FORM_POST_URL_SECURE_SSL\";
\$_ACCESS_URL_SECURE_OPENSSL								= \"$_ARCHITECT_INSTALL_FORM_POST_URL_SECURE_OPENSSL\";
\$_ACCESS_URL_SECURE_TLS								= \"$_ARCHITECT_INSTALL_FORM_POST_URL_SECURE_TLS\";
\$_ACCESS_ELECTRONIC_MAIL_ADDRESS_SYSTEM_ADMINISTRATOR					= \"$_ARCHITECT_INSTALL_FORM_POST_ELECTRONIC_MAIL_ADDRESS_SYSTEM_ADMINISTRATOR\";
\$_ACCESS_ELECTRONIC_MAIL_ADDRESS_SYSTEM_ROOT						= \"$_ARCHITECT_INSTALL_FORM_POST_ELECTRONIC_MAIL_ADDRESS_SYSTEM_ROOT\";
\$_ACCESS_ELECTRONIC_MAIL_ADDRESS_SYSTEM_SERVICES					= \"$_ARCHITECT_INSTALL_FORM_POST_ELECTRONIC_MAIL_ADDRESS_SYSTEM_SERVICES\";
\$_SYSTEM_SETTINGS_STATUS_ENCRYPTION_PGP_ELECTRONIC_MAIL_MESSAGE			= \"$_ARCHITECT_INSTALL_FORM_POST_SYSTEM_SERVICES_ENCRYPTION_STATUS_PGP_ELECTRONIC_MAIL_MESSAGE\";
\$_SYSTEM_SETTINGS_ENCRYPTION_ELECTRONIC_MAIL_MESSAGE_PGP_KEY_PANEL_PUBLIC		= \"$_ARCHITECT_INSTALL_FORM_POST_SYSTEM_SERVICES_ENCRYPTION_ELECTRONIC_MAIL_MESSAGE_PGP_KEY_PANEL_PUBLIC\";
?>";

/*
 ============================================================================================================
 + Write Data To New System Configuration File
 ============================================================================================================
*/

$_OPEN_ACCESS_FILE_FILENAME 								= fopen($_SYSTEM_CONFIGURATION_ACCESS_FILE_FILENAME, "w");

fwrite($_OPEN_ACCESS_FILE_FILENAME, "$_SYSTEM_CONFIGURATION_ACCESS_FILE_DATA");
fclose($_OPEN_ACCESS_FILE_FILENAME);

echo ("
								<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT>&nbsp;Configuration Files Created !<BR><BR>
								&nbsp;*&nbsp;=>&nbsp;<A HREF=\"?InternalApplication&#61;Create_Database\" TITLE=\":: Create Structured-Query-Language Database ::\">Create Structured-Query-Language Database</A><BR>
								&nbsp;*&nbsp;=>&nbsp;<A HREF=\"?InternalApplication&#61;Install_Defaults\" TITLE=\":: Install Administration Account ::\">Install Administration Account</A><BR>
								&nbsp;*&nbsp;=>&nbsp;<A HREF=\"?InternalApplication&#61;Unlink_Installation\" TITLE=\":: Unlink and Secure-Delete All Installation Files ::\">Skip To Removing The Installation Files Without Installing The Administration Account</A>
");

} // [ + ] IF: Installation Variables Have Executed

/*
 ============================================================================================================
 +
 + Internal Application: Create Database
 +
 ============================================================================================================
*/

if ($_GET["InternalApplication"] == "Create_Database") {

if (!$_ARCHITECT_INSTALL_FORM_POST_CREATE_DATABASE_SERVER_DATABASE_NAME) {

echo ("

		<FORM ACTION=\"?\" METHOD=\"post\">
		Database Server Connection Settings<HR>
		* <I>S.Q.L. Database Server Database Name</I>:<BR>
			<INPUT TYPE=\"TEXT\" NAME=\"post_create_sql_database_server_hostname\" VALUE=\"localhost\"><BR>
		* <I>S.Q.L. Database Server UserName</I>:<BR>
			<INPUT TYPE=\"TEXT\" NAME=\"post_create_sql_database_server_username\" VALUE=\"Database Server UserName\"><BR>
		* <I>S.Q.L. Database Server Password</I>:<BR>
			<INPUT TYPE=\"TEXT\" NAME=\"post_create_sql_database_server_password\" VALUE=\"Database Server Password\"><BR>
		* <I>S.Q.L. Database Server Database Name Table' Prefix</I>:<BR>
			<INPUT TYPE=\"TEXT\" NAME=\"Architect_Create_SQL_Database_Server_Database_Name_Table_Prefix\" VALUE=\"Database Server Database Name Table' Prefix\"><BR>
		* <I>S.Q.L. Database Server Database Name</I>:<BR>
			<INPUT TYPE=\"TEXT\" NAME=\"Architect_Create_SQL_Database_Server_Database_Name\" VALUE=\"Database Server Database Name\"><BR>
			<INPUT TYPE=\"submit\" VALUE=\"Create Database\">
		</FORM><BR><BR>
");

} else {

/*
 ============================================================================================================
 + Connect To Specified Database Server
 ============================================================================================================
*/

	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Attempting Connection To Specified Database Server Host Name... Please Wait.<BR>");

mysql_connect($_ARCHITECT_INSTALL_FORM_POST_CREATE_DATABASE_SERVER_DATABASE_HOSTNAME, $_ARCHITECT_INSTALL_FORM_POST_CREATE_DATABASE_SERVER_DATABASE_USERNAME, $_ARCHITECT_INSTALL_FORM_POST_CREATE_DATABASE_SERVER_DATABASE_PASSWORD);

	echo ("[ Connected ]<BR>");

/*
 ============================================================================================================
 + Create Specified Database Name
 ============================================================================================================
*/

	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Creating Specified Database Name... Please Wait.<BR>");

mysql_query("CREATE DATABASE $_ARCHITECT_INSTALL_FORM_POST_CREATE_DATABASE_SERVER_DATABASE_NAME") or die(mysql_error());

/*
 ============================================================================================================
 + Connect To Created Database Server
 ============================================================================================================
*/

	echo ("[ Done ]<BR>");
	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Attempting Connection To Created Database Name: <I>$_ARCHITECT_INSTALL_FORM_POST_CREATE_DATABASE_SERVER_DATABASE_NAME</I>... Please Wait.<BR>");

mysql_select_db($_ARCHITECT_INSTALL_FORM_POST_CREATE_DATABASE_SERVER_DATABASE_NAME);

/*
 ============================================================================================================
 + Install Default S.Q.L. Structure
 ============================================================================================================
*/

	echo ("[ Done ]<BR>");
	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Installing S.Q.L. Database Server Database Structure... Please Wait.<BR>");

/*
 ============================================================================================================
 + Install Default S.Q.L. Server Database Tables
 ============================================================================================================
*/

/* Applications */

mysql_query("CREATE TABLE \"$_ARCHITECT_INSTALL_FORM_POST_CREATE_DATABASE_SERVER_DATABASE_NAME_DATABASE_TABLE_PREFIX\"_applications (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
application_file_name VARCHAR(100),
application_file_permission CHAR(1),
application_file_permission_camera CHAR(1),
application_file_permission_microphone CHAR(1),
application_file_permission_location_gps CHAR(1),
application_file_permission_location_geo CHAR(1),
application_file_permission_location_internet_protocol_address CHAR(1),
application_file_status CHAR(1),
PRIMARY KEY (id)
");

/* Custom Applications */

mysql_query("
CREATE TABLE \"$_ARCHITECT_INSTALL_FORM_POST_CREATE_DATABASE_SERVER_DATABASE_NAME_DATABASE_TABLE_PREFIX\"_applications_custom (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
custom_application_data TEXT,
custom_application_name VARCHAR(250),
custom_application_time VARCHAR(50),
PRIMARY KEY (id)
");

/* Application Links */

mysql_query("CREATE TABLE \"$_ARCHITECT_INSTALL_FORM_POST_CREATE_DATABASE_SERVER_DATABASE_NAME_DATABASE_TABLE_PREFIX\"_application_links (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
application_link_name VARCHAR(250),
application_link_row CHAR(3),
application_link_url VARCHAR(250),
PRIMARY KEY (id)
");

/* Application Panels */

mysql_query("
CREATE TABLE \"$_ARCHITECT_INSTALL_FORM_POST_CREATE_DATABASE_SERVER_DATABASE_NAME_DATABASE_TABLE_PREFIX\"_application_panels (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
panel_file_name VARCHAR(250),
panel_alignment CHAR(1),
panel_row CHAR(2),
panel_file_status CHAR(1),
panel_title VARCHAR(250),
PRIMARY KEY (id)
");

/* Articles */

mysql_query("CREATE TABLE \"$_ARCHITECT_INSTALL_FORM_POST_CREATE_DATABASE_SERVER_DATABASE_NAME_DATABASE_TABLE_PREFIX\"_articles (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
article_author VARCHAR(50),
article_data TEXT,
article_time VARCHAR(50),
article_title VARCHAR(50),
PRIMARY KEY (id)
");

/* Banned Networks */

mysql_query("CREATE TABLE \"$_ARCHITECT_INSTALL_FORM_POST_CREATE_DATABASE_SERVER_DATABASE_NAME_DATABASE_TABLE_PREFIX\"_banned_networks (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
dns_address_string VARCHAR(128),
dns_address_text TEXT,
ip_address_string VARCHAR(128),
ip_address_text TEXT,
PRIMARY KEY (id)
");

/* Comments */

mysql_query("
CREATE TABLE \"$_ARCHITECT_INSTALL_FORM_POST_CREATE_DATABASE_SERVER_DATABASE_NAME_DATABASE_TABLE_PREFIX\"_comments (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
comment_author VARCHAR(50),
comment_data TEXT,
comment_application_id CHAR(20),
comment_application_name VARCHAR(100),
comment_time VARCHAR(50),
PRIMARY KEY (id)
");

/* File Categories */

mysql_query("
CREATE TABLE \"$_ARCHITECT_INSTALL_FORM_POST_CREATE_DATABASE_SERVER_DATABASE_NAME_DATABASE_TABLE_PREFIX\"_file_categories (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
file_category_description VARCHAR(250),
file_category_time VARCHAR(50),
file_category_title VARCHAR(50),
PRIMARY KEY (id)
");

/* Files */

mysql_query("
CREATE TABLE \"$_ARCHITECT_INSTALL_FORM_POST_CREATE_DATABASE_SERVER_DATABASE_NAME_DATABASE_TABLE_PREFIX\"_files (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
file_author VARCHAR(50),
file_category VARCHAR(250),
file_description TEXT,
file_image VARCHAR(50),
file_location VARCHAR(50),
file_number_of_downloads CHAR(15),
file_time VARCHAR(50),
file_title VARCHAR(50),
file_uploader VARCHAR(50),
PRIMARY KEY (id)
");

/* Forum */

mysql_query("
CREATE TABLE \"$_ARCHITECT_INSTALL_FORM_POST_CREATE_DATABASE_SERVER_DATABASE_NAME_DATABASE_TABLE_PREFIX\"_forum_forum (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
forum_access_level CHAR(1),
forum_date VARCHAR(50),
forum_description TEXT,
forum_title VARCHAR(200),
PRIMARY KEY (id)
");

/* Forum Posts */

mysql_query("
CREATE TABLE \"$_ARCHITECT_INSTALL_FORM_POST_CREATE_DATABASE_SERVER_DATABASE_NAME_DATABASE_TABLE_PREFIX\"_forum_post (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
post_access_level CHAR(1),
post_author VARCHAR(50),
post_data TEXT,
post_date VARCHAR(50),
post_last_edit VARCHAR(50),
post_topic_id CHAR(20),
PRIMARY KEY (id)
");

/* Forum Topics */

mysql_query("
CREATE TABLE \"$_ARCHITECT_INSTALL_FORM_POST_CREATE_DATABASE_SERVER_DATABASE_NAME_DATABASE_TABLE_PREFIX\"_forum_topic (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
topic_access_level CHAR(1),
topic_date VARCHAR(50),
topic_description TEXT,
topic_forum_id CHAR(20),
topic_last_post VARCHAR(50),
topic_last_poster CHAR(20),
topic_title VARCHAR(200),
PRIMARY KEY (id)
");

/* Links */

mysql_query("
CREATE TABLE \"$_ARCHITECT_INSTALL_FORM_POST_CREATE_DATABASE_SERVER_DATABASE_NAME_DATABASE_TABLE_PREFIX\"_links (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
link_author VARCHAR(50),
link_description TEXT,
link_time VARCHAR(50),
link_title VARCHAR(50),
link_url VARCHAR(250),
PRIMARY KEY (id)
");

/* Members */

mysql_query("
CREATE TABLE \"$_ARCHITECT_INSTALL_FORM_POST_CREATE_DATABASE_SERVER_DATABASE_NAME_DATABASE_TABLE_PREFIX\"_members (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
member_access_level CHAR(1),
member_attempt_authentication CHAR(2),
member_birthdate VARCHAR(10),
member_address_cryptocurrency_bitcoin VARCHAR(200),
member_address_cryptocurrency_bitcoin_gold VARCHAR(200),
member_address_cryptocurrency_dogecoin VARCHAR(200),
member_address_cryptocurrency_ethereum VARCHAR(200),
member_address_cryptocurrency_litecoin VARCHAR(200),
member_address_cryptocurrency_mazacoin VARCHAR(200),
member_address_cryptocurrency_namecoin VARCHAR(200),
member_address_cryptocurrency_peercoin VARCHAR(200),
member_address_cryptocurrency_primecoin VARCHAR(200),
member_address_cryptocurrency_tron VARCHAR(200),
member_address_cryptocurrency_zcash VARCHAR(200),
member_address_home TEXT,
member_address_mail TEXT,
member_electronic_mail_address VARCHAR(100),
member_experience_amount TEXT,
member_gender CHAR(1),
member_image_avatar VARCHAR(100),
member_image_picture VARCHAR(100),
member_ip_address_authorized VARCHAR(50),
member_ip_address_authorization_token VARCHAR(512),
member_ip_address_last_login VARCHAR(25),
member_ip_address_log TEXT,
member_last_referrer TEXT,
member_level_rank CHAR(1),
member_location_current VARCHAR(500),
member_mood VARCHAR(100),
member_music VARCHAR(100),
member_name_first VARCHAR(100),
member_name_last VARCHAR(100),
member_name_middle VARCHAR(100),
member_name_nickname VARCHAR(100),
member_number_of_posts TEXT,
member_number_phone_area_code VARCHAR(5),
member_number_phone_cell VARCHAR(20),
member_number_phone_country_code VARCHAR(5),
member_number_phone_home VARCHAR(20),
member_number_phone_work VARCHAR(20),
member_password VARCHAR(250),
member_physical_dimensions_circumference_hand_left VARCHAR(10),
member_physical_dimensions_length_hand_left VARCHAR(10),
member_physical_dimensions_circumference_hand_right VARCHAR(10),
member_physical_dimensions_length_hand_right VARCHAR(10),
member_physical_dimensions_cirumference_waist VARCHAR(10),
member_physical_dimensions_circumference_chest VARCHAR(10),
member_physical_dimensions_circumference_arms VARCHAR(10),
member_physical_dimensions_circumference_skull_cap VARCHAR(10),
member_physical_dimensions_width_eye_bridge VARCHAR(10),
member_physical_dimensions_length_arms VARCHAR(10),
member_physical_dimensions_circumference_legs VARCHAR(10),
member_physical_dimensions_length_legs VARCHAR(10),
member_physical_dimensions_circumference_leg_left VARCHAR(10),
member_physical_dimensions_circumference_leg_right VARCHAR(10),
member_physical_dimensions_circumference_foot_left VARCHAR(10),
member_physical_dimensions_circumference_foot_right VARCHAR(10),
member_physical_dimensions_length_foot_right VARCHAR(10),
member_physical_dimensions_length_foot_left VARCHAR(10),
member_physical_color_eye VARCHAR(20),
member_physical_color_hair VARCHAR(20),
member_physical_height VARCHAR(4),
member_physical_weight VARCHAR(4),
member_profile_about TEXT,
member_profile_signature TEXT,
member_registration_date VARCHAR(100),
member_registration_details TEXT,
member_security_fingerprint_cleartext TEXT,
member_security_fingerprint_hashed TEXT,
member_security_pgp_key_panel_public TEXT,
member_security_pgp_key_panel_private TEXT,
member_settings_encryption_pgp CHAR(1),
member_settings_language VARCHAR(50),
member_settings_control_panel_audio CHAR(1),
member_settings_newsletter CHAR(1),
member_settings_theme_directory VARCHAR(25),
member_socialmedia_audio_spotify VARCHAR(250),
member_socialmedia_business_linkedin VARCHAR(250),
member_socialmedia_communications_discord VARCHAR(250),
member_socialmedia_communications_icq VARCHAR(250),
member_socialmedia_communications_skype VARCHAR(250),
member_socialmedia_communications_snapchat VARCHAR(250),
member_socialmedia_gallery_instagram VARCHAR(250),
member_socialmedia_posting_facebook VARCHAR(250),
member_socialmedia_posting_twitter VARCHAR(250),
member_socialmedia_programming_bitbucket VARCHAR(250),
member_socialmedia_programming_github VARCHAR(250),
member_socialmedia_programming_launchpad VARCHAR(250),
member_socialmedia_security_keybase VARCHAR(250),
member_socialmedia_video_youtube VARCHAR(250),
member_status_account_activation CHAR(1),
member_status_account_activation_key VARCHAR(100),
member_status_account_active CHAR(1),
member_status_account_banned CHAR(1),
member_status_account_last_active VARCHAR(250),
member_status_account_last_active_minutes VARCHAR(10),
member_status_account_locked CHAR(1),
member_url_homepage VARCHAR(250),
member_username VARCHAR(50),
PRIMARY KEY (id)
");

/* Messenger Plain-Text-File Room */

mysql_query("
CREATE TABLE \"$_ARCHITECT_INSTALL_FORM_POST_CREATE_DATABASE_SERVER_DATABASE_NAME_DATABASE_TABLE_PREFIX\"_messenger_plain_text_file_room (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
messenger_room_creation_author VARCHAR(100),
messenger_room_creation_author_device_ip_address VARCHAR(100),
messenger_room_creation_author_system_access_level VARCHAR(100),
messenger_room_creation_date VARCHAR(100),
messenger_room_name VARCHAR(100),
messenger_room_password_entry VARCHAR(100),
messenger_room_password_deletion VARCHAR(100),
messenger_room_status_visibility CHAR(1),
PRIMARY KEY (id)
");

/* Messenger Plain-Text S.Q.L. Messages */

mysql_query("
CREATE TABLE \"$_ARCHITECT_INSTALL_FORM_POST_CREATE_DATABASE_SERVER_DATABASE_NAME_DATABASE_TABLE_PREFIX\"_messenger_plain_text_messages (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
messenger_room_creation_timestamp VARCHAR(100),
messenger_room_message TEXT,
messenger_room_message_author VARCHAR(100),
messenger_room_message_author_system_access_level CHAR(1),
messenger_room_message_author_device_fingerprint VARCHAR(300),
messenger_room_message_author_device_ip_address VARCHAR(300),
messenger_room_message_author_device_remote_hostname VARCHAR(300),
messenger_room_message_author_device_remote_request_method VARCHAR(300),
messenger_room_message_author_device_remote_user_agent VARCHAR(300),
messenger_room_message_timestamp VARCHAR(100),
messenger_room_message_id TEXT,
messenger_room_name VARCHAR(100),
PRIMARY KEY (id)
");

/* Messenger Encrypted-Text-File Room */

mysql_query("
CREATE TABLE \"$_ARCHITECT_INSTALL_FORM_POST_CREATE_DATABASE_SERVER_DATABASE_NAME_DATABASE_TABLE_PREFIX\"_messenger_encrypted_text_file_room (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
messenger_room_creation_author VARCHAR(100),
messenger_room_creation_author_device_ip_address VARCHAR(100),
messenger_room_creation_author_system_access_level VARCHAR(100),
messenger_room_creation_date VARCHAR(100),
messenger_room_name VARCHAR(100),
messenger_room_password_entry VARCHAR(100),
messenger_room_password_deletion VARCHAR(100),
messenger_room_status_visibility CHAR(1),
PRIMARY KEY (id)
");

/* Messenger Encrypted-Text S.Q.L. Messages */

mysql_query("
CREATE TABLE \"$_ARCHITECT_INSTALL_FORM_POST_CREATE_DATABASE_SERVER_DATABASE_NAME_DATABASE_TABLE_PREFIX\"_messenger_encrypted_text_messages (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
messenger_room_message TEXT,
messenger_room_message_author VARCHAR(100),
messenger_room_message_author_system_access_level CHAR(1),
messenger_room_message_author_device_fingerprint VARCHAR(300),
messenger_room_message_author_device_ip_address VARCHAR(300),
messenger_room_message_author_device_remote_hostname VARCHAR(300),
messenger_room_message_author_device_remote_request_method VARCHAR(300),
messenger_room_message_author_device_remote_user_agent VARCHAR(300),
messenger_room_message_id TEXT,
messenger_room_name VARCHAR(100),
messenger_room_timestamp_message VARCHAR(100),
messenger_room_timestamp_creation VARCHAR(100),
PRIMARY KEY (id)
");

/* News Articles */

mysql_query("
CREATE TABLE \"$_ARCHITECT_INSTALL_FORM_POST_CREATE_DATABASE_SERVER_DATABASE_NAME_DATABASE_TABLE_PREFIX\"_news (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
news_author VARCHAR(50),
news_avatar VARCHAR(50),
news_data TEXT,
news_mood VARCHAR(250),
news_music VARCHAR(250),
news_rss_rfc TEXT,
news_time VARCHAR(50),
news_title VARCHAR(50),
PRIMARY KEY (id)
");

/* News Submissions */

mysql_query("
CREATE TABLE \"$_ARCHITECT_INSTALL_FORM_POST_CREATE_DATABASE_SERVER_DATABASE_NAME_DATABASE_TABLE_PREFIX\"_news_submissions (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
news_submission_author VARCHAR(50),
news_submission_data TEXT,
news_submission_time VARCHAR(50),
PRIMARY KEY (id)
");

/* Private Messages */

mysql_query("
CREATE TABLE \"$_ARCHITECT_INSTALL_FORM_POST_CREATE_DATABASE_SERVER_DATABASE_NAME_DATABASE_TABLE_PREFIX\"_private_messages (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
private_message_from VARCHAR(50),
private_message_recipient VARCHAR(50),
private_message_subject VARCHAR(250),
private_message_data TEXT,
private_message_sent_time VARCHAR(50),
PRIMARY KEY (id)
");

/* Ranks */

mysql_query("
CREATE TABLE \"$_ARCHITECT_INSTALL_FORM_POST_CREATE_DATABASE_SERVER_DATABASE_NAME_DATABASE_TABLE_PREFIX\"_ranks (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
rank_gender_male_0 VARCHAR(25),
rank_gender_male_1 VARCHAR(25),
rank_gender_male_2 VARCHAR(25),
rank_gender_male_3 VARCHAR(25),
rank_gender_male_4 VARCHAR(25),
rank_gender_female_0 VARCHAR(25),
rank_gender_female_1 VARCHAR(25),
rank_gender_female_2 VARCHAR(25),
rank_gender_female_3 VARCHAR(25),
rank_gender_female_4 VARCHAR(25),
PRIMARY KEY (id)
");

/* Settings */

mysql_query("
CREATE TABLE \"$_ARCHITECT_INSTALL_FORM_POST_CREATE_DATABASE_SERVER_DATABASE_NAME_DATABASE_TABLE_PREFIX\"_settings (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
settings_system_time_cookies VARCHAR(10),
settings_system_status_embedded_compression_gzip CHAR(1),
settings_system_status_offline_mode CHAR(1),
settings_system_status_security_module_master_sanitization CHAR(1),
settings_system_file_extension_audio VARCHAR(4),
settings_system_file_extension_image CHAR(3),
settings_system_directory_language VARCHAR(50),
settings_system_directory_theme VARCHAR(50),
settings_system_website_title VARCHAR(250),
settings_system_upload_size_private CHAR(15),
settings_system_upload_size_public CHAR(15),
settings_system_plugin_directory_location VARCHAR(50),
settings_system_plugin_directory_smileys VARCHAR(50),
settings_system_plugin_directory_safeHTML VARCHAR(50),
settings_system_plugin_directory_text_editor VARCHAR(250),
settings_system_plugin_status_location CHAR(1),
settings_system_plugin_status_safeHTML CHAR(1),
settings_system_plugin_status_text_editor CHAR(1),
PRIMARY KEY (id)
");

/* Shout Messages */

mysql_query("
CREATE TABLE \"$_ARCHITECT_INSTALL_FORM_POST_CREATE_DATABASE_SERVER_DATABASE_NAME_DATABASE_TABLE_PREFIX\"_shout_messages (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
message_author VARCHAR(50),
message_data VARCHAR(250),
message_time VARCHAR(50),
PRIMARY KEY (id)
");

/* Statistics */

mysql_query("
CREATE TABLE \"$_ARCHITECT_INSTALL_FORM_POST_CREATE_DATABASE_SERVER_DATABASE_NAME_DATABASE_TABLE_PREFIX\"_statistics (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
statistics_total_number_of_page_views CHAR(15),
statistics_installation_date VARCHAR(50),
PRIMARY KEY (id)
");

/* System Messages */

mysql_query("
CREATE TABLE \"$_ARCHITECT_INSTALL_FORM_POST_CREATE_DATABASE_SERVER_DATABASE_NAME_DATABASE_TABLE_PREFIX\"_system_message (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
message_author VARCHAR(50),
message_data TEXT,
message_member VARCHAR(50),
PRIMARY KEY (id)
");

		echo ("[ Done ]<BR>");

	echo ("[ Done ]<BR><BR>");

	echo ("[ <A HREF=\"?InternalApplication&#61;Install_Defaults\" TITLE=\":: Install Administrator and Default System Database Data ::\">Install Administrator and Data</A> ]<BR>");

} // [ + ] IF: Variables Have Executed

} // [ + ] IF: Internal Application: Create Database, Is Activated

/*
 ============================================================================================================
 +
 + Internal Application: Install Default Data
 +
 ============================================================================================================
*/

if ( $_GET["InternalApplication"] == "Install_Defaults" ) {

/*
 ============================================================================================================
 + Administration Account :: Post Variables
 ============================================================================================================
*/

$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_ELECTRONIC_MAIL_ADDRESS				= $_POST['post_administrator_electronic_mail_address'];
$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME						= $_POST['post_administrator_username'];
$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_PASSWORD_1					= $_POST['post_administrator_password_1'];
$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_PASSWORD_2					= $_POST['post_administrator_password_2'];

/*
 ============================================================================================================
 + Internal Security => Administration Account :: Post Variables :: Electronic Mail Address :: Convert String To LowerCase
 ============================================================================================================
*/

$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_ELECTRONIC_MAIL_ADDRESS				= strtolower($_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_ELECTRONIC_MAIL_ADDRESS);

/*
 ============================================================================================================
 + Internal Security => Administration Account :: Post Variables :: UserName :: Convert String To LowerCase With UpperCase First Character
 ============================================================================================================
*/

$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME						= strtolower($_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME);
$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME						= ucfirst($_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME);

/*
 ============================================================================================================
 + Internal Security => Administration Accounts Password Hashing System
 ============================================================================================================
*/

$_POST_ADMINISTRATOR_PASSWORD_3								= password_hash($_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_PASSWORD_1, PASSWORD_BCRYPT);

/*
 ============================================================================================================
 + IF: Administrator Form Has Not Posted: Display Create New Administrator Form
 ============================================================================================================
*/

if ((!$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME) || (!$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_PASSWORD_1) || (!$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_PASSWORD_2)) {

echo ("
	<HR><CENTER>Create Administration Account</CENTER><HR><BR>
	<FORM ACTION=\"?InternalApplication&#61;Install_Defaults\" METHOD=\"post\">
	Please Create Your Administration Account:<BR>
	It Is Recommended That You Use a Random Password Generator and Password Storage Application Such as KeePass Password Safe<BR>
	Please Click [&nbsp;<A HREF=\"https://KeePass.info/\" TITLE=\":: Open & Display The Official KeePass Password Safe Website ::\" TARGET=\"_NEW\">Here</A>&nbsp;] To Download and Install The KeePass Software Package ]<BR>
	* Administrator Electronic Mail Address:<BR>
	<INPUT TYPE=\"text\" NAME=\"post_administrator_electronic_mail_address\" MAXLENGTH=\"100\"><BR>	
	* Administrator Username:<BR>
	<INPUT TYPE=\"text\" NAME=\"post_administrator_username\" MAXLENGTH=\"50\"><BR><BR>
	* Administrator Password:<BR>
	[ Maximum Password Length: 32 Characters, Alpha-Numeric ]<BR>
	<INPUT TYPE=\"password\" NAME=\"post_administrator_password_1\" MAXLENGTH=\"32\"><BR>
	* Administrator Password:<BR>
	[ Again ]<BR>
	<INPUT TYPE=\"password\" NAME=\"post_administrator_password_2\" MAXLENGTH=\"32\"><BR>
	<INPUT TYPE=\"submit\" VALUE=\"Install Administrator\">
	</FORM><BR>
");

} else {

/*
 ============================================================================================================
 + Check Passwords For Differences: IF: Passwords Match Exactly, Execute Installation
 ============================================================================================================
*/

if ($_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_PASSWORD_1 == "$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_PASSWORD_2") {

	echo ("Installation Process Started<HR>");
	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Installing Default S.Q.L. Data to Database Server Tables:<BR>");

include_once "./System/Configuration/Global_Configuration.php";

/*
 ============================================================================================================
 + Database Server Connection Variables
 ============================================================================================================
*/

$_ARCHITECT_INSTALLATION_DATA_CONNECT_DATABASE						= mysql_connect($_ACCESS_DATABASE_SERVER_HOSTNAME, $_ACCESS_DATABASE_SERVER_USERNAME, $_ACCESS_DATABASE_SERVER_PASSWORD);
$_ARCHITECT_INSTALLATION_DATA_SELECT_DATABASE						= mysql_select_db($_ACCESS_DATABASE_SERVER_DATABASE_NAME);

/*
 ============================================================================================================
 + Connect To Database Server
 ============================================================================================================
*/

if ($_ARCHITECT_INSTALLATION_DATA_CONNECT_DATABASE) {

	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Connected To Database Server Host Name: </I>$_ACCESS_DATABASE_SERVER_HOSTNAME</I> Successfully.<BR>");

/*
 ============================================================================================================
 + Connect To Database Server Database Name
 ============================================================================================================
*/

if ($_ARCHITECT_INSTALLATION_DATA_SELECT_DATABASE) {

	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Connected To Database Server Database Name: <I>$_ACCESS_DATABASE_SERVER_DATABASE_NAME</I> Successfully.<BR>");

	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Installing Packaged Application Module Links... Please Wait.<BR>");

/*
 ============================================================================================================
 + Install Default Application Links
 ============================================================================================================
*/

mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_application_links(application_link_name,application_link_row,application_link_url)VALUES('Active Members','001','?Application_Member&#61;Active_Members')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_application_links(application_link_name,application_link_row,application_link_url)VALUES('Applications','002','?Application_Member&#61;Application_List')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_application_links(application_link_name,application_link_row,application_link_url)VALUES('Articles','003','?Application_Member&#61;Articles&amp;DisplayID&#61;All')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_application_links(application_link_name,application_link_row,application_link_url)VALUES('Calculator','004','?Application_Member&#61;Calculator&amp;Display&#61;Options')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_application_links(application_link_name,application_link_row,application_link_url)VALUES('Calendar','005','?Application_Member&#61;Calendar&amp;Display&#61;Options')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_application_links(application_link_name,application_link_row,application_link_url)VALUES('Clock','006','?Application_Member&#61;Clock&amp;Display&#61;Options')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_application_links(application_link_name,application_link_row,application_link_url)VALUES('Contact','007','?Application_Member&#61;Contact_Administrator')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_application_links(application_link_name,application_link_row,application_link_url)VALUES('Documentation','008','?Application_Member&#61;Documentation')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_application_links(application_link_name,application_link_row,application_link_url)VALUES('Download','09','?Application_Member&#61;Download&amp;Display&#61;Torrent')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_application_links(application_link_name,application_link_row,application_link_url)VALUES('Emulators','010','?Application_Member&#61;Emulators&amp;Display&#61;Options')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_application_links(application_link_name,application_link_row,application_link_url)VALUES('Files','011','?Application_Member&#61;Files&amp;CategoryID&#61;All')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_application_links(application_link_name,application_link_row,application_link_url)VALUES('Forum','012','?Application_Member&#61;Forum&amp;ForumID&#61;All')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_application_links(application_link_name,application_link_row,application_link_url)VALUES('Language','013','?Application_Member&#61;Language')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_application_links(application_link_name,application_link_row,application_link_url)VALUES('Lightning Calculate','014','?Application_Member&#61;Lightning_Calculate&amp;Display&#61;Options')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_application_links(application_link_name,application_link_row,application_link_url)VALUES('Legal','015','?Application_Member&#61;Legal')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_application_links(application_link_name,application_link_row,application_link_url)VALUES('Links','016','?Application_Member&#61;Links&amp;DisplayID&#61;All')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_application_links(application_link_name,application_link_row,application_link_url)VALUES('Login','017','?Application_Member&#61;Login')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_application_links(application_link_name,application_link_row,application_link_url)VALUES('Market','018','?Application_Member&#61;Market&amp;Display&#61;Options')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_application_links(application_link_name,application_link_row,application_link_url)VALUES('Media Player','019','?Application_Member&#61;Media_Player')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_application_links(application_link_name,application_link_row,application_link_url)VALUES('Member Directory','020','?Application_Member&#61;Member_Directory')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_application_links(application_link_name,application_link_row,application_link_url)VALUES('Messenger','021','?Application_Member&#61;Messenger&amp;Display&#61;MessengerOptions')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_application_links(application_link_name,application_link_row,application_link_url)VALUES('News','022','?Application_Member&#61;News')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_application_links(application_link_name,application_link_row,application_link_url)VALUES('Referrers','023','?Application_Member&#61;Referrers&amp;Display&#61;Box')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_application_links(application_link_name,application_link_row,application_link_url)VALUES('RSS Feed','024','./RSS.php?')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_application_links(application_link_name,application_link_row,application_link_url)VALUES('Register','025','?Application_Member&#61;Register')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_application_links(application_link_name,application_link_row,application_link_url)VALUES('Search','026','?Application_Member&#61;Search')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_application_links(application_link_name,application_link_row,application_link_url)VALUES('Statistics','027','?Application_Member&#61;Statistics')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_application_links(application_link_name,application_link_row,application_link_url)VALUES('Submit Link','028','?Application_Member&#61;Links&amp;SubmitLink&#61;Yes')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_application_links(application_link_name,application_link_row,application_link_url)VALUES('Submit News','029','?Application_Member&#61;Submit_News')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_application_links(application_link_name,application_link_row,application_link_url)VALUES('Upload File','030','?Application_Member&#61;Upload')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_application_links(application_link_name,application_link_row,application_link_url)VALUES('Welcome !','031','?Application_Custom&#61;1')");

	echo ("[ Done ]<BR><BR>");

	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Installing Packaged Applications and Application Settings... Please Wait.<BR>");

/*
 ============================================================================================================
 + Install Default Applications
 ============================================================================================================
*/

mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications(application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_geo,application_file_permission_location_internet_protocol_address,application_file_status)VALUES('Account_Recovery','0','1','1','1','1','1','1')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications(application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_geo,application_file_permission_location_internet_protocol_address,application_file_status)VALUES('Active_Members','0','1','1','1','1','1','1')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications(application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_geo,application_file_permission_location_internet_protocol_address,application_file_status)VALUES('All_News','0','1','1','1','1','1','1')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications(application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_geo,application_file_permission_location_internet_protocol_address,application_file_status)VALUES('All_Shouts','0','1','1','1','1','1','1')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications(application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_geo,application_file_permission_location_internet_protocol_address,application_file_status)VALUES('Application_List','0','1','1','1','1','1','1')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications(application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_geo,application_file_permission_location_internet_protocol_address,application_file_status)VALUES('Articles','0','1','1','1','1','1','1')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications(application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_geo,application_file_permission_location_internet_protocol_address,application_file_status)VALUES('Calculator','0','1','1','1','1','1','1')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications(application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_geo,application_file_permission_location_internet_protocol_address,application_file_status)VALUES('Calendar','0','1','1','1','1','1','1')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications(application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_geo,application_file_permission_location_internet_protocol_address,application_file_status)VALUES('Clock','0','1','1','1','1','1','1')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications(application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_geo,application_file_permission_location_internet_protocol_address,application_file_status)VALUES('Comment','1','1','1','1','1','1','1')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications(application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_geo,application_file_permission_location_internet_protocol_address,application_file_status)VALUES('Contact_Administrator','1','1','1','1','1','1','1')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications(application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_geo,application_file_permission_location_internet_protocol_address,application_file_status)VALUES('Control_Panel','1','1','1','1','1','1','1')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications(application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_geo,application_file_permission_location_internet_protocol_address,application_file_status)VALUES('Documentation','0','1','1','1','1','1','1')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications(application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_geo,application_file_permission_location_internet_protocol_address,application_file_status)VALUES('Download','1','1','1','1','1','1','1')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications(application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_geo,application_file_permission_location_internet_protocol_address,application_file_status)VALUES('Update_Account','1','1','1','1','1','1','1')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications(application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_geo,application_file_permission_location_internet_protocol_address,application_file_status)VALUES('Electronic_Mail','1','1','1','1','1','1','1')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications(application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_geo,application_file_permission_location_internet_protocol_address,application_file_status)VALUES('Emulators','1','1','1','1','1','1','1')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications(application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_geo,application_file_permission_location_internet_protocol_address,application_file_status)VALUES('Files','0','1','1','1','1','1','1')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications(application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_geo,application_file_permission_location_internet_protocol_address,application_file_status)VALUES('Forum','1','1','1','1','1','1','1')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications(application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_geo,application_file_permission_location_internet_protocol_address,application_file_status)VALUES('Friend','1','1','1','1','1','1','1')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications(application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_geo,application_file_permission_location_internet_protocol_address,application_file_status)VALUES('Forward','1','1','1','1','1','1','1')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications(application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_geo,application_file_permission_location_internet_protocol_address,application_file_status)VALUES('Language','0','1','1','1','1','1','1')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications(application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_geo,application_file_permission_location_internet_protocol_address,application_file_status)VALUES('Legal','0','1','1','1','1','1','1')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications(application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_geo,application_file_permission_location_internet_protocol_address,application_file_status)VALUES('Lightning_Calculate','0','1','1','1','1','1','1')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications(application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_geo,application_file_permission_location_internet_protocol_address,application_file_status)VALUES('Links','1','1','1','1','1','1','1')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications(application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_geo,application_file_permission_location_internet_protocol_address,application_file_status)VALUES('List','1','1','1','1','1','1','1')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications(application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_geo,application_file_permission_location_internet_protocol_address,application_file_status)VALUES('Login','0','1','1','1','1','1','1')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications(application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_geo,application_file_permission_location_internet_protocol_address,application_file_status)VALUES('Market','0','1','1','1','1','1','1')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications(application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_geo,application_file_permission_location_internet_protocol_address,application_file_status)VALUES('Media_Player','1','1','1','1','1','1','1')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications(application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_geo,application_file_permission_location_internet_protocol_address,application_file_status)VALUES('Member_Directory','0','1','1','1','1','1','1')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications(application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_geo,application_file_permission_location_internet_protocol_address,application_file_status)VALUES('Messenger','1','1','1','1','1','1','1')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications(application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_geo,application_file_permission_location_internet_protocol_address,application_file_status)VALUES('News','0','1','1','1','1','1','1')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications(application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_geo,application_file_permission_location_internet_protocol_address,application_file_status)VALUES('Private_Files','1','1','1','1','1','1','1')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications(application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_geo,application_file_permission_location_internet_protocol_address,application_file_status)VALUES('Private_Message','1','1','1','1','1','1','1')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications(application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_geo,application_file_permission_location_internet_protocol_address,application_file_status)VALUES('Profile','0','1','1','1','1','1','1')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications(application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_geo,application_file_permission_location_internet_protocol_address,application_file_status)VALUES('Referrers','0','1','1','1','1','1','1')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications(application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_geo,application_file_permission_location_internet_protocol_address,application_file_status)VALUES('Register','0','1','1','1','1','1','1')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications(application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_geo,application_file_permission_location_internet_protocol_address,application_file_status)VALUES('Reset_Password','0','1','1','1','1','1','1')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications(application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_geo,application_file_permission_location_internet_protocol_address,application_file_status)VALUES('Search','0','1','1','1','1','1','1')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications(application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_geo,application_file_permission_location_internet_protocol_address,application_file_status)VALUES('Statistics','0','1','1','1','1','1','1')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications(application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_geo,application_file_permission_location_internet_protocol_address,application_file_status)VALUES('Submit_News','1','1','1','1','1','1','1')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications(application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_geo,application_file_permission_location_internet_protocol_address,application_file_status)VALUES('System_Message','0','1','1','1','1','1','1')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications(application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_geo,application_file_permission_location_internet_protocol_address,application_file_status)VALUES('Update_Password','1','1','1','1','1','1','1')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications(application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_geo,application_file_permission_location_internet_protocol_address,application_file_status)VALUES('Upload','1','1','1','1','1','1','1')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications(application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_geo,application_file_permission_location_internet_protocol_address,application_file_status)VALUES('Webspace','1','1','1','1','1','1','1')");

	echo ("[ Done ]<BR><BR>");

	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Installing Packaged Panels... Please Wait.<BR>");

/*
 ============================================================================================================
 + Install Default Panels
 ============================================================================================================
*/

mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_application_panels(panel_file_name,panel_alignment,panel_row,panel_file_status,panel_title)VALUES('Applications_Panel','0','1','1','<CENTER><B>Applications Panel</B></CENTER><HR>')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_application_panels(panel_file_name,panel_alignment,panel_row,panel_file_status,panel_title)VALUES('Banned_Networks','0','4','1','<CENTER><B>Banned Networks</B></CENTER><HR>')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_application_panels(panel_file_name,panel_alignment,panel_row,panel_file_status,panel_title)VALUES('Project_Badges','1','1','1','<CENTER><B>Project Badges</B></CENTER><HR>')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_application_panels(panel_file_name,panel_alignment,panel_row,panel_file_status,panel_title)VALUES('Language','1','6','1','<CENTER><B>Set Language</B></CENTER><HR>')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_application_panels(panel_file_name,panel_alignment,panel_row,panel_file_status,panel_title)VALUES('Latest_Articles','0','3','1','<CENTER><B>Latest Articles</B></CENTER><HR>')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_application_panels(panel_file_name,panel_alignment,panel_row,panel_file_status,panel_title)VALUES('Latest_Files','1','3','1','<CENTER><B>Latest Files</B></CENTER><HR>')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_application_panels(panel_file_name,panel_alignment,panel_row,panel_file_status,panel_title)VALUES('Latest_Shouts','1','5','1','<CENTER><B>Latest Shout Messages</B></CENTER><HR>')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_application_panels(panel_file_name,panel_alignment,panel_row,panel_file_status,panel_title)VALUES('Member_Panel','0','2','1','<CENTER><B>Member Panel</B></CENTER><HR>')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_application_panels(panel_file_name,panel_alignment,panel_row,panel_file_status,panel_title)VALUES('Latest_Members','1','4','1','<CENTER><B>Newest Members</B></CENTER><HR>')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_application_panels(panel_file_name,panel_alignment,panel_row,panel_file_status,panel_title)VALUES('RSS_Panel','1','4','1','<CENTER><B>Real-Simple-Syndication</B></CENTER><HR>')");

	echo ("[ Done ]<BR><BR>");

	echo ("-----------------------------------<BR>");
	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Installing Specified Administrator Account Details and Services Root Administrator Account ( $_PROJECT_STRING_NAME_SHORT )... Please Wait.<BR>");

/*
 ============================================================================================================
 + Install Specified Administrator Account Details
 ============================================================================================================
*/

$_GLOBAL_LOCAL_SERVER_DATE								= date("l, F j, Y g:i:s A");
$_GLOBAL_LOCAL_SERVER_DATE_MD5								= md5($_GLOBAL_LOCAL_SERVER_DATE);

mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_members(
member_access_level,
member_attempt_authentication,
member_birthdate,
member_address_cryptocurrency_bitcoin,
member_address_cryptocurrency_bitcoin_gold,
member_address_cryptocurrency_dogecoin,
member_address_cryptocurrency_ethereum,
member_address_cryptocurrency_litecoin,
member_address_cryptocurrency_mazacoin,
member_address_cryptocurrency_namecoin,
member_address_cryptocurrency_peercoin,
member_address_cryptocurrency_primecoin,
member_address_cryptocurrency_tron,
member_address_cryptocurrency_zcash,
member_address_home,
member_address_mail,
member_electronic_mail_address,
member_experience_amount,
member_gender,
member_image_avatar,
member_image_picture,
member_ip_address_authorized,
member_ip_address_authorization_token,
member_ip_address_last_login,
member_ip_address_log,
member_last_referrer,
member_level_rank,
member_location_current,
member_mood,
member_music,
member_name_first,
member_name_last,
member_name_middle,
member_name_nickname,
member_number_of_posts,
member_number_phone_area_code,
member_number_phone_cell,
member_number_phone_country_code,
member_number_phone_home,
member_number_phone_work,
member_password,
member_physical_dimensions_hands,
member_physical_dimensions_waist,
member_physical_dimensions_length_arms,
member_physical_dimensions_length_legs,
member_physical_color_eye,
member_physical_color_hair,
member_physical_height,
member_physical_weight,
member_profile_about,
member_profile_signature,
member_registration_date,
member_registration_details,
member_security_fingerprint_cleartext,
member_security_fingerprint_hashed,
member_security_pgp_key_panel_public,
member_security_pgp_key_panel_private,
member_settings_encryption_pgp,
member_settings_language,
member_settings_control_panel_audio,
member_settings_newsletter,
member_settings_theme_directory,
member_socialmedia_audio_spotify,
member_socialmedia_business_linkedin,
member_socialmedia_communications_discord,
member_socialmedia_communications_icq,
member_socialmedia_communications_skype,
member_socialmedia_communications_snapchat,
member_socialmedia_gallery_instagram,
member_socialmedia_posting_facebook,
member_socialmedia_posting_twitter,
member_socialmedia_programming_bitbucket,
member_socialmedia_programming_github,
member_socialmedia_programming_launchpad,
member_socialmedia_security_keybase,
member_socialmedia_video_youtube,
member_status_account_activation,
member_status_account_activation_key,
member_status_account_active,
member_status_account_banned,
member_status_account_last_active,
member_status_account_last_active_minutes,
member_status_account_locked,
member_url_homepage,
member_username)VALUES(
'3',
'0',
'00-00-0000',
'Empty Entry :: CryptoCurrency :: BitCoin Address',
'Empty Entry :: CryptoCurrency :: BitCoin Gold Address',
'Empty Entry :: CryptoCurrency :: DodgeCoin Address',
'Empty Entry :: CryptoCurrency :: Ethereum Address',
'Empty Entry :: CryptoCurrency :: LiteCoin Address',
'Empty Entry :: CryptoCurrency :: MazaCoin Address',
'Empty Entry :: CryptoCurrency :: NameCoin Address',
'Empty Entry :: CryptoCurrency :: PeerCoin Address',
'Empty Entry :: CryptoCurrency :: PrimeCoin Address',
'Empty Entry :: CryptoCurrency :: TronCoin Address',
'Empty Entry :: CryptoCurrency :: ZCash Address',
'Empty Entry :: Physical Home Address',
'Empty Entry :: Physical Mailing Address',
'$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_ELECTRONIC_MAIL_ADDRESS',
'10000',
'1',
'Default.png',
'No_Image.png',
'000.000.000.000',
'0',
'$_GLOBAL_REMOTE_SERVER_ADDRESS',
'$_GLOBAL_REMOTE_SERVER_ADDRESS',
'$_GLOBAL_LOCAL_SERVER_HTTP_REFERRER',
'5',
'Unknown',
'On Guard',
'Nine Inch Nails - Deep',
'Empty Entry :: First Name',
'Empty Entry :: Last Name',
'Empty Entry :: Middle Name',
'Emtpy Entry :: Nick Name',
'10000',
'111',
'000-0000',
'1',
'000-0000',
'000-0000',
'$_POST_ADMINISTRATOR_PASSWORD_3',
'0',
'0',
'0',
'0',
'0',
'0',
'0',
'0',
'Account Profile :: Installation Administration Account',
'Account Signature :: Installation Administration Account',
'$_GLOBAL_LOCAL_SERVER_DATE',
'Account Registered @ Internet Protocol Address: $_GLOBAL_REMOTE_SERVER_ADDRESS On: $_GLOBAL_LOCAL_SERVER_DATE',
'00:00:00',
'00:00:00',
'Empty Entry :: P.G.P. Public Key Block',
'Empty Entry :: P.G.P. Private Key Block',
'0',
'English',
'0',
'1',
'2022_TinkeSoftware_Grey',
'Empty Entry :: Social Media :: Audio :: Spotify',
'Empty Entry :: Social Media :: Business :: LinkedIn',
'Empty Entry :: Social Media :: Communications :: Discord',
'Empty Entry :: Social Media :: Communications :: ICQ',
'Empty Entry :: Social Media :: Communications :: Skype',
'Empty Entry :: Social Media :: Communications :: SnapChat',
'Empty Entry :: Social Media :: Gallery :: InstaGram',
'Empty Entry :: Social Media :: Posting :: FaceBook',
'Empty Entry :: Social Media :: Posting :: Twitter',
'Empty Entry :: Social Media :: Programming :: BITBucket',
'Empty Entry :: Social Media :: Programming :: GITHub',
'Empty Entry :: Social Media :: Programming :: LaunchPad',
'Empty Entry :: Social Media :: Security :: KeyBase',
'Empty Entry :: Social Media :: Video :: YouTube',
'1',
'$_GLOBAL_LOCAL_SERVER_DATE_MD5',
'1',
'0',
'$_GLOBAL_LOCAL_SERVER_DATE_WITH_SEPARATION',
'$_GLOBAL_LOCAL_SERVER_DATE_MINUTES',
'0',
'https://www.Twitter.com/$_PROJECT_STRING_NAME_UNIX',
'$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME')");

/*
 ============================================================================================================
 + Install Backup Services Root Administrator Account Details
 + With Specified Administration Account Password
 ============================================================================================================
*/

mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_members(
member_access_level,
member_attempt_authentication,
member_birthdate,
member_address_cryptocurrency_bitcoin,
member_address_cryptocurrency_bitcoin_gold,
member_address_cryptocurrency_dogecoin,
member_address_cryptocurrency_ethereum,
member_address_cryptocurrency_litecoin,
member_address_cryptocurrency_mazacoin,
member_address_cryptocurrency_namecoin,
member_address_cryptocurrency_peercoin,
member_address_cryptocurrency_primecoin,
member_address_cryptocurrency_tron,
member_address_cryptocurrency_zcash,
member_address_home,
member_address_mail,
member_electronic_mail_address,
member_experience_amount,
member_gender,
member_image_avatar,
member_image_picture,
member_ip_address_authorized,
member_ip_address_authorization_token,
member_ip_address_last_login,
member_ip_address_log,
member_last_referrer,
member_level_rank,
member_location_current,
member_mood,
member_music,
member_name_first,
member_name_last,
member_name_middle,
member_name_nickname,
member_number_of_posts,
member_number_phone_area_code,
member_number_phone_cell,
member_number_phone_country_code,
member_number_phone_home,
member_number_phone_work,
member_password,
member_physical_dimensions_hands,
member_physical_dimensions_waist,
member_physical_dimensions_length_arms,
member_physical_dimensions_length_legs,
member_physical_color_eye,
member_physical_color_hair,
member_physical_height,
member_physical_weight,
member_profile_about,
member_profile_signature,
member_registration_date,
member_registration_details,
member_security_fingerprint_cleartext,
member_security_fingerprint_hashed,
member_security_pgp_key_panel_public,
member_security_pgp_key_panel_private,
member_settings_encryption_pgp,
member_settings_language,
member_settings_control_panel_audio,
member_settings_newsletter,
member_settings_theme_directory,
member_socialmedia_audio_spotify,
member_socialmedia_business_linkedin,
member_socialmedia_communications_discord,
member_socialmedia_communications_icq,
member_socialmedia_communications_skype,
member_socialmedia_communications_snapchat,
member_socialmedia_gallery_instagram,
member_socialmedia_posting_facebook,
member_socialmedia_posting_twitter,
member_socialmedia_programming_bitbucket,
member_socialmedia_programming_github,
member_socialmedia_programming_launchpad,
member_socialmedia_security_keybase,
member_socialmedia_video_youtube,
member_status_account_activation,
member_status_account_activation_key,
member_status_account_active,
member_status_account_banned,
member_status_account_last_active,
member_status_account_last_active_minutes,
member_status_account_locked,
member_url_homepage,
member_username)VALUES(
'3',
'0',
'00-00-0000',
'Empty Entry :: CryptoCurrency :: BitCoin Address',
'Empty Entry :: CryptoCurrency :: BitCoin Gold Address',
'Empty Entry :: CryptoCurrency :: DodgeCoin Address',
'Empty Entry :: CryptoCurrency :: Ethereum Address',
'Empty Entry :: CryptoCurrency :: LiteCoin Address',
'Empty Entry :: CryptoCurrency :: MazaCoin Address',
'Empty Entry :: CryptoCurrency :: NameCoin Address',
'Empty Entry :: CryptoCurrency :: PeerCoin Address',
'Empty Entry :: CryptoCurrency :: PrimeCoin Address',
'Empty Entry :: CryptoCurrency :: TronCoin Address',
'Empty Entry :: CryptoCurrency :: ZCash Address',
'Empty Entry :: Physical Home Address',
'Empty Entry :: Physical Mailing Address',
'$_PROJECT_STRING_NAME_SHORT@Localhost',
'10000',
'1',
'Default.png',
'No_Image.png',
'000.000.000.000',
'0',
'$_GLOBAL_REMOTE_SERVER_ADDRESS',
'$_GLOBAL_REMOTE_SERVER_ADDRESS',
'$_GLOBAL_LOCAL_SERVER_HTTP_REFERRER',
'5',
'Cyberspace',
'On Guard',
'Nine Inch Nails - Deep',
'$_PROJECT_STRING_NAME_SHORT',
'CMS',
'None',
'None Provided :: Nick Name',
'10000',
'111',
'000-0000',
'1',
'000-0000',
'000-0000',
'$_POST_ADMINISTRATOR_PASSWORD_3',
'0',
'0',
'0',
'0',
'0',
'0',
'0',
'0',
'I am $_PROJECT_STRING_NAME_SHORT ! I am the Services Root Administrator.',
'I guard the entrance to Hades !',
'$_GLOBAL_LOCAL_SERVER_DATE',
'Account Registered @ Internet Protocol Address: $_GLOBAL_REMOTE_SERVER_ADDRESS On: $_GLOBAL_LOCAL_SERVER_DATE',
'00:00:00',
'00:00:00',
'Empty Entry :: P.G.P. Public Key Block',
'Empty Entry :: P.G.P. Private Key Block',
'0',
'English',
'0',
'1',
'2022_TinkeSoftware_Grey',
'Empty Entry :: Social Media :: Audio :: Spotify',
'Empty Entry :: Social Media :: Business :: LinkedIn',
'Empty Entry :: Social Media :: Communications :: Discord',
'Empty Entry :: Social Media :: Communications :: ICQ',
'Empty Entry :: Social Media :: Communications :: Skype',
'Empty Entry :: Social Media :: Communications :: SnapChat',
'Empty Entry :: Social Media :: Gallery :: InstaGram',
'Empty Entry :: Social Media :: Posting :: FaceBook',
'$_PROJECT_STRING_NAME_UNIX',
'Empty Entry :: Social Media :: Programming :: BITBucket',
'Empty Entry :: Social Media :: Programming :: GITHub',
'Empty Entry :: Social Media :: Programming :: LaunchPad',
'Empty Entry :: Social Media :: Security :: KeyBase',
'Empty Entry :: Social Media :: Video :: YouTube',
'1',
'$_GLOBAL_LOCAL_SERVER_DATE_MD5',
'1',
'0',
'$_GLOBAL_LOCAL_SERVER_DATE_WITH_SEPARATION',
'$_GLOBAL_LOCAL_SERVER_DATE_MINUTES',
'0',
'https://www.Twitter.com/$_PROJECT_STRING_NAME_UNIX',
'$_PROJECT_STRING_NAME_SHORT')");

	echo ("[ Done ]<BR><BR>");

	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Installing Specified Administrator Account Organized Directory Structure... Please Wait.<BR>");

/*
 ============================================================================================================
 + Make and Create Administrator Directory and Files
 ============================================================================================================
*/

	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Currently Making:<BR><BR>");

/*
 + Make Directory: Administrator UserName
*/

	echo ("./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME<BR>");

	mkdir("./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME");

	echo ("[ Done ]<BR><BR>");

/*
 + Make Directory: Administrator' Organized File Directory Structure
*/

	echo ("./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files<BR>");

	mkdir("./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files");

	echo ("[ Done ]<BR><BR>");

// Audio

	echo ("./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Audio<BR>");
	echo ("./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Audio/Gallery<BR>");
	echo ("./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Audio/Live<BR>");
	echo ("./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Audio/Music<BR>");
	echo ("./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Audio/Recordings<BR>");
	echo ("./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Audio/Streams<BR>");

	mkdir("./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Audio");
	mkdir("./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Audio/Gallery");
	mkdir("./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Audio/Live");
	mkdir("./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Audio/Music");
	mkdir("./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Audio/Recordings");
	mkdir("./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Audio/Streams");

	echo ("[ Done ]<BR><BR>");

// Document

	echo ("./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Document<BR>");
	echo ("./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Document/Activity_Logging<BR>");
	echo ("./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Document/Electronic_Mail<BR>");
	echo ("./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Document/Friends<BR>");
	echo ("./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Document/Streams<BR>");
	echo ("./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Document/Streams/Wall<BR>");

	mkdir("./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Document");
	mkdir("./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Document/Activity_Logging");
	mkdir("./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Document/Electronic_Mail");
	mkdir("./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Document/Friends");
	mkdir("./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Document/Streams");
	mkdir("./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Document/Streams/Wall");

	echo ("[ Done ]<BR><BR>");

// Image

	echo ("./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Image<BR>");
	echo ("./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Image/Gallery<BR>");
	echo ("./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Image/Profile<BR>");
	echo ("./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Image/Streams<BR>");

	mkdir("./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Image");
	mkdir("./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Image/Gallery");
	mkdir("./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Image/Profile");
	mkdir("./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Image/Streams");

	echo ("[ Done ]<BR><BR>");

// Video

	echo ("./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Video<BR>");
	echo ("./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Video/Gallery<BR>");
	echo ("./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Video/Live<BR>");
	echo ("./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Video/Movies<BR>");
	echo ("./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Video/Streams<BR>");

	mkdir("./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Video");
	mkdir("./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Video/Gallery");
	mkdir("./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Video/Live");
	mkdir("./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Video/Movies");
	mkdir("./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Video/Streams");

	echo ("[ Done ]<BR><BR>");

	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Installing Specified Administrator Account Directory Structure Index Files... Please Wait.<BR>");

/*
 + Directory Security: Copy Directory Denial Index Files
*/

// Audio

copy("./Member/Setup/Indexes/Files/Files.php","./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/index.php");
copy("./Member/Setup/Indexes/Files/Audio/Audio.php","./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Audio/index.php");
copy("./Member/Setup/Indexes/Files/Audio/Audio.php","./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Audio/Gallery/index.php");
copy("./Member/Setup/Indexes/Files/Audio/Audio.php","./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Audio/Live/index.php");
copy("./Member/Setup/Indexes/Files/Audio/Audio.php","./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Audio/Music/index.php");
copy("./Member/Setup/Indexes/Files/Audio/Audio.php","./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Audio/Recordings/index.php");
copy("./Member/Setup/Indexes/Files/Audio/Audio.php","./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Audio/Streams/index.php");

// Document

copy("./Member/Setup/Indexes/Files/Document/Activity_Logging/Activity_Logging.php","./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Document/Activity_Logging/index.php");
copy("./Member/Setup/Files/Document/Activity_Logging/Activity_Log.php","./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Document/Activity_Logging/Activity_Log.php");
copy("./Member/Setup/Indexes/Files/Document/Document.php","./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Document/index.php");
copy("./Member/Setup/Indexes/Files/Document/Electronic_Mail/Electronic_Mail.php","./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Document/Electronic_Mail/index.php");
copy("./Member/Setup/Indexes/Files/Document/Friends/Friends.php","./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Document/Friends/index.php");
copy("./Member/Setup/Indexes/Files/Document/Streams/Streams.php","./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Document/Streams/index.php");
copy("./Member/Setup/Indexes/Files/Document/Streams/Wall/Wall.php","./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Document/Streams/Wall/index.php");

// Image

copy("./Member/Setup/Indexes/Files/Image/Image.php","./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Image/index.php");
copy("./Member/Setup/Indexes/Files/Image/Image.php","./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Image/Gallery/index.php");
copy("./Member/Setup/Indexes/Files/Image/Image.php","./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Image/Profile/index.php");
copy("./Member/Setup/Indexes/Files/Image/Image.php","./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Image/Streams/index.php");
copy("./Member/Setup/Indexes/Files/Image/Profile/Profile.php","./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Image/Profile/index.php");

// Video

copy("./Member/Setup/Indexes/Files/Video/Video.php","./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Video/index.php");
copy("./Member/Setup/Indexes/Files/Video/Video.php","./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Video/Gallery/index.php");
copy("./Member/Setup/Indexes/Files/Video/Video.php","./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Video/Live/index.php");
copy("./Member/Setup/Indexes/Files/Video/Video.php","./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Video/Movies/index.php");
copy("./Member/Setup/Indexes/Files/Video/Video.php","./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Video/Streams/index.php");

copy("./Member/Setup/Indexes/Files/Video/Video.php","./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Video/index.php");

	echo ("[ Done ]<BR><BR>");

	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Installing Specified Administrator Account Personal Web Page... Please Wait.<BR>");

/*
 + Make Directory: Administrator Hyper-Text-Markup-Language Web-Page Index File
*/

copy("./System/Default/Register/Register.html","./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/index.html");

	echo ("[ Done ]<BR><BR>");

	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Installing Specified Administrator Account Physical Electronic Mail Address File... Please Wait.<BR>");

/*
 + Copy Default Files To Organized Directory Structure: Administrator Electronic Mail Address
*/

copy("./System/Default/Friend/Friend.$_INTERNAL_FILE_EXTENSION","./Member/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME/Files/Document/Electronic_Mail/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_ELECTRONIC_MAIL_ADDRESS");

	echo ("[ Done ]<BR><BR>");

	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Adding Specified Administrator Account Electronic Mail To Electronic Mail Master List... Please Wait.<BR>");

/*
 + Copy Administrator Electronic Mail Address To Master List
*/

copy("./System/Default/Friend/Friend.$_INTERNAL_FILE_EXTENSION","./Member/Master_List/Electronic_Mail_Addresses/$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_ELECTRONIC_MAIL_ADDRESS");

	echo ("[ Done ]<BR><BR>");

	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Installing Services Root Administrator Account ( $_PROJECT_STRING_NAME_SHORT ) Directory Structure Clone... Please Wait.<BR><BR>");

/*
 ============================================================================================================
 + Make and Create Backup Administrator Directory ( Cerberus ) and Files
 ============================================================================================================
*/

	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Currently Making:<BR>");

/*
 + Make Directory: Administrator UserName
*/

	echo ("./Member/$_PROJECT_STRING_NAME_SHORT<BR>");

	mkdir("./Member/$_PROJECT_STRING_NAME_SHORT");

	echo ("[ Done ]<BR><BR>");

/*
 + Make Directory: Administrator' Organized File Directory Structure
*/

	echo ("./Member/$_PROJECT_STRING_NAME_SHORT/Files<BR>");

	mkdir("./Member/$_PROJECT_STRING_NAME_SHORT/Files");

	echo ("[ Done ]<BR><BR>");

// Audio

	echo ("./Member/$_PROJECT_STRING_NAME_SHORT/Files/Audio<BR>");
	echo ("./Member/$_PROJECT_STRING_NAME_SHORT/Files/Audio/Gallery<BR>");
	echo ("./Member/$_PROJECT_STRING_NAME_SHORT/Files/Audio/Live<BR>");
	echo ("./Member/$_PROJECT_STRING_NAME_SHORT/Files/Audio/Music<BR>");
	echo ("./Member/$_PROJECT_STRING_NAME_SHORT/Files/Audio/Recordings<BR>");
	echo ("./Member/$_PROJECT_STRING_NAME_SHORT/Files/Audio/Streams<BR>");

	mkdir("./Member/$_PROJECT_STRING_NAME_SHORT/Files/Audio");
	mkdir("./Member/$_PROJECT_STRING_NAME_SHORT/Files/Audio/Gallery");
	mkdir("./Member/$_PROJECT_STRING_NAME_SHORT/Files/Audio/Live");
	mkdir("./Member/$_PROJECT_STRING_NAME_SHORT/Files/Audio/Music");
	mkdir("./Member/$_PROJECT_STRING_NAME_SHORT/Files/Audio/Recordings");
	mkdir("./Member/$_PROJECT_STRING_NAME_SHORT/Files/Audio/Streams");

	echo ("[ Done ]<BR><BR>");

// Document

	echo ("./Member/$_PROJECT_STRING_NAME_SHORT/Files/Document<BR>");
	echo ("./Member/$_PROJECT_STRING_NAME_SHORT/Files/Document/Activity_Logging<BR>");
	echo ("./Member/$_PROJECT_STRING_NAME_SHORT/Files/Document/Electronic_Mail<BR>");
	echo ("./Member/$_PROJECT_STRING_NAME_SHORT/Files/Document/Friends<BR>");
	echo ("./Member/$_PROJECT_STRING_NAME_SHORT/Files/Document/Streams<BR>");
	echo ("./Member/$_PROJECT_STRING_NAME_SHORT/Files/Document/Streams/Wall<BR>");

	mkdir("./Member/$_PROJECT_STRING_NAME_SHORT/Files/Document");
	mkdir("./Member/$_PROJECT_STRING_NAME_SHORT/Files/Document/Activity_Logging");
	mkdir("./Member/$_PROJECT_STRING_NAME_SHORT/Files/Document/Electronic_Mail");
	mkdir("./Member/$_PROJECT_STRING_NAME_SHORT/Files/Document/Friends");
	mkdir("./Member/$_PROJECT_STRING_NAME_SHORT/Files/Document/Streams");
	mkdir("./Member/$_PROJECT_STRING_NAME_SHORT/Files/Document/Streams/Wall");

	echo ("[ Done ]<BR><BR>");

// Image

	echo ("./Member/$_PROJECT_STRING_NAME_SHORT/Files/Image<BR>");
	echo ("./Member/$_PROJECT_STRING_NAME_SHORT/Files/Image/Gallery<BR>");
	echo ("./Member/$_PROJECT_STRING_NAME_SHORT/Files/Image/Profile<BR>");
	echo ("./Member/$_PROJECT_STRING_NAME_SHORT/Files/Image/Streams<BR>");

	mkdir("./Member/$_PROJECT_STRING_NAME_SHORT/Files/Image");
	mkdir("./Member/$_PROJECT_STRING_NAME_SHORT/Files/Image/Gallery");
	mkdir("./Member/$_PROJECT_STRING_NAME_SHORT/Files/Image/Profile");
	mkdir("./Member/$_PROJECT_STRING_NAME_SHORT/Files/Image/Streams");

	echo ("[ Done ]<BR><BR>");

// Video

	echo ("./Member/$_PROJECT_STRING_NAME_SHORT/Files/Video<BR>");
	echo ("./Member/$_PROJECT_STRING_NAME_SHORT/Files/Video/Gallery<BR>");
	echo ("./Member/$_PROJECT_STRING_NAME_SHORT/Files/Video/Live<BR>");
	echo ("./Member/$_PROJECT_STRING_NAME_SHORT/Files/Video/Movies<BR>");
	echo ("./Member/$_PROJECT_STRING_NAME_SHORT/Files/Video/Streams<BR>");

	mkdir("./Member/$_PROJECT_STRING_NAME_SHORT/Files/Video");
	mkdir("./Member/$_PROJECT_STRING_NAME_SHORT/Files/Video/Gallery");
	mkdir("./Member/$_PROJECT_STRING_NAME_SHORT/Files/Video/Live");
	mkdir("./Member/$_PROJECT_STRING_NAME_SHORT/Files/Video/Movies");
	mkdir("./Member/$_PROJECT_STRING_NAME_SHORT/Files/Video/Streams");

	echo ("[ Done ]<BR><BR>");

	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Installing Specified Administrator Account Directory Structure Index Files... Please Wait.<BR>");

/*
 + Directory Security: Copy Directory Denial Index Files
*/

// Audio

copy("./Member/Setup/Indexes/Files/Files.php","./Member/$_PROJECT_STRING_NAME_SHORT/Files/index.php");
copy("./Member/Setup/Indexes/Files/Audio/Audio.php","./Member/$_PROJECT_STRING_NAME_SHORT/Files/Audio/index.php");
copy("./Member/Setup/Indexes/Files/Audio/Audio.php","./Member/$_PROJECT_STRING_NAME_SHORT/Files/Audio/Gallery/index.php");
copy("./Member/Setup/Indexes/Files/Audio/Audio.php","./Member/$_PROJECT_STRING_NAME_SHORT/Files/Audio/Live/index.php");
copy("./Member/Setup/Indexes/Files/Audio/Audio.php","./Member/$_PROJECT_STRING_NAME_SHORT/Files/Audio/Music/index.php");
copy("./Member/Setup/Indexes/Files/Audio/Audio.php","./Member/$_PROJECT_STRING_NAME_SHORT/Files/Audio/Recordings/index.php");
copy("./Member/Setup/Indexes/Files/Audio/Audio.php","./Member/$_PROJECT_STRING_NAME_SHORT/Files/Audio/Streams/index.php");

// Document

copy("./Member/Setup/Indexes/Files/Document/Activity_Logging/Activity_Logging.php","./Member/$_PROJECT_STRING_NAME_SHORT/Files/Document/Activity_Logging/index.php");
copy("./Member/Setup/Files/Document/Activity_Logging/Activity_Log.php","./Member/$_PROJECT_STRING_NAME_SHORT/Files/Document/Activity_Logging/Activity_Log.php");
copy("./Member/Setup/Indexes/Files/Document/Document.php","./Member/$_PROJECT_STRING_NAME_SHORT/Files/Document/index.php");
copy("./Member/Setup/Indexes/Files/Document/Electronic_Mail/Electronic_Mail.php","./Member/$_PROJECT_STRING_NAME_SHORT/Files/Document/Electronic_Mail/index.php");
copy("./Member/Setup/Indexes/Files/Document/Friends/Friends.php","./Member/$_PROJECT_STRING_NAME_SHORT/Files/Document/Friends/index.php");
copy("./Member/Setup/Indexes/Files/Document/Streams/Streams.php","./Member/$_PROJECT_STRING_NAME_SHORT/Files/Document/Streams/index.php");
copy("./Member/Setup/Indexes/Files/Document/Streams/Wall/Wall.php","./Member/$_PROJECT_STRING_NAME_SHORT/Files/Document/Streams/Wall/index.php");

// Image

copy("./Member/Setup/Indexes/Files/Image/Image.php","./Member/$_PROJECT_STRING_NAME_SHORT/Files/Image/index.php");
copy("./Member/Setup/Indexes/Files/Image/Image.php","./Member/$_PROJECT_STRING_NAME_SHORT/Files/Image/Gallery/index.php");
copy("./Member/Setup/Indexes/Files/Image/Image.php","./Member/$_PROJECT_STRING_NAME_SHORT/Files/Image/Profile/index.php");
copy("./Member/Setup/Indexes/Files/Image/Image.php","./Member/$_PROJECT_STRING_NAME_SHORT/Files/Image/Streams/index.php");
copy("./Member/Setup/Indexes/Files/Image/Profile/Profile.php","./Member/$_PROJECT_STRING_NAME_SHORT/Files/Image/Profile/index.php");

// Video

copy("./Member/Setup/Indexes/Files/Video/Video.php","./Member/$_PROJECT_STRING_NAME_SHORT/Files/Video/index.php");
copy("./Member/Setup/Indexes/Files/Video/Video.php","./Member/$_PROJECT_STRING_NAME_SHORT/Files/Video/Gallery/index.php");
copy("./Member/Setup/Indexes/Files/Video/Video.php","./Member/$_PROJECT_STRING_NAME_SHORT/Files/Video/Live/index.php");
copy("./Member/Setup/Indexes/Files/Video/Video.php","./Member/$_PROJECT_STRING_NAME_SHORT/Files/Video/Movies/index.php");
copy("./Member/Setup/Indexes/Files/Video/Video.php","./Member/$_PROJECT_STRING_NAME_SHORT/Files/Video/Streams/index.php");

copy("./Member/Setup/Indexes/Files/Video/Video.php","./Member/$_PROJECT_STRING_NAME_SHORT/Files/Video/index.php");

	echo ("[ Done ]<BR><BR>");

	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Installing Default Friend System... Please Wait.<BR>");

copy("./System/Default/Friend/Friend.$_INTERNAL_FILE_EXTENSION","./Member/Master_List/Electronic_Mail_Addresses/$_PROJECT_STRING_NAME_SHORT@Localhost");

	echo ("[ Done ]<BR>");
	echo ("-----------------------------------<BR><BR>");

	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Installing Custom Web Applications... Please Wait.<BR>");

/*
 ============================================================================================================
 + Install Default Custom Applications
 ============================================================================================================
*/

mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications_custom(
custom_application_data,
custom_application_name,
custom_application_time
)VALUES(
'Hello and welcome to $_PROJECT_STRING_NAME_EXTENDED ! If you\'re reading this sentence then $_PROJECT_STRING_NAME_EXTENDED was successfully installed to this Web Server !',
'Welcome !',
'$_GLOBAL_LOCAL_SERVER_DATE'
)");

	echo ("[ Done ]<BR><BR>");

	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Installing Default Ranking System... Please Wait.<BR>");

/*
 ============================================================================================================
 + Install Default Ranks
 ============================================================================================================
*/

mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_ranks(
rank_gender_male_0,
rank_gender_male_1,
rank_gender_male_2,
rank_gender_male_3,
rank_gender_male_4,
rank_gender_female_0,
rank_gender_female_1,
rank_gender_female_2,
rank_gender_female_3,
rank_gender_female_4
)VALUES(
'Hermes',
'Apollo',
'Poseidon',
'Hades',
'Zeus',
'Aphrodite',
'Demeter',
'Artemis',
'Hera',
'Athena'
)");

	echo ("[ Done ]<BR><BR>");

	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Installing Pre-Configured System Settings... Please Wait.<BR>");

/*
 ============================================================================================================
 + Install Default Settings
 ============================================================================================================
*/

mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_settings(
settings_system_time_cookies,
settings_system_status_embedded_compression_gzip,
settings_system_status_offline_mode,
settings_system_status_security_module_master_sanitization,
settings_system_file_extension_audio,
settings_system_file_extension_image,
settings_system_directory_language,
settings_system_directory_theme,
settings_system_website_title,
settings_system_upload_size_private,
settings_system_upload_size_public,
settings_system_plugin_directory_location,
settings_system_plugin_directory_smileys,
settings_system_plugin_directory_safeHTML,
settings_system_plugin_directory_text_editor,
settings_system_plugin_status_location,
settings_system_plugin_status_safeHTML,
settings_system_plugin_status_text_editor
)VALUES(
'86400',
'1',
'0',
'1',
'mp3',
'png',
'English',
'2008_Cerberus_Blue',
'$_PROJECT_STRING_NAME_EXTENDED',
'256000',
'10240000',
'Default',
'Default',
'Default',
'Default',
'1',
'1',
'1'
)");

	echo ("[ Done ]<BR><BR>");

	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Installing Statistics... Please Wait.<BR>");

/*
 ============================================================================================================
 + Install Default Statistics
 ============================================================================================================
*/

mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_statistics(
statistics_total_number_of_page_views,
statistics_installation_date
)VALUES(
'1',
'$_GLOBAL_LOCAL_SERVER_DATE'
)");

	echo ("[ Done ]<BR><BR>");

	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Installing Example Forum Entry... Please Wait.<BR>");

/*
 ============================================================================================================
 + Install Default Forum
 ============================================================================================================
*/

mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_forum_forum(forum_access_level,forum_date,forum_description,forum_title)VALUES('1','$_GLOBAL_LOCAL_SERVER_DATE','This is an Example Forum Entry','Example Forum #1')");

	echo ("[ Done ]<BR><BR>");

	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Installing Example Forum Topic Entry... Please Wait.<BR>");

/*
 ============================================================================================================
 + Install Default Forum Topic
 ============================================================================================================
*/

mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_forum_topic(topic_access_level,topic_date,topic_description,topic_forum_id,topic_last_post,topic_last_poster,topic_title)VALUES('1','$_GLOBAL_LOCAL_SERVER_DATE','This is an Example Topic.','1','$_GLOBAL_LOCAL_SERVER_DATE','$_PROJECT_STRING_NAME_SHORT','This Is The Example Topic #1 Entry Within The Example Forum #1 Entry')");

	echo ("[ Done ]<BR><BR>");

	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Installing Example Forum Topic Post... Please Wait.<BR>");

/*
 ============================================================================================================
 + Install Default Topic Post
 ============================================================================================================
*/

mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_forum_post(post_access_level,post_author,post_data,post_date,post_last_edit,post_topic_id)VALUES('1','$_PROJECT_STRING_NAME_SHORT','This is an Example Post -- you can Administer the Forum via the Administration Control Panel.','$_GLOBAL_LOCAL_SERVER_DATE','$_GLOBAL_LOCAL_SERVER_DATE','1')");

	echo ("[ Done ]<BR><BR>");

	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Installing Example File Category Entry ( For File Upload / Download Application Module )... Please Wait.<BR>");

/*
 ============================================================================================================
 + Install Default File Category
 ============================================================================================================
*/

mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_file_categories(file_category_description,file_category_time,file_category_title)VALUES('This is an Example File Category Entry -- You can Delete this File Category Entry from the Administration Control Panel.','$_GLOBAL_LOCAL_SERVER_DATE','Example File Category Entry')");

	echo ("[ Done ]<BR><BR>");

	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Installing Example File Entry ( For File Upload / Download Application Module )... Please Wait.<BR>");

/*
 ============================================================================================================
 + Install Default File
 ============================================================================================================
*/

mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_files(file_author,file_category,file_description,file_image,file_location,file_number_of_downloads,file_time,file_title,file_uploader)VALUES('None','1','This is an Example File Entry -- You can Delete this Example File Entry from the Administration Control Panel.','./Upload/Default/0987654321-0987654321.png','./Upload/Default/0987654321-0987654321.png','1','$_GLOBAL_LOCAL_SERVER_DATE','Example File','$_PROJECT_STRING_NAME_SHORT')");

	echo ("[ Done ]<BR><BR>");

	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Installing Example Article Entry... Please Wait.<BR>");

/*
 ============================================================================================================
 + Install Default Article
 ============================================================================================================
*/

mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_articles(article_author,article_data,article_time,article_title)VALUES('$_PROJECT_STRING_NAME_SHORT','This is an Example Article Entry -- You can Delete this Article Entry from the Administration Control Panel.','$_GLOBAL_LOCAL_SERVER_DATE','Example Article')");

	echo ("[ Done ]<BR><BR>");

	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Installing Example Article Entry... Please Wait.<BR>");

/*
 ============================================================================================================
 + Install Default News
 ============================================================================================================
*/

mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_news(news_author,news_avatar,news_data,news_mood,news_music,news_rss_rfc,news_time,news_title)VALUES('$_PROJECT_STRING_NAME_SHORT','Default.png','This is an Example News Article Entry -- You can Delete this News Article Entry from the Administration Control Panel.','None','None','Wed, 05 Aug 2009 15:04:18 -0700','$_GLOBAL_LOCAL_SERVER_DATE','Example News')");

	echo ("[ Done ]<BR><BR>");

	echo ("&nbsp;=>&nbsp;<A HREF=\"?InternalApplication&#61;Unlink_Installation\" TITLE=\":: Remove Installation Files ::\">Remove Installation Files</A>");

} else {

	echo ("<FONT COLOR=\"#CD0000\">***</FONT> Architect: Error: I am not able to connect to the Database Management Server.<BR>");

} // [ + ] IF: S.Q.L. Query Install Default S.Q.L. Data

} else {

	echo ("<FONT COLOR=\"#CD0000\">***</FONT> Architect: Error: I am not able to connect to the Database Management Server.<BR>");

} // [ + ] IF: S.Q.L. Server Connect

} else {

	echo ("<FONT COLOR=\"#CD0000\">***</FONT> Architect: Error: the Password(s) that you have provided me do not match each-other. Try Again ?<BR>");

} // [ + ] IF: Administrator Passwords Are Equal

} // [ + ] IF: Null

} // [ + ] IF: Install Default S.Q.L. Data

/*
 ============================================================================================================
 +
 + Internal Application: Unlink and Secure-Delete Installation System
 +
 ============================================================================================================
*/

if ($_GET["InternalApplication"] == "Unlink_Installation") {

	echo ("<HR><CENTER>Unlinking Installation Files</CENTER><HR><BR>");

	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Removing Default S.Q.L. Database Server Structure Generator File and Index Files... Please Wait.<BR>");

if (unlink("./Architect/MySQL/MySQL_Generator.php") && unlink("./Architect/MySQL/index.php") && unlink("./Architect/index.php") && unlink("./Architect/ToolKit/index.php") && unlink("./Architect/ToolKit/Installation_ToolKit.php")) {

	echo ("[ Done ]<BR><BR>");

} else {

	echo ("<FONT COLOR=\"#CD0000\">***</FONT> Architect: Error, I was not able to Secure-Delete the Files: <I>'./Architect/MySQL/MySQL_Generator.php', './Architect/MySQL/index.php', './Architect/ToolKit/index.php', './Architect/ToolKit/Installation_ToolKit.php'</I> Please manually Secure-Delete this File before proceeding.<BR>");

} // [ + ] IF: Internal Application: Unlink_Installation Is Activated

	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Removing=>Architect=>MySQL Directory... Please Wait.<BR>");
	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Removing=>Architect=>ToolKit Directory... Please Wait.<BR>");

if (rmdir("./Architect/MySQL/") && rmdir("./Architect/ToolKit/")) {

	echo ("[ Done ]<BR><BR>");

} else {

	echo ("<FONT COLOR=\"#CD0000\">***</FONT> Architect: Error: I was not able to Remove the Directory: './Architect/MySQL/' or './Architect/ToolKit/' Please manually Remove this Directory before proceeding.<BR>");

} // [ + ] IF: Remove Directory: Architect=>Installation Directories and Installation Tools

	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Removing=>Architect Directory... Please Wait.<BR>");

if (rmdir("./Architect/")) {

	echo ("[ Done ]<BR><BR>");

} else {

	echo ("<FONT COLOR=\"#CD0000\">***</FONT> Architect: Error: I was not able to Remove the Directory: './Architect/' Please manually Remove this Directory before proceeding.<BR>");

} // [ + ] IF: Remove Directory: Installation Directory

	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Removing Installation Files... Please Wait.<BR>");

if (unlink("./$_INTERNAL_FILE_ARCHITECT")) {

	echo ("[ Done ]<BR><BR>");

	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Redirecting To This <B>$_PROJECT_STRING_NAME_EXTENDED Installation</B> Login Application Module... Please Wait 15 Seconds.<BR><BR>");

	echo ("<META HTTP-EQUIV=Refresh CONTENT=\"15; URL=$_INTERNAL_FILE_KERNEL?$_INTERNAL_APPLICATION_MODULE_MEMBER=Login\">");

} else {

	echo ("<BIG><FONT COLOR=\"#CD0000\">***</FONT> Architect: Error: I was not able to Secure-Delete the File: '$_INTERNAL_FILE_ARCHITECT' Please manually Secure-Delete this File before proceeding.</BIG><BR>");

} // [ + ] IF: Delete Architect Installation Files

	echo ("<BIG><FONT COLOR=\"#CD0000\">***</FONT> Architect: I am Testing the Pre-Hyper-Text-Post-Processor mail() Function. Please wait...</BIG><BR>");

if (mail($_ACCESS_ELECTRONIC_MAIL_ADDRESS_SYSTEM_ADMINISTRATOR,"$_PROJECT_STRING_NAME_EXTENDED - Testing the Pre-Hyper-Text-Post-Processor Server mail() Function.","
-------This is a test to see if this specific Web Server Pre-Hyper-Text-Post-Processor mail() Function is working-------

-------------------------------------------------------
If you have receieved this Non-Encrypted Electronic Mail Message $_PROJECT_STRING_NAME_EXTENDED was installed successfully to your web server through Architect.
The only thing left to do now is to manually configure this installation of $_PROJECT_STRING_NAME_EXTENDED
-------------------------------------------------------
* Local Server Internet Protocol Address: $_GLOBAL_LOCAL_SERVER_ADDRESS
* Local Server Software Information: $_GLOBAL_LOCAL_SERVER_SOFTWARE
* Remote Server Internet Protocol Address ( Who Installed This ): $_GLOBAL_REMOTE_SERVER_ADDRESS
* Local Server Electronic Mail Message Timestamp: $_GLOBAL_LOCAL_SERVER_DATE
------------------------------------------------------
Have a nice day !

- $_PROJECT_STRING_NAME_ROBOT_ELECTRONIC_MAIL
")) {

	echo ("<BIG><FONT COLOR=\"#CD0000\">***</FONT> Architect: I have Tested the Pre-Hyper-Text-Post-Processor Server mail() Function and it seems to be working.</BIG><BR>");

} else {

	echo ("<BIG><FONT COLOR=\"#CD0000\">***</FONT> Architect: Error: the Pre-Hyper-Text-Post-Processor Server mail() Function is not working. Correct this before using $_PROJECT_STRING_NAME_EXTENDED.</BIG>");

} // [ + ] IF: Send Electronic Mail Address: System Test

} // [ + ] IF: Delete All Architect Installation Files

/*
 ============================================================================================================
 +
 + Internal Applications: Information Applications
 +
 ============================================================================================================
*/

 /*
 ============================================================================================================
 + Internal Application: Software Project System Information
 ============================================================================================================
*/

if ($_GET["InternalApplication"] == "SoftwareProject_Information") {

echo ("
		<HR><CENTER>$_PROJECT_STRING_NAME_EXTENDED Information</CENTER><HR>
		<B>$_PROJECT_STRING_NAME_EXTENDED Software Project Version Information</B><BR>
		*&nbsp;Extended Version: <I>$_PROJECT_VERSION_EXTENDED</I><BR>
		*&nbsp;Short Version: <I>$_PROJECT_VERSION_SHORT</I><BR><BR>

		<B>Official $_PROJECT_STRING_NAME_EXTENDED Software Project Web Servers</B><BR><BR>

		Software Project GIT Hosting<BR>
		*&nbsp;BITBucket Secure Server <I>$_PROJECT_SERVER_URL_BITBUCKET_SECURE</I><BR>
		*&nbsp;BITBucket Clear-Text Server <I>$_PROJECT_SERVER_URL_BITBUCKET_CLEARTEXT</I><BR><BR>

		*&nbsp;GITHub Secure Server <I>$_PROJECT_SERVER_URL_GITHUB_SECURE</I><BR>
		*&nbsp;GITHub Clear-Text Server <I>$_PROJECT_SERVER_URL_GITHUB_CLEARTEXT</I><BR><BR>

		*&nbsp;GITLab Secure Server <I>$_PROJECT_SERVER_URL_GITLAB_SECURE</I><BR>
		*&nbsp;GITLab Clear-Text Server <I>$_PROJECT_SERVER_URL_GITLAB_CLEARTEXT</I><BR><BR>

		External Software Project Hosting<BR>
		*&nbsp;Source Forge Secure Server: <I>$_PROJECT_SERVER_URL_SOURCEFORGE_SECURE</I><BR>
		*&nbsp;Source Forge Clear-Text Server: <I>$_PROJECT_SERVER_URL_SOURCEFORGE_CLEARTEXT</I><BR><BR>

		$_PROJECT_DEVELOPER_STRING_NAME_EXTENDED Internal Project Hosting<BR>
		*&nbsp;Data Validation Secure Server: <I>$_PROJECT_SERVER_URL_SECURE/$_PROJECT_STRING_NAME_UNIX</I><BR>
		*&nbsp;Data Validation Clear-Text Server: <I>$_PROJECT_SERVER_URL_CLEARTEXT/$_PROJECT_STRING_NAME_UNIX</I><BR><BR>

		$_PROJECT_DEVELOPER_STRING_NAME_EXTENDED Official Servers<BR>
		*&nbsp;Data Validation Secure Server: <I>$_PROJECT_SERVER_URL_SECURE</I><BR>
		*&nbsp;Data Validation Clear-Text Server: <I>$_PROJECT_SERVER_URL_CLEARTEXT</I>
");

} // [ + ] IF: Internal Application: SoftwareProject_Information Is Activated

/*
 ============================================================================================================
 + Internal Application: PHP Server Engine Information
 ============================================================================================================
*/

if ($_GET["InternalApplication"] == "PHP_Information") {

	echo ("<HR>Currenty Running PHP Server Engine Information<HR><BR>");
	phpinfo();
	echo ("<BR>");

} // [ + ] IF: Internal Application: PHP_Information Is Activated

/*
 ============================================================================================================
 + Internal Application: PHP Extensions
 ============================================================================================================
*/

if ($_GET["InternalApplication"] == "PHP_Extensions") {

	echo ("<HR>Currently Loaded PHP Extensions<HR><BR>");
	print_r(get_loaded_extensions());
	echo ("<BR>");

} // [ + ] IF: Internal Application: PHP_Extensions Is Activated

/*
 ============================================================================================================
 + Internal Application: File Permissions
 ============================================================================================================
*/

if ($_GET["InternalApplication"] == "File_Permissions") {

echo ("
		<HR>
			Directories, Files and Permissions List
		<HR>
			Nothing here yet.
");

} // [ + ] IF: Internal Application: File_Permissions Is Activated

/*
 ============================================================================================================
 + Internal Application: Server Software System Information
 ============================================================================================================
*/

if ($_GET["InternalApplication"] == "ServerSoftware_Information") {

echo ("
		<HR>
			<B>Detailed Server Software Information</B>
		<HR>

<B>Local Server Date and Time Information</B><BR>
*&nbsp;Local Server Date: $_GLOBAL_LOCAL_SERVER_DATE<BR>
*&nbsp;Local Server Date ( RFC ): $_GLOBAL_LOCAL_SERVER_DATE_RFC<BR>
*&nbsp;Local Server Time ( Hours ): $_GLOBAL_LOCAL_SERVER_DATE_HOURS<BR>
*&nbsp;Local Server Time ( Minutes ): $_GLOBAL_LOCAL_SERVER_DATE_MINUTES<BR>
*&nbsp;Local Server Time ( Seconds ): $_GLOBAL_LOCAL_SERVER_DATE_SECONDS<BR><BR>

<B>Local Server Software Information</B><BR>
*&nbsp;Local Server Gateway Interface: $_GLOBAL_LOCAL_SERVER_GATEWAY_INTERFACE<BR>
*&nbsp;Local Server Internet Protocol Address: $_GLOBAL_LOCAL_SERVER_ADDRESS<BR>
*&nbsp;Local Server Name: $_GLOBAL_LOCAL_SERVER_NAME<BR>
*&nbsp;Local Server Software: $_GLOBAL_LOCAL_SERVER_SOFTWARE<BR>
*&nbsp;Local Server Protocol: $_GLOBAL_LOCAL_SERVER_PROTOCOL<BR><BR>

<B>Remote Server Software Information</B><BR>
*&nbsp;Remote Server Internet Protocol Address: $_GLOBAL_REMOTE_SERVER_ADDRESS<BR>
*&nbsp;Remote Server HostName: $_GLOBAL_REMOTE_SERVER_HOSTNAME<BR>
*&nbsp;Remote Server Port: $_GLOBAL_REMOTE_SERVER_PORT<BR>
*&nbsp;Remote Server User: $_GLOBAL_REMOTE_USER
");

} // [ + ] IF: Internal Application: ServerSoftware_Information Is Activated

/*
 ============================================================================================================
 +
 + Hyper-Text-Markup-Language Document: End
 +
 ============================================================================================================
*/

	echo ("<HR><CENTER>Copyright <BIG><B>&copy;</B></BIG> <A HREF=\"https://www.GitHub.com/TinkeSoftware\" TARGET=\"_NEW\" TITLE=\":: $_PROJECT_DEVELOPER_STRING_NAME_EXTENDED On :: GitHub\">$_PROJECT_DEVELOPER_STRING_NAME_EXTENDED</A>, <A HREF=\"$_PROJECT_SERVER_URL_SOURCEFORGE_SECURE\" TITLE=\":: $_PROJECT_STRING_NAME_EXTENDED Software Project On :: SourceForge ::\">$_PROJECT_STRING_NAME_EXTENDED</A>, <A HREF=\"mailto:GCJohnsonChevalier@Protonmail.com\" TITLE=\":: Send Electronic Mail Message To :: GCJohnsonChevalier@Protonmail.com ::\">Gary Christopher Johnson</A>, 2000 - 2023.</CENTER><HR></TD></TR></TABLE>
	</BODY>
</HTML>
");
?>