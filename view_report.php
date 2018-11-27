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
                            echo "<option value=".$row3['dep_id'].">".$row3['name']."</option>";

                          }
                        }?>
                      </select>
                      
                      <div class="clearfix"><br>
                      <button type="submit" class="btn btn-success" name="Filter_dep">Filter by department &raquo;</button>
                    </div>
                    
              <br><br>

                
                  
                  
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
