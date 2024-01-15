@extends('layouts.home')


@section('title', 'Menü Düzenle')

@section('headerjs')
<!-- Aşağıdaki kodlar ile zengin metin kutusu oluşturuyoruz -->
<script src="https://cdn.ckeditor.com/ckeditor5/40.2.0/classic/ckeditor.js"></script>
@endsection





@section('content')









  <div id="breadcrumb">
    <div class="container">
      <ul class="breadcrumb">
        <li><a href="">Home / </a></li>
        <li class="active"> Menü Düzenle</li>
      </ul>
    </div>
  </div>


  <div class="section">
    <div class="container">
      <div class="row">

              <div id="aside" class="col-2">
                @include('home.usermenu')
              </div>


                  <div id="main" class="col-10">




                    <!-- form start -->
                    <form role="form" action="{{route('user_product_update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                      @csrf
                      <div class="card-body">

                        <div class="form-group">
                          <label>Category</label> <br>

                          <select class="form-control select2bs4" name="category_id" style="width: 100%;">
                            @foreach ($datalist as $rs)
                               <option value="{{ $rs->id }}" @if ($rs->id == $data->parent_id) selected="selected" @endif>
                                 {{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs,$rs->title)}}
                               </option>
                            @endforeach
                          </select>

                        </div>
                          <br><br><br>
                        <div class="form-group">
                          <label>Title</label>
                          <input type="text" name="title" value="{{$data->title}}" class="form-control" >
                        </div>

                        <div class="form-group">
                          <label>Keywords</label>
                          <input type="text" name="keywords" value="{{$data->keywords}}" class="form-control" >
                        </div>

                        <div class="form-group">
                          <label>Description</label>
                          <input type="text" name="description" value="{{$data->description}}" class="form-control" >
                        </div>



                        <div class="form-group">
                          <label>Detail</label>
                          <textarea id="detail" name="detail">{{$data->detail}}</textarea>

                            <script>
                                    ClassicEditor
                                            .create( document.querySelector( '#detail' ) )
                                            .then( detail => {
                                                    console.log( detail );
                                            } )
                                            .catch( error => {
                                                    console.error( error );
                                            } );
                            </script>

                        </div>

                        <div class="form-group">
                          <label>Image</label>
                          <input type="file" name="image" class="form-control" >

                          @if ($data->image)
                             <img src="{{ Storage::url($data->image)}}" alt="" style="width:50px">
                           @endif

                        </div>


                        <div class="form-group">
                          <label>Price</label>
                          <input type="number" value="{{$data->price}}" name="price" class="form-control" >
                        </div>



                        <div class="form-group">
                           <label>Status</label> <br>
                           <select class="form-control select2bs4" name="status" style="width: 100%;">
                             <option selected="selected">{{$data->status}}</option>
                             <option>True</option>
                             <option>False</option>
                           </select>
                         </div>

                          <br><br><br><br>



                      <!-- /.card-body -->

                      <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Ürün Düzenle</button>
                      </div>
                    </form>



                  </div>
      </div>
    </div>
  </div>








@endsection
