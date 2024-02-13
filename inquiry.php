<?php

if(isset($_POST['submit']))
    {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $contact = $_POST["contact"];
        $website = $_POST["website"];
        $msg = $_POST["message"];
        
        $to = "mitesh007mitesh@gmail.com";
        $subject ="Website: ". $website;
        $info = "Name: ".$name."<br>"."Message: ".$msg."<br>"."Email:".$email."<br>"."Contact:".$contact ;
        
        $message = $info;
        // print_r($Message);exit;
        // Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        
        // More headers
        $headers .= 'From: '.$email;
        
        
        $mail=mail($to,$subject,$message,$headers);
        
        if($mail)
        {
            echo "<script>alert('Your response has been recorded'); 
            window.history.back();
            </script>";
        }
        else
        {
            echo "<script>alert('Response not recorded')
             window.history.back();
            </script>";
        }



    }
    else
    {
        echo "<script>alert('Please Fill Appropriate Data')
        window.history.back();
        </script>";
    }


?>