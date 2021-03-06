<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $judul ?></h1>

    <?php if (session()->get('message')) :  ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            Data Game <strong><?= session()->getFlashdata('message') ?></strong>
        </div>
        <script>
            $("alert").alert();
        </script>
    <?php endif;  ?>

    <div class="row">
        <div class="col-md-6">
            <?php
            if (session()->get('err')) {
                echo " <div class='alert alert-danger' role='alert'>" . session()->get('err') . " </div>";
            }
            ?>
        </div>
    </div>

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
                            <td><?= $row['ukuran']; ?> MB</td>
                            <td><?= $row['tahun']; ?></td>
                            <td>
                                <button type="button" data-toggle="modal" data-target="#modalEdit" id="btn-edit" class="btn btn-sm btn-warning" data-id="<?= $row['id'] ?>" data-nama="<?= $row['nama'] ?>" data-genre="<?= $row['genre'] ?>" data-ukuran="<?= $row['ukuran'] ?>" data-tahun="<?= $row['tahun'] ?>"> <i class="fa fa-edit"></i> </button>
                                <button type="button" data-toggle="modal" data-target="#modalHapus" id="btn-hapus" class="btn btn-sm btn-danger" data-id="<?= $row['id']; ?>"> <i class="fa fa-trash-alt"></i> </button>
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

<!-- Modal Tambah -->
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
                        <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan Nama" required="" oninvalid="this.setCustomValidity('Masukkan Nama')" oninput="this.setCustomValidity('')">
                    </div><br>
                    <div class="form-group mb-0">
                        <label for="genre">Genre</label><br>
                        <select name="genre" id="genre" class="form-control" required="" oninvalid="this.setCustomValidity('Pilih Genre')" oninput="this.setCustomValidity('')">
                            <option value="">-Pilih Genre-</option>
                            <option value="Actions">Actions</option>
                            <option value="Moba">Moba</option>
                            <option value="Puzzle">Puzzle</option>
                        </select>
                    </div><br>
                    <div class="form-group mb-0">
                        <label for="ukuran">Ukuran</label><br>
                        <input type="text" name="ukuran" id="ukuran" class="form-control" placeholder="Ukuran Game" required="" oninvalid="this.setCustomValidity('Ukuran Game')" oninput="this.setCustomValidity('')">
                    </div><br>
                    <div class="form-group mb-0">
                        <label for="tahun">Tahun</label><br>
                        <select name="tahun" id="tahun" class="form-control" required="" oninvalid="this.setCustomValidity('Pilih Tahun')" oninput="this.setCustomValidity('')">
                            <option value="">-Pilih Tahun-</option>
                            <option value="2000">2000</option>
                            <option value="2001">2001</option>
                            <option value="2002">2002</option>
                            <option value="2003">2003</option>
                            <option value="2004">2004</option>
                            <option value="2005">2005</option>
                            <option value="2006">2006</option>
                        </select>
                    </div><br>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="submit" name="tambah" class="btn btn-primary">Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>


<!-- Modal Edit -->
<div class="modal fade" id="modalEdit">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Edit Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('game/edit'); ?>" method="POST">
                    <input type="hidden" name="id" id="id-game">
                    <div class="form-group mb-0">
                        <label for="nama">Nama</label><br>
                        <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan Nama" required="" oninvalid="this.setCustomValidity('Masukkan Nama')" oninput="this.setCustomValidity('')" value="<?= $row['nama'] ?>">
                    </div><br>
                    <div class="form-group mb-0">
                        <label for="genre">Genre</label><br>
                        <select name="genre" id="genre" class="form-control" required="" oninvalid="this.setCustomValidity('Pilih Genre')" oninput="this.setCustomValidity('')">
                            <option value="">-Pilih Genre-</option>
                            <option value="Actions">Actions</option>
                            <option value="Moba">Moba</option>
                            <option value="Puzzle">Puzzle</option>
                        </select>
                    </div><br>
                    <div class="form-group mb-0">
                        <label for="ukuran">Ukuran</label><br>
                        <input type="text" name="ukuran" id="ukuran" class="form-control" placeholder="Ukuran Game" required="" oninvalid="this.setCustomValidity('Ukuran Game')" oninput="this.setCustomValidity('')">
                    </div><br>
                    <div class="form-group mb-0">
                        <label for="tahun">Tahun</label><br>
                        <select name="tahun" id="tahun" class="form-control" required="" oninvalid="this.setCustomValidity('Pilih Tahun')" oninput="this.setCustomValidity('')">
                            <option value="">-Pilih Tahun-</option>
                            <option value="2000">2000</option>
                            <option value="2001">2001</option>
                            <option value="2002">2002</option>
                            <option value="2003">2003</option>
                            <option value="2004">2004</option>
                            <option value="2005">2005</option>
                            <option value="2006">2006</option>
                        </select>
                    </div><br>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="submit" name="edit" class="btn btn-primary">Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>



<!-- Modal Hapus  -->
<div class="modal fade" id="modalHapus">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="/game/hapus" method="post">
                <div class="modal-body">
                    Apakah anda yakin ingin menghapus data ini?
                    <input type="hidden" id="id" name="id">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Yakin</button>
                </div>
            </form>
        </div>
    </div>
</div>