<html>

<head> 
    <title> Latihan 1 </title> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

	<style type="text/css">
		body{

			background: linear-gradient(#9DC183, #98FB98);
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
  <h4 class="alert-heading">Halo Kawan... Yuk kita belajar web programming...!!</h4>
 <p>
 <h6>Nilai 1 =<?= $nilai1; ?> </h6>
 <h6>Nilai 2 =<?= $nilai2; ?> </h6>
 <hr>
 <p class="mb-0">ini hasil dari pemodelan dengan methode penjumlahan yaitu
 <?= $nilai1 ." + " .$nilai2 ." = " .$hasil; ?>
</div>
</div>
</body> 

</html>