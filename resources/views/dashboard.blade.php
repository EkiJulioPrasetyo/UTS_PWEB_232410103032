@php
    $username = request()->query('username', 'Guest');
@endphp

@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')

<div class="max-w-4xl mx-auto space-y-6">

    <div x-data="videoCarousel()" x-init="start()" class="relative w-full h-64 overflow-hidden rounded-lg shadow-lg bg-black">
        <template x-for="(video, idx) in videos" :key="idx">
            <div x-show="active === idx"class="absolute inset-0 transition-opacity duration-700":class="{'opacity-0': active!==idx, 'opacity-100': active===idx}">
                <video :src="video" autoplay muted loop class="w-full h-full object-cover"></video>
            </div>
        </template>
    </div>

    <div class="bg-white rounded-lg shadow p-6">
        <h1 class="text-3xl font-bold mb-4">Selamat datang, {{ $username }}!</h1>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
            <a href="{{ url('/pengelolaan') }}?username={{ $username }}" class="block bg-blue-500 text-white font-semibold rounded-lg p-4 text-center hover:bg-blue-600 hover:scale-105 transition duration-300 ease-in-out shadow-md">Daftar Anime</a>
            <a href="{{ url('/') }}" class="block bg-red-500 text-white font-semibold rounded-lg p-4 text-center hover:bg-red-600 hover:scale-105 transition duration-300 ease-in-out shadow-md">Logout</a>
            <a href="{{ url('/profile') }}?username={{ $username }}" class="block bg-blue-500 text-white font-semibold rounded-lg p-4 text-center hover:bg-blue-600 hover:scale-105 transition duration-300 ease-in-out shadow-md">Profil Saya</a>
        </div>
    </div>

</div>
@endsection

@push('scripts')
<script>
function videoCarousel() {
    return {
        videos: [
            "{{ asset('storage/video1.mp4') }}",
            "{{ asset('storage/video2.mp4') }}",
            "{{ asset('storage/video3.mp4') }}"
        ],
        active: 0,
        start() {
            this.interval = setInterval(() => this.next(), 10000);
        },
        next() {
            this.active = (this.active + 1) % this.videos.length;
        },
        prev() {
            this.active = (this.active - 1 + this.videos.length) % this.videos.length;
        }
    }
}
</script>
@endpush
