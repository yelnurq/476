@extends("layouts/head2")
@section("main")
    <div class="pdf-container" style="text-align: center; margin: 20px 200px">
        <h1>
            Министрдің терроризмге қарсы іс-қимыл туралы бұйрығы
                                        
        </h1>
        <iframe src="{{ asset('docs/1.pdf') }}" width="100%" height="800px"></iframe>
    </div>
@endsection
