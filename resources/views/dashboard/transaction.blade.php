<html lang="en"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xenox FX - Deposit Wallet Transactions</title>
    <link rel="stylesheet" href="{{url('/bootstrap/bootstrap.css')}}">
    <link rel="stylesheet" href="{{url('/css/welcome.css')}}">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="{{url('/css/line-awesome.css')}}">
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
    
    
    <section class="inner-hero bg_img" data-background="{{ url('/images/5fce3837032a51607350327.jpg')}}" style="background-image: url({{ url('/images/5fce3837032a51607350327.jpg')}})">
    <div class="container">
    <div class="row">
    <div class="col-lg-6">
    <h2 class="page-title">Deposit Wallet Transactions</h2>
    <ul class="page-breadcrumb">
    <li><a href="/dashboard/dashboard">Home</a></li>
    <li>Deposit Wallet Transactions</li>
    </ul>
    </div>
    </div>
    </div>
    </section>
     <section class="cmn-section pt-60">
    <div class="container">
    <div class="row justify-content-center mt-2">
    <div class="col-md-12">
    <div class="right float-right mb-5">
    <a href="" class="btn cmn-btn mb-md-0 mb-3 btn-disabled">Deposit Wallet Transactions
    </a>
    <a href="/dashboard/interestwallet" class="btn cmn-btn mb-md-0">Interest Wallet Transactions</a>
    </div>
    </div>
    <div class="col-md-12">
    <div class="table-responsive--md">
    <table class="table style--two">
    <thead>
    <tr>
    <th scope="col">Date</th>
    <th scope="col">Trx</th>
    <th scope="col">Details</th>
    <th scope="col">Amount</th>
    <th scope="col">Remaining balance</th>
    </tr>
    </thead>
    <tbody>
    <tr>
    <td data-label="Date">
    17 Mar, 2022 11:36 AM
    </td>
    <td data-label="#Trx">Q2KPN8RY9PM1</td>
    <td data-label="Details">You have got Sign Up Bonus</td>
    <td data-label="Amount">
    <strong class="text-success"> + 50 USD</strong>
    </td>
    <td data-label="Remaining balance">
    <strong>50 USD</strong>
    </td>
    </tr>
    </tbody>
    </table>
    </div>
    </div>
    </div>
    </div>
    </section>
    
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