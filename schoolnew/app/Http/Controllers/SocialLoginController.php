<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\SocialAccountService;


use Socialize;

use Auth;

class SocialLoginController extends Controller
{
  public function facebookAuthRedirect() {
    return Socialize::driver('facebook')->redirect();
  }
  public function facebookSuccess(SocialAccountService $service) {
    //$provider = Socialize::driver('facebook')->user();
    //\Socialite::driver('facebook')->user();
    //$user = Socialite::driver('github')->user();

      //'dd($provider); // print value debug.
      //echo $provider->name."ชื่อ: ".$provider->email;

      $user = $service->createOrGetUser(Socialize::driver('facebook')->user());

        auth()->login($user);

        return redirect()->to('/home');

  }
}
