<?php
include 'navbar.php';

if (isset($_POST['submit'])){
    
    $agency_name=$_POST['agency_name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $location=$_POST['location'];

    $sql=mysqli_query($conn,"INSERT INTO agency(
        agency_name,
        email,
        phone,
        location
        ) VALUES (
            '$agency_name',
            '$email',
            '$phone',
            '$location')");

        if ($sql) {
            echo '<script>alert("Agency added, Successfully")</script>';
        }
        else {
            $errormessage .='Agency failed!'.$conn->error;     
        } 
} 
?>

  <main id="main" class="main">

    <section class="section dashboard">
      <div class="row">
      <div class="card">
            <div class="card-body">
              <h5 class="card-title">Add Agency</h5>

              <!-- Horizontal Form -->
              <form method="POST" action="">
                <div class="row mb-3">
                  <div class="col-sm-6">
                  <label>Agency Name</label>
                    <input type="text" name="agency_name" class="form-control" id="inputText">
                  </div>
                  <div class="col-sm-6">
                  <label>Email</label>
                    <input type="email" name="email" class="form-control" id="inputEmail">
                  </div>
                </div>

                <div class="row mb-3">
                  <div class="col-sm-6">
                  <label>Location</label>
                    <input type="text" name="location" class="form-control" id="inputText">
                  </div>
                  <div class="col-sm-6">
                  <label>phone</label>
                    <input type="text" name="phone" class="form-control" id="">
                  </div>
                </div>

              
             
                <div class="text-center col-sm-12">
                  <button type="submit" name="submit" value="submit" class="btn btn-primary">Add Agency</button>
                </div>
              </form><!-- End Horizontal Form -->

            </div>
          </div>
      
       

      </div>
    </section>

  </main>
<!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>