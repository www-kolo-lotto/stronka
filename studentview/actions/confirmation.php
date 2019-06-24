<?php
	session_start();

	if(isset($_POST['firstname']) || isset($_POST['name']) || isset($_POST['index'])){
		require_once('connect.php');

		if($_SERVER["REQUEST_METHOD"] == "POST")
		{
		
			$dbs = @new mysqli($host, $user, $password, $database);

			if($dbs->connect_errno != 0){
				echo "Error:".$dbs->connect_errno;
			}
			else{
				$first = $_POST['firstname'];
				$name = $_POST['name'];
				$index = $_POST['index'];
				$password = $_POST['password'];
				$dbs->query('SET NAMES utf8');
				$dbs->query('SET CHARACTER SET utf8');
				$dbs->query("SET collation_connection = utf8_polish_ci");
				$sql = "SELECT * FROM ustawienia WHERE haslo='$password' ";

				if($result = @$dbs->query($sql)){
					$password_num = $result->num_rows;
					
					if($password_num == 1){
						$sql = "SELECT * FROM studenci WHERE numer='$index'";

						if($result = @$dbs->query($sql)){
							$index_num = $result->num_rows;

							if($index_num > 0){
								$_SESSION['error'] = 'Uzytkownik o indeksie '.$index.' jest juz zalogowany!';
								$dbs->close();
								header("Location: ../login.php");
							}else{

								$dbs->query("INSERT INTO studenci(imie, nazwisko, numer) VALUES('$first', '$name', '$index')");
								$_SESSION['index'] = $index;
								$dbs->close();
								header("Location: ../studentview.php");	

							}
						}

						
					}else{
						$_SESSION['error'] = 'Bledne hasło';
						header("Location: ../login.php");
					}
				}
				
				$dbs->close();
			}

		
		}
	}
	

?>