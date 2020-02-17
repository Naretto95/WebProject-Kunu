<?php

// initializing variables
$username=$_SESSION['username'];
$password_1 = "";
$password_2 = "";
$password_3 = "";
$errors = array();
$success= array();

// connect to the database
$db = mysqli_connect('mysql.etude.cergy.eisti.fr', 'narettolil', 'ESonNdKXdY', 'narettolil');


// REGISTER USER
if (isset($_POST['reg_user'])) {

  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
  $password_3 = mysqli_real_escape_string($db, $_POST['password_3']);


  if (empty($password_1)) { array_push($errors, "Ancien mot de passe requis"); }
  if (empty($password_2)) { array_push($errors, "Nouveau mot de passe requis"); }
  if (empty($password_3)) { array_push($errors, "Confirmation du mot de passe requis"); }
  if ($password_2 != $password_3) {
	array_push($errors, "Les deux mots de passe ne correspondent pas");
  }

  if (count($errors) == 0) {
    $password = md5($password_1);
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {
        $password= md5($password_2);
        $query = "UPDATE users SET password='$password' WHERE username='$username'";
        mysqli_query($db, $query);
        $_SESSION['success'] = "Changement effectué";
        array_push($success, "Changement effectué");
    }else {
        array_push($errors, "Ancien mot de passe incorrecte");
    }
  }
}

?>
