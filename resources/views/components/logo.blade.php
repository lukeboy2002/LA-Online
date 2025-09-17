<a wire:navigate {{ $attributes->merge(['class' => 'flex items-center gap-3']) }}>
    <div class="focus:outline-none">
        <!-- Use a single black logo and invert it in dark mode -->
        <img class="lg:block max-h-20 w-auto dark:invert" src="{{ asset('storage/assets/TripleB_black.png') }}"
             alt="TripleB">
    </div>

    <span class="hidden sm:flex self-center text-2xl font-black whitespace-nowrap text-secondary font-secondary">
        {{ config('app.name') }}
    </span>
</a>