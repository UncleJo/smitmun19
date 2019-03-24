
<html>
    <head>
        <title>Payment Details</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
        <link rel="stylesheet" href="assets/css/main.css" />
        <!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
        <!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
    </head>
    <body>

        <!-- Page Wrapper -->
        <div id="page-wrapper">

            <!-- Header -->
            <header id="header">
               <?php include_once 'include/menu.php'; ?>
            </header>

            <!-- Main -->
            <article id="main">
                
                <section class="wrapper style5" style="padding-top: 20px;">
                    <div class="inner">
                        <section>
                                    <div class="12u">
                                        <h2>
                                        Payment Details : Payment for Summit Sikkim 2019 Registration (NON-SMITian)<br><br>
                                        Fees - &#8377 1,300 (Excluding payment taxes/transaction tax)</h2>
                                        <h2><u>PAYMENT METHODS</u>
                                        </h2>
                                        <p>NOTE - After completion of Payment, please send in a screenshot of the payment at 8927285017 (Whatsapp) Stating your name and emailid given in the registration form. We will confirm your payment in 24 hr and will mail you the copy of registration after you have send in the screenshot.</p>
                                        <h3>PAY VIA UPI</h3>
                                        <p><b>Adress - </b> 8927285017@upi<br><b>Account Holders' Name - </b>Yatharth Sharma</p>
                                        <h3>PAY VIA PAYTM WALLET</h3>
                                        <p><b>Registered Number - </b> 8927285017<br><b>Account Holders' Name - </b>Yatharth Sharma</p>
                                        <h3>PAY VIA Google Pay</h3>
                                        <p><b>Registered Number - </b> 8927285017<br><b>Account Holders' Name - </b>Yatharth Sharma</p>
                                        
                                    </div>
                                    <div class="12u">
                                        <ul class="actions">
                                            <li><input type="button" value="Print" onclick="window.print();" class="special" /></li>
                                        </ul>
                                    </div>
                               
                        </section>
                    </div>
                </section>
            </article>
        </div>

        <!-- Scripts -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/jquery.scrollex.min.js"></script>
        <script src="assets/js/jquery.scrolly.min.js"></script>
        <script src="assets/js/skel.min.js"></script>
        <script src="assets/js/util.js"></script>
        <!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
        <script src="assets/js/main.js"></script>
        <script src="js/validation.js"></script>
        <script src="js/jquery.form.js"></script>
        <script src="js/register.js"></script>
        <script type="text/javascript">
            function pop_print(){
                w=window.open(null, 'Print_Page', 'scrollbars=yes');        
                w.document.write(jQuery('#print_area').html());
                w.document.close();
                w.print();
            }
        </script>
    </body>
</html>