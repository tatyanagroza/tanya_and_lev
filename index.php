<?php
require_once "lib/functions.php";
require_once "header.php";
?>
<div id="site">
    <div class="row">
        <div class="col-md-2"><img src="img/logotip.png" width="150"> </div>
        <div class="col-md-10 header"><h1> В гостях у БЭтмЭна</h1></div>
    </div>
    <div class="row">
        <div class="col-md-2">
            <?php require_once "menu.php"; ?>
        </div>
        <div class="col-md-10">
            <?php require_once "content.php"; ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <?php require_once "footer.php"; ?>
        </div>
    </div>
</div>




