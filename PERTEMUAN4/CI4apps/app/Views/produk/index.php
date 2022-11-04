<?= $this->extend('layout/template'); ?>

<?= $this->section('isi'); ?>
<table class="table">
    <thead>
        <tr>
            <th scope="col">Nama Produk</th>
            <th scope="col">Id Produk</th>
            <th scope="col">Stock</th>
            <th scope="col">Price</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($produk as $p) : ?>
            <tr>
                <th scope="row">1</th>
                <td><img src="/img/<?= $p['foto_produk'] ?>" class="foto_produk" alt=""></td>
                <td><?= $p['price'] ?></td>
                <td><a href="" class="btn btn-success">Details</a></td>
            </tr>
        <?php endforeach; ?>
    </tbody>

</table>
<?= $this->endSection(); ?>