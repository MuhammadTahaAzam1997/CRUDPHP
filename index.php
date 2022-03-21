<?php
require_once "config.php";

if (isset($_REQUEST["submit"])) {
  
    $name = $_REQUEST["name"];
    $email = $_REQUEST["email"];
    $msg = $_REQUEST["msg"];
   

    $ins = "INSERT INTO contact (name, email,msg) VALUES ('$name','$email','$msg')";
    $query1 = mysqli_query($connection, $ins);

}
else{  
  echo "lora";
    }
?>



<html>
    <head>
        <title>Contact form design</title>
        <link rel="stylesheet" type=text/css href="style.css">
    </head>
    <body>
        <div class="contact-title">
            <h1>Say hello</h1>
            <h2>we are ready to serve you</h2>
        </div>

        <div class="contact-form">
            <form id="contact-form" method="post">
            <input name="name" type="text" class="form-control" name="name" placeholder="Your Name" >
            <br>
            <input name="email" type="email" class="form-control" name="email" placeholder="Your Email" >
            <br>
            
            <textarea name="msg" class="form-control" rows="4" name="msg" placeholder="Message"></textarea>
            <br>

            <input type="submit" name="submit" value="submit">
        </form>
        </div>
    </body>
</html>