<?php
$namabarang = $_POST['namabrg'];
$hargabarang = $_POST['hargabrg'];
$statusmember = $_POST['status'];
$metode = $_POST['metode_bayar'];

$hasil = $hargabarang;
$total_pemotongan_harga = 0;

$diskon_persen = 0;
if ($metode == "Tunai") {
    if ($hargabarang >= 500000) {
        $diskon_persen += 30;
        if ($statusmember == "Member Toko") $diskon_persen += 10;
    }
}

$total_pemotongan_harga = $hargabarang * ($diskon_persen / 100);
$hasil = $hargabarang - $total_pemotongan_harga;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tommy Ryan Dwiputra</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-3">
        <h1>Hasil</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Barang</th>
                    <th scope="col">Status</th>
                    <th scope="col">Metode Pembayaran</th>
                    <th scope="col">Harga Barang</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td><?php echo $namabarang ?></td>
                    <td><?php echo $statusmember ?></td>
                    <td><?php echo $metode ?></td>
                    <td><?php echo $hargabarang ?></td>
                </tr>
                <tr>
                    <td colspan="4" style="text-align: right;">Total Diskon</td>
                    <td><?php echo "$diskon_persen  %" ?></td>
                </tr>
                <tr>
                    <td colspan="4" style="text-align: right;">Total Pemotongan Harga</td>
                    <td><?php echo $total_pemotongan_harga ?></td>
                </tr>

                <tr>
                    <td colspan="4" style="text-align: right;">Total Bayar</td>
                    <td><?php echo $hasil ?></td>
                </tr>
            </tbody>
        </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>