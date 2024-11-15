<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Response;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/assets/{type}/{filename}', function ($type, $filename) {
    $allowedTypes = ['img', 'css', 'js', 'fontawesome-free', 'jquery', 'bootstrap', 'webfonts'];

    // Validate the directory type
    if (!in_array($type, $allowedTypes)) {
        abort(404, 'Invalid asset type.');
    }

    $path = public_path("assets/{$type}/{$filename}");

    // Check if the file exists
    if (!file_exists($path)) {
        abort(404, ucfirst($type) . ' file not found.');
    }

    $file = file_get_contents($path);

    $extension = pathinfo($filename, PATHINFO_EXTENSION);
    $mimeTypes = [
        'css' => 'text/css',
        'js' => 'application/javascript',
        'jpg' => 'image/jpeg',
        'jpeg' => 'image/jpeg',
        'png' => 'image/png',
        'gif' => 'image/gif',
        'svg' => 'image/svg+xml',
        'woff' => 'font/woff',
        'woff2' => 'font/woff2',
        'ttf' => 'font/ttf',
        'otf' => 'font/otf',
        'eot' => 'application/vnd.ms-fontobject',
    ];

    $typeHeader = $mimeTypes[$extension] ?? mime_content_type($path);

    return Response::make($file, 200)->header("Content-Type", $typeHeader);
});

