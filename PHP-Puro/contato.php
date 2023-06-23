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

    if(isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $telephone = $_POST['telephone'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        $sql = "
            INSERT INTO
                contacts
                (`name`,`email`,`telephone`,`subject`,`message`,`created-at`)
            VALUES
                ('$name','$email','$telephone','$subject','$message',NOW())
        ";

        $query = $conn->prepare($sql);
        $result = $query->execute();

        if($result) {
            $to = 'rggabardo@gmail.com';
            $txt = 'Telefone/celular: ' . $telephone . ' Mensagem: ' . $message;
            $headers = 'From: ' . $email;

            $emailSend = mail($to, $subject, $txt, $headers);

            if($emailSend) {
                echo 'Mensagem enviada com sucesso!';
            } else {
                echo 'Erro ao enviar!';
            }
        } else {
            echo 'Erro!';
        }
    }
?>