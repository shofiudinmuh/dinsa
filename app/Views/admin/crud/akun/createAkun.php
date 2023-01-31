<?= $this->include('partials/header') ?>
<?= $this->include('partials/sidebar') ?>
<?= $this->include('partials/navbar') ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tambah Bidang</h1>
    <!-- DataTales Example -->
    <div class="card shadow md-2">
        <div class="card-body">
            <form action="<?= base_url('admin/add-bidang'); ?>" method="POST" class="form-horizontal">
                <?= csrf_field() ?>
                <div class="mb-3 row">
                    <label for="bidang" class="col-sm-2 col-form-label">Kode Unit</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-lg" id="kode_unit" name="kode_unit"
                            required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="bidang" class="col-sm-2 col-form-label">Nama Unit</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-lg" id="nama_unit" name="nama_unit"
                            required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="bidang" class="col-sm-2 col-form-label">Nama Singkat</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-lg" id="nama_singkat" name="nama_singkat"
                            required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="bidang" class="col-sm-2 col-form-label">Jenis Unit</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-lg" id="nama" name="jenis_unit" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="bidang" class="col-sm-2 col-form-label">Program Pendidiakn</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-lg" id="nama" name="program_pendidikan"
                            required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="bidang" class="col-sm-2 col-form-label">No SK DIKTI</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-lg" id="nama" name="no_sk_dikti" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="bidang" class="col-sm-2 col-form-label">TGL SK DIKTI</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control form-control-lg" id="nama" name="tgl_sk_dikti" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="bidang" class="col-sm-2 col-form-label">Tgl Akhir SK</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control form-control-lg" id="nama" name="tgl_akhir_sk" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="bidang" class="col-sm-2 col-form-label">Tgl Berdiri</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-lg" id="nama" name="tgl_berdiri" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="bidang" class="col-sm-2 col-form-label">NO SK BANPTS</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-lg" id="nama" name="no_sk_ban_pts" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="bidang" class="col-sm-2 col-form-label">Nama Bidang</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-lg" id="nama" name="nama" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="bidang" class="col-sm-2 col-form-label">Nama Bidang</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-lg" id="nama" name="nama" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="bidang" class="col-sm-2 col-form-label">Nama Bidang</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-lg" id="nama" name="nama" required>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary mb-3" value="Simpan">
                        <a href="<?= 'bidang' ?>" class="btn btn-success mb-3">Kembali</a>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
<?= $this->include('partials/footer') ?>