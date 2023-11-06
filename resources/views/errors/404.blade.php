@extends('layouts.layout', ['title' => "404 ошибка. Вас занесло не туда"])

@section('content')
    <div class="card">
        <h2 class="card-header">Вы забрели не туда, срочно вернитесь на главную страницу (404 ошибка)</h2>
        <img src="{{ asset('img/404.png') }}" alt="404">
    </div>

    <a href="/" class="btn btn-outline-primary">На главную</a>
@endsection
