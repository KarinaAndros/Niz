@extends('layouts.template')
@section('title') НижБлог/Главная @endsection
@section('content')
    @auth()
    Ок
    @endauth
    @include('user.form')
@endsection

