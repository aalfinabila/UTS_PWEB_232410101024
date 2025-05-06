<nav class="bg-white py-4 fixed w-full top-0 z-50 shadow-md">
    <div class="container mx-auto px-4 flex justify-between items-center">
        <div class="flex items-center">
            <img src="{{ asset('img/logo.png') }}" class="w-20 h-auto" alt="">
            <span class="text-lg font-bold text-coffee">Coffee Shop</span>
        </div>
        
        <!-- Navigation -->
        <nav class=" md:block">
            <ul class="flex">
                <li class="mx-4"><a href="{{ route('dashboard') }}" class="text-gray-700 font-medium hover:text-coffee transition-colors">Tentang</a></li>
                <li class="mx-4"><a href="{{ route('pengelolaan') }}" class="text-gray-700 font-medium hover:text-coffee transition-colors">Menu</a></li>
                <li class="mx-4"><a href="#" class="text-gray-700 font-medium hover:text-coffee transition-colors">Layanan</a></li>
            </ul>
        </nav>
        
        <!-- Auth Buttons -->
        <div class="flex gap-3">
            @if(Route::currentRouteName() == 'login')
            <button id="signInBtn" class="bg-coffee-light text-white px-5 py-2 rounded-md font-medium hover:bg-coffee-dark transition-colors">Sign In</button>
            <button class="bg-white text-gray-700 px-5 py-2 rounded-md font-medium border border-gray-300 hover:bg-gray-100 transition-colors">Register</button>
            @else
            <a href="#"><img src="img/shopping cart (1).png" class="w-8" alt=""></a>
            <a href="{{ 'profile' }}"><img src="img/User (1).png" class="w-8" alt=""></a>
            @endif
        </div>
    </div>
</nav>