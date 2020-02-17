<?php

// initializing variables
$username = "";
$email    = "";
$errors2 = array();

// connect to the database
$db = mysqli_connect('mysql.etude.cergy.eisti.fr', 'narettolil', 'ESonNdKXdY', 'narettolil');


// LOGIN USER
if (isset($_POST['login_user'])) {
  $username2 = mysqli_real_escape_string($db, $_POST['username2']);
  $password = mysqli_real_escape_string($db, $_POST['password2']);

  if (empty($username2)) {
  	array_push($errors2, "Pseudonyme requis");
  }
  if (empty($password)) {
  	array_push($errors2, "Mot de passe requis");
  }

  if (count($errors2) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM users WHERE username='$username2' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username2;
  	  $_SESSION['success'] = "Tu est maintenant connecté";
  	  header('location: index.php');
  	}else {
  		array_push($errors2, "Mauvais pseudonyme ou mot de passe");
  	}
  }
}

?>
