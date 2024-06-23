<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $staff = Staff::all();
        return view('pages.staff.index', compact('staff'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.staff.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        if ($request->hasFile("imagen")) {
            $file = $request->file('imagen');
            $routeImg = 'storage/images/imagen/';
            $nombreImagen = Str::random(10) . '_' . $file->getClientOriginalName();

            $this->saveImg($file, $routeImg, $nombreImagen);

            $data['imagen'] = $routeImg . $nombreImagen;
            // $AboutUs->name_image = $nombreImagen;
        }
        Staff::create($data);

        return redirect()->route('staff.index')->with('success', 'Publicación creado exitosamente.');
    }
    public function saveImg($file, $route, $nombreImagen)
    {
        $manager = new ImageManager(new Driver());
        $img =  $manager->read($file);

        $img->coverDown(1700, 1130, 'center');
        /* $img->resize(1700, 1130, function ($constraint) {
            $constraint->aspectRatio(); //Mantiene la proporción original de la imagen.
            $constraint->upsize(); // Evita que la imagen sea escalada si ya es más pequeña que el tamaño objetivo
        }); */


        if (!file_exists($route)) {
            mkdir($route, 0777, true); // Se crea la ruta con permisos de lectura, escritura y ejecución
        }

        $img->save($route . $nombreImagen);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $staff = Staff::find($id);

        return view('pages.staff.edit', compact('staff'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->all();

        if ($request->hasFile("imagen")) {
            $file = $request->file('imagen');
            $routeImg = 'storage/images/imagen/';
            $nombreImagen = Str::random(10) . '_' . $file->getClientOriginalName();

            $this->saveImg($file, $routeImg, $nombreImagen);

            $data['imagen'] = $routeImg . $nombreImagen;
            // $AboutUs->name_image = $nombreImagen;
        }

        Staff::updateOrCreate(
            ['id' => $id], // Condiciones para buscar el registro existente
            $data // Datos para actualizar o crear el registro
        );
        return redirect()->route('staff.index')->with('success', 'Publicación Actualizada exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function updateVisible(Request $request)
    {
        $id = $request->id;
        $stauts = $request->status;
        $staff = Staff::find($id);
        $staff->status = $stauts;

        $staff->save();
        return response()->json(['message' => 'registro actualizado']);
    }

    public function borrar(Request $request){
        $staff = Staff::find($request->id);

		
		if ($staff->imagen && file_exists($staff->imagen)) {
			unlink($staff->imagen);
		}

		$staff->delete();
    }
}
