<nav class="navbar navbar-default mb-xl-5 mb-4">
                <div class="container-fluid">

                    <div class="navbar-header">
                        <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                            <i class="fas fa-bars"></i>
                        </button>
                    </div>
                    
                    <ul class="top-icons-agileits-w3layouts float-right">
                        <?php
$ret1=mysqli_query($con,"select FullName,ID,BookingNumber from tblbookingtwowheeler where Status=''");
$num=mysqli_num_rows($ret1);

?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="far fa-bell"></i>
                                <span class="badge"><?php echo $num;?></span>
                            </a>
                            <div class="dropdown-menu top-grid-scroll drop-1">
                                <h3 class="sub-title-w3-agileits">You have <?php echo $num;?> new notification</h3>
                                <a href="#" class="dropdown-item mt-3">
                                    <div class="notif-img-agileinfo">
                                        <img src="images/clone.jpg" class="img-fluid" alt="Responsive image">
                                    </div>
                                     <?php if($num>0){
while($result=mysqli_fetch_array($ret1))
{
            ?>
            <a class="dropdown-item" href="view-twowheeler-booking.php?viewid=<?php echo $result['ID'];?>"><i  class="fa fa-bell"  style="color: red;"></i>  #<?php echo $result['BookingNumber'];?> Two Wheeler Booking Request Received from <?php echo $result['FullName'];?></a>
<?php }} else {?>
    <a class="dropdown-item" href="all-twowheeler-booking.php">No New Two Wheeler Booking Received</a>
        <?php } ?>
                                </a>
                               
                                    
                           
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="all-twowheeler-booking.php">view all notifications</a>
                            </div>
                        </li>
                        <?php
$ret1=mysqli_query($con,"select FullName,ID,BookingNumber from tblbookingcar where Status=''");
$num=mysqli_num_rows($ret1);

?>
                    <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="far fa-bell"></i>
                                <span class="badge"><?php echo $num;?></span>
                            </a>
                            <div class="dropdown-menu top-grid-scroll drop-1">
                                <h3 class="sub-title-w3-agileits">You have <?php echo $num;?> new notification</h3>
                                <a href="#" class="dropdown-item mt-3">
                                    <div class="notif-img-agileinfo">
                                        <img src="images/clone.jpg" class="img-fluid" alt="Responsive image">
                                    </div>
                                     <?php if($num>0){
while($result=mysqli_fetch_array($ret1))
{
            ?>
            <a class="dropdown-item" href="view-fourwheeler-booking.php?viewid=<?php echo $result['ID'];?>"><i  class="fa fa-bell"  style="color: red;"></i>  #<?php echo $result['BookingNumber'];?>Four Wheeler Booking Request Received from <?php echo $result['FullName'];?></a>
<?php }} else {?>
    <a class="dropdown-item" href="all-fourwheeler-booking.php">No New Four Wheeler Booking Received</a>
        <?php } ?>
                                </a>
                               
                                    
                           
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="all-twowheeler-booking.php">view all notifications</a>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="far fa-user"></i>
                            </a>
                            <div class="dropdown-menu drop-3">
                                <div class="profile d-flex mr-o">
                                    <div class="profile-l align-self-center">
                                        <img src="images/image.png" class="img-fluid mb-3" alt="Responsive image">
                                    </div>
                                    <div class="profile-r align-self-center"><?php
$aid=$_SESSION['vrmsaid'];
$ret=mysqli_query($con,"select AdminName,Email from tbladmin where ID='$aid'");
$row=mysqli_fetch_array($ret);
$name=$row['AdminName'];
$email=$row['Email'];
?>

                                        <h3 class="sub-title-w3-agileits"><?php echo $name; ?></h3>
                                        <a href="mailto:info@example.com"><?php echo $email; ?></a>
                                    </div>
                                </div>
                                <a href="admin-profile.php" class="dropdown-item mt-3">
                                    <h4>
                                        <i class="far fa-user mr-3"></i>My Profile</h4>
                                </a>
                                <a href="change-password.php" class="dropdown-item mt-3">
                                    <h4>
                                        <i class="fas fa-link mr-3"></i>Change Password</h4>
                                </a>
                              
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="logout.php">Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>