<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Merchandise;

class MerchandiseController extends Controller
{
    public function index()
    {
        $merchandises = Merchandise::all();
        return view('modul.merchandise', compact('merchandises'));
    }

    public function store(Request $request)
    {
        $merchandises = new Merchandise;

        $file_name = time() . '_' . $request->file('foto')->getClientOriginalName();
        $merchandises->foto = '/assets2/img/merchandises/' . $file_name;
        $request->file('foto')->move(public_path('/assets2/img/merchandises/'), $file_name);

        $merchandises->nama = $request->nama;
        $merchandises->harga = $request->harga;
        $merchandises->stock = $request->stock;
        $merchandises->save();

        return redirect()->back();
    }

    public function delete($id)
    {
        $merchandises = Merchandise::find($id);
        $merchandises->delete();
        return redirect()->back();
    }
}
