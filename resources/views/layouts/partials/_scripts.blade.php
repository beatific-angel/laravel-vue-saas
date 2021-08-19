
<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/{{ env('TAWKTO_ID') }}/default';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
 </script>
    <!--End of Tawk.to Script-->
<!-- Argon Scripts -->
<!-- Core -->
{{-- <script src="{{ asset('js/app.js') }}"></script> --}}

<!-- ======== Java Script ======== -->
<script src="{{ asset('saas/js/plugins/jquery-3.3.1.min.js') }}"></script>
<!-- Bootstrap 4.1.3 -->
<script src="{{ asset('saas/js/plugins/popper.min.js') }}"></script>
<script src="{{ asset('saas/js/bootstrap.min.js') }}"></script>
<!-- Slick Slider -->
<script src="{{ asset('saas/js/plugins/slick.min.js') }}"></script>
<!-- Couner Up-->
<script src="{{ asset('saas/js/plugins/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('saas/js/plugins/jquery.counterup.min.js') }}"></script>
<!-- Wow JS -->
<script src="{{ asset('saas/js/plugins/wow.min.js') }}"></script>
<!-- Magnific Popup-->
<script src="{{ asset('saas/js/plugins/magnific-popup.min.js') }}"></script>
<!-- Main Js-->
<script src="{{ asset('saas/js/main.js') }}"></script>
<!-- Scripts -->
@yield('scripts')