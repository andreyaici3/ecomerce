<div class="box">
    <!-- /.box-header -->
    <div class="box-body">
    <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Produk</th>
                <th>Kategori</th>
                <th>Jenis Barang</th>
                <th>Stok</th>
                <th>Harga</th>
                <th>Berat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i=1; foreach($produk as $key) { ?>
            <tr>
                <td><?= $i++ ?></td>
                <td><?= $key->name ?></td>
                <td><?= $key->nama_kategori ?></td>
                <td><?= $key->jenis_barang ?></td>
                <td><?= $key->stock ?></td>
                <td><?= 'Rp. ' . number_format($key->price) ?></td>
                <td>0. Kg</td>
                <td><a href="" class="btn btn-danger btn-xs">Hapus</a> | <a href="" class="btn btn-primary btn-xs">Edit</a></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    </div>
</div>
<a href="<?= base_url('dashboard/produk/add') ?>" class="btn btn-primary btn-md"><i class="fa fa-plus"></i> TAMBAH PRODUK</a>