@extends("layouts/head2")
@section("main")
    <div class="pdf-container" style="text-align: center; margin: 20px 200px">
        <h1>
            Вице-министрдің мектептерде оқу-жаттығу өткізу туралы бұйрығы
        </h1>
        <iframe src="{{ asset('docs/2.pdf') }}" width="100%" height="800px"></iframe>
    </div>
@endsection
