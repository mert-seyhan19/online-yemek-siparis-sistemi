@extends('layouts.home')


@section('title', 'My Menu')


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
                <a class="btn  btn-info" href="{{route('user_product_add')}}">Menü Ekle</a>
                @include('home.message')
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Id</th>
                   <!-- <th>Category</th>   -->
                    <th>Title(s)</th>
                    <!--<th>Detail</th> -->
                    <th>Price</th>
                    <th>Image</th>
                    <th>Image Galery</th>
                    <th>Status</th>
                    <th style="" colspan="2">Actions</th>
                  </tr>
                  </thead>
                  <tbody>

                   @foreach ($datalist as $rs)



                  <tr>
                    <td>{{ $rs->id }}</td>
                    <!--<td>    -->

                     <!--  @if ($rs->category)   -->
                     <!--      {{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($rs->category, $rs->category->title) }}   -->
                   <!--    @else  -->
                           <!-- Eğer $rs->category null ise burada yapılacak işlemler -->
                   <!--    @endif   -->

                 <!--   </td>  -->
                    <td>{{ $rs->title }}</td>
                    <!-- <td>{{ $rs->detail }}</td> -->
                    <td>{{ $rs->price }}</td>
                    <td>
                      @if ($rs->image)
                         <img src="{{ Storage::url($rs->image)}}" height="30" alt="" style="width:40px">
                       @endif
                    </td>

                    <td><a href="{{route('user_image_add', ['product_id' => $rs->id])}}" onclick="return !window.open(this.href, '','top=50 left=100 width=1100, height=700')">
                       <img src="{{asset('assets/admin/images')}}/gallery.png" height="25" style="width:30px"></a>
                     </td>

                    <td>{{ $rs->status }}</td>

                    <td>
                      <a href="{{route('user_product_edit', ['id' => $rs->id])}}">
                        <img src="{{asset('assets/admin/images')}}/edit.png" height="25" style="width:30px">
                      </a>
                     </td>

                    <td>
                      <a href="{{route('user_product_delete', ['id' => $rs->id])}}" onclick="return confirm('Silmek istediğinize emin misiniz?')">
                        <img src="{{asset('assets/admin/images')}}/delete.png" height="25" style="width:30px">
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
