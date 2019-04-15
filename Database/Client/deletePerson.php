<?php
// check request

    // include Database connection file
    include("../db/dbConnection.php");
 
 
    // get user id
    $ClientID = $_POST['ClientID'];
    $CName = $_POST['CName'];
    $CMail = $_POST['CMail'];
    $CDesg = $_POST['CDesg'];
    $CPhnum = $_POST['CPhnum'];
    $CDesknum = $_POST['CDesknum'];
 
    // delete User
  //  $query = "DELETE FROM state_details WHERE id = '$ID'";
  $query = "DELETE FROM  clientcontactperson WHERE clientID='$ClientID' and contactName='$CName' and contactEmail='$CMail' and contactDesignation='$CDesg' and phoneNumber='$CPhnum' and deskNumber='$CDesknum' ";
   
    if (!$result = mysqli_query($con, $query)) {
        exit(mysqli_error($con));
    }
   // echo $query
    echo "Delete Successfuly";

?>