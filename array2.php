<?php 
$mahasiswa = [
	["Eka Yanuar","12345678","Sistem Informasi","eka@stimata.ac.id"],
	["Yuniar","12345679","Sistem Informasi","yuniar@stimata.ac.id"],
	["Bintang","12345677","Teknologi Informasi","bintang@stimata.ac.id"]
]
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
	<body>
		<h1>Daftar Mahasiswa</h1>
		<?php foreach($mahasiswa as $mhs) : ?>
		<ul>
			<?php foreach ($mhs as $m) : ?>
				<li><?php echo $m; ?></li>
			<?php endforeach; ?>
		</ul>
		<?php endforeach; ?>
	</body>
</html>