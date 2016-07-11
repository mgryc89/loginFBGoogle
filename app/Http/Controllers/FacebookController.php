<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Socialite;
use App\User;
use Auth;

class FacebookController extends Controller
{
    public function login()
    {
    	return Socialite::driver('facebook')->redirect();
    }

    public function callback()
    {
        $user = Socialite::driver('facebook')->user();

        // return $user['name'];

        $authuser = User::where('id_facebook','=',$user->getId())->first();
        if (!$authuser) 
        {
        	if ($user->getEmail()) 
        	{
        		$email = $user->getEmail();
        	}
        	else
        	{
        		$email = 'brak'.$user->getId();
        	}

        	$newUser = new User;
        	$newUser->name = $user->getName();
        	$newUser->email =$email;
        	$newUser->id_facebook = $user->getId();	

        	$newUser->save();

        	Auth::login($newUser);
        }
        else
        {
        	Auth::login($authuser);
        }

        return redirect()->route('home');
    }





    public function zly()
    {
    	echo "zly asdcasd cd";
    }


    public function googlelogin()
    {
    	return Socialite::driver('google')->redirect();
    }

    public function googlecallback()
    {
        $user = Socialite::driver('google')->user();

        // echo $user->getEmail();
        // echo "<img src='".$user->getAvatar()."'>";
        // echo "<br>";

        // return $user['name'];
        return dd($user);
    }
}
