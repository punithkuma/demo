<?php
// include Database connection file
 include("../db/dbConnection.php");
 
 
// check request
if(isset($_POST))
{
    // get values 
    $ClientID = $_POST['ClientID'];
    $CName = $_POST['CName'];
    $CMail = $_POST['CMail'];
    $CDesg = $_POST['CDesg'];
    $CPhnum = $_POST['CPhnum'];
    $CDesknum = $_POST['CDesknum'];
    // Updaste User details
    $query = "UPDATE clientcontactperson SET   contactName='$CName' , contactEmail='$CMail' ,contactDesignation='$CDesg', phoneNumber='$CPhnum ' , deskNumber='$CDesknum' WHERE id = '$ClientID'";
    if (!$result = mysqli_query($con, $query)) {
        exit(mysqli_error($con));
    }
   // echo $query;
    echo "Update Successfuly";
}