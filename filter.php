


<?php include('inc/form.php'); ?>
<?php include('inc/header.php'); ?>



  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->

   
   
    

    
    <section id="view_report">
      <div class="container">
        <div class="section-header wow fadeInUp">
          <br><br><br><br>
           <a href="view_report.php"><h2>Back </a>
          <h3></h3>
          
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6 wow fadeInUp">
            <div class="member">



              
<?php
session_start();

$department="";
$job_title="";
$paygrade_id="";
$from="";
$to="";
$emp_reg_id="";
$db = mysqli_connect('localhost', 'root', '', 'hrm');

if (isset($_POST['view_salary'])){

    $emp_reg_id=mysqli_real_escape_string($db,$_POST['emp_reg_id']);
     $query="SELECT * FROM employee_payment_details where  emp_reg_id='$emp_reg_id'";
                      $result=mysqli_query($db,$query);
                       if (mysqli_num_rows($result)>0){
                         while ($row3=mysqli_fetch_assoc($result)){
                          echo "<h1";
                         echo "<option value=".$row3['emp_reg_id'].">"."Registration ID        :",$row3['emp_reg_id']."</option>";
                          echo "<option value=".$row3['basic_salary'].">"."Basic Salary          :",$row3['basic_salary']."</option>";

                        echo "<option value=".$row3['bonus_amount'].">"."Bonus amount        :",$row3['bonus_amount']."</option>";
                        echo "<option value=".$row3['tax'].">"."Tax percentage       :",$row3['tax']."</option>";

    }}}


  if (isset($_POST['Filter_dep'])){
    $department=mysqli_real_escape_string($db,$_POST['department']);
    
    $query="CALL employee_department('$department')";
    $result1=mysqli_query($db,$query);

   //$result=mysqli_next_result($db);
    if (mysqli_num_rows($result1)>0){
           while ($row3=mysqli_fetch_assoc($result1)){
    echo "<option value=".$row3['emp_reg_id'].">".$row3['emp_reg_id']."</option>";

         }
     }else{
      header("location:account.php");
     }



  }








    // $query1="SELECT name FROM department WHERE dep_id='$department'";
    //  $result1=mysqli_query($db,$query1);
    //  if (mysqli_num_rows($result1)>0){
    //           while ($row3=mysqli_fetch_assoc($result1)){
    //           echo "<option value=".$row3['name'].">".$row3['name']."</option>";
    //           echo "===============";

    //         }
    //     }

    // $query="SELECT emp_reg_id ,first_name,surname FROM employee_job_details natural join emp_personel_details WHERE department='$department'";
    // $result=mysqli_query($db,$query);
    //  if (mysqli_num_rows($result)>0){
    //           while ($row3=mysqli_fetch_assoc($result)){
    //           echo "<option value=".$row3['emp_reg_id'].">".$row3['emp_reg_id'],"       :   ",$row3['first_name'],"            ",$row3['surname']."</option>";

    //         }
    //     }}




    if (isset($_POST['Filter_job'])){

    $job_title=mysqli_real_escape_string($db,$_POST['job_title']);
  echo "<option value=".$job_title.">".$job_title."</option>";
   echo "=========";
    $query="SELECT emp_reg_id ,first_name,surname FROM employee_job_details natural join emp_personel_details WHERE job_title='$job_title'";
    $result=mysqli_query($db,$query);
     if (mysqli_num_rows($result)>0){
              while ($row3=mysqli_fetch_assoc($result)){
              echo "<option value=".$row3['emp_reg_id'].">".$row3['emp_reg_id'],"       :   ",$row3['first_name'],"            ",$row3['surname']."</option>";

            }
        }}

     if (isset($_POST['Filter_paygrade'])){

    $paygrade_id=mysqli_real_escape_string($db,$_POST['paygrade_id']);
    $query1="SELECT name FROM paygrade_details WHERE paygrade_id='$paygrade_id'";
     $result1=mysqli_query($db,$query1);
     if (mysqli_num_rows($result1)>0){
              while ($row3=mysqli_fetch_assoc($result1)){
              echo "<option value=".$row3['name'].">".$row3['name']."</option>";
              echo "===============";

            }
        }

    $query="SELECT emp_reg_id ,first_name ,surname from emp_personel_details natural join employee_paygrade_details WHERE paygrade_id='$paygrade_id'";
    $result=mysqli_query($db,$query);
     if (mysqli_num_rows($result)>0){
              while ($row3=mysqli_fetch_assoc($result)){
              echo "<option value=".$row3['emp_reg_id'].">".$row3['emp_reg_id'],"       :   ",$row3['first_name'],"            ",$row3['surname']."</option>";

            }
        }}


    ?>


              <div class="member-info">
                <div class="member-info-content">

                  
                  
                  
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="member">
             
              <div class="member-info">
                <div class="member-info-content">
                    

                    
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <div class="member">
             
              <div class="member-info">
                <div class="member-info-content">
                 
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="member">
             
              <div class="member-info">
                <div class="member-info-content">
                 
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #team -->

    <!--==========================
      Contact Section
    ============================-->
   

  </main>

  <!--==========================
    Footer
