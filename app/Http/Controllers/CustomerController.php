<?php
/*
* ProBot Version: 3.0
* Laravel Version: 10x
* Description: This source file "app/Http/_CustomerController.php" was generated by ProBot AI.
* Date: 5/4/2023 7:51:57 PM
* Contact: towhid1@outlook.com
*/
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Customer;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
class CustomerController extends Controller{
	public function index(){
		$customers = Customer::paginate(10);
		return view("pages.erp.customer.managecustomer",["customers"=>$customers]);
	}
	public function create(){
		return view("pages.erp.customer.createcustomer",[]);
	}
	public function store(Request $request){
		//Customer::create($request->all());
		$customer = new Customer;
		$customer->name=$request->name;
		$customer->mobile=$request->mobile;
		$customer->email=$request->email;
date_default_timezone_set("Asia/Dhaka");
		$customer->created_at=date('Y-m-d H:i:s');
date_default_timezone_set("Asia/Dhaka");
		$customer->updated_at=date('Y-m-d H:i:s');

		$customer->save();

		return back()->with('success', 'Created Successfully.');
	}
	public function show($id){
		$customer = Customer::find($id);
		return view("pages.erp.customer.detailscustomer",["customer"=>$customer]);
	}
	public function edit(Customer $customer){
		return view("pages.erp.customer.editcustomer",["customer"=>$customer,]);
	}
	public function update(Request $request,Customer $customer){
		//Customer::update($request->all());
		$customer = Customer::find($customer->id);
		$customer->name=$request->name;
		$customer->mobile=$request->mobile;
		$customer->email=$request->email;
date_default_timezone_set("Asia/Dhaka");
		$customer->created_at=date('Y-m-d H:i:s');
date_default_timezone_set("Asia/Dhaka");
		$customer->updated_at=date('Y-m-d H:i:s');

		$customer->save();

		return redirect()->route("customers.index")->with('success','Updated Successfully.');
	}
	public function destroy(Customer $customer){
		$customer->delete();
		return redirect()->route("customers.index")->with('success', 'Deleted Successfully.');
	}
}
?>
