@extends('layouts.temp')

@section('content')
<!-- Page Layout here -->
<!-- Page Layout here -->
<div class="row" ng-controller="newsController">

  <div class="col s2 hide-on-med-and-down">
    <!-- Grey navigation panel -->

    <div class="row">

         <div class="card">
           <div class="card-image">
             <img src="prosernoal.png">
             <span class="card-title">...</span>
           </div>
           <div class="card-content">
             <p></p>
           </div>
           <div class="card-action">
             <a href="#">นายเรืองวิทย์ สุพร</a>
           </div>
         </div>
         <div class="card">
           <div class="card-image">
             <img src="prosernoal.png">
             <span class="card-title">...</span>
           </div>
           <div class="card-content">
             <p></p>
           </div>
           <div class="card-action">
             <a href="#">นายเรืองวิทย์ สุพร</a>
           </div>
         </div>
         <div class="card">
           <div class="card-image">
             <img src="0003834-idea-max-70g-a4-500-1.jpg">
             <span class="card-title">Card Title</span>
           </div>
           <div class="card-content">
             <p>I am a very simple card. I am good at containing small bits of information.
             I am convenient because I require little markup to use effectively.</p>
           </div>
           <div class="card-action">
             <a href="#">This is a link</a>
           </div>
         </div>

     </div>




  </div>

  <div class="col s8">
    <!-- Teal page content  -->
    <hr>

    <div class="slider">
      <ul class="slides">
        <li>
          <img src="https://lorempixel.com/580/250/nature/1"> <!-- random image -->
          <div class="caption center-align">
            <h3>This is our big Tagline!</h3>
            <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
          </div>
        </li>
        <li>
          <img src="frogs-1212209_640.jpg"> <!-- random image -->
          <div class="caption left-align">
            <h3>Left Aligned Caption</h3>
            <h5 class="light grey-text text-lighten-3"><a href="#">dfdfdf</a> Here's our small slogan.</h5>
          </div>
        </li>
        <li>
          <img src="https://lorempixel.com/580/250/nature/3"> <!-- random image -->
          <div class="caption right-align">
            <h3>Right Aligned Caption</h3>
            <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
          </div>
        </li>
        <li>
          <img src="https://lorempixel.com/580/250/nature/4"> <!-- random image -->
          <div class="caption center-align">
            <h3>This is our big Tagline!</h3>
            <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
          </div>
        </li>
      </ul>
    </div>

    <h5>ข่าวประชาสัมพัน <span class="new badge red">4</span></h5>
    <hr>

       <div class="row" ng-repeat="newsupdate in response">
         <div class="col s12 m6 l4">
           <div class="card">
             <div class="card-image">
               <img src="https://lorempixel.com/580/250/nature/1">
               <span class="card-title">Card Title</span>
             </div>
             <div class="card-content">
               <p>I am a very simple card. I am good at containing small bits of information.
               I am convenient because I require little markup to use effectively.</p>
             </div>
             <div class="card-action">
               <a href="#">This is a link</a>
             </div>
           </div>
         </div>
       </div>


     <!-- Teal page content  -->
     <h5>ข่าวประชาสัมพัน</h5>
     <div class="row">
       <div class="col s12 m12">
         <div class="card">

           <div class="card-content">
             <p>I am a very simple card. I am good at containing small bits of information.
             I am convenient because I require little markup to use effectively.</p>
           </div>
           <div class="card-action">
             <a href="#">This is a link</a>
           </div>
         </div>
       </div>
     </div>



  </div>
  <div class="col s2 hide-on-med-and-down">

    <div class="collection">
       <a href="#!" class="collection-item">จำนวนการเข้าชม</a>
       <a href="#!" class="collection-item"><span class="new badge">4</span>Alan</a>
       <a href="#!" class="collection-item">Alan</a>
       <a href="#!" class="collection-item"><span class="badge">14</span>Alan</a>
     </div>



  </div>

    <div class="fixed-action-btn horizontal">
       <a class="btn-floating btn-large red">
         <i class="large material-icons">mode_edit</i>
       </a>
       <ul>
         <li><a class="btn-floating red"><i class="material-icons">insert_chart</i></a></li>
         <li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a></li>
         <li><a class="btn-floating green"><i class="material-icons">publish</i></a></li>
         <li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a></li>
       </ul>
     </div>



</div>
@endsection
