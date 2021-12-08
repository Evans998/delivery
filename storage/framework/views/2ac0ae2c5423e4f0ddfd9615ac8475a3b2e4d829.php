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
                <?php $__currentLoopData = $restourants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $restourant): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="card__all">
                        <a href="<?php echo e(route('restourant.show', ['id' => $restourant->rest_id])); ?>" class="card">
                            <div class="card-img">
                                <img src="<?php echo e($restourant->rest_img); ?>" alt="Картинка заведения Пицца плюс">
                            </div>
                            <div class="card-main">
                                <div class="card-main__header">
                                    <h3 class="card-title"><?php echo e($restourant->rest_name); ?></h3>
                                    <strong class="time-write">50 мин</strong>
                                </div>
                                <div class="card-desc">
                                    <span class="rating"><?php echo e($restourant->rest_desc); ?></span>
                                    <strong class="midprice">От 900 ₽</strong>
                                    <span class="dish">Пицца</span>
                                </div>
                                <!-- /.button button--secondary -->
                            </div>
                        </a>
                        <div class="buttons">
                            <a href="<?php echo e(route('restourant.edit', ['id' => $restourant->rest_id])); ?>" class="button button--primary">Редактировать</a>
                            <a href="#" class="button button--dangeres">Удалить</a>
                        </div>
                        <!-- /.buttons -->
                    </div>
                    <!-- /.card__all -->
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>
</main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layouts',['title' => "Delivery Food"], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OpenServer\domains\DeliveryFood\resources\views/restourants/index.blade.php ENDPATH**/ ?>