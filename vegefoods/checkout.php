<?php include 'header.php'; ?>
    <!-- END nav -->
    
    <section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-xl-7 ftco-animate">
					<form action="#" class="billing-form">
						<h3 class="mb-4 billing-heading text-center">Detail Transaksi</h3>
						<hr>
							<div class="row align-items-end">
								<div class="col-md-12">
									<div class="form-group mt-4">
										<div class="form-group">
											<div class="checkbox">
												<label><input type="checkbox" value="" class="mr-2"> Data Sesuai Profile</label>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label for="name">Nama Pemesan</label>
										<input type="text" class="form-control" placeholder="">
									</div>
								</div>
								
								<div class="w-100"></div>

								<div class="col-md-6">
									<div class="form-group">
										<label for="streetaddress">Alamat Pengiriman</label>
										<input type="text" class="form-control" placeholder="Alamat pengiriman barang">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Kelurahan">
									</div>
								</div>

								<div class="w-100"></div>

								<div class="col-md-6">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Kecamatan">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Kota">
									</div>
								</div>
								
								<div class="w-100"></div>

								<div class="col-md-6">
									<div class="form-group">
										<label for="country">Provinsi</label>
										<div class="select-wrap">
											<div class="icon"><span class="ion-ios-arrow-down"></span></div>
												<select name="" id="" class="form-control">
													<option value="">DKI Jakarta</option>
													<option value="">Jawa Barat</option>
													<option value="">Jawa Tengah</option>
													<option value="">Jawa Timur</option>
												</select>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="postcodezip">Kode Pos</label>
										<input type="text" class="form-control" placeholder="">
									</div>
								</div>

								<div class="w-100"></div>

								<div class="col-md-6">
									<div class="form-group">
										<label for="phone">Nomor Telepon Penerima</label>
										<input type="text" class="form-control" placeholder="">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="emailaddress">Email Address</label>
										<input type="text" class="form-control" placeholder="">
									</div>
								</div>

								<div class="w-100"></div>

								<div class="col-md-12">
									<div class="form-group mt-4">
										<div class="form-group">
											<div class="checkbox">
												<label><input type="checkbox" value="" class="mr-2"> Data Sudah Benar</label>
											</div>
										</div>
										<div class="form-group">
											<div class="checkbox">
												<label><input type="checkbox" value="" class="mr-2"> Saya sudah membaca dan meyetujui syarat dan ketentuan yang berlaku</label>
											</div>
										</div>
									</div>
								</div>
							</div>
					</form><!-- END -->
				</div>
						<div class="col-xl-5">
				<div class="row mt-5 pt-3">
					<div class="col-md-12">
						<div class="cart-detail p-3 p-md-4">
							<h3 class="billing-heading mb-4">Jasa Pengiriman</h3>
										<div class="form-group">
											<div class="col-md-12">
												<div class="radio">
												<label><input type="radio" name="optradio" class="mr-2"> JNE</label>
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="col-md-12">
												<div class="radio">
												<label><input type="radio" name="optradio" class="mr-2"> TIKI</label>
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="col-md-12">
												<div class="radio">
												<label><input type="radio" name="optradio" class="mr-2"> SiCepat</label>
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="col-md-12">
												<div class="radio">
												<label><input type="radio" name="optradio" class="mr-2"> Cash On Delivery (COD)</label>
												</div>
											</div>
										</div>
										
										<p><a href="#sec1"class="btn btn-primary py-7 px-1 " style="width: 120px;">Cek Ongkir</a></p>
									</div> <!-- kalo udah milih nanti di box bawah keluar biaya pengiriman, jadi kalo belum di klik gausah muncul dulu biaya pengiriman -->
					</div>
					<div id="sec1" class="col-md-12 d-flex mb-5">
						<div class="cart-detail cart-total p-3 p-md-4">
							<h3 class="billing-heading mb-4">Total Biaya</h3>
							<p class="d-flex">
										<span>Subtotal</span>
										<span>Rp. 530.000</span>
									</p>
									<p class="d-flex">
										<span>Delivery</span>
										<span>Rp. 11.000</span>
									</p>
									<p class="d-flex">
										<span>Discount</span>
										<span>Rp. 20.000</span>
									</p>
									<hr>
									<p class="d-flex total-price">
										<span>Total</span>
										<span>Rp. 523.000</span>
									</p>
									</div>
					</div>
					<div class="col-md-12">
						<div class="cart-detail p-3 p-md-4">
							<h3 class="billing-heading mb-4">Metode Pembayaran</h3>
										<div class="form-group">
											<div class="col-md-12">
												<div class="radio">
												<label><input type="radio" name="optradio" class="mr-2"> Transfer ATM</label>
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="col-md-12">
												<div class="radio">
												<label><input type="radio" name="optradio" class="mr-2"> Mobile Banking</label>
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="col-md-12">
												<div class="radio">
												<label><input type="radio" name="optradio" class="mr-2"> Kartu Kredit</label>
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="col-md-12">
												<div class="radio">
												<label><input type="radio" name="optradio" class="mr-2"> OVO</label>
												</div>
											</div>
										</div>
										
										<p><a href="pembayaran.php"class="btn btn-primary py-3 px-4">Bayar</a></p>
									</div> <!-- aktifin required buat isian harus bener, ceklis box, pilih kurir, sama metode pembayaran -->
					</div>
				</div>
			</div> <!-- .col-md-8 -->
			</div>
		</div>
    </section> <!-- .section -->

    
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