    <div class="columns is-gapless is-desktop">
        <div class="column is-one-fifth is-fullheight has-shadow has-background-white"">
            <x-navside />
        </div>
        <div class="column">
            <x-navbar />
            <div class="container py-3 px-5">
                @yield('contenido')
            </div>
        </div>
    </div>
