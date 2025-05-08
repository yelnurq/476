@extends("layouts/auth")
@section("title")
Авторизация
@endsection
@section("main")
<div style="position:absolute; top:50%; left:50%; margin:0; transform:translate(-50%, -50%);" class="auth-form">
    <form style="text-align:center;border-radius:5px; padding:30px 20px; box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;" action="{{route("login")}}" method="POST">
        @csrf
		<p style="font-size:18px; font-weigth:700">Пайдаланушылар үшін кіру</p>
        <input style="font-family:'Nunito Sans';display:block; font-size:16px;width:300px; border-radius:5px; background:none; border:1px solid black;padding:5px; padding-left:15px; padding-right:15px" type="text" name="name" placeholder="Логиніңізді енгізіңіз: ">
        <input style="display:block; font-size:16px;width:300px; border-radius:5px; background:none; border:1px solid black;padding:5px; padding-left:15px; margin-top:5px; padding-right:15px"  type="password" name="password" placeholder="Құпия сөзіңізді енгізіңіз: ">
        <button style="text-align:center;border-radius:5px;border:1px solid black;margin-top:20px;  font-size:13px; padding:5px 15px; background:none;" type="submit">Кіру</button>
    </form>
</div>
<style>
    .auth-form form {
        font-family: "Nunito Sans"
    }
</style>


@endsection
