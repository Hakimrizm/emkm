<aside class="w-64 bg-gray-900 text-white min-h-screen fixed overflow-y-auto">
  <div class="flex items-center justify-between px-6 py-4 border-b border-gray-700">
    <a href="/" class="text-xl font-bold">E-MKM</a>
    <button class="md:hidden focus:outline-none">
      <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
        <path fill-rule="evenodd" d="M6 4h12v2H6V4zm0 5h12v2H6V9zm0 5h12v2H6v-2z" clip-rule="evenodd" />
      </svg>
    </button>
  </div>

  <nav class="px-6 py-4">
    <h2 class="text-sm uppercase text-gray-400 mb-4">Menu</h2>
    <a href="/dashboard" class="flex items-center gap-2 py-2 px-4 rounded hover:bg-gray-700 bg-gray-800">
      <i class="bi bi-grid-fill"></i>
      <span>Dashboard</span>
    </a>

    <div x-data="{ open: false }" class="mt-4">
      <button @click="open = !open" class="w-full flex items-center justify-between py-2 px-4 rounded hover:bg-gray-700">
        <span class="flex items-center gap-2">
          <i class="bi bi-stack"></i>
          Components
        </span>
        <svg :class="{'rotate-180': open}" class="w-4 h-4 transition-transform" fill="currentColor" viewBox="0 0 20 20">
          <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 10.67l3.71-3.44a.75.75 0 111.02 1.1l-4.25 3.95a.75.75 0 01-1.02 0l-4.25-3.95a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
        </svg>
      </button>
      <div x-show="open" class="mt-2 space-y-2 text-sm pl-6">
        <a href="#" class="block hover:text-blue-400">Alert</a>
        <a href="#" class="block hover:text-blue-400">Badge</a>
        <a href="#" class="block hover:text-blue-400">Breadcrumb</a>
        <!-- Tambahkan item lain sesuai kebutuhan -->
      </div>
    </div>

    <div class="mt-6">
      <h2 class="text-sm uppercase text-gray-400 mb-4">Forms & Tables</h2>
      <a href="#" class="block py-2 px-4 rounded hover:bg-gray-700">Form Elements</a>
      <a href="#" class="block py-2 px-4 rounded hover:bg-gray-700">Form Layout</a>
      <a href="#" class="block py-2 px-4 rounded hover:bg-gray-700">Table</a>
    </div>

    <div class="mt-6">
      <h2 class="text-sm uppercase text-gray-400 mb-4">Pages</h2>
      <a href="#" class="block py-2 px-4 rounded hover:bg-gray-700">Email App</a>
      <a href="#" class="block py-2 px-4 rounded hover:bg-gray-700">Chat</a>
      <a href="#" class="block py-2 px-4 rounded hover:bg-gray-700">Gallery</a>
    </div>

    <div class="mt-6">
      <h2 class="text-sm uppercase text-gray-400 mb-4">Support</h2>
      <a href="#" class="block py-2 px-4 rounded hover:bg-gray-700">Documentation</a>
      <a href="#" class="block py-2 px-4 rounded hover:bg-gray-700">Contribute</a>
      <a href="#" class="block py-2 px-4 rounded hover:bg-gray-700">Donate</a>
    </div>
  </nav>
</aside>
