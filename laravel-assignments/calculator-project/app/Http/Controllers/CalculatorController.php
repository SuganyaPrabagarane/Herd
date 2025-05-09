<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function index()
    {
        return view('calculator');
    }

    public function calculate(Request $request)
    {
        $display = $request->input('display', '');
        $btn = $request->input('btn');

        switch ($btn) {
            case 'C':
                $display = '';
                break;

            case '=':
                if (preg_match('/^[\d\+\-\*\/\.\(\)\s]+$/', $display)) {
                    try {
                        eval("\$display = $display;");
                    } catch (\Exception $e) {
                        $display = "Error";
                    }
                } else {
                    $display = "Invalid input";
                }
                break;

            default:
                $display .= $btn;
                break;
        }

        return view('calculator', [
            'display' => $display,
        ]);
    }
}
