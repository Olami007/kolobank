<div class="flex justify-around items-center w-full h-24">
    <div class="flex items-center">
        <img src="{{'images/kudi_logo.png'}}" alt="logo" class="mr-4 h-16 w-auto bg-gray-100 dark:bg-gray-900">
        <h4 class="">Kolobank</h4>
    </div>

    <ul class="flex justify-around items-center w-72">
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
    <div x-data="{ isOpen: false }" class="relative inline-block">
        <button @click="isOpen = !isOpen" class=" py-2 px-4 rounded inline-flex items-center">
            <span class="mr-1">Sell Bitcoin/Giftcard</span>
            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 12l-6-6 1.41-1.41L10 9.17l4.59-4.58L16 6z"/></svg>
        </button>

        <ul x-show="isOpen" @click.away="isOpen = false" class="absolute z-10 text-gray-700 pt-1">
            <li><a class="rounded-t bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap" href="#">Sell Bitcoin</a></li>
            <li><a class="bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap" href="#">Sell Giftcard</a></li>
        </ul>
    </div>


    <button class="bg-blue-500  py-2 px-4 rounded-full focus:outline-none focus:ring focus:border-blue-300 transition-all duration-300 ease-in-out hover:bg-blue-600">Login</button>
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
