<?php

include "db.php";

// todo 1: print de ingevoerde username en wachtwoord op aparte regels. Geef duidelijk aan welk van de twee de username en het wachtwoord is.

   echo "User: " . $_POST['username'] . "<br>";
   echo "Password: " . $_POST['password'] . "<br>";

// todo 2: maak twee variabele aan en sla de ingevoerde username en wachtwoord op in deze variabelen.

$username = $_POST['username'];
$password = $_POST['password'];

$myConn = new DB;

// todo 3: include de variabele met de username in de onderstaande query, zodat deze alle data kan ophalen voor de ingevoerde username.
$query = "SELECT * FROM user WHERE username='$username' ";

$result = $myConn->executeSQL($query);

// todo 4: vermeldt wat de datatype van variabele $result is. Dit kun je met behulp van een ingebouwde php functie doen.

echo "De datatype van result is " . gettype($result);

if (!empty($result)) { 
    echo "<br> Login as $username <br>";
    // todo 5: let uit wat de ingebouwde php functie print_r() doet en gebruik het om de result-variabele te printen.
    //print_r print de raw array uit.
    print_r($result);
} else {
    echo "<br> Invalid login! <br>";
}

?>