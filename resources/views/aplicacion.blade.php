<!DOCTYPE html>
<html lang="en" style="background-color:#242141">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Inicio') - {{ config('app.name') }}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .wrapper {
            width:100vw;
            height:100vh;
            background-color:#474280;
            overflow-y:scroll;
            overflow-x:hidden;
        }
        .has-shadow {
            box-shadow:.25rem 0.25rem .75rem #242141;
        }
        .is-fullheight {
            height:100vh;
        }
        .is-color-hoverable {
            opacity:.5;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        @auth
            @include('aplicacion.login')

        @else
            @include('aplicacion.autenticado')

        @endauth
    </div>
</body>
</html>
