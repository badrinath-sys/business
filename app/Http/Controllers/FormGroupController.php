<?php

namespace App\Http\Controllers;
use App\Models\form_group;

use Illuminate\Http\Request;

class FormGroupController extends Controller
{
    public function getAll()
    {
        return response()->json(form_group::all());
    }
    
  public function create(Request $request){
 
    $form= form_group::create($request->all());

    return response()->json($form);

}
public function update($id, Request $request)
{
    $business = form_group::findOrFail($id);
    $business->update($request->all());

    return response()->json($business, 200);
}


public function delete($id)
{
    form_group::findOrFail($id)->delete();
    return response('Deleted Successfully', 200);
}

public function dairysales()
{
    
}

}
