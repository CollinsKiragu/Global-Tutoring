<!DOCTYPE html>
<html>
 
<head>
    <title>Message page</title>
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
         
        // Taking all 10 values from the form data(input)
        $name =  $_REQUEST['name'];
        $email = $_REQUEST['email'];
		$subject = $_REQUEST['subject'];
		$message = $_REQUEST['message'];
		
        // Performing insert query execution
        // here our table name is message
        $sql = "INSERT INTO messages  VALUES ('$name',
            '$email','$subject','$message')";
         
        if(mysqli_query($conn, $sql)){
            header('Location: thankscontact.html');
 
            
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