<html lang="en"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xenox FX - Support Tickets</title>
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
    <h2 class="page-title">Support Tickets</h2>
    <ul class="page-breadcrumb">
    <li><a href="/dashboard/dashboard">Home</a></li>
    <li>Support Tickets</li>
    </ul>
    </div>
    </div>
    </div>
    </section>
     <section class="cmn-section">
    <div class="container">
    <div class="card">
    <div class="card-header">
    <div class="col-md-12 mb-30">
    <ul class="right">
    <li>
    <a href="/ticket" class="btn float-right btn-dark" data-toggle="tooltip" data-placement="top" title="" data-original-title="My Support Ticket">
    <i class="fa fa-eye"></i> See All </a>
    </li>
    </ul>
    </div>
    </div>
    <div class="card-body">
    <div class="row mb-60-80">
    <div class="col-md-12 mb-30">
    <form action="" role="form" method="post" enctype="multipart/form-data">
     <div class="row ">
    <div class="form-group col-md-6">
    <label for="name">Name</label>
    <input type="text" name="name" value="opa mara" class="form-control form-control-lg" placeholder="Enter Name" required="" readonly="">
    </div>
    <div class="form-group col-md-6">
    <label for="email">Email address</label>
    <input type="email" name="email" value="rachaelatmahyp21@gmail.com" class="form-control form-control-lg" placeholder="Enter your Email" required="" readonly="">
    </div>
    </div>
    <div class="row">
    <div class="form-group col-md-12">
    <label for="website">Subject</label>
    <input type="text" name="subject" value="" class="form-control form-control-lg" placeholder="Subject">
    </div>
    </div>
    <div class="row">
    <div class="col-12 form-group">
    <label for="inputMessage">Message</label>
    <textarea name="message" id="inputMessage" rows="12" class="form-control"></textarea>
    </div>
    </div>
    <div class="row form-group">
    <div class="col-sm-12">
    <label for="inputAttachments">Attachments</label>
    </div>
    <div class="col-9 file-upload">
    <input type="file" name="attachments[]" id="inputAttachments" required class="form-control form-control">
    <div id="fileUploadsContainer"></div>
    </div>
    <div class="col-3">
    <button type="button" class="btn cmn-btn extraTicketAttachment">
    <i class="fa fa-plus"></i>
    </button>
    </div>
    <div class="col-sm-12 ticket-attachments-message text-muted">
    Allowed File Extensions: .jpg, .jpeg, .png, .pdf, .doc, .docx </div>
    </div>
    <div class="row form-group justify-content-center">
    <div class="col-md-12">
    <button class="btn cmn-btn w-100 bg-3  text-center mt-3" type="submit" id="recaptcha">&nbsp;Submit Now</button>
    </div>
    </div>
    </form>
    </div>
    </div>
    </div>
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
    <li><a href="dashboard/privacy">Privacy Policy</a></li>
    <li><a href="dashboard/terms">Terms &amp; Condition</a></li>
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