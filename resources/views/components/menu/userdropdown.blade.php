<div>
    @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
        <button type="button"
                class="flex mx-3 text-sm bg-gray-800 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                id="user-menu-button"
                aria-expanded="false"
                data-dropdown-toggle="dropdown"
        >
            <span class="sr-only">Open user menu</span>

            <img class="size-8 rounded-full object-cover"
                 src="{{ Auth::user()->profile_photo_url }}"
                 alt="{{ Auth::user()->username }}"/>

        </button>
    @else
        <button type="button"
                class="inline-flex items-center text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5 transition ease-in-out duration-150"
                id="user-menu-button"
                aria-expanded="false"
                data-dropdown-toggle="dropdown">
            {{ Auth::user()->username }}

            <svg class="ms-2 -me-0.5 size-4" xmlns="http://www.w3.org/2000/svg"
                 fill="none"
                 viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
            </svg>
        </button>
    @endif
    <!-- Dropdown menu -->
    <div
        class="hidden z-50 my-4 w-56 text-base list-none bg-white divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600 rounded-xl"
        id="dropdown"
    >
        <div class="py-3 px-4">
            <span class="block text-sm font-semibold text-gray-900 dark:text-white">
                {{ auth()->user()->username }}</span>
            <span class="block text-sm text-gray-900 truncate dark:text-white">
                {{ auth()->user()->email }}
            </span>
        </div>
        <div class="py-1 text-gray-700 dark:text-gray-300" aria-labelledby="dropdown">
            <x-link.dropdown href="{{ route('profile.show') }}">My Profile</x-link.dropdown>
            <x-link.dropdown href="#">Account settings</x-link.dropdown>
        </div>
        <div class="py-1 text-gray-700 dark:text-gray-300" aria-labelledby="dropdown">
            <x-link.dropdown class="flex items-center " href="#">
                <x-heroicon-s-heart class="size-5 mr-2"/>
                My likes
            </x-link.dropdown>
            <x-link.dropdown class="flex items-center " href="#">
                <x-heroicon-s-rectangle-stack class="size-5 mr-2"/>
                Collections
            </x-link.dropdown>
        </div>
        <div class="py-1 text-gray-700 dark:text-gray-300" aria-labelledby="dropdown">
            <!-- Authentication -->
            <form method="POST" action="{{ route("logout") }}" x-data>
                @csrf

                <x-link.dropdown @click.prevent="$root.submit();" class="rounded-b-lg">
                    {{ __("Log Out") }}
                </x-link.dropdown>
            </form>
        </div>
    </div>
</div>
