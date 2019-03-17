<?php
if (!strlen(session_id()))
    session_start();
include_once $_SERVER['DOCUMENT_ROOT'].'/dpsgmun2016/include/config.php';

if (isset($_POST['job'])) {
    switch ($_POST['job']) {
        case 'view_details':view_details($_POST['registration_key']);
            break;
    }
}

function save_registration($reg_arr) {
    $mysqli = GetMysqlInstance();
    $sql = "INSERT INTO registration(f_name, l_name, age, email_id, school, grade, location, exp, pre_exp, com_1, com_2, com_3,
            com_4, why_com, why_com1, why_com2, why_com3, created_datetime)
            VALUES('" . $reg_arr['first_name'] . "',
                    '" . $reg_arr['last_name'] . "',
                    '" . $reg_arr['age'] . "',
                    '" . $reg_arr['email'] . "',
                    '" . $reg_arr['school'] . "',
                    '" . $reg_arr['grade'] . "', 
                    '" . $reg_arr['location'] . "', 
                    '" . $reg_arr['exp'] . "', 
                    '" . $reg_arr['pre_exp'] . "',
                    '" . $reg_arr['com1'] . "',
                    '" . $reg_arr['com2'] . "',
                    '" . $reg_arr['com3'] . "',
                    '" . $reg_arr['com4'] . "',
                    '" . $reg_arr['why_com'] . "',
                    '" . $reg_arr['why_com1'] . "',
                    '" . $reg_arr['why_com2'] . "',
                    '" . $reg_arr['why_com3'] . "',
                    Now())";
    $mysqli->query($sql);
    $reg_key = $mysqli->insert_id;
    
    $_SESSION['reg_key'] = $reg_key;
    $path = "view_registration.php";
    return $path."~".$reg_key;
}

function get_reg_detail($reg_key){
    $mysqli = GetMysqlInstance();
    $sql = "SELECT * FROM registration WHERE registration_key='$reg_key'";
    $resource = $mysqli->query($sql);
    if ($resource->num_rows > 0) {
        return $resource->fetch_object();
    }
    return '';
}

function check_emailid($email_id){
    $mysqli = GetMysqlInstance();
    $sql = "SELECT * FROM registration WHERE email_id='$email_id'";
    $resource = $mysqli->query($sql);
    if ($resource->num_rows > 0) {
        return $resource->fetch_object();
    }
    return '';
}

function login($login_arr){
    $mysqli = GetMysqlInstance();
    $sql = "SELECT * FROM user WHERE user_name='".$login_arr['user_name']."' AND password='".$login_arr['password']."'";
    $resource = $mysqli->query($sql);
    if ($resource->num_rows > 0) {
        $row = $resource->fetch_object();
        $_SESSION['user_key'] = $row->user_key;
//        $_SESSION['user_name']=$username;
        return $_SESSION['user_key'];
    }
    return '';
}

function get_registration_list(){
    $mysqli = GetMysqlInstance();
    $sql = "SELECT * FROM registration";
//    echo $sql; exit;
    $resource = $mysqli->query($sql);
    if ($resource->num_rows > 0) {
        $result = array();
        while ($row = $resource->fetch_object()) {
            $result[] = $row;
        }
        return $result;
    }
    return '';
}

function view_details($registration_key) {
    $_SESSION['registration_key'] = $registration_key;
    echo "registartionlistview.php";
}


?>