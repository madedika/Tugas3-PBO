<html>
<head>
    <link rel="icon" type="image/png" href="king.png">
    <title>Tambah Senjata</title>   
    <style>
body{
    background-image : url('gun.jpg');
    background-repeat : no-repeat;
    background-size :cover;
}

table{
	border-collapse:collapse;  
    color : white;
}
table tr td, th, a{

  	padding:5px;
    color : white ;
}
table tr:hover{  
    background: grey;
}

</style>	
</head>

<body>
    <a href="index.php">Kembali</a>
    <br/><br/>

   

    <form action="add.php" method="post" name="form1">
        <table width="25%" border="0" background : white>
            <tr> 
                <td>Nama Senjata</td>
                <td><input type="text" name="namaSenjata"></td>
            </tr>
            <tr> 
                <td>Damage</td>
                <td><input type="text" name="damage"></td>
            </tr>
            <tr> 
                <td>Harga</td>
                <td><input type="text" name="harga"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
            
        </table>
    </form>
    <?php
    if(isset($_POST['Submit'])) {
        $namaSenjata = $_POST['namaSenjata'];
        $damage = $_POST['damage'];
        $harga = $_POST['harga'];
        

 
        include_once("config.php");

      
        $result = mysqli_query ($mysqli, "INSERT INTO senjata (namaSenjata, damage, harga) VALUES('$namaSenjata','$damage','$harga')");

        
        echo "User added successfully. <a href='index.php'>Lihat Senjata</a>";
    }
    ?>
</body>
</html>