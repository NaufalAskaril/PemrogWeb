​​​​​<div style="bottom:0;background: url('foto/bgbawah.webp');width: 100%;height: 400px;background-size: 100% 100%;">
</div>
<script src="assets/home/js/materialize.min.js"></script>
<script src="assets/home/js/bootstrap.min.js"></script>
<script src="assets/home/js/jquery.meanmenu.min.js"></script>
<script src="assets/home/js/jquery.mixitup.js"></script>
<script src="assets/home/js/jquery.counterup.min.js"></script>
<script src="assets/home/js/waypoints.min.js"></script>
<script src="assets/home/js/wow.min.js"></script>
<script src="assets/home/js/venobox.min.js"></script>
<script src="assets/home/js/owl.carousel.min.js"></script>
<script src="assets/home/js/simplePlayer.js"></script>
<script src="assets/home/js/main.js"></script>
<script src="assets/home/js/sweetalert2.all.min.js"></script>
<script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.print.min.js"></script>
<script>
    feather.replace({
        'aria-hidden': 'true'
    });
    $(".togglePassword").click(function(e) {
        e.preventDefault();
        var type = $(this).parent().parent().find(".password").attr("type");
        console.log(type);
        if (type == "password") {
            // $("svg.feather.feather-eye").replaceWith(feather.icons["eye-off"].toSvg());
            $(this).parent().parent().find("svg.feather.feather-eye").replaceWith(feather.icons["eye-off"].toSvg());
            $(this).parent().parent().find(".password").attr("type", "text");
        } else if (type == "text") {
            // $("svg.feather.feather-eye-off").replaceWith(feather.icons["eye"].toSvg());
            $(this).parent().parent().find("svg.feather.feather-eye-off").replaceWith(feather.icons["eye"].toSvg());
            $(this).parent().parent().find(".password").attr("type", "password");
        }
    });
</script>
<script>
    $(function() {
        $(".modalloginbuka").on('click', function() {
            $('.modaldaftar').modal('hide');
            $('.modallogin').modal('show');
        });
    });
    $(function() {
        $(".modaldaftarbuka").on('click', function() {
            $('.modallogin').modal('hide');
            $('.modaldaftar').modal('show');
        });
    });
</script>
</body>

</html>