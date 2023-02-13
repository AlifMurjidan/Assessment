<?php 
@$sisi = $_GET['sisi'];
@$volume = $sisi * $sisi * $sisi;
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Kubus</title>
    </head>
    <body>
        <h2>KUBUS</h2>
        <form method="GET">
            <table>
                <tr>
                    <td>sisi</td>
                    <td> : </td>
                    <td><input type="text" name="sisi" value="<?php $sisi; ?>"/> cm<br/></td>
                </tr>
            </table>
            <input type="submit" name="submit" value="Hasil"/><br/></br>
            <?php 
            echo "Hasil Kubus : ".$volume." cm^3";
            ?>
        </form>
    </body>
</html> 

<?php 
@$alas = $_REQUEST['alas'];
@$tinggi = $_REQUEST['tinggi'];
@$sisi = $_REQUEST['sisi'];
@$t_prisma = $_REQUEST['t_prisma'];
@$luas_alas_segitiga = 1/2 * $alas * $tinggi;
@$v_prisma_segitiga = $luas_alas_segitiga * $t_prisma;
?>


<!DOCTYPE html>
<html>
    <head>
        <title>prisma</title>
    </head>
    <body> 
        <h2>PRISMA SEGITIGA</h2>
        <form method="REQUEST">
            <table>
                <tr>
                    <td>alas</td>
                    <td> : </td>
                    <td><input type="text" name="alas" value="<?php echo $alas;?>"/> cm<br/></td>
                </tr>
                <tr>
                    <td>tinggi</td>
                    <td> : </td>
                    <td><input type="text" name="tinggi" value="<?php echo $tinggi;?>"/> cm<br/></td>
                </tr>
                <tr>
                    <td>t_prisma</td>
                    <td> : </td>
                    <td><input type="text" name="t_prisma" value="<?php echo $t_prisma;?>"/> cm<br/></td>
                </tr>
                <tr>
                    <td>sisi</td>
                    <td> : </td>
                    <td><input type="text" name="sisi" value="<?php echo $sisi;?>"/> cm<br/></td>
                </tr>
            </table>
            <input type="submit" name="submit" value="Hasil"/><br/><br/>
            <?php 
            echo "Luas alas Prisma Segitiga : ".$luas_alas_segitiga." cm^2<br/>";
            echo "Volume Prisma Segitiga : ".$v_prisma_segitiga." cm^3<br/>";
            ?>
        </form>
    </body>
</html>

<?php 
@$jari2 = $_REQUEST['jari2'];
@$volume = 4/3 * 22/7 * $jari2 * $jari2 * $jari2;
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Bola</title>
    </head>
    <body>
        <h2>BOLA</h2>
        <form method="GET">
            <table>
                <tr>
                    <td>Jari-jari</td>
                    <td> : </td>
                    <td><input type="text" name="jari2" value="<?php echo $jari2; ?>"/> cm<br/></td>
                </tr>
            </table>
            <input type="submit" name="submit" value="Hasil"/><br/><br/>
            <?php 
            echo "Volume Bola : ".$volume." cm^3";
            ?>
        </form>
    </body>
</html>

