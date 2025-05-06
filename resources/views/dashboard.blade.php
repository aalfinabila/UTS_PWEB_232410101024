@extends('layout.app')
@section('content')
  <main class="pt-32 px-6">
    <div class="max-w-3xl mx-auto text-center bg-white p-10 rounded-xl shadow-md">
      <h2 class="text-3xl font-bold text-coffee mb-4">Selamat Datang di Senja Coffe!</h2>
      <p class="text-gray-600 mb-6">Kopi tak hanya tentang rasa, tapi juga tentang jeda dan makna disetiap jeda</p>
      <div class="flex flex-col md:flex-row justify-center gap-4">
        <a href="{{ route('pengelolaan') }}" class="bg-coffee-light hover:bg-coffee-dark text-white px-6 py-3 rounded-md transition">Lihat Menu</a>
        <a href="{{ route('profile') }}" class="border border-coffee-light text-coffee px-6 py-3 rounded-md hover:bg-coffee-light hover:text-white transition">Profil Saya</a>
      </div>
    </div>
  </main>
@endsection