<?php
  

$db = mysqli_connect('localhost', 'root', '', 'hrm');









$emp_reg_id="";
$job_title="";
$joined_date="";
$reports_to="";
$emp_status_id="";
$department="";
$branch="";
$role="";






if (isset($_POST['create'])) {
  $emp_reg_id = mysqli_real_escape_string($db, $_POST['emp_reg_id']);
  $job_title = mysqli_real_escape_string($db, $_POST['job_title']);
  $joined_date = mysqli_real_escape_string($db, $_POST['joined_date']);
  $reports_to = mysqli_real_escape_string($db, $_POST['reports_to']);
  $emp_status_id = mysqli_real_escape_string($db, $_POST['emp_status_id']);
  $department = mysqli_real_escape_string($db, $_POST['department']);
  $branch = mysqli_real_escape_string($db, $_POST['branch']);
  $role = mysqli_real_escape_string($db, $_POST['role']); 


    $query="SELECT * FROM  employee_job_details WHERE emp_reg_id='$emp_reg_id'";
  

    $result=mysqli_query($db,$query);

    if(mysqli_num_rows($result)==0){
        

           
     $query="SELECT change_employee_details('$emp_reg_id','$job_title','$joined_date','$reports_to','$emp_status_id','$branch','$department','$role')";
         mysqli_query($db, $query);
      // $query="INSERT INTO `employee_job_details` (`emp_reg_id`, `job_title`, `joined_date`, `reports_to`, `emp_status_id`, `branch_id`, `dep_id`, `working_status`) VALUES ('$emp_reg_id', '$job_title', '$joined_date', '$reports_to', '$emp_status_id', '$branch', '$department', 'in');";
      //   $result=mysqli_query($db, $query);
      // $query1="INSERT into `emp_personel_details` (`emp_reg_id`) values ('$emp_reg_id');";
      //   $result1=mysqli_query($db, $query1);
      // $query2="INSERT into `user_account` values ('$emp_reg_id','jupi@123','$role');";
      //         $result2=mysqli_query($db, $query2);

            header("location:account.php?Successfully_Created");
         
          }
    else{
      header("location:account.php?Registration_ID_exists");
    }
    
}
