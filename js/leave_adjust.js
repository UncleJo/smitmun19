$(function() {
    $("#adjust_leave").ajaxForm({
        beforeSubmit: validatedetails,
        success: handleResponse
    });
});


function validatedetails()
{

    var error = false;
    $('#emp_key_span').hide();
    $('#leave_type_span').hide();
    $('#app_date_span').hide();
    $('#time_span').hide();
    $('#reason_span').hide();

    if ($('#emp_key').val() == "")
    {
        $('#emp_key_span').html('Select Employee Name !');
        $('#emp_key_span').show();
        error = true;
    }
    if ($('#leave_type').val() == "")
    {
        $('#leave_type_span').html('Select Leave Type !');
        $('#leave_type_span').show();
        error = true;
    }
    if ($('#time').val() == "")
    {
        $('#time_span').html('Enter Time !');
        $('#time_span').show();
        error = true;
    }
    if ($('#app_date').val() == "")
    {
        $('#app_date_span').html('Select Application Date !');
        $('#app_date_span').show();
        error = true;
    }
    if($('#reason').val()=="")
    {
        $('#reason_span').html('Enter Reason !');
        $('#reason_span').show();
        error=true; 
    }

    if (error == true)
    {
        return false;
    }
    else
    {
        return true;
    }

}
function handleResponse(response)
{
//     alert(response);
    var message = '';
    if (response.search(/ERROR/) != -1)
    {
        message = response.substring(6);
    }
    if (message != '')
    {
        $("#adjust_leave_error_msg").html(message);
        $("#adjust_leave_error_msg").show();
    }
    else
    {
        alert('ED application successfuly sent.');
        window.location.href = window.location.href;
    }
}

function ed_approve(ed_application_key) {
    $.ajax({
        type: "POST",
        url: "include/function.php",
        data: {
            ed_application_key: ed_application_key,
            job: 'ed_approve'
        },
        success: function(response) {
            alert(response);
            if(response==1) {
                alert("ED successfuly approved.")
            }
        }
    });
}
