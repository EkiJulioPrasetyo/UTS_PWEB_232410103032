@php
    $username = request()->query('username', '');
@endphp

@extends('layouts.app')

@section('title', 'Profil')

@section('content')
<div class="max-w-xl mx-auto bg-white rounded-xl shadow p-6 mt-6 space-y-4">
    <h1 class="text-3xl font-bold text-gray-800">Profil Pengguna</h1>

    <div class="border-t pt-4 space-y-2">
        <p class="text-gray-700"><span class="font-semibold">Username:</span> {{ $username }}</p>
        <p class="text-gray-700"><span class="font-semibold">Role:</span> {{ $role }}</p>
        <p class="text-gray-700"><span class="font-semibold">Email:</span> {{ $email }}</p>
    </div>
</div>
@endsection

