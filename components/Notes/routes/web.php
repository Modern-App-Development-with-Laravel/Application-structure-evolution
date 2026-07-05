<?php

use Illuminate\Support\Facades\Route;
use Italofantone\Notes\Http\Controllers\NoteController;


Route::middleware(['web'])->group(function () {
    Route::get('/notes/{note?}', [NoteController::class, 'show'])->name('notes.show');

    Route::post('/notes', [NoteController::class, 'store'])->name('notes.store');

    Route::put('/notes/{note}', [NoteController::class, 'update'])->name('notes.update');

    Route::delete('/notes/{note}', [NoteController::class, 'destroy'])->name('notes.destroy');
});