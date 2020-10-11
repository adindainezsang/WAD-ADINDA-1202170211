<!DOCTYPE html>
<html>

    <head>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

        <title> TP MODUL2 WAD </title>

        
     <style>
    a {
      padding-left: 12px;
      margin-top: 12px;
      color: black;
    }


    </style>
    </head>
    <body> 

    
        <div class="nav container-fluid " style="height: 50px; background-color: #31C0EC; justify-content: center; ">
        <a  href=" Home.php" >HOME</a>
        <a href="Booking.php">BOOKING</a>

        </div>
        <br>

        <?php 


    error_reporting(error_reporting() & ~E_NOTICE) ;


        
        $bookindID="111213";
        $name= $_POST["name"];
        $date= $_POST["date"];
        $duration=$_POST["duration"];
        $roomType=$_POST["roomType"];
        $phone=$_POST["phone"];
        $breakFast=$_POST["breakFast"];
        $roomService=$_POST["roomService"];

        $priceStan = 96; 
        $priceSup = 150 ;
        $priceLux = 200 ;
    
        $tglCheckout = date('Y-m-d', strtotime('+'.$duration .'days', strtotime($date))); //operasi penjumlahan tanggal sebanyak 2 hari
    
    echo "$breakFast" ;

    ?>

    <div class="container" style="margin-top: 20px;">

        <div class="row">
        <div class="col-sm-12">

        <table class="table">
        <thead>
        <tr>

        <th scope="col">Booking Number</th>
        <th scope="col">Name</th>
        <th scope="col">Check-In</th>
        <th scope="col">Check-out</th>
        <th scope="col">Room Type</th>
        <th scope="col">Phone Number</th>
        <th scope="col">Service</th>
        <th scope="col">Total Price</th>
        </tr>
        </thead>
        <tbody>
        <tr>
                        
            <td><?php echo $bookindID;?></td>
            <td><?php echo $name;     ?></td>
            <td><?php echo $date;     ?></td>
            <td><?php echo $tglCheckout ;    ?></td>
            <td><?php
                        
    if ($roomType ==1) {
      echo " Standard" ;
    }
                                
    if($roomType ==2 ) {
      echo "Superior" ;
    }

    if($roomType ==3 ) {
      echo "Luxury" ;
    }
                                
     ?>
     </td>

    <td>
        <?php echo $phone;  
    ?>
    </td>
    
    <td><?php 
    
    if ($breakFast == 1) {
        echo " <ul><li> Break Fast </li> </ul> " ;
        $priceStan += 20 ;
        $priceSup += 20 ;
        $priceLux += 20 ;
    }

    if ($roomService == 1) {
        echo " <ul><li> Room Service </li> </ul> " ;
        $priceStan += 20 ;
        $priceSup += 20 ;
        $priceLux += 20 ;
    }   
    ?>
    </td>

    <td>
    <?php 
                        
    if ($roomType ==1) {
        echo "$ $priceStan " ;
    }
                        
    if($roomType ==2 ) {
        echo "$ $priceSup " ;
    }

    if($roomType ==3 ) {
        echo "$ $priceLux " ;
    }
                        
    ?>
    </td>
    </tr>
    </tbody>

</table>

    </div>
    </div>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </body>

</html>