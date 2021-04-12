<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Drink;
class DrinkController extends Controller
{
    public function index()
    {
        $drinks = Drink::all();
        return view('modul.drink', compact('drinks'));
    }

    public function store(Request $request)
    {
        $drinks = new Drink;

        $file_name = time() . '_' . $request->file('foto')->getClientOriginalName();
        $drinks->foto = '/assets2/img/drinks/' . $file_name;
        $request->file('foto')->move(public_path('/assets2/img/drinks/'), $file_name);

        $drinks->nama = $request->nama;
        $drinks->harga = $request->harga;
        $drinks->stock = $request->stock;
        $drinks->save();

        return redirect()->back();
    }

    public function delete($id)
    {
        $drinks = Drink::find($id);
        $drinks->delete();
        return redirect()->back();
    }
}
