<?php
error_reporting(-1);
session_start();
include_once __DIR__ . '/db/db.php';
include_once __DIR__ . '/db/funcs.php';
$products = get_products();
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/reset.css">
    <title>TechnoShop</title>
</head>
<body>
    <!-- Вход-->
    <div class="modal-background none" id="modal-bg">
        <div class="modal__window modal__window__signin none" id="modal-signin">
            <div class="container__window">
                <div class="title__modal">
                    <h2>Вход</h2>
                </div>
                <div class="signin">
                    <div class="exit">
                        <i class="fa-solid fa-xmark btn-exit"></i>
                    </div>
                    <form action="" method="post">
                        <div class="block__form">
                            <input class="inp__form" required type="text" name="login" id="">
                            <p class="text__form">Логин</p>
                        </div>

                        <div class="block__form">
                            <input class="inp__form" required type="password" name="pass" id="">
                            <p class="text__form">Пароль</p>
                        </div>

                        <p class="p__submit"><input class="inp__submit" type="submit" value="Войти"></p>
                    </form>

                    <p class="text__signup">Если у вас нет аккаунат, можете его <a class="link__reg" id="btn-reg">зарегестрировать.</a></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Регистрация -->
    <section class="modal__window modal__window__reg none" id="modal-signup">
        <div class="container__window">
            <div class="title__modal">
                <h2>Регистрация</h2>
            </div>
            <div class="signin">
                <div class="exit__reg">
                    <i class="fa-solid fa-xmark btn-exit"></i>
                </div>
                <form action="" method="post">
                    <div class="block__form">
                        <input class="inp__form" required type="text" name="login" id="">
                        <p class="text__form">Логин</p>
                    </div>

                    <div class="block__form">
                        <input class="inp__form" required type="password" name="pass" id="">
                        <p class="text__form">Пароль</p>
                    </div>

                    <div class="block__form">
                        <input class="inp__form" required type="text" name="pass" id="">
                        <p class="text__form">Почта</p>
                    </div>

                    <p class="p__submit"><input class="inp__submit" type="submit" value="Войти"></p>
                </form>

                <p class="text__signup">Если у вас есть аккаунат, можете <a class="link__login" id="btn-log">войти в него.</a></p>
            </div>
        </div>
    </section>

<!-- Корзина -->
<section class="carts none cart-modal" id="cart-modal">
<div class="container container__cart">
            <div class="exit__cart"><i class="fa-regular fa-circle-xmark"></i></div>
            <h3 class="title__cart">Корзина</h3>
            <div class="container-cartitem">
                <div class="modal-cart-content">

                </div>
</div>
</div>
</div>
</section>

    <!-- Меню -->

    <section class="menu">
        <!-- Меню с ссылками на разделы сайта -->
        <div class="container container__menu">

            <div class="logo__category">
                <div class="logo">
                    <a href="index.html"><h2 class="logo__text">TechnoShop</h2></a>
                </div>
                <div class="category__menu">
                    <a class="link__menu" href="">Главная</a>
                    <a class="link__menu" href="">Контакты</a>
                    <a class="link__menu" href="">Магазин</a>
                    <a class="link__menu" href="">Новости</a>
                </div>
            </div>

            <div class="info"> 
                <p class="info__text"><span><i class="fa-regular fa-envelope"></i> info@Tshop.com</span> | <span><i class="fa-solid fa-phone"></i> +7(900)000-00-00 </span></p>
            </div>
        </div>

        <!-- Меню с поиском -->
        <div class="container container__search">

            <div class="shop__category">
                <a class="link__sc" href=""><i class="fa-solid fa-bars-staggered"></i>Категории Магазина</a>
            </div>

           <div class="form">
                <form action="">
                    <input class="inp__search" type="text" name="" id="" placeholder="Введите здесь">
                    <button class="btn__submit" type="submit">Поиск <i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
           </div>

           <div class="login__cart">
                <a class="link__login" href=""><i class="fa-regular fa-user"></i> <span class="login__text" id="btn-open">Вход / Регистрация</span></a>
                <span> |  </span>
                <a id="get-cart" class="link__cart" href=""><i class="fa-solid fa-cart-shopping"></i></a>
           </div>

        </div>
    </section>

<main>

    <!-- Баннер с категориями магазина -->
    <section class="banner">

        <div class="container container__banner">

            <div class="block__category">
                <a href=""><i class="fa-solid fa-computer"></i> Компьютеры и ноутбуки <span><i class="fa-solid fa-angle-right"></i></span></a>
                <a href=""><i class="fa-solid fa-mobile"></i> Смартфоны и фототехника <span><i class="fa-solid fa-angle-right"></i></span></a>
                <a href=""><i class="fa-solid fa-microchip"></i> Комплектующие для ПК <span><i class="fa-solid fa-angle-right"></i></span></a>
                <a href=""><i class="fa-solid fa-tv"></i> ТВ <span><i class="fa-solid fa-angle-right"></i></span></a>
                <a href=""><i class="fa-solid fa-gamepad"></i></i> Консоли <span><i class="fa-solid fa-angle-right"></i></span></a>
            </div>

            <div class="block__banner">

            </div>

        </div>

    </section>

    <!-- Секция с популярным в магазине -->
    <section class="popular">

        <div class="container container__popular">

            <h2>Популярное</h2>
            
            <div class="block__cards">

            <?php if(!empty($products)): ?>
                <?php foreach($products as $product): ?>
                <div class="card__border">
                    <div class="card">
                        <div class="img__card">
                        <?php if($product['sale']): ?>
                            <div class="sale">
                                <p>SALE</p>
                            </div>
                            <?php endif; ?>
                            <img class="img__card" src="img/<?= $product['img'] ?>" alt="">
                        </div>
                        <div class="block__title">
                            <h3><?= $product['title'] ?></h3>
                        </div>
                        <div class="block__desc">
                            <p><?= $product['content'] ?></p>
                        </div>
                        <div class="block__score">
                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                        </div>
                        <div class="block__curr">
                            <div class="block__price">
                                <?php if ($product['old_price']): ?>
                                <p class="first__price"><?= $product['old_price'] ?></p>
                                <?php endif; ?>
                                <p class="last__price"><?= $product['price'] ?></p>
                            </div>
                            <a href="?cart=add&id=<?= $product['id']?>" class="btn__buy add-to-cart" data-id="<?= $product['id']?>"><i class="fa-solid fa-cart-shopping"></i></a>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            <?php endif; ?>
            </div>
        </div>

    </section>

    <!-- Секция с последними новостями магазина -->
    <section class="news">

        <div class="container container__news">

            <h2>Последние новости</h2>

            <div class="block__news">

                <div class="card__news">
                    <div class="img__news">
                        <img src="" alt="">
                    </div>
                    <div class="block__data">
                        <h3>01 октября, 2023</h3>
                    </div>
                    <div class="desc__news">
                        <p>description</p>
                    </div>
                </div>

                <div class="card__news">
                    <div class="img__news">
                        <img src="" alt="">
                    </div>
                    <div class="block__data">
                        <h3>01 октября, 2023</h3>
                    </div>
                    <div class="desc__news">
                        <p>description</p>
                    </div>
                </div>

                <div class="card__news">
                    <div class="img__news">
                        <img src="" alt="">
                    </div>
                    <div class="block__data">
                        <h3>01 октября, 2023</h3>
                    </div>
                    <div class="desc__news">
                        <p>description</p>
                    </div>
                </div>

                <div class="card__news">
                    <div class="img__news">
                        <img src="" alt="">
                    </div>
                    <div class="block__data">
                        <h3>01 октября, 2023</h3>
                    </div>
                    <div class="desc__news">
                        <p>description</p>
                    </div>
                </div>

                <div class="card__news">
                    <div class="img__news">
                        <img src="" alt="">
                    </div>
                    <div class="block__data">
                        <h3>01 октября, 2023</h3>
                    </div>
                    <div class="desc__news">
                        <p>description</p>
                    </div>
                </div>

            </div>

        </div>

    </section>

</main>

<footer>
    
    <!-- Контакты -->
    <div class="container container__contact">
        <div class="logo">
            <a href="index.html"><h2 class="logo__text">TechnoShop</h2></a>
        </div>
        <div class="contacts">
            <span><i class="fa-regular fa-envelope"></i> info@Tshop.com</span>
            <span><i class="fa-solid fa-phone"></i> +7(900)000-00-00 </span>
        </div>
    </div>

</footer>



    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/e841cfff06.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/cart.js"></script>
    <script src="js/main.js"></script>
    <script src="js/modal.js"></script>

</body>
</html>