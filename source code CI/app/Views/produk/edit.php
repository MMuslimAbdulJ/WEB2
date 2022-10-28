<?= $this->extend('layout/template'); ?>

<?= $this->section('isi'); ?>
<h2 class="my-3">Form Ubah Data</h2>
<form action="/produk/update/<?= $p['id']; ?>" method="POST">
    <?= csrf_field(); ?>
    <div class="form-group row">
        <label for="nama_produk" class="col-sm-2 col-form-label">Nama Produk</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="namaproduk" name="namaproduk" value="<?= $p['nama_produk']; ?>" autofocus>
        </div>
    </div>
    <div class="form-group row">
        <label for="qty" class="col-sm-2 col-form-label">Kuantiti</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="qty" name="qty" value="<?= $p['qty']; ?>">
        </div>
    </div>
    <div class="form-group row">
        <label for="price" class="col-sm-2 col-form-label">Harga</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="price" name="harga" value="<?= $p['price']; ?>">
        </div>
    </div>
    <div class="form-group row">
        <label for="foto_produk" class="col-sm-2 col-form-label">Foto Produk</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="price" name="foto_produk" value="<?= $p['foto_produk']; ?>">
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">Ubah Data</button>
        </div>
    </div>
</form>
<?= $this->endSection(); ?>