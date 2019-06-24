<?php
session_start();
if(!isset($_SESSION['index'])){
    header('Location: ./login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">  <!--dla ikonek z materialize -->
    <title>Kolokwium</title>
</head>
<body>
<body>

<div id="nav-mobile" class="sidenav sidenav-fixed" style="transform: translateX(0px);">
    <div class="container center">
        <a href="/"><img  src="images/KołoLotto.jpg"></a>
    </div>
    <ul>
        <li>
            <h5 class="center indigo-text">Panel Studenta</h5>
            <div class="divider"></div>
        </li>
        <li>
            <h5 class="center">Czas 2:30h</h5>
            <div class="divider"></div>
        </li>
        <li class="bold">
            <a href="/"><i class="material-icons">file_download</i>Pobierz zestaw zadań</a>
        </li>
        <li class="bold">
            <a href="/"><i class="material-icons">file_upload</i>Dodaj rozwiązanie</a>
        </li>
        <div class="divider"></div>
        <li>
            <div class="container center">

                <a class="waves-effect waves-light btn red" href="actions/logout.php")>Zakoncz</a>
            </div>
        </li>
    </ul>
</div>

<div class="row">
    <a href="#" data-target="nav-mobile" class="top-nav sidenav-trigger full hide-on-large-only"><i class="material-icons">menu</i></a>
    <div class="col s10 offset-s2 indigo-text"><h3 class="header center">Kolokwium</h3>
        <div class="divider"></div>
        <div class="section black-text"><h5 class="center">Informacje na temat kolokwium</h5></div>
    </div>
</div>
</body>
</html>