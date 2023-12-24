@extends('layouts.home')


@section('title', 'User Profile')









@section('content')



<style>
    #breadcrumb {
        background-color: #f5f5f5;
        padding: 10px;
    }

    #breadcrumb a {
        color: #333;
    }

    .section {
        margin-top: 20px;
    }

    #aside {
        background-color: #f8f8f8;
        padding: 15px;
        border-radius: 5px;
    }

    #main {
        background-color: #fff;
        padding: 15px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    /* Responsive styles */
    @media (max-width: 768px) {
        .aside, .main {
            width: 100%;
            margin-right: 0;
        }
    }
  </style>





  <div id="breadcrumb">
    <div class="container">
      <ul class="breadcrumb">
        <li><a href="{{route('home')}}">Home / </a></li>
        <li class="active"> User Profile</li>
      </ul>
    </div>

  </div>


  <div class="section">
    <div class="container">
      <div class="row">

        <div id="aside" class="col-2">
          @include('home.usermenu')
        </div>

        <div id="main" class="col-8">
            @include('profile.show')
        </div>

      </div>
    </div>
  </div>








@endsection
