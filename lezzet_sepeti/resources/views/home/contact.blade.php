@extends('layouts.home')


@section('title','Contact-' . $setting->title)

@section('description')
    {{ $setting->description }}
@endsection

@section('keywords',$setting->keywords)

@section('author','Mert Seyhan')



@section('content')




<div class="section">
  <div class="container">
    <div class="row">

        <div class="col-md-8">
          <br><br>
          <h1 class="aside-title text-center">İletişim Bilgileri</h1>
          {!!$setting->contact!!}
        </div>

        <div class="col-md-4">
          <br><br>
          <h1 class="aside-title text-center">İletişim Formu</h1>
        </div>


    </div>
  </div>
</div>






@endsection
