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
    $sql = "SELECT id, menu_name, created_at, updated_at FROM pages";
    $result = db($sql);
    while ($page = mysqli_fetch_assoc($result))
    {
        $pages[] = $page;
    }
    return $pages;
}

function pageadd($data)
{
    $date = time();
    $sql = "INSERT INTO pages (menu_name, content, created_at) VALUES ('{$data['menu_name']}','{$data['content']}','{$date}')";
    if (db($sql))
    {
        echo "Страница успешно добавлена на сайт";
    }
}

function getDay ($day)
{

    $days['Sunday'] = "Воскресенье";
    $days['Monday'] = "Понедельник";
    $days['Tuesday'] = "Вторник";
    $days['Wednesday'] = "Среда";
    $days['Thursday'] = "Четверг";
    $days[' Friday'] = "Пятница";
    $days['Saturday'] = "Суббота";

    return $days[$day];

}

