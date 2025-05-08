@extends("layouts.head2")
@section("main")
    <div class="main">
        <div class="container">
            <div class="form-user">
                <p>Директормен байланыс</p>
                <form action="{{route("director.userwrite")}}" method="POST">
                    @csrf
                    <input type="text" name="name" placeholder="Сіздің аты-жөніңіз? (міндетті емес)">
                    <textarea name="text" cols="100" rows="10" placeholder="Сіздің ойыңыз..."></textarea>
                    <button type="submit">Жіберу</button>
                </form>
            </div>
        </div>
    </div>
@endsection
