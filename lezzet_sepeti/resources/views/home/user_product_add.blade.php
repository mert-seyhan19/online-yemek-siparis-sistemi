@extends('layouts.home')


@section('title', 'Menü Ekle')

@section('headerjs')
<!-- Aşağıdaki kodlar ile zengin metin kutusu oluşturuyoruz -->
<<script src="https://cdn.ckeditor.com/ckeditor5/40.2.0/classic/ckeditor.js"></script>
@endsection





@section('content')









  <div id="breadcrumb">
    <div class="container">
      <ul class="breadcrumb">
        <li><a href="">Home / </a></li>
        <li class="active"> Menü Ekle</li>
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
                              <form role="form" action="{{route('user_product_store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">

                                  <div class="form-group">
                                    <label>Category</label> <br>

                                    <select class="form-control select2bs4" name="category_id" style="width: 100%;">
                                      @foreach ($datalist as $rs)
                                         <option value="{{ $rs->id }}">{{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs,$rs->title)}}</option>
                                      @endforeach
                                    </select>

                                  </div>

                                  <br><br><br>

                                  <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" name="title" class="form-control" >
                                  </div>

                                  <div class="form-group">
                                    <label>Keywords</label>
                                    <input type="text" name="keywords" class="form-control" >
                                  </div>

                                  <div class="form-group">
                                    <label>Description</label>
                                    <input type="text" name="description" class="form-control" >
                                  </div>



                                  <div class="form-group">
                                    <label>Detail</label>
                                     <textarea id="detail" name="detail"></textarea>
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
                                  </div>

                                  <div class="form-group">
                                    <label>Price</label>
                                    <input type="number" value="0" name="price" class="form-control" >
                                  </div>
                                  <br>
                                  <div class="form-group">
                                     <label>Status</label> <br>
                                     <select class="form-control select2bs4" name="status" style="width: 100%;">
                                       <option selected="selected">False</option>
                                       <option>True</option>
                                     </select>
                                   </div>

</div>


<br><br>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                  <button type="submit" class="btn btn-primary">Ürün Ekle</button>
                                </div>
                              </form>






      </div>
    </div>
  </div>
</div>








@endsection
