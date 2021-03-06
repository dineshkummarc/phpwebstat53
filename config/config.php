<?php @header("content-type: text/html; charset=utf-8");

/* general configuration */
 $script_activity             = 1;
 $db_active                   = 0;
 $script_domain               = "http://local.rocket.co.in:8081";
 $home_site_name              = "";
 $script_path                 = "stat/";
 $exception_domain            = array ( "se.com" );
 $stat_name                   = "http://local.rocket.co.in:8081";
 $language                    = "language/english.php";
 $language_patterns           = "language/english_country.php";
 $url_parameter               = array (  );

/* advanced configuration */
// general ---------------//
 $exception_ip_addresses      = array (  );
 $block_referer               = array ( "some-spammer","other-spammer","semalt","buttons" );
 $block_bots                  = array ( "Googlebot","Bingbot","Yahoo","Gigabot","msnbot","SearchSight","Seekbot","Baiduspider","BecomeBot","BeslistBot","BillyBobBot","Bimbot","sogou","SurveyBot","SynooBot","Teoma","webcollage","Yandex" );
 $server_time                 = "+5,5h";
 $frames                      = 1;
 $ip_recount_time             = 1440;
 $auto_update_check           = 1;
 $starting_date               = "TT.MM.YYYY";
 $stat_add_visitors           = 0;
 $get_ip_address              = 1;
 $hash_ip_address             = 2;
 $error_reporting             = 0;
 $google_images               = 0;
 $google_adwords              = 0;
 $creator_number              = 5000;
 $creator_referer_cut         = 0;
 $index_creator_number        = 30000;
 $cache_update                = 60;
// security --------------//
 $adminpassword               = "Pass_ZDAzM2UyMmFlMzQ4YWViNTY2M";
 $clientpassword              = "Pass_ZDJhMDRkNzEzMDFhODkxNTIxN";
 $loginpassword_ask           = 1;
 $cookiepassword_ask          = 1;
 $set_htaccess                = 1;
 $autologout                  = 1;
 $autologout_time             = 30;
// display ---------------//
 $theme                       = "themes/standard/";
 $show_detailed_browser       = 0;
 $show_detailed_os            = 1;
 $show_detailed_referer       = 1;
 $show_country_flags          = 1;
 $show_browser_icons          = 1;
 $show_os_icons               = 1;
 $percentbar_max_value_1      = "1";
 $percentbar_max_value_2      = "1";

/* show module */
 $display_show_hour              = 1;
 $display_show_day               = 1;
 $display_show_weekday           = 1;
 $display_show_month             = 1;
 $display_show_year              = 1;
 $display_show_browser           = 1;
 $display_show_os                = 1;
 $display_show_resolution        = 1;
 $display_show_colordepth        = 1;
 $display_show_javascript_status = 1;
 $display_show_site              = 1;
 $display_show_referer           = 1;
 $display_show_entrysite         = 1;
 $display_show_searchengines     = 1;
 $display_show_searchwords       = 1;
 $display_show_cc                = 1;

/* module width in pixel */
 $display_width_overview          = 290;
 $display_width_hour              = 290;
 $display_width_day               = 290;
 $display_width_weekday           = 300;
 $display_width_month             = 300;
 $display_width_year              = 300;
 $display_width_browser           = 490;
 $display_width_os                = 490;
 $display_width_resolution        = 400;
 $display_width_colordepth        = 400;
 $display_width_javascript_status = 400;
 $display_width_site              = 700;
 $display_width_referer           = 800;
 $display_width_entrysite         = 700;
 $display_width_searchengines     = 410;
 $display_width_searchwords       = 480;
 $display_width_cc                = 500;

/* number of module entries */
 $display_count_year              = 3;
 $display_count_browser           = 12;
 $display_count_os                = 12;
 $display_count_resolution        = 15;
 $display_count_colordepth        = 5;
 $display_count_site              = 18;
 $display_count_referer           = 33;
 $display_count_entrysite         = 10;
 $display_count_searchengines     = 33;
 $display_count_searchwords       = 33;
 $display_count_cc                = 29;

/* counter settings */
// display ---------//
 $counter_display_show_visitors_online  = 1;
 $counter_display_show_today            = 1;
 $counter_display_show_yesterday        = 1;
 $counter_display_show_this_month       = 1;
 $counter_display_show_last_month       = 1;
 $counter_display_show_max              = 1;
 $counter_display_show_average          = 1;
 $counter_display_show_total            = 1;
 $counter_display_show_footer           = 1;
 $counter_display_show_footer_ticker    = 1;
 $counter_display_show_footer_info1     = 1;
 $counter_display_show_footer_info2     = 1;
 $counter_display_show_footer_info3     = 0;
 $counter_display_show_footer_info4     = 0;
// settings --------//
 $online_recount_time                   = 15;
 $counter_add_visitors                  = 0;

?>