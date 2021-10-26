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
        <h1>Program Diskon</h1>
        <form method="POST" action="aksi_diskon.php">
            <div class="form-group row">
                <label for="inputText3" class="col-sm-2 col-form-label">Nama Barang</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputText3" placeholder="Nama Barang" name="namabrg">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputNumber3" class="col-sm-2 col-form-label">Harga Barang</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="inputNumber3" placeholder="Harga Barang" name="hargabrg">
                </div>
            </div>
            <fieldset class="form-group">
                <div class="row">
                    <legend class="col-form-label col-sm-2 pt-0">Status Member</legend>
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="gridRadios1" name="status" value="Member Toko" checked>
                            <label class="form-check-label" for="gridRadios1">
                                Member Toko
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="gridRadios2" name="status" value="Pelanggan Biasa">
                            <label class="form-check-label" for="gridRadios2">
                                Pelanggan Biasa
                            </label>
                        </div>

                    </div>
                </div>
            </fieldset>
            <div class="form-group row">
                <div class="col-sm-2">Jenis Pembayaran</div>
                <div class="col-sm-10">
                    <select class="form-select" aria-label="Default select example" name="metode_bayar">
                        <option selected>Pilih Metode</option>
                        <option value="Tunai">Tunai</option>
                        <option value="Kredit">Kredit</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Hitung Diskon</button>
                </div>
            </div>
        </form>

    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>