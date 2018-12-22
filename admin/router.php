<?php
if($_SESSION['loged'])
{

}
else
{
    require_once "login_form.php";
}

if ($_POST)
{
    login($_POST);
}
