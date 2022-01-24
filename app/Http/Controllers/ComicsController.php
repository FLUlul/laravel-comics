<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComicsController extends Controller
{
    public function comicsFun() {

        $comics = [
            [
                "name" => "Nome1",
            ],
            [
                "name" => "Nome2",
            ],
            [
                "name" => "Nome3",
            ],
            [
                "name" => "Nome4",
            ],
            [
                "name" => "Nome5",
            ],
            [
                "name" => "Nome6",
            ],
            [
                "name" => "Nome7",
            ],
            [
                "name" => "Nome8",
            ],
            [
                "name" => "Nome9",
            ],
            [
                "name" => "Nome10",
            ],
            [
                "name" => "Nome11",
            ],
            [
                "name" => "Nome12",
            ],
        ];
    
        return view('pages.comics', compact('comics'));
    }
    public function comicFun() {
        return view('pages.comic-detail');
    }
}
