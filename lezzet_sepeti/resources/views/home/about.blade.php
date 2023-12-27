@extends('layouts.home')


@section('title','About Us-' . $setting->title)

@section('description')
    {{ $setting->description }}
@endsection

@section('keywords',$setting->keywords)

@section('author','Mert Seyhan')



@section('content')




<div class="section">
  <div class="container">
    <div class="row">

      {!!$setting->aboutus!!}
        <br>
    </div>
  </div>
</div>






@endsection
