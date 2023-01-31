<?= $this->include('partials/header') ?>
<?= $this->include('partials/sidebar') ?>
<?= $this->include('partials/navbar') ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tabel Bidang</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="col">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data
                    <span>
                        <a href="<?= base_url('admin/add-bidang') ?>" class="btn btn-primary btn-sm float-right">
                            Tambah
                        </a>
                    </span>
                </h6>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>ID Bidang</th>
                            <th>Nama Bidang</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <?php
                    $no = 1;
                    foreach ($bidang as $data) {
                    ?>
                    <tbody>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $data->id; ?></td>
                            <td><?php echo $data->nama; ?></td>
                            <td>
                                <form action="<?= base_url('admin/bidang/delete/' . $data->id) ?>" method="POST">
                                    <?= csrf_field() ?>
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col"></div>
                                            <a href="<?= base_url('bidang/edit/' . $data->id) ?>" type="button"
                                                class="btn btn-success">Update</a>
                                            <input type="submit" class="btn btn-danger" value="Delete"></input>
                                        </div>
                                    </div>
                                </form>
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