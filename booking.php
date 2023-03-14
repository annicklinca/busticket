<?php
include 'connection.php';

if (isset($_POST['submit'])){
    
    $fullname=$_POST['fullname'];
    $phone=$_POST['phone'];
    $idnumber=$_POST['idnumber'];
    $email=$_POST['email'];
    $agencyid=$_POST['agencyid'];
    $amount=$_POST['amount'];
    $location=$_POST['location'];
    $destination=$_POST['destination'];
    $booking_date=$_POST['booking_date'];
    $bus_station=$_POST['bus_station'];

    $sql=mysqli_query($conn,"INSERT INTO booking(
        fullname,
        phone,
        idnumber,
        email,
        agency_id,
        amount,
        location,
        destination,
        booking_date,
        bus_station
        ) VALUES (
            '$fullname',
            '$phone',
            '$idnumber',
            '$email',
            '$agencyid',
            '$amount',
            '$location',
            '$destination',
            '$booking_date',
            '$bus_station')");

        if ($sql) {
            echo '<script>alert("Booking Done, Successfully")</script>';
        }
        else {
            $errormessage .='Booking failed!'.$conn->error;     
        } 
}   

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bus | Ticket Booking Management System </title>
  <!-- Favicon -->
  <link rel="shortcut icon" href="./img/svg/logo.svg" type="image/x-icon">
  <!-- Custom styles -->
  <link rel="stylesheet" href="./css/style.min.css">
</head>

<body>
  <div class="layer"></div>
<main class="page-center">
  <article class="sign-up">
    <h1 class="sign-up__title" style="color: orange; font-weight: bold;">Welcome Dear Client!</h1>
    <p class="sign-up__subtitle">You can book your ticket fast and easily</p>
    <form class="sign-up-form form" action="" method="POST">
        <div class="form-group row">
            <div class="col-md-6">
                <label class="form-label-wrapper">
                    <p class="form-label">Full Names</p>
                    <input class="form-input" type="text" name="fullname" placeholder="" required>
                  </label>
            </div>
            <div class="col-md-6">
                <label class="form-label-wrapper">
                    <p class="form-label">Phonenumber</p>
                    <input class="form-input" type="text" name="phone" placeholder="" required>
                  </label>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-6">
                <label class="form-label-wrapper">
                    <p class="form-label">ID Number</p>
                    <input class="form-input" type="text" name="idnumber" placeholder="" required>
                  </label>
            </div>
            <div class="col-md-6">
                <label class="form-label-wrapper">
                    <p class="form-label">Email</p>
                    <input class="form-input" type="email" name="email" placeholder="" required>
                  </label>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-6">
                <label class="form-label-wrapper">
                    <p class="form-label">Agency Name </p>
                    <select name="agencyid" class="form-input">
                                              <?php
                                                    $quer=mysqli_query($conn,"SELECT * FROM agency ");
                                                      while ($row=mysqli_fetch_array($quer)){
                                               ?>
                                                <option value="<?php echo $row['agency_id'] ; ?>"><?php echo $row['agency_name'] ; ?></option>
                                                  <?php
                                                    }
                                                  ?>
                                               </select>
                  </label>
            </div>
            <div class="col-md-6">
                <label class="form-label-wrapper">
                    <p class="form-label">Ticket Amount</p>
                    <input class="form-input" type="text" name="amount" placeholder="" required>
                  </label>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-6">
                <label class="form-label-wrapper">
                    <p class="form-label">Current Location </p>
                    <input class="form-input" type="text" name="location" placeholder="" required>
                  </label>
            </div>
            <div class="col-md-6">
                <label class="form-label-wrapper">
                    <p class="form-label">Destination</p>
                    <input class="form-input" type="text" name="destination" placeholder="" required>
                  </label>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-6">
                <label class="form-label-wrapper">
                    <p class="form-label">Booking Date </p>
                    <input class="form-input" type="date" name="booking_date" placeholder="" required>
                  </label>
            </div>
            <div class="col-md-6">
                <label class="form-label-wrapper">
                    <p class="form-label">Bus Station Address</p>
                    <input class="form-input" type="text" name="bus_station" placeholder="" required>
                  </label>
            </div>
        </div>
      <br><br>
      <button class="form-btn primary-default-btn transparent-btn" type="submit" name="submit" style="background-color: orange;">Book Now</button>
    </form>
  </article>
</main>
<!-- Chart library -->
<script src="./plugins/chart.min.js"></script>
<!-- Icons library -->
<script src="plugins/feather.min.js"></script>
<!-- Custom scripts -->
<script src="js/script.js"></script>
</body>

</html>