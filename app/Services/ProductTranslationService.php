<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use DeepL\Translator;
use DeepL\DeepLClient as DeepLClient;

class ProductTranslationService
{
    public function translate(string $description, string $language): ?string
    {
        $authKey = env('DEELP_API_KEY');
        $deeplClient = new DeepLClient($authKey);

        $result = $deeplClient->translateText($description, null, $language);
        return $result->text;
    }
}