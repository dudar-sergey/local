<?php
include_once('header.php');
include_once ('DB.php');
if($_SESSION['admin'] == true)
{

    echo "<p class='text-center'>Добро пожаловать,".$_SESSION['login']."</p>";
}
else{
    echo "<p class='text-center'>Нет доступа</p>";
}
