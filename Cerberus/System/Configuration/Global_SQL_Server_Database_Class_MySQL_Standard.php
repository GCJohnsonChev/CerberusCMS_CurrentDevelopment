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
 +    ()  ()  () () --
 +  () ()  () --- ()
 +  ------------------------------
 +  System File
 + ----------------------------------------------------------------------------------------------------------
 + - This File, Location	 : Root Directory => System => Configuration
 +				 : => Global_SQL_Server_Database_Class_MySQL_Standard.php
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
 + Cerberus :: System Configuration :: Global S.Q.L. Server Database Class :: MyS.Q.L. Standard Driver
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 + Database Class :: Functions
 +
 ============================================================================================================
*/


/*
 ============================================================================================================
 + Database Class Function: Database Server Connect
 ============================================================================================================
*/

class DB {

	function connect($_QUERY) {

		$_QUERY = mysql_connect($_QUERY) or die(mysql_error());
			return $_QUERY;

} // [ + ] Function: Database Server Connect

/*
 ============================================================================================================
 + Database Class Function: Database Server Database Name Selection
 ============================================================================================================
*/

	function connect_db($_QUERY) {

		$_QUERY = mysql_select_db($_QUERY) or die(mysql_error());
			return $_QUERY;

} // [ + ] Function: Database Server Connect To Database Name

/*
 ============================================================================================================
 + Database Class Function: Database Server Database Query
 ============================================================================================================
*/

	function query($_QUERY) {

		$_QUERY = mysql_query($_QUERY);
			return $_QUERY;

} // [ + ] Function: Database Server Query

/*
 ============================================================================================================
 + Database Class Function: Database Server Database Table Fetch Array
 ============================================================================================================
*/

	function fetch_array($_QUERY) {

		 $_QUERY = mysql_fetch_array($_QUERY);
			return $_QUERY;

} // [ + ] Function: Database Server Query: Fetch Array

/*
 ============================================================================================================
 + Database Class Function: Database Server Database Table Fetch Row
 ============================================================================================================
*/

	function fetch_row($_QUERY) {

		$_QUERY = mysql_fetch_row($_QUERY);
			return $_QUERY;

} // [ + ] Function: Database Server Query: Fetch Row

/*
 ============================================================================================================
 + Database Class Function: Database Server Database Table Count Number of Rows
 ============================================================================================================
*/

	function num_rows($_QUERY) {

		$_QUERY = mysql_num_rows($_QUERY);
			return $_QUERY;

} // [ + ] Function: Database Server Query: Number of Rows

/*
 ============================================================================================================
 + Database Class Function: Database Server Close Connection
 ============================================================================================================
*/

	function close($_QUERY) {

		$_QUERY = mysql_close($_QUERY);
			return $_QUERY;

} // [ + ] Function: Database Server: Close Connection

/*
 ============================================================================================================
 + Database Class Function: Database Server Free Result
 ============================================================================================================
*/

	function free($_QUERY) {

		$_QUERY = mysql_free_result($_QUERY);
			return $_QUERY;

} // [ + ] Function: Database Server: Free Result

} // [ + ] Class: Database
?>