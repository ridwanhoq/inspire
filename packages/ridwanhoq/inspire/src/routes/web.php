<?php

use Illuminate\Support\Facades\Route;

Route::get('inspire', function(\Ridwanhoq\Inspire\Inspire $inspire){
    return $inspire->index();
});