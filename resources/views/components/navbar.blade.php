<nav 
    x-data="{ scrolled: false }" 
    x-init="window.addEventListener('scroll', () => scrolled = window.scrollY > 10)" 
    :class="scrolled 
        ? 'bg-blue-800/60 backdrop-blur text-white shadow-lg mt-2' 
        : 'bg-white text-gray-900 mt-6'" 
    class="fixed top-4 left-1/2 transform -translate-x-1/2 w-[95%] max-w-7xl rounded-xl z-50 transition-all duration-300 ease-in-out"
>
    <div class="px-6 py-3 flex items-center justify-between">
        <a href="#" class="text-xl font-bold">E-MKM</a>

        <button @click="open = !open" class="md:hidden">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
        </button>

        <div class="hidden md:flex space-x-6 items-center">
            <a href="/" class="hover:underline font-medium">Home</a>
            <a href="{{ route('about') }}" class="hover:underline font-medium">Tentang Kami</a>
            <a href="{{ route('education') }}" class="hover:underline font-medium">Edukasi</a>

            <div x-data="{ open: false }" class="relative">
                <button @click="open = !open" class="flex items-center gap-1 hover:underline font-medium">
                    Layanan
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 
                        111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                    </svg>
                </button>
                <div x-show="open" @click.away="open = false"
                     class="absolute bg-white text-gray-800 mt-2 w-48 rounded shadow-lg py-2 z-50">
                    <a href="/hpp/form" class="block px-4 py-2 hover:bg-gray-100">Hitung HPP</a>
                </div>
            </div>
        </div>

        <div class="hidden md:flex space-x-4 items-center">
            @guest
                @if (Route::has('login'))
                    <a href="{{ route('login') }}" class="hover:underline font-medium">Login</a>
                @endif
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="hover:underline font-medium">Register</a>
                @endif
            @else
                <div x-data="{ userMenu: false }" class="relative">
                    <button @click="userMenu = !userMenu" class="flex items-center gap-2 hover:underline font-medium">
                        {{ Auth::user()->name }}
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 
                            111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                        </svg>
                    </button>
                    <div x-show="userMenu" @click.away="userMenu = false"
                         class="absolute right-0 mt-2 bg-white text-gray-800 w-48 rounded shadow-lg py-2 z-50">
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
</nav>
