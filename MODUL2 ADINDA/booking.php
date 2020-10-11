<!DOCTYPE html>
<html>

    <head>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

        <title>TP MODUL2 WAD</title>





    </head>
    <body> 
    <style>

a {
padding-left: 12px;
margin-top: 12px;
color: black;
}
h1 {
    text-align: center;
}
img {
    width: 400px;
}
    
}
</style>

        <div class="nav container-fluid " style="height: 50px; background-color: #31C0EC ; justify-content: center; ">
        <a  href="home.php" > HOME </a>
        <a href="booking.php"> BOOKING </a>
        </div>
        <br>

        <div class="container" style="margin-top: 50px;">

        <div class="row">
        <div class="col-sm-6">
        <form action="My Booking.php" method="POST">

        <div class="form-group">
        <label >Name</label>
        <input type="input" class="form-control" name="name" placeholder=" Your Name">
 <br>                 
        <div class="form-group">
        <label>Check In</label>
        <input type="date" class="form-control" name="date" >
        </div>

        <div class="form-group">
        <label >Duration</label>
        <input type="input" class="form-control" name="duration">
        <small id="durasiHelp" class="form-text text-muted">Day(s)</small>
        </div>

        <label class="my-1 mr-2" for="label">Room Type</label>

        <select class="custom-select my-1 mr-sm-2" name="roomType">
                        
        <option value="1" > Standard </option>
        <option value="2" > Superior </option>
        <option value="3" > Luxury </option>

        </select>

        <br>
        <label class="my-1 mr-2" for="label">Add Service(s)</label><br>
        <label class="my-1 mr-2" for="label"> $20/Service</label>

        <div class="form-check">
        <input class="form-check-input" type="checkbox" value="1" name="roomService" >
        <label class="form-check-label" >Room Service</label>

        </div>

        <div class="form-check">
        <input class="form-check-input" type="checkbox" value="1" name="breakFast" >
        <label class="form-check-label" >Breakfast</label>
        </div>
        <br>
                  
        <div class="form-group">
        <label >Phone Number</label>
        <input type="input" class="form-control" name="phone">
        </div>
    
        <button type="submit" class="btn btn-primary" style="width: 100%;" name="submit">Book</button>

    </form>   
        </div>
        </div>

        <div class="col-sm-6">
        <img src="kamarmewah.jpg">
    
        </div>   

        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </body>

</html>