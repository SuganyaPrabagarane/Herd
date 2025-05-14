<?php

namespace App\Http\Controllers;

use App\Services\CallApiService;
use Illuminate\Http\Request;



class OpenWeatherController extends Controller
{

    protected CallApiService $apiService;

    public function __construct(CallApiService $apiService)
    {
        $this->apiService = $apiService;
    }

    public function index(Request $request)
    {
        $request->validate([
            'city' => 'required|string|min:2|max:100'
        ]);

        $city = $request->query('city', '');
        $weatherData = [];
        $error = null;


        if (!empty($city)) {
            try {
                $weatherData = $this->apiService->getWeather($city);
                if (empty($weatherData)) {
                    $error = 'City not found or API error';
                }
            } catch (\Exception $e) {
                $error = 'Error fetching weather data:' . $e->getMessage();
            }
        }

        return view('weather', [
            'city' => $city,
            'weatherData' => $weatherData,
            'error' => $error,
        ]);
    }
}
