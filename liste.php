<?php

include 'connect.php';
$bdd=mysqli_connect(SERVER, USER, PASS, DB);

$resultat = mysqli_query($bdd, "SELECT * FROM users");

echo '<h1>Voici le contenu de la base de données</h1>'; // *** tu avais écrit <h> (et pas <h1> ou h2, ..) et j'ai sorti la ligne de la boucle
echo '<hr>'; // *** presentation type minimum syndical

while($data = mysqli_fetch_assoc($resultat))
{
    echo '<p>'.$data['nom'].'</p>';
    echo '<p>'.$data['email'].'</p>';
    echo '<p>'.$data['tel'].'</p>';
    echo '<p>'.$data['message'].'</p>';
    echo '<p>'.$data['age'].'</p>';
    echo '<p>'.$data['happy'].'</p>';
	echo '<hr>'; // *** presentation type minimum syndical
}

