<?php
$db = new PDO('mysql:host=localhost;dbname=puppies', 'root', '');
$statement = $db->prepare("INSERT INTO animals (PuppyName, BreedID, Description, Price, Picture) VALUES (:PuppyName, :BreedID, :Description, :Price, :Picture)");

$statement->bindValue('PuppyName', $_GET['puppyName']);
$statement->bindValue('BreedID', $_GET['breedID']);
$statement->bindValue('Description', $_GET['description']);
$statement->bindValue('Price', $_GET['price']);
$statement->bindValue('Picture', $_GET['picture']);
$statement->execute();

include "index.php";
