<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <title>HOME</title>
  </head>


  <body>
    <nav class="navbar navbar-light" style="background-color: #31C0EC;">
      <a class="navbar-brand" style="color: white; font-family: Poppins">EAD EVENTS</a>
      <form action="buatEvent.php" class="form-inline">
      <a class="navbar-text-right" href="home.php"style="color: white; font-family: Poppins; margin-right: 15px;">Home</a>             
      <button class="btn btn-outline-light my-2 my-sm-0" type="submit" style="font-family: Poppins; margin-right: 15px;">Buat Event</button>
    </form>

</nav>
<p>

     <h4 class="text-center" style="color: #31C0EC; font-family: Poppins; text-center">WELCOME TO EAD EVENTS!</h4><br><br>
     <div class="row"  style="margin-left: 300px;">
     <?php 
		include 'Config.php';
		$no = 0;
    $data = mysqli_query($conn,"select * from event_table");
    if ($no === mysqli_num_rows($data)) {
      ?>
      <div class="col-sm-2">
      <p class="text-center" style="color: black; font-family: Poppins; text-center"><b>No Events Found</b></p>
      </div>


      <?php
    } else {
      while($d = mysqli_fetch_array($data)){
        ?>
        <table border="0">
        <tr>
        <td>
        
      <div class="col-sm-2">
      <div class="card" style="width: 15rem; margin-bottom:50px;">
      <div class="shadow-lg p-0 mb-10 bg-white rounded"><div>
          <img  src="gambar/<?php echo $d['gambar']; ?>" class="card-img-top" alt="events">
          
      <div class="card-body">
          <a href="detail.php?id=<?php echo $d['id']; ?>"style="color:black;font-family: Poppins"><h5 class="card-title" style="font-family: Poppins"><?php echo $d['name']; ?></h5></a>
          <p class="card-text"><i class="far fa-calendar-alt text-warning mr-2"></i>  <?php echo $d['tanggal']; ?></p>
          <p class="card-text"><i class="fas fa-map-marker-alt text-warning mr-2"></i>  <?php echo $d['tempat']; ?></p>
          <p class="card-text">Kategori : Event <?php echo $d['kategori']; ?></p>
      </div>
    
           <div style="background-color:white;"class="card-footer  text-right">
           <a name="edit" id="edit" class="btn btn-primary btn-sm" href="detail.php?id=<?php echo $d['id']; ?>">Detail</a>
      </div>
      </div>
      </div>
      </td>
        
      <td></td>
        
      </tr>
      </table>
        
      <?php 
        }
      }
        ?>
    

     </div>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>