<?php include('inc/form.php'); ?>
<?php include('inc/header.php'); session_start();?>





      <nav id="nav-menu-container">
        <ul class="nav-menu">
         
         
          <li class="menu-has-children"><a href=""><?php echo $_SESSION['uname']; ?></a>
            <ul>
              <li><a href="#">Change password</a></li>
              <li><a href="logout.php?logout='1'">Logout</a></li>
             
            </ul>
          </li>
         
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
 

   
    

   
   
    

    
    <section id="view_report">
      <div class="container">
        <div class="section-header wow fadeInUp">
          <br><br><br><br>
           <a href="account.php"><h2>Back to Account</a>
          <h3>View Salary Details</h3>
          
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6 wow fadeInUp">
            <div class="member">
              


              <div class="member-info">
                <div class="member-info-content">

               
                  
                    
              <br><br>

                
                  
                  
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="member">
             
              <div class="member-info">
                <div class="member-info-content">
                     <h3></h3>
                  
                     <?php 
                     $emp_reg_id=$_SESSION['uname'];

                     $query="SELECT * FROM employee_payment_details where  emp_reg_id='$emp_reg_id'";
                      $result=mysqli_query($db,$query);
                       if (mysqli_num_rows($result)>0){
                         while ($row3=mysqli_fetch_assoc($result)){
                          echo "<h1";
                         echo "<option value=".$row3['emp_reg_id'].">"."Registration ID        :",$row3['emp_reg_id']."</option>";
                          echo "<option value=".$row3['basic_salary'].">"."Basic Salary          :",$row3['basic_salary']."</option>";

                        echo "<option value=".$row3['bonus_amount'].">"."Bonus amount        :",$row3['bonus_amount']."</option>";
                        echo "<option value=".$row3['tax'].">"."Tax percentage       :",$row3['tax']."</option>";

            }
        }
        if ($_SESSION['role']=="admin"){
                    echo "<form method=\"POST\" action=\"filter.php\">";
                    echo "<br><br>View Employees salary details";
                    echo "<label for=\"emp_reg_id\"><b>Registration ID</b></label>";
                    echo "<input type=\"text\" placeholder=\"Enter registration ID \" name=\"emp_reg_id\"  required>";
                     
                    echo "<div class=\"clearfix\">
                      <button type=\"submit\" class=\"btn btn-success\" name=\"view_salary\">View Salary &raquo;</button>
                    </div>";

                     }





        ?>
                       
                      
              

                    
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
 