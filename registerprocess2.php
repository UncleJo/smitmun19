<?php

include 'include/function.php';
include 'include/commonfunction.php';

//$date = get_indian_date();
//$time = get_indian_time();

if(!IsNotEmpty($_POST['first_name']))
{
    echo 'ERROR:Enter First Name';
    exit;
}
if(!validinput($_POST['first_name']))
{
    echo 'ERROR:Can not use special charecters in First Name';
    exit;
}
if(!validinput($_POST['last_name']))
{
    echo 'ERROR:Can not use special charecters in Last Name';
    exit;
}
if(!IsNotEmpty($_POST['age']))
{
    echo 'ERROR:Enter Age';
    exit;
}
if(!validinput($_POST['age']))
{
    echo 'ERROR:Can not use special charecters';
    exit;
}
if(!IsNotEmpty($_POST['school']))
{
    echo 'ERROR:Enter School Name';
    exit;
}
if(!validinput($_POST['school']))
{
    echo 'ERROR:Can not use special charecters in School Name';
    exit;
}
if(!IsNotEmpty($_POST['grade']))
{
    echo 'ERROR:Enter Grade';
    exit;
}
if(!validinput($_POST['grade']))
{
    echo 'ERROR:Can not use special charecters in Grade';
    exit;
}
if(!IsNotEmpty($_POST['location']))
{
    echo 'ERROR:Enter Location';
    exit;
}
if(!validinput($_POST['location']))
{
    echo 'ERROR:Can not use special charecters in Location';
    exit;
}
if(!IsNotEmpty($_POST['email']))
{
    echo 'ERROR:Enter Email';
    exit;
}
if(!checkEmail($_POST['email']))
{
    echo 'ERROR:Please enter valid Email ID';
    exit;
}
if(!IsNotEmpty($_POST['exp']))
{
    echo 'ERROR:Select Experience';
    exit;
}
if(!IsNotEmpty($_POST['pre_exp']))
{
    echo 'ERROR:Enter Previous experience';
    exit;
}
if(!validinput($_POST['pre_exp']))
{
    echo 'ERROR:Can not use special charecters in Previous experience';
    exit;
}
if(!IsNotEmpty($_POST['com1']))
{
    echo 'ERROR:Select Committee 1st Preference';
    exit;
}
if(!IsNotEmpty($_POST['com2']))
{
    echo 'ERROR:Select Committee 2nd Preference';
    exit;
}
if(!IsNotEmpty($_POST['com3']))
{
    echo 'ERROR:Select Committee 3rd Preference';
    exit;
}
if(!IsNotEmpty($_POST['com4']))
{
    echo 'ERROR:Select Committee Dis-preference';
    exit;
}
if(!validinput($_POST['why_com']))
{
    echo 'ERROR:Can not use special charecters in Committee Preference';
    exit;
}






$reg_arr = array();

$reg_arr['first_name'] = sanitize($_POST['first_name']);
$reg_arr['last_name'] = sanitize($_POST['last_name']);
$reg_arr['age'] = sanitize($_POST['age']);
$reg_arr['school'] = sanitize($_POST['school']);
$reg_arr['grade'] = sanitize($_POST['grade']);
$reg_arr['location'] = sanitize($_POST['location']);
$reg_arr['email'] = sanitize($_POST['email']);
$reg_arr['exp'] = sanitize($_POST['exp']);
$reg_arr['pre_exp'] = sanitize($_POST['pre_exp']);
$reg_arr['com1'] = sanitize($_POST['com1']);
$reg_arr['com2'] = sanitize($_POST['com2']);
$reg_arr['com3'] = sanitize($_POST['com3']);
$reg_arr['com4'] = sanitize($_POST['com4']);
$reg_arr['why_com'] = sanitize($_POST['why_com']);
$reg_arr['why_com1'] = sanitize($_POST['why_com1']);
$reg_arr['why_com2'] = sanitize($_POST['why_com2']);
$reg_arr['why_com3'] = sanitize($_POST['why_com3']);
$reg_arr['why_com4'] = sanitize($_POST['why_com4']);


//echo '<pre>';
//print_r($reg_arr);
//exit;

$msg = registrations($reg_arr);
echo $msg;


?>
