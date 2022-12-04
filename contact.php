<!DOCTYPE html>
<html>

<head>
<title> Sql Init</title>
</head>

<body>

        <?php
        // $servername = "localhost";
        // $username = "root";
        // $password = "";
        // $dbname = "contact";
        $conn = mysqli_connect("localhost", "root", "", "contact");
         
          // Check connection
          if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }

             if($conn === false){
             die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         
         
        // Taking all 3 values from the form data(input)
        $name =  $_REQUEST['name'];
        $email = $_REQUEST['email'];
        $message = $_REQUEST['message'];
         
        // Performing insert query execution
        $sql = "INSERT INTO messages VALUES ('$name','$email','$message')";
         
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";
 
            echo nl2br("\n$name\n$email\n$message");
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
         
        // Close connection
        mysqli_close($conn);
        ?>

</body>
</html>