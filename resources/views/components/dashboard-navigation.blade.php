<nav class="bg-white/10 backdrop-blur-md border-b border-white/10 fixed top-0 left-0 right-0 z-40 hidden md:block">
    <div class="container mx-auto px-4">
        <div class="flex items-center justify-between h-16">
            <div class="flex items-center">
                <img src="https://cdn.discordapp.com/attachments/1331273355118247936/1331277862338166794/Untitled_design_1.png?ex=6791b160&is=67905fe0&hm=99896016ada111a54a1bc8142356eebe7dab960f4221c63b83113ecf17f1ef57&"
                     alt="SnapPay Logo"
                     class="h-12 w-auto">
            </div>

            <div class="flex space-x-8">
                <a href="{{ route('dashboard') }}"
                   class="flex items-center text-white/90 hover:text-white transition-colors duration-300 group">
                    <svg xmlns="http://www.w3.org/2000/svg"
                         class="h-5 w-5 mr-2"
                         fill="none"
                         viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round"
                              stroke-linejoin="round"
                              stroke-width="2"
                              d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                    Dashboard
                </a>

                <a
                   class="flex items-center text-white/90 hover:text-white transition-colors duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg"
                         class="h-5 w-5 mr-2"
                         fill="none"
                         viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round"
                              stroke-linejoin="round"
                              stroke-width="2"
                              d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    Potjes
                </a>

                <a href="{{ route('loans') }}"
                   class="flex items-center text-white/90 hover:text-white transition-colors duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg"
                         class="h-5 w-5 mr-2"
                         fill="none"
                         viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round"
                              stroke-linejoin="round"
                              stroke-width="2"
                              d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                    </svg>
                    Leningen
                </a>
            </div>

            <!-- Uitloggen voor desktop -->
            <form method="POST" action="{{ route('logout') }}" class="flex items-center">
                @csrf
                <button type="submit"
                        class="flex items-center text-white/90 hover:text-white transition-colors duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg"
                         class="h-5 w-5 mr-2"
                         fill="none"
                         viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round"
                              stroke-linejoin="round"
                              stroke-width="2"
                              d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                    </svg>
                    Uitloggen
                </button>
            </form>
        </div>
    </div>
</nav>
