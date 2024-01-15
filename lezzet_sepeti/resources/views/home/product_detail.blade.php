@extends('layouts.home')


@section('title', $data->title)

@section('description')
    {{ $data->description }}
@endsection

@section('keywords',$data->keywords)

@section('author','Mert Seyhan')

@section('content')
  <br><br>
<div id="breadcrumb">
  <div class="container">
      <br><br>
      <p style="font-size: 20px;  color: black; font-weight: bold; padding: 10px; text-align: center;" class="m-6">Yemek Menüsü Detay Sayfası</p>

  </div>
</div>

<br><br>

<div class="section">
  <div class="container">
    <div class="row">


      <div style="max-width: 800px; margin: auto;">
          <h3 style="color: black; font-size: 20px; text-align: center; font-weight: bold;">{{$data->title}}</h3>
          <div style="background-color: #ffffff; border: 1px solid #dee2e6; margin-bottom: 20px; padding: 20px; border-radius: 8px;">
            <img src="{{ Storage::url($data->image)}}" alt="Avatar" class="image m-2">
          </div>

          <div style="background-color: #ffffff; border: 1px solid #dee2e6; margin-bottom: 20px; padding: 20px; border-radius: 8px;">
              <p style="color: black; text-align: center; font-weight: bold;">Menü Bilgileri</p>
              <p style="color: #6c757d;">{!!$data->detail!!}</p>

          </div>

          <div style="background-color: #ffffff; border: 1px solid #dee2e6; margin-bottom: 20px; padding: 20px; border-radius: 8px;">
              <p style="color: black; text-align: center; font-weight: bold; font-size: 20px;">Fiyat</p>
              <p style="color: green; font-weight: bold; text-align: center; font-size: 20px;">{{$data->price}} TL</p>
          </div>
      </div>


      <div class="product-btns">
        <form action="{{route('user_shopcart_add',['id' => $data->id])}}" method="post">
          @csrf
          <div class="qtv-input">
            <span class="text-uppercase">Miktar: </span>
            <input class="input" name="quantity" type="number" value="1"> <br><br>
          </div>
          <button type="submit" class="primary-btn"><i class="fa fa-shopping-cart">Sepete Ekle</i></button> <br><br>
          @include('home.message')
        </form>
      </div>




    </div>
  </div>
</div>






@endsection
