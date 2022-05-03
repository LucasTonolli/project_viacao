<?php defined('ABSPATH') || exit('No direct script access allowed');

$shortcodes = VVerner\Shortcodes::getInstance();
$shortcodes->add('listing_bus_stop');


add_filter('vv_shortcode-listing_bus_stop',function($args){
    $query = new WP_Query([
        'post_type' => 'bus-stop'
    ]);

    $args['query'] = $query;

    return $args;
});