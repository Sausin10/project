<?php

//storing database details in variables.
		$hostname = "localhost";
        $username = "newroot";
        $password = "newroot";
        $dbname = "glimmer";
   

    //creating connection to database
    $con = mysqli_connect($hostname, $username, $password, $dbname);
    //checking if connection is working or not
    if(!$con)
    {
        die("Connection failed!" . mysqli_connect_error());
    }
    else 
    {
        echo "Successfully Connected! <br>";
    }
	//Output Form Entries from the Database
    $sql = "SELECT * FROM form";
    //fire query
    $result = mysqli_query($con, $sql);
	
	
	 if(mysqli_num_rows($result) > 0)
    {
       while($row = mysqli_fetch_assoc($result)){
           echo "id: " . $row["id"]. " - Name: " . $row["name"]. " Phone: ". $row["phone"]. " Message: ". $row["msg"] ." Product id: ". $row["id"] . "Address: ". $row["address"]  "<br>";
       }
    }
    else
    {
        echo "0 results";
    }
    // closing connection
    mysqli_close($con);


?>