<?php include('inc/form.php'); ?>
<?php include('inc/header.php'); ?>





      <nav id="nav-menu-container">
        <ul class="nav-menu">
         
         

          
          <?php session_start(); if ($_SESSION['role']!="local_user"){
          echo "<li><a href=\"#view_report\">View Report</a></li>"; }?>
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
          <h3>View Report</h3>
          
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6 wow fadeInUp">
            <div class="member">
              


              <div class="member-info">
                <div class="member-info-content">

                  <h3>Filter By</h3>
                  
                    <form method="POST" action="filter.php">
                      <label for="department"><b>Department</b></label><br>
                       <select name="department">
                       <?php
                        $db = mysqli_connect('localhost', 'root', '', 'hrm');
                        $sql=("SELECT name,dep_id FROM department");
                        $result=mysqli_query($db,$sql);
                        if (mysqli_num_rows($result)>0){
                          while ($row3=mysqli_fetch_assoc($result)){
                            echo "<option value=".$row3['name'].">".$row3['name']."</option>";

                          }
                        }?>
                      </select>
                      
                      <div class="clearfix"><br>
                      <button type="submit" class="btn btn-success" name="Filter_dep">Filter by department &raquo;</button>
                    </div>
                  </form><br>
                  <h3>Filter By</h3>
                  
                    <form method="POST" action="filter.php">
                      <label for="branch"><b>Branch</b></label><br>
                       <select name="branch">
                       <?php
                        $db = mysqli_connect('localhost', 'root', '', 'hrm');
                        $sql=("SELECT name,branch_id FROM branch");
                        $result=mysqli_query($db,$sql);
                        if (mysqli_num_rows($result)>0){
                          while ($row3=mysqli_fetch_assoc($result)){
                            echo "<option value=".$row3['name'].">".$row3['name']."</option>";

                          }
                        }?>
                      </select>
                      
                      <div class="clearfix"><br>
                      <button type="submit" class="btn btn-success" name="Filter_branch">Filter by department &raquo;</button>
                    </div>
                  </form>
                    
              <br><br>

                
                  
                  
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="member">
             
              <div class="member-info">
                <div class="member-info-content">
                     <h3>Filter By</h3>
                  
                    <form method="POST" action="filter.php">
                      <label for="job_title"><b>Job Title</b></label><br>
                       <select name="job_title">
                       <?php
                        $db = mysqli_connect('localhost', 'root', '', 'hrm');
                        $sql=("SELECT distinct job_title FROM employee_job_details");
                        $result=mysqli_query($db,$sql);
                        if (mysqli_num_rows($result)>0){
                          while ($row3=mysqli_fetch_assoc($result)){
                            echo "<option value=".$row3['job_title'].">".$row3['job_title']."</option>";

                          }
                        }?>
                      </select>
                      
                      <div class="clearfix"><br>
                      <button type="submit" class="btn btn-success" name="Filter_job">Filter by Job Title &raquo;</button>
                    </div>
                  </form>

                    
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <div class="member">
             
              <div class="member-info">
                <div class="member-info-content">
                <h3>Filter By</h3>
                  
                    <form method="POST" action="filter.php">
                      <label for="paygrade_id"><b>Paygrade </b></label><br>
                       <select name="paygrade_id">
                       <?php
                        $db = mysqli_connect('localhost', 'root', '', 'hrm');
                        $sql=("SELECT paygrade_id,name FROM paygrade_details");
                        $result=mysqli_query($db,$sql);
                        if (mysqli_num_rows($result)>0){
                          while ($row3=mysqli_fetch_assoc($result)){
                            echo "<option value=".$row3['paygrade_id'].">".$row3['name']."</option>";

                          }
                        }?>
                      </select>
                      
                      <div class="clearfix"><br>
                      <button type="submit" class="btn btn-success" name="Filter_paygrade">Filter by Pay Grade &raquo;</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="member">
             
              <div class="member-info">
                <div class="member-info-content">
                   <h3>Filter By</h3>
                   Leave date
                    <form method="POST" action="filter.php">
                      <label for="from"><b>From </b></label><br>
                      <input type="date" name="From" placeholder="From date"><br>
                      <label for="to"><b>To </b></label><br>
                      <input type="date" name="to" placeholder="To date"><br>
                      
                      <div class="clearfix"><br>
                      <button type="submit" class="btn btn-success" name="Filter_leave">Filter by Leave date &raquo;</button>
                    </div>
                  </form>
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
 