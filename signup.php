<?php 
require 'connect.php';
// checking if form is filled
if(isset($_POST["submit"])){
    // recieve form data
    $your_name=$_POST["your_name"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    // send data to database
    $send="INSERT INTO users_tb(your_name, email, password) VALUES('$your_name', '$email', '$password')";

    $send_query = mysqli_query($conn, $send);
    // validate if data is saved successfully
    if($send_query){
        header('location: index.php');
    }
    else{echo "error";
    }
}




?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="shortcut icon" href="img/icon.png" type="image/x-icon">
        <link rel="stylesheet" href="css/materialize.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <title>Materialize CSS</title>
    </head>
    <body>
        <section class="section">
            <div class="container">
                <h1 class="teal-text">Sign Up</h1>
                <form action="signup.php" method="POST">
                    <div class="section section">
                        <div class="row">
                            <div class="col s7">
                                <img src="suzzy-ai-ed.jpeg" alt="" class="responsive-img">
                            </div>
                            <div class="col s5">
                                <div class="input-field col s12">
                                    <input id="your_name" type="text" name="your_name">
                                    <label for="your_name">Your Name</label>
                                </div>
                                <div class="input-field col s12">
                                    <input id="email" type="email" name="email">
                                    <label for="email">Email Address</label>
                                </div>
                                <div class="input-field col s12">
                                    <input id="password" type="password" name="password">
                                    <label for="password">Password</label>
                                </div>
                                <br>
                                <div class="center-align">
                                    <input type="submit" value="submit" class="btn btn-large" name="submit">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>

        <script src="js/jquery.js"></script>
        <script src="js/materialize.js"></script>
        <script>
        $(document).ready(function(){

        })
        </script>
    </body>
</html>