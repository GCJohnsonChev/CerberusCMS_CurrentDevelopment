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
 + - File Location: root->Cerberus->System->Configuration->Global_SQL_Server_Database_Class.php
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
 + Cerberus :: System Configuration :: Global S.Q.L. Server Database Class
 +
 +
 ================================================================
*/

/*
 ================================================================
 +
 + Database Class Functions
 +
 ================================================================
*/


/*
 ================================================================
 + Database Class Function: Database Server Connect
 ================================================================
*/

class DB {
	function connect($_QUERY) {
		$_QUERY = mysql_connect($_QUERY) or die(mysql_error());
			return $_QUERY;
} // [ + ] $DB->connect

/*
 ================================================================
 + Database Class Function: Database Server Database Name Selection
 ================================================================
*/

	function connect_db($_QUERY) {
		$_QUERY = mysql_select_db($_QUERY) or die(mysql_error());
			return $_QUERY;
} // [ + ] $DB->connect_db

/*
 ================================================================
 + Database Class Function: Database Server Database Query
 ================================================================
*/

	function query($_QUERY) {
		$_QUERY = mysql_query($_QUERY);
			return $_QUERY;
} // [ + ] $DB->query

/*
 ================================================================
 + Database Class Function: Database Server Database Table Fetch Array
 ================================================================
*/

	function fetch_array($_QUERY) {
		 $_QUERY = mysql_fetch_array($_QUERY);
			return $_QUERY;
} // [ + ] $DB->fetch_array

/*
 ================================================================
 + Database Class Function: Database Server Database Table Fetch Row
 ================================================================
*/

	function fetch_row($_QUERY) {
		$_QUERY = mysql_fetch_row($_QUERY);
			return $_QUERY;
} // [ + ] $DB->fetch_row

/*
 ================================================================
 + Database Class Function: Database Server Database Table Count Number of Rows
 ================================================================
*/

	function num_rows($_QUERY) {
		$_QUERY = mysql_num_rows($_QUERY);
			return $_QUERY;
} // [ + ] $DB->num_rows

/*
 ================================================================
 + Database Class Function: Database Server Close Connection
 ================================================================
*/

	function close($_QUERY) {
		$_QUERY = mysql_close($_QUERY);
			return $_QUERY;
} // [ + ] $DB->close

/*
 ================================================================
 + Database Class Function: Database Server Free Result
 ================================================================
*/

	function free($_QUERY) {
		$_QUERY = mysql_free_result($_QUERY);
			return $_QUERY;
} // [ + ] $DB->free

} // [ + ] Class Database
?>