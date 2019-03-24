<!DOCTYPE HTML>
<!--
        Spectral by HTML5 UP
        html5up.net | @n33co
        Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
    <head>
        <title>DATA BANK</title>
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
                <header>
                    <h2>DATA BANK</h2>
                    <p>Keeping all infomation live and accessible</p>
                </header>
                <section class="wrapper style5">
                    <div class="inner">

                        <?php
                        
                        // note - the credentials of the table and its information have been changed for sec purposes
   define('DB_SERVER', '#');
   define('DB_USERNAME', '#');
   define('DB_PASSWORD', '#');
   define('DB_DATABASE', '#');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
 
    $sql="SELECT * FROM #";
    
  $result = mysqli_query($db,$sql);

//num of rows


while($row = mysqli_fetch_array($result))
{
    
echo '<center><h3>Registration Form</h3></center>';    
echo '<table border="2"><tr><td>';
echo "<b>NAME -</b> " . $row['_name'] ." ". $row['l_name'] . "<br>";
echo "<b>PHONE -</b> " . $row['gde'] . "<br>";
echo "<b>EMAIL - </b>" . $row['eml_id'] . "<br>";
echo "<b>Course -</b> " . $row['scol'] . "<br>";
echo "<b>Experience - </b>" . $row['p'] . "<br>";
echo "<b>Previous exp - </b>" . $row['prexp'] . "<br>";
echo "<b>Committee prefrences -</b> " . $row['c_1'] .", ". $row['com_2'] .", ". $row['com_3'] . "<br>";
echo "<b>Committee DIS-Prefrence - </b>" . $row['co4'] . "<br><br>";
echo "<b>PAID? -</b><font color='green'> " . $row['pd'] . "</font><br><br>";

    

echo "<b>Why ? Committee Preference :</b><br>";
echo " ". $row['why_com'] ."<br><br>";

    

echo "<b>What would be the benefits or the adverse effects if Narendra Modi becomes the Prime Minister of India Again?</b><br>";
echo " ". $row['why_com1'] ."<br><br>";
    

echo "<b>What is your take on the contentions regarding the growth of intolerance in the country? (Only for Indian Committees - AIPPM)</b><br>";
echo " ". $row['why_com2'] ."<br><br>";

    

echo "<b>What are the possible solutions to the current refugee crisis? (Only for Conventional UN Committees like GA, SC, WHO)</b><br>";
echo " ". $row['why_com3'] ."<br><br>";

    

echo "<b>Do you think Bitcoin have any place as a common currency in the world? If yes, why? (Only for ECEC)</b><br>";
echo " ". $row['why_com4'] ."<br><br>";
echo '</td></tr></table>';
    
echo "<br><br><br><br>";
}




?>
                        
                        
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

    </body>
</html>