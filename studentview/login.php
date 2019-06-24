<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="javascriptLogin.js"></script>
    <title>Panel studenta</title>

    <!-- add style -->
    <style>
        body {
            background-image: url("images/login-background.jpg");
            background-size: cover;
        }

        .login {
            margin-top: 100px;
            border-top-radius: 20;
        }

        .login .card {
            background: rgba(0, 0, 0, .6);
            border-radius: 6px;
        }

        .login label {
            font-size: 16px;
            color: #ccc;
        }

        .login input {
            color: white;
        }

        .login .card-action {
            border-top-left-radius: 6px;
            border-top-right-radius: 6px;
        }
    </style>
</head>
<body onload="initialize()">

<nav>
    <img src="images/Logo.jpg" style="height: 100%;">
    <a href="#" class="brand-logo center">Kolokwium</a>

</nav>

<?php
session_start();
if(isset($_SESSION['error'])){
    echo "<script type='text/javascript'>toast('".$_SESSION['error']."')</script>";
    session_destroy();
}
?>

    


<div class="row login">
    <div class="col s12 l4 offset-l4">
        <div class="card">
            <div class="card-action red white-text">
                <h3 class="center-align">
                    Zaloguj się
                </h3>
            </div>

            <div class="card-content">
                <form action="actions/confirmation.php" method="POST">
                    <div class="form-group">
                        <label for="firstname">Imię</label>
                        <input type="text" id="firstname" name="firstname" required>
                    </div>
                    <br>

                    <div class="form-group">
                        <label for="name">Nazwisko</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <br>
                    
                    <div class="form-group">
                        <label for="index">Indeks studenta</label>
                        <input type="text" id="index" name="index" required>
                    </div>
                    <br>

                    <div class="form-group">
                        <label for="password">Hasło do kolokwium</label>
                        <input type="text" id="password" name="password" required>
                    </div>
                    <br>

                    <div class="form-group right-align">
                        <button type="submit" id="submit" class="btn-large red">Wyślij</button>
                    </div>
                </form>


            </div>
        </div>
    </div>
</div>


</body>
</html>