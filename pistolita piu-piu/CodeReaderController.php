<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CodeReaderController extends Controller
{
    public function readCode(Request $request)
    {
        $apiKey = 'API_KEY';
        $temperature = 0.9;

        $response = Http::post('https://api.openai.com/v1/engines/davinci-codex/completions', [
            'prompt' => $request->input('code'),
            'max_tokens' => 100,
            'temperature' => $temperature,
        ])->withHeaders([
            'Authorization' => "Bearer $apiKey",
        ]);

        $result = $response->json();

        if (isset($result['choices'][0]['text'])) {
            return response()->json(['response' => $result['choices'][0]['text']]);
        }

        return response()->json(['error' => 'No se pudo generar código.']);
    }
}
