<?php

namespace App\Http\Controllers;  // file path

class HelloController extends Controller
{
    public function hello($name = 'Sugan')
    {
        $studentName = $name;
        $message = 'Building new project with laravel';
        return view('greeting', [
            'studentName' => $studentName,
            'message' => $message
        ]);
    }
}
