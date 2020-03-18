<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
  <style>
.valid {
  border : 2px solid green;
}
.invalid {
  border: 2px solid red;
}

  </style>
    <div class="container">
      <h1>Register As a New Vlentaire</h1>
   

        <div class="form-group">
            <label for="Name">Full Name</label>
            <input type="text" name="full_name" expr-data="^[a-zA-Z]+ [a-zA-Z]+$" class="form-control" id="full_name"  aria-describedby="emailHelp" placeholder="Enter Your Name">
            <small class="form-text text-muted" id="name_error" style="color:red!important;"></small>
          </div>

          <div class="form-group">
            <label for="InputEmail">Email address</label>
            <input type="email" name="email" expr-data="^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$" class="form-control" id="Email" aria-describedby="emailHelp" placeholder="Enter email">
            <small class="form-text text-muted" id="email_error"></small>
          </div>

          <div class="form-group">
            <label for="InputPhone">Phone Number</label>
            <input type="text" name="phone" expr-data="^0[1-9][0-9]{8}$" class="form-control" id="Phone" placeholder="Enter Your Phone">
            <small class="form-text text-muted" id="phone_error"></small>
          </div>
          
          <div class="form-group">
            <label for="InputPassword1">Password</label>
            <input type="password" name="pass_one" expr-data="^(?=(.*\d){1})(.*\S)(?=.*[a-zA-Z\S])[0-9a-zA-Z\S]{7,}" class="form-control" id="password1" placeholder="Password">
            <small class="form-text text-muted" id="pass_error"></small>
          </div>

          <div class="form-group">
            <label for="InputPassword1"> Repeat password</label>
            <input type="password" name="pass_two" class="form-control" id="password2" placeholder="Repeat Password">
            <small class="form-text text-muted" id="pass2_error"></small>
          </div>
          <div class="form-group">
               
            <select class="form-control" name="blood_type" id="blood_Type">
              <option value="0">Bllod Type</option>
              <option value="1">O+</option>
              <option value="2">O-</option>
              <option value="3">B+</option>
              <option value="4">B-</option>
              <option value="5">A+</option>
              <option value="6">A-</option>
              <option value="7">AB+</option>
              <option value="8">AB-</option>
            </select>
            </div>

            <div class="form-group">
               
                <select class="form-control" name="agent_state"  id="state"> 
                <option selected="selected" value="0">--state--</option>
                    
                      </select>
                 
                  </div>

                  <div class="form-group">
               
                    <select class="form-control" name="agent_town"  id="town"> 
                     <option selected="selected" value="0" >--town--</option>
                                    
                    </select>
                     
                      </div>
                      <label for="exampleInputPassword1">Gender</label>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="gender"  value="0" checked>
            <label class="form-check-label" for="male">
              Male
            </label>
          </div>

          <div class="form-check">
            <input class="form-check-input" type="radio" name="gender" value="1" checked>
            <label class="form-check-label" for="female">
              Female
            </label>
          </div>

          <div class="form-group col-6 col-sm-4 d-inline-flex p-2">

        <button class="btn btn-danger col-sm-4" id="btn_register" onclick="registration()">Register</button>

      </div>

</div>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/states.js"></script>
<script src="js/register.js"></script>
<script>
const Full_name = document.querySelector('#full_name');
const Email = document.querySelector('#Email');
const Phone = document.querySelector('#Phone');
const Pass1 = document.querySelector('#password1');
const Pass2 = document.querySelector('#password2');


const Name_error = document.querySelector('#name_error');
const Email_error = document.querySelector('#email_error');
const Phone_error = document.querySelector('#phone_error');
const Pass1_error = document.querySelector('#pass_error');
const Pass2_error = document.querySelector('#pass2_error');

function validate(){
  let regxFullname = new RegExp($(Full_name).attr('expr-data'));
  $(Full_name).on('keyup',function(){
    if(!regxFullname.test($(Full_name).val())){
      $(Full_name).removeClass('valid');  
      $(Full_name).addClass('invalid');
      $(Name_error).text("full name not match");
      $(Full_name).focus();
    
  }else{
    $(Full_name).removeClass('invalid');
    $(Full_name).addClass('valid');
    $(Name_error).text("");
  }
  });
  
  let regxEmail = new RegExp($(Email).attr('expr-data'));
  $(Email).on('keyup',function(){
  if(!regxEmail.test($(Email).val())){
    $(Email).removeClass('valid');  
      $(Email).addClass('invalid');
    $(Email_error).text("Email not match");
    $(Email).focus();
    
  }else{
    $(Email).removeClass('invalid');  
      $(Email).addClass('valid');
    $(Email_error).text("");
  }

});

  let regxPhone = new RegExp($(Phone).attr('expr-data'));

  $(Phone).on('keyup',function(){
  if(!regxPhone.test($(Phone).val())){
    $(Phone).removeClass('valid');  
      $(Phone).addClass('invalid');
    $(Phone_error).text("Phone numbre not match");
    $(Phone).focus();
    
  }else{
    $(Phone).removeClass('invalid');  
      $(Phone).addClass('valid');
    $(Phone_error).text("");
  }

});

  let regxPass = new RegExp($(Pass1).attr('expr-data'));
  $(Pass1).on('keyup',function(){
  if(!regxPass.test($(Pass1).val())){
    $(Pass1).removeClass('valid');  
      $(Pass1).addClass('invalid');
    $(Pass1_error).text("Password not match");
    $(Pass1).focus();
  }else{
    $(Pass1).removeClass('invalid');  
      $(Pass1).addClass('valid');
    $(Pass1_error).text("");
  }

});

$(Pass2).on('keyup',function(){
  if((!regxPass.test($(Pass1).val())) || ($(Pass2).val() != $(Pass1).val()) )
   {
    $(Pass2).removeClass('valid');  
      $(Pass2).addClass('invalid');
    $(Pass2_error).text("the passowrds not the same");
    $(Pass2).focus();
   
  }else{
    $(Pass2).removeClass('invalid');  
      $(Pass2).addClass('valid');
    $(Pass2_error).text("");
  }
  
});
}

function verifyoption(){
  $('.form-control').on('change',function(){

    if(($('#blood_Type').val() != "0") && ($('#state').val()!="0"))
    { 
      return true;
    }
    
    });
    return false;
}
function verifyfields(){
  
  $('.form-control').on('keyup',function(){
    var y = 0;

  $('.form-control').each(function(index,value){ 
    if($(value).hasClass('valid'))
    {
      y = y+1;
      
    }
    
  });
  if (y === 5 && verifyoption() == true){
     $('#btn_register').attr('disabled',false);
    }else{
      $('#btn_register').attr('disabled',true);
    }
  });
  
 
}

function registration(){
  let dataa = $('.form-control, .form-check-input').serialize();
  $.post('includes/register_valid.php',dataa,function(data){
    console.log(data);
  });
}


$(document).ready(function(){

validate();
verifyfields();
});

</script>
</body>
</html>