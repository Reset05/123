<?php
include_once __DIR__ . '/pages/db/db.php';
include_once __DIR__ . '/pages/db/funcs.php';
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
                <a class="link__login" href=""><i class="fa-regular fa-user"></i> <span class="login__text">Вход / Регистрация</span></a>
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
                <form action="search-category.php" method="GET">
                <div class="search">
                    <form method="GET" action="search.php">
                        <input class="inp__search__filter" type="text" name="filter" id="" placeholder="Введите здесь">
                        <button class="inp__submit__filter" type="submit">Поиск товара</button>
                    </form>
                </div>
                <h3>Категории</h3>
                <div class="category__filter">
                <?php
                    $conn = mysqli_connect("localhost", "root", "root", "catalog");
                    $sql = "SELECT * FROM categories";
                    $result = mysqli_query($conn, $sql);
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
// Подключение к базе данных
// Подключение к базе данных
$db = mysqli_connect("localhost", "root", "", "catalog");

// Получаем результаты поиска
if (isset($_GET['query'])) {
    $query = $_GET['query'];
    $stmt = $pdo->prepare("SELECT * FROM products WHERE title LIKE ? OR content LIKE ? OR price LIKE ?");
    $stmt->execute(["%$query%", "%$query%", "%$query%"]);
    $search_results = $stmt->fetchAll();
} else {
    $search_results = [];
}

?>
<?php foreach($search_results as $product): ?>
     <div class="card__border card__filter">
    <div class="card">
    <div class="img__card">
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
    <p class="last__price"><?= $product['price'] ?></p>
    </div>
    <a href="?cart=add&id=<?= $product['id'] ?>" class="btn__buy add-to-cart" data-id="<?= $product['id'] ?>"><i class="fa-solid fa-cart-shopping"></i></a>
    </div>
    </div>
    </div>
<?php endforeach; ?>

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
    <script src="pages/js/cart.js"></script>
    <script src="pages/js/main.js"></script>
    <script src="pages/js/modal.js"></script>

</body>
</html>