<?php

include_once("config.php");

$result = mysqli_query($mysqli, "SELECT * FROM senjata ORDER BY idSenjata ASC");
?>

<html>
<head>  
    <link rel="icon" type="image/png" href="king.png">  
    <title>! Blackmarket Inventory !</title>
</head>

<body>
        <a href="add.php">Masukkan Senjata</a><br/><br/>

    <table width='70%'>
    <tr>
         <th>Nama Senjata</th> <th>Damage</th> <th>Harga</th> <th>id</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['namaSenjata']."</td>";
        echo "<td>".$user_data['damage']."</td>";
        echo "<td>".$user_data['harga']."</td>";
        echo "<td>".$user_data['idSenjata']."</td>";      
    }
    ?>
    </table>

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

</body>
</html>