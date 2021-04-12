<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Food;

class FoodController extends Controller
{
    public function index()
    {
        $foods = Food::all();
        return view('modul.food', compact('foods'));
    }

    public function store(Request $request)
    {
        $foods = new Food;

        $file_name = time() . '_' . $request->file('foto')->getClientOriginalName();
        $foods->foto = '/assets2/img/foods/' . $file_name;
        $request->file('foto')->move(public_path('/assets2/img/foods/'), $file_name);

        $foods->nama = $request->nama;
        $foods->harga = $request->harga;
        $foods->stock = $request->stock;
        $foods->save();

        return redirect()->back();
    }

    public function delete($id)
    {
        $foods = Food::find($id);
        $foods->delete();
        return redirect()->back();
    }

    public function showModal($id)
    {
        $merchandises = Food::find($id);
        return response()->json(['data' => $merchandises]);
    }

    public function updateModal(Request $request, $id)
    {
        $form_detail = Food::find($id);
        $form_detail->nama = $request->nama;
        $form_detail->harga = $request->harga;
        $form_detail->stock = $request->stock;
        if (is_null($request->isActive)) {
            $form_detail->status = 0;
        } else {
            $form_detail->status = 1;
        }
        $form_detail->save();

        return redirect()->back();
    }
}
