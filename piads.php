<?php
/*
Plugin Name: Piads
Plugin URI: https://pitagon.vn
Description: Piads design by pitagon.vn
Version: 1.1
Author: Pitagon
Author URI: https://pitagon.vn
Text Domain: piads
*/

/**
 * Register and enqueue a custom stylesheet for Piads.
 */
function piads_admin_style() {
    wp_register_style( 'admin_css', plugin_dir_url(__FILE__) . '/assets/css/admin.css', true, '1.0' );
    wp_enqueue_style( 'admin_css' );
}
add_action( 'admin_enqueue_scripts', 'piads_admin_style' );

class Piads{
    private static $instance;

    public static function getInstance(){
        if(! isset(self::$instance)){
            self::$instance = new Piads();
            self::$instance->setup();
            self::$instance->admin();
            self::$instance->main();
        }
    }

    public function setup(){
        if(!defined('DIR')){
            define('DIR',plugin_dir_path(__FILE__));
        }

        if(defined('URL_CORE')){
            define('URL_CORE', plugin_dir_url(__FILE__));
        }
    }

    //setting piads admin
    public function admin(){
        require_once DIR . '/inc/admin/setting.php';
    }

    //add piads script
    public function main(){
        require_once DIR . '/inc/main.php';
    }

    //update plugin
    public function update(){
        require_once DIR . '/inc/update/update.php';
        $myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
            'https://github.com/basespeed/test/',
            __FILE__,
            'unievent'
        );
    }

}

function getPiads(){
    return Piads::getInstance();
}

getPiads();






