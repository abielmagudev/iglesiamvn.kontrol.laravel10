<?php 
$menu = [
    'app' => [
        [
            'title' => 'Escritorio',
            'icon' => '<i class="fa-solid fa-house"></i>',
            'route' => '#',
            'actived' => '',
        ],
        [
            'title' => 'Miembros',
            'icon' => '<i class="fa-solid fa-church"></i>',
            'route' => '#',
            'actived' => '',
        ],
        [
            'title' => 'Departamentos',
            'icon' => '<i class="fa-solid fa-shapes"></i>',
            'route' => '#',
            'actived' => '',
        ],
        [
            'title' => 'Agenda',
            'icon' => '<i class="fa-solid fa-calendar"></i>',
            'route' => '#',
            'actived' => '',
        ],
        [
            'title' => 'Visitantes',
            'icon' => '<i class="fa-solid fa-person-walking-luggage"></i>',
            'route' => '#',
            'actived' => '',
        ],
    ],
    
    'config' => [       
        [
            'title' => 'Usuarios',
            'icon' => '<i class="fa-solid fa-user-group"></i>',
            'route' => '#',
            'actived' => '',
        ],
    ],

    'user' => [
        [
            'title' => 'Mi cuenta',
            'icon' => '<i class="fa-solid fa-circle-user"></i>',
            'route' => '#',
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
