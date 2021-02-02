<?php

namespace App\Http\Controllers;
use App\Models\product;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    //
    function index()
    {
        $data=product::all();
        return view('product',['products'=>$data]);
    }
    function detail($id)
        {
            return product::find($id);
        }
}
