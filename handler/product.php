<?php
// Получение идентификатора товара
$id = $_GET['id'];

// Получение информации о товаре
$stmt = $pdo->prepare("SELECT * FROM products WHERE id = ?");
$stmt->execute([$id]);
$product = $stmt->fetch();
?>

<!-- Вывод информации о товаре -->
<div class="products">
                <div class="block__products">
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
                            <a href="?cart=add&id=<?= $product['id']?>" class="btn__buy add-to-cart" data-id="<?= $product['id']?>"><i class="fa-solid fa-cart-shopping"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>