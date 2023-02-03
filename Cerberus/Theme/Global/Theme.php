<?php
/*
 ===========================================================================================
 + Cerberus Content Management System.
 + ---
 + - Author : Gary Christopher Johnson
 + - E-Mail : TinkeSoftware@Protonmail.com
 + - Company: Tinke Software
 + - Notes  : View this file in a non-formatting text editor for correct indentation display
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
 + - File Location: root->Cerberus->Theme->Global->Theme.php
 + - File Version:  0.6 - Wednesday, March 1st of 2023.
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
 ===========================================================================================
*/

/*
 ================================================================
 +
 +
 + Theme: Cerberus
 +
 +
 ================================================================
*/

$_THIS_THEME_DIRECTORY					= "Global";
$_THIS_THEME_IMAGE_DIRECTORY				= "Image";

/*
 ================================================================
 +
 + Application Blocks, Left Aligned Tables
 +
 ================================================================
*/

$_THIS_THEME_APPLICATION_PANEL_1			= "
						<CENTER>
							<TABLE BORDER=\"0\" CELLPADDING=\"0\" CELLSPACING=\"0\">
								<TR>
									<TD><IMG SRC=\"./Theme/$_THIS_THEME_DIRECTORY/$_THIS_THEME_IMAGE_DIRECTORY/Block/1.png\" ALT=\"Image\"></TD>
									<TD CLASS=\"BI2\"></TD>
									<TD><IMG SRC=\"./Theme/$_THIS_THEME_DIRECTORY/$_THIS_THEME_IMAGE_DIRECTORY/Block/3.png\" ALT=\"Image\"></TD>
								</TR>

								<TR>
									<TD CLASS=\"BI4\"></TD>
									<TD CLASS=\"BI5\" WIDTH=\"600\">
";

/*
 ================================================================
 +
 + Application Blocks, Right Aligned Tables
 +
 ================================================================
*/

$_THIS_THEME_APPLICATION_PANEL_2			= "
									<TD CLASS=\"BI6\"></TD>
								</TR>

								<TR>
									<TD><IMG SRC=\"./Theme/$_THIS_THEME_DIRECTORY/$_THIS_THEME_IMAGE_DIRECTORY/Block/7.png\" ALT=\"Image\"></TD>
									<TD CLASS=\"BI8\"></TD>
									<TD CLASS=\"BI9\"></TD>
								</TR>
							</TABLE>
						</CENTER>

						<BR>
";

/*
 ================================================================
 +
 + Application Modules, Center Tables
 +
 ================================================================
*/

/*
 ================================================================
 +
 + Application Modules, Application Images Aligned Left
 +
 ================================================================
*/

$_THIS_THEMES_APPLICATION_MODULE_1			= "
						<CENTER>
							<TABLE BORDER=\"0\" CELLPADDING=\"0\" CELLSPACING=\"0\">
								<TR>
									<TD><IMG SRC=\"./Theme/$_THIS_THEME_DIRECTORY/$_THIS_THEME_IMAGE_DIRECTORY/Application/1.png\" ALT=\"Image\"></TD>
									<TD CLASS=\"MI2\"></TD>
									<TD><IMG SRC=\"./Theme/$_THIS_THEME_DIRECTORY/$_THIS_THEME_IMAGE_DIRECTORY/Application/3.png\" ALT=\"Image\"></TD>
								</TR>

								<TR>
									<TD CLASS=\"MI4\"></TD>
									<TD CLASS=\"MI5\" WIDTH=\"900\">
";

/*
 ================================================================
 +
 + Application Modules, Application Images Aligned Right
 +
 ================================================================
*/

$_THIS_THEMES_APPLICATION_MODULE_2			= "
									<TD CLASS=\"MI6\"></TD>
								</TR>

								<TR>
									<TD><IMG SRC=\"./Theme/$_THIS_THEME_DIRECTORY/$_THIS_THEME_IMAGE_DIRECTORY/Application/7.png\" ALT=\"Image\"></TD>
									<TD CLASS=\"MI8\"></TD>
									<TD CLASS=\"MI9\"></TD>
								</TR>
							</TABLE>
						</CENTER>
";

/*
 ================================================================
 +
 + Customizable Meta Data
 +
 ================================================================
*/

$_THIS_THEME_META_DATA					= "
		<Link REL=\"shortcut icon\" HREF=\"./Theme/$_THIS_THEME_DIRECTORY/$_THIS_THEME_IMAGE_DIRECTORY/Icon/FavIcon.ico\" TYPE=\"image/x-icon\">
		<META NAME=\"COPYRIGHT\" CONTENT=\"(C) Tinke Software\">
		<META NAME=\"KEYWORDS\" CONTENT=\"Tinke Software, Tinke Byte, Content, Management, System, Cerberus, Web, Application, Framework, Apache, PHP, MySQL, SQL\">
		<META NAME=\"DESCRIPTION\" CONTENT=\"Cerberus Content Management System, Version: 4, Build: 0.8 ~ Wynn ~\">
		<META NAME=\"ROBOTS\" CONTENT=\"Cerberus Content Management System, Version: 4, Build: 0.8 ~ Wynn ~\">
		<META NAME=\"REVISIT-AFTER\" CONTENT=\"1 DAYS\">
		<META NAME=\"RATING\" CONTENT=\"GLOBAL\">
		<META NAME=\"GENERATOR\" CONTENT=\"Cerberus Content Management System, Version: 4, Build: 0.8 ~ Wynn - Ghost\">
";

/*
 ================================================================
 +
 + Theme Layout
 +
 ================================================================
*/

/*
 ================================================================
 + Theme Layout [ 1 ]
 ================================================================
*/

$_GLOBAL_THEME_LAYOUT_1			= "
		<CENTER><A HREF=\"?$_INTERNAL_APPLICATION_MODULE_MEMBER&#61;News\"><IMG SRC=\"./Theme/$_THIS_THEME_DIRECTORY/$_THIS_THEME_IMAGE_DIRECTORY/Banner/Banner_1.png\" WIDTH=\"80%\" HEIGHT=\"20%\" TITLE=\":: Open & Display The Application Module :: News ::\" ALT=\":: Open & Display The Application Module :: News ::\"></A></CENTER>

		<CENTER>
			<TABLE WIDTH=\"80%\">
				<TR>
					<TD VALIGN=\"Top\">
";

/*
 ================================================================
 + Theme Layout [ 2 ]
 ================================================================
*/


$_GLOBAL_THEME_LAYOUT_2			= "
					</TD>

					<TD VALIGN=\"Top\" WIDTH=\"80%\">
						$_THIS_THEMES_APPLICATION_MODULE_1
";

/*
 ================================================================
 + Theme Layout [ 3 ]
 ================================================================
*/


$_GLOBAL_THEME_LAYOUT_3			= "
						$_THIS_THEMES_APPLICATION_MODULE_2
					</TD>

					<TD VALIGN=\"Top\">
";

/*
 ================================================================
 + Theme Layout [ 4 ]
 ================================================================
*/


$_GLOBAL_THEME_LAYOUT_4			= "
					</TD>
				</TR>
			</TABLE>
		</CENTER>

		<CENTER><IMG SRC=\"./Theme/$_THIS_THEME_DIRECTORY/$_THIS_THEME_IMAGE_DIRECTORY/Banner/Banner_Bottom.png\" WIDTH=\"80%\" TITLE=\"- Cerberus Content Management System -\" ALT=\"- Cerberus Content Management System -\"></CENTER>
";
?>