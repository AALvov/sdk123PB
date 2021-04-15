<?php

use Illuminate\Support\Facades\Route;
use App\User;
use Illuminate\Support\Facades\Auth;
//Групировка от бана
Route::group(['middleware' => 'forbid-banned-user',], function () {
    Route::get('/', 'MenuController@view_menu')->name('gda')->middleware('auth');   //Главная
    Route::get('/opo/{opo}', function ($opo) {
        return view('opo', ['opo' => $opo]);
    })->name('opo')->middleware('auth');  // Уровень ОПО главная
    Route::get('/opo_plan/{opo}', function ($opo) {
        return view('opo_plan', ['opo' => $opo]);
    })->name('opo')->middleware('auth');  // Уровень ОПО план
    Route::get('/element/{elem}', function ($elem) {
        return view('element', ['elem' => $elem]);
    })->name('element')->middleware('auth');  // Уровень Элемента главная
    Route::get('/element/{elem_id}/oto/{oto}', function ($elem_id, $oto) {
        return view('oto', ['elem_id' => $elem_id, 'oto' => $oto]);
    })->name('oto')->middleware('auth');  // Уровень Элемента декомпозиция на ОТО
    Route::get('/ref_opo', 'ElemController@view_tu')->name('ref_opo');

    Route::get('/trend', function () {
        return view('trend');
    })->name('trend');
    Route::get('/php', function () {
        phpinfo();
    });

    Route::get('/opo_day', function () {
        return view('opo_day');
    })->name('opo_day');
    Route::get('opo/charts/fetch-data', 'Opo_dayController@view_day')->name('opo/charts/fetch-data');
    Route::get('charts/fetch-data', 'Opo_dayController@view_day')->name('charts/fetch-data');
//Route::get('charts/chart_1', function () {return view('charts/chart_1');})->name('chart_1');
    Route::get('/charts/chart_ip_opo', function () {
        return view('charts/chart_ip_opo');
    })->name('chart_ip_opo');

//***************Login and prochee


  //  Route::get('/home', 'HomeController@index')->name('home');

//*********** Проба загрузки выгрузки не работает
    Route::get('user/{id}/avatar', function ($id) {
        // Find the user
        $user = User::find(1);
        // Return the image in the response with the correct MIME type
        return response()->make($user->avatar, 200, array('Content-Type' => (new finfo(FILEINFO_MIME))->buffer($user->avatar)));
    });
//*********** Проба выгрузки картинки выгрузки не работает
    Route::post('user/1', function (Request $request, $id) {
        // Get the file from the request
        $file = $request->file('image');
        // Get the contents of the file
        $contents = $file->openFile()->fread($file->getSize());
        // Store the contents to the database
        $user = App\User::find(1);
        $user->avatar = $contents;
        $user->save();
    })->name('uploaded');;

//*********** Проба ПДФ выгрузка в пдф работает https://si-dev.com/ru/blog/laravel-html-to-pdf
    Route::get('invoices/download', 'InvoiceController@download');
    Route::get('opos', 'NotesController@index')->name('opos')->middleware('password.confirm');
    Route::get('pdf', 'NotesController@pdf');

//*********** Проба загрузки выгрузки
    Route::resource('/images', 'ImageController');
    Route::get('upload', ['as' => 'upload_form', 'uses' => 'UploadController@getForm']);
    Route::post('upload', ['as' => 'upload_file', 'uses' => 'UploadController@upload']);

//настройка доступа по ролям и привелегиям пользователя https://laravel.demiart.ru/guide-to-roles-and-permissions/
    Route::group(['middleware' => 'role:admin',], function () {
        Route::get('/admin', 'AdminController@log_view')->name('admin'); // Главная админка логи
        Route::get('pdf_logs', 'AdminController@pdf_logs')->name('pdf_logs')->middleware('password.confirm'); // скачать журнал логов
        Route::get('reg_user', 'AdminController@reg_user')->name('reg_user')->middleware('password.confirm');
        Route::post('add_user', 'AdminController@add_user')->name('add_user');
        Route::post('update_user', 'AdminController@update_user')->name('update_user');
        Route::get('admin/delete/{id}', 'AdminController@destroy_user');  //Удаление пользователя
        Route::get('admin/edit/{id}', 'AdminController@edit_user');  //Редактирование данных пользователя
        Route::get('admin/ban/{id}', 'AdminController@ban1_user');  //Блокировка пользователя
        Route::get('admin/unban/{id}', 'AdminController@unban_user');  //Разблокировка пользователя
        Route::get('/admin/users', 'AdminController@user_view')->name('view_user');;
        Route::get('/admin/roles', 'AdminController@role_view');
        Route::get('/admin/perm', 'AdminController@perm_view');
        Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
        Route::post('register', 'Auth\RegisterController@register');
    }); //'role:admin'
}); //'forbid-banned-user'
//Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Auth::routes();
Route::get('/logout', function () {
    Auth::logout();
    return Redirect::to('login');
});
//Route::get('/', 'MenuController@view_menu')->name('gda');   //Главная



