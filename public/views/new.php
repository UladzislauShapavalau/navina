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
                <div class="cards-wrapper">
                    <div class="card">
                        <div class="upper-section">
                            <img src="./public/img/gazetki/biedronka.jpg" />
                        </div>
                        <div class="lower-section">
                            <div class="image-container">
                                <img src="/public/img/arrow.svg" />
                            </div>
                            <div class="info-container">
                                <span class="shop-name">Biedronka</span>
                                <span>9.11 - 4.12</span>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="upper-section">
                            <img src="/public/img/gazetki/biedronka.jpg" />
                        </div>
                        <div class="lower-section">
                            <div class="image-container">
                                <img src="/public/img/arrow.svg" />
                            </div>
                            <div class="info-container">
                                <span class="shop-name">Biedronka</span>
                                <span>9.11 - 4.12</span>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="upper-section">
                            <img src="/public/img/gazetki/biedronka.jpg" />
                        </div>
                        <div class="lower-section">
                            <div class="image-container">
                                <img src="/public/img/arrow.svg" />
                            </div>
                            <div class="info-container">
                                <span class="shop-name">Biedronka</span>
                                <span>9.11 - 4.12</span>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="upper-section">
                            <img src="/public/img/gazetki/biedronka.jpg" />
                        </div>
                        <div class="lower-section">
                            <div class="image-container">
                                <img src="/public/img/arrow.svg" />
                            </div>
                            <div class="info-container">
                                <span class="shop-name">Biedronka</span>
                                <span>9.11 - 4.12</span>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="upper-section">
                            <img src="/public/img/gazetki/biedronka.jpg" />
                        </div>
                        <div class="lower-section">
                            <div class="image-container">
                                <img src="/public/img/arrow.svg" />
                            </div>
                            <div class="info-container">
                                <span class="shop-name">Biedronka</span>
                                <span>9.11 - 4.12</span>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="upper-section">
                            <img src="/public/img/gazetki/biedronka.jpg" />
                        </div>
                        <div class="lower-section">
                            <div class="image-container">
                                <img src="/public/img/arrow.svg" />
                            </div>
                            <div class="info-container">
                                <span class="shop-name">Biedronka</span>
                                <span>9.11 - 4.12</span>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="upper-section">
                            <img src="/public/img/gazetki/biedronka.jpg" />
                        </div>
                        <div class="lower-section">
                            <div class="image-container">
                                <img src="/public/img/arrow.svg" />
                            </div>
                            <div class="info-container">
                                <span class="shop-name">Biedronka</span>
                                <span>9.11 - 4.12</span>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="upper-section">
                            <img src="/public/img/gazetki/biedronka.jpg" />
                        </div>
                        <div class="lower-section">
                            <div class="image-container">
                                <img src="/public/img/arrow.svg" />
                            </div>
                            <div class="info-container">
                                <span class="shop-name">Biedronka</span>
                                <span>9.11 - 4.12</span>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="upper-section">
                            <img src="/public/img/gazetki/biedronka.jpg" />
                        </div>
                        <div class="lower-section">
                            <div class="image-container">
                                <img src="/public/img/arrow.svg" />
                            </div>
                            <div class="info-container">
                                <span class="shop-name">Biedronka</span>
                                <span>9.11 - 4.12</span>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="upper-section">
                            <img src="/public/img/gazetki/biedronka.jpg" />
                        </div>
                        <div class="lower-section">
                            <div class="image-container">
                                <img src="/public/img/arrow.svg" />
                            </div>
                            <div class="info-container">
                                <span class="shop-name">Biedronka</span>
                                <span>9.11 - 4.12</span>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="upper-section">
                            <img src="/public/img/gazetki/biedronka.jpg" />
                        </div>
                        <div class="lower-section">
                            <div class="image-container">
                                <img src="/public/img/arrow.svg" />
                            </div>
                            <div class="info-container">
                                <span class="shop-name">Biedronka</span>
                                <span>9.11 - 4.12</span>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="upper-section">
                            <img src="/public/img/gazetki/biedronka.jpg" />
                        </div>
                        <div class="lower-section">
                            <div class="image-container">
                                <img src="/public/img/arrow.svg" />
                            </div>
                            <div class="info-container">
                                <span class="shop-name">Biedronka</span>
                                <span>9.11 - 4.12</span>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="upper-section">
                            <img src="/public/img/gazetki/biedronka.jpg" />
                        </div>
                        <div class="lower-section">
                            <div class="image-container">
                                <img src="/public/img/arrow.svg" />
                            </div>
                            <div class="info-container">
                                <span class="shop-name">Biedronka</span>
                                <span>9.11 - 4.12</span>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="upper-section">
                            <img src="/public/img/gazetki/biedronka.jpg" />
                        </div>
                        <div class="lower-section">
                            <div class="image-container">
                                <img src="/public/img/arrow.svg" />
                            </div>
                            <div class="info-container">
                                <span class="shop-name">Biedronka</span>
                                <span>9.11 - 4.12</span>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="upper-section">
                            <img src="/public/img/gazetki/biedronka.jpg" />
                        </div>
                        <div class="lower-section">
                            <div class="image-container">
                                <img src="/public/img/arrow.svg" />
                            </div>
                            <div class="info-container">
                                <span class="shop-name">Biedronka</span>
                                <span>9.11 - 4.12</span>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="upper-section">
                            <img src="/public/img/gazetki/biedronka.jpg" />
                        </div>
                        <div class="lower-section">
                            <div class="image-container">
                                <img src="/public/img/arrow.svg" />
                            </div>
                            <div class="info-container">
                                <span class="shop-name">Biedronka</span>
                                <span>9.11 - 4.12</span>
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