<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Oxxo;
use App\Models\Profile;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\state
     */

     public function store(Request $request)
    {
    /** 
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\state
     */

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|confirmed|min:5',
        ]);

        $user = User::create([
            'name' => $request->name.' '.$request->psurname.' '.$request->msurname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        

        // oxxo
        $oxxo = Oxxo::create([
            'store' => $request->store,
            'phone' => $request->storePhone,
            'address' => $request->address,
            'state' => $request->state,
        ]);

        Auth::login($user);

        // profile
        $profile = Profile::create([
            'user_id' => Auth::id(),
            'oxxo_id' => $oxxo->id,
            'name' => $request->name,
            'psurname' => $request->psurname,
            'msurname' => $request->msurname,
            'email' => $request->email,
            'employee' => $request->employee,
            'phone' => $request->phone,
            'birthday' => $request->birthday,
        ]);

        event(new Registered($user));

        return redirect(RouteServiceProvider::HOME);
    }
}
