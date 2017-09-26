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
Route::get('/abc', 'CalculatorController@tokped');

Route::get('/todo', 'ToDoListController@GetToDo');

Route::post('/addtodo', 'ToDoListController@AddToDo');

Route::group(['prefix' => 'palindrome'], function() {

    Route::get('/palindromeauto/{word}', 'MyController@MyPalindromeAuto'); 
    
    Route::get('/palindromemanual/{word}', 'MyController@MyPalindromeManual'); 

    Route::get('/ispalindrome/{word?}', 'MyController@isPalindrome');
    
    Route::get('/about/{word?}', 'MyController@about');
});


Route::group(['prefix' => 'calculator'], function() {

Route::get('/add/{angka1?}/x/{angka2?}', 'CalculatorController@Add');

Route::get('/sub/{angka1?}/x/{angka2?}', 'CalculatorController@Sub');

Route::get('/mtpl/{angka1?}/x/{angka2?}', 'CalculatorController@Multiply');

Route::get('/div/{angka1?}/x/{angka2?}', 'CalculatorController@Div');

Route::get('/pangkat/{angka1?}/x/{angka2?}', function ($angka1 = 1,$angka2 = 10) {
    $var = pow($angka1,$angka2);
    return $var;
});
// larafel read from routes 
Route::get('/akar/{angka1?}/x/{angka2?}', function ($angka1 = 1,$angka2 = 10) {
    $var = pow($angka1,1/$angka2);
    return $var;
});

Route::get('/mod/{angka1?}/x/{angka2?}', function ($angka1 = 1,$angka2 = 10) {
    $var = $angka1 % $angka2;
    return $var;
});

});


Route::get('/', function(){
    return view ('welcome');
});

// komponennya , where it leads dalam hal ini '/', dan closure berupa function ()
// ? = optional tidak harus diisi, jika menggunakan optional, maka default value harus ditentukan. 
?>