
function IsAlphaNumeric(inputvalue)
{
    var regExp = /^[0-9a-zA-Z]+$/;
    if(!regExp.test(inputvalue))
    {
        return false;
    }
    return true;
}

function IsAlphabetic(inputvalue)
{
    var regExp = /^[a-zA-Z\.\ss]+$/;
    if(!regExp.test(inputvalue))
    {
        return false;
    }
    return true;
}

function validate_num_input(evt) 
{
    //    evt = (evt) ? evt : window.event;
    //    var charCode = (evt.which) ? evt.which : evt.keyCode;
    //    if ((charCode > 31 && (charCode < 48 || charCode > 57)) && (charCode != 46) 
    //        && (charCode != 37) && (charCode != 38) && (charCode != 3) && (charCode != 22) 
    //        && (charCode != 8) && (charCode != 127) && (charCode != 14) && (charCode != 15) ) {
    //        return false;
    //    }
    //    return true;
    var target = evt.target || evt.srcElement;
    var charCode = (evt.which) ? evt.which : event.keyCode;
    if (charCode == 46 && target.value.split('.').length>1) {
        return false;
    }
    if (charCode != 46 && charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}

function validate_num_input_comma(evt) 
{
    evt = (evt) ? evt : window.event;
    var target = evt.target || evt.srcElement;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode == 46 && target.value.split('.').length>1) {
        return false;
    }
    if ((charCode > 31 && (charCode < 48 || charCode > 57)) && (charCode != 44) 
        && (charCode != 37) && (charCode != 38) && (charCode != 3) && (charCode != 22) 
        && (charCode != 8) && (charCode != 127) && (charCode != 14) && (charCode != 15) ) {
        return false;
    }
    return true;
}

function validate_mobile_num_input(evt) 
{
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if ((charCode > 31 && (charCode < 48 || charCode > 57)))  {
        return false;
    }
    return true;
}

function IsSpecialCharacterExist(inputvalue)
{
    var charactersNotAllowed ="[#*~^`'!<>%?]";
    var hasFound = searchForInvalidCharacters(inputvalue,charactersNotAllowed);

    if(hasFound){
        return true
    }
    return false;	
}

function searchForInvalidCharacters(inputString,searchString)
{ 
    var invalidCharFound = false;
    for (i = 0; i < inputString.length && invalidCharFound == false; i++)
    {
        strChar = inputString.charAt(i);
        if (searchString.indexOf(strChar) != -1) 
            invalidCharFound = true;
    }
    return invalidCharFound;
}

function email_validate(inputvalue)
{
    var regExp = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if(!regExp.test(inputvalue))
    {
        return false;
    }
    return true;
}


function IsNumeric(inputvalue)
{
    //alert(inputvalue);
    var regExp = /^[0-9.]+$/;
    if(!regExp.test(inputvalue))
    {
        return false;
    }
    return true;
}


function close_div(divid)
{
    $('#'+divid).hide();
}

function getCookie(c_name)
{
    var c_value = document.cookie;
    var c_start = c_value.indexOf(" " + c_name + "=");
    if (c_start == -1)
    {
        c_start = c_value.indexOf(c_name + "=");
    }
    if (c_start == -1)
    {
        c_value = null;
    }
    else
    {
        c_start = c_value.indexOf("=", c_start) + 1;
        var c_end = c_value.indexOf(";", c_start);
        if (c_end == -1)
        {
            c_end = c_value.length;
        }
        c_value = unescape(c_value.substring(c_start,c_end));
    }
    return c_value;
}
function setCookie(c_name,value,exdays)
{
    var exdate=new Date();
    exdate.setDate(exdate.getDate() + exdays);
    var c_value=escape(value) + ((exdays==null) ? "" : "; expires="+exdate.toUTCString());
    document.cookie=c_name + "=" + c_value+"; path=/";;
}

function delete_cookie(name) {
    document.cookie = name + '=; expires=Thu, 01-Jan-70 00:00:01 GMT;';
}

function clearform(divid)
{
    $('#'+divid).find('input:text, input:password, input:file, select, textarea')
    .each(function() {
        $(this).val('');
    });
    $('#'+divid).find('input:radio, input:checkbox').each(function() {
        $(this).removeAttr('checked');
        $(this).removeAttr('selected');
    });
}

function close_bill_div(status,is_reload)
{
    if(is_reload==1)
    {
        window.location.href=window.location.href;
    }
    else
    {
        if(status==2)
        {
            $('#bill_list_edit').hide();
        }
        else
        {
            $('#content_div').hide();
        }
    }
}

function close_cash_indent_div(status,is_reload)
{
    
    if(is_reload==1)
    {
        window.location.href=window.location.href;
    }
    else
    {
        if(status==2)
        {
            $('#cash_list_edit').hide();
        }
        else
        {
            $('#content_div').hide();
        }
    }
}
function close_cash_exp_div(status,is_reload)
{
    
    if(is_reload==1)
    {
        window.location.href=window.location.href;
    }
    else
    {
        if(status==2)
        {
            $('#cash_list_edit').hide();
        }
        else
        {
            $('#content_div').hide();
        }
    }
}

function close_requisition_div(status,is_reload)
{
    
    if(is_reload==1)
    {
        window.location.href=window.location.href;
    }
    else
    {
        if(status==2)
        {
            $('#requisition_list_edit').hide();
        }
        else
        {
            $('#content_div').hide();
        }
    }
}
//For Date Time
$(".datepicker").datepicker({
    changeMonth: true,
    changeYear: true
});
//FOR DD-MM-YYYY
function is_future_date(date_to_compare,current_date)
{
    var parts = date_to_compare.split("-");
    date_to_compare=new Date(parts[2], parts[1] - 1, parts[0]);
    var parts = current_date.split("-");
    current_date=new Date(parts[2], parts[1] - 1, parts[0]);
    if(date_to_compare > current_date)
        return true;
    else
        return false;
}
function is_valid_date_range(date_from,date_to)
{
    var parts = date_from.split("-");
    date_from=new Date(parts[2], parts[1] - 1, parts[0]);
    var parts = date_to.split("-");
    date_to=new Date(parts[2], parts[1] - 1, parts[0]);
    if(date_from > date_to)
        return true;
    else
        return false;
}
//FOR YYYY-MM-DD
//function is_future_date(date_to_compare,current_date)
//{
//    date_to_compare=new Date(date_to_compare);
//    current_date=new Date(current_date);
//    if(date_to_compare > current_date)
//        return true;
//    else
//        return false;
//}
//function is_valid_date_range(date_from,date_to)
//{
//   
//    date_from=new Date(date_from);
//    date_to=new Date(date_to);
//    if(date_from > date_to)
//        return true;
//    else
//        return false;
//}
function formatString(dt) {
    var day = parseInt(dt.substring(8,10));
    var month = parseInt(dt.substring(5,7));
    var year = parseInt(dt.substring(0,4));
    var date = new Date(year, month-1, day);
    return date;
}

function dayDiffInDays(dateFromId,dateToId) {
    if($('#'+dateFromId).val()!='' && $('#'+dateToId).val()!=''){
        var date1 = new Date(formatString($('#'+dateFromId).val()));
        var date2 = new Date(formatString($('#'+dateToId).val()));
        var timeDiff = (Math.abs(date2.getTime()) - Math.abs(date1.getTime()));
       return Math.ceil(timeDiff / (1000 * 3600 * 24));
    }
    return '';   
}