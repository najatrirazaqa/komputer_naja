<!DOCTYPE html>
<html>

<head>
  <title>Tambah Data</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/3067/3067513.png" type="image/png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
      font-family: 'Poppins', sans-serif;

    }


    body {
      background-color: #121212;
    }
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
  <section>
    <div class="card m-5">
      <h5>
        <div class="card-header">
          Menambahkan Data baru
        </div>
      </h5>
      <div class="card-body">
        <p class="card-text">
        <form action="/komputer/store" method="post">
          {{ csrf_field() }}
          <table class="table">
            <tbody>
              <tr>
                <th>Nama</th>
                <td><input type="text" name="name"> <br /></td>
              </tr>
              <tr>
                <th>Spesifikasi</th>
                <td> <input type="text" name="specs"> <br /></td>
              </tr>
              <tr>
                <th>Harga</th>
                <td><input type="number" name="price"> <br /></td>
              </tr>
              <tr>
                <th>Stok</th>
                <td> <input type="number" name="stock"> <br /></td>
              </tr>
            </tbody>

          </table>
          <input class="btn btn-success" type="submit" value="Simpan Data">
          <a href="/komputer" class="btn btn-primary"><i class="fa-solid fa-arrow-left"></i> Kembali</a>
        </form>
        </p>

      </div>
    </div>

  </section>










  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js" integrity="sha512-naukR7I+Nk6gp7p5TMA4ycgfxaZBJ7MO5iC3Fp6ySQyKFHOGfpkSZkYVWV5R7u7cfAicxanwYQ5D1e17EfJcMA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>