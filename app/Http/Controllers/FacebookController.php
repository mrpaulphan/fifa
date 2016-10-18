<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Socialite;
use App\User;

class FacebookController extends Controller
{
    /**
         * Redirect the user to the GitHub authentication page.
         *
         * @return Response
         */
        public function redirectToProvider()
        {
            return Socialite::driver('facebook')->redirect();
        }

        /**
         * Obtain the user information from GitHub.
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
            $tokenSecret = $facebook->tokenSecret;

            // All Providers
            $facebook->getId();
            $facebook->getNickname();
            $facebook->getName();
            $facebook->getEmail();
            $facebook->getAvatar();

            // Register user
            $user = User::create([
                'facebook_id' => $facebook->getId(),
                'name' => $facebook->getName(),
                'email' =>$facebook->getEmail(),
                'avatar' =>$facebook->getAvatar(),
            ]);


            // Login user
            auth()->login($user);

        }
}
