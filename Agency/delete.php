<?php
include '../connection.php';

if (isset($_GET['delbooking'])){
    $delbooking=$_GET['delbooking'];
    $del_quer=mysqli_query($conn,"DELETE FROM booking WHERE booking_id='$delbooking' ");  
    if ($del_quer) {
        echo '
        <script type="text/javascript">alert(" Delete, Successfully!")</script>
        
        ';
        header("location:allbooking.php");
    }
    else {
        echo '
        <script type="text/javascript">alert("Booking not Deleted,!")</script>
        
        ';
        header("location:allbooking.php");
    }
}

if (isset($_GET['delbus'])){
    $delbus=$_GET['delbus'];
    $del_quer=mysqli_query($conn,"DELETE FROM bus WHERE bus_id='$delbus' ");  
    if ($del_quer) {
        echo '
        <script type="text/javascript">alert(" Delete, Successfully!")</script>
        
        ';
        header("location:allbus.php");
    }
    else {
        echo '
        <script type="text/javascript">alert("Booking not Deleted,!")</script>
        
        ';
        header("location:allbus.php");
    }
}

?>