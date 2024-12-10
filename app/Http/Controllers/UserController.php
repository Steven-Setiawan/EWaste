<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\User;
use App\Models\EWaste;
use App\Models\CollectionCenter;
use App\Models\ItemType;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function Login(){
        return view('LoginPage');
    }

    public function create(){
        $Cities = City::all();

        return view('RegisterPage',['Cities' => $Cities]);
    }

    public function register(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6|confirmed',
            'dob' => 'required|date',
            'gender' => 'required|in:male,female',
            'address' => 'required|string|max:255',
            'city' => 'required',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $photo = $request->file('photo');

        $photoPath = $photo->move(public_path('img/user'), $photo->getClientOriginalName());

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'photo' => 'img/user/' . $photo->getClientOriginalName(),
            'gender' => $request->gender,
            'DOB' => $request->dob,
            'cities_id' => $request->city,
            'address' => $request->address
        ]);

        return redirect()->route('Login.index')->with('success', 'Create New Account Success!');

    }

    public function loginUser(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $EWastes = EWaste::all();
        $datas = [
            'EWaste' => $EWastes
        ];

        if (Auth::attempt($validated)) {
            $user = Auth::user();

            if ($user->role === 'admin') {
                return redirect()->route('admin.home');
            }

            return redirect()->route('customer.page',$datas);
        } else {
            return back()->withErrors(['email' => 'The provided credentials do not match our records.']);
        }
    }


    public function userHome()
    {

        return view('userHomePage');
    }

    public function CustomerPage()
    {
        $EWaste = EWaste::where('user_id', Auth::id())->get();

        return view('CustomerPage', ['EWaste' => $EWaste]);
    }

    public function userAbout()
    {
        return view('aboutPage');
    }

    public function userProfile(User $user)
    {
        return view('profilePage', ['user' => $user]);
    }

    public function updateProfile(Request $request, User $user)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'address' => 'required|string|max:255',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $request->user()->name = $request->name;
        $request->user()->email = $request->email;
        $request->user()->address = $request->address;

        $photo = $request->file('photo');
        $photoPath = $photo->move(public_path('img/user'), $photo->getClientOriginalName());
        $request->user()->photo = 'img/user/' . $photo->getClientOriginalName();

        $request->user()->save();

        return redirect()->route('customer.page')->with('success', true);
    }

    public function adminHome()
    {
        $Ewastes = EWaste::all();
        $Users = User::all();
        $CollectionCenters = CollectionCenter::all();
        $ItemTypes = ItemType::all();
        $Cities = City::all();


        $data = [
            'Ewastes'=>$Ewastes,
            'Users'=>$Users,
            'CollectionCenters' => $CollectionCenters,
            'ItemTypes' => $ItemTypes,
            'Cities' => $Cities,
            'userCount' => $Users->count(),
            'collectionCenterCount' => $CollectionCenters->count(),
            'ewasteCount' => $Ewastes->count(),
            'itemTypeCount' => $ItemTypes->count(),
            'cityCount' => $Cities->count(),
        ];

        return view('adminHomePage',$data);
    }

}
