<!-- jQuery 2.1.4 -->


<script src="{{ URL('public/assets/plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>

<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.5 -->
<script src="{{ URL('public/assets/bootstrap/js/bootstrap.min.js') }}"></script>


<!-- FastClick -->{{-- 
<script src="{{ URL('public/assets/plugins/fastclick/fastclick.min.js') }}"></script> --}}
<!-- App -->
<script src="{{ URL('public/assets/dist/js/app.min.js') }}"></script>
@yield('javascripts')
