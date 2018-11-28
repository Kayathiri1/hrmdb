<?php
session_start();

$db = mysqli_connect('localhost', 'root', '', 'hrm');

$emp_reg_id=$_SESSION['uname'];
$leave_type="";
$leave_days="";
$fromdt="";
$leave_status='awaiting';



if (isset($_POST['apply'])) {
  $leave_type = mysqli_real_escape_string($db, $_POST['leave_type']);
  $leave_days = mysqli_real_escape_string($db, $_POST['leave_days']);
  $fromdt = mysqli_real_escape_string($db, $_POST['fromdt']);
    

    $query="SELECT * FROM  employee_job_details WHERE emp_reg_id='$emp_reg_id'";
    $result=mysqli_query($db,$query);

    if(mysqli_num_rows($result)==1){
        $query = "INSERT INTO _leave (emp_reg_id,  leave_type, leave_days , fromdt, leave_status)
            VALUES('$emp_reg_id', '$leave_type','$leave_days', '$fromdt','$leave_status')";
       mysqli_query($db, $query);
      
      header("location:../account.php?Successfully_Submitted");
      echo "##############You application submitted successfully";
        echo "<script type='text/javascript'>alert('Passwords don't match!')</script>";
    }else{
      header("location:../account.php?Failed");
    }
}
?>