            <div class="container">

            <div class="row mt-3">
            <div class="col-md-6">

            <div class="card">
        <div class="card-header">
            Form Tambah Data Mahasiswa
        </div>
        <div class="card-body">
        <form action="" method="post">
            <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" name="nama" class="form-control" id="nama">
            <small class="form-text text-danger"><?= form_error('nama'); ?></small>
            </div>
        <form action="" method="post">
            <div class="form-group">
            <label for="nrp">NRP</label>
            <input type="text" name="nrp" class="form-control" id="nrp">
            <small class="form-text text-danger"><?= form_error('nrp'); ?></small>

            </div>
        <form action="" method="post">
            <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" class="form-control" id="email">
            <small class="form-text text-danger"><?= form_error('email'); ?></small>

            </div>
            <div class="form-group">
        <label for="jurusan">Jurusan</label>
        <select class="form-control" id="jurusan" name="jurusan">
        <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
        <option value="Teknik Komunikasi Dan Jaringan">Teknik Komunikasi Dan Jaringan</option>
        <option value="Multimedia">Multimedia</option>
        <option value="Teknik Sepeda Motor">Teknik Sepeda Motor</option>
        <option value="Teknik Mesin Mobil">Teknik Mesin Mobil</option>
        <option value="Teknik Agribisnis Pertanian">Teknik Agribisnis Pertanian</option>
        
        </select>
      </div>

        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>

            </form>
        </div>
        </div>
         

            </div>
            </div>
            </div>
    