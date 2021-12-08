<?php $__env->startSection('content'); ?>
    <section class="section section-form">
        <div class="container">
            <h2>Изменение Ресторана</h2>
            <form action="<?php echo e(route('restourant.update')); ?>" method="post" enctype="multipart/form-data">
                <?php echo method_field('PATCH'); ?>
                <?php echo $__env->make('restourants.parts.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </form>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layouts',['title' => "Создать новое блюдо"], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OpenServer\domains\DeliveryFood\resources\views/restourants/edit.blade.php ENDPATH**/ ?>