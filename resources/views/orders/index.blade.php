@extends('layouts.head2')

@section('main')
    <div class="content">
        <div class="container">
            <div class="admin_news">
                <div class="admin_container">
                    <div class="bailanys-d mt-5">
                        <p style="font-weight: 600">Өтініштер тізімі</p>
                        @foreach ($app as $application)
                        <div class="bai-text">
                            <p><strong>Оқушы:</strong> {{ $application->student_name }} ({{ $application->grade }} сынып)</p>
                            <p><strong>Туған күні:</strong> {{ $application->birth_date }}</p>
                            <p><strong>Ата-анасы:</strong> {{ $application->parent_name }}</p>
                            <p><strong>Телефон:</strong> {{ $application->phone }}</p>
                            @if ($application->message)
                                <p><strong>Қосымша:</strong> {{ $application->message }}</p>
                            @endif
                            <hr>
                        </div>
                    @endforeach
                    
                    
                    </div>
                    
                    <p class="director_cont_title">Жаңа жаңалық қосу</p>
                
                
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                
                    <form action="{{ route('news.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                
                        <div class="mb-3">
                            <label for="title" class="form-label">Тақырып</label>
                            <input type="text" name="title" id="title" class="form-control" required>
                        </div>
                
                        <div class="mb-3">
                            <label for="desc" class="form-label">Сипаттама</label>
                            <textarea name="desc" id="desc" class="form-control" rows="4" required></textarea>
                        </div>
                
                        <div class="mb-3">
                            <label for="image" class="form-label">Сурет жүктеу</label>
                            <input type="file" name="image" id="image" class="form-control" required>
                        </div>
                
                        <button type="submit" class="btn btn-success">Жариялау</button>
                    </form>
                </div>
            </div>
            <div class="bailanys-d">
                <p style="font-weight: 600" >Директорға хаттар</p>

                @foreach ($directortext as $item)
                <div class="bai-text">
                    <p>{{$item->id}}. {{$item->name}}</p>
                    <p>{{$item->text}}</p>
                </div>
                @endforeach
                <div class="paginate">{{$directortext->links()}}</div>
            </div>
        </div>

    </div>
@endsection
