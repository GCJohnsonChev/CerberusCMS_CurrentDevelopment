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
 +    ()    () - -
 +  ()  () ()()()()
 +  ------
 +
 + ----------------------------------------------------------------------------------------------------------
 + - This File, Location	 : Root Directory => Theme => Global => Theme.php
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
 + [ ^ ] Theme: 2023 :: Global
 +
 +
 ============================================================================================================
*/

$_THIS_THEME_DIRECTORY					= "Global";
$_THIS_THEME_IMAGE_DIRECTORY				= "Image";

/*
 ============================================================================================================
 +
 + Application Panels :: Left Aligned Tables
 +
 ============================================================================================================
*/

$_THIS_THEME_APPLICATION_PANEL_1			= "
						<CENTER>
							<TABLE BORDER=\"0\" CELLPADDING=\"0\" CELLSPACING=\"0\">
								<TR>
									<TD><IMG SRC=\"./Theme/$_THIS_THEME_DIRECTORY/$_THIS_THEME_IMAGE_DIRECTORY/Panel/1.png?$_GLOBAL_SYSTEM_SECURITY_IMAGE_RANDOM_STRING_GENERATION_CACHE_CIRCUMVENTION\" ALT=\"Image\"></TD>
									<TD CLASS=\"BI2\"></TD>
									<TD><IMG SRC=\"./Theme/$_THIS_THEME_DIRECTORY/$_THIS_THEME_IMAGE_DIRECTORY/Panel/3.png?$_GLOBAL_SYSTEM_SECURITY_IMAGE_RANDOM_STRING_GENERATION_CACHE_CIRCUMVENTION\" ALT=\"Image\"></TD>
								</TR>

								<TR>
									<TD CLASS=\"BI4\"></TD>
									<TD CLASS=\"BI5\" WIDTH=\"600\">
";

/*
 ============================================================================================================
 +
 + Application Panels :: Right Aligned Tables
 +
 ============================================================================================================
*/

$_THIS_THEME_APPLICATION_PANEL_2			= "
									<TD CLASS=\"BI6\"></TD>
								</TR>

								<TR>
									<TD><IMG SRC=\"./Theme/$_THIS_THEME_DIRECTORY/$_THIS_THEME_IMAGE_DIRECTORY/Panel/7.png?$_GLOBAL_SYSTEM_SECURITY_IMAGE_RANDOM_STRING_GENERATION_CACHE_CIRCUMVENTION\" ALT=\"Image\"></TD>
									<TD CLASS=\"BI8\"></TD>
									<TD CLASS=\"BI9\"></TD>
								</TR>
							</TABLE>
						</CENTER>

						<BR>
";

/*
 ============================================================================================================
 +
 + Application Modules :: Center Tables
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 + Application Modules :: Application Images Aligned Left
 +
 ============================================================================================================
*/

$_THIS_THEMES_APPLICATION_MODULE_1			= "
						<CENTER>
							<TABLE BORDER=\"0\" CELLPADDING=\"0\" CELLSPACING=\"0\">
								<TR>
									<TD><IMG SRC=\"./Theme/$_THIS_THEME_DIRECTORY/$_THIS_THEME_IMAGE_DIRECTORY/Application/1.png?$_GLOBAL_SYSTEM_SECURITY_IMAGE_RANDOM_STRING_GENERATION_CACHE_CIRCUMVENTION\" ALT=\"Image\"></TD>
									<TD CLASS=\"MI2\"></TD>
									<TD><IMG SRC=\"./Theme/$_THIS_THEME_DIRECTORY/$_THIS_THEME_IMAGE_DIRECTORY/Application/3.png?$_GLOBAL_SYSTEM_SECURITY_IMAGE_RANDOM_STRING_GENERATION_CACHE_CIRCUMVENTION\" ALT=\"Image\"></TD>
								</TR>

								<TR>
									<TD CLASS=\"MI4\"></TD>
									<TD CLASS=\"MI5\" WIDTH=\"95%\">
";

/*
 ============================================================================================================
 +
 + Application Modules :: Application Images Aligned Right
 +
 ============================================================================================================
*/

$_THIS_THEMES_APPLICATION_MODULE_2			= "
									<TD CLASS=\"MI6\"></TD>
								</TR>

								<TR>
									<TD><IMG SRC=\"./Theme/$_THIS_THEME_DIRECTORY/$_THIS_THEME_IMAGE_DIRECTORY/Application/7.png?$_GLOBAL_SYSTEM_SECURITY_IMAGE_RANDOM_STRING_GENERATION_CACHE_CIRCUMVENTION\" ALT=\"Image\"></TD>
									<TD CLASS=\"MI8\"></TD>
									<TD CLASS=\"MI9\"></TD>
								</TR>
							</TABLE>
						</CENTER>
";

/*
 ============================================================================================================
 +
 + Customizable Meta Data
 +
 ============================================================================================================
*/

$_THIS_THEME_META_DATA					= "
		<Link REL=\"shortcut icon\" HREF=\"./Theme/$_THIS_THEME_DIRECTORY/$_THIS_THEME_IMAGE_DIRECTORY/Icon/FavIcon.ico?$_GLOBAL_SYSTEM_SECURITY_IMAGE_RANDOM_STRING_GENERATION_CACHE_CIRCUMVENTION\" TYPE=\"image/x-icon\">
		<META NAME=\"COPYRIGHT\" CONTENT=\"(C) Tinke Software\">
		<META NAME=\"KEYWORDS\" CONTENT=\"Tinke Software, Tinke Byte, Content, Management, System, Cerberus, Web, Application, Framework, Apache, PHP, MySQL, SQL\">
		<META NAME=\"DESCRIPTION\" CONTENT=\"Cerberus Content Management System, Version: 4, Build: 0.8 ~ Nyx ~\">
		<META NAME=\"ROBOTS\" CONTENT=\"Cerberus Content Management System, Version: 4, Build: 0.8 ~ Nyx ~\">
		<META NAME=\"REVISIT-AFTER\" CONTENT=\"1 DAYS\">
		<META NAME=\"RATING\" CONTENT=\"GLOBAL\">
		<META NAME=\"GENERATOR\" CONTENT=\"Cerberus Content Management System, Version: 4, Build: 0.8 ~ Nyx - Ghost\">
		<META HTTP-EQUIV=\"Content-Type\" CONTENT=\"text/html;charset=utf-8\">
		<META HTTP-EQUIV=Refresh CONTENT=\"216000; URL=javascript:window.close();\">
		<META HTTP-EQUIV=\"Pragma\" CONTENT=\"no-cache\">
";

/*
 ============================================================================================================
 +
 + Theme Layout
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Theme Layout [ 1 ]
 ============================================================================================================
*/

$_GLOBAL_THEME_LAYOUT_1			= "
		<CENTER><A HREF=\"?$_INTERNAL_APPLICATION_MODULE_MEMBER&#61;News\"><IMG SRC=\"./Theme/$_THIS_THEME_DIRECTORY/$_THIS_THEME_IMAGE_DIRECTORY/Banner/Banner_1.png?$_GLOBAL_SYSTEM_SECURITY_IMAGE_RANDOM_STRING_GENERATION_CACHE_CIRCUMVENTION\" WIDTH=\"95%\" HEIGHT=\"20%\" TITLE=\":: Open & Display The Application Module :: Latest News Articles ::\" ALT=\":: Open & Display The Application Module :: Latest News Articles ::\"></A></CENTER>

		<CENTER>
			<TABLE WIDTH=\"95%\">
				<TR>
					<TD VALIGN=\"Top\">
";

/*
 ============================================================================================================
 + Theme Layout [ 2 ]
 ============================================================================================================
*/


$_GLOBAL_THEME_LAYOUT_2			= "
					</TD>

					<TD VALIGN=\"Top\" WIDTH=\"95%\">
						$_THIS_THEMES_APPLICATION_MODULE_1
";

/*
 ============================================================================================================
 + Theme Layout [ 3 ]
 ============================================================================================================
*/


$_GLOBAL_THEME_LAYOUT_3			= "
						$_THIS_THEMES_APPLICATION_MODULE_2
					</TD>

					<TD VALIGN=\"Top\">
";

/*
 ============================================================================================================
 + Theme Layout [ 4 ]
 ============================================================================================================
*/


$_GLOBAL_THEME_LAYOUT_4			= "
					</TD>
				</TR>
			</TABLE>
		</CENTER>

		<CENTER><IMG SRC=\"./Theme/$_THIS_THEME_DIRECTORY/$_THIS_THEME_IMAGE_DIRECTORY/Banner/Banner_Bottom.png?$_GLOBAL_SYSTEM_SECURITY_IMAGE_RANDOM_STRING_GENERATION_CACHE_CIRCUMVENTION\" WIDTH=\"95%\" TITLE=\"- Cerberus Content Management System -\" ALT=\"- Cerberus Content Management System -\"></CENTER>
";
?>