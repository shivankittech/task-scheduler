     <aside id="slide-out" class="side-nav white fixed">
                <div class="side-nav-wrapper">
                    <div class="sidebar-profile">
                        <div class="sidebar-profile-image">
                            <img src="assets/images/profile-image.png" class="circle" alt="">
                        </div>
                        <div class="sidebar-profile-info">
                    <?php
$eid=$_SESSION['eid'];
$sql = "SELECT * from  tblemployees where id=:eid";
$query = $dbh -> prepare($sql);
$query->bindParam(':eid',$eid,PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{               ?>
                                <p><?php echo htmlentities($result->FirstName." ".$result->LastName);?></p>
                                <span><?php echo htmlentities($result->EmailId)?></span>
                         <?php }} ?>
                        </div>
                    </div>

                <ul class="sidebar-menu collapsible collapsible-accordion" data-collapsible="accordion">
<li class="no-padding"><a class="waves-effect waves-grey" href="dashboard.php"><i class="material-icons">home</i>Dashboard</a></li>
<li class="no-padding"><a class="waves-effect waves-grey" href="addTask.php"><i class="material-icons">edit</i>Add Task</a></li>
  <li class="no-padding"><a class="waves-effect waves-grey" href="myprofile.php"><i class="material-icons">account_box</i>My Profile</a></li>
  <li class="no-padding"><a class="waves-effect waves-grey" href="changepassword.php"><i class="material-icons">lock</i>Change Password</a></li>



                  <li class="no-padding">
                                <a class="waves-effect waves-grey" href="logout.php"><i class="material-icons">exit_to_app</i>Sign Out</a>
                            </li>


                </ul>
                </div>
            </aside>
