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
 + - File Location: root->Cerberus->Architect.php
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
 +
 + [ @ ] Cerberus Content Management System :: Architect Application
 +
 +
 +
 ================================================================
*/

/*
 ================================================================
 +
 +
 + [ @ ] Error Handling Systems
 +
 +
 ================================================================
*/

error_reporting("E_WARNING ^ E_NOTICE");

/*
 ================================================================
 +
 +
 + [ @ ] Global Variables
 +
 +
 ================================================================
*/


/*
 ================================================================
 +
 + Local Server Variables
 +
 ================================================================
*/

/*
 ================================================================
 + Local Server Date, Time and Referrer
 ================================================================
*/

$_GLOBAL_LOCAL_SERVER_DATE								= date("l, F j, Y g:i:s A");
$_GLOBAL_LOCAL_SERVER_DATE_WITH_SEPARATION						= date("l:F:j:Y:h:i:s:A");
$_GLOBAL_LOCAL_SERVER_DATE_RFC								= date("r");
$_GLOBAL_LOCAL_SERVER_DATE_HOURS							= date("h");
$_GLOBAL_LOCAL_SERVER_DATE_MINUTES							= date("i");
$_GLOBAL_LOCAL_SERVER_DATE_SECONDS							= date("s");
$_GLOBAL_LOCAL_SERVER_HTTP_REFERRER							= $_SERVER['HTTP_REFERER'];

/*
 ================================================================
 +
 + Remote Server Variables
 +
 ================================================================
*/

/*
 ================================================================
 + Remote Server Connection
 ================================================================
*/

$_GLOBAL_REMOTE_SERVER_ADDRESS								= $_SERVER['REMOTE_ADDR'];
$_GLOBAL_REMOTE_SERVER_HOSTNAME								= $_SERVER['REMOTE_HOST'];
$_GLOBAL_REMOTE_SERVER_PORT								= $_SERVER['REMOTE_PORT'];
$_GLOBAL_REMOTE_USER									= $_SERVER['REMOTE_USER'];

/*
 ================================================================
 +
 + Local Server Protocol Variables
 +
 ================================================================
*/

/*
 ================================================================
 + Local Server Connection Information Protocol Variables
 ================================================================
*/

$_GLOBAL_LOCAL_SERVER_GATEWAY_INTERFACE							= $_SERVER['GATEWAY_INTERFACE'];
$_GLOBAL_LOCAL_SERVER_ADDRESS								= $_SERVER['SERVER_ADDR'];
$_GLOBAL_LOCAL_SERVER_NAME								= $_SERVER['SERVER_NAME'];
$_GLOBAL_LOCAL_SERVER_SOFTWARE								= $_SERVER['SERVER_SOFTWARE'];
$_GLOBAL_LOCAL_SERVER_PROTOCOL								= $_SERVER['SERVER_PROTOCOL'];

/*
 ================================================================
 + Local Server Connection Request Protocol Variables
 ================================================================
*/

$_GLOBAL_LOCAL_SERVER_REQUEST_METHOD							= $_SERVER['REQUEST_METHOD'];
$_GLOBAL_LOCAL_SERVER_REQUEST_TIME							= $_SERVER['REQUEST_TIME'];
$_GLOBAL_LOCAL_SERVER_REQUEST_TIME_FLOAT						= $_SERVER['REQUEST_TIME_FLOAT'];
$_GLOBAL_LOCAL_SERVER_QUERY_STRING							= $_SERVER['QUERY_STRING'];
$_GLOBAL_LOCAL_SERVER_DOCUMENT_ROOT							= $_SERVER['DOCUMENT_ROOT'];

/*
 ================================================================
 + Local Server Hyper-Text-Transfer-Protocol Variables
 ================================================================
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
 ================================================================
 +
 +
 + [ @ ] System Configuration Settings
 +
 +
 ================================================================
*/

/*
 ================================================================
 +
 + System Configuration Files Inclusion
 +
 ================================================================
*/

include_once("./System/Configuration/Global_Configuration.php");

/*
 ================================================================
 +
 +
 + [ @ ] Hyper-Text-Markup-Language Document-Data Generation: Start
 +
 +
 ================================================================
*/

echo ("<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01 Transitional//EN\" \"http://www.w3.org/TR/html4/loose.dtd\">

<HTML>
	<HEAD>
		<TITLE>Cerberus Content Management System - Architect => Installation Process</TITLE>
		<META HTTP-EQUIV=\"Content-Type\" CONTENT=\"text/html;charset=utf-8\">
		<LINK REL=\"stylesheet\" HREF=\"./Theme/Global/Style_Sheet/Style.css\" TYPE=\"text/css\">
	</HEAD>

	<BODY>
		<TABLE WIDTH=\"100%\"><TR><TD VALIGN=\"top\">
");

/*
 ================================================================
 +
 + Installation Form
 +
 ================================================================
*/

/*
 ================================================================
 + Installation Form Post Variables
 ================================================================
*/

$_INSTALL_FORM_POST_DATABASE_SERVER_HOSTNAME						= $_POST['post_sql_database_server_hostname'];
$_INSTALL_FORM_POST_DATABASE_SERVER_USERNAME						= $_POST['post_sql_database_server_username'];
$_INSTALL_FORM_POST_DATABASE_SERVER_PASSWORD						= $_POST['post_sql_database_server_password'];
$_INSTALL_FORM_POST_DATABASE_SERVER_DATABASE_NAME					= $_POST['post_sql_database_server_database_name'];
$_INSTALL_FORM_POST_DATABASE_SERVER_DATABASE_NAME_TABLE_PREFIX				= $_POST['post_sql_database_server_database_name_table_prefix'];
$_INSTALL_FORM_POST_SYSTEM_ELECTRONIC_MAIL_ADDRESS					= $_POST['post_system_electronic_mail_address'];
$_INSTALL_FORM_POST_URL_SECURE								= $_POST['post_url_secure'];
$_INSTALL_FORM_POST_URL_SECURE_SSL							= $_POST['post_url_secure_ssl'];
$_INSTALL_FORM_POST_URL_SECURE_OPENSSL							= $_POST['post_url_secure_openssl'];
$_INSTALL_FORM_POST_URL_SECURE_TLS							= $_POST['post_url_secure_tls'];
$_INSTALL_FORM_POST_URL_CLEARTEXT							= $_POST['post_url_cleartext'];
$_INSTALL_FORM_GET_FILE_CONTENTS_SYSTEM_CONFIGURATION_FILE				= file_get_contents("./System/Configuration/Global_Configuration.php");
$_INSTALL_FORM_GET_FILE_CONTENTS_SYSTEM_DATABASE_SERVER_CLASS_FILE			= file_get_contents("./System/Configuration/Global_SQL_Server_Database_Class.php");

/*
 ================================================================
 + Database Create Form Post Variables
 ================================================================
*/

$_INSTALL_FORM_POST_CREATE_DATABASE_SERVER_DATABASE_HOSTNAME				= $_POST['post_create_sql_database_server_database_hostname'];
$_INSTALL_FORM_POST_CREATE_DATABASE_SERVER_DATABASE_USERNAME				= $_POST['post_create_sql_database_server_database_username'];
$_INSTALL_FORM_POST_CREATE_DATABASE_SERVER_DATABASE_PASSWORD				= $_POST['post_create_sql_database_server_database_password'];
$_INSTALL_FORM_POST_CREATE_DATABASE_SERVER_DATABASE_NAME				= $_POST['post_create_sql_database_server_database_name'];
$_INSTALL_FORM_POST_CREATE_DATABASE_SERVER_DATABASE_NAME_DATABASE_TABLE_PREFIX		= $_POST['post_create_sql_database_server_database_name_table_prefix'];

/*
 ================================================================
 + IF: Installation Form Has Not Posted, Show Installation Form
 ================================================================
*/

if (!$_INSTALL_FORM_POST_DATABASE_SERVER_HOSTNAME) {

echo ("
		<HR><CENTER><BIG><B>[ <A HREF=\"https://www.SourceForge.net/projects/cerberuscms/files/Documentation/\" TARGET=\"_NEW\" TITLE=\":: Read The Cerberus Content Management System Architect Installation Documentation ::\">Architect Installation Documentation</A> ]</B></BIG></CENTER><HR>
		<BR>
		<FORM ACTION=\"?\" METHOD=\"post\">
		Database Server Connection Settings<HR>
		* <I>S.Q.L. Database Server Host-Name</I>:<BR>
		[ Usually: 'localhost' ]<BR>
			<INPUT TYPE=\"TEXT\" NAME=\"post_sql_database_server_hostname\" VALUE=\"localhost\"><BR>
		* <I>S.Q.L. Database Server Access User-Name</I>:<BR>
			<INPUT TYPE=\"TEXT\" NAME=\"post_sql_database_server_username\"><BR>
		* <I>S.Q.L. Database Server Access Password</I>:<BR>
			<INPUT TYPE=\"password\" NAME=\"post_sql_database_server_password\"><BR>
		* <I>S.Q.L. Database Server Database Name</I>:<BR>
			<INPUT TYPE=\"TEXT\" NAME=\"post_sql_database_server_database_name\"><BR>
		* <I>S.Q.L. Database Server Name Table' Prefix</I>:<BR>
		[ Example: <I>'MySQLDatabaseTables'</I> ]<BR>
			<INPUT TYPE=\"TEXT\" NAME=\"post_sql_database_server_database_name_table_prefix\"><BR><BR>

		System Notification Settings<HR>
		* <I>Server Notifications Electronic Mail Address</I>:<BR>
		[ For System / Activity Notifications ]<BR>
			<INPUT TYPE=\"text\" NAME=\"post_system_electronic_mail_address\"><BR><BR>

		System Hyper-Text-Transfer-Protocol Settings<HR>
		* <I>Secure Uniform Resource Locator With Path-To-Cerberus Directory</I>:<BR>
		[ General Secure Uniform Resource Location, Example: https://TinkeSoftware.com/Cerberus ]<BR>
			<INPUT TYPE=\"TEXT\" NAME=\"post_url_secure\"><BR>
		[ Secure Sockets Layer ( S.S.L. ) Uniform Resource Location, Example: https://SSL.TinkeSoftware.com/Cerberus ]<BR>
			<INPUT TYPE=\"TEXT\" NAME=\"post_url_secure_ssl\"><BR>
		[ Open Secure Sockets Layer ( OpenS.S.L. ) Uniform Resource Location, Example: https://OpenSSL.TinkeSoftware.com/Cerberus ]<BR>
			<INPUT TYPE=\"TEXT\" NAME=\"post_url_secure_openssl\"><BR>
		[ Transport Layer Security Uniform Resource Location, Example: https://TLS.TinkeSoftware.com/Cerberus ]<BR>
			<INPUT TYPE=\"TEXT\" NAME=\"post_url_secure_tls\"><BR>
		* <I>Clear-Text Uniform Resource Locator With Path-To-Cerberus Directory</I>:<BR>
		[ Example: http://TinkeSoftware.com/Cerberus ]<BR>
			<INPUT TYPE=\"TEXT\" NAME=\"post_url_cleartext\"><BR>
			<INPUT TYPE=\"submit\" VALUE=\"Start Installation\">
		</FORM><BR><BR>

		* <I>Current Global System Configuration Strings</I>:<BR>
		<FORM>
			<TEXTAREA ROWS=\"10\" COLS=\"110\">$_INSTALL_FORM_GET_FILE_CONTENTS_SYSTEM_CONFIGURATION_FILE</TEXTAREA>
		</FORM><BR><BR>

		* <I>Current Global System Database Server Class File</I>:<BR>
		<FORM>
			<TEXTAREA ROWS=\"10\" COLS=\"110\">$_INSTALL_FORM_GET_FILE_CONTENTS_SYSTEM_DATABASE_SERVER_CLASS_FILE</TEXTAREA>
		</FORM><BR><BR>

		<B>Installation Notes</B><HR>
		[&nbsp;!&nbsp;]&nbsp;*Nix Server Users ( Linux, Unix, B.S.D., G.N.U., etcetera. ): Please <A HREF=\"https://en.wikipedia.org/wiki/Chmod\" TARGET=\"_NEW\" TITLE=\":: Open & Display The Wikipedia Entry For :: Access Control List / Change-Mode ( CHMOD ) ::\">Change-Mode ( CHMOD )</A> the following<BR>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;directories, subdirectories and each file within these directories to the correct read and write permissions before proceeding with this installation:<BR>
		[&nbsp;*&nbsp;]&nbsp;Applications<BR>
		[&nbsp;*&nbsp;]&nbsp;Maintenance<BR>
		[&nbsp;*&nbsp;]&nbsp;Member<BR>
		[&nbsp;*&nbsp;]&nbsp;System<BR>
		[&nbsp;*&nbsp;]&nbsp;Temporary<BR>
		[&nbsp;*&nbsp;]&nbsp;Theme<BR>
		[&nbsp;*&nbsp;]&nbsp;Upload<BR><BR>

		[&nbsp;!&nbsp;]&nbsp;*Nix Server Users ( Linux, Unix, B.S.D., G.N.U., etc. ): Please refer to the CerberusCMS Architect Installation Manual for a complete list of permissions that should be applied to each individual file.<BR><BR>
		[&nbsp;!&nbsp;]&nbsp;This Architect Installation Application is capable of setting the correct file permissions to each directory and file within this system. Click [ <A HREF=\"?InternalApplication&#61;File_Permissions\" TITLE=\":: Execute The File Permissions Settings Loop ::\">here</A> ] to run the File Permissions Loop.<BR>
		[&nbsp;!&nbsp;]&nbsp;Microsoft Windows Server Users: All of Cerberus' Files are set to the 'Read Only' flag by default. In order to install Cerberus correctly you must remove the 'Read Only' flag on each file listed in the Architect Installation Walkthrough.<BR>
		[&nbsp;!&nbsp;]&nbsp;If you would like additional security for the Administration Control Panel please configure an <I>.htaccess</I> file and then install that configured <I>.htaccess</I> file into the <I>./Module/Administration/</I> directory before proceeding with this installation.<BR><BR>

		[&nbsp;!&nbsp;]&nbsp;Cerberus Content Management Systems' programming code has been tested manually as well as by vulnerability and exploit scanning software<BR>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;and the entire system has passed checks against all rudimentary vulnerabilities and exploit techniques, such as:<BR>
		[&nbsp;*&nbsp;]&nbsp;S.Q.L. Injection Attacks<BR>
		[&nbsp;*&nbsp;]&nbsp;Cookie Injection Attacks<BR>
		[&nbsp;*&nbsp;]&nbsp;MD-5 / SHA-128 / SHA-256 Hash Decryption Attacks<BR>
		[&nbsp;*&nbsp;]&nbsp;Cross Site Scripting Attacks<BR>
		[&nbsp;*&nbsp;]&nbsp;Large File Upload Attacks<BR>
		[&nbsp;*&nbsp;]&nbsp;Local and Remote File Inclusion Attacks<BR>
		[&nbsp;*&nbsp;]&nbsp;Local and Remote Code Execution Attacks<BR><BR>

		[&nbsp;!&nbsp;]&nbsp;Please keep this server software, this server operating system kernels and its applications up-to-date as well as set server security policies that comply with security standards to prevent any exploitation of the data on this server.<BR>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;It is up to the Administrator of this Web Server that is running Cerberus Content Management System to install Cerberus correctly by following each of the important steps stated above,<BR>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;as well as all of the steps outlined in the documentation file for this project - not doing so may leave the Internal System open to attacks. Double check the steps before proceeding.<BR><BR>

		[&nbsp;!&nbsp;]&nbsp;This Installation Application has not been secured from vulnerabilities. Do not leave this Installation Web Application on a live server for longer than is needed to install Cerberus Content Management System.<BR><BR>

		[&nbsp;!&nbsp;]&nbsp;If you are unable to install the S.Q.L. Tables automatically by this application, please click [ <A HREF=\"./Architect/MySQL/MySQL_Generator.php\" TITLE=\":: Open & Display The S.Q.L. Data Generator Application ::\" TARGET=\"_NEW\">here</A> ] to manually generate the S.Q.L. Structure and S.Q.L. Data.<BR>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Once the S.Q.L. Structure and its data is generated correctly, copy the S.Q.L. Tables with generated Prefix Name and then manually paste the generated S.Q.L. Data Structure into your server S.Q.L. Manager / Editor.<BR><BR>

		<B>Post-Installation Tools</B><HR>
		=>&nbsp;<A HREF=\"?InternalApplication&#61;Create_Database\" TARGET=\"_NEW\" TITLE=\":: Open & Display The S.Q.L. Database Server Creation Application ::\">S.Q.L. Database Server Creator</A><BR>
		=>&nbsp;<A HREF=\"./Architect/MySQL/MySQL_Generator.php\" TARGET=\"_NEW\" TITLE=\":: Open & Display The S.Q.L. Data Structure Generator Application ::\">S.Q.L. Data Structure Generator</A><BR>
		=>&nbsp;<A HREF=\"./Architect/ToolKit/Installation_ToolKit.php\" TARGET=\"_NEW\" TITLE=\":: Open & Display The Post-Installation ToolKit ::\">Post-Installation Toolkit</A><BR>
		=>&nbsp;<A HREF=\"?InternalApplication&#61;File_Permissions\" TITLE=\":: Open & Display The Change-Mode ( CHMOD ) File Permissions Loop ::\">File Permissions Loop</A><BR>
		=>&nbsp;<A HREF=\"./Maintenance/Diagnostics/Diagnostics.php\" TARGET=\"_NEW\" TITLE=\":: Open & Display The System Diagnostics Application ::\">System Diagnostics Application</A><BR><BR>

		<B>Server Software, Server Software Engine Versions and Extended Information</B><HR>
		<B>Detailed Server Software and User-Interface Information:</B><BR>
		=>&nbsp;<A HREF=\"?InternalApplication&#61;ServerSoftware_Information\" TITLE=\":: View Detailed Information About What Server Software Versions Are Currently Running On This Web Server ::\">Information About What Server Software Versions Are Currently Running On This Web Server</A><BR><BR>

		<B>Cerberus Content Management System Information:</B><BR>
		=>&nbsp;<A HREF=\"?InternalApplication&#61;Cerberus_Information\" TITLE=\":: View Detailed Information About What Cerberus Content Management System Version Is Currently Running On This Web Server ::\">Information About What CerberusCMS Version Is Currently Running On This Web Server</A><BR><BR>
		
		<B>Post Hypertext Preprocessor ( PHP ) Interpreter & Zend Engine Information:</B><BR>
		=>&nbsp;<A HREF=\"?InternalApplication&#61;PHP_Information\" TITLE=\":: View Detailed Information About What P.H.P. Version Is Currently Running On This Web Server ::\">Information About What P.H.P. Server Engine Is Currently Running On This Web Server</A></B><BR>
		=>&nbsp;<A HREF=\"?InternalApplication&#61;PHP_Extensions\" TITLE=\":: View Detailed Information About What P.H.P. Server Extensions Are Currently Loaded On This P.H.P. Engine Running On This Web Server ::\">Information About What P.H.P. Extensions Are Currently Loaded On This Executed P.H.P. Engine</A></B><BR><BR>

		<B>Internal Documents</B><HR>
		=>&nbsp;<A HREF=\"About.txt\" TITLE=\":: Open & Display The About File ::\">About</A><BR>
		=>&nbsp;<A HREF=\"Bug_Tracker.txt\" TITLE=\":: Open & Display The Bug Tracker File ::\">Bug Tracker</A><BR>
		=>&nbsp;<A HREF=\"Change-Log.txt\" TITLE=\":: Open & Display The Change Log File ::\">Change Log</A><BR>
		=>&nbsp;<A HREF=\"File-List.txt\" TITLE=\":: Open & Display The File List Document - This Document Was Generated By The Programmers of Cerberus, It Shows Detailed File and Directory Listings, Progress Reports On Files Within The Default Cerberus Releases ::\">File List</A><BR>
		=>&nbsp;<A HREF=\"License.txt\" TITLE=\":: Open & Display The License File ::\">License</A><BR>
		=>&nbsp;<A HREF=\"Read_Me.txt\" TITLE=\":: Open & Display The Read Me File ::\">Read Me</A><BR>
		=>&nbsp;<A HREF=\"Security.txt\" TITLE=\":: Open & Display The Security Notes File ::\">Security Notes</A><BR>
		=>&nbsp;<A HREF=\"To-Do.txt\" TITLE=\":: Open & Display The To-Do Notes File ::\">To-Do Notes</A><BR>
		=>&nbsp;<A HREF=\"Version.txt\" TITLE=\":: Open & Display The Version Notes File ::\">Version Notes</A><BR><BR>

		<B>Hand Modify and Configure These Specific Documents Before Proceeeding With This Installation:</B><BR>
		=>&nbsp;<A HREF=\"robots.txt\" TITLE=\":: Open & Display The Robots File ::\">Robots</A><BR>
		=>&nbsp;<A HREF=\"TOS-PP.txt\" TITLE=\":: Open & Display The Terms of Service & Privacy Policy File ::\">Terms of Service & Privacy Policy</A><BR><BR>
");

} else {

/*
 ================================================================
 + Delete Original System Database Server Connection Configuration File
 ================================================================
*/

	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Secure-Deleting Original System Configuration File...<BR>");

		unlink("./System/Configuration/Global_SQL_Server_Configuration.php");

	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Creating New System Configuration File With Installer Specifications...<BR>");

/*
 ================================================================
 + Create New System Database Server Connection Configuration File
 ================================================================
*/

/*
 ================================================================
 + Define New System Database Server Connection Configuration File Variables
 ================================================================
*/

$_ACCESS_FILE_FILENAME					= "./System/Configuration/Global_SQL_Server_Configuration.php";
$_ACCESS_FILE_DATA					= "<?PHP
\$_ACCESS_SYSTEM_ELECTRONIC_MAIL_ADDRESS		= \"$_INSTALL_FORM_POST_SYSTEM_ELECTRONIC_MAIL_ADDRESS\";
\$_ACCESS_DATABASE_SERVER_HOSTNAME 			= \"$_INSTALL_FORM_POST_DATABASE_SERVER_HOSTNAME\";
\$_ACCESS_DATABASE_SERVER_USERNAME 			= \"$_INSTALL_FORM_POST_DATABASE_SERVER_USERNAME\";
\$_ACCESS_DATABASE_SERVER_PASSWORD 			= \"$_INSTALL_FORM_POST_DATABASE_SERVER_PASSWORD\";
\$_ACCESS_DATABASE_SERVER_DATABASE_NAME 		= \"$_INSTALL_FORM_POST_DATABASE_SERVER_DATABASE_NAME\";
\$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX 	= \"$_INSTALL_FORM_POST_DATABASE_SERVER_DATABASE_NAME_TABLE_PREFIX\";
\$_ACCESS_URL_CLEARTEXT 				= \"$_INSTALL_FORM_POST_URL_CLEARTEXT\";
\$_ACCESS_URL_SECURE					= \"$_INSTALL_FORM_POST_URL_SECURE\";
\$_ACCESS_URL_SECURE_SSL				= \"$_INSTALL_FORM_POST_URL_SECURE_SSL\";
\$_ACCESS_URL_SECURE_OPENSSL				= \"$_INSTALL_FORM_POST_URL_SECURE_OPENSSL\";
\$_ACCESS_URL_SECURE_TLS				= \"$_INSTALL_FORM_POST_URL_SECURE_TLS\";
?>
";

/*
 ================================================================
 + Write Data To New System Configuration File
 ================================================================
*/

$_OPEN_ACCESS_FILE_FILENAME 								= fopen($_ACCESS_FILE_FILENAME, "w");

fwrite($_OPEN_ACCESS_FILE_FILENAME, "$_ACCESS_FILE_DATA");
fclose($_OPEN_ACCESS_FILE_FILENAME);

echo ("
								<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT>&nbsp;Configuration Files Created !<BR><BR>
								&nbsp;*&nbsp;=>&nbsp;<A HREF=\"?InternalApplication&#61;Create_Database\" TITLE=\":: Create S.Q.L. Database ::\">Create S.Q.L. Database</A><BR>
								&nbsp;*&nbsp;=>&nbsp;<A HREF=\"?InternalApplication&#61;Install_Defaults\" TITLE=\":: Install Administration Account ::\">Install Administration Account</A><BR>
								&nbsp;*&nbsp;=>&nbsp;<A HREF=\"?InternalApplication&#61;Unlink_Installation\" TITLE=\":: Unlink and Secure-Delete All Installation Files ::\">Skip To Removing The Installation Files Without Installing The Administration Account</A>
");

} // [ + ] IF: Installation Variables Have Executed

/*
 ================================================================
 +
 + Internal Application: Create Database
 +
 ================================================================
*/

if ($_GET["InternalApplication"] == "Create_Database") {

if (!$_INSTALL_FORM_POST_CREATE_DATABASE_SERVER_DATABASE_NAME) {

echo ("

		<FORM ACTION=\"?\" METHOD=\"post\">
		Database Server Connection Settings<HR>
		* <I>S.Q.L. Database Server Database Name</I>:<BR>
			<INPUT TYPE=\"TEXT\" NAME=\"post_create_sql_database_server_hostname\" VALUE=\"localhost\"><BR>
		* <I>S.Q.L. Database Server UserName/I>:<BR>
			<INPUT TYPE=\"TEXT\" NAME=\"post_create_sql_database_server_username\" VALUE=\"Database Server UserName\"><BR>
		* <I>S.Q.L. Database Server Password</I>:<BR>
			<INPUT TYPE=\"TEXT\" NAME=\"post_create_sql_database_server_password\" VALUE=\"Database Server Password\"><BR>
		* <I>S.Q.L. Database Server Database Name Table' Prefix</I>:<BR>
			<INPUT TYPE=\"TEXT\" NAME=\"post_create_sql_database_server_database_name_table_prefix\" VALUE=\"Database Server Database Name Table' Prefix\"><BR>
		* <I>S.Q.L. Database Server Database Name</I>:<BR>
			<INPUT TYPE=\"TEXT\" NAME=\"post_create_sql_database_server_database_name\" VALUE=\"Database Server Database Name\"><BR>
			<INPUT TYPE=\"submit\" VALUE=\"Create Database\">
		</FORM><BR><BR>
");

} else {

/*
 ================================================================
 + Connect To Specified Database Server
 ================================================================
*/

	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Attempting Connection To Specified Database Server Host Name... Please Wait.<BR>");

mysql_connect($_INSTALL_FORM_POST_CREATE_DATABASE_SERVER_DATABASE_HOSTNAME, $_INSTALL_FORM_POST_CREATE_DATABASE_SERVER_DATABASE_USERNAME, $_INSTALL_FORM_POST_CREATE_DATABASE_SERVER_DATABASE_PASSWORD);

	echo ("[ Connected ]<BR>");

/*
 ================================================================
 + Create Specified Database Name
 ================================================================
*/

	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Creating Specified Database Name... Please Wait.<BR>");

mysql_query("CREATE DATABASE $_INSTALL_FORM_POST_CREATE_DATABASE_SERVER_DATABASE_NAME") or die(mysql_error());

/*
 ================================================================
 + Connect To Created Database Server
 ================================================================
*/

	echo ("[ Done ]<BR>");
	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Attempting Connection To Created Database Name: <I>$_INSTALL_FORM_POST_CREATE_DATABASE_SERVER_DATABASE_NAME</I>... Please Wait.<BR>");

mysql_select_db($_INSTALL_FORM_POST_CREATE_DATABASE_SERVER_DATABASE_NAME);

/*
 ================================================================
 + Install Default S.Q.L. Structure
 ================================================================
*/

	echo ("[ Done ]<BR>");
	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Installing S.Q.L. Database Server Database Structure... Please Wait.<BR>");

/*
 ================================================================
 + Install Default S.Q.L. Server Database Tables
 ================================================================
*/

/* Applications */

mysql_query("CREATE TABLE \"$_INSTALL_FORM_POST_CREATE_DATABASE_SERVER_DATABASE_NAME_DATABASE_TABLE_PREFIX\"_applications (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
application_file_name VARCHAR(100),
application_file_permission CHAR(1),
application_file_status CHAR(1),
PRIMARY KEY (id)
");

/* Custom Applications */

mysql_query("
CREATE TABLE \"$_INSTALL_FORM_POST_CREATE_DATABASE_SERVER_DATABASE_NAME_DATABASE_TABLE_PREFIX\"_applications_custom (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
custom_application_data TEXT,
custom_application_name VARCHAR(250),
custom_application_time VARCHAR(50),
PRIMARY KEY (id)
");

/* Application Links */

mysql_query("CREATE TABLE \"$_INSTALL_FORM_POST_CREATE_DATABASE_SERVER_DATABASE_NAME_DATABASE_TABLE_PREFIX\"_application_links (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
application_link_name VARCHAR(250),
application_link_row CHAR(3),
application_link_url VARCHAR(250),
PRIMARY KEY (id)
");

/* Application Panels */

mysql_query("
CREATE TABLE \"$_INSTALL_FORM_POST_CREATE_DATABASE_SERVER_DATABASE_NAME_DATABASE_TABLE_PREFIX\"_application_panels (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
panel_file_name VARCHAR(250),
panel_alignment CHAR(1),
panel_row CHAR(2),
panel_file_status CHAR(1),
panel_title VARCHAR(250),
PRIMARY KEY (id)
");

/* Articles */

mysql_query("CREATE TABLE \"$_INSTALL_FORM_POST_CREATE_DATABASE_SERVER_DATABASE_NAME_DATABASE_TABLE_PREFIX\"_articles (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
article_author VARCHAR(50),
article_data TEXT,
article_time VARCHAR(50),
article_title VARCHAR(50),
PRIMARY KEY (id)
");

/* Banned Networks */

mysql_query("CREATE TABLE \"$_INSTALL_FORM_POST_CREATE_DATABASE_SERVER_DATABASE_NAME_DATABASE_TABLE_PREFIX\"_banned_networks (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
dns_address_string VARCHAR(128),
dns_address_text TEXT,
ip_address_string VARCHAR(128),
ip_address_text TEXT,
PRIMARY KEY (id)
");

/* Comments */

mysql_query("
CREATE TABLE \"$_INSTALL_FORM_POST_CREATE_DATABASE_SERVER_DATABASE_NAME_DATABASE_TABLE_PREFIX\"_comments (
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
CREATE TABLE \"$_INSTALL_FORM_POST_CREATE_DATABASE_SERVER_DATABASE_NAME_DATABASE_TABLE_PREFIX\"_file_categories (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
file_category_description VARCHAR(250),
file_category_time VARCHAR(50),
file_category_title VARCHAR(50),
PRIMARY KEY (id)
");

/* Files */

mysql_query("
CREATE TABLE \"$_INSTALL_FORM_POST_CREATE_DATABASE_SERVER_DATABASE_NAME_DATABASE_TABLE_PREFIX\"_files (
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
CREATE TABLE \"$_INSTALL_FORM_POST_CREATE_DATABASE_SERVER_DATABASE_NAME_DATABASE_TABLE_PREFIX\"_forum_forum (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
forum_access_level CHAR(1),
forum_date VARCHAR(50),
forum_description TEXT,
forum_title VARCHAR(200),
PRIMARY KEY (id)
");

/* Forum Posts */

mysql_query("
CREATE TABLE \"$_INSTALL_FORM_POST_CREATE_DATABASE_SERVER_DATABASE_NAME_DATABASE_TABLE_PREFIX\"_forum_post (
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
CREATE TABLE \"$_INSTALL_FORM_POST_CREATE_DATABASE_SERVER_DATABASE_NAME_DATABASE_TABLE_PREFIX\"_forum_topic (
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
CREATE TABLE \"$_INSTALL_FORM_POST_CREATE_DATABASE_SERVER_DATABASE_NAME_DATABASE_TABLE_PREFIX\"_links (
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
CREATE TABLE \"$_INSTALL_FORM_POST_CREATE_DATABASE_SERVER_DATABASE_NAME_DATABASE_TABLE_PREFIX\"_members (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
member_access_level CHAR(1),
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
member_ip_address_authorized VARCHAR(100),
member_ip_address_last_login VARCHAR(100),
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
member_password VARCHAR(250),
member_profile_about TEXT,
member_profile_signature TEXT,
member_registration_date VARCHAR(100),
member_registration_details TEXT,
member_security_fingerprint_cleartext TEXT,
member_security_fingerprint_hashed TEXT,
member_security_pgp_key_panel_public TEXT,
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
member_url_homepage VARCHAR(250),
member_username VARCHAR(50),
PRIMARY KEY (id)
");

/* Messenger Plain-Text-File Room */

mysql_query("
CREATE TABLE \"$_INSTALL_FORM_POST_CREATE_DATABASE_SERVER_DATABASE_NAME_DATABASE_TABLE_PREFIX\"_messenger_plain_text_file_room (
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
CREATE TABLE \"$_INSTALL_FORM_POST_CREATE_DATABASE_SERVER_DATABASE_NAME_DATABASE_TABLE_PREFIX\"_messenger_plain_text_messages (
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
CREATE TABLE \"$_INSTALL_FORM_POST_CREATE_DATABASE_SERVER_DATABASE_NAME_DATABASE_TABLE_PREFIX\"_messenger_encrypted_text_file_room (
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
CREATE TABLE \"$_INSTALL_FORM_POST_CREATE_DATABASE_SERVER_DATABASE_NAME_DATABASE_TABLE_PREFIX\"_messenger_encrypted_text_messages (
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
CREATE TABLE \"$_INSTALL_FORM_POST_CREATE_DATABASE_SERVER_DATABASE_NAME_DATABASE_TABLE_PREFIX\"_news (
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
CREATE TABLE \"$_INSTALL_FORM_POST_CREATE_DATABASE_SERVER_DATABASE_NAME_DATABASE_TABLE_PREFIX\"_news_submissions (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
news_submission_author VARCHAR(50),
news_submission_data TEXT,
news_submission_time VARCHAR(50),
PRIMARY KEY (id)
");

/* Private Messages */

mysql_query("
CREATE TABLE \"$_INSTALL_FORM_POST_CREATE_DATABASE_SERVER_DATABASE_NAME_DATABASE_TABLE_PREFIX\"_private_messages (
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
CREATE TABLE \"$_INSTALL_FORM_POST_CREATE_DATABASE_SERVER_DATABASE_NAME_DATABASE_TABLE_PREFIX\"_ranks (
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
CREATE TABLE \"$_INSTALL_FORM_POST_CREATE_DATABASE_SERVER_DATABASE_NAME_DATABASE_TABLE_PREFIX\"_settings (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
settings_safeHTML_directory VARCHAR(50),
settings_safeHTML_status CHAR(1),
settings_cookie_time VARCHAR(10),
settings_gzip_status CHAR(1),
settings_image_extension CHAR(3),
settings_language_directory VARCHAR(50),
settings_offline_status CHAR(1),
settings_site_title VARCHAR(250),
settings_smileys_directory VARCHAR(50),
settings_sound_extension VARCHAR(4),
settings_theme_directory VARCHAR(50),
settings_upload_size_private CHAR(15),
settings_upload_size_public CHAR(15),
settings_text_editor_directory VARCHAR(250),
PRIMARY KEY (id)
");

/* Shout Messages */

mysql_query("
CREATE TABLE \"$_INSTALL_FORM_POST_CREATE_DATABASE_SERVER_DATABASE_NAME_DATABASE_TABLE_PREFIX\"_shout_messages (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
message_author VARCHAR(50),
message_data VARCHAR(250),
message_time VARCHAR(50),
PRIMARY KEY (id)
");

/* Statistics */

mysql_query("
CREATE TABLE \"$_INSTALL_FORM_POST_CREATE_DATABASE_SERVER_DATABASE_NAME_DATABASE_TABLE_PREFIX\"_statistics (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
statistics_total_number_of_page_views CHAR(15),
statistics_installation_date VARCHAR(50),
PRIMARY KEY (id)
");

/* System Messages */

mysql_query("
CREATE TABLE \"$_INSTALL_FORM_POST_CREATE_DATABASE_SERVER_DATABASE_NAME_DATABASE_TABLE_PREFIX\"_system_message (
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
 ================================================================
 +
 + Internal Application: Install Default Data
 +
 ================================================================
*/

if ( $_GET["InternalApplication"] == "Install_Defaults" ) {

/*
 ================================================================
 + Install Default Data Form Post Variables
 ================================================================
*/

$_POST_ADMINISTRATOR_ELECTRONIC_MAIL_ADDRESS						= $_POST['post_administrator_electronic_mail_address'];
$_POST_ADMINISTRATOR_USERNAME								= $_POST['post_administrator_username'];
$_POST_ADMINISTRATOR_PASSWORD_1								= $_POST['post_administrator_password_1'];
$_POST_ADMINISTRATOR_PASSWORD_2								= $_POST['post_administrator_password_2'];

$_POST_ADMINISTRATOR_ELECTRONIC_MAIL_ADDRESS						= strtolower($_POST_ADMINISTRATOR_ELECTRONIC_MAIL_ADDRESS);

/*
 ================================================================
 + Administration Accounts Password Hashing System
 ================================================================
*/

$_POST_ADMINISTRATOR_PASSWORD_3								= password_hash($_POST_ADMINISTRATOR_PASSWORD_1, PASSWORD_BCRYPT);

/*
 ================================================================
 + IF: Administrator Form Has Not Posted: Display Create New Administrator Form
 ================================================================
*/

if ((!$_POST_ADMINISTRATOR_USERNAME) || (!$_POST_ADMINISTRATOR_PASSWORD_1) || (!$_POST_ADMINISTRATOR_PASSWORD_2)) {

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
 ================================================================
 + Check Passwords For Differences: IF: Passwords Match Exactly, Execute Installation
 ================================================================
*/

if ($_POST_ADMINISTRATOR_PASSWORD_1 == "$_POST_ADMINISTRATOR_PASSWORD_2") {

	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Installing Default S.Q.L. Data to Database Server Tables:<BR>");

include_once "./System/Configuration/Global_Configuration.php";

/*
 ================================================================
 + Database Server Connection Variables
 ================================================================
*/

$_MAIN_INSTALLATION_DATA_CONNECT_DATABASE						= mysql_connect($_ACCESS_DATABASE_SERVER_HOSTNAME, $_ACCESS_DATABASE_SERVER_USERNAME, $_ACCESS_DATABASE_SERVER_PASSWORD);
$_MAIN_INSTALLATION_DATA_SELECT_DATABASE						= mysql_select_db($_ACCESS_DATABASE_SERVER_DATABASE_NAME);

/*
 ================================================================
 + Connect To Database Server
 ================================================================
*/

if ($_MAIN_INSTALLATION_DATA_CONNECT_DATABASE) {

	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Connected To Database Server Host Name: </I>$_ACCESS_DATABASE_SERVER_HOSTNAME</I> Successfully.<BR>");

/*
 ================================================================
 + Connect To Database Server Database Name
 ================================================================
*/

if ($_MAIN_INSTALLATION_DATA_SELECT_DATABASE) {

	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Connected To Database Server Database Name: <I>$_ACCESS_DATABASE_SERVER_DATABASE_NAME</I> Successfully.<BR>");

	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Installing Packaged Application Module Links... Please Wait.<BR>");

/*
 ================================================================
 + Install Default Application Links
 ================================================================
*/

mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_application_links(application_link_name,application_link_row,application_link_url)VALUES('Active Members','001','?Application_Member&#61;Active_Members')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_application_links(application_link_name,application_link_row,application_link_url)VALUES('Applications','002','?Application_Member&#61;Application_List')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_application_links(application_link_name,application_link_row,application_link_url)VALUES('Articles','003','?Application_Member&#61;Articles&amp;DisplayID&#61;All')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_application_links(application_link_name,application_link_row,application_link_url)VALUES('Audio Player','004','?Application_Member&#61;Audio_Player')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_application_links(application_link_name,application_link_row,application_link_url)VALUES('Contact','005','?Application_Member&#61;Contact_Administrator')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_application_links(application_link_name,application_link_row,application_link_url)VALUES('Documentation','006','?Application_Member&#61;Documentation')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_application_links(application_link_name,application_link_row,application_link_url)VALUES('Files','007','?Application_Member&#61;Files&amp;CategoryID&#61;All')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_application_links(application_link_name,application_link_row,application_link_url)VALUES('Forum','008','?Application_Member&#61;Forum&amp;ForumID&#61;All')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_application_links(application_link_name,application_link_row,application_link_url)VALUES('Language','009','?Application_Member&#61;Language')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_application_links(application_link_name,application_link_row,application_link_url)VALUES('Legal','010','?Application_Member&#61;Legal')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_application_links(application_link_name,application_link_row,application_link_url)VALUES('Links','011','?Application_Member&#61;Links&amp;DisplayID&#61;All')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_application_links(application_link_name,application_link_row,application_link_url)VALUES('Login','012','?Application_Member&#61;Login')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_application_links(application_link_name,application_link_row,application_link_url)VALUES('Member Directory','013','?Application_Member&#61;Member_Directory')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_application_links(application_link_name,application_link_row,application_link_url)VALUES('Messenger','014','?Application_Member&#61;Messenger&amp;Display&#61;MessengerOptions')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_application_links(application_link_name,application_link_row,application_link_url)VALUES('News','015','?Application_Member&#61;News')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_application_links(application_link_name,application_link_row,application_link_url)VALUES('Referrers','016','?Application_Member&#61;Referrers&amp;Display&#61;Box')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_application_links(application_link_name,application_link_row,application_link_url)VALUES('RSS Feed','017','RSS.php')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_application_links(application_link_name,application_link_row,application_link_url)VALUES('Register','018','?Application_Member&#61;Register')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_application_links(application_link_name,application_link_row,application_link_url)VALUES('Search','019','?Application_Member&#61;Search')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_application_links(application_link_name,application_link_row,application_link_url)VALUES('Statistics','020','?Application_Member&#61;Statistics')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_application_links(application_link_name,application_link_row,application_link_url)VALUES('Submit Link','021','?Application_Member&#61;Links&amp;SubmitLink&#61;Yes')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_application_links(application_link_name,application_link_row,application_link_url)VALUES('Submit News','022','?Application_Member&#61;Submit_News')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_application_links(application_link_name,application_link_row,application_link_url)VALUES('Upload File','023','?Application_Member&#61;Upload')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_application_links(application_link_name,application_link_row,application_link_url)VALUES('Video Player','024','?Application_Member&#61;Video_Player')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_application_links(application_link_name,application_link_row,application_link_url)VALUES('Welcome!','025','?Application_Custom&#61;1')");

	echo ("[ Done ]<BR>");

	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Installing Packaged Applications and Application Settings... Please Wait.<BR>");

/*
 ================================================================
 + Install Default Applications
 ================================================================
*/

mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications(application_file_name,application_file_permission,application_file_status)VALUES('Active_Members','1','1')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications(application_file_name,application_file_permission,application_file_status)VALUES('All_News','0','1')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications(application_file_name,application_file_permission,application_file_status)VALUES('All_Shouts','0','1')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications(application_file_name,application_file_permission,application_file_status)VALUES('Application_List','0','1')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications(application_file_name,application_file_permission,application_file_status)VALUES('Articles','0','1')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications(application_file_name,application_file_permission,application_file_status)VALUES('Audio_Player','1','1')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications(application_file_name,application_file_permission,application_file_status)VALUES('Update_Password','1','1')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications(application_file_name,application_file_permission,application_file_status)VALUES('Comment','1','1')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications(application_file_name,application_file_permission,application_file_status)VALUES('Contact_Administrator','1','1')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications(application_file_name,application_file_permission,application_file_status)VALUES('Control_Panel','1','1')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications(application_file_name,application_file_permission,application_file_status)VALUES('Documentation','0','1')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications(application_file_name,application_file_permission,application_file_status)VALUES('Update_Account','1','1')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications(application_file_name,application_file_permission,application_file_status)VALUES('Electronic_Mail','1','1')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications(application_file_name,application_file_permission,application_file_status)VALUES('Files','0','1')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications(application_file_name,application_file_permission,application_file_status)VALUES('Forum','1','1')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications(application_file_name,application_file_permission,application_file_status)VALUES('Friend','1','1')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications(application_file_name,application_file_permission,application_file_status)VALUES('Forward_Friend','1','1')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications(application_file_name,application_file_permission,application_file_status)VALUES('Language','0','1')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications(application_file_name,application_file_permission,application_file_status)VALUES('Legal','0','1')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications(application_file_name,application_file_permission,application_file_status)VALUES('Links','1','1')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications(application_file_name,application_file_permission,application_file_status)VALUES('List','1','1')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications(application_file_name,application_file_permission,application_file_status)VALUES('Login','0','1')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications(application_file_name,application_file_permission,application_file_status)VALUES('Members','0','1')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications(application_file_name,application_file_permission,application_file_status)VALUES('Messenger','1','1')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications(application_file_name,application_file_permission,application_file_status)VALUES('News','0','1')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications(application_file_name,application_file_permission,application_file_status)VALUES('Private_Files','1','1')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications(application_file_name,application_file_permission,application_file_status)VALUES('Private_Message','1','1')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications(application_file_name,application_file_permission,application_file_status)VALUES('Profile','0','1')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications(application_file_name,application_file_permission,application_file_status)VALUES('Referrers','0','1')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications(application_file_name,application_file_permission,application_file_status)VALUES('Register','0','1')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications(application_file_name,application_file_permission,application_file_status)VALUES('Reset_Password','0','1')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications(application_file_name,application_file_permission,application_file_status)VALUES('Search','0','1')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications(application_file_name,application_file_permission,application_file_status)VALUES('Statistics','0','1')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications(application_file_name,application_file_permission,application_file_status)VALUES('Submit_News','1','1')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications(application_file_name,application_file_permission,application_file_status)VALUES('System_Message','0','1')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications(application_file_name,application_file_permission,application_file_status)VALUES('Upload','1','1')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications(application_file_name,application_file_permission,application_file_status)VALUES('Video_Player','1','1')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications(application_file_name,application_file_permission,application_file_status)VALUES('Webspace','1','1')");

	echo ("[ Done ]<BR>");

	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Installing Packaged Panels... Please Wait.<BR>");

/*
 ================================================================
 + Install Default Panels
 ================================================================
*/

mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_application_panels(panel_file_name,panel_alignment,panel_row,panel_file_status,panel_title)VALUES('Applications_Panel','0','1','1','<CENTER><B>Applications Panel</B></CENTER><HR>')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_application_panels(panel_file_name,panel_alignment,panel_row,panel_file_status,panel_title)VALUES('Banned_Networks','0','4','1','<CENTER><B>Banned Networks</B></CENTER><HR>')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_application_panels(panel_file_name,panel_alignment,panel_row,panel_file_status,panel_title)VALUES('Cerberus_Badges','1','1','1','<CENTER><B>Cerberus Badges</B></CENTER><HR>')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_application_panels(panel_file_name,panel_alignment,panel_row,panel_file_status,panel_title)VALUES('Language','1','6','1','<CENTER><B>Set Language</B></CENTER><HR>')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_application_panels(panel_file_name,panel_alignment,panel_row,panel_file_status,panel_title)VALUES('Latest_Articles','0','3','1','<CENTER><B>Latest Articles</B></CENTER><HR>')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_application_panels(panel_file_name,panel_alignment,panel_row,panel_file_status,panel_title)VALUES('Latest_Files','1','3','1','<CENTER><B>Latest Files</B></CENTER><HR>')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_application_panels(panel_file_name,panel_alignment,panel_row,panel_file_status,panel_title)VALUES('Latest_Shouts','1','5','1','<CENTER><B>Latest Shout Messages</B></CENTER><HR>')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_application_panels(panel_file_name,panel_alignment,panel_row,panel_file_status,panel_title)VALUES('Member_Panel','0','2','1','<CENTER><B>Member Panel</B></CENTER><HR>')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_application_panels(panel_file_name,panel_alignment,panel_row,panel_file_status,panel_title)VALUES('Newest_Members','1','4','1','<CENTER><B>Newest Members</B></CENTER><HR>')");
mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_application_panels(panel_file_name,panel_alignment,panel_row,panel_file_status,panel_title)VALUES('RSS_Panel','1','4','1','<CENTER><B>Real-Simple-Syndication</B></CENTER><HR>')");

	echo ("[ Done ]<BR>");

	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Installing Specified Administrator Account Details and Services Root Administrator Account ( Cerberus )... Please Wait.<BR>");

/*
 ================================================================
 + Install Specified Administrator Account Details
 ================================================================
*/

$_GLOBAL_LOCAL_SERVER_DATE								= date("l, F j, Y g:i:s A");
$_GLOBAL_LOCAL_SERVER_DATE_MD5								= md5($_GLOBAL_LOCAL_SERVER_DATE);

mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_members(
member_access_level,
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
member_password,
member_profile_about,
member_profile_signature,
member_registration_date,
member_registration_details,
member_security_fingerprint_cleartext,
member_security_fingerprint_hashed,
member_security_pgp_key_panel_public,
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
member_url_homepage,
member_username)VALUES(
'3',
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
'$_POST_ADMINISTRATOR_ELECTRONIC_MAIL_ADDRESS',
'10000',
'1',
'Default.png',
'No_Image.png',
'$_GLOBAL_REMOTE_SERVER_ADDRESS',
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
'$_POST_ADMINISTRATOR_PASSWORD_3',
'Account Profile :: Installation Administration Account',
'Account Signature :: Installation Administration Account',
'$_GLOBAL_LOCAL_SERVER_DATE',
'Account Registered @ Internet Protocol Address: $_GLOBAL_REMOTE_SERVER_ADDRESS On: $_GLOBAL_LOCAL_SERVER_DATE',
'00:00:00',
'00:00:00',
'Empty Entry :: P.G.P. Public Key Block',
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
'https://www.Twitter.com/CerberusCMS',
'$_POST_ADMINISTRATOR_USERNAME')");

/*
 ================================================================
 + Install Cerberus Services Root Administrator Account Details
 + ( Cerberus ) With Specified Administration Account Password
 ================================================================
*/

mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_members(
member_access_level,
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
member_password,
member_profile_about,
member_profile_signature,
member_registration_date,
member_registration_details,
member_security_fingerprint_cleartext,
member_security_fingerprint_hashed,
member_security_pgp_key_panel_public,
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
member_url_homepage,
member_username)VALUES(
'3',
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
'Cerberus@Localhost',
'10000',
'1',
'Default.png',
'No_Image.png',
'$_GLOBAL_REMOTE_SERVER_ADDRESS',
'$_GLOBAL_REMOTE_SERVER_ADDRESS',
'$_GLOBAL_REMOTE_SERVER_ADDRESS',
'$_GLOBAL_LOCAL_SERVER_HTTP_REFERRER',
'5',
'Cyberspace',
'On Guard',
'Nine Inch Nails - Deep',
'Cerberus',
'CMS',
'None',
'None Provided :: Nick Name',
'10000',
'$_POST_ADMINISTRATOR_PASSWORD_3',
'I am Cerberus ! I am the Services Root Administrator.',
'I guard the entrance to Hades !',
'$_GLOBAL_LOCAL_SERVER_DATE',
'Account Registered @ Internet Protocol Address: $_GLOBAL_REMOTE_SERVER_ADDRESS On: $_GLOBAL_LOCAL_SERVER_DATE',
'00:00:00',
'00:00:00',
'Empty Entry :: P.G.P. Public Key Block',
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
'CerberusCMS',
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
'https://www.Twitter.com/CerberusCMS',
'Cerberus')");

	echo ("[ Done ]<BR>");

	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Installing Specified Administrator Account Directory Structure... Please Wait.<BR>");

/*
 ================================================================
 + Make and Create Administrator Directory and Files
 ================================================================
*/

/*
 + Make Directory: Administrator UserName
*/

mkdir("./Member/$_POST_ADMINISTRATOR_USERNAME");

/*
 + Make Directory: Administrator' Organized File Directory Structure
*/

mkdir("./Member/$_POST_ADMINISTRATOR_USERNAME/Files");
mkdir("./Member/$_POST_ADMINISTRATOR_USERNAME/Files/Audio");

mkdir("./Member/$_POST_ADMINISTRATOR_USERNAME/Files/Document");
mkdir("./Member/$_POST_ADMINISTRATOR_USERNAME/Files/Document/Activity_Logging");
mkdir("./Member/$_POST_ADMINISTRATOR_USERNAME/Files/Document/Electronic_Mail");
mkdir("./Member/$_POST_ADMINISTRATOR_USERNAME/Files/Document/Friends");
mkdir("./Member/$_POST_ADMINISTRATOR_USERNAME/Files/Document/Streams");
mkdir("./Member/$_POST_ADMINISTRATOR_USERNAME/Files/Document/Streams/Wall");

mkdir("./Member/$_POST_ADMINISTRATOR_USERNAME/Files/Image");
mkdir("./Member/$_POST_ADMINISTRATOR_USERNAME/Files/Image/Profile");

mkdir("./Member/$_POST_ADMINISTRATOR_USERNAME/Files/Video");

	echo ("[ Done ]<BR>");

	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Installing Specified Administrator Account Directory Structure Index Files... Please Wait.<BR>");

/*
 + Directory Security: Copy Directory Denial Index Files
*/

copy("./Member/Setup/Indexes/Files/Files.php","./Member/$_POST_ADMINISTRATOR_USERNAME/Files/index.php");
copy("./Member/Setup/Indexes/Files/Audio/Audio.php","./Member/$_POST_ADMINISTRATOR_USERNAME/Files/Audio/index.php");

copy("./Member/Setup/Indexes/Files/Document/Activity_Logging/Activity_Logging.php","./Member/$_POST_ADMINISTRATOR_USERNAME/Files/Document/Activity_Logging/index.php");
copy("./Member/Setup/Files/Document/Activity_Log.php","./Member/$_POST_ADMINISTRATOR_USERNAME/Files/Document/Activity_Logging/Activity_Log.php");
copy("./Member/Setup/Indexes/Files/Document/Document.php","./Member/$_POST_ADMINISTRATOR_USERNAME/Files/Document/index.php");
copy("./Member/Setup/Indexes/Files/Document/Electronic_Mail/Electronic_Mail.php","./Member/$_POST_ADMINISTRATOR_USERNAME/Files/Document/Electronic_Mail/index.php");
copy("./Member/Setup/Indexes/Files/Document/Friends/Friends.php","./Member/$_POST_ADMINISTRATOR_USERNAME/Files/Document/Friends/index.php");
copy("./Member/Setup/Indexes/Files/Document/Streams/Streams.php","./Member/$_POST_ADMINISTRATOR_USERNAME/Files/Document/Streams/index.php");
copy("./Member/Setup/Indexes/Files/Document/Streams/Wall/Wall.php","./Member/$_POST_ADMINISTRATOR_USERNAME/Files/Document/Streams/Wall/index.php");

copy("./Member/Setup/Indexes/Files/Image/Image.php","./Member/$_POST_ADMINISTRATOR_USERNAME/Files/Image/index.php");
copy("./Member/Setup/Indexes/Files/Image/Profile/Profile.php","./Member/$_POST_ADMINISTRATOR_USERNAME/Files/Image/Profile/index.php");

copy("./Member/Setup/Indexes/Files/Video/Video.php","./Member/$_POST_ADMINISTRATOR_USERNAME/Files/Video/index.php");

	echo ("[ Done ]<BR>");

	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Installing Specified Administrator Account Personal Web Page... Please Wait.<BR>");

/*
 + Make Directory: Administrator Hyper-Text-Markup-Language Web-Page Index File
*/

copy("./System/Default/Register/Register.html","./Member/$_POST_ADMINISTRATOR_USERNAME/index.html");

	echo ("[ Done ]<BR>");

	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Installing Specified Administrator Account Physical Electronic Mail Address File... Please Wait.<BR>");

/*
 + Copy Default Files To Organized Directory Structure: Administrator Electronic Mail Address
*/

copy("./System/Default/Friend/Friend.cerberus","./Member/$_POST_ADMINISTRATOR_USERNAME/Files/Document/Electronic_Mail/$_POST_ADMINISTRATOR_ELECTRONIC_MAIL_ADDRESS");

	echo ("[ Done ]<BR>");

	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Adding Specified Administrator Account Electronic Mail To Electronic Mail Master List... Please Wait.<BR>");

/*
 + Copy Administrator Electronic Mail Address To Master List
*/

copy("./System/Default/Friend/Friend.cerberus","./Member/Master_List/Electronic_Mail_Addresses/$_POST_ADMINISTRATOR_ELECTRONIC_MAIL_ADDRESS");

	echo ("[ Done ]<BR>");

	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Installing Services Root Administrator Account ( Cerberus ) Directory Structure Clone... Please Wait.<BR>");

/*
 ================================================================
 + Make and Create Backup Administrator Directory ( Cerberus ) and Files
 ================================================================
*/

/*
 + Make Directory: Backup Services-Root Administrator Account ( Cerberus )
*/

mkdir("./Member/Cerberus");

/*
 + Make Directory: Backup Services-Root Administrator Account ( Cerberus ) Organized File Directory Structure
*/

mkdir("./Member/Cerberus/Files");
mkdir("./Member/Cerberus/Files/Audio");

mkdir("./Member/Cerberus/Files/Document");
mkdir("./Member/Cerberus/Files/Document/Activity_Logging");
mkdir("./Member/Cerberus/Files/Document/Electronic_Mail");
mkdir("./Member/Cerberus/Files/Document/Friends");
mkdir("./Member/Cerberus/Files/Document/Streams");
mkdir("./Member/Cerberus/Files/Document/Streams/Wall");

mkdir("./Member/Cerberus/Files/Image");
mkdir("./Member/Cerberus/Files/Image/Profile");

mkdir("./Member/Cerberus/Files/Video");

/*
 + Directory Security: Copy Directory Denial Index Files
*/

copy("./Member/Setup/Indexes/Files/Files.php","./Member/Cerberus/Files/index.php");

copy("./Member/Setup/Indexes/Files/Audio/Audio.php","./Member/Cerberus/Files/Audio/index.php");

copy("./Member/Setup/Indexes/Files/Document/Document.php","./Member/Cerberus/Files/Document/index.php");
copy("./Member/Setup/Indexes/Files/Document/Activity_Logging/Activity_Logging.php","./Member/Cerberus/Files/Document/Activity_Logging/index.php");
copy("./System/Default/Friend/Friend.cerberus","./Member/Cerberus/Files/Document/Activity_Logging/Activity_Log.php");
copy("./Member/Setup/Indexes/Files/Document/Electronic_Mail/Electronic_Mail.php","./Member/Cerberus/Files/Document/Electronic_Mail/index.php");
copy("./Member/Setup/Indexes/Files/Document/Friends/Friends.php","./Member/Cerberus/Files/Document/Friends/index.php");
copy("./Member/Setup/Indexes/Files/Document/Streams/Streams.php","./Member/Cerberus/Files/Document/Streams/index.php");
copy("./Member/Setup/Indexes/Files/Document/Streams/Wall/Wall.php","./Member/Cerberus/Files/Document/Streams/Wall/index.php");

copy("./Member/Setup/Indexes/Files/Image/Image.php","./Member/Cerberus/Files/Image/index.php");
copy("./Member/Setup/Indexes/Files/Image/Profile/Profile.php","./Member/Cerberus/Files/Image/Profile/index.php");

copy("./Member/Setup/Indexes/Files/Video/Video.php","./Member/Cerberus/Files/Video/index.php");

/*
 + Make Directory: Backup Services-Root Administrator Account ( Cerberus ) Hyper-Text-Markup-Language Web-Page Index File
*/

copy("./System/Default/Register/Register.html","./Member/Cerberus/index.html");

/*
 + Copy Default Files To Organized Directory Structure: Administrator Electronic Mail Address
*/

copy("./System/Default/Friend/Friend.cerberus","./Member/Cerberus/Files/Document/Electronic_Mail/Cerberus@Localhost");

/*
 + Copy Administrator Electronic Mail Address To Master List
*/

copy("./System/Default/Friend/Friend.cerberus","./Member/Master_List/Electronic_Mail_Addresses/Cerberus@Localhost");

	echo ("[ Done ]<BR>");

	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Installing Custom Web Applications... Please Wait.<BR>");

/*
 ================================================================
 + Install Default Custom Applications
 ================================================================
*/

mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications_custom(custom_application_data,custom_application_name,custom_application_time)VALUES('Hello and welcome to Cerberus! If you\'re reading this then Cerberus was successfully installed!','Welcome To Cerberus','$_GLOBAL_LOCAL_SERVER_DATE')");

	echo ("[ Done ]<BR>");

	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Installing Default Ranking System... Please Wait.<BR>");

/*
 ================================================================
 + Install Default Ranks
 ================================================================
*/

mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_ranks(rank_gender_male_0,rank_gender_male_1,rank_gender_male_2,rank_gender_male_3,rank_gender_male_4,rank_gender_female_0,rank_gender_female_1,rank_gender_female_2,rank_gender_female_3,rank_gender_female_4)VALUES('Hermes','Apollo','Poseidon','Hades','Zeus','Aphrodite','Demeter','Artemis','Hera','Athena')");

	echo ("[ Done ]<BR>");

	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Installing Pre-Configured System Settings... Please Wait.<BR>");

/*
 ================================================================
 + Install Default Settings
 ================================================================
*/

mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_settings(settings_safeHTML_directory,settings_safeHTML_status,settings_cookie_time,settings_gzip_status,settings_image_extension,settings_language_directory,settings_offline_status,settings_site_title,settings_smileys_directory,settings_sound_extension,settings_theme_directory,settings_upload_size_private,settings_upload_size_public,settings_text_editor_directory)VALUES('Default','1','86400','1','png','English','0','Cerberus Content Management System','Default','mp3','2022_TinkeSoftware_Grey','256000','10240000','Default')");

	echo ("[ Done ]<BR>");

	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Installing Statistics... Please Wait.<BR>");

/*
 ================================================================
 + Install Default Statistics
 ================================================================
*/

mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_statistics(statistics_total_number_of_page_views,statistics_installation_date)VALUES('1','$_GLOBAL_LOCAL_SERVER_DATE')");

	echo ("[ Done ]<BR>");

	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Installing Example Forum Entry... Please Wait.<BR>");

/*
 ================================================================
 + Install Default Forum
 ================================================================
*/

mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_forum_forum(forum_access_level,forum_date,forum_description,forum_title)VALUES('1','$_GLOBAL_LOCAL_SERVER_DATE','This is an Example Forum Entry','Example Forum #1')");

	echo ("[ Done ]<BR>");

	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Installing Example Forum Topic Entry... Please Wait.<BR>");

/*
 ================================================================
 + Install Default Forum Topic
 ================================================================
*/

mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_forum_topic(topic_access_level,topic_date,topic_description,topic_forum_id,topic_last_post,topic_last_poster,topic_title)VALUES('1','$_GLOBAL_LOCAL_SERVER_DATE','This is an Example Topic.','1','$_GLOBAL_LOCAL_SERVER_DATE','Cerberus','This Is The Example Topic #1 Entry Within The Example Forum #1 Entry')");

	echo ("[ Done ]<BR>");

	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Installing Example Forum Topic Post... Please Wait.<BR>");

/*
 ================================================================
 + Install Default Topic Post
 ================================================================
*/

mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_forum_post(post_access_level,post_author,post_data,post_date,post_last_edit,post_topic_id)VALUES('1','Cerberus','This is an Example Post -- you can Administer the Forum via the Administration Control Panel.','$_GLOBAL_LOCAL_SERVER_DATE','$_GLOBAL_LOCAL_SERVER_DATE','1')");

	echo ("[ Done ]<BR>");

	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Installing Example File Category Entry ( For File Upload / Download Application Module )... Please Wait.<BR>");

/*
 ================================================================
 + Install Default File Category
 ================================================================
*/

mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_file_categories(file_category_description,file_category_time,file_category_title)VALUES('This is an Example File Category Entry -- You can Delete this File Category Entry from the Administration Control Panel.','$_GLOBAL_LOCAL_SERVER_DATE','Example File Category Entry')");

	echo ("[ Done ]<BR>");

	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Installing Example File Entry ( For File Upload / Download Application Module )... Please Wait.<BR>");

/*
 ================================================================
 + Install Default File
 ================================================================
*/

mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_files(file_author,file_category,file_description,file_image,file_location,file_number_of_downloads,file_time,file_title,file_uploader)VALUES('None','1','This is an Example File Entry -- You can Delete this Example File Entry from the Administration Control Panel.','./Upload/Default/0987654321-0987654321.png','./Upload/Default/0987654321-0987654321.png','1','$_GLOBAL_LOCAL_SERVER_DATE','Example File','Cerberus')");

	echo ("[ Done ]<BR>");

	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Installing Example Article Entry... Please Wait.<BR>");

/*
 ================================================================
 + Install Default Article
 ================================================================
*/

mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_articles(article_author,article_data,article_time,article_title)VALUES('Cerberus','This is an Example Article Entry -- You can Delete this Article Entry from the Administration Control Panel.','$_GLOBAL_LOCAL_SERVER_DATE','Example Article')");

	echo ("[ Done ]<BR>");

	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Installing Example Article Entry... Please Wait.<BR>");

/*
 ================================================================
 + Install Default News
 ================================================================
*/

mysql_query("INSERT INTO {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_news(news_author,news_avatar,news_data,news_mood,news_music,news_rss_rfc,news_time,news_title)VALUES('Cerberus','Default.png','This is an Example News Article Entry -- You can Delete this News Article Entry from the Administration Control Panel.','None','None','Wed, 05 Aug 2009 15:04:18 -0700','$_GLOBAL_LOCAL_SERVER_DATE','Example News')");

	echo ("[ Done ]<BR>");

	echo ("&nbsp;=>&nbsp;<A HREF=\"?InternalApplication&#61;Unlink_Installation\" TITLE=\":: Remove Installation Files ::\">Remove Installation Files</A>");

} else {

	echo ("<FONT COLOR=\"#CD0000\">***</FONT> Cerberus: Error: I am not able to connect to the Database.<BR>");

} // [ + ] IF: S.Q.L. Query Install Default S.Q.L. Data

} else {

	echo ("<FONT COLOR=\"#CD0000\">***</FONT> Cerberus: Error: I am not able to connect to the Database.<BR>");

} // [ + ] IF: S.Q.L. Server Connect

} else {

	echo ("<FONT COLOR=\"#CD0000\">***</FONT> Cerberus: Error: the Password(s) that you have provided me do not match each-other. Try Again ?<BR>");

} // [ + ] IF: Administrator Passwords Are Equal

} // [ + ] IF: Null

} // [ + ] IF: Install Default S.Q.L. Data

/*
 ================================================================
 +
 + Internal Application: Unlink and Secure-Delete Installation System
 +
 ================================================================
*/

if ($_GET["InternalApplication"] == "Unlink_Installation") {

	echo ("<HR><CENTER>Unlinking Installation Files</CENTER><HR><BR>");

	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Removing Default S.Q.L. Database Server Structure Generator File and Index Files... Please Wait.<BR>");

if (unlink("./Architect/MySQL/MySQL_Generator.php") && unlink("./Architect/MySQL/index.php") && unlink("./Architect/index.php") && unlink("./Architect/ToolKit/index.php") && unlink("./Architect/ToolKit/Installation_ToolKit.php")) {

	echo ("[ Done ]<BR>");

} else {

	echo ("<FONT COLOR=\"#CD0000\">***</FONT> Cerberus: Error, I was not able to Secure-Delete the Files: <I>'./Architect/MySQL/MySQL_Generator.php', './Architect/MySQL/index.php', './Architect/ToolKit/index.php', './Architect/ToolKit/Installation_ToolKit.php'</I> Please manually Secure-Delete this File before proceeding.<BR>");

} // [ + ] IF: Internal Application: Unlink_Installation Is Activated

	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Removing=>Architect=>MySQL Directory... Please Wait.<BR>");
	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Removing=>Architect=>ToolKit Directory... Please Wait.<BR>");

if (rmdir("./Architect/MySQL/") && rmdir("./Architect/ToolKit/")) {

	echo ("[ Done ]<BR>");

} else {

	echo ("<FONT COLOR=\"#CD0000\">***</FONT> Cerberus: Error, I was not able to Remove the Directory: './Architect/MySQL/' or './Architect/ToolKit/' Please manually Remove this Directory before proceeding.<BR>");

} // [ + ] IF: Remove Directory: Architect=>Installation Directories and Installation Tools

	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Removing=>Architect Directory... Please Wait.<BR>");

if (rmdir("./Architect/")) {

	echo ("[ Done ]<BR>");

} else {

	echo ("<FONT COLOR=\"#CD0000\">***</FONT> Cerberus: Error: I was not able to Remove the Directory: './Architect/' Please manually Remove this Directory before proceeding.<BR>");

} // [ + ] IF: Remove Directory: Installation Directory

	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Removing Installation Files... Please Wait.<BR>");

if (unlink("./Architect.php")) {

	echo ("[ Done ]<BR>");

	echo ("<FONT COLOR=\"#CD0000\">[&nbsp;*&nbsp;]</FONT> Redirecting To This <B>Cerberus Installation</B> Login Page... Please Wait 15 Seconds.<BR><BR>");

	echo ("<META HTTP-EQUIV=Refresh CONTENT=\"15; URL=Cerberus.php?Application_Member=Login\">");

} else {

	echo ("<BIG><FONT COLOR=\"#CD0000\">***</FONT> Cerberus: Error: I was not able to Secure-Delete the File: 'Architect.php' Please manually Secure-Delete this File before proceeding.</BIG><BR>");

} // [ + ] IF: Delete Architect Installation Files

	echo ("<BIG><FONT COLOR=\"#CD0000\">***</FONT> Cerberus: I am Testing the PHP mail() Function. Please wait...</BIG><BR>");

if (mail($_ACCESS_SYSTEM_ELECTRONIC_MAIL_ADDRESS,"Cerberus - Testing mail() Function.","
-------This is a test to see if the Web Server PHP mail() Function is working-------

-------------------------------------------------------
If you have receieved this Electronic Mail Message Cerberus Content Management System was installed successfully to your web server.
The only thing left to do now is to manually configure this installation of Cerberus Content Management System.
-------------------------------------------------------
Local Server Internet Protocol Address: $_GLOBAL_LOCAL_SERVER_ADDRESS
Local Server Software Information: $_GLOBAL_LOCAL_SERVER_SOFTWARE
Remote Server Internet Protocol Address ( Who Installed This ): $_GLOBAL_REMOTE_SERVER_ADDRESS
")) {

	echo ("<BIG><FONT COLOR=\"#CD0000\">***</FONT> Cerberus: I have Tested the PHP mail() Function and it seems to be working.</BIG><BR>");

} else {

	echo ("<BIG><FONT COLOR=\"#CD0000\">***</FONT> Cerberus: Error: the PHP mail() Function is not working. Correct this before using Cerberus Content Management System.</BIG>");

} // [ + ] IF: Send Electronic Mail Address: System Test

} // [ + ] IF: Delete All Architect Installation Files

/*
 ================================================================
 +
 + Internal Applications: Information Applications
 +
 ================================================================
*/

 /*
 ================================================================
 + Internal Application: Cerberus System Information
 ================================================================
*/

if ($_GET["InternalApplication"] == "Cerberus_Information") {

echo ("
		<HR><CENTER>Cerberus Content Management System Information</CENTER><HR>
		<B>Cerberus Software Project Version Information</B><BR>
		*&nbsp;Extended Version: <I>$_PROJECT_VERSION_EXTENDED</I><BR>
		*&nbsp;Short Version: <I>$_PROJECT_VERSION_SHORT</I><BR><BR>

		<B>Official Cerberus Software Project Web Servers</B><BR><BR>

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

		Tinke Software Internal Project Hosting<BR>
		*&nbsp;Data Validation Secure Server: <I>$_PROJECT_SERVER_URL_SECURE/CerberusCMS</I><BR>
		*&nbsp;Data Validation Clear-Text Server: <I>$_PROJECT_SERVER_URL_CLEARTEXT/CerberusCMS</I><BR><BR>

		Tinke Software Official Servers<BR>
		*&nbsp;Data Validation Secure Server: <I>$_PROJECT_SERVER_URL_SECURE</I><BR>
		*&nbsp;Data Validation Clear-Text Server: <I>$_PROJECT_SERVER_URL_CLEARTEXT</I>
");

} // [ + ] IF: Internal Application: Cerberus_Information Is Activated

/*
 ================================================================
 + Internal Application: PHP Server Engine Information
 ================================================================
*/

if ($_GET["InternalApplication"] == "PHP_Information") {

	echo ("<HR>Currenty Running PHP Server Engine Information<HR><BR>");
	phpinfo();
	echo ("<BR>");

} // [ + ] IF: Internal Application: PHP_Information Is Activated

/*
 ================================================================
 + Internal Application: PHP Extensions
 ================================================================
*/

if ($_GET["InternalApplication"] == "PHP_Extensions") {

	echo ("<HR>Currently Loaded PHP Extensions<HR><BR>");
	print_r(get_loaded_extensions());
	echo ("<BR>");

} // [ + ] IF: Internal Application: PHP_Extensions Is Activated

/*
 ================================================================
 + Internal Application: File Permissions
 ================================================================
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
 ================================================================
 + Internal Application: Cerberus System Information
 ================================================================
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
 ================================================================
 +
 + Hyper-Text-Markup-Language Document: End
 +
 ================================================================
*/

	echo ("<HR><CENTER>Copyright <BIG><B>&copy;</B></BIG> <A HREF=\"https://www.GitHub.com/TinkeSoftware\" TARGET=\"_NEW\" TITLE=\"Tinke Software On :: GitHub\">Tinke Software</A>, <A HREF=\"https://www.SourceForge.net/projects/cerberuscms\" TITLE=\":: Cerberus Content Management System Project On :: SourceForge ::\">Cerberus Content Management System</A>, <A HREF=\"mailto:GCJohnsonChevalier@Protonmail.com\" TITLE=\":: Send Electronic Mail Message To :: GCJohnsonChevalier@Protonmail.com ::\">Gary Christopher Johnson</A>, 2005 - 2023.</CENTER><HR></TD></TR></TABLE>
	</BODY>
</HTML>
");
?>