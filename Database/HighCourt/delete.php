<?php
// check request
if(isset($_POST['ID']) && isset($_POST['ID']) != "")
{
    // include Database connection file
    include("../db/dbConnection.php");
 
 
    // get user id
    $ID = $_POST['ID'];
    $delStatus = "deleted";
 
    // delete User
  //  $query = "DELETE FROM state_details WHERE id = '$ID'";
  $query = "UPDATE cliententry SET  clientStatus = '$delStatus '  WHERE id = '$ID'";
   
    if (!$result = mysqli_query($con, $query)) {
        exit(mysqli_error($con));
    }
    echo "Delete Successfuly";
}
?>