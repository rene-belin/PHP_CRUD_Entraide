<?php
require_once("config.php");

try {
    $dbh = new PDO(
        "mysql:host={$config['DB_HOST']};
        dbname={$config['DB_NAME']}",
        $config['DB_USER'],
        $config['DB_PASSWORD']
    );

    // Set PDO to throw exceptions on error
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";

} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() ."<br>";
}
?>