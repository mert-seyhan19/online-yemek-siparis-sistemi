<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin | Setting Düzenleme Sayfası</title>

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
<div class="wrapper">



  @include('sablon.admin._header')

  @include('sablon.admin._sidebar')















  <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <section class="content-header">
       <div class="container-fluid">
         <div class="row mb-2">
           <div class="col-sm-6">
             <h1>Setting Düzenleme</h1>
           </div>
           <div class="col-sm-6">
             <ol class="breadcrumb float-sm-right">
               <li class="breadcrumb-item"><a href="#">Home</a></li>
               <li class="breadcrumb-item active">Setting Düzenle</li>
             </ol>
           </div>
         </div>
       </div><!-- /.container-fluid -->
     </section>

     <!-- Main content -->
     <section class="content">


       <!-- Default box -->
           <div class="card">

             <!-- /.card-header -->
             <div class="card-body">








               <div class="row">
                    <div class="col-12 col-sm-12">

                           <!-- form start -->
                           <form role="form" action="{{route('admin_setting_update')}}" method="post" enctype="multipart/form-data">
                             @csrf
                             <div class="card-body">
                                 <div class="card card-primary card-tabs">
                                   <div class="card-header p-0 pt-1">
                                     <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                                       <li class="nav-item">
                                         <a class="nav-link active" id="custom-tabs-one-general-tab" data-toggle="pill" href="#custom-tabs-one-general" role="tab" aria-controls="custom-tabs-one-general" aria-selected="true">Genel</a>
                                       </li>
                                       <li class="nav-item">
                                         <a class="nav-link" id="custom-tabs-one-smtp-tab" data-toggle="pill" href="#custom-tabs-one-smtp" role="tab" aria-controls="custom-tabs-one-smtp" aria-selected="false">Smtp Email</a>
                                       </li>
                                       <li class="nav-item">
                                         <a class="nav-link" id="custom-tabs-one-social-tab" data-toggle="pill" href="#custom-tabs-one-social" role="tab" aria-controls="custom-tabs-one-social" aria-selected="false">Sosyal Medya</a>
                                       </li>
                                       <li class="nav-item">
                                         <a class="nav-link" id="custom-tabs-one-about-tab" data-toggle="pill" href="#custom-tabs-one-about" role="tab" aria-controls="custom-tabs-one-about" aria-selected="false">Hakkımızda</a>
                                       </li>
                                       <li class="nav-item">
                                         <a class="nav-link" id="custom-tabs-one-contact-tab" data-toggle="pill" href="#custom-tabs-one-contact" role="tab" aria-controls="custom-tabs-one-contact" aria-selected="false">İletişim Sayfası</a>
                                       </li>
                                       <li class="nav-item">
                                         <a class="nav-link" id="custom-tabs-one-references-tab" data-toggle="pill" href="#custom-tabs-one-references" role="tab" aria-controls="custom-tabs-one-references" aria-selected="false">Referanslar</a>
                                       </li>

                                     </ul>
                                   </div>
                                   <div class="card-body">
                                     <div class="tab-content" id="custom-tabs-one-tabContent">
                                       <div class="tab-pane fade show active" id="custom-tabs-one-general" role="tabpanel" aria-labelledby="custom-tabs-one-general-tab">

                                             <input type="hidden" id="id" name="id" value="{{$data->id}}" class="form-control" >

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
                                               <label>Company</label>
                                               <input type="text" name="company" value="{{$data->company}}" class="form-control" >
                                             </div>

                                             <div class="form-group">
                                               <label>Address</label>
                                               <input type="text" name="address" value="{{$data->address}}" class="form-control" >
                                             </div>

                                             <div class="form-group">
                                               <label>Phone</label>
                                               <input type="text" name="phone" value="{{$data->phone}}" class="form-control" >
                                             </div>

                                             <div class="form-group">
                                               <label>Fax</label>
                                               <input type="text" name="fax" value="{{$data->fax}}" class="form-control" >
                                             </div>

                                             <div class="form-group">
                                               <label>Email</label>
                                               <input type="text" name="email" value="{{$data->email}}" class="form-control" >
                                             </div>

                                             <div class="form-group">
                                                <label>Status</label>
                                                <select class="form-control select2bs4" name="status" style="width: 100%;">
                                                  <option selected="selected">{{$data->status}}</option>
                                                  <option>True</option>
                                                  <option>False</option>
                                                </select>
                                              </div>

                                       </div>

                                       <div class="tab-pane fade" id="custom-tabs-one-smtp" role="tabpanel" aria-labelledby="custom-tabs-one-smtp-tab">

                                             <div class="form-group">
                                               <label>Smtp Server</label>
                                               <input type="text" name="smtpserver" value="{{$data->smtpserver}}" class="form-control" >
                                             </div>

                                             <div class="form-group">
                                               <label>Smtp Email</label>
                                               <input type="text" name="smtpemail" value="{{$data->smtpemail}}" class="form-control" >
                                             </div>

                                             <div class="form-group">
                                               <label>Smtp Password</label>
                                               <input type="password" name="smtppassword" value="{{$data->smtppassword}}" class="form-control" >
                                             </div>

                                             <div class="form-group">
                                               <label>Smtp Port</label>
                                               <input type="number" name="smtpport" value="{{$data->smtpport}}" class="form-control" >
                                             </div>

                                       </div>

                                       <div class="tab-pane fade" id="custom-tabs-one-social" role="tabpanel" aria-labelledby="custom-tabs-one-social-tab">

                                               <div class="form-group">
                                                 <label>Facebook</label>
                                                 <input type="text" name="facebook" value="{{$data->facebook}}" class="form-control" >
                                               </div>

                                               <div class="form-group">
                                                 <label>İnstagram</label>
                                                 <input type="text" name="instagram" value="{{$data->instagram}}" class="form-control" >
                                               </div>

                                               <div class="form-group">
                                                 <label>Twitter</label>
                                                 <input type="text" name="twitter" value="{{$data->twitter}}" class="form-control" >
                                               </div>

                                       </div>

                                       <div class="tab-pane fade" id="custom-tabs-one-about" role="tabpanel" aria-labelledby="custom-tabs-one-about-tab">
                                               <div class="form-group">
                                                 <label>About Us</label>
                                                 <textarea id="aboutus" name="aboutus">{{$data->aboutus}}</textarea>
                                               </div>
                                       </div>

                                       <div class="tab-pane fade" id="custom-tabs-one-contact" role="tabpanel" aria-labelledby="custom-tabs-one-contact-tab">
                                               <div class="form-group">
                                                 <label>Contact</label>
                                                 <textarea id="contact" name="contact">{{$data->contact}}</textarea>
                                               </div>
                                       </div>

                                       <div class="tab-pane fade" id="custom-tabs-one-references" role="tabpanel" aria-labelledby="custom-tabs-one-references-tab">
                                               <div class="form-group">
                                                 <label>References</label>
                                                 <textarea id="references" name="references">{{$data->references}}</textarea>
                                               </div>
                                               <script>
                                                $(document).ready(function() {
                                                    $('#aboutus').summernote();
                                                    $('#contact').summernote();
                                                    $('#references').summernote();
                                                });
                                              </script>
                                       </div>

                                     </div>
                                   </div>
                                   <!-- /.card -->
                                 </div>
                               </div>
                      </div>









































                     <!-- /.card-body -->

                     <div class="card-footer">
                       <button type="submit" class="btn btn-primary">Update Setting</button>
                     </div>
                   </form>






             </div>
             <!-- /.card-body -->
           </div>
           <!-- /.card -->

         </div>
         <div class="card-body">

         </div>
         <!-- /.card-body -->


       </div>
       <!-- /.card -->

     </section>
     <!-- /.content -->


   </div>
   <!-- /.content-wrapper -->











@include('sablon.admin._footer')














</div>
<!-- ./wrapper -->


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
