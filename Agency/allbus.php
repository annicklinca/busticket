
<?php
include 'navbar.php';

if (isset($_POST['add'])){
    
  $bus_plate=$_POST['bus_plate'];
  $agencyid=$_POST['agencyid'];
  $free_seats=$_POST['free_seats'];
  $destination=$_POST['destination'];

  $sql=mysqli_query($conn,"INSERT INTO bus(
      bus_plate,
      agency_id,
      free_seats,
      destination
      ) VALUES (
          '$bus_plate',
          '$agencyid',
          '$free_seats',
          '$destination')");

      if ($sql) {
          echo '<script>alert("Bus added, Successfully")</script>';
      }
      else {
          $errormessage .='Bus Adding failed!'.$conn->error;     
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
                  <h4 class="card-title"> Bus</h4>
                  <!-- <p class="card-description">
                    View all Bookings here
                  </p> -->
                  <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">All Bus</h4>
                       
                  <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Bus Plate</th>
                    <th scope="col">Agency Name</th>
                    <th scope="col">Free Seats</th>
                    <th scope="col">Destination</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                        $quer=mysqli_query($conn,"SELECT * FROM bus ");
                        while ($row=mysqli_fetch_array($quer)){
                        ?>
                        <tr>
                          <td><?php echo $row['bus_id'] ; ?></td>
                          <td><?php echo $row['bus_plate'] ; ?></td>
                          <td><?php
                                          $agencyid=$row['agency_id'];
                                          $quertwo=mysqli_query($conn,"SELECT * FROM agency WHERE agency_id=$agencyid");
                                          $rowtwo=mysqli_fetch_array($quertwo);
                                         echo  $rowtwo['agency_name'] ;
                                                    ?></td>
                          <td><?php echo $row['free_seats'] ; ?></td>
                          <td><?php echo $row['destination'] ; ?></td>
                          <td><a class="btn btn-danger"  href="delete.php?delbus=<?php echo $row['bus_id']; ?> " onclick="return confirm('are you sure! you want to delete')" id="red">Delete</a></td>
                          <td><a class="btn btn-success"  href="busupdate.php?updatebus=<?php echo $row['bus_id']; ?>"  id="red">Update</a></td>
                       
                        </tr>
                        <?php
                        }
                        ?>
                </tbody>
              </table>
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