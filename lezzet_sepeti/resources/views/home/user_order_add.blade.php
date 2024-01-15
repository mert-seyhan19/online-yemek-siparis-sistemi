@extends('layouts.home')


@section('title', 'Order Products')





@section('content')

<div id="breadcrumb">
  <div class="container">
    <ul class="breadcrumb">
      <li><a href="">Home / </a></li>
      <li class="active">Order Products</li>
    </ul>
  </div>

</div>


<div class="section">
  <div class="container">
    <div class="row">


        <div class="col-md-6">
          <form id="checkout-form" action="{{route('user_order_store')}}" method="post" class="clearfix">
            @csrf
            <div>

              <div class="section-title">
                <h3 class="title">Sipariş Detayı</h3>

              </div>




              <div class="form-group">
                <input class="form-control" type="text" name="name" value="{{Auth::user()->name}}" placeholder="Ad ve Soyad">
              </div>



              <div class="form-group">
                <input class="form-control" type="email" name="email" value="{{Auth::user()->email}}" placeholder="Email">
              </div>

              <div class="form-group">
                <input class="form-control" type="text" name="address" value="{{Auth::user()->address}}" placeholder="Adres">
              </div>



                  <div class="form-group">
                    <input class="form-control" type="text" name="phone" value="{{Auth::user()->phone}}" placeholder="Telefon Numarası">
                  </div>









        </div>
      </div>


      <div class="col-md-6 ">


        <div class="payments-methods">
          <div class="section-title">
            <h4 class="title">Ödeme Detayı - Toplam Tutar = {{$total}} TL </h4>
          </div>

          <div class="form-check">
            <input class="form-check-input" type="hidden" name="total" value="{{$total}}">


          </div>
            <br>

          <div class="form-group">
            <input class="form-control" type="text" name="cardname" value="{{Auth::user()->name}}" placeholder="Kart Üzerinde Yer Alana Ad ve Soyad">
          </div>



          <div class="form-group">
            <input class="form-control" type="number" name="cardnumber" value="" placeholder="Kart Numarası">
          </div>

          <div class="form-group">
            <input class="form-control" type="text" name="dates" value="" placeholder="Tarih nm/yy">
          </div>

          <div class="form-group">
            <input class="form-control" type="text" name="key" value="" placeholder="Güvenlik Kodu">
          </div>



          <div class="text-center">
            <button type="submit" class="btn btn-primary">Place Order</button>
          </div>
        </form>
            <br><br>

        </div>
      </div>

    </div>
  </div>
</div>







@endsection
