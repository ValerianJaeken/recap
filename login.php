<?php 


	try {
		$bdd = new PDO('mysql:host=localhost;dbname=training', 'root', 'root');
		// foreach($bdd->query('SELECT * from logins') as $row) {
		// print_r($row);
		// }

	}
	 catch (PDOException $e) {
		print "Erreur !: " . $e->getMessage() . "<br>";
		die();
	}

	$login = $_POST['login'];
	$password = $_POST['password'];
	$req = $bdd->prepare('SELECT pseudo,password FROM userbase WHERE pseudo = :login');
	$req->execute(array(

		'login'=>$login

	));


	$data2 = $req->fetch();

	if(empty($data2)){
		echo '<body onLoad="alert(\'Membre non reconnu...\')">';
		echo '<meta http-equiv="refresh" content="0;URL=index.php">';
	}else{
		while($data = $req->fetch()){
			$pass=$data['password'];

			$result = password_verify($password,$pass);

			if($result){
				session_start();
				$_SESSION['pseudo'] = $_POST['pseudo'];
				$_SESSION['password'] = $pass;

				var_dump($result);

				//header("location:index.php");
			}else{
				echo '<body onLoad="alert(\'Wrong password hahahahahaha...\')">';
				echo '<meta http-equiv="refresh" content="0;URL=index.php">';
			}
		
		}
	}

	



 ?>