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
 + - File Location: Master Root Directory->Root Directory->Architect->ToolKit->Installation_ToolKit.php
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
 + [ ^ ] Cerberus Content Management System :: Installation :: Installation ToolKit
 +
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 + Hyper-Text-Markup-Language :: Document :: Start
 +
 ============================================================================================================
*/

echo ("
<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01 Transitional//EN\" \"http://www.w3.org/TR/html4/loose.dtd\">

<HTML>
	<HEAD>
		<TITLE>$_PROJECT_STRING_NAME_EXTENDED - Post Installation ToolKit</TITLE>
		<LINK REL=\"stylesheet\" HREF=\"../../Theme/Global/Style_Sheet/Style.css\" TYPE=\"text/css\">
		<META HTTP-EQUIV=\"Content-Type\" CONTENT=\"text/html;charset=utf-8\">
		</HEAD>
		
		<BODY>
				<CENTER>$_PROJECT_STRING_NAME_EXTENDED - Post-Installation ToolKit</CENTER>
				<CENTER>[&nbsp;<A HREF=\"?\" TITLE=\"Close All Open Applications\">Close Open Applications</A>&nbsp;&middot;&nbsp;</A><A HREF=\"?Application&#61;Unpack\" TITLE=\":: Unpack Downloaded Archives of $_PROJECT_STRING_NAME_EXTENDED To This Web Server ::\">Unpack $_PROJECT_STRING_NAME_EXTENDED Compressed Archive Package</A>&nbsp;&middot;&nbsp;<A HREF=\"?Application&#61;Terminal\" TITLE=\":: Open and Display The Post-Installation ToolKit Terminal Application ::\">Execute Terminal Commands</A>&nbsp;&middot;&nbsp;<A HREF=\"../../Architect.php\" TITLE=\":: Open & Display The $_PROJECT_STRING_NAME_EXTENDED Architect Installation Application ::\">Architect Installation Application</A>&nbsp;]</CENTER>
				<HR>
");

/*
 ============================================================================================================
 +
 + Unpack Packages
 +
 ============================================================================================================
*/
	
if ($_GET["Application"] == "Unpack") {

system('unzip $_PROJECT_STRING_NAME_SHORT.zip');

} // [ + ] IF: System: Unzip Downloaded Archive Package

/*
 ============================================================================================================
 +
 + Execute Terminal Commands
 +
 ============================================================================================================
*/
	 
if ($_GET["Application"] == "Terminal") {
	
$_Installation_ToolKit_POST_TERMINAL_COMMANDS				= $_POST['Installation_ToolKit_Terminal_Commands'];
	
if (!$_Installation_ToolKit_POST_TERMINAL_COMMANDS) {

echo ("
			<FORM ACTION=\"?Application&#61;Terminal\" METHOD=\"POST\">
				Please Visit: <A HREF=\"$_PROJECT_SERVER_URL_SECURE/CerberusCMS_Archives/\">$_PROJECT_DEVELOPER_STRING_NAME_EXTENDED' - $_PROJECT_STRING_NAME_EXTENDED Archive Packages - Official GitHub Repository</A> for the most recent Archived $_PROJECT_STRING_NAME_UNIX compressed package<BR>
				<TEXTAREA ROWS=\"15\" COLS=\"75\" NAME=\"Installation_ToolKit_Terminal_Commands\">Execute Terminal Commands On This Operating System From This Pre-Hyper-Text-Post-Processor Script E.G.: 'wget -O $_PROJECT_STRING_NAME_SHORT.zip https://GitHub.com/$_PROJECT_SERVER_URL_PARTIAL/<File_Name_Here.zip>'</TEXTAREA><BR>
				<INPUT TYPE=\"SUBMIT\" VALUE=\"Execute Terminal Command\">
			</FORM>
");

} else {
	
		echo ("Executing Terminal Command: '$_Installation_ToolKit_POST_TERMINAL_COMMANDS'<BR>");
	
$_Installation_ToolKit_EXECUTE_TERMINAL_COMMAND				= shell_exec($_Installation_ToolKit_POST_TERMINAL_COMMANDS);
	
		echo ("$_Installation_ToolKit_EXECUTE_TERMINAL_COMMAND");

} // [ + ] IF: Terminal Command Variable Data Is Null

} // [ + ] IF: Internal Application: Terminal Is Activated

/*
 ============================================================================================================
 +
 + Hyper-Text-Markup-Language :: Document :: End
 +
 ============================================================================================================
*/

echo ("
		</BODY>
</HTML>
");
?>