@php
    $username = request()->query('username', '');
@endphp

@extends('layouts.app')
@section('title', 'Pengelolaan Anime')
@section('content')

<div class="max-w-4xl mx-auto mt-6 space-y-6">
    <div class="overflow-x-auto">
        <table class="w-full table-auto border-collapse">
            <thead>
                <tr class="bg-gray-200">
                    <th class="p-2 border">Judul</th>
                    <th class="p-2 border">Genre</th>
                    <th class="p-2 border">Rating</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($animes as $anime)
                <tr class="bg-white">
                    <td class="p-2 border">{{ $anime['judul'] }}</td>
                    <td class="p-2 border">{{ $anime['genre'] }}</td>
                    <td class="p-2 border">{{ $anime['rating'] }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
