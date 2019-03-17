$(function() {
//    alert(1);
    $("#login_form").ajaxForm({
        beforeSubmit:validatedetails,
        success: handleResponse
    });
});


function validatedetails()
{
    var error = false;
    $("#user_name_span").hide();
    $('#password_span').hide();

    if ($('#user_name').val() == "") {
        $('#user_name_span').html('Required !');
        $('#user_name_span').show();
        error = true;
    }
    if ($('#password').val() == "") {
        $('#password_span').html('Required !');
        $('#password_span').show();
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
        if (response >= 1){
            window.location.href = 'registartionlist.php';
        }
        else {
            alert('Please try after some time.');
            window.location.href = 'databank.php';
        }
        
    }
}