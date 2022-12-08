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
 + - File Location: root->Cerberus->Architect->MySQL->ToolKit->Installation_ToolKit.php
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
 + [ @ ] Cerberus Content Management System :: Installation :: Installation ToolKit
 +
 +
 +
 ================================================================
*/

/*
 ================================================================
 +
 + Hyper-Text-Markup-Language :: Document :: Start
 +
 ================================================================
*/

echo ("
<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01 Transitional//EN\" \"http://www.w3.org/TR/html4/loose.dtd\">

<HTML>
	<HEAD>
		<TITLE>Cerberus Content Management System - Post Installation ToolKit</TITLE>
		<LINK REL=\"stylesheet\" HREF=\"../../Theme/Global/Style_Sheet/Style.css\" TYPE=\"text/css\">
		<META HTTP-EQUIV=\"Content-Type\" CONTENT=\"text/html;charset=utf-8\">
		</HEAD>
		
		<BODY>
				<CENTER>Cerberus Content Management System - Post-Installation ToolKit</CENTER>
				<CENTER>[&nbsp;<A HREF=\"?\" TITLE=\"Close All Open Applications\">Close Open Applications</A>&nbsp;&middot;&nbsp;</A><A HREF=\"?Application&#61;Unpack\" TITLE=\":: Unpack Downloaded Archives of Cerberus Content Management System To This Web Server ::\">Unpack Cerberus Content Management System Compressed Package</A>&nbsp;&middot;&nbsp;<A HREF=\"?Application&#61;Terminal\" TITLE=\":: Open and Display The Post-Installation ToolKit Terminal Application ::\">Execute Terminal Commands</A>&nbsp;&middot;&nbsp;<A HREF=\"../../Architect.php\" TITLE=\":: Open & Display The Cerberus Content Management System Architect Installation Application ::\">Architect Installation Application</A>&nbsp;]</CENTER>
				<HR>
");

/*
 ================================================================
 +
 + Unpack Packages
 +
 ================================================================
*/
	
if ($_GET["Application"] == "Unpack") {

system('unzip Cerberus.zip');

} // [ + ] IF_APPLICATION_UNPACK

/*
 ================================================================
 +
 + Execute Terminal Commands
 +
 ================================================================
*/
	 
if ($_GET["Application"] == "Terminal") {
	
$_Installation_ToolKit_POST_TERMINAL_COMMANDS				= $_POST['Installation_ToolKit_Terminal_Commands'];
	
if (!$_Installation_ToolKit_POST_TERMINAL_COMMANDS) {

echo ("
			<FORM ACTION=\"?Application&#61;Terminal\" METHOD=\"POST\">
				Please Visit: <A HREF=\"https://www.GitHub.com/TinkeSoftware/CerberusCMS_Archives/\">Tinke Softwares' - Cerberus Content Management System Archives - GitHub Repository</A> for the most recent Archived CerberusCMS compressed package<BR>
				<TEXTAREA ROWS=\"15\" COLS=\"75\" NAME=\"Installation_ToolKit_Terminal_Commands\">Execute Terminal Commands On This Operating System From This Post-HypterText-PreProcessor Script E.G.: 'wget -O Cerberus.zip https://GitHub.com/TinkeSoftware/<File_Name_Here.zip>'</TEXTAREA><BR>
				<INPUT TYPE=\"SUBMIT\" VALUE=\"Execute Command\">
			</FORM>
");

} else {
	
		echo ("Executing Terminal Command: '$_Installation_ToolKit_POST_TERMINAL_COMMANDS'<BR>");
	
$_Installation_ToolKit_EXECUTE_TERMINAL_COMMAND				= shell_exec($_Installation_ToolKit_POST_TERMINAL_COMMANDS);
	
		echo ("$_Installation_ToolKit_EXECUTE_TERMINAL_COMMAND");

} // [ + ] IF_!POST_Installation_ToolKit_POST_TERMINAL_COMMANDS

} // [ + ] IF_APPLICATION_EXECUTE_COMMANDS

/*
 ================================================================
 +
 + Hyper-Text-Markup-Language :: Document :: End
 +
 ================================================================
*/

echo ("
		</BODY>
</HTML>
");
?>