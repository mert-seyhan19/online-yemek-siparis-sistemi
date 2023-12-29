@extends('layouts.home')


@section('title', $data->title)

@section('description')
    {{ $data->description }}
@endsection

@section('keywords',$data->keywords)

@section('author','Mert Seyhan')

@section('content')

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
