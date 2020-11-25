<?php
// include database connection file
include_once("config.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{   
    $id = $_POST['id'];
    $nama=$_POST['nama'];
    $menu=$_POST['menu'];
    $jumlah=$_POST['jumlah'];
    $meja=$_POST['meja'];

    // update user data
    $result = mysqli_query($mysqli, "UPDATE users SET id='$id',nama='$nama',menu='$menu',jumlah='$jumlah',meja='$meja' WHERE id=$id");

    // Redirect to homepage to display updated user in list
    header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id=$id");

while($user_data = mysqli_fetch_array($result))
{
    $id = $user_data['id'];
    $nama = $user_data['nama'];
    $menu = $user_data['menu'];
    $jumlah = $user_data['jumlah'];
    $meja = $user_data['meja'];
}
?>
<html>
<head>  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Pesanan</title>
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
<h1 class="py-3 bg-dark text-light rounded"> Update Pesanan Anda </h1>
<hr>
    <a href="index.php" align="center">Home</a>
    <br/><br/>
    <form name="update_user" method="post" action="edit.php">
        <table border="0" align="center">
            <tr> 
                <td>ID</td>
                <td><input type="text" name="id" value=<?php echo $id;?>></td>
            </tr>
            <tr> 
                <td>Nama Anda</td>
                <td><input type="text" name="nama" value=<?php echo $nama;?>></td>
            </tr>
            <tr> 
                <td>Menu</td>
                <td><input type="text" name="menu" value=<?php echo $menu;?>></td>
            </tr>
            <tr> 
                <td>Jumlah Pesanan</td>
                <td><input type="text" name="jumlah" value=<?php echo $jumlah;?>></td>
            </tr>
            <tr> 
                <td>Nomor Meja</td>
                <td><input type="text" name="meja" value=<?php echo $meja;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
    </div>
</body>
</html>