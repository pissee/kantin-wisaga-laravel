
<div class="container">
    <h1>Create Product</h1>
    
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <button><a href="{{ route('halamanadmin') }}" class="btn btn-secondary">Kembali</a></button>
    
    <form action="{{ route('createproduct') }}" method="POST">
    
        @csrf <!-- Laravel CSRF protection -->
        
        <div class="form-group">
            <label for="nama_makanan">Produk:</label>
            <input type="text" class="form-control" id="nama_makanan" name="nama_makanan" value="{{ old('nama_makanan') }}">
        </div>
        
        <div class="form-group">
            <label for="stok">Product stok:</label>
            <textarea class="form-control" id="stok" name="stok">{{ old('stok') }}</textarea>
        </div>
        
        <div class="for-group">
            <label for="harga">Product harga:</label>
            <input type="text" class="form-control" id="harga" name="harga" value="{{ old('harga') }}">
        </div>

        <div class="for-group">
            <label for="jenis_makanan">Product jenis_makanan:</label>
            <input type="text" class="form-control" id="jenis_makanan" name="jenis_makanan" value="{{ old('jenis_makanan') }}">
        </div>
        
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>


<style>
    /* Container styling */
.container {
    max-width: 600px;
    margin: 0 auto;
    padding: 20px;
    background-color: #f9f9f9;
    border: 1px solid #ddd;
    border-radius: 4px;
}

/* Heading styling */
h1 {
    text-align: center;
    color: #333;
}

/* Error message styling */
.alert.alert-danger {
    color: #a94442;
    background-color: #f2dede;
    border-color: #ebccd1;
    padding: 10px;
    border-radius: 4px;
    margin-bottom: 20px;
}

.alert.alert-danger ul {
    list-style: none;
    padding: 0;
}

.alert.alert-danger li {
    margin: 5px 0;
}

/* Form styling */
form {
    margin-top: 20px;
}

.form-group {
    margin-bottom: 20px;
}

.form-group label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
}

.form-control {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
}

.form-control:focus {
    border-color: #66afe9;
    outline: none;
    box-shadow: 0 0 8px rgba(102, 175, 233, 0.6);
}

textarea.form-control {
    height: 100px;
    resize: vertical;
}

/* Button styling */
.btn.btn-primary {
    display: inline-block;
    padding: 10px 20px;
    font-size: 16px;
    font-weight: bold;
    color: #fff;
    background-color: #007bff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    text-align: center;
}

.btn.btn-primary:hover {
    background-color: #0056b3;
}

/* Adjustments for smaller screens */
@media (max-width: 768px) {
    .container {
        padding: 10px;
    }

    .form-control {
        font-size: 14px;
        padding: 8px;
    }

    .btn.btn-primary {
        font-size: 14px;
        padding: 8px 16px;
    }
}

</style>