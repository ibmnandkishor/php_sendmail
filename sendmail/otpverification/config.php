<?php
$name=$_POST['name'];
$mail=$_POST['mail'];
$random= rand(1231,7879);
$con=mysqli_connect('localhost','root','','otpvarification');
$sql="insert into otp (name,email,otp)values('$name','$mail','$random')";
if(mysqli_query($con,$sql)){
    $to = $_POST['mail'];
    $subject = "verification otp";
    $message = $random;
    $from ="aditibm7235@gmail.com" ; 
    $headers = "From: $from";
    
    mail($to ,$subject,$message,$headers);
    echo "<script>location.href='otp.php'</script>";
}
else{
    echo "data not submit";
}

   
   

?>