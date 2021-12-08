<?php $__env->startSection('content'); ?>

<section class="section section-rest">
    <div class="container">
        <h2 class="section--title"><?php echo e($restourant->rest_name); ?></h2>
        <!-- /.section--title -->
        <div><img src="<?php echo e(asset($restourant->rest_img)); ?>" alt="fefe" class="rest__img"></div>
        <!-- /.rest__img -->
        <p class="rest__rating">Рейтинг ресторана: <?php echo e($restourant->rest_desc); ?></p>
        <!-- /.rest__rating -->
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layouts',['title' => "Delivery Food"], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OpenServer\domains\DeliveryFood\resources\views/restourants/show.blade.php ENDPATH**/ ?>