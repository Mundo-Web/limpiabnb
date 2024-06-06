<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreIndexRequest;
use App\Http\Requests\UpdateIndexRequest;
use App\Helpers\EmailConfig;
use App\Models\Index;
use App\Models\Message;
use App\Models\General;
use App\Models\Service;
use App\Models\Testimony;
use App\Models\Strength;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Distribucion;
use App\Models\Espacio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $beneficios = Strength::where('status', '=', 1)->get();
        $generales = General::all()->first();
        $services = Service::where('status', '=', 1)->where('visible', '=',  1)->get();
        $testimonios = Testimony::where('status', '=', 1)->where('visible', '=',  1)->get();
        $espacios = Espacio::where('status', '=', 1)->where('visible', '=',  1)->get();
        return view('public.index', compact('generales', 'services', 'testimonios', 'beneficios', 'espacios'));
    }

    public function blog(Request $request)
    {
        $id = $request->id;

        $generales = General::all()->first();

        /* $categoria = Category::where('status', '=', 1)->where('visible', 1)->findOrFail($id); 
        $categorias = Category::where('status', 1)->where('visible', 1)->select('id', 'name')->with('blogs')->get();
        */

        /* ----version ultima */
        $categorias = Category::where('status', 1)->where('visible', 1)->select('id', 'name')->with('blogs')->get();
        $categoria = Category::where('status', 1)->where('visible', 1)->select('id', 'name')->get();

        
        if($id != 0){
            $categoria = Category::where('status', '=', 1)->where('visible', 1)->findOrFail($id);
            $blogs = Blog::where('status', 1)->where('visible', 1)->where('category_id', $id)->paginate(6);
        }else{
            
            $blogs = Blog::where('status', 1)->where('visible', 1)->paginate(6);
        }

        /* ----- */

        /* $blogs = Blog::where('status', 1)->where('visible', 1)->where('category_id', $id)->paginate(6); */
        
        return view('public.blog', compact('generales', 'blogs', 'categorias', 'categoria', 'id'));
    }

    public function mobile()
    {
        $generales = General::all()->first();

        return view('public.mobile', compact('generales'));
    }

    public function post($id)
    {
        $generales = General::all()->first();
        $blog = Blog::findOrFail($id);

        $postAnterior = Blog::where('status', 1)->where('visible', 1)
            ->where('id', '<', $blog->id)
            ->orderBy('id', 'desc')
            ->first();

        $postSiguiente = Blog::where('status', 1)->where('visible', 1)
            ->where('id', '>', $blog->id)
            ->orderBy('id', 'asc')
            ->first();

        return view('public.post', compact('generales', 'blog', 'postSiguiente', 'postAnterior'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreIndexRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Index $index)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Index $index)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateIndexRequest $request, Index $index)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Index $index)
    {
        //
    }

    /**
     * Save contact from blade
     */
    public function guardarContacto(Request $request)
    {
        //Del modelo
        //'full_name', 'email', 'phone', 'message', 'status', 'is_read'
        $data = $request->all();
        $data['full_name'] = $request->name. ' ' . $request->last_name;

        $reglasValidacion = [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|integer|max:99999999999',
        ];
        $mensajes = [
            'name.required' => 'El campo nombre es obligatorio.',
            'email.required' => 'El campo correo electrónico es obligatorio.',
            'email.email' => 'El formato del correo electrónico no es válido.',
            'email.max' => 'El campo correo electrónico no puede tener más de :max caracteres.',
            'phone.required' => 'El campo teléfono es obligatorio.',
            'phone.integer' => 'El campo teléfono debe ser un número entero.',
        ];
        $request->validate($reglasValidacion, $mensajes);
        $formlanding = Message::create($data);
        $this-> envioCorreo($formlanding); /* adding para correo */
        // return redirect()->route('landingaplicativos', $formlanding)->with('mensaje','Mensaje enviado exitoso')->with('name', $request->nombre);
        return response()->json(['message'=> 'Mensaje enviado con exito']);
    }


    private function envioCorreo($data){
        
        $name = $data['full_name'];
        $mail = EmailConfig::config($name);
        try {
            $mail->addAddress($data['email']);
            $mail->Body = '
            <html lang="en">
                <head>
                    <meta charset="UTF-8" />
                    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
                    <title>Mundo web</title>
                    <link rel="preconnect" href="https://fonts.googleapis.com" />
                    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
                    <link
                        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
                        rel="stylesheet"
                    />
                    <style>
                        * {
                            margin: 0;
                            padding: 0;
                            box-sizing: border-box;
                        }

                        @font-face {
                            font-family: grotesk;
                            src: url(../../public/fonts/PPRightGroteskCompactMedium.woff);
                            font-weight: normal;
                        }
                    </style>
                </head>
                <body>
                    <main>
                        <table
                            style="
                                width: 600px;
                                margin: 0 auto;
                                text-align: center;
                                background-image: url(https://mundoweb.pe/mail/Fondo.png);
                                background-repeat: no-repeat;
                                background-position: center;
                                background-size: cover;
                            "
                        >
                            <thead>
                                <tr>
                                    <th
                                        style="
                                            display: flex;
                                            flex-direction: row;
                                            justify-content: center;
                                            align-items: center;
                                            margin: 100px;
                                        "
                                    >
                                        <img src="https://mundoweb.pe/mail/Frame_14466.png" alt="mundo web" />
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <p
                                            style="
                                            color: #050a41;
                                            font-weight: 500;
                                            font-size: 18px;
                                            text-align: center;
                                            width: 500px;
                                            margin: 0 auto;
                                            padding: 20px 0;
                                            font-family: Montserrat, sans-serif;
                                        "
                                        >
                                             <span style="display:block">Hola </span>
                                            
                                            
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p
                                            style="
                                                color: #e15a29;
                                                font-size: 40px;
                                                line-height: 20px;
                                                font-family: grotesk;
                                            "
                                        >
                                             <span style="display:block">' . $name . ' </span>
                                            
                                            
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p
                                            style="
                                                color: #e15a29;
                                                font-size: 40px;
                                                line-height: 70px;
                                                font-family: grotesk;
                                            "
                                        >
                                            !Gracias
                                            <span style="color: #050a41"
                                                >por escribirnos! 🚀</span
                                            >
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p
                                            style="
                                                color: #050a41;
                                                font-weight: 500;
                                                font-size: 18px;
                                                text-align: center;
                                                width: 500px;
                                                margin: 0 auto;
                                                padding: 20px 0;
                                                font-family: Montserrat, sans-serif;
                                            "
                                        >
                                        
                                            En breve nuestra ejecutiva comercial se estará comunicando contigo.
                                        </p>
                                    </td>
                                </tr>
            <tr>
            <td>
                <a href="https://mundoweb.pe/" style="
                    text-decoration: none;
                    background-color: #e15a29;
                    color: white;
                    border-radius: 40px;
                    padding: 12px 20px;
                    display: inline-flex;
                    justify-content: center;
                    align-items: center;
                    gap: 10px;
                    font-weight: 600;
                    font-family: Montserrat, sans-serif;
                ">
                    <span>Haz que tu negocio despegue</span>
                    <img  src="https://mundoweb.pe/mail/buttonmailing.png" style="
                        width: 20px;
                        margin-left: 15px;
                        height: 20px;
                    " />
                </a>
            </td>
        </tr>
        <tr>
            <td style="text-align: right; padding-right: 30px;">
                <img src="https://mundoweb.pe/mail/10_rgb.png" alt="mundo web" style="width: 80%; margin-top: 100px" />
            </td>
        </tr>
            </tbody>
            </table>
            </main>
            </body>

            </html>
            ';
            $mail->isHTML(true);
            $mail->send();
            
        } catch (\Throwable $th) {
            //throw $th;
        }
        
       
    }

    public function buscarHabitaciones(Request $request){
        $distribucion = DB::select('select * from distribucion where espacios_id = ? ',  [$request->id]);

        return response()->json($distribucion);
    }
    public function buscarArea(Request $request){
        $distribucion = DB::select('select * from area where distribucion_id = ? ',  [$request->id]);

        return response()->json($distribucion);
    }

    public function guardarSolicitud(Request $request){

        $espacios = DB::select('select * from espacios where id = ?',[$request->habitaciones]);
        $distribucion = DB::select('select * from distribucion where id = ?', [$request->distribucion]);
        $metraje= $request->metros;
        $direction = $request->direction;
        $telefono = $request->telefono;
        $correo = $request->correo;

        $espacios = $espacios[0]->name;
        $distribucion = $distribucion[0]->name;

      

        Message::create([
            'full_name' =>'',
            'email' =>$correo,
            'phone'=>$telefono,
            'message'=> "El siguiente usuario desea adquirir el siguiente servicio  $espacios , $distribucion , S/. $metraje  . Y su direccion es $direction"
        ]);


    }
    
}