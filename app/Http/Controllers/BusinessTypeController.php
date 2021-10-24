<?php

namespace App\Http\Controllers;
use App\Models\business_type;
use Illuminate\Http\Request;

class BusinessTypeController extends Controller
{
     
    public function getAll()
    {
        return response()->json(business_type::all());
    }
    
  public function createBusinessType(Request $request){
 
    $business= business_type::create($request->all());

    return response()->json($business);

}
public function updateBusinessType($id, Request $request)
{
    $business = business_type::findOrFail($id);
    $business->update($request->all());

    return response()->json($business, 200);
}


public function deleteBusinessType($id)
{
    business_type::findOrFail($id)->delete();
    return response('Deleted Successfully', 200);
}
}
