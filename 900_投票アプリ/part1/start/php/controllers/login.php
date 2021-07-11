<?php

namespace controller\login;

function get()
{
    require_once SOURCE_BASE . 'views/login.php';
}

function login($id, $pwd)
{
}
function post()
{
    //三項演算子
    $id = isset($_POST['id']) ? $_POST['id'] : '';
    //null型演算子 上と同じ意味
    $pwd = $_POST['pwd'] ?? '';
    $result = login($id, $pwd);
}
