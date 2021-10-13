<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $judul ?></h1>

    <div class="card">
        <div class="card-header">
            <button class="btn btn-primary"><i class="fa fa-plus">&nbsp;</i>Tambah Data</button>
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