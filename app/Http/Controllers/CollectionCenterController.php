<?php

namespace App\Http\Controllers;
use App\Models\CollectionCenter;
use Illuminate\Support\Facades\DB;
use App\Models\City;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class CollectionCenterController extends Controller
{
    public function manageCollection()
    {

        return view('manageCollection');
    }

    public function addCollection(Request $request){
        $request->validate([
            'cityname' => 'required|string|max:255|unique:cities,CityName',
            'collection_center_name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'contact_number' => 'required|string|max:20',
            'operating_hours' => 'nullable|string|max:500',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $city = City::create([
            'CityName' => $request->input('cityname')
        ]);

        $photo = $request->file('photo');

        $photoPath = $photo->move(public_path('img/collectioncenter'), $photo->getClientOriginalName());

        $collectionCenter = new CollectionCenter();
        $collectionCenter->name = $request->input('collection_center_name');
        $collectionCenter->address = $request->input('address');
        $collectionCenter->contact_number = $request->input('contact_number');
        $collectionCenter->operating_hours = $request->input('operating_hours');
        $collectionCenter->photo = 'img/collectioncenter/' . $photo->getClientOriginalName();
        $collectionCenter->cities_id = $city->id;

        $collectionCenter->save();

        return redirect()->route('manage.Collection')->with('success', 'Collection Center added successfully!');
    }
}
