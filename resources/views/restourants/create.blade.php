@extends('layouts.layouts',['title' => "Создать новое блюдо"])

@section('content')
    <section class="section section-form">
        <div class="container">
            <h2>Создание Ресторана</h2>
            <form action="{{ route('restourant.store') }}" method="post" enctype="multipart/form-data">
                @include('restourants.parts.form')
            </form>
        </div>
    </section>
@endsection
