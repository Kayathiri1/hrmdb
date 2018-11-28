<?php include('inc/form.php'); ?>
<?php include('inc/header.php'); ?>





      <nav id="nav-menu-container">
        <ul class="nav-menu">
         
         

          
          <?php if ($_SESSION['role']!="local_user"){
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
           <a href="account.php"><h2>Back to List</a>
          <h3>Leave Details</h3>
          <?php include('inc/leave_connectdb.inc.php');?>
                  <?php $eid=$_GET['eid'];?>

        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6 wow fadeInUp">
            <div class="member">
              


              <div class="member-info">
                <div class="member-info-content">

                  <h3></h3>
                  
                   
                    
              <br><br>

                
                  
                  
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="member">
             
              <div class="member-info">
                <div class="member-info-content">
                     <form style="border:1px solid #ccc" method ='POST' action="inc/approve_leaveapplication.inc.php?eid=<?php echo $eid;?> ">
                      <div class="container">
                      
                      <hr>
                      
                      <label for="emp_reg_id"><b>Registration ID</b></label><br>
                      <input type="text" value= "<?php echo $emp_reg_id; ?> "readonly><br>
                      <br>
                      <label for="leave_type"><b>Leave_type</b></label><br>
                      <input type="text" value= "<?php echo $leave_type; ?> "readonly><br>
                      <br>
                      <label for="fromdt"><b>From   *</b></label>
                      <input type="text" value= "<?php echo $fromdt; ?> "readonly><br>

                      <label for="leave_days"><b>Number of days</b></label><br>
                      <input type="text" value= "<?php echo $leave_days; ?> "readonly><br>

                   <br>
                      
                      
                      <div class="clearfix">
                        <button type="submit" class="btn btn-success" name="approve">Approve</button>
                        <button type="submit" class="btn btn-success" name="reject">Reject</button><br>
                      </div>
                      <br>
                      
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
 