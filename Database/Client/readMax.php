<?php
    // include Database connection file 
    include("../db/dbConnection.php");
 
    $query = "SELECT MAX(id) AS maxid FROM cliententry";
 
    if (!$result = mysqli_query($con, $query)) {
        exit(mysqli_error($con));
    }
 
    // if query results contains rows then featch those rows 
    if(mysqli_num_rows($result) > 0)
    {
        $number = 1;
        while($row = mysqli_fetch_assoc($result))
        {
          
			$rows[] = $row;
        }
    }
  
 
   echo json_encode($rows);
?>