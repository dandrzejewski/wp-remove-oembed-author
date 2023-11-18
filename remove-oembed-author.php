/*
 * Plugin Name: Remove wp-json oEmbed Author Tags
 * Plugin URI: https://github.com/dandrzejewski/wp-remove-oembed-author
 * Description: Removes the "author" and "author-url" entries from wp-json oEmbed data
 * Author: David Andrzejewski
 * Author URI: https://ad8g.net/
 * License: MIT
 * Version: 1.0
 */

 
// Inspired by https://stackoverflow.com/questions/54907869/remove-author-and-author-url-from-the-wordpress-oembed-json-link

function filter_oembed_response_data_author( $data, $post, $width, $height ) {
    //print_r($data);
    unset($data['author_name']);
    unset($data['author_url']);
    return $data;
};
add_filter( 'oembed_response_data', 'filter_oembed_response_data_author', 10, 4 );
