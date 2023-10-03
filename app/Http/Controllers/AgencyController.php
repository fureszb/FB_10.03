<?php

namespace App\Http\Controllers;

use App\Models\agency;
use Illuminate\Http\Request;

class AgencyController extends Controller
{
    public function index()
    {
        return agency::all();
    }

    public function show($id)
    {
        return agency::find($id);
    }

    public function delete($id)
    {
        agency::find($id)->delete();
        return redirect('/agency/list');
    }

    public function update(Request $request, $id)
    {
        $agency = agency::find($id);
        $agency->name = $request->name;
        $agency->country = $request->country;
        $agency->type = $request->type;
        $agency->save();

        return redirect('/agency/list');
    }

    public function store(Request $request)
    {

        $agency = new agency();
        $agency->name = $request->name;
        $agency->country = $request->country;
        $agency->type = $request->type;
        $agency->save();

        return redirect('/agency/list');
    }


    public function listView()
    {
        $agency = agency::all();
        return view('agency.list', ['agencies' => $agency]);
    }

    public function editView($id){
        $agency = agency::find($id);
        return view("agency.edit", ["agency" => $agency]);
    }
    public function deleteView(){
        $agency = agency::all();
        return view("agency.delete", ["agencies" => $agency]);
    
    }
    public function newView(){
        return view("agency.new");
    
    }
}
