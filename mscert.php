<!DOCTYPE html>
<html>
 
<head>
    <title>Application page</title>
</head>
 
<body>
    <center>
        <?php
 
        // servername => localhost
        // username => root
        // password => empty
        // database name => globaltutoring
        $conn = mysqli_connect("localhost", "root", "", "globaltutoring");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         
        // Taking all 7 values from the form data(input)
        $name =  $_REQUEST['name'];
        $email = $_REQUEST['email'];
		$phone = $_REQUEST['phone'];
		$startdate = $_REQUEST['startdate'];
        $gender =  $_REQUEST['gender'];
		$mode = $_REQUEST['mode'];
		$location = $_REQUEST['location'];
         
        // Performing insert query execution
        // here our table name is apply
        $sql = "INSERT INTO mscert  VALUES ('$name',
            '$email','$phone','$startdate','$gender','$mode','$location')";
        
		 // ini_set('dispaly_errors',1);
		// error_reporting(E_ALL);
		//$from ="globaltutoring8@gmail.com";
		//$to= $email;
		//$subject="Email";
		//$message="<h3>Thank you for your application " .$name.". We will get back to you soon.";
		//$headers="From:" .$from;
         
		//mail($name,$email,$phone,$startdate,$gender);
		//if(mail($to,$subject,$message,$headers)){
        //header("Location:index.html");
		//}
		//else
        //echo("mail send failed");
		
		//$to = "kiragucollins@gmail.com";
		//$subject = "My subject";
		//$txt = "Hello world!";
		//$headers = "From: globaltutoring8@gmail.com";

		//mail($to,$subject,$txt,$headers);
		//if ( isset( $_POST['submit'] ) ) {
		//	$recipient = $_POST['email'];
		//	$subject = "Regarding your application";
		//	$message = "Hello,
		//		This is sent to notify you that we have received your application.";
		//	$sender = "From: globaltutoring8@gmail.com";
			
		//}
		
		
		//$sql_e= mysqli_query($conn,"SELECT * FROM apply;");
		
		//$to =mysqli_fetch_assoc($sql_e);
		//$subject="Regarding your application";
		//$message="Hello,
		//		This is sent to notify you that we have received your application.";
		//$from="From: globaltutoring8@gmail.com";
		
		//if(mail($to['email'],$subject, $message, $from))
		//{
		//	echo "<h3>Thank you for your application " .$name.". We will get back to you soon.</h3>";
		//}
		//if(isset($_POST['submit'])){
        //              //access user entered data
        //             $recipient = $_POST['email'];
         //            $subject = $_POST['subject'];
        //             $message = $_POST['message'];
        //             $sender = "From: globaltutoring8@gmail.com";
		//			 
		//			 if(mail($recipient, $subject, $message, $sender)){
		//				echo "<h3>Thank you for your application " .$name.". We will get back to you soon.</h3>";
						
		//}
		//}
	
			
        if(mysqli_query($conn, $sql)){
            echo "<h3>Thank you for your application " .$name.". We will get back to you soon.</h3>";
			header('Location: thanksapply.html');
            
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
         
        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>
 
</html>