<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Phoenix R&D: Qualify Form</title>
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
                <style>
        
            .label-head{
                color: #0f5d82;
                font-weight: bold;
            }
            .main-agileits {
                padding: 3em 0 0;
            }
            .main-row {
                width: 50%;
                margin: 0 auto;
                position: relative;
                /*min-height: 385px;*/
            }
            .four.w3grids-agile {
                float: left;
                width: auto;
                margin: 0 3%;
            }
            .form-control {
    display: block;
    width: 100%;
    height: 34px;
    padding: 0rem 2rem !important;
    font-size: 14px;
    line-height: 1.42857143;
    color: #555;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 1px rgb(0 0 0 / 8%);
    box-shadow: inset 0 1px 1px rgb(0 0 0 / 8%);
    -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
    -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
}
            .form-li >li{
                font-size:1.5em;
                margin: 1em 0;
            }

            .form-wrapper .section {
                padding: 1.5em;
                margin-bottom: 70px;
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
                /*background-color: rgba(39, 108, 145, 0.37);*/
                /*background: #fff;*/
                opanew_p_p_s: 0;
                -webkit-transform: scale(1, 0);
                -ms-transform: scale(1, 0);
                -o-transform: scale(1, 0);
                transform: scale(1, 0);
                -webkit-transform-origin: top center;
                -moz-transform-origin: top center;
                -ms-transform-origin: top center;
                -o-transform-origin: top center;
                transform-origin: top center;
                -webkit-transition: all 0.5s ease-in-out;
                -o-transition: all 0.5s ease-in-out;
                transition: all 0.5s ease-in-out;
                text-align: center;
                position: absolute;
                width: 100%;
                min-height: 300px;
                /*-webkit-box-shadow: -2px 3px 4px rgb(113, 54, 141);*/
                /*-moz-box-shadow: -2px 3px 4px rgb(113, 54, 141); */
                /*box-shadow: -2px 3px 4px rgb(113, 54, 141);*/
            } 
            .form-wrapper .section h3 {
                font-family: raleway;
                font-size: 2.5em;
                margin: 0.3em 0 1em;
                color: #fff;
                font-weight: 500;
                letter-spacing: 2px;
            } 
            .form-wrapper .section.is-active{
                opanew_p_p_s: 1;
                -webkit-transform: scale(1, 1);
                -ms-transform: scale(1, 1);
                -o-transform: scale(1, 1);
                transform: scale(1, 1);
            } 
            .form-wrapper .button, .form-wrapper .submit {
                background-color: #71368d;
                display: inline-block;
                padding: 10px 30px;
                color: #fff;
                cursor: pointer;
                font-size: 1.2em !important;
                font-family: raleway !important;
                /*position: absolute;*/
                /*right: 24px;*/
                /*bottom: 24px;*/
                float: right;
            }
            .previous{
                background-color: #0f5d82;
                display: inline-block;
                padding: 8px 30px;
                color: #fff;
                cursor: pointer;
                font-size: 1em !important;
                font-family: raleway !important;
                float: left;
            }
            .form-wrapper .submit{
                border: none;
                outline: none;
                -webkit-box-sizing: content-box;
                -moz-box-sizing: content-box;
                box-sizing: content-box;
                -webkit-appearance: none;
                -moz-appearance: none;
                appearance: none;
            }
            label{
                font-size: 1.5em;
                font-weight: 500;
                float:left;
                display: inline-block;
                margin-bottom: 1em
            }
            textarea{
                margin:0 !important;
            }
            .form-wrapper input[type="text"],.form-wrapper input[type="email"],.form-wrapper input[type="password"],.form-wrapper input[type="date"],.select-list,textarea {
                display: block;
                padding: 1em 1em;
                margin: 1em auto;
                background: none;
                border: 1px solid #B6BABF;
                width: 100%;
                outline: none;
                font-size: 0.9em !important;
                color:#2c2c2c;
                font-family: raleway !important;
            }
            .select-list{
                display: block;
                padding: 0.7em 1em;
                margin: 1em auto;
                background: #fff;
                border: 1px solid #B6BABF;
                width: 100%;
                outline: none;
                font-size: 0.9em !important;
                color:#2c2c2c;
                font-family: raleway !important;
            }
            ::placeholder{
                color: #2c2c2c;
            }
            /*.form-wrapper input[type="radio"]{*/
            /*    display: none;*/
            /*} */
            .form-wrapper input[type="radio"] + label{
                display: block;
                border: 1px solid #B6BABF;
                width: 100%;
                max-width: 100%;
                padding: 10px;
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
                cursor: pointer;
                position: relative;
                color: #2c2c2c;
                font-family: raleway;
                font-weight: normal;
                font-size: 0.8em !important;
            } 
            .radio-lable{
                display: contents !important;
                text-align:left;
            }
            h4{
                text-align:left;
            }
            p{
                text-align:left !important;
            }
            .form-wrapper input[type="radio"] + label:before{
                content: "✔";
                position: absolute;
                right: -10px;
                top: -10px;
                width: 30px;
                height: 30px;
                line-height: 30px;
                border-radius: 100%;
                background-color: #0f5d82;
                color: #2c2c2c;
                display: none;
            } 
            .form-wrapper input[type="radio"]:checked + label:before{
                display: block;
            } 
            .form-wrapper input[type="radio"] + label h4{
                margin: 15px;
                color: #2c2c2c;
            }  
            .checkbox input[type="checkbox"], .checkbox-inline input[type="checkbox"], .radio input[type="radio"], .radio-inline input[type="radio"]{
                position: relative !important;
                margin-left: 0 !important;
            }
            .form-wrapper input[type="radio"]:checked + label{
                border: 1px solid #0f5d82;
                color: #2c2c2c;
                font-family: raleway;
                font-weight: normal;
            } 
            .form-wrapper input[type="radio"]:checked + label h4{
                color: #0f5d82;
            }
            .form-wrapper .section p {
                font-size: 1em;
                /*color: #fff;*/
                /*letter-spacing: 4px;*/
                margin-top: 1em;
                line-height:2em;
                text-align: center;
                font-family: raleway;
            }
            /*-- //main --*/ 
            .submitted{
                color: #fff;
                padding: 1.5em;
                margin-bottom: 70px;
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
                /* background-color: rgba(39, 108, 145, 0.37); */
                background: #89a6b7;
                /*opanew_p_p_s: 0;*/
                text-align: center;
                position: absolute;
                width: 100%;
                min-height: 300px;
                -webkit-box-shadow: -2px 3px 4px rgb(28, 42, 55);
                -moz-box-shadow: -2px 3px 4px rgb(28, 42, 55);
                box-shadow: -2px 3px 4px rgb(28, 42, 55);
            }
            .submitted>a > button{
                background-color: #0f5d82;
                display: inline-block;
                padding: 8px 30px;
                color: #fff;
                cursor: pointer;
                font-size: 1em !important;
                font-family: raleway !important;
                /*position: absolute;*/
                /*right: 24px;*/
                /*bottom: 24px;*/
                float: none;
                border: none;
            }
            .submitted > button >a{
                color: #fff;
                text-decoration: none;
                font-family: raleway;
            }
            .submitted>p{
                font-size: 1.3em;
                margin-top: 25px;
            }
            input:read-only {
                background: #9c9fa3 !important;
            }
            /*-- //copyright --*/   
            /*-- responsive-design --*/ 
            @media(max-width:1080px){
                .main-row {
                    width: 60%; 
                    margin: 4em auto;
                }
            } 
            @media(max-width:991px){
                .logo{
                    width: 250px !important;
                    height: auto;
                    margin: 0 34% !important;
                }
                .main-row {
                    width: 63%;
                    margin: 3em auto;
                }
                .form-wrapper .section h3 { 
                    font-size: 2.2em; 
                } 
                .main-agileits {
                    padding: 2em 0 0;
                }
                .main-row {
                    width: 63%;
                    margin: 3em auto; 
                }
            }
            @media(max-width:800px){
                .logo{
                    width: 250px !important;
                    height: auto;
                    margin: 0 34% !important;
                }
                .form-wrapper .section h3 { 
                    font-size: 2em; 
                }  
                .steps li { 
                    margin: 20px; 
                }
                .form-wrapper input[type="text"], .form-wrapper input[type="email"], .form-wrapper input[type="password"],.form-wrapper input[type="date"],.select-list,textarea { 
                    width: 55%; 
                }
                .form-wrapper .section {
                    padding: 1em; 
                    min-height: 290px;
                }
                .main-row { 
                    min-height: 360px;
                    margin: 2.5em auto;
                }
                .form-wrapper .button, .form-wrapper .submit {
                    background-color: #0f5d82;
                    display: inline-block;
                    padding: 8px 30px;
                    color: #fff;
                    cursor: pointer;
                    font-size: 1em !important;
                    font-family: raleway !important;
                    /*position: absolute;*/
                    /*right: 24px;*/
                    /*bottom: 24px;*/
                    /*float: none;*/
                }
            }
            @media(max-width:736px){
                h1 {
                    font-size: 2.2em;
                }
                .main-row {
                    width: 70%; 
                }
                .form-wrapper input[type="radio"] + label h4 {
                    margin: 15px 0;  
                }
            }
            @media(max-width:667px){
                .logo{
                    width: 250px;
                    height: auto;
                    margin: 0 30%;
                }
                .form-wrapper .section p { 
                    letter-spacing: 2px; 
                }
                .four.w3grids-agile:nth-child(2) {
                    margin: 0 5%;
                }
                .form-wrapper input[type="radio"] + label h4 {
                    margin: 10px 0; 
                }
            }
            @media(max-width:600px){
                .form-wrapper input[type="text"], .form-wrapper input[type="email"], .form-wrapper input[type="password"],.form-wrapper input[type="date"],.select-list,textarea {
                    width: 65%;
                }
                .form-wrapper .section h3 {
                    font-size: 1.8em;
                    margin: 0.3em 0 0.8em;
                }
                .form-wrapper input[type="radio"] + label h4 {
                    margin: 10px 0;
                    font-size: 0.9em;
                }
                .form-wrapper .section { 
                    min-height: 270px;
                } 
                .main-row {
                    width: 80%;
                }
            }
            @media(max-width:480px){
                .logo{
                    width: 250px !important;
                    height: auto;
                    margin: 0 23% !important;
                }
                h1 {
                    font-size: 2em;
                }
                .main-row {
                    min-height: 338px;
                    margin: 1.5em auto;
                }
                .form-wrapper .section h3 {
                    font-size: 1.6em; 
                }
                .form-wrapper input[type="text"], .form-wrapper input[type="email"], .form-wrapper input[type="password"],.form-wrapper input[type="date"],.select-listtextarea {
                    width: 75%;
                }
                .main-row {
                    width: 90%;
                }
                .four.w3grids-agile {
                    width: 31%;
                }
                .four.w3grids-agile:nth-child(2) {
                    margin: 0 3%; 
                }
                label{
                    display: contents !important;
                }
                .form-wrapper .button, .form-wrapper .submit {
                    background-color: #0f5d82;
                    display: inline-block;
                    padding: 8px 30px;
                    color: #fff;
                    cursor: pointer;
                    font-size: 1em !important;
                    font-family: raleway !important;
                    /*position: absolute;*/
                    /*right: 24px;*/
                    /*bottom: 24px;*/
                    float: none;
                }
                textarea{
                    margin:1em auto !important;
                }
            } 
            @media(max-width:414px){
                .logo{
                    width: 250px !important;
                    height: auto;
                    margin: 0 18% !important;
                }
                .form-wrapper .section p {
                    letter-spacing: 1px;
                    font-size: 0.9em;
                }
                .form-wrapper .button, .form-wrapper .submit { 
                    font-size: 0.9em !important;  
                }
            }
            @media(max-width:384px){
                .logo{
                    width: 250px !important;
                    height: auto;
                    margin: 0 16% !important;
                }
                h1 {
                    font-size: 1.7em;
                } 
                .steps li { 
                    font-size: .9em;
                } 
                .w3copyright-agile p {
                    font-size: 0.85em; 
                    letter-spacing: 0px;
                    padding: 0 1em;
                }
                .form-wrapper input[type="text"], .form-wrapper input[type="email"], .form-wrapper input[type="password"],.select-list,textarea {
                    width: 80%;
                    font-size: 0.8em !important;
                    padding: 0.6em 1em;
                }
                .form-wrapper .section { 
                    min-height: 260px;
                }
                .main-row {
                    min-height: 316px; 
                }
                .form-wrapper input[type="radio"] + label h4 { 
                    font-size: 0.8em;
                }
                .four.w3grids-agile {
                    float: none;
                    width: 40%;
                    margin: 0 auto;
                }
                .form-wrapper input[type="radio"] + label h4 {
                    margin: 3px 0; 
                }
                .four.w3grids-agile:nth-child(2) {
                    margin: 2% auto;
                }
                .form-wrapper input[type="radio"] + label { 
                    padding: 4px; 
                }
                .form-wrapper .section h3 {
                    font-size: 1.4em;
                    margin: 0.1em 0 0.8em;
                }
            } 
            @media(max-width:320px){
                .logo{
                    width: 250px !important;
                    height: auto;
                    margin: 0 10% !important;
                }
                h1 {
                    font-size: 1.5em;
                }
                .steps li {
                    margin: 14px;
                }
                .main-row {
                    min-height: 302px;
                }
            }
            /*-- //responsive-design --*/

            /*============================Form================================*/
        </style>
    </head>

    <body>
        <?php include 'header.php' ?>
        <section id="home">
            <div class="container">
                <div class="row mt-50">
                
                <form class="form-wrapper col-lg-6 col-md-12 offset-3" action="../Home/submit_qualify_form" method="post">
                    <h2 class="contact-heading-2">QUALIFYING FORM</h2>
                    <!--<fieldset class="section is-active" id="step1"> -->
                        <!--<h3>Contact Details</h3>-->
                        <div class="col-md-12 div-margin">
                            <label>Client name</label>
                            <input type="text" name="client_name" placeholder="" class="form-control" required="">
                        </div>
                        <div class="col-md-12 div-margin">
                            <label class="col-md-12 padding-0">Is your business a limited company?</label>
                            <div class="radio">
                                <label class="radio-lable"><input type="radio" name="ltd_company" value="Yes" required="">Yes</label>
                            </div>
                            <div class="radio">
                                <label class="radio-lable"><input type="radio" name="ltd_company" value="No">No</label>
                            </div>
                        </div>
                        <div class="col-md-12 div-margin">
                            <label>Company Name</label>
                            <input type="text" name="company_name" placeholder="" class="form-control" required="">
                        </div>
                        <div class="col-md-12 div-margin">
                            <label>Company Number</label>
                            <input type="text" name="company_number" placeholder="" class="form-control" required="">
                        </div>
                        <div class="col-md-12 div-margin">
                            <label class="col-md-12 padding-0">Have you been creating new processes, products or services, or making improvements to existing ones (whether successful or not)?</label>
                            <div class="radio">
                                <label class="radio-lable"><input type="radio" name="new_p_p_s" value="Yes" required="">Yes</label>
                            </div>
                            <div class="radio">
                                <label class="radio-lable"><input type="radio" name="new_p_p_s" value="No">No</label>
                            </div>
                            <div class="radio">
                                <label class="radio-lable"><input type="radio" name="new_p_p_s" value="Unsure">Unsure</label>
                            </div>
                        </div>
                        <div class="col-md-12 div-margin">
                            <label class="col-md-12 padding-0">Have you used or combined technologies in new ways?</label>
                            <div class="radio">
                                <label class="radio-lable"><input type="radio" name="new_technologies" value="Yes" required="">Yes</label>
                            </div>
                            <div class="radio">
                                <label class="radio-lable"><input type="radio" name="new_technologies" value="No">No</label>
                            </div>
                            <div class="radio">
                                <label class="radio-lable"><input type="radio" name="new_technologies" value="Unsure">Unsure</label>
                            </div>
                        </div>
                        <div class="col-md-12 div-margin">
                            <label class="col-md-12 padding-0">Any failures in product or process development or improvement?</label>
                            <div class="radio">
                                <label class="radio-lable"><input type="radio" name="failure" value="Yes" required="">Yes</label>
                            </div>
                            <div class="radio">
                                <label class="radio-lable"><input type="radio" name="failure" value="No">No</label>
                            </div>
                            <div class="radio">
                                <label class="radio-lable"><input type="radio" name="failure" value="Unsure">Unsure</label>
                            </div>
                        </div>
                        <div class="col-md-12 div-margin">
                            <label>Have you developed a new or changed product or process that has characteristics substantially different from those currently available (i.e. more efficient, robust, flexible, less expensive, etc.)?</label>
                            <select class="form-control" name="development" required="">
                                <option disabled="" selected="">- Select -</option>
                                <option>Streamlining manufacturing process through automation</option>
                                <option>Integrating new materials to improve product performance and manufacturing process.</option>
                                <option>Major improvements in packaging e.g. to enhance shelf-life of the contents</option>
                                <option>Unsure</option>
                            </select>
                        </div>
                        <div class="col-md-12 div-margin">
                            <label class="col-md-12 padding-0">Has this required an advance in science or technology to do this , which a competent professional in your field could not easily work out?</label>
                            <div class="radio">
                                <label class="radio-lable"><input type="radio" name="sci_technology" value="Yes" required="">Yes</label>
                            </div>
                            <div class="radio">
                                <label class="radio-lable"><input type="radio" name="sci_technology" value="No">No</label>
                            </div>
                        </div>
                        <div class="col-md-12 div-margin">
                            <label>Has this work needed spending on staff, subcontractors, external workers, software, or consumed / wasted materials?</label>
                            <select class="form-control" name="work_need" required="">
                                <option disabled="" selected="">- Select -</option>
                                <option>Staff</option>
                                <option>External Workers</option>
                                <option>Software</option>
                                <option>Consumed / Wasted Materials</option>
                                <option>NA</option>
                            </select>
                        </div>
                        <div class="col-md-12 div-margin">
                            <label>What is your estimated total spend on this work?</label>
                            <select class="form-control select-list" name="amnt_spent" required="">
                                <option disabled="" selected="">- Select -</option>
                                <option>£0 - £100k</option>
                                <option>£101 - £250k</option>
                                <option>Above £250k</option>
                            </select>
                        </div>
                        <div class="col-md-12 div-margin">
                            <label>Has this work been carried out in the last 2 years?</label>
                            <input type="text" name="time_span" placeholder="" class="form-control" required="">
                        </div>
                        <div class="col-md-12 div-margin">
                            <h4>What was the scientific or technological advance?</h4>
                            <p>Some guidance:</p>
                            <ul class="form-li">
                                <li>Context / Reason for the advance?</li>
                                <li>What is the current state of technology?</li>
                                <li>What was the advance in technology sought?</li>
                            </ul>
                        </div>
                        <div class="col-md-12 div-margin">
                            <label>What was the scientific or technological advance?</label>
                            <textarea rows="5" name="sci_tech_advance" placeholder="" required=""></textarea>
                        </div>
                        <div class="col-md-12 div-margin">
                            <h4>What scientific or technological uncertainties were encountered?</h4>
                            <p>Some guidance:</p>
                            <ul class="form-li">
                                <li>What areas were you not sure of how to achieve?</li>
                                <li>Were the uncertainties/challenges predicted at the outset or whether they were ones
                                    that the team encountered along the way.</li>
                                <li>What were the various approaches considered?</li>
                                <li>What were the challenges of these approaches? (pros/cons/considerations)</li>
                                <li>Reasons for progressing in whichever direction.</li>
                            </ul>
                        </div>
                        <div class="col-md-12 div-margin">
                            <label>What scientific or technological uncertainties were encountered?</label>
                            <textarea rows="5" name="sci_tech_uncertainties" placeholder="" required=""></textarea>
                        </div>
                        <div class="col-md-12 div-margin">
                            <h4>How and when were the uncertainties overcome?</h4>
                            <p>Some guidance:</p>
                            <p>This is probably the most important part of the submission to HMRC – please go into as much detail as possible about the difficulties, dead ends,
                                failures, and successes, re-thinks, during your research and development, and how any such difficulties were overcome. Also most important – please
                                describe in detail the testing that you did, the redesigning carried out because of the results of testing, failures in testing, what different approaches
                                you tried out, methods used, innovation etc. This demonstrates the R&D process that your company has undertaken, which is the essence of R&D.</p>
                            <ul class="form-li">
                                <li>What were the details of your first design attempt?</li>
                                <li>How did you test the design and what results did you get from the testing?</li>
                                <li>If at any stage the design failed, why do you think this was?</li>
                                <li>What changes did you think of that might fix any of the problems that arose during testing and why?</li>
                                <li>How did you change the design in the light of the results of the testing, and what results did you get when you tested the new design?</li>
                                <li>Did you make any further changes to the design, and if so what were the changes?</li>
                                <li>Did you have to abandon any of the project or any of its design features because it was not possible to get satisfactory results?</li>
                            </ul>
                        </div>
                        <div class="col-md-12 div-margin">
                            <label>How and when were the uncertainties overcome?</label>
                            <textarea rows="5" name="overcome_uncertainties" placeholder="" required=""></textarea>
                        </div>
                        <div class="col-md-12 div-margin">
                            <h4>Why wasn’t the knowledge being sought readily deducible by competent professionals?</h4>
                            <p>Some guidance:</p>
                            <ul class="form-li">
                                <li>Why was project beyond the capabilities of the most competent professional within the company.</li>
                                <li>Why was this difficult, not plain sailing or easy to predict?</li>
                            </ul>
                        </div>
                        <div class="col-md-12 div-margin">
                            <label>Why wasn’t the knowledge being sought readily deducible by competent professionals?</label>
                            <textarea rows="5" name="knowledge" placeholder="" required=""></textarea>
                        </div>
                        <div class="col-md-12 div-margin">
                            <label>Was this project undertaken on behalf of and directly financed by a third party, or was it undertaken as your own company’s initiative?</label>
                            <textarea rows="5" name="third_party_or_company" required="" placeholder=""></textarea>
                        </div>
                        <div class="col-md-12 div-margin">
                            <input class="submit mt-30" name="submit-details" type="submit" value="Submit">
                        </div>
                    <!--</fieldset>-->

                </form>
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


    </body>
</html>