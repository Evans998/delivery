<?php $__env->startSection('content'); ?>
    <main id="restourant">
        <section class="section section-restourant">
            <div class="container">
                <div class="section__header restourant__header">
                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($product->productRest_id == $product->rest_id): ?>
                            <h2 class="section__header-title"><?php echo e($product->rest_name); ?></h2>
                            <?php break; ?>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    <div class="card-desc card__desc">
                        <span class="rating tanuki-rating">4.5</span>
                        <strong class="midprice">От 900 ₽</strong>
                        <span class="dish">Пицца и суши</span>
                    </div>
                </div>
                <div class="block cards">
                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="card">
                            <div class="card-img"><img src="<?php echo e(asset($product->product_img)); ?>" alt="Ролл угорь стандарт"></div>
                            <div class="card-main">
                                <div class="card-main__header product-header">
                                    <span class="card-title"><?php echo e($product->product_name); ?></span>
                                    <p class="desc"><?php echo e($product->product_desc); ?></p>
                                </div>
                                <div class="product-desc">
                                    <button class="button button--primary">В корзину
                                        <img src="/img/shopping-cart-white.svg" alt="Корзина" class="logo-cart">
                                    </button>

                                    <strong class="product-price"><?php echo e($product->product_price); ?> ₽</strong>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </section>
    </main>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts/layouts',['title' => "Тануки"], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OpenServer\domains\DeliveryFood\resources\views/products/index.blade.php ENDPATH**/ ?>