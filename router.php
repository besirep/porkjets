<?php


//file for routing the application
//php function to get the uri path from the query string
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
//ex: /aboout (path after the domain name) then "?=string" (query string)
// parse_url($uri);

//associative array for the navigation links
    $routes = [

    '/index' =>'controller/index.php',
    '/about' => 'controller/about.php',
    '/contacts' => 'controller/contacts.php'
    ];

    function routeToController($uri,$routes) {

        // Check if the URI exists in the routes array
        if(array_key_exists($uri, $routes)) {
            require $routes[$uri];
        } else {
            abort();
        }
    };
    
     function abort($statusCode=404){
        http_response_code($statusCode);

        require "views/{$statusCode}.php";
       
        die();
    };

    routeToController($uri, $routes);




