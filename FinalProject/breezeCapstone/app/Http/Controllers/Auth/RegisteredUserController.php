<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            // 'name' => ['required', 'string', 'max:255'],
            // 'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            // 'password' => ['required', 'confirmed', Rules\Password::defaults()],

            'last_name' => ['required', 'string', 'max:255'],
            'first_name' => ['required', 'string', 'max:255'],
            'contact_number' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'], 
            'pass' => ['required', 'confirmed', Rules\Password::defaults()],
            'street_address' => ['required', 'string', 'max:255'], 
            'district' => ['required', 'string', 'max:255'],
            'barangay' => ['required', 'string', 'max:255'], 
            'city' => ['required', 'string', 'max:255'],
            'province' => ['required', 'string', 'max:255'],
            'postal_code' => ['required', 'string', 'max:255'],
        ]);
        $user = User::create([

            'first_name' => $request['first_name'],
            'last_name' => $request['last_name'],
            'contact_number' => $request['contact_number'],
            'email' => $request['email'],
            'pass' => bcrypt($request['pass']),
            'street_address' => $request['street_address'],
            'district' => $request['district'], 
            'barangay' => $request['barangay'], 
            'city' => $request['city'], 
            'province' => $request['province'], 
            'postal_code' => $request['postal_code'],


        ]);

        event(new Registered($user));

        Auth::login($user);
        

        return redirect(RouteServiceProvider::HOME);
    }

    // public function showArtistRegistration()
    // {
    //     return view('auth.register.artist');
    // }
    // //
    // public function registerArtist(Request $request)
    // {
    //     $data=new user;
    //     $data->first_name=$request->first_name;
    //     $data->last_name=$request->last_name;
    //     $data->contact_number=$request->contact_number;
    //     $data->email=$request->email;
    //     $data->pass=Hash::make($request->pass);
    //     $data->role='1';
    //     $data->street_address=$request->street_address;
    //     $data->district=$request->district;
    //     $data->barangay=$request->barangay;
    //     $data->city=$request->city;
    //     $data->province=$request->province;
    //     $data->postal_code=$request->postal_code;
    //     $data->save();
    //     return redirect()->route('home.artist');
    // }


     /**
     * Display the registration view.
     */
    public function createArtist(): View
    {
        return view('auth.registerArtist');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function storeArtist(Request $request): RedirectResponse
    {
        $request->validate([
            // 'name' => ['required', 'string', 'max:255'],
            // 'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            // 'password' => ['required', 'confirmed', Rules\Password::defaults()],

            'last_name' => ['required', 'string', 'max:255'],
            'first_name' => ['required', 'string', 'max:255'],
            'contact_number' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'], 
            // 'pass' => ['required', 'string', 'min:8', 'confirmed'], 
            'pass' => ['required', 'confirmed', Rules\Password::defaults()],
            'street_address' => ['required', 'string', 'max:255'], 
            'district' => ['required', 'string', 'max:255'],
            'barangay' => ['required', 'string', 'max:255'], 
            'city' => ['required', 'string', 'max:255'],
            'province' => ['required', 'string', 'max:255'],
            'postal_code' => ['required', 'string', 'max:255'],
        ]);
        $user = User::create([

            'first_name' => $request['first_name'],
            'last_name' => $request['last_name'],
            'contact_number' => $request['contact_number'],
            'email' => $request['email'],
            'pass' => bcrypt($request['pass']),
            'role' => '1',
            'street_address' => $request['street_address'],
            'district' => $request['district'], 
            'barangay' => $request['barangay'], 
            'city' => $request['city'], 
            'province' => $request['province'], 
            'postal_code' => $request['postal_code'],
            

        ]);

        event(new Registered($user));

        Auth::login($user);
        

        return redirect(RouteServiceProvider::HOME_ARTIST);
    }

}
