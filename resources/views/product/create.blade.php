@extends('layouts.head')

@section('main')
    <div class="main">
        <div class="container">
            <div class="create-product">
                <form action="{{ route("product.store") }}" method="POST">
                    @csrf
                    <label for="name">Название продукта:</label>
                    <input type="text" name="name" required>
                    <label for="price">Цена продукта:</label>
                    <input type="number" name="price" required>
                    <label for="image_url">Изображение продукта:</label>
                    <input type="text" name="image_url" required>
                    <label for="tags">Теги</label>
                    <select name="tag_id">
                        @foreach ($tags as $tag)
                            <option value="{{$tag->id}}">{{$tag->name}}</option>
                        @endforeach
                    </select>
                    <input type="text" name="tags">
                    <button type="submit">Добавить продукт</button>
                </form>
            </div>
        </div>

    </div>
@endsection
