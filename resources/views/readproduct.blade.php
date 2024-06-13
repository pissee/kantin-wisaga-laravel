<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <h1>Product List</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <a href="{{ route('halamanadmin') }}" class="btn btn-secondary">Kembali</a>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Produk</th>
                <th>Stok</th>
                <th>Harga</th>
                <th>Jenis Makanan</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $product->nama_makanan }}</td>
                    <td>{{ $product->stok }}</td>
                    <td>{{ $product->harga }}</td>
                    <td>{{ $product->jenis_makanan }}</td>
                    <td>
                        <a href="{{ route('halamanreadproduct', $product->id) }}" class="btn btn-info btn-sm">View</a>
                        <a href="{{ route('editproduct', ['id' => $product->id]) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('destroyproduct', $product->id) }}" method="POST" style="margin-top: 10px;">
                         @csrf
                         @method('DELETE')
                         <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
