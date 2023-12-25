@extends('layouts.home')


@section('title','References-' . $setting->title)

@section('description')
    {{ $setting->description }}
@endsection

@section('keywords',$setting->keywords)

@section('author','Mert Seyhan')



@section('content')




<div class="section">
  <div class="container">
    <div class="row">
        <br><br><br>
      {!!$setting->references!!}
        <br>
    </div>
  </div>
</div>






@endsection
