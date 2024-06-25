<?php

namespace App\Http\Controllers;

use App\Models\Kendaraan;
use Illuminate\Http\Request;

class KendaraanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kendaraan = Kendaraan::all();
        return view("admin.layouts.data-kendaraan",[
            "title"=> "Data kendaraan",
            "kendaraan"=> $kendaraan
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.layouts.add-kendaraan",[
            "title"=> "Tambah data kendaraan"
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "no_uji"=> "required",
            "no_kendaraan"=> "required",
            "pemilik"=> "required",
            "jenis_kendaraan"=> "required",
            "no_chasis"=> "required",
            "no_mesin"=> "required",
            "masa_berlaku"=> "required",
            "no_buku"=> "required",
            "jbb"=> "required"
        ]);

        $request->merge(['status_uji'=> "Belum Uji"]);
        
        Kendaraan::create($request->all());

        return redirect()->route("kendaraan.index")->with("success","Data berhasil ditambahkan");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.layouts.edit-kendaraan',[
            'title'=> 'Edit kendaraan',
            'kendaraan'=> Kendaraan::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            "no_uji"=> "required",
            "no_kendaraan"=> "required",
            "pemilik"=> "required",
            "jenis_kendaraan"=> "required",
            "no_chasis"=> "required",
            "no_mesin"=> "required",
            "masa_berlaku"=> "required",
            "no_buku"=> "required",
            "jbb"=> "required"
        ]);

        $request->merge(['status_uji'=> "Belum Uji"]);
        Kendaraan::find($id)->update($request->all());
        return redirect()->route("kendaraan.index")->with("success","Data berhasil di update");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $request = Kendaraan::find($id);
        $request->delete();
        return redirect()->route("kendaraan.index")->with("success","Data berhasil ditambahkan");
    }
}
