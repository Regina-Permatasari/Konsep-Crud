<?php
// Create database connection using config file
include_once("config.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
?>

<html lang="en">
<head>    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepage</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <style>
		 div {
			width: 1110px;
            height: 450px;
            background-color: salmon;
            text-align: center;
			line-height: 30px;
		}
	</style>
</head>
<body>
<div class="container text-center">
<h1 class="py-3 bg-dark text-light rounded"> Data Pesanan Rumah Makan Cahaya Mas Purwokerto </h1>
<hr>
    <table class="table table-striped table-dark">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Menu</th>
                <th>Jumlah Pesanan</th>
                <th>Nomor Meja</th>
            </tr>
        </thead>
            <?php  
                while($user_data = mysqli_fetch_array($result)) {         
                echo "<tr>";
                echo "<td>".$user_data['id']."</td>";
                echo "<td>".$user_data['nama']."</td>";
                echo "<td>".$user_data['menu']."</td>";    
                echo "<td>".$user_data['jumlah']."</td>";  
                echo "<td>".$user_data['meja']."</td>";  
                echo "<td><button><a href='edit.php?id=$user_data[id]'>Edit</a></button> | <button><a href='delete.php?id=$user_data[id]'>Delete</a></button></td></tr>";        
                }
            ?>
    </table>
    <a href="add.php">Tambahkan Pesanan</a><br/><br/>
</div>
</body>
</html>