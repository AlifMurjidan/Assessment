<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  
<h2>Menentukan bilangan Ganjil Genap di PHP</h2>

	<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">  
	  Bilangan: <input type="text" name="bil">
	  <br><br>
	  <input type="submit" name="submit" value="Submit">  
	</form>
	<br>
	<?php
	$tampil = "";

		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$bil = $_POST["bil"];
			
			if ($bil % 2 == 0){ //Kondisi
			    echo "$bil Merupakan Bilangan Genap"; //Kondisi true
		}else {
			    echo "$bil Merupakan Bilangan Ganjil"; //Kondisi false
		}
	}
?>
</body>
</html>

<h2>Menampilkan Bilangan Prima dari 1 s/d 100</h2>
<?php for($i=1;$i<=100;$i++){ // angka awal variable i adalah 1 , set sampai kurang dari sama dengan 100 , i increment
    $a = 0; // variable a sama dengan 0
    for($j=1;$j<=$i;$j++){ // angka awal variable j adalah i , jika variable j kurang dari sama dengan (hasil dari variable i) brarti juga 100 , j increment
        if($i % $j == 0){ // jika i dibagi j sama dengan 0 /habis dibag
            $a++; // variable a increment
    }
}
if($a == 2){ //menyeleksi bilangan prima atau bukan, dikatakan bilangan prima jika bilangan itu hanya bisa dibagi oleh bilangan satu atau dibagi bilangan itu sendiri
    echo $i.'<br>'; // mengeluarkan nilai var $i dengan whitespace
 }
}
?>