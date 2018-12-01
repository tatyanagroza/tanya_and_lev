<?php
$result = db("SELECT id, menu_name FROM pages");

while($row = mysqli_fetch_assoc($result))
{
    $menu[]=$row;
}


foreach ($menu as $value)
{
    echo "<a href=\"index.php?page={$value['id']}\">{$value['menu_name']}</a>";
}

?>