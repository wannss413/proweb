@extends('layout.app')

@section('title', 'Home')
@section('page_title', 'selamat datang di berita batam')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Selamat Pagi</h1>
    <p class="mb-4">Berikut adalah berita update hari ini</p>

    @include('components.card', [
        'imgsrc'  =>asset('image/gonggong-di-batam.jpg'), 
        'title'  => 'Gonggong goreng tepuk mak limah ',
        'desc'  => 'Kuliner unik satu ini wajib dicoba untuk menguji ketahanan gigi.'
    ])
@endsection

