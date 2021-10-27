<!DOCTYPE html>
<html>
    <head> 
        <title>105219051-Shelma Alifia-Praktikum3</title>
        <link rel="stylesheet" href="style.css">
    </head>
<body>
    <center>
    <h1>DAFTAR ISI WARUNG PAK JOY</h1>
    <?php

        $NamaBarang = [ 1 => 'Brokoli',
                        2 => 'Bayam',  
                        3 => 'Kubis',  
                        4 => 'Sawi',
                        5 => 'Beras'];
        $Berat_kg = [   1 => '0.1',
                        2 => '0.2',  
                        3 => '0.1',  
                        4 => '0.5',
                        5 => '1'];
        $Berat_gr = [   1 => '100',
                        2 => '200',  
                        3 => '100',  
                        4 => '500',
                        5 => '1000'];
        $Berat_mg = [   1 => '100000',
                        2 => '200000',  
                        3 => '100000',  
                        4 => '500000',
                        5 => '1000000'];
        $Berat_liter = [1 => '0',
                        2 => '0',  
                        3 => '0',  
                        4 => '0',
                        5 => '0.753'];
        $Stock = [  1 => '2',
                    2 => '0',  
                    3 => '3',  
                    4 => '0',
                    5 => '4'];

    ?>

        <table>
        <tr>
            <th>NO</th>
            <th>NAMA BARANG</th>
            <th>BERAT (KG)</th>
            <th>BERAT (GR)</th>
            <th>BERAT (MG)</th>
            <th>BERAT (LITER)</th>
            <th>STOCK</th>
        </tr>

        <tr>
            <?php
                for($i=1;$i<=count($NamaBarang);$i++){
                    echo "<tr>";
                    echo "<td>$i</td>";
                    echo "<td>$NamaBarang[$i]</td>";
                    echo "<td>$Berat_kg[$i]</td>";
                    echo "<td>$Berat_gr[$i]</td>";
                    echo "<td>$Berat_mg[$i]</td>";
                    echo "<td>$Berat_liter[$i]</td>";                   
                        if($Stock[$i] == "0"){
                            echo "<td style='color:white;background-color:#F08080;'>";
                            echo "Kosong";
                        }else{
                            echo "<td>$Stock[$i]</td>";
                        }
                    echo "</tr>";
                }

            ?>
        </tr>
    </table>
    </center>
</body>
</html> 