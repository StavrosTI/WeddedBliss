<?php include 'header.php'; ?>


	<section class="slideshow sixteen columns">
		
		<div class="branding-box">
			<?php include 'branding.php'; ?>
		</div>
		
		<ul class="rslides" id="main_slideshow">
			<li><a href="#"><img src="<?php echo base_url(), 'assets/img/slideshow/destination/'.$destination.'/1.jpg'; ?>" alt=""></a></li>
			<li><a href="#"><img src="<?php echo base_url(), 'assets/img/slideshow/destination/'.$destination.'/2.jpg'; ?>" alt=""></a></li>
			<li><a href="#"><img src="<?php echo base_url(), 'assets/img/slideshow/destination/'.$destination.'/3.jpg'; ?>" alt=""></a></li>
			<li><a href="#"><img src="<?php echo base_url(), 'assets/img/slideshow/destination/'.$destination.'/4.jpg'; ?>" alt=""></a></li>
		</ul>
					
	</section>
	
	<div class="sixteen columns">
		<br />
		<br />
	</div>
	
	<aside class="four columns">
		<div class="sidebar clearfix">
			<h3 class="fancy">Special Offers</h3>
			<?php 
				foreach ( $offers as $key => $val ) { 
					
					if ( strtolower(trim($val['destination'])) == strtolower(trim($destination)) ) {
			?>
						<div class="offer">
							<h4><?php echo $val['title']; ?></h4>
							<h5><?php echo $val['subtitle']; ?></h5>
							<p><?php echo $val['copy']; ?></p>
							<span class="view-details">View Offer Details</span>
							<div class="collapsible">
								<p><?php echo $val['details']; ?></p>
							</div>
						</div>
			<?php
					} 
				}
			?>
		</div>
	</aside>
	
	<section class="twelve columns omega">
		<div class="twelve columns">
			<h3 class="fancy">
				<?php if ( $destination == "mexico" ) { ?>
					Traveling to Mexico?
				<?php } else { ?>
					Traveling to the Caribbean?
				<?php } ?>
			</h3>
			<p>
				<?php if ( $destination == "mexico" ) { ?>
					The rich land... The dreamy landscape... The warmth of its people... The past and the present in perfect harmony... This is Mexico. Mexico offers vacationers the tranquility and beauty of its lovely beaches, known and admired all over the world for their eternal sun and warm ambiance.
				<?php } else { ?>
					Whether you are looking for intimate seclusion or a full celebration, the islands of the Caribbean offer the perfect setting for your wedding, honeymoon or both. From busy to mellow, the Caribbean has something to offer every couple. Not only is the warm weather perfect, but the travel time in minimal since the Caribbean is so close to home. This wonderland is overflowing with romance, adventure, discovery and awe blended with the modern rhythms and luxurious amenities of today.
				<?php } ?>
			</p>
		</div>
		
		<div class="twelve columns"><hr /></div>

		<?php
			$dest = ucfirst($destination);
			foreach ( $properties[$dest] as $key => $val ) { 
		?>
		<div class="twelve columns">
			<h4><?php echo $key; ?></h4>
			<p><?php echo $val[0]['subregiondetails']; ?></p>
		
			<?php
				$filler_spots = (count($val)%3-3)*-1;
				
				for ( $i = 0; $i < count($val); $i++ ) { 
					extract($val[$i]);
					if ( $i > 0 && $i % 3 == 0 ) { ?>
						</div>
			<?php	}
					if ( $i == 0 || ( $i > 0 && $i % 3 == 0 ) ) { ?>
						<div class="row">
			<?php 	} ?>
							<article class="property four columns alpha clearfix">
								<img src="<?php echo base_url(), 'assets/img/properties/hotel.jpg'; //, $image; ?>" alt="<?php echo $hotel; ?>">
								<div class="property-details four columns omega">
									<a href="<?php echo "http://www.travimp.com/hotel.php?msg=" . $code; ?>"><?php echo $hotel; ?></a>
									<p><?php echo $copy1; ?></p>
									<p><?php echo $copy2; ?></p>
									
									<?php if ( $details != '' ) { ?>
									<div class="toggle toggle-more">Learn More...</div>
																						
									<div class="collapsible clearfix">
										<?php echo $details; ?>
									</div> <!-- .collapsible -->
									<?php } ?>
								</div>
							</article>
				
			<?php 	if ( $i >= (count($val)-1) ) { ?>
						</div>
			<?php	}
				} ?>

		<div class="twelve columns alpha">
			<hr />
		</div>

		</div>

		<?php } ?>
		
	</section>

<?php include 'footer.php'; ?>