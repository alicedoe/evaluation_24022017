<?php

$dsn = 'mysql:dbname=CNAM;host=127.0.0.1';
$user = 'root';
$password = '';

$request = $_POST['msg'];

try {
    $dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
}

$sth = $dbh->prepare($request);
$sth->execute();
$result = $sth->fetchAll();

$dbh =null;	
	
echo json_encode($result);
?>