<div class="bg-white/80  z-50 w-full backdrop-blur-md shadow-md" x-data="{ isOpen: false }">
    <nav class="container px-6 py-5 mx-auto md:flex md:justify-between md:items-center">
        <div class="flex items-center justify-between">
            <a class="text-xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500 md:text-2xl hover:text-green-400"
                href="#">
                Resto
            </a>
            <!-- Mobile menu button -->
            <div @click="isOpen = !isOpen" class="flex md:hidden">
                <button type="button" class="text-gray-800 hover:text-gray-400 focus:outline-none focus:text-gray-400"
                    aria-label="toggle menu">
                    <svg viewBox="0 0 24 24" class="w-6 h-6 fill-current">
                        <path fill-rule="evenodd"
                            d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z">
                        </path>
                    </svg>
                </button>
            </div>
        </div>
        <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
        <div :class="isOpen ? 'flex' : 'hidden'"
            class="flex-col mt-8 space-y-4 md:flex md:space-y-0 md:flex-row md:items-center md:space-x-10 md:mt-0">
            <a class="text-lg text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500 hover:text-green-400"
                href="/">Home</a>
            <a class="text-lg text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500 hover:text-green-400"
                href="#section1">About Us</a>
            <a class="text-lg text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500 hover:text-green-400"
                href="/login">SignIn</a>
            <div>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                </svg>
            </div>
        </div>
    </nav>
</div>
