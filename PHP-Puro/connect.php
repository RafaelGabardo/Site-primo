<?php  
    $dbtype = 'mysql';
    $dbname = 'site-gus';
    $username = 'root';
    $servername = 'localhost';
    $password = '';
    $options = [
        PDO::ATTR_PERSISTENT => TRUE,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, 
    ];

    $pdoConnection = $dbtype . ':host=' . $servername . ';dbname=' . $dbname;

    try {
        $conn = new PDO($pdoConnection, $username, $password, $options);
    } catch(PDOException $e) {
        echo 'Conexão falhou!' . $e->getMessage();
    }
?>