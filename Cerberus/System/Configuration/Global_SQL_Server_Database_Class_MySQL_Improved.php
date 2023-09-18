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
 +				 : => Global_SQL_Server_Database_Class_MySQL_Improved.php
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
 + Cerberus :: System Configuration :: Global S.Q.L. Server Database Class :: MyS.Q.L. Improved Driver
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 + Database Class :: Variables
 +
 ============================================================================================================
*/

$_GLOBAL_SQL_DATABASE_SERVER_CONNECTION					= mysqli_connect($_ACCESS_DATABASE_SERVER_HOSTNAME, $_ACCESS_DATABASE_SERVER_USERNAME, $_ACCESS_DATABASE_SERVER_PASSWORD);

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

	function connect($_Global_SQL_Server_Statement_Connect) {

		$_Global_SQL_Server_Statement_Connect			= mysqli_connect($_ACCESS_DATABASE_SERVER_HOSTNAME, $_ACCESS_DATABASE_SERVER_USERNAME, $_ACCESS_DATABASE_SERVER_PASSWORD) or die(mysqli_error());
			return $_Global_SQL_Server_Statement_Connect;

} // [ + ] Function: Database Server Connect

/*
 ============================================================================================================
 + Database Class Function: Database Server Database Name Selection
 ============================================================================================================
*/

	function select_db($_Global_SQL_Server_Statement_Select_Database) {

		$_Global_SQL_Server_Statement_Select_Database 		= mysqli_select_db($_GLOBAL_SQL_DATABASE_SERVER_CONNECTION, $_ACCESS_DATABASE_SERVER_DATABASE_NAME) or die(mysqli_error());
			return $_Global_SQL_Server_Statement_Select_Database;

} // [ + ] Function: Database Server Connect To Database Name

/*
 ============================================================================================================
 + Database Class Function: Database Server Database Query
 ============================================================================================================
*/

	function query($_Global_SQL_Server_Statement_Query) {

		$_Global_SQL_Server_Statement_Query			= mysqli_query($_GLOBAL_SQL_DATABASE_SERVER_CONNECTION, $_Global_SQL_Server_Statement_Query);
			return $_Global_SQL_Server_Statement_Query;

} // [ + ] Function: Database Server Query

/*
 ============================================================================================================
 + Database Class Function: Database Server Database Table Fetch Array
 ============================================================================================================
*/

	function fetch_array($_Global_SQL_Server_Statement_Fetch_Array) {

		 $_Global_SQL_Server_Statement_Fetch_Array		= mysqli_fetch_array($_GLOBAL_SQL_DATABASE_SERVER_CONNECTION, $_Global_SQL_Server_Statement_Fetch_Array);
			return $_Global_SQL_Server_Statement_Fetch_Array;

} // [ + ] Function: Database Server Query: Fetch Array

/*
 ============================================================================================================
 + Database Class Function: Database Server Database Table Fetch Row
 ============================================================================================================
*/

	function fetch_row($_Global_SQL_Server_Statement_Fetch_Row) {

		$_Global_SQL_Server_Statement_Fetch_Row 		= mysqli_fetch_row($_GLOBAL_SQL_DATABASE_SERVER_CONNECTION, $_Global_SQL_Server_Statement_Fetch_Row);
			return $_Global_SQL_Server_Statement_Fetch_Row;

} // [ + ] Function: Database Server Query: Fetch Row

/*
 ============================================================================================================
 + Database Class Function: Database Server Database Table Count Number of Rows
 ============================================================================================================
*/

	function num_rows($_Global_SQL_Server_Statement_Number_of_Rows) {

		$_Global_SQL_Server_Statement_Number_of_Rows		 = mysqli_num_rows($_GLOBAL_SQL_DATABASE_SERVER_CONNECTION, $_Global_SQL_Server_Statement_Number_of_Rows);
			return $_Global_SQL_Server_Statement_Number_of_Rows;

} // [ + ] Function: Database Server Query: Number of Rows

/*
 ============================================================================================================
 + Database Class Function: Database Server Close Connection
 ============================================================================================================
*/

	function close($_Global_SQL_Server_Statement_Close_Connection) {

		$_Global_SQL_Server_Statement_Close_Connection 		= mysqli_close($_GLOBAL_SQL_DATABASE_SERVER_CONNECTION, $_Global_SQL_Server_Statement_Close_Connection);
			return $_Global_SQL_Server_Statement_Close_Connection;

} // [ + ] Function: Database Server: Close Connection

/*
 ============================================================================================================
 + Database Class Function: Database Server Free Result
 ============================================================================================================
*/

	function free($_Global_SQL_Server_Statement_Free_Result) {

		$_Global_SQL_Server_Statement_Free_Result = mysqli_free_result($_GLOBAL_SQL_DATABASE_SERVER_CONNECTION, $_Global_SQL_Server_Statement_Free_Result);
			return $_Global_SQL_Server_Statement_Free_Result;

} // [ + ] Function: Database Server: Free Result

} // [ + ] Class: Database
?>