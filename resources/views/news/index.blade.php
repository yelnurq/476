
@extends("layouts/head2")
@section("main")
<div class="news_index">
    <div class="news_index_cont">
        <h1 class="title" style="margin-top:40px;font-size:30px">Жаңалықтар</h1>

  
        <div class="news_row">
            @foreach ($news as $item)
            <a href="{{ route('news.show', $item->id) }}" class="btn btn-info">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->title }}</h5>
                            <p class="card-text">{{ Str::limit($item->desc, 300) }}</p>
        
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</div>

@endsection