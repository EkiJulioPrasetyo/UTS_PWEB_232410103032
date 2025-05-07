@php
    $showNavbar = false;
    $fullPage = true;
@endphp

@extends('layouts.app')
@section('title', 'Login')
@section('content')

<div class="min-h-screen bg-cover bg-center bg-no-repeat flex items-center justify-center" style="background-image: url('/images/login-bg.jpg')">
    <div class="bg-white bg-opacity-60 backdrop-blur-lg p-8 rounded-lg shadow-xl w-full max-w-md">
        <h2 class="text-2xl font-bold mb-6 text-center text-white">Login</h2>
        <form action="/dashboard" method="GET">
            <div class="mb-4">
                <label for="username" class="block text-white">Username</label>
                <input type="text" name="username" id="username" class="w-full px-4 py-2 rounded border focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div class="mb-6">
                <label for="password" class="block text-white">Password</label>
                <input type="password" name="password" id="password" class="w-full px-4 py-2 rounded border focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700 transition">Login</button>
        </form>
    </div>
</div>
@endsection
