<?php // functions.php

    add_action( 'wp_enqueue_scripts', function() {
    wp_enqueue_script('vue', get_template_directory_uri() . '/assets/js/lib/vue.js', null, null, true); // change to vue.min.js for production
    wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', 'vue', null, true);
    });
?>
