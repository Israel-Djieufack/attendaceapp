<?php
$path = $_SERVER['DOCUMENT_ROOT'];
require_once "database.php";

$dbo = new Database();

// Vérifier si la connexion est bien établie
if (!$dbo->conn) {
    die("Erreur: Connexion à la base de données non établie.");
}

$c = "CREATE TABLE student_details (
    id INT AUTO_INCREMENT PRIMARY KEY,
    roll_no VARCHAR(20) UNIQUE,
    name VARCHAR(50)
)";

try {
    $s = $dbo->conn->prepare($c);
    $s->execute();
    echo "<br>Table student_details créée";
} catch (PDOException $e) {
    echo "<br>Error: Table student_details not created - " . $e->getMessage();
}

$c = "CREATE TABLE student_details (
    id INT AUTO_INCREMENT PRIMARY KEY,
    roll_no VARCHAR(20) UNIQUE,
    name VARCHAR(50)
)";

try {
    $s = $dbo->conn->prepare($c);
    $s->execute();
    echo "<br>Table student_details créée";
} catch (PDOException $e) {
    echo "<br>Error: Table student_details not created - " . $e->getMessage();
}

?>