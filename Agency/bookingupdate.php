
<?php
include 'navbar.php';
$seri_id=$_GET['updatebooking'];

if (isset($_POST['update'])){
    
    $fullname=$_POST['fullname'];
    $phone=$_POST['phone'];
    $idnumber=$_POST['idnumber'];
    $email=$_POST['email'];
    $agencyname=$_POST['agencyname'];
    $amount=$_POST['amount'];
    $location=$_POST['location'];
    $destination=$_POST['destination'];
    $booking_date=$_POST['booking_date'];
    $bus_station=$_POST['bus_station'];

    $sql=mysqli_query($conn,"UPDATE booking SET 
        fullname='$fullname',
        phone='$phone',
        idnumber='$idnumber',
        email='$email',
        agencyname='$agencyname',
        amount='$amount',
        location='$location',
        destination='$destination',
        booking_date='$booking_date',
        bus_station='$bus_station',
         WHERE booking_id=$seri_id;");
    if ($sql) {
     echo '<script>alert("booking update, Successfully!")</script>';
        header("location:index.php");	
    }
    else {
        echo '<script>alert("booking update, Failed!")</script>' .$conn->error;		
    }     
   
}  

?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title"> Booking</h4>
                  <!-- <p class="card-description">
                    View all Bookings here
                  </p> -->
                  <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Booking</h4>
                 
                  <form class="forms-sample">
                  <?php
                                                if (isset($_GET['updatebooking'])) {
                                                    $ser_id=$_GET['updatebooking'];
                                                    $quer=mysqli_query($conn,"SELECT * FROM booking WHERE booking.booking_id=$ser_id");
                                                    while ($row=mysqli_fetch_array($quer)){
                      
                                                        ?>
                    <div class="form-group row">
                      <div class="col-sm-6">
                        <label>Fullname</label>
                        <input type="text" name="fullname" value="<?php echo $row['fullname']; ?>" class="form-control" id="exampleInputUsername2" placeholder="">
                      </div>
                      <div class="col-sm-6">
                        <label>Phone</label>
                        <input type="text" name="phone" value="<?php echo $row['phone']; ?>" class="form-control" id="exampleInputUsername2" placeholder="">
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-sm-6">
                        <label>ID number</label>
                        <input type="text" name="idnumber" value="<?php echo $row['idnumber']; ?>" class="form-control" id="exampleInputUsername2" placeholder="">
                      </div>
                      <div class="col-sm-6">
                        <label>Email</label>
                        <input type="email" name="email" value="<?php echo $row['email']; ?>" class="form-control" id="exampleInputUsername2" placeholder="">
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-sm-6">
                        <label>Agency Name</label>
                        <input type="text" name="agencyname" value="<?php echo $row['agencyname']; ?>" class="form-control" id="exampleInputUsername2" placeholder="">
                      </div>
                      <div class="col-sm-6">
                        <label>Amount</label>
                        <input type="text" name="amount" value="<?php echo $row['amount']; ?>" class="form-control" id="exampleInputUsername2" placeholder="">
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-sm-6">
                        <label>Location</label>
                        <input type="text" name="location" value="<?php echo $row['location']; ?>" class="form-control" id="exampleInputUsername2" placeholder="">
                      </div>
                      <div class="col-sm-6">
                        <label>Destination</label>
                        <input type="text" name="destination" value="<?php echo $row['destination']; ?>" class="form-control" id="exampleInputUsername2" placeholder="">
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-sm-6">
                        <label>Booking Date</label>
                        <input type="date" name="booking_date" value="<?php echo $row['booking_date']; ?>" class="form-control" id="exampleInputUsername2" placeholder="">
                      </div>
                      <div class="col-sm-6">
                        <label>Bus Station</label>
                        <input type="text" name="bus_station" value="<?php echo $row['bus_station']; ?>" class="form-control" id="exampleInputUsername2" placeholder="">
                      </div>
                    </div>
                    <button type="submit" name="update" value="update" class="btn btn-primary mr-2">Update Booking</button>
                    <?php
                }}
                ?>
                  </form>
                </div>
              </div>
            </div>
                </div>
              </div>
            </div>
          
            </div>
     
          </div>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <script src="js/off-canvas.js"></script>
    <script src="js/hoverable-collapse.js"></script>
    <script src="js/template.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/todolist.js"></script>
    <!-- endinject -->
    <!-- plugin js for this page -->
    <script src="vendors/progressbar.js/progressbar.min.js"></script>
    <script src="vendors/chart.js/Chart.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- Custom js for this page-->
    <script src="js/dashboard.js"></script>
    <!-- End custom js for this page-->
  </body>
</html>