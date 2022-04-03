<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{url('/bootstrap/bootstrap.css')}}">
    <link rel="stylesheet" href="{{url('/css/welcome.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <title>XENOX FX</title>
</head>

<body>
    <div class="full-wh">
        <div class="bg-animation">
            <div id='stars'></div>
            <div id='stars2'></div>
            <div id='stars3'></div>
            <div id='stars4'></div>
        </div>
    </div>
    <div class="page-wrapper">
        <header class="header">
            <div class="header__bottom">
                <div class="container">
                    <nav class="navbar navbar-expand-xl p-0 align-items-center">
                        <a class="site-logo site-title" href="/"><img
                                src="{{url('/images/logo.png')}}" alt="site-logo"></a>
                        <ul class="account-menu responsive-account-menu ml-3">
                            <li class="icon"><a href="/signin"><i class="fa fa-user"></i></a></li>
                        </ul>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
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
                                    <li class="icon"><a href="/signin"><i class="fa fa-user"></i></a>
                                    </li>
                                </ul>
                                <select class="select d-inline-block w-auto ml-xl-3 langSel">
                                    <option value="en" selected>English</option>
                                    <option value="fr">French</option>
                                    <option value="es">Spanish</option>
                                </select>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </header>


        <section class="hero bg_img" data-background="{{url('/images/5fce371bad7db1607350043.jpg')}}"
            style="background-image: url('{{url('/images/5fce371bad7db1607350043.jpg')}}')">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="hero__content">
                            <h2 class="hero__title"><span class="text-white font-weight-normal">Invest for Future in
                                    Stable Platform</span> <b class="base--color">and Make Fast Money</b></h2>
                            <p class="text-white f-size-18 mt-3">Invest in an Industry Leader, Professional, and
                                Reliable Company. We provide you with the most necessary features that will make your
                                experience better. Not only we guarantee the fastest and the most exciting returns on
                                your investments, but we also guarantee the security of your investment.</p>
                            <a href="/register" class="cmn-btn text-uppercase font-weight-600 mt-4">Sign Up</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="about-section pt-120 pb-120 bg_img"
            data-background="{{url('/images/60b60b6574cd91622543205.jpg')}}"
            style="background-image: url({{url('/images/60b60b6574cd91622543205.jpg')}}">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-6">
                        <div class="about-content">
                            <h2 class="section-title mb-3"><span class="font-weight-normal">About</span> <b
                                    class="base--color">Us</b></h2>
                            <p>We are an international financial company engaged in investment activities, which are
                                related to trading on financial markets and cryptocurrency exchanges performed by
                                qualified professional traders.<br />
                                <br />
                                Our goal is to provide our investors with a reliable source of high income, while
                                minimizing any possible risks and offering a high-quality service, allowing us to
                                automate and simplify the relations between the investors and the trustees. We work
                                towards increasing your profit margin by profitable investment. We look forward to you
                                being part of our community.
                            </p>
                            <a href="/about" class="cmn-btn mt-4">More Info</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="pt-120 pb-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <div class="section-header">
                            <h2 class="section-title"><span class="font-weight-normal">Investment</span> <b
                                    class="base--color">Plans</b></h2>
                            <p>To make a solid investment, you have to know where you are investing. Find a plan which
                                is best for you.</p>
                        </div>
                    </div>
                </div>
                <div class="row mb-none-30 justify-content-center">
                    <div class="col-xl-3 col-lg-4 col-md-6 mb-30">
                        <div class="package-card text-center bg_img" data-background="{{url('/images/bg-4.png')}}"
                            style="background-image: url({{url('/images/bg-4.png')}}">
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
                            <a href="" data-toggle="modal" data-target="#depoModal"
                                class="cmn-btn btn-md mt-4 investButton">Invest Now</a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 mb-30">
                        <div class="package-card text-center bg_img" data-background="{{url('/images/bg-4.png')}}"
                            style="background-image: url({{url('/images/bg-4.png')}}">
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
                            <a href="" data-toggle="modal" data-target="#depoModal"
                                class="cmn-btn btn-md mt-4 investButton">Invest Now</a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 mb-30">
                        <div class="package-card text-center bg_img" data-background="{{url('/images/bg-4.png')}}"
                            style="background-image: url({{url('/images/bg-4.png')}}">
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
                            <a href="" data-toggle="modal" data-target="#depoModal"
                                class="cmn-btn btn-md mt-4 investButton">Invest Now</a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 mb-30">
                        <div class="package-card text-center bg_img" data-background="{{url('/images/bg-4.png')}}"
                            style="background-image: url({{url('/images/bg-4.png')}}">
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
                            <a href="" data-toggle="modal" data-target="#depoModal"
                                class="cmn-btn btn-md mt-4 investButton">Invest Now</a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 mb-30">
                        <div class="package-card text-center bg_img" data-background="h{{url('/images/bg-4.png')}}"
                            style="background-image: url({{url('/images/bg-4.png')}}">
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
                            <a href="" data-toggle="modal" data-target="#depoModal"
                                class="cmn-btn btn-md mt-4 investButton">Invest Now</a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 mb-30">
                        <div class="package-card text-center bg_img" data-background="{{url('/images/bg-4.png')}}"
                            style="background-image: url({{url('/images/bg-4.png')}}">
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
                            <a href="" data-toggle="modal" data-target="#depoModal"
                                class="cmn-btn btn-md mt-4 investButton">Invest Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="pt-120 pb-120 overlay--radial bg_img"
            data-background="{{url('/images/5fce3cf364ca21607351539.jpg')}}"
            style="background-image:url('{{url('/images/5fce3cf364ca21607351539.jpg')}}')">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <div class="section-header">
                            <h2 class="section-title"><span class="font-weight-normal">Why Choose</span> <b
                                    class="base--color">Xenox FX</b></h2>
                            <p>Our goal is to provide our investors with a reliable source of high income, while
                                minimizing any possible risks and offering a high-quality service.</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mb-none-30">
                    <div class="col-xl-4 col-md-6 mb-30">
                        <div class="choose-card border-radius--5">
                            <div class="choose-card__header mb-3">
                                <div class="choose-card__icon base--color">
                                    <i class="las la-copy"></i>
                                </div>
                                <h4 class="choose-card__title base--color">Legal Company</h4>
                            </div>
                            <p>Our company conducts absolutely legal activities in the legal field. We are certified to
                                operate investment business, we are legal and safe.</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 mb-30">
                        <div class="choose-card border-radius--5">
                            <div class="choose-card__header mb-3">
                                <div class="choose-card__icon base--color">
                                    <i class="las la-lock"></i>
                                </div>
                                <h4 class="choose-card__title base--color">High reliability</h4>
                            </div>
                            <p>We are trusted by a huge number of people. We are working hard constantly to improve the
                                level of our security system and minimize possible risks.</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 mb-30">
                        <div class="choose-card border-radius--5">
                            <div class="choose-card__header mb-3">
                                <div class="choose-card__icon base--color">
                                    <i class="las la-user-lock"></i>
                                </div>
                                <h4 class="choose-card__title base--color">Anonymity</h4>
                            </div>
                            <p>Anonymity and using cryptocurrency as a payment instrument. In the era of electronic
                                money – this is one of the most convenient ways of cooperation.</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 mb-30">
                        <div class="choose-card border-radius--5">
                            <div class="choose-card__header mb-3">
                                <div class="choose-card__icon base--color">
                                    <i class="las la-shipping-fast"></i>
                                </div>
                                <h4 class="choose-card__title base--color">Quick Withdrawal</h4>
                            </div>
                            <p>Our all retreats are treated spontaneously once requested. There are high maximum limits.
                                The minimum withdrawal amount is only $10 .</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 mb-30">
                        <div class="choose-card border-radius--5">
                            <div class="choose-card__header mb-3">
                                <div class="choose-card__icon base--color">
                                    <i class="las la-users"></i>
                                </div>
                                <h4 class="choose-card__title base--color">Referral Program</h4>
                            </div>
                            <p>We are offering a certain level of referral income through our referral program. you can
                                increase your income by simply refer a few people.</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 mb-30">
                        <div class="choose-card border-radius--5">
                            <div class="choose-card__header mb-3">
                                <div class="choose-card__icon base--color">
                                    <i class="las la-headset"></i>
                                </div>
                                <h4 class="choose-card__title base--color">24/7 Support</h4>
                            </div>
                            <p>We provide 24/7 customer support through e-mail and telegram. Our support representatives
                                are periodically available to elucidate any difficulty.</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 mb-30">
                        <div class="choose-card border-radius--5">
                            <div class="choose-card__header mb-3">
                                <div class="choose-card__icon base--color">
                                    <i class="las la-server"></i>
                                </div>
                                <h4 class="choose-card__title base--color">Dedicated Server</h4>
                            </div>
                            <p>We are using a dedicated server for the website which allows us exclusive use of the
                                resources of the entire server.</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 mb-30">
                        <div class="choose-card border-radius--5">
                            <div class="choose-card__header mb-3">
                                <div class="choose-card__icon base--color">
                                    <i class="lab la-expeditedssl"></i>
                                </div>
                                <h4 class="choose-card__title base--color">SSL Secured</h4>
                            </div>
                            <p>Comodo Essential-SSL Security encryption confirms that the presented content is genuine
                                and legitimate.</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 mb-30">
                        <div class="choose-card border-radius--5">
                            <div class="choose-card__header mb-3">
                                <div class="choose-card__icon base--color">
                                    <i class="las la-shield-alt"></i>
                                </div>
                                <h4 class="choose-card__title base--color">DDOS Protection</h4>
                            </div>
                            <p>We are using one of the most experienced, professional, and trusted DDoS Protection and
                                mitigation provider.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="pt-120 pb-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="section-header text-center">
                            <h2 class="section-title"><span class="font-weight-normal">Profit</span> <b
                                    class="base--color">Calculator</b></h2>
                            <p>You must know the calculation before investing in any plan, so you never make mistakes.
                                Check the calculation and you will get as our calculator says.</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-8">
                        <div class="profit-calculator-wrapper">
                            <form class="profit-calculator">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <label>Choose Plan</label>
                                        <select class="base--bg" id="changePlan">
                                            <option value="6">Gold</option>
                                            <option value="5">Kings</option>
                                            <option value="4">Elites</option>
                                            <option value="3">Advanced</option>
                                            <option value="2">Standard</option>
                                            <option value="1">Starter</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-6">
                                        <label>Invest Amount</label>
                                        <input type="text" name="#0" id="#0" placeholder="0.00"
                                            class="form-control base--bg invest-input">
                                    </div>
                                    <div class="col-lg-12">
                                        <label>Profit Amount</label>
                                        <input type="text" class="form-control base--bg profit-input" disabled>
                                        <code class="period"></code>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="pt-120 pb-120 bg_img" data-background="{{url('/images/5fce39883b22c1607350664.jpg')}}"
            style="background-image: url('{{url('/images/5fce39883b22c1607350664.jpg')}}')">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <div class="section-header">
                            <h2 class="section-title"><span class="font-weight-normal">How</span> <b
                                    class="base--color">Xenox FX</b> <span class="font-weight-normal">Works</span></h2>
                            <p>Get involved in our tremendous platform and Invest. We will utilize your money and give
                                you profit in your wallet automatically.</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mb-none-30">
                    <div class="col-lg-4 col-md-6 work-item mb-30">
                        <div class="work-card text-center">
                            <div class="work-card__icon base--color">
                                <i class="las la-user"></i> <span class="step-number">1</span>
                            </div>
                            <div class="work-card__content">
                                <h4 class="base--color mb-3">Create</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 work-item mb-30">
                        <div class="work-card text-center">
                            <div class="work-card__icon base--color">
                                <i class="las la-cubes"></i> <span class="step-number">2</span>
                            </div>
                            <div class="work-card__content">
                                <h4 class="base--color mb-3">Invest To Plan</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 work-item mb-30">
                        <div class="work-card text-center">
                            <div class="work-card__icon base--color">
                                <i class="las la-wallet"></i> <span class="step-number">3</span>
                            </div>
                            <div class="work-card__content">
                                <h4 class="base--color mb-3">Get Profit</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="pt-120 pb-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <div class="section-header">
                            <h2 class="section-title"><span class="font-weight-normal">Frequently Asked</span> <b
                                    class="base--color">Questions</b></h2>
                            <p>We answer some of your Frequently Asked Questions regarding our platform. If you have a
                                query that is not answered here, Please contact us.</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="accordion cmn-accordion" id="accordionExample">
                            <div class="card">
                                <div class="card-header" id="heading0">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block text-left collapsed" type="button"
                                            data-toggle="collapse" data-target="#collapse0" aria-expanded="false"
                                            aria-controls="collapse0">
                                            <i class="las la-question-circle"></i>
                                            <span>When can I deposit/withdraw from my Investment account?</span>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse0" class="collapse" aria-labelledby="heading0"
                                    data-parent="#accordionExample" style="">
                                    <div class="card-body">
                                        Deposit and withdrawal are available for at any time. Be sure, that your funds
                                        are not used in any ongoing trade before the withdrawal. The available amount is
                                        shown in your dashboard on the main page of Investing platform.
                                        Deposit and withdrawal are available for at any time. Be sure, that your funds
                                        are not used in any ongoing trade before the withdrawal. The available amount is
                                        shown in your dashboard on the main page of Investing platform. </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading1">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block text-left collapsed" type="button"
                                            data-toggle="collapse" data-target="#collapse1" aria-expanded="false"
                                            aria-controls="collapse1">
                                            <i class="las la-question-circle"></i>
                                            <span>How do I check my account balance?</span>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse1" class="collapse" aria-labelledby="heading1"
                                    data-parent="#accordionExample" style="">
                                    <div class="card-body">
                                        You can see this anytime on your accounts dashboard. You can see this anytime on
                                        your accounts dashboard. </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading2">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block text-left collapsed" type="button"
                                            data-toggle="collapse" data-target="#collapse2" aria-expanded="false"
                                            aria-controls="collapse2">
                                            <i class="las la-question-circle"></i>
                                            <span>I forgot my password, what should I do?</span>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse2" class="collapse" aria-labelledby="heading2"
                                    data-parent="#accordionExample" style="">
                                    <div class="card-body">
                                        Visit the password reset page, type in your email address and click the `Reset`
                                        button.
                                        Visit the password reset page, type in your email address and click the `Reset`
                                        button. </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading3">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block text-left collapsed" type="button"
                                            data-toggle="collapse" data-target="#collapse3" aria-expanded="false"
                                            aria-controls="collapse3">
                                            <i class="las la-question-circle"></i>
                                            <span>How will I know that the withdrawal has been successful?</span>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse3" class="collapse" aria-labelledby="heading3"
                                    data-parent="#accordionExample" style="">
                                    <div class="card-body">
                                        You will get an automatic notification once we send the funds and you can always
                                        check your transactions or account balance. Your chosen payment system dictates
                                        how long it will take for the funds to reach you.
                                        You will get an automatic notification once we send the funds and you can always
                                        check your transactions or account balance. Your chosen payment system dictates
                                        how long it will take for the funds to reach you. </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading4">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block text-left collapsed" type="button"
                                            data-toggle="collapse" data-target="#collapse4" aria-expanded="false"
                                            aria-controls="collapse4">
                                            <i class="las la-question-circle"></i>
                                            <span>How much can I withdraw?</span>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse4" class="collapse" aria-labelledby="heading4"
                                    data-parent="#accordionExample" style="">
                                    <div class="card-body">
                                        You can withdraw the full amount of your account balance minus the funds that
                                        are used currently for supporting opened positions.
                                        You can withdraw the full amount of your account balance minus the funds that
                                        are used currently for supporting opened positions. </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="pt-120 pb-120 bg_img overlay--radial"
            data-background="{{url('/images/5fce3baa1513c1607351210.jpg')}}"
            style="background-image: url('{{url('/images/5fce3baa1513c1607351210.jpg')}}')">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <div class="section-header">
                            <h2 class="section-title"><span class="font-weight-normal">What Users Say</span> <b
                                    class="base--color">About Us</b></h2>
                            <p>We are doing really good at this market and here are the words we loved to get from a few
                                of our users.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="testimonial-slider">
                            <div class="single-slide">
                                <div class="testimonial-card">
                                    <div class="testimonial-card__content">
                                        <p>I have invested with this platform and gotten my money in my account. This is
                                            legit and safe. Great doing business with them.</p>
                                    </div>
                                    <div class="testimonial-card__client">
                                        <div class="thumb">
                                            <img src="{{url('/images/5fce3c57867c71607351383.jpg')}}" alt="image">
                                        </div>
                                        <div class="content">
                                            <h6 class="name">Monalisa Thakur</h6>
                                            <span class="designation">User From India</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-slide">
                                <div class="testimonial-card">
                                    <div class="testimonial-card__content">
                                        <p>Legit....and legit. Although the payment was processed manually, I have
                                            received my first payment within a very short time., I think nice for invest
                                            at this site.</p>
                                    </div>
                                    <div class="testimonial-card__client">
                                        <div class="thumb">
                                            <img src="{{url('/images/5fce3c75041ad1607351413.jpg')}}" alt="image">
                                        </div>
                                        <div class="content">
                                            <h6 class="name">Sundax Ezma</h6>
                                            <span class="designation">User From USA</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-slide">
                                <div class="testimonial-card">
                                    <div class="testimonial-card__content">
                                        <p>I have invested with this platform and gotten my money in my account. This is
                                            legit and safe. Great doing business with them.</p>
                                    </div>
                                    <div class="testimonial-card__client">
                                        <div class="thumb">
                                            <img src="{{url('/images/5fce3c918a04b1607351441.jpg')}}" alt="image">
                                        </div>
                                        <div class="content">
                                            <h6 class="name">Donald I.</h6>
                                            <span class="designation">User From Sweden</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="pt-120 pb-120 bg_img" data-background="{{url('/images/5fce3b119747a1607351057.jpg')}}"
            style="background-image: url('{{url('/images/5fce3b119747a1607351057.jpg')}}')">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <div class="section-header">
                            <h2 class="section-title"><span class="font-weight-normal">Our Expert</span> <b
                                    class="base--color">Team Members</b></h2>
                            <p>We have a great team including developers, designers, and Traders. The Team always
                                working hard to give you the maximum profit.</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mb-none-30">
                    <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
                        <div class="team-card">
                            <div class="team-card__thumb">
                                <img src="{{url('/images/5fce3b26d2c1c1607351078.jpg')}}" alt="image">
                            </div>
                            <div class="team-card__content">
                                <h4 class="name mb-1">Alex J.</h4>
                                <span class="designation">CEO</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
                        <div class="team-card">
                            <div class="team-card__thumb">
                                <img src="{{url('/images/5fce3b35de92d1607351093.jpg')}}" alt="image">
                            </div>
                            <div class="team-card__content">
                                <h4 class="name mb-1">Danial K.</h4>
                                <span class="designation">CTO</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
                        <div class="team-card">
                            <div class="team-card__thumb">
                                <img src="{{url('/images/61e56100439d91642422528.jpg')}}" alt="image">
                            </div>
                            <div class="team-card__content">
                                <h4 class="name mb-1">Robert J. Williams</h4>
                                <span class="designation">Senior Account Manager</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
                        <div class="team-card">
                            <div class="team-card__thumb">
                                <img src="{{url('/images/61e56140ae15a1642422592.jpg')}}" alt="image">
                            </div>
                            <div class="team-card__content">
                                <h4 class="name mb-1">Dora Mieke</h4>
                                <span class="designation">Marketing Director</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
                        <div class="team-card">
                            <div class="team-card__thumb">
                                <img src="{{url('/images/5fce3b8839ba81607351176.jpg')}}" alt="image">
                            </div>
                            <div class="team-card__content">
                                <h4 class="name mb-1">Profed Laun</h4>
                                <span class="designation">Manager</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="pt-120 pb-120 border-top-1">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <div class="section-header">
                            <h2 class="section-title"><span class="font-weight-normal">Our Top</span> <b
                                    class="base--color">Investors</b></h2>
                            <p>Here are the investor leaders who have made the maximum investment with our system.</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mb-none-30">
                </div>
            </div>
        </section>
        <section class="pb-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8">
                        <div class="cta-wrapper bg_img border-radius--10 text-center"
                            data-background="{{url('/images/5fce38bab36371607350458.jpg')}}"
                            style="background-image: url('{{url('/images/5fce38bab36371607350458.jpg')}}')">
                            <h2 class="title mb-3">Get Started Today With Us</h2>
                            <p>This is a Revolutionary Money Making Platform! Invest for Future in Stable Platform and
                                Make Fast Money. Not only we guarantee the fastest and the most exciting returns on your
                                investments, but we also guarantee the security of your investment.</p>
                            <a href="/register" class="cmn-btn mt-4">Join Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="pb-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <div class="section-header">
                            <h2 class="section-title"><span class="font-weight-normal">Payment We</span> <b
                                    class="base--color">Accept</b></h2>
                            <p>We accept all major cryptocurrencies and fiat payment methods to make your investment
                                process easier with our platform.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="payment-slider">
                         <div id="slider">
                            <div class="single-slide ">
                                <div class="brand-item">
                                    <img src="{{url('/images/5f6f1bd8678601601117144.jpg')}}">
                                </div>
                            </div>
                            <div class="single-slide">
                                <div class="brand-item">
                                    <img src="{{url('/images/5f6f1d2a742211601117482.jpg')}}" alt="image">
                                </div>
                            </div>
                            <div class="single-slide">
                                <div class="brand-item">
                                    <img src="{{url('/images/5f6f1d4bc69e71601117515.jpg')}}" alt="image">
                                </div>
                            </div>
                            <div class="single-slide">
                                <div class="brand-item">
                                    <img src="{{url('/images/5f6f1d41257181601117505.jpg')}}" alt="image">
                                </div>
                            </div>
                            <div class="single-slide">
                                <div class="brand-item">
                                    <img src="{{url('/images/5f6f1d1d3ec731601117469.jpg')}}" alt="image">
                                </div>
                            </div>
                            <div class="single-slide">
                                <div class="brand-item">
                                    <img src="{{url('/images/5f6f1bc61518b1601117126.jpg')}}" alt="image">
                                </div>
                            </div>
                            <div class="single-slide">
                                <div class="brand-item">
                                    <img src="{{url('/images/5f7096563dfb71601214038.jpg')}}" alt="image">
                                </div>
                            </div>
                            <div class="single-slide">
                                <div class="brand-item">
                                    <img src="{{url('/images/5f6f1d5951a111601117529.jpg')}}" alt="image">
                                </div>
                            </div>
                            <div class="single-slide">
                                <div class="brand-item">
                                    <img src="{{url('/images/5f6f1b9e4bb961601117086.jpg')}}" alt="image">
                                </div>
                            </div>
                            <div class="single-slide">
                                <div class="brand-item">
                                    <img src="{{url('/images/5f6f1d3672dd61601117494.jpg')}}" alt="image">
                                </div>
                            </div>
                            <div class="single-slide">
                                <div class="brand-item">
                                    <img src="{{url('/images/5f7096a31ed9a1601214115.jpg')}}" alt="image">
                                </div>
                            </div>
                            <div class="single-slide">
                                <div class="brand-item">
                                    <img src="{{url('/images/5f6f1babbdbb31601117099.jpg')}}" alt="image">
                                </div>
                            </div>
                            <div class="single-slide">
                                <div class="brand-item">
                                    <img src="{{url('/images/5f6f1b2b20c6f1601116971.jpg')}}" alt="image">
                                </div>
                            </div>
                            <div class="single-slide">
                                <div class="brand-item">
                                    <img src="{{url('/images/5f6f19432bedf1601116483.jpg')}}" alt="image">
                                </div>
                            </div>
                            <div class="single-slide">
                                <div class="brand-item">
                                    <img src="{{url('/images/5f6f1b6c02ecd1601117036.jpg')}}" alt="image">
                                </div>
                            </div>
                            <div class="single-slide">
                                <div class="brand-item">
                                    <img src="{{url('/images/5f6f1b94e9b2b1601117076.jpg')}}" alt="image">
                                </div>
                            </div>
                            <div class="single-slide">
                                <div class="brand-item">
                                    <img src="{{url('/images/5f6f1b5fe18ee1601117023.jpg')}}" alt="image">
                                </div>
                            </div>
                            <div class="single-slide">
                                <div class="brand-item">
                                    <img src="{{url('/images/5f6f1b4c774af1601117004.jpg')}}" alt="image">
                                </div>
                            </div>
                            <div class="single-slide">
                                <div class="brand-item">
                                    <img src="{{url('/images/5f6f1bec255c61601117164.jpg')}}" alt="image">
                                </div>
                            </div>
                            <div class="single-slide">
                                <div class="brand-item">
                                    <img src="{{url('/images/5f709684736321601214084.jpg')}}" alt="image">
                                </div>
                            </div>
                            <div class="single-slide">
                                <div class="brand-item">
                                    <img src="{{url('/images/5f6f1bb765ab11601117111.jpg')}}" alt="image">
                                </div>
                            </div>
                            <div class="single-slide">
                                <div class="brand-item">
                                    <img src="{{url('/images/5f9a8b62bb4dd1603963746.png')}}" alt="image">
                                </div>
                            </div>
                            <div class="single-slide">
                                <div class="brand-item">
                                    <img src="{{url('/images/61e17b20bd9491642167072.jpg')}}" alt="image">
                                </div>
                            </div>

                         </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="pb-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="subscribe-wrapper bg_img"
                            data-background="{{url('/images/5fce3af5a116f1607351029.jpg')}}" style="background-image: url('{{url('/images/5fce3af5a116f1607351029.jpg')}}')">
                            <div class="row align-items-center">
                                <div class="col-lg-5">
                                    <h2 class="title">Subscribe Our Newsletter</h2>
                                </div>
                                <div class="col-lg-7 mt-lg-0 mt-4">
                                    <form class="subscribe-form" method="post">
                                        <input type="hidden" name=""
                                            value=""> <input type="email"
                                            class="form-control" name="email" placeholder="Email Address">
                                        <button type="submit" class="subscribe-btn"><i
                                                class="fa fa-envelope"></i></button>
                                    </form>
                                </div>
                            </div>
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
                            At first sign in your account </strong>
                        <a href="" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </a>
                    </div>
                    <form action="" method="post" class="register">
                        <input type="hidden" name="" value="">
                        <div class="modal-footer">
                            <a href="" type="button"
                                class="btn btn-success custom-success w-100">At first sign in your account</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <footer class="footer bg_img"
            data-background="{{url('/images/5fce39681ce6b1607350632.jpg')}}">
            <div class="footer__top">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-12 text-center">
                            <a href=""><img src="{{url('/images/logo.png')}}"
                                    alt="image"></a>
                            <ul class="footer-short-menu d-flex flex-wrap justify-content-center mt-3">
                                <li><a href="/dashboard/privacy">Privacy Policy</a></li>
                                <li><a href="/dashboard/terms">Terms &amp;
                                        Condition</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer__bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 text-md-left text-center">
                            <p>
                            <p>© 2022 <a href="/" class="base--color">Xenox FX</a>. All rights
                                reserved</p>
                            </p>
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
<script>
    let slider=document.getElementById('slider');
    let value=0;
    let marginLeft=0;
    slider.style.marginLeft=`${marginLeft}px`;
    let myInter;
    function slideMe(params) {
        myInter=setInterval(() => {
        value+=200;
       if (slider.offsetLeft==-6600 || slider.offsetLeft==-6180) {
         clearInterval(myInter);
          value=0;
          marginLeft=1020;
          slider.style.marginLeft=`${marginLeft}px`;
          slideMe();
          return; 
       }
       else if(slider.offsetLeft>-6600){
        slider.style.marginLeft=`${marginLeft-value}px`;
       }
    }, 4000);
    }
    slideMe()
</script>