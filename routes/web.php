<?php

use App\Livewire\InputForm;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::get("/master-obat-bpom", inputForm::class);
