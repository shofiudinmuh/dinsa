<?= $this->include('partials/header') ?>
<?= $this->include('partials/sidebar') ?>
<?= $this->include('partials/navbar') ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Edit Indikator</h1>
    <!-- DataTales Example -->
    <div class="card shadow md-2">
        <div class="card-body">
            <form action="/tambah-indikator" method="POST" class="form-horizontal">
                <div class="mb-3 row">
                    <label for="bidang" class="col-sm-2 col-form-label">Bidang</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-lg" id="bidang" name="bidang" value="">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-lg" id="deskripsi" name="deskripsi"
                            value="">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="bentuk" class="col-sm-2 col-form-label">Bentuk</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-lg" id=" bentuk" name="bentuk" value="">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="satuan" class="col-sm-2 col-form-label">Satuan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-lg" id="username" name="satuan" value="">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="jenis" class="col-sm-2 col-form-label">Jenis</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-lg" id="jenis" name="jenis" value="">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="kodePerkin" class="col-sm-2 col-form-label">Kode Perkin</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-lg" id="kodePerkin" name="kodePerkin"
                            value="">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="kodeKonkin" class="col-sm-2 col-form-label">Kode Konkin</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-lg" id="kodeKonkin" name="kodeKonkin"
                            value="">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary mb-3" value="Simpan">
                        <a href="<?= 'indikator' ?>" class="btn btn-success mb-3">Kembali</a>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
<?= $this->include('partials/footer') ?>