<?php
include 'Config.php';
if (isset($_POST['name'])) {
    
    $name = $_POST ['name'];
    $deskripsi = $_POST ['deskripsi'];
    $gambar = $_FILES['gambar']['name'];
    $kategori = $_POST ['kategori'];
    $tanggal = $_POST ['tanggal'];
    $mulai = $_POST ['mulai'];
    $berakhir = $_POST ['berakhir'];
    $tempat = $_POST ['tempat'];
    $harga = $_POST ['harga'];
    $benefit = implode(",", $_POST['benefit']);

    $target = "gambar/" . basename($gambar = $_FILES['gambar']['name']);
    move_uploaded_file($_FILES['gambar']['tmp_name'], $target);

    $query = mysqli_query($conn, "INSERT INTO event_table VALUES('','$name','$deskripsi','$gambar','$kategori','$tanggal','$mulai','$berakhir','$tempat','$harga','$benefit')");

    if ($query > 0) {
        echo "<script>alert('Data telah disimpan'); window.location.href='home.php';</script>";
    }else{
        echo "<script>alert('Gagal Disimpan');window.location.href='simpan.php';</script>";
    }
    }
?>