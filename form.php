<?php
if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $message = $_POST['msg'];
		 $address = $_POST['address'];
		 $quantity = $_POST['quantity'];
		  $id = $_POST['id'];
		  
    }
	
	
	 //database details. You have created these details in the third step. Use your own.
        $host = "localhost";
        $username = "newroot";
        $password = "newroot";
        $dbname = "glimmer";

        //create connection
        $con = mysqli_connect($host, $username, $password, $dbname);
        //check connection if it is working or not
        if (!$con)
        {
            die("Connection failed!" . mysqli_connect_error());
        }
        //This below line is a code to Send form entries to database
        $sql = "INSERT INTO form (name,id,address,phone,quantity,msg)VALUES "('$name','$id','$address','$phone','$quantity','$msg');
		  
		// "INSERT INTO form (id, name_fld, email_fld, msg_fld) VALUES ('0', '$name', '$email', '$message')";
      //fire query to save entries and check it with if statement
        $rs = mysqli_query($con, $sql);
        if($rs)
        {
            echo "Message has been sent successfully!";
        }
      	else{
         	echo "Error, Message didn't send! Something's Wrong."; 
        }
      //connection closed.
        mysqli_close($con);
    }
?>