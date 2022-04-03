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
    <title>Xenox FX - Dashboard</title>
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
        <li><a href="/dashboard/promotionaltools">Promotional Tool</a></li>
        <li><a href="/dashboard/twofactor">2FA Security</a></li>
        <li><a href="/dashboard/logout"> Logout</a></li>
    </ul>
    </li>
    </ul>
    <div class="nav-right">
    <ul class="account-menu ml-3">
    <li class="icon"><a href=""><i class="las la-user"></i></a></li>
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
    <h2 class="page-title">Dashboard</h2>
    <ul class="page-breadcrumb">
    <li><a href="/">Home</a></li>
    <li>Dashboard</li>
    </ul>
    </div>
    </div>
    </div>
    </section>
    <div class="pt-120 pb-120">
    <div class="container">
    <div class="row justify-content-center">
    <div class="col-lg-12 pl-lg-5 mt-lg-0 mt-5">
    <div class="row mb-none-30">
    <div class="col-md-12 mb-4">
    <label>Referral Link</label>
    <div class="input-group">
    <input type="text" name="text" class="form-control" id="" value="https://xenoxfx.com/register/maradona" readonly="">
    <div class="input-group-append">
     <span class="input-group-text copytext copyBoard" id=""> <i class="mt-2 las la-copy"></i> </span>
    </div>
    </div>
    </div>
    <div class="col-xl-4 col-sm-6 mb-30">
    <div class="d-widget d-flex flex-wrap">
    <div class="col-8">
    <span class="caption">Deposit Wallet Balance</span>
    <h4 class="currency-amount">$50</h4>
    </div>
    <div class="col-4">
    <div class="icon ml-auto">
    <i class="mt-2 las la-dollar-sign"></i>
    </div>
    </div>
    </div>
    </div>
    <div class="col-xl-4 col-sm-6 mb-30">
    <div class="d-widget d-flex flex-wrap">
    <div class="col-8">
    <span class="caption">Interest Wallet Balance</span>
    <h4 class="currency-amount">$0</h4>
    </div>
    <div class="col-4">
    <div class="icon ml-auto">
    <i class="mt-2 las la-wallet"></i>
    </div>
    </div>
    </div>
    </div>
    <div class="col-xl-4 col-sm-6 mb-30">
    <div class="d-widget d-flex flex-wrap">
    <div class="col-8">
    <span class="caption">Total Invest</span>
    <h4 class="currency-amount">$0</h4>
    </div>
    <div class="col-4">
    <div class="icon ml-auto">
    <i class="mt-2 las la-cubes "></i>
    </div>
    </div>
    </div>
    </div>
    <div class="col-xl-4 col-sm-6 mb-30">
    <div class="d-widget d-flex flex-wrap">
    <div class="col-8">
    <span class="caption">Total Deposit</span>
    <h4 class="currency-amount">$0</h4>
    </div>
    <div class="col-4">
    <div class="icon ml-auto">
    <i class="mt-2 las la-credit-card"></i>
    </div>
    </div>
    </div>
    </div>
    <div class="col-xl-4 col-sm-6 mb-30">
    <div class="d-widget  d-flex flex-wrap">
    <div class="col-8">
    <span class="caption">Total Withdraw</span>
    <h4 class="currency-amount">$0</h4>
    </div>
    <div class="col-4">
    <div class="icon ml-auto">
    <i class="mt-2 las la-cloud-download-alt"></i>
    </div>
    </div>
    </div>
    </div>
    <div class="col-xl-4 col-sm-6 mb-30">
    <div class="d-widget  d-flex flex-wrap">
    <div class="col-8">
    <span class="caption">Referral Earnings</span>
    <h4 class="currency-amount">$0</h4>
    </div>
    <div class="col-4">
    <div class="icon ml-auto">
    <i class="mt-2 las la-user-friends"></i>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="row mt-50">
    <div class="col-lg-12">
    <div class="table-responsive--md">
    <table class="table style--two">
    <thead>
    <tr>
    <th>Date</th>
    <th>Transaction ID</th>
    <th>Amount</th>
    <th>Wallet</th>
    <th>Details</th>
    <th>Post Balance</th>
    </tr>
    </thead>
     <tbody>
    <tr>
    <td data-label="Date">17/03/2022</td>
    <td data-label="Transaction ID"><span class="text-primary">Q2KPN8RY9PM1</span></td>
    <td data-label="Amount">
    <span class="text-success">+ $50</span>
    </td>
    <td data-label="Wallet">
    <span class="badge badge-info">Deposit Wallet</span>
    </td>
    <td data-label="Details">You have got Sign Up Bonus</td>
    <td data-label="Post Balance"><span> $50</span></td>
    </tr>
    </tbody>
    </table>
    </div>
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
    <a href="/dashboard/dashboard"><img src="{{url('/images/logo.png')}}" alt="image"></a>
    <ul class="footer-short-menu d-flex flex-wrap justify-content-center mt-3">
    <li><a href="/dashboard/privacy">Privacy Policy</a></li>
    <li><a href="/dashbaord/terms">Terms &amp; Condition</a></li>
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