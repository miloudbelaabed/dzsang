<?php
    require 'connection.php';
if($_SERVER['REQUEST_METHOD'] == 'POST'){

     $full_name = $_POST['name'];
     $email =  $_POST['email'];
     $phone =  $_POST['phone'];
     $password =  $_POST['pass1'];
     $blood =  $_POST['blood_type'];
     $state =  $_POST['agent_state'];
     $town =  $_POST['agent_town'];
     $gender =  $_POST['gender'];
     if ($full_name != "" && $email != "" && $phone != "" && $blood !="" && $state != "" && $town != "" && $gender != ""){
         $query = "INSERT INTO volunteer (full_name,email,phone,town,bloodType,gender,wilaya_id) VALUES ('$full_name','$email','$phone','$town','$blood','$gender','$state')";
        $data = mysqli_query($connection,$query);
        if($data){
            echo "data inserted sucssesfull !";
        }else{
            echo "data Not inserted !";
        }
     }
 }




?>
