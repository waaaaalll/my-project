<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Quantity;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        // $barang = Barang::all();
        $barang = Barang::paginate(6);
        return view('barang.index', compact('barang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $quantities = Quantity::all();
        return view('barang.create', compact('quantities'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_barang' =>  // [
                'required',
                'string',
                'max:255',
                // Rule::unique('barang')->where('qty_id', $request->input('qty_id')),
            // ],
            'stock' => 'required|integer|min:0',
            'qty_id' => 'required|exists:quantities,id',
        ], [
            'nama_barang.required' => 'Wajib isi nama barang.',
            'nama_barang.string' => 'Nama barang harus berupa teks.',
            'nama_barang.max' => 'Nama barang maksimal :max karakter.',
            'nama_barang.unique' => 'Nama barang sudah ada untuk kuantitas yang dipilih.',
            'stock.required' => 'Wajib isi stock.',
            'stock.integer' => 'Stock harus berupa angka bulat.',
            'stock.min' => 'Stock minimal :min ',
            'qty_id.required' => 'Pilih kuantitas.',
            'qty_id.exists' => 'Kuantitas yang dipilih tidak valid.',
        ]);

            // Mengambil file gambar dari request
        $image = $request->file('img');

        // Generate nama unik untuk gambar
        $imageName = time().'.'.$image->getClientOriginalExtension();

        // Menyimpan gambar ke dalam folder public/img (pastikan folder sudah ada)
        $image->move(public_path('img'), $imageName);

        // Extract validated data termasuk nama gambar
        $barangData = [
            'nama_barang' => $request->input('nama_barang'),
            'stock' => $request->input('stock'),
            'qty_id' => $request->input('qty_id'),
            'img' => $imageName, // Menambahkan nama gambar ke dalam data barang
            'harga' => $request->input('harga'),
            'deskripsi' => $request->input('deskripsi'),
        ];

// Membuat instance Barang
Barang::create($barangData,);


    // Redirect with success message
    return redirect()->route('barang.index')->with('success', 'Barang berhasil ditambahkan!');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deskripsi($id)
    {
        $barang = Barang::findfail($id);
        return view('penjualan.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $barang = Barang::findOrFail($id);
        $quantities = Quantity::all();

        return view('barang.edit', compact('barang', 'quantities'));
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
        $request->validate([
            'nama_barang' => 'required|string|max:255',
            'stock' => 'required|integer',
            'qty_id' => 'required|exists:quantities,id',
        ]);

        $barang = Barang::findOrFail($id);
        $barang->update($request->all());

        return redirect()->route('barang.index')->with('success', 'Barang berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $barang = Barang::findOrFail($id);
        $barang->delete();

        return redirect()->route('barang.index')->with('success', 'Barang berhasil dihapus!');
    }
}