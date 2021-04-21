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

    public function showModal($id)
    {
        $merchandises = Merchandise::find($id);
        return response()->json(['data' => $merchandises]);
    }

    public function updateModal(Request $request, $id)
    {
        $form_detail = Merchandise::find($id);
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

    public function purchaseItem($id)
    {
        $merchandises = Merchandise::find($id);
        $merchandises->stock = $merchandises->stock - 1;
        $merchandises->save();
        return redirect()->back();
    }
}
