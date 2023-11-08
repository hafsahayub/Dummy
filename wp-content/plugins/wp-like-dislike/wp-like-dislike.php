<?php
/*
Plugin Name: wp like/dislike
Plugin URI: http://localhost:8080/dummy/
Author: dummy.com
Author URI: http://localhost:8080/dummy/
Description: Simple post like and dislike system.
Version
*/

function wp_publish_send_mail($ID) {
    $post = get_post($ID);
    $author = $post->post_author;
    $name = get_the_author_meta('display_name', $author);
    $email = get_the_author_meta('user_email', $author);
    $title = $post->post_title;
    $permalink = get_permalink($ID);
    $edit = get_edit_post_link($ID);
    $to = sprintf('%s <%s>', $name, $email);
    $subject = sprintf('Published: %s', $title);
    $message = sprintf("Congratulations, %s! Your article \"%s\" has been published.\n\n", $name, $title);
    $message .= sprintf("View: %s\n\n", $permalink);
    $headers = 'From: Your Name <your_email@example.com>';

    wp_mail($to, $subject, $message, $headers);
}
add_action('publish_post', 'wp_publish_send_mail');
