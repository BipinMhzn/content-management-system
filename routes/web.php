<?php

Route::get('/', [
    'uses' => 'FrontEndController@index',
    'as' => 'index'
]);

Route::get('/post/{slug}',[
    'uses' => 'FrontEndController@singlePost',
    'as' => 'post.single'
]);

Route::get('/category/{id}',[
    'uses' => 'FrontEndController@category',
    'as' => 'category.single'
]);

Route::get('/tag/{id}',[
    'uses' => 'FrontEndController@tag',
    'as' => 'tag.single'
]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    //create a Post
    Route::get('/post/create',[
        'uses' => 'PostController@create',
        'as' => 'post.create'
    ]);

    //store a Post
    Route::post('/post/store',[
        'uses' => 'PostController@store',
        'as' => 'post.store'
    ]);

    //view all posts
    Route::get('/posts',[
        'uses' => 'PostController@index',
        'as' => 'posts.index'
    ]);

    //edit the post
    Route::get('/post/edit/{id}',[
        'uses' => 'PostController@edit',
        'as' => 'post.edit'
    ]);

    //trash the post
    Route::get('/post/trash/{id}',[
        'uses' => 'PostController@trash',
        'as' => 'post.trash'
    ]);
    
    //view trashed post
    Route::get('/posts/trashed',[
        'uses' => 'PostController@trashed',
        'as' => 'posts.trashed'
    ]);

    //restore post
    Route::get('/post/restore/{id}',[
        'uses' => 'PostController@restore',
        'as' => 'post.restore'
    ]);

    //permanently destroy post
    Route::get('/post/destroy/{id}',[
        'uses' => 'PostController@destroy',
        'as' => 'post.destroy'
    ]);

    //update a post
    Route::post('/post/update/{id}',[
        'uses' => 'PostController@update',
        'as' => 'post.update'
    ]);

    
    //Category
    //create a category
    Route::get('/category/create',[
        'uses' => 'CategoriesController@create',
        'as' => 'category.create'
    ]);

    //store a category
    Route::post('/category/store',[
        'uses' => 'CategoriesController@store',
        'as' => 'category.store'
    ]);

    //show all categories
    Route::get('/categories',[
        'uses' => 'CategoriesController@index',
        'as' => 'categories.index'
    ]);

    //edit category
    Route::get('/category/edit/{id}',[
        'uses' => 'CategoriesController@edit',
        'as' => 'category.edit'
    ]);
    //delete category
    Route::get('/category/delete/{id}',[
        'uses' => 'CategoriesController@destroy',
        'as' => 'category.delete'
    ]);
    //update category
    Route::post('/category/update/{id}',[
        'uses' => 'CategoriesController@update',
        'as' => 'category.update'
    ]);


    //Tags
    //view all tags
    Route::get('/tags',[
        'uses' => 'TagsController@index',
        'as' => 'tags.index'
    ]);

    //create a tag
    Route::get('/tag/create',[
        'uses' => 'TagsController@create',
        'as' => 'tag.create'
    ]);

    //store a tag
    Route::post('/tag/store/',[
        'uses' => 'TagsController@store',
        'as' => 'tag.store'
    ]);

    //edit a tag
    Route::get('/tag/edit/{id}',[
        'uses' => 'TagsController@edit',
        'as' => 'tag.edit'
    ]);

    //update a tag
    Route::post('/tag/update/{id}',[
        'uses' => 'TagsController@update',
        'as' => 'tag.update'
    ]);

    //delete a tag
    Route::get('/tag/delete/{id}',[
        'uses' => 'TagsController@destroy',
        'as' => 'tag.delete'
    ]);

    //Users
    //show all Users
    Route::get('/users',[
        'uses' => 'UsersController@index',
        'as' => 'users.index'
    ]);

    //create a user
    Route::get('/user/create',[
        'uses' => 'UsersController@create',
        'as' => 'user.create'
    ]);

    //store a user
    Route::post('/user/store',[
        'uses' => 'UsersController@store',
        'as' => 'user.store'
    ]);
    
    //make a admin
    Route::get('/user/admin/{id}',[
        'uses' => 'UsersController@admin',
        'as' => 'user.admin'
    ]);

    //remove as admin
    Route::get('/user/not-admin/{id}',[
        'uses' => 'UsersController@not_admin',
        'as' => 'user.not_admin'
    ]);

    //delete a user
    Route::get('/user/delete/{id}',[
        'uses' => 'UsersController@destroy',
        'as' => 'user.delete'
    ]);


    //Profile
    //view profile 
    Route::get('/user/profile',[
        'uses' => 'ProfilesController@index',
        'as' => 'user.profile'
    ]);
    
    //update the profile
    Route::post('/user/update',[
        'uses' => 'ProfilesController@update',
        'as' => 'user.profile.update'
    ]);

    Route::get('/settings',[
        'uses' => 'SettingsController@index',
        'as'=> 'settings'
    ]);

    Route::post('/setting/update',[
        'uses' => 'SettingsController@update',
        'as' => 'setting.update'
    ]);


});
