
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">  <!--dla ikonek z materialize -->
    <title>Prof ustawienia</title>
</head>

<?php $link = new mysqli("localhost", "root", "", "nowa");

		/* Kontrola połaczenia */
		if ($link->connect_errno) {
		echo "Błąd połączenia nr: " . $link->connect_errno;
		echo "Opis błędu: " . $link->connect_error;
		exit();
		}

		/* Ustawienie strony kodowej */
		$link->query('SET NAMES utf8');
		$link->query('SET CHARACTER SET utf8');
		$link->query("SET collation_connection = utf8_polish_ci");
    ?>
    
    <?php 
            if(isset($_POST['password']))
            {
                $result = $link->query ("UPDATE ustawienia SET haslo='".$_POST['password']."'");
            }
            if(isset($_POST['time']))
            {
                $result = $link->query ("UPDATE ustawienia SET czas='".$_POST['time']."'");
            }
        $link->close();
	?>

<body>
    
    <div id="nav-mobile" class="sidenav sidenav-fixed" style="transform: translateX(0px);">
        <div class="container center">
                <a href="index.html"><img  src="KołoLotto1_edit2.jpg"></a>
        </div>
        <ul>
            <li>
                <h5 class="center indigo-text">Panel nauczyciela</h5>
                <div class="divider"></div>
            </li>
            <li>
                    <h5 class="center" id="czas">Czas 2:30h</h5>
                    <div class="divider"></div>
                </li>
            <li class="active indigo">
                <a href="/"><i class="material-icons">settings</i>Ustawienia</a>
            </li>
            <li class="bold">
                <a href="profview_zadania.html"><i class="material-icons">assignment</i>Panel zestawów zadań</a>
            </li>
            <li class="bold">
                <a href="lista.php"><i class="material-icons">person</i>Lista uczestników</a>
            </li>
            <div class="divider"></div>
            <li>
                <div class="container center">
                    <a class="waves-effect waves-light btn green" id="start">Zacznij</a>
                    <a class="waves-effect waves-light btn red" id="stop">Zakoncz</a>
                </div>
            </li>
        </ul>
    </div>

    <div class="row">
        <div class="col s10 offset-s2 indigo-text"><h3 class="header center">Ustawienia</h3>
            <div class="divider"></div>
        </div>
        <form class="col s10 offset-s4" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="section">
                    <div class="input-field col s8">
                        <input placeholder="Podaj haslo" id="passwd" name="password" type="password" class="validate" required>
                        <label for="passwd">Haslo do kolokwium</label>
                    </div>
                
                    <div class="input-field col s8">
                            <input placeholder="Podaj czas kolokwium" id="time" name="time" type="text" class="timepicker">
                            <label for="time">Czas kolokwium</label>
                    </div>
                    <div class="input-field col s8">
                        <button class="btn waves-effect waves-light" type="submit" id="zatwierdz">Zatwierdź
                                <i class="material-icons right">send</i>
                        </button>
                    </div>
                    
                </div>
            </div>
        </form>
    </div>

    <script type="text/javascript" src="script/settings_script.js"></script>
    <!-- <script type="text/javascript" src="script/global_script.js"></script> -->
</body>
</html>