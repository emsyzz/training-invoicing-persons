<?php

header('Content-type: text/html; charset=utf-8');

function __autoload($className)
{
    $namespaces = explode("\\", $className);
    $class = array_pop($namespaces);

    $path = dirname(__FILE__) .'/'. $class .'.php';
    if(file_exists($path))
    {
        require_once($path);
    }
}

include('test.php');
