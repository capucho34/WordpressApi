<?php
/**
 * Plugin Name: Movies JSON Endpoint
 * Description: Własny endpoint REST API dla filmów
 * Version: 1.0
 * Author: AI Assistant
 */

add_action('rest_api_init', function () {
    register_rest_route('custom/v1', '/movies', [
        'methods'  => 'GET',
        'callback' => 'get_movies'
    ]);
});

function get_movies() {
    $args = [
        'post_type' => 'movies',
        'posts_per_page' => -1,
    ];

    $query = new WP_Query($args);
    $movies = [];

    while ($query->have_posts()) {
        $query->the_post();

        $movies[] = [
                'id'    => get_the_ID(),
                'title' => get_the_title(),
                'link'  => get_permalink(),
                'year' => get_post_meta(get_the_ID(), 'year', true), 
                'director' => get_post_meta(get_the_ID(), 'director', true), 
                'rating' => get_post_meta(get_the_ID(), 'rating', true),
                'image'   => get_the_post_thumbnail_url(get_the_ID(), 'full'),
        ];
    }

    wp_reset_postdata();
    return $movies;
}