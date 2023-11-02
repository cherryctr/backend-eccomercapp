<?php

namespace App\Http\Controllers\API;

use App\Models\Produk;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    //
     public function produkall()
    {
        //
        $produk = Produk::with('category')->get();
        // dd($kota);
        return response()->json([
            'success'   => true,
            'message'   => 'List Data',
            'data'  => $produk
        ], 200);
    }
}