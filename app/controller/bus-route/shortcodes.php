<?php
$shortcodes = VVerner\Shortcodes::getInstance();
$shortcodes->add('listing_bus_routes');


add_filter('vv_shortcode-listing_bus_routes', function($args){
   $query = new WP_Query([
       'post_type' => 'bus-route'
   ]);

   $args['query'] = $query;
    
   return $args;
});