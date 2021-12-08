@extends('layouts.layouts',['title' => "Delivery Food"])

@section('content')

<section class="section section-rest">
    <div class="container">
        <h2 class="section--title">{{ $restourant->rest_name }}</h2>
        <!-- /.section--title -->
        <div><img src="{{ asset($restourant->rest_img) }}" alt="fefe" class="rest__img"></div>
        <!-- /.rest__img -->
        <p class="rest__rating">Рейтинг ресторана: {{ $restourant->rest_desc }}</p>
        <!-- /.rest__rating -->
    </div>
</section>
@endsection
