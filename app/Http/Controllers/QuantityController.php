<?php

namespace App\Http\Controllers;

use App\Models\Quantity;
use Illuminate\Http\Request;

class QuantityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $quantities = Quantity::all();
            return view('kuantitas.index', compact('quantities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kuantitas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama_quantity' => [
                'required',
                'string',
                'max:255',
                function ($attribute, $value, $fail) {
                    // Cek apakah nilai nama_quantity sama dengan nilai tertentu
                    if ($value == 'nilai_tidak_boleh_sama') {
                        $fail('Nilai :attribute tidak boleh sama dengan nilai tertentu.');
                    }
                },
            ],
        ]);

        // Buat quantity baru
        $quantity = new Quantity;
        $quantity->nama_quantity = $request->nama_quantity;
        $quantity->save();

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('kuantitas.index')->with('success', 'Quantity berhasil ditambahkan!');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $quantity = Quantity::find($id);
        return view('kuantitas.edit', compact('quantity'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'nama_quantity' => 'required|string|max:255',
        ]);

        // Temukan quantity yang akan diubah
        $quantity = Quantity::find($id);

        // Update data quantity
        $quantity->nama_quantity = $request->nama_quantity;
        $quantity->save();

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('kuantitas.index')->with('success', 'Quantity berhasil diubah!');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $quantity = Quantity::findOrFail($id);
        if($quantity->delete()){
        return redirect()->route('kuantitas.index')->with('success', 'Quantity berhasil dihapus');
        } else{
            return redirect()->route('kuantitas.index')->with('error', 'Quantity tidak dapat dihapus karena,sedang digunakan dihalaman barang');
        }
        
        
    }
}