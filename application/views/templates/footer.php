<!-- /.content-wrapper -->
<footer class="main-footer">
   <strong>Copyright &copy; <?= date('Y'); ?> Savira Catering.</strong>

   <div class="float-right d-none d-sm-inline-block">
      All rights reserved.
   </div>
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
   <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?= base_url('vendor/adminlte3/'); ?>plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?= base_url('vendor/adminlte3/'); ?>plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
   $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('vendor/adminlte3/'); ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Sparkline -->
<script src="<?= base_url('vendor/adminlte3/'); ?>plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?= base_url('vendor/adminlte3/'); ?>plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?= base_url('vendor/adminlte3/'); ?>plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?= base_url('vendor/adminlte3/'); ?>plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?= base_url('vendor/adminlte3/'); ?>plugins/moment/moment.min.js"></script>
<script src="<?= base_url('vendor/adminlte3/'); ?>plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?= base_url('vendor/adminlte3/'); ?>plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?= base_url('vendor/adminlte3/'); ?>plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?= base_url('vendor/adminlte3/'); ?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('vendor/adminlte3/'); ?>dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?= base_url('vendor/adminlte3/'); ?>dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url('vendor/adminlte3/'); ?>dist/js/demo.js"></script>
<!-- SweetAlert2 -->
<script src="<?= base_url('vendor/adminlte3/'); ?>plugins/sweetalert2/sweetalert2.all.min.js"></script>
<!-- bs-custom-file-input -->
<script src="<?= base_url('vendor/adminlte3/'); ?>plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- Toastr -->
<script src="<?= base_url('vendor/adminlte3/'); ?>plugins/toastr/toastr.min.js"></script>
<!-- Select2 -->
<script src="<?= base_url('vendor/adminlte3/'); ?>plugins/select2/js/select2.full.min.js"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="<?= base_url('vendor/adminlte3/'); ?>plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<!-- InputMask -->
<script src="<?= base_url('vendor/adminlte3/'); ?>plugins/moment/moment.min.js"></script>
<script src="<?= base_url('vendor/adminlte3/'); ?>plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>
<!-- date-range-picker -->
<script src="<?= base_url('vendor/adminlte3/'); ?>plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap color picker -->
<script src="<?= base_url('vendor/adminlte3/'); ?>plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?= base_url('vendor/adminlte3/'); ?>plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Bootstrap Switch -->
<script src="<?= base_url('vendor/adminlte3/'); ?>plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<!-- DataTables -->
<script src="<?= base_url('assets/'); ?>DataTables/DataTables-1.10.18/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets/'); ?>DataTables/DataTables-1.10.18/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url('assets/'); ?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url('assets/'); ?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?= base_url('assets/'); ?>DataTables/Buttons-1.5.6/js/dataTables.buttons.min.js"></script>
<script src="<?= base_url('assets/'); ?>DataTables/Buttons-1.5.6/js/buttons.bootstrap4.min.js"></script>
<script src="<?= base_url('assets/'); ?>DataTables/JSZip-2.5.0/jszip.min.js"></script>
<script src="<?= base_url('assets/'); ?>DataTables/pdfmake-0.1.36/pdfmake.min.js"></script>
<script src="<?= base_url('assets/'); ?>DataTables/pdfmake-0.1.36/vfs_fonts.js"></script>
<script src="<?= base_url('assets/'); ?>DataTables/Buttons-1.5.6/js/buttons.html5.min.js"></script>
<script src="<?= base_url('assets/'); ?>DataTables/Buttons-1.5.6/js/buttons.print.min.js"></script>
<script src="<?= base_url('assets/'); ?>DataTables/Buttons-1.5.6/js/buttons.colVis.min.js"></script>
<!-- OPTIONAL SCRIPTS -->
<script src="<?= base_url('vendor/adminlte3/'); ?>plugins/chart.js/Chart.min.js"></script>
<script src="<?= base_url('vendor/adminlte3/'); ?>dist/js/demo.js"></script>
<script src="<?= base_url('assets/js/'); ?>chart.js"></script>
<!-- my script configuration sweetalert 2 -->
<script src="<?= base_url('assets/js/myscript.js'); ?>"></script>
<!-- role access modifier -->
<script>
   $('.custom-file-input').on('change', function() {
      let fileName = $(this).val().split('\\').pop();
      $(this).next('.custom-file-label').addClass("selected").html(fileName);
   });

   $('.form-check-input').on('click', function() {
      const menuId = $(this).data('menu');
      const roleId = $(this).data('role');

      $.ajax({
         url: "<?= base_url('admin/changeaccess'); ?>",
         type: 'post',
         data: {
            menuId: menuId,
            roleId: roleId
         },
         success: function() {
            document.location.href = "<?= base_url('admin/roleaccess/'); ?>" + roleId;
         }
      });
   });
</script>

<script>
   $(function() {
      $("#nobtn").DataTable({
         "responsive": true,
         "autoWidth": false,
         lengthMenu: [
            [10, 25, 50, 100, -1],
            [10, 25, 50, 100, "All"]
         ]
      });
      $("#dtbl4nobtn").DataTable({
         "responsive": true,
         "autoWidth": false,
         lengthMenu: [
            [4, 10, 25, 50, 100, -1],
            [4, 10, 25, 50, 100, "All"]
         ]
      });
      var a = $("#example1, #example2, #example3, #example4").DataTable({
         "responsive": true,
         "autoWidth": false,
         buttons: ['copy', 'print', 'excel', 'pdfHtml5'],
         dom: "<'row'<'col-md-5'B><'col-md-4'l><'col-md-3'f>>" +
            "<'row'<'col-md-12'tr>>" +
            "<'row'<'col-md-5'i><'col-md-7'p>>",
         lengthMenu: [
            [5, 10, 25, 50, 100, -1],
            [5, 10, 25, 50, 100, "All"]
         ]
      });
      var b = $("#dtbl4").DataTable({
         "responsive": true,
         "autoWidth": false,
         buttons: ['copy', 'print', 'excel', 'pdfHtml5'],
         dom: "<'row'<'col-md-5'B><'col-md-4'l><'col-md-3'f>>" +
            "<'row'<'col-md-12'tr>>" +
            "<'row'<'col-md-5'i><'col-md-7'p>>",
         lengthMenu: [
            [4, 10, 25, 50, 100, -1],
            [4, 10, 25, 50, 100, "All"]
         ]
      });
      var c = $("#order").DataTable({
         "responsive": true,
         "autoWidth": false,
         buttons: ['print', 'excel', 'pdfHtml5'],
         dom: "<'row'<'col-md-5'B><'col-md-4'l><'col-md-3'f>>" +
            "<'row'<'col-md-12'tr>>" +
            "<'row'<'col-md-5'i><'col-md-7'p>>",
         lengthMenu: [
            [25, 50, 100, -1],
            [25, 50, 100, "All"]
         ]
      });
      var d = $("#rec").DataTable({
         "responsive": true,
         "autoWidth": false,
         lengthMenu: [
            [5, 10, 25, 50, 100, -1],
            [5, 10, 25, 50, 100, "All"]
         ]
      });
      a.buttons().container().appendTo('#table_wrapper .col-md-5:eq(0)');
      b.buttons().container().appendTo('#table_wrapper .col-md-5:eq(0)');
      c.buttons().container().appendTo('#table_wrapper .col-md-5:eq(0)');
      d.buttons().container().appendTo('#table_wrapper .col-md-5:eq(0)');
   });
</script>

<script>
   $(function() {
      //Initialize Select2 Elements
      $('.select2').select2()

      //Initialize Select2 Elements
      $('.select2bs4').select2({
         theme: 'bootstrap4'
      })

      //Datemask dd/mm/yyyy
      $('#datemask').inputmask('dd/mm/yyyy', {
         'placeholder': 'dd/mm/yyyy'
      })
      //Datemask2 mm/dd/yyyy
      $('#datemask2').inputmask('mm/dd/yyyy', {
         'placeholder': 'mm/dd/yyyy'
      })
      //Money Euro
      $('[data-mask]').inputmask()

      //Date range picker
      $('#reservationdate').datetimepicker({
         format: 'L'
      });
      //Date range picker
      $('#reservation').daterangepicker()
      //Date range picker with time picker
      $('#reservationtime').daterangepicker({
         timePicker: true,
         timePickerIncrement: 30,
         locale: {
            format: 'MM/DD/YYYY hh:mm A'
         }
      })
      //Date range as a button
      $('#daterange-btn').daterangepicker({
            ranges: {
               'Today': [moment(), moment()],
               'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
               'Last 7 Days': [moment().subtract(6, 'days'), moment()],
               'Last 30 Days': [moment().subtract(29, 'days'), moment()],
               'This Month': [moment().startOf('month'), moment().endOf('month')],
               'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            },
            startDate: moment().subtract(29, 'days'),
            endDate: moment()
         },
         function(start, end) {
            $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
         }
      )

      //Timepicker
      $('#timepicker').datetimepicker({
         format: 'LT'
      })

      //Bootstrap Duallistbox
      $('.duallistbox').bootstrapDualListbox()

      //Colorpicker
      $('.my-colorpicker1').colorpicker()
      //color picker with addon
      $('.my-colorpicker2').colorpicker()

      $('.my-colorpicker2').on('colorpickerChange', function(event) {
         $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
      });

      $("input[data-bootstrap-switch]").each(function() {
         $(this).bootstrapSwitch('state', $(this).prop('checked'));
      });

   })
</script>

<script type="text/javascript">
   $(document).ready(function() {
      bsCustomFileInput.init();
   });
</script>

<script type="text/javascript">
   $(document).ready(function() {
      $('#remember').click(function() {
         if ($(this).is(':checked')) {
            $('#current_password').attr('type', 'text');
            $('#new_password1').attr('type', 'text');
            $('#new_password2').attr('type', 'text');
         } else {
            $('#current_password').attr('type', 'password');
            $('#new_password1').attr('type', 'password');
            $('#new_password2').attr('type', 'password');
         }
      });
   });
</script>

<script type="text/javascript">
   $("#Menu").change(function() {
      // ambil nilai
      var C1 = $('#Menu option:selected').attr('C1');
      var C2 = $('#Menu option:selected').attr('C2');
      var C3 = $('#Menu option:selected').attr('C3');
      var DS = $('#Menu option:selected').attr('desc');

      if (C1 == "Weight") {
         var w = 10;
      } else if (C1 == "Medium") {
         var w = 5;
      } else if (C1 == "Light") {
         var w = 1;
      }

      if (C2 <= 100000) {
         var p = 25;
      } else if (C2 >= 101000 && C2 <= 150000) {
         var p = 20;
      } else if (C2 >= 151000) {
         var p = 10;
      }

      if (C3 == "Formal") {
         var ev = 10;
      } else if (C3 == "Semi Formal") {
         var ev = 7;
      } else if (C3 == "Casual") {
         var ev = 4;
      }

      // pindahkan nilai ke input
      $('#cr1').val(C1);
      $('#cr2').val(C2);
      $('#cr3').val(C3);
      $('#des').val(DS);
      $('#c1').val(w);
      $('#c2').val(p);
      $('#c3').val(ev);
   });
</script>

<script type="text/javascript">
   $("#mp_id").change(function() {
      // ambil nilai
      var P = $('#mp_id option:selected').attr('price');
      // pindahkan nilai ke input
      $('#bill').val(P);
   });
</script>

<!-- load c2 -->
<script type="text/javascript">
   $(document).ready(function() {
      $("#k2").change(function() {
         rec();
      });
   });

   function rec() {
      var k2 = $("#k2").val();
      $.ajax({
         url: "<?= base_url('catering/load_k2'); ?>",
         data: "k2=" + k2,
         success: function(data) {
            $("#rec tbody").html(data);
         }
      });
   }
</script>

<!-- load c4 -->
<script type="text/javascript">
   $(document).ready(function() {
      $("#k4").change(function() {
         rec1();
      });
   });

   function rec1() {
      var k4 = $("#k4").val();
      $.ajax({
         url: "<?= base_url('catering/load_k4'); ?>",
         data: "k4=" + k4,
         success: function(data) {
            $("#rec tbody").html(data);
         }
      });
   }
</script>

<!-- load c5 -->
<script type="text/javascript">
   $(document).ready(function() {
      $("#k5").change(function() {
         rec2();
      });
   });

   function rec2() {
      var k5 = $("#k5").val();
      $.ajax({
         url: "<?= base_url('catering/load_k5'); ?>",
         data: "k5=" + k5,
         success: function(data) {
            $("#rec tbody").html(data);
         }
      });
   }
</script>

<!-- load c6 -->
<script type="text/javascript">
   $(document).ready(function() {
      $("#k6").change(function() {
         rec3();
      });
   });

   function rec3() {
      var k6 = $("#k6").val();
      $.ajax({
         url: "<?= base_url('catering/load_k6'); ?>",
         data: "k6=" + k6,
         success: function(data) {
            $("#rec tbody").html(data);
         }
      });
   }
</script>

</body>

</html>