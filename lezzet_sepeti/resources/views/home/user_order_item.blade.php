@extends('layouts.home')


@section('title', 'Order İtems')


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
                  <thead class="text-center">
                  <tr>
                    <th>Product</th>
                    <th>Product Name</th>
                    <th class="text-center">Price</th>
                    <th class="text-center">Quantity</th>
                    <th class="text-center">Total</th>
                    <th class="text-center">Status</th>
                    <th class="text-center">Note</th>
                  </tr>
                  </thead>
                  <tbody>

                  @php
                    $total=0;
                  @endphp

                   @foreach ($datalist as $rs)



                  <tr class="text-center">

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
                    <td>{{ $rs->quantity }}</td>
                    <td>{{ $rs->amount }}</td>
                    <td>{{ $rs->status }}</td>
                    <td>{{ $rs->note }}</td>
                  </tr>



                   @endforeach
                  </tbody>

                  <tfoot>
                    <tr>
                      <th class="empty" colspan="2"></th>
                      <th>Toplam</th>
                      <th colspan="2" class="sub-total">${{$rs->order->total}}</th>
                    </tr>

                  </tfoot>

                </table>



              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->



      </div>

    </div>
  </div>
</div>



    @endsection
