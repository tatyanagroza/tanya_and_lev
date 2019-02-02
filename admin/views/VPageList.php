<?php
$pages = pagelist();
?>
    <table class="table">
        <tr><td>Название</td><td>Редактировать</td><td>Удалить</td><td>Создана</td><td>Изменена</td></tr>
        <?php
        foreach ($pages as $page)
        {
            $day = getDay(date("l",$page['created_at']));
            ?>
            <tr><td><?=$page['menu_name']?></td><td><img src="../img/edit.png" width="30px"></td><td><img src="../img/trash.png" width="30px"></td><td><?php if ($page['created_at']){ echo $day.date(" d m Y в H:i:s",$page['created_at']);};?></td><td><?php if ($page['updated_at']){ echo $day.date(" d m Y в H:i:s",$page['updated_at']);}?></td></tr>
            <?php
        }

        ?>
    </table>
