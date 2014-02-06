<?php include 'header.php'; ?>

	<section class="slideshow sixteen columns">
		
		<div class="branding-box">
			<?php include 'branding.php'; ?>
		</div>
		
		<ul class="rslides" id="main_slideshow">
		<?php
		//scrape slideshow directory for images and generate slides.
		//relies on $supplier_index.
		$slides = glob('assets/img/slideshow/landing_page/*.jpg');
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
	
	<div class="branding-fixed white sixteen columns">
		<?php include 'branding.php'; ?>
	</div>
	
	<aside class="four columns">
		<div class="sidebar">
			<h4>Top 10</h4>
			<h5>Reasons to book a Mexico or Caribbean Destination Wedding and Honeymoon</h5>
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
		<div class="twelve columns alpha">
			<h3 class="fancy">Why Book With <?php echo $branding['agency']; ?>?</h3>
			<?php if ( !empty($branding['valueprop']) ) { ?>
				<p><?php echo replacer($branding['valueprop']); ?></p>
			<?php } else { ?>
				<p>Perhaps you met by fate—or maybe it was just luck. However your story began, you don’t want to leave your special day to chance. Instead, leave it to us. Book your destination wedding or honeymoon with a trusted, experienced travel agency, and know that your dream is in capable, caring hands.</p>

				<p>As specialists in destination weddings and honeymoons, we know what it takes to create the experience of a lifetime from top to bottom. We can guide you to the property that’s the right fit for you or your group, help you select the packages that best meet your needs, and guide you through every step of the way, from answering your questions from an insider perspective to handling the unexpected. We’ll make sure that the details are taken care of before you’ve even had to think about them, from arranging transfers to securing the VIP treatment you deserve.</p>

				<p>Your wedding and honeymoon are the first steps toward a beautiful new life together. Let us help you take those steps with confidence.</p>
			<?php } ?>
		</div>
		<div class="twelve columns alpha"><hr /></div>

		<div class="six columns alpha">
			<h4>Booking your Wedding or Honeymoon in MEXICO</h4>
			<p>The rich land... The dreamy landscape... The warmth of its people... The past and the present in perfect harmony... This is Mexico. The world-renowned, tranquil beaches, colonial architecture and luminous seascapes create the perfect setting for a destination wedding, vow renewal or honeymoon alike.</p>
			<a class="learn-more dark" href="<?php echo base_url(), 'destination/mexico'; ?>">Learn more...</a>
		</div>
		
		<div class="six columns omega">
			<h4>Booking your Wedding or Honeymoon in THE CARIBBEAN</h4>
			<p>Whether you are looking for intimate seclusion or a full celebration, the islands of the Caribbean offer the perfect setting for your wedding, honeymoon or both. From busy to mellow, the Caribbean has something to offer every couple.</p>
			<a class="learn-more dark" href="<?php echo base_url(), 'destination/caribbean'; ?>">Learn more...</a>
		</div>

		<div class="twelve columns alpha">
			<hr />
			<h4>Featured Properties</h4>
		</div>
		
		<div class="six columns alpha">
			<article class="supplier">
				<a href="<?php echo base_url(), 'supplier/1'; ?>">
					<img src="<?php echo base_url(), 'assets/img/featured_amresorts.jpg'; ?>" alt="AMResorts">
				</a>
				<div class="content clearfix">
					<a href="<?php echo base_url(), 'supplier/1'; ?>">AMResorts</a>
					<p>Discover Zoetry Wellness & Spa Resorts, Breathless, Secrets, Dreams Now and Sunscape Resorts & Spas</p>
					<a class="learn-more dark" href="<?php echo base_url(), 'supplier/1'; ?>">Learn more...</a>
				</div>
			</article>
			<article class="supplier">
				<a href="<?php echo base_url(), 'supplier/2'; ?>">
					<img src="<?php echo base_url(), 'assets/img/featured_hardrock.jpg'; ?>" alt="All-Inclusive Hard Rock Hotels ">
				</a>
				<div class="content clearfix">
					<a href="<?php echo base_url(), 'supplier/2'; ?>">All-Inclusive Hard Rock Hotels </a>
					<p>Celebrate your love at a killer all-inclusive Hard Rock Resort</p>
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
			<h4>Additional Properties</h4>
		</div>
		
		<div class="twelve columns alpha">			
			<p>
				<a class="dark" href="<?php echo base_url(), 'supplier/5'; ?>">Bahia Principe Hotels &amp; Resorts</a>
				<br>
				<a class="dark" href="<?php echo base_url(), 'supplier/6'; ?>">IBEROSTAR Hotels & Resorts</a>
			</p>
		</div>
		
	</section>

<?php include 'footer.php'; ?>