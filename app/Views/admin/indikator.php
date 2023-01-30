<?= $this->include('partials/header') ?>
<?= $this->include('partials/sidebar') ?>
<?= $this->include('partials/navbar') ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tabel Indikator</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Indikator Target
                <span>
                    <a href="<?= 'add-indikator' ?>" class="btn btn-primary btn-sm float-right">
                        Tambah
                    </a>
                </span>
            </h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Bentuk</th>
                            <th>Deskripsi</th>
                            <th>Satuan</th>
                            <th>Jenis</th>
                            <th>Kode Perkin</th>
                            <th>Kode Konkin</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Bentuk</th>
                            <th>Deskripsi</th>
                            <th>Satuan</th>
                            <th>Jenis</th>
                            <th>Kode Perkin</th>
                            <th>Kode Konkin</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <?php
                    $no = 1;
                    foreach ($indikator as $data) { ?>
                    <tbody>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $data->bentuk; ?></td>
                            <td><?php echo $data->deskripsi; ?></td>
                            <td><?php echo $data->satuan; ?></td>
                            <td><?php echo $data->jenis; ?></td>
                            <td><?php echo $data->kode_perkin; ?></td>
                            <td><?php echo $data->kode_konkin; ?></td>
                            <td>
                                <a href="<?= 'edit-indikator' ?>" type="button" class="btn btn-success">Update</a>
                                <a href="" type="button" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    </tbody>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
<?= $this->include('partials/footer') ?>