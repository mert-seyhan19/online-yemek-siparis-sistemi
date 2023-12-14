<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin |Resim Ekleme Sayfası</title>











    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('assets')}}/admin/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="{{asset('assets')}}/admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{asset('assets')}}/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{asset('assets')}}/admin/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('assets')}}/admin/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{asset('assets')}}/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{asset('assets')}}/admin/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="{{asset('assets')}}/admin/plugins/summernote/summernote-bs4.min.css">





    <!-- Aşağıdaki kodlar ile zengin metin kutusu oluşturuyoruz -->


    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>




</head>
<body class="hold-transition sidebar-mini layout-fixed">






       <!-- Default box -->
           <div class="card">
             <div class="card-header">
               <h3 class="card-title">Ürün Adı : {{$data->title}}</h3>

             </div>
             <!-- /.card-header -->
             <div class="card-body">





                   <!-- form start -->
                   <form role="form" action="{{route('admin_image_store', ['product_id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                     @csrf
                     <div class="card-body">

                       <div class="form-group">
                         <label>Title</label>
                         <input type="text" id="title" name="title" class="form-control" >
                       </div>

                       <div class="form-group">
                         <label>Image</label>
                         <input type="file" name="image" class="form-control" >
                       </div>


                     <!-- /.card-body -->

                     <div class="card-footer">
                       <button type="submit" class="btn btn-primary">Resim Ekle</button>
                     </div>
                   </form>






                   <table id="example1" class="table table-bordered table-striped">
                     <thead>
                     <tr>
                       <th>Id</th>

                       <th>Title(s)</th>

                       <th>Image</th>


                       <th>Actions</th>
                     </tr>
                     </thead>
                     <tbody>

                      @foreach ($images as $rs)



                     <tr>
                       <td>{{ $rs->id }}</td>

                       <td>{{ $rs->title }}</td>

                       <td>
                         @if ($rs->image)
                            <img src="{{ Storage::url($rs->image)}}" height="60" alt="">
                          @endif
                       </td>

                       <td>
                         <a href="{{route('admin_image_delete', ['id' => $rs->id,'product_id'=>$data->id])}}" onclick="return confirm('Silmek istediğinize emin misiniz?')">
                           <img src="{{asset('assets/admin/images')}}/delete.png" height="25">
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
         <div class="card-body">

         </div>
         <!-- /.card-body -->


















<!-- jQuery Aşağıda yazan kodu çalıştırınca zengin metin kutusu bozuluyor -->
<!-- <script src="{{asset('assets')}}/admin/plugins/jquery/jquery.min.js"></script> -->
<!-- Bootstrap 4 -->
<script src="{{asset('assets')}}/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="{{asset('assets')}}/admin/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{asset('assets')}}/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{asset('assets')}}/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{asset('assets')}}/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="{{asset('assets')}}/admin/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{asset('assets')}}/admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="{{asset('assets')}}/admin/plugins/jszip/jszip.min.js"></script>
<script src="{{asset('assets')}}/admin/plugins/pdfmake/pdfmake.min.js"></script>
<script src="{{asset('assets')}}/admin/plugins/pdfmake/vfs_fonts.js"></script>
<script src="{{asset('assets')}}/admin/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="{{asset('assets')}}/admin/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="{{asset('assets')}}/admin/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="{{asset('assets')}}/admin/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('assets')}}/admin/dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
