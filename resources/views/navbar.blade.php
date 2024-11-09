@extends('app')
@section('navbar')
<div>
    // türkçe avukatlık bürosu için navbar
    <nav class="flex items-center justify-between p-4 bg-white dark:bg-black">
        <div>
            <a href="{{ route('home') }}" class="text-lg font-bold text-gray-800 dark:text-white">{{ env('APP_NAME') }}</a>
        </div>
        <div>
            <a href="{{ route('home') }}" class="text-gray-800 dark:text-white">Anasayfa</a>
            <a href="{{ route('about') }}" class="text-gray-800 dark:text-white">Hakkımızda</a>
            <a href="{{ route('services') }}" class="text-gray-800 dark:text-white">Hizmetler</a>
            <a href="{{ route('contact') }}" class="text-gray-800 dark:text-white">İletişim</a>
        </div>
    </nav>
</div>
@endsection