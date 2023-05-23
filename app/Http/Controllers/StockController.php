<?php
/*
* ProBot Version: 3.0
* Laravel Version: 10x
* Description: This source file "app/Http/_StockController.php" was generated by ProBot AI.
* Date: 5/4/2023 7:02:13 PM
* Contact: towhid1@outlook.com
*/
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Stock;
use App\Models\Product;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
class StockController extends Controller{
	public function index(){
		$stocks =DB::table('stocks as s')
		->join('products as p','s.product_id','=','p.id')
		->select('s.id','p.name as product','s.qty','s.remark','s.created_at','s.updated_at')
		->paginate(10);

		return view("pages.erp.stock.managestock",["stocks"=>$stocks]);
		
	}
	public function create(){
		return view("pages.erp.stock.createstock",["products"=>Product::all()]);
	}
	public function store(Request $request){
		//Stock::create($request->all());
		$stock = new Stock;
		$stock->product_id=$request->product_id;
		$stock->qty=$request->qty;
		$stock->remark=$request->remark;
 date_default_timezone_set("Asia/Dhaka");
		$stock->created_at=date('Y-m-d H:i:s');
 date_default_timezone_set("Asia/Dhaka");
		$stock->updated_at=date('Y-m-d H:i:s');

		$stock->save();

		return back()->with('success', 'Created Successfully.');
	}
	public function show($id){

		$stock =DB::table('stocks as s')
		->join('products as p','s.product_id','=','p.id')
		->where('s.id',$id)
		->select('s.id','p.name as product','s.qty','s.remark','s.created_at','s.updated_at')
		->first();

		return view("pages.erp.stock.detailsstock",["stock"=>$stock]);
	}
	public function edit(Stock $stock){
		return view("pages.erp.stock.editstock",["stock"=>$stock,"products"=>Product::all()]);
	}
	public function update(Request $request,Stock $stock){
		//Stock::update($request->all());
		$stock = Stock::find($stock->id);
		$stock->product_id=$request->product_id;
		$stock->qty=$request->qty;
		$stock->remark=$request->remark;
date_default_timezone_set("Asia/Dhaka");
		$stock->created_at=date('Y-m-d H:i:s');
date_default_timezone_set("Asia/Dhaka");
		$stock->updated_at=date('Y-m-d H:i:s');

		$stock->save();

		return redirect()->route("stocks.index")->with('success','Updated Successfully.');
	}
	public function destroy(Stock $stock){
		$stock->delete();
		return redirect()->route("stocks.index")->with('success', 'Deleted Successfully.');
	}
}
?>
