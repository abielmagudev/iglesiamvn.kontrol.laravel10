<?php 
$menu = [
    'appication' => [
        [
            'title' => 'Escritorio',
            'icon' => '<i class="fa-solid fa-display"></i>',
            'route' => route('escritorio.index'),
            'actived' => '',
        ],
        [
            'title' => 'Miembros',
            'icon' => '<i class="fa-solid fa-church"></i>',
            'route' => route('miembros.index'),
            'actived' => '',
        ],
        [
            'title' => 'Departamentos',
            'icon' => '<i class="fa-solid fa-shapes"></i>',
            'route' => route('departamentos.index'),
            'actived' => '',
        ],
        [
            'title' => 'Eventos',
            'icon' => '<i class="fa-solid fa-calendar"></i>',
            'route' => route('eventos.index'),
            'actived' => '',
        ],
        [
            'title' => 'Citas',
            'icon' => '<i class="fa-brands fa-rocketchat"></i>',
            'route' => route('citas.index'),
            'actived' => '',
        ],
        [
            'title' => 'Visitantes',
            'icon' => '<i class="fa-solid fa-person-walking-luggage"></i>',
            'route' => route('visitantes.index'),
            'actived' => '',
        ],
        [
            'title' => 'Usuarios',
            'icon' => '<i class="fa-solid fa-user-group"></i>',
            'route' => route('usuarios.index'),
            'actived' => '',
        ],
    ],

    'authenticated' => [
        [
            'title' => 'Mi agenda',
            'icon' => '<i class="fa-solid fa-book"></i>',
            'route' => '#',
            'actived' => '',
        ],
        [
            'title' => 'Mi cuenta',
            'icon' => '<i class="fa-solid fa-circle-user"></i>',
            'route' => route('cuenta.index'),
            'actived' => '',
        ],
        [
            'title' => 'Cerrar sesión',
            'icon' => '<i class="fa-solid fa-right-from-bracket"></i>',
            'route' => '#',
            'actived' => '',
        ],
    ],
];
?>
<div class="py-6 has-text-centered">
    <img src="https://kontrol.iglesiamvn.org/assets/mvn-favicon-b.png" alt="Kontrol" width="88" height="88">
</div>
@foreach($menu as $key => $list)
<hr class="m-0">
<div class="menu">
    <ul class="menu-list">
        @foreach($list as $item)         
        <li>
            <a href="{{ $item['route'] }}" class="p-4 {{ $item['actived'] }}">
                <span class="icon">
                    {!! $item['icon'] !!}
                </span>
                <span class='ml-2'>{{ $item['title'] }}</span>
            </a>
        </li>
        @endforeach
    </ul>
</div>
@endforeach
