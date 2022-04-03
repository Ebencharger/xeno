<html lang="en"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{url('/bootstrap/bootstrap.css')}}">
    <link rel="stylesheet" href="{{url('/css/welcome.css')}}">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="{{url('/css/line-awesome.css')}}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <title>Xenox FX - Two Factor</title>
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
    
        <header class="header">
            <div class="header__bottom">
            <div class="container">
            <nav class="navbar navbar-expand-xl p-0 align-items-center">
                <a class="site-logo site-title" href="/dashboard/dashboard"><img src="{{ url('/images/logo.png')}}" alt="site-logo"></a>
            <ul class="account-menu responsive-account-menu ml-3">
            <li class="icon"><a href="/dashboard/dashboard"><i class="las la-user"></i></a></li>
            </ul>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
            <span class="menu-toggle"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav main-menu ml-auto">
                <li> <a href="/dashboard/dashboard">Dashboard</a></li>
                <li><a href="/dashboard/plan">Investment</a></li>
                <li><a href="/dashboard/deposit">Deposit</a></li>
                <li><a href="/dashboard/withdraw">Withdraw</a></li>
                <li><a href="/dashboard/transaction">Transactions</a></li>
                <li class="menu_has_children"><a href="#0">Referrals</a>
                <ul class="sub-menu">
                <li><a href="/dashboard/referraluser">Referred Users</a></li>
                <li><a href="/dashboard/referralcommission">Referral Commissions</a></li>
                </ul>
                </li>
                <li class="menu_has_children"><a href="">Account</a>
                <ul class="sub-menu">
                <li><a href="/dashboard/profilesetting">Profile Setting</a></li>
                <li><a href="/dashboard/transferbalance">Transfer Balance</a></li>
                <li><a href="/dashboard/changepassword">Change Password</a></li>
                <li><a href="/dashboard/ticket">
                Support Ticket</a></li>
                <li><a href="/dashboard/promotionltools">Promotional Tool</a></li>
                <li><a href="/dashboard/twofactor">2FA Security</a></li>
                <li><a href="/dashboard/logout"> Logout</a></li>
            </ul>
            </li>
            </ul>
            <div class="nav-right">
            <ul class="account-menu ml-3">
            <li class="icon"><a href="/dashboard/dashboard"><i class="las la-user"></i></a></li>
            </ul>
            <select class="select d-inline-block w-auto ml-xl-3 langSel">
            <option value="en" selected="">Eng#lish</option>
            <option value="fr">French</option>
            <option value="es">Spanish</option>
            </select>
            </div>
            </div>
            </nav>
            </div>
            </div>
            </header>
            
    
    
            <section class="inner-hero bg_img" data-background="{{ url('/images/5fce3837032a51607350327.jpg')}}" style="background-image: url({{ url('/images/5fce3837032a51607350327.jpg')}})">
    <div class="container">
    <div class="row">
    <div class="col-lg-6">
    <h2 class="page-title">Two Factor</h2>
    <ul class="page-breadcrumb">
    <li><a href="/dashboard/dashboard">Home</a></li>
    <li>Two Factor</li>
    </ul>
    </div>
    </div>
    </div>
    </section>
    
    <section class="cmn-section">
    <div class="container">
    <div class="row dashboard-content">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
    <div class="dashboard-inner-content">
    <div class="row">
    <div class="col-lg-6 col-md-6">
    <div class="card">
    <h5 class="card-header">Two Factor Authenticator</h5>
    <div class="card-body">
    <div class="form-group">
    <div class="input-group">
    <input type="text" name="key" value="IZM3FLKVLW43M5BV" class="form-control form-control-lg" id="referralURL" readonly="">
    <div class="input-group-append">
    <span class="input-group-text copytext copyBoard" id="copyBoard"> <i class="fa fa-copy"></i> </span>
    </div>
    </div>
    </div>
    <div class="form-group mx-auto text-center">
    <img class="mx-auto" src="https://chart.googleapis.com/chart?chs=200x200&amp;chld=M|0&amp;cht=qr&amp;chl=otpauth%3A%2F%2Ftotp%2Fmaradona%40Xenox+FX%3Fsecret%3DIZM3FLKVLW43M5BV">
    </div>
    <div class="form-group mx-auto text-center">
    <a href="#0" class="btn btn-lg mt-3 mb-1 cmn-btn" data-toggle="modal" data-target="#enableModal">Enable Two Factor Authenticator</a>
    </div>
    </div>
    </div>
    </div>
    <div class="col-lg-6 col-md-6">
    <div class=" card">
    <h5 class="card-header">Google Authenticator</h5>
    <div class=" card-body">
    <h5 class="text-uppercase">Use Google Authenticator to Scan the QR code or use the code</h5>
    <hr>
    <p>Google Authenticator is a multifactor app for mobile devices. It generates timed codes used during the 2-step verification process. To use Google Authenticator, install the Google Authenticator application on your mobile device.</p>
    <a class="btn btn-md mt-3 cmn-btn" href="https://play.google.com/store/apps/details?id=com.google.android.apps.authenticator2&amp;hl=en" target="_blank">DOWNLOAD APP</a>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </section>
    
    <div id="enableModal" class="modal fade" role="dialog">
    <div class="modal-dialog ">
    
    <div class="modal-content modal-content-bg">
    <div class="modal-header">
    <h4 class="modal-title">Verify your OTP</h4>
    <button type="button" class="close" data-dismiss="modal">×</button>
    </div>
    <form action="" method="POST" class="register">
    <div class="form-group">
    <input type="text" required class="form-control" name="code" placeholder="Enter Google Authenticator Code">
    </div>
    </div>
    <div class="modal-footer">
    <button type="button" class="btn btn-danger action-btn" data-dismiss="modal">Close</button>
    <button type="submit" class="btn btn-primary action-btn">Verify</button>
    </div>
    </form>
    </div>
    </div>
    </div>
    
    <div id="disableModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
     
    <div class="modal-content modal-content-bg">
    <div class="modal-header">
    <h4 class="modal-title">Verify your OTP disable</h4>
    <button type="button" class="close" data-dismiss="modal">×</button>
    </div>
    <form action="" method="POST" class="register">
    <div class="form-group">
    <input type="text" class="form-control" required name="code" placeholder="Enter Google Authenticator Code">
    </div>
    </div>
    <div class="modal-footer">
    <button type="button" class="btn btn-danger action-btn" data-dismiss="modal">Close</button>
    <button type="submit" class="btn btn-primary action-btn">Verify</button>
    </div>
    </form>
    </div>
    </div>
    </div>
    
    <footer class="footer bg_img" data-background="{{ url('/images/5fce39681ce6b1607350632.jpg')}}" style="background-image: url({{ url('/images/5fce39681ce6b1607350632.jpg')}})">
    <div class="footer__top">
    <div class="container">
    <div class="row justify-content-center">
    <div class="col-lg-12 text-center">
        <a href="/dashboard/dashboard"><img src="{{ url('/images/logo.png')}}" alt="image"></a>
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
    <p>© 2022 <a href="/dashboard/dashboard" class="base--color">Xenox FX</a>. All rights reserved</p>
    </div>
    <div class="col-lg-6">
    <ul class="social-link-list d-flex flex-wrap justify-content-md-end justify-content-center">
    <li><a href=""><i class="lab la-facebook-f"></i></a></li>
    <li><a href=""><i class="lab la-twitter"></i></a></li>
    <li><a href=""><i class="lab la-pinterest-p"></i></a></li>
    <li><a href=""><i class="lab la-linkedin-in"></i></a></li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    </footer>
    
    </div> 
     </body>
     </html>