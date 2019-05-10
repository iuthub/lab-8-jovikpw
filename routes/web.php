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

/*Route::get('/', [
    'uses’' => 'PostController@getIndex',
     'as' => 'blog.index'
]);
Route::get('/post/{id}', [
    'uses'=> 'PostController@getPost',
    'as'=>'blog.post'
    ]);

Route::get('admin/', function () {
    return view('admin.index');
});
Route::get('admin/create', function () {
    return view('admin.create');
})->name('admin.create');
Route::get('admin/edit/{id}', function () {
    return view('admin.edit');
})->name('admin.edit');
Route::get('/about', function () {
    return view('other.about');
});

//ADMIN.CREATE
Route::post('edit', function(\Illuminate\Http\Request $request,
                        \Illuminate\Validation\Factory $validator) {
    $validation =$validator->make($request->all(), [
        'title'=>'ruqiered|min:5',
        'content'=>'reuqiered|min:10'
    ]);
if ($validation->fails()) {
    return redirect()->back()->withErrors($validation);
}
return redirect()
    ->route('admin.index')
    ->with('info', 'Post edited, New title:' . $request->input('title'));
 })->name('admin.create');

 //ADMIN.UPDATE
 Route::post('edit', function(\Illuminate\Http\Request $request , 
                                    \Illuminate\Validation\Factory $validator) 
     { $validation = $validator ->make($request ->all(), [
          'title' => 'required|min:5',
          'content' => 'required|min:10'
    ]);
if ($validation ->fails()) {
     return redirect()->back()->withErrors($validation);
} 
     return redirect()
      ->route('admin.index')
       ->with('info', 'Post edited , New Title: ' . $request ->input('title')); 
    })->name('admin.update');

    Route::group(['prefix' => 'admin'], function() {
    Route::get('', [
        'uses' => 'PostController@getAdminIndex',
         'as' => 'admin.index'
          ]);
        Route::get('create', [
             'uses' => 'PostController@getAdminCreate',
              'as' => 'admin.create'  
          ]);
        Route::post('create', [
             'uses' => 'PostController@postAdminCreate',
              'as' => 'admin.create' 
          ]);
        Route::get('edit/{id}', [ 
            'uses' => 'PostController@getAdminEdit',
             'as' => 'admin.edit' 
             ]);
        Route::post('edit', [
             'uses' => 'PostController@postAdminUpdate',
              'as' => 'admin.update' 
              ]);
    });
    */
    Route::get('/', [
        'uses' => 'PostController@getIndex',
        'as' => 'blog.index'
    ]);
    
    Route::get('post/{id}', [
        'uses' => 'PostController@getPost',
        'as' => 'blog.post'
    ]);
    
    Route::get('about', function () {
        return view('other.about');
    })->name('other.about');
    
    Route::group(['prefix' => 'admin'], function() {
        Route::get('', [
            'uses' => 'PostController@getAdminIndex',
            'as' => 'admin.index'
        ]);
    
        Route::get('create', [
            'uses' => 'PostController@getAdminCreate',
            'as' => 'admin.create'
        ]);
    
        Route::post('create', [
            'uses' => 'PostController@postAdminCreate',
            'as' => 'admin.create'
        ]);
    
        Route::get('edit/{id}', [
            'uses' => 'PostController@getAdminEdit',
            'as' => 'admin.edit'
        ]);
    
        Route::post('edit', [
            'uses' => 'PostController@postAdminUpdate',
            'as' => 'admin.update'
        ]);
    });
