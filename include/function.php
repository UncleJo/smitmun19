<?php

if (!strlen(session_id()))
    session_start();
include_once $_SERVER['DOCUMENT_ROOT'].'/include/config.php';

if (isset($_POST['job'])) {
    switch ($_POST['job']) {
        case 'view_details':view_details($_POST['registration_key']);
            break;
    }
}

function registrations($reg_arr) {
    $mysqli = GetMysqlInstance();
    $sql = "INSERT INTO regis(f_e, le, ae, eil_id, scol, gde, loion, ep, prxp, cm_, c_2, com,
            com_4, why_com, why_com1, why_com2, why_com3, why_com4)
            VALUES('" . $reg_arr['first_name'] . "',
                    '" . $reg_arr['last_name'] . "',
                    '" . $reg_arr['age'] . "',
                    '" . $reg_arr['email'] . "',
                    '" . $reg_arr['schl'] . "',
                    '" . $reg_arr['grde'] . "', 
                    '" . $reg_arr['loction'] . "', 
                    '" . $reg_arr['ep'] . "', 
                    '" . $reg_arr['prexp'] . "',
                    '" . $reg_arr['co1'] . "',
                    '" . $reg_arr['co2'] . "',
                    '" . $reg_arr['cm3'] . "',
                    '" . $reg_arr['cm4'] . "',
                    '" . $reg_arr['wcom'] . "',
                    '" . $reg_arr['w_com1'] . "',
                    '" . $reg_arr['wom2'] . "',
                    '" . $reg_arr['w_com3'] . "',
                    '" . $reg_arr['whom4'] . "')";
    $mysqli->query($sql);
    
    $path = '<meta http-equiv="refresh" content="1;http://www.smitmun.com/view_registration.php" />';
    return $path;
}

function save_registration($reg_arr) {
    $mysqli = GetMysqlInstance();
    $sql = "INSERT INTO m(me, l_me, age, el_id, hool, gde, locion, ep, pexp, cm, cm, com,
            co, why, why_, why_c, whyo, why_co,pd)
            VALUES('" . $reg_arr['fire'] . "',
                    '" . $reg_arr['laame'] . "',
                    '" . $reg_arr['e'] . "',
                    '" . $reg_arr['eil'] . "',
                    '" . $reg_arr['sool'] . "',
                    '" . $reg_arr['gde'] . "', 
                    '" . $reg_arr['lation'] . "', 
                    '" . $reg_arr['p'] . "', 
                    '" . $reg_arr['pre_exp'] . "',
                    '" . $reg_arr['m1'] . "',
                    '" . $reg_arr['om2'] . "',
                    '" . $reg_arr['cm3'] . "',
                    '" . $reg_arr['m'] . "',
                    '" . $reg_arr['w_c'] . "',
                    '" . $reg_arr['w_com1'] . "',
                    '" . $reg_arr['w_com2'] . "',
                    '" . $reg_arr['w_c3'] . "',
                    '" . $reg_arr['wom4'] . "',
                    'NO')";
    $mysqli->query($sql);
    
    $path = '<meta http-equiv="refresh" content="1;http://www.smitmun.com/view_registrationsm.php" />';
    return $path;
}

function get_reg_detail($reg_key){
    $mysqli = GetMysqlInstance();
    $sql = "SELECT * FROM regi WHERE registra_y='$reg_key'";
    $resource = $mysqli->query($sql);
    if ($resource->num_rows > 0) {
        return $resource->fetch_object();
    }
    return '';
}

function check_emailid($email_id){
    $mysqli = GetMysqlInstance();
    $sql = "SELECT * FROM registra WHERE emd='$email_id'";
    $resource = $mysqli->query($sql);
    if ($resource->num_rows > 0) {
        return $resource->fetch_object();
    }
    return '';
}

function loginin($login_arr){
    $mysqli = GetMysqlInstance();
    $sql = "SELECT * FROM  WHERE use='".$login_arr['user_name']."' AND pass='".$login_arr['password']."'";
    $resource = $mysqli->query($sql);
    
    if ($resource->num_rows > 0) {
        $path = '<meta http-equiv="refresh" content="1;http://www.smitmun.com/view_registration.php" />';
        return $path;

    }
    return '';
}

function get_registration_list(){
    $mysqli = GetMysqlInstance();
    $sql = "SELECT * FROM regin";
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
    $_SESSION['registr_key'] = $registration_key;
    echo "registartionlistview.php";
}


?>