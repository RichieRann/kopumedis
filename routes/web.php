<?php

use App\Livewire\MO\AddForm;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::get("/master-obat-bpom", AddForm::class);
