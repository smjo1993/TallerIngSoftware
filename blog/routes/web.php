 <?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::redirect('/', 'estudiantes');

Auth::routes();


//web
Route::get('blog', 'Web\PageController@blog')->name('blog');
Route::get('entrada/{slug}',   'Web\PageController@post')->name('post');
Route::get('categoria/{slug}', 'Web\PageController@category')->name('category');
Route::get('etiqueta/{slug}',  'Web\PageController@tag')->name('tag');
Route::get('seleccionaractividad', 'Admin\TrabajoTitulacionController@seleccionaractividad')
    ->name('seleccionaractividad');
//administrativas

Route::resource('estudiantes','Admin\EstudianteController');
Route::resource('academicos','Admin\AcademicoController');
Route::resource('actividad_titulacions','Admin\ActividadTitulacionController');
Route::resource('trabajo_titulacions','Admin\TrabajoTitulacionController');