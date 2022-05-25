<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\testTwo;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });


Auth::routes();
Route::get('/', function () {
//    $aaa = \Illuminate\Support\Facades\DB::table('users')->get();
//    $aaa = \App\User::get();
//    dd($aaa);
    return redirect()->route('login');
});

Route::middleware('auth')->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});

Route::middleware('auth')->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});


Route::get('auth/facebook', [SocialController::class, 'facebookRedirect']);
Route::get('auth/facebook/callback', [SocialController::class, 'loginWithFacebook']);
Route::post('update-register', [HomeController::class, 'updateRegister'])->name('update.register');
//Route::view('/test', 'test');
//Route::get('/test2',[testTwo::class,'test']);
Route::get('/get-district/{id}', [HomeController::class, 'getDistrict'])->name('get.district');
Route::get('upload-test', [HomeController::class, 'uploadTest']);
Route::post('upload-test', [HomeController::class, 'uploadTestStore']);
Route::get('array-test', function () {
    ?>
    <script type='text/javascript'>
        let user = {
            'name': 'bini',
            'age': 18
        }
        let {name} = user
        console.log(name)
    </script>
    <?php
});
Route::get('api-test', function () {
    $payload = json_encode([
        "title" => 'This is test'
    ]);
    $options = [
        "http" => [
            "method" => "PATCH",
            "header" => "Content-type: application/json;charset=UTF-8",
            "content" => $payload
        ]
    ];
    $contex = stream_context_create($options);
//    dd($contex);
    $data = file_get_contents("https://jsonplaceholder.typicode.com/albums/1", false,$contex);
    dump($data);
//    $ch= curl_init("https://jsonplaceholder.typicode.com/albums/1");
//    $result=curl_exec($ch);
//    curl_close($ch);
//    dd($result);
//    print_r($http_response_header);
});
Route::get('firebase',[TestController::class,'firebase']);
