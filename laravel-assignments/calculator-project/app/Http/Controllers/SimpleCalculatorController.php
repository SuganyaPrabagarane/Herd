<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SimpleCalculatorController extends Controller
{
    public function index()
    {
        return view('simpleCalculator');
    }


    public function simpleCalculate(Request $request)
    {

        $number1 = $request->input('number1', 0);
        $number2 = $request->input('number2', 0);
        $operation = $request->input('operation', '');

        switch ($operation) {
            case 'add':
                $result = $number1 + $number2;
                break;
            case 'sub':
                $result = $number1 - $number2;
                break;
            case 'mul':
                $result = $number1 * $number2;
                break;
            case 'divide':
                $result = $number2 != 0 ? $number1 / $number2 : 'Can not divide by zero';
                break;
            default:
                $result = 'Invalid operation';
                break;
        }

        $result = round($result, 2);

        return view('simpleCalculator', [
            'result' => $result,
            'number1' => $number1,
            'number2' => $number2,
            'operation' => $operation,
        ]);
    }
}
