<?php $__env->startSection('content'); ?>
    <section class="section section-restourant">
        <div class="container">
            <form action="<?php echo e(route('product.store')); ?>" method="post" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="input--group">
                    <select name="productRest_id" id="">
                        <option value="" selected>Ресторан</option>
                        <option value="1">Пицца Суши Вок</option>
                        <option value="2">Тануки</option>
                    </select>
                    <!-- /# -->
                </div>
                <!-- /.input-group -->
                <div class="input--group">
                    <select name="productType_id" id="">
                        <option value="" selected>Выберите тип блюда</option>
                        <option value="1">Роллы</option>
                        <option value="2">Пицца</option>
                    </select>
                    <!-- /# -->
                </div>
                <!-- /.input-group -->
                <div class="input--group">
                    <label for="">Название блюда</label>
                    <input class="input" type="text" name="product_name">
                </div>
                <!-- /.input--group -->
                <div class="input--group">
                    <label for="">Описание блюда</label>
                    <input class="input" type="text" name="product_desc">
                </div>
                <!-- /.input--group -->
                <div class="input--group">
                    <label for="">Прикрепите картинку</label>
                    <input class="input" type="file" name="product_img">
                </div>
                <!-- /.input--group -->
                <div class="input--group">
                    <label for="">Стоимость</label>
                    <input class="input" type="number" name="product_price">
                </div>
                <!-- /.input--group -->
                <input type="submit" value="Отправить данные" class="button__create">
            </form>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layouts',['title' => "Создать новое блюдо"], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OpenServer\domains\DeliveryFood\resources\views/products/create.blade.php ENDPATH**/ ?>