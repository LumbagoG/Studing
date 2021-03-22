<!DOCTYPE html>
<html lang="en">

<head>
    <title>Studing</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Imports -->
    <link rel="stylesheet" href="./style/index/dist/style.css">

    <!-- Material icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anony,mous">
    </script>

    <!-- IonIcons -->
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>

    <!-- Chart js -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.css"
        integrity="sha512-/zs32ZEJh+/EO2N1b0PEdoA10JkdC3zJ8L5FTiQu82LR9S/rOQNfQN7U59U9BC12swNeRAz3HSzIL2vpp4fv3w=="
        crossorigin="anonymous" />
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"
        integrity="sha512-d9xgZrVZpmmQlfonhQUvTR7lMPtO7NkZMkA0ABN3PHCbKA5nqylQ/yWlFAyY6hYgdF1Qh6nYiuADWwKB4C2WSw=="
        crossorigin="anonymous"></script>
    <script defer src="./js/chart.js"></script>
</head>

<body>
    <!-- Social section -->
    <div class="social">
        <div class="social_col">
            <ion-icon name="logo-vk"></ion-icon>
            <ion-icon name="logo-instagram"></ion-icon>
            <ion-icon name="logo-facebook"></ion-icon>
            <ion-icon name="paper-plane-outline"></ion-icon>
            <ion-icon name="logo-whatsapp"></ion-icon>
        </div>
    </div>

    <!-- Header -->
    <header class="header">
        <div class="header__title">
            <p class="header__title_text">
                Studing
            </p>
        </div>

        <!-- Header navigation -->
        
        <nav class="header__navigation">
            <ul class="header__navigation_links-wrapper">
                <li class="header__navigation_item-false"></li>
                <li class="header__navigation_item-false"></li>
                <li class="header__navigation_item">
                    <ion-icon name="key-outline"></ion-icon>
                    <a href="" class="header__navigation_link">Вход</a>
                </li>
                <li class="header__navigation_item">
                    <ion-icon name="person-outline"></ion-icon>
                    <a href="" class="header__navigation_link">Регистрация</a>
                </li>
            </ul>
        </nav>

        <i id="burger" class="material-icons" onclick="burger()">menu</i>
        <i id="quit" class="material-icons" onclick="quit()">clear</i>
        <div id="links">
            <li class="header__navigation_item">
                <a href="" class="header__navigation_link">Вход</a>
            </li>
            <li class="header__navigation_item">
                <a href="" class="header__navigation_link">Регистрация</a>
            </li>
        </div>
    </header>


    <!-- Sidebar section -->
    <div class="sidebar">
        <div class="sidebar__logo">
            <img src="./images/logo.svg" alt="" class="sidebar__logo_img">
        </div>

        <div class="sidebar__wrappers-items">
            <div class="sidebar__items">
                <ion-icon class="sidebar__items_img" name="home-outline"></ion-icon>
                <a href="{{ route('index') }}" class="sidebar__items_link">Главная</a>
            </div>

            <div class="sidebar__items">
                <ion-icon class="sidebar__items_img" name="newspaper-outline"></ion-icon>
                <a href="{{ route('courses') }}" class="sidebar__items_link">Курсы</a>
            </div>

            <div class="sidebar__items active">
                <ion-icon class="sidebar__items_img" name="tv-outline"></ion-icon>
                <a href="{{ route('webinars') }}" class="sidebar__items_link">Вебинары</a>
            </div>

            <div class="sidebar__items">
                <ion-icon class="sidebar__items_img" name="chatbox-ellipses-outline"></ion-icon>
                <a href="{{ route('forums') }}" class="sidebar__items_link">Форум</a>
            </div>

            <div class="sidebar__items">
                <ion-icon class="sidebar__items_img" name="checkbox-outline"></ion-icon>
                <a href="{{ route('tests') }}" class="sidebar__items_link">Тесты</a>
            </div>
        </div>
    </div>


    <!-- Main section -->
    <main class="main">

    </main>

    <!-- Footer section -->
    <footer class="footer">
        <div class="footer_row">
            <div class="footer_col">
                <h5 class="card-title">О компании</h5>
                <a href="" class="main__text_small">Обучение</a>
                <a href="" class="main__text_big">Курсы</a>
                <a href="" class="main__text_big">Вебинары</a>
                <a href="" class="main__text_big">Форум</a>
                <a href="" class="main__text_big">Тесты</a>
            </div>
            <div class="footer_col">
                <div class="footer_row icons">
                    <ion-icon name="logo-vk"></ion-icon>
                    <ion-icon name="logo-instagram"></ion-icon>
                    <ion-icon name="logo-facebook"></ion-icon>
                    <ion-icon name="paper-plane-outline"></ion-icon>
                    <ion-icon name="logo-whatsapp"></ion-icon>
                </div>

                <div class="footer_row phone">
                    <p><ion-icon name="call-outline"></ion-icon> 8 (846) 375-41-31</p>
                </div>
                <div class="footer_row time">
                    <p>Пн-Пт, 8:00-17:00 по МСК</p>
                </div>
                <div class="footer_row email">
                    <p><ion-icon name="mail-outline"></ion-icon> mail@udpo.info</p>
                </div>
                <div class="footer_row">
                    <p>Круглосуточно, для подачи документов</p>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
