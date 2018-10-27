<?php
function db($sql)
{
    $connection = mysqli_connect("localhost","php",12345,"groziha");

    if($sql)
    {
        $result = mysqli_query($connection,$sql);
        return $result;
    }
}
