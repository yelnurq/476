@extends("layouts/head2")
@section("main")
    <div class="pdf-container" style="text-align: center; margin: 20px 200px">
        <h1>
        Төтенше жағдайлар мен оқиғалар алгоритмдері                                        
        </h1>
        <iframe src="{{ asset('docs/3.pdf') }}" width="100%" height="800px"></iframe>
    </div>
@endsection
