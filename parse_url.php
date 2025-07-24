<?php
    $parsed_url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

     $url = explode('/', trim($parsed_url, '/'));

     $keys = ['folder','type_of_user','filename'];

     $result = array_combine($keys, $url);

     $type_of_user =  $result['type_of_user'];
?>