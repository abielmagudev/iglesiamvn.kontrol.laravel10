    <div class="columns is-gapless is-desktop">
        <div class="column is-one-fifth is-fullheight has-shadow has-background-white"">
            <x-navside />
        </div>
        <div class="column">
            <x-navbar />
            <div class="container p-3">
                @yield('contentido')
            </div>
        </div>
    </div>
