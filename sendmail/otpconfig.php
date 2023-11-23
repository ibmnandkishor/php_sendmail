<?php
$otp=$_POST['otp'];
$con=mysqli_connect('localhost','root','','otpvarification');
$sql="select * from otp where otp='$otp'";
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_array($result)){
        $sl=$row['otp'];
        if($sl==$otp){
            echo "<script>
            alert('successfully login')
            location.href='welcome.php'</script>";
        }
    }}
else{
    echo "<script>
    alert('otp not match')
    location.href='otp.php'</script>";
}

?>