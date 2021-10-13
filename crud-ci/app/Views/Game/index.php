<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $judul ?></h1>

    <div class="card">
        <div class="card-header">
            <!-- button modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalTambah">
                <i class="fa fa-plus">&nbsp;</i>
                Tambah Data
            </button>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Genre</th>
                        <th>Ukuran</th>
                        <th>Tahun</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1;  ?>
                    <?php foreach ($game as $row) :  ?>
                        <tr>
                            <td scope="row"><?= $i; ?></td>
                            <td><?= $row['nama']; ?></td>
                            <td><?= $row['genre']; ?></td>
                            <td><?= $row['ukuran']; ?></td>
                            <td><?= $row['tahun']; ?></td>
                            <td>
                                <button class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></button>
                                <button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                            </td>


                        </tr>
                        <?php $i++;  ?>
                    <?php endforeach;  ?>
                </tbody>
            </table>
        </div>
    </div>



</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Modal -->
<div class="modal fade" id="modalTambah">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('game/tambah'); ?>" method="POST">
                    <div class="form-group mb-0">
                        <label for="nama">Nama</label><br>
                        <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan Nama">
                    </div>
                    <div class="form-group mb-0">
                        <label for="genre">Genre</label><br>
                        <select name="genre" id="genre" class="form-control">
                            <option value="">-Pilih Genre-</option>
                            <option value="Actions">Actions</option>
                            <option value="Moba">Moba</option>
                            <option value="Puzzle">Puzzle</option>
                        </select>
                    </div>
                    <div class="form-group mb-0">
                        <label for="ukuran">Ukuran</label><br>
                        <input type="text" name="ukuran" id="ukuran" class="form-control" placeholder="Ukuran Game">
                    </div>
                    <div class="form-group mb-0">
                        <label for="tahun">Tahun</label><br>
                        <select name="tahun" id="tahun" class="form-control">
                            <option value="">-Pilih Tahun-</option>
                            <option value="2000">2000</option>
                            <option value="2001">2001</option>
                            <option value="2002">2002</option>
                            <option value="2003">2003</option>
                            <option value="2004">2004</option>
                            <option value="2005">2005</option>
                            <option value="2006">2006</option>
                        </select>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>