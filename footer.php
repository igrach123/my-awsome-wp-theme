
		<footer id="footer">

			<div class="container">
				<dic class="row">
					<div class="col-sm-12 text-center">
						<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/logoYP.png" alt="PY Logo">
						<h3 class="footer-title">PREMIUM YACHT INSURANCE by Jack Šurija</h3>
						<p class="mail"><a href="mailto:info@yacht-pool.com.hr">info@yacht-pool.com.hr</a> </p>
						<p class="b-data" >Yacht-Pool d.o.o. for insurance representation <br>
							S. Rajka 40 <br>
							HR-52440 Poreč <br>
							OIB: 78729965439 <br>
							working hours: 09:00 - 17:00 h
						</p>
						<p class="p-data" >
							tel: 052 - 432 230 <br>
							mobile: 099 - 432 2300 <br>
							fax: 052 - 427 1570 <br>
							
						</p>
						<p class="help-line">24 hours help line: 098 - 366 223 </p>
						<p class="social">
							<a href="facebook" target="_blank"> Twitter</a>
							<a href="facebook" target="_blank"> Facebook</a>
							<a href="facebook" target="_blank"> Instagram</a>
						</p>
					</div>
				</dic>
				<div class="row text-center copy-text">
					
						<p><?php printf( esc_html__( '&copy; %1$s %2$s. All rights reserved.', 'its-an-awsome-theme' ), wp_date( 'Y' ), get_bloginfo( 'name', 'display' ) ); ?></p>
					
				</div>
			</div><!-- /.container -->
		</footer><!-- /#footer -->
	</div><!-- /#wrapper -->
	<?php
		wp_footer();
	?>
</body>
</html>
