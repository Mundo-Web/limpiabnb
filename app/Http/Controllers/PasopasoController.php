<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;
use Illuminate\Support\Str;

class PasopasoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('pages.pasoApaso.index');
    }

    public function updateJson(Request $request)
	{
		try {
			// Ruta del archivo JSON
			$route = resource_path('views/pages/pasoApaso/dataPasoaPaso.json');

			// Leer el contenido del archivo
			$file = File::get($route);
			$archivoArray = json_decode($file, true);

            if ($request->hasFile('imagen')) {
				$file = $request->file('imagen');
				$routeImg = 'storage/images/slider/';
				$nombreImagen = Str::random(10) . '_' . $file->getClientOriginalName();

				$this->saveImg($file, $routeImg, $nombreImagen);

				$archivoArray['PasoApaso']['img'] = $routeImg.$nombreImagen;
				
			}

			// Actualizar el valor del preTitulo
			$archivoArray['PasoApaso']['preTitulo'] = $request->preTitulo;
			$archivoArray['PasoApaso']['titulo'] = $request->titulo;
			$archivoArray['PasoApaso']['enlacebtn'] = $request->enlacebtn;
			$archivoArray['PasoApaso']['textoBtn'] = $request->textoBtn;
			$archivoArray['PasoApaso']['extracto'] = $request->extracto;
			$archivoArray['PasoApaso']['bullet1'] = $request->bullet1;
			$archivoArray['PasoApaso']['textbullet1'] = $request->textbullet1;
			$archivoArray['PasoApaso']['bullet2'] = $request->bullet2;
			$archivoArray['PasoApaso']['textbullet2'] = $request->textbullet2;
			$archivoArray['PasoApaso']['bullet3'] = $request->bullet3;
			$archivoArray['PasoApaso']['textbullet3'] = $request->textbullet3;

			// Guardar los cambios en el archivo JSON

			File::put($route, json_encode($archivoArray, JSON_PRETTY_PRINT));

			return response()->json(['message' => 'Actualizando json ']);

		} catch (\Throwable $th) {
			//throw $th;
			return response()->json(['message' => $th], 400);

		}
	}

    public function saveImg($file, $route, $nombreImagen)
	{
		$manager = new ImageManager(new Driver());
		$img = $manager->read($file);
		
		$img->coverDown(600, 860, 'center');
		if (!file_exists($route)) {
			mkdir($route, 0777, true); // Se crea la ruta con permisos de lectura, escritura y ejecución
		}
		$img->save($route . $nombreImagen);
	}
}
