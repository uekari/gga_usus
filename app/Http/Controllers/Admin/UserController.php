<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\Models\User; //Elquentエロクアント
use App\Models\Schedule;

class UserController extends Controller
{

    public function index()
    {
        $users = User::select('id','name','email','created_at')->get();
        // dd($users);
        return view('admin.user.index',compact('users'));
    }


    public function create()
    {

    }


    public function store(Request $request)
    {


    }


    public function show(string $id)
    {
        //
    }


    public function edit(string $id)
    {

    }


    public function update(Request $request, string $id)
    {


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
