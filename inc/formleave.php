<?php
$fname="";
$uname="";
$psw="";
$email="";
$type="";
$num_day="";
$from_date="";
$to_date="";
$comment="";
$status='awaiting';

$db = mysqli_connect('localhost', 'root', '', 'ddb');

if (isset($_POST['apply_leave'])) {
	$fname = mysqli_real_escape_string($db, $_POST['fname']);
	$uname = mysqli_real_escape_string($db, $_POST['uname']);
    $psw = mysqli_real_escape_string($db, $_POST['psw']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $type = mysqli_real_escape_string($db, $_POST['type']);
    $num_day = mysqli_real_escape_string($db, $_POST['num_day']);
    $from_date = mysqli_real_escape_string($db, $_POST['from_date']);
    $to_date = mysqli_real_escape_string($db, $_POST['to_date']);
    $comment = mysqli_real_escape_string($db, $_POST['comment']);

    $query="SELECT * FROM student WHERE uname='$uname' AND psw='$psw'";
    $result=mysqli_query($db,$query);

    if(mysqli_num_rows($result)==1){
        $query = "INSERT INTO leave_table (uname,  type, num_day , from_date, to_date, comment,approval)
            VALUES('$uname', '$type','$num_day', '$from_date','$to_date','$comment','$status')";
       mysqli_query($db, $query);
      
    	header('account.php');
     	echo "##############You application submitted successfully";
      	echo "<script type='text/javascript'>alert('Passwords don't match!')</script>";
    }else{
    	header('location:error.php');
    }
}

?>