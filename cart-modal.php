<section class="carts none">
        <div class="container container__cart">
            <?php if(!empty($_SESSION['cart'])): ?>
            <div class="exit__cart"><i class="fa-regular fa-circle-xmark"></i></div>
            <h3 class="title__cart">Корзина</h3>
            <?php foreach($_SESSION['cart'] as $id => $item): ?>
            <div class="container-cartitem">
                <div data-id="<?php echo $id ?>" class="cartitem">
                    <div class="logoitem">
                    <img class="imgitem" src="img/<?php echo $item['img'] ?>" alt="">
                    </div>
                    <div class="textitem">
                    <h3><?php echo $item['title'] ?></h3>
                        <div class="counter">
                            <i data-action="minus" class="minus fa-regular fa-square-minus"></i>
                            <p data-counter class="count"><?php echo $item['qty'] ?></p>
                            <i data-action="plus" class="plus fa-regular fa-square-plus"></i>
                        </div>
                        <p class="price__cart"><?php echo $item['price'] ?></p>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
            <div class="title__total">Итого: <?php echo $_SESSION['cart.sum'] ?></div>
            <?php else: ?>
                <p>Корзина пуста...</p>
            <?php endif; ?>
            <div class="btn__buy__cart">
                <?php if (!empty($_SESSION['cart'])): ?>
                <button>Купить</button>
                <?php endif; ?>
            </div>
        </div>
    </section>