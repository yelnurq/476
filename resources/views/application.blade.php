@extends('layouts.head2')

@section('main')


<div class="director">
    <div>
        <h1 style="text-align: center">Мектепке өтініш беру формасы</h1>
    </div>
    <form action="{{ route('application.submit') }}" method="POST">
        @csrf

        <div class="mb-3" style="margin-top:5px;">
            <label for="student_name" class="form-label">Оқушының аты-жөні</label>
            <input type="text" class="form-control" id="student_name" name="student_name" required>
        </div>

        <div class="mb-3" style="margin-top:5px;">
            <label for="birth_date" class="form-label">Туған күні</label>
            <input type="date" class="form-control" id="birth_date" name="birth_date" required>
        </div>

        <div class="mb-3" style="margin-top:5px;">
            <label for="grade" class="form-label">Қай сыныпқа өтеді</label>
            <select class="form-select" name="grade" id="grade" required>
                <option value="">Сыныпты таңдаңыз</option>
                @for($i = 1; $i <= 11; $i++)
                    <option value="{{ $i }}">{{ $i }} сынып</option>
                @endfor
            </select>
        </div>

        <div class="mb-3" style="margin-top:5px;">
            <label for="parent_name" class="form-label">Ата-анасының (қамқоршының) аты-жөні</label>
            <input type="text" class="form-control" id="parent_name" name="parent_name" required>
        </div>

        <div class="mb-3" style="margin-top:5px;">
            <label for="phone" class="form-label">Байланыс нөмірі</label>
            <input type="tel" class="form-control" id="phone" name="phone" required placeholder="+7">
        </div>

        <div class="mb-3" style="margin-top:5px;">
            <label for="message" class="form-label">Қосымша ақпарат</label>
            <textarea class="form-control" id="message" name="message" rows="3"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Өтінішті жіберу</button>
    </form>
</div>
<div class="container">
    <h2 class="mb-4"></h2>

  


</div>
@endsection
