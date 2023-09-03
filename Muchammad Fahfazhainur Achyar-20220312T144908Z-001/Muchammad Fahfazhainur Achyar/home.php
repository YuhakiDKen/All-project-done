<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="refresh" content="">
	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style1.css">
	<title>Document</title>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid">
			<a class="navbar-brand" href="#">
				<img src="logo.png" alt="" width="30" height="30" class="d-inline-block align-text-top">
				PerduliLindungi
			</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse justify-content-center" id="navbarNav">
				<ul class="navbar-nav home">
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="home.php">Griya</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="catatan.php">Cathetan perjalanan</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="isi.php">Isi data sampeyan</a>
					</li>
				</ul>
			</div>
			<div class="collapse navbar-collapse justify-content-end" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item">
						<botton data-bs-toggle="modal" data-bs-target="#Buttonout"><a class="nav-link" href="logout.php#">Medal</a></botton>
					</li>
				</ul>
			</div>
		</div>
		<div class="modal fade" id="Buttonout" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog fw-bold">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Medal</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						Saestu kangge medal???
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-outline-primary fw-bold" data-bs-dismiss="modal">Mboten</button>
						<a href="logout.php"><button type="button" class="btn btn-outline-danger fw-bold">Nggih</button></a>
					</div>
				</div>
			</div>
		</div>
	</nav>

	<div class="container judul">
		<h1 class="text-dark text-center">Sugeng Rawuh</h1>
		<p class="text-dark text-center fs-3">Pangangge:</p>
	</div>
	<div class="row">
		<div class="col-2">
		</div>
		<div class="col-9">
			<br>
			<div class="card bg-dark text-light border-dark">
				<div class="card-body">
					Sugeng rawuh wonten aplikasi pedulilindungi sampun kesupen tansah angge masker lan mbekta hand sanitizer. tansah jagi kesarasan nggih wonten pundia sampeyan wonten :) <br><br><br><br><br><br><br><br><br><br><br><br><br>
				</div>
			</div>
			<br>
			<div class="">
				<div class="row">
					<div class="col">
						<a href="isi.php"><button type="button" class="btn btn-success">Isi cathetan perjalanan</button></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Bootstrap JS -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>