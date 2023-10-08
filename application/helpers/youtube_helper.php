<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('get_youtube_video_id')) {
    function get_youtube_video_id($url) {
        parse_str(parse_url($url, PHP_URL_QUERY), $query);
        return isset($query['v']) ? $query['v'] : false;
    }
}
