<?php include 'header.php'; ?>

    
    <div class="col-md-12 heading-section text-center ftco-animate">
        <h2 class="mb-4 text-center">Tagihan Pembayaran</h2>
        <hr>
        <br>
        <p>Terima kasih atas kepercayaan anda bertansaksi di Rentformasi. Untuk Selanjutnya mohon segera lakukan pembayaran sebesar :</p>
            <div class="heading-section-bold mb-4 mt-md-5">
                <h2 class="mb-4 text-center">Rp. 575.454</h2>
                <p>Nomor Tagihan Rentformasi : RF4234293483420</p>

                <h6 class="mb-4 text-center">*Nominal pada 3 digit terakhir merupakan kode unik transaksi anda. Harap Transfer sesuai nominal yang tertera di atas.</h6>
            </div>
            <div class="col-md-12 heading-section text-center ftco-animate">
                <p>Harap lakukan pembayaran sebelum :</p>
                <h4 class="mb-4 text-center">Rabu, 15 Oktober 2019 Pukul 08.00 WIB</h4>
                <p>Lakukan Konfirmasi setelah melakukan pembayaran dan upload bukti pembayaran</p>
                        <p><a href="konfirmasi.php" class="btn btn-primary py-3 px-4">Konfirmasi Pembayaran</a></p>

            </div>
    </div>

    <br>

    <section class="ftco-section ftco-degree-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 ftco-animate">   
                    <div class="about-author d-flex p-4 bg-light">
                        <div class="col-md-12 py-5 wrap-about pb-md-5 ftco-animate">
                            <h3 class="mb-4 text-center">Cara Pembayaran</h3>
                                    <h5>Kartu Kredit :</h5>
                                    <button class="buatscroll">Cara Pembayaran Melalui Kartu Kredit</button>
                                    <div class="contentscroll">
                                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                    </div>
                                    <br>
                                    <h5>Transfer Bank:</h5>
                                    <button class="buatscroll">Cara Pembayaran Melalui ATM BCA</button>
                                    <div class="contentscroll">
                                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                    </div>
                                    <button class="buatscroll">Cara Pembayaran Melalui ATM BNI</button>
                                    <div class="contentscroll">
                                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                    </div>
                                    <button class="buatscroll">Cara Pembayaran Melalui ATM BRI</button>
                                    <div class="contentscroll">
                                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                    </div>
                                    <br>
                                    <h5>Mobile Banking:</h5>
                                    <button class="buatscroll">Cara Pembyaran Melalui Mobile Banking BCA</button>
                                    <div class="contentscroll">
                                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                    </div>
                                    <button class="buatscroll">Cara Pembyaran Melalui Mobile Banking BNI</button>
                                    <div class="contentscroll">
                                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                    </div>
                                    <button class="buatscroll">Cara Pembyaran Melalui Mobile Banking BRI</button>
                                    <div class="contentscroll">
                                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                    </div>

                                    <script>
                                    var coll = document.getElementsByClassName("buatscroll");
                                    var i;

                                    for (i = 0; i < coll.length; i++) {
                                      coll[i].addEventListener("click", function() {
                                        this.classList.toggle("activescroll");
                                        var content = this.nextElementSibling;
                                        if (content.style.maxHeight){
                                          content.style.maxHeight = null;
                                        } else {
                                          content.style.maxHeight = content.scrollHeight + "px";
                                        } 
                                      });
                                    }
                                    </script>
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
    
  </body>
</html>