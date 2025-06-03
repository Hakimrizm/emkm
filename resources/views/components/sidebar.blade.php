<aside
  :class="sidebarToggle ? 'translate-x-0 lg:w-[90px]' : '-translate-x-full'"
  class="sidebar fixed left-0 top-0 z-9999 flex h-screen w-[290px] flex-col overflow-y-hidden border-r border-gray-200 bg-white px-5 dark:border-gray-800 dark:bg-black lg:static lg:translate-x-0"
>
  <!-- SIDEBAR HEADER -->
  <div
    :class="sidebarToggle ? 'justify-center' : 'justify-between'"
    class="flex items-center gap-2 pt-8 sidebar-header pb-7"
  >
    <a href="index.html">
      <span class="logo" :class="sidebarToggle ? 'hidden' : ''">
        <img class="dark:hidden" src="{{ asset('images/logo/logo.svg') }}" alt="Logo" />
        <img
          class="hidden dark:block"
          src="{{ asset('images/logo/logo.svg') }}"
          alt="Logo"
        />
      </span>

      <img
        class="logo-icon"
        :class="sidebarToggle ? 'lg:block' : 'hidden'"
        src="{{ asset('images/logo/logo.svg') }}"
        alt="Logo"
      />
    </a>
  </div>
  <!-- SIDEBAR HEADER -->

  <div
    class="flex flex-col overflow-y-auto duration-300 ease-linear no-scrollbar"
  >
    <!-- Sidebar Menu -->
    <nav x-data="{selected: $persist('Dashboard')}">
      <!-- Menu Group -->
      <div>
        <h3 class="mb-4 text-xs uppercase leading-[20px] text-gray-400">
          <span
            class="menu-group-title"
            :class="sidebarToggle ? 'lg:hidden' : ''"
          >
            MENU
          </span>

          <svg
            :class="sidebarToggle ? 'lg:block hidden' : 'hidden'"
            class="mx-auto fill-current menu-group-icon"
            width="24"
            height="24"
            viewBox="0 0 24 24"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              fill-rule="evenodd"
              clip-rule="evenodd"
              d="M5.99915 10.2451C6.96564 10.2451 7.74915 11.0286 7.74915 11.9951V12.0051C7.74915 12.9716 6.96564 13.7551 5.99915 13.7551C5.03265 13.7551 4.24915 12.9716 4.24915 12.0051V11.9951C4.24915 11.0286 5.03265 10.2451 5.99915 10.2451ZM17.9991 10.2451C18.9656 10.2451 19.7491 11.0286 19.7491 11.9951V12.0051C19.7491 12.9716 18.9656 13.7551 17.9991 13.7551C17.0326 13.7551 16.2491 12.9716 16.2491 12.0051V11.9951C16.2491 11.0286 17.0326 10.2451 17.9991 10.2451ZM13.7491 11.9951C13.7491 11.0286 12.9656 10.2451 11.9991 10.2451C11.0326 10.2451 10.2491 11.0286 10.2491 11.9951V12.0051C10.2491 12.9716 11.0326 13.7551 11.9991 13.7551C12.9656 13.7551 13.7491 12.9716 13.7491 12.0051V11.9951Z"
              fill=""
            />
          </svg>
        </h3>

        <ul class="flex flex-col gap-4 mb-6">
          <li>
            <a
              href="{{ route('dashboard') }}"
              @click="selected = (selected === 'dashboard' ? '': 'dashboard' )"
              class="menu-item group"
              :class=" (selected === 'dashboard') && (page === 'dashboard') ? 'menu-item-active' : 'menu-item-inactive'"
            >
              <i class="bi bi-grid" 
                :class="(selected === 'dashboard') ? 'menu-item-icon-active' : 'menu-item-icon-inactive'" 
                style="font-size: 20px;"
              ></i>

              <span
                class="menu-item-text"
                :class="sidebarToggle ? 'lg:hidden' : ''"
              >
                Dashboard
              </span>
            </a>
          </li>
          <!-- Menu Item Dashboard -->

          <!-- Menu Item Invoice and Selling -->
          <li>
            <a
              href="#"
              @click.prevent="selected = (selected === 'product' ? '':'product')"
              class="menu-item group"
              :class=" (selected === 'product') ? 'menu-item-active' : 'menu-item-inactive'"
            >
              <i class="bi bi-box-seam-fill"
                :class="(selected === 'dashboard') ? 'menu-item-icon-active' : 'menu-item-icon-inactive'" 
                style="font-size: 20px;"
              ></i>

              <span
                class="menu-item-text dark:text-white"
                :class="sidebarToggle ? 'lg:hidden' : ''"
              >
                Product
              </span>

              <svg
                class="menu-item-arrow"
                :class="[(selected === 'product') ? 'menu-item-arrow-active' : 'menu-item-arrow-inactive', sidebarToggle ? 'lg:hidden' : '' ]"
                width="20"
                height="20"
                viewBox="0 0 20 20"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M4.79175 7.39584L10.0001 12.6042L15.2084 7.39585"
                  stroke=""
                  stroke-width="1.5"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
              </svg>
            </a>

            <!-- Dropdown Menu Start -->
            <div
              class="overflow-hidden transform translate"
              :class="(selected === 'product') ? 'block' :'hidden'">
              <ul
                :class="sidebarToggle ? 'lg:hidden' : 'flex'"
                class="flex flex-col gap-1 mt-2 menu-dropdown pl-9">
                <li>
                  <a
                    href="{{ route('product.index') }}"
                    class="menu-dropdown-item group"
                    :class="page === 'daftar_produk' ? 'menu-dropdown-item-active' : 'menu-dropdown-item-inactive'"
                  >
                    Daftar Produk
                  </a>
                </li>
              </ul>
            </div>
            <div
              class="overflow-hidden transform translate"
              :class="(selected === 'product') ? 'block' :'hidden'">
              <ul
                :class="sidebarToggle ? 'lg:hidden' : 'flex'"
                class="flex flex-col gap-1 mt-2 menu-dropdown pl-9">
                <li>
                  <a
                    href="{{ route('productCategory.index') }}"
                    class="menu-dropdown-item group"
                    :class="page === 'kategori_produk' ? 'menu-dropdown-item-active' : 'menu-dropdown-item-inactive'"
                  >
                    Kategori Produk
                  </a>
                </li>
              </ul>
            </div>
            <!-- Dropdown Menu End -->
          </li>
          <!-- Menu Item Invoice and Selling -->

          <!-- Menu Item Expense -->
          <li>
            <a
              href="#"
              @click.prevent="selected = (selected === 'transaksi' ? '':'transaksi')"
              class="menu-item group"
              :class=" (selected === 'transaksi') ? 'menu-item-active' : 'menu-item-inactive'"
            >
              <i class="bi bi-credit-card-2-front"
                :class="(selected === 'transaksi') ? 'menu-item-icon-active' : 'menu-item-icon-inactive'" 
                  style="font-size: 20px;"
              ></i>

              <span
                class="menu-item-text dark:text-white"
                :class="sidebarToggle ? 'lg:hidden' : ''"
              >
                Transaksi
              </span>

              <svg
                class="menu-item-arrow"
                :class="[(selected === 'transaksi') ? 'menu-item-arrow-active' : 'menu-item-arrow-inactive', sidebarToggle ? 'lg:hidden' : '' ]"
                width="20"
                height="20"
                viewBox="0 0 20 20"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M4.79175 7.39584L10.0001 12.6042L15.2084 7.39585"
                  stroke=""
                  stroke-width="1.5"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
              </svg>
            </a>

            <!-- Dropdown Menu Start -->
            <div
              class="overflow-hidden transform translate"
              :class="(selected === 'transaksi') ? 'block' :'hidden'">
              <ul
                :class="sidebarToggle ? 'lg:hidden' : 'flex'"
                class="flex flex-col gap-1 mt-2 menu-dropdown pl-9">
                <li>
                  <a
                    href="{{ route('expense.index') }}"
                    class="menu-dropdown-item group"
                    :class="page === 'pengeluaran' ? 'menu-dropdown-item-active' : 'menu-dropdown-item-inactive'"
                  >
                    Pengeluaran
                  </a>
                </li>
              </ul>
            </div>
            <div
              class="overflow-hidden transform translate"
              :class="(selected === 'transaksi') ? 'block' :'hidden'">
              <ul
                :class="sidebarToggle ? 'lg:hidden' : 'flex'"
                class="flex flex-col gap-1 mt-2 menu-dropdown pl-9">
                <li>
                  <a
                    href="{{ route('income.index') }}"
                    class="menu-dropdown-item group"
                    :class="page === 'pemasukan' ? 'menu-dropdown-item-active' : 'menu-dropdown-item-inactive'"
                  >
                    Pemasukan
                  </a>
                </li>
              </ul>
            </div>
            <div
              class="overflow-hidden transform translate"
              :class="(selected === 'transaksi') ? 'block' :'hidden'">
              <ul
                :class="sidebarToggle ? 'lg:hidden' : 'flex'"
                class="flex flex-col gap-1 mt-2 menu-dropdown pl-9">
                <li>
                  <a
                    href="index.html"
                    class="menu-dropdown-item group"
                    :class="page === 'hutang' ? 'menu-dropdown-item-active' : 'menu-dropdown-item-inactive'"
                  >
                    Hutang
                  </a>
                </li>
              </ul>
            </div>
            <div
              class="overflow-hidden transform translate"
              :class="(selected === 'transaksi') ? 'block' :'hidden'">
              <ul
                :class="sidebarToggle ? 'lg:hidden' : 'flex'"
                class="flex flex-col gap-1 mt-2 menu-dropdown pl-9">
                <li>
                  <a
                    href="index.html"
                    class="menu-dropdown-item group"
                    :class="page === 'vendor' ? 'menu-dropdown-item-active' : 'menu-dropdown-item-inactive'"
                  >
                    Invoice
                  </a>
                </li>
              </ul>
            </div>
            <!-- Dropdown Menu End -->
          </li>
          <!-- Menu Item Expense -->

          <!-- Menu Item Expense -->
          <li>
            <a
              href="#"
              @click.prevent="selected = (selected === 'laporan_keuangan' ? '':'laporan_keuangan')"
              class="menu-item group"
              :class=" (selected === 'laporan_keuangan') ? 'menu-item-active' : 'menu-item-inactive'"
            >
              <i class="bi bi-cash-coin"
                :class="(selected === 'dashboard') ? 'menu-item-icon-active' : 'menu-item-icon-inactive'" 
                style="font-size: 20px;"
              ></i>

              <span
                class="menu-item-text dark:text-white"
                :class="sidebarToggle ? 'lg:hidden' : ''"
              >
                laporan Keuangan
              </span>

              <svg
                class="menu-item-arrow"
                :class="[(selected === 'laporan_keuangan') ? 'menu-item-arrow-active' : 'menu-item-arrow-inactive', sidebarToggle ? 'lg:hidden' : '' ]"
                width="20"
                height="20"
                viewBox="0 0 20 20"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M4.79175 7.39584L10.0001 12.6042L15.2084 7.39585"
                  stroke=""
                  stroke-width="1.5"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
              </svg>
            </a>

            <!-- Dropdown Menu Start -->
            <div
              class="overflow-hidden transform translate"
              :class="(selected === 'laporan_keuangan') ? 'block' :'hidden'">
              <ul
                :class="sidebarToggle ? 'lg:hidden' : 'flex'"
                class="flex flex-col gap-1 mt-2 menu-dropdown pl-9">
                <li>
                  <a
                    href="index.html"
                    class="menu-dropdown-item group"
                    :class="page === 'laba-rugi' ? 'menu-dropdown-item-active' : 'menu-dropdown-item-inactive'"
                  >
                    Laba Rugi
                  </a>
                </li>
              </ul>
            </div>
            <div
              class="overflow-hidden transform translate"
              :class="(selected === 'laporan_keuangan') ? 'block' :'hidden'">
              <ul
                :class="sidebarToggle ? 'lg:hidden' : 'flex'"
                class="flex flex-col gap-1 mt-2 menu-dropdown pl-9">
                <li>
                  <a
                    href="index.html"
                    class="menu-dropdown-item group"
                    :class="page === 'neraca' ? 'menu-dropdown-item-active' : 'menu-dropdown-item-inactive'"
                  >
                    Neraca
                  </a>
                </li>
              </ul>
            </div>
            <div
              class="overflow-hidden transform translate"
              :class="(selected === 'laporan_keuangan') ? 'block' :'hidden'">
              <ul
                :class="sidebarToggle ? 'lg:hidden' : 'flex'"
                class="flex flex-col gap-1 mt-2 menu-dropdown pl-9">
                <li>
                  <a
                    href="index.html"
                    class="menu-dropdown-item group"
                    :class="page === 'buku-besar' ? 'menu-dropdown-item-active' : 'menu-dropdown-item-inactive'"
                  >
                    Buku Besar
                  </a>
                </li>
              </ul>
            </div>
            <div
              class="overflow-hidden transform translate"
              :class="(selected === 'laporan_keuangan') ? 'block' :'hidden'">
              <ul
                :class="sidebarToggle ? 'lg:hidden' : 'flex'"
                class="flex flex-col gap-1 mt-2 menu-dropdown pl-9">
                <li>
                  <a
                    href="index.html"
                    class="menu-dropdown-item group"
                    :class="page === 'jurnal-umum' ? 'menu-dropdown-item-active' : 'menu-dropdown-item-inactive'"
                  >
                    Jurnal Umum
                  </a>
                </li>
              </ul>
            </div>
            <!-- Dropdown Menu End -->
          </li>
          <!-- Menu Item Expense -->

          <!-- Menu Item Hpp -->
          <li>
            <a
              href="calendar.html"
              @click="selected = (selected === 'hitung-hpp' ? '': 'hitung-hpp' )"
              class="menu-item group"
              :class=" (selected === 'hitung-hpp') && (page === 'hitung-hpp') ? 'menu-item-active' : 'menu-item-inactive'"
            >
              <i class="bi bi-calculator-fill"
                :class="(selected === 'dashboard') ? 'menu-item-icon-active' : 'menu-item-icon-inactive'" 
                  style="font-size: 20px;"
              ></i>

              <span
                class="menu-item-text"
                :class="sidebarToggle ? 'lg:hidden' : ''"
              >
                Hitung-hpp
              </span>
            </a>
          </li>
          <!-- Menu Item Calendar -->
        </ul>
      </div>

      <!-- Settings Group -->
      <div>
        <h3 class="mb-4 text-xs uppercase leading-[20px] text-gray-400">
          <span
            class="menu-group-title"
            :class="sidebarToggle ? 'lg:hidden' : ''"
          >
            Setting
          </span>

          <svg
            :class="sidebarToggle ? 'lg:block hidden' : 'hidden'"
            class="mx-auto fill-current menu-group-icon"
            width="24"
            height="24"
            viewBox="0 0 24 24"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              fill-rule="evenodd"
              clip-rule="evenodd"
              d="M5.99915 10.2451C6.96564 10.2451 7.74915 11.0286 7.74915 11.9951V12.0051C7.74915 12.9716 6.96564 13.7551 5.99915 13.7551C5.03265 13.7551 4.24915 12.9716 4.24915 12.0051V11.9951C4.24915 11.0286 5.03265 10.2451 5.99915 10.2451ZM17.9991 10.2451C18.9656 10.2451 19.7491 11.0286 19.7491 11.9951V12.0051C19.7491 12.9716 18.9656 13.7551 17.9991 13.7551C17.0326 13.7551 16.2491 12.9716 16.2491 12.0051V11.9951C16.2491 11.0286 17.0326 10.2451 17.9991 10.2451ZM13.7491 11.9951C13.7491 11.0286 12.9656 10.2451 11.9991 10.2451C11.0326 10.2451 10.2491 11.0286 10.2491 11.9951V12.0051C10.2491 12.9716 11.0326 13.7551 11.9991 13.7551C12.9656 13.7551 13.7491 12.9716 13.7491 12.0051V11.9951Z"
              fill=""
            />
          </svg>
        </h3>

        <ul class="flex flex-col gap-4 mb-6">
          <li>
            <a
              href="calendar.html"
              @click="selected = (selected === 'Profile' ? '':'Profile')"
              class="menu-item group"
              :class=" (selected === 'Profile') && (page === 'Profile') ? 'menu-item-active' : 'menu-item-inactive'"
            >
              <i class="bi bi-person-fill" 
                :class="(selected === 'dashboard') ? 'menu-item-icon-active' : 'menu-item-icon-inactive'" 
                style="font-size: 20px;"
              ></i>

              <span
                class="menu-item-text"
                :class="sidebarToggle ? 'lg:hidden' : ''"
              >
                My Profile
              </span>
            </a>
          </li>
          <li>
            <a
              href="calendar.html"
              @click="selected = (selected === 'Profile-Company' ? '':'Profile-Company')"
              class="menu-item group"
              :class=" (selected === 'Profile-Company') && (page === 'Profile-Company') ? 'menu-item-active' : 'menu-item-inactive'"
            >
              <i class="bi bi-building" 
                :class="(selected === 'dashboard') ? 'menu-item-icon-active' : 'menu-item-icon-inactive'" 
                style="font-size: 20px;"
              ></i>

              <span
                class="menu-item-text"
                :class="sidebarToggle ? 'lg:hidden' : ''"
              >
                Profile Company
              </span>
            </a>
          </li>
        </ul>
      </div>
    </nav>
    <!-- Sidebar Menu -->

    <!-- Promo Box -->
    <div
      :class="sidebarToggle ? 'lg:hidden' : ''"
      class="mx-auto mb-10 w-full max-w-60 rounded-2xl bg-gray-50 px-4 py-5 text-center dark:bg-white/[0.03] bg-gray-200"
    >
      <h3 class="mb-2 font-semibold text-gray-900 dark:text-white">
        EMKM (Elektronik Mitra Kecil Menengah)
      </h3>
      <p class="mb-4 text-gray-500 text-theme-sm dark:text-gray-400">
        Unlock semua fitur dan jadikan bisnis mu melesat.
      </p>
      <a
        href="{{ route('dashboard') }}"
        target="_blank"
        rel="nofollow"
        class="flex items-center justify-center p-3 font-medium text-white rounded-lg bg-brand-500 text-theme-sm hover:bg-brand-600"
      >
        Purchase Plan
      </a>
    </div>
    <!-- Promo Box -->
  </div>
</aside>
