function hire_validate() {    
    var name_value = checkName();
    var email_value = checkEmail();
    var phone_value = checkPhone();
    var service_value = checkService();
    if(name_value&&email_value&&phone_value&&service_value){
        /*submits the form to the action scritp*/
        document.hireForm.submit();        
    }
    else{
        return false;
    }
}
/*checking in the name textbox*/
function checkName(){
	var user = document.hireForm.user.value;
	if (user==null || user == "") {	
		document.getElementById("name_id").style.backgroundColor = "#ff9999";	
        document.getElementById('name_error').innerHTML = 'Please Input Your Name!';
        return false;
    }
    else{
    	document.getElementById('name_error').innerHTML = '';
    	return true;
    }
}
/*checking in the email textbox*/
function checkEmail(){
	var mail = document.hireForm.mail.value;
	if (mail==null || mail == "") {
		document.getElementById("email_id").style.backgroundColor = "#ff9999";			
        document.getElementById('email_error').innerHTML = 'Please Input Your Email Address!';
        return false;
    }
     else{
    	document.getElementById('email_error').innerHTML = '';
    	return true;
    }
}
/*checking in the phone textbox*/
function checkPhone(){
	var mobile = document.hireForm.mobile.value;
	if (mobile==null || mobile == "") {
		document.getElementById("mobile_id").style.backgroundColor = "#ff9999";			
        document.getElementById('phone_error').innerHTML = 'Please Input Your Phone Number!';
        return false;
    }
     else{
    	document.getElementById('phone_error').innerHTML = '';
    	return true;
    }
}
/*checking if any service was selected*/
function checkService(){
	var service = '';
	var len = document.hireForm.service.length;
	for(var i=0;i<len;i++){
        if(document.hireForm.service[i].checked){
            service=document.hireForm.service[i].value;
            break;
        }
    }
    if(service=='' || service==null){
        document.getElementById('service_error').innerHTML = 'Please Select a Service you would like me to Offer to you!';
        return false;
    }
    else{
        document.getElementById('service_error').innerHTML = '';
        return true;
    }
}