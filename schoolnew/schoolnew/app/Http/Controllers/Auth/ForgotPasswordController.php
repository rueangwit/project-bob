<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Support\Facades\Hash;
use Auth;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    //public function __construct()
  //  {
        //$this->middleware('guest');
    //}
    public function repassword (){
      if(Hash::check('123456789',Auth::user()->password)){
        echo Auth::user()->name;
        echo Hash::make('123456789');

        //echo bcrypt('123456789')."<br>";
      }
    //  echo Auth::user()->name;
      //echo "password: ".Auth::user()->password;

    }
}
