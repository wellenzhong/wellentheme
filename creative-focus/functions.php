<?php
/**
 * creativefocus engine room
 *
 * @package creativefocus
 */

/**
 * Initialize all the things.
 */

require get_template_directory() . '/inc/init.php';

function getPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta ( $postID, $count_key, true );
    if ($count == '') {
        delete_post_meta ( $postID, $count_key );
        add_post_meta ( $postID, $count_key, '0' );
        return "0 View";
    }
    return $count . ' Views';
}
 
function setPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta ( $postID, $count_key, true );
    if ($count == '') {
        $count = 0;
        delete_post_meta ( $postID, $count_key );
        add_post_meta ( $postID, $count_key, '0' );
    } else {
        $count ++;
        update_post_meta ( $postID, $count_key, $count );
    }
}
