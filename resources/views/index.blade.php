<!DOCTYPE html>
<html lang="en">
<head>
    <title>Studing</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Imports -->
    <link rel="stylesheet" href="./style/index/dist/style.css">

    <!-- Bootstrap -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css"
        rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl"
        crossorigin="anonymous"
    >
    <script defer
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
        crossorigin="anonymous">
    </script>

    <!-- IonIcons -->
    <script defer src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</head>
<body>
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
    </header>


    <!-- Sidebar -->
    <div class="sidebar">
        <div class="sidebar__logo">
            <img src="./images/logo.svg" alt="" class="sidebar__logo_img">
        </div>

        <div class="sidebar__wrappers-items">
            <div class="sidebar__items active">
                <ion-icon class="sidebar__items_img" name="home-outline"></ion-icon>
                <a href="" class="sidebar__items_link">Главная</a>
            </div>

            <div class="sidebar__items">
                <ion-icon class="sidebar__items_img" name="newspaper-outline"></ion-icon>
                <a href="" class="sidebar__items_link">Курсы</a>
            </div>

            <div class="sidebar__items">
                <ion-icon class="sidebar__items_img" name="tv-outline"></ion-icon>
                <a href="" class="sidebar__items_link">Вебинары</a>
            </div>

            <div class="sidebar__items">
                <ion-icon class="sidebar__items_img" name="chatbox-ellipses-outline"></ion-icon>
                <a href="" class="sidebar__items_link">Форум</a>
            </div>

            <div class="sidebar__items">
                <ion-icon class="sidebar__items_img" name="checkbox-outline"></ion-icon>
                <a href="" class="sidebar__items_link">Тесты</a>
            </div>
        </div>
    </div>


    <!-- Main -->
    <main class="main">


        <!-- Main first section -->
        <div class="main__container">
            <div class="main__container_col">
                <div class="main__container_title">
                    <p class="main__text_small">Университет дополнительного профессионального образования</p>
                    <p class="main__text_big">Повышение квалификации и профессиональная переподготовка</p>
                </div>
            </div>
            <div class="main__container_col">
                <div class="main__container_picture">
                    <img class="main__container_picture_img" src="./images/index-stats.svg" alt="">
                </div>
            </div>
        </div>


        <!-- Main second section -->
        <div class="main__container next">
            <div class="main__container_row">
                <div class="main__container_title">
                    <p class="main__text_big">Найди то, что тебе нужно</p>
                </div>
            </div>
            <div class="main__container_row">
                <nav class="main__container__navigation">
                    <ul class="main__container__links">
                        <li class="main__container__navigation_item">
                            <a href="" class="main__container__navigation_link">Все курсы</a>
                        </li>

                        <li class="main__container__navigation_item">
                            <a href="" class="main__container__navigation_link">Педагогика</a>
                        </li>

                        <li class="main__container__navigation_item">
                            <a href="" class="main__container__navigation_link">Психология</a>
                        </li>

                        <li class="main__container__navigation_item">
                            <a href="" class="main__container__navigation_link">Медицина</a>
                        </li>

                        <li class="main__container__navigation_item">
                            <a href="" class="main__container__navigation_link">Юриспруденция</a>
                        </li>

                        <li class="main__container__navigation_item">
                            <a href="" class="main__container__navigation_link">Бизнес</a>
                        </li>

                        <li class="main__container__navigation_item">
                            <a href="" class="main__container__navigation_link">Программирование</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        

        <!-- Main third section -->
        <div class="main__container">
            <div class="main__container_row">
                <div class="main__container__card">
                    <div class="main__container__card_picture">
                        <img src="./images/education.svg" alt="">
                    </div>

                    <div class="main__container__card_category">
                        <p class="main__text_small">Педагогика</p>
                    </div>

                    <div class="main__container__card_description">
                        <p class="main__text_description">
                            Педагог высшего образования по программам подготовки кадров высшей квалификации
                        </p>
                    </div>

                    <div class="main__container__card_bottom">
                        <div class="main__container__card_bottom_hours">
                            от 250 ч.
                        </div>

                        <div class="main__container__card_bottom_show">
                            <a class="button__outline" href="">Подробнее</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
