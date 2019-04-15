<?php
    if(isset($_POST['ClientID']))
    {
        // include Database connection file 
        include("../db/dbConnection.php");
 
        // get values 
        $ClientID = $_POST['ClientID'];
        $CName = $_POST['CName'];
        $CMail = $_POST['CMail'];
        $CDesg = $_POST['CDesg'];
        $CPhnum = $_POST['CPhnum'];
        $CDesknum = $_POST['CDesknum'];
        $cStatus = "created";
        $query = "INSERT INTO clientcontactperson(clientID,contactName,contactEmail,contactDesignation,phoneNumber,deskNumber,cStatus) VALUES('$ClientID','$CName','$CMail','$CDesg','$CPhnum','$CDesknum','$cStatus')";
        if (!$result = mysqli_query($con, $query)) {
            exit(mysqli_error($con));
        }
       // echo  $leave_id;
        echo "Save Successfuly";
    }
?>