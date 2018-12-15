<?php
if($_GET['page'])
{
    $id=$_GET['page'];
}
else
{
    $id = 1;
}

$sql = "SELECT content FROM pages WHERE id='{$id}'";
$request= db($sql);
$result = mysqli_fetch_assoc($request);

echo $result['content'];


