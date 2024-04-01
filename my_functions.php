<?php

function myPost($key)
{
    if(isset($_POST[$key]) == true)
    {
        return $_POST[$key];
    }
    return '';
}
/**
 * kode lain yg sangat berbaris-baris
 */
if(function_exists('myPost') ==  false)
{
    function myPost($key)
    {
        return 'mypost v2';
    }
}