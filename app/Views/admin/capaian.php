<?= $this->include('partials/header') ?>
<?= $this->include('partials/sidebar') ?>
<?= $this->include('partials/navbar') ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tabel Capaian Kinerja</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Capaian Kinerja
                <span>
                    <a href="" class="btn btn-primary btn-sm float-right">
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
                            <th>Unit</th>
                            <th>Bidang</th>
                            <th>Indikator</th>
                            <th>Tahun</th>
                            <th>Target</th>
                            <th>Capaian</th>
                            <th>Link</th>
                            <th>Status</th>
                            <th>Hambatan</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Unit</th>
                            <th>Bidang</th>
                            <th>Indikator</th>
                            <th>Tahun</th>
                            <th>Target</th>
                            <th>Capaian</th>
                            <th>Link</th>
                            <th>Status</th>
                            <th>Hambatan</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <?php
                    $no = 1;
                    // dd($indikator);
                    foreach ($capaian as $data) { ?>
                    <tbody>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td></td>
                            <td><?php echo $data->nama; ?></td>
                            <td><?php echo $data->bentuk; ?></td>
                            <td><?php echo $data->tahun; ?></td>
                            <td><?php echo $data->target; ?></td>
                            <td><?php echo $data->capaian; ?></td>
                            <td><?php echo $data->link; ?></td>
                            <td><?php echo $data->status; ?></td>
                            <td><?php echo $data->hambatan; ?></td>
                            <td>
                                <a href="" type="button" class="btn btn-primary">Detail</a>
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