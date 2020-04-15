<?php 
require 'connection.php';
$bloodType = $_POST['blood_type'];
$town = $_POST['agent_town'];
$state = $_POST['agent_state'];
//echo $bloodType;
//echo $town;
//echo $state;
if ($town != '0'){
   // $query = "SELECT `volunteer`.`full_name`, `volunteer`.`email` FROM `volunteer` WHERE `volunteer`.`bloodType`='$bloodType' AND `volunteer`.`wilaya_id`='$state' AND `volunteer`.`town`='$town'";
    $query = "SELECT * FROM `volunteer` JOIN wilayas ON wilaya_id=wilayas.id AND volunteer.bloodType='$bloodType' JOIN communes ON communes.id=volunteer.town AND wilayas.id='$state' AND communes.id='$town'";
    $result = mysqli_query($connection,$query);
    $myArray = [];
    while($row = $result->fetch_assoc()) {
        $myArray[] = $row;

    }
    header('Content-Type: application/json');
    $valentaire = json_encode($myArray);

    mysqli_free_result($result);
    mysqli_close($connection);

}else{
    $query = "SELECT * FROM `volunteer` JOIN wilayas ON wilaya_id=wilayas.id AND bloodType='$bloodType' and wilayas.id='$state'";
    //$query = "SELECT * FROM `volunteer` WHERE `volunteer`.`bloodType`='$bloodType' AND `volunteer`.`wilaya_id`='$state'";
    $result = mysqli_query($connection,$query);
    $myArray = [];
    while($row = $result->fetch_assoc()) {
        $myArray[] = $row;

    }
    header('Content-Type: application/json');
    $valentaire = json_encode($myArray);
    echo $valentaire;

    mysqli_free_result($result);
    mysqli_close($connection);

}

?>

