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
    <title>Xenox FX - Profile Setting</title>
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
    
    
    <section class="inner-hero bg_img" data-background="{{url('/images/5fce3837032a51607350327.jpg')}}" style="background-image: url({{url('/images/5fce3837032a51607350327.jpg')}})">
    <div class="container">
    <div class="row">
    <div class="col-lg-6">
    <h2 class="page-title">Profile Setting</h2>
    <ul class="page-breadcrumb">
    <li><a href="/dashboard/dashboard">Home</a></li>
    <li>Profile Setting</li>
    </ul>
    </div>
    </div>
    </div>
    </section>
    <section class="cmn-section">
    <div class="container">
    <div class="card">
    <form action="" method="post" enctype="multipart/form-data">
    <div class="card-body">
    <div class="row">
    <div class="col-md-4">
    <div class="avatar-upload">
    <div class="avatar-edit">
    <input type="file" name="image" id="imageUpload" required="" class="upload" accept=".png, .jpg, .jpeg">
    <label for="imageUpload" class="imgUp"></label>
    </div>
    <div class="avatar-preview">
    <div class="imagePreview">
    </div>
    </div>
    </div>
    </div>
    <div class="col-md-8">
    <div class="row">
    <div class="col-md-6">
    <div class="form-group">
    <label>First Name</label>
    <input type="text" name="firstname" required class="form-control form-control-lg" placeholder="First Name" value="opa">
    </div>
    </div>
    <div class="col-md-6">
    <div class="form-group">
    <label>Last Name</label>
    <input type="text" name="lastname" required class="form-control form-control-lg" placeholder="Last Name" value="mara">
    </div>
    </div>
    <div class="col-md-6">
    <div class="form-group">
    <label>Username</label>
    <input type="text" name="username" required class="form-control form-control-lg" placeholder="Username" value="maradona" readonly="">
    </div>
    </div>
    <div class="col-md-6">
    <div class="form-group">
    <label>Email</label>
    <input type="text" name="email" required class="form-control form-control-lg" placeholder="Email" value="rachaelatmahyp21@gmail.com" readonly="">
    </div>
    </div>
    </div>
    </div>
    <div class="col-md-12">
    <div class="row">
    <div class="col-md-6">
    <div class="form-group">
    <label>Mobile</label>
    <input type="text" name="mobile" required class="form-control form-control-lg" placeholder="Mobile" value="23408110318228" disabled="">
    </div>
    </div>
    <div class="col-md-6">
    <div class="form-group">
    <label>Country</label>
    <input type="text" class="form-control" value="Nigeria" disabled="">
    </div>
    </div>
    <div class="col-md-6">
    <div class="form-group">
    <label>Address</label>
    <input type="text" name="address" required class="form-control form-control-lg" placeholder="Address" value="">
    </div>
    </div>
    <div class="col-md-6">
    <div class="form-group">
    <label>State</label>
    <input type="text" name="state" required class="form-control form-control-lg" placeholder="State" value="">
    </div>
    </div>
    <div class="col-md-6">
    <div class="form-group">
    <label>Zip</label>
    <input type="text" name="zip" required class="form-control form-control-lg" placeholder="Zip" value="">
    </div>
    </div>
    <div class="col-md-6">
    <div class="form-group">
    <label>City</label>
    <input type="text" name="city" required class="form-control form-control-lg" placeholder="City" value="">
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="card-footer">
    <button type="submit" class="btn btn-md w-100 cmn-btn">Update</button>
    </div>
    </form>
    </div>
    </div>
    </section>
    
    <footer class="footer bg_img" data-background="{{url('/images/5fce39681ce6b1607350632.jpg')}}" style="background-image: url({{url('/images/5fce39681ce6b1607350632.jpg')}})">
    <div class="footer__top">
    <div class="container">
    <div class="row justify-content-center">
    <div class="col-lg-12 text-center">
    <a href="/dashboard/dashboard"><img src="{{url('/images/logo.png')}}" alt="image"></a>
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