<?php

namespace App\Http\Controllers;
use App\Models\business;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BusinessController extends Controller
{
    
    public function getAll()
    {
        return response()->json(business::all());
    }
    
  public function createBusiness(Request $request){
 
    $business= business::create($request->all());

    return response()->json($business);

}
public function updateBusiness($id, Request $request)
{
    $business = business::findOrFail($id);
    $business->update($request->all());

    return response()->json($business, 200);
}


public function deleteBusiness($id)
{
    business::findOrFail($id)->delete();
    return response('Deleted Successfully', 200);
}
}
