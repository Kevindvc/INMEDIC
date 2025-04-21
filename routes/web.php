<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CitaController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {
    Route::resource('citas', CitaController::class)->except(['destroy']);
    Route::patch('/citas/{cita}/cancelar', [CitaController::class, 'cancelar'])->name('citas.cancelar');
});

Route::get('/test-db', function() {
    try {
        DB::connection()->getPdo();
        
        // Obtener algunos datos de muestra
        $users = App\Models\User::limit(5)->get();
        $doctors = App\Models\Doctor::limit(5)->get();
        
        return response()->json([
            'message' => 'Conexión exitosa a la base de datos',
            'users_sample' => $users,
            'doctors_sample' => $doctors
        ]);
        
    } catch (\Exception $e) {
        return response()->json([
            'error' => 'No se pudo conectar a la base de datos',
            'message' => $e->getMessage()
        ], 500);
    }
});
