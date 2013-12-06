<?php include 'header.php'; ?>

	<section class="slideshow sixteen columns">
		
		<div class="branding-box">
			<?php include 'branding.php'; ?>
		</div>
		
		<ul class="rslides" id="main_slideshow">
		<?php
		//scrape slideshow directory for images and generate slides.
		//relies on $supplier_index.
		$slides = glob('assets/img/slideshow/supplier/'.$supplier_index.'/*.{jpg,jpeg}', GLOB_BRACE);
		foreach ( $slides as $slide ) {
			$slide_info = pathinfo($slide);
		?>
			<li><a href="#"><img src="<?php echo base_url(), 'assets/img/slideshow/supplier/'.$supplier_index.'/'.$slide_info['basename']; ?>" alt="<?php echo $slide_info['filename']; ?>"></a></li>
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
			<h3 class="fancy"><?php echo replacer($supplier['name']); ?><br> Amenities Include</h3>
			<?php 
				$amenities = explode(',', $supplier['amenities']); 
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
		<div class="twelve columns alpha">
			<img src="<?php echo  base_url(), 'assets/img/', $supplier['logoimage']; ?>" alt="<?php echo replacer($supplier['name']); ?>">
			<h4><?php echo replacer($supplier['titlecopy']); ?></h4>
			<p><?php echo $supplier['bodycopy']; ?></p>
		</div>
		<div class="twelve columns alpha"><hr /></div>

		<div class="twelve columns alpha">
			<?php foreach ( $supplier_offers as $key => $val ) { ?>
				<div class="offer four columns">
					<h4><?php echo $val['title']; ?></h4>
					<h5><?php echo $val['subtitle']; ?></h5>
					<p><?php echo $val['copy']; ?></p>
					<span class="view-details">View Offer Details</span>
					<div class="collapsible">
						<p><?php echo $val['details']; ?></p>
					</div>
				</div>
			<?php } ?>
		</div>
		
		<div class="twelve columns">
			

			<?php				
				for ( $i = 0; $i < count($supplier_properties); $i++ ) { 
					extract($supplier_properties[$i]);
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
				
			<?php 	if ( $i >= (count($supplier_properties)-1) ) { ?>
						</div>
			<?php	}
				} ?>			
		</div>
		
	</section>

<?php include 'footer.php'; ?>