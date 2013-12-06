<?php include 'header.php'; ?>

	<div class="sixteen columns">
		<br>
	</div>

	<section class="brand sixteen columns clearfix">
		<div class="branding twelve columns alpha">
			<h3 class="fancy">Why Book With <?php echo $branding['agency']; ?></h3>
			<p><?php echo $branding['valueprop'] ?></p>
			<p><?php echo $branding['valueprop'] ?></p>
			<img src="<?php echo base_url(), 'assets/img/contacts_filler.jpg'; ?>" alt="contact filler image">
		</div>
	
		<div class="branding-fixed four columns omega">
				<?php include 'branding.php'; ?>
		</div>
	</section>
	
	<div class="sixteen columns">
		<hr />
	</div>
	
	<aside class="four columns">
		<div class="sidebar clearfix">
			<h3 class="fancy">Special Offers</h3>
			<?php 
				//sort $offers in the controller
				foreach ( $offers as $key => $val ) { 
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
			?>			
		</div>
	</aside>
	
	<section class="twelve columns">

		<div class="twelve columns alpha">
			<h4>Featured Properties</h4>
		</div>
		
		<div class="six columns alpha">
			<article class="supplier">
				<img src="<?php echo base_url(), 'assets/img/featured.jpg'; ?>" alt="AMResorts">
				<div class="content clearfix">
					<a href="<?php echo base_url(), 'supplier/1'; ?>">AMResorts</a>
					<p>Featured property copy here.</p>
					<a class="learn-more dark" href="<?php echo base_url(), 'supplier/1'; ?>">Learn more...</a>
				</div>
			</article>
			<article class="supplier">
				<img src="<?php echo base_url(), 'assets/img/featured.jpg'; ?>" alt="Hard Rock">
				<div class="content clearfix">
					<a href="<?php echo base_url(), 'supplier/2'; ?>">Hard Rock</a>
					<p>Featured property copy here.</p>
					<a class="learn-more dark" href="<?php echo base_url(), 'supplier/2'; ?>">Learn more...</a>
				</div>
			</article>
		</div>
		<div class="six columns omega">
			<article class="supplier">
				<img src="<?php echo base_url(), 'assets/img/featured.jpg'; ?>" alt="Palace Resorts &amp; Le Blanc">
				<div class="content clearfix">
					<a href="<?php echo base_url(), 'supplier/4'; ?>">Palace Resorts &amp; Le Blanc</a>
					<p>Featured property copy here.</p>
					<a class="learn-more dark" href="<?php echo base_url(), 'supplier/4'; ?>">Learn more...</a>
				</div>
			</article>
			<article class="supplier">
				<img src="<?php echo base_url(), 'assets/img/featured.jpg'; ?>" alt="RIU Hotels &amp; Resorts">
				<div class="content clearfix">
					<a href="<?php echo base_url(), 'supplier/3'; ?>">RIU Hotels &amp; Resorts</a>
					<p>Featured property copy here.</p>
					<a class="learn-more dark" href="<?php echo base_url(), 'supplier/3'; ?>">Learn more...</a>
				</div>
			</article>
		</div>
		
		<div class="twelve columns alpha">
			<hr />
		</div>		
		
		<div class="six columns alpha">
			<h4>Additional Properties</h4>
			<p>
				<a class="dark" href="<?php echo base_url(), 'supplier/5'; ?>">Bahia Principe Hotels &amp; Resorts</a>
				<br>
				<a class="dark" href="<?php echo base_url(), 'supplier/6'; ?>">Iberostar Hotesl &amp; Resorts</a>
			</p>
		</div>

		<div class="album-info six columns omega">
			<h5 class="three columns alpha"><a href="<?php echo base_url(), 'album'; ?>">Click Here</a> to visit our Wedding Album filled with beautiful beaches and Wedded Bliss from our clients!</h5>
			<div class="album-link three columns omega">
				<a href="<?php echo base_url(), "album"?>">
					<div class="album-container">
						<img src="<?php echo base_url(), 'assets/img/album_placeholder.png'; ?>" alt="Wedded Bliss - Wedded Album">
					</div>
				</a>
			</div>
		</div>
		
		<div class="twelve columns alpha">
			<hr />
		</div>
		
		<div class="twelve columns omega">
			<h3 class="fancy">Top 10 Reasons to book With A Travel Agency</h3>
		</div>
		<div class="top-ten-reasons six columns alpha">
			<ol>
				<li>You searched for the perfect honeymoon, and now know the name of every Caribbean island and Mexican beach. But how do you choose?</li>
				<li>The last time you booked a beach vacation online, that azure water view you counted down to turned into a concrete city view... of a parking garage.</li>
				<li>Flying toward the sun is the best direction in winter, but the weather may not agree. If your flight's cancelled or delayed, who will you call?</li>
				<li>After talking to that couple on their honeymoon, you know you want the same level of perks and VIP treatment on yours.</li>
				<li>You like adventure, veering off the beaten path... but it would have been good to know that this means an extra $3,000 just to eat, drink and play for a week</li>
			</ol>
		</div>
		<div class="top-ten-reasons six columns omega">
			<ol class="second">
				<li>That website didn’t happen to mention that the “peak season” dates you chose for your romantic getaway was because of school breaks... not the sunshine</li>
				<li>How about trading in 'the grind' for the grind of heavy machinery? A warning that your hotel was undergoing construction would have been swell.</li>
				<li>You thought 'deluxe' was a pretty common term across the globe. You learned the hard way that it's not. At all.</li>
				<li>You were so excited to get your vacation booked that you never got around to the miles of fine print on the bottom of the site. Oops - can't afford to make anny changes now! (Literally.)</li>
				<li>You wanted to snatch up that web deal before it expired and didn't think about 'details' like airport transfers, view, proximity to attractions, meals, taxes, activities,... the list goes on.</li>
			</ol>
		</div>
		
	</section>

<?php include 'footer.php'; ?>