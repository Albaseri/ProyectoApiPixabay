<?php

namespace Src\apiProvider;


use Src\Models\Imagen;

class Provider
{
    // Creamos array estático
    private static array $arrayImagenes;

    // Constante con la url del Json. Estática por defecto. 
    private const URL_API = "https://pixabay.com/api/?key=40163664-f15280f843b30d4f35eb7f347&q=almeria";

    // Creamos método estático
    public static function obtenerImagenes(): array
    {
        $datos = file_get_contents(self::URL_API);
        //die($datos); ---esto sirve para ver qué devuelve el Json
        $datosFormateo = json_decode($datos); // le decimos que codifique el Json
        // var_dump($datosFormateo->hits); ----- devuelve un array de 20
        self::$arrayImagenes = [];
        foreach ($datosFormateo->hits as $img) { // recorro el array 
            $img = new Imagen( // creo una imagen que espera un webformat, user y likes (atributos de class Imagen)
                $img->webformatURL,
                $img->user,
                $img->likes
            );
            self::$arrayImagenes[] = $img;
        }

        return self::$arrayImagenes; // devuelve el array
    }
}
