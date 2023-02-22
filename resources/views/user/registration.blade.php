<?php


?>


@extends('layouts.template')
@section('title')
    НижБлог/Регистрация
@endsection
@section('content')
<button type="button" class="btn btn-primary">Test Bootstrap</button>
    <form method="post" name="reg_form">
        <input type="text" name="name" placeholder="Имя">
        <input type="text" name="surname" placeholder="Фамилия">
        <input type="text" name="patronymic" placeholder="Отчество">
        <input type="text" name="email" placeholder="Email">
        <input type="text" name="login" placeholder="Логин">
        <input type="password" name="password" placeholder="Пароль">
        <input type="password" name="password_confirmation" placeholder="Повторите пароль">
    </form>
@endsection
