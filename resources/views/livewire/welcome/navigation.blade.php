<div class=" bg-red-400 h-24 w-full">
    <div>
        <h4>Kolobank</h4>
        <ul>
            <li>Home</li>
            <li>About Us</li>
            <li>Blog</li>
            <li>contact Us</li>
        </ul>
    </div>
    @auth
        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500" wire:navigate>Dashboard</a>
    @else
        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500" wire:navigate>Log in</a>

        @if (Route::has('register'))
            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500" wire:navigate>Register</a>
        @endif
    @endauth
</div>
{{-- sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10 --}}
