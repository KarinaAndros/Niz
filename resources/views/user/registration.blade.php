
@extends('layouts.template')
@section('title')
    НижБлог/Регистрация
@endsection
@section('content')
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>







@foreach($users as $key => $user)
<div>{{$key}}</div>
@endforeach

    <form action="{{route('user.store')}}" method="post" id="form_reg" name="reg_form" action="#" enctype="multipart/form-data">



        <input type="text" style="border-color: #1a202c"  name="name" id="name" placeholder="Имя">
        <div style="color: red" id="name_error"></div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Email address</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
</div>


        <input type="text" name="surname" id="surname" placeholder="Фамилия">
        <input type="text" name="patronymic" id="patronymic" placeholder="Отчество">
        <input type="text" name="email" id="email" placeholder="Email">
        <input type="text" name="login" id="login" placeholder="Логин">
        <input type="password" name="password" id="password" placeholder="Пароль">
        <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Повторите пароль">
        <input type="file" name="img" id="img" placeholder="Аватарка">
        <button id="reg_button" type="submit">Зарегистрироваться</button>
    </form>

    <script>
        $('#reg_button').click(function (e){
            e.preventDefault();
            $.ajax({
                url: '/users/registration',
                type: 'post',
                dataType: "json",
                data:{
                    "_token": "{{ csrf_token() }}",
                    "name": $("#name").val(),
                    "surname": $("#surname").val(),
                    "patronymic": $("#patronymic").val(),
                    "login": $("#login").val(),
                    "email": $("#email").val(),
                    "password": $("#password").val(),
                    "password_confirmation": $("#password_confirmation").val(),
                    "img": $("#img").val(),
                } ,
                success: function (data){
                    console.log('well');
                },
            }).fail(function ($xhr){
                let data = $xhr.responseJSON;
                if (data['name_error'] !== null){
                    $('#name_error').html(data['name_error']);
                }
            });
        });
    </script>
@endsection
