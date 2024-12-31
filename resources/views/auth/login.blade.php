<x-guest-layout title="Login">
    <div
        class="flex flex-col items-center justify-center px-6 pt-8 mx-auto md:h-screen pt:mt-0 dark:bg-gray-900">
        <x-application-logo class="pb-8"/>
        <x-card.auth>
            <h2 class="text-2xl font-bold text-gray-900 dark:text-white">
                Sign in to platform
            </h2>
            <form class="mt-8 space-y-6" action="{{ route('login') }}" method="POST">
                @csrf
                <div>
                    <x-form.label for="email" value="{{ __('Username') }}"/>
                    <x-form.input type="text" name="username" id="username"
                                  placeholder="Enter your username" required/>
                    <x-form.input-error for="username" class="mt-2"/>
                </div>
                <div>
                    <x-form.label for="password" value="{{ __('Password') }}"/>
                    <x-form.input type="password" name="password" id="password"
                                  placeholder="****" required/>
                    <x-form.input-error for="password" class="mt-2"/>
                </div>
                <div class="flex items-start">
                    <div class="flex items-center h-5">
                        <input id="remember_me" aria-describedby="remember" name="remember" type="checkbox"
                               class="w-4 h-4 border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:focus:ring-primary-600 dark:ring-offset-gray-800 dark:bg-gray-700 dark:border-gray-600">
                    </div>
                    <div class="ml-3 text-sm">
                        <label for="remember_me" class="font-medium text-gray-900 dark:text-white">Remember me</label>
                    </div>
                    @if (Route::has('password.request'))
                        <x-link.primary
                            href="{{ route('password.request') }}">{{ __('Forgot your password?') }}</x-link.primary>
                    @endif
                </div>
                <x-button.primary type="submit">Login to your account</x-button.primary>
                <div class="text-sm font-medium text-gray-500 dark:text-gray-400">
                    Not registered?
                    <x-link.primary href="{{ route('register') }}">Create account</x-link.primary>
                </div>
            </form>
        </x-card.auth>
    </div>
</x-guest-layout>
