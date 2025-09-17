<x-link.mainnavigation href="{{ route('home') }}" :active="request()->routeIs('home')" icon="home">
    Home
</x-link.mainnavigation>

<x-link.mainnavigation href="#" icon="users">
    Team
</x-link.mainnavigation>

<x-link.mainnavigation href="#" icon="dices">
    Wedstijden
</x-link.mainnavigation>

<x-link.mainnavigation href="#" icon="images">
    Foto's
</x-link.mainnavigation>

<x-link.mainnavigation href="{{ route('posts.index') }}" :active="request()->routeIs('posts.*')" icon="newspaper">
    Blog
</x-link.mainnavigation>

<x-link.mainnavigation href="#" icon="calendar-days">
    Agenda
</x-link.mainnavigation>