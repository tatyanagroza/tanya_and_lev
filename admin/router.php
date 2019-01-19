<?php
if(!$_SESSION['loged'])
{
    require_once "views/login_form.php";
}

if ($_POST)
{
    login($_POST);
}

if ($_GET)
{
    switch ($_GET['page'])
    {
        case 'list':
            require_once "views/VPageList.php";
            break;
        case 'logout':
            unset($_SESSION['loged']);
            header('Refresh: 0; URL=index.php');
            break;
    }
}