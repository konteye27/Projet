@extends('layouts.app')

@section('content')
<div>
    <h1>Create User</h1>
    <form method="POST" action="{{ route('users.store') }}">
        @csrf
        <div>
            <label for="name">Name</label>
            <input id="name" type="text" name="name" required autofocus>
        </div>
        <div>
            <label for="email">Email</label>
            <input id="email" type="email" name="email" required>
        </div>
        <div>
            <label for="password">Password</label>
            <input id="password" type="password" name="password" required>
        </div>
        <div>
            <label for="password_confirmation">Confirm Password</label>
            <input id="password_confirmation" type="password" name="password_confirmation" required>
        </div>
        <div>
            <button type="submit">Create</button>
        </div>
    </form>
</div>
@endsection
