<?php  
session_start(); 

// Cek login
if(!isset($_SESSION['status_login']) || $_SESSION['status_login'] != true){ 
    echo '<script>window.location="login.php"</script>'; 
    exit();
}
?> 

<!DOCTYPE html> 
<html> 
<head> 
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <title>Dashboard | penjualan online</title> 
    <link rel="stylesheet" type="text/css" href="css/style.css"> 
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet"> 
</head> 
<body> 
    <!-- header --> 
    <header> 
        <div class="container"> 
            <h1><a href="dashboard.php">penjualan online</a></h1> 
            <ul> 
                <li><a href="dashboard.php">Dashboard</a></li> 
                <li><a href="profil.php">Profil</a></li> 
                <li><a href="data-kategori.php">Data Kategori</a></li> 
                <li><a href="data-produk.php">Data Produk</a></li> 
                <li><a href="keluar.php">Keluar</a></li> 
            </ul> 
        </div> 
    </header>  

    <!-- content --> 
    <div class="section"> 
        <div class="container"> 
            <h3>Dashboard</h3> 
            <div class="box"> 
                <h4>Selamat Datang <?php echo isset($_SESSION['a_global']->admin_name) ? $_SESSION['a_global']->admin_name : 'Admin'; ?> di Toko Online</h4> 
            </div> 
        </div> 
    </div>  

    <!-- footer --> 
    <footer> 
        <div class="container"> 
            <small>Copyright  &copy; 2025- penjualan online.</small> 
        </div> 
    </footer> 
</body> 
</html>