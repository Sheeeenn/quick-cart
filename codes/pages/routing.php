<?php

$user_link = parse_url($_SERVER['REQUEST_URI'])["path"];

switch($user_link){

    case "/":
        require("pages/home.php");
        break;
    case "/register":
        require("pages/register.php");
        break;
    case "/login":
        require("pages/login.php");
        break;
    default:
        http_response_code(404);
        break;
        
}

?>