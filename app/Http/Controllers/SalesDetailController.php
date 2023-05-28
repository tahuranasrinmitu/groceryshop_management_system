<?php
/*
* ProBot Version: 3.0
* Laravel Version: 10x
* Description: This source file "app/Http/_Sales_DetailController.php" was generated by ProBot AI.
* Date: 5/28/2023 2:44:53 AM
* Contact: towhid1@outlook.com
*/
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Sales_Detail;
use App\Models\Sale;
use App\Models\Product;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
class Sales_DetailController extends Controller{
	public function index(){
		$Sales_Details = Sales_Detail::paginate(10);
		return view("pages.erp.Sales_Detail.index",["sales_details"=>$Sales_Details]);
	}
	public function create(){
		return view("pages.erp.Sales_Detail.create",["sales"=>Sale::all(),"products"=>Product::all()]);
	}
	public function store(Request $request){
		//Sales_Detail::create($request->all());
		$Sales_Detail = new Sales_Detail;
		$Sales_Detail->sales_id=$request->sales_id;
		$Sales_Detail->product_id=$request->product_id;
		$Sales_Detail->qty=$request->qty;
		$Sales_Detail->price=$request->price;
		$Sales_Detail->vat=$request->vat;
		$Sales_Detail->discount=$request->discount;
date_default_timezone_set("Asia/Dhaka");
		$Sales_Detail->created_at=date('Y-m-d H:i:s');
date_default_timezone_set("Asia/Dhaka");
		$Sales_Detail->updated_at=date('Y-m-d H:i:s');

		$Sales_Detail->save();

		return back()->with('success', 'Created Successfully.');
	}
	public function show($id){
		$Sales_Detail = Sales_Detail::find($id);
		return view("pages.erp.Sales_Detail.show",["sales_details"=>$Sales_Detail]);
	}
	public function edit(Sales_Detail $Sales_Detail){
		return view("pages.erp.Sales_Detail.edit",["sales_details"=>$Sales_Detail,"sales"=>Sale::all(),"products"=>Product::all()]);
	}
	public function update(Request $request,Sales_Detail $Sales_Detail){
		//Sales_Detail::update($request->all());
		$Sales_Detail = Sales_Detail::find($Sales_Detail->id);
		$Sales_Detail->sales_id=$request->sales_id;
		$Sales_Detail->product_id=$request->product_id;
		$Sales_Detail->qty=$request->qty;
		$Sales_Detail->price=$request->price;
		$Sales_Detail->vat=$request->vat;
		$Sales_Detail->discount=$request->discount;
date_default_timezone_set("Asia/Dhaka");
		$Sales_Detail->created_at=date('Y-m-d H:i:s');
date_default_timezone_set("Asia/Dhaka");
		$Sales_Detail->updated_at=date('Y-m-d H:i:s');

		$Sales_Detail->save();

		return redirect()->route("Sales_Details.index")->with('success','Updated Successfully.');
	}
	public function destroy(Sales_Detail $Sales_Detail){
		$Sales_Detail->delete();
		return redirect()->route("Sales_Details.index")->with('success', 'Deleted Successfully.');
	}
}
?>