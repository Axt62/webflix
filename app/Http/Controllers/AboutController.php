<?php

namespace App\Http\Controllers;


class AboutController 
{
    public function aPropos($name){

        return view('about', [
            'name' => $name,
            'team' => ['Fiorella', 'Marina', 'Matthieu'],
        ]);
    }
}
