@extends('layouts/layouts',['title' => "Тануки"])

@section('content')
    <main id="restourant">
        <section class="section section-restourant">
            <div class="container">
                <div class="section__header restourant__header">
                    @foreach($products as $product)
                        @if($product->productRest_id == $product->rest_id)
                            <h2 class="section__header-title">{{ $product->rest_name }}</h2>
                            @break
                        @endif
                    @endforeach

                    <div class="card-desc card__desc">
                        <span class="rating tanuki-rating">4.5</span>
                        <strong class="midprice">От 900 ₽</strong>
                        <span class="dish">Пицца и суши</span>
                    </div>
                </div>
                <div class="block cards">
                    @foreach($products as $product)
                        <div class="card">
                            <div class="card-img"><img src="{{ asset($product->product_img)  }}" alt="Ролл угорь стандарт"></div>
                            <div class="card-main">
                                <div class="card-main__header product-header">
                                    <span class="card-title">{{ $product->product_name }}</span>
                                    <p class="desc">{{ $product->product_desc }}</p>
                                </div>
                                <div class="product-desc">
                                    <button class="button button--primary">В корзину
                                        <img src="/img/shopping-cart-white.svg" alt="Корзина" class="logo-cart">
                                    </button>

                                    <strong class="product-price">{{ $product->product_price }} ₽</strong>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </main>
@endsection

