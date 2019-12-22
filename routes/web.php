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


Route::get('/', ['as'=>'home', function () {
    return view('welcome');
}]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
/*
Route::get('/page/{dog}/{id}', function($id){
    echo '<pre>';
    echo $id;
    echo '</pre>';
})->where(['id'=>'[0-9]+','dog' =>'[a-z]+' ]);

Route::group(['prefix'=>'admin/{id}'], function (){
    Route::get('page/create',function(){
        return redirect()->route('home');
    });
    Route::get('page/delete', function(){
        echo 'page/delete';
    });
});
*/
Route::get('/about/{id}', 'Core@test');

Route::get('/logout', function (){
    Auth::logout();
    return Redirect::to('login');
});


Route::get('/task/{id}', 'taskController@getTask')->name('task.show');

Route::post('/task', 'taskController@postTask')->name('task.create');

Route::delete('/task', function (\App\Task $task) {
    $task->delete();
    return redirect('task');
});
Route::get('/project', 'projectController@createProject')->name('project');
//Route::get('send', 'mailController@send');
Route::post('/project', 'projectController@postProject')->name('project.create');

Route::get('/history', 'historyController@history')->name('history');

