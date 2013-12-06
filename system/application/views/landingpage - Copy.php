<?php include 'header.php'; ?>

	<div id="header">
		<a href="<?php echo base_url(); ?>">
			<img src="<?php echo base_url(), 'system/assets/img/tla3392_ti_bookearlysavebig_1000x400.jpg'; ?>" alt="Mexico, Dominican Republic, and Costa Rica - Early Booking Bonus">
		</a>
	</div> <!-- #header -->
	
	<div id="index-copy">
		<span class="copy">
			<p>Mittens, scarves and winter jackets will be here before we know it, but now you can reserve your spot in paradise to help thaw the impending winter chill. Travel Impressions and select properties in Mexico and the Dominican Republic are enticing visitors to book early and be rewarded with big savings. But don’t delay, the sun, sand and fun are calling today!</p>
		</span>
	</div> <!-- #index-copy -->


	<div id="regions">
		<div id="nav" class="clearfix">
			<div id="mexico-nav">
				<ul>
				<?php 
					$i = 1;
					foreach ( $elements as $key => $val ) {
						if ( $val[0]['region'] == 'Mexico' ) { ?>
							<li rel="region<?php echo $i; ?>"><?php echo replacer(ucwords($key)); ?></li>
				<?php		$i++; 
						}
					}
				?>
				</ul>
			</div>
			<div id="domrep-nav">
				<ul>
				<?php
					foreach ( $elements as $key => $val ) {
						if ( $val[0]['region'] == 'Dominican Republic' ) { ?>
							<li rel="region<?php echo $i; ?>"><?php echo replacer(ucwords($key)); ?></li>
				<?php		$i++; 
						}
					} 
				?>
				</ul>
			</div>
		</div>
		
		<div id="regions-container"> 
		
		<?php $i = 1; ?>
		<?php
			foreach ( $elements as $key => $val ) { 
				if ( $val[0]['region'] == 'Mexico' ) { 
		?>
				<div id="region<?php echo $i; ?>" class="region-content">
					
				<?php
					foreach ( $val as $hotel ) { 
						$hotel['imagename'] = explode(",", $hotel['imagename']);	//parse out image list
				?>

					<div class="offer">
						<div>
						
							<?php $j = rand() % 6;  $offer_image_class = "rotate".$j; ?>
							<span class="offer-image <?php echo $offer_image_class; ?>">
								<img src="<?php echo base_url(), 'system/assets/img/properties/', $hotel['imagename'][0]; ?>">
							</span>

							<span class="offer-content">
								<h2><?php echo replacer($hotel['hotelname']); ?></h2>
								<?php if ( $hotel['mealplan'] != '' ) { ?>
									<p><?php echo $hotel['mealplan']; ?></p>
								<?php } ?>
								<?php if ( $hotel['adultsonly'] != '' ) { ?>
									<p><em><?php echo "Adults Only"; ?></em></p>
								<?php } ?>
								<?php if ( $hotel['offerdetails'] != '' ) { ?>
									<p><?php echo "Offer Details: ".$hotel['offerdetails']; ?></p>
								<?php } ?>
								<?php if ( $hotel['bookingwindow'] != '' ) { ?>
									<p><?php echo "Booking Window: ".$hotel['bookingwindow']; ?></p>
								<?php } ?>
								<?php if ( $hotel['travelwindow'] != '' ) { ?>
									<p><?php echo "Travel Window: ".$hotel['travelwindow']; ?></p>
								<?php } ?>
							</span>	
							<div style="clear:both;"></div>
						</div>
							
							<?php if ( $hotel['restrictionscomments'] != '' ) { ?>
								<div class="toggle toggle-more">Learn More</div>
																	
								<div class="collapsible">
									<p><?php echo create_ul_custom($hotel['restrictionscomments']); ?></p>
								</div> <!-- .collapsible -->
							<?php } ?>
					</div><!-- .offer -->
				<?php 
					}
					$i++;
				?>
				</div>
			<?php
				}
			}
			?>
		<?php
			foreach ( $elements as $key => $val ) { 
				if ( $val[0]['region'] == 'Dominican Republic' ) { 
		?>
				<div id="region<?php echo $i; ?>" class="region-content">
					
				<?php
					foreach ( $val as $hotel ) { 
						$hotel['imagename'] = explode(",", $hotel['imagename']);	//parse out image list
				?>

					<div class="offer">
						<div>
						
							<?php $j = rand() % 6;  $offer_image_class = "rotate".$j; ?>
							<span class="offer-image <?php echo $offer_image_class; ?>">
								<img src="<?php echo base_url(), 'system/assets/img/properties/', $hotel['imagename'][0]; ?>">
							</span>

							<span class="offer-content">
								<h2><?php echo replacer($hotel['hotelname']); ?></h2>
								<?php if ( $hotel['mealplan'] != '' ) { ?>
									<p><?php echo $hotel['mealplan']; ?></p>
								<?php } ?>
								<?php if ( $hotel['adultsonly'] != '' ) { ?>
									<p><em><?php echo "Adults Only"; ?></em></p>
								<?php } ?>
								<?php if ( $hotel['offerdetails'] != '' ) { ?>
									<p><?php echo "Offer Details: ".$hotel['offerdetails']; ?></p>
								<?php } ?>
								<?php if ( $hotel['bookingwindow'] != '' ) { ?>
									<p><?php echo "Booking Window: ".$hotel['bookingwindow']; ?></p>
								<?php } ?>
								<?php if ( $hotel['travelwindow'] != '' ) { ?>
									<p><?php echo "Travel Window: ".$hotel['travelwindow']; ?></p>
								<?php } ?>
							</span>	
							<div style="clear:both;"></div>
						</div>
							
							<?php if ( $hotel['restrictionscomments'] != '' ) { ?>
								<div class="toggle toggle-more">Learn More</div>
																	
								<div class="collapsible">
									<p><?php echo create_ul_custom($hotel['restrictionscomments']); ?></p>
								</div> <!-- .collapsible -->
							<?php } ?>
					</div><!-- .offer -->
				<?php 
					}
					$i++;
				?>
				</div>
			<?php
				}
			}
			?>
					
		</div> <!-- .regions_container -->
		
		<!-- Back to top function -->
		<div id="back">
			<p id="back-top">
				<a href="#top"><span></span></a>
			</p>
		</div>
		
	 </div> <!-- #regions -->	

<?php include 'footer.php'; ?>