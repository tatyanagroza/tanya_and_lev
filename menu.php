<?php
$result = db("SELECT menu_name FROM pages");

while($row = mysqli_fetch_assoc($result))
{
    $menu[]=$row;
}


foreach ($menu as $value)
{
    echo "<a href=\"index.php?\">".$value["menu_name"]."</a>";
}

?>