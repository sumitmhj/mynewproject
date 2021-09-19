<?php 
         require 'connection.php';

			$firstname = $_POST['firstname'];
			$middlename = $_POST['middlename'];
			$lastname = $_POST['lastname'];
			$emailid = $_POST['emailid'];
			$addrees = $_POST['addrees'];
			$rollno = $_POST['rollno'];
			$phoneno = $_POST['phoneno'];
			echo $firstname;


	$query = "insert into newtable(firstname, middlename, lastname, emailid, address, rollno, phoneno)
		values('$firstname','$middlename', '$lastname', '$emailid', '$addrees', '$rollno', '$phoneno')";

   $run = mysqli_query($conn, $query) or die(mysqli_error());

   if($run){
   	 echo "Data inserted";
   } else{
   	echo "Unable";
   }
   
	$conn -> close();

	
	?>