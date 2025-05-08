@extends("layouts.head2")
@section("title")
{{$p->title}}
@endsection
@section("main")
    <div class="content">
        <div class="container">

            <div class="products">
                    <div style="display: flex; justify-content:space-between; align-items:center" class="title-p">
                        <p style="text-align: left;font-weight:600;">{{$p->title}}</p>
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

                        <div class="product-show">
                            <p>
                                {{$p->description}}
                            </p>

                            </div>
                        </div>
            </div>
        </div>

    </div>
@endsection
