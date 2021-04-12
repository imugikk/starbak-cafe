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

    public function showModal($id)
    {
        $drinks = Drink::find($id);
        return response()->json(['data' => $drinks]);
    }

    public function updateModal(Request $request, $id)
    {
        $form_detail = Drink::find($id);
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
