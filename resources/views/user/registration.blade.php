@extends('layouts.template')
@section('title')
    НижБлог/Регистрация
@endsection
@section('content')
    <form method="post" name="reg_form" action="{{ route('user.store') }}">
        @csrf
        <input type="text" name="name" placeholder="Имя">
        <input type="text" name="surname" placeholder="Фамилия">
        <input type="text" name="patronymic" placeholder="Отчество">
        <input type="text" name="email" placeholder="Email">
        <input type="text" name="login" placeholder="Логин">
        <input type="password" name="password" placeholder="Пароль">
        <input type="password" name="password_confirmation" placeholder="Повторите пароль">
        <button type="submit">Зарегистрироваться</button>
    </form>
@endsection
