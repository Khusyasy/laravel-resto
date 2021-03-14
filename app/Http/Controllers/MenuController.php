<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Drink;

class MenuController extends Controller
{
    public function show(){
        $foods = Menu::all();

        return view('food', compact("foods"));
    }

    public function drink(){
        $drinks = Drink::all();

        return view('drink', compact("drinks"));
    }
}
