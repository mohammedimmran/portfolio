<?php
    if(isset($_POST['submit']))
    {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $msg = $_POST['message'];
        $phone=$_POST['phone'];

        $to = 'mohammedimmran2000@gmail.com';

        $subject = 'PORTFOLIO contact';

        $messaged =  "NAME :" .$fname. "\n"."PHONE: " .$phone."\n"."MESSAGE :"."\n".$msg;

        $headers = "FROM: ".$email;


        if(mail($to , $subject , $messaged , $headers))
        {
            echo "<h1>Thank you " .$fname." ".$lname." I  will contact u Soon </h1>";


        }
        else

        {
            echo "someting went wrong";
        }
    }

?>  