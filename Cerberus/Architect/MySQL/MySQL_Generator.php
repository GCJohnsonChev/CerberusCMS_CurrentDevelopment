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

$_GLOBAL_LOCAL_SERVER_DATE								= date("l, F j, Y g:i:s A");
$_GLOBAL_LOCAL_SERVER_DATE_WITH_SEPARATION						= date("l:F:j:Y:h:i:s:A");
$_GLOBAL_LOCAL_SERVER_DATE_RFC								= date("r");
$_GLOBAL_LOCAL_SERVER_DATE_MINUTES							= date("i");
$_GLOBAL_LOCAL_SERVER_DATE_SECONDS							= date("s");
$_GLOBAL_LOCAL_SERVER_HTTP_REFERRER							= $_SERVER['HTTP_REFERER'];

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

$_GLOBAL_REMOTE_SERVER_ADDRESS								= $_SERVER['REMOTE_ADDR'];
$_GLOBAL_REMOTE_SERVER_HOSTNAME								= $_SERVER['REMOTE_HOST'];
$_GLOBAL_REMOTE_SERVER_PORT								= $_SERVER['REMOTE_PORT'];
$_GLOBAL_REMOTE_USER									= $_SERVER['REMOTE_USER'];

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

$_GLOBAL_LOCAL_SERVER_GATEWAY_INTERFACE							= $_SERVER['GATEWAY_INTERFACE'];
$_GLOBAL_LOCAL_SERVER_ADDRESS								= $_SERVER['SERVER_ADDR'];
$_GLOBAL_LOCAL_SERVER_NAME								= $_SERVER['SERVER_NAME'];
$_GLOBAL_LOCAL_SERVER_SOFTWARE								= $_SERVER['SERVER_SOFTWARE'];
$_GLOBAL_LOCAL_SERVER_PROTOCOL								= $_SERVER['SERVER_PROTOCOL'];

/*
 ============================================================================================================
 + Local Server Connection Request Protocol Variables
 ============================================================================================================
*/

$_GLOBAL_LOCAL_SERVER_REQUEST_METHOD							= $_SERVER['REQUEST_METHOD'];
$_GLOBAL_LOCAL_SERVER_REQUEST_TIME							= $_SERVER['REQUEST_TIME'];
$_GLOBAL_LOCAL_SERVER_REQUEST_TIME_FLOAT						= $_SERVER['REQUEST_TIME_FLOAT'];
$_GLOBAL_LOCAL_SERVER_QUERY_STRING							= $_SERVER['QUERY_STRING'];
$_GLOBAL_LOCAL_SERVER_DOCUMENT_ROOT							= $_SERVER['DOCUMENT_ROOT'];

/*
 ============================================================================================================
 + Local Server Hyper-Text-Transfer-Protocol Variables
 ============================================================================================================
*/

$_GLOBAL_LOCAL_SERVER_HTTP_ACCEPT							= $_SERVER['HTTP_ACCEPT'];
$_GLOBAL_LOCAL_SERVER_HTTP_ACCEPT_CHARACTER_SET						= $_SERVER['HTTP_ACCEPT_CHARSET'];
$_GLOBAL_LOCAL_SERVER_HTTP_ACCEPT_ENCODING						= $_SERVER['HTTP_ACCEPT_ENCODING'];
$_GLOBAL_LOCAL_SERVER_HTTP_ACCEPT_LOADING						= $_SERVER['HTTP_ACCEPT_LOADING'];
$_GLOBAL_LOCAL_SERVER_HTTP_ACCEPT_LANGUAGE						= $_SERVER['HTTP_ACCEPT_LANGUAGE'];
$_GLOBAL_LOCAL_SERVER_HTTP_CONNECTION_TYPE						= $_SERVER['HTTP_CONNECTION'];
$_GLOBAL_LOCAL_SERVER_HTTP_HOST								= $_SERVER['HTTP_HOST'];
$_GLOBAL_LOCAL_SERVER_HTTP_REFERRER							= $_SERVER['HTTP_REFERER'];
$_GLOBAL_LOCAL_SERVER_HTTP_USER_AGENT							= $_SERVER['HTTP_USER_AGENT'];

/*
 ============================================================================================================
 + Date Hashing Variables
 ============================================================================================================
*/

$_GLOBAL_LOCAL_SERVER_DATE_MD5								= md5($_GLOBAL_LOCAL_SERVER_DATE);
$_GLOBAL_LOCAL_SERVER_DATE_MD5_2							= md5($_GLOBAL_LOCAL_SERVER_DATE);

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

$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX 				= $_POST['Architect_MySQL_Generator_Database_Table_Name_Prefix'];

/*
 ============================================================================================================
 + MySQL Generator :: Variables :: POST Variables :: Credentials :: Administration Credentials
 ============================================================================================================
*/

$_MySQL_Generator_POST_ADMINISTRATOR_USERNAME						= $_POST['Architect_Administrator_UserName'];
$_MySQL_Generator_POST_ADMINISTRATOR_PASSWORD						= $_POST['Architect_Administrator_Password'];

/*
 ============================================================================================================
 + Password Hashing System
 ============================================================================================================
*/

$_MySQL_Generator_POST_ADMINISTRATOR_PASSWORD_HASH					= password_hash($_MySQL_Generator_POST_ADMINISTRATOR_PASSWORD, PASSWORD_BCRYPT);
$_MySQL_Generator_POST_ADMINISTRATOR_PASSWORD_HASH_MD5					= md5($_MySQL_Generator_POST_ADMINISTRATOR_PASSWORD);

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
			<I>Administration Account UserName</I>:<BR>
				<INPUT TYPE=\"TEXT\" NAME=\"Architect_Administrator_UserName\"><BR><BR>
			<I>Administration Account Password</I>:<BR>
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

/* Applications */

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

/* Custom Applications */

CREATE TABLE {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications_custom (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
custom_application_data TEXT,
custom_application_name VARCHAR(250),
custom_application_timestamp_installation VARCHAR(100),
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
panel_file_name VARCHAR(250),
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

/* Banned Networks */

CREATE TABLE {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_banned_networks (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
dns_address_string VARCHAR(128),
dns_address_text TEXT,
ip_address_string VARCHAR(128),
ip_address_text TEXT,
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
forum_date VARCHAR(50),
forum_description TEXT,
forum_title VARCHAR(200),
PRIMARY KEY (id)
);

/* Forum Posts */

CREATE TABLE {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_forum_post (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
post_access_level CHAR(1),
post_author VARCHAR(50),
post_data TEXT,
post_date VARCHAR(50),
post_last_edit VARCHAR(50),
post_topic_id CHAR(20),
PRIMARY KEY (id)
);

/* Forum Topics */

CREATE TABLE {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_forum_topic (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
topic_access_level CHAR(1),
topic_date VARCHAR(50),
topic_description TEXT,
topic_forum_id CHAR(20),
topic_last_post VARCHAR(50),
topic_last_poster CHAR(20),
topic_title VARCHAR(200),
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
member_address_cryptocurrency_tron VARCHAR(200),
member_address_cryptocurrency_zcash VARCHAR(200),
member_address_home TEXT,
member_address_mail TEXT,
member_electronic_mail_address VARCHAR(100),
member_experience_amount TEXT,
member_gender CHAR(1),
member_image_avatar VARCHAR(100),
member_image_picture VARCHAR(100),
member_ip_address_authorized VARCHAR(50),
member_ip_address_authorization_token VARCHAR(512),
member_ip_address_last_login VARCHAR(200),
member_ip_address_log TEXT,
member_last_referrer TEXT,
member_level_rank CHAR(1),
member_location_given VARCHAR(500),
member_location_gps VARCHAR(500),
member_location_glo VARCHAR(500),
member_location_region VARCHAR(200),
member_mood VARCHAR(100),
member_music VARCHAR(100),
member_name_first VARCHAR(100),
member_name_last VARCHAR(100),
member_name_middle VARCHAR(100),
member_name_nickname VARCHAR(100),
member_number_of_posts TEXT,
member_number_phone_area_code VARCHAR(5),
member_number_phone_cell VARCHAR(20),
member_number_phone_country_code VARCHAR(5),
member_number_phone_home VARCHAR(20),
member_number_phone_work VARCHAR(20),
member_password VARCHAR(250),
member_physical_biometrics_blood_type VARCHAR(10),
member_physical_dimensions_circumference_hand_left VARCHAR(10),
member_physical_dimensions_length_hand_left VARCHAR(10),
member_physical_dimensions_circumference_hand_right VARCHAR(10),
member_physical_dimensions_length_hand_right VARCHAR(10),
member_physical_dimensions_cirumference_waist VARCHAR(10),
member_physical_dimensions_circumference_chest VARCHAR(10),
member_physical_dimensions_circumference_arms VARCHAR(10),
member_physical_dimensions_circumference_skull_cap VARCHAR(10),
member_physical_dimensions_width_eye_bridge VARCHAR(10),
member_physical_dimensions_length_arms VARCHAR(10),
member_physical_dimensions_circumference_legs VARCHAR(10),
member_physical_dimensions_length_legs VARCHAR(10),
member_physical_dimensions_circumference_leg_left VARCHAR(10),
member_physical_dimensions_circumference_leg_right VARCHAR(10),
member_physical_dimensions_circumference_foot_left VARCHAR(10),
member_physical_dimensions_circumference_foot_right VARCHAR(10),
member_physical_dimensions_length_foot_right VARCHAR(10),
member_physical_dimensions_length_foot_left VARCHAR(10),
member_physical_color_eye VARCHAR(20),
member_physical_color_hair VARCHAR(20),
member_physical_height VARCHAR(4),
member_physical_weight VARCHAR(4),
member_profile_about TEXT,
member_profile_signature TEXT,
member_registration_date VARCHAR(100),
member_registration_details TEXT,
member_security_fingerprint_cleartext TEXT,
member_security_fingerprint_hashed VARCHAR(512),
member_security_pgp_key_panel_public TEXT,
member_security_pgp_key_panel_private TEXT,
member_settings_encryption_pgp CHAR(1),
member_settings_language VARCHAR(50),
member_settings_control_panel_audio CHAR(1),
member_settings_newsletter CHAR(1),
member_settings_theme_directory VARCHAR(25),
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
rank_gender_male_0 VARCHAR(25),
rank_gender_male_1 VARCHAR(25),
rank_gender_male_2 VARCHAR(25),
rank_gender_male_3 VARCHAR(25),
rank_gender_male_4 VARCHAR(25),
rank_gender_female_0 VARCHAR(25),
rank_gender_female_1 VARCHAR(25),
rank_gender_female_2 VARCHAR(25),
rank_gender_female_3 VARCHAR(25),
rank_gender_female_4 VARCHAR(25),
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
statistics_total_number_of_page_views CHAR(15),
statistics_installation_date VARCHAR(50),
PRIMARY KEY (id)
);

/* System Messages */

CREATE TABLE {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_system_message (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
message_author VARCHAR(50),
message_data TEXT,
message_member VARCHAR(50),
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

/* Application Links and Application Link Settings */

INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_application_links(application_link_name,application_link_row,application_link_url,application_link_timestamp_installation)VALUES('Active Members','001','?Application_Member&#61;Active_Members','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_application_links(application_link_name,application_link_row,application_link_url,application_link_timestamp_installation)VALUES('Applications','002','?Application_Member&#61;Application_List','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_application_links(application_link_name,application_link_row,application_link_url,application_link_timestamp_installation)VALUES('Articles','003','?Application_Member&#61;Articles&amp;DisplayID&#61;All','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_application_links(application_link_name,application_link_row,application_link_url,application_link_timestamp_installation)VALUES('Calculator','004','?Application_Member&#61;Calculator&amp;Display&#61;Options','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_application_links(application_link_name,application_link_row,application_link_url,application_link_timestamp_installation)VALUES('Calendar','005','?Application_Member&#61;Calendar&amp;Display&#61;Options','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_application_links(application_link_name,application_link_row,application_link_url,application_link_timestamp_installation)VALUES('Clock','006','?Application_Member&#61;Clock&amp;Display&#61;Options','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_application_links(application_link_name,application_link_row,application_link_url,application_link_timestamp_installation)VALUES('Contact','007','?Application_Member&#61;Contact_Administrator','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_application_links(application_link_name,application_link_row,application_link_url,application_link_timestamp_installation)VALUES('Documentation','008','?Application_Member&#61;Documentation','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_application_links(application_link_name,application_link_row,application_link_url,application_link_timestamp_installation)VALUES('Download','09','?Application_Member&#61;Download&amp;Display&#61;Torrent','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_application_links(application_link_name,application_link_row,application_link_url,application_link_timestamp_installation)VALUES('Emulators','010','?Application_Member&#61;Emulators&amp;Display&#61;Options','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_application_links(application_link_name,application_link_row,application_link_url,application_link_timestamp_installation)VALUES('Files','011','?Application_Member&#61;Files&amp;CategoryID&#61;All','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_application_links(application_link_name,application_link_row,application_link_url,application_link_timestamp_installation)VALUES('Forum','012','?Application_Member&#61;Forum&amp;ForumID&#61;All','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_application_links(application_link_name,application_link_row,application_link_url,application_link_timestamp_installation)VALUES('Language','013','?Application_Member&#61;Language','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_application_links(application_link_name,application_link_row,application_link_url,application_link_timestamp_installation)VALUES('Lightning Calculate','014','?Application_Member&#61;Lightning_Calculate&amp;Display&#61;Options','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_application_links(application_link_name,application_link_row,application_link_url,application_link_timestamp_installation)VALUES('Legal','015','?Application_Member&#61;Legal','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_application_links(application_link_name,application_link_row,application_link_url,application_link_timestamp_installation)VALUES('Links','016','?Application_Member&#61;Links&amp;DisplayID&#61;All','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_application_links(application_link_name,application_link_row,application_link_url,application_link_timestamp_installation)VALUES('Login','017','?Application_Member&#61;Login','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_application_links(application_link_name,application_link_row,application_link_url,application_link_timestamp_installation)VALUES('Market','018','?Application_Member&#61;Market&amp;Display&#61;Options','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_application_links(application_link_name,application_link_row,application_link_url,application_link_timestamp_installation)VALUES('Media Player','019','?Application_Member&#61;Media_Player','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_application_links(application_link_name,application_link_row,application_link_url,application_link_timestamp_installation)VALUES('Member Directory','020','?Application_Member&#61;Member_Directory','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_application_links(application_link_name,application_link_row,application_link_url,application_link_timestamp_installation)VALUES('Messenger','021','?Application_Member&#61;Messenger&amp;Display&#61;MessengerOptions','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_application_links(application_link_name,application_link_row,application_link_url,application_link_timestamp_installation)VALUES('News','022','?Application_Member&#61;News','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_application_links(application_link_name,application_link_row,application_link_url,application_link_timestamp_installation)VALUES('Recommendations','023','?Application_Member&#61;Recommendations','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_application_links(application_link_name,application_link_row,application_link_url,application_link_timestamp_installation)VALUES('Referrers','024','?Application_Member&#61;Referrers&amp;Display&#61;Box','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_application_links(application_link_name,application_link_row,application_link_url,application_link_timestamp_installation)VALUES('Register','025','?Application_Member&#61;Register','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_application_links(application_link_name,application_link_row,application_link_url,application_link_timestamp_installation)VALUES('RSS Feed','026','./RSS.php?','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_application_links(application_link_name,application_link_row,application_link_url,application_link_timestamp_installation)VALUES('Search','027','?Application_Member&#61;Search','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_application_links(application_link_name,application_link_row,application_link_url,application_link_timestamp_installation)VALUES('Statistics','028','?Application_Member&#61;Statistics','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_application_links(application_link_name,application_link_row,application_link_url,application_link_timestamp_installation)VALUES('Submit Link','029','?Application_Member&#61;Links&amp;SubmitLink&#61;Yes','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_application_links(application_link_name,application_link_row,application_link_url,application_link_timestamp_installation)VALUES('Submit News','030','?Application_Member&#61;Submit_News','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_application_links(application_link_name,application_link_row,application_link_url,application_link_timestamp_installation)VALUES('Upload File','031','?Application_Member&#61;Upload','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_application_links(application_link_name,application_link_row,application_link_url,application_link_timestamp_installation)VALUES('VoIP Phone','032','?Application_Member&#61;VoIP','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_application_links(application_link_name,application_link_row,application_link_url,application_link_timestamp_installation)VALUES('Welcome !','033','?Application_Custom&#61;1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP');

/* Application Modules and Application Module Settings */

INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications(application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_geo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation)VALUES('Account_Recovery','0','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications(application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_geo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation)VALUES('Active_Members','0','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications(application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_geo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation)VALUES('All_News','0','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications(application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_geo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation)VALUES('All_Shouts','0','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications(application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_geo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation)VALUES('Application_List','0','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications(application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_geo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation)VALUES('Articles','0','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications(application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_geo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation)VALUES('Calculator','0','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications(application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_geo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation)VALUES('Calendar','0','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications(application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_geo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation)VALUES('Clock','0','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications(application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_geo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation)VALUES('Comment','1','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications(application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_geo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation)VALUES('Contact_Administrator','1','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications(application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_geo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation)VALUES('Control_Panel','1','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications(application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_geo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation)VALUES('Documentation','0','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications(application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_geo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation)VALUES('Download','1','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications(application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_geo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation)VALUES('Electronic_Mail','1','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications(application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_geo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation)VALUES('Emulators','1','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications(application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_geo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation)VALUES('Files','0','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications(application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_geo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation)VALUES('Forum','1','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications(application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_geo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation)VALUES('Friend','1','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications(application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_geo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation)VALUES('Forward','1','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications(application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_geo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation)VALUES('Language','0','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications(application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_geo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation)VALUES('Legal','0','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications(application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_geo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation)VALUES('Lightning_Calculate','0','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications(application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_geo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation)VALUES('Links','1','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications(application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_geo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation)VALUES('List','1','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications(application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_geo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation)VALUES('Login','0','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications(application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_geo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation)VALUES('Market','0','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications(application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_geo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation)VALUES('Media_Player','1','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications(application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_geo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation)VALUES('Member_Directory','0','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications(application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_geo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation)VALUES('Messenger','1','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications(application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_geo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation)VALUES('News','0','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications(application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_geo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation)VALUES('Private_Files','1','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications(application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_geo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation)VALUES('Private_Message','1','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications(application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_geo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation)VALUES('Profile','0','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications(application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_geo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation)VALUES('Recommendations','0','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications(application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_geo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation)VALUES('Referrers','0','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications(application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_geo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation)VALUES('Register','0','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications(application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_geo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation)VALUES('Reset_Password','0','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications(application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_geo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation)VALUES('Search','0','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications(application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_geo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation)VALUES('Statistics','0','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications(application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_geo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation)VALUES('Submit_News','1','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications(application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_geo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation)VALUES('System_Message','0','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications(application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_geo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation)VALUES('Update_Account','1','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications(application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_geo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation)VALUES('Update_Password','1','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications(application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_geo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation)VALUES('Upload','1','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications(application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_geo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation)VALUES('VoIP','1','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications(application_file_name,application_file_permission,application_file_permission_camera,application_file_permission_microphone,application_file_permission_location_gps,application_file_permission_location_geo,application_file_permission_location_internet_protocol_address,application_file_status,application_file_timestamp_installation)VALUES('Webspace','1','1','1','1','1','1','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP');

/* Application Panels and Application Panel Settings */

INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_application_panels(panel_file_name,panel_alignment,panel_row,panel_file_status,panel_title,panel_timestamp_installation)VALUES('Applications_Panel','0','1','1','<CENTER><B>Applications Panel</B></CENTER><HR>','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_application_panels(panel_file_name,panel_alignment,panel_row,panel_file_status,panel_title,panel_timestamp_installation)VALUES('Banned_Networks','0','4','1','<CENTER><B>Banned Networks</B></CENTER><HR>','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_application_panels(panel_file_name,panel_alignment,panel_row,panel_file_status,panel_title,panel_timestamp_installation)VALUES('Project_Badges','1','1','1','<CENTER><B>Project Badges</B></CENTER><HR>','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_application_panels(panel_file_name,panel_alignment,panel_row,panel_file_status,panel_title,panel_timestamp_installation)VALUES('Language','1','6','1','<CENTER><B>Set Language</B></CENTER><HR>','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_application_panels(panel_file_name,panel_alignment,panel_row,panel_file_status,panel_title,panel_timestamp_installation)VALUES('Latest_Articles','0','3','1','<CENTER><B>Latest Articles</B></CENTER><HR>','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_application_panels(panel_file_name,panel_alignment,panel_row,panel_file_status,panel_title,panel_timestamp_installation)VALUES('Latest_Files','1','3','1','<CENTER><B>Latest Files</B></CENTER><HR>','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_application_panels(panel_file_name,panel_alignment,panel_row,panel_file_status,panel_title,panel_timestamp_installation)VALUES('Latest_Shouts','1','5','1','<CENTER><B>Latest Shout Messages</B></CENTER><HR>','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_application_panels(panel_file_name,panel_alignment,panel_row,panel_file_status,panel_title,panel_timestamp_installation)VALUES('Member_Panel','0','2','1','<CENTER><B>Member Panel</B></CENTER><HR>','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_application_panels(panel_file_name,panel_alignment,panel_row,panel_file_status,panel_title,panel_timestamp_installation)VALUES('Latest_Members','1','4','1','<CENTER><B>Newest Members</B></CENTER><HR>','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_application_panels(panel_file_name,panel_alignment,panel_row,panel_file_status,panel_title,panel_timestamp_installation)VALUES('RSS_Panel','1','4','1','<CENTER><B>Real-Simple-Syndication</B></CENTER><HR>','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP');

/* Ranks */

INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_ranks(rank_gender_male_0,rank_gender_male_1,rank_gender_male_2,rank_gender_male_3,rank_gender_male_4,rank_gender_female_0,rank_gender_female_1,rank_gender_female_2,rank_gender_female_3,rank_gender_female_4)VALUES('Hermes','Apollo','Poseidon','Hades','Zeus','Aphrodite','Demeter','Artemis','Hera','Athena');

/* System Settings */

INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_settings(
settings_system_time_cookies,
settings_system_status_embedded_compression_gzip,
settings_system_status_offline_mode,
settings_system_status_security_module_master_sanitization,
settings_system_file_extension_audio,
settings_system_file_extension_image,
settings_system_directory_language,
settings_system_directory_theme,
settings_system_website_title,
settings_system_upload_size_private_member,
settings_system_upload_size_private_member_streams,
settings_system_upload_size_public_file_categories,
settings_system_upload_size_public_messenger,
settings_system_plugin_directory_location,
settings_system_plugin_directory_smileys,
settings_system_plugin_directory_safeHTML,
settings_system_plugin_directory_text_editor,
settings_system_plugin_status_location,
settings_system_plugin_status_safeHTML,
settings_system_plugin_status_text_editor,
settings_system_security_module_directory_sanitization,
settings_system_security_module_status_sanitization,
)VALUES(
'86400',
'1',
'0',
'1',
'mp3',
'png',
'English',
'2023_Cerberus_White',
'$_PROJECT_STRING_NAME_EXTENDED',
'256000',
'256000',
'256000',
'256000',
'Default',
'Default',
'Default',
'Default',
'1',
'1',
'1',
'Default',
'1'
);

/* System Statistics */

INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_statistics(statistics_total_number_of_page_executions,statistics_total_number_of_unique_page_executions,statistics_installation_date)VALUES('1','1',$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP');

/* Example Forum Entry */

INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_forum_forum(forum_access_level,forum_date,forum_description,forum_title)VALUES('1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','This is an Example Forum Entry','Example Forum #1');

/* Example Forum Topic Entry */

INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_forum_topic(topic_access_level,topic_date,topic_description,topic_forum_id,topic_last_post,topic_last_poster,topic_title)VALUES('1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','This is an Example Topic Entry','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','$_PROJECT_STRING_NAME_SHORT','Example Topic Entry #1 Within Example Forum Entry #1');

/* Example Forum Topic Post */

INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_forum_post(post_access_level,post_author,post_data,post_date,post_last_edit,post_topic_id)VALUES('1','$_PROJECT_STRING_NAME_SHORT','This is an Example Post -- you can Administer the Forum via the Administration Control Panel.','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','1');

/* Example File Category Entry ( For File Upload / Download Application Module ) */

INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_file_categories(file_category_description,file_category_time,file_category_title)VALUES('This is an Example File Category Entry -- You can Delete this File Category Entry from the Administration Control Panel.','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','Example File Category Entry');

/* Example File Entry ( For File Upload / Download Application Module ) */

INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_files(file_author,file_category,file_description,file_image,file_location,file_number_of_downloads,file_time,file_title,file_uploader)VALUES('None','1','This is an Example File Entry -- You can Delete this File Entry from the Administration Control Panel.','./Upload/Default/0987654321-0987654321.png','./Upload/Default/0987654321-0987654321.png','1','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','Example File','$_PROJECT_STRING_NAME_SHORT');

/* Example Article Entry */

INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_articles(article_author,article_data,article_time,article_title)VALUES('$_PROJECT_STRING_NAME_SHORT','This is an Example Article -- You can Delete this from the Administration Control Panel.','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','Example Article');

/* Example News Article Entry */

INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_news(news_author,news_avatar,news_data,news_mood,news_music,news_rss_rfc,news_time,news_title)VALUES('$_PROJECT_STRING_NAME_SHORT','Default.png','This is an Example News Item -- You can Delete this from the Administration Control Panel.','None','None','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP','Example News');

/* Custom Application Entry */

INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_applications_custom(custom_application_data,custom_application_name,custom_application_timestamp_installation)VALUES('Hello and welcome to $_PROJECT_STRING_NAME_EXTENDED ! If you\'re reading this sentence then $_PROJECT_STRING_NAME_EXTENDED was successfully installed to this Web Server !','Welcome !','$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP');
";

$_MySQL_Generator_PRINT_MySQL_ADMINISTRATION_ACCOUNT	= "

/* Administration and Services Root Administration Accounts */

/* Administration ( $_MySQL_Generator_Architect_Administrator_UserName ) Account */

INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_members(
member_access_level,
member_attempt_authentication,
member_birthdate,
member_address_cryptocurrency_bitcoin,
member_address_cryptocurrency_bitcoin_gold,
member_address_cryptocurrency_dogecoin,
member_address_cryptocurrency_ethereum,
member_address_cryptocurrency_litecoin,
member_address_cryptocurrency_mazacoin,
member_address_cryptocurrency_namecoin,
member_address_cryptocurrency_peercoin,
member_address_cryptocurrency_primecoin,
member_address_cryptocurrency_tron,
member_address_cryptocurrency_zcash,
member_address_home,
member_address_mail,
member_electronic_mail_address,
member_experience_amount,
member_gender,
member_image_avatar,
member_image_picture,
member_ip_address_authorized,
member_ip_address_authorization_token,
member_ip_address_last_login,
member_ip_address_log,
member_last_referrer,
member_level_rank,
member_location_given,
member_location_gps,
member_location_glo,
member_location_region,
member_mood,
member_music,
member_name_first,
member_name_last,
member_name_middle,
member_name_nickname,
member_number_of_posts,
member_number_phone_area_code,
member_number_phone_cell,
member_number_phone_country_code,
member_number_phone_home,
member_number_phone_work,
member_password,
member_physical_dimensions_circumference_hand_left,
member_physical_dimensions_length_hand_left,
member_physical_dimensions_circumference_hand_right,
member_physical_dimensions_length_hand_right,
member_physical_dimensions_cirumference_waist,
member_physical_dimensions_circumference_chest,
member_physical_dimensions_circumference_arms,
member_physical_dimensions_circumference_skull_cap,
member_physical_dimensions_width_eye_bridge,
member_physical_dimensions_length_arms,
member_physical_dimensions_circumference_legs,
member_physical_dimensions_length_legs,
member_physical_dimensions_circumference_leg_left,
member_physical_dimensions_circumference_leg_right,
member_physical_dimensions_circumference_foot_left,
member_physical_dimensions_circumference_foot_right,
member_physical_dimensions_length_foot_right,
member_physical_dimensions_length_foot_left,
member_physical_color_eye,
member_physical_color_hair,
member_physical_height,
member_physical_weight,
member_profile_about,
member_profile_signature,
member_registration_date,
member_registration_details,
member_security_fingerprint_cleartext,
member_security_fingerprint_hashed,
member_security_pgp_key_panel_public,
member_security_pgp_key_panel_private,
member_settings_encryption_pgp,
member_settings_language,
member_settings_control_panel_audio,
member_settings_newsletter,
member_settings_theme_directory,
member_socialmedia_audio_spotify,
member_socialmedia_business_linkedin,
member_socialmedia_communications_discord,
member_socialmedia_communications_icq,
member_socialmedia_communications_skype,
member_socialmedia_communications_snapchat,
member_socialmedia_gallery_instagram,
member_socialmedia_posting_facebook,
member_socialmedia_posting_twitter,
member_socialmedia_programming_bitbucket,
member_socialmedia_programming_github,
member_socialmedia_programming_launchpad,
member_socialmedia_security_keybase,
member_socialmedia_video_youtube,
member_status_account_activation,
member_status_account_activation_key,
member_status_account_active,
member_status_account_banned,
member_status_account_last_active_timestamp,
member_status_account_last_active_years,
member_status_account_last_active_months,
member_status_account_last_active_days,
member_status_account_last_active_hours,
member_status_account_last_active_minutes,
member_status_account_last_active_seconds,
member_status_account_locked,
member_url_homepage,
member_username
)VALUES(
'3',
'0',
'00-00-0000',
'Empty Entry :: CryptoCurrency :: BitCoin Address',
'Empty Entry :: CryptoCurrency :: BitCoin Gold Address',
'Empty Entry :: CryptoCurrency :: DodgeCoin Address',
'Empty Entry :: CryptoCurrency :: Ethereum Address',
'Empty Entry :: CryptoCurrency :: LiteCoin Address',
'Empty Entry :: CryptoCurrency :: MazaCoin Address',
'Empty Entry :: CryptoCurrency :: NameCoin Address',
'Empty Entry :: CryptoCurrency :: PeerCoin Address',
'Empty Entry :: CryptoCurrency :: PrimeCoin Address',
'Empty Entry :: CryptoCurrency :: TronCoin Address',
'Empty Entry :: CryptoCurrency :: ZCash Address',
'Empty Entry :: Physical Home Address',
'Empty Entry :: Physical Mailing Address',
'$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_ELECTRONIC_MAIL_ADDRESS',
'10000',
'1',
'Default.png',
'No_Image.png',
'000.000.000.000',
'0',
'$_GLOBAL_REMOTE_SERVER_ADDRESS',
'$_GLOBAL_REMOTE_SERVER_ADDRESS',
'$_GLOBAL_LOCAL_SERVER_HTTP_REFERRER',
'5',
'Unknown',
'Unknown',
'Unknown',
'Unknown',
'On Guard',
'Nine Inch Nails - Deep',
'Empty Entry :: First Name',
'Empty Entry :: Last Name',
'Empty Entry :: Middle Name',
'Emtpy Entry :: Nick Name',
'10000',
'111',
'111-1111',
'1',
'111-1111',
'111-1111',
'$_ARCHITECT_ADMINISTRATOR_ACCOUNT_PASSWORD_HASHED',
'0',
'0',
'0',
'0',
'0',
'0',
'0',
'0',
'0',
'0',
'0',
'0',
'0',
'0',
'0',
'0',
'0',
'0',
'Account Profile :: Personal Details :: Color :: Eyes',
'Account Profile :: Personal Details :: Color :: Hair',
'Account Profile :: Personal Details :: Height',
'Account Profile :: Personal Details :: Weight',
'Account Profile :: Installation Administration Account',
'Account Signature :: Installation Administration Account',
'$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP',
'This Registered Member Account Was Registered From The Internet Protocol Address :: $_GLOBAL_REMOTE_SERVER_ADDRESS On: $_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP',
'00:00:00',
'00:00:00',
'Empty Entry :: P.G.P. :: Key Block :: Public',
'Empty Entry :: P.G.P. :: Key Block :: Private',
'1',
'English',
'0',
'1',
'2022_TinkeSoftware_Grey',
'Empty Entry :: Social Media :: Audio :: Spotify',
'Empty Entry :: Social Media :: Business :: LinkedIn',
'Empty Entry :: Social Media :: Communications :: Discord',
'Empty Entry :: Social Media :: Communications :: ICQ',
'Empty Entry :: Social Media :: Communications :: Skype',
'Empty Entry :: Social Media :: Communications :: SnapChat',
'Empty Entry :: Social Media :: Gallery :: InstaGram',
'Empty Entry :: Social Media :: Posting :: FaceBook',
'Empty Entry :: Social Media :: Posting :: Twitter',
'Empty Entry :: Social Media :: Programming :: BITBucket',
'Empty Entry :: Social Media :: Programming :: GITHub',
'Empty Entry :: Social Media :: Programming :: LaunchPad',
'Empty Entry :: Social Media :: Security :: KeyBase',
'Empty Entry :: Social Media :: Video :: YouTube',
'1',
'$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP_HASH_MD5',
'1',
'0',
'$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP',
'$_GLOBAL_LOCAL_SERVER_DATE_YEAR',
'$_GLOBAL_LOCAL_SERVER_DATE_MONTH',
'$_GLOBAL_LOCAL_SERVER_DATE_MONTH_DAY',
'$_GLOBAL_LOCAL_SERVER_TIME_HOURS',
'$_GLOBAL_LOCAL_SERVER_DATE_MINUTES',
'$_GLOBAL_LOCAL_SERVER_DATE_SECONDS',
'0',
'https://www.Twitter.com/$_PROJECT_STRING_NAME_UNIX',
'$_ARCHITECT_POST_ADMINISTRATOR_ACCOUNT_USERNAME');

/* Services Root Administrator ( Cerberus ) Account */

INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_TABLE_NAME_PREFIX}_members(
member_access_level,
member_attempt_authentication,
member_birthdate,
member_address_cryptocurrency_bitcoin,
member_address_cryptocurrency_bitcoin_gold,
member_address_cryptocurrency_dogecoin,
member_address_cryptocurrency_ethereum,
member_address_cryptocurrency_litecoin,
member_address_cryptocurrency_mazacoin,
member_address_cryptocurrency_namecoin,
member_address_cryptocurrency_peercoin,
member_address_cryptocurrency_primecoin,
member_address_cryptocurrency_tron,
member_address_cryptocurrency_zcash,
member_address_home,
member_address_mail,
member_electronic_mail_address,
member_experience_amount,
member_gender,
member_image_avatar,
member_image_picture,
member_ip_address_authorized,
member_ip_address_authorization_token,
member_ip_address_last_login,
member_ip_address_log,
member_last_referrer,
member_level_rank,
member_location_given,
member_location_gps,
member_location_glo,
member_location_region,
member_mood,
member_music,
member_name_first,
member_name_last,
member_name_middle,
member_name_nickname,
member_number_of_posts,
member_number_phone_area_code,
member_number_phone_cell,
member_number_phone_country_code,
member_number_phone_home,
member_number_phone_work,
member_password,
member_physical_dimensions_circumference_hand_left,
member_physical_dimensions_length_hand_left,
member_physical_dimensions_circumference_hand_right,
member_physical_dimensions_length_hand_right,
member_physical_dimensions_cirumference_waist,
member_physical_dimensions_circumference_chest,
member_physical_dimensions_circumference_arms,
member_physical_dimensions_circumference_skull_cap,
member_physical_dimensions_width_eye_bridge,
member_physical_dimensions_length_arms,
member_physical_dimensions_circumference_legs,
member_physical_dimensions_length_legs,
member_physical_dimensions_circumference_leg_left,
member_physical_dimensions_circumference_leg_right,
member_physical_dimensions_circumference_foot_left,
member_physical_dimensions_circumference_foot_right,
member_physical_dimensions_length_foot_right,
member_physical_dimensions_length_foot_left,
member_physical_color_eye,
member_physical_color_hair,
member_physical_height,
member_physical_weight,
member_profile_about,
member_profile_signature,
member_registration_date,
member_registration_details,
member_security_fingerprint_cleartext,
member_security_fingerprint_hashed,
member_security_pgp_key_panel_public,
member_security_pgp_key_panel_private,
member_settings_encryption_pgp,
member_settings_language,
member_settings_control_panel_audio,
member_settings_newsletter,
member_settings_theme_directory,
member_socialmedia_audio_spotify,
member_socialmedia_business_linkedin,
member_socialmedia_communications_discord,
member_socialmedia_communications_icq,
member_socialmedia_communications_skype,
member_socialmedia_communications_snapchat,
member_socialmedia_gallery_instagram,
member_socialmedia_posting_facebook,
member_socialmedia_posting_twitter,
member_socialmedia_programming_bitbucket,
member_socialmedia_programming_github,
member_socialmedia_programming_launchpad,
member_socialmedia_security_keybase,
member_socialmedia_video_youtube,
member_status_account_activation,
member_status_account_activation_key,
member_status_account_active,
member_status_account_banned,
member_status_account_last_active_timestamp,
member_status_account_last_active_years,
member_status_account_last_active_months,
member_status_account_last_active_days,
member_status_account_last_active_hours,
member_status_account_last_active_minutes,
member_status_account_last_active_seconds,
member_status_account_locked,
member_url_homepage,
member_username
)VALUES(
'3',
'0',
'00-00-0000',
'Empty Entry :: CryptoCurrency :: BitCoin Address',
'Empty Entry :: CryptoCurrency :: BitCoin Gold Address',
'Empty Entry :: CryptoCurrency :: DodgeCoin Address',
'Empty Entry :: CryptoCurrency :: Ethereum Address',
'Empty Entry :: CryptoCurrency :: LiteCoin Address',
'Empty Entry :: CryptoCurrency :: MazaCoin Address',
'Empty Entry :: CryptoCurrency :: NameCoin Address',
'Empty Entry :: CryptoCurrency :: PeerCoin Address',
'Empty Entry :: CryptoCurrency :: PrimeCoin Address',
'Empty Entry :: CryptoCurrency :: TronCoin Address',
'Empty Entry :: CryptoCurrency :: ZCash Address',
'Empty Entry :: Physical Home Address',
'Empty Entry :: Physical Mailing Address',
'Cerberus@Localhost',
'10000',
'1',
'Default.png',
'No_Image.png',
'000.000.000.000',
'0',
'$_GLOBAL_REMOTE_SERVER_ADDRESS',
'$_GLOBAL_REMOTE_SERVER_ADDRESS',
'$_GLOBAL_LOCAL_SERVER_HTTP_REFERRER',
'5',
'Unknown',
'Unknown',
'Unknown',
'Unknown',
'On Guard',
'Nine Inch Nails - Deep',
'Empty Entry :: First Name',
'Empty Entry :: Last Name',
'Empty Entry :: Middle Name',
'Emtpy Entry :: Nick Name',
'10000',
'111',
'111-1111',
'1',
'111-1111',
'111-1111',
'$_ARCHITECT_ADMINISTRATOR_ACCOUNT_PASSWORD_HASHED',
'0',
'0',
'0',
'0',
'0',
'0',
'0',
'0',
'0',
'0',
'0',
'0',
'0',
'0',
'0',
'0',
'0',
'0',
'Account Profile :: Personal Details :: Color :: Eyes',
'Account Profile :: Personal Details :: Color :: Hair',
'Account Profile :: Personal Details :: Height',
'Account Profile :: Personal Details :: Weight',
'Hi, my name is Cerberus !',
'I Guard the entrance to Hades !',
'$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP',
'This Registered Member Account Was Registered From The Internet Protocol Address :: $_GLOBAL_REMOTE_SERVER_ADDRESS On: $_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP',
'00:00:00',
'00:00:00',
'Empty Entry :: P.G.P. :: Key Block :: Public',
'Empty Entry :: P.G.P. :: Key Block :: Private',
'1',
'English',
'0',
'1',
'2022_TinkeSoftware_Grey',
'Empty Entry :: Social Media :: Audio :: Spotify',
'Empty Entry :: Social Media :: Business :: LinkedIn',
'Empty Entry :: Social Media :: Communications :: Discord',
'Empty Entry :: Social Media :: Communications :: ICQ',
'Empty Entry :: Social Media :: Communications :: Skype',
'Empty Entry :: Social Media :: Communications :: SnapChat',
'Empty Entry :: Social Media :: Gallery :: InstaGram',
'Empty Entry :: Social Media :: Posting :: FaceBook',
'Empty Entry :: Social Media :: Posting :: Twitter',
'Empty Entry :: Social Media :: Programming :: BITBucket',
'Empty Entry :: Social Media :: Programming :: GITHub',
'Empty Entry :: Social Media :: Programming :: LaunchPad',
'Empty Entry :: Social Media :: Security :: KeyBase',
'Empty Entry :: Social Media :: Video :: YouTube',
'1',
'$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP_HASH_MD5',
'1',
'0',
'$_GLOBAL_LOCAL_SERVER_DATE_TIMESTAMP',
'$_GLOBAL_LOCAL_SERVER_DATE_YEAR',
'$_GLOBAL_LOCAL_SERVER_DATE_MONTH',
'$_GLOBAL_LOCAL_SERVER_DATE_MONTH_DAY',
'$_GLOBAL_LOCAL_SERVER_TIME_HOURS',
'$_GLOBAL_LOCAL_SERVER_DATE_MINUTES',
'$_GLOBAL_LOCAL_SERVER_DATE_SECONDS',
'0',
'https://www.Twitter.com/$_PROJECT_STRING_NAME_UNIX',
'$_PROJECT_STRING_NAME_SHORT');
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

} // [ + ] IF: Install Default Administration Account Database Data Variables Have Executed

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