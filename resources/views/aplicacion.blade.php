<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('pagina', 'Inicio') - {{ config('app.name') }}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        :root {
            --color-purple: #474280;
            --color-purple-dark: #242141;
        }
        .has-background-purple {
            background-color:var(--color-purple);
        }
        .has-background-purple-dark {
            background-color:var(--color-purple-dark);
        }
        .has-color-purple {
            color:var(--color-purple);
        }
        .has-color-purple-dark {
            color:var(--color-purple)-dark;
        }
        .has-shadow {
            box-shadow:.2rem 0.2rem 1rem var(--color-purple-dark);
        }
        .box-border {
            border: #DBDBDB solid 1px;
            box-shadow: none;
        }
        .control-border {
            border: #DBDBDB solid 1px;
            border-radius: 4px;
            padding: 0.5rem 0.75rem;
        }
        .is-fullheight {
            min-height:100vh;
        }
        .wrapper {
            width:100vw;
            height:100vh;
            overflow-y:scroll;
            overflow-x:hidden;
        }
    </style>
</head>
<body class='has-background-purple wrapper'>
    <div class="wrapper">
        @auth
            @include('aplicacion.login')

        @else
            @include('aplicacion.autenticado')

        @endauth
    </div>
</body>
</html>
