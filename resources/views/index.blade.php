<!DOCTYPE html>
<html>

<head>
	<title>Data Komputer</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="icon" href="https://cdn-icons-png.flaticon.com/512/3067/3067513.png" type="image/png">
	<style>
		* {
			margin: 0;
			padding: 0;
			font-family: 'Poppins', sans-serif;

		}

		body {
			background-color: #121212;
		}

		@import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
	</style>
</head>

<body>
	<nav class="navbar shadow  navbar-dark navbar-expand-lg bg-dark">
		<div class="container">
			<a class="navbar-brand" href="#">Komputer</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
				<div class="navbar-nav ms-auto">
					<a href="{{ route('logout') }}" class="btn btn-danger">Logout</a>
				</div>
			</div>
		</div>
	</nav>
	<div class="card shadow m-5">
		<h5 class="card-header">Data Komputer</h5>
		<div class="card-body">
			<p class="card-text">
			<table class="table table-striped">
				<tr>
					<th>ID</th>
					<th>Nama</th>
					<th>Spesifikasi</th>
					<th>Harga</th>
					<th>Stok</th>
					<th>Opsi</th>
				</tr>
				@foreach($data_computer as $p)
				<tr>
					<td>{{ $p->id }}</td>
					<td>{{ $p->name }}</td>
					<td>{{ $p->specs }}</td>
					<td>{{ $p->price }}</td>
					<td>{{ $p->stock }}</td>
					<td>
						<a href="/komputer/edit/{{ $p->id }}"><i class="fa-solid fa-pencil"></i></a>
						|
						<a href="/komputer/hapus/{{ $p->id }}"><i class="fa-solid fa-trash text-danger"></i></a>
					</td>
				</tr>
				@endforeach
			</table>
			</p>
			<a href="/komputer/tambah" class="btn btn-primary">Tambah Data Baru</a>

		</div>
	</div>


	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js" integrity="sha512-naukR7I+Nk6gp7p5TMA4ycgfxaZBJ7MO5iC3Fp6ySQyKFHOGfpkSZkYVWV5R7u7cfAicxanwYQ5D1e17EfJcMA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>