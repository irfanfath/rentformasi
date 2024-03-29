<?php include 'header.php'; ?>
    <!-- END nav -->

    <section class="ftco-section ftco-cart">
		<div class="container">
			<div class="border">
				<div class="row">
		    			<div class="col-md-12 ftco-animate">
		    				<div class="cart-list">
			    				<table class="table">
								    <thead class="thead-primary">
								      <tr class="text-center">
								        <th>Batalkan</th>
								        <th>Barang</th>
								        <th>Nama Barang</th>
								        <th>Harga</th>
								        <th>Kuantitas</th>
								        <th>Total Harga</th>
								      </tr>
								    </thead>
								    <tbody>
								      <tr class="text-center">
								        <td class="product-remove"><a href="#"><span class="ion-ios-close"></span></a></td>
								        <td class="image-prod"><div class="img" style="background-image:url(images/produk-mobil.jpg);"></div></td>
								        <td class="product-name">
								        	<h3>Bell Pepper</h3>
								        	<p>Far far away, behind the word mountains, far from the countries</p></td>
								        <td class="price">$4.90</td>		        
								        <td class="quantity">
								        	<div class="input-group mb-3">
							             		<input type="text" name="quantity" class="quantity form-control input-number" value="1" min="1" max="100">
							          		</div></td>
								        <td class="total">$4.90</td>
								      </tr><!-- END TR-->

								      <tr class="text-center">
								        <td class="product-remove"><a href="#"><span class="ion-ios-close"></span></a></td>
								        <td class="image-prod"><div class="img" style="background-image:url(images/product-4.jpg);"></div></td>
								        <td class="product-name">
								        	<h3>Bell Pepper</h3>
								        	<p>Far far away, behind the word mountains, far from the countries</p></td>
								        <td class="price">$15.70</td>      
								        <td class="quantity">
								        	<div class="input-group mb-3">
							             		<input type="text" name="quantity" class="quantity form-control input-number" value="1" min="1" max="100">
							          		</div></td>
								        <td class="total">$15.70</td>
								      </tr><!-- END TR-->
								    </tbody>
								</table>
							</div>
		    			</div>
	    		</div>
	    		<div class="row justify-content-end">
	    			<div class="col-lg-4 mt-5 cart-wrap ftco-animate">
	    				<div class="cart-total mb-3">
	    					<h3>Masukkan kode kupon anda disini</h3>
	  						<form action="#" class="info">
					              <div class="form-group">
					                <input type="text" class="form-control text-left px-3" placeholder="Kode Kupon">
					              </div>
		               				 <p><a href="checkout.php" class="btn btn-black py-6 px-4">Apply</a></p>
		            		</form>
	    				</div>
	    			</div>

	    			<div class="col-lg-5 mt-5 cart-wrap ftco-animate">
	    				<div class="cart-total mb-3">
	    					<h3>Cart Totals</h3>
	    					<p class="d-flex">
	    						<span>Subtotal</span>
	    						<span>$20.60</span>
	    					</p>
	    					<p class="d-flex">
	    						<span>Discount</span>
	    						<span>$3.00</span>
	    					</p>
	    					<hr>
	    					<p class="d-flex total-price">
	    						<span>Total</span>
	    						<span>$17.60</span>
	    					</p>
	    				</div>
						<p><a href="checkout.php" class="btn btn-primary py-3 px-4">Proses Pembayaran</a>
						<a href="barang.php" class="btn btn-primary py-3 px-4" style="margin-left:20px;">Sewa Produk Lain</a></p>
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