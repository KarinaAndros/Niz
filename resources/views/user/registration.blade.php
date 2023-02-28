<?php


?>


@extends('layouts.template')
@section('title')
    НижБлог/Регистрация
@endsection
@section('content')
    <div id="image-background">
        <div class="filter-background d-flex justify-content-center align-items-center">
            <div class="auth-form-block">
                <div class="welcome">Регистрация</div>
                <div class="line"></div>
                <form class="d-block needs-validation" novalidate>
                    <div class="input-set">
                        <input class="user-field" type="text" placeholder="Email*" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                        <div class="invalid-feedback invalid-feedback-custom-style">
                            Поле "Email" не должно быть пустым
                        </div>
                        <input class="user-field" type="text" placeholder="Логин*" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                        <div class="invalid-feedback">
                            Поле "Логин" не должно быть пустым
                        </div>
                        <input class="user-field" type="password" placeholder="Пароль*" id="validationCustom01" required>
                        <div class="invalid-feedback">
                            Поле "Пароль" не должно быть пустым
                        </div>
                        <input class="user-field" type="password" placeholder="Повторить пароль*" id="validationCustom01" required>
                        <div class="invalid-feedback">
                            Поле "Повторить пароль" не должно быть пустым
                        </div>
                    </div>
                    <button class="continue-btn">Продолжить</button>
                </form>
                <a class="slider-txt" href="">ВХОД</a>
            </div>
            <div class="auth-form-block">
                <div class="welcome">Регистрация</div>
                <div class="line"></div>
                <form class="d-block needs-validation" novalidate>
                    <div class="input-set-2">
                        <div class="d-flex justify-content-center">
                            <div class="select-image-block d-flex align-content-center justify-content-center">
                                <input id="file" class="input-file" name="file" type="file" accept="image/*" onchange="load(this)">
                                <label for="file" class="select-image">Выбрать фото</label>
                                <div class="d-flex align-items-center align-content-center">
                                    <img class="avatar" src="{{asset('icons/person-fill.svg')}}" width="120px" height="120px">
                                </div>
                            </div>
                        </div>
                        <input class="user-field" type="text" placeholder="Имя*" id="validationCustom01" required>
                        <div class="invalid-feedback">
                            Поле "Имя" не должно быть пустым
                        </div>
                        <input class="user-field" type="text" placeholder="Фамилия*" id="validationCustom01" required>
                        <div class="invalid-feedback">
                            Поле "Фамилия" не должно быть пустым
                        </div>
                    </div>
                    <button class="continue-btn">Зарегистрироваться</button>
                </form>
                <a class="slider-txt" href="">ВХОД</a>
            </div>
        </div>
    </div>
@endsection
