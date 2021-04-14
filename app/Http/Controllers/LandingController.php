<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Staff;
use App\Merchandise;
use App\Drink;
use App\Food;

class LandingController extends Controller
{
    public function index()
    {
        $foods = Food::where('status', 1)->get();
        $staffs = Staff::where('status', 1)->get();
        $drinks = Drink::where('status', 1)->get();
        $merchandises = Merchandise::where('status', 1)->get();

        return view(
            'landing',
            [
                'foods' => $foods,
                'staffs' => $staffs,
                'drinks' => $drinks,
                'merchandises' => $merchandises,
            ]
        );
    }

    public function admin()
    {
        return view('dashboard');
    }
}
