<?= $this->extend('layout/template'); ?>

<?= $this->section('isi'); ?>
<h1>Daftar Produk</h1>
<?php if (session()->getFlashdata('pesan')) : ?>
    <div class="alert alert-success" role="alert">
        <?= session()->getFlashdata('pesan'); ?>
    </div>
<?php endif; ?>
<a href="/produk/create" class="btn btn-primary mb-3">Insert Data</a>
<table class="table">
    <thead>
        <tr>
            <th scope="col">Id Produk</th>
            <th scope="col">Nama Produk</th>
            <th scope="col">Foto Produk</th>
            <th scope="col">Stock</th>
            <th scope="col">Price</th>
            <th scope="col">Modify</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($produk as $p) : ?>
            <tr>
                <th scope="row"><?= $p['id']; ?></th>
                <th scope="row"><?= $p['nama_produk']; ?></th>
                <td><img src="/img/<?= $p['foto_produk'] ?>" class="foto_produk" alt=""></td>
                <td><?= $p['qty']; ?></td>
                <td><?= $p['harga']; ?></td>

                <td><a href="/produk/edit/<?= $p['id']; ?>" class="btn btn-warning">Edit</a>
                    <a href="/produk/delete/<?= $p['id']; ?>" class="btn btn-danger" onclick="return confirm('Hapus Data ?');">Hapus</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>

</table>
<?= $this->endSection(); ?>