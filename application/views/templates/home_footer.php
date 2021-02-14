<!--JavaScript at end of body for optimized loading-->
<script type="text/javascript" src="<?= base_url('assets/'); ?>js/materialize.min.js"></script>

<script>
   const sideNav = document.querySelectorAll('.sidenav');
   M.Sidenav.init(sideNav);

   const slider = document.querySelectorAll('.slider');
   M.Slider.init(slider, {
      indicators: false,
      height: 500,
      transition: 600,
      interval: 4000
   });

   const parallax = document.querySelectorAll('.parallax');
   M.Parallax.init(parallax);

   const materialbox = document.querySelectorAll('.materialboxed');
   M.Materialbox.init(materialbox);

   const scroll = document.querySelectorAll('.scrollspy');
   M.ScrollSpy.init(scroll, {
      scrollOffset: 50
   });

   const collapsible = document.querySelectorAll('.collapsible');
   M.Collapsible.init(collapsible);
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script type="text/javascript">
   $(document).ready(function() {
      var offset = 250;
      var duration = 800;

      $(window).scroll(function() {
         if ($(this).scrollTop() > offset) {
            $('#top').fadeIn(duration);
         } else {
            $('#top').fadeOut(duration);
         }
      });

      $('#top').click(function() {
         $("html, body").animate({
            scrollTop: 0
         }, duration);
      });
   });
</script>

</body>

</html>