<?php 
require 'connection.php';
$bloodType = $_POST['blood_type'];
//echo $bloodType;
$state = $_POST['agent_state'];
if($_POST['agent_town']){
 $town = $_POST['agent_town'];
}

//if ($_POST['agent_town']){
// $query = "select * from volunteer where bloodType='$bloodType'";
//}else{
// $query = "select * from volunteer where bloodType='$bloodType'";
//}
 $query = "select full_name,email,phone,state from volunteer where bloodType='$bloodType'";
 $result = mysqli_query($connection,$query);
 $myArray = [];
 while($row = $result->fetch_assoc()) {
    $myArray[] = $row;
}

 header('Content-Type: application/json');
$valentaire = json_encode($myArray);
echo $valentaire;

 //  $valentaire = mysqli_fetch_all($result,MYSQLI_ASSOC);

// echo var_dump($valentaire) ;
  //$jsonFile = json_encode($valentaire);
  //echo $jsonFile;
 mysqli_free_result($result);
 mysqli_close($connection);

?>
