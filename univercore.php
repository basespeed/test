<?php
/*
Plugin Name: Univercore
Plugin URI: https://themeforest.net/wicon/univercore
Description: Univercore design by Univertheme
Version: 1.1
Author: Univertheme
Author URI: https://automattic.com/wordpress-plugins/
Text Domain: wicon
*/


class Univercore{
    private static $instance;

    public static function getInstance(){
        if(! isset(self::$instance)){
            self::$instance = new Univercore();
            self::$instance->setup();
            self::$instance->test();
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

    public function test(){
        require_once DIR . "/inc/test/test.php";
        require_once DIR . '/inc/update/plugin-update-checker.php';
        $myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
            'https://github.com/basespeed/test/',
            __FILE__,
            'unievent'
        );
    }

}

function getUnivercore(){
    return Univercore::getInstance();
}

getUnivercore();

var_dump('hello');




