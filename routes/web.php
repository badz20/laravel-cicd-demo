<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Add this test route to verify deployment
Route::get('/deploy-status', function () {
    return response()->json([
        'status' => 'Deployed successfully!',
        'time' => now()->toDateTimeString(),
        'server' => gethostname()
    ]);
});
