<?php
$sql = "SELECT content FROM pages WHERE id='{$_GET['page']}'";
$request= db($sql);
$result = mysqli_fetch_assoc($request);

echo $result['content'];


