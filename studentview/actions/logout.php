<?php
    session_start();
    require_once('connect.php');

    $dbs = @new mysqli($host, $user, $password, $database);

			if($dbs->connect_errno != 0){
				echo "Error:".$dbs->connect_errno;
            }
			else{
                $index = $_SESSION['index'];
                $dbs->query('SET NAMES utf8');
				$dbs->query('SET CHARACTER SET utf8');
                $dbs->query("SET collation_connection = utf8_polish_ci");

                $sql = "DELETE FROM studenci WHERE numer = $index";
                if($result = @$dbs->query($sql)){
                    $dbs->close();
                    header('Location: ../login.php');
                }
            }

?>
                
