<?php
Route::group(['namespace' => 'Webriderz\Contactform\Http\Controllers','middleware'=>['web']], function() {
    Route::get('contact','ContactFormController@getContactPage');
	Route::name('contact')->post('contact','ContactFormController@sendEnquiry');
});

