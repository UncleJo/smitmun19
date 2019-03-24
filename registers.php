
<!DOCTYPE HTML>
<html>
    <head>
        <title>SMITMUN Reisgration for SMITians</title>
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
                            <h4>Registration Form for SMITians</h4>
                            <form id="reg_form" name="reg_form" method="post" action="registerprocess.php">
                                <div class="12u">
                                        NOTE - Cost for this event for <b>SMITians is &#8377 1,200/- only.</b> You will be prompt for payment method after you fill the registration form. If you are coming as a double delegation, ask your partner to register and select the same preferences as you and inform us on 8927285017 (Whastapp) about your partner details and we'll match you up in no time.

                                    </div><br>
                                <div id="error_msg" style="color: red; text-align: center;">
                                        
                                </div>
                                <div class="row uniform">
                                    <div class="6u 12u(xsmall)">
                                        <input type="text" name="first_name" id="first_name" value="" placeholder="First Name *" />
                                        <span id="first_name_span" style="color: red;" class="label label-danger"></span>
                                    </div>
                                    <div class="6u 12u(xsmall)">
                                        <input type="text" name="last_name" id="last_name" value="" placeholder="Last Name *" />
                                        <span id="last_name_span" style="color: red;" class="label label-danger"></span>
                                    </div>
                                    <div class="6u 12u(xsmall)">
                                        <input type="text" name="age" id="age" value="" placeholder="Age *" onkeypress="return validate_num_input(event);" />
                                        <span id="age_span" style="color: red;" class="label label-danger"></span>
                                    </div>
                                    <div class="6u 12u(xsmall)">
                                        <input type="text" name="school" id="school" value="" placeholder="Course * (Eg - BTech)" />
                                        <span id="school_span" style="color: red;" class="label label-danger"></span>
                                    </div>
                                    <div class="6u 12u(xsmall)">
                                        <input type="text" name="grade" id="grade" value="" placeholder="Phone number *" />
                                        <span id="grade_span" style="color: red;" class="label label-danger"></span>
                                    </div>
                                    <div class="6u 12u(xsmall)">
                                        <input type="text" name="location" id="location" value="" placeholder="Location (Eg SMIT Hostel or Gangtok) *" />
                                        <span id="location_span" style="color: red;" class="label label-danger"></span>
                                    </div>
                                    <div class="6u 12u(xsmall)">
                                        <input type="text" name="email" id="email" value="" placeholder="Email *" />
                                        <span id="email_span" style="color: red;" class="label label-danger"></span>
                                    </div>
                                    <div class="6u 12u(xsmall)">
                                        <div class="select-wrapper">
                                            <select name="exp" id="exp">
                                                <option value="">- Experience -</option>
                                                <option value="Novice 0-2 MUN">Novice 0-2 MUN</option>
                                                <option value="Intermediate 3-5 MUN">Intermediate 3-5 MUN</option>
                                                <option value="Experienced 6-9 MUN">Experienced 6-9 MUN </option>
                                                <option value="Advance 9+ MUN">Advance 9+ MUN</option>
                                            </select>
                                            <span id="exp_span" style="color: red;" class="label label-danger"></span>
                                        </div>
                                    </div>
                                    <div class="12u">
                                        Previous experience as a participant in oratory events (Recognition(s) if any) :    
                                        <textarea name="pre_exp" id="pre_exp" placeholder="Write a brief" rows="6"></textarea>
                                        <span id="pre_exp_span" style="color: red;" class="label label-danger"></span>
                                    </div>
                                    <div class="4u 12u(xsmall)">
                                        <div class="select-wrapper">
                                            <select id="com1" name="com1">
                                                <option value="">- Committee 1st Preference  -</option>
                                                <option value="AIPPM">AIPPM</option>
                                                <option value="GA">GA</option>
                                                <option value="WHO">WHO</option>
                                                <option value="ECEC">ECEC</option>
                                                <option value="SC">SC</option>
                                            </select>
                                            <span id="com1_span" style="color: red;" class="label label-danger"></span>
                                        </div>
                                    </div>
                                    <div class="4u 12u(xsmall)">
                                        <div class="select-wrapper">
                                            <select id="com2" name="com2">
                                                <option value="">- Committee 2nd Preference -</option>
                                                <option value="AIPPM">AIPPM</option>
                                                <option value="GA">GA</option>
                                                <option value="WHO">WHO</option>
                                                <option value="ECEC">ECEC</option>
                                                <option value="SC">SC</option>
                                            </select>
                                            <span id="com2_span" style="color: red;" class="label label-danger"></span>
                                        </div>
                                    </div>
                                    <div class="4u 12u(xsmall)">
                                        <div class="select-wrapper">
                                            <select name="com3" id="com3">
                                                <option value="">- Committee 3rd Preference -</option>
                                                <option value="AIPPM">AIPPM</option>
                                                <option value="GA">GA</option>
                                                <option value="WHO">WHO</option>
                                                <option value="ECEC">ECEC</option>
                                                <option value="SC">SC</option>
                                            </select>
                                            <span id="com3_span" style="color: red;" class="label label-danger"></span>
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="4u 12u(xsmall)">
                                        <div class="select-wrapper">
                                            <select id="com4" name="com4">
                                                <option value="">- Committee Dis-preference  -</option>
                                                <option value="AIPPM">AIPPM</option>
                                                <option value="GA">GA</option>
                                                <option value="WHO">WHO</option>
                                                <option value="ECEC">ECEC</option>
                                                <option value="SC">SC</option>
                                            </select>
                                            <span id="com4_span" style="color: red;" class="label label-danger"></span>
                                        </div>
                                    </div>
                                    <div class="12u">
                                        NOTE - The following questions are not necessary to answer, but answering these help us better understand how suitable are you for the allocated committee :
                                    </div>
                                    <div class="12u">
                                        Why ? Committee Preference :
                                        <textarea name="why_com" id="why_com" placeholder="Write in brief" rows="6"></textarea>
                                        <span id="why_com_span" style="color: red;" class="label label-danger"></span>
                                    </div>
                                    
                                    <div class="12u">
                                        What would be the benefits or the adverse effects if Narendra Modi becomes the Prime Minister of India Again?
                                        <textarea name="why_com1" id="why_com1" placeholder="Write in brief" rows="6"></textarea>
                                        <span id="why_com1_span" style="color: red;" class="label label-danger"></span>
                                    </div>
                                    
                                    <div class="12u">
                                        What is your take on the contentions regarding the growth of intolerance in the country? (Only for Indian Committees - AIPPM)
                                        <textarea name="why_com2" id="why_com2" placeholder="Write in brief" rows="6"></textarea>
                                        <span id="why_com2_span" style="color: red;" class="label label-danger"></span>
                                    </div>
                                    
                                    <div class="12u">
                                        What are the possible solutions to the current refugee crisis? (Only for Conventional UN Committees like GA, SC, WHO)
                                        <textarea name="why_com3" id="why_com3" placeholder="Write in brief" rows="6"></textarea>
                                        <span id="why_com3_span" style="color: red;" class="label label-danger"></span>
                                    </div>
                                    <div class="12u">
                                       Do you think Bitcoin have any place as a common currency in the world? If yes, why? (Only for ECEC)
                                        <textarea name="why_com4" id="why_com4" placeholder="Write in brief" rows="6"></textarea>
                                        <span id="why_com4_span" style="color: red;" class="label label-danger"></span>
                                    </div>
                                    <div class="12u">
                                        <ul class="actions">
                                            <li><input type="submit" value="Register" class="special" /></li>
                                            <li><input type="reset" value="Reset" /></li>
                                        </ul>
                                    </div>
                                </div>
                            </form>
                        </section>
                    </div>
                </section>
            </article>

            <!-- Footer -->
            <footer id="footer">
                <?php include_once 'include/footer.php';?>
            </footer>

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

    </body>
</html>