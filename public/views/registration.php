<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/public/css/main.css">
    <meta http-equiv="Content-Language" content="pl">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="/public/js/index.js" async></script>
    <title>Novina</title>
</head>

<body>
    <header class="header">
        <div class="container">
            <div class="header-inner">
                <div class="header-top">
                    <div class="header-logo">
                        <img src="img/logo-center.svg" alt="" />
                    </div>
                    <!-- <div class="header-logowanie">

                        <a class="header-link"><img class="user-icon" src="img/user.png" alt="" /></a>
                    </div> -->
                </div>
            </div>
        </div>
    </header>

    <main>
        <section class="login-container">
            <span class="login-text"> Zarejestruj si&#281; przez e-mail</span>
            <div class="messages">
                <?php
                if (isset($messages)) {
                    foreach ($messages as $message) {
                        echo $message;
                    }
                }
                ?>
            </div>
            <input type="text" class="input" placeholder="Nickname" />
            <input type="email" class="input" placeholder="E-mail" />
            <input type="password" class="input" placeholder="Has&#322;o" />
            <div class="btn-reg" href="#">Zarejestruj si&#281;</div>
            <a class="login-botton" href="/login">Masz konto? Zaloguj si&#281;</a>
        </section>
    </main>


    <footer class="footer"></footer>
</body>

</html>