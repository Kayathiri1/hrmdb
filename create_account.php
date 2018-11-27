<?php include('inc/form.php'); ?>
<?php include('inc/header.php'); ?>




      <nav id="nav-menu-container">
        <ul class="nav-menu">
         
         

          
          <?php if ($_SESSION['role']!="local_user"){
          echo "<li><a href=\"#create_account\">Create Account</a></li>"; }?>
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
 

   
    

   
   
    

    
    <section id="create_account">
      <div class="container">
        <div class="section-header wow fadeInUp">
          <br><br><br><br>
           <a href="account.php"><h2>Back to Account</a>
          <h3>Create Account</h3>
          
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6 wow fadeInUp">
            <div class="member">
              


              <div class="member-info">
                <div class="member-info-content">
                  
                    <form method="POST">
                      <label for="emp_reg_id"><b>Registration ID</b></label><br>
                       <?php
                        $db = mysqli_connect('localhost', 'root', '', 'hrm');
                        $sql=("SELECT emp_reg_id FROM employee_job_details order by emp_reg_id desc limit 1");
                        $result=mysqli_query($db,$sql);
                        if (mysqli_num_rows($result)>0){
                          while ($row3=mysqli_fetch_assoc($result)){
                            echo "Lastly recorded ID is";
                            echo "<option value=".$row3['emp_reg_id'].">".$row3['emp_reg_id']."</option>";

                          }
                        }?>
                      <input type="text" placeholder="Registration ID" name="emp_reg_id" required><br>


                     <label for="job_title"><b>Job Title</b></label><br>
                      <select name="job_title">
                      <option value="hr manager">HR Manager</option>
                      <option value="accountant">Accountant</option>
                      <option value="software_engineer">Software Engineer</option>
                      <option value="qa_engineer">QA Engineer</option>
                    </select>

                     <label for="joined_date"><b>Joined Date</b></label><br>
                      <input type="date" placeholder="joined_date" name="joined_date" required><br>

                      <label for="reports_to"><b>Reports To</b></label><br>
                     <select name="reports_to">
                      <?php
                        $db = mysqli_connect('localhost', 'root', '', 'hrm');
                        $sql=("SELECT emp_reg_id FROM employee_job_details");
                        $result=mysqli_query($db,$sql);
                        if (mysqli_num_rows($result)>0){
                          while ($row3=mysqli_fetch_assoc($result)){
                            echo "<option value=".$row3['emp_reg_id'].">".$row3['emp_reg_id']."</option>";

                          }
                        }?>
                      </select>
                      <br><br>

                      <label for="emp_status_id"><b>Employee status ID</b></label><br>
                      <select name="emp_status_id">
                     <?php
                        $db = mysqli_connect('localhost', 'root', '', 'hrm');
                        $sql=("SELECT emp_status_id,employment_type FROM employment_status");
                        $result=mysqli_query($db,$sql);
                        if (mysqli_num_rows($result)>0){
                          while ($row3=mysqli_fetch_assoc($result)){
                            echo "<option value=".$row3['emp_status_id'].">".$row3['employment_type']."</option>";
                          }
                        }?>
                    </select><br><br>

              <br><br>

                
                  
                  
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="member">
             
              <div class="member-info">
                <div class="member-info-content">
                    <label for="department"><b>Department</b></label><br>
                      <select name="department">
                     <?php
                        $db = mysqli_connect('localhost', 'root', '', 'hrm');
                        $sql=("SELECT dep_id,name FROM department");
                        $result=mysqli_query($db,$sql);
                        if (mysqli_num_rows($result)>0){
                          while ($row3=mysqli_fetch_assoc($result)){
                            echo "<option value=".$row3['dep_id'].">".$row3['name']."</option>";
                          }
                        }?>
                    </select><br><br>
                    <label for="branch"><b>Branch</b></label><br>
                      <select name="branch">
                        <?php
                        $db = mysqli_connect('localhost', 'root', '', 'hrm');
                        $sql=("SELECT branch_id,name FROM branch");
                        $result=mysqli_query($db,$sql);
                        if (mysqli_num_rows($result)>0){
                          while ($row3=mysqli_fetch_assoc($result)){
                            echo "<option value=".$row3['branch_id'].">".$row3['name']."</option>";
                          }
                        }?>
                      
                    </select><br><br>
                  
                   <label for="role"><b>Role</b></label><br>
                      <select name="role">
                      <?php if ($_SESSION['role']=="admin"){

                      echo "<option value=\"hrm_user\">hrm_user</option>"; }
                      elseif ($_SESSION['role']=="hrm_user"){
                        echo "<option value=\"SecondManager_user\">SecondManager_user</option>";}
                      elseif ($_SESSION['role']=="SecondManager_user"){
                        echo " <option value=\"local_user\">local_user</option>  ";}?>


                              
                 
                    </select><br><br>

                     <div class="clearfix">
                      <button type="submit" class="btn btn-success" name="create">Create &raquo;</button>
                    </div>
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
