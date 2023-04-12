<div class="mb-5 p-4 is-shadowless is-radiusless has-text-white">
  <div class="columns is-vcentered">

    <div class='column is-1'>
      <div class="has-text-centered">
        <a href="#">
          <span class="icon has-text-white is-large">
            <i class="fa-solid fa-bars fa-lg"></i>
          </span>
        </a>
      </div>
    </div>

    <div class='column is-5'>
      <div class="title is-4 has-text-white">@yield('pagina', 'Inicio')</div>
    </div>

    <div class='column is-6'>
      <form action="{{ route('buscar.index') }}" method="get">
        <div class="field">
          <div class="control has-icons-right"> 
            <input type="search" name="caracteristica" id="inputBuscar" class='input is-rounded' placeholder="Buscar persona por nombre, dirección, teléfono..." style="background-color:white">
            <span class="icon is-small is-right">
              <i class="fa-solid fa-magnifying-glass"></i>
            </span>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
