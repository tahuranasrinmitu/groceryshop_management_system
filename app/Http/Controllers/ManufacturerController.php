<?php
namespace App\Http\Controllers;
use App\Models\Manufacturer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class ManufacturerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $manufacturers=Manufacturer::paginate(10);
     return view('pages.erp.manufacturer.managemfg',['manufacturers'=>$manufacturers]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.erp.manufacturer.createmfg',[]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $manufacturer=new Manufacturer;
        $manufacturer->name=$request->name;
        $manufacturer->email=$request->email;
        $manufacturer->address=$request->address;
        $manufacturer->phone=$request->phone;
        $manufacturer->created_at=$request->created_at;
        $manufacturer->updated_at=$request->updated_at;
        $manufacturer->save();
        return redirect()->route('manufacturers.index')->with ('success');

        
        
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {

        $manufacturer= Manufacturer::find($id);
        return view('pages.erp.manufacturer.detailsmfg',['manufacturer'=>$manufacturer]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Manufacturer $manufacturer)
    {
        
     return view('pages.erp.manufacturer.editmfg',['manufacturer'=>$manufacturer]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,Manufacturer $manufacturer)
    
    {
        $manufacturer=Manufacturer::find($manufacturer->id);
        $manufacturer->name=$request->name;
        $manufacturer->email=$request->email;
        $manufacturer->address=$request->address;
        $manufacturer->phone=$request->phone;
        $manufacturer->created_at=$request->created_at;
        $manufacturer->updated_at=$request->updated_at;
        

        $manufacturer->save();
        return redirect()->route('manufacturers.index')->with ('success');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Manufacturer $manufacturer)
    {

        $manufacturer->delete();
        return redirect()->route('manufacturers.index')->with('success');
    }
}
