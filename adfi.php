<?php
	/*
    Plugin Name: ADFI
    Plugin URI: http://sputznik.com
    Description:
    Author: Samuel Thomas
    Version: 1.0
    Author URI: http://sputznik.com
  */

  add_filter( 'adf_main_logo', function( $url ){
    $url = plugins_url('adfi/images/logo.png');
    return $url;
  } );

  add_filter( 'adf_footer_logo', function( $url ){
    $url = plugins_url('adfi/images/logo-white.png');
    return $url;
  } );
