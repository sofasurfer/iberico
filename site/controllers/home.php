<?php



return function($site, $pages, $page) {

    /*
        Get Instagram Feed
    */
    define('INSTAGRAM_ACCESSTOKEN','6176509862.d7cdac9.ddfd5e4607264db5b05443f6496b2010');

    $url = "https://api.instagram.com/v1/users/self/media/recent/?access_token=".INSTAGRAM_ACCESSTOKEN;
    if (!function_exists('curl_init')){ 
        die('CURL is not installed!');
    }
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $json = curl_exec($ch);
    curl_close($ch);



    return [
    'socialfeed'   => json_decode($json)
    ];

};