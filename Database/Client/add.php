<?php
    if(isset($_POST['ClientID']))
    {
        // include Database connection file 
        include("../db/dbConnection.php");

      
 
        // get values 
        $ClientID = $_POST['ClientID'];
        $ClientName = $_POST['ClientName'];
        $CaseType = $_POST['CaseType'];
        $CaseNum = $_POST['CaseNum'];
        $CaseDate = $_POST['CaseDate'];
        $ClientAdrs = $_POST['ClientAdrs'];
        $ClientState = $_POST['ClientState'];
        $ClientCity = $_POST['ClientCity'];
        $ClientyPin = $_POST['ClientyPin'];
        $ClientDesk = $_POST['ClientDesk'];
        $ClientPh = $_POST['ClientPh'];
        $ClientStatus = "created";
        $query = "INSERT INTO cliententry(clientID,clientName,caseType,caseNumber,entryDate,clientAddress,clientState,clientCity,postalCode,deskNumber,phoneNumber,clientStatus) VALUES ('$ClientID','$ClientName','$CaseType','$CaseNum','$CaseDate','$ClientAdrs','$ClientState','$ClientCity','$ClientyPin',  '$ClientDesk','$ClientPh','$ClientStatus')";
        if (!$result = mysqli_query($con, $query)) {
            exit(mysqli_error($con));
        }
       // echo  $leave_id;
        echo "Save Successfuly";
    }
?>