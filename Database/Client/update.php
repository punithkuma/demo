<?php
// include Database connection file
 include("../db/dbConnection.php");
 
 
// check request
if(isset($_POST))
{
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
    $ClientStatus = "update";
    // Updaste User details
    $query = "UPDATE cliententry SET   clientName = '$ClientName' , caseType = '$CaseType' ,caseNumber='$CaseNum', entryDate='$CaseDate' , clientAddress = '$ClientAdrs' , clientState = '$ClientState' ,clientCity='$ClientCity', postalCode = '$ClientyPin' , deskNumber = '$ClientDesk' , phoneNumber='$ClientPh',clientStatus='$ClientStatus' WHERE clientID = '$ClientID'";
    if (!$result = mysqli_query($con, $query)) {
        exit(mysqli_error($con));
    }
   // echo $query;
    echo "Update Successfuly";
}