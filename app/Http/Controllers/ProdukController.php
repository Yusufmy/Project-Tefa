<?php

namespace App\Http\Controllers;

use App\Models\Tefa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin-dashboard.tambahProduk');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $validated = $request->validate([
            'foto_produk' => 'required|image|mimes:jpg,png,jpeg',
            'nama_produk' => 'required',
            'name_jurusan' => 'required',
            'deskription' => 'required',
        ]);

        $image = $request->file('foto_produk');

        $imgName =   time() . rand() . '.' . $image->extension();

        if (!file_exists(public_path('/assest/img/' . $image->getClientOriginalName()))) {
            $destinationPath = public_path('/assest/img/');

            $image->move($destinationPath, $imgName);
            $uploaded = $imgName;
        } else {
            $uploaded = $image->getClientOriginalName();
        }

        Tefa::create([
            'foto_produk' => $uploaded,
            'nama_produk' => $request->nama_produk,
            'name_jurusan' => $request->name_jurusan,
            'deskription' => $request->deskription,
            'user_id' => Auth::user()->id,
            'status' => 0,
        ]);
        return redirect()->route('product.data')->with('success', 'Berhasil menambahkan produk');
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
        $tefas = Tefa::where('id', $id)->first();
        return view('admin-dashboard.edit', compact('tefas'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tefa::find($id)->delete();
        return redirect('productData')->with('delete', 'Behasil dihapus');
    }
}
