<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('maquina');
});

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

Route::post('/process-maquina', function (Request $request) {
    $maquina = $request->input('maquina');
    $apiKey = '';
    $temperature = 0.9;

    $response = Http::post('https://api.openai.com/v1/engines/davinci-codex/completions', [
        'prompt' => "Código de barras escaneado: $maquina\nGenera una descripción.",
        'max_tokens' => 100,
        'temperature' => $temperature,
    ])->withHeaders([
        'Authorization' => "Bearer $apiKey",
    ]);

    $result = $response->json();

    if (isset($result['choices'][0]['text'])) {
        return response()->json(['result' => $result['choices'][0]['text']]);
    }

    return response()->json(['result' => 'No se pudo generar una descripción.']);
});
