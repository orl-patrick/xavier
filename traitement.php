<?php

include 'connect.php';
$bdd=mysqli_connect(SERVER, USER, PASS, DB);
// Change character set to utf8
mysqli_set_charset($bdd,"utf8");


$nom = $_POST['nom'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$message = $_POST['message'];
$age = $_POST['age']; // *** tu avais écrit $POST (manquait le _ )
$happy = $_POST['happy'];

var_dump($_POST);

mysqli_query($bdd, "INSERT INTO users (nom, email, tel, message, age, happy) VALUES ('$nom','$email','$tel','$message','$age','$happy')");

header('Location: index.php'); // *** Il faut retourner dans index !

