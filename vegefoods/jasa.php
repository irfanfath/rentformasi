<?php include 'header.php'; ?>

    <div class="hero-wrap hero-bread" style="background-image: url('images/home-jasa.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home</a></span> <span>Products</span></p>
            <h1 class="mb-0 bread">Products</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section ftco-no-pt ftco-no-pb py-5 bg-light">
      <div class="container py-4">
        <div class="row d-flex justify-content-center py-5">
                    <div class="col-lg-6 product-details pl-md-5 ftco-animate">
                        <div class="hero-wrap hero-bread" style="background-image: url('images/desain.png'); margin-top: 90px;">
                        </div>
                        <!-- isi sama gambar -->
                    </div>

                    <div class="col-lg-6 product-details pl-md-5 ftco-animate">
                                <div class="row mt-4">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="country" style="color: #000">Pilih Lokasi</label>
                                            <div class="select-wrap">
                                                <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                                  <select name="" id="" class="form-control">
                                                    <option value="">Bandung</option>
                                                    <option value="">Jakarta</option>
                                                    <option value="">Surabaya</option>
                                                    <option value="">Yogyakarta</option>
                                                    <option value="">Bali</option>
                                                    <option value="">Lombok</option>
                                                  </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="country" style="color: #000">Pilih Kategori Barang</label>
                                            <div class="select-wrap">
                                                <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                                  <select name="" id="" class="form-control">
                                                    <option value="">Mobil & Motor</option>
                                                    <option value="">Alat Elektronik</option>
                                                    <option value="">Fashion</option>
                                                    <option value="">Alat Berat</option>
                                                    <option value="">Apartemen & Hotel</option>
                                                    <option value="">Hobi</option>
                                                  </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <p style="color: #000;">Tanggal Sewa</p>
                                    </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="select-wrap">
                                                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                                        <div class="input-group date">
                                                            <div class="input-group-addon">
                                                                <span class="glyphicon glyphicon-th"></span>
                                                            </div>
                                                                <input placeholder="Mulai Sewa" type="text" class="form-control datepicker" name="tgl_awal">
                                                        </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="select-wrap">
                                                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                                        <div class="input-group date">
                                                            <div class="input-group-addon">
                                                                <span class="glyphicon glyphicon-th"></span>
                                                            </div>
                                                                <input placeholder="Selesai Sewa" type="text" class="form-control datepicker" name="tgl_akhir">
                                                        </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <p style="color: #000;">Jumlah Sewa</p>
                                        </div>
                                        <div class="w-100"></div>
                                            <div class="input-group col-md-6 d-flex mb-3">
                                                <span class="input-group-btn mr-2">
                                                    <button type="button" class="quantity-left-minus btn"  data-type="minus" data-field="">
                                                    <i class="ion-ios-remove"></i>
                                                    </button>
                                                </span>
                                                    <input type="text" id="quantity" name="quantity" class="form-control input-number" value="1" min="1" max="100">
                                                <span class="input-group-btn ml-2">
                                                    <button type="button" class="quantity-right-plus btn" data-type="plus" data-field="">
                                                     <i class="ion-ios-add"></i>
                                                    </button>
                                                </span>
                                            </div>
                                        <div class="w-100"></div>  

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="country" style="color: #000">Kisaran Harga</label>
                                                <div class="select-wrap">
                                                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                                      <select name="" id="" class="form-control">
                                                        <option value="">>Rp. 100.000</option>
                                                        <option value="">Rp. 100.000 - Rp. 300.000</option>
                                                        <option value="">Rp. 300.000 - Rp. 500.000</option>
                                                        <option value="">Rp. 500.000 - Rp. 800.000</option>
                                                        <option value="">Rp. 800.000 - Rp. 1.500.000</option>
                                                        <option value="">Rp. 1.500.000 - Rp. 2.000.000</option>
                                                        <option value="">Rp. 2.000.000 - Rp. 5.000.000</option>
                                                        <option value="">Rp. 5.000.000 - Rp. 10.000.000</option>
                                                      </select>
                                                </div>
                                            </div>
                                        </div> 

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="country" style="color: #000">Urutkan Berdasarkan</label>
                                                <div class="select-wrap">
                                                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                                      <select name="" id="" class="form-control">
                                                        <option value="">Paling Sesuai</option>
                                                        <option value="">Paling Laris</option>
                                                        <option value="">Rating Terbaik</option>
                                                        <option value="">Harga Terendah</option>
                                                        <option value="">Harga Tertinggi</option>
                                                      </select>
                                                </div>
                                            </div>
                                        </div>        
                                </div>
                                <br>
                                <p><a href="hasil_pencarian.php" class="btn btn-black py-3 px-5">Cari Jasa</a></p>
                    </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
    	<div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 mb-5 text-center">
                    <ul class="nav product-category justify-content-center">
                        <li><a class="active" data-toggle="tab" href="#all">All</a></li>
                        <li><a data-toggle="tab" href="#home">Event Organizer</a></li>
                        <li><a data-toggle="tab" href="#menu1">Desainer Rumah</a></li>
                        <li><a data-toggle="tab" href="#menu2">Weeding Planner</a></li>
                        <li><a data-toggle="tab" href="#menu3">Tour Guide</a></li>
                    </ul>
                </div>
            </div>

            <br>


            <div class="container">
                    <div class="row">
                        <div class="col-lg-8 ftco-animate">
                            <div class="row">
                                <div class="tab-content">
                                    <div id="all" class="tab-pane fade show active">
                                        <div class="row">
                                            <div class="col-md-12 col-lg-4 ftco-animate">
                                            <div class="product">
                                                <a href="product-single.php" class="img-prod"><img class="img-fluid" src="images/produk-mobil.jpg" alt="Colorlib Template">
                                                    <span class="status">30%</span>
                                                    <div class="overlay"></div>
                                                </a>
                                                <div class="text py-3 pb-4 px-3 text-center">
                                                    <h3><a href="product-single.php">Avanza</a></h3>
                                                    <div class="d-flex">
                                                        <div class="pricing">
                                                            <p class="price"><span class="mr-2 price-dc">Rp. 350.000</span><span class="price-sale">Rp. 250.000</span></p>
                                                        </div>
                                                    </div>
                                                    <div class="bottom-area d-flex px-3">
                                                        <div class="m-auto d-flex">
                                                            <a href="product-single.php" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                                                <span><i class="ion-ios-cart"></i></span>
                                                            </a>
                                                            <a href="wishlist.php" class="heart d-flex justify-content-center align-items-center ">
                                                                <span><i class="ion-ios-heart"></i></span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-lg-4 ftco-animate">
                                            <div class="product">
                                                <a href="product-single.php" class="img-prod"><img class="img-fluid" src="images/produk-mobil.jpg" alt="Colorlib Template">
                                                    <span class="status">30%</span>
                                                    <div class="overlay"></div>
                                                </a>
                                                <div class="text py-3 pb-4 px-3 text-center">
                                                    <h3><a href="product-single.php">Avanza</a></h3>
                                                    <div class="d-flex">
                                                        <div class="pricing">
                                                            <p class="price"><span class="mr-2 price-dc">Rp. 350.000</span><span class="price-sale">Rp. 250.000</span></p>
                                                        </div>
                                                    </div>
                                                    <div class="bottom-area d-flex px-3">
                                                        <div class="m-auto d-flex">
                                                            <a href="product-single.php" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                                                <span><i class="ion-ios-cart"></i></span>
                                                            </a>
                                                            <a href="wishlist.php" class="heart d-flex justify-content-center align-items-center ">
                                                                <span><i class="ion-ios-heart"></i></span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-lg-4 ftco-animate">
                                            <div class="product">
                                                <a href="product-single.php" class="img-prod"><img class="img-fluid" src="images/produk-mobil.jpg" alt="Colorlib Template">
                                                    <span class="status">30%</span>
                                                    <div class="overlay"></div>
                                                </a>
                                                <div class="text py-3 pb-4 px-3 text-center">
                                                    <h3><a href="product-single.php">Avanza</a></h3>
                                                    <div class="d-flex">
                                                        <div class="pricing">
                                                            <p class="price"><span class="mr-2 price-dc">Rp. 350.000</span><span class="price-sale">Rp. 250.000</span></p>
                                                        </div>
                                                    </div>
                                                    <div class="bottom-area d-flex px-3">
                                                        <div class="m-auto d-flex">
                                                            <a href="product-single.php" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                                                <span><i class="ion-ios-cart"></i></span>
                                                            </a>
                                                            <a href="wishlist.php" class="heart d-flex justify-content-center align-items-center ">
                                                                <span><i class="ion-ios-heart"></i></span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-lg-4 ftco-animate">
                                            <div class="product">
                                                <a href="#" class="img-prod"><img class="img-fluid" src="images/ht.jpg" alt="Colorlib Template">
                                                    <span class="status">30%</span>
                                                    <div class="overlay"></div>
                                                </a>
                                                <div class="text py-3 pb-4 px-3 text-center">
                                                    <h3><a href="#">Handy Talkie</a></h3>
                                                    <div class="d-flex">
                                                        <div class="pricing">
                                                            <p class="price"><span class="mr-2 price-dc">Rp. 12.000</span><span class="price-sale">Rp. 10.000</span></p>
                                                        </div>
                                                    </div>
                                                    <div class="bottom-area d-flex px-3">
                                                        <div class="m-auto d-flex">
                                                            <a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                                                <span><i class="ion-ios-cart"></i></span>
                                                            </a>
                                                            <a href="#" class="heart d-flex justify-content-center align-items-center ">
                                                                <span><i class="ion-ios-heart"></i></span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-lg-4 ftco-animate">
                                            <div class="product">
                                                <a href="#" class="img-prod"><img class="img-fluid" src="images/ht.jpg" alt="Colorlib Template">
                                                    <span class="status">30%</span>
                                                    <div class="overlay"></div>
                                                </a>
                                                <div class="text py-3 pb-4 px-3 text-center">
                                                    <h3><a href="#">Handy Talkie</a></h3>
                                                    <div class="d-flex">
                                                        <div class="pricing">
                                                            <p class="price"><span class="mr-2 price-dc">Rp. 12.000</span><span class="price-sale">Rp. 10.000</span></p>
                                                        </div>
                                                    </div>
                                                    <div class="bottom-area d-flex px-3">
                                                        <div class="m-auto d-flex">
                                                            <a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                                                <span><i class="ion-ios-cart"></i></span>
                                                            </a>
                                                            <a href="#" class="heart d-flex justify-content-center align-items-center ">
                                                                <span><i class="ion-ios-heart"></i></span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-lg-4 ftco-animate">
                                            <div class="product">
                                                <a href="#" class="img-prod"><img class="img-fluid" src="images/ht.jpg" alt="Colorlib Template">
                                                    <span class="status">30%</span>
                                                    <div class="overlay"></div>
                                                </a>
                                                <div class="text py-3 pb-4 px-3 text-center">
                                                    <h3><a href="#">Handy Talkie</a></h3>
                                                    <div class="d-flex">
                                                        <div class="pricing">
                                                            <p class="price"><span class="mr-2 price-dc">Rp. 12.000</span><span class="price-sale">Rp. 10.000</span></p>
                                                        </div>
                                                    </div>
                                                    <div class="bottom-area d-flex px-3">
                                                        <div class="m-auto d-flex">
                                                            <a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                                                <span><i class="ion-ios-cart"></i></span>
                                                            </a>
                                                            <a href="#" class="heart d-flex justify-content-center align-items-center ">
                                                                <span><i class="ion-ios-heart"></i></span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-lg-4 ftco-animate">
                                            <div class="product">
                                                <a href="product-single.php" class="img-prod"><img class="img-fluid" src="images/alatberat.jpeg" alt="Colorlib Template">
                                                    <span class="status">30%</span>
                                                    <div class="overlay"></div>
                                                </a>
                                                <div class="text py-3 pb-4 px-3 text-center">
                                                    <h3><a href="product-single.php">Excavator</a></h3>
                                                    <div class="d-flex">
                                                        <div class="pricing">
                                                            <p class="price"><span class="mr-2 price-dc">Rp. 350.000.000</span><span class="price-sale">Rp. 250.000.000</span></p>
                                                        </div>
                                                    </div>
                                                    <div class="bottom-area d-flex px-3">
                                                        <div class="m-auto d-flex">
                                                            <a href="product-single.php" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                                                <span><i class="ion-ios-cart"></i></span>
                                                            </a>
                                                            <a href="wishlist.php" class="heart d-flex justify-content-center align-items-center ">
                                                                <span><i class="ion-ios-heart"></i></span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-lg-4 ftco-animate">
                                            <div class="product">
                                                <a href="product-single.php" class="img-prod"><img class="img-fluid" src="images/alatberat.jpeg" alt="Colorlib Template">
                                                    <span class="status">30%</span>
                                                    <div class="overlay"></div>
                                                </a>
                                                <div class="text py-3 pb-4 px-3 text-center">
                                                    <h3><a href="product-single.php">Excavator</a></h3>
                                                    <div class="d-flex">
                                                        <div class="pricing">
                                                            <p class="price"><span class="mr-2 price-dc">Rp. 350.000.000</span><span class="price-sale">Rp. 250.000.000</span></p>
                                                        </div>
                                                    </div>
                                                    <div class="bottom-area d-flex px-3">
                                                        <div class="m-auto d-flex">
                                                            <a href="product-single.php" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                                                <span><i class="ion-ios-cart"></i></span>
                                                            </a>
                                                            <a href="wishlist.php" class="heart d-flex justify-content-center align-items-center ">
                                                                <span><i class="ion-ios-heart"></i></span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-lg-4 ftco-animate">
                                            <div class="product">
                                                <a href="product-single.php" class="img-prod"><img class="img-fluid" src="images/alatberat.jpeg" alt="Colorlib Template">
                                                    <span class="status">30%</span>
                                                    <div class="overlay"></div>
                                                </a>
                                                <div class="text py-3 pb-4 px-3 text-center">
                                                    <h3><a href="product-single.php">Excavator</a></h3>
                                                    <div class="d-flex">
                                                        <div class="pricing">
                                                            <p class="price"><span class="mr-2 price-dc">Rp. 350.000.000</span><span class="price-sale">Rp. 250.000.000</span></p>
                                                        </div>
                                                    </div>
                                                    <div class="bottom-area d-flex px-3">
                                                        <div class="m-auto d-flex">
                                                            <a href="product-single.php" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                                                <span><i class="ion-ios-cart"></i></span>
                                                            </a>
                                                            <a href="wishlist.php" class="heart d-flex justify-content-center align-items-center ">
                                                                <span><i class="ion-ios-heart"></i></span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-lg-4 ftco-animate">
                                            <div class="product">
                                                <a href="product-single.php" class="img-prod"><img class="img-fluid" src="images/kamera.jpg" alt="Colorlib Template">
                                                    <span class="status">30%</span>
                                                    <div class="overlay"></div>
                                                </a>
                                                <div class="text py-3 pb-4 px-3 text-center">
                                                    <h3><a href="product-single.php">Camera Sony</a></h3>
                                                    <div class="d-flex">
                                                        <div class="pricing">
                                                            <p class="price"><span class="mr-2 price-dc">Rp. 35.000</span><span class="price-sale">Rp. 25.000</span></p>
                                                        </div>
                                                    </div>
                                                    <div class="bottom-area d-flex px-3">
                                                        <div class="m-auto d-flex">
                                                            <a href="product-single.php" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                                                <span><i class="ion-ios-cart"></i></span>
                                                            </a>
                                                            <a href="wishlist.php" class="heart d-flex justify-content-center align-items-center ">
                                                                <span><i class="ion-ios-heart"></i></span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-lg-4 ftco-animate">
                                            <div class="product">
                                                <a href="product-single.php" class="img-prod"><img class="img-fluid" src="images/kamera.jpg" alt="Colorlib Template">
                                                    <span class="status">30%</span>
                                                    <div class="overlay"></div>
                                                </a>
                                                <div class="text py-3 pb-4 px-3 text-center">
                                                    <h3><a href="product-single.php">Camera Sony</a></h3>
                                                    <div class="d-flex">
                                                        <div class="pricing">
                                                            <p class="price"><span class="mr-2 price-dc">Rp. 35.000</span><span class="price-sale">Rp. 25.000</span></p>
                                                        </div>
                                                    </div>
                                                    <div class="bottom-area d-flex px-3">
                                                        <div class="m-auto d-flex">
                                                            <a href="product-single.php" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                                                <span><i class="ion-ios-cart"></i></span>
                                                            </a>
                                                            <a href="wishlist.php" class="heart d-flex justify-content-center align-items-center ">
                                                                <span><i class="ion-ios-heart"></i></span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-lg-4 ftco-animate">
                                            <div class="product">
                                                <a href="product-single.php" class="img-prod"><img class="img-fluid" src="images/kamera.jpg" alt="Colorlib Template">
                                                    <span class="status">30%</span>
                                                    <div class="overlay"></div>
                                                </a>
                                                <div class="text py-3 pb-4 px-3 text-center">
                                                    <h3><a href="product-single.php">Camera Sony</a></h3>
                                                    <div class="d-flex">
                                                        <div class="pricing">
                                                            <p class="price"><span class="mr-2 price-dc">Rp. 35.000</span><span class="price-sale">Rp. 25.000</span></p>
                                                        </div>
                                                    </div>
                                                    <div class="bottom-area d-flex px-3">
                                                        <div class="m-auto d-flex">
                                                            <a href="product-single.php" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                                                <span><i class="ion-ios-cart"></i></span>
                                                            </a>
                                                            <a href="wishlist.php" class="heart d-flex justify-content-center align-items-center ">
                                                                <span><i class="ion-ios-heart"></i></span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>

                                    <div id="home" class="tab-pane fade">
                                        <div class="row">
                                            <div class="col-md-12 col-lg-4 ftco-animate">
                                                <div class="product">
                                                    <a href="product-single.php" class="img-prod"><img class="img-fluid" src="images/produk-mobil.jpg" alt="Colorlib Template">
                                                        <span class="status">30%</span>
                                                        <div class="overlay"></div>
                                                    </a>
                                                    <div class="text py-3 pb-4 px-3 text-center">
                                                        <h3><a href="product-single.php">Avanza</a></h3>
                                                        <div class="d-flex">
                                                            <div class="pricing">
                                                                <p class="price"><span class="mr-2 price-dc">Rp. 350.000</span><span class="price-sale">Rp. 250.000</span></p>
                                                            </div>
                                                        </div>
                                                        <div class="bottom-area d-flex px-3">
                                                            <div class="m-auto d-flex">
                                                                <a href="product-single.php" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                                                    <span><i class="ion-ios-cart"></i></span>
                                                                </a>
                                                                <a href="wishlist.php" class="heart d-flex justify-content-center align-items-center ">
                                                                    <span><i class="ion-ios-heart"></i></span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-lg-4 ftco-animate">
                                                <div class="product">
                                                    <a href="product-single.php" class="img-prod"><img class="img-fluid" src="images/produk-mobil.jpg" alt="Colorlib Template">
                                                        <span class="status">30%</span>
                                                        <div class="overlay"></div>
                                                    </a>
                                                    <div class="text py-3 pb-4 px-3 text-center">
                                                        <h3><a href="product-single.php">Avanza</a></h3>
                                                        <div class="d-flex">
                                                            <div class="pricing">
                                                                <p class="price"><span class="mr-2 price-dc">Rp. 350.000</span><span class="price-sale">Rp. 250.000</span></p>
                                                            </div>
                                                        </div>
                                                        <div class="bottom-area d-flex px-3">
                                                            <div class="m-auto d-flex">
                                                                <a href="product-single.php" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                                                    <span><i class="ion-ios-cart"></i></span>
                                                                </a>
                                                                <a href="wishlist.php" class="heart d-flex justify-content-center align-items-center ">
                                                                    <span><i class="ion-ios-heart"></i></span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-lg-4 ftco-animate">
                                                <div class="product">
                                                    <a href="product-single.php" class="img-prod"><img class="img-fluid" src="images/produk-mobil.jpg" alt="Colorlib Template">
                                                        <span class="status">30%</span>
                                                        <div class="overlay"></div>
                                                    </a>
                                                    <div class="text py-3 pb-4 px-3 text-center">
                                                        <h3><a href="product-single.php">Avanza</a></h3>
                                                        <div class="d-flex">
                                                            <div class="pricing">
                                                                <p class="price"><span class="mr-2 price-dc">Rp. 350.000</span><span class="price-sale">Rp. 250.000</span></p>
                                                            </div>
                                                        </div>
                                                        <div class="bottom-area d-flex px-3">
                                                            <div class="m-auto d-flex">
                                                                <a href="product-single.php" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                                                    <span><i class="ion-ios-cart"></i></span>
                                                                </a>
                                                                <a href="wishlist.php" class="heart d-flex justify-content-center align-items-center ">
                                                                    <span><i class="ion-ios-heart"></i></span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="menu1" class="tab-pane fade">
                                        <div class="row">
                                            <div class="col-md-12 col-lg-4 ftco-animate">
                                                <div class="product">
                                                    <a href="#" class="img-prod"><img class="img-fluid" src="images/ht.jpg" alt="Colorlib Template">
                                                        <span class="status">30%</span>
                                                        <div class="overlay"></div>
                                                    </a>
                                                    <div class="text py-3 pb-4 px-3 text-center">
                                                        <h3><a href="#">Handy Talkie</a></h3>
                                                        <div class="d-flex">
                                                            <div class="pricing">
                                                                <p class="price"><span class="mr-2 price-dc">Rp. 12.000</span><span class="price-sale">Rp. 10.000</span></p>
                                                            </div>
                                                        </div>
                                                        <div class="bottom-area d-flex px-3">
                                                            <div class="m-auto d-flex">
                                                                <a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                                                    <span><i class="ion-ios-cart"></i></span>
                                                                </a>
                                                                <a href="#" class="heart d-flex justify-content-center align-items-center ">
                                                                    <span><i class="ion-ios-heart"></i></span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-lg-4 ftco-animate">
                                                <div class="product">
                                                    <a href="#" class="img-prod"><img class="img-fluid" src="images/ht.jpg" alt="Colorlib Template">
                                                        <span class="status">30%</span>
                                                        <div class="overlay"></div>
                                                    </a>
                                                    <div class="text py-3 pb-4 px-3 text-center">
                                                        <h3><a href="#">Handy Talkie</a></h3>
                                                        <div class="d-flex">
                                                            <div class="pricing">
                                                                <p class="price"><span class="mr-2 price-dc">Rp. 12.000</span><span class="price-sale">Rp. 10.000</span></p>
                                                            </div>
                                                        </div>
                                                        <div class="bottom-area d-flex px-3">
                                                            <div class="m-auto d-flex">
                                                                <a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                                                    <span><i class="ion-ios-cart"></i></span>
                                                                </a>
                                                                <a href="#" class="heart d-flex justify-content-center align-items-center ">
                                                                    <span><i class="ion-ios-heart"></i></span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-lg-4 ftco-animate">
                                                <div class="product">
                                                    <a href="#" class="img-prod"><img class="img-fluid" src="images/ht.jpg" alt="Colorlib Template">
                                                        <span class="status">30%</span>
                                                        <div class="overlay"></div>
                                                    </a>
                                                    <div class="text py-3 pb-4 px-3 text-center">
                                                        <h3><a href="#">Handy Talkie</a></h3>
                                                        <div class="d-flex">
                                                            <div class="pricing">
                                                                <p class="price"><span class="mr-2 price-dc">Rp. 12.000</span><span class="price-sale">Rp. 10.000</span></p>
                                                            </div>
                                                        </div>
                                                        <div class="bottom-area d-flex px-3">
                                                            <div class="m-auto d-flex">
                                                                <a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                                                    <span><i class="ion-ios-cart"></i></span>
                                                                </a>
                                                                <a href="#" class="heart d-flex justify-content-center align-items-center ">
                                                                    <span><i class="ion-ios-heart"></i></span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="menu2" class="tab-pane fade">
                                        <div class="row">
                                            <div class="col-md-12 col-lg-4 ftco-animate">
                                                <div class="product">
                                                    <a href="#" class="img-prod"><img class="img-fluid" src="images/product-9.jpg" alt="Colorlib Template">
                                                        <span class="status">30%</span>
                                                        <div class="overlay"></div>
                                                    </a>
                                                    <div class="text py-3 pb-4 px-3 text-center">
                                                        <h3><a href="#">Onion</a></h3>
                                                        <div class="d-flex">
                                                            <div class="pricing">
                                                                <p class="price"><span class="mr-2 price-dc">$120.00</span><span class="price-sale">$80.00</span></p>
                                                            </div>
                                                        </div>
                                                        <div class="bottom-area d-flex px-3">
                                                            <div class="m-auto d-flex">
                                                                <a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                                                    <span><i class="ion-ios-menu"></i></span>
                                                                </a>
                                                                <a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                                                    <span><i class="ion-ios-cart"></i></span>
                                                                </a>
                                                                <a href="#" class="heart d-flex justify-content-center align-items-center ">
                                                                    <span><i class="ion-ios-heart"></i></span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-lg-4 ftco-animate">
                                                <div class="product">
                                                    <a href="#" class="img-prod"><img class="img-fluid" src="images/product-10.jpg" alt="Colorlib Template">
                                                        <div class="overlay"></div>
                                                    </a>
                                                    <div class="text py-3 pb-4 px-3 text-center">
                                                        <h3><a href="#">Apple</a></h3>
                                                        <div class="d-flex">
                                                            <div class="pricing">
                                                                <p class="price"><span>$120.00</span></p>
                                                            </div>
                                                        </div>
                                                        <div class="bottom-area d-flex px-3">
                                                            <div class="m-auto d-flex">
                                                                <a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                                                    <span><i class="ion-ios-menu"></i></span>
                                                                </a>
                                                                <a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                                                    <span><i class="ion-ios-cart"></i></span>
                                                                </a>
                                                                <a href="#" class="heart d-flex justify-content-center align-items-center ">
                                                                    <span><i class="ion-ios-heart"></i></span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-lg-4 ftco-animate">
                                                <div class="product">
                                                    <a href="#" class="img-prod"><img class="img-fluid" src="images/product-11.jpg" alt="Colorlib Template">
                                                        <div class="overlay"></div>
                                                    </a>
                                                    <div class="text py-3 pb-4 px-3 text-center">
                                                        <h3><a href="#">Garlic</a></h3>
                                                        <div class="d-flex">
                                                            <div class="pricing">
                                                                <p class="price"><span>$120.00</span></p>
                                                            </div>
                                                        </div>
                                                        <div class="bottom-area d-flex px-3">
                                                            <div class="m-auto d-flex">
                                                                <a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                                                    <span><i class="ion-ios-menu"></i></span>
                                                                </a>
                                                                <a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                                                    <span><i class="ion-ios-cart"></i></span>
                                                                </a>
                                                                <a href="#" class="heart d-flex justify-content-center align-items-center ">
                                                                    <span><i class="ion-ios-heart"></i></span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-lg-4 ftco-animate">
                                                <div class="product">
                                                    <a href="#" class="img-prod"><img class="img-fluid" src="images/product-12.jpg" alt="Colorlib Template">
                                                        <div class="overlay"></div>
                                                    </a>
                                                    <div class="text py-3 pb-4 px-3 text-center">
                                                        <h3><a href="#">Chilli</a></h3>
                                                        <div class="d-flex">
                                                            <div class="pricing">
                                                                <p class="price"><span>$120.00</span></p>
                                                            </div>
                                                        </div>
                                                        <div class="bottom-area d-flex px-3">
                                                            <div class="m-auto d-flex">
                                                                <a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                                                    <span><i class="ion-ios-menu"></i></span>
                                                                </a>
                                                                <a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                                                    <span><i class="ion-ios-cart"></i></span>
                                                                </a>
                                                                <a href="#" class="heart d-flex justify-content-center align-items-center ">
                                                                    <span><i class="ion-ios-heart"></i></span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="menu3" class="tab-pane fade">
                                        <div class="row">
                                            <div class="col-md-12 col-lg-4 ftco-animate">
                                                                            <div class="product">
                                                                                <a href="product-single.php" class="img-prod"><img class="img-fluid" src="images/alatberat.jpeg" alt="Colorlib Template">
                                                                                    <span class="status">30%</span>
                                                                                    <div class="overlay"></div>
                                                                                </a>
                                                                                <div class="text py-3 pb-4 px-3 text-center">
                                                                                    <h3><a href="product-single.php">Excavator</a></h3>
                                                                                    <div class="d-flex">
                                                                                        <div class="pricing">
                                                                                            <p class="price"><span class="mr-2 price-dc">Rp. 350.000.000</span><span class="price-sale">Rp. 250.000.000</span></p>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="bottom-area d-flex px-3">
                                                                                        <div class="m-auto d-flex">
                                                                                            <a href="product-single.php" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                                                                                <span><i class="ion-ios-cart"></i></span>
                                                                                            </a>
                                                                                            <a href="wishlist.php" class="heart d-flex justify-content-center align-items-center ">
                                                                                                <span><i class="ion-ios-heart"></i></span>
                                                                                            </a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                            </div>
                                            <div class="col-md-12 col-lg-4 ftco-animate">
                                                <div class="product">
                                                    <a href="product-single.php" class="img-prod"><img class="img-fluid" src="images/alatberat.jpeg" alt="Colorlib Template">
                                                        <span class="status">30%</span>
                                                        <div class="overlay"></div>
                                                    </a>
                                                    <div class="text py-3 pb-4 px-3 text-center">
                                                        <h3><a href="product-single.php">Excavator</a></h3>
                                                        <div class="d-flex">
                                                            <div class="pricing">
                                                                <p class="price"><span class="mr-2 price-dc">Rp. 350.000.000</span><span class="price-sale">Rp. 250.000.000</span></p>
                                                            </div>
                                                        </div>
                                                        <div class="bottom-area d-flex px-3">
                                                            <div class="m-auto d-flex">
                                                                <a href="product-single.php" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                                                    <span><i class="ion-ios-cart"></i></span>
                                                                </a>
                                                                <a href="wishlist.php" class="heart d-flex justify-content-center align-items-center ">
                                                                    <span><i class="ion-ios-heart"></i></span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-lg-4 ftco-animate">
                                                <div class="product">
                                                    <a href="product-single.php" class="img-prod"><img class="img-fluid" src="images/alatberat.jpeg" alt="Colorlib Template">
                                                        <span class="status">30%</span>
                                                        <div class="overlay"></div>
                                                    </a>
                                                    <div class="text py-3 pb-4 px-3 text-center">
                                                        <h3><a href="product-single.php">Excavator</a></h3>
                                                        <div class="d-flex">
                                                            <div class="pricing">
                                                                <p class="price"><span class="mr-2 price-dc">Rp. 350.000.000</span><span class="price-sale">Rp. 250.000.000</span></p>
                                                            </div>
                                                        </div>
                                                        <div class="bottom-area d-flex px-3">
                                                            <div class="m-auto d-flex">
                                                                <a href="product-single.php" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                                                    <span><i class="ion-ios-cart"></i></span>
                                                                </a>
                                                                <a href="wishlist.php" class="heart d-flex justify-content-center align-items-center ">
                                                                    <span><i class="ion-ios-heart"></i></span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="row mt-5">
                                        <div class="col text-center">
                                            <div class="block-27">
                                                <ul>
                                                    <li><a href="#">&lt;</a></li>
                                                    <li class="active"><span>1</span></li>
                                                    <li><a href="#">2</a></li>
                                                    <li><a href="#">3</a></li>
                                                    <li><a href="#">4</a></li>
                                                    <li><a href="#">5</a></li>
                                                    <li><a href="#">&gt;</a></li>
                                                </ul>
                                            </div>
                                        </div>
                            </div>
                        </div>

                        <div class="col-lg-4 sidebar ftco-animate">
                                        <div class="sidebar-box">
                                          <form action="#" class="search-form">
                                            <div class="form-group">
                                              <span class="icon ion-ios-search"></span>
                                              <input type="text" class="form-control" placeholder="Search...">
                                            </div>
                                          </form>
                                        </div>
                                        <div class="sidebar-box ftco-animate">
                                          <h3 class="heading">Kategori Vendor</h3>
                                          <ul class="categories">
                                            <li><a href="#">Semua <span>(77)</span></a></li>
                                            <li><a href="#">Swasta <span>(12)</span></a></li>
                                            <li><a href="#">Pemerintah <span>(22)</span></a></li>
                                            <li><a href="#">Perusahaan <span>(37)</span></a></li>
                                            <li><a href="#">Pribadi <span>(42)</span></a></li>
                                          </ul>
                                        </div>

                                        <div class="sidebar-box ftco-animate">
                                          <h3 class="heading">Urutkan Berdasarkan</h3>
                                          <div class="tagcloud">
                                            <a href="#" class="tag-cloud-link">Harga Terendah</a>
                                            <a href="#" class="tag-cloud-link">Harga Tertinggi</a>
                                            <a href="#" class="tag-cloud-link">Paling Laris</a>
                                            <a href="#" class="tag-cloud-link">Review Terbaik</a>
                                            <a href="#" class="tag-cloud-link">Reputasi Toko</a>
                                          </div>
                                        </div>

                                        <div class="sidebar-box ftco-animate">
                                          <h3 class="heading">Bantuan</h3>
                                          <div class="block-21 mb-4 d-flex">
                                            <a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>
                                            <div class="text">
                                              <h3 class="heading-1"><a href="#">Prosedur Menyewa</a></h3>
                                              <div class="meta">
                                                <div><a href="#"><span class="icon-calendar"></span> April 09, 2019</a></div>
                                                <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                                                <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="block-21 mb-4 d-flex">
                                            <a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>
                                            <div class="text">
                                              <h3 class="heading-1"><a href="#">Cara Daftar Akun</a></h3>
                                              <div class="meta">
                                                <div><a href="#"><span class="icon-calendar"></span> April 09, 2019</a></div>
                                                <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                                                <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="block-21 mb-4 d-flex">
                                            <a class="blog-img mr-4" style="background-image: url(images/image_3.jpg);"></a>
                                            <div class="text">
                                              <h3 class="heading-1"><a href="#">Prosedur Pengembalian</a></h3>
                                              <div class="meta">
                                                <div><a href="#"><span class="icon-calendar"></span> April 09, 2019</a></div>
                                                <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                                                <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>

                                        <div class="sidebar-box ftco-animate">
                                          <h3 class="heading">Paragraph</h3>
                                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
                                        </div>
                                      </div>
                        </div>

                    </div>
            </div>

        </div>

    </section>

    
    <?php include 'footer.php'; ?>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>


  <script>
        $(document).ready(function(){

        var quantitiy=0;
           $('.quantity-right-plus').click(function(e){
                
                // Stop acting like a button
                e.preventDefault();
                // Get the field name
                var quantity = parseInt($('#quantity').val());
                
                // If is not undefined
                    
                    $('#quantity').val(quantity + 1);

                  
                    // Increment
                
            });

             $('.quantity-left-minus').click(function(e){
                // Stop acting like a button
                e.preventDefault();
                // Get the field name
                var quantity = parseInt($('#quantity').val());
                
                // If is not undefined
              
                    // Increment
                    if(quantity>0){
                    $('#quantity').val(quantity - 1);
                    }
            });
            
        });
    </script>

    <script type="text/javascript">
     $(function(){
      $(".datepicker").datepicker({
          format: 'yyyy-mm-dd',
          autoclose: true,
          todayHighlight: true,
      });
     });
    </script>
    
  </body>
</html>