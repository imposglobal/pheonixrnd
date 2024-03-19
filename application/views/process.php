<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Click R&D: The Process</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

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
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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

                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo site_url('rnd-tax-credit'); ?>">R&D Tax Credits</a>
                        </li>
                        <!--                     <li class="nav-item dropdown">-->
                        <!--<a class="nav-link dropdown-toggle" href="<?php echo site_url('qualifying-sectors'); ?>" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Qualifying Sectors</a>-->
                        <!--    <div class="dropdown-menu" aria-labelledby="dropdown01">-->
                        <!--         <a class="dropdown-item" href="<?php echo site_url('science-and-medications'); ?>">SCIENCE & MEDICATION</a>-->
                        <!--      <a class="dropdown-item" href="<?php echo site_url('manufacturing'); ?>">Manufacturing</a>-->
                        <!--       <a class="dropdown-item" href="<?php echo site_url('it-software'); ?>">IT & Software</a>-->
                        <!--       <a class="dropdown-item" href="<?php echo base_url('hospitality'); ?>">HOSPITALITY</a>-->
                        <!--       <a class="dropdown-item" href="<?php echo base_url('food-and-drink'); ?>">FOOD & DRINKS</a>-->
                        <!--       <a class="dropdown-item" href="<?php echo base_url('construction-industry'); ?>">CONSTRUCTION INDUSTRY</a>-->
                        <!--       <a class="dropdown-item" href="<?php echo base_url('care-home'); ?>">CARE HOME</a>-->
                        <!--       <a class="dropdown-item" href="<?php echo base_url('architecture'); ?>">ARCHITECTURE</a>-->
                        <!--       <a class="dropdown-item" href="<?php echo base_url('agriculture'); ?>">AGRICULTURE</a>-->



                        <!--          </div>-->
                        <!--        </li>-->

                        <li class="nav-item dropdown mega-dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Qualifying Sectors</a>				
                            <ul class="dropdown-menu mega-dropdown-menu">
                                <!--<div class="col-lg-10 offset-1">-->
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
                                <!--</div>-->
                            </ul>				
                        </li>

                        <!--        <li class="nav-item dropdown">-->
                        <!--<a class="nav-link dropdown-toggle" href="#" id="dropdown2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Useful Links</a>-->
                        <!--    <div class="dropdown-menu" aria-labelledby="dropdown2">-->
                        <!--         <a class="dropdown-item" href="<?php echo base_url('the-process'); ?>">The PROCESS</a>-->
                        <!--      <a class="dropdown-item" href="<?php echo base_url('check-eligibility'); ?>">CHECK ELIGIBILITY</a>-->
                        <!--       <a class="dropdown-item" href="<?php echo base_url('rnd-faq'); ?>">R&D FAQ</a>-->
                        <!--</div>-->
                        <!--</li>-->

                        <li class="nav-item dropdown mega-dropdown active">
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
                                            <p class="menu-p">Check Eligibility</p>
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
        
        
        
        <section id="home" class="process-1">
            <div class="container">
                <div class="row" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1000">
                    <div class="col-lg-5 col-md-6 col-sm-12">
                        <h2 class="contact-heading-1 mt-30">Let's Talk</h2>
                        <p class="footer-p-blue mt-30">
                            Click R&D have developed a robust and rigorous framework for R&D tax credits applications. Click R&Ds framework is adaptable to your business needs irrespective of your company size, sector or turnover. The core elements of the framework is adapted and updated as per HMRC R&D tax credits regulations.
                        </p>
                    </div>
                    <div class="col-lg-5 col-md-6 col-lg-offset-1 col-sm-12">
                        <p class="footer-p-blue mt-90">
                            Click R&D is committed through its  technical expertise and passion to maximise benefits for your R&D projects with minimal risks.
                        </p>
                        <p class="footer-p-blue">
                            Once you are onboard, your account manager will create a robust and fully maximised R&D tax credit claim in less than 6 weeks, that will be ready for submission to HMRC. Click R&D’s framework has a track record of 100% success rate
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="row">
                   <div class="col-lg-9 col-md-9 col-sm-12">
                       <h2 class="contact-heading-2">The Process</h2>
                       <p class="footer-p-blue mt-30 mb-50">
                           The proven 5 step process we developed will help you secure an additional £54K for your business via R&D tax credits (Avg claim amount).
                       </p>
                   </div>
                   <div class="col-lg-7 col-md-7 col-sm-12">
<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1000">
              <div class="panel panel-default no-border">
                <div class="panel-heading" role="tab" id="heading1">
                  <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#process1" aria-expanded="true" aria-controls="process1">
                      Fact Finding
                    </a>
                  </h4>
                </div>
                <div id="process1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading1">
                  <div class="panel-body">
                  <p class="footer-p-blue">In the start of every R&D project, we will start by gathering information about your R&D activities and expenditure to establish at the earliest stages, whether your projects qualify based on the HMRC guidelines. We are proactive and efficient with your time. Your account manager will start with a phone call to establish the initial project requirements and understanding, and the information required as per HMRC guidelines we always work with our clients existing practices and systems. We don’t ask our clients for unnecessary project descriptions and unwanted spreadsheets, we will do all the major work, so that you don’t have to, we are happy to work directly with your accountants to access your R&D expenditure, and payroll information.</p>
                </div>
                </div>
              </div>
              <div class="panel panel-default no-border">
                <div class="panel-heading" role="tab" id="heading2">
                  <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#process2" aria-expanded="false" aria-controls="process2">
                      Refining
                    </a>
                  </h4>
                </div>
                <div id="process2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2">
                  <div class="panel-body">
                    <p class="footer-p-blue">Refining the information process is designed to maximise your claim and analyse the overall project expenditure along with the team contribution, by creating a winning combination for your R&D tax credits claim. • The purpose of this core element of Click R&D framework is to identify your R&D tax credits qualifying expenditure; as it is one of the core elements of the overall claim, this is crafted and analysed with great care by experts and technical members of Click R&D team • The process initially requires exploration and we will be required to contact the right resource at your end with our experts to establish the opportunities by creating a winning combination towards your R&D tax credits claim • We will also engage your accountants or financial teams while exploring these opportunities by truly maximising the potential of your R&D tax credits claim</p>
                  </div>
                </div>
              </div>
              <div class="panel panel-default no-border">
                <div class="panel-heading" role="tab" id="heading3">
                  <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#process3" aria-expanded="false" aria-controls="process3">
                      Vetting Process
                    </a>
                  </h4>
                </div>
                <div id="process3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
                  <div class="panel-body">
                    <p class="footer-p-blue">The vetting process in Click R&D framework is designed to assure quality, by analysing your claim from every angle giving you peace of mind and limiting any associated risks with your R&D tax credits claim.  We believe that every business is different in terms of process, hence why bespoke attention is required to understand R&D activities.  We will build a customised report with project description, team overview and their contribution to R&D activities to make it easy for HMRC to approve your claim.  We understand that every business is different. A quality assurance specialist will create a bespoke methodology unique to your business, your activities and your records. We will create a report for you to review. It will include a technical narrative, a summary of the costs you have incurred and how we have arrived at your total benefit figure. You are kept informed through-out our preparation of the report and given opportunities to review and critically analyse before submission to HMRC, the final draft of the project is also reviewed and analysed by an expert on our side by assuring quality for your peace of mind.</p>
                  </div>
                </div>
              </div>
              <div class="panel panel-default no-border">
                <div class="panel-heading" role="tab" id="heading4">
                  <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#process4" aria-expanded="false" aria-controls="process4">
                      Submission and Support
                    </a>
                  </h4>
                </div>
                <div id="process4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading4">
                  <div class="panel-body">
                    <p class="footer-p-blue">We will formulate your R&D tax credits claim for the most advantageous benefit ready for submission. Our skilled team includes financial analysts, business and strategy consultants, researchers, compliance experts to assist you in the whole process. We can do the submission or filing on your behalf or we can work with your accountants.  We will support you throughout, in the unlikely event of HMRC enquiries, we will assist and deal with it directly on your behalf.  Our well established experts stand behind every application we prepare, so if you need post application support, it is readily available.</p>
                  </div>
                </div>
              </div>
              <div class="panel panel-default no-border">
                <div class="panel-heading" role="tab" id="heading5">
                  <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#process5" aria-expanded="false" aria-controls="process5">
                      Completion
                    </a>
                  </h4>
                </div>
                <div id="process5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading6">
                  <div class="panel-body">
                    <p class="footer-p-blue">Post submission or filing, HMRC typically take 6-8 weeks to accept and award the benefit (in term of Corporate Tax adjustment or Cash payment). R&D tax credits are usually repeated with extension or further development of the research activities and the same process can be repeated every tax year. • At this stage, your are rewarded for your R&D expenditure, the reward is in two forms: Corporation tax adjustments (the R&D tax credits reward applied to your Corporation Tax) or you are paid cash directly into your bank account (if your business is in loss and their is no Corporation Tax or the difference between your R&D tax credits and Corporation Tax) • We will ensure the process is as smooth and seamless as possible, our expert team will go the extra mile for crafting the winning submission for you</p>
                  </div>
                </div>
              </div>
            </div>
                   </div>
                   <div class="col-lg-5 col-md-5 col-sm-12">
                       <div class="image-stack width-80">
                            <div class="image-stack__item process-stack__item--top" data-aos="flip-up" data-aos-duration="1000" data-aos-delay="1000">
                                <!--<img src="<?php echo base_url(); ?>assets/Images/Homepage/v-rectangle.png" alt="">-->
                            </div>
                            <div class="image-stack__item process-stack__item--bottom">
                                <img src="<?php echo base_url(); ?>assets/Images/Process/process-bottom.png" alt="">
                            </div>
                            <div class="image-stack__item process-stack_item-top-1" data-aos="fade-down-right" data-aos-duration="1000">
                                <img src="<?php echo base_url(); ?>assets/Images/Process/process-top.png" alt="">
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
                        <p class="rnd-sec-3-p">Our expert R&D claims advisors use a robust framework and technology to deliver an improved R&D claims experience at a fraction of the cost of traditional advisors</p>
                        <form method="post" class="ml-mob-0">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                            <label>
                            <p class="label-txt">Your Name</p>
                            <input type="text" class="input" name="name">
                            <div class="line-box">
                              <div class="line"></div>
                            </div>
                          </label>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-12">
                            <label>
                            <p class="label-txt">Last Name</p>
                            <input type="text" class="input" name="last_name">
                            <div class="line-box">
                              <div class="line"></div>
                            </div>
                          </label>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-12">
                            <label>
                            <p class="label-txt">Your Email</p>
                            <input type="email" class="input" name="email">
                            <div class="line-box">
                              <div class="line"></div>
                            </div>
                          </label>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-12">
                            <label>
                            <p class="label-txt">Phone Number</p>
                            <input type="text" class="input" name="phone_num">
                            <div class="line-box">
                              <div class="line"></div>
                            </div>
                          </label>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-12">
                            <label>
                            <p class="label-txt">Subject</p>
                            <input type="text" class="input" name="subject">
                            <div class="line-box">
                              <div class="line"></div>
                            </div>
                          </label>
                          </div>
                          <div class="col-lg-12 col-md-12 col-sm-12">
                            <label>
                            <p class="label-txt">Message</p>
                            <input type="text" class="input" name="phone_num">
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
            
             /*parent Dropdown Clickable*/
              $(document).ready(function(){
          $("#dropdown01").click(function(){
            window.location.href = '<?php echo site_url("qualifying-sectors");?>';
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