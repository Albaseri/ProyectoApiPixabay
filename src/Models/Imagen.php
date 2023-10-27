<?php

namespace Src\Models;

class Imagen
{
    // Constructor con los atributos obtenidos de la API. Inicializados directamente en el constructor
    public function __construct(
        public string $webformatURL,
        public string $user,
        public int $likes,
    ) {
    }
}
