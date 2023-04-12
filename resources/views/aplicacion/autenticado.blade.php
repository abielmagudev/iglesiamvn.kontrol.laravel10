    <div class="columns is-gapless is-desktop">
        <div class="column is-one-fifth has-background-white is-fullheight has-shadow">
            @include('aplicacion.navside')
        </div>
        <div class="column">
            @include('aplicacion.navbar')
            <div class="container py-3 px-5">
                @yield('contenido')
            </div>
        </div>
    </div>
