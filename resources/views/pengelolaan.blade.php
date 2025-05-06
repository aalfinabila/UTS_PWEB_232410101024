@extends('layout.app')
@section('content')
<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 p-4 mt-[4rem]">
  @for($i=0; $i < 6; $i++)
    <!-- Card -->
    <div class="bg-white rounded-xl shadow-md overflow-hidden w-[14rem] mx-auto">
      <img src="img/kopi.png" alt="Latte" class="w-full h-36 object-cover">
      <div class="p-3">
        <h3 class="text-gray-500 text-xs mb-1">Latte</h3>
        <p class="font-bold text-base mb-1">Rp 20.000</p>
        <p class="text-xs text-gray-600 mb-4">Perpaduan antara espresso dan susu steamed, menghasilkan rasa lembut dan creamy.</p>
        <div class="flex items-center justify-between">
          <div class="flex ml-[8rem] items-end space-x-2 text-xs text-gray-700">
            <button class="w-5 h-5 rounded-full border border-black flex items-center justify-center">−</button>
            <span>1</span>
            <button class="w-5 h-5 rounded-full border border-black flex items-center justify-center">＋</button>
          </div>
        </div>
      </div>
    </div>
  @endfor
</div>
@endsection
