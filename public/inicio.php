<?php

use Src\apiProvider\Provider;

require_once __DIR__ . "/../vendor/autoload.php";

// Llamo al método obtenerImagenes de la class Provider
$listado = Provider::obtenerImagenes();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- TAILWINDS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Inicio</title>
</head>

<body style="background-color:#425775">

    <div class="container p-12 mx-auto">
        <?php
        foreach ($listado as $img) {
            echo <<<TXT
                <div class=" w-1/2 mx-auto mb-4  bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <img class=" mx-auto mt-4 h-96 rounded-t-lg" src="{$img->webformatURL}" alt="" />
                    <div class="p-5">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Usuario: {$img->user}</h5>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"></p>
                        <div class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Likes: {$img->likes}
                        </div>
                    </div>
                </div>
        TXT;
        }
        ?>

    </div>
</body>

</html>