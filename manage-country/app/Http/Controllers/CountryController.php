<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Http\Requests\StoreCountryRequest;
use App\Http\Requests\UpdateCountryRequest;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $countries = Country::where('is_active', 1)->paginate(2);
        return view('admin.country.index', compact('countries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.country.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCountryRequest $request)
    {
        $name = $request->name;
        $capital=$request->capital;
        $population=$request->population;
        $language=$request->language;
        $country=Country::create([
            'name'=>$name,
            'capital'=>$capital,
            'population'=>$population,
            'language'=>$language,
        ]);
        if($country){
            return to_route('country');
        }
    }

    public function edit(Country $country)
    {
        return view('admin.country.edit', compact('country'));
    }

    public function update(UpdateCountryRequest $request, Country $country)
    {
        $name = $request->name;
        $capital=$request->capital;
        $population=$request->population;
        $language=$request->language;
        $status=$country->update([
            'name'=>$name,
            'capital'=>$capital,
            'population'=>$population,
            'language'=>$language,
        ]);
        if($status){
            return to_route('country');
        }else{
            return to_route('country.edit', $country);

        }
    }

    public function delete(Country $country)
    {
        return view('admin.country.delete', compact('country'));
    }
    public function destroy(Country $country)
    {
        $status=$country->update([
            'is_active'=>0,
        ]);
        if($status){
            return to_route('country');
        }else{
            return to_route('country.delete', $country);
        }
    }
}
