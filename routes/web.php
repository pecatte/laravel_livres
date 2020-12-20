<?php
use App\Models\Livre; // référence à la classe Livre
use Illuminate\Support\Facades\Route;

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
Route::get('/liste', function()
{
// récupération de la liste des livres en utilisant la méthode get de l’ORM Eloquent
$livres = Livre::get();
// affichage des livres (en mode debug pour le moment)
foreach ($livres as $livre) var_dump($livre->titre);
});

Route::get('/', function () {
    return view('welcome');
});