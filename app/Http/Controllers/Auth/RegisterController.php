<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\User;

class RegisterController extends Controller
{
    //display register page
    public function show()
    {
        return view('client-views.register');
    }

    /**
     * Handle account registration request
     * 
     * @param RegisterRequest $request
     * 
     * @return \Illuminate\Http\Response
     */

    // public function register(RegisterRequest $request)
    // {

    //     // $user = User::create($request->validated());

    //     // auth()->login($user);

    //     // return redirect('/')->with('success', "Account successfully registered.");
    //     return redirect('/');
    // }


    public function register(RegisterRequest $request){
        dd($request);
        $data = $request -> all();
        dd($data);
        User::create($data);
        // $user = User::create($request->validated());
        // auth()->login($user);
        // return redirect('/')->with('success', "Account successfully registered.");
        // return redirect()->action([LoginController::class, 'show']);
    }
}
