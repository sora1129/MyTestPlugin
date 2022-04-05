<?php
/*
Plugin Name: My Test Plugin
Plugin URI: (プラグインの説明と更新を示すページの URI)
Description: Test用のプラグインです
Version: 1.0
Author: SoraNinomiya
*/

if ( ! defined( 'ABSPATH' ) ) exit;

const MY_PLUUGIN_PATH = '/app/public/wp-content/plugins/my-test-plugin';
const MY_PLUUGIN_URL = 'http://mytestplugin.local/wp-content/plugins/my-test-plugin/';

add_action('wp_footer', function() {
	echo 'ほげほげ！';
});

?>
