<aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
                  <?php $sql="select fullName,userImage from users where userEmail='".$_SESSION['login']."'";
                  $query = $dbh->prepare($sql);
                  $query->execute();
                  $results= $query->fetchAll(PDO::FETCH_OBJ);
				  foreach($results as $result) 
				  {
				   ?> 
				  <p class="centered"><a href="profile.php">
				  <?php $userphoto=$result->userImage;
				  if($userphoto==""):
				  ?>
				  <img src="userimages/noimage.png"  class="img-circle" width="70" height="70" >
				  <?php else:?>
				  <img src="userimages/<?php echo htmlentities($userphoto);?>" class="img-circle" width="70" height="70">
				  <?php endif;?>
				  </a>
                  </p>
                  <h5 class="centered"><?php echo htmlentities($result->fullName);?></h5>
                  <?php } ?>
                    
                    <li class="mt">
                      <a href="dashboard.php">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                    </li>
                    <li class="sub-menu">
                      <a href="add-record.php" >
                          <i class="fa fa-book"></i>
                          <span>Add Product</span>
                      </a>
                    </li>
                    </li>
                    <li class="sub-menu">
                      <a href="view-products.php" >
                          <i class="fa fa-tasks"></i>
                          <span>Retreive Product Info</span>
                      </a>                      
                    </li>
                    <li class="sub-menu">
                      <a href="profile.php" >
                          <i class="fa fa-user"></i>
                          <span>Profile</span>
                      </a>
                    </li>
                    <li class="sub-menu">
                      <a href="change-password.php" >
                          <i class="fa fa-lock"></i>
                          <span>Change Password</span>
                      </a>
                    </li>  
                    <li class="sub-menu">
                      <a href="registration.php" >
                          <i class="fa fa-cogs"></i>
                          <span>Create User</span>
                      </a>
                    </li>
                    <script type="text/javascript">ndom'; 
                    </script>                
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>