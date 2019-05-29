<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width"/>
    <title>ُAyoonk-LOGIN</title>
    <link rel="icon" href="{{asset('imgs/logo.png')}}" type="image/png" />
    <link rel="stylesheet" href="{{asset('css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link href="https://fonts.googleapis.com/css?family=El+Messiri&display=swap" rel="stylesheet">

</head>
<body>
<br>
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
<!--**************************** LOGIN SECTION ******************************-->

<div class="middllle">

    <img src="{{asset('imgs/logo.png')}}" id="avatar">
    <div class="form signin">
        <h3>تسجيل الدخول</h3>
        <form>
            <div>
                <i class="far fa-user"></i>
                <input type="email" name="" class="inputbox" placeholder="أٍسم المستخدم">
            </div>
            <br>
            <div>
                <i class="fas fa-eye"></i>
                <input type="password" name="" class="inputbox pass" placeholder="كلمت المرور">
            </div> <br>
            <div>
                <button type="submit"> تسجيل</button>
            </div>
        </form> <br>
        <div class="forgot text-center">
            <a href="#">استرجاع كلمة المرور</a>
            <a href="#" class="newemail">أنشاء حساب جديد</a>

        </div>
    </div>
    <div class="form signup">
        <h3>أنشاء حساب</h3>
        <form>
            <div>
                <i class="far fa-user"></i>
                <input type="text" class="inputbox" placeholder="الاسم ">
            </div><br>
            <div>
                <i class="fas fa-phone-square"></i>
                <input type="text" name="" class="inputbox" placeholder="رقم التيلفون">
            </div><br>
            <div>
                <i class="fas fa-at"></i>
                <input type="email" name="" class="inputbox" placeholder="الأميل">
            </div>
            <br>
            <div>
                <i class="fas fa-eye"></i>
                <input type="password" name="" class="inputbox pass" placeholder="كلمت المرور">
            </div> <br>
            <div>
                <i class="fas fa-eye"></i>
                <input type="password" name="" class="inputbox pass" placeholder=" تأكيد كلمت المرور">
            </  div> <br>
            <div>
                <button type="submit"> تسجيل</button>
            </div>
        </form> <br>
        <div class="forgot text-center">
            <a href="#">استرجاع كلمة المرور</a>
            <a href="#" class="signinn">تسجيل الدخول</a>

        </div>
    </div>

</div>




<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
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
</body>
</html>
