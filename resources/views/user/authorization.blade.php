<?php

?>

@extends('layouts.template')
@section('title')
    НижБлог/Авторизация
@endsection
@section('')
    <div id="image-background">
        <div class="filter-background d-flex justify-content-center align-items-end">
            <div class="auth-form-block">
                <div class="welcome">Добро пожаловать!</div>
                <div class="line"></div>
                <form class="d-block">
                    <input class="user-field" placeholder="Логин">
                    <input class="user-field" type="password" placeholder="Пароль">
                    <div class="forgot-password-field">
                        <a href="">Забыли пароль?</a>
                    </div>
                    <div class="remember-checkbox">
                        <input type="checkbox"> <span>Запомнить меня</span>
                    </div>
                    <div class="vk-btn-wrapper d-flex justify-content-center">
                        <a href="" class="vk-btn">
                            <img src="{{asset('/img/vk-logo.png')}}">
                            <div>Войти с помощью ВК</div>
                        </a>
                    </div>
                    <input class="continue-btn" type="submit" value="Войти">
                </form>
                <a class="slider-txt" href="">РЕГИСТРАЦИЯ</a>
            </div>
        </div>
    </div>
@endsection
