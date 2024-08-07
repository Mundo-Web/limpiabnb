<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\AttributesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataFeedController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\CampaignController;

use App\Http\Controllers\MessageController;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\TestimonyController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\LogosClientController;

use App\Http\Controllers\IndexController;
use App\Http\Controllers\PasopasoController;
use App\Http\Controllers\PoliticasdePrivacidadController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\StrengthController;
use App\Http\Controllers\TerminosycondicionesController;
use App\Models\AboutUs;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/* Las rutas publicas */
Route::get('/', [IndexController::class, 'index'] )->name('index');

Route::get('/blog', function () {
    return redirect()->route('blog', ['id' => 0]);
});

/* Route::get('/blog', function () {
    return redirect()->route('blog', ['id' => 1]);
}); */

Route::get('/blog/{id}', [IndexController::class, 'blog'] )->name('blog');

Route::get('/mobile', [IndexController::class, 'mobile'] )->name('mobile');
Route::get('/post/{id}', [IndexController::class, 'post'] )->name('post');


Route::get('/nosotros', [IndexController::class, 'index'] )->name('nosotros');
Route::get('/servicios', [IndexController::class, 'index'] )->name('servicios');

Route::post('guardarContactos', [IndexController::class, 'guardarContacto'] )->name('guardarContactos');

Route::post('buscarHabitaciones', [IndexController::class, 'buscarHabitaciones'] )->name('buscarHabitaciones');
Route::post('buscarArea', [IndexController::class, 'buscarArea'] )->name('buscarArea');

Route::post('guardarSolicitud', [IndexController::class, 'guardarSolicitud'] )->name('guardarSolicitud');


Route::get('/politica_privacidad', [IndexController::class, 'politicaprivacidad'])->name('politica_privacidad');
Route::get('/term_condiciones', [IndexController::class, 'term_condiciones'])->name('term_condiciones');




Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    Route::prefix('admin')->group(function () {
        
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('/dashboard/analytics', [DashboardController::class, 'analytics'])->name('analytics');
        Route::get('/dashboard/fintech', [DashboardController::class, 'fintech'])->name('fintech');

        //messages
        Route::resource('/mensajes', MessageController::class);
        Route::post('/mensajes/borrar', [MessageController::class, 'borrar'] )->name('mensajes.borrar');

        //Datos Generales
        Route::resource('/datosgenerales', GeneralController::class);

        //Testimonies
        Route::resource('/testimonios', TestimonyController::class);
        Route::post('/testimonios/deleteTestimony', [TestimonyController::class, 'deleteTestimony'] )->name('testimonios.deleteTestimony');
        Route::post('/testimonios/updateVisible', [TestimonyController::class, 'updateVisible'] )->name('testimonios.updateVisible');
        Route::post('/testimonios/updateJson', [TestimonyController::class, 'updateJson'])->name('testimonios.updateJson');


        //Categorías
        Route::resource('/categorias', CategoryController::class);
        Route::post('/categorias/deleteCategory', [CategoryController::class, 'deleteCategory'] )->name('categorias.deleteCategory');
        Route::post('/categorias/updateVisible', [CategoryController::class, 'updateVisible'] )->name('categorias.updateVisible');


        //Servicios
        Route::resource('/servicios', ServiceController::class);
        Route::post('/servicios/deleteService', [ServiceController::class, 'deleteService'] )->name('servicio.deleteService');
        Route::post('/servicios/updateVisible', [ServiceController::class, 'updateVisible'] )->name('servicio.updateVisible');


        //Blog
        Route::resource('/blog', BlogController::class);
        Route::post('/blog/deleteBlog', [BlogController::class, 'deleteBlog'] )->name('blog.deleteBlog');
        Route::post('/blog/updateVisible', [BlogController::class, 'updateVisible'] )->name('blog.updateVisible');

        //Crud Logos
        Route::resource('/logos', LogosClientController::class);
        Route::post('/logos/deleteLogo', [LogosClientController::class, 'deleteLogo'] )->name('logos.deleteLogo');

        Route::resource('/staff', StaffController::class);
        Route::post('/staff/updateVisible', [StaffController::class, 'updateVisible'])->name('staff.updateVisible');
        Route::post('/staff/borrar', [StaffController::class, 'borrar'])->name('staff.borrar');


        Route::resource('/strength', StrengthController::class);
        Route::post('/strength/updateVisible', [StrengthController::class, 'updateVisible'])->name('strength.updateVisible');
        Route::post('/strength/borrar', [StrengthController::class, 'borrar'])->name('strength.borrar');
        //

        Route::resource('/aboutus', AboutUsController::class);
        Route::post('/aboutus/updateVisible', [AboutUsController::class, 'updateVisible'])->name('aboutus.updateVisible');
        Route::post('/aboutus/borrar', [AboutUsController::class, 'borrar'])->name('aboutus.borrar');

        Route::resource('/attributes', AttributesController::class);
        Route::post('/attributes/updateVisible', [AttributesController::class, 'updateVisible'])->name('attributes.updateVisible');
        Route::post('/attributes/borrar', [AttributesController::class, 'borrar'])->name('attributes.borrar');

        Route::resource('/verPoliticasPrivacidad', PoliticasdePrivacidadController::class);
        Route::post('verPoliticasPrivacidad/delete', [PoliticasdePrivacidadController::class, 'delete'])->name('PoliticasPrivacidad.delete');


        Route::resource('terminoscondiciones', TerminosycondicionesController::class);
        Route::post('terminoscondiciones/delete', [TerminosycondicionesController::class, 'delete'])->name('terminoscondiciones.delete');

         //Sliders   
         Route::resource('/slider', SliderController::class);
         Route::post('/slider/updateVisible', [SliderController::class, 'updateVisible'])->name('slider.updateVisible');
         Route::post('/slider/deleteSlider', [SliderController::class, 'deleteSlider'])->name('slider.deleteSlider');
         Route::post('/slider/updateJson', [SliderController::class, 'updateJson'])->name('slider.updateJson');
         
         
         Route::resource('/pasopaso', PasopasoController::class);
         Route::post('/pasopaso/updateJson', [PasopasoController::class, 'updateJson'])->name('pasopaso.updateJson');

        //  contacto
         Route::get('/contacto', [ContactoController::class, 'index'])->name('contacto.index');
         Route::post('/updateJson', [ContactoController::class, 'updateJson'])->name('contacto.updateJson');


 

        Route::fallback(function() {
            return view('pages/utility/404');
        });
        
    });

    
});