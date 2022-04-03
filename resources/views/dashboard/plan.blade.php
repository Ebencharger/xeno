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
    <title>Xenox FX - Investment Plan</title>
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
    <a class="site-logo site-title" href="/dashboard/dashboard"><img src="{{url('/images/logo.png')}}" alt="site-logo"></a>
    <ul class="account-menu responsive-account-menu ml-3">
    <li class="icon"><a href="{{url('/images/dashboard')}}"><i class="las la-user"></i></a></li>
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
        <li><a href="/dashboard/promotionaltools">Promotional Tool</a></li>
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
    
    
    <section class="inner-hero bg_img" data-background="{{url('/images/5fce3837032a51607350327.jpg')}}" style="background-image: url({{url('/images/5fce3837032a51607350327.jpg')}}">
    <div class="container">
    <div class="row">
    <div class="col-lg-6">
    <h2 class="page-title">Investment Plan</h2>
    <ul class="page-breadcrumb">
    <li><a href="/dashboard">Home</a></li>
    <li>Investment Plan</li>
    </ul>
    </div>
    </div>
    </div>
    </section>
    <section class="pt-60 pb-120">
    <div class="container">
    <div class="row mb-none-30 justify-content-center">
    <div class="col-md-12">
    <div class="right float-right mb-5">
    <a href="/logs" class="btn cmn-btn">
    My Investments
    </a>
    </div>
    </div>
    <div class="col-lg-3 mb-30">
    <div class="package-card text-center bg_img" data-background="{{url('/images/bg-4.png')}}" style="background-image: url({{url('/images/bg-4.png')}})">
    <h4 class="package-card__title base--color mb-2">Starter</h4>
    <ul class="package-card__features mt-4">
    <li>Return 7%</li>
    <li>
    Every Day
    </li>
    <li>For 7 Day </li>
     <li>
    Total 49%
    + <span class="badge badge-success">Capital</span>
    </li>
    </ul>
    <div class="package-card__range mt-5 base--color"> $250 - $2900
    </div>
    <a href="" data-toggle="modal"  class="cmn-btn btn-md mt-4 investButton">Invest Now</a>
    </div>
    </div>
    <div class="col-lg-3 mb-30">
    <div class="package-card text-center bg_img" data-background="{{url('/images/bg-4.png')}}" style="background-image: url({{url('/images/bg-4.png')}}">
    <h4 class="package-card__title base--color mb-2">Standard</h4>
    <ul class="package-card__features mt-4">
    <li>Return 4%</li>
    <li>
    Every Day
    </li>
    <li>For 14 Day </li>
    <li>
    Total 56%
    + <span class="badge badge-success">Capital</span>
    </li>
    </ul>
    <div class="package-card__range mt-5 base--color"> $3000 - $10000
    </div>
    <a href="" data-toggle="modal"  class="cmn-btn btn-md mt-4 investButton">Invest Now</a>
    </div>
    </div>
    <div class="col-lg-3 mb-30">
    <div class="package-card text-center bg_img" data-background="{{url('/images/bg-4.png')}}" style="background-image: url({{url('/images/bg-4.png')}})">
    <h4 class="package-card__title base--color mb-2">Advanced</h4>
    <ul class="package-card__features mt-4">
    <li>Return 5%</li>
    <li>
    Every Day
    </li>
    <li>For 30 Day </li>
    <li>
    Total 150%
    + <span class="badge badge-success">Capital</span>
    </li>
    </ul>
    <div class="package-card__range mt-5 base--color"> $11000 - $50000
    </div>
    <a href="javascript:void(0)" data-toggle="modal" data-target="#depoModal"  class="cmn-btn btn-md mt-4 investButton">Invest Now</a>
    </div>
    </div>
    <div class="col-lg-3 mb-30">
    <div class="package-card text-center bg_img" data-background="{{url('/images/bg-4.png')}}" style="background-image: url({{url('/images/bg-4.png')}}">
    <h4 class="package-card__title base--color mb-2">Elites</h4>
    <ul class="package-card__features mt-4">
    <li>Return 5%</li>
    <li>
    Every Day
    </li>
    <li>For 365 Day </li>
    <li>
    Total 1825%
    </li>
    </ul>
    <div class="package-card__range mt-5 base--color"> $80000 - $150000
    </div>
    <a href="" data-toggle="modal" data-target="#depoModal" class="cmn-btn btn-md mt-4 investButton">Invest Now</a>
    </div>
    </div>
    <div class="col-lg-3 mb-30">
    <div class="package-card text-center bg_img" data-background="{{url('/images/bg-4.png')}}" style="background-image: url({{url('/images/bg-4.png')}})">
    <h4 class="package-card__title base--color mb-2">Kings</h4>
    <ul class="package-card__features mt-4">
    <li>Return 10%</li>
    <li>
    Every Day
    </li>
    <li>For 365 Day </li>
    <li>
    Total 3650%
    </li>
    </ul>
    <div class="package-card__range mt-5 base--color"> $155000 - $200000
    </div>
    <a href="" data-toggle="modal" data-target="#depoModal"  class="cmn-btn btn-md mt-4 investButton">Invest Now</a>
    </div>
    </div>
    <div class="col-lg-3 mb-30">
    <div class="package-card text-center bg_img" data-background="{{url('/images/bg-4.png')}}" style="background-image: url({{url('/images/bg-4.png')}})">
    <h4 class="package-card__title base--color mb-2">Gold</h4>
    <ul class="package-card__features mt-4">
    <li>Return 15%</li>
    <li>
    Every Week
    </li>
     <li>For Lifetime </li>
    <li> Lifetime Earning
    </li>
    </ul>
    <div class="package-card__range mt-5 base--color"> $200000 - $500000
    </div>
    <a href="" data-toggle="modal" data-target="#depoModal"  class="cmn-btn btn-md mt-4 investButton">Invest Now</a>
    </div>
    </div>
    </div>
    </div>
    </section>
    
    <div class="modal fade" id="depoModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content modal-content-bg">
    <div class="modal-header">
    <strong class="modal-title text-white" id="ModalLabel">
    Confirm to invest on <span class="planName"></span>
    </strong>
    <a href="" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">×</span>
    </a>
    </div>
    <form action="/dahboard/plans" method="post" class="register">
  <div class="modal-body">
    <div class="form-group">
    <h6 class="text-center investAmountRenge"></h6>
    <p class="text-center mt-1 interestDetails"></p>
    <p class="text-center interestValidaty"></p>
    <div class="form-group ">
    <strong class="text-white mb-2 d-block">Select wallet</strong>
    <select class="form-control" name="wallet_type">
    <option value="deposit_wallet">Deposit Wallet - $50</option>
    <option value="interest_wallet">Interest Wallet -$0</option>
    <option value="checkout">Checkout</option>
    </select>
    </div>
    <input type="hidden" name="plan_id" class="plan_id">
    <div class="form-group">
    <strong class="text-white mb-2 d-block">Invest Amount</strong>
    <input type="text" class="form-control fixedAmount" id="fixedAmount" name="amount" value="">
    </div>
    </div>
    </div>
    <div class="modal-footer">
    <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
    <button type="submit" class="btn cmn-btn">Yes</button>
    </div>
    </form>
    </div>
    </div>
    </div>
    
    <footer class="footer bg_img" data-background="{{url('/images/5fce39681ce6b1607350632.jpg')}}" style="background-image: url({{url('/images/5fce39681ce6b1607350632.jpg')}})">
    <div class="footer__top">
    <div class="container">
    <div class="row justify-content-center">
    <div class="col-lg-12 text-center">
    <a href="/dahboard/dashboard"><img src="{{url('/images/logo.png')}}" alt="image"></a>
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