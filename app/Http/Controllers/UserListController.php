<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;


class UserListController extends Controller
{
    /**
     * User Lists
     */
    public function index(){
        $users= User::latest()->paginate(5);
        return view('users.index',compact('users'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }


    /**
     * 
     */
    public function create(){
        return view('users.create');
    }

    /**
     * store user
     */

    public function store(Request $request){

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);
        return redirect()->route('users.index')
        ->with('success','User created successfully.');     
    }

     /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::findOrFail($id)->delete();
        return redirect()->route('users.index')
                        ->with('success','User deleted successfully');
    }


}
