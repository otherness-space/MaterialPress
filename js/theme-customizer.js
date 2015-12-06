/**
 * This file adds some LIVE to the Theme Customizer live preview. To leverage
 * this, set your custom settings to 'postMessage' and then add your handling
 * here. Your javascript should grab settings from customizer controls, and
 * then make any necessary changes to the page using jQuery.
 */

 //Update site background color...
( function( $ ) {
wp.customize( 'background_color', function( value ) {
  value.bind( function( newval ) {
    $('body').css('background-color', newval );
    } );
 } );

 //Update site link color in real time...
wp.customize( 'nav_background_color', function( value ) {
  value.bind( function( newval ) {
      $('nav').css('color', newval );
    } );
  } );

  //Update site link color in real time...
 wp.customize( 'link_textcolor', function( value ) {
   value.bind( function( newval ) {
     $('a').css('color', newval );
     } );
   } );

} )( jQuery );