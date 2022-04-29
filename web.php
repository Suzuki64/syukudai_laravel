<?php

use Illuminate\Support\Facades\Route;
/*コントローラー学習で追加*/
use App\Http\Controllers\TestController;
/*ミドルウェア学習で追加*/
use App\Http\Middleware\FirstMiddleware;
/*宿題*/
use App\Http\Controllers\syukudai;

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


/*
Route::get('/',[TestController::class, 'index']);
Route::post('/', [TestController::class, 'post']);
Route::get('/verror', [TestController::class, 'verror']);
*/

/*宿題*/
Route::get('/', [syukudai::class, 'index']);
Route::get('/{room}', [syukudai::class, 'room']);



/*デフォルト
Route::get('/', function () {
    return view('welcome');
});
*/

/*練習問題 laravel入門4章
Route::get('/greet/{bonjour?}', function ($bonjour='goodmoring') {
    return $bonjour . "=おはようございます";
});

Route::get('/test/{room}/{id}', function ($room, $id) {
    return "roomが" . $room . "でidは" . $id . "です" ;
});

コントローラー学習
Route::get('/{msg?}',[TestContoroller::class, 'index']);
*/