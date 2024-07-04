<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;
use Illuminate\Support\Str;

class ContactoController extends Controller
{
    //
    public function index()
    {

        return view('pages.contacto.index');
    }
    public function updateJson(Request $request)
    {
        try {
            // Ruta del archivo JSON
            $route = resource_path('views/pages/contacto/contacto.json');

            // Leer el contenido del archivo
            $file = File::get($route);
            $archivoArray = json_decode($file, true);

            // Campos a actualizar en el archivo JSON
            $campos = [
                'preTitulo', 'titulo', 'extractoIzq', 'tituloForm',
                'tituloDerech', 'ExtractoDerech'
            ];

            // Actualizar los valores en el array usando un bucle
            foreach ($campos as $campo) {
                if ($request->has($campo)) {
                    $archivoArray['Contacto'][$campo] = $request->$campo;
                }
            }

            // Guardar los cambios en el archivo JSON
            File::put($route, json_encode($archivoArray, JSON_PRETTY_PRINT));

            return response()->json(['message' => 'Actualizando json ']);
        } catch (\Throwable $th) {
            //throw $th;
            return response()->json(['message' => $th], 400);
        }
    }
}
