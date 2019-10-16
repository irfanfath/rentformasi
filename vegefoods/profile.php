<?php include 'header.php'; ?>
    <!-- END nav -->

    <section class="ftco-section ftco-degree-bg">

      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-lg-10 ftco-animate">
            <div class="about-author d-flex p-4 bg-light">
              <div class="bio align-self-md-center mr-4">
                  <img src="images/person_1.jpg" alt="Image placeholder" class="img-fluid mb-4" style="width: 200px;">
              </div>

                  <div class="desc align-self-md-center">
                    <div class="col-md">
                      <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Muhammad Irfan Fathurrahman</h2>
                          <div class="block-23 mb-3">
                            <ul>
                              <li><span class="icon icon-map-marker"></span><span class="text">Jln. gataudimana Nomor 232, Bandung, 403242</span></li>
                              <li><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></li>
                              <li><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></li>
                            </ul>
                          </div>
                      </div>
                    </div>
                        <p><a href="#" class="btn btn-primary" style="margin-top: 15px;">Lihat Data Lengkap</a></p> 
                  </div>
            </div>
          </div>
        </div>
      </div>

    </section>

    <h2 class="mb-5 text-center" style="color: #82ae46">Riwayat Transaksi</h2>
    <section class="ftco-section ftco-cart">
      <div class="container">
        <div class="row">
          <div class="col-md-12 ftco-animate">
            <div class="cart-list">
              <table class="table">
                <thead class="thead-primary">
                  <tr class="text-center">
                    <th>Pesanan</th>
                    <th>Nama Pesanan & Nomor Transaksi</th>
                    <th>Total Pembayaran</th>
                    <th>Tanggal Pemesanan</th>
                    <th>Status Transaksi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="text-center">                    
                    <td class="image-prod"><div class="img" style="background-image:url(images/product-1.jpg);"></div></td>
                    
                    <td class="product-name">
                      <h3>Bell Pepper</h3>
                      <p>RF3472472</p>
                    </td>
                    
                    <td class="price">Rp. 490.000</td>
                    
                
                    <td class="total">22/12/19</td>
                    <td><p><a href="status_transaksi.php"class="btn btn-primary py-3 px-4">Lihat Status</a></p></td>
                  </tr><!-- END TR-->

                  <tr class="text-center">                    
                    <td class="image-prod"><div class="img" style="background-image:url(images/product-2.jpg);"></div></td>
                    
                    <td class="product-name">
                      <h3>Bell Pepper</h3>
                      <p>RF49324814</p>
                    </td>
                    
                    <td class="price">Rp. 150.700</td>
                    
                    
                    <td class="total">23/12/19</td>
                    <td><p><a href="status_transaksi.php"class="btn btn-primary py-3 px-4">Lihat Status</a></p></td>               
                  </tr><!-- END TR-->

                </tbody>
              </table>
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
    
  </body>
</html>