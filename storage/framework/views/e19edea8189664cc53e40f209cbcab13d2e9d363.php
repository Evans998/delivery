<?php $__env->startSection('content'); ?>
<main id="index">
    <section class="section section-promo">
        <div class="container promo-block">
            <div class="text-block">
                <h1 class="promo-title">Онлайн-сервис доставки еды на дом</h1>
                <p class="promo-desc">Блюда из любимого ресторана привезет курьер в перчатках, маске и с антисептиком</p>
            </div>
        </div>
    </section>
    <section class="section section-rest">
        <div class="container">
            <div class="section__header">
                <h2 class="section__header-title">Рестораны</h2>
                <input type="text" class="input search-input" placeholder="Поиск блюд и ресторанов">
            </div>
            <div class="block cards">
                <a href="/rest" class="card">
                    <div class="card-img"><img src="/img/pizza-plus.png" alt="Картинка заведения Пицца плюс"></div>
                    <div class="card-main">
                        <div class="card-main__header">
                            <h3 class="card-title">Пицца плюс</h3>
                            <strong class="time-write">50 мин</strong>
                        </div>
                        <div class="card-desc">
                            <span class="rating">4.5</span>
                            <strong class="midprice">От 900 ₽</strong>
                            <span class="dish">Пицца</span>
                        </div>
                    </div>
                </a>
                <div class="card">
                    <div class="card-img"><img src="/img/tanuki.jpg" alt="Картинка заведения Тануки"></div>
                    <div class="card-main">
                        <div class="card-main__header">
                            <div class="card-title">Тануки</div>
                            <strong class="time-write">50 мин</strong>
                        </div>
                        <div class="card-desc">
                            <span class="rating">4.5</span>
                            <strong class="midprice">От 900 ₽</strong>
                            <span class="dish">Пицца</span>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-img"><img src="/img/foodband.png" alt="Картинка заведения FoodBand"></div>
                    <div class="card-main">
                        <div class="card-main__header">
                            <div class="card-title">FoodBand</div><!--Кстати оч вкусная пицца,рекомендую-->
                            <strong class="time-write">50 мин</strong>
                        </div>
                        <div class="card-desc">
                            <span class="rating">4.5</span>
                            <strong class="midprice">От 900 ₽</strong>
                            <span class="dish">Пицца</span>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-img"><img src="/img/jad-pizza.png" alt="Картинка заведения Жадина-пицца"></div>
                    <div class="card-main">
                        <div class="card-main__header">
                            <div class="card-title">Жадина-пицца</div>
                            <strong class="time-write">50 мин</strong>
                        </div>
                        <div class="card-desc">
                            <span class="rating">4.5</span>
                            <strong class="midprice">От 900 ₽</strong>
                            <span class="dish">Пицца</span>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-img"><img src="/img/tochka-edi.png" alt="Картинка заведения Точка еды"></div>
                    <div class="card-main">
                        <div class="card-main__header">
                            <div class="card-title">Точка еды</div>
                            <strong class="time-write">50 мин</strong>
                        </div>
                        <div class="card-desc">
                            <span class="rating">4.5</span>
                            <strong class="midprice">От 900 ₽</strong>
                            <span class="dish">Пицца</span>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-img"><img  src="/img/pizza-burger.png" alt="Картинка заведения PizzaBurger"></div>
                    <div class="card-main">
                        <div class="card-main__header">
                            <div class="card-title">PizzaBurger</div>
                            <strong class="time-write">50 мин</strong>
                        </div>
                        <div class="card-desc">
                            <span class="rating">4.5</span>
                            <strong class="midprice">От 900 ₽</strong>
                            <span class="dish">Пицца</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/layouts',['title' => "Delivery Food"], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OpenServer\domains\DeliveryFood\resources\views/index.blade.php ENDPATH**/ ?>