<div class="flex justify-around items-center w-full h-24">
    <div class="flex items-center">
        <img src="{{'images/kudi_logo.png'}}" alt="logo" class="mr-4 h-16 w-auto bg-gray-100 dark:bg-gray-900">
        <h4 class="">Kolobank</h4>
    </div>

    <ul class="flex justify-around items-center w-72">
        <li class="">Home</li>
        <li class="">About Us</li>
        <li class="">Blog</li>
        <li class="">
            <a href="#" class="hover:text-gray-300">Contact Us</a>
        </li>
    </ul>

    <div x-data="{ isOpen: false }" class="relative inline-block">
        <span @click="isOpen = !isOpen" class="cursor-pointer ">Sell Bitcoin/Giftcard</span>
        <ul x-show="isOpen" @click.away="isOpen = false" class="absolute  z-10 pt-1">
            <li><a class="rounded-t hover:bg-gray-800 py-2 px-4 block whitespace-no-wrap " href="#">Sell Bitcoin</a></li>
            <li><a class="hover:bg-gray-800 py-2 px-4 block whitespace-no-wrap" href="#">Sell Giftcard</a></li>
        </ul>
    </div>

    <button class="bg-blue-500  py-2 px-4 rounded-full focus:outline-none focus:ring focus:border-blue-300 transition-all duration-300 ease-in-out hover:bg-blue-600">Login</button>
</div>
{{-- sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10 --}}
