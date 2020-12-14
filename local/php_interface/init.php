<?php

function dd($data)
{
    echo '<pre>' . print_r($data, 1) . '</pre>';
}

function cutStr($value, $length)
{
    $tmp = substr($value, 0, $length);
    if (strlen($value) > $length) {
        $tmp .= '...';
    }
    return $tmp;
}