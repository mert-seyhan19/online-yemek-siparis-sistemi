@extends('layouts.home')


@section('title', $setting->title)

@section('description')
    {{ $setting->description }}
@endsection

@section('keywords',$setting->keywords)

@section('author','Mert Seyhan')



<div id="breadcrumb">
  <div class="container">
    <ul class="breadcrumb">
      <li><a href="{{route('home')}}">Home</a></li>
      <li class="active">User Profile</li>
    </ul>
  </div>

</div>


<div class="section">
  <div class="container">
    <div class="row">
      User Profile Page
    </div>
  </div>
</div>






@endsection
