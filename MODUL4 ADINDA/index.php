

<?php 
	session_start();
	if (!(isset($_SESSION["id"]))) {
		header("Location: login.php");
	}
 ?>
<!DOCTYPE html>
<html>
<head>
    <title>Home | WAD BEAUTY</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel="stylesheet" href="assets/css/font-awesome.css">
</head>
<body style="background-color: #d9b38c;">

<nav class="<?php if ($_SESSION["color"] == "dark") { echo "navbar navbar-dark bg-dark";} else { echo "navbar navbar-dark bg-dark";}?>">
    <a class="navbar-brand" href="index.php">WAD BEAUTY</a>
    <form class="form-inline">
    
    <a class="nav-link" style="color:black;" href="cart.php"><i class="fa fa-shopping-cart"></i></a>
    <div class="navbar-expand">
    <ul class="navbar-nav">
    <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Selamat Datang, <?php echo $_SESSION['name'] ?>
    </a>


    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
    <a class="dropdown-item" href="profile.php">Profile</a>
    <a class="dropdown-item" href="controller/logout.php">Logout</a>
    </div>


    </li>
    </ul>
    </div>
    </form>
</nav>


<?php
    if (!empty($_GET['status'])) {
        if($_GET['status'] == "success"){
            ?>
            <div class="alert alert-warning" role="alert">Berhasil ditambahakan!</div>
            <?php
        } else{
            ?>
            <div class="alert alert-danger" role="alert">Gagal ditambahakan!</div>
            <?php
        }
    }
    
?>

<section class="container mt-4">
    <div class="row justify-content-center">
    <div class="row justify-content-center mt-3 ">
    <div class="col-sm">
    <div class="card">
    <div class="card-header text-center" style="background: linear-gradient(to right, #33ccff 0%, #ccff33 100%);">
    <h4>WAD BEAUTY</h4>
    Tersedia Skin Care yang berkualitas Tinggi
    </div>

                  
    <div class="row">
    <div class="col-sm d-flex pr-0">
    <div class="card" style="width: 18rem;">
    <img src="skincare1.jpg" class="card-img-top" alt="...">
    <div class="card-body">
    <h5 class="card-title">ORDINARY</h5>
    <p class="card-text">Rangkaian Produk ini membantu memberbaiki kulit wajah anda.</p>
    </div>


    <ul class="list-group list-group-flush">
    <li class="list-group-item">Rp. 399.000</li>
    </ul>
    <div class="card-footer">
    <a href="controller/addchart.php?name=ORDINARY&harga=399000" class="btn btn-warning btn-block">Tambah ke Keranjang</a>
    </div>
    </div>
    </div>

                    
    <div class="col-sm d-flex p-0">
    <div class="card" style="width: 18rem;">
    <img src="skincare2.jpg" class="card-img-top" alt="...">
    <div class="card-body">
    <h5 class="card-title">PIXY</h5>
    <p class="card-text">Toner ini membantu mengecilkan pori - pori anda.</p>
    </div>


    <ul class="list-group list-group-flush">
    <li class="list-group-item">Rp. 299.000</li>
    </ul>
    <div class="card-footer">
    <a href="controller/addchart.php?name=PIXY&harga=299000" class="btn btn-warning btn-block">Tambah ke Keranjang</a>
    </div>
    </div>
    </div>

                   
    <div class="col-sm d-flex pl-0">
    <div class="card" style="width: 18rem;">
    <img src="skincare3.jpg" class="card-img-top" alt="...">
    <div class="card-body">
    <h5 class="card-title">VEOLI</h5>
    <p class="card-text">Krim ini akan membantu mencerahkan kulit anda.</p>
    </div>


    <ul class="list-group list-group-flush">
    <li class="list-group-item">Rp. 199.000</li>
    </ul>
    <div class="card-footer">
    <a href="controller/addchart.php?name=VEOLIR&harga=199000" class="btn btn-warning btn-block">Tambah ke Keranjang</a>

    
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div> 
    </div>
</section>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</body>
</html>
