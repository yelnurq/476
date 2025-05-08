@extends('layouts/head')
@section("main")
    <div class="main">
        <div class="container">
            <div class="create-product">
                <form action="{{route("shoes.store")}}" method="POST">
                    @csrf
                    <p>Смокинг</p>
                    <label for="name">Названия продукта: </label>
                    <input type="text" name="name">
                    <label for="name">Цена продукта: </label>
                    <input type="number" name="price">
                    <label for="name">Изображения продукта: </label>
                    <input type="text" name="image_url">
                    <button type="submit">Добавить продукт</button>
                </form>
            </div>
        </div>
    </div>
@endsection
