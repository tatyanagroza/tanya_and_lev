<?php
if(!$_SESSION['loged'])
{

    if ($_POST)
    {
        login($_POST);
    }
    else
    {
        require_once "views/login_form.php";
    }
}
else
{
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
            case 'add':
                require_once "views/VPageAdd.php";
                break;
        }
    }

    if ($_POST)
    {
        if ($_GET)
        {
            switch ($_GET['page'])
            {
                case 'add':
                    pageadd($_POST);
                    break;
            }
        }
    }
}



