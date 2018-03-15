<?php 

	//header("location:index.php");
	
	$bdd = new PDO('mysql:host=localhost;dbname=training', 'root', 'root');

	$pseudo = $_POST['pseudo'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$passhash = password_hash('$password',PASSWORD_DEFAULT, ['cost' => 10]);



	$req = $bdd->prepare('SELECT * FROM userbase WHERE pseudo = :pseudo');

	$req->execute(array(

		'pseudo'=>$pseudo,
		'password'=>$password
	
	));

	$data = $req->fetch();

	if(!empty($data)){
		//window.alert('your username or email already exists dumbass. Goodbye');

		echo '<body onLoad="alert(\'Username already exists...\')">';
		echo '<meta http-equiv="refresh" content="0;URL=index.php">';
	}else{
		$req2 = $bdd->prepare('INSERT INTO userbase(pseudo,email,password) VALUES(:pseudo,:email,:password)');
		$req2->execute(array(

			'pseudo' => $pseudo,
			'email' => $email,
			'password'=> $passhash

		));

		session_start();
		$_SESSION['pseudo'] = $_POST['pseudo'];
		$_SESSION['password'] = $passhash;

		header("location:index.php");
	}

 ?>