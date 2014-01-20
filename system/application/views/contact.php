<?php include 'header.php'; ?>

	<div class="sixteen columns">
		<br>
	</div>

	<section class="brand sixteen columns clearfix">
		<div class="branding twelve columns alpha">
			<h3 class="fancy">Why Book With <?php echo replacer($branding['agency']); ?></h3>
			<?php if ( !empty($branding['valueprop']) ) { ?>
				<p><?php echo $branding['valueprop']; ?></p>
			<?php } else { ?>
				<p>Perhaps you met by fate—or maybe it was just luck. However your story began, you don’t want to leave your special day to chance. Instead, leave it to us. Book your destination wedding or honeymoon with a trusted, experienced travel agency, and know that your dream is in capable, caring hands.</p>

				<p>As specialists in destination weddings and honeymoons, we know what it takes to create the experience of a lifetime from top to bottom. We can guide you to the property that’s the right fit for you or your group, help you select the packages that best meet your needs, and guide you through every step of the way, from answering your questions from an insider perspective to handling the unexpected. We’ll make sure that the details are taken care of before you’ve even had to think about them, from arranging transfers to securing the VIP treatment you deserve.</p>

				<p>Your wedding and honeymoon are the first steps toward a beautiful new life together. Let us help you take those steps with confidence.</p>
			<?php } ?>
			<img src="<?php echo base_url(), 'assets/img/contacts_filler.jpg'; ?>" alt="contact filler image">
		</div>
	
		<div class="branding-fixed contact four columns omega">
				<?php include 'branding.php'; ?>
		</div>
	</section>
	
	<div class="sixteen columns">
		<hr />
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
			<h5>Reasons to book your next honeymoon or destination wedding with <span class="supplier_name">
			<?php echo replacer($branding['agency']); ?>.</span></h3>
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
	
	<section class="twelve columns">

		<div class="twelve columns alpha">
			<h4>Featured Properties</h4>
		</div>
		
		<div class="six columns alpha">
			<article class="supplier">
				<a href="<?php echo base_url(), 'supplier/1'; ?>">
					<img src="<?php echo base_url(), 'assets/img/featured_amresorts.jpg'; ?>" alt="AMResorts">
				</a>
				<div class="content clearfix">
					<a href="<?php echo base_url(), 'supplier/1'; ?>">AMResorts</a>
					<p>Discover AMResorts<br><br></p>
					<a class="learn-more dark" href="<?php echo base_url(), 'supplier/1'; ?>">Learn more...</a>
				</div>
			</article>
			<article class="supplier">
				<a href="<?php echo base_url(), 'supplier/2'; ?>">
					<img src="<?php echo base_url(), 'assets/img/featured_hardrock.jpg'; ?>" alt="All-Inclusive Hard Rock Hotels ">
				</a>
				<div class="content clearfix">
					<a href="<?php echo base_url(), 'supplier/2'; ?>">All-Inclusive Hard Rock Hotels </a>
					<p>Celebrate your love at a killer all-inclusive HardRock Resort</p>
					<a class="learn-more dark" href="<?php echo base_url(), 'supplier/2'; ?>">Learn more...</a>
				</div>
			</article>
		</div>
		<div class="six columns omega">
			<article class="supplier">
				<a href="<?php echo base_url(), 'supplier/3'; ?>">
					<img src="<?php echo base_url(), 'assets/img/featured_palaceleblanc.jpg'; ?>" alt="Palace Resorts &amp; Le Blanc Spa Resort">
				</a>
				<div class="content clearfix">
					<a href="<?php echo base_url(), 'supplier/3'; ?>">Palace Resorts &amp; Le Blanc Spa Resort</a>
					<p>Live in awe at Palace Resorts<br>
					Pleasure in every sense at Le Blanc Spa Resort</p>
					<a class="learn-more dark" href="<?php echo base_url(), 'supplier/3'; ?>">Learn more...</a>
				</div>
			</article>
			<article class="supplier">
				<a href="<?php echo base_url(), 'supplier/4'; ?>">
					<img src="<?php echo base_url(), 'assets/img/featured_riu.jpg'; ?>" alt="RIU Hotels &amp; Resorts">
				</a>
				<div class="content clearfix">
					<a href="<?php echo base_url(), 'supplier/4'; ?>">RIU Hotels &amp; Resorts</a>
					<p>Experience RIU Hotels &amp; Resorts</p>
					<a class="learn-more dark" href="<?php echo base_url(), 'supplier/4'; ?>">Learn more...</a>
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
		
	<!-- Commenting out secondary top ten -->
	<!--
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
	-->
		
	</section>

<?php include 'footer.php'; ?>