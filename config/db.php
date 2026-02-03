<?php
// app/config/db.php
try {
    $host = "localhost";
    $db_name = "ceg_fm";
    $username = "root";
    $password = "";

    $pdo = new PDO(
        "mysql:host=$host;dbname=$db_name;charset=utf8mb4",
        $username,
        $password,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false
        ]
    );
} catch(PDOException $e) {
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}
?>
<!-- 
 DSN : Data Source Name. C'est généralement le seul qui change en fonction du 
 type de base de données auquel on se connecte.
 -->