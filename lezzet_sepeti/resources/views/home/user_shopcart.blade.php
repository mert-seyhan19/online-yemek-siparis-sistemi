@extends('layouts.home')


@section('title', 'My Shopcart')


@section('content')



<div class="section">
  <div class="container">
    <div class="row">

      <div id="aside" class="col-2">
        @include('home.usermenu')
      </div>

      <div id="main" class="col-10">


        <!-- Default box -->
            <div class="card">

              <!-- /.card-header -->
              <div class="card-body">


                <table id="example1" class="table table-bordered table-striped shopping-cart-table">
                  <thead>
                  <tr>
                    <th>Product</th>

                    <th></th>

                    <th class="text-center">Price</th>
                    <th class="text-center">Quantity</th>
                    <th class="text-center">Total</th>
                    <th class="text-right"></th>
                    <th></th>
                  </tr>
                  </thead>
                  <tbody>

                  @php
                    $total=0;
                  @endphp

                   @foreach ($datalist as $rs)



                  <tr>

                    <td class="thumb">
                      @if ($rs->product->image)
                         <img src="{{ Storage::url($rs->product->image)}}" height="30" alt="" style="width:50px;">
                       @endif
                    </td>
                    <td>
                       <a href="{{route('product',['id'=>$rs->product->id])}}" style="padding: 5px 10px; font-size: 13px; ">
                         {{ $rs->product->title }}
                       </a>
                    </td>
                    <td>{{ $rs->product->price }}</td>
                    <td>
                      <form action="{{route('user_shopcart_update',['id' => $rs->id])}}" method="post">
                        @csrf
                        <input name="quantity" type="number" value="{{ $rs->quantity }}" min="1" max="{{ $rs->product->quantity }}" onchange="this.form.submit()">
                      </form>
                    </td>

                    <td>{{ $rs->product->price * $rs->quantity }}</td>






                    <td>
                      <a href="{{route('user_shopcart_delete', ['id' => $rs->id])}}" onclick="return confirm('Silmek istediğinize emin misiniz?')">
                        <img src="{{asset('assets/admin/images')}}/delete.png" style="width:30px;">
                      </a>
                     </td>
                  </tr>

                  @php
                    $total+= $rs->product->price * $rs->quantity;
                  @endphp

                   @endforeach
                  </tbody>

                  <tfoot>
                    <tr>
                      <th class="empty" colspan="3"></th>
                      <th>Ara Toplam</th>
                      <th colspan="2" class="sub-total">${{$total}}</th>
                    </tr>
                    <tr>
                      <th class="empty" colspan="3"></th>
                      <th>Kargo</th>
                      <th colspan="2" class="sub-total">Ücretsiz Kargo</th>
                    </tr>
                    <tr>
                      <th class="empty" colspan="3"></th>
                      <th>Genel Toplam</th>
                      <th colspan="2" class="sub-total">${{$total}}</th>
                    </tr>
                  </tfoot>

                </table>

              <form action="{{route('user_order_add')}}" method="post">
                @csrf
                <input type="hidden" name="total" value="{{$total}}">
                <div class="pull-right">
                  <button type="submit" class="primary-btn">Sipariş Ver</button>
                </div>

              </form>

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->



      </div>

    </div>
  </div>
</div>



    @endsection
