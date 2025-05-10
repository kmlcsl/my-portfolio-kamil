<!-- Navbar -->
<header>
    <nav class="bg-gray-800 p-4 fixed top-0 left-0 w-full z-50 border-b-2 border-teal-400 shadow-md">
        <div class="container mx-auto flex justify-between items-center">
            <a href="{{ route('home') }}"
                class="text-xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-teal-400 to-blue-500">Muhammad
                Kamil ~ Portfolio</a>
            <div class="hidden md:flex space-x-6">
                <a href="{{ route('home') }}" class="hover:text-teal-400 transition-colors">Home</a>
                <a href="{{ Request::is('home') || Request::is('/') ? '#about' : route('home') . '#about' }}"
                    class="hover:text-teal-400 transition-colors">About</a>
                <a href="{{ Request::is('home') || Request::is('/') ? '#skills' : route('home') . '#skills' }}"
                    class="hover:text-teal-400 transition-colors">Skills</a>
                <a href="{{ Request::is('home') || Request::is('/') ? '#projects' : route('home') . '#projects' }}"
                    class="hover:text-teal-400 transition-colors">Projects</a>
                <a href="{{ route('contact') }}" class="hover:text-teal-400 transition-colors">Contact</a>
            </div>
            <!-- Mobile menu button -->
            <div class="md:hidden">
                <button id="mobile-menu-button" class="text-white focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
        <!-- Mobile menu -->
        <div id="mobile-menu" class="hidden md:hidden mt-4 animate__animated animate__fadeIn">
            <div class="flex flex-col space-y-3 px-4">
                <a href="{{ route('home') }}" class="py-2 hover:text-teal-400 transition-colors">Home</a>
                <a href="{{ Request::is('home') || Request::is('/') ? '#about' : route('home') . '#about' }}"
                    class="py-2 hover:text-teal-400 transition-colors">About</a>
                <a href="{{ Request::is('home') || Request::is('/') ? '#skills' : route('home') . '#skills' }}"
                    class="py-2 hover:text-teal-400 transition-colors">Skills</a>
                <a href="{{ Request::is('home') || Request::is('/') ? '#projects' : route('home') . '#projects' }}"
                    class="py-2 hover:text-teal-400 transition-colors">Projects</a>
                <a href="{{ route('contact') }}" class="py-2 hover:text-teal-400 transition-colors">Contact</a>
            </div>
        </div>
    </nav>
</header>
