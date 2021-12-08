<?php echo csrf_field(); ?>
<div class="input--group">
    <label for="">Название Ресторана</label>
    <input class="input" type="text" name="rest_name">
</div>
<!-- /.input-group -->
<div class="input--group">
    <label for="">Рейтинг</label>
    <input class="input" type="text" name="rest_desc">
</div>
<!-- /.input-group -->
<div class="input--group">
    <label for="">Прикрепите картинку</label>
    <input class="input" type="file" name="rest_img">
</div>
<!-- /.input-group -->
<input type="submit" value="Отправить данные" class="button__create">
<?php /**PATH D:\OpenServer\domains\DeliveryFood\resources\views/restourants/parts/form.blade.php ENDPATH**/ ?>