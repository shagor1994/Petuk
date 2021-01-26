<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\Reset;
use App\User;
use Illuminate\Support\Facades\Mail;
use App\City;
use Auth;
use Illuminate\Support\Facades\Hash;

class PasswordResetController extends Controller
{
    public function show()
    {
        return view('password/reset');
    }
    public function sendMail(Request $request)
    {
        $rand_number=rand();
        $rand_number=base64_encode($rand_number);
        $email=$request->email;

        $user=User::where('email', $email)->first();
        if ($user) {
            //  dd($email);
            $user->verify=$rand_number;
            $user->save();

            $randOb= new \stdClass();
            $randOb->number = $rand_number;
            $randOb->message="This is an email from Petukbd.com. A password reset request has been requested from your account. Please click on blue text to reset password.";


           Mail::to($email)->send(new Reset($randOb));

            return view('password/message');

        }
        else {
            dd('user not exists');
        }
    }
    public function check($code)
    {//  dd($code);
        $user=User::where('verify', $code)->first();

        if ($user) {
            return view('password/update')->with('token', $code);
        } else {
            dd('There is no such account');
        }
    }

    public function update(Request $request)
    {
        $token=$request->token;
        $password=$request->password;
        $user=User::where('verify', $token)->first();
        if ($user) {
            $user->password=Hash::make($password);
            $user->verify=NULL;
            $user->save();
            Auth::login($user);
            $cities= City::all();

            return view('/start')->with('cities', $cities);
        } else {
            dd('Invalid request');
        }
    }
}
