 <?php


 include 'connect.php';
 $bdd=mysqli_connect(SERVER, USER, PASS, DB);
 $textButton = 'Envoyer';
 // Change character set to utf8
 mysqli_set_charset($bdd,"utf8");

$nom = $email = $tel = $message = $age = $happy = '';
$id = 0; //  *** pour le fun car pas utilisé ici.
// Note : ce n'est pas un pb d'initialiser id en string, même s'il sera utilisé en INT (il sera automatiquement transtypé)
// mais cêla me semble plus propre pour la compréhension d'initialiser les variables dans le bon type.


 echo '

<form method="POST" action="traitement.php">

    <fieldset>
        <legend>Tes coordonnées</legend>
        
        <label for="nom">Ton nom</label>
        <input type="text" name="nom"   id="nom" />
        
        <label for="email">Ton email</label>
        <input type="email" name="email" id="email" />
        
        <label for="tel">Téléphone</label>
        <input type="tel" name="tel" id="tel">
        
    </fieldset>
    
    <fieldset>
        <legend>Ton message</legend>
        
        <label for="message">Ecris avec tes petits doigs ce que tu penses</label>
        <textarea name="message" rows="10" cols="25"></textarea>
    </fieldset>
    
    <fieldset>
        <legend>Petit sondage</legend>
        
        <label for="age">Quel est ton âge ?</label>
        <select name="age" id="age"</fieldset>
            <option value="12_18">12-18</option>
            <option value="19_35">19-35</option>
            <option value="36_60">36-60</option>
            <option value="61_99">61_99</option>
        </select>
        
        <p>Êtes-vous:</p>
            <input type="radio" name="happy" value="content" id="content"/>
            <label for="content">content</label> <br/>
            
            <input type="radio" name="happy" value="pacontent" id="pacontent" />
            <label for="pacontent">pas longtemps</label> <br />
            
    </fieldset>
    
    <input type="submit" value='.$textButton.'>
    
</form> 

<p><a href="liste.php">Liste des messages et leurs auteurs</a></p>

 '
 
 ?>


