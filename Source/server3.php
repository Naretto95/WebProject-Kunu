<?php
session_start();

// initializing variables
$username=$_SESSION['username'];
$username1 = "";
$username2 = "";
$username3 = "";
$errors2 = array();
$success2= array();

// connect to the database
$db = mysqli_connect('mysql.etude.cergy.eisti.fr', 'narettolil', 'ESonNdKXdY', 'narettolil');


// REGISTER USER
if (isset($_POST['login_user'])) {

  $username1 = mysqli_real_escape_string($db, $_POST['username1']);
  $username2 = mysqli_real_escape_string($db, $_POST['username2']);
  $username3 = mysqli_real_escape_string($db, $_POST['username3']);


  if (empty($username1)) { array_push($errors2, "Ancien pseudonyme requis"); }
  if (empty($username2)) { array_push($errors2, "Nouveau pseudonyme requis"); }
  if (empty($username3)) { array_push($errors2, "Confirmation du pseudonyme requis"); }
  if ($username2 != $username3) {
	array_push($errors2, "Les deux pseudonymes ne correspondent pas");
  }
  if ($username1 != $username) {
	array_push($errors2, "Ancien pseudonyme incorrecte");
  }


  $user_check_query = "SELECT * FROM users WHERE username='$username2'";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);

  if ($user) {
    if ($user['username'] === $username2) {
      array_push($errors2, "Ce pseudonyme existe déjà");
    }
  }


  if (count($errors2) == 0) {
  	$query = "UPDATE users SET username='$username2' WHERE username='$username'";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username2;
      $_SESSION['success'] = "Changement effectué";
      array_push($success2, "Changement effectué");
  }
}

?>
