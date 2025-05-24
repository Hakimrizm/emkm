<nav class="fixed top-0 left-0 right-0 bg-gray-800 text-white shadow z-50">
    <div class="container mx-auto px-6 py-3 flex items-center justify-between">
        <a href="#" class="text-xl font-bold">E-MKM</a>

        <button @click="open = !open" class="md:hidden">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
        </button>

        <div class="hidden md:flex space-x-6 items-center">
            <a href="/" class="hover:text-blue-400 {{ request()->routeIs('/') ? 'font-bold underline' : '' }}">Home</a>
            <a href="{{ route('about') }}" class="hover:text-blue-400">Tentang Kami</a>
            <a href="{{ route('education') }}" class="hover:text-blue-400">Edukasi</a>

            <div x-data="{ open: false }" class="relative">
                <button @click="open = !open" class="hover:text-blue-400 flex items-center gap-1">
                    Layanan
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 
                        111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                    </svg>
                </button>
                <div x-show="open" @click.away="open = false"
                     class="absolute bg-white text-gray-800 mt-2 w-48 rounded shadow-lg py-2 z-50">
                    <a href="/hpp/form" class="block px-4 py-2 hover:bg-gray-100">Hitung HPP</a>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100">Another Action</a>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100">Something Else</a>
                </div>
            </div>
        </div>

        <div class="hidden md:flex space-x-4 items-center">
            @guest
                @if (Route::has('login'))
                    <a href="{{ route('login') }}" class="hover:text-blue-400 {{ request()->routeIs('login') ? 'font-bold underline' : '' }}">Login</a>
                @endif
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="hover:text-blue-400 {{ request()->routeIs('register') ? 'font-bold underline' : '' }}">Register</a>
                @endif
            @else
                <div x-data="{ userMenu: false }" class="relative">
                    <button @click="userMenu = !userMenu" class="hover:text-blue-400 flex items-center gap-2">
                        {{ Auth::user()->name }}
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 
                            111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                        </svg>
                    </button>
                    <div x-show="userMenu" @click.away="userMenu = false"
                         class="absolute right-0 mt-2 bg-white text-gray-800 w-48 rounded shadow-lg py-2 z-50">
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100">Settings</a>
                        <a href="{{ route('dashboard') }}" class="block px-4 py-2 hover:bg-gray-100">Dashboard</a>
                        <hr class="my-1">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="block w-full text-left px-4 py-2 hover:bg-gray-100">Logout</button>
                        </form>
                    </div>
                </div>
            @endguest
        </div>
    </div>

    <!-- Mobile menu -->
    <div x-data="{ open: false }" x-show="open" class="md:hidden px-6 pb-4 space-y-2 bg-gray-700">
        <a href="/" class="block text-white hover:text-blue-400">Home</a>
        <a href="{{ route('about') }}" class="block text-white hover:text-blue-400">Tentang Kami</a>
        <a href="{{ route('education') }}" class="block text-white hover:text-blue-400">Edukasi</a>
        <a href="/hpp/form" class="block text-white hover:text-blue-400">Hitung HPP</a>

        @guest
            @if (Route::has('login'))
                <a href="{{ route('login') }}" class="block text-white hover:text-blue-400">Login</a>
            @endif
            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="block text-white hover:text-blue-400">Register</a>
            @endif
        @else
            <a href="{{ route('dashboard') }}" class="block text-white hover:text-blue-400">Dashboard</a>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="block text-left text-white hover:text-blue-400">Logout</button>
            </form>
        @endguest
    </div>
</nav>
