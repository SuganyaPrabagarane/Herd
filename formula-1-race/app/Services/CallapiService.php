<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class CallApiService
{
    /**
     * Fetch F1 2025 races from the Ergast API.
     *
     * @return array
     */
    public function getF1Races(): array
    {
        // Make API request
        $response = Http::get('http://localhost:3000/MRData');

        // Return races if successful, else empty array
        return $response->successful()
            ? $response->json()['RaceTable']['Races']
            : [];
    }
}
