<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\Models\Risk;
use App\Models\Destination;

class RiskController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $risks = Destination::with('destination:id')->get();
        // dd($risks);
        return view('admin.risk.index',
        compact('risks'));
    }


    public function create(Destination $destination)
    {
        return view('admin.risk.create', compact('destination'));
    }


    public function store(Request $request, Destination $destination)
    {
        $risk= new Risk;
        $risk->destination_id = $destination -> id;
        $risk->title = $request->title;
        $risk->content = $request->content;
        // dd($risk);
        $risk->save();

       return redirect()->route('admin.risk.index', $destination->id);
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
