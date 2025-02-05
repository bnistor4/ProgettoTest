@extends('layouts.app')

@section('title', 'Login')

@section('content')
<h1>Login</h1>
<form id="loginForm" onsubmit="login(event)">
    @csrf
    <input type="text" name="username" placeholder="Username" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit">Login</button>
</form>
@endsection