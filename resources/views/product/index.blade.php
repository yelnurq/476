@extends("layouts.head2")
@section("title")
Жаңалық
@endsection
@section("main")
<div class="news_index">
    <div class="news_index_cont">
        <p class="title">Ақпараттар</p>

  
        <div class="news_row">
            @foreach ($news as $item)
            <a href="{{ route('news.show', $item->id) }}" class="btn btn-info">
                    <div class="card">
                        <img src="{{ asset('storage/app/public/' . $item->image) }}" class="card-img-top" alt="{{ $item->title }}">
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
