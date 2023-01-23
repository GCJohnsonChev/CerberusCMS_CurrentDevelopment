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
 + - File Location: root->Cerberus->RSS.php
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
 + Real Simple Syndication
 +
 +
 ================================================================
*/

/*
 ================================================================
 +
 + RSS->Error Handling
 +
 ================================================================
*/

error_reporting("E_WARNING ^ E_NOTICE");

/*
 ================================================================
 + IF: System Configuration File Exists, Include It
 ================================================================
*/

$_GLOBAL_SYSTEM_CONFIGURATION_FILE			= "System/Configuration/Global_Configuration.php";

if (file_exists($_GLOBAL_SYSTEM_CONFIGURATION_FILE)) {

	include_once "$_GLOBAL_SYSTEM_CONFIGURATION_FILE";

/*
 ================================================================
 + Initialize Database Class Variables
 ================================================================
*/

$DB							= new DB();

/*
 ================================================================
 + Database Server Connection Variables
 ================================================================
*/

$_MAIN_DATABASE_SERVER_CONNECT				= mysql_connect("$_ACCESS_DATABASE_SERVER_HOSTNAME","$_ACCESS_DATABASE_SERVER_USERNAME","$_ACCESS_DATABASE_SERVER_PASSWORD");

/*
 ================================================================
 + Database Server Database Name Select Variables
 ================================================================
*/

$_MAIN_DATABASE_SERVER_DATABASE_NAME_SELECT		= mysql_select_db("$_ACCESS_DATABASE_SERVER_DATABASE_NAME") or die(mysql_error());

/*
 ================================================================
 +
 + Real Simple Syndication Generation: News Entries
 +
 ================================================================
*/

header("Content-Type: text/xml;charset=iso-8859-1");

echo ("<?xml version=\"1.0\" encoding=\"ISO-8859-1\" ?>

<rss version=\"2.0\">
	<channel>
		<title>Real Simple Syndication => News Generator</title>
		<link>$_ACCESS_URL_CLEARTEXT</link>
		<description>Real Simple Syndication News Feeds</description>
		<language>en-en</language>
	<image>
		<url>$_ACCESS_URL_CLEARTEXT/System/Default/RSS/Icon_RSS.jpg</url>
		<title>Real Simple Syndication => News Generator</title>
		<link>$_ACCESS_URL_CLEARTEXT</link>
	</image>
");

/*
 ================================================================
 + DB Query: Select All News Entries
 ================================================================
*/

$_DB_Query_SELECT_NEWS					= $DB->query("SELECT * FROM {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_news ORDER BY id ASC");

while ($_DB_Query_SELECT_NEWS_Fetch_Array = $DB->fetch_array($_DB_Query_SELECT_NEWS)) {

/*
 ================================================================
 + Define and Retrieve News Entries From S.Q.L. Database
 ================================================================
*/

$_MAIN_RSS_LIST_NEWS_ID					= $_DB_Query_SELECT_NEWS_Fetch_Array['id'];
$_MAIN_RSS_LIST_NEWS_AUTHOR				= $_DB_Query_SELECT_NEWS_Fetch_Array['news_author'];
$_MAIN_RSS_LIST_NEWS_DATA				= $_DB_Query_SELECT_NEWS_Fetch_Array['news_data'];
$_MAIN_RSS_LIST_NEWS_RFC				= $_DB_Query_SELECT_NEWS_Fetch_Array['news_rss_rfc'];
$_MAIN_RSS_LIST_NEWS_TITLE				= $_DB_Query_SELECT_NEWS_Fetch_Array['news_title'];

/*
 ================================================================
 + Replace Harmful Character Entities
 ================================================================
*/

$_MAIN_RSS_SYMBOL_REPLACE[0]				= "&";
$_MAIN_RSS_SYMBOL_REPLACE[1]				= "<";
$_MAIN_RSS_SYMBOL_REPLACE[2]				= "'";
$_MAIN_RSS_SYMBOL_REPLACE_WITH[0]			= "&amp;";
$_MAIN_RSS_SYMBOL_REPLACE_WITH[1]			= "&lt;";
$_MAIN_RSS_SYMBOL_REPLACE_WITH[2]			= "&#39;";
$_MAIN_RSS_LIST_NEWS_DATA				= str_replace($_MAIN_RSS_SYMBOL_REPLACE, $_MAIN_RSS_SYMBOL_REPLACE_WITH, $_MAIN_RSS_LIST_NEWS_DATA);

/*
 ================================================================
 + Generate Real Simple Syndication: News Entries List
 ================================================================
*/

echo ("
	<item>
		<title>$_MAIN_RSS_LIST_NEWS_TITLE</title>
		<link>$_ACCESS_URL_CLEARTEXT/Cerberus.php?$_INTERNAL_APPLICATION_MODULE_MEMBER&#61;All_News&amp;DisplayID&#61;$_MAIN_RSS_LIST_NEWS_ID</link>
		<guid isPermaLink=\"true\">$_ACCESS_URL_CLEARTEXT/Cerberus.php?$_INTERNAL_APPLICATION_MODULE_MEMBER&#61;All_News&amp;DisplayID&#61;$_MAIN_RSS_LIST_NEWS_ID</guid>
		<description>$_MAIN_RSS_LIST_NEWS_DATA</description>
		<pubDate>$_MAIN_RSS_LIST_NEWS_RFC</pubDate>
	</item>
");

} // [ + ] WHILE_ARRAY

/*
 ================================================================
 + Kill Database Query: Select All News Entries
 ================================================================
*/

$DB->free($_DB_Query_SELECT_NEWS);

/*
 ================================================================
 + Kill Database Server Connection
 ================================================================
*/

$DB->close($_MAIN_DATABASE_SERVER_CONNECT);

echo ("
	</channel>
</rss>
");

/*
 ================================================================
 + Flush All Initialized Objects
 ================================================================
*/

ob_end_flush();

} // [ + ] IF_INCLUDE_SYSTEM_CONFIGURATION_FILE
?>