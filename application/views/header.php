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
                            <a class="nav-link" href="<?php echo site_url('contact'); ?>">Contact 
                            </a>
                        </li>
                          <li class="nav-item">
                            <a class="nav-link" href="tel:+02080779002">
                              
                                 <ul class="list-inline">
                                    <li ><i class="material-icons" style="font-size:12px;color:#12b6fc;font-weight: 1000;">&#xe0b0;</i>
                                    <span style="font-size:17px;color:#12c6fc; font-weight: 350;">     07719 087869
 </span></li>
                                  </ul>
                            
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>