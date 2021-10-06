<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cinema 99</title>
    <style>
        h1 {
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Pemesanan Tiket Cinema 99</h1>

    <center>
        <form action="<?= base_url('cinema/proses_tambah');?>" method="POST">
            <table>
                <tr>
                    <td>Nama Pemesan</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="nama_pemesan">
                    </td>
                </tr>
                <tr>
                    <td>Judul Film</td>
                    <td>:</td>
                    <td>
                        <select name="judul_film">
                            <option value="Parasite">Parasite</option>
                            <option value="Hereditary">Hereditary</option>
                            <option value="The Closet">The Closet</option>
                            <option value="Kamen Rider Reiwa">Kamen Rider Reiwa</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Pukul</td>
                    <td>:</td>
                    <td>
                        <input type="radio" name="pukul" value="14.20"> 14.20
                        <input type="radio" name="pukul" value="15.40"> 15.40
                        <input type="radio" name="pukul" value="16.40"> 16.40
                    </td>
                </tr>
                <tr>
                    <td>Tipe Studio</td>
                    <td>:</td>
                    <td>
                        <input type="radio" name="tipe_studio" value="Reguler 2D">Reguler 2D
                        <input type="radio" name="tipe_studio" value="3D">3D
                        <input type="radio" name="tipe_studio" value="Velvet">Velvet
                    </td>
                </tr>
                <tr>
                    <td>Jumlah Pesan</td>
                    <td>:</td>
                    <td>
                        <input type="number" name="jumlah_pesanan" size="3">
                    </td>
                </tr>
                <tr>
                    <td id="center">
                        <input type="submit" value="Hitung"> <input type="reset" value="Batal">
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>