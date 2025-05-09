<?php

namespace App\Http\Controllers;

use App\Services\CallApiService;
use Illuminate\Http\Request;

class Formula1Controller extends Controller
{
    /**
     * Fetch and display F1 2025 race schedule.
     *
     * @param CallApiService $apiService
     * @return \Illuminate\View\View
     */
    public function index(CallApiService $apiService)
    {
        // Fetch races using the API service
        $races = $apiService->getF1Races();

        // Pass races to the view
        // Uncomment the line below to debug the API response
        // dump($apiService->getF1Races());
        return view('races', compact('races'));
    }
}
