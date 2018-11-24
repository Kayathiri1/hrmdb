<?php
session_start();

$uname="";
$psw="";
$db = mysqli_connect('localhost', 'root', '', 'hrm');

//login
  if (isset($_POST['login'])){

    $uname=mysqli_real_escape_string($db,$_POST['uname']);
    $psw=mysqli_real_escape_string($db,$_POST['psw']);
    $usertype=$uname[0];
    
    
    $query="SELECT * FROM user_account WHERE emp_reg_id='$uname' AND password='$psw' ";
    $result=mysqli_query($db,$query);
    if(mysqli_num_rows($result)>0){

      $_SESSION['uname']=$uname;

     
      while($row=mysqli_fetch_assoc($result)) {
          $role=$row['role'];
           $_SESSION['role']=$role;

         }
  
            
        header("location:account.php?Loginsuccessful");
      

   }else{
      $_SESSION['wrong']="Username/Password incorrect";
      header("location:index.php?LoginFailed");
      

    }
  }
  




  //logout
  if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['uname']);
    header('location: login.php');
  }




$emp_reg_id="";
$leave_type="";
$leave_days="";
$fromdt="";
$leave_status='awaiting';



if (isset($_POST['apply'])) {
  $emp_reg_id = mysqli_real_escape_string($db, $_POST['emp_reg_id']);
  $leave_type = mysqli_real_escape_string($db, $_POST['leave_type']);
  $leave_days = mysqli_real_escape_string($db, $_POST['leave_days']);
  $fromdt = mysqli_real_escape_string($db, $_POST['fromdt']);
    

    $query="SELECT * FROM  employee_job_details WHERE emp_reg_id='$emp_reg_id'";
    $result=mysqli_query($db,$query);

    if(mysqli_num_rows($result)==1){
        $query = "INSERT INTO _leave (emp_reg_id,  leave_type, leave_days , fromdt, leave_status)
            VALUES('$emp_reg_id', '$leave_type','$leave_days', '$fromdt','$leave_status')";
       mysqli_query($db, $query);
      
      header("location:account.php?Successfully_Submitted");
      echo "##############You application submitted successfully";
        echo "<script type='text/javascript'>alert('Passwords don't match!')</script>";
    }else{
      header("location:account.php?Failed");
    }
}




$emp_reg_id="";
$first_name="";
$surname="";
$marital_status="";
$phoneno="";
$emailid="";
$bd_date="";
$gender="";




if (isset($_POST['update'])) {
  $emp_reg_id = mysqli_real_escape_string($db, $_POST['emp_reg_id']);
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

    if(mysqli_num_rows($result)==1){
          if(mysqli_num_rows($result1)==0){

            $query = "INSERT INTO emp_personel_details (emp_reg_id,  first_name, surname , marital_status, phoneno, emailid, bd_date, gender)
                VALUES('$emp_reg_id', '$first_name','$surname', '$marital_status','$phoneno','$emailid','$bd_date','$gender')";
            mysqli_query($db, $query);
      
            header("location:account.php?Successfully_Updated");
          }else{
             $query = "UPDATE emp_personel_details set first_name='$first_name',surname='$surname',marital_status='$marital_status',phoneno='$phoneno',emailid='$emailid',bd_date='$bd_date', gender='$gender' where emp_reg_id='$emp_reg_id'";
            mysqli_query($db, $query);
      
            header("location:account.php?Successfully_Updated");
          }
    }else{
      header("location:account.php?Failed");
    }
    
}



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
        

            $query = "INSERT INTO employee_job_details (emp_reg_id,  job_title, joined_date , reports_to, emp_status_id, department, branch, working_status)
                VALUES('$emp_reg_id', '$job_title','$joined_date', '$reports_to','$emp_status_id','$department','$branch','$working_status')";
            $query1 = "INSERT INTO user_account (emp_reg_id,  password, role)
                VALUES('$emp_reg_id', '$password','$role')";

             $query2 = "INSERT INTO emp_personel_details (emp_reg_id)
                VALUES('$emp_reg_id')";
            mysqli_query($db, $query);

            
            mysqli_query($db, $query1);

           
            mysqli_query($db, $query2);
            
            header("location:account.php?Successfully_Created");
         
          }
    else{
      header("location:account.php?Failed");
    }
    
}
