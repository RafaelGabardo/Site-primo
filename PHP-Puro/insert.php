<?php
    // Fazendo o "if" para caso o botão submit do formulário "contact" do arquivo "mensagens.php" seja apertado
    if(isset($_POST['submit'])) {
        // Armazenando os dados inseridos no formulário em variáveis
        $name = $_POST['name'];
        $email = $_POST['email'];
        $telephone = $_POST['telephone'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        // Fazendo a inserção no banco de dados
        $sql = "
            INSERT INTO
                contacts
                (`name`,`email`,`telephone`,`subject`,`message`,`created-at`)
            VALUES
                ('$name','$email','$telephone','$subject','$message',NOW())
        ";

        // Preparando o query e executando-o
        $query = $conn->prepare($sql);
        $result = $query->execute();

        // Fazendo o "if" para caso a execução do query dê certo
        if($result) {
            // Armazenando os dados do envio de email em variáveis
            $to = 'rggabardo@gmail.com';
            $txt = 'Telefone/celular: ' . $telephone . ' Mensagem: ' . $message;
            $headers = 'From: ' . $email;

            // Executando o envio de email para um gmail
            $emailSend = mail($to, $subject, $txt, $headers);

            // fazendo o "if" para caso o email enviado para o gmail seja bem-sucedido
            if($emailSend) {
                // Armazenando em uma variável o outro email destinatário
                $to2 = 'gustavo.gabardo@hotmail.com';

                // Executando o envio de email para um hotmail
                $emailSend2 = mail($to2, $subject, $txt, $headers);
                
                // Fazendo o "if" para caso o segundo email seja enviado corretamente
                if($emailSend2) {
                    echo 'Mensagem enviada com sucesso!';
                }
                echo 'Mensagem enviada com sucesso!';
            } else {
                echo 'Erro ao enviar!';
            }
        } else {
            echo 'Erro!';
        }

        // (Todos os "elses" de "ifs" exibem mensagens de erro)
        // (O programa de banco de dados que uso, vulgo Laragon, 
        // não tem disponibilidade para envio de email diretamente para hotmail,
        //  portanto fiz essa gambiarra para que desse certo)
    }
?>