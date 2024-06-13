<!DOCTYPE html>
<html>
<head>
    <title>Checkout</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            width: 80%;
            margin: 40px auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .table {
            width: 100%;
            border-collapse: collapse;
        }
        .table th, .table td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }
        .button {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .button:hover {
            background-color: #3e8e41;
        }
    </style>
</head>
<body>
<form action="{{ route('proses.checkout') }}" method="POST">
    @csrf
    <div class="container">
        <h2>Checkout</h2>
        <table class="table">
            <tr>
                <th>Nama Makanan</th>
                <th>Jumlah Beli</th>
                <th>Harga</th>
                <th>Total</th>
            </tr>
            <tr>
    <td><?php echo isset($_GET['nama_makanan']) ? $_GET['nama_makanan'] : ''; ?></td>
    <td><?php echo isset($_GET['quantity']) ? $_GET['quantity'] : '1'; ?></td>
    <td>Rp. <?php echo isset($_GET['harga']) ? number_format($_GET['harga'], 0, ',', '.') : ''; ?></td>
    <td>Rp. <?php echo isset($_GET['harga']) && isset($_GET['quantity']) ? number_format($_GET['harga'] * $_GET['quantity'], 0, ',', '.') : ''; ?></td>
</tr>
<tr>
    <td colspan="3">Total:</td>
    <td>Rp. <?php echo isset($_GET['harga']) && isset($_GET['quantity']) ? number_format($_GET['harga'] * $_GET['quantity'], 0, ',', '.') : ''; ?></td>
</tr>
        </table>
        <button type="submit">Checkout</button>
    </div>
    </form>
</body>
</html>
