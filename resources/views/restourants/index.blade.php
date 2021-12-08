@extends('layouts.layouts',['title' => "Delivery Food"])

@section('content')
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
                @foreach($restourants as $restourant)
                    <div class="card__all">
                        <a href="{{ route('restourant.show', ['id' => $restourant->rest_id]) }}" class="card">
                            <div class="card-img">
                                <img src="{{ $restourant->rest_img }}" alt="Картинка заведения Пицца плюс">
                            </div>
                            <div class="card-main">
                                <div class="card-main__header">
                                    <h3 class="card-title">{{$restourant->rest_name}}</h3>
                                    <strong class="time-write">50 мин</strong>
                                </div>
                                <div class="card-desc">
                                    <span class="rating">{{ $restourant->rest_desc }}</span>
                                    <strong class="midprice">От 900 ₽</strong>
                                    <span class="dish">Пицца</span>
                                </div>
                                <!-- /.button button--secondary -->
                            </div>
                        </a>
                        <div class="buttons">
                            <a href="{{ route('restourant.edit', ['id' => $restourant->rest_id]) }}" class="button button--primary">Редактировать</a>
                            <a href="#" class="button button--dangeres">Удалить</a>
                        </div>
                        <!-- /.buttons -->
                    </div>
                    <!-- /.card__all -->
                @endforeach
            </div>
        </div>
    </section>
</main>
@endsection
