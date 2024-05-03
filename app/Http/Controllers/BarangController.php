<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Satuan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pageTitle = "List Produk";
        $barangs = Barang::all();
        return view('formbarang.index', [
            'pageTitle' => $pageTitle,
            'barangs' => $barangs
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pageTitle = 'Input Barang';
        $satuans = Satuan::all();
        return view('formbarang.create', compact('pageTitle', 'satuans'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages = [
            'required' => 'Seluruh Field harus diisi.',
            'numeric' => 'Isi field dengan angka'
        ];

        $validator = Validator::make($request->all(), [
            'namaBarang' => 'required',
            'deskripsiBarang' => 'required',
            'hargaBarang' => 'required|numeric',
        ], $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // ELOQUENT
        $barang = new Barang();
        $barang->namabarang = $request->namaBarang;
        $barang->hargabarang = $request->hargaBarang;
        $barang->deskripsibarang = $request->deskripsiBarang;
        $barang->satuan_id = $request->satuan;
        $barang->save();

        return redirect()->route('barangs.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pageTitle = 'Show Barang';

        $satuans = Satuan::all();
        $barang = Barang::find($id);
        return view('formbarang.show', compact('pageTitle', 'barang', 'satuans'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pageTitle = 'Edit Barang';

        $satuans = Satuan::all();
        $barang = Barang::find($id);
        return view('formbarang.edit', compact('pageTitle', 'barang', 'satuans'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $messages = [
            'required' => 'Seluruh Field harus diisi.',
            'numeric' => 'Isi field dengan angka'
        ];

        $validator = Validator::make($request->all(), [
            'namaBarang' => 'required',
            'deskripsiBarang' => 'required',
            'hargaBarang' => 'required|numeric',
        ], $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // ELOQUENT
        $barang = Barang::find($id);
        $barang->namabarang = $request->namaBarang;
        $barang->hargabarang = $request->hargaBarang;
        $barang->deskripsibarang = $request->deskripsiBarang;
        $barang->satuan_id = $request->satuan;
        $barang->save();

        return redirect()->route('barangs.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         Barang::find($id)->delete();
         return redirect()->route('barangs.index');
    }
}
