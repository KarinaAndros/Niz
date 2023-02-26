<?php


?>


@extends('layouts.template')
@section('title')
    НижБлог/Регистрация
@endsection
@section('content')
    <div id="image-background">
        <div class="filter-background d-flex">
            <div class="auth-form-block justify-content-center align-items-center">
                <div class="h1">Добро пожаловать!</div>
                <hr/>
                <form class="d-block">
                    <input placeholder="Логин">
                    <input type="password" placeholder="Пароль">
                    <a href="">Забыли пароль?</a>
                    <input type="checkbox"> <span>Запомнить меня</span>
                    <a href="">
                        <img src="{{asset('/img/vk-logo.png')}}">
                        <div>Войти с помощью ВК</div>
                    </a>
                    <input type="submit" value="Войти">
                </form>
            <div>
        <div>
    </div>
@endsection
