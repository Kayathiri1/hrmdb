<?php include('inc/form.php'); ?>
<?php include('inc/header.php'); ?>

<?php 
session_start();
?>


      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#account">Account</a></li>
          <li><a href="#info">Info</a></li>
          <?php if ($_SESSION['role']!="admin"){
          echo "<li><a href=\"#leave\">Leave </a></li>";}?>

          <?php if ($_SESSION['role']=="admin"){
          echo "<li><a href=\"view_report.php\">View Report </a></li>";}?>

          <li><a href="#app_leave">Approve Leave</a></li>
          <?php if ($_SESSION['role']!="local_user"){
          echo "<li><a href=\"create_account.php\">Create Account</a></li>"; }?>
          <li><a href="salary.php">View Salary</a></li>
          <li class="menu-has-children"><a href=""><?php echo $_SESSION['uname']; ?></a>
            <ul>
              <li><a href="#">Change password</a></li>
              <li><a href="inc/logout.inc.php?logout='1'">Logout</a></li>
             
            </ul>
          </li>
         
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="account">
    <div class="intro-container">
       <?php if(isset($_SESSION['uname'])): ?>
                Welcome <strong><?php echo $_SESSION['uname']; ?> <br> <?php echo $_SESSION['role'];?></strong>  <?php endif ?>
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators"></ol>

        <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>



  </section><!-- #intro -->

  <main id="main">


    <section id="info">
      <div class="container">

        <header class="section-header"><br><br>
          <h3>Edit Personal Details</h3>
         

        <div class="row about-cols">

          <div class="col-md-4 wow fadeInUp">
            <div class="about-col">
              <div class="img">
                
              </div>
              
            </div>
          </div>

          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
            <div class="about-col">
              <div class="img">
                
              </div>

              <h2 class="title"><a href="#">My info</a></h2>
               <div class="form">

                    <form method ='POST' action="inc/personal.inc.php">
                    
                    
                    <hr>
                    <label for="emp_reg_id"><b>Registration ID</b></label><br>
                    <input type="text" placeholder="<?php  echo $_SESSION['uname']; ?> " name="emp_reg_id"  readonly required><br>
                    
                    <label for="first_name"><b>First Name</b></label><br>
                    <input type="text" placeholder="First Name" name="first_name" required><br>
                    
                     <label for="surname"><b>Surname</b></label><br>
                    <input type="text" placeholder="Surname" name="surname" required><br>

                    <label for="marital_status"><b>Marital Status<br></b></label><br>
                      <input type="radio" name="marital_status" value="single" />
                      <label class="type" > Single</label><br>
                      <input type="radio" name="marital_status" value="married" />
                      <label class="type" >Married</label><br>


                     <label for="phoneno"><b>Phone number</b></label><br>
                    <input type="text" placeholder="Phone Number" name="phoneno" required><br>


                     <label for="emailid"><b>Email ID</b></label><br>
                    <input type="email" placeholder="Email ID" name="emailid" required><br>


                     <label for="bd_date"><b>Birth day</b></label><br>
                    <input type="date" placeholder="Birthday" name="bd_date" required><br>

                     <label for="gender"><b>Gender<br></b></label><br>
                      <input type="radio" name="gender" value="male" />
                      <label class="type" > Male</label><br>
                      <input type="radio" name="gender" value="female" />
                      <label class="type" >Female</label><br>


                    

                    
                    <div class="clearfix">
                      <button type="submit" class="btn btn-success" name="update">Update &raquo;</button>
                    </div>
                  <br>
                    </form>   </div>
            </div>
          </div>

          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
            <div class="about-col">
              <div class="img">
              
              </div>
              
              
            </div>
          </div>

        </div>

      </div>
    </section><!-- #about -->

    <!--==========================
      Services Section
    ============================-->
    <section id="leave">
      <div class="container">

        <header class="section-header wow fadeInUp">
          <h3>Leave Application</h3>
         
        </header>

        <div class="row">

          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
       <div class="form">
                    <form method ='POST' action="inc/leave.inc.php">
                    
                    
                    <hr>
                    <label for="emp_reg_id"><b>Registration ID</b></label><br>
                    <input type="text" placeholder="<?php echo $_SESSION['uname']; ?> " name="emp_reg_id" required readonly><br>
                    
                     <label for="leave_type"><b>Leave Type<br></b>(It is compulsory to choose one option in order to submit a valued application)</label><br>
                      <input type="radio" name="leave_type" value="casual_leave" />
                      <label class="type" >Casual leave</label><br>
                      <input type="radio" name="leave_type" value="nopay_leave" />
                      <label class="type" >Nopay leave</label><br>
                      <input type="radio" name="leave_type" value="annual_leave" />
                      <label class="type" >Maternity leave</label><br>
                      <input type="radio" name="leave_type" value="maternity_leave" />
                      <label class="type" >Nopay leave</label><br>
                      
                      <label for="fromdt"><b>From</b>(mm/dd/yyyy)</label><br>
                      <input type="date"  name="fromdt" required><br>
                    <label for="leave_days"><b>Number of days</b></label><br>
                    <input type="int" placeholder="Number of days" name="leave_days" required><br>

                    
                    <div class="clearfix">
                      <button type="submit" class="btn btn-success" name="apply">Apply &raquo;</button>
                    </div>
                  <br>
                    </form>   </div>
                    </div> 
          
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            
          </div>
         

        </div>

      </div>
    </section><!-- #services -->

  
    <section id="app_leave"  class="section-bg" >
      <div class="container">

        <header class="section-header"><br><br>
          <h3 class="section-title">Pending Leave applications</h3>
        </header>

        <div class="row">
          <div class="col-lg-12">

            <?php  
                    $emp_reg_id=$_SESSION['uname'];
                    
                    $query="SELECT emp_reg_id from _leave where  leave_status='awaiting'";
                    $result=mysqli_query($db,$query);
                    if (mysqli_num_rows($result)>0){
                      while ($row3=mysqli_fetch_assoc($result)){
                        $id=$row3['emp_reg_id'];
                        $query1="SELECT find_reportsto('$id') as report";
                         $result1=mysqli_query($db,$query1);
                          if (mysqli_num_rows($result1)>0){
                             while ($row2=mysqli_fetch_assoc($result1)){
                              $id1=$row2['report'];
                              if ($id1==$emp_reg_id){
                                echo "<li><a href=\"approve_leave.php?eid=$id\">$id</a></li>";
                              }
                          } 
                        }
                         
                     
                         
            }
        }


            ?>
            <br><br><br><br><br><br><br>
          </div>
        </div>

        
    
   

  </main>

  <!--==========================
    Footer
  ============================-->
 <?php include('inc/footer.php'); ?>
