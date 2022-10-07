<?php

/**
 * Patronus
 * 
 * @package Patronus
 * @version 1.0.0
 */

/* ------------------------------------------------------------------- *
* Login logo.
/* ------------------------------------------------------------------- */

function patronus_login_logo()
{
  echo '<style type="text/css">
        .login h1 a { background-image: url(https://maiowebdesign.it/wp-content/themes/MWD_starter_theme-master/img/logo.png) !important; width: 230px !important; height: 200px !important;}
        .login h1 a { background-size: 230px 200px !important;}
        #login {padding: 54px 0 0 !important;}
        </style>';
}
add_action('login_head', 'patronus_login_logo');


function patronus_logo_url()
{
  return 'https://www.maiowebdesign.it/';
}
add_filter('login_headerurl', 'patronus_logo_url');

/* ------------------------------------------------------------------- *
* Include Files.
/* ------------------------------------------------------------------- */

require_once('includes/theme-setup.php');
require_once('includes/enqueues.php');
require_once('includes/head-cleaner.php');
require_once('includes/timber-setup.php');

/* ------------------------------------------------------------------- *
* Content Width
/* ------------------------------------------------------------------- */

if (!isset($content_width)) $content_width = 1200;


/* ------------------------------------------------------------------- *
* Remove editor
/* ------------------------------------------------------------------- */
add_action('init', 'remove_editor');
function remove_editor()
{
  if (isset($_GET['post'])) {
    $id = $_GET['post'];
    switch ($id) {
        // case 6:

        // the below removes 'editor' support for 'pages'
        // if you want to remove for posts or custom post types as well
        // add this line for posts:
        // remove_post_type_support('post', 'editor');
        // add this line for custom post types and replace 
        // custom-post-type-name with the name of post type:
        // remove_post_type_support('custom-post-type-name', 'editor');

        // remove_post_type_support('page', 'editor');
        // break;
      default:
        // Don't remove any other template.
        break;
    }
  }
}