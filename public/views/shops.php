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
                        <img src="/public/img/logo-center.svg" alt="" />
                    </div>
                    <div class="header-logowanie">
                        <?php if (isset($_COOKIE['user_id'])) : ?>
                            Hello, <?= $user->getName(); ?>
                        <?php else : ?>
                            <a class="header-link" href="/login">
                                <img class="user-icon" src="/public/img/user.png" alt="" />
                                Zaloguj si&#281;
                            </a>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="nav-background">
                    <nav class="nav-btn">
                        <a class="nav-link" href="/new">Najnowsze</a>
                        <a class="nav-link" href="/shops">Sklepy</a>
                        <a class="nav-link" href="/liked">Ulubione</a>
                        <a class="nav-link" href="/categories">Kategorie</a>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <main>
        <section class="section">
            <section class="page-container">
                <div class="name-block">
                </div>
                <div class="cards-wrapper">
                    <div class="card-shop">
                        <div class="upper-section">
                            <img src="/public/img/shop/auchan-logo.png" />
                        </div>
                        <div class="lower-section">
                            <div class="image-container">
                                <img src="/public/img/arrow.svg" />
                            </div>
                            <div class="info-container">
                                <span class="shop-name">Auchan</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-shop">
                        <div class="upper-section">
                            <img src="/public/img/shop/Biedronka-logo.jpg" />
                        </div>
                        <div class="lower-section">
                            <div class="image-container">
                                <img src="/public/img/arrow.svg" />
                            </div>
                            <div class="info-container">
                                <span class="shop-name">Biedronka</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-shop">
                        <div class="upper-section">
                            <img src="/public/img/shop/castorama_logo.jpg" />
                        </div>
                        <div class="lower-section">
                            <div class="image-container">
                                <img src="/public/img/arrow.svg" />
                            </div>
                            <div class="info-container">
                                <span class="shop-name">Castorama</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-shop">
                        <div class="upper-section">
                            <img src="/public/img/shop/Lidl-Logo.png" />
                        </div>
                        <div class="lower-section">
                            <div class="image-container">
                                <img src="/public/img/arrow.svg" />
                            </div>
                            <div class="info-container">
                                <span class="shop-name">Lidl</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-shop">
                        <div class="upper-section">
                            <img src="/public/img/shop/rossman_logo.jpg" />
                        </div>
                        <div class="lower-section">
                            <div class="image-container">
                                <img src="/public/img/arrow.svg" />
                            </div>
                            <div class="info-container">
                                <span class="shop-name">Rossman</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-shop">
                        <div class="upper-section">
                            <img src="/public/img/shop/mediamarkt.jpg" />
                        </div>
                        <div class="lower-section">
                            <div class="image-container">
                                <img src="/public/img/arrow.svg" />
                            </div>
                            <div class="info-container">
                                <span class="shop-name">Mediamarkt</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </section>
    </main>


    <footer class="footer"></footer>
</body>

</html>