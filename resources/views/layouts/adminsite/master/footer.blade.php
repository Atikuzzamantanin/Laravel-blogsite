</div>
  <!-- /.content-wrapper -->
<!-- Main Footer -->
<footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{asset('adminsite')}}/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('adminsite')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="{{asset('adminsite')}}/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{asset('adminsite')}}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{asset('adminsite')}}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{asset('adminsite')}}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="{{asset('adminsite')}}/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{asset('adminsite')}}/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="{{asset('adminsite')}}/plugins/jszip/jszip.min.js"></script>
<script src="{{asset('adminsite')}}/plugins/pdfmake/pdfmake.min.js"></script>
<script src="{{asset('adminsite')}}/plugins/pdfmake/vfs_fonts.js"></script>
<script src="{{asset('adminsite')}}/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="{{asset('adminsite')}}/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="{{asset('adminsite')}}/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="{{asset('adminsite')}}/dist/js/adminlte.min.js"></script>
   <!-- toaster js -->
<script src="{{asset('adminsite')}}/dist/js/toastr.min.js"></script>
<!-- summernote -->
<script src="{{asset('adminsite')}}/dist/js/summernote-lite.min.js"></script>

  <!-- Toaster Script -->
  <script>
            @if(Session::has('messege'))
            var type ="{{Session::get('alert-type','info')}}"
            switch(type)
            {
                 case 'info':
                toastr.info("{{Session::get('messege')}}");
                break;
                case 'success':
                toastr.success("{{Session::get('messege')}}");
                break;
                case 'warning':
                toastr.warning("{{Session::get('messege')}}");
                break;
                case 'error':
                toastr.error("{{Session::get('messege')}}");
                break;
            }
            @endif        
        </script>
         
         <!-- DisQus Comment Script -->
         <script>
          $('#summernote').summernote({
            placeholder: 'Description',
            tabsize: 2,
            height: 100
          });
        </script>

          <!-- Data table Script -->
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

