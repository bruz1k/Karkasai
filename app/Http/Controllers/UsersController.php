<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{

    public function index()
    {
        $users = User::all();
        return view('users',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *

     */
    public function create()
    {
        return view('users');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        return view('')
    }

    /**
     * Display the specified resource.
     *
     */
    public function show(User $user)
    {
        //return view('users',compact('users'));
    }

    /**
     * Show the form for editing the specified resource.
     *

     */
    public function edit(User $user)
    {
        //return view('users.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *


     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'address'=>'required'


        ]);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->address = $request->address;
        $user->save();

        return redirect()->route('users.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
