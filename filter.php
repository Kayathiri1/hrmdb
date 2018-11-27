


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
           <a href="account.php"><h2>Back to Account</a>
          <h3></h3>
          
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6 wow fadeInUp">
            <div class="member">



              
<?php


$department="";
$db = mysqli_connect('localhost', 'root', '', 'hrm');

//login
  if (isset($_POST['Filter_dep'])){

    $department=mysqli_real_escape_string($db,$_POST['department']);
    
    echo '';
    $query="SELECT emp_reg_id FROM employee_job_details WHERE department='$department'";
    $result=mysqli_query($db,$query);
     if (mysqli_num_rows($result)>0){
              while ($row3=mysqli_fetch_assoc($result)){
              echo "<option value=".$row3['emp_reg_id'].">".$row3['emp_reg_id']."</option>";

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
  ============================-->
 <?php include('inc/footer.php'); ?>
