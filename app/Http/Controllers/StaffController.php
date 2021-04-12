<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Staff;

class StaffController extends Controller
{
    public function index()
    {
        $staffs = Staff::all();
        return view('modul.staff', compact('staffs'));
    }

    public function store(Request $request)
    {
        $staffs = new Staff;

        $file_name = time() . '_' . $request->file('foto')->getClientOriginalName();
        $staffs->foto = '/assets2/img/staffs/' . $file_name;
        $request->file('foto')->move(public_path('/assets2/img/staffs/'), $file_name);

        $staffs->nama = $request->nama;
        $staffs->divisi = $request->divisi;
        $staffs->NIK = $request->NIK;
        $staffs->gender = $request->gender;
        $staffs->save();

        return redirect()->back();
    }

    public function delete($id)
    {
        $staffs = Staff::find($id);
        $staffs->delete();
        return redirect()->back();
    }
}
