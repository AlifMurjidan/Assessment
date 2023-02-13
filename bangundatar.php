<?php 

@$sisi = $_GET['sisi'];
@$luas = $sisi * $sisi;
@$keliling = 4 * $sisi;
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Persegi</title>
    </head>
    <body>
    <h2>Menghitung Luas & Keliling Lingkaran</h2>
    <p>Isi isian pada setiap kolom yang tersedia!</p>
        <form method="GET">
        s (sisi) = 
            <input type="text" name="sisi" value="<?php echo $sisi; ?>"/> cm<br/>
            <input type="submit" name="submit" value="Hasil"/><br/><br/>

            <?php 
            echo "Luas Persegi : ".$luas." cm^2<br/>";
            echo "Keliling Persegi : ".$keliling," cm";
            ?>
        </form>
    </body>
</html>

<html>
    <head>
        <title>Program Menghitung Keliling Lingkaran Dengan Php</title>
    </head>
    <body>
        <div class="container">
            <h2>Menghitung Luas & Keliling Lingkaran</h2>
            <p>Isi isian pada setiap kolom yang tersedia!</p>
            <form method="post">
           
                <p><b>Jari-jari: </b></p>
                    <input type="text" name="jari"> <br/>
               
                <input style="margin-top: 1%" type="submit" class="btn btn-primary" name="hitung" value="Hitung">
            </div>
            </form>
                
            </div>
        </div>
    </body>
</html>

<html>
    <head>
<body>
<form name="form1" method="post" action="lingkaran.php">
<pre>
<?php
$phi=22/7;
$r=$_REQUEST['jari'];
$luas=$phi*$r*$r;
$keliling1= $phi*($r+$r);

extract($_POST);
if (isset ($hitung))
{echo "Luasnya lingkaran dengan jari-jari $r adalah $luas <br>
keliling lingkaran dengan jari-jari $r adalah $keliling1";}
?>
</pre>
</form>
</body>
</html>

<?php 

@$alas = $_GET['alas'];
@$tinggi = $_GET['tinggi'];
@$sisimiring = $_GET['sisimiring'];
@$luas = 1/2 * $alas * $tinggi;
@$keliling = $tinggi + $sisimiring = $alas;
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Segitiga</title>
    </head>
    <body>
    <h2>Menghitung Luas & Keliling Segitiga</h2>
    <p>Isi isian pada setiap kolom yang tersedia!</p>
        <form method="GET">
            <table>
                <tr>
                    <td>alas</td>
                    <td> : </td>
                    <td><input type="text" name="alas" value="<?php echo $alas; ?>"/> <br/></td>
                </tr>
                <tr>
                    <td>tinggi</td>
                    <td> : </td>
                    <td><input type="text" name="tinggi" value="<?php echo $tinggi; ?>"/> <br/></td>
                </tr>
                <tr>
                    <td>sisimiring</td>
                    <td> : </td>
                    <td><input type="text" name="sisimiring" value="<?php echo $sisimiring; ?>"/> <br/></td>
                </tr>
            </table>
            <input type="submit" name="submit" value="Hasil"/><br/><br/>
<?php 
echo "Luas Segitiga : ".$luas." cm^2<br/>";
echo "Keliling Segitiga : ".$keliling." cm";
?>
        </form>
    </body>
</html>