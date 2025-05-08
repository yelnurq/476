@extends("layouts.head2")
@section("title")
Мұғалімдерге
@endsection
@section("main")
    <div class="content">
        <div class="container">

            <div class="products">
                <p style="text-align: left;font-weight:600">Ақпараттар - Мұғалімдерге</p>
                    @foreach ($product as $p)
                        @if($p->tag_id === 2)
                        <div class="product">
                            <a href="{{ route("product.show", ["id" => $p->id]) }}">
                            <p class="title" style="font-weight: 600; transition:300ms">{{$p->title}}</p>
                            <p>
                                @php
                                    $words = explode(' ', $p->description);
                                    echo implode(' ', array_slice($words, 0, 60));
                                @endphp
                            </p>
                            </a>
                            <div class="tool">
                                @if( $p->tag_id === 1 )
                                    <p>Оқушыларға арналған жаңалық</p>
                                @elseif($p->tag_id === 3)
                                    <p>Ата-аналарға арналған жаңалық</p>
                                @elseif($p->tag_id === 2)
                                    <p>Мұғалімдерге арналған жаңалық</p>
                                @endif
                                <p>{{$p->created_at}}</p>

                            </div>
                        </div>
                        @endif
                    @endforeach
            </div>
        </div>
        <div style="margin-top: 130px" class="footer">
            <div class="footer-line">
                <div style="display: flex;gap:20px;align-items:center;" class="left-side">
                    <img style="height: 60px" src="{{ asset('img/logo.png') }}" alt="tag">
                    <p class="p">Ахмет Байтұрсынұлы атындағы<br> №47 жалпы орта білім беретін мектебі</p>

                </div>
                <div class="numbers">
                    <p>Қабылдау бөлімі:</p>
                    +7(722) 264-19-15
                    <p>Есепші бөлімі:</p>
                    +7(722) 264-19-15
                </div>

            </div>
        </div>
    </div>
@endsection
