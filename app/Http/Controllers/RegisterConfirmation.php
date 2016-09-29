<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;


class RegisterConfirmation extends Controller
{
    public function checkEmailToConfirm() {

        return view('auth.register-check-email');
    }

    public function confirmAccount(Request $request) {
        //echo $request->url();

        $url = $request->url();
        $token = substr($url, strrpos($url, '/') + 1);

        return view('auth.register-confirm-account')->with('token', $token);

    }

    public function activeAccount(Request $request) {
        $token = $request->token;

        // Update data
       $save = new User();
       $save = User::where('token', $token)->update([
           'verified' => true
         ]);

         return 'It worked';

    }
}
