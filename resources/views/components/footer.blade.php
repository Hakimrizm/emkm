<footer class="bg-gray-800 text-white">
    <div class="py-4">
        <div class="container mx-auto px-6 flex flex-col md:flex-row justify-between items-center">
            <h5 class="text-lg font-semibold mb-3 md:mb-0">Ikuti kami di social media</h5>
            <div class="flex space-x-4">
                <!-- Instagram -->
                <a href="#" class="hover:text-blue-400">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 fill-current" viewBox="0 0 16 16">
                        <path d="M8 0C5.829...z"/> {{-- (potong path demi singkat) --}}
                    </svg>
                </a>
                <!-- TikTok -->
                <a href="#" class="hover:text-blue-400">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 fill-current" viewBox="0 0 16 16">
                        <path d="M9 0h1.98...z"/>
                    </svg>
                </a>
                <!-- Twitter-X -->
                <a href="#" class="hover:text-blue-400">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 fill-current" viewBox="0 0 16 16">
                        <path d="M12.6.75h2.454...z"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>

    <div class="bg-gray-100 text-gray-700">
        <div class="container mx-auto px-6 py-10 grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Deskripsi Aplikasi -->
            <div>
                <h5 class="text-lg font-semibold mb-2">E-MKM</h5>
                <p>Aplikasi pencatatan keuangan dan edukasi bisnis untuk UMKM Indonesia.</p>
            </div>

            <!-- Navigasi -->
            <div>
                <h5 class="text-lg font-semibold mb-2">Navigasi</h5>
                <ul class="space-y-1">
                    <li><a href="/" class="hover:underline">Beranda</a></li>
                    <li><a href="/tentang-kami" class="hover:underline">Tentang Kami</a></li>
                    <li><a href="#" class="hover:underline">Edukasi</a></li>
                    <li><a href="#" class="hover:underline">Layanan</a></li>
                </ul>
            </div>

            <!-- Kontak -->
            <div>
                <h5 class="text-lg font-semibold mb-2">Kontak</h5>
                <p>Email: support@emkm.id</p>
                <p>WhatsApp: +62 812-3456-7890</p>
            </div>
        </div>

        <div class="bg-gray-800 text-center text-white text-sm py-4">
            &copy; {{ date('Y') }} 2025 E-MKM. All rights reserved.
        </div>
    </div>
</footer>
