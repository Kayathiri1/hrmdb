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
$working_status='in';
$password='jupitor123';




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
   
            header("location:account.php?Successfully_Created");
         
          }
    else{
      header("location:account.php?Failed");
    }
    
}
