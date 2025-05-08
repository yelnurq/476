@extends('layouts.head')
@section("title")
MusicZone - корзинасы
@endsection
@section("main")
    <div class="main">
        <div class="container">
            <div class="cart-title">
                <p>Себет</p>
            </div>
            <div class="cart">
                <div class="table">
                    @if(session()->has("cart"))

                    <table class="cart-table" border="0" cellspacing="0">
                        <tr>
                            <th>Себетке қосылған тауарлар</th>
                            <th>Бағасы, ₸</th>
                            <th>Саны</th>
                            <th>Жалпы сома</th>
                        </tr>
                    @endif
                    @foreach (session("cart", []) as $productId=>$item )
                    <tr>

                        <td>{{$item["name"]}}</td>
                        <td>{{$item["price"]}} ₸</td>
                        <td>{{$item["quantity"]}}</td>
                        <td>{{$item["price"]*$item["quantity"]}} ₸</td>
                    </tr>

                    @endforeach
                </table>
                @if(session()->has("cart"))
                    <table class="order-cart" border="0" cellspacing="0">
                        <tr>
                            <th>Тапсырысты оформдау</th>
                        </tr>
                        <tr>
                            <td>Жалпы сома: {{$total}} ₸</td>
                        </tr>
                        <tr>
                            <td>
                                <form action="{{ route('orders.store') }}" method="POST">
                                    @csrf
                                    <!-- Себеттің мәліметтерімен жасалған жасырын өріс қосамыз -->
                                    <input type="hidden" name="cart" value="{{ json_encode(session('cart')) }}">

                                    <div class="form-group">
                                        <label for="customer_name">Клиенттің аты:</label>
                                        <input type="text" id="customer_name" name="name" class="form-control" required>
                                    </div>

                                    <div style="margin-bottom: 30px;" class="form-group">
                                        <label for="customer_address">Клиенттің мекен-жайы:</label>
                                        <input type="text" id="customer_address" name="address" class="form-control" required>
                                    </div>


                                    @if(Auth::guard("web")->check())
                                    <button type="submit">Тапсырысты оформдау</button>

                                    @else
                                        <a class="button" href="{{route("register")}}">Тіркеу</a>

                                    @endif
                                </form>
                            </td>
                        </tr>
                    </table>
                </div>
                @endif
                @if(session()->has("cart"))
                <form class="cart-clear" action="{{route("cart.clear")}}" method="GET">
                    @csrf
                    <button type="submit">Себетті тазарту</button>
                </form>
                @else
                <p class="cart-else">Тауарларды себетке қосыңыз</p>
                @endif
            </div>
        </div>
    </div>
@endsection
