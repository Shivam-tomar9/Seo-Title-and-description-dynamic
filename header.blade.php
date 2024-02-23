<?php   
   if(!$pagename = basename(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH))){
    $pagename='';
   }

use App\Models\Product;
    $scodata= Product::where('slug', $pagename)->first();

    if(!isset($scodata)){
        $scodata = DB::table('meta_information')->where('url',url()->current())->first();
    }
 ?>
<!DOCTYPE html>
  <html lang="en">
  <head>
  <meta name="google-site-verification" content="Q7pB2k5uc2v4NaH02BbJSOQL9EJlpLAv7rJ2N2Yv4A0" />
    @yield('meta')
    <?php
if ($scodata) {
    echo "<title>";
    if (isset($scodata)) {
        echo $scodata->seo_title;
    }
    echo "</title>";
} else {
    echo "<title>";
    if ($pagename == '') {
        echo "Tax Consulting || Consultia";
    }
    echo "</title>";
}
?>

<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta name="description" content="<?php if(isset($scodata)){ echo strip_tags($scodata->seo_description); } ?>">
<!-- <meta name="keywords" content="<?php if(isset($scodata)){ echo $scodata->metakeyword; } ?>"> -->
<link rel="icon" type="image/ico" href="favicon.ico">
<link rel="canonical" href="<?php echo Request::url();?>" />
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">
<!-- <title>Tax Consulting || Consultia</title> -->
<link rel="shortcut icon" href="{{asset('assets/img/icons/fab3.png')}}" type="image/x-icon">
<link rel="stylesheet" href="{{asset('assets/css/plugins/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/plugins/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/plugins/aos.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/plugins/fontawesome.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/plugins/modal-video.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/plugins/slick-slider.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/plugins/nice-select.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/plugins/fonts.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/master.css')}}">
<link rel="stylesheet" href="{{ asset('assets/css/parsley.css')}}">
<link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
<link rel="stylesheet" href="{{ asset('assets/css/script.js')}}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css" rel="stylesheet" />
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
<link rel="stylesheet" href="{{asset('./assets/css/master.css')}}">
<link rel="stylesheet" href="/path/to/countrySelect.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="{{asset('assets/js/plugins/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/aos.js')}}"></script>
<script src="{{asset('assets/js/plugins/fontawesome.js')}}"></script>
<script src="{{asset('assets/js/plugins/slick-slider.js')}}"></script>
<script src="{{asset('assets/js/plugins/mesonry.js')}}"></script>
<script src="{{asset('assets/js/plugins/jquery.nice-select.js')}}"></script>
<script src="{{asset('assets/js/plugins/jquery.countup.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/jquery-modal-video.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/popper.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script defer async src='https://cdn.trustindex.io/loader.js?9c3703e200b49175bc5675bb1bd'></script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>
