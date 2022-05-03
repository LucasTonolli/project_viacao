<?php defined('ABSPATH') || exit('No direct script access allowed');

$shortcodes = VVerner\Shortcodes::getInstance();
$shortcodes->add('listing_times');


add_filter('vv_shortcode-listing_times', function($args){
   $query = new WP_Query([
       'post_type' => 'time'
   ]);

   $args['query'] = $query;
    
   return $args;
});