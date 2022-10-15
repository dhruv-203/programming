var nam,num,email,pass,gender,dob;
function validate(){
    nam = document.Register.NAME.value;
    num = document.Register.Number.value;
    email = document.Register.Email.value;
    pass = document.Register.Pass.value;
    gender = document.Register.Gender.value;
    dob=document.Register.dob.value;    
    if(nam==""||nam==null||!nam.match("[a-zA-Z ]")){
        alert(nam);
    }
    else if(num==""||num==null||!num.match(/^\d{10}$/)){
        alert("Please Enter Phone Number Properly.. ");
    }
    else if(email==""||email==null||!email.match('^[a-zA-Z0-9]+(?:\.[a-zA-Z0-9]+)*@[a-zA-Z0-9]+(?:\.[a-zA-Z0-9]+)*$')){
        alert('Enter Your Email Properly..');
    }
    else if(pass==""||pass==null||!pass.match(/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[#$@!%&*?])[A-Za-z\d#$@!%&*?]{8,30}$/)){
        alert("Min 1 uppercase letter, Min 1 lowercase letter, Min 1 special character, Min 1 number, Min 8 characters, Max 30 characters.");
    }
    else if(gender==""||gender==null){
        alert('Please Select Your Gender...');
    }
    else{
       Ajax();
    }
}
function Ajax() {
    var register = new XMLHttpRequest();
    register.onreadystatechange = ()=>{
        if(this.readyState==4 && this.status==200){
            document.getElementById('status').innerText=this.responseText;
        }
    }
    register.open("GET","register.php?NAME="+nam+"&Pass="+pass+"&Number="+num+"&Email="+email+"&dob="+dob+"&Gender="+gender, true);
    register.send();
}