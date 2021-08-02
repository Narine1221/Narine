<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Country;

class CountriesController extends Controller
{
    public function index(){
        $countries = Country::get();
        
        return view("pages.countries.index", compact("countries"));
    }
    public function create() {
        // dd(1);
        return view("pages.countries.create");
    }

    public function store(Request $request) {
        $name = $request->name;
        $capital = $request->capital;
        $population = $request->population;
        $is_nato = $request->is_nato;

        $country = new Country();
        $country->name = $name;
        $country->capital = $capital; 
        $country->population = $population; 
        $country->is_nato = $is_nato; 

        $country->save();

        return redirect("/countries");
    }
    public function edit ($id) {
        // dd($id);
        $country = Country::find($id);
        // dd($country);        
        $country->save();
        
        return view("pages.countries.edit", compact(["country"]));


    } 
    public function update (Request $request, $id) {
        $country = Country::find($id);

        $name = $request->name;
        $capital = $request->capital;
        $population = $request->population;
        $is_nato = $request->is_nato;

        $country->name = $name;
        $country->capital = $capital; 
        $country->population = $population; 
        $country->is_nato = $is_nato; 

        $country->save();

        return redirect("/countries");
    }    
    public function delete($id) {
          // $product = Product::find($id);
          // $product->delete();

        Country::destroy($id);

        return redirect("/countries");
        
    }
}
