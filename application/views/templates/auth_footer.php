<!-- jQuery -->
<script src="<?= base_url('vendor/adminlte3/'); ?>plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('vendor/adminlte3/'); ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('vendor/adminlte3/'); ?>dist/js/adminlte.min.js"></script>
<script type="text/javascript">
   $(document).ready(function() {
      $('#remember').click(function() {
         if ($(this).is(':checked')) {
            $('#password').attr('type', 'text');
            $('#password1').attr('type', 'text');
            $('#password2').attr('type', 'text');
         } else {
            $('#password').attr('type', 'password');
            $('#password1').attr('type', 'password');
            $('#password2').attr('type', 'password');
         }
      });
   });
</script>
</body>

</html>