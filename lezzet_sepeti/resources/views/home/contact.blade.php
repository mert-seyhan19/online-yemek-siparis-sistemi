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

        <div class="col-md-7">
          <br><br>
          <h1 class="aside-title text-center">İletişim Bilgileri</h1>
          {!!$setting->contact!!}
        </div>

        <div class="col-md-5">
          <br><br>
          <h1 class="aside-title text-center">İletişim Formu</h1>

          @include('home.message')
          <form action="{{route('sendmessage')}}" method="post">
          @csrf
              <div class="form-group">
                <label for="name">İsim:</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Ad ve Soyad">
              </div>


              <div class="form-group">
                <label for="email">E-posta:</label>
                <input type="email" class="form-control" id="email" name="email"  placeholder="Mail Adresi">
              </div>


              <div class="form-group">
                <label for="phone">Telefon:</label>
                <input type="tel" class="form-control" id="phone" name="phone"  placeholder="Telefon Numarası">
              </div>


              <div class="form-group">
                <label for="subject">Mesaj Konusu:</label>
                <input type="text" class="form-control" id="subject" name="subject"  placeholder="Konu">
              </div>

              <div class="form-group">
                <label for="message">Mesaj:</label>
                <textarea class="form-control" id="message" name="message" placeholder="Mesaj" rows="4"></textarea>
              </div>





              <button type="submit" class="btn btn-primary">Gönder</button>
          </form>

        </div>


    </div>
  </div>
</div>






@endsection
