<div>
    <nav class="bg-background-secondary">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <x-logo/>
            <div class="flex items-center md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                <x-apperance.toggle/>
                <!-- Dropdown menu -->
                @if(Route::has('login'))
                    @auth
                        <x-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                    <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-hidden focus:border-gray-300 transition">
                                        <img class="size-10 lg:size-8 rounded-full object-cover aspect-square"
                                             src="{{ Auth::user()->profile_photo_url }}"
                                             alt="{{ Auth::user()->username }}"/>
                                    </button>
                                @else
                                    <span class="inline-flex rounded-md">
                                    <button type="button"
                                            class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-hidden focus:bg-gray-50 dark:focus:bg-gray-700 active:bg-gray-50 dark:active:bg-gray-700 transition ease-in-out duration-150">
                                        {{ Auth::user()->username }}

                                        <svg class="ms-2 -me-0.5 size-4" xmlns="http://www.w3.org/2000/svg" fill="none"
                                             viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                  d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
                                        </svg>
                                    </button>
                                </span>
                                @endif
                            </x-slot>

                            <x-slot name="content">
                                <!-- Account Management -->
                                <div class="block px-4 py-2 text-xs text-primary-muted">
                                    {{ __('Manage Account') }}
                                </div>

                                <x-dropdown-link
                                        href="{{ route('profile.show') }}">
                                    {{ __('Profile') }}
                                </x-dropdown-link>

                                <div class="border-t border-secondary/30 my-2"></div>
                                <x-menu.user/>
                                <div class="border-t border-secondary/30 my-2"></div>
                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}" x-data>
                                    @csrf
                                    <x-dropdown-link href="{{ route('logout') }}"
                                                     @click.prevent="$root.submit();">
                                        {{ __('Log Out') }}
                                    </x-dropdown-link>
                                </form>
                            </x-slot>
                        </x-dropdown>
                    @else
                        <div class="flex space-x-2">
                            <div>
                                <x-link.mainnavigation href="{{ route('login') }}"
                                                       icon="key-round"
                                                       data-popover-target="tooltip-login">
                                </x-link.mainnavigation>
                                <div id="tooltip-login" role="tooltip"
                                     class="absolute z-50 invisible inline-block px-3 py-2 text-sm font-medium text-primary transition-opacity duration-300 bg-background rounded-lg shadow-xs opacity-0 tooltip">
                                    Login
                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                </div>
                            </div>

                            @if (Route::has('register'))
                                <div>
                                    <x-link.mainnavigation href="{{ route('register') }}"
                                                           icon="user-plus"
                                                           data-popover-target="tooltip-register">
                                    </x-link.mainnavigation>
                                    <div id="tooltip-register" role="tooltip"
                                         class="absolute z-50 invisible inline-block px-3 py-2 text-sm font-medium text-primary transition-opacity duration-300 bg-background rounded-lg shadow-xs opacity-0 tooltip">
                                        Register
                                        <div class="tooltip-arrow" data-popper-arrow></div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    @endauth
                @endif
                <button type="button"
                        class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-primary rounded-lg md:hidden hover:bg-background-hover hover:text-secondary focus:outline-none focus:text-secondary focus:bg-background-hover focus:ring-0"
                        aria-controls="main-menu-drawer" aria-expanded="false"
                        data-drawer-target="main-menu-drawer" data-drawer-toggle="main-menu-drawer"
                        data-drawer-placement="left" data-drawer-backdrop="true">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                         viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M1 1h15M1 7h15M1 13h15"/>
                    </svg>
                </button>
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-user">
                <div class="flex flex-col font-medium p-4 md:p-0 mt-4 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0">
                    <x-menu.main/>
                </div>
            </div>
        </div>
    </nav>

    <!-- Mobile Drawer for Main Menu -->
    <div id="main-menu-drawer"
         class="fixed top-0 left-0 z-40 h-screen w-72 -translate-x-full transition-transform bg-white dark:bg-gray-800 border-r border-gray-200 dark:border-gray-700 p-4"
         tabindex="-1" aria-labelledby="main-menu-drawer-label">
        <div class="flex items-center justify-between mb-4">
            <x-heading.main>Menu</x-heading.main>

            <button type="button" data-drawer-hide="main-menu-drawer" aria-controls="main-menu-drawer"
                    class="inline-flex items-center px-2 pt-2 py-6 w-10 h-10 justify-center text-sm text-primary rounded-lg md:hidden hover:bg-background-hover hover:text-secondary focus:outline-none focus:text-secondary focus:bg-background-hover focus:ring-0">
                <span class="sr-only">Close menu</span>
                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                     viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M1 1l12 12M13 1 1 13"/>
                </svg>
            </button>
        </div>
        <div class="overflow-y-auto h-[calc(100vh-4rem)]">
            <div class="space-y-6 font-medium">
                <x-menu.main/>
            </div>
        </div>
    </div>
</div>