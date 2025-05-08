

@extends("layouts/head2")
@section("main")
<div class="news_show">
    <div class="news_show_cont">
        <p class="title">{{ $news->title }}</p>

    
        <div class="card">
            <div class="card-body">
                <p class="card-text">{{ $news->desc }}</p>
            </div>
            <img src="{{ asset('storage/app/public/' . $news->image) }}" class="card-img-top" alt="{{ $news->title }}">
        </div>
    </div>
</div>
@endsection
