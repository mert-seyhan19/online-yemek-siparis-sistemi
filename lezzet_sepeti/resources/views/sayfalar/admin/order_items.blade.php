<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin | Sipariş Bilgileri</title>

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



















  <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">


     <!-- Main content -->
     <section class="content">

       <!-- Default box -->
           <div class="card">
             <div class="card-header">
               <h3 class="card-title">Sipariş Bilgileri Formu</h3>
               @include('home.message')
             </div>
             <!-- /.card-header -->
             <div class="card-body">





                   <!-- form start -->

                     <div class="card-body">

                       <form role="form" action="{{route('admin_order_update',['id'=>$data->id])}}" method="post">
                         @csrf

                       <table id="example1" class="table table-bordered table-striped">

                         <tr>
                           <th>Id</th> <td>{{$data->id }}</td>
                         </tr>

                         <tr>
                           <th>User</th> <td>{{$data->user->name }}</td>
                         </tr>

                         <tr>
                           <th>Name</th> <td>{{ $data->name }}</td>
                         </tr>

                         <tr>
                           <th>Address</th> <td>{{ $data->address }}</td>
                         </tr>

                         <tr>
                           <th>Phone</th> <td>{{ $data->phone }}</td>
                         </tr>

                         <tr>
                           <th>Email</th> <td>{{ $data->email }}</td>
                         </tr>

                         <tr>
                           <th>Total</th> <td>{{ $data->total }}</td>
                         </tr>

                         <tr>
                           <th>IP</th> <td>{{ $data->IP }}</td>
                         </tr>

                         <tr>
                           <th>Created Date</th> <td>{{ $data->created_at }}</td>
                         </tr>

                         <tr>
                           <th>Updated Date</th> <td>{{ $data->updated_at }}</td>
                         </tr>

                         <tr>
                           <th>Status</th>
                           <td>
                            <select name="status">
                              <option selected>{{$data->status}}</option>
                              <option>Accepted</option>
                              <option>Canceled</option>
                              <option>Shipping</option>
                              <option>Completed</option>
                            </select>
                           </td>
                         </tr>

                         <tr>
                           <th>Admin Note: </th>
                           <td><textarea name="note" cols="15">{{$data->note}}</textarea></td>
                         </tr>

                         <tr>
                           <td>
                           <div class="card-footer">
                             <button type="submit" class="btn btn-primary">Sipariş Güncelle</button>
                           </div>
                           </td>
                         </tr>

                       </table>


                       </form>





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

                          <form role="form" action="{{route('admin_order_item_update',['id'=>$rs->id])}}" method="post">
                              @csrf

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

                             <td>
                               <select name="status">
                                 <option selected>{{$data->status}}</option>
                                 <option>Accepted</option>
                                 <option>Canceled</option>
                                 <option>Shipping</option>
                                 <option>Copmpleted</option>
                               </select>
                             </td>
                             <td><textarea name="note" rows="3" cols="30">{{$data->note}}</textarea></td>
                             <td><input type="submit" value="update"></td>

                         </tr>

                         </form>

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
         <div class="card-body">

         </div>
         <!-- /.card-body -->
         <div class="card-footer">

         </div>
         <!-- /.card-footer-->
       </div>
       <!-- /.card -->

     </section>
     <!-- /.content -->


   </div>
   <!-- /.content-wrapper -->


























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
