<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = User::client()->get();
        return View::make('users.index')->with('clients', $clients);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View::make('users.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),
            [
                'name' => 'required',
                'password' => 'required|min:6',
                'email' => 'required|email|unique:users'
            ]
        );

        if(!$validator->fails()){
            $client = new User();
            $client->name = $request->input('name');
            $client->email = $request->input('email');
            $client->password = bcrypt($request->input('password'));
            $client->access_level = 0;
            $client->save();


            $clients = User::client()->get();
            return Redirect::to('users')->with('clients', $clients);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return View::make('users.get')->with('client', $user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return View::make('users.edit')->with('client', $user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        ($request->input('name'))? $user->name = $request->input('name'):'';
        ($request->input('email'))? $user->email = $request->input('email'):'';
        ($request->input('password'))?$user->password = Hash::make($request->input('password')):'';
        $user->save();

        $clients = User::client()->get();
        return Redirect::to('users')->with('clients', $clients);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();

        $clients = User::client()->get();
        return Redirect::to('users')->with('clients', $clients);
    }
}
