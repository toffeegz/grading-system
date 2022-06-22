@section('page-script')
<script>
    var lastScrollTop = 0;
    $(window).scroll(function(event){
    var st = $(this).scrollTop();
    if (st > lastScrollTop){
        // downscroll code
        console.log('down');
    } else {
        // upscroll code
        console.log('up');

    }
    lastScrollTop = st;
    });
</script>
@endsection