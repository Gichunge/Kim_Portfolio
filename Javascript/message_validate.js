function msg_validate() {    
    var name_value = checkName();
    var email_value = checkEmail();
    var msg_value = checkMessage();    
    if(name_value&&email_value&&msg_value){
        /*submits the form to the action script*/
        document.messageForm.submit();        
    }
    else{
        return false;
    }
}
/*checking in the name textbox*/
function checkName(){
    var user = document.messageForm.user.value;
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
    var mail = document.messageForm.email.value;
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
function checkMessage(){
    var msg = document.messageForm.message.value;
    if (msg==null || msg == "") {
        document.getElementById("msg_id").style.backgroundColor = "#ff9999";         
        document.getElementById('msg_error').innerHTML = 'Please Write your Message!';
        return false;
    }
     else{
        document.getElementById('msg_error').innerHTML = '';
        return true;
    }
}