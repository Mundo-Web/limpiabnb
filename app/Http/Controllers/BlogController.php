<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Blog;
use App\Http\Requests\StoreBlogRequest;
use App\Http\Requests\UpdateBlogRequest;
use Illuminate\Http\Request;


use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class BlogController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $posts = Blog::where("status", "=", true)->get();

    return view('pages.blog.index', compact('posts'));
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    $categories = Category::all();

    return view('pages.blog.create', compact('categories'));
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    $request->validate([
      'title' => 'required',
    ]);


    $tagSeo = implode(',', $request->tag_seo ?? []);
 

    $post = new Blog();

    try {
      if ($request->hasFile("imagen")) {
        $file = $request->file('imagen');
        $routeImg = 'storage/images/blogs/';
        $nombreImagen = Str::random(10) . '_' . $file->getClientOriginalName();
        $this->saveImg($file, $routeImg, $nombreImagen);
        $post->url_image = $routeImg . $nombreImagen;
        $post->name_image = $nombreImagen;
      }else {
        $routeImg = 'images/img/';
        $nombreImagen = 'noimagen.jpg';

        $post->url_image = $routeImg . $nombreImagen;
        $post->name_image = $nombreImagen ; 
      }
  
      $post->category_id = $request->category_id;
      $post->title = $request->title;
      $post->description = $request->description;
      $post->status = 1;
      $post->visible = 1;
      $post->tag_seo = $tagSeo;
  
      $post->save();
  
      return redirect()->route('blog.index')->with('success', 'Publicación creada exitosamente.');
    } catch (\Throwable $th) {
      return response()->json(['messge' => 'Verifique sus datos ' . $th], 400);
    }
  }

  public function saveImg($file, $route, $nombreImagen)
  {
    $manager = new ImageManager(new Driver());
    $img = $manager->read($file);
    if (!file_exists($route)) {
      mkdir($route, 0777, true); // Se crea la ruta con permisos de lectura, escritura y ejecución
    }
    $img->save($route . $nombreImagen);
  }

  /**
   * Display the specified resource.
   */
  public function show(Blog $blog)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   */
  //public function edit(Blog $blog, $id)

  public function edit(Blog $blog)
  {
    $categories = Category::all();
    $seoTags = explode(',', $blog->tag_seo);

    return view('pages.blog.edit', compact('blog', 'categories', 'seoTags'));
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, $id)
  {
    $tagSeo = implode(',', $request->tag_seo);

    $blog = Blog::findOrfail($id);
    $blog->title = $request->title;
    $blog->description = $request->description;
    $blog->tag_seo = $tagSeo;

    try {
      if ($request->hasFile("imagen")) {
        $file = $request->file('imagen');
        $routeImg = 'storage/images/blogs/';
        $nombreImagen = Str::random(10) . '_' . $file->getClientOriginalName();
  
        $this->saveImg($file, $routeImg, $nombreImagen);
  
        $blog->url_image = $routeImg . $nombreImagen;
        $blog->name_image = $nombreImagen;
      }
  
      $blog->category_id = $request->category_id;
      $blog->title = $request->title;
      $blog->description = $request->description;
  
  
      $blog->save();
  
      return redirect()->route('blog.index')->with('success', 'Post actualizado');
    } catch (\Throwable $th) {
      return response()->json(['messge' => 'Verifique sus datos ' . $th], 400);
    }
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Blog $blog)
  {
    //
  }


  public function deleteBlog(Request $request)
  {
    //Recupero el id mandado mediante ajax
    $id = $request->id;
    //Busco el servicio con id como parametro
    $service = Blog::findOrfail($id);
    //Modifico el status a false
    $service->status = false;
    //Guardo 
    $service->save();

    // Devuelvo una respuesta JSON u otra respuesta según necesites
    return response()->json(['message' => 'Post eliminado.']);
  }



  public function updateVisible(Request $request)
  {
    // Lógica para manejar la solicitud AJAX
    //return response()->json(['mensaje' => 'Solicitud AJAX manejada con éxito']);
    $id = $request->id;

    $field = $request->field;

    $status = $request->status;

    $service = Blog::findOrFail($id);

    $service->$field = $status;

    $service->save();

    return response()->json(['message' => 'Servicio eliminado.']);
  }
}