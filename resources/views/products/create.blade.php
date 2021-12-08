@extends('layouts.layouts',['title' => "Создать новое блюдо"])

@section('content')
    <section class="section section-restourant">
        <div class="container">
            <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="input--group">
                    <select name="productRest_id" id="">
                        <option value="" selected>Ресторан</option>
                        @foreach($restourant as $restourant)
                            <option value="{{ $restourant->rest_id }}">{{ $restourant->rest_name }}</option>
                        @endforeach
                    </select>
                    <!-- /# -->
                </div>
                <!-- /.input-group -->
                <div class="input--group">
                    <select name="productType_id" id="">
                        <option value="" selected>Выберите тип блюда</option>
                        @foreach($types as $type)
                            <option value="{{ $type->type_id }}">{{ $type->type_name }}</option>
                        @endforeach
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
@endsection
