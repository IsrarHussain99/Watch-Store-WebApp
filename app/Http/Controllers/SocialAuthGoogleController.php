<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Socialite;
use Auth;
use Exception;
use MainController;



class SocialAuthGoogleController extends Controller
{
    public function redirect($service)
    {
        return Socialite::driver('google')->redirect();
    }


    public function callback($service)
    {
        try {


            $SocialUser = Socialite::driver($service)->user();
            $existUser = User::where('email',$SocialUser->email)->first();


            if($existUser) {
                Auth::loginUsingId($existUser->id);
            }
            else {
                $user = new User;
                $user->name = $SocialUser->name;
                $user->email = $SocialUser->email;
                //$user->google_id = $SocialUser->id;
                $user->password = md5(rand(1,10000));
                $user->save();
                Auth::loginUsingId($user->id);
            }
            	return redirect()->route('home');
        }
        catch (Exception $e) {
            return 'error';
        }
    }
}
