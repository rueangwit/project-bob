<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!--Import Google Icon Font-->
      <link href="{{asset('https://fonts.googleapis.com/icon?family=Material+Icons') }}" rel="stylesheet">
      <script type="text/javascript" src="{{asset('https://code.jquery.com/jquery-3.2.1.min.js') }}"></script>
      <!-- Compiled and minified CSS -->
      <link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css') }}">
      <!-- Compiled and minified JavaScript -->
      <script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js') }}"></script>
      <script src="{{asset('https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js') }}"></script>
      <script src="{{asset('https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular-route.js') }}"></script>
      <link rel="stylesheet" href="{{asset('font-awesome-4.7.0/css/font-awesome.min.css') }}">

  </head>
  <body>
    <script type="text/javascript">
      $( document ).ready(function(){
        $(".button-collapse").sideNav();
        $('.slider').slider();
        $('.modal').modal();

      })

    </script>
    <!-- Dropdown Structure -->

    <nav>
      <div class="nav-wrapper green darken-1">
        <a href="#!" class="brand-logo">RWSPB</a>

        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
          <li><a href="sass.html">หน้าแรก</a></li>
          <li><a href="badges.html">ติดต่อสอบถาม</a></li>
          <li><a href="collapsible.html">สถานที่ตั้ง</a></li>
          <li><a href="mobile.html">ข่าวสาร/กิจกรรม</a></li>
          <li><a class="waves-effect waves-light btn modal-trigger" href="#modal1">เข้าสู่ระบบ</a></li>
          <li><a href="mobile.html">สมัคสมาชิค</a></li>
          <li><a href="mobile.html"><i class="material-icons">more_vert</i></a></li>
        </ul>

        <ul class="side-nav" id="mobile-demo">
          <li><a href="sass.html">หน้าแรก</a></li>
          <li><a href="badges.html">ติดต่อสอบถาม</a></li>
          <li><a href="collapsible.html">สถานที่ตั้ง</a></li>
          <li><a href="mobile.html">ข่าวสาร/กิจกรรม</a></li>
        </ul>
      </div>
    </nav>

  <!-- Modal Structure -->
  <div id="modal1" class="modal">
    <div class="modal-content">
      <h5>เข้าสู่ระบบ</h5>
         <div class="row">
           <div class="input-field col s12">
             <i class="material-icons prefix">account_circle</i>
             <input id="icon_prefix" type="text" class="validate">
             <label for="icon_prefix">username</label>
           </div>
         </div>
           <div class="row">
           <div class="input-field col s12">
             <i class="material-icons prefix">vpn_key</i>
             <input id="icon_telephone" type="tel" class="validate">
             <label for="icon_telephone">password</label>
           </div>
         </div>
    </div>
    <div class="modal-footer">
      <div class="row">
        <div class="input-field col s12">
          <div class="row">
            <a class="waves-effect waves-light btn col s12">login</a>
              <a class="waves-effect #1a237e indigo darken-4 btn col s12 social facebook">
                <i class="fa fa-facebook"></i> Sign in with facebook</a>
            </div>
        </div>
      </div>
    </div>
  </div>




      @yield('content')






  </body>
</html>
