<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    // Dynamic Selects
    public function getSubcategories(Request $request, $id)
    {
        if($request->ajax()){
        	$catalog_subcategories = Category::find($id)->subcategories;
            return response()->json($catalog_subcategories);
        }
    }
    public function getStates(Request $request, $id)
    {
        if($request->ajax()){
        	$catalog_states = Country::find($id)->states;
            return response()->json($catalog_states);
        }
    }
    public function getCities(Request $request, $id)
    {
        if($request->ajax()){
        	$catalog_cities = State::find($id)->cities;
            return response()->json($catalog_cities);
        }
    }

    // Dynamic Checkbox
    public function getSubcategoriesCheck(Request $request)
    {
        if($request->ajax()){
            $catalog_subcategories = Subcategory::whereIn('category_id', $request->categories)->get();
            return response()->json($catalog_subcategories);
        }
    }
    public function getStatesCheck(Request $request)
    {
        if($request->ajax()){
            $catalog_states = State::whereIn('country_id', $request->countries)->get();
            return response()->json($catalog_states);
        }
    }
    public function getCitiesCheck(Request $request)
    {
        if($request->ajax()){
            $catalog_cities = City::whereIn('state_id', $request->states)->get();
            return response()->json($catalog_cities);
        }
    }
}
