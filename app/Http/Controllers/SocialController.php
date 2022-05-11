<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Validator;
use Socialite;
use Exception;
use Auth;

class SocialController extends Controller
{
    public function facebookRedirect()
    {
        return Socialite::driver('facebook')->redirect();
    }
    public function loginwithFacebook()
    {
        try{
            $user = Socialite::driver('facebook')->user();
            $isUser = User :: where('fb_id', $user->id)->first();

            if($isUser){
                Auth::login($isUser);
                return redirect('/home');
            }else{
                $createUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'fb_id' => $user->id,
                    'password' => encrypt('123')
                ]);

                // dd($createUser->id);
                

                Auth::login($createUser);
                return redirect('/home');
            }
        } catch(Exception $exeption){
            dd($exeption->getMessage());

        }

    }
}
