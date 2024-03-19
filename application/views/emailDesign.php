<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html"; charset="utf-8" />    
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <style>
            .hero {
                padding: 6.25rem 10rem !important;
                margin: 0px !important;
                background: #f1f3f4;
            }
            .cardbox {
                border-radius: 3px;
                margin-bottom: 20px;
                /*padding: 0px 160px 0px 160px !important;*/
                background: #fafafa;
            }
            .cardbox .cardbox-heading {
                padding: 16px 16px;
                margin: 0;
            }
            .cardbox .cardbox-item {
                position: relative;
                display: block;
                padding: 0px 60px;
            }
            .cardbox .cardbox-item img{
            }
            .cardbox-base{
                border-bottom: 1px solid #656565;
                padding: 16px;
            }
            .content{
                font-family: raleway !important;
                color: #767676 !important;
                font-size: 1.5em !important;
                text-align: center !important;
            }
            .content-head{
                font-family: raleway !important;
                color: #767676 !important;
                font-size: 2em !important;
                text-align: center !important;
                padding-bottom: 30px;
                font-weight: 600;
            }
            .bottom-line{
                content: "";
                display: block;
                margin: 0 auto;
                width: 70%;
                /*padding-top: 20px;*/
                border-bottom: 1px solid #767676 !important;
            }
            .mt-20{
                margin-top:20px;
            }
            .color-para{
                color: #2698d8;
                font-size: 1.5em;
                font-family: raleway;
                text-align: center;
            }
            .link-btn{
                color: #fff !important;
                text-decoration:none;
                border: none;
                border-radius: 0;
                width: 100%;
                font-family: raleway;
                font-size: 2em;
            }
            .btn{
                width:100%;
                background: #0186d1;
                border: none;
                padding: 0.5em 0px;
                cursor: pointer !important;
                color: #fff;
                font-size: 1em;
                font-family: raleway
            }
            .link-btn:hover{
                background: #0186d1 !important;
                color: #fff !important;
                border: none !important;
                border-radius: 0 !important;
                width: 100% !important;
                font-family: raleway !important;
                font-size: 2.5em !important;
            }
            .padding-para{
                padding: 30px 60px;
            }
            .content >img{
                width: 150px;
            }
            .check-icon{
                color: #0186d1 !important;
                text-align: center !important;
                font-size: 7em !important;
                font-weight: lighter !important;
            }
            .line-hgt{
                line-height: 0.5;
            }
            @media (max-width: 767px) {

                .cardbox {
                    border-radius: 3px;
                    margin-bottom: 20px;
                    padding: 0px !important;
                    background: #fafafa;
                }
                .hero {
                padding: 0rem 0rem !important;
                margin: 0px !important;
                background: #f1f3f4;
            }
            .line-hgt{
                line-height: 1;
            }
            .content{
                font-family: raleway !important;
                color: #767676 !important;
                font-size: 1em !important;
                text-align: center !important;
            }
            .content-head{
                font-family: raleway !important;
                color: #767676 !important;
                font-size: 1.5em !important;
                text-align: center !important;
                padding-bottom: 30px;
                font-weight: 600;
            }
            .color-para{
                color: #2698d8;
                font-size: 1em;
                font-family: raleway;
                text-align: center;
            }
            .cardbox .cardbox-heading {
                padding: 16px 16px;
                margin: 0;
            }
            }
        </style>
    </head>
    <body>
        <section class="hero">
            <div class="container">
                <div class="row">	

                    <div class="col-lg-6 offset-lg-3">

                        <div class="cardbox shadow-lg bg-white">

                            <div class="cardbox-heading">
                                <h4 class="content-head bottom-line">User Details</h4>
                                <div class="mt-20">
                                    <p class="color-para">Name - <?php echo $name; ?></p>
                                    <p class="color-para">Last Name - <?php echo $lname; ?></p>
                                    <p class="color-para">Phone Number - <?php echo $num; ?></p>
                                    <p class="color-para">Email - <?php echo $mail; ?></p>
                                    <p class="color-para">Subject - <?php echo $subject; ?></p>
                                    <p class="color-para">Message - <?php echo $messg; ?></p>
                                </div>
                            </div><!--/ cardbox-heading -->
			  

                        </div>

                    </div>
                </div>
            </div>
        </section>
    </body>
</html>