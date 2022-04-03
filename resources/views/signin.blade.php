<html lang="en"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xenox FX - Sign In</title>
    <link rel="stylesheet" href="{{url('/bootstrap/bootstrap.css')}}">
    <link rel="stylesheet" href="{{url('/css/welcome.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    </head>
    <body>

    <div class="full-wh">
    
    <div class="bg-animation">
    <div id="stars"></div>
    <div id="stars2"></div>
    <div id="stars3"></div>
    <div id="stars4"></div>
    </div>
    </div>
    <div class="page-wrapper">
    <header class="header animated fadeInDown menu-fixed">
    <div class="header__bottom">
    <div class="container">
    <nav class="navbar navbar-expand-xl p-0 align-items-center">
    <a class="site-logo site-title" href="/"><img src="{{url('/images/logo.png')}}" alt="site-logo"></a>
    <ul class="account-menu responsive-account-menu ml-3">
    <li class="icon"><a href="/signin"><i class="fa fa-user"></i></a></li>
    </ul>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="menu-toggle"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav main-menu ml-auto">
    <li> <a href="/">Home</a></li>
    <li><a href="/plan">Plan</a></li>
    <li><a href="/about">About</a></li>
    <li><a href="/blog">Blog</a></li>
    <li><a href="/contact">Contact</a></li>
    </ul>
    <div class="nav-right">
    <ul class="account-menu ml-3">
    <li class="icon"><a href="/signin"><i class="fa fa-user"></i></a></li>
    </ul>
    <select class="select d-inline-block w-auto ml-xl-3 langSel">
    <option value="en" selected="">English</option>
    <option value="fr">French</option>
    <option value="es">Spanish</option>
    </select>
    </div>
    </div>
    </nav>
    </div>
    </div>
    </header>
    
    
    <div class="account-section bg_img" data-background="{{url('/images/5fce3a113b6d91607350801.jpg')}}" style="background-image: url({{url('/images/5fce3a113b6d91607350801.jpg')}}">
    <div class="container">
    <div class="row justify-content-center">
    <div class="col-xl-5 col-lg-7">
    <div class="account-card">
    <div class="account-card__header bg_img overlay--one" data-background="{{url('/images/5fce3a1188a861607350801.jpg')}}" style="background-image: url({{url('/images/5fce3a1188a861607350801.jpg')}}">
    <h2 class="section-title">Welcome To <span class="base--color">Xenox FX</span></h2>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus distinctio deserunt impedit similique debitis voluptatum enim.</p>
    </div>
    <div class="account-card__body">
    <form action="" class="mt-4" method="post">
    <input type="hidden" name="" value=""> <div class="form-group">
    <label>User Name</label>
    <input type="text" class="form-control" name="username" placeholder="Enter user name" required="">
    </div>
    <div class="form-group">
    <label>Password</label>
    <input type="password" class="form-control" name="password" placeholder="Enter password" required="">
    </div>
    <div class="form-group d-flex justify-content-center">
    </div>
    <div class="form-group">
    <div style="height: 46px; line-height: 46px; width:100%; text-align: center; background-color: #003; color: #CCA354!important; font-size: 26px; font-weight: bold; letter-spacing: 20px; font-family: 'Henny Penny', cursive;  -webkit-user-select: none; -moz-user-select: none;-ms-user-select: none;user-select: none;  display: flex; justify-content: center;" class="captcha">
        <span style="    float:left;     -webkit-transform: rotate(-42deg);">5</span>
        <span style="    float:left;     -webkit-transform: rotate(1deg);">0</span>
        <span style="    float:left;     -webkit-transform: rotate(5deg);">2</span>
        <span style="    float:left;     -webkit-transform: rotate(20deg);">4</span>
        <span style="    float:left;     -webkit-transform: rotate(57deg);">9</span>
        <span style="    float:left;     -webkit-transform: rotate(49deg);">6</span>
    </div>
    <input type="hidden" name="captcha_secret" value=""> </div>
    <div class="form-group">
    <input type="text" name="captcha" class="form-control" placeholder="Enter code" autocomplete="off" required="">
    </div>
    <div class="mt-3">
    <button type="submit" class="cmn-btn">Login Now</button>
    </div>
    <div class="form-row mt-2">
    <div class="col-sm-6">
    <div class="form-group form-check pl-0">
    <p class="f-size-14">Forgot Password? <a href="/reset" class="base--color">Reset Now</a></p>
    </div>
    </div>
    <div class="col-sm-6 text-sm-right">
    <p class="f-size-14">Haven't an account? <a href="/register" class="base--color">Sign Up</a></p>
    </div>
    </div>
    </form>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    
    
    <footer class="footer bg_img" data-background="{{url('/images/5fce39681ce6b1607350632.jpg')}}" style="background-image: url({{url('/images/5fce39681ce6b1607350632.jpg')}}">
    <div class="footer__top">
    <div class="container">
    <div class="row justify-content-center">
    <div class="col-lg-12 text-center">
    <a href="/"><img src="{{url('/images/logo.png')}}" alt="image"></a>
    <ul class="footer-short-menu d-flex flex-wrap justify-content-center mt-3">
    <li><a href="/dashboard/privacy">Privacy Policy</a></li>
    <li><a href="/dashboard/terms">Terms &amp; Condition</a></li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    <div class="footer__bottom">
    <div class="container">
    <div class="row">
    <div class="col-md-6 text-md-left text-center">
    <p></p><p>© 2022 <a href="/" class="base--color">Xenox FX</a>. All rights reserved</p><p></p>
    </div>
    <div class="col-md-6">
    <ul class="social-link-list d-flex flex-wrap justify-content-md-end justify-content-center">
    <li><a href=""><i class="fa fa-facebook-f"></i></a></li>
    <li><a href=""><i class="fa fa-twitter"></i></a></li>
    <li><a href=""><i class="fa fa-pinterest-p"></i></a></li>
    <li><a href=""><i class="fa fa-linkedin-in"></i></a></li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    </footer>
    
    </div> 
    
    
    
    
     </body>
     </html>