<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Response;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/assets/img/{filename}', function ($filename) {
    $path = public_path("assets/img/{$filename}");

    if (!file_exists($path)) {
        abort(404, 'Image not found.');
    }

    $file = file_get_contents($path);
    $type = mime_content_type($path);

    return Response::make($file, 200)->header("Content-Type", $type);
});

