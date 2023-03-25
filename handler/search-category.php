<?php
include_once '../core/db.php';
include_once '../core/funcs.php';
?>

<!-- Вывод результатов поиска -->
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/style/style.css">
    <link rel="stylesheet" href="/style/reset.css">
    <title>TechnoShop</title>
</head>
<body>

    <!-- Вход-->
    <section class="modal__window modal__window__signin none">
        <div class="container__window">
            <div class="title__modal">
                <h2>Вход</h2>
            </div>
            <div class="signin">
                <div class="exit">
                    <i class="fa-solid fa-xmark"></i>
                </div>
                <form action="../core/signin.php" method="post">
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

                <p class="text__signup">Если у вас нет аккаунат, можете его <a class="link__reg" href="">зарегестрировать.</a></p>
            </div>
        </div>
    </section>

    <!-- Регистрация -->
    <section class="modal__window modal__window__reg none">
        <div class="container__window">
            <div class="title__modal">
                <h2>Регистрация</h2>
            </div>
            <div class="signin">
                <div class="exit__reg">
                    <i class="fa-solid fa-xmark"></i>
                </div>
                <form action="../core/signup.php" method="post">
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

                <p class="text__signup">Если у вас есть аккаунат, можете <a class="link__login" href="">войти в него.</a></p>
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
    
    <section class="menu">
        <!-- Меню с ссылками на разделы сайта -->
        <div class="container container__menu">

            <div class="logo__category">
                <div class="logo">
                    <a href="/index.php"><h2 class="logo__text">TechnoShop</h2></a>
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
           <form method="GET" action="search.php">
                    <input class="inp__search" type="text" name="query" id="" placeholder="Введите здесь">
                    <button class="btn__submit" type="submit">Поиск <i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
           </div>

           <div class="login__cart">
           <?php
if (isset($_SESSION['login'])) {
    $login = $_SESSION['login'];
    echo '<a class="link__login" href=""><i class="fa-regular fa-user"></i> <span class="login__text">' . $login . '</span></a>';
    echo '<form class="logout none" method="post" action="../core/logout.php"><button type="submit" name="logout">Выход</button></form>';
  } else {
    echo '<a class="link__login" href=""><i class="fa-regular fa-user"></i> <span class="login__text" id="btn-open">Вход / Регистрация</span></a>';
  }
  ?>
                <span> |  </span>
                <a id="get-cart" class="link__cart" href=""><i class="fa-solid fa-cart-shopping"></i></a>
           </div>

        </div>
    </section>

<main>
    <section>
        <div class="container container__shop">
            <div class="filter">
                <h3>Поиск</h3>
                <form action="search-category.php">
                <div class="search">
                        <button class="inp__submit__filter" type="submit">Поиск товара</button>
                </div>
                <h3>Категории</h3>
                <div class="category__filter">
                <?php
                    $sql = "SELECT * FROM categories";
                    $result = mysqli_query($mysqli, $sql);
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<div class="category">';
                        echo '<input type="checkbox" name="category[]" value="' . $row['id'] . '"> ';
                        echo '<label>';
                        echo $row['title'];
                        echo '</label>';
                        echo '</div>';
                    }
?>
                </div>
                </form>
            </div>
            <div class="products">
                <div class="block__products">
                <?php

        if (isset($_GET['category'])) {
            $categories = $_GET['category'];
            $categories = implode(',', $categories);
        
            $sql = "SELECT * FROM products WHERE category_id IN ($categories)";
            $result = mysqli_query($mysqli, $sql);
        
            // Проверка на ошибки выполнения запроса
            if (!$result) {
                die('Ошибка выполнения запроса: ' . mysqli_error($mysqli));
            }
        
            if (mysqli_num_rows($result) > 0) {
                // Отображаем товары
                while ($products = mysqli_fetch_assoc($result)) {
                    echo '<div class="card__border card__filter">';
                    echo '<div class="card">';
                    echo '<div class="img__card">';
                    echo '<img class="img__card" src="img/' . $products['img'] . '" alt="">';
                    echo '</div>';
                    echo '<div class="block__title">';
                    echo '<h3>' . $products['title'] . '</h3>';
                    echo '</div>';
                    echo '<div class="block__desc">';
                    echo '<p>' . $products['content'] . '</p>';
                    echo '</div>';
                    echo '<div class="block__score">';
                    echo '<i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>';
                    echo '</div>';
                    echo '<div class="block__curr">';
                    echo '<div class="block__price">';
                    echo '<p class="last__price">' . $products['price'] . '</p>';
                    echo '</div>';
                    echo '<a href="?cart=add&id=' . $products['id'] . '" class="btn__buy add-to-cart" data-id="' . $products['id'] . '"><i class="fa-solid fa-cart-shopping"></i></a>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                }
            } else {
                echo 'Товаров не найдено';
            }
        } else {
            echo 'Не указаны категории для поиска товаров';
        }
        
?>

        </div>
    </section>
</main>

<footer>
    
    <!-- Контакты -->
    <div class="container container__contact">
        <div class="logo">
            <a href="/index.html"><h2 class="logo__text">TechnoShop</h2></a>
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
    <script src="../js/cart.js"></script>
    <script src="../js/main.js"></script>
    <script src="../js/modal.js"></script>

</body>
</html>