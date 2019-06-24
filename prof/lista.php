<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">  <!--dla ikonek z materialize -->
    <title>Prof lista</title>
</head>

<?php
//session_start(); 
$link = new mysqli("localhost", "root", "", "nowa");

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
            <li class="bold">
                <a href="ustawienia.php"><i class="material-icons">settings</i>Ustawienia</a>
            </li>
            <li class="bold">
                <a href="profview_zadania.html"><i class="material-icons">assignment</i>Panel zestawów zadań</a>
            </li>
            <li class="active indigo">
                <a href="/"><i class="material-icons">person</i>Lista uczestników</a>
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
        <div class="col s10 offset-s2 indigo-text"><h3 class="header center">Lista uczestników</h3>
            <div class="divider"></div>
        </div>
        <div class="col s10 offset-s2 ">
            <div class="container">
            <?php
                $result = $link->query ("SELECT count(*) AS ile FROM studenci");
                $row=$result->fetch_assoc();

                if($row['ile']==0)
                    { echo '<b>Brak uczestników</b>';	}
                else
                {
                $result = $link->query ("SELECT * FROM studenci GROUP BY id");
                echo'<table>';
                    echo'<thead>';
                        echo'<tr>';
                            echo'<th>Imie</th>';
                            echo'<th>Nazwisko</th>';
                            echo'<th>Indeks</th>';
                        echo'</tr>';
                    echo'</thead>';

                    echo'<tbody>';
                        
                while($row = $result->fetch_assoc())
                    {
                        
                        echo'<tr>';
                            echo'<td>'.$row['imie'].'</td>';
                            echo'<td>'.$row['nazwisko'].'</td>';
                            echo'<td>'.$row['numer'].'</td>';
                        echo'</tr>';
                    
                    }
                    echo'</tbody>';
                echo'</table>';
                }
                 $link->close();
                ?>
            </div>    
        </div>   
    </div>

    <script type="text/javascript" src="script/global_script.js"></script>
</body>
</html>