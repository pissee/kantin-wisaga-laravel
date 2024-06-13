document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('cart-icon').addEventListener('click', function(event) {
        event.preventDefault();

        const quantity = document.getElementById('product-quantity').value;

        // Kirim data ke server menggunakan AJAX
        fetch('/api/cart', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
            body: JSON.stringify({ productId: 1, quantity: quantity }) // Gantilah dengan ID produk yang benar
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                // Redirect ke halaman login jika berhasil
                window.location.href = '/login';
            } else {
                alert('Gagal menambahkan ke keranjang. Coba lagi.');
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('Terjadi kesalahan. Coba lagi.');
        });
    });
});
