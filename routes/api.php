<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// handle not found routes
Route::fallback(function () {
    return response()->json(['message' => 'some thing wrong'], 404);
});

Route::get('/nafath/{id}', function ($id) {
    $url = "https://iamservices.semati.sa/nafath/api/v1/client/authorize/";
    $apiKey = '1916d041-23d3-4bfe-8868-8b70d26d7136';
    $response = Http::withHeaders([
        'Content-Type' => 'application/json',
        'Authorization' => 'apikey ' . $apiKey,
    ])->post($url, [
        "id" => $id,
        "action" => "SpRequest",
        "service" => "Login"
    ]);

    if ($response->successful()) {
        $data = $response->json();
        if(!array_key_exists("transId" ,$data)) {
            return response()->json([
                'status' => 'error',
                'message' => "يبدو أن هناك خطاء في التحقق من رقم الهوية خاصتك، الرجاء المحاولة مرة أخرى"
            ]);
        }
        $data['status'] = "ok";
        return $data;
    }

    return null;
});