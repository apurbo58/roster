<?php
// session_start();   //commenting because i am starting session in each page which i m using this header page.

require_once 'includes/db.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="Mannat Themes">
        <meta name="keyword" content="">

        <title><?= $title?></title>

        <!-- Theme icon -->
        <link rel="shortcut icon" href="includes/dashboard/assets/images/favicon.ico">

        <link href="includes/dashboard/assets/plugins/morris-chart/morris.css" rel="stylesheet">
        <!-- Theme Css -->
        <link href="includes/dashboard/assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="includes/dashboard/assets/css/slidebars.min.css" rel="stylesheet">
        <link href="includes/dashboard/assets/css/icons.css" rel="stylesheet">
        <link href="includes/dashboard/assets/css/menu.css" rel="stylesheet" type="text/css">
        <link href="includes/dashboard/assets/css/style.css" rel="stylesheet">
        <!-- --  Font Awesome  -- -->
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        <!-- edited for js test -->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">


    </head>

    