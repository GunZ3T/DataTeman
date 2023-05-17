<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Form Tambah Teman</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              Tambah Teman Baru
            </div>
            <div class="card-body">
              <form action="ProsesAddTeman.php" method="POST">
                
                <div class="form-group">
                  <label>ID</label>
                  <input type="number" max="999" name="no" placeholder="Masukkan id" class="form-control" required>
                </div>

                <div class="form-group">
                  <label>Nama Lengkap</label>
                  <input type="text" name="nama" placeholder="Masukkan Nama" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Jenis Kelamin</label>
                        <select class="form-control" name="jk">
                            <option>LAKI-LAKI</option>
                            <option>PEREMPUAN</option>
                        </select>
                </div>

                <div class="form-group">
                    <label>Usia</label>
                    <input class="form-control" placeholder="Tulisankan Angka Umurnya Saja" type="number" min="1" max="300" name="usia" required>
                </div>
                
                <button type="submit" class="btn btn-success">SIMPAN</button>
                <button type="reset" class="btn btn-warning">RESET</button>
                <a href="index.php" class="btn btn-warning float-right">Kembali</a>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </body>
</html>