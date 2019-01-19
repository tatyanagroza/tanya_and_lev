<?php
function db($sql)
{
    if($connection = mysqli_connect("localhost","php",12345,"groziha"))
    {
        //echo "Подключение к БД успешно";
        mysqli_query($connection,"set names utf8");
    }

    if($sql)
    {
        $result = mysqli_query($connection,$sql);
        return $result;
    }
}

function login($data)
{
    $sql = "SELECT * FROM users where login ='{$data['login']}'";
    $result = db($sql);
    $user = mysqli_fetch_assoc($result);

    if($data['pass'] == $user['password'])
    {
        $_SESSION['loged'] = $user['name'];
        header('Refresh: 0; URL=index.php');
    }

}

function pagelist()
{
    $sql = "SELECT id, menu_name FROM pages";
    $result = db($sql);
    while ($page = mysqli_fetch_assoc($result))
    {
        $pages[] = $page;
    }
    return $pages;
}