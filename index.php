<!--<!doctype html>-->
<!--<html lang="en">-->
<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <meta name="viewport"-->
<!--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">-->
<!--    <meta http-equiv="X-UA-Compatible" content="ie=edge">-->
<!--    <title>Document</title>-->
<!--</head>-->
<!--<body>-->
<!--<form method="post" enctype="multipart/form-data" action="?page=search" class="form-inline my-2 my-lg-0">-->
<!--    <input class="form-control mr-sm-2" name="search" type="search" placeholder="Search" aria-label="Search">-->
<!--    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>-->
<!--</form>-->
<!--</body>-->
<!--</html>-->




<?php
session_start();
if (!$_SESSION['user']){
    header('location:login.php');
}
require_once __DIR__ . "/vendor/autoload.php";


$Otocontroller = new \App\controller\OtoController();
$page = (isset($_REQUEST['page']))?$_REQUEST['page']:NULL;
switch ($page){
    case 'add':
        $Otocontroller->addOto();
        break;
    case 'edit':
        $Otocontroller->edit();
        break;
    case 'delete':
        $Otocontroller->delete();
        break;

    case 'search':
        $Otocontroller->search();
        break;
    default:
        $Otocontroller->show();
        break;
}
