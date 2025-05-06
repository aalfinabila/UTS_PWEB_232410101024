@extends('layout.app')
@section('content')
@php
    $userData= session('userData')
@endphp
<div class="max-w-xl  mx-auto bg-[#8D746421] rounded-2xl p-5 mt-[6rem]">
    <h2 class="text-center text-[#7a4f2f] font-bold text-2xl ">Profile</h2>
    <form  class="space-y-5">
      <!-- Nama Lengkap -->
      <div>
        <label for="nama" class="block font-medium text-gray-700 mb-1">Nama Lengkap</label>
        <input type="text" id="nama" name="nama" value="{{ $userData['name'] }}"
          class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#a98269]" />
      </div>
  
      <!-- Nama Pengguna -->
      <div>
        <label for="username" class="block font-medium text-gray-700 mb-1">Nama Pengguna</label>
        <input type="text" id="username" name="username" value="{{ $userData['username'] }}"
          class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#a98269]" />
      </div>
  
      <!-- Email -->
      <div>
        <label for="email" class="block font-medium text-gray-700 mb-1">Email</label>
        <input type="email" id="email" name="email" value="{{ $userData['email'] }}"
          class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#a98269]" />
      </div>
  
      <!-- No. HP -->
      <div>
        <label for="nohp" class="block font-medium text-gray-700 mb-1">No. HP</label>
        <input type="text" id="nohp" name="nohp" value="{{ $userData['no_hp'] }}"
          class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#a98269]" />
      </div>
  
      <!-- Tombol Perbarui -->
      <div class="text-right pt-2">
        <button 
          class="bg-[#a98269] text-white px-6 py-2 rounded-lg font-semibold hover:bg-[#936b52] transition">Perbarui</button>
      </div>
    </form>
  </div>
  
@endsection