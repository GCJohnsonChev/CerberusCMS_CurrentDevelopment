<?php
/*
 ============================================================================================================
 + ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
 + ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
 + Cerberus Content Management System
 + ----------------------------------------------------------------------------------------------------------
 + - Author			 : Gary Christopher Johnson of Rosedale In Southern California, U.S.A.
 + - Company			 : Tinke Software, Free and Open Source Software
 + - Company Address		 : Rosedale In Southern California, United States of America
 + - Electronic Mail Address	 : CerberusCMS@Protonmail.com, TinkeSoftware@Protonmail.com
 + - Document Notes		 : View this file in a non-formatting text editor without word-wrap for the
 +				 : correct display of this programming code and its indentation.
 + ----------------------------------------------------------------------------------------------------------
 +    ()
 +  ()  ()
 +  ------
 +
 + ----------------------------------------------------------------------------------------------------------
 + - This File, Location	 : Master Root Directory => Hephaestus.php
 + - This File, Version		 : 0.7.1
 + - This File, Programming Code : Pure Pre-Hyper-Text-Post-Processor
 + - Programming Code Model	 : Procedural, Functional, Object Oriented :: Pre-Order Algebraic
 + -				 :					   :: Pre-Order Logical
 + - Compatibility		 : Pre-Hyper-Text-Post-Processor 	   :: Version Numbers: 5, 7, 8
 + -				 : Zend Engine				   :: Version Numbers: 3, 4
 + - Official Release Date	 : Wednesday, November 1st of 2023
 + ----------------------------------------------------------------------------------------------------------
 + -------------------------------------------------------------------------------	- Nyx -
 + --[][]--[][][]--[][][]--[][][]---[][][]--[][][]--[]--[]------[][][]------------   []++++||=======>
 + -[]-----[]------[]--[]--[]---[]--[]------[]--[]--[]--[]------[]----------------
 + -[]-----[]------[]--[]--[]---[]--[]------[]--[]--[]--[]------[]----------------    |'-._/\_.-'|
 + -[]-----[]------[]--[]--[]---[]--[]------[]--[]--[]--[]------[]----------------    |    []    |
 + -[]-----[]------[]--[]--[]---[]--[]------[]--[]--[]--[]------[]----------------    |___-[]-___|
 + -[]-----[][][]--[][][]--[][][]---[][][]--[][][]--[]--[]------[]----------------    |__((**))__|
 + -[]-----[]------[]--[]--[]---[]--[]------[]--[]--[]--[]------[]----------------    \   -[]-   /
 + -[]-----[]------[]--[]--[]---[]--[]------[]--[]--[]--[]------[]------------/-\-     \   []   /
 + -[]-----[]------[]--[]--[]---[]--[]------[]--[]--[]--[]------[]---VERSION--|4|-	\  []  /
 + --[][]--[][][]--[]--[]--[][][]---[][][]--[]--[]--[][][]--[][][]------------\-/-	 '.[].'
 + -------------------------------------------------------------------------------
 + ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ Build Number: 0.8 - Final
 + ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ Edit Number : 3,419
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 +
 +
 + [ ^ ] Cerberus Content Management System :: Installation :: Builder
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
<!DOCTYPE HTML PUBLIC \"-/W3C/DTD HTML 4.01 Transitional/EN\" \"http:/www.w3.org/TR/html4/loose.dtd\">

<HTML>
	<HEAD>
		<TITLE>$_PROJECT_STRING_NAME_EXTENDED - Pre-Installation ToolKit :: Builder</TITLE>
		<LINK REL=\"stylesheet\" HREF=\"../../Theme/Global/Style_Sheet/Style.css\" TYPE=\"text/css\">
		<META HTTP-EQUIV=\"Content-Type\" CONTENT=\"text/html;charset=utf-8\">
		</HEAD>
		
		<BODY>
				<CENTER>$_PROJECT_STRING_NAME_EXTENDED - Pre-Installation ToolKit :: Builder</CENTER>
				<CENTER>[&nbsp;<A HREF=\"?\" TITLE=\":: Close All Open Applications ::\">Close Open Applications</A>&nbsp;&middot;&nbsp;</A><A HREF=\"?Application&#61;Generate&amp;DirectoryStructure&#61;Default\" TITLE=\":: Generate The Organized Directory Structure For :: $_PROJECT_STRING_NAME_EXTENDED :: On This Web Server Data Storage Device ::\">Generate Directory Structure</A>&nbsp;&middot;&nbsp;<A HREF=\"?Application&#61;Terminal\" TITLE=\":: Open and Display The Pre-Installation ToolKit :: Terminal Application ::\">Terminal</A>&nbsp; ]</CENTER>
				<HR>
");

/*
 ============================================================================================================
 +
 + Variables :: Post Variables
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 + Variables :: Post Variables :: Generate
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Variables :: Post Variables :: Generate :: Directory Structure :: Default
 ============================================================================================================
*/

$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT								= $_POST['AM_Builder_Generate_Directory_Structure_Directory_Name_Root'];
$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_OPERATION						= $_POST['AM_Builder_Generate_Directory_Structure_Directory_Name_Operation'];
$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_PERMISSIONS							= $_POST['AM_Builder_Generate_Directory_Structure_Directory_Permissions'];
$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_PERMISSIONS_RECURSIVE					= $_POST['AM_Builder_Generate_Directory_Structure_Directory_Permissions_Recursive'];

/*
 ============================================================================================================
 + Variables :: Post Variables :: Terminal :: Terminal Commands
 ============================================================================================================
*/

$_Builder_Generate_POST_TERMINAL_COMMANDS													= $_POST['AM_Builder_Terminal_Commands'];

/*
 ============================================================================================================
 +
 + Internal Application :: Terminal
 +
 ============================================================================================================
*/

if ($_GET["Application"] == "Terminal") {
	
if (!$_Builder_Generate_POST_TERMINAL_COMMANDS) {

echo ("
			<FORM ACTION=\"?Application&#61;Terminal\" METHOD=\"POST\">
				Please Visit: <A HREF=\"$_PROJECT_SERVER_URL_SECURE/CerberusCMS_Archives/\">$_PROJECT_DEVELOPER_STRING_NAME_EXTENDED' - $_PROJECT_STRING_NAME_EXTENDED Archive Packages - Official GitHub Repository</A> for the most recent Archived $_PROJECT_STRING_NAME_UNIX compressed package<BR>
				<TEXTAREA ROWS=\"15\" COLS=\"75\" NAME=\"AM_Builder_Terminal_Commands\">Execute Terminal Commands On This Operating System From This Pre-Hyper-Text-Post-Processor Application. Exemplia Gratia: 'wget -O $_PROJECT_STRING_NAME_SHORT.zip https://GitHub.com/$_PROJECT_SERVER_URL_PARTIAL/<File_Name_Here.zip>'</TEXTAREA><BR>
				<INPUT TYPE=\"SUBMIT\" VALUE=\"Execute Terminal Command\">
			</FORM><HR>
");

} else {
	
echo ("
		* Builder: Executing Terminal Command:<BR>
		<I>'$_Builder_Generate_POST_TERMINAL_COMMANDS'</I><BR>
		--------------------------------------------------------<BR>
");
	
$_Builder_Generate_EXECUTE_TERMINAL_COMMANDS				= shell_exec($_Builder_Generate_POST_TERMINAL_COMMANDS);
	
echo ("
		<OBJECT DATA=\"$_Builder_Generate_EXECUTE_TERMINAL_COMMANDS\" WIDTH=\"300\" HEIGHT=\"150\"></OBJECT><HR>
");

} // [ + ] IF: Terminal Command Variable Data Is Null

} // [ + ] IF: Internal Application: Terminal Is Activated

/*
 ============================================================================================================
 +
 + Internal Application :: Generate
 +
 ============================================================================================================
*/

if ($_GET["Application"] == "Generate") {
	
/*
 ============================================================================================================
 +
 + Internal Application :: Genrate :: Directory Structure :: Default
 +
 ============================================================================================================
*/
	
if ($_GET["DirectoryStructure"] == "Default") {
	
if (!$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT) {
	
echo ("
											You will need to first Generate the Organized Directory Structure for this Software Project with Specified Directory Permissions.<BR>
											Once after the Organized Directory Structure is built you can then use <I>Architect</I> to apply new Directory and File Permissions.<BR><BR>
											<FORM ACTION=\"?Application&#61;Generate&amp;DirectoryStructure&#61;Default\" METHOD=\"post\">
												<I>Name The Root Directory</I>:<BR>
												[ Maximum Length: 15 Characters, Disallowed Characters: ! @ # $ % ^ & * ( ) - _ + = { } [ ] : ; \" ' < > , . / ? \ | ~ ` ]<BR>
													<INPUT TYPE=\"text\" NAME=\"AM_Builder_Generate_Directory_Structure_Directory_Name_Root\" MAXLENGTH=\"15\"><BR>
												<I>Name The Operation Directory</I>:<BR>
												[ Maximum Length: 15 Characters, Disallowed Characters: ! @ # $ % ^ & * ( ) - _ + = { } [ ] : ; \" ' < > , . / ? \ | ~ ` ]<BR>
													<INPUT TYPE=\"text\" NAME=\"AM_Builder_Generate_Directory_Structure_Directory_Name_Operation\" MAXLENGTH=\"15\"><BR>
												<I>Directory Structure Permissions</I>:<BR>
													<INPUT TYPE=\"text\" NAME=\"AM_Builder_Generate_Directory_Structure_Directory_Permissions\" MAXLENGTH=\"4\"><BR>
												<I>Directory Structure Permissions, Recursive ?</I>:<BR>
													<INPUT TYPE=\"text\" NAME=\"AM_Builder_Generate_Directory_Structure_Directory_Permissions_Recursive\" MAXLENGTH=\"5\" VALUE=\"true\"><BR>
													<INPUT TYPE=\"submit\" VALUE=\"Generate\">
											</FORM><HR>
");

} else {
	
/*
 ============================================================================================================
 + Generate :: Directory Structure :: Default
 ============================================================================================================
*/

echo ("<BR>Builder Has Started...<HR>");
echo ("Making and Building The Default Organized Directory Structure With Specified Directory Permissions and Parameters...<BR>");
echo ("* Root Directory :: $_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT<BR>
* Operation Directory :: $_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_OPERATION<BR>
* Directory Permissions :: $_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_PERMISSIONS<BR>
* Directory Permissions, Recursive ? $_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_PERMISSIONS_RECURSIVE<BR><BR>
");

echo ("* Making: ./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/<BR>");

mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT");

echo ("* Done.<BR><BR>");

echo ("* Making: ./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/Documentation/<BR>");

mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/Documentation");
mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/Documentation/Articles");
mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/Documentation/Articles/Wiki");
mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/Documentation/Articles/Wikipedia");
mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/Documentation/Manuals");
mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/Documentation/Manuals/Version Number - 4");
mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/Documentation/Manuals/Version Number - 4/Build Number - 0.8");
mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/Documentation/Manuals/Version Number - 4/Build Number - 0.8/Final");
mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/Documentation/Manuals/Version Number - 4/Build Number - 0.8/Final/Hyper-Text-Markup-Language");
mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/Documentation/Manuals/Version Number - 4/Build Number - 0.8/Final/Portable Document Format");

echo ("* Done.<BR><BR>");

echo ("* Making: ./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/Extras/<BR>");

mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/Extras");
mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/Extras/Charon");
mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/Extras/Installation_Toolkit");
mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/Extras/Iris");
mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/Extras/Networking");

echo ("* Done.<BR><BR>");

echo ("* Making: ./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/Image/<BR>");

mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/Image");
mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/Image/Project Development Team");
mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/Image/Project ScreenShots");

echo ("* Done.<BR><BR>");

echo ("* Making: ./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/Video/<BR>");

mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/Video");
mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/Video/Tutorials");
mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/Video/Tutorials/Installation");
mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/Video/Tutorials/Operation");

echo ("* Done.<BR><BR>");

echo ("* Making: ./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_OPERATION/<BR>");

mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_OPERATION");

echo ("* Done.<BR><BR>");

echo ("* ./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_OPERATION/Applications/<BR>");

mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_OPERATION/Applications");
mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_OPERATION/Applications/Administration");
mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_OPERATION/Applications/Background");
mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_OPERATION/Applications/Custom");
mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_OPERATION/Applications/Member");
mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_OPERATION/Applications/Moderator");
mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_OPERATION/Applications/Panel");
mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_OPERATION/Applications/Public");
mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_OPERATION/Applications/Root");
mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_OPERATION/Applications/Services");

echo ("* Done.<BR><BR>");

echo ("* Making: ./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_OPERATION/Architect/<BR>");

mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_OPERATION/Architect");
mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_OPERATION/Architect/MySQL");
mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_OPERATION/Architect/ToolKit");

echo ("* Done.<BR><BR>");

echo ("* Making: ./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_OPERATION/Download/<BR>");

mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_OPERATION/Download");
mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_OPERATION/Download/Audio");
mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_OPERATION/Download/Audio/Music");
mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_OPERATION/Download/Document");
mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_OPERATION/Download/Document/Portable_Document_Format");
mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_OPERATION/Download/Document/Rich_Text_Format");
mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_OPERATION/Download/Document/Text");
mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_OPERATION/Download/Executable");
mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_OPERATION/Download/Image");
mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_OPERATION/Download/Torrent");
mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_OPERATION/Download/Torrent/Download_Complete");
mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_OPERATION/Download/Torrent/Download_Incomplete");
mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_OPERATION/Download/Torrent/Torrent_Complete");
mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_OPERATION/Download/Torrent/Torrent_Incomplete");
mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_OPERATION/Download/Torrent/Torrent_Load");
mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_OPERATION/Download/Video");
mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_OPERATION/Download/Video/Movies");

echo ("* Done.<BR><BR>");

echo ("* Making: ./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_OPERATION/Maintenance/<BR>");

mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_OPERATION/Maintenance");
mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_OPERATION/Maintenance/Diagnostics");

echo ("* Done.<BR><BR>");

echo ("* Making: ./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_OPERATION/Member/<BR>");

mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_OPERATION/Member");
mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_OPERATION/Member/Master_List");
mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_OPERATION/Member/Master_List/Electronic_Mail_Addresses");
mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_OPERATION/Member/Setup");
mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_OPERATION/Member/Setup/Files");
mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_OPERATION/Member/Setup/Files/Audio");
mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_OPERATION/Member/Setup/Files/Document");
mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_OPERATION/Member/Setup/Files/Document/Activity_Logging");
mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_OPERATION/Member/Setup/Files/Document/Friends");
mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_OPERATION/Member/Setup/Files/Document/Streams");
mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_OPERATION/Member/Setup/Files/Document/Streams/Wall");
mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_OPERATION/Member/Setup/Files/Image");
mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_OPERATION/Member/Setup/Files/Video");
mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_OPERATION/Member/Setup/Files/Indexes");
mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_OPERATION/Member/Setup/Files/Indexes/Files");
mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_OPERATION/Member/Setup/Files/Indexes/Files/Audio");
mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_OPERATION/Member/Setup/Files/Indexes/Files/Document");
mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_OPERATION/Member/Setup/Files/Indexes/Files/Document/Electronic_Mail");
mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_OPERATION/Member/Setup/Files/Indexes/Files/Document/Friends");
mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_OPERATION/Member/Setup/Files/Indexes/Files/Document/Logging");
mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_OPERATION/Member/Setup/Files/Indexes/Files/Document/Streams");
mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_OPERATION/Member/Setup/Files/Indexes/Files/Document/Streams/Wall");
mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_OPERATION/Member/Setup/Files/Indexes/Files/Image");
mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_OPERATION/Member/Setup/Files/Indexes/Files/Image/Gallery");
mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_OPERATION/Member/Setup/Files/Indexes/Files/Image/Profile");
mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_OPERATION/Member/Setup/Files/Indexes/Files/Video");
mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_OPERATION/Member/Setup/Files/Indexes/Files/Video/Gallery");
mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_OPERATION/Member/Setup/Files/Indexes/Files/Video/Live");
mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_OPERATION/Member/Setup/Files/Indexes/Files/Video/Profile");

echo ("* Done.<BR><BR>");

echo ("* Making: ./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_OPERATION/System/<BR>");

mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_OPERATION/System");
mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_OPERATION/System/Configuration");
mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_OPERATION/System/Default");
mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_OPERATION/System/Default/Friend");
mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_OPERATION/System/Default/Messages");
mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_OPERATION/System/Default/Register");
mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_OPERATION/System/Default/RSS");
mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_OPERATION/System/Language");
mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_OPERATION/System/Language/English");
mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_OPERATION/System/Log");
mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_OPERATION/System/Log/Activity_Logging");
mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_OPERATION/System/Log/Activity_Logging/Visitor");
mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_OPERATION/System/Plug-Ins");
mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_OPERATION/System/Plug-Ins/Location");
mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_OPERATION/System/Plug-Ins/Location/Default");
mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_OPERATION/System/Plug-Ins/Safe-HTML/Default");
mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_OPERATION/System/Plug-Ins/Text-Editor/Default");
mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_OPERATION/System/Printable");
mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_OPERATION/System/Printable/Article");
mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_OPERATION/System/Printable/News");
mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_OPERATION/System/Security");
mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_OPERATION/System/Security/Module");
mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_OPERATION/System/Security/Module/Sanitization");
mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_OPERATION/System/Security/Module/Sanitization/Default");

echo ("* Done.<BR><BR>");

echo ("* Making: ./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_OPERATION/Temporary/<BR>");

mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_OPERATION/Temporary");
mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_OPERATION/Temporary/Messenger");
mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_OPERATION/Temporary/Messenger/DBMS");
mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_OPERATION/Temporary/Messenger/DBMS/Clear-Text");
mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_OPERATION/Temporary/Messenger/DBMS/Clear-Text/Visible");
mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_OPERATION/Temporary/Messenger/DBMS/Clear-Text/Invisible");
mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_OPERATION/Temporary/Messenger/DBMS/Encrypted-Text");
mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_OPERATION/Temporary/Messenger/DBMS/Encrypted-Text/Visible");
mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_OPERATION/Temporary/Messenger/DBMS/Encrypted-Text/Invisible");
mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_OPERATION/Temporary/Messenger/Setup");
mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_OPERATION/Temporary/Messenger/Setup/Files");
mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_OPERATION/Temporary/Messenger/Setup/Files/Archive");
mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_OPERATION/Temporary/Messenger/Setup/Files/Audio");
mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_OPERATION/Temporary/Messenger/Setup/Files/Document");
mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_OPERATION/Temporary/Messenger/Setup/Files/Document/Encryption");
mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_OPERATION/Temporary/Messenger/Setup/Files/Image");
mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_OPERATION/Temporary/Messenger/Text-File");
mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_OPERATION/Temporary/Messenger/Text-File/Clear-Text");
mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_OPERATION/Temporary/Messenger/Text-File/Clear-Text/Invisible");
mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_OPERATION/Temporary/Messenger/Text-File/Clear-Text/Visible");
mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_OPERATION/Temporary/Messenger/Text-File/Encrypted-Text");
mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_OPERATION/Temporary/Messenger/Text-File/Encrypted-Text/Invisible");
mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_OPERATION/Temporary/Messenger/Text-File/Encrypted-Text/Visible");
mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_OPERATION/Temporary/Upload");

echo ("* Done.<BR><BR>");

echo ("* Making: ./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_OPERATION/Upload<BR>");

mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_OPERATION/Upload");
mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_OPERATION/Upload/Audio");
mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_OPERATION/Upload/Audio/Music");
mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_OPERATION/Upload/Default");
mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_OPERATION/Upload/Document");
mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_OPERATION/Upload/Document/Portable_Document_Format");
mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_OPERATION/Upload/Document/Rich_Text_Format");
mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_OPERATION/Upload/Document/Text");
mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_OPERATION/Upload/Document/Executable");
mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_OPERATION/Upload/Document/Executable/BSD");
mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_OPERATION/Upload/Document/Executable/GNU");
mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_OPERATION/Upload/Document/Executable/Linux");
mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_OPERATION/Upload/Document/Executable/Unix");
mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_OPERATION/Upload/Document/Executable/Windows");
mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_OPERATION/Upload/Image");
mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_OPERATION/Upload/Video");
mkdir("./$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_ROOT/$_Builder_Generate_POST_DIRECTORY_STRUCTURE_DIRECTORY_NAME_OPERATION/Upload/Video/Movies");

echo ("* Done.<HR><BR>");

} // [ + ] IF: Internal Application: Generate Directory Structure Variables Have Executed

} // [ + ] IF: Internal Application: Generate Is: Activated

} // [ + ] IF: Internal Application: Generate Directory Structure IS Default Is: Activated

echo ("
				<B>This Application Builds Cerberus Content Management System From Scratch</B><BR>
				This Application will build Cerberus Content Management System from Scratch-Copy. This is useful for creating an entirely fresh and free of any Malware installation of CerberusCMS by making it impossible for any possibly malicious code injected files to be carried over from machine to machine.<BR><BR>

				<B>What does this mean, exactly ?</B><BR>
				This means that it is possible for any file of any kind within in any Operating System and on any Digital Storage Medium attached to the specific Personal-Computer or Web Server to be infected with completely undetectable <A HREF=\"https://en.wikipedia.org/wiki/Remote_desktop_software#RAT\" TITLE=\":: Open & Display The Wikipedia Entry For :: Remote Access Trojan ::\" TARGET=\"_NEW\">Malware, Remote Access Trojan and Virus</A>.<BR><BR>
				Remote Access Trojan or R.A.T. / RAT is a tool used by malicious hackers to remotely view a computer and send terminal commands to it in the background without the user knowing about it. It is mostly Microsoft&reg;&trade; Windows&reg;&trade; Operating Systems
				that are vulnerable to this kind of Malware. Malware like this is very bad because the malicious attackers / malicious hackers can then steal credit card transaction information, messages and all kinds of other data by sending Privilege-Escalated commands to the Terminal Interpreter on the Personal-Computer or Web Server. Commands could be things like updating
				the Secure Socket Layer or the Open Secure Socket Layer Application and the other Applications on the Web Server itself to a backdoored version of that Application where the malicious attacker / malicious hacker can then compromise all of the encryption on the Web Server to steal credit card numbers and other data before that data is encrypted through the POST or GET encryption programming code passed through the Secure Socket Layer or Transport Layer Security Applications installed on the Personal-Computer or Web Server Operating System.<BR><BR>
				
				<B>Why should I do this ?</B><BR>
				Building software from source code on a newly built Personal-Computer or Web Server with OEM or Security-Hardened Hardware-Firmware flashed and with a freshly Installed, Configured and Security-Hardened Operating System makes it just about impossible for any Remote Access Trojans, Malware and Virus to infect that computer even if that Malware is
				undetectable to Malware Scanners. This Application will build Cerberus Content Management System from Scratch-Copy. Scratch-Copy means that the entire system of this specific instance of Cerberus Content Management System will be built from Scratch and then from Scratch-Copy of the actual Programming Source Code and not by copying the files from the Master GIT Repository or from anywhere else.<BR><BR>
				
				<B>How does that work, exactly ?</B><BR>
				Installing in this method will make, build and create clean the free of any Malware:<BR>
				* All 330+ Unique Directories From Cerberus Content Management System to this Web Server by first creating the Organized Directory Structure from scratch with this Application.<BR>
				* All 2,147+ Unique Files From Cerberus Content Management System with File Extensions will be made from scratch on this Web Server with this Application.<BR>
				* All 2,147+ Unique Files From Cerberus Content Management System will be opened by this Application and all 65,000+ Lines of Clean and Documented Pre-Hyper-Text-Post-Processor Programming Code from that will be copied from the Master GIT Repository for this Software Project and then this Programming Source Code will be pasted into each individual file on this Web Server with this Application.<BR>
				* All Directories and Files that were created by this Application will then be set to the correct Directory and File Read and Write Permissions with the Change-Mode Functions in the Programming Code.<BR><BR>
				
				This is a very different process than downloading an Installation Package for this Software Project and then uploading it to the Web Server for installation.<BR><BR>
				
				This process makes it just about impossible for your newly built Web Server flashed with OEM or Security-Hardend Device Hardware-Firmware and with freshly Installed, Configured and Security-Hardened Operating System from getting injected with any kind of Malware at all whatsoever.<BR><BR>
				
				<B>How do I secure a Web Server ?</B><BR>
				Web Server Security Hardening requires extensive knowledge of Digital Information Security. But essentially one would custom build a Web Server from scratch with all high quality components and attachments. Before assembling the Personal-Computer or Web Server one would upgrade and correctly clock each component on each Device as well as process and upgrade the Device itself. This process involves things such as upgrading the capacitors on the Web Server to the most high quality capacitors available. After the Web Server is assembled correctly one would then update the Component Firmware Programming Code with either the most recent and up-to-date OEM / Original Equipment Manufacturer provided firmware modules from the official manufacturer distribution servers <I>OR</I> with Third-Party Security-Hardened Firmware Modules.<BR><BR>
				
				<B>What is a \"Third-Party and Aftermarket Security-Hardened Firmware Module\" ?</B><BR>
				Third-Party and Aftermarket Security-Hardened Device Firmwares are often Open Source Projects that are even more dynamic, more up-to-date, more feature rich and even more secure than OEM Device Firmware Modules. <A HREF=\"http://freshtomato.org/\" TITLE=\":: Open & Display The Web Page Entry For :: Tomato / Fresh Tomato Firmware ::\" TARGET=\"_NEW\">Tomato / Fresh Tomato</A> Firmware for a Home Router or <A HREF=\"https://wiki.lineageos.org/devices/\" TITLE=\":: Open & Display The Web Page Entry For :: Official LineageOS AOSP Project ::\" TARGET=\"_NEW\">Official LineageOS Firmware</A> for a personal cell phone is a good example of what firmware flashing is.<BR><BR>
				
				If one wanted to have the best of the best when it comes to Digital Information Security, Features, Operation, Operatability, Mobility and just about every other factor then one would flash and configure a Security-Hardened Third-Party or Aftermarket Device Firmware. Official LineageOS Device Firmwares for example are nearly 2+ years ahead in development at all times of even the latest OEM Flagship Devices released to the public.<BR><BR>
				
				Flagship Devices are devices like cell phones such as the Samsung Galaxy S23 Ultra ( Released In: February of 2023 ) or the Apple iPhone Pro 14 Max ( Released In: September of 2023 ).<BR>
				Flagship Devices are considered the best commercially available product at that specific moment in time from year to year by the general public.
				With LineageOS one would have the most recently released and completely developed, functional, pure and Security-Hardened version of the Android Open Source Software Project sometimes 2+ years before the newest version of this firmware makes its way into general public use. This is superior to the \"latest OEM Device Firmware\". This is like building a race car with custom made racing parts where each racing part is made with \"top-of-the-line\" high quality metals and components and then personally securing the car with better security measures like welding an unbreakable chain to the bottom of the hood and then attaching that chain to the undercarriage with a lock so that no one can ever \"pop-the-hood\" of the car to steal parts out of it when the owner leaves the car somewhere. This is superior to and more secure than what the OEM version of that car is released to the general public for purchase.<BR><BR>
				Extreme Security-Hardening would go a step further and flash all of the components on the Web Server such as the CPU Microcode, Hard Drive / Solid State Drive / Digital Storage Medium Firmware, Motherboard BIOS and other Motherboard Firmwares, RAM / Memory Module Firmwares and all other Devices attached to the Motherboard.<BR><BR>
				
				<B>What is \"Extreme Security Hardening\" ?</B><BR>
				Once the entire Web Server is built and Security-Hardened one would then make a backup of that fully Configured and Security-Hardened Operating System to a Digital Storage Medium so that it can be reinstalled on the Web Server in 30 to 60 minutes after that Web Server has been securely wiped with zeroing software or zeroing commands. This makes it very easy to wipe and Re-Install the already fully Configured and Security-Hardened Web Server Operating System and all of the Software that was Installed, Configured and Security-Hardened intitially just in case the Web Server is ever compromised by a malicious attacker / malicious hacker or if an Operating System update breaks the entire system. Nothing is completely impervious when it comes to Digital Information Security, however. When dealing with people's personal information such as their credit and debit card numbers and their private messages Web Server Administrators must comply with at the very least Industry Standard Digital Information Security.<BR><BR>
				But the real question is: Since most free general public-use Social Media Service providers available do not show the Programming Source Code to the public for scrutiny and analysis how can anyone be sure that it is secure at all ?
				<HR>
");

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