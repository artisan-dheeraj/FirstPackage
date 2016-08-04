<?php
  Route::group(['namespace'=>'Hd\TEST\Controllers','prefix'=>'hd/test'],function(){


     Route::get('/',['as'=>'test_path','uses'=>'TestController@index']);
  });
