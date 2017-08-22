<?php

namespace App\Http\Controllers;

//use GrahamCampbell\GitHub\Facades\GitHub;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Http\Request;
use Socialite;

class OAuthController extends Controller
{
    public function github(Request $req){
        
    }


    public function redirectToProvider()
    {
        return Socialite::driver('github')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return Response
     */
    public function handleProviderCallback(Request $req)
    {
        $user = Socialite::driver('github')->user();
        $req->user = $user;
        $user->password = 'a03190000';
        
        $u = \App\User::create([
            'name' => $user->name,
            'email' => $user->email,
            'password' => bcrypt('a03190000'),
        ]);

        (new RegisterController)->register($req,$u);
       
       

        
        // $user->token;
    }
}
