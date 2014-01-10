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
	
<!-- Old Sidebar - Offers -->
	<!--aside class="four columns">
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
							<span class="details view-details">View Offer Details</span>
							<div class="collapsible">
								<p><?php echo $val['details']; ?></p>
							</div>
						</div>
			<?php
					} 
				}
			?>
		</div>
	</aside-->

	<aside class="four columns">
		<div class="sidebar">
			<h4>Top 10</h4>
			<h5>Reasons to book a <?php echo ucfirst($destination); ?> Destination Wedding and Honeymoon</h5>
			<ol>
				<li class="toggle-link">Getting married in paradise has a pleasantly surprising price tag. &raquo;</li>
					<div class="toggle-content">
						It’s not nearly as costly as people think. In fact, with all-inclusive rates and destination wedding packages, an elegant beachfront wedding can be more affordable than a hometown bash!
					</div> <!-- .toggle-content -->
				<li class="toggle-link">You can’t beat the backdrop. &raquo;</li>
					<div class="toggle-content">
						Verdant, manicured gardens; glistening turquoise waters; sparkling white-sand beaches. Make Mexico or the Caribbean your venue and the photo magic just happens.
					</div> <!-- .toggle-content -->
				<li class="toggle-link">There’s plenty of room for everyone. &raquo;</li>
					<div class="toggle-content">
						Couch surfers, faraway friends and out-of-town relatives all get a room to call their own. Most importantly, you’ll get to keep your suite all to yourself.
					</div> <!-- .toggle-content -->
				<li class="toggle-link">The word "jitters" will never even enter your mind. &raquo;</li>
					<div class="toggle-content">
						There’s no room for nerves or stress when you have world-class spas right downstairs. Unrivaled pampering with the crash of waves as your background music? Serenity now.
					</div> <!-- .toggle-content -->
				<li class="toggle-link">There’s no chance of the caterer not showing up. &raquo;</li>
					<div class="toggle-content">
						With so many incredible on-site gourmet restaurants on every resort in Mexico and the Caribbean, the only thing you have to worry about is nothing at all.
					</div> <!-- .toggle-content -->
				<li class="toggle-link">Your guests won’t be the only ones making new friends. &raquo;</li>
					<div class="toggle-content">
						Part of the fun is finally bringing all of your friends and family together… some for the first time! With a destination wedding, you’ll get to know new faces, too—warm, hospitable ones who care about your special day.
					</div> <!-- .toggle-content -->
				<li class="toggle-link">Type A or B, the options are endless. &raquo;</li>
					<div class="toggle-content">
						It’s up to you whether you want to chill out or go full speed. Or choose both! With included activities, on-premise spas, amazing dining and awesome tours, every day opens up new possibilities.
					</div> <!-- .toggle-content -->
				<li class="toggle-link">Touring together brings bonding to a whole new level. &raquo;</li>
					<div class="toggle-content">
						Share once-in-a-lifetime experiences and make memories no one will ever forget with exciting tour offerings. Nothing brings people together like love, laughter and a bit of adventure.
					</div> <!-- .toggle-content -->
				<li class="toggle-link">The memories made at your wedding will be totally unique. &raquo;</li>
					<div class="toggle-content">
						Destination weddings in Mexico and the Caribbean bring a special flavor and authentic charm that are unrivaled and unduplicated anywhere else. Your wedding will truly be yours.
					</div> <!-- .toggle-content -->
				<li class="toggle-link">The resorts think of everything. Literally. &raquo;</li>
					<div class="toggle-content">
						The beauty of an all-inclusive? Everything is really included! With domestic venues, taxes are all you get in a bundle, but at a resort, the drinks flow, the fun goes all night, and the tab is already taken care of.
					</div> <!-- .toggle-content -->
			</ol>
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
					 The rich land…The dreamy landscape…The warmth of its people…The past and the present in perfect harmony…This is Mexico. The world-renowned, tranquil beaches , colonial architecture and luminous seascapes create the perfect setting for a destination wedding, vow renewal or honeymoon alike. The venue options are plentiful, ranging from quaint and casual to over the top sophistication. No wonder Mexico is ranked as one of the top 5 most popular destinations for weddings in paradise.</p>
					 
					 <p>It is one of the only places where you can find spectacular archeological sites and colonial cities that tell stories of glory and tradition. Unmatched landscapes, varied and exotic dishes, and the genius of Mexican craftsmanship all contribute to the wonder of this beautiful country. Mexico is a land of contrast, tradition, culture and fun, all at an excellent price and first class comfort.
				<?php } else { ?>
					Whether you are looking for intimate seclusion or a full celebration, the islands of the Caribbean offer the perfect setting for your wedding, honeymoon or both. From busy to mellow, the Caribbean has something to offer every couple. Not only is the warm weather perfect, but the travel time in minimal since the Caribbean is so close to home. This wonderland is overflowing with romance, adventure, discovery and awe blended with the modern rhythms and luxurious amenities of today.
				<?php } ?>
			</p>
		</div>
		
		<div class="twelve columns"><hr /></div>

		<?php
			$dest = ucfirst($destination);	//correct key case
			ksort($properties[$dest]);	//alpha order
			
			//Custom sorting.  Business owner requested specific subregion display order.
			if ( $destination == "mexico" ) {
				$full_array = $properties[$dest];
				$array1['Cancun'] = $full_array['Cancun'];
				$array1['Cancun South'] = $full_array['Cancun South'];
				$array1['Riviera Maya'] = $full_array['Riviera Maya'];
				$array2['Puerto Vallarta'] = $full_array['Puerto Vallarta'];
				$array2['Riviera Nayarit'] = $full_array['Riviera Nayarit'];			
				unset($full_array['Cancun']);
				unset($full_array['Cancun South']);
				unset($full_array['Riviera Maya']);
				unset($full_array['Puerto Vallarta']);
				unset($full_array['Riviera Nayarit']);
				
				$full_array_sorted = array(); 
				$i = 0;
				foreach ( $full_array as $key => $val ) {
					$i++;
					if ( strcasecmp('Cancun', $key) > 0 ) {
						$full_array_sorted[$key] = $val;
					} else {
						$full_array_sorted = array_merge($full_array_sorted, $array1);
						$full_array_sorted[$key] = $val;
					}
					if ( strcasecmp('Puerto Vallarta', $key) > 0 && $i != count($full_array)) {
						$full_array_sorted[$key] = $val;
					} else {
						$full_array_sorted[$key] = $val;
						$full_array_sorted = array_merge($full_array_sorted, $array2);
					}
				}
				$properties[$dest] = $full_array_sorted;
			}
			
			foreach ( $properties[$dest] as $key => $val ) { 
		?>
		<div class="twelve columns">
			<h4><?php echo $key; ?></h4>
			<p><?php echo $val[0]['subregiondetails']; ?></p>
		
			<?php
				usort($val, 'cmp');	//Sort by hotel name, alpha order
				$filler_spots = (count($val)%3-3)*-1;	//not used
				
				for ( $i = 0; $i < count($val); $i++ ) { 
					extract($val[$i]);
					$iter_rem = $i % 3;
					if ( $iter_rem == 0 ) { $colSpacing = "alpha"; } 
					elseif ( $iter_rem == 1 ) { $colSpacing = ""; } 
					elseif ( $iter_rem == 2 ) { $colSpacing = "omega"; } 
					if ( $i > 0 && $i % 3 == 0 ) { ?>
						</div>
			<?php	}
					if ( $i == 0 || ( $i > 0 && $i % 3 == 0 ) ) { ?>
						<div class="row">
			<?php 	} ?>
							<article class="property four columns <?php echo $colSpacing; ?> clearfix">
								<?php $destCode = substr($code, 0, 3); $hotelCode = substr($code, 3, 3); ?>
								<img src="<?php echo base_url(), 'assets/img/properties/'. $destCode . "_" . $hotelCode . ".jpg"; ?>" alt="<?php echo $hotel; ?>">
								<div class="property-details four columns alpha">
									<p class="property-name"><?php echo replacer($hotel); ?></a>
									<?php if ( !empty($copy1) ) { ?>
										<p><?php echo $copy1; ?></p>
									<?php } ?>
									<?php if ( !empty($copy2) ) { ?>
										<p><?php echo $copy2; ?></p>
									<?php } ?>
									
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