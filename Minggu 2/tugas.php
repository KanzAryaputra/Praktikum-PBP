<?php
    //  Nama    : Kanz Allief Aryaputra
    //  NIM     : 24060122140135

$array_mhs = array('Abdul' => array(89,90,54),
                    'Budi' => array(78,60,64), 
                    'Nina' => array(67,56,84), 
                    'Budi' => array(87,69,50), 
                    'Budi' => array(98,65,74)
                );

function hitung_rata($array){
    echo ($array[0] + $array[1] + $array[2])/3;
}
function print_mhs($array_mhs){ 
    foreach($array_mhs as $mhs => $array_nilai){
    echo "<tr>";
    echo "<td>".$mhs."</td>"; 
        foreach($array_nilai as $nilai){
        echo "<td>".$nilai."</td>";
    }
    echo "<td>"; 
    hitung_rata($array_nilai); 
    echo "</td>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<h2>Kanz Allief Aryaputra/24060122140135</h2>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>PBPA1_24060122140135</title>
<style>
        table,tr,th,td{
            border: 1px solid black; text-align: center;
        }
</style>
</head>
<body>
    <table>
        <tr>
            <th> Nama </th>
            <th> Nilai 1 </th>
            <th> Nilai 2 </th>
            <th> Nilai 3 </th>
            <th> Rata2 </th>
        </tr>
        <?php print_mhs($array_mhs); ?>
    </table>
</body>
</html>