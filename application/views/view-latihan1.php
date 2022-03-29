<!DOCTYPE html>
<html>
<head>
	<title>Latihan 1</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

	<style type="text/css">
		body{

			background: linear-gradient(#26E1DA, #1cA5A8);
			height: 90vh;
		}
		.home{
			display: flex;
			align-items: center;
			justify-content: center;
			margin-top: 230px;
	}
	</style>
</head>
<body>
 <div class="home">
	<div class="alert alert-danger" role="alert">
  <h4 class="alert-heading">Yang Penting Ngarti dah</h4>
 <p>
 <h3>Nilai 1 =<?= $nilai1; ?> </h3>
 <h3>Nilai 2 =<?= $nilai2; ?> </h3>
 <hr>
 <p class="mb-0">ini hasil dari pemodelan dengan methode penjumlahan yaitu
 <?= $nilai1 ." + " .$nilai2 ." = " .$hasil; ?>
</div>
</div>
</body>
</html>