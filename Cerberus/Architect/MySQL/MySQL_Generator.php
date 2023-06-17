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
 +    ()    ()  ()  ()
 +  ()  ()() () () -
 +  ------------------------------
 +  Installation Application Module
 + ----------------------------------------------------------------------------------------------------------
 + - This File, Location	 : Root Directory => Architect => MySQL => MySQL_Generator.php
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
 + [ ^ ] Cerberus Content Management System :: Architect Installation :: MyS.Q.L. Structure Generator
 +
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 +
 + [ @ ] Error Handling Systems
 +
 +
 ============================================================================================================
*/

error_reporting("E_WARNING ^ E_NOTICE");

/*
 ============================================================================================================
 +
 +
 + [ @ ] Inclusion of All Internal Configuration Files
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 + Internal Configuration :: Global System Configuration Modules
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + IF: Global System Configuration File Exists, Include It
 ============================================================================================================
*/

	include_once "../../System/Configuration/Global_Configuration.php";

/*
 ============================================================================================================
 +
 +
 + [ @ ] Global Variables
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 + Local Server Variables
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Local Server Date, Time and Referrer
 ============================================================================================================
*/

$_GLOBAL_LOCAL_SERVER_DATE										= date("l, F j, Y g:i:s A");
$_GLOBAL_LOCAL_SERVER_DATE_WITH_SEPARATION								= date("l:F:j:Y:h:i:s:A");
$_GLOBAL_LOCAL_SERVER_DATE_RFC										= date("r");
$_GLOBAL_LOCAL_SERVER_DATE_MINUTES									= date("i");
$_GLOBAL_LOCAL_SERVER_DATE_SECONDS									= date("s");
$_GLOBAL_LOCAL_SERVER_HTTP_REFERRER									= $_SERVER['HTTP_REFERER'];

/*
 ============================================================================================================
 +
 + Global :: Date, Time and Referrer :: Variables
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Global :: Architect :: Generator :: MySQL Structure  :: Local Server :: Variables :: Date :: Standard
 ============================================================================================================
*/

$_GLOBAL_LOCAL_SERVER_DATE_STANDARD									= date("l, F j, Y g:i:s A");
$_GLOBAL_LOCAL_SERVER_DATE_RFC										= date("r");

/*
 ============================================================================================================
 + Global :: Architect :: Generator :: MySQL Structure :: Local Server :: Variables :: Date :: Year
 ============================================================================================================
*/

$_GLOBAL_LOCAL_SERVER_DATE_NUMERICAL_YEAR_FULL								= date("Y");
$_GLOBAL_LOCAL_SERVER_DATE_NUMERICAL_YEAR_SHORT								= date("y");

/*
 ============================================================================================================
 + Global :: Architect :: Generator :: MySQL Structure :: Local Server :: Variables :: Date :: Month
 ============================================================================================================
*/

$_GLOBAL_LOCAL_SERVER_DATE_NUMERICAL_MONTH_FULL								= date("m");
$_GLOBAL_LOCAL_SERVER_DATE_NUMERICAL_MONTH_SHORT							= date("n");

/*
 ============================================================================================================
 + Global :: Architect :: Generator :: MySQL Structure :: Local Server :: Variables :: Date :: Month :: Day
 ============================================================================================================
*/

$_GLOBAL_LOCAL_SERVER_DATE_NUMERICAL_MONTH_DAY_FULL							= date("d");

/*
 ============================================================================================================
 + Global :: Architect :: Generator :: MySQL Structure :: Local Server :: Variables :: Date :: Year :: Month :: Day
 ============================================================================================================
*/

$_GLOBAL_LOCAL_SERVER_DATE_NUMERICAL_FULL								= date("Y-m-d");
$_GLOBAL_LOCAL_SERVER_DATE_TIME_NUMERICAL_FULL								= date("Y-m-d-g-i-s");

/*
 ============================================================================================================
 + Global :: Architect :: Generator :: MySQL Structure :: Local Server :: Variables :: Time
 ============================================================================================================
*/

$_GLOBAL_LOCAL_SERVER_TIME_HOURS									= date("g");
$_GLOBAL_LOCAL_SERVER_TIME_MINUTES									= date("i");
$_GLOBAL_LOCAL_SERVER_TIME_SECONDS									= date("s");
$_GLOBAL_LOCAL_SERVER_TIME_HOURS_MINUTES_SECONDS							= date("g-i-s");

/*
 ============================================================================================================
 +
 + Remote Server Variables
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Remote Server Connection
 ============================================================================================================
*/

$_GLOBAL_REMOTE_SERVER_ADDRESS										= $_SERVER['REMOTE_ADDR'];
$_GLOBAL_REMOTE_SERVER_HOSTNAME										= $_SERVER['REMOTE_HOST'];
$_GLOBAL_REMOTE_SERVER_PORT										= $_SERVER['REMOTE_PORT'];
$_GLOBAL_REMOTE_USER											= $_SERVER['REMOTE_USER'];

/*
 ============================================================================================================
 +
 + Local Server Protocol Variables
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Local Server Connection Information Protocol Variables
 ============================================================================================================
*/

$_GLOBAL_LOCAL_SERVER_GATEWAY_INTERFACE									= $_SERVER['GATEWAY_INTERFACE'];
$_GLOBAL_LOCAL_SERVER_ADDRESS										= $_SERVER['SERVER_ADDR'];
$_GLOBAL_LOCAL_SERVER_NAME										= $_SERVER['SERVER_NAME'];
$_GLOBAL_LOCAL_SERVER_SOFTWARE										= $_SERVER['SERVER_SOFTWARE'];
$_GLOBAL_LOCAL_SERVER_PROTOCOL										= $_SERVER['SERVER_PROTOCOL'];

/*
 ============================================================================================================
 + Local Server Connection Request Protocol Variables
 ============================================================================================================
*/

$_GLOBAL_LOCAL_SERVER_REQUEST_METHOD									= $_SERVER['REQUEST_METHOD'];
$_GLOBAL_LOCAL_SERVER_REQUEST_TIME									= $_SERVER['REQUEST_TIME'];
$_GLOBAL_LOCAL_SERVER_REQUEST_TIME_FLOAT								= $_SERVER['REQUEST_TIME_FLOAT'];
$_GLOBAL_LOCAL_SERVER_QUERY_STRING									= $_SERVER['QUERY_STRING'];
$_GLOBAL_LOCAL_SERVER_DOCUMENT_ROOT									= $_SERVER['DOCUMENT_ROOT'];

/*
 ============================================================================================================
 + Local Server Hyper-Text-Transfer-Protocol Variables
 ============================================================================================================
*/

$_GLOBAL_LOCAL_SERVER_HTTP_ACCEPT									= $_SERVER['HTTP_ACCEPT'];
$_GLOBAL_LOCAL_SERVER_HTTP_ACCEPT_CHARACTER_SET								= $_SERVER['HTTP_ACCEPT_CHARSET'];
$_GLOBAL_LOCAL_SERVER_HTTP_ACCEPT_ENCODING								= $_SERVER['HTTP_ACCEPT_ENCODING'];
$_GLOBAL_LOCAL_SERVER_HTTP_ACCEPT_LOADING								= $_SERVER['HTTP_ACCEPT_LOADING'];
$_GLOBAL_LOCAL_SERVER_HTTP_ACCEPT_LANGUAGE								= $_SERVER['HTTP_ACCEPT_LANGUAGE'];
$_GLOBAL_LOCAL_SERVER_HTTP_CONNECTION_TYPE								= $_SERVER['HTTP_CONNECTION'];
$_GLOBAL_LOCAL_SERVER_HTTP_HOST										= $_SERVER['HTTP_HOST'];
$_GLOBAL_LOCAL_SERVER_HTTP_REFERRER									= $_SERVER['HTTP_REFERER'];
$_GLOBAL_LOCAL_SERVER_HTTP_USER_AGENT									= $_SERVER['HTTP_USER_AGENT'];

/*
 ============================================================================================================
 + Date Hashing Variables
 ============================================================================================================
*/

$_GLOBAL_LOCAL_SERVER_DATE_MD5										= md5($_GLOBAL_LOCAL_SERVER_DATE);
$_GLOBAL_LOCAL_SERVER_DATE_MD5_2									= md5($_GLOBAL_LOCAL_SERVER_DATE);

/*
 ============================================================================================================
 +
 +
 + [ @ ] Hyper-Text-Markup-Language Document :: Output :: Start
 +
 +
 ============================================================================================================
*/

echo ("
<HTML>
	<HEAD>
		<TITLE>$_PROJECT_STRING_NAME_EXTENDED :: My-Structured-Query-Language Database-Tables Generator</TITLE>
		<LINK REL=\"stylesheet\" HREF=\"../../Theme/Global/Style_Sheet/Style.css\" TYPE=\"text/css\">
		<Link REL=\"shortcut icon\" HREF=\"../../Theme/Global/Image/Icon/FavIcon.ico\" TYPE=\"image/x-icon\">
		<META HTTP-EQUIV=\"Content-Type\" CONTENT=\"text/html;charset=utf-8\">
	</HEAD>

	<BODY>
		<HR><CENTER>[ <A HREF=\"?\" TITLE=\":: Reload The My Structured-Query-Language Database Structure Generation Form ::\">$_PROJECT_STRING_NAME_EXTENDED :: My-Structured-Query-Language :: Database Structure Generator</A> ]</CENTER><HR><BR>
");

/*
 ============================================================================================================
 +
 +
 + MySQL Generator :: Variables
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 + MySQL Generator :: Variables :: POST Variables
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + MySQL Generator :: Variables :: POST Variables :: Database Server
 ============================================================================================================
*/

$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX 						= $_POST['Architect_MySQL_Generator_Database_Table_Name_Prefix'];

/*
 ============================================================================================================
 + MySQL Generator :: Variables :: POST Variables :: Credentials :: Administration Credentials
 ============================================================================================================
*/

$_MySQL_Generator_POST_ADMINISTRATOR_ELECTRONIC_MAIL_ADDRESS						= $_POST['Architect_Administrator_Electronic_Mail_Address'];
$_MySQL_Generator_POST_ADMINISTRATOR_USERNAME								= $_POST['Architect_Administrator_UserName'];
$_MySQL_Generator_POST_ADMINISTRATOR_PASSWORD								= $_POST['Architect_Administrator_Password'];

/*
 ============================================================================================================
 + Password Hashing System
 ============================================================================================================
*/

$_MySQL_Generator_POST_ADMINISTRATOR_PASSWORD_HASH							= password_hash($_MySQL_Generator_POST_ADMINISTRATOR_PASSWORD, PASSWORD_BCRYPT);
$_MySQL_Generator_POST_ADMINISTRATOR_PASSWORD_HASH_MD5							= md5($_MySQL_Generator_POST_ADMINISTRATOR_PASSWORD);

/*
 ============================================================================================================
 +
 +
 + My-Structured-Query-Language Tables Generation Form
 +
 +
 ============================================================================================================
*/

echo ("
		My-Structured-Query-Language :: Database Server :: Tables Generation<BR><BR>
		<FORM ACTION=\"?\" METHOD=\"POST\">
			<I>Name This Database Prefix</I>:<BR>
			[ **DO NOT** Input Any Underscores Or Symbols ]<BR>
				<INPUT TYPE=\"TEXT\" NAME=\"Architect_MySQL_Generator_Database_Table_Name_Prefix\" VALUE=\"Cerberus\"><BR><BR>
			<I>Administration Account :: Electronic Mail Address</I>:<BR>
				<INPUT TYPE=\"TEXT\" NAME=\"Architect_Administrator_Electronic_Mail_Address\"><BR><BR>
			<I>Administration Account :: UserName</I>:<BR>
				<INPUT TYPE=\"TEXT\" NAME=\"Architect_Administrator_UserName\"><BR><BR>
			<I>Administration Account :: Password</I>:<BR>
			[ It Is Recommended To Use a Password Generation and Password Storage Application Such As KeePass ]<BR>
			[ When Using a Password Generator: Set Options To 50 Random Alpha-Numerical-Symbol Characters ]<BR>
				<INPUT TYPE=\"PASSWORD\" NAME=\"Architect_Administrator_Password\"><BR>
			<INPUT TYPE=\"SUBMIT\" VALUE=\"Generate S.Q.L. Database Structure\"><BR>
		</FORM>
");

if ($_MySQL_Generator_POST_ADMINISTRATOR_USERNAME) {

/*
 ============================================================================================================
 +
 +
 + My-Structured-Query-Language :: Generator :: Tables :: Output
 +
 +
 ============================================================================================================
*/

$_MySQL_Generator_PRINT_MySQL_TABLES	= "

/* $_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX */

/* Applications :: Non-Registered Visitor and Registered Member Account */

CREATE TABLE {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
application_file_integrity VARCHAR(512),
application_file_integrity_installation VARCHAR(512),
application_file_name VARCHAR(100),
application_file_permission CHAR(1),
application_file_permission_camera CHAR(1),
application_file_permission_microphone CHAR(1),
application_file_permission_location_gps CHAR(1),
application_file_permission_location_glo CHAR(1),
application_file_permission_location_internet_protocol_address CHAR(1),
application_file_status CHAR(1),
application_file_timestamp_installation VARCHAR(100),
PRIMARY KEY (id)
);

/* Applications :: Root */

CREATE TABLE {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications_administration (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
application_file_integrity VARCHAR(512),
application_file_integrity_installation VARCHAR(512),
application_file_name VARCHAR(100),
application_file_permission CHAR(1),
application_file_permission_camera CHAR(1),
application_file_permission_microphone CHAR(1),
application_file_permission_location_gps CHAR(1),
application_file_permission_location_glo CHAR(1),
application_file_permission_location_internet_protocol_address CHAR(1),
application_file_status CHAR(1),
application_file_timestamp_installation VARCHAR(100),
PRIMARY KEY (id)
);

/* Applications :: Background */

CREATE TABLE {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications_background (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
application_file_integrity VARCHAR(512),
application_file_integrity_installation VARCHAR(512),
application_file_name VARCHAR(100),
application_file_permission CHAR(1),
application_file_permission_camera CHAR(1),
application_file_permission_microphone CHAR(1),
application_file_permission_location_gps CHAR(1),
application_file_permission_location_glo CHAR(1),
application_file_permission_location_internet_protocol_address CHAR(1),
application_file_status CHAR(1),
application_file_timestamp_installation VARCHAR(100),
PRIMARY KEY (id)
);

/* Custom Applications */

CREATE TABLE {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications_custom (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
custom_application_data TEXT,
custom_application_name VARCHAR(250),
custom_application_timestamp_installation VARCHAR(100),
PRIMARY KEY (id)
);

/* Applications :: Root */

CREATE TABLE {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications_root (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
application_file_integrity VARCHAR(512),
application_file_integrity_installation VARCHAR(512),
application_file_name VARCHAR(100),
application_file_permission CHAR(1),
application_file_permission_camera CHAR(1),
application_file_permission_microphone CHAR(1),
application_file_permission_location_gps CHAR(1),
application_file_permission_location_glo CHAR(1),
application_file_permission_location_internet_protocol_address CHAR(1),
application_file_status CHAR(1),
application_file_timestamp_installation VARCHAR(100),
PRIMARY KEY (id)
);

/* Applications :: Services */

CREATE TABLE {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications_services (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
application_file_integrity VARCHAR(512),
application_file_integrity_installation VARCHAR(512),
application_file_name VARCHAR(100),
application_file_permission CHAR(1),
application_file_permission_camera CHAR(1),
application_file_permission_microphone CHAR(1),
application_file_permission_location_gps CHAR(1),
application_file_permission_location_glo CHAR(1),
application_file_permission_location_internet_protocol_address CHAR(1),
application_file_status CHAR(1),
application_file_timestamp_installation VARCHAR(100),
PRIMARY KEY (id)
);

/* Application Links */

CREATE TABLE {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_application_links (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
application_link_name VARCHAR(250),
application_link_row CHAR(3),
application_link_url VARCHAR(250),
application_link_timestamp_installation VARCHAR(100),
PRIMARY KEY (id)
);

/* Application Panels */

CREATE TABLE {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_application_panels (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
panel_file_integrity VARCHAR(512),
panel_file_integrity_installation VARCHAR(512),
panel_file_name VARCHAR(250),
panel_file_permission CHAR(1),
panel_alignment CHAR(1),
panel_row CHAR(2),
panel_file_status CHAR(1),
panel_title VARCHAR(250),
panel_timestamp_installation VARCHAR(100),
PRIMARY KEY (id)
);

/* Articles */

CREATE TABLE {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_articles (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
article_author VARCHAR(50),
article_data TEXT,
article_time VARCHAR(50),
article_title VARCHAR(50),
PRIMARY KEY (id)
);

/* Comments */

CREATE TABLE {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_comments (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
comment_author VARCHAR(50),
comment_data TEXT,
comment_application_id CHAR(20),
comment_application_name VARCHAR(100),
comment_time VARCHAR(50),
PRIMARY KEY (id)
);

/* File Categories */

CREATE TABLE {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_file_categories (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
file_category_description VARCHAR(250),
file_category_time VARCHAR(50),
file_category_title VARCHAR(50),
PRIMARY KEY (id)
);

/* Files */

CREATE TABLE {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_files (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
file_author VARCHAR(50),
file_category VARCHAR(250),
file_description TEXT,
file_image VARCHAR(50),
file_location VARCHAR(50),
file_number_of_downloads CHAR(15),
file_time VARCHAR(50),
file_title VARCHAR(50),
file_uploader VARCHAR(50),
PRIMARY KEY (id)
);

/* Forum */

CREATE TABLE {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_forum_forum (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
forum_access_level CHAR(1),
forum_description TEXT,
forum_timestamp VARCHAR(50),
forum_title VARCHAR(200),
PRIMARY KEY (id)
);

/* Forum Topics */

CREATE TABLE {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_forum_topic (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
topic_access_level CHAR(1),
topic_description TEXT,
topic_forum_id CHAR(20),
topic_last_poster CHAR(20),
topic_timestamp VARCHAR(50),
topic_timestamp_last_message VARCHAR(50),
topic_title VARCHAR(200),
PRIMARY KEY (id)
);

/* Forum Topic Messages */

CREATE TABLE {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_forum_topic_message (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
message_access_level CHAR(1),
message_author VARCHAR(50),
message_data TEXT,
message_forum_topic_id CHAR(20),
message_timestamp VARCHAR(50),
message_timestamp_last_update VARCHAR(50),
PRIMARY KEY (id)
);

/* Links */

CREATE TABLE {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_links (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
link_author VARCHAR(50),
link_description TEXT,
link_time VARCHAR(50),
link_title VARCHAR(50),
link_url VARCHAR(250),
PRIMARY KEY (id)
);

/* Registered Member Accounts */

CREATE TABLE {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_members (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
member_access_level CHAR(1),
member_account_device_web_browser VARCHAR(200),
member_account_device_web_browser_authorized VARCHAR(200),
member_account_device_mac_address VARCHAR(17),
member_account_device_mac_address_authorized VARCHAR(17),
member_attempt_authentication CHAR(1),
member_birthdate VARCHAR(10),
member_address_cryptocurrency_bitcoin VARCHAR(200),
member_address_cryptocurrency_bitcoin_gold VARCHAR(200),
member_address_cryptocurrency_dogecoin VARCHAR(200),
member_address_cryptocurrency_ethereum VARCHAR(200),
member_address_cryptocurrency_litecoin VARCHAR(200),
member_address_cryptocurrency_mazacoin VARCHAR(200),
member_address_cryptocurrency_namecoin VARCHAR(200),
member_address_cryptocurrency_peercoin VARCHAR(200),
member_address_cryptocurrency_primecoin VARCHAR(200),
member_address_cryptocurrency_troncoin VARCHAR(200),
member_address_cryptocurrency_zcash VARCHAR(200),
member_address_home TEXT,
member_address_mail TEXT,
member_electronic_mail_address VARCHAR(100),
member_experience_amount VARCHAR(12),
member_gender CHAR(1),
member_image_avatar VARCHAR(100),
member_image_picture VARCHAR(100),
member_ip_address VARCHAR(50),
member_ip_address_authorized VARCHAR(50),
member_ip_address_authorized_multifactor VARCHAR(50),
member_ip_address_authorization_token VARCHAR(512),
member_ip_address_last_authentication_server_device VARCHAR(200),
member_ip_address_last_authentication_server_local VARCHAR(200),
member_ip_address_last_authentication_server_remote VARCHAR(200),
member_ip_address_log TEXT,
member_contact_emergency_1 TEXT,
member_contact_emergency_2 TEXT,
member_contact_emergency_3 TEXT,
member_emergency_medical TEXT,
member_last_referrer TEXT,
member_level_rank CHAR(2),
member_location_device_html_gps_x VARCHAR(250),
member_location_device_html_gps_y VARCHAR(250),
member_location_device_php_gps_x VARCHAR(250),
member_location_device_php_gps_y VARCHAR(250),
member_location_device_glo TEXT,
member_location_device_region VARCHAR(100),
member_location_device_timezone VARCHAR(100),
member_location_given_area VARCHAR(100),
member_location_given_region VARCHAR(100),
member_location_given_timezone VARCHAR(100),
member_mood VARCHAR(100),
member_music VARCHAR(100),
member_name_first VARCHAR(100),
member_name_last VARCHAR(100),
member_name_middle VARCHAR(100),
member_name_nickname VARCHAR(100),
member_number_of_posts VARCHAR(10),
member_number_phone_area_code VARCHAR(5),
member_number_phone_cell VARCHAR(20),
member_number_phone_country_code VARCHAR(5),
member_number_phone_home VARCHAR(20),
member_number_phone_work VARCHAR(20),
member_password VARCHAR(250),
member_physical_biometrics_blood_type VARCHAR(10),
member_physical_biometrics_color_eye_1 VARCHAR(10),
member_physical_biometrics_color_eye_2 VARCHAR(10),
member_physical_biometrics_color_hair VARCHAR(10),
member_physical_biometrics_height VARCHAR(4),
member_physical_biometrics_weight VARCHAR(4),
member_physical_dimensions TEXT,
member_physical_ethnicity_1 VARCHAR(200),
member_physical_ethnicity_2 VARCHAR(200),
member_physical_ethnicity_3 VARCHAR(200),
member_physical_ethnicity_4 VARCHAR(200),
member_physical_nationality_1 VARCHAR(200),
member_physical_nationality_2 VARCHAR(200),
member_physical_nationality_3 VARCHAR(200),
member_physical_race_1 VARCHAR(200),
member_physical_race_2 VARCHAR(200),
member_physical_race_3 VARCHAR(200),
member_physical_race_4 VARCHAR(200),
member_profile_about TEXT,
member_profile_signature TEXT,
member_registration_date VARCHAR(100),
member_registration_details TEXT,
member_security_fingerprint_cleartext TEXT,
member_security_fingerprint_hashed VARCHAR(512),
member_security_custom_password_panel TEXT,
member_security_pgp_key_panel_private TEXT,
member_security_pgp_key_panel_public TEXT,
member_security_setting_flag_force_logout CHAR(1),
member_settings_control_panel_audio CHAR(1),
member_settings_encryption_pgp CHAR(1),
member_settings_language VARCHAR(50),
member_settings_newsletter CHAR(1),
member_settings_theme_directory VARCHAR(25),
member_settings_visibility_profile_activity CHAR(1),
member_settings_visibility_profile_authentication CHAR(1),
member_settings_visibility_profile_contact CHAR(1),
member_settings_visibility_profile_contact_emergency CHAR(1),
member_settings_visibility_profile_details CHAR(1),
member_settings_visibility_profile_friends CHAR(1),
member_settings_visibility_profile_gallery_audio CHAR(1),
member_settings_visibility_profile_gallery_document CHAR(1),
member_settings_visibility_profile_gallery_image CHAR(1),
member_settings_visibility_profile_gallery_video CHAR(1),
member_settings_visibility_profile_location CHAR(1),
member_settings_visibility_profile_physical CHAR(1),
member_settings_visibility_profile_security CHAR(1),
member_settings_visibility_profile_streams CHAR(1),
member_social_preference_marital_status CHAR(1),
member_social_preference_sexual_orientation CHAR(1),
member_socialmedia_audio_spotify VARCHAR(250),
member_socialmedia_business_linkedin VARCHAR(250),
member_socialmedia_communications_discord VARCHAR(250),
member_socialmedia_communications_icq VARCHAR(250),
member_socialmedia_communications_skype VARCHAR(250),
member_socialmedia_communications_snapchat VARCHAR(250),
member_socialmedia_gallery_instagram VARCHAR(250),
member_socialmedia_posting_facebook VARCHAR(250),
member_socialmedia_posting_twitter VARCHAR(250),
member_socialmedia_programming_bitbucket VARCHAR(250),
member_socialmedia_programming_github VARCHAR(250),
member_socialmedia_programming_launchpad VARCHAR(250),
member_socialmedia_security_keybase VARCHAR(250),
member_socialmedia_video_youtube VARCHAR(250),
member_status_account_activation CHAR(1),
member_status_account_activation_key VARCHAR(100),
member_status_account_active CHAR(1),
member_status_account_banned CHAR(1),
member_status_account_last_active_timestamp VARCHAR(250),
member_status_account_last_active_years VARCHAR(10),
member_status_account_last_active_months VARCHAR(10),
member_status_account_last_active_days VARCHAR(10),
member_status_account_last_active_hours VARCHAR(10),
member_status_account_last_active_minutes VARCHAR(10),
member_status_account_last_active_seconds VARCHAR(10),
member_status_account_locked CHAR(1),
member_url_homepage VARCHAR(250),
member_username VARCHAR(50),
PRIMARY KEY (id)
);

/* Messenger :: Plain-Text-File Room */

CREATE TABLE {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_messenger_clear_text_file_room (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
messenger_room_creation_author VARCHAR(100),
messenger_room_creation_author_device_ip_address VARCHAR(100),
messenger_room_creation_author_system_access_level VARCHAR(100),
messenger_room_creation_date VARCHAR(100),
messenger_room_name VARCHAR(100),
messenger_room_password_entry VARCHAR(100),
messenger_room_password_maintenance VARCHAR(100),
messenger_room_status_visibility CHAR(1),
PRIMARY KEY (id)
);

/* Messenger :: Plain-Text S.Q.L. Messages */

CREATE TABLE {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_messenger_clear_text_messages (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
messenger_room_creation_timestamp VARCHAR(100),
messenger_room_message TEXT,
messenger_room_message_author VARCHAR(100),
messenger_room_message_author_system_access_level CHAR(1),
messenger_room_message_author_device_fingerprint VARCHAR(300),
messenger_room_message_author_device_ip_address VARCHAR(300),
messenger_room_message_author_device_remote_hostname VARCHAR(300),
messenger_room_message_author_device_remote_request_method VARCHAR(300),
messenger_room_message_author_device_remote_user_agent VARCHAR(300),
messenger_room_message_timestamp VARCHAR(100),
messenger_room_message_id TEXT,
messenger_room_name VARCHAR(100),
PRIMARY KEY (id)
);

/* Messenger :: Encrypted-Text-File Room */

CREATE TABLE {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_messenger_encrypted_text_file_room (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
messenger_room_creation_author VARCHAR(100),
messenger_room_creation_author_device_ip_address VARCHAR(100),
messenger_room_creation_author_system_access_level VARCHAR(100),
messenger_room_creation_date VARCHAR(100),
messenger_room_name VARCHAR(100),
messenger_room_password_entry VARCHAR(100),
messenger_room_password_maintenance VARCHAR(100),
messenger_room_status_visibility CHAR(1),
PRIMARY KEY (id)
);

/* Messenger :: Encrypted-Text S.Q.L. Messages */

CREATE TABLE {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_messenger_encrypted_text_messages (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
messenger_room_message TEXT,
messenger_room_message_author VARCHAR(100),
messenger_room_message_author_system_access_level CHAR(1),
messenger_room_message_author_device_fingerprint VARCHAR(300),
messenger_room_message_author_device_ip_address VARCHAR(300),
messenger_room_message_author_device_remote_hostname VARCHAR(300),
messenger_room_message_author_device_remote_request_method VARCHAR(300),
messenger_room_message_author_device_remote_user_agent VARCHAR(300),
messenger_room_message_id TEXT,
messenger_room_name VARCHAR(100),
messenger_room_timestamp_message VARCHAR(100),
messenger_room_timestamp_creation VARCHAR(100),
PRIMARY KEY (id)
);

/* Networking */

CREATE TABLE {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_networking (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
blocked_dns_address_string VARCHAR(250),
blocked_dns_address_text TEXT,
blocked_ip_address_string VARCHAR(250),
blocked_ip_address_text TEXT,
PRIMARY KEY (id)
);

/* News Articles */

CREATE TABLE {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_news (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
news_author VARCHAR(50),
news_avatar VARCHAR(50),
news_data TEXT,
news_mood VARCHAR(250),
news_music VARCHAR(250),
news_rss_rfc TEXT,
news_time VARCHAR(50),
news_title VARCHAR(50),
PRIMARY KEY (id)
);

/* News Submissions */

CREATE TABLE {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_news_submissions (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
news_submission_author VARCHAR(50),
news_submission_data TEXT,
news_submission_time VARCHAR(50),
PRIMARY KEY (id)
);

/* Private Messages */

CREATE TABLE {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_private_messages (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
private_message_from VARCHAR(50),
private_message_recipient VARCHAR(50),
private_message_subject VARCHAR(250),
private_message_data TEXT,
private_message_sent_time VARCHAR(50),
PRIMARY KEY (id)
);

/* Ranks */

CREATE TABLE {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_ranks (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
rank_gender_female_0 VARCHAR(25),
rank_gender_female_1 VARCHAR(25),
rank_gender_female_2 VARCHAR(25),
rank_gender_female_3 VARCHAR(25),
rank_gender_female_4 VARCHAR(25),
rank_gender_male_0 VARCHAR(25),
rank_gender_male_1 VARCHAR(25),
rank_gender_male_2 VARCHAR(25),
rank_gender_male_3 VARCHAR(25),
rank_gender_male_4 VARCHAR(25),
rank_gender_none VARCHAR(25),
PRIMARY KEY (id)
);

/* Settings */

CREATE TABLE {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_settings (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
settings_system_time_cookies VARCHAR(10),
settings_system_status_embedded_compression_gzip CHAR(1),
settings_system_status_offline_mode CHAR(1),
settings_system_file_extension_audio VARCHAR(4),
settings_system_file_extension_image CHAR(3),
settings_system_directory_language VARCHAR(50),
settings_system_directory_theme VARCHAR(50),
settings_system_website_title VARCHAR(250),
settings_system_upload_size_private_member CHAR(15),
settings_system_upload_size_private_member_streams CHAR(15),
settings_system_upload_size_public_file_categories CHAR(15),
settings_system_upload_size_public_messenger CHAR(15),
settings_system_plugin_directory_location VARCHAR(50),
settings_system_plugin_directory_smileys VARCHAR(50),
settings_system_plugin_directory_safeHTML VARCHAR(50),
settings_system_plugin_directory_text_editor VARCHAR(250),
settings_system_plugin_status_location CHAR(1),
settings_system_plugin_status_safeHTML CHAR(1),
settings_system_plugin_status_text_editor CHAR(1),
settings_system_security_account_restrict_mac_address CHAR(1),
settings_system_security_account_restrict_ip CHAR(1),
settings_system_security_account_restrict_web_browser CHAR(1),
settings_system_security_device_multifactor_ip CHAR(1),
settings_system_security_cache_server CHAR(1),
settings_system_security_module_directory_sanitization VARCHAR(50),
settings_system_security_module_status_sanitization VARCHAR(50),
PRIMARY KEY (id)
);

/* Shout Messages */

CREATE TABLE {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_shout_messages (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
message_author VARCHAR(50),
message_data VARCHAR(250),
message_time VARCHAR(50),
PRIMARY KEY (id)
);

/* Statistics */

CREATE TABLE {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_statistics (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
statistics_total_number_of_document_executions_non_unique CHAR(15),
statistics_total_number_of_document_executions_unique CHAR(15),
statistics_installation_date VARCHAR(50),
PRIMARY KEY (id)
);

/* System Messages */

CREATE TABLE {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_system_message (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
system_message_author VARCHAR(50),
system_message_data TEXT,
system_message_member VARCHAR(50),
system_message_timestamp VARCHAR(100),
PRIMARY KEY (id)
);

/* Tasks */

CREATE TABLE {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_tasks (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
tasks_author VARCHAR(50),
tasks_data TEXT,
tasks_date_year VARCHAR(2),
tasks_date_month VARCHAR(2),
tasks_date_day VARCHAR(2),
tasks_time_hour VARCHAR(2),
tasks_time_minute VARCHAR(2),
tasks_time_second VARCHAR(2),
PRIMARY KEY (id)
);
";

/*
 ============================================================================================================
 +
 +
 + My-Structured-Query-Language :: Generator :: Tables :: Columns and Data :: Output
 +
 +
 ============================================================================================================
*/

$_MySQL_Generator_PRINT_MySQL_TABLE_STRINGS	= "
";

$_MySQL_Generator_PRINT_MySQL_ADMINISTRATION_ACCOUNT	= "

/* Administration and Services Root Administration Accounts */

/* Administration ( $_MySQL_Generator_POST_ADMINISTRATOR_USERNAME ) Account */

/* Services Root Administrator ( Cerberus ) Account */
";

$_MySQL_Generator_PRINT_MySQL_TABLES					= str_replace('\"', '', $_MySQL_Generator_PRINT_MySQL_TABLES);
$_MySQL_Generator_PRINT_MySQL_TABLE_STRINGS				= str_replace('\"', '', $_MySQL_Generator_PRINT_MySQL_TABLE_STRINGS);
$_MySQL_Generator_PRINT_MySQL_ADMINISTRATION_ACCOUNT			= str_replace('\"', '', $_MySQL_Generator_PRINT_MySQL_ADMINISTRATION_ACCOUNT);

		echo ("$_PROJECT_STRING_NAME Administration UserName / Password HASHED<BR>");
		echo (" [ Password In BlowFish Algorithm With Salt / Password In Pure Message Digest Algorithm, Version: 5 / Password In Clear-Text ]<BR>");
		echo ("<TEXTAREA ROWS=\"10\" COLS=\"75\" MAXLENGTH=\"10000\">Administration Username: $_MySQL_Generator_POST_ADMINISTRATOR_USERNAME / Administration Password In BlowFish Algorithm With Password HASH Salt: $_MySQL_Generator_POST_ADMINISTRATOR_PASSWORD_HASH / Administration Password In Pure Message Digest Algorithm, Version 5: $_MySQL_Generator_POST_ADMINISTRATOR_PASSWORD_HASH_MD5 / Administration Password In Clear-Text: $_MySQL_Generator_POST_ADMINISTRATOR_PASSWORD</TEXTAREA><BR><BR>");

		echo ("$_PROJECT_STRING_NAME MyS.Q.L. Tables Generated:<BR>");
		echo ("<TEXTAREA ROWS=\"15\" COLS=\"115\" MAXLENGTH=\"10000\">$_MySQL_Generator_PRINT_MySQL_TABLES</TEXTAREA><BR><BR>");

		echo ("$_PROJECT_STRING_NAME MyS.Q.L. Table Strings Generated:<BR>");
		echo ("<TEXTAREA ROWS=\"15\" COLS=\"115\" MAXLENGTH=\"10000\">$_MySQL_Generator_PRINT_MySQL_TABLE_STRINGS</TEXTAREA><BR><BR>");

		echo ("$_PROJECT_STRING_NAME Administration Account S.Q.L. Insertion Strings Generated:<BR>");
		echo ("<TEXTAREA ROWS=\"15\" COLS=\"115\" MAXLENGTH=\"10000\">$_MySQL_Generator_PRINT_MySQL_ADMINISTRATION_ACCOUNT</TEXTAREA>");

} // [ + ] IF: Database Server Query :: Insert :: Default Administration Account Database Data Variables Have Executed

/*
 ============================================================================================================
 +
 +
 + Hyper-Text-Markup-Language Document :: Output :: End
 +
 +
 ============================================================================================================
*/

echo ("
	</BODY>
</HTML>
");
?>