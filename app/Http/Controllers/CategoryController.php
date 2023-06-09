<?php
/*
* ProBot Version: 3.0
* Laravel Version: 10x
* Description: This source file "app/Http/_CategoryController.php" was generated by ProBot AI.
* Date: 5/4/2023 4:11:09 AM
* Contact: towhid1@outlook.com
*/
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Category;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
class CategoryController extends Controller{
	public function index(){
		$categorys = Category::paginate(10);
		return view("pages.erp.category.managecategory",["categorys"=>$categorys]);
	}
	public function create(){
		return view("pages.erp.category.createcategory",[]);
	}
	public function store(Request $request){
		//Category::create($request->all());
		$category = new Category;
		$category->name=$request->name;
date_default_timezone_set("Asia/Dhaka");
		$category->created_at=date('Y-m-d H:i:s');
date_default_timezone_set("Asia/Dhaka");
		$category->updated_at=date('Y-m-d H:i:s');

		$category->save();

		return back()->with('success', 'Created Successfully.');
	}
	public function show($id){
		$category = Category::find($id);
		return view("pages.erp.category.categorydetails",["category"=>$category]);
	}
	public function edit(Category $category){
		return view("pages.erp.category.editcategory",["category"=>$category,]);
	}
	public function update(Request $request,Category $category){
		//Category::update($request->all());
		$category = Category::find($category->id);
		$category->name=$request->name;
date_default_timezone_set("Asia/Dhaka");
		$category->created_at=date('Y-m-d H:i:s');
date_default_timezone_set("Asia/Dhaka");
		$category->updated_at=date('Y-m-d H:i:s');

		$category->save();

		return redirect()->route("categories.index")->with('success','Updated Successfully.');
	}
	public function destroy(Category $category){
		$category->delete();
		return redirect()->route("categories.index")->with('success', 'Deleted Successfully.');
	}
}
?>
