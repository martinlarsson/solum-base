<?php
/**
 * Config-file for solum. Change settings here to affect installation.
 *
 */

/**
 * Set the error reporting.
 *
 */
error_reporting(-1);              // Report all type of errors
ini_set('display_errors', 1);     // Display all errors
ini_set('output_buffering', 0);   // Do not buffer outputs, write directly


/**
 * Define solum paths.
 *
 */
define('SOLUM_INSTALL_PATH', __DIR__ . '/..');
define('SOLUM_THEME_PATH', SOLUM_INSTALL_PATH . '/theme/render.php');


/**
 * Include bootstrapping functions.
 *
 */
include(SOLUM_INSTALL_PATH . '/src/bootstrap.php');


/**
 * Start the session.
 *
 */
session_name(preg_replace('/[^a-z\d]/i', '', __DIR__));
session_start();


/**
 * Create the solum variable.
 *
 */
$solum = array();


/**
 * Site wide settings.
 *
 */
$solum['lang']         = 'sv';
$solum['title_append'] = ' | solum, en webbtemplate.';

/**
 * Theme related settings.
 *
 */
$solum['stylesheets'] = array('css/style.css');
$solum['favicon']    = 'favicon.ico';

/**
 * Navigation bar.
 *
 */
$solum['navbar'] = array(
  'callback_selected' => function($url) {
    if(basename($_SERVER['SCRIPT_FILENAME']) == $url) {
      return true;
    }
    else {
      return false;
    }
  },
  'class' => 'navbar',
  'items' => array(
    'home'  => array('text'=>'Home',  'url'=>'home.php', 'title'=>'Home'),
    'report'  => array('text'=>'Item#2',  'url'=>'#', 'title'=>''),
    'source' => array('text'=>'Item#3', 'url'=>'#', 'title'=>''),
  ),
);
