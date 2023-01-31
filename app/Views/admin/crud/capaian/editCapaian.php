<?= $this->include('partials/header') ?>
<?= $this->include('partials/sidebar') ?>
<?= $this->include('partials/navbar') ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tambah Indikator</h1>
    <!-- DataTales Example -->
    <div class="card shadow md-2">
        <div class="card-body">
            <form action="<?= base_url('admin/edit-indikator/' . $indikator->id); ?>" method="POST"
                class="form-horizontal">
                <?= csrf_field() ?>
                <div class="mb-3 row">
                    <label for="bidang" class="col-sm-2 col-form-label">Unit Kerja</label>
                    <div class="col-sm-10">
                        <select class="form-control form-control-lg" name="idBidang" id="idBidang">
                            <option></option>
                            <option name="idBidang" value=""></option>
                        </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="bidang" class="col-sm-2 col-form-label">Bidang</label>
                    <div class="col-sm-10">
                        <select class="form-control form-control-lg" name="idBidang" id="idBidang">
                            <option></option>
                            <option name="idBidang" value=""></option>
                        </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="deskripsi" class="col-sm-2 col-form-label">Indikator</label>
                    <div class="col-sm-10">
                        <select class="form-control form-control-lg" name="indikator" id="indikator">
                            <option>Pilih Indikator</option>
                            <option name="idBidang" value=""></option>
                        </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="bentuk" class="col-sm-2 col-form-label">Bentuk</label>
                    <div class="col-sm-10">
                        <select class="form-control form-control-lg" name="bentuk" id="bentuk">
                            <option><?= $indikator->bentuk; ?></option>
                            <option value="angka">Angka</option>
                            <option value="opsi">Opsi</option>
                        </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="satuan" class="col-sm-2 col-form-label">Satuan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-lg" id="username" name="satuan"
                            value="<?= $indikator->satuan; ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="jenis" class="col-sm-2 col-form-label">Jenis</label>
                    <div class="col-sm-10">
                        <select class="form-control form-control-lg" name="jenis" id="jenis">
                            <option><?= $indikator->jenis; ?></option>
                            <option>IKU</option>
                            <option>IKT</option>
                            <option>IKK</option>
                            <option>Lainnya</option>
                        </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="kodePerkin" class="col-sm-2 col-form-label">Kode Perkin</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-lg" id="kode_perkin" name="kode_perkin"
                            value="<?= $indikator->kode_perkin; ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="kodeKonkin" class="col-sm-2 col-form-label">Kode Konkin</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-lg" id="kode_konkin" name="kode_ponkin"
                            value="<?= $indikator->kode_konkin; ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary mb-3" value="Simpan">
                        <a href="<?= base_url('admin/indikator'); ?>" class="btn btn-success mb-3">Kembali</a>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
<?= $this->include('partials/footer') ?>