<?php 
$handphone = [
	[
		"merk" => "iphone",
		"harga" => "10 juta", 
		"ram" => "8gb",
		"domisili" => "indonesia",
		"gambar" => "gambar1.jpeg"
	],
	[
		"merk" => "samsung",
		"harga" => "5 juta", 
		"ram" => "10gb",
		"domisili" => "indonesia",
		"gambar" => "gambar2.jpeg",
	]
	
];
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Contoh</title>
</head>
<body>
	<h1>DAFTAR BARANG</h1>
	<?php  foreach ($handphone as $hp) : ?>
		<ul>
			<li>
				<img src="img/<?= $hp["gambar"] ?>">
			</li>
			<li>Merk 		: <?= $hp["merk"]; ?></li>
			<li>Harga 		: <?= $hp["harga"]; ?></li>
			<li>Ram 		: <?= $hp["ram"]; ?></li>
			<li>Dmomisili 	: <?= $hp["domisili"]; ?></li>
			
		</ul>
			
	<?php endforeach; ?>
	

</body>
</html>