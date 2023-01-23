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
 + - File Location: root->Cerberus->Architect->MySQL->MySQL_Generator.php
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
 +
 + [ @ ] Cerberus Content Management System :: Architect Installation :: MyS.Q.L. Structure Generator
 +
 +
 +
 ================================================================
*/

/*
 ================================================================
 +
 +
 + [ @ ] Error Handling Systems
 +
 +
 ================================================================
*/

error_reporting("E_WARNING ^ E_NOTICE");

/*
 ================================================================
 +
 +
 + [ @ ] Global Variables
 +
 +
 ================================================================
*/


/*
 ================================================================
 +
 + Local Server Variables
 +
 ================================================================
*/

/*
 ================================================================
 + Local Server Date, Time and Referrer
 ================================================================
*/

$_GLOBAL_LOCAL_SERVER_DATE								= date("l, F j, Y g:i:s A");
$_GLOBAL_LOCAL_SERVER_DATE_WITH_SEPARATION						= date("l:F:j:Y:h:i:s:A");
$_GLOBAL_LOCAL_SERVER_DATE_RFC								= date("r");
$_GLOBAL_LOCAL_SERVER_DATE_MINUTES							= date("i");
$_GLOBAL_LOCAL_SERVER_DATE_SECONDS							= date("s");
$_GLOBAL_LOCAL_SERVER_HTTP_REFERRER							= $_SERVER['HTTP_REFERER'];

/*
 ================================================================
 +
 + Remote Server Variables
 +
 ================================================================
*/

/*
 ================================================================
 + Remote Server Connection
 ================================================================
*/

$_GLOBAL_REMOTE_SERVER_ADDRESS								= $_SERVER['REMOTE_ADDR'];
$_GLOBAL_REMOTE_SERVER_HOSTNAME								= $_SERVER['REMOTE_HOST'];
$_GLOBAL_REMOTE_SERVER_PORT								= $_SERVER['REMOTE_PORT'];
$_GLOBAL_REMOTE_USER									= $_SERVER['REMOTE_USER'];

/*
 ================================================================
 +
 + Local Server Protocol Variables
 +
 ================================================================
*/

/*
 ================================================================
 + Local Server Connection Information Protocol Variables
 ================================================================
*/

$_GLOBAL_LOCAL_SERVER_GATEWAY_INTERFACE							= $_SERVER['GATEWAY_INTERFACE'];
$_GLOBAL_LOCAL_SERVER_ADDRESS								= $_SERVER['SERVER_ADDR'];
$_GLOBAL_LOCAL_SERVER_NAME								= $_SERVER['SERVER_NAME'];
$_GLOBAL_LOCAL_SERVER_SOFTWARE								= $_SERVER['SERVER_SOFTWARE'];
$_GLOBAL_LOCAL_SERVER_PROTOCOL								= $_SERVER['SERVER_PROTOCOL'];

/*
 ================================================================
 + Local Server Connection Request Protocol Variables
 ================================================================
*/

$_GLOBAL_LOCAL_SERVER_REQUEST_METHOD							= $_SERVER['REQUEST_METHOD'];
$_GLOBAL_LOCAL_SERVER_REQUEST_TIME							= $_SERVER['REQUEST_TIME'];
$_GLOBAL_LOCAL_SERVER_REQUEST_TIME_FLOAT						= $_SERVER['REQUEST_TIME_FLOAT'];
$_GLOBAL_LOCAL_SERVER_QUERY_STRING							= $_SERVER['QUERY_STRING'];
$_GLOBAL_LOCAL_SERVER_DOCUMENT_ROOT							= $_SERVER['DOCUMENT_ROOT'];

/*
 ================================================================
 + Local Server Hyper-Text-Transfer-Protocol Variables
 ================================================================
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
 ================================================================
 + Date Hashing Variables
 ================================================================
*/

$_GLOBAL_LOCAL_SERVER_DATE_MD5								= md5($_GLOBAL_LOCAL_SERVER_DATE);
$_GLOBAL_LOCAL_SERVER_DATE_MD5_2							= md5($_GLOBAL_LOCAL_SERVER_DATE);

/*
 ================================================================
 +
 +
 + [ @ ] Hyper-Text-Markup-Language Document :: Output :: Start
 +
 +
 ================================================================
*/

echo ("
<HTML>
	<HEAD>
		<TITLE>Cerberus S.Q.L. Tables Generator</TITLE>
		<LINK REL=\"stylesheet\" HREF=\"../../Theme/Global/Style_Sheet/Style.css\" TYPE=\"text/css\">
		<META HTTP-EQUIV=\"Content-Type\" CONTENT=\"text/html;charset=utf-8\">
	</HEAD>

	<BODY>
		<HR><CENTER>[ <A HREF=\"?\" TITLE=\":: Reload The MyS.Q.L. Database Structure Generation Form ::\">Cerberus Content Management System MyS.Q.L. Database Structure Generator</A> ]</CENTER><HR><BR>
");

/*
 ================================================================
 +
 +
 + Post Variables
 +
 +
 ================================================================
*/

$_MySQL_Generator_POST_ACCESS_DATABASE_PREFIX 						= $_POST['post_database_prefix'];
$_MySQL_Generator_POST_ADMINISTRATION_USERNAME						= $_POST['post_administration_username'];
$_MySQL_Generator_POST_ADMINISTRATION_PASSWORD						= $_POST['post_administration_password'];

/*
 ================================================================
 +
 +
 + Password Hashing System
 +
 +
 ================================================================
*/

$_MySQL_Generator_POST_ADMINISTRATION_PASSWORD_HASH					= password_hash($_MySQL_Generator_POST_ADMINISTRATION_PASSWORD, PASSWORD_BCRYPT);
$_MySQL_Generator_ADMINISTRATION_PASSWORD_HASH_MD5					= md5($_MySQL_Generator_POST_ADMINISTRATION_PASSWORD);

/*
 ================================================================
 +
 +
 + S.Q.L. Tables Generation Form
 +
 +
 ================================================================
*/

echo ("
		S.Q.L. Tables Generation Form<BR><BR>
		<FORM ACTION=\"?\" METHOD=\"POST\">
			<I>Name This Database Prefix</I>:<BR>
			[ **DO NOT** Place Any Underscores Or Symbols ]<BR>
				<INPUT TYPE=\"TEXT\" NAME=\"post_database_prefix\" VALUE=\"Cerberus\"><BR><BR>
			<I>Administration Account UserName</I>:<BR>
				<INPUT TYPE=\"TEXT\" NAME=\"post_administration_username\"><BR><BR>
			<I>Administration Account Password</I>:<BR>
			[ It Is Recommended To Use a Password Generation and Password Storage Application Such As KeePass ]<BR>
			[ When Using a Password Generator: Set Options To 50 Random Characters ]<BR>
				<INPUT TYPE=\"PASSWORD\" NAME=\"post_administration_password\"><BR>
			<INPUT TYPE=\"SUBMIT\" VALUE=\"Generate S.Q.L. Database Structure\"><BR>
		</FORM>
");

if ($_MySQL_Generator_POST_ADMINISTRATION_USERNAME) {

/*
 ================================================================
 +
 +
 + MySQL Tables Generator
 +
 +
 ================================================================
*/

$_MySQL_Generator_PRINT_MySQL_TABLES	= "

/* $_MySQL_Generator_POST_ACCESS_DATABASE_PREFIX */

/* Applications */

CREATE TABLE {$_MySQL_Generator_POST_ACCESS_DATABASE_PREFIX}_applications (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
application_file_name VARCHAR(100),
application_file_permission CHAR(1),
application_file_status CHAR(1),
PRIMARY KEY (id)
);

/* Custom Applications */

CREATE TABLE {$_MySQL_Generator_POST_ACCESS_DATABASE_PREFIX}_applications_custom (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
custom_application_data TEXT,
custom_application_name VARCHAR(250),
custom_application_time VARCHAR(50),
PRIMARY KEY (id)
);

/* Application Links */

CREATE TABLE {$_MySQL_Generator_POST_ACCESS_DATABASE_PREFIX}_application_links (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
application_link_name VARCHAR(250),
application_link_row CHAR(3),
application_link_url VARCHAR(250),
PRIMARY KEY (id)
);

/* Application Panels */

CREATE TABLE {$_MySQL_Generator_POST_ACCESS_DATABASE_PREFIX}_application_panels (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
panel_file_name VARCHAR(250),
panel_alignment CHAR(1),
panel_row CHAR(2),
panel_file_status CHAR(1),
panel_title VARCHAR(250),
PRIMARY KEY (id)
);

/* Articles */

CREATE TABLE {$_MySQL_Generator_POST_ACCESS_DATABASE_PREFIX}_articles (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
article_author VARCHAR(50),
article_data TEXT,
article_time VARCHAR(50),
article_title VARCHAR(50),
PRIMARY KEY (id)
);

/* Banned Networks */

CREATE TABLE {$_MySQL_Generator_POST_ACCESS_DATABASE_PREFIX}_banned_networks (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
dns_address_string VARCHAR(128),
dns_address_text TEXT,
ip_address_string VARCHAR(128),
ip_address_text TEXT,
PRIMARY KEY (id)
);

/* Comments */

CREATE TABLE {$_MySQL_Generator_POST_ACCESS_DATABASE_PREFIX}_comments (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
comment_author VARCHAR(50),
comment_data TEXT,
comment_application_id CHAR(20),
comment_application_name VARCHAR(100),
comment_time VARCHAR(50),
PRIMARY KEY (id)
);

/* File Categories */

CREATE TABLE {$_MySQL_Generator_POST_ACCESS_DATABASE_PREFIX}_file_categories (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
file_category_description VARCHAR(250),
file_category_time VARCHAR(50),
file_category_title VARCHAR(50),
PRIMARY KEY (id)
);

/* Files */

CREATE TABLE {$_MySQL_Generator_POST_ACCESS_DATABASE_PREFIX}_files (
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

CREATE TABLE {$_MySQL_Generator_POST_ACCESS_DATABASE_PREFIX}_forum_forum (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
forum_access_level CHAR(1),
forum_date VARCHAR(50),
forum_description TEXT,
forum_title VARCHAR(200),
PRIMARY KEY (id)
);

/* Forum Posts */

CREATE TABLE {$_MySQL_Generator_POST_ACCESS_DATABASE_PREFIX}_forum_post (
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

CREATE TABLE {$_MySQL_Generator_POST_ACCESS_DATABASE_PREFIX}_forum_topic (
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

CREATE TABLE {$_MySQL_Generator_POST_ACCESS_DATABASE_PREFIX}_links (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
link_author VARCHAR(50),
link_description TEXT,
link_time VARCHAR(50),
link_title VARCHAR(50),
link_url VARCHAR(250),
PRIMARY KEY (id)
);

/* Members */

CREATE TABLE {$_MySQL_Generator_POST_ACCESS_DATABASE_PREFIX}_members (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
member_access_level CHAR(1),
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
member_ip_address_authorized VARCHAR(100),
member_ip_address_last_login VARCHAR(100),
member_ip_address_log TEXT,
member_last_referrer TEXT,
member_location_current VARCHAR(500),
member_mood VARCHAR(100),
member_music VARCHAR(100),
member_name_first VARCHAR(100),
member_name_last VARCHAR(100),
member_name_middle VARCHAR(100),
member_name_nickname VARCHAR(100),
member_number_of_posts TEXT,
member_password VARCHAR(250),
member_profile_about TEXT,
member_profile_signature TEXT,
member_level_rank CHAR(1),
member_registration_date VARCHAR(100),
member_registration_details TEXT,
member_security_fingerprint_cleartext TEXT,
member_security_fingerprint_hashed TEXT,
member_security_pgp_key_panel_public TEXT,
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
member_status_account_last_active VARCHAR(250),
member_url_homepage VARCHAR(250),
member_username VARCHAR(50),
PRIMARY KEY (id)
);

/* Messenger Plain-Text-File Room */

CREATE TABLE {$_MySQL_Generator_POST_ACCESS_DATABASE_PREFIX}_messenger_plain_text_file_room (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
messenger_room_creation_author VARCHAR(100),
messenger_room_creation_author_device_ip_address VARCHAR(100),
messenger_room_creation_author_system_access_level VARCHAR(100),
messenger_room_creation_date VARCHAR(100),
messenger_room_name VARCHAR(100),
messenger_room_password_entry VARCHAR(100),
messenger_room_password_deletion VARCHAR(100),
messenger_room_status_visibility CHAR(1),
PRIMARY KEY (id)
);

/* Messenger Plain-Text S.Q.L. Messages */

CREATE TABLE {$_MySQL_Generator_POST_ACCESS_DATABASE_PREFIX}_messenger_plain_text_messages (
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

/* Messenger Encrypted-Text-File Room */

CREATE TABLE {$_MySQL_Generator_POST_ACCESS_DATABASE_PREFIX}_messenger_encrypted_text_file_room (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
messenger_room_creation_author VARCHAR(100),
messenger_room_creation_author_device_ip_address VARCHAR(100),
messenger_room_creation_author_system_access_level VARCHAR(100),
messenger_room_creation_date VARCHAR(100),
messenger_room_name VARCHAR(100),
messenger_room_password_entry VARCHAR(100),
messenger_room_password_deletion VARCHAR(100),
messenger_room_status_visibility CHAR(1),
PRIMARY KEY (id)
);

/* Messenger Encrypted-Text S.Q.L. Messages */

CREATE TABLE {$_MySQL_Generator_POST_ACCESS_DATABASE_PREFIX}_messenger_encrypted_text_messages (
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

CREATE TABLE {$_MySQL_Generator_POST_ACCESS_DATABASE_PREFIX}_news (
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

CREATE TABLE {$_MySQL_Generator_POST_ACCESS_DATABASE_PREFIX}_news_submissions (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
news_submission_author VARCHAR(50),
news_submission_data TEXT,
news_submission_time VARCHAR(50),
PRIMARY KEY (id)
);

/* Private Messages */

CREATE TABLE {$_MySQL_Generator_POST_ACCESS_DATABASE_PREFIX}_private_messages (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
private_message_from VARCHAR(50),
private_message_recipient VARCHAR(50),
private_message_subject VARCHAR(250),
private_message_data TEXT,
private_message_sent_time VARCHAR(50),
PRIMARY KEY (id)
);

/* Ranks */

CREATE TABLE {$_MySQL_Generator_POST_ACCESS_DATABASE_PREFIX}_ranks (
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

CREATE TABLE {$_MySQL_Generator_POST_ACCESS_DATABASE_PREFIX}_settings (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
settings_safeHTML_directory VARCHAR(50),
settings_safeHTML_status CHAR(1),
settings_cookie_time VARCHAR(10),
settings_gzip_status CHAR(1),
settings_image_extension CHAR(3),
settings_language_directory VARCHAR(50),
settings_offline_status CHAR(1),
settings_site_title VARCHAR(250),
settings_smileys_directory VARCHAR(50),
settings_sound_extension VARCHAR(4),
settings_theme_directory VARCHAR(50),
settings_upload_size_private CHAR(15),
settings_upload_size_public CHAR(15),
settings_text_editor_directory VARCHAR(250),
PRIMARY KEY (id)
);

/* Shout Messages */

CREATE TABLE {$_MySQL_Generator_POST_ACCESS_DATABASE_PREFIX}_shout_messages (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
message_author VARCHAR(50),
message_data VARCHAR(250),
message_time VARCHAR(50),
PRIMARY KEY (id)
);

/* Statistics */

CREATE TABLE {$_MySQL_Generator_POST_ACCESS_DATABASE_PREFIX}_statistics (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
statistics_total_number_of_page_views CHAR(15),
statistics_installation_date VARCHAR(50),
PRIMARY KEY (id)
);

/* System Messages */

CREATE TABLE {$_MySQL_Generator_POST_ACCESS_DATABASE_PREFIX}_system_message (
id MEDIUMINT NOT NULL AUTO_INCREMENT,
message_author VARCHAR(50),
message_data TEXT,
message_member VARCHAR(50),
PRIMARY KEY (id)
);
";

/*
 ================================================================
 +
 +
 + Data Strings From Installation File
 +
 +
 ================================================================
*/

$_MySQL_Generator_PRINT_MySQL_TABLE_STRINGS	= "

/* Application Links and Application Link Settings */

INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_PREFIX}_application_links(application_link_name,application_link_row,application_link_url)VALUES('Active Members','001','?Application_Member&#61;Active_Members');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_PREFIX}_application_links(application_link_name,application_link_row,application_link_url)VALUES('Applications','002','?Application_Member&#61;Application_List');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_PREFIX}_application_links(application_link_name,application_link_row,application_link_url)VALUES('Articles','003','?Application_Member&#61;Articles&amp;DisplayID&#61;All');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_PREFIX}_application_links(application_link_name,application_link_row,application_link_url)VALUES('Audio Player','004','?Application_Member&#61;Audio_Player');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_PREFIX}_application_links(application_link_name,application_link_row,application_link_url)VALUES('Contact','005','?Application_Member&#61;Contact_Administrator');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_PREFIX}_application_links(application_link_name,application_link_row,application_link_url)VALUES('Documentation','006','?Application_Member&#61;Documentation');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_PREFIX}_application_links(application_link_name,application_link_row,application_link_url)VALUES('Files','007','?Application_Member&#61;Files&amp;CategoryID&#61;All');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_PREFIX}_application_links(application_link_name,application_link_row,application_link_url)VALUES('Forum','008','?Application_Member&#61;Forum&amp;ForumID&#61;All');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_PREFIX}_application_links(application_link_name,application_link_row,application_link_url)VALUES('Language','009','?Application_Member&#61;Language');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_PREFIX}_application_links(application_link_name,application_link_row,application_link_url)VALUES('Legal','010','?Application_Member&#61;Legal');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_PREFIX}_application_links(application_link_name,application_link_row,application_link_url)VALUES('Links','011','?Application_Member&#61;Links&amp;DisplayID&#61;All');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_PREFIX}_application_links(application_link_name,application_link_row,application_link_url)VALUES('Login','012','?Application_Member&#61;Login');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_PREFIX}_application_links(application_link_name,application_link_row,application_link_url)VALUES('Member Directory','013','?Application_Member&#61;Member_Directory');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_PREFIX}_application_links(application_link_name,application_link_row,application_link_url)VALUES('Messenger','014','?Application_Member&#61;Messenger&amp;Display&#61;MessengerOptions');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_PREFIX}_application_links(application_link_name,application_link_row,application_link_url)VALUES('News','015','?Application_Member&#61;News');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_PREFIX}_application_links(application_link_name,application_link_row,application_link_url)VALUES('Referrers','016','?Application_Member&#61;Referrers&amp;Display&#61;Box');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_PREFIX}_application_links(application_link_name,application_link_row,application_link_url)VALUES('RSS Feed','017','RSS.php');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_PREFIX}_application_links(application_link_name,application_link_row,application_link_url)VALUES('Register','018','?Application_Member&#61;Register');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_PREFIX}_application_links(application_link_name,application_link_row,application_link_url)VALUES('Search','019','?Application_Member&#61;Search');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_PREFIX}_application_links(application_link_name,application_link_row,application_link_url)VALUES('Statistics','020','?Application_Member&#61;Statistics');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_PREFIX}_application_links(application_link_name,application_link_row,application_link_url)VALUES('Submit Link','021','?Application_Member&#61;Links&amp;SubmitLink&#61;Yes');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_PREFIX}_application_links(application_link_name,application_link_row,application_link_url)VALUES('Submit News','022','?Application_Member&#61;Submit_News');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_PREFIX}_application_links(application_link_name,application_link_row,application_link_url)VALUES('Upload File','023','?Application_Member&#61;Upload');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_PREFIX}_application_links(application_link_name,application_link_row,application_link_url)VALUES('Video Player','024','?Application_Member&#61;Video_Player');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_PREFIX}_application_links(application_link_name,application_link_row,application_link_url)VALUES('Welcome!','025','?Application_Custom&#61;1');

/* Application Modules and Application Module Settings */

INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_PREFIX}_applications(application_file_name,application_file_permission,application_file_status)VALUES('Active_Members','1','1');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_PREFIX}_applications(application_file_name,application_file_permission,application_file_status)VALUES('All_News','0','1');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_PREFIX}_applications(application_file_name,application_file_permission,application_file_status)VALUES('All_Shouts','0','1');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_PREFIX}_applications(application_file_name,application_file_permission,application_file_status)VALUES('Application_List','0','1');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_PREFIX}_applications(application_file_name,application_file_permission,application_file_status)VALUES('Articles','0','1');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_PREFIX}_applications(application_file_name,application_file_permission,application_file_status)VALUES('Audio_Player','1','1');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_PREFIX}_applications(application_file_name,application_file_permission,application_file_status)VALUES('Update_Password','1','1');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_PREFIX}_applications(application_file_name,application_file_permission,application_file_status)VALUES('Comment','1','1');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_PREFIX}_applications(application_file_name,application_file_permission,application_file_status)VALUES('Contact_Administrator','1','1');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_PREFIX}_applications(application_file_name,application_file_permission,application_file_status)VALUES('Control_Panel','1','1');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_PREFIX}_applications(application_file_name,application_file_permission,application_file_status)VALUES('Documentation','0','1');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_PREFIX}_applications(application_file_name,application_file_permission,application_file_status)VALUES('Update_Account','1','1');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_PREFIX}_applications(application_file_name,application_file_permission,application_file_status)VALUES('Electronic_Mail','1','1');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_PREFIX}_applications(application_file_name,application_file_permission,application_file_status)VALUES('Files','0','1');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_PREFIX}_applications(application_file_name,application_file_permission,application_file_status)VALUES('Forum','1','1');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_PREFIX}_applications(application_file_name,application_file_permission,application_file_status)VALUES('Friend','1','1');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_PREFIX}_applications(application_file_name,application_file_permission,application_file_status)VALUES('Forward_Friend','1','1');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_PREFIX}_applications(application_file_name,application_file_permission,application_file_status)VALUES('Language','0','1');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_PREFIX}_applications(application_file_name,application_file_permission,application_file_status)VALUES('Legal','0','1');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_PREFIX}_applications(application_file_name,application_file_permission,application_file_status)VALUES('Links','1','1');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_PREFIX}_applications(application_file_name,application_file_permission,application_file_status)VALUES('List','1','1');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_PREFIX}_applications(application_file_name,application_file_permission,application_file_status)VALUES('Login','0','1');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_PREFIX}_applications(application_file_name,application_file_permission,application_file_status)VALUES('Member_Directory','0','1');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_PREFIX}_applications(application_file_name,application_file_permission,application_file_status)VALUES('Messenger','1','1');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_PREFIX}_applications(application_file_name,application_file_permission,application_file_status)VALUES('News','0','1');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_PREFIX}_applications(application_file_name,application_file_permission,application_file_status)VALUES('Private_Files','1','1');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_PREFIX}_applications(application_file_name,application_file_permission,application_file_status)VALUES('Private_Message','1','1');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_PREFIX}_applications(application_file_name,application_file_permission,application_file_status)VALUES('Profile','0','1');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_PREFIX}_applications(application_file_name,application_file_permission,application_file_status)VALUES('Referrers','0','1');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_PREFIX}_applications(application_file_name,application_file_permission,application_file_status)VALUES('Register','0','1');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_PREFIX}_applications(application_file_name,application_file_permission,application_file_status)VALUES('Reset_Password','0','1');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_PREFIX}_applications(application_file_name,application_file_permission,application_file_status)VALUES('Search','0','1');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_PREFIX}_applications(application_file_name,application_file_permission,application_file_status)VALUES('Statistics','0','1');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_PREFIX}_applications(application_file_name,application_file_permission,application_file_status)VALUES('Submit_News','1','1');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_PREFIX}_applications(application_file_name,application_file_permission,application_file_status)VALUES('System_Message','0','1');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_PREFIX}_applications(application_file_name,application_file_permission,application_file_status)VALUES('Upload','1','1');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_PREFIX}_applications(application_file_name,application_file_permission,application_file_status)VALUES('Video_Player','1','1');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_PREFIX}_applications(application_file_name,application_file_permission,application_file_status)VALUES('Webspace','1','1');

/* Application Panels and Application Panel Settings */

INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_PREFIX}_application_panels(panel_file_name,panel_alignment,panel_row,panel_file_status,panel_title)VALUES('Applications_Panel','0','1','1','<CENTER><B>Applications Panel</B></CENTER><HR>');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_PREFIX}_application_panels(panel_file_name,panel_alignment,panel_row,panel_file_status,panel_title)VALUES('Banned_Networks','0','4','1','<CENTER><B>Banned Networks</B></CENTER><HR>');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_PREFIX}_application_panels(panel_file_name,panel_alignment,panel_row,panel_file_status,panel_title)VALUES('Cerberus_Badges','1','1','1','<CENTER><B>Cerberus Badges</B></CENTER><HR>');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_PREFIX}_application_panels(panel_file_name,panel_alignment,panel_row,panel_file_status,panel_title)VALUES('Language','1','6','1','<CENTER><B>Set Language</B></CENTER><HR>');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_PREFIX}_application_panels(panel_file_name,panel_alignment,panel_row,panel_file_status,panel_title)VALUES('Latest_Articles','0','3','1','<CENTER><B>Latest Articles</B></CENTER><HR>');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_PREFIX}_application_panels(panel_file_name,panel_alignment,panel_row,panel_file_status,panel_title)VALUES('Latest_Files','1','3','1','<CENTER><B>Latest Files</B></CENTER><HR>');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_PREFIX}_application_panels(panel_file_name,panel_alignment,panel_row,panel_file_status,panel_title)VALUES('Latest_Shouts','1','5','1','<CENTER><B>Latest Shouts</B></CENTER><HR>');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_PREFIX}_application_panels(panel_file_name,panel_alignment,panel_row,panel_file_status,panel_title)VALUES('Member_Panel','0','2','1','<CENTER><B>Member Panel</B></CENTER><HR>');
INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_PREFIX}_application_panels(panel_file_name,panel_alignment,panel_row,panel_file_status,panel_title)VALUES('Newest_Members','1','4','1','<CENTER><B>Newest Members</B></CENTER><HR>');

/* Ranks */

INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_PREFIX}_ranks(rank_gender_male_0,rank_gender_male_1,rank_gender_male_2,rank_gender_male_3,rank_gender_male_4,rank_gender_female_0,rank_gender_female_1,rank_gender_female_2,rank_gender_female_3,rank_gender_female_4)VALUES('Hermes','Apollo','Poseidon','Hades','Zeus','Aphrodite','Demeter','Artemis','Hera','Athena');

/* System Settings */

INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_PREFIX}_settings(settings_safeHTML_directory,settings_safeHTML_status,settings_cookie_time,settings_gzip_status,settings_image_extension,settings_language_directory,settings_offline_status,settings_site_title,settings_smileys_directory,settings_sound_extension,settings_theme_directory,settings_upload_size_private,settings_upload_size_public)VALUES('Default','1','86400','1','png','English','0','Cerberus Content Management System','Default','mp3','2022_TinkeSoftware_Grey','256000','10240000');

/* System Statistics */

INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_PREFIX}_statistics(statistics_number_of_hits,statistics_start_date)VALUES('1','$_GLOBAL_LOCAL_SERVER_DATE');

/* Example Forum Entry */

INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_PREFIX}_forum_forum(forum_access_level,forum_date,forum_description,forum_title)VALUES('1','$_GLOBAL_LOCAL_SERVER_DATE','This is an Example Forum Entry','Example Forum #1');

/* Example Forum Topic Entry */

INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_PREFIX}_forum_topic(topic_access_level,topic_date,topic_description,topic_forum_id,topic_last_post,topic_last_poster,topic_title)VALUES('1','$_GLOBAL_LOCAL_SERVER_DATE','This is an Example Topic Entry','1','$_GLOBAL_LOCAL_SERVER_DATE','Cerberus','Example Topic Entry #1 Within Example Forum Entry #1');

/* Example Forum Topic Post */

INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_PREFIX}_forum_post(post_access_level,post_author,post_data,post_date,post_last_edit,post_topic_id)VALUES('1','Cerberus','This is an Example Post -- you can Administer the Forum via the Administration Control Panel.','$_GLOBAL_LOCAL_SERVER_DATE','$_GLOBAL_LOCAL_SERVER_DATE','1');

/* Example File Category Entry ( For File Upload / Download Application Module ) */

INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_PREFIX}_file_categories(file_category_description,file_category_time,file_category_title)VALUES('This is an Example File Category Entry -- You can Delete this File Category Entry from the Administration Control Panel.','$_GLOBAL_LOCAL_SERVER_DATE','Example File Category Entry');

/* Example File Entry ( For File Upload / Download Application Module ) */

INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_PREFIX}_files(file_author,file_category,file_description,file_image,file_location,file_number_of_downloads,file_time,file_title,file_uploader)VALUES('None','1','This is an Example File Entry -- You can Delete this File Entry from the Administration Control Panel.','./Upload/Default/0987654321-0987654321.png','./Upload/Default/0987654321-0987654321.png','1','$_GLOBAL_LOCAL_SERVER_DATE','Example File','Cerberus');

/* Example Article Entry */

INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_PREFIX}_articles(article_author,article_data,article_time,article_title)VALUES('Cerberus','This is an Example Article -- You can Delete this from the Administration Control Panel.','$_GLOBAL_LOCAL_SERVER_DATE','Example Article');

/* Example News Article Entry */

INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_PREFIX}_news(news_author,news_avatar,news_data,news_mood,news_music,news_rss_rfc,news_time,news_title)VALUES('Cerberus','Default.png','This is an Example News Item -- You can Delete this from the Administration Control Panel.','None','None','$_GLOBAL_LOCAL_SERVER_DATE','$_GLOBAL_LOCAL_SERVER_DATE','Example News');
";

$_MySQL_Generator_PRINT_MySQL_ADMINISTRATION_ACCOUNT	= "

/* Administration and Services Root Administration Accounts */

/* Administration ( $_MySQL_Generator_POST_ADMINISTRATION_USERNAME ) Account */

INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_PREFIX}_members(
member_access_level,
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
member_ip_address_last_login,
member_ip_address_log,
member_last_referrer,
member_level_rank,
member_location_current,
member_mood,
member_music,
member_name_first,
member_name_last,
member_name_middle,
member_name_nickname,
member_number_of_posts,
member_password,
member_profile_about,
member_profile_signature,
member_registration_date,
member_registration_details,
member_security_fingerprint_cleartext,
member_security_fingerprint_hashed,
member_security_pgp_key_panel_public,
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
member_status_account_last_active,
member_url_homepage,
member_username
)VALUES(
'2',
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
'$_POST_ADMINISTRATOR_ELECTRONIC_MAIL_ADDRESS',
'10000',
'1',
'Default.png',
'No_Image.png',
'$_GLOBAL_REMOTE_SERVER_ADDRESS',
'$_GLOBAL_REMOTE_SERVER_ADDRESS',
'$_GLOBAL_REMOTE_SERVER_ADDRESS',
'$_GLOBAL_LOCAL_SERVER_HTTP_REFERRER',
'5',
'Unknown Location',
'Empty Entry :: Current Mood',
'Empty Entry :: Current Music',
'None Provided :: First Name',
'None Provided :: Last Name',
'None Provided :: Middle Name',
'None Provided :: Nick Name',
'10000',
'$_MySQL_Generator_POST_ADMINISTRATION_PASSWORD_HASH',
'Empty Entry :: Profile About',
'Empty Entry :: Profile Signature',
'$_GLOBAL_LOCAL_SERVER_DATE',
'Account Registered @ Internet Protocol Address: $_GLOBAL_REMOTE_SERVER_ADDRESS On: $_GLOBAL_LOCAL_SERVER_DATE',
'00:00:00',
'00:00:00',
'Empty Entry :: P.G.P. Public Key Block',
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
'$_GLOBAL_LOCAL_SERVER_DATE_MD5',
'1',
'0',
'$_GLOBAL_LOCAL_SERVER_DATE_WITH_SEPARATION',
'Empty Entry :: URL Home-Page',
'$_MySQL_Generator_POST_ADMINISTRATION_USERNAME');

/* Services Root Administrator ( Cerberus ) Account */

INSERT INTO {$_MySQL_Generator_POST_ACCESS_DATABASE_PREFIX}_members(
member_access_level,
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
member_ip_address_last_login,
member_ip_address_log,
member_last_referrer,
member_level_rank,
member_location_current,
member_mood,
member_music,
member_name_first,
member_name_last,
member_name_middle,
member_name_nickname,
member_number_of_posts,
member_password,
member_profile_about,
member_profile_signature,
member_registration_date,
member_registration_details,
member_security_fingerprint_cleartext,
member_security_fingerprint_hashed,
member_security_pgp_key_panel_public,
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
member_status_account_last_active,
member_url_homepage,
member_username
)VALUES(
'3',
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
'$_POST_ADMINISTRATOR_ELECTRONIC_MAIL_ADDRESS',
'10000',
'1',
'Default.png',
'No_Image.png',
'$_GLOBAL_REMOTE_SERVER_ADDRESS',
'$_GLOBAL_REMOTE_SERVER_ADDRESS',
'$_GLOBAL_REMOTE_SERVER_ADDRESS',
'$_GLOBAL_LOCAL_SERVER_HTTP_REFERRER',
'5',
'Unknown Location',
'Guarding',
'Nine Inch Nails - Deep',
'Cerberus',
'CMS',
'None',
'CerberusCMS',
'10000',
'$_MySQL_Generator_POST_ADMINISTRATION_PASSWORD_HASH',
'Empty Entry :: Profile About',
'Empty Entry :: Profile Signature',
'$_GLOBAL_LOCAL_SERVER_DATE',
'Account Registered @ Internet Protocol Address: $_GLOBAL_REMOTE_SERVER_ADDRESS On: $_GLOBAL_LOCAL_SERVER_DATE',
'00:00:00',
'00:00:00',
'Empty Entry :: P.G.P. Public Key Block',
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
'$_GLOBAL_LOCAL_SERVER_DATE_MD5_2',
'1',
'0',
'$_GLOBAL_LOCAL_SERVER_DATE_WITH_SEPARATION',
'Empty Entry :: URL Home-Page',
'Cerberus');
";

$_MySQL_Generator_PRINT_MySQL_TABLES					= str_replace('\"', '', $_MySQL_Generator_PRINT_MySQL_TABLES);
$_MySQL_Generator_PRINT_MySQL_TABLE_STRINGS				= str_replace('\"', '', $_MySQL_Generator_PRINT_MySQL_TABLE_STRINGS);
$_MySQL_Generator_PRINT_MySQL_ADMINISTRATION_ACCOUNT			= str_replace('\"', '', $_MySQL_Generator_PRINT_MySQL_ADMINISTRATION_ACCOUNT);

		echo ("Cerberus Administration UserName / Password HASHED<BR>");
		echo (" [ Message Digest Version: 5, HASH Algorithm=>Blowfish, Salted ) / Password Pure MD5 / Password Clear ]<BR>");
		echo ("<TEXTAREA ROWS=\"3\" COLS=\"75\" MAXLENGTH=\"10000\">Administration Username: $_MySQL_Generator_POST_ADMINISTRATION_USERNAME / Administration Password With BlowFish & Salted: $_MySQL_Generator_POST_ADMINISTRATION_PASSWORD_HASH / Administration Password Pure MD5: $_MySQL_Generator_ADMINISTRATION_PASSWORD_HASH_MD5 / Administration Password Clear: $_MySQL_Generator_POST_ADMINISTRATION_PASSWORD</TEXTAREA><BR><BR>");

		echo ("Cerberus MyS.Q.L. Tables Generated:<BR>");
		echo ("<TEXTAREA ROWS=\"15\" COLS=\"115\" MAXLENGTH=\"10000\">$_MySQL_Generator_PRINT_MySQL_TABLES</TEXTAREA><BR><BR>");

		echo ("Cerberus MyS.Q.L. Table Strings Generated:<BR>");
		echo ("<TEXTAREA ROWS=\"15\" COLS=\"115\" MAXLENGTH=\"10000\">$_MySQL_Generator_PRINT_MySQL_TABLE_STRINGS</TEXTAREA><BR><BR>");

		echo ("Cerberus Administration Account S.Q.L. Insertion Strings Generated:<BR>");
		echo ("<TEXTAREA ROWS=\"15\" COLS=\"115\" MAXLENGTH=\"10000\">$_MySQL_Generator_PRINT_MySQL_ADMINISTRATION_ACCOUNT</TEXTAREA>");

} // [ + ] IF_POST

/*
 ================================================================
 +
 +
 + Hyper-Text-Markup-Language Document End
 +
 +
 ================================================================
*/

echo ("
	</BODY>
</HTML>
");
?>