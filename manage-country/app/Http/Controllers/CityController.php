<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Http\Requests\StoreCityRequest;
use App\Http\Requests\UpdateCityRequest;
use App\Models\Country;

class CityController extends Controller
{
    public function index()
    {
        $cities = City::where('is_active',1)->paginate(2);
        return view('admin.city.index',compact('cities'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $countries = Country::where('is_active',1)->get();
        return view('admin.city.create',compact('countries'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCityRequest $request, City $city)
    {
        $name=$request->name;
        $population=$request->population;
        $country_id=$request->country;
        $status=$city->create([
            'name'=>$name,
            'population'=>$population,
            'country_id'=>$country_id
        ]);
        if($status){
            return to_route('city');
        }else{
            return to_route('city.create');
        }
    }

    public function show(City $city)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(City $city)
    {
        $countries = Country::where('is_active',1)->get();
        return view('admin.city.edit',compact('city','countries'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCityRequest $request, City $city)
    {
        $name=$request->name;
        $population=$request->population;
        $country_id=$request->country;
        $status=$city->update([
            'name'=>$name,
            'population'=>$population,
            'country_id'=>$country_id
        ]);
        if($status){
            return to_route('city');
        }else{
            return to_route('city.edit');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(City $city)
    {
        return view('admin.city.delete',compact('city'));
    }
    public function destroy(City $city)
    {
        $status=$city->update([
            'is_active'=>0
        ]);
        if($status){
            return to_route('city');
        }else{
            return to_route('city.delete');
        }
    }
}
