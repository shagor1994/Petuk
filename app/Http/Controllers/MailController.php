<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\Email;
use App\User;
use Illuminate\Support\Facades\Mail;
use App\City;
use Auth;

class MailController extends Controller
{
    //

    public function send()
    {

      //  $Mail = new \stdClass();
        $rand_number=rand();
        $rand_number=base64_encode($rand_number);
        $id = Auth::user()->id;
        $user = User::find($id);
        $email = $user->email;
        $user->code = $rand_number;
        $user->save();

        $randOb= new \stdClass();
        $randOb->number = $rand_number;
        $randOb->message='This is an email from Petukbd.com. Please click on blue text to verify your email.';
        //$add=url('verify/'.$randOb->number.'');
       // dd($add);


        Mail::to($email)->send(new Email($randOb));
        return view('email/emailV');
    }

    public function verify($code)
    {
        $user=User::where('code', $code)->first();

        if ($user) {
            $user->email_verified_at=time();
            $user->save();

            Auth::login($user);
            $cities= City::all();

            return view('/start')->with('cities', $cities);
        } else {
            dd('spam');
        }
    }
}
