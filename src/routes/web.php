<?php
    
    Route::group(['namespace' => 'TechnoHive\Sms\Http\Controllers', 'middleware' => ['web']], function(){
        Route::get('sendsms', 'TechnoHiveSmsController@index');
        Route::post('sendsms', 'TechnoHiveSmsController@sendSms')->name('sendsms');
    });
    ?>