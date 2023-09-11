@extends('layouts.app')

@section('content')
    <h1>Edycja użytkownika {{ $user->first_name }} {{ $user->last_name }}</h1>

    <form action="{{ route('users.update', $user->id) }}" method="post">
        @csrf
        @method('PUT')
        <div>
            <label for="first_name">Imię:</label>
            <input type="text" name="first_name" value="{{ $user->first_name }}" required>
        </div>
        <div>
            <label for="last_name">Nazwisko:</label>
            <input type="text" name="last_name" value="{{ $user->last_name }}" required>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" value="{{ $user->email }}" required>
        </div>
        <div>
            <label for="password">Hasło (pozostaw puste, aby nie zmieniać):</label>
            <input type="password" name="password">
        </div>
        <div>
            <label for="role">Rola:</label>
            <select name="role">
                <option value="user" {{ $user->role == 'user' ? 'selected' : '' }}>Użytkownik</option>
                <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
                <option value="editor" {{ $user->role == 'editor' ? 'selected' : '' }}>Edytor</option>
            </select>
        </div>
        <button type="submit">Zaktualizuj użytkownika</button>
    </form>
@endsection
