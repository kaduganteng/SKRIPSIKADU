<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

// Auth::routes();
Route::get('/help', function(){
    return view('help');
})->name('help');


Route::namespace('Auth')->group(function () {
    Route::get('/login', 'LoginController@showLoginForm')->middleware('guest')->name('login');
    Route::post('/login', 'LoginController@login')->middleware('guest');
    Route::post('/logout', 'LoginController@logout')->name('logout');
});

Route::get('quisioner/create', 'QuisionerController@create')->name('quisioner.create');
Route::middleware('auth')->group(function(){
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/home/getStaffPosition', 'HomeController@getStaffPosition');
    Route::get('/home/getStaffDepartement', 'HomeController@getStaffDepartement');

    //Perangkingan SAW

   
        

    //personal karyawan
    Route::get('/users/account/{id}/edit', 'UsersController@editAccount')->name('users.account.edit');
    Route::patch('/users/{id}/updateAccount', 'UsersController@updateAccount')->name('users.account.update');
    // profile
    Route::get('/profile', 'ProfileController@index')->name('profile');
    Route::get('/profile/{id}/edit', 'ProfileController@editProfile')->name('profile.edit');
    Route::patch('/profile/{id}/update', 'ProfileController@updateProfile')->name('profile.update');
    Route::patch('/profile/upload', 'ProfileController@uploadPhoto')->name('profile.upload');

    Route::middleware('role:admin|superadmin')->group(function(){
        Route::get('/users', 'UsersController@index')->name('users.index');
        Route::patch('/users/{id}/update', 'UsersController@update')->name('users.update');
        Route::get('/users/{id}', 'UsersController@destroy')->name('users.destroy');

        Route::get('/roles', 'RolesController@index')->name('roles.index');
        Route::get('/roles/create', 'RolesController@create')->name('roles.create');
        Route::post('/roles', 'RolesController@store')->name('roles.store');
        Route::get('/roles/{roles}/edit', 'RolesController@edit')->name('roles.edit');
        Route::patch('/roles/{roles}/update', 'RolesController@update')->name('roles.update');
        Route::get('/roles/{id}', 'RolesController@destroy')->name('roles.destroy');


        Route::resources([
            'alternatives' => AlternativeController::class,
            'criteriaratings' => CriteriaRatingController::class,
            'criteriaweights' => CriteriaWeightController::class
            ]);
        Route::get('/decision','DecisionController@index')->name('decision.index');
        Route::get('/normalization', 'NormalizationController@index')->name('normalization.index');
        Route::get('/rank', 'RankController@index')->name('rank.index');
    });

    Route::middleware('role:admin|accounting|supervisor')->group(function(){
        Route::namespace('Master')->prefix('master')->name('master.')->group(function(){
            Route::get('position', 'PositionController@index')->name('position.index');
            Route::middleware('role:admin|accounting')->group(function(){
                Route::get('position/create', 'PositionController@create')->name('position.create');
                Route::post('position', 'PositionController@store')->name('position.store');
                Route::get('position/{position}/edit', 'PositionController@edit')->name('position.edit');
                Route::patch('position/{position}/update', 'PositionController@update')->name('position.update');
                Route::get('position/{id}', 'PositionController@destroy')->name('position.destroy');
            });

            Route::get('departement', 'DepartementController@index')->name('departement.index');
            Route::get('staff', 'StaffController@index')->name('staff.index');
            Route::middleware('role:admin|accounting')->group(function(){
                Route::get('departement/create', 'DepartementController@create')->name('departement.create');
                Route::post('departement', 'DepartementController@store')->name('departement.store');
                Route::get('departement/{departement}/edit', 'DepartementController@edit')->name('departement.edit');
                Route::patch('departement/{departement}/update', 'DepartementController@update')->name('departement.update');
                Route::get('departement/{id}', 'DepartementController@destroy')->name('departement.destroy');

                Route::get('staff/create', 'StaffController@create')->name('staff.create');
                Route::post('staff', 'StaffController@store')->name('staff.store');
                Route::get('staff/{staff}/edit', 'StaffController@edit')->name('staff.edit');
                Route::patch('staff/{staff}/update', 'StaffController@update')->name('staff.update');
                Route::get('staff/{id}', 'StaffController@destroy')->name('staff.destroy');
            });
        });

        Route::get('salary', 'SalaryController@index')->name('salary.index');
        Route::get('salary/detail/id={id}', 'SalaryController@show')->name('salary.show');
        Route::get('overtime', 'OvertimeController@index')->name('overtime.index');

        Route::middleware('role:admin|accounting')->group(function(){
            Route::get('salary/create', 'SalaryController@create')->name('salary.create');
            Route::post('salary/detail/create', 'SalaryController@store')->name('salary.store');
            Route::post('salary/detail/create/store', 'SalaryController@storeDetail')->name('salary.detail.store');

            Route::get('salary/{salary}/edit', 'SalaryController@edit')->name('salary.edit');
            Route::patch('salary/{salary}/update', 'SalaryController@update')->name('salary.update');
            Route::get('staff/get_salary', 'SalaryController@getSalary');
            Route::get('salary/export/excel/id={id}/filter={filter}', 'SalaryController@excel')->name('salary.export.excel');
        
            Route::get('overtime/create', 'OvertimeController@create')->name('overtime.create');
            Route::post('overtime', 'OvertimeController@store')->name('overtime.store');
            Route::get('overtime/{overtime}/edit', 'OvertimeController@edit')->name('overtime.edit');
            Route::patch('overtime/{overtime}/update', 'OvertimeController@update')->name('overtime.update');
            Route::get('overtime/{id}', 'OvertimeController@destroy')->name('overtime.destroy');
        });

        Route::get('absensi', 'AbsensiController@index')->name('absensi.index');
        Route::get('absensi/create', 'AbsensiController@create')->name('absensi.create');
        Route::post('absensi/detail/create', 'AbsensiController@store')->name('absensi.store');
        Route::get('absensi/delete/{id}', 'AbsensiController@destroy')->name('absensi.destroy');

        Route::get('absensi/detail/create', 'AbsensiController@createDetail')->name('absensi.detail.create');
        Route::post('absensi/detail/store', 'AbsensiController@storeDetail')->name('absensi.detail.store');
        Route::get('absensi/detail/periode={periode}', 'AbsensiController@show')->name('absensi.detail');
        Route::get('absensi/export/excel/periode={periode}/filter={filter}', 'AbsensiController@excel')->name('absensi.export.excel');


        Route::middleware('role:admin')->group(function(){
            Route::get('schedule/create', 'ScheduleController@create')->name('schedule.create');
            Route::post('schedule', 'ScheduleController@store')->name('schedule.store');
            Route::get('schedule/{schedule}/edit', 'ScheduleController@edit')->name('schedule.edit');
            Route::patch('schedule/{schedule}/update', 'ScheduleController@update')->name('schedule.update');
            Route::get('schedule/{id}', 'ScheduleController@destroy')->name('schedule.destroy');

            //pemmberkasan

            Route::get('pemberkasan', 'PemberkasanController@index')->name('pemberkasan.index');
            Route::put('pemberkasan/{id}', 'PemberkasanController@tambahpoint')->name('pemberkasan.tambahpoint');
            Route::get('pemberkasan/detail/{id}', 'PemberkasanController@detail')->name('pemberkasan.detail');
            // Route::get('pemberkasan/{id}', 'PemberkasanController@destroy')->name('pemberkasan.destroy');

        });

    });

    //POINT

    //Pointabsen
    Route::get('pointabsen/create', 'PointabsenController@create')->name('pointabsen.create');
    Route::post('pointabsen/store', 'PointabsenController@store')->name('pointabsen.store');

     //Pointberkas
     Route::get('pointberkas/create', 'PointberkasController@create')->name('pointberkas.create');
     Route::post('pointberkas/store', 'PointberkasController@store')->name('pointberkas.store');


    //file finger
    Route::get('filefinger', 'FilefingerController@index')->name('filefinger.index');
    Route::get('filefinger/create', 'FilefingerController@create')->name('filefinger.create');
    Route::post('filefinger/detail/create', 'FilefingerController@store')->name('filefinger.store');
    Route::get('filefinger/delete/{id}', 'FilefingerController@destroy')->name('filefinger.destroy');



    //Quisioner
    Route::get('quisioner', 'QuisionerController@index')->name('quisioner.index');
    Route::post('quisioner/store', 'QuisionerController@store')->name('quisioner.store');
    Route::get('/quisioner.delete.{id}', 'QuisionerController@destroy')->name('quisioner.destroy');
    Route::get('quisioner/detail', 'QuisionerController@detail')->name('quisioner.detail');

    //pemberkasan
    Route::get('pemberkasanuser/index', 'PemberkasanUserController@index')->name('pemberkasanuser.index');
    Route::get('pemberkasanuser/create', 'PemberkasanUserController@create')->name('pemberkasanuser.create');
    Route::post('pemberkasanuser/store', 'PemberkasanUserController@store')->name('pemberkasanuser.store');
    Route::get('pemberkasanuser/{pemberkasanuser}/edit', 'PemberkasanUserController@edit')->name('pemberkasanuser.edit');
    Route::patch('pemberkasanuser/{pemberkasanuser}/update', 'PemberkasanUserController@update')->name('pemberkasanuser.update');


    Route::get('schedule', 'ScheduleController@index')->name('schedule.index');
    // cuti staff
    Route::get('cuti', 'CutiController@index')->name('cuti.index');
    Route::get('cuti/create', 'CutiController@create')->name('cuti.create');
    Route::post('cuti', 'CutiController@store')->name('cuti.store');
    Route::get('cuti/{cuti}/edit', 'CutiController@edit')->name('cuti.edit');
    Route::patch('cuti/{cuti}/update', 'CutiController@update')->name('cuti.update');
    Route::middleware('role:admin')->group(function(){
        Route::get('cuti/{id}', 'CutiController@destroy')->name('cuti.destroy');
        Route::patch('/cuti/{id}/validated', 'CutiController@validasi')->name('cuti.validated');
    });
});
