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