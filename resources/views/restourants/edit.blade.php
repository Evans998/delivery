@extends('layouts.layouts',['title' => "Создать новое блюдо"])

@section('content')
    <section class="section section-form">
        <div class="container">
            <h2>Изменение Ресторана</h2>
            <form action="{{ route('restourant.update') }}" method="post" enctype="multipart/form-data">
                @method('PATCH')
                @include('restourants.parts.form')
            </form>
        </div>
    </section>
@endsection
