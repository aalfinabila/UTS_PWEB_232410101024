@extends('layout.app')
@section('content')
<main>
    <div class="h-screen bg-cover bg-center" style="background-image: url(' img/bglogin.png')"></div>
</main>
<!-- Login Modal -->
<div id="loginModal" class="fixed inset-0 bg-black bg-opacity-50 z-[1000]  flex items-center justify-center">
    <form action="{{ route('login.post') }}" method="POST" class="bg-white p-8 rounded-lg w-full max-w-md mx-4">
        @csrf
        <div class="space-y-6">
            <div class="space-y-2">
                <label for="username" class="block text-gray-700 font-medium">Username</label>
                <input type="text" id="username" name="username" placeholder="Username" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-coffee-light">
            </div>

            <div class="space-y-2">
                <label for="password" class="block text-gray-700 font-medium">Password</label>
                <input type="password" id="password" name="password" placeholder="Password" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-coffee-light">
            </div>

            <div class="flex justify-end">
                <a href="#" class="text-blue-500 text-sm">Forgot?</a>
            </div>

            <button type="submit" id="loginBtn" class="w-full bg-coffee-light text-white py-3 rounded-md font-medium hover:bg-coffee-dark transition-colors">
                Login
            </button>
        </div>
    </form>
</div>

<script>
    const signInBtn = document.getElementById('signInBtn');
const loginModal = document.getElementById('loginModal');

signInBtn.addEventListener('click', () => {
    loginModal.classList.remove('hidden');
});
window.addEventListener('click', (e) => {
    if (e.target === loginModal) {
        loginModal.classList.add('hidden');
    }
});
</script>
 @endsection