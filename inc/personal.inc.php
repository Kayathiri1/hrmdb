<?php
session_start();
$emp_reg_id=$_SESSION['uname'];
$first_name="";
$surname="";
$marital_status="";
$phoneno="";
$emailid="";
$bd_date="";
$gender="";

$db = mysqli_connect('localhost', 'root', '', 'hrm');



if (isset($_POST['update'])) {
  $first_name = mysqli_real_escape_string($db, $_POST['first_name']);
  $surname = mysqli_real_escape_string($db, $_POST['surname']);
  $marital_status = mysqli_real_escape_string($db, $_POST['marital_status']);
  $phoneno = mysqli_real_escape_string($db, $_POST['phoneno']);
  $emailid = mysqli_real_escape_string($db, $_POST['emailid']);
  $bd_date = mysqli_real_escape_string($db, $_POST['bd_date']);
  $gender = mysqli_real_escape_string($db, $_POST['gender']); 

    $query="SELECT * FROM  employee_job_details WHERE emp_reg_id='$emp_reg_id'";
    $query1="SELECT * FROM  emp_personel_details WHERE emp_reg_id='$emp_reg_id'";

    $result=mysqli_query($db,$query);
    $result1=mysqli_query($db,$query1);

 $query = "UPDATE emp_personel_details set first_name='$first_name',surname='$surname',marital_status='$marital_status',phoneno='$phoneno',emailid='$emailid',bd_date='$bd_date', gender='$gender' where emp_reg_id='$emp_reg_id'";
           $var= mysqli_query($db, $query);
            if($var){
            header("location:../account.php?Successfully_Updated");}
          else{
                      header("location:../account.php?Failed");}
  
          }

    

?>