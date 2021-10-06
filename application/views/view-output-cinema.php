<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cinema 99</title>
</head>
<body>
    <h1 style="text-align: center;">Pemesanan Tiket Cinema 99</h1>

    <center>
        <form action="<?= base_url('cinema/proses_tambah')?>" method="POST">
            <table>
                <tr>
                    <td>Nama Pemesan</td>
                    <td>:</td>
                    <td>
                        <?= $nama_pemesanan;?>
                    </td>
                </tr>
                <tr>
                    <td>Judul Film</td>
                    <td>:</td>
                    <td>
                        <?= $judul_film; ?>
                    </td>
                </tr>
                <tr>
                    <td>Pukul</td>
                    <td>:</td>
                    <td>
                        <?= $pukul; ?>
                    </td>
                </tr>
                <tr>
                    <td>Tipe Studio</td>
                    <td>:</td>
                    <td>
                        <?= $tipe_studio; ?>
                    </td>
                </tr>
                <tr>
                    <td>Jumlah Pesan</td>
                    <td>:</td>
                    <td>
                        <?= $jumlah_pesanan; ?>
                    </td>
                </tr>
                <tr>
                    <td>Harga Tiket</td>
                    <td>:</td>
                    <td><?= $harga_tiket; ?></td>
                </tr>
                <tr>
                    <td>
                        Total
                    </td>
                    <td>:</td>
                    <td><?= $total; ?></td>
                </tr>
                <tr>
                    <td style="text-align: center;">
                    <a href="<?= base_url('cinema');?>">Input Data Lagi</a>
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>