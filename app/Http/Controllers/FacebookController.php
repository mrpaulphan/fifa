<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Socialite;
use App\User;

class FacebookController extends Controller
{
    /**
         * Redirect the user to the Facebook authentication page.
         *
         * @return Response
         */
        public function redirectToProvider()
        {
            return Socialite::driver('facebook')->redirect();
        }

        /**
         * Obtain the user information from Facebook.
         *
         * @return Response
         */
        public function handleProviderCallback(Request $request)
        {
            $facebook = Socialite::driver('facebook')->user();
            // OAuth Two Providers
            $token = $facebook->token;
            $refreshToken = $facebook->refreshToken; // not always provided
            $expiresIn = $facebook->expiresIn;

            // OAuth One Providers
            $token = $facebook->token;

            // Check if login/register
            $user = User::where('facebook_id', $facebook->id)->first();
            if ($user == null) {
                // Register user
                $user = User::create([
                    'name' => $facebook->name,
                    'facebook_id' => $facebook->id,
                    'email' => $facebook->email,
                    'avatar' => $facebook->avatar,
                    'avatar_original' => $facebook->avatar_original,
                    'token' => $token,
                    'verified' => true,
                ]);
                Auth::login($user);
            } else {
                    $user->name = $facebook->name;
                    $user->facebook_id = $facebook->id;
                    $user->email = $facebook->email;
                    $user->avatar = $facebook->avatar;
                    $user->avatar_original = $facebook->avatar_original;
                    $user->token = $token;
                    $user->verified = true;
                Auth::login($user);
            }


            return redirect()->route('get.careers');

        }

}
