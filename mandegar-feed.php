<?php
/*
Plugin Name: Mandegar Feed
Plugin URI: http://mandegarweb.com
Description: Show valuable posts of <a target=_blank" href="http://mandegarweb.com">Mandegarweb.com</a> in your dashboard.
Author: Ghaem
Version: 1.0
Tags: feed, wordpress, mandegarweb, parsi, wp-parsi, mandegar feed, mandegarweb feed
Author URI: http://mandegarweb.com
Copyright: Mandegarweb - 2014
License: GPL
*/
// Add Mandegarweb.com feed //
function wp_admin_dashboard_add_news_feed_widget() {
global $wp_meta_boxes;
wp_add_dashboard_widget( 'dashboard_mf_feed', __("Mandegar Feed", "mf"), 'dashboard_mf_feed_output' );
}
add_action('wp_dashboard_setup', 'wp_admin_dashboard_add_news_feed_widget');
function dashboard_mf_feed_output() {
echo '<div class="mandegarfeed">';
wp_widget_rss_output(array(
'url' => 'http://mandegarweb.com/feed',
'title' => __('Show valuable posts of Mandegarweb in your dashboard', 'mf'),
'items' => 5,
'show_summary' => 1,
'show_author' => 1,
'show_date' => 1
));
echo '<p>' . __('Mandegar Feed - Show valuable posts of <a target=_blank" href="http://mandegarweb.com">Mandegarweb.com</a> in your dashboard','mf') . '</p>';
echo "</div>";
}
// End //
function mf_action_init() {
load_plugin_textdomain('mf', false, dirname(plugin_basename(__FILE__) ) . '/lang/' );
}
add_action('init', 'mf_action_init');
?>