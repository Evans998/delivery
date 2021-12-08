<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e($title); ?></title>
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
    <script src="<?php echo e(asset('js/main.js')); ?>" defer></script>
</head>
<body>

<header class="header">
    <div class="container block block__header">
        <a href="/" class="link-logo">
            <img src="<?php echo e(asset('img/logo.svg')); ?>" alt="Логотип" class="logo-img">
        </a>
        <input type="text" class="input header-input" placeholder="Адрес доставки">
        <div class="header-buttons header__buttons">
            <div class="admin">
                <a href="<?php echo e(route('restourant.create')); ?>" class="button button--secondary ">Добавить рестаран</a>
                <a href="<?php echo e(route('product.create')); ?>" class="button button--secondary button-rest">Добавить блюдо</a>
            </div>
            <!-- /.admin -->
            <button class="button button--primary">
                <img src="<?php echo e(asset('img/user.svg')); ?>" alt="Пользователь" class="logo-user">
                <span class="text-button">Войти</span>
            </button>
            <button class="button button--secondary" id="cart">
                <img src="<?php echo e(asset('img/shopping-cart.svg')); ?>" alt="Корзина" class="logo-cart">
                <span class="text-button">Корзина</span>
            </button>
        </div>
    </div>
</header>

<?php echo $__env->yieldContent('content'); ?>

<footer class="footer">
    <div class="container block block__footer">
        <div class="footer-block"><a href="/" class="link-logo-foot">
                <img src="<?php echo e(asset('/img/logo.svg')); ?>" alt="Логотип" class="logo-img"></a>
            <nav class="navigation">
                <a href="#" class="nav-link">Ресторанам</a>
                <a href="#" class="nav-link">Курьерам</a>
                <a href="#" class="nav-link">Пресс-центр</a>
                <a href="#" class="nav-link">Контакты</a>
            </nav>
        </div>
        <div class="social-block">
            <a href="https://www.instagram.com/" target="_blank">
                <img src="<?php echo e(asset('/img/group1.svg')); ?>" alt="Инстаграмм">
            </a>
            <a href="https://ru-ru.facebook.com/" target="_blank">
                <img src="<?php echo e(asset('/img/group2.svg')); ?>" alt="Фейсбук">
            </a>
            <a href="https://vk.com/" target="_blank">
                <img src="<?php echo e(asset('/img/group3.svg')); ?>" alt="Вконтакте">
            </a>
        </div>
    </div>
</footer>
<div class="modal modal--close">
    <div class="modal-window">
        <div class="modal-header">
            <h2 class="modal-title">Корзина</h2>
            <button class="btn-close"></button>
        </div>
        <div class="modal-main">
            <div class="row not--active">
                <p class="product-name"></p>
                <div class="row-right">
                    <div class="price-product">
                        <strong class="price"></strong>
                        <span class="rub">₽</span>
                    </div>
                    <div class="counter">
                        <button class="btn-count minus">-</button>
                        <span class="count">1</span>
                        <button class="btn-count plus">+</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <div class="sum">
                <h3 class="modal-sun">0</h3>
                <span class="rub-sum">₽</span>
            </div>
            <div class="header-buttons">
                <button class="button button--primary">
                    <span class="text-button">Оформить заказ</span>
                </button>
                <button class="button button--secondary">
                    <span class="text-button">Отмена</span>
                </button>
            </div>
        </div>
    </div>
</div>
</body>
</html>

<?php /**PATH D:\OpenServer\domains\DeliveryFood\resources\views/layouts/layouts.blade.php ENDPATH**/ ?>