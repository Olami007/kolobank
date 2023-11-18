
<div x-data="{ isOpen: false }">
    <div class="flex justify-between items-center p-4 md:p-8">
        <div class="flex items-center">
            <img src="{{'images/kudi_logo.png'}}" alt="logo" class="mr-4 h-12 w-auto bg-gray-100 dark:bg-gray-900">
            <h4 class="">Kolobank</h4>
        </div>

        <!-- Responsive Navbar Toggle -->
        <button @click="isOpen = !isOpen" class="md:hidden focus:outline-none">
            <svg x-show="!isOpen" class="fill-current h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>

            <svg x-show="isOpen" class="fill-current h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>

        </button>

        <!-- Navbar Links (Hidden on Small Screens) -->
        <ul class="hidden md:flex justify-around items-center w-72">
            <li class="">
                <a href="#" class="hover:text-gray-300">Home</a>
            </li>
            <li class="">
                <a href="#" class="hover:text-gray-300">About Us</a>
            </li>
            <li class="">
                <a href="#" class="hover:text-gray-300">Blog</a>
            </li>
            <li class="">
                <a href="#" class="hover:text-gray-300">Contact Us</a>
            </li>
        </ul>

        <!-- Responsive Navbar Links (Visible on Small Screens) -->
        <div x-show="isOpen" @click.away="isOpen = false" class="md:hidden flex flex-col items-center absolute top-16 left-0 z-10 right-0 bg-white p-4 h-72 w-full mx-auto">
            <ul class="flex flex-col items-center space-y-8">
                <li><a href="#" class="hover:text-gray-300">Home</a></li>
                <li><a href="#" class="hover:text-gray-300">About Us</a></li>
                <li><a href="#" class="hover:text-gray-300">Blog</a></li>
                <li><a href="#" class="hover:text-gray-300">Contact Us</a></li>
            </ul>

            @auth
                <a href="{{ url('/dashboard') }}" class="mt-2 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500" wire:navigate>Dashboard</a>
            @else
            <div>
                <button class="mt-2 inline bg-blue-500 py-2 px-4  rounded focus:outline-none focus:ring focus:border-blue-300 transition-all duration-300 ease-in-out hover:bg-blue-600">
                    <a href="{{ route('login') }}" class="font-semibold text-white hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500" wire:navigate>Log in</a>
                </button>

                @if (Route::has('register'))
                    <button class="mt-2 inline bg-blue-500 py-2 px-3 rounded focus:outline-none focus:ring focus:border-blue-300 transition-all duration-300 ease-in-out hover:bg-blue-600">
                        <a href="{{ route('register') }}" class="ml-4 font-semibold text-white  hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500" wire:navigate>Register</a>
                    </button>
                    </div>
                @endif
            @endauth
        </div>


        <!-- Login Button -->
        @auth
        <a href="{{ url('/dashboard') }}" class=" font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500" wire:navigate>Dashboard</a>
    @else
    <div class="hidden md:block">
        <button class=" inline bg-blue-500 py-2 px-4  rounded focus:outline-none focus:ring focus:border-blue-300 transition-all duration-300 ease-in-out hover:bg-blue-600">
            <a href="{{ route('login') }}" class="font-semibold text-white hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500" wire:navigate>Log in</a>
        </button>

        @if (Route::has('register'))
            <button class=" inline bg-blue-500 py-2 px-3 rounded focus:outline-none focus:ring focus:border-blue-300 transition-all duration-300 ease-in-out hover:bg-blue-600">
                <a href="{{ route('register') }}" class=" font-semibold text-white  hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500" wire:navigate>Register</a>
            </button>
            </div>
        @endif
    @endauth
    </div>
</div>
{{-- sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10 --}}
  {{-- @auth
        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500" wire:navigate>Dashboard</a>
    @else
        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500" wire:navigate>Log in</a>

        @if (Route::has('register'))
            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500" wire:navigate>Register</a>
        @endif
    @endauth --}}
