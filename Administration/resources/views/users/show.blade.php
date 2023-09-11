@extends('layouts.app')

@section('content')
    <h1>Szczegóły użytkownika {{ $user->first_name }} {{ $user->last_name }}</h1>

    <p>Email: {{ $user->email }}</p>
    <p>Rola: {{ $user->role }}</p>
@endsection
