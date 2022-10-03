<!DOCTYPE html>
<html>

<head>
  <title>Halaman Edit Data</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/3067/3067513.png" type="image/png">
  <style>
    * {
      margin: 0;
      padding: 0;
      font-family: 'Poppins', sans-serif;

    }

    @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

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
          Mengedit Data
        </div>
      </h5>
      <div class="card-body">
        <p class="card-text">
          @foreach($data_computer as $p)
        <form action="/komputer/update" method="post">
          {{ csrf_field() }}
          <table class="table">
            <input type="hidden" name="id" value="{{ $p->id }}">
            <tbody>
              <tr>
                <th>Nama</th>
                <td><input type="text" required="required" name="name" value="{{ $p->name }}"></td>
              </tr>
              <tr>
                <th>Spesifikasi</th>
                <td> <input type="text" required="required" name="specs" value="{{ $p->specs }}"></td>
              </tr>
              <tr>
                <th>Harga</th>
                <td><input type="number" required="required" name="price" value="{{ $p->price }}"></td>
              </tr>
              <tr>
                <th>Stok</th>
                <td> <input type="number" required="required" name="stock" value="{{ $p->stock }}"></td>
              </tr>
            </tbody>

          </table>
          <input class="btn btn-success" type="submit" value="Simpan Data">
          <a href="/komputer" class="btn btn-primary">Kembali</a>
        </form>
        @endforeach
        </p>

      </div>
    </div>

  </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

</body>

</html>