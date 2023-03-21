<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\Models\Risk;
use App\Models\Time;

class RiskController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $risks = Risk::with('time:id')->get();
        // dd($risks);
        return view('admin.risk.index',
        compact('risks'));
    }


    public function create(Time $time)
    {
        return view('admin.risk.create', compact('time'));
    }


    public function store(Request $request, Time $time)
    {
       $risk= new Risk;
       $risk->time_id = $time -> id;
       $risk->title = $request->title;
       $risk->content = $request->content;
    //    dd($risk);
       $risk->save();

       return redirect()->route('admin.risk.index', $time->id);
    }


    public function show(string $id)
    {
        //
    }


    public function edit(string $id)
    {
        //
    }


    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
