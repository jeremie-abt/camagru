<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <title>Tuto MVC</title>
    <meta http-equiv="Content-Language" content="fr" />
    <meta charset="UTF-8">
    <link rel="stylesheet" href="views\css\style.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>

<body>

<h1>Tuto camagru mvc</h1>

<?php
$controller = new jabt\controller\AuthController();
$controller->display_menu();
?>

<div id="centre">