<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users=User::paginate(10);
        return view('pages.erp.user.manageuser',['users'=>$users]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.erp.user.createuser',[]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user=new User;
        $user->username=$request->username;
        $user->password=$request->password;
        $user->email=$request->email;
        $user->full_name=$request->full_name;
        $user->verify_code=$request->verify_code;
        $user->mobile=$request->mobile;

        if(isset($request->photo)){
            $user->photo=$request->photo;

        }
        $user->save();
        if (isset($request->photo)){
            $imageName=$user->id.'.'.$request->photo->extension();
            $user->photo=$imageName;
            $user->update();
            $request->photo->move(public_path('img'),$imageName);
        }
        return back()->with('success');
        


    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $user=User::find($id);
        return view('pages.erp.user.usersdetails',['user'=>$user]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('pages.erp.user.edituser',['user'=>$user]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
       $user=User::find($user->id);
       $user->username=$request->username;
       $user->password=$request->password;
       $user->email=$request->email;
       $user->full_name=$request->full_name;
       $user->verify_code=$request->verify_code;
       $user->mobile=$request->mobile;

       if(isset($request->photo)){
           $user->photo=$request->photo;

       }
       $user->save();
       if (isset($request->photo)){
           $imageName=$user->id.'.'.$request->photo->extension();
           $user->photo=$imageName;
           $user->update();
           $request->photo->move(public_path('img'),$imageName);

       }
       $user->create_at=$request->create_at;
       $user->updated_at=$request->updated_at;
       return redirect()->route('users.index')->with('success');
       
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index')->with('success');
    }
}
