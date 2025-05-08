@extends('layouts/head')
@section("title")
    KSS - брюки
@endsection
@section("header")
<div class="header-img">
    <img src="{{asset("img/dvubortny-muzhskoy-kostum-zelenyj-900x1200-removebg-preview.png")}}" alt="">

    <div class="block">
        <p class="text">KSS-магазин одежды</p>
        <p class="desc">KSS - это виртуальная столица моды для тех, кто ценит стиль, качество и удобство.</p>
        <a href="#main" >Посмотреть</a>
    </div>
</div>
@endsection
@section("main")
    <div class="main">
        <div id="main" class="container">
            <div class="products-title">
                Наши брюки
            </div>
            <div class="products">

                @foreach ($product as $p)
                    @if($p->tag_id === 4)
                    <div class="product">
                        <img src="{{asset($p->image_url)}}" alt="{{$p->name}}" class="product-image">

                        <p class="name">{{$p->name}}</p>
                        <p class="price">{{$p->price}} ₸</p>
                        <form action="{{route("cart.add", ["productId"=>$p->id])}}" method="POST">
                            @csrf
                            <input type="number" name="quantity" min="1" value="1">
                            <button type="submit">В корзину</button>
                        </form>
                    </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="container">

            <div class="side">
                <div class="number">
                    <p class="up">Телефон флагманского магазина</p>
                    <p class="down">+7 700 700 7777</p>
                </div>
                <div class="form">
                    <form action="#">
                        <p class="up">Оставить отзыв</p>
                        <input type="text" name="name" placeholder="Как вас звать?">
                        <input type="text" name="text" placeholder="Ваш отзыв...">
                        <button type="submit">Отправить</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="down-footer">
            <div class="container">
                <div class="logo">
                    <p>KSS-shop</p>
                </div>
                <div class="tools">
                    <div class="up">
                        <a href="/rules">условия пользования</a>
                        <a href="/polites">политика конфиденциальности</a>
                    </div>
                    <div class="down">
                        <p>© 2024 KSS Магазин Одежды · Все права защищены</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
