<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Phoenix R&D: R&D Tax Credit</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- Latest compiled and minified JavaScript -->

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@900&display=swap" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/CSS/style.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/CSS/custom.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/CSS/media-style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
        <link rel="icon" href="<?php echo base_url(); ?>assets/Images/Homepage/bookmark.png" type="image/gif" sizes="16x16">
        <style>
            .input{
                color:#fff;
                font-family: 'Raleway';
                font-size: 1.5em;
                font-weight: normal;
            }
        </style>

    </head>

    <body>
<header id="site-header" class="fixed-top">
            <nav class="navbar navbar-expand-lg navbar-dark ">
                <a class="navbar-brand col-sm-12 col-md-1 col-lg-1" href="<?php echo site_url('home'); ?>">
                    <img src="<?php echo base_url(); ?>assets/Images/Homepage/Logo.png" alt="Logo" />
                </a>
                <button class="navbar-toggler bg-gradient" type="button" data-toggle="collapse"
                        data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                        aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav m-auto ul-padding">

                        <li class="nav-item active">
                            <a class="nav-link" href="<?php echo site_url('rnd-tax-credit'); ?>">R&D Tax Credits</a>
                        </li>
                        <li class="nav-item dropdown mega-dropdown">
                            <a href="<?php echo site_url('qualifying-sectors'); ?>" class="nav-link dropdown-toggle" data-toggle="dropdown">Qualifying Sectors</a>				
                            <ul class="dropdown-menu mega-dropdown-menu">
                                <div class="col-sm-1 menu-div">
                                    <a href="<?php echo site_url('science-and-medications'); ?>">
                                        <div class="menu-sm-bg menu-img-padding"></div>
                                            <!--<img src="<?php echo base_url(); ?>/assets/Images/qualifying_sectors/sm-blue.png" class="menu-icon" alt="agriculture">-->
                                        <p class="menu-p">Science & Medication</p>
                                    </a>
                                </div>
                                <div class="col-sm-1 menu-div">
                                    <a href="<?php echo site_url('manufacturing'); ?>">
                                        <div class="menu-manuf-bg menu-img-padding"></div>
                                            <!--<img src="<?php echo base_url(); ?>/assets/Images/qualifying_sectors/manuf-blue.png" class="menu-icon" alt="agriculture">-->
                                        <p class="menu-p">Manufacturing</p>
                                    </a>
                                </div>
                                <div class="col-sm-1 menu-div">
                                    <a href="<?php echo site_url('it-software'); ?>">
                                        <div class="menu-its-bg menu-img-padding"></div>
                                            <!--<img src="<?php echo base_url(); ?>/assets/Images/qualifying_sectors/its-blue.png" class="menu-icon" alt="agriculture">-->
                                        <p class="menu-p">IT & Software</p>
                                    </a>
                                </div>
                                <div class="col-sm-1 menu-div">
                                    <a href="<?php echo base_url('food-and-drink'); ?>">
                                        <div class="menu-fd-bg menu-img-padding"></div>
                                            <!--<img src="<?php echo base_url(); ?>/assets/Images/qualifying_sectors/food-blue.png" class="menu-icon" alt="agriculture">-->
                                        <p class="menu-p">Food & Drinks</p>
                                    </a>
                                </div>
                                <div class="col-sm-1 menu-div">
                                    <a href="<?php echo base_url('hospitality'); ?>">
                                        <div class="menu-hospi-bg menu-img-padding"></div>
                                            <!--<img src="<?php echo base_url(); ?>/assets/Images/qualifying_sectors/hospi-blue.png" class="menu-icon" alt="agriculture">-->
                                        <p class="menu-p">Hospitality</p>
                                    </a>
                                </div>
                                <div class="col-sm-1 menu-div">
                                    <a href="<?php echo base_url('construction-industry'); ?>">
                                        <div class="menu-constr-bg menu-img-padding"></div>
                                            <!--<img src="<?php echo base_url(); ?>/assets/Images/qualifying_sectors/constr-blue.png" class="menu-icon" alt="agriculture">-->
                                        <p class="menu-p">Construction Industry</p>
                                    </a>
                                </div>
                                <div class="col-sm-1 menu-div">
                                    <a href="<?php echo base_url('care-home'); ?>">
                                        <div class="menu-ch-bg menu-img-padding"></div>
                                            <!--<img src="<?php echo base_url(); ?>/assets/Images/qualifying_sectors/ch-blue.png" class="menu-icon" alt="agriculture">-->
                                        <p class="menu-p">Care Homes</p>
                                    </a>
                                </div>
                                <div class="col-sm-1 menu-div">
                                    <a href="<?php echo base_url('architecture'); ?>">
                                        <div class="menu-archi-bg menu-img-padding"></div>
                                            <!--<img src="<?php echo base_url(); ?>/assets/Images/qualifying_sectors/archi-blue.png" class="menu-icon" alt="agriculture">-->
                                        <p class="menu-p">Architecture</p>
                                    </a>
                                </div>
                                <div class="col-sm-1 menu-div">
                                    <a href="<?php echo base_url('agriculture'); ?>">
                                        <div class="menu-agri-bg menu-img-padding"></div>
                                        <!--<img src="<?php echo base_url(); ?>/assets/Images/qualifying_sectors/agri-blue.png" class="menu-icon" alt="agriculture">-->
                                        <p class="menu-p">Agriculture</p>
                                    </a>
                                </div>
                            </ul>				
                        </li>

                        <li class="nav-item dropdown mega-dropdown">
                            <a href="#" class="nav-link dropdown-toggle" id="useful-links" data-toggle="dropdown">Useful Links</a>				
                            <ul class="dropdown-menu mega-dropdown-menu" aria-labelledby="useful-links">
                                <div class="col-lg-12 col-md-offset-4">
                                    <div class="col-sm-1 menu-div">
                                        <a href="<?php echo site_url('the-process'); ?>">
                                            <div class="menu-process-bg menu-img-padding"></div>
                                                <!--<img src="<?php echo base_url(); ?>/assets/Images/qualifying_sectors/sm-blue.png" class="menu-icon" alt="agriculture">-->
                                            <p class="menu-p">The Process</p>
                                        </a>
                                    </div>
                                    <div class="col-sm-1 menu-div">
                                        <a href="<?php echo site_url('check-eligibility'); ?>">
                                            <div class="menu-ce-bg menu-img-padding"></div>
                                                <!--<img src="<?php echo base_url(); ?>/assets/Images/qualifying_sectors/manuf-blue.png" class="menu-icon" alt="agriculture">-->
                                            <p class="menu-p">Check</p> <p class="menu-p">Eligibility</p>
                                        </a>
                                    </div>
                                    <div class="col-sm-1 menu-div">
                                        <a href="<?php echo site_url('rnd-faq'); ?>">
                                            <div class="menu-rnd-bg menu-img-padding"></div>
                                                <!--<img src="<?php echo base_url(); ?>/assets/Images/qualifying_sectors/its-blue.png" class="menu-icon" alt="agriculture">-->
                                            <p class="menu-p">R&D FAQ</p>
                                        </a>
                                    </div>

                                </div>
                            </ul>				
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo site_url('about-us'); ?>">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo site_url('contact'); ?>">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="tel:+02080779002">
                              
                                 <ul class="list-inline">
                                    <li ><i class="material-icons" style="font-size:12px;color:#12b6fc;font-weight: 1000;">&#xe0b0;</i>
                                    <span style="font-size:17px;color:#12c6fc; font-weight: 500;">     0208 0779002 </span></li>
                                  </ul>
                            
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <section id="home" class="section-1">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12 col-md-12 col-sm-12 mt-30">
                        <div class="col-lg-3 col-md-3 col-sm-12 mt-lg-0 mt-4">
                            <h2 class="section-1-h">R&D tax credits explained</h2>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12 mt-lg-0">
                            <p class="section-p-6">The Research and Development Tax Credits (R&D Tax Relief) is a government incentive based reward scheme for businesses in the UK for investing in innovation and business enhancement.</p>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 section-1-p-padding">
                            <p class="section-p-6">R&D Tax credits have the power to transform your business to the next level as it is designed to reward innovation and boosting growth backed by the government.
                                The R&D Tax credits are an amicable source of cash for your business that can be used for business growth, hiring new staff or further innovation.</p>
                            <p class="section-p-6 mt-4">If your answer, to the following is ‘yes’ then you are eligible for R&D tax credit scheme</p>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 mt-30">
                        <div class="col-lg-6 col-md-6 col-sm-12 mt-lg-0 mt-4">
                            <img src="<?php echo base_url(); ?>assets/Images/Homepage/workers-agreement.png" alt="" class="sec-1-left-img">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 mt-mob-20" id="icon-position">
                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <img src="<?php echo base_url(); ?>assets/Images/RND/icon-1.png" alt="" class="img-width-50">
                                <p class="rnd-p-right mt-3">Registered company in the UK</p>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 mt-lg-0 mt-4">
                                <img src="<?php echo base_url(); ?>assets/Images/RND/icon-2.png" alt="" class="img-width-50">
                                <p class="rnd-p-right mt-3">Have conducted qualifying R&D activities</p>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 mt-lg-0 mt-4">
                                <img src="<?php echo base_url(); ?>assets/Images/RND/icon-3.png" alt="" class="img-width-50">
                                <p class="rnd-p-right mt-3">Have invested or spent money on R&D activities</p>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <!-- //banner section -->

        <!-- home page about -->
        <section class="rnd-2">
            <div class="container">
                <div class="row" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1000">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <h2 class="section-2-h">R&D tax credits advantages</h2>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <p class="section-p-6-2">If you are a UK based limited company, and involved in R&D activities, you can potentially claim back 33p (if company is in loss) for every £1 R&D expenditure and 25p (if the company is profit). Get in touch to find out whether your projects are eligible for R&D tax credits!</p>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12">
                           <a class="btn white-btn mt-3col-sm-8 offset-2" href="<?php echo site_url('contact'); ?>" target="_blank">Get In Touch</a>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 mt-50">
                <div class="" data-aos="zoom-in-down" data-aos-duration="3000">
                    <div class="tabs">
                        <div class="tab-button-outer">
                            <ul id="tab-button">
                                <li><a href="#tab01">Who is eligible</a></li>
                                <li><a href="#tab02">How it works</a></li>
                                <li><a href="#tab03">R&D Activitivies</a></li>
                                <li><a href="#tab04">Claim Type</a></li>
                                <li><a href="#tab05">Claim worth</a></li>
                            </ul>
                        </div>

                        <div id="tab01" class="tab-contents">
                            <div class="blue-bg">
                                <!--<h2>Who is eligible</h2>-->
                                <p>
                                    Businesses that are eligible for R&D tax credits. To qualify for R&D tax incentives, you must: be a Registered company in the UK Have conducted qualifying R&D activities Have invested or spent money on R&D activities.
                                    Who qualifies for R&D tax credits? R&D is not restricted to any particular sector. It occurs in everything from bread making to engineering, chemical industries, to construction or digital development. To see if your business qualifies for R&D tax credits Contact us at info@phoenixrnd.co.uk  for a free no obligation strategy session.
                                </p>
                            </div>
                        </div>
                        <div id="tab02" class="tab-contents">
                            <div class="blue-bg">
                                <!--<h2>How it works</h2>-->
                                <p>
                                    Businesses in the UK who spend money on innovating or developing new products, business processes or services; or enhancing existing practices or products, are eligible for R&D tax relief. If your business is spending funds on innovation you can claim R&D tax credits to receive cash payment and/or Corporation Tax reduction
                                    (depending on your profit or loss). The scope and support of R&D tax credits is incredible, in fact the schemes are in practice in almost every sector/industry in the UK, however the awareness is limited. If you are claiming R&D tax credits for the first time, you can typically complete the claim for the last two years of your accounting period.
                                </p>
                            </div>
                        </div>
                        <div id="tab03" class="tab-contents">
                            <div class="blue-bg">
                                <!--<h2>R&D Activitivies</h2>-->
                                <p>
                                    The HMRC R&D project eligibility criteria is quite broad. Whatever sector or size of your business, if your company is investing in attempting to resolve scientific or technological uncertainties, then you may be conducting R&D qualifying activities. This may include either: creating or developing new products, services or processes 
                                    modifying or changing existing products, services or processes. If the outcome of your project is uncertain, or not sure whether the result of the product development, process or service creation will be successful, then you are attempting to resolve technological uncertainties and thus qualify for R&D activities.
                                </p>
                            </div>
                        </div>
                        <div id="tab04" class="tab-contents">
                            <div class="blue-bg">
                                <!--<h2>Claim Type</h2>-->
                                <p>
                                    There are two types of businesses as defined by HMRC, (i) SME  (ii) Large companies. Large companies, if the number of staff is more than 500 or turnover exceeds £100 million, these businesses  fall into this category. Small and Medium Size Businesses (SMEs) The number of staff is less than 500 and the turnover is less than £100 million,
                                    these businesses fall into this category. Most businesses, including start-ups fall into this category
                                </p>
                            </div>
                        </div>
                        <div id="tab05" class="tab-contents">
                            <div class="blue-bg">
                                <!--<h2>Claim worth</h2>-->
                                <p>
                                    How much is an R&D credit claim worth? The R&D tax credit claim depends on your R&D spend. You would need to identify the qualifying expenditure and calculate it based on the following rates. If the business is making a profit, then the R&D tax credit for qualified expenditure is 25% and 33% if the business is making a loss.
                                    You (as an SME) would be able to claim 33p for every £1 R&D qualified expenditure. The average claim for an SME is £54K (2018-17).
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="rnd-section-3">
            <div class="container">
                <div class="row" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1000">
                    <div class="col-lg-5 col-md-6"></div>
                    <div class="col-lg-7 col-md-6">
                        <h3 class="rnd-sec-3-head m-3">Book a strategy session today!</h3>
                        <p class="rnd-sec-3-p mt-3">Our expert R&D claims advisors use a robust framework and technology to deliver an improved R&D claims experience at a fraction of the cost of traditional advisors</p>
                        <form method="post" class="ml-mob-0" action="Home/submit_form">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                            <label>
                            <p class="label-txt">Your Name</p>
                            <input type="text" class="input" name="name" required="">
                            <div class="line-box">
                              <div class="line"></div>
                            </div>
                          </label>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-12">
                            <label>
                            <p class="label-txt">Last Name</p>
                            <input type="text" class="input" name="last_name" required="">
                            <div class="line-box">
                              <div class="line"></div>
                            </div>
                          </label>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-12">
                            <label>
                            <p class="label-txt">Your Email</p>
                            <input type="email" class="input" name="email" required="">
                            <div class="line-box">
                              <div class="line"></div>
                            </div>
                          </label>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-12">
                            <label>
                            <p class="label-txt">Phone Number</p>
                            <input type="text" class="input" name="phone_num" required="">
                            <div class="line-box">
                              <div class="line"></div>
                            </div>
                          </label>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-12">
                            <label>
                            <p class="label-txt">Subject</p>
                            <input type="text" class="input" name="subject" required="">
                            <div class="line-box">
                              <div class="line"></div>
                            </div>
                          </label>
                          </div>
                          <div class="col-lg-12 col-md-12 col-sm-12">
                            <label>
                            <p class="label-txt">Message</p>
                            <input type="text" class="input" name="phone_num" required="">
                            <div class="line-box">
                              <div class="line"></div>
                            </div>
                          </label>
                          </div>
                            <div class="form-group">
                                <input type="submit" name="submit" class="btn contact-submit-btn" value="Send Message" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <section class="rnd-section-4">
            <div class="container">
                <div class="row" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1000">
                    <div class="col-lg-8 col-md-8 offset-2 rnd-section-4-p ml-mob-0">
                    <p>* 100% success rate – you are in safe hands</p>
                    <p>* We won’t ask for complicated excel sheets or long reports</p>
                    <p>* We do all the hard work for you 🙂</p>
                    <p>* Team of academic and business experts</p>
                    </div>
                </div>
            </div>
        </section>
<?php include 'footer.php' ?>
        <!--header-->


        <!-- //home page about -->

        <!-- home page service grids -->

        <!-- //site footer -->

        <!-- move top -->
        <button onclick="topFunction()" id="movetop" class="bg-primary" title="Go to top">
            <span class="fa fa-angle-up"></span>
        </button>

        <!-- javascript -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <!--<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>-->
<!--        <script src="assets/js/jquery-3.3.1.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>-->
        <script src="assets/JS/script.js"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>
        <!-- disable body scroll which navbar is in active -->
        <script>
            $(function () {
                $('.navbar-toggler').click(function () {
                    $('body').toggleClass('noscroll');
                })
            });
        </script>

        <script>
            $(function () {
                var $tabButtonItem = $('#tab-button li'),
                        $tabSelect = $('#tab-select'),
                        $tabContents = $('.tab-contents'),
                        activeClass = 'is-active';

                $tabButtonItem.first().addClass(activeClass);
                $tabContents.not(':first').hide();

                $tabButtonItem.find('a').on('click', function (e) {
                    var target = $(this).attr('href');

                    $tabButtonItem.removeClass(activeClass);
                    $(this).parent().addClass(activeClass);
                    $tabSelect.val(target);
                    $tabContents.hide();
                    $(target).show();
                    e.preventDefault();
                });

                $tabSelect.on('change', function () {
                    var target = $(this).val(),
                            targetSelectNum = $(this).prop('selectedIndex');

                    $tabButtonItem.removeClass(activeClass);
                    $tabButtonItem.eq(targetSelectNum).addClass(activeClass);
                    $tabContents.hide();
                    $(target).show();
                });
            });
            
              $(document).ready(function(){
          $("#dropdown01").click(function(){
            window.location.href = '<?php echo site_url('qualifying-sectors');?>';
         });
         });
        </script>
        <script>
                $(document).ready(function(){

  $('.input').focus(function(){
    $(this).parent().find(".label-txt").addClass('label-active');
  });

  $(".input").focusout(function(){
    if ($(this).val() == '') {
      $(this).parent().find(".label-txt").removeClass('label-active');
    };
  });

});
        </script>
    </body>
</html>