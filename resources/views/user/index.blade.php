@extends('layouts.app')

@section('content')
<div>
    <h1>Users</h1>
    <a href="{{ route('users.create') }}">Create New User</a>
    <ul>
        @foreach ($users as $user)
            <li>{{ $user->name }} ({{ $user->email }})</li>
        @endforeach
    </ul>
</div>
@endsection
