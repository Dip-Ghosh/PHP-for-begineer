<?php


function dd($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
}

function urlIs($value): string
{
    return $_SERVER['REQUEST_URI'] == $value ? "bg-gray-900 text-white" : "text-gray-300"  ;
}