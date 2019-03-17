$(function() {
//    alert(1);
    $("#reg_form").ajaxForm({
        beforeSubmit:validatedetails,
        success: handleResponse
    });
});


function validatedetails()
{
    var error = false;
    $("#first_name_span").hide();
    $('#last_name_span').hide();
    $('#age_span').hide();
    $('#school_span').hide();
    $('#location_span').hide();
    $('#grade_span').hide();
    $('#email_span').hide();
    $('#exp_span').hide();
    $('#pre_exp_span').hide();
    $('#com1_span').hide();
    $('#com2_span').hide();
    $('#com3_span').hide();
    $('#com4_span').hide();
    $('#why_com_span').hide();
    $('#why_com1_span').hide();
    $('#why_com2_span').hide();
    $('#why_com3_span').hide();

    if ($('#first_name').val() == "") {
        $('#first_name_span').html('Required !');
        $('#first_name_span').show();
        error = true;
    }
    if ($('#last_name').val() == "") {
        $('#last_name_span').html('Required !');
        $('#last_name_span').show();
        error = true;
    }
    if ($('#age').val() == "") {
        $('#age_span').html('Required !');
        $('#age_span').show();
        error = true;
    }
    if ($('#school').val() == "") {
        $('#school_span').html('Required !');
        $('#school_span').show();
        error = true;
    }
    if ($('#grade').val() == "") {
        $('#grade_span').html('Required !');
        $('#grade_span').show();
        error = true;
    }
    if ($('#location').val() == "") {
        $('#location_span').html('Required !');
        $('#location_span').show();
        error = true;
    }
    if ($('#email').val() == "")
    {
        $('#email_span').html('Required !');
        $('#email_span').show();
        error = true;
    }
    if ($('#exp').val() == "")
    {
        $('#exp_span').html('Required !');
        $('#exp_span').show();
        error = true;
    }
    if($('#pre_exp').val()==""){
        $('#pre_exp_span').html('Required !');
        $('#pre_exp_span').show();
        error = true;
    }
    if($('#com1').val()==""){
        $('#com1_span').html('Required !');
        $('#com1_span').show();
        error = true;
    }
    if($('#com2').val()==""){
        $('#com2_span').html('Required !');
        $('#com2_span').show();
        error = true;
    }
    if($('#com3').val()==""){
        $('#com3_span').html('Required !');
        $('#com3_span').show();
        error = true;
    }



    if (error == true) {
        return false;
    } else {
        return true;
    }
}


function handleResponse(response)
{
    var message = '';
    if (response.search(/ERROR/) != -1)
    {
        message = response.substring(8);
    }
    if (message != '')
    {
        $("#error_msg").html(message);
        $("#error_msg").show();
    }
    else
    {
        var arr = response.split('~');
        var url = arr[0];
        var reg_key = arr[1];
        if (reg_key >= 1){
            alert('Registartion successfuly completed.');
            window.location.href = url;
        }
        else {
            alert('Please try after some time.');
        }
        
    }
}

function view_details(registration_key) {
//    alert(registration_key);
    $.ajax({
        type: "POST",
        url: "include/function.php",
        data: {
            registration_key : registration_key,
            job : 'view_details'
        },
        success: function(response) {
            window.location.href = response;
        }
    });
}

