<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use Socialize;
use Input;
use Auth;

class SocialLoginController extends Controller
{
  public function facebookAuthRedirect() {
    return Socialize::with('facebook')->redirect();
  }
  public function facebookSuccess() {
    $provider = Socialize::driver('facebook')->user();
    //\Socialite::driver('facebook')->user();
    //$user = Socialite::driver('github')->user();

      dd($provider); // print value debug.
      echo $provider->name;

  }
}
