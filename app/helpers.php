<?php

if(! function_exists('mes') )
{
    function mes(string $atributo, $clave = null)
    {
        static $atributos = [
            'abreviado',
            'nombre',
            'numero',
        ];

        if( is_null($clave) )
            $clave = date('n');

        if(! in_array($atributo, $atributos) )
            return throw new \Exception('Atributo del mes no existe');

        if(! in_array($clave, range(1,12)) )
            return throw new \Exception('Clave del mes no existe');

        if( $atributo == 'numero' )
            return str_pad($clave, 2, '0', STR_PAD_LEFT);

        $meses = config('aplicacion.tiempo.meses');

        if( $atributo == 'nombre' )
            return $meses[$clave];    

        return substr($meses[$clave], 0, 3);
    }
}
