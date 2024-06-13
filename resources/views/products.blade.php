<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Kantin Wisaga</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!--

TemplateMo 546 Sixteen Clothing

https://templatemo.com/tm-546-sixteen-clothing

-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="assets/css/owl.css">

  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="home"><h2>Kantin <em>Wisaga</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="dashboard">Beranda
                  <span class="sr-only">(current)</span>
                </a>
              </li> 
              <li class="nav-item active">
                <a class="nav-link" href="products.html">Produk</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.html">Tentang</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="home">Pemberitahuan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="keranjang">Keranjang</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <div class="page-heading products-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>Kantin Sehat</h4>
              <h2>SMK Wikrama 1 Garut</h2>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    <div class="products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="filters">
              <ul>
                  <li class="active" data-filter="*">Semua Produk</li>
                  <li data-filter=".des">Jajanan</li>
                  <li data-filter=".dev">Minuman</li>
                  <li data-filter=".gra">Makanan</li>
              </ul>
            </div>
          </div>
          <div class="col-md-12">
    <div class="filters-content">
        <div class="row grid">
            <div class="col-lg-4 col-md-4 all des">
                <div class="product-item">
                    <a href="product1.html"><img src="assets/images/product_01.jpg" alt=""></a>
                    <div class="down-content">
                        <a href="product1.html"><h4>Srikayaroti</h4></a>
                        <h6>Rp.2000</h6>
                        <p>........</p>
                        <ul class="stars">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                        </ul>
                        <form id="buyForm" action="checkout" method="GET">
        <input type="hidden" name="nama_makanan" value="Srikayaroti">
        <input type="hidden" name="harga" value="2000">
        <input type="number" id="quantity" name="quantity" value="1" min="1">
        <button type="submit" onclick="updateForm(event)">Beli</button>
    </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 all dev">
                <div class="product-item">
                    <a href="product2.html"><img src="assets/images/product_02.jpeg" alt=""></a>
                    <div class="down-content">
                        <a href="product2.html"><h4>Salad Jelly</h4></a>
                        <h6>Rp.10.000</h6>
                        <p>............</p>
                        <ul class="stars">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                        </ul>
                        <form id="buyForm" action="checkout" method="GET">
        <input type="hidden" name="nama_makanan" value="Salad Jelly">
        <input type="hidden" name="harga" value="10000">
        <input type="number" id="quantity" name="quantity" value="1" min="1">
        <button type="submit" onclick="updateForm(event)">Beli</button>
    </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 all gra">
                <div class="product-item">
                    <a href="product3.html"><img src="assets/images/product_03.jpg" alt=""></a>
                    <div class="down-content">
                        <a href="product3.html"><h4>Nasi Ayam</h4></a>
                        <h6>Rp.10.000</h6>
                        <p>.............</p>
                        <ul class="stars">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                        </ul>
                        <form id="buyForm" action="checkout" method="GET">
        <input type="hidden" name="nama_makanan" value="Nasi Ayam">
        <input type="hidden" name="harga" value="10000">
        <input type="number" id="quantity" name="quantity" value="1" min="1">
        <button type="submit" onclick="updateForm(event)">Beli</button>
    </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 all gra">
                <div class="product-item">
                    <a href="product4.html"><img src="assets/images/product_04.jpg" alt=""></a>
                    <div class="down-content">
                        <a href="product4.html"><h4>Nasi Tahu</h4></a>
                        <h6>Rp.5000</h6>
                        <p>.............</p>
                        <ul class="stars">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                        </ul><form id="buyForm" action="checkout" method="GET">
        <input type="hidden" name="nama_makanan" value="Nasi Tahu">
        <input type="hidden" name="harga" value="5000">
        <input type="number" id="quantity" name="quantity" value="1" min="1">
        <button type="submit" onclick="updateForm(event)">Beli</button>
    </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 all dev">
                <div class="product-item">
                    <a href="product5.html"><img src="assets/images/product_05.jpg" alt=""></a>
                    <div class="down-content">
                        <a href="product5.html"><h4>Jus</h4></a>
                        <h6>Rp.5000</h6>
                        <p>.........</p>
                        <ul class="stars">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                        </ul>
                        <form id="buyForm" action="checkout" method="GET">
        <input type="hidden" name="nama_makanan" value="Jus">
        <input type="hidden" name="harga" value="5000">
        <input type="number" id="quantity" name="quantity" value="1" min="1">
        <button type="submit" onclick="updateForm(event)">Beli</button>
    </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 all des">
                <div class="product-item">
                    <a href="product6.html"><img src="assets/images/product_06.jpeg" alt=""></a>
                    <div class="down-content">
                        <a href="product6.html"><h4>Brownies</h4></a>
                        <h6>Rp.2500</h6>
                        <p>.......</p>
                        <ul class="stars">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                        </ul>
                        <form id="buyForm" action="checkout" method="GET">
        <input type="hidden" name="nama_makanan" value="Brownies">
        <input type="hidden" name="harga" value="2500">
        <input type="number" id="quantity" name="quantity" value="1" min="1">
        <button type="submit" onclick="updateForm(event)">Beli</button>
    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <p>Copyright &copy; 2024 Kantin Wisaga.</p>
            </div>
          </div>
        </div>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/accordions.js"></script>


    <script> 
      function buyProduct(productName, productPrice) {
        alert(`Kamu telah membeli ${productName} harga Rp.${productPrice}`);
      }
    </script>

    <style>
      /* Style for the "Tambahkan ke Keranjang" button */
.tambah-keranjang {
    background-color: #4CAF50; /* Warna latar belakang */
    color: white; /* Warna teks */
    padding: 8px 15px; /* Padding di sekitar teks */
    border: none; /* Tanpa border */
    border-radius: 3px; /* Border radius untuk sudut yang melengkung */
    cursor: pointer; /* Mengubah kursor menjadi pointer saat diarahkan */
    font-size: 12px; /* Ukuran teks */
}

/* Hover effect */
.tambah-keranjang:hover {
    background-color: #45a049; /* Warna latar belakang saat dihover */
}

/* Style for product quantity input */
.product-quantity {
    width: 50px;
    padding: 5px;
    margin-right: 10px;
    border: 1px solid #ccc;
    border-radius: 3px;
    font-size: 12px;
}
    </style>


  </body>

</html>
