@extends('layouts.app')

@section('content')
    <h1>Tworzenie nowego użytkownika</h1>

    <form action="{{ route('users.store') }}" method="post">
        @csrf
        <div>
            <label for="first_name">Imię:</label>
            <input type="text" name="first_name" required>
        </div>
        <div>
            <label for="last_name">Nazwisko:</label>
            <input type="text" name="last_name" required>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" required>
        </div>
        <div>
            <label for="password">Hasło:</label>
            <input type="password" name="password" required>
        </div>
        <div>
            <label for="role">Rola:</label>
            <select name="role">
                <option value="user">Użytkownik</option>
                <option value="admin">Admin</option>
                <option value="editor">Edytor</option>
            </select>
        </div>
        <button type="submit">Utwórz użytkownika</button>
    </form>
@endsection
