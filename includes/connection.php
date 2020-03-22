
<?php
include 'config.php';

    $connection = mysqli_connect(DB_SERVER,DB_USESRNAME,DB_PASSWORD,DB_NAME);
    if($connection === false){
            die("ERROR: could Not Connect". mysqli_connect_error());
    }

?>