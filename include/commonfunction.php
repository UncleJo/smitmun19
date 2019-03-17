<?php

//Helper function to clean the user input
function cleanInput($input) {

    $search = array(
        '@<script[^>]*?>.*?</script>@si', // Strip out javascript
        '@<[\/\!]*?[^<>]*?>@si', // Strip out HTML tags
        '@<style[^>]*?>.*?</style>@siU', // Strip style tags properly
        '@<![\s\S]*?--[ \t\n\r]*>@'         // Strip multi-line comments
    );

    $output = preg_replace($search, '', $input);
    return $output;
}

//function needs to be call on all the input string before sending to database
function sanitize($input) {
    if (is_array($input)) {
        foreach ($input as $var => $val) {
            $output[$var] = sanitize($val);
        }
    } else {
        if (get_magic_quotes_gpc()) {
            $input = stripslashes($input);
        }
        $output = cleanInput($input);
        //$output = mysql_real_escape_string($input);
    }
    return $output;
}

/////////////////INPUT VALIDATION FUNCTION BEGIN
function validateuserid($val) {
    if (preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $val)) {
        return false;
    }
    return true;
}

function validinput($val) {
    if (preg_match('/[#*~^*!<>%?]/', $val)) {
        return false;
    }
    return true;
}
function validinputrequired($val) {
    if (empty($val))
    {
       return false;
    }
    else if (preg_match('/[#*~^*`!<>%?]/', $val)) {
        return false;
    }
    return true;
}

function isValidDate($date)
{
	if(preg_match("/^(\d{4})-(\d{2})-(\d{2})$/", $date, $matches))
	{
		if(checkdate($matches[2], $matches[3], $matches[1]))
		{
			return true;
		}
	}
}

function checkEmail($input) {
    return preg_match('/^\S+@[\w\d.-]{2,}\.[\w]{2,6}$/iU', $input) ? true : false;
}

function checkDecimal($input) {
    return is_numeric($input);
}

function checkInteger($val, $length) {
    $flag = true;
    if (is_numeric($val))
    {
        $flag == true;
    }
    else
        return false;
    
    if (empty($length)) {
        return $flag;
    } else {
        if (strlen($val) != $length) {
            return false;
        } else {
            return true;
        }
    }
}

function IsNotEmpty($input) {
    if (empty($input))
        return false;
    else
        return true;
}

function validateType($string, $type, $length) {
    // assign the type
    $type = 'is_' . $type;
    if (!$type($string)) {
        return FALSE;
    }
    // now we see if there is anything in the string
    elseif (empty($string)) {
        return FALSE;
    }
    // then we check how long the string is
    elseif (strlen($string) != $length) {
        return FALSE;
    } else {
        // if all is well, we return TRUE
        return TRUE;
    }
}

/////////////////INPUT VALIDATION FUNCTION END


function get_indian_datetime() {
    date_default_timezone_set('GMT');
    $temp = strtotime("+5 hours 30 minutes");
    $date = date("Y-m-d H:i:s", $temp);
    return $date;
}

function get_indian_date() {
    date_default_timezone_set('GMT');
    $temp = strtotime("+5 hours 30 minutes");
    $date = date("Y-m-d", $temp);
    return $date;
}

function get_indian_time() {
    date_default_timezone_set('GMT');
    $temp = strtotime("+5 hours 30 minutes");
    $time = date("H:i:s", $temp);
    return $time;
}



?>
