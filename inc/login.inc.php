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
    
    
    $query="SELECT * FROM user_account WHERE user_name='$uname' AND password='$psw' ";
    $result=mysqli_query($db,$query);
    if(mysqli_num_rows($result)>0){

      $_SESSION['uname']=$uname;

     
      while($row=mysqli_fetch_assoc($result)) {
          $role=$row['role'];
           $_SESSION['role']=$role;

         }
  
            
        header("location:../account.php?Loginsuccessful");
      

   }else{
      $_SESSION['wrong']="Username/Password incorrect";
      header("location:../index.php?LoginFailed");
      

    }
  }
  ?>