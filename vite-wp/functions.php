<?php
/**
 * @package v_1.0.1
 */

add_action('rest_api_init', 'register_rest_images' );
function register_rest_images(){
    register_rest_field( array('post'),
        'fimg_url',
        array(
            'get_callback'    => 'get_rest_featured_image',
            'update_callback' => null,
            'schema'          => null,
        )
    );
}
function get_rest_featured_image( $object, $field_name, $request ) {
    if( $object['featured_media'] ){
        $img = wp_get_attachment_image_src( $object['featured_media'], 'app-thumb' );
        return $img[0];
    }
    return false;
    
}
// set_post_thumbnail_size( 150, 150, true );


// add_action('rest_api_init', 'create_api_posts_meta_field');
// function create_api_posts_meta_field() {
//     register_rest_field('news', 'feature_image', array(
//         'get_callback' => 'get_post_meta_for_api',
//         'update_callback' => null,
//         'schema' => null,
//     )
//     );
// }
// function get_post_meta_for_api( $object ) {
//     $post_id = $object['id'];
//     $post_meta = get_post_meta($post_id);
//     $post_image = get_post_thumbnail_id($post_id);
//     $post_meta["src"] = wp_get_attachment_image_src($post_image)[0];
//     return $post_meta;
// }



// add_action('rest_api_init', 'register_rest_images' );
// function register_rest_images(){
//     register_rest_field( array('post'),
//         'fimg_url',
//         array(
//             'get_callback'    => 'get_rest_featured_image',
//             'update_callback' => null,
//             'schema'          => null,
//         )
//     );
// }
// function get_rest_featured_image( $object, $field_name, $request ) {
//     if( $object['featured_media'] ){
//         $img = wp_get_attachment_image_src( $object['featured_media'], 'medium' );
//         return $img[0];
//     }
//     return false;
// }
