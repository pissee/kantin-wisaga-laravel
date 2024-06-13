<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kantin Wisaga</title>
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
</head>
<body>
  <h1>Keranjang Belanja</h1>
  <div id="cart-items"></div>

  <script>
    // Ambil data dari localStorage
    let cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];

    // Menampilkan item di keranjang
    const cartItemsContainer = document.getElementById('cart-items');
    if (cartItems.length > 0) {
      cartItems.forEach(item => {
        const itemDiv = document.createElement('div');
        itemDiv.innerHTML = `id_makanan: ${item.id_makanan}, Kuantitas: ${item.quantity}`;
        cartItemsContainer.appendChild(itemDiv);
      });
    } else {
      cartItemsContainer.innerHTML = 'Keranjang kosong.';
    }
  </script>
</body>
</html>