<!DOCTYPE html>
<html lang="en">
 
  @include('admins.layout._head')

  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      @include('admins.layout._navigation')

      @include('admins.layout._sidebar')

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">

        @include('admins.layout._alert')
      
        @yield('content')

      </div><!-- /.content-wrapper -->
              
      @include('admins.layout._footer')

      @include('admins.layout._javascript')

      <!-- ClickDesk Live Chat Service for websites -->
      <!-- <script type='text/javascript'>
      var _glc =_glc || []; _glc.push('all_ag9zfmNsaWNrZGVza2NoYXRyEgsSBXVzZXJzGICAoIzoj4IJDA');
      var glcpath = (('https:' == document.location.protocol) ? 'https://my.clickdesk.com/clickdesk-ui/browser/' : 
      'http://my.clickdesk.com/clickdesk-ui/browser/');
      var glcp = (('https:' == document.location.protocol) ? 'https://' : 'http://');
      var glcspt = document.createElement('script'); glcspt.type = 'text/javascript'; 
      glcspt.async = true; glcspt.src = glcpath + 'livechat-new.js';
      var s = document.getElementsByTagName('script')[0];s.parentNode.insertBefore(glcspt, s);
      </script> -->
      <!-- End of ClickDesk -->


      <!--Start of Tawk.to Script-->
     <!--  <script type="text/javascript">
      var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
      (function(){
      var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
      s1.async=true;
      s1.src='https://embed.tawk.to/5856bc7fe7588f1212451794/default';
      s1.charset='UTF-8';
      s1.setAttribute('crossorigin','*');
      s0.parentNode.insertBefore(s1,s0);
      })();
      </script> -->
      <!--End of Tawk.to Script-->

    </div>
  </body>
</html>
