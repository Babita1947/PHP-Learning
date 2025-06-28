<?php
$insert = false;
$error = "";
if(isset($_POST['name'])){
    // set connection variables
   $server = "localhost";
   $username = "root";
   $password = "";
   
   // create a database connection
   $con = mysqli_connect($server, $username, $password);

   if(!$con){
      die("Connection to this database failed due to". mysqli_connect_error());
   }
   // echo "Success connecting to the db";

   // collect post variables
   $name = $_POST['name'];
   $age = $_POST['age'];
   $gender = $_POST['gender'];
   $email = $_POST['email'];
   $phone = $_POST['phone'];
   $other = $_POST['other'];

   $sql = "INSERT INTO `trip`.`trip` (`name`, `age`, `gender`, `email`, `phone`, `other`, `createdAt`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$other', current_timestamp());";

    //echo $sql;

    // Execute the query
    if($con->query($sql) == true){
        //   echo "Successfully inserted";

        // flag for successful insertion
        $insert = true;
    }
    else{
        $error = "Sorry, something went wrong. Please try again later.";
        // optionally: log $con->error somewhere
    }

   // close the database connection
   $con->close();

}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel Form</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    
    <!-- Sriracha font -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sriracha&display=swap" rel="stylesheet">

     <!-- Roboto Font -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&family=Sriracha&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="style.css">
</head>

<body>
    <img class="bg" src="bg.jpg" alt="">
    <div class="container">
        <h1>Welcome to AEC US Travel Form</h1>
        <p>Enter your details to confirm your participation in the trip</p>
        <?php
            if($insert == true){
                echo "<p class='submit-msg' style='color: green;'>Thanks for submitting your form. We are happy to see you joining for the US trip</p>";
            }
            elseif($error != ""){
                echo "<p class='submit-msg' style='color: red;'>$error</p>";
            }
        ?>


        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="age" id="age" placeholder="Enter your age">
            <input type="text" name="gender" id="gender" placeholder="Enter your gender">
            <input type="email" name="email" id="email" placeholder="Enter your email">
            <input type="phone" name="phone" id="phone" placeholder="Enter your phone">
            <textarea name="desc" id="desc" cols="30" rows="10"
                placeholder="Enter any other information here"></textarea>
            <button type="submit" class="btn">Submit</button>
            <button type="reset" class="btn" style="background-color: #f44336;">Clear</button>

        </form>
    </div>

    <script src="index.js"></script>

    
</body>

</html>
