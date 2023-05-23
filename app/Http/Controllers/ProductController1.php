<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;
use App\Models\Manufacturer;
use App\Models\Product;
use App\Models\Category;
use App\Models\Uom;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products=DB::table("products as p")
        ->join("manufacturers as m","p.manufacturer_id","=","m.id")
        ->join("categories as c",'p.category_id',"=","c.id")
        ->join('uoms as u','p.uom_id','=','u.id')
        ->select('p.id','p.name','p.offer_price','m.name as mfg','p.regular_price','p.description','p.photo','c.name as ctg','p.is_featured','p.star','p.offer_discount','u.name as uom','p.weight','p.barcode','p.created_at','p.updated_at')       
        ->paginate(10);

        return view('pages.erp.product.manageproduct',['products'=>$products]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.erp.product.createproduct',['manufacurers'=>Manufacturer::all(),'categories'=>Category::all(),'uoms'=>Uom::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
