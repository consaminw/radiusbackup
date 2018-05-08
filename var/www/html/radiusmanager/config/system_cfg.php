<?php
  // database credentials

  define('db_host', 'localhost');				// database host
  define('db_base', 'radius');					// database name
  define('db_user', 'radius');					// database user
  define('db_psw', 'radius123');				// database password
  define('db_host_cts', 'localhost');				// database host
  define('db_base_cts', 'conntrack');				// database name
  define('db_user_cts', 'conntrack');				// database user
  define('db_psw_cts', 'conn123');				// database password
  
  // system paths and files

  define('radman_dir', '/var/www/html/radiusmanager');		// radius manager full path
  define('raddb_dir', '/usr/local/etc/raddb');			// raddb full path
  define('tftp_dir', 'tftpboot');				// tftp boot directory relative path
  define('docsis_keyfile', 'docsis_keyfile');			// docsis keyfile name
  define('docsis_template', 'docsis_template');			// docsis tftp boot file template
  define('clients_conf', 'clients.conf');			// clients.conf name
  define('dhcpd_conf', 'dhcpd.conf');				// DHCP server configuration file
  define('leases_file', '/var/state/dhcp/dhcpd.leases');	// full path of DHCP leases file
  define('lang_dir', 'lang');					// folder of language files
  define('invoice_dir', 'invoice');				// folder of invoice files
  define('tmp_images', 'tmpimages');				// temporary image folder
  define('baseurl', 'http://192.168.0.3/radiusmanager');	// base URL of your RM system

  // system definitions

  define('admin_user', 'admin');				// name of superuser
  define('def_syslang', 'English');				// default system language (fallback)
  define('rootexec_psw', '12345');				// rootexec password
  define('httpd_user', 'apache');				// HTTPD user name
  define('nas_port_mt', 1700);					// global NAS port address for Mikrotik
  define('nas_port_chilli', 3779);				// global NAS port address for Chillispot
  define('nas_port_cisco', 1700);				// global NAS port address for Cisco
  define('hotspot_ip', 'http://10.5.7.1');			// URL of Hotspot login page
  define('no_limit_date', '2020-12-31');			// use this date for unlimited unix accounts
  define('max_card_quantity', 10000);				// the maximal number of generated cards at once
  define('cardsernum_integers', 12);				// card serial number length (for CSV export)
  define('cardseries_padding', 4);				// number of digits in card series
  define('card_pin_len', 8);					// default PIN length (4-16)
  define('card_psw_len', 4);					// default card password length (0-8)
  define('ias_pin_length', 8);					// IAS PIN code length
  define('ias_psw_length', 4);					// IAS and mobile number registration password length
  define('rndchars', '0123456789ABCDEFGHIJKLMNOPQRSTVWXYZ');	// default random characters
  define('rndcardpin', '0123456789');				// random characters in card PIN codes
  define('rndcardpass', '0123456789');				// random characters in card passwords
  define('rndstring_len', 4);					// length of verification code (1-10)
  define('max_smsnum', 3);					// max. number of card verification SMS
  define('max_pinfails', 3);					// max. number of wrong PIN codes
  define('max_verifyfails', 3);					// max. number of verification failures
  define('max_sameselfreg', 3);					// max. number of same self registered accounts
  define('quickjump_max_pages', 10);				// how many pages to display in quickjumps
  define('rows_per_page', 50);					// table rows per page
  define('csv_max_rows', 1000000);				// max. number of rows in CSV file
  define('cc_years', 5);					// how many years to display in CC expiration listboxes
  define('session_timeout', 15);				// PHP session timeout in minutes
  define('regexp_username', '/^[a-z0-9._!@#$%&*]+$/');		// regular expression for validating user names
  define('regexp_managername', '/^[a-z0-9._!@#$%&*]+$/');	// regular expression for validating manager names
  define('regexp_email', '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/');	// regular expression for email validation
  define('regexp_mac', '/^[:a-z0-9._]+$/');			// regular expression for validating MACs
  define('regexp_psw', '/^[a-zA-Z0-9._!@#$%&*]+$/');		// regular expression for validating passwords
  define('keep_connlog', 190);					// how many days to keep the connection log data
  define('keep_syslog', 190);					// how many days to keep the system log data
  define('keep_actsrv', 1);					// how many days to keep the actual service data
  define('keep_postauth', 30);					// how many days to keep the postauth log data
  define('ping_timeout', 1);					// ping timeout value in seconds
  define('pswact_len_email', 30);				// length of new password activation code sent by email
  define('pswact_len_sms', 8);					// length of new password activation code sent by sms
  define('newpsw_len', 4);					// length of generated password
  define('grp_dec_inv', true);					// enable grouping of decimals on invoice forms
  define('default_simuse', 1);					// default sim-use value for new users
  define('cmperthread', 50);					// number of CMs per thread in cmtspoller module
  define('cm_community', 'private');				// CM community string
  define('mt_login_delay', 200000);  				// delay between Mikrotik API login attempt and response (in microsendonds)
  define('colsel_itemperrow', 4);				// number of items per row in column selector

  // SMTP definitions

  define('smtp_relay', 'localhost');				// SMTP relay
  define('smtp_port', 25);					// SMTP port
  define('smtp_auth', FALSE);					// SMTP authentication
  define('smtp_user', 'username');				// SMTP user name
  define('smtp_psw', 'password');				// SMTP password
  define('mail_from', 'admin@myisp.com');			// sender address
  define('mail_fromname', 'Administrator');			// sender name
  define('mail_newuser', 'admin@localhost');			// self registered new user notification
  define('mail_localdomain', 'localhost.localdomain');		// default domain name

  // limits

  define('min_username_len', 4);				// minimal regular username length
  define('max_username_len', 32);				// maximal regular username length
  define('mac_username_len_mikrotik', 17);			// length of Mikrotik Hotspot MAC username
  define('mac_username_len_staros', 12);			// length of StarOS Hotspot MAC username
  define('min_psw_len', 4);					// minimal regular password length
  define('max_psw_len', 32);					// maximal regular password length
  define('min_pswhsmac_len', 4);				// minimal Hotspot MAC password length
  define('max_pswhsmac_len', 32);				// maximal Hotspot MAC password length
  define('mobile_minlen', 6);					// minimal allowed length of mobile number (verification)
  define('mobile_maxlen', 16);					// maximal allowed length of mobile number (verification)
  define('comment_maxlen', 30);					// displayed characters in comment field

  // card PDF export

  define('cards_per_page', 10);					// number of cards per A4 sheet
  define('username_x_pos', 45);					// username x position on classic prepaid card
  define('username_y_pos', 36);					// username y position on classic prepaid card
  define('pdfprint_expiration', true);				// PDF print valid till text
  define('pdfprint_price', true);				// PDF print price
  define('pdfprint_serial', true);				// PDF print serial number
  define('pdfprint_series', true);				// PDF print series
  define('pdfprint_descr', true);				// PDF print card service description
  define('psw_x_pos', 45);					// password x position on classic prepaid card
  define('psw_y_pos', 44);					// password y position on classic prepaid card
  define('pin_x_pos', 33);					// PIN x position on refill card
  define('pin_y_pos', 40);					// PIN y position on refill card
  define('price_x_pos', 75);					// price x position on card
  define('price_y_pos', 19);					// price y position on card
  define('date_x_pos', 53);					// valid till x position on card
  define('date_y_pos', 53);					// valid till y position on card
  define('serial_x_pos', 27);					// serial x position on card
  define('serial_y_pos', 61);					// serial y position on card
  define('series_x_pos', 54);					// series x position on card
  define('series_y_pos', 61);					// series y position on card
  define('descr_x_pos', 15);					// description x position on card
  define('descr_y_pos', 26);					// description y position on card
  define('user_font_type', 'Arial');				// pin / psw font typeface
  define('user_font_size', 14);					// pin / psw font size
  define('user_font_color', '000000');				// pin / psw font color
  define('date_font_type', 'Arial');				// date font typeface
  define('date_font_size', 10);					// date font size
  define('date_font_color', '000000');				// date font color
  define('price_font_type', 'Arial');				// price font typeface
  define('price_font_size', 10);				// price font size
  define('price_font_color', 'FFF7A1');				// price font color
  define('serial_font_type', 'Times');				// serial font typeface
  define('serial_font_size', 8);				// serial font size
  define('serial_font_color', 'CEDDFF');			// serial font color
  define('series_font_type', 'Times');				// series font typeface
  define('series_font_size', 8);				// series font size
  define('series_font_color', 'CEDDFF');			// series font color
  define('srvname_font_type', 'Arial');				// serial font typeface
  define('srvname_font_size', 12);				// serial font size
  define('srvname_font_color', 'DFEFF3');			// serial font color
  define('card_left_margin', 13);				// left margin
  define('card_top_margin', 13);				// top margin
  define('card_classic_bg_filename', 'classic_bg.png');		// classic prepaid card background picture file
  define('card_refill_bg_filename', 'refill_bg.png');		// refill card background picture file
  define('card_bg_width', 85);					// prepaid card background picture width
  define('card_bg_height', 50);					// prepaid card background picture height

  // unix executables

  define('cmd_rootexec', '/usr/local/sbin/rootexec');		// rootexec executable with full path
  define('cmd_radclient', '/usr/local/bin/radclient');		// radclient executable with full path
  define('cmd_starutil', '/usr/local/bin/starutil');		// starutil executable with full path
  define('cmd_useradd', '/usr/sbin/useradd');			// useradd executable with full path
  define('cmd_userdel', '/usr/sbin/userdel');			// userdel executable with full path
  define('cmd_chmod', '/usr/bin/chmod');			// chmod executable with full path
  define('cmd_usermod', '/usr/sbin/usermod');			// usermod executable with full path
  define('cmd_passwd', '/usr/bin/passwd');			// passwd executable with full path
  define('cmd_edquota', '/usr/sbin/edquota');			// edquota executable with full path
  define('cmd_ping', '/bin/ping');				// ping executable with full path
  define('cmd_docsis', '/usr/local/bin/docsis');		// docsis generator executable

  // gradient bars

  define('GDBAR_WIDTH',     50);				// gradient bar width
  define('GDBAR_HEIGHT',    3);					// gradient bar height
  define('GDBAR_BGCOLOR',   '#000000');				// gradient bar background color
  define('GDBAR_RED',	    '#FF0000');				// gradient bar red color
  define('GDBAR_YELLOW',    '#FFFC00');				// gradient bar yellow color
  define('GDBAR_GREEN',     '#00FF00');				// gradient bar green color

  // CM specific

  define('CM_SCALE_MIN',    0);					// CM scale start
  define('CM_SCALE_MAX',    140);				// CM scale end
  define('CM_TXSIGNAL_MIN', 95);				// CM TX minimal usable signal level
  define('CM_TXSIGNAL_MAX', 115);				// CM TX maximal usable signal level
  define('CM_RXSIGNAL_MIN', 50);				// CM RX minimal usable signal level
  define('CM_RXSIGNAL_MAX', 75);				// CM RX maximal usable signal level
  define('CM_SNRDS_MIN',    0);					// CM SNR DS minimal level
  define('CM_SNRDS_MAX',    50);				// CM SNR DS maximal level
  define('CM_SNRUS_MIN',    0);					// CM SNR US minimal level
  define('CM_SNRUS_MAX',    35);				// CM SNR US maximal level

  // WLAN specific

  define('WLAN_SIGNAL_MIN', -90);				// WLAN minimal signal level
  define('WLAN_SIGNAL_MAX', -65);				// WLAN maximal signal level
  define('WLAN_SNR_MIN',     0);				// WLAN minimal SNR
  define('WLAN_SNR_MAX',     40);				// WLAN maximal SNR

  // captcha

  define('CAPTCHA_FONT',   'monofont.ttf');			// font typeface
  define('CAPTCHA_WIDTH',  120);				// image width
  define('CAPTCHA_HEIGHT', 40);					// image height
  define('CAPTCHA_LEN',    4);					// number of characters

  // templates

  define('home_tpl', 'home_tpl.htm');
  define('bg_tpl', 'bg_tpl.htm');
  define('confirmsagepaypayment_tpl', 'confirmsagepaypayment_tpl.htm');
  define('confirmpayfastpayment_tpl', 'confirmpayfastpayment_tpl.htm');
  define('confirm2copayment_tpl', 'confirm2copayment_tpl.htm');
  define('listspecperacnt_tpl', 'listspecperacnt_tpl.htm');
  define('listspecperbw_tpl', 'listspecperbw_tpl.htm');
  define('newspecperacnt_tpl', 'newspecperacnt_tpl.htm');
  define('newspecperbw_tpl', 'newspecperbw_tpl.htm');
  define('editspecperacnt_tpl', 'editspecperacnt_tpl.htm');
  define('editspecperbw_tpl', 'editspecperbw_tpl.htm');
  define('bulkmail_tpl', 'bulkmail_tpl.htm');
  define('bulksms_tpl', 'bulksms_tpl.htm');
  define('newias_tpl', 'newias_tpl.htm');
  define('editias_tpl', 'editias_tpl.htm');
  define('mailwarnexp_tpl', 'mailwarnexp_tpl.txt');
  define('mailaccrenewed_tpl', 'mailaccrenewed_tpl.txt');
  define('mailaccrenewfail_tpl', 'mailaccrenewfail_tpl.txt');
  define('mailsrvchg_tpl', 'mailsrvchg_tpl.txt');
  define('mailwelcomeuser_tpl', 'mailwelcomeuser_tpl.txt');
  define('mailselfreg_tpl', 'mailselfreg_tpl.txt');
  define('mailiasreg_tpl', 'mailiasreg_tpl.txt');
  define('mailforgotpsw_tpl', 'mailforgotpsw_tpl.txt');
  define('mailnewpsw_tpl', 'mailnewpsw_tpl.txt');
  define('mailaccverify_tpl', 'mailaccverify_tpl.txt');
  define('smswelcomeuser_tpl', 'smswelcomeuser_tpl.txt');
  define('smsaccverify_tpl', 'smsaccverify_tpl.txt');
  define('smsselfregact_tpl', 'smsselfregact_tpl.txt');
  define('smspswact_tpl', 'smspswact_tpl.txt');
  define('smspsw_tpl', 'smspsw_tpl.txt');
  define('smswarnexp_tpl', 'smswarnexp_tpl.txt');
  define('smswarntraff_tpl', 'smswarntraff_tpl.txt');
  define('receipt_tpl', 'receipt_tpl.htm');
  define('receipt_ias_tpl', 'receipt_ias_tpl.htm');
  define('payment_success_ucp_tpl', 'payment_success_ucp_tpl.htm');
  define('payment_success_ias_tpl', 'payment_success_ias_tpl.htm');
  define('payment_success_internal_tpl', 'payment_success_internal_tpl.htm');
  define('payment_failure_tpl', 'payment_failure_tpl.htm');
  define('paypal_getccdata_tpl', 'paypal_getccdata_tpl.htm');
  define('paypal_revieworder_tpl', 'paypal_revieworder_tpl.htm');
  define('paypal_std_redirect_tpl', 'paypal_std_redirect_tpl.htm');
  define('authorizenet_getccdata_tpl', 'authorizenet_getccdata_tpl.htm');
  define('invoice_tpl', 'invoice_tpl.htm');
  define('changesrvadm_tpl', 'changesrvadm_tpl.htm');
  define('postpaid_inv_completed_tpl', 'postpaidinvcompleted_tpl.htm');
  define('postpaid_billing_tpl', 'postpaidbilling_tpl.htm');
  define('confirmpostpaidbilling_tpl', 'confirmpostpaidbilling_tpl.htm');
  define('confirmintpayment_tpl', 'confirmintpayment_tpl.htm');
  define('confirmchangesrv_tpl', 'confirmchangesrv_tpl.htm');
  define('confirmcancelchangesrv_tpl', 'confirmcancelchangesrv_tpl.htm');
  define('changesrv_tpl', 'changesrv_tpl.htm');
  define('buyservice_tpl', 'buyservice_tpl.htm');
  define('selectpaymode_tpl', 'selectpaymode_tpl.htm');
  define('adminlogin_tpl', 'adminlogin_tpl.htm');
  define('adminlogout_tpl', 'adminlogout_tpl.htm');
  define('userlogin_tpl', 'userlogin_tpl.htm');
  define('userlogout_tpl', 'userlogout_tpl.htm');
  define('entercardnum_tpl', 'entercardnum_tpl.htm');
  define('selfreg_entercodesms_tpl', 'selfregentercodesms_tpl.htm');
  define('selfreg_entercodeemail_tpl', 'selfregentercodeemail_tpl.htm');
  define('verifycard_entermobile_tpl', 'verifycardentermobile_tpl.htm');
  define('verifycard_entercode_tpl', 'verifycardentercode_tpl.htm');
  define('showfillupcard_tpl', 'showfillupcard_tpl.htm');
  define('listsrvhistory_tpl', 'listsrvhistory_tpl.htm');
  define('listsrvhistorysmall_tpl', 'listsrvhistorysmall_tpl.htm');
  define('listcardseries_tpl', 'listcardseries_tpl.htm');
  define('listrefillcards_tpl', 'listrefillcards_tpl.htm');
  define('iasselpaymode_tpl', 'iasselpaymode_tpl.htm');
  define('buyiasmain_tpl', 'buyiasmain_tpl.htm');
  define('listias_tpl', 'listias_tpl.htm');
  define('cardstats_tpl', 'cardstats_tpl.htm');
  define('confirmmakecards_tpl', 'confirmmakecards_tpl.htm');
  define('cardgen_tpl', 'cardgen_tpl.htm');
  define('editpassword_tpl', 'editpassword_tpl.htm');
  define('editinvoice_tpl', 'editinvoice_tpl.htm');
  define('stats_tpl', 'stats_tpl.htm');
  define('sysinfo_tpl', 'sysinfo_tpl.htm');
  define('sysstats_tpl', 'sysstats_tpl.htm');
  define('addcredits_tpl', 'addcredits_tpl.htm');
  define('addmoney_tpl', 'addmoney_tpl.htm');
  define('confirmaddcredits_tpl', 'confirmaddcredits_tpl.htm');
  define('creditsadded_tpl', 'creditsadded_tpl.htm');
  define('search_users_tpl', 'searchusers_tpl.htm');
  define('search_refillcards_tpl', 'searchrefillcards_tpl.htm');
  define('search_traffic_tpl', 'searchtraffic_tpl.htm');
  define('search_traffic_summary_tpl', 'searchtrafficsummary_tpl.htm');
  define('search_cts_tpl', 'searchcts_tpl.htm');
  define('search_postauth_tpl', 'searchpostauth_tpl.htm');
  define('editservice_tpl', 'editservice_tpl.htm');
  define('payiasmain_tpl', 'payiasmain_tpl.htm');
  define('adminmain_tpl', 'adminmain_tpl.htm');
  define('adminmainblank_tpl', 'adminmainblank_tpl.htm');
  define('reg_main_tpl', 'reg_main_tpl.htm');
  define('reg_newusernm_tpl', 'reg_newusernm_tpl.htm');
  define('reg_newusermb_tpl', 'reg_newusermb_tpl.htm');
  define('reg_usercreated_tpl', 'reg_usercreated_tpl.htm');
  define('passwd_main_tpl', 'passwd_main_tpl.htm');
  define('passwd_getdata_tpl', 'passwd_getdata_tpl.htm');
  define('passwd_entercode_tpl', 'passwd_entercode_tpl.htm');
  define('usermain_tpl', 'usermain_tpl.htm');
  define('usersdetails_tpl', 'usersdetails_tpl.htm');
  define('edituser_tpl', 'edituser_tpl.htm');
  define('ucp_edituser_tpl', 'ucp_edituser_tpl.htm');
  define('searchinvoices_tpl', 'searchinvoices_tpl.htm');
  define('editmanager_tpl', 'editmanager_tpl.htm');
  define('syserror_tpl', 'syserror_tpl.htm');
  define('sysmsg_tpl', 'sysmsg_tpl.htm');
  define('searchusers_tpl', 'searchusers_tpl.htm');
  define('listusers_tpl', 'listusers_tpl.htm');
  define('listusergroups_tpl', 'listusergroups_tpl.htm');
  define('editusergroup_tpl', 'editusergroup_tpl.htm');
  define('newusergroup_tpl', 'newusergroup_tpl.htm');
  define('listservices_tpl', 'listservices_tpl.htm');
  define('listmanagers_tpl', 'listmanagers_tpl.htm');
  define('listnases_tpl', 'listnases_tpl.htm');
  define('listap_tpl', 'listap_tpl.htm');
  define('newap_tpl', 'newap_tpl.htm');
  define('editap_tpl', 'editap_tpl.htm');
  define('listinvoices_tpl', 'listinvoices_tpl.htm');
  define('listonlineradius_tpl', 'listonlineradius_tpl.htm');
  define('listonlinecm_tpl', 'listonlinecm_tpl.htm');
  define('detailedtraffic_tpl', 'detailedtraffic_tpl.htm');
  define('detailedcts_tpl', 'detailedcts_tpl.htm');
  define('userinfo_tpl', 'userinfo_tpl.htm');
  define('trafficreport_tpl', 'trafficreport_tpl.htm');
  define('trafficsummary_tpl', 'trafficsummary_tpl.htm');
  define('syslog_tpl', 'syslog_tpl.htm');
  define('postauth_tpl', 'postauth_tpl.htm');
  define('ctsreport_tpl', 'ctsreport_tpl.htm');
  define('confirmdeluser_tpl', 'confirmdeluser_tpl.htm');
  define('confirmdelusergroup_tpl', 'confirmdelusergroup_tpl.htm');
  define('confirmdelservice_tpl', 'confirmdelservice_tpl.htm');
  define('confirmdelias_tpl', 'confirmdelias_tpl.htm');
  define('confirmdelmanager_tpl', 'confirmdelmanager_tpl.htm');
  define('newuser_tpl', 'newuser_tpl.htm');
  define('newservice_tpl', 'newservice_tpl.htm');
  define('newmanager_tpl', 'newmanager_tpl.htm');
  define('newnas_tpl', 'newnas_tpl.htm');
  define('editnas_tpl', 'editnas_tpl.htm');
  define('confirmdelnas_tpl', 'confirmdelnas_tpl.htm');
  define('confirmdelap_tpl', 'confirmdelap_tpl.htm');
  define('listpools_tpl', 'listpools_tpl.htm');
  define('newpool_tpl', 'newpool_tpl.htm');
  define('editpool_tpl', 'editpool_tpl.htm');
  define('confirmdelpool_tpl', 'confirmdelpool_tpl.htm');
  define('listcmts_tpl', 'listcmts_tpl.htm');
  define('newcmts_tpl', 'newcmts_tpl.htm');
  define('editcmts_tpl', 'editcmts_tpl.htm');
  define('confirmdelcmts_tpl', 'confirmdelcmts_tpl.htm');
  define('adminmenu_tpl', 'adminmenu_tpl.htm');
  define('editsettings_tpl', 'editsettings_tpl.htm');
  define('redirect_tpl', 'redirect_tpl.htm');
  define('batchbilling_tpl', 'batchbilling_tpl.htm');
  define('confirmbatchbilling_tpl', 'confirmbatchbilling_tpl.htm');
  define('confirmlogout_tpl', 'confirmlogout_tpl.htm');
  define('info_tpl', 'info_tpl.htm');
  define('checkrefillcard_tpl', 'checkrefillcard_tpl.htm');
  define('reg_terms', 'reg_terms.txt');

  // colors

  define('col_bgcolor', '#EAF1FF');			// template background color
  define('col_bgcolor0', '#E0E0E0');			// row background color #0
  define('col_bgcolor1', '#F0F0F0');			// row background color #1
  define('col_sess_active', '#95B8FF');			// active session color
  define('col_user_en', '#00E51B');			// user active
  define('col_user_dis', '#FF3E3E');			// user disabled
  define('col_user_exp', '#FFCC00');			// user expired
  define('col_card_act', '#00E51B');			// card active
  define('col_card_dis', '#FF3E3E');			// card disabled
  define('col_card_exp', '#FFCC00');			// card  expired
  define('col_nocap', '#DEE5F2');			// inactive cap color
  define('col_manager_en', '#00E51B');			// manager enabled
  define('col_manager_dis', '#FF3E3E');			// manager disabled
  define('col_service_en', '#00E51B');			// service enabled
  define('col_service_dis', '#FF3E3E');			// service disabled
  define('col_ap_en', '#00E51B');			// AP enabled
  define('col_ap_dis', '#FF3E3E');			// AP disabled
  define('col_ias_en', '#00E51B');			// IAS enabled
  define('col_ias_dis', '#FF3E3E');			// IAS disabled
  define('col_enstatip', '#000000');			// enable static IP
  define('col_disstatip', '#BBBBBB');			// disable static IP
  define('col_user_online', '#95B8FF');			// user is online
  define('col_invoice_notpaid', '#FFCC00');		// unpaid invoice
  define('col_invoice_deadline', '#FF0000');		// payment grace period expired
  define('col_series_active', '#00E51B');		// card series active
  define('col_series_partial', '#FFCC00');		// card series partially revoked
  define('col_series_revoked', '#FF3E3E');		// card series revoked
  define('col_not_verified', '#FF66FF');		// account not verified
  define('col_specperiod', '#73F086');			// special billing period
  define('col_cm_weak', '#FFFC00');			// CM signal level too weak
  define('col_cm_strong', '#FF0000');			// CM signal level too strong

  // CSS

  define('css_cap', 'bold');				// active cap style
  define('css_nocap', 'normal');			// inactive cap style

  // images

  define('arrow_up', 'arrowup.gif');
  define('arrow_down', 'arrowdown.gif');
  define('arrow_none', 'arrownone.gif');
  define('img_paypalstd', 'paypalstd.gif');
  define('img_paypalpro', 'paypalpro.gif');
  define('img_paypalexp', 'paypalexp.gif');
  define('img_sagepay', 'sagepay.gif');
  define('img_authorizenet', 'authorizenet.gif');
  define('img_dps', 'dps.gif');
  define('img_2co', '2checkout.gif');
  define('img_payfast', 'payfast.gif');

  // country list

  $countrylist = array(array("", ""),
                       array("India", "IND"),
                	);  

  // states list

  $stateslist = array(array("", ""),
                      array("-- INDIA --", ""),
                      array("Bihar", "BIR"),
                      );
?>
