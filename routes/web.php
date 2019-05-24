<?php

Route::get('/', function () {
    return redirect('samples');
});

Route::get('/samples', 'SampleController@index')->name('samples');
Route::get('/sequences', 'SequenceController@index')->name('sequences');
