<?php

// This is a controller file that contains the logic for the blog template.
// It consists of a single function that returns an associative array with
// template variables.
//
// Learn more about controllers at:
// https://getkirby.com/docs/developer-guide/advanced/controllers

return function($site, $pages, $page) {

    $perpage  = $page->perpage()->int();
    if(strpos($_SERVER['REQUEST_URI'], 'tag') ){
        $articles = $page->children()
                       ->visible()
                       ->filterBy('tags', explode(':', $_SERVER['REQUEST_URI'])[1], ',' )
                       ->paginate(($perpage >= 1)? $perpage : 5);
    }else{
        $articles = $page->children()
                       ->visible()
                       ->paginate(($perpage >= 1)? $perpage : 5);
    }

    $tags = $page->children()->visible()->pluck('tags', ',', true);

    return [
    'articles'   => $articles,
    'tags' => $tags,
    'pagination' => $articles->pagination()
    ];

};
