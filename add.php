<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Users</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <style>
		 div {
			width: 1350px;
            height: 520px;
            background-color: salmon;
            text-align: center;
			line-height: 30px;
		}
	</style>
</head>
<body>
<div class="container text-center">
<h1 class="py-3 bg-dark text-light rounded"> Form Pesan Makanan </h1>
<hr>
    <a href="index.php">Tampilkan Data</a>
    <br/><br/>
    <form action="add.php" method="post" name="form1">
        <table width="25%" border="0" align="center">
            <tr> 
                <td>ID</td>
                <td><input type="text" name="id"></td>
            </tr>
            <tr> 
                <td>Nama Anda</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr> 
                <td>Menu</td>
                <td><input type="text" name="menu"></td>
            </tr>
            <tr> 
                <td>Jumlah Pesanan</td>
                <td><input type="text" name="jumlah"></td>
            </tr>
            <tr> 
                <td>Nomor Meja</td>
                <td><input type="text" name="meja"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>
    <?php
        // Check If form submitted, insert form data into users table.
        if(isset($_POST['Submit'])) {
            $id = $_POST['id'];
            $nama = $_POST['nama'];
            $menu = $_POST['menu'];
            $jumlah = $_POST['jumlah'];
            $meja = $_POST['meja'];
        // include database connection file
        include_once("config.php");
        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO users(id,nama,menu,jumlah,meja) VALUES('$id','$nama','$menu','$jumlah','$meja')");
        // Show message when user added
        echo "User added successfully. <a href='index.php'>View Users</a>";
        }
    ?>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</div>
</body>
</html>