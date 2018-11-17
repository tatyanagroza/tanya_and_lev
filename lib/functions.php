<?php
function db($sql)
{
    if($connection = mysqli_connect("localhost","php",12345,"groziha"))
    {
        echo "Подключение к БД успешно";
        mysqli_query($connection,"set names utf8");
    }

    if($sql)
    {
        $result = mysqli_query($connection,$sql);
        return $result;
    }
}
