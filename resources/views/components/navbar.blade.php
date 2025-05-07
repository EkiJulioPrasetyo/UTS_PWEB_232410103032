@php
$username = request()->query('username', 'Guest');
@endphp

<nav class="bg-blue-600 shadow p-4">
    <div class="container mx-auto flex justify-between items-center">
        <span class="text-white font-bold text-lg">Katalog Anime</span>
        <div class="space-x-6">
            <a href="/dashboard?username={{ $username }}" class="text-white hover:text-gray-200 transition">Dashboard</a>
            <a href="/pengelolaan?username={{ $username }}" class="text-white hover:text-gray-200 transition">Daftar Anime</a>
            <a href="/profile?username={{ $username }}" class="text-white hover:text-gray-200 transition">Profil</a>
        </div>
    </div>
</nav>
