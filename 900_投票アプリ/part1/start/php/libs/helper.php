<?php

function get_param($key, $default_val, $is_post = true){
    $arry = $is_post ? $_POST : $GET;
    return $arry[$key] ?? $default_val;
}