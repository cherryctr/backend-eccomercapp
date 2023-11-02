<?php

namespace App\Http\Controllers\API;

use App\Models\CategoryModel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
      //
     public function categoryAll()
    {
        //
        $category = CategoryModel::all();
        // dd($kota);
        return response()->json([
            'success'   => true,
            'message'   => 'List Data',
            'data'  => $category
        ], 200);
    }
}