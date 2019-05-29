<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}"  dir="{{ LaravelLocalization::getCurrentLocaleDirection() }}" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width"/>
    <title>Ayoon</title>
    <link rel="icon" href="{{asset('imgs/logo.png')}}" type="image/png" />
    <link rel="stylesheet" href="{{asset('css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('css/slick-theme.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link href="https://fonts.googleapis.com/css?family=El+Messiri&display=swap" rel="stylesheet">
</head>
<body>
<div class="first-header">
    <div class="container">
        <i class="fas fa-shopping-basket"></i>
    </div>
</div>
<div class="logo">
    <a href="/"><img src="{{asset('imgs/logo.png')}}" alt=""></a>
</div>
<nav class="navbar navbar-expand-lg navbar-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <!--    <span class="navbar-toggler-icon"></span>-->
        <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav m-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Shop
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    @foreach($depts as $dept)

                        <a class="dropdown-item" href="/products/{{$dept->id}}">{{$dept->titleEn}}</a>

                    @endforeach
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/brand">Brand</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/about">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/contact">Contact</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="/log">LOGIN</a>
            </li>
        </ul>
    </div>
</nav>


@yield('content')




<footer>
    <hr>
    <div class="container">
        <h5>JOIN OUR NEWSLETTER</h5>
        <div class="row">
            <div class="col-md-4 col-xs-12">
                <input type="email" placeholder="Enter your email here*">
                <button>Subscribe Now</button>
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-2 col-xs-4">
                <ul>
                    <li><a href="#">Stockists</a></li>
                    <li><a href="/about">About</a></li>
                    <li><a href="/contact">Contact</a></li>
                </ul>
            </div>
            <div class="col-md-2 col-xs-4">
                <ul>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Shipping &amp; Returns</a></li>
                    <li><a href="#">Store Policy</a></li>
                </ul>
            </div>
            <div class="col-md-2 col-xs-4">
                <ul>
                    @foreach($socials as $social)
{{--                        <a target="_blank" href="{{'/'.$social->link}}"><i class="fa fa-{{$social->name}}" aria-hidden="true"></i></a>--}}
                    <li><a href="{{'/'.$social->link}}">{{$social->name}}</a></li>
                    @endforeach


                </ul>
            </div>
        </div>
        <br><br>
        <div class="copy-write text-center">
            <p>Powerd by <b>Orange Software</b></p>
        </div>
    </div>
</footer>


<a href="/contact" id="message-us" title="messageme"></a>

</body>
<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/slick.min.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script>
    $('.showone').click(function(){
        $('.view-info').slideToggle();
    });
    $('.showtwo').click(function(){
        $('.view-info2').slideToggle();
    });
    $('.showthree').click(function(){
        $('.view-info3').slideToggle();
    });

</script>
<script>
    $('.newemail').click(function(){
        $('.signup').show();
        $('.signin').hide();
    })

    $('.signinn').click(function(){
        $('.signin').show();
        $('.signup').hide();
    })


</script>

</html>
</html>
