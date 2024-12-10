<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\CollectionCenter;
use App\Models\EWaste;
use App\Models\ItemType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EWasteController extends Controller
{

    public function Add()
    {
        $ItemType = ItemType::all();
        return view('AddEwastePage', ['ItemType' => $ItemType]);
    }

    public function AddEwaste(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'ItemType' => 'required'
        ]);

        $photo = $request->file('image');
        $photoPath = $photo->move(public_path('img/item'), $photo->getClientOriginalName());


        // Dapatkan cities_id dari user yang login
        $userCityId = Auth::user()->cities_id;

        // Cari collectioncenter yang sesuai dengan cities_id
        $collectionCenter = CollectionCenter::where('cities_id', $userCityId)->first();

        if (!$collectionCenter) {
            return redirect()->back()->with('error', 'Collection center tidak ditemukan untuk kota pengguna.');
        }

        EWaste::create([
            'item_name' => $request->name,
            'user_id' => Auth::id(),
            'collectioncenters_id' => $collectionCenter->id,
            'itemtype_id' => $request->ItemType,
            'description' => $request->description,
            'image_url' => 'img/item/' . $photo->getClientOriginalName(),
            'gender' => $request->gender,
            'status' => 'pending'
        ]);

        return redirect()->route('customer.page')->with('success', 'Add New Item Success!');
    }

}
