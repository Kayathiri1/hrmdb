<?php
$conn=mysqli_connect('localhost','root','','hrm');
$eid=$_GET['eid'];
$sql="SELECT * FROM _leave WHERE emp_reg_id='$eid';";
$result=mysqli_query($conn,$sql);
$applicantsarray=array();
while($row=mysqli_fetch_assoc($result)){
	$applicantsarray[]=$row;
}
foreach ($applicantsarray as $applicant){
	$emp_reg_id=$applicant['emp_reg_id'];
	$leave_type=$applicant['leave_type'];
	$fromdt=$applicant['fromdt'];
	$leave_days=$applicant['leave_days'];


}

