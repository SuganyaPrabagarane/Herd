<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class CallApiService
{
    /**
     * Fetch current weather data for a given city from OpenWeather API
     *@param string $city
     * @return array
     */
    public function getWeather(string $city): array
    {
        // Make API request
        $apiKey = config('services.openweather.key');
        $apiUrl = "http://api.openweathermap.org/data/2.5/weather";
        $response = Http::get($apiUrl, [
            'q' => $city,
            'units' => 'metric',
            'appid' => $apiKey,
        ]);

        // Return weather if successful, else empty array
        return $response->successful()
            ? $response->json()
            : [];
    }
}
