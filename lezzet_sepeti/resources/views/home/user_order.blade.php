@extends('layouts.home')


@section('title', 'My Orders')


@section('content')

<br><br>

<div class="section">
  <div class="container">
    <div class="row">

      <div id="aside" class="col-2">
        @include('home.usermenu')
      </div>

      <div id="main" class="col-10">


        <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <a class="btn  btn-info" href="">Müşteri Bilgileri</a>
                @include('home.message')
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Total</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th style="" colspan="2">Actions</th>
                  </tr>
                  </thead>
                  <tbody>

                   @foreach ($datalist as $rs)



                  <tr>
                    <td>{{ $rs->id }}</td>
                    <td>{{ $rs->name }}</td>
                    <td>{{ $rs->phone }}</td>
                    <td>{{ $rs->email }}</td>
                    <td>{{ $rs->address }}</td>
                    <td>{{ $rs->total }}</td>
                    <td>{{ $rs->created_at }}</td>
                    <td>{{ $rs->status }}</td>

                    <td>
                      <a href="{{route('user_order_show', ['id' => $rs->id])}}">
                        <img src="{{asset('assets/admin/images')}}/edit.png" height="25" style="width:30px">
                      </a>
                     </td>


                  </tr>

                   @endforeach



                  </tbody>

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
