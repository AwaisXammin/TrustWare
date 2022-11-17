<?php 
if(isset($_POST['submit'])){
    $to = "awais.xammin@gmail.com"; // this is your Email address
    $from = $_POST['email_address']; // this is the sender's Email address
    $email = $_POST['email_address'];
    $message = $_POST['note'];
    
    $subject = "Business Lead";
    $message = "Email: ".$email."<br>Message: ".$note.;
    $headers  = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=UTF-8\r\n";
    $headers .= "From: <".$from. ">" ;
    $send = mail($to,$subject,$message,$headers);
    if($send)
        {
          echo "<script>alert('Mail Sent Successfully');</script>";
        }else{
          echo "<script>alert('Mail Not Sent');</script>";
        }
    }
?>