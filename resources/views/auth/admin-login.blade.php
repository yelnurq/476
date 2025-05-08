@extends("layouts/auth")
@section("title")
Директорға кіру
@endsection
@section("main")
<div style="position:absolute; top:50%; left:50%; margin:0; transform:translate(-50%, -50%)" class="auth-form">
    <form style="text-align:center;border-radius:5px; padding:60px 20px; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;background: white" action="{{route("admin.login")}}" method="POST">
        @csrf
        <p style="margin-top:0;">Аутентификация</p>
        <input class="auth_input" type="text" name="name" placeholder="Логиніңізді енгізіңіз: ">
        <input class="auth_input" type="password" name="password" placeholder="Құпия сөзіңізді енгізіңіз: ">
        <button class="auth_btn" type="submit">Кіру</button>
    </form>
</div>
<style>
    .auth-form form button,input {
        font-family: "Nunito Sans"
    }
</style>

@endsection
