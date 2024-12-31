<x-card.default>
    <x-application-logo class="block h-12 w-auto"/>

    <h1 class="mt-8 text-2xl font-medium text-gray-900">
        Welcome to your Dashboard, {{ auth()->user()->username }}!
    </h1>
</x-card.default>
