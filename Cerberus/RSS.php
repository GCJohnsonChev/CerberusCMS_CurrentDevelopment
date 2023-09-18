<?php
/*
 ============================================================================================================
 + ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
 + ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
 + Cerberus Content Management System
 + ----------------------------------------------------------------------------------------------------------
 + - Author			 : Gary Christopher Johnson of Oildale and SouthGate In Southern California
 + - Company			 : Tinke Software, Free and Open Source Software
 + - Company Address		 : Oildale In Southern California, United States of America
 + - Electronic Mail Address	 : CerberusCMS@Protonmail.com, TinkeSoftware@Protonmail.com
 + - Document Notes		 : View this file in a non-formatting text editor without word-wrap for the
 +				 : correct display of this programming code and its indentation.
 + ----------------------------------------------------------------------------------------------------------
 +    ()    () - ()()
 +  ()  () () () ()
 +  ------
 + Information Feed Application
 + ----------------------------------------------------------------------------------------------------------
 + - This File, Location	 : Master Root Directory => Root Directory => RSS.php
 + - This File, Version		 : 0.7.1
 + - This File, Programming Code : Pure Pre-Hyper-Text-Post-Processor
 + - Programming Code Model	 : Procedural, Functional, Object Oriented :: Pre-Order Algebraic
 + -				 :					   :: Pre-Order Logical
 + - Compatibility		 : Pre-Hyper-Text-Post-Processor 	   :: Version Numbers: 5, 7, 8
 + -				 : Zend Engine				   :: Version Numbers: 3, 4
 + - Official Release Date	 : Wednesday, November 1st of 2023
 + ----------------------------------------------------------------------------------------------------------
 + -------------------------------------------------------------------------------	 - Nyx -
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
 + ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ Edit Number : 4,325
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 +
 +
 + [ ^ ] Extra Application Module :: Real Simple Syndication
 +
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 + Real Simple Syndication :: Error Handling Systems
 +
 ============================================================================================================
*/

error_reporting("E_WARNING ^ E_NOTICE");

/*
 ============================================================================================================
 + IF: System Configuration File Exists, Include It
 ============================================================================================================
*/

$_GLOBAL_SYSTEM_CONFIGURATION_FILE					= "./System/Configuration/Global_Configuration.php";

if (file_exists($_GLOBAL_SYSTEM_CONFIGURATION_FILE)) {

	include_once "$_GLOBAL_SYSTEM_CONFIGURATION_FILE";

/*
 ============================================================================================================
 + Database Server Class Variables
 ============================================================================================================
*/

$DB									= new DB();

/*
 ============================================================================================================
 + Database Server Connection Variables
 ============================================================================================================
*/

$_Real_Simple_Syndication_DATABASE_SERVER_CONNECT			= mysql_connect("$_ACCESS_DATABASE_SERVER_HOSTNAME","$_ACCESS_DATABASE_SERVER_USERNAME","$_ACCESS_DATABASE_SERVER_PASSWORD");

/*
 ============================================================================================================
 + Database Server Database Name Select Variables
 ============================================================================================================
*/

$_Real_Simple_Syndication_DATABASE_SERVER_SELECT			= mysql_select_db("$_ACCESS_DATABASE_SERVER_DATABASE_NAME") or die(mysql_error());

/*
 ============================================================================================================
 + IF: Real Simple Syndication :: Connect To Configured Database Server
 ============================================================================================================
*/

if ($_Real_Simple_Syndication_DATABASE_SERVER_CONNECT) {

/*
 ============================================================================================================
 + IF: Real Simple Syndication :: Connect To Configured Database Server Database Name
 ============================================================================================================
*/

if ($_Real_Simple_Syndication_DATABASE_SERVER_SELECT) {

/*
 ============================================================================================================
 +
 + Real Simple Syndication Generation :: News Article Entries
 +
 ============================================================================================================
*/

header("Content-Type: text/xml;charset=iso-8859-1");

echo ("<?xml version=\"1.0\" encoding=\"ISO-8859-1\" ?>

<rss version=\"2.0\">
	<channel>
		<title>Real Simple Syndication => News Article Generator</title>
		<link>$_ACCESS_URL_CLEARTEXT</link>
		<description>Real Simple Syndication :: News Article Feeds</description>
		<language>en-en</language>
	<image>
		<url>$_ACCESS_URL_CLEARTEXT/System/Default/RSS/Icon_RSS.jpg</url>
		<title>Real Simple Syndication => News Article Generator</title>
		<link>$_ACCESS_URL_CLEARTEXT</link>
	</image>
");

/*
 ============================================================================================================
 + Select All News Entries From Database Server
 ============================================================================================================
*/

$_Real_Simple_Syndication_DB_Query_SELECT_NEWS					= $DB->query("SELECT * FROM {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_news ORDER BY id ASC");

while ($_Real_Simple_Syndication_DB_Query_SELECT_NEWS_Fetch_Array = $DB->fetch_array($_Real_Simple_Syndication_DB_Query_SELECT_NEWS)) {

/*
 ============================================================================================================
 + Real Simple Syndication :: News Articles :: Variables :: Define and Retrieve News Entries From Database Server
 ============================================================================================================
*/

$_Real_Simple_Syndication_LIST_NEWS_ID						= $_Real_Simple_Syndication_DB_Query_SELECT_NEWS_Fetch_Array['id'];
$_Real_Simple_Syndication_LIST_NEWS_AUTHOR					= $_Real_Simple_Syndication_DB_Query_SELECT_NEWS_Fetch_Array['news_author'];
$_Real_Simple_Syndication_LIST_NEWS_DATA					= $_Real_Simple_Syndication_DB_Query_SELECT_NEWS_Fetch_Array['news_data'];
$_Real_Simple_Syndication_LIST_NEWS_RFC						= $_Real_Simple_Syndication_DB_Query_SELECT_NEWS_Fetch_Array['news_rss_rfc'];
$_Real_Simple_Syndication_LIST_NEWS_TITLE					= $_Real_Simple_Syndication_DB_Query_SELECT_NEWS_Fetch_Array['news_title'];

/*
 ============================================================================================================
 + Real Simple Syndication :: News Articles :: Variables :: Replace Harmful Character Entities
 ============================================================================================================
*/

$_Real_Simple_Syndication_SYMBOL_REPLACE[0]					= "&";
$_Real_Simple_Syndication_SYMBOL_REPLACE[1]					= "<";
$_Real_Simple_Syndication_SYMBOL_REPLACE[2]					= "'";
$_Real_Simple_Syndication_SYMBOL_REPLACE_WITH[0]				= "&amp;";
$_Real_Simple_Syndication_SYMBOL_REPLACE_WITH[1]				= "&lt;";
$_Real_Simple_Syndication_SYMBOL_REPLACE_WITH[2]				= "&#39;";
$_Real_Simple_Syndication_LIST_NEWS_DATA					= str_replace($_Real_Simple_Syndication_SYMBOL_REPLACE, $_Real_Simple_Syndication_SYMBOL_REPLACE_WITH, $_Real_Simple_Syndication_LIST_NEWS_DATA);

/*
 ============================================================================================================
 + Real Simple Syndication :: Generate :: News Article Entries List
 ============================================================================================================
*/

echo ("
	<item>
		<title>$_Real_Simple_Syndication_LIST_NEWS_TITLE</title>
		<link>$_ACCESS_URL_CLEARTEXT/$_INTERNAL_FILE_KERNEL?$_INTERNAL_APPLICATION_MODULE_MEMBER&#61;All_News&amp;DisplayID&#61;$_Real_Simple_Syndication_LIST_NEWS_ID</link>
		<guid isPermaLink=\"true\">$_ACCESS_URL_CLEARTEXT/$_INTERNAL_FILE_KERNAL?$_INTERNAL_APPLICATION_MODULE_MEMBER&#61;All_News&amp;DisplayID&#61;$_Real_Simple_Syndication_LIST_NEWS_ID</guid>
		<description>$_Real_Simple_Syndication_LIST_NEWS_DATA</description>
		<pubDate>$_Real_Simple_Syndication_LIST_NEWS_RFC</pubDate>
	</item>
");

} // [ + ] WHILE: Retrieving News Article Entries From Database Server

/*
 ============================================================================================================
 + Kill Database Server Query: Select All News Entries
 ============================================================================================================
*/

$DB->free($_Real_Simple_Syndication_DB_Query_SELECT_NEWS);

/*
 ============================================================================================================
 + Kill Database Server Connection :: Real Simple Syndication
 ============================================================================================================
*/

$DB->close($_Real_Simple_Syndication_DATABASE_SERVER_CONNECT);

echo ("
	</channel>
</rss>
");

/*
 ============================================================================================================
 + Flush All Previously Initialized Objects
 ============================================================================================================
*/

ob_end_flush();

} // [ + ] IF: Connect To Configured Database Server Database Name

} // [ + ] IF: Connect To Configured Database Server

} // [ + ] IF: Include System Configuration File
?>