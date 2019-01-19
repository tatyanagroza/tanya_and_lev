<?php
$pages = pagelist();
?>
    <table class="table">
        <tr><td>Название</td><td>Редактировать</td><td>Удалить</td><td>Создана</td><td>Изменена</td></tr>
        <?php
        foreach ($pages as $page)
        {
            ?>
            <tr><td><?=$page['menu_name']?></td><td><img src="../img/edit.png" width="30px"></td><td><img src="../img/trash.png" width="30px"></td><td></td><td></td></tr>
            <?php
        }
        ?>
    </table>
