<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Produk</title>
    <link rel="stylesheet" href="layout/css/style.css"> </head>

<body>
    <div class="wrap">
        <div class="header">
            <h1>ECOMM API</h1> </div>
        <div class="menu">
            <ul>
                <li><a href="">Home</a></li>
            </ul>
        </div>
        <div class="badan">
            <div class="sidebar">
                <ul>
                    <li><a href="../index.php">List Transaksi</a></li>
                    <li><a href="#">About</a></li>
                </ul>
            </div>
            <div class="content">
                <p>Tambah Transaksi</p> <a href="../index.php">Kembali</a>
                <div id="stylish" class="myform">
                    <h1>Tambah Transaksi</h1>
                    <form action="../api/api_tambah.php" method="post" id="form">
                        <div class="form-group">
                            <label for="">Nama Pelanggan</label>
                            <select name="customer_name[]" aria-describedby="helpId">
                                <option value="Ucok">Ucok</option>
                                <option value="Butet">Butet</option>
                                <option value="Jownad">Jownad</option>
                                <option value="Coki">Coki</option>
                                <option value="Muslim">Muslim</option>
                            </select> </div>
                        <div class="form-group">
                            <label for="">Produk</label>
                            <select name="product_name[]" aria-describedby="helpId">
                                <option value="Rokok">Rokok</option>
                                <option value="Kerupuk">Kerupuk</option>
                                <option value="Telor">Telor</option>
                            </select> </div>
                        <div class="form-group">
                            <label for="">Metode Pembayaran</label>
                            <select name="payment_name[]" aria-describedby="helpId">
                                <option value="Transfer Bank">Transfer Bank</option>
                                <option value="Gopay">Gopay</option>
                                <option value="COD">COD</option>
                            </select> </div>
                        <div class="form-group">
                            <button type="submit">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="clear"></div>
        <div class="footer">
            <p> Another Institute</p>
        </div>
    </div>
</body>

</html>