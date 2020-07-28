<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wordpress";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $connS = "Connected successfully / Connexion effectuée avec succès";
  } catch(PDOException $e) {
    $connF = "Connection failed / Echec de la connexion : " . $e->getMessage();
    echo $connS;
}


if (!empty($_POST['forname']) && !empty($_POST['email'])) {
try {
$stmt = $conn->prepare('INSERT INTO formulaire_ia (forname, name, email) VALUES (:forname, :name, :email)');
$stmt->execute(array(
':forname' => $_POST['forname'],
':name' => ($_POST['name']),
':email' => ($_POST['email'])
));
} catch (\Exception $e) {
echo $e->getMessage();
}
}
else {
echo ' Error data ';
}

 ?>
