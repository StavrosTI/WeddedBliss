<?php include 'header.php'; ?>

	<section class="slideshow sixteen columns">
		
		<div class="branding-box">
			<?php include 'branding.php'; ?>
		</div>
		
		<ul class="rslides" id="main_slideshow">
		<?php
		//scrape slideshow directory for images and generate slides.
		//relies on $supplier_index.
		$slides = glob('assets/img/slideshow/supplier/'.$supplier_index.'/*.jpg');
		foreach ( $slides as $slide ) {
			//$slide_info = pathinfo($slide);
		?>
			<li><a href="#"><img src="<?php echo base_url(), $slide; ?>" alt="<?php echo $slide; ?>"></a></li>
		<?php
		}
		?>
		</ul>
		
	</section>
	
	<div class="sixteen columns">
		<br />
		<br />
	</div>
	
	<aside class="four columns">
		<div class="sidebar">
			<h3 class="fancy">Packages Include</h3>
			<?php 
				$amenities = explode('|', $supplier['amenities']); 
				foreach ( $amenities as $key => $val ) {
			?>
				<div class="amenity">
			<?php echo replacer($val), "<br>"; ?>
				</div>
			<?php
				}
			?>
			
			<div class="album-info">
				<h5>Click below to visit our Wedding Album filled with beautiful beaches and Wedded Bliss from our clients!</h5>
				<div class="album-link">
					<a href="<?php echo base_url(), "album"?>">
						<img src="<?php echo base_url(), 'assets/img/album_placeholder.png'; ?>" alt="Wedded Bliss - Wedded Album">
					</a>
				</div>
			</div>
		</div>
	</aside>
	
	<section class="twelve columns">
		<div id="supplier_info" class="twelve columns alpha">
			<img class="supplier_logo" src="<?php echo  base_url(), 'assets/img/suppliers/', $supplier['logoimage']; ?>" alt="<?php echo replacer($supplier['name']); ?>">
			<!--h4 class="supplier_title"><?php echo replacer($supplier['titlecopy']); ?></h4-->
			<p class="supplier_copy"><?php echo replacer($supplier['bodycopy']); ?></p>
		</div>
		<div class="twelve columns alpha"><hr /></div>

		<!-- Hiding offers section for now -->
		<!--div class="twelve columns alpha">
			<?php
				for ( $i = 0; $i < count($supplier_offers); $i++ ) { 
					extract($supplier_offers[$i]);
					if ( $i > 0 && $i % 3 == 0 ) { ?>
						</div>
			<?php	}
					if ( $i == 0 || ( $i > 0 && $i % 3 == 0 ) ) { ?>
						<div class="row">
			<?php 	} ?>
				<div class="offer supplier four columns alpha">
					<h4><?php echo $title; ?></h4>
					<h5><?php echo $subtitle; ?></h5>
					<p><?php echo $copy; ?></p>
					<span class="details view-details">View Offer Details</span>
					<div class="collapsible">
						<p><?php echo $details; ?></p>
					</div>
				</div>
			<?php 	if ( $i >= (count($supplier_offers)-1) ) { ?>
						</div>
			<?php	}
				} ?>
		</div-->
		
		<?php 
			ksort($supplier_properties);	//alpha order
			
			//Custom sorting.  Business owner requested specific subregion display order.
			$full_array = $supplier_properties;
			$array1 = $array2 = array();
			if ( array_key_exists('Cancun', $full_array) ) { 
				$array1['Cancun'] = $full_array['Cancun']; }
			if ( array_key_exists('Cancun South', $full_array) ) { 
				$array1['Cancun South'] = $full_array['Cancun South']; }
			if ( array_key_exists('Riviera Maya', $full_array) ) { 
				$array1['Riviera Maya'] = $full_array['Riviera Maya']; }
			if ( array_key_exists('Puerto Vallarta', $full_array) ) { 
				$array2['Puerto Vallarta'] = $full_array['Puerto Vallarta']; }
			if ( array_key_exists('Riviera Nayarit', $full_array) ) { 
				$array2['Riviera Nayarit'] = $full_array['Riviera Nayarit']; }
			unset(	$full_array['Cancun'], 
					$full_array['Cancun South'], 
					$full_array['Riviera Maya'],
					$full_array['Puerto Vallarta'],
					$full_array['Riviera Nayarit'] );
			
			$full_array_sorted = array();
			foreach ( $full_array as $key => $val ) {
				if ( strcasecmp('Cancun', $key) > 0 ) {
					$full_array_sorted[$key] = $val;
				} else {
					$full_array_sorted = array_merge($full_array_sorted, $array1);
					$full_array_sorted[$key] = $val;
				}
				if ( strcasecmp('Puerto Vallarta', $key) > 0 ) {
					$full_array_sorted[$key] = $val;
				} else {
					$full_array_sorted[$key] = $val;
					$full_array_sorted = array_merge($full_array_sorted, $array2);
				}
			}
			$supplier_properties = $full_array_sorted;
			
			foreach ( $supplier_properties as $key => $val ) { 
		?>		
		<div class="twelve columns">
			<h4><?php echo $key; ?></h4>
			
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
									<p class="property-name"><?php echo replacer($hotel); ?></p>
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