<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class ConvertController extends Controller
{
    //Display the conversion
    public function index()
    {
        return view('converter');
    }

    //Handle the conversion
    public function convert(Request $request)
    {

        $request->validate([
            'value' => 'required|numeric',
            'conversion_type' => 'required|in:celsius_to_fahrenheit,celsius_to_kelvin,kilometer_to_meter,kilometer_to_knots,kilogram_to_gram,gram_to_kilogram'
        ]);

        $value = $request->input('value');
        $conversionType = $request->input('conversion_type');

        $result = 0;
        $unitFrom = '';
        $unitTo = '';

        //Temperature Conversion
        if ($conversionType === 'celsius_to_fahrenheit') {
            $result = ($value * 9 / 5) + 32;
            $unitFrom = 'Celsius';
            $unitTo = 'Fahrenheit';
        } elseif ($conversionType === 'celsius_to_kelvin') {
            $result = $value + 273.15;
            $unitFrom = 'Celsius';
            $unitTo = 'Kelvin';
        } elseif ($conversionType === 'kilometer_to_meter') {
            $result = $value * 0.2777777778;
            $unitFrom = 'km/h';
            $unitTo = 'm/s';
        } elseif ($conversionType === 'kilometer_to_knots') {
            $result = $value * 0.5399568035;
            $unitFrom = 'km/h';
            $unitTo = 'Knots';
        } elseif ($conversionType === 'kilogram_to_gram') {
            $result = $value * 1000;
            $unitFrom = 'Kilogram';
            $unitTo = 'Gram';
        } elseif ($conversionType === 'gram_to_kilogram') {
            $result = $value / 1000;
            $unitFrom = 'Gram';
            $unitTo = 'Kilogram';
        }

        $result = round($result, 2);

        return view('converter', [
            'value' => $value,
            'conversionType' => $conversionType,
            'result' => $result,
            'unitFrom' => $unitFrom,
            'unitTo' => $unitTo,
        ]);
    }
}
