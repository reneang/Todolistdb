<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/data', function(){
    $obj = new stdClass; //anonymous class in PHP tanpa declare, dan kosong 
    $obj->name ="My Name"; 
    $obj->phoneNumber = "087781881782";

    return response()->json($obj, 404); 
    //fungsi standart larafel, maka harus dikasih status 
});

Route::post('/data', function(Request $request) {
    $request->validate([
        'id' => 'required'
    ]);

    $id = $request->input('id');
    $name = $request->input('name');
     return $id . " " . $name;

    $obj = new stdClass; 
    $obj->id = $id; 
    $obj->name = $name;

//   return response()->json($obj, 200);

});
//validasi data bisa dilakukan dengan beberapa cara 
//harus ada parameter id, kalau tidak ada dia akan error, setelah function function(Request) nama variable bisa diganti 
// yang diatas adalah query string , untuk, memasukan data bersifat simple yang hanya memiliki beberapa value. 
//?id=15&name=Loi
// jika ribet kita bisa pindahkan kedalam body 
// Route::post('/data/{id}', function($id) {
//     return $id;
// });
