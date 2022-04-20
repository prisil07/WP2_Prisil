<?php
include_once(dirname(__FILE__) . '/../themes/header.php');
include_once(dirname(__FILE__) . '/../themes/sidebar.php');
?>
<div class="row">
    <div class="col-md-12">
        <div class="card border-0 shadow p-3 mb-2 rounded mb-4">
            <div class="card-header border-0 shadow p-3 mb-2 rounded mb-4">
                View Data Transaksi
            </div>
            <div class="card-body">
                <?= $berhasil; ?>
                <table class="table table-striped">
                    <tbody>
                        <tr>
                            <th>Nama Pembeli</th>
                            <td>:</td>
                            <td><?= $nama_pembeli; ?></td>
                        </tr>
                        <tr>
                            <th>Nomor HP</th>
                            <td>:</td>
                            <td><?= $no_hp; ?></td>
                        </tr>
                        <tr>
                            <th>Merk Sepatu</th>
                            <td>:</td>
                            <td><?= $merk; ?></td>
                        </tr>
                        <tr>
                            <th>Ukuran Sepatu</th>
                            <td>:</td>
                            <td><?= $ukuran; ?></td>
                        </tr>
                        <tr>
                            <th>Jumlah</th>
                            <td>:</td>
                            <td><?= $jumlah; ?></td>
                        </tr>
                        <tr>
                            <th>Harga</th>
                            <td>:</td>
                            <td><?= Rupiah($harga); ?></td>
                        </tr>
                        <tr>
                            <th>Total Harga</th>
                            <td>:</td>
                            <td><?= Rupiah($harga * $jumlah); ?></td>
                        </tr>
                    </tbody>
                </table>
                <br />
                <a href="<?= base_url('sepatu'); ?>" class="btn btn-primary">Kembali</a>
            </div>
        </div>
    </div>
</div>
<?php include_once(dirname(__FILE__) . '/../themes/footer.php'); ?>