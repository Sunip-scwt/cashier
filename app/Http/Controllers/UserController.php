<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      
       $users=User::all();
       return view('users.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roles=Role::get();
        return view('users.create',compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
        $validator=Validator::make($request->all(),[
            'name'=>'required',
            'email'=>'required',
            'password'=>'required'

        ]);
        if($validator->fails()) {
            return redirect()->route('users.create')
                ->withErrors($validator)
                ->withInput();
        } else {
            try {
             $user=   User::create([
                    "name"=>$request->name,
                    "email"=>$request->email,
                    "password"=>Hash::make($request->password ) 
                ]);
                $user->syncRoles($request->roles);
                return redirect()->route("users.index")->with('success','user created');
            } catch (\Exception $e) {
                return $e->getMessage();
            }
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user=User::where('id',$id)
            ->first();
        return view('users.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
         $roles=Role::get();
        $user=User::find($id);
        return view('users.edit', compact('user','roles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator=Validator::make($request->all(),[
            'name'=>'required',
            'email'=>'required',
        ]);
         if($validator->fails()) {
            return redirect()->route('users.create')
                ->withErrors($validator)
                ->withInput();
        } else {
            try {
                $update['name']=$request->name;
                 $update['email']=$request->email;
                  $update['password']=Hash::make($request->password ) ;
            User::where('id',$id)
                    ->update($update);
                      $user=User::find($id);
                 $user->syncRoles($request->roles);
                return redirect()->route("users.index")->with('success','user updated');
            } catch (\Exception $e) {
                return $e->getMessage();
            }
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $query=User::where('id',$id)
            ->delete();
             return redirect()->route("users.index");
    }
    public function takePhoto()
    {
        return view('capturepicture');
    }
}
