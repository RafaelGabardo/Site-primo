<?php
    require('../PHP-Puro/connect.php');
    require('../PHP-Puro/insert.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../HTML-CSS/contato.css">
    <title>Contato</title>
</head>
<body>
    <nav class="nav">
        <section class="section section-nav">
            <div class="empty">

            </div>
            <div class="div-nav">
                <a href="https://www.instagram.com/gusgabardo/?hl=pt-br" target="_blank">
                    <img class="img-nav" src="../Imagens/Imagem-Gus-Nav.jpg" alt="Gustavo tocando">
                </a>
            </div>
            <div class="div-nav">
                <div class="div-list">
                    <ul class="list">
                        <a href="index.php">
                            <div class="div-card">
                                <li>Início</li>
                            </div>
                        </a>
                        <div class="empty2">

                        </div>
                        <a href="portfolio.php">
                            <div class="div-card">
                                <li>Portfólio</li>
                            </div>
                        </a>
                        <div class="empty2">

                        </div>
                        <a href="contato.php">
                            <div class="div-card">
                                <li>Contato</li>
                            </div>
                        </a>
                        <div class="empty2">

                        </div>
                    </ul>
                </div>
            </div>
        </section>
    </nav>
    <header class="header">
        <section class="section section-header">
            <div class="div-header">
                <h1>Contato:</h1>
            </div>
        </section>
    </header>
    <main class="main">
        <section class="section section-main">
            <div class="div-card-main">
                <div class="div-main">
                    <form class="contact-form" action="contato.php" method="post" name="contact">
                        <label class="label" for="name">Insira seu nome completo:</label><br>
                        <input class="type-input" type="text" name="name"><br><br>
                        <label class="label" for="email">Insira seu e-mail:</label><br>
                        <input class="type-input" type="email" name="email"><br><br>
                        <label class="label" for="telephone">Insira seu número de <br> telefone/celular:</label><br>
                        <input class="type-input" type="tel" name="telephone" pattern="[0-9]{2}-[0-9]{4-5}-[0-9]{4}"><br><br>
                        <label class="label" for="subject">Insira o assunto:</label><br>
                        <input class="type-input" type="text" name="subject"><br><br>
                        <label class="label" for="message">Insira sua mensagem:</label><br>
                        <textarea class="type-input" name="message" id="message" cols="30" rows="4"></textarea><br><br>
                        <input class="submit" type="submit" name="submit" placeholder="Enviar">
                    </form>
                </div>
            </div>
        </section>
    </main>
    <footer class="footer">
        <section class="section section-footer">
            <div class="div-footer">
                <p>Gustavo Gabardo Lopes | Feito por Rafael Giroldo Gabardo</p>
            </div>
        </section>
    </footer>
</body>
</html>