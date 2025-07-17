<?php
/*
Plugin Name: Random Quote Footer
Description: Displays a random inspirational quote in the footer on every page load.
Version: 1.0
Author: Vedant Thakare
*/

function rqf_display_random_quote() {
    $quotes = array(
        "Believe in yourself!",
        "The best way to learn is to build.",
        "Every expert was once a beginner.",
        "Never stop exploring.",
        "Code, learn, grow.",
        "Success is the sum of small efforts, repeated."
    );

    $random_quote = $quotes[array_rand($quotes)];

    echo '<p style="text-align: center; padding: 10px; color: gray; font-style: italic;">' . esc_html($random_quote) . '</p>';
}

add_action('wp_footer', 'rqf_display_random_quote');
