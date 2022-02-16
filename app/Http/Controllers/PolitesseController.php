<?php

namespace App\Http\Controllers;

class PolitesseController 
{
    public function hello()
    {
        return view('hello', [
            'name' => 'Fiorella',
            'numbers' => [1, 3, 7],
        ]);
    }

    public function goodBye()
    {
        return view('good-bye');
    }

    public function hellosomeone($name)
    {
        return view('hello', [
            'name' => $name,
            'numbers' => [],
        ]);

    }
};

