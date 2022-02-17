<?php

namespace App\Http\Controllers;


class AboutController 
{
    public function aPropos(){

        return view('about', [
            'name' => 'apropos',
            'team' => ['Fiorella', 'Marina', 'Matthieu'],
        ]);
    }

    public function show($user)
    {
        return view('about-show', [
            'user' => $user,
        ]);
    }
}
