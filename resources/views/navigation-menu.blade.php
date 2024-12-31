<header>
    <nav
        class="bg-white border-b border-gray-200 px-4 py-2.5 dark:bg-gray-800 dark:border-gray-700 fixed left-0 right-0 top-0 z-50">
        <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
            <x-application-logo/>
            <div class="flex items-center lg:order-2">
                <x-darkmode/>
                @if (Route::has("login"))
                    @auth()
                        <!-- USER -->
                        <x-menu.userdropdown/>
                    @else
                        <x-link.mainmenu_item href="{{ route('login') }}"
                                              class="mr-4">{{ __('Login') }}</x-link.mainmenu_item>
                        <x-link.mainmenu_item href="{{ route('register') }}"
                                              class="mr-4">{{ __('Register') }}</x-link.mainmenu_item>
                    @endauth
                @endif


                <button data-collapse-toggle="mobile-menu-2" type="button"
                        class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                        aria-controls="mobile-menu-2" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                              d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                              clip-rule="evenodd"></path>
                    </svg>
                    <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                         xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                              d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                              clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <div class="hidden justify-between items-center w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
                <div class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                    <x-link.mainmenu_item href="{{ route('home') }}" :active="request()->routeIs('home')">
                        {{ __('Home') }}
                    </x-link.mainmenu_item>

                    <x-link.mainmenu_item href="#">
                        {{ __('Company') }}
                    </x-link.mainmenu_item>

                    <x-link.mainmenu_item href="#">
                        {{ __('Marketplace') }}
                    </x-link.mainmenu_item>

                    <x-link.mainmenu_item href="#">
                        {{ __('Features') }}
                    </x-link.mainmenu_item>

                    <x-link.mainmenu_item href="#">
                        {{ __('Team') }}
                    </x-link.mainmenu_item>

                    <x-link.mainmenu_item href="#">
                        {{ __('Contact') }}
                    </x-link.mainmenu_item>
                </div>
            </div>
        </div>
    </nav>
</header>
