<?php include 'header.php'; ?>

	<section class="slideshow sixteen columns">
		
		<div class="branding-box">
			<?php include 'branding.php'; ?>
		</div>
		
		<ul class="rslides" id="main_slideshow">
		<?php
		//scrape slideshow directory for images and generate slides.
		//relies on $supplier_index.
		$slides = glob('assets/img/slideshow/landing_page/*.{jpg,jpeg}', GLOB_BRACE);
		foreach ( $slides as $slide ) {
			$slide_info = pathinfo($slide);
		?>
			<li><a href="#"><img src="<?php echo base_url(), 'assets/img/slideshow/landing_page/'.$slide_info['basename']; ?>" alt="<?php echo $slide_info['filename']; ?>"></a></li>
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
				<li>There’s no chance of the caterer not showing up. &raquo;</li>
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
			<p><?php echo $branding['valueprop']; ?></p>
		</div>
		<div class="twelve columns alpha"><hr /></div>

		<div class="six columns alpha">
			<h4>Booking your Wedding in MEXICO</h4>
			<p>Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas. Dramatically maintain clicks-and-mortar solutions without functional solutions.</p>
			<a class="learn-more dark" href="<?php echo base_url(), 'destination/caribbean'; ?>">Learn more...</a>
		</div>
		
		<div class="six columns omega">
			<h4>Booking your Wedding in THE CARIBBEAN</h4>
			<p>Completely synergize resource sucking relationships via premier niche markets. Professionally cultivate one-to-one customer service with robust ideas. Dynamically innovate resource-leveling customer service for state of the art customer service.</p>
			<a class="learn-more dark" href="<?php echo base_url(), 'destination/caribbean'; ?>">Learn more...</a>
		</div>

		<div class="twelve columns alpha">
			<hr />
			<h4>Featured Properties</h4>
		</div>
		
		<div class="six columns alpha">
			<article class="supplier">
				<a href="<?php echo base_url(), 'supplier/1'; ?>">
					<img src="<?php echo base_url(), 'assets/img/featured.jpg'; ?>" alt="AMResorts">
				</a>
				<div class="content clearfix">
					<a href="<?php echo base_url(), 'supplier/1'; ?>">AMResorts</a>
					<p>Featured property copy here.</p>
					<a class="learn-more dark" href="<?php echo base_url(), 'supplier/1'; ?>">Learn more...</a>
				</div>
			</article>
			<article class="supplier">
				<a href="<?php echo base_url(), 'supplier/2'; ?>">
					<img src="<?php echo base_url(), 'assets/img/featured.jpg'; ?>" alt="Hard Rock">
				</a>
				<div class="content clearfix">
					<a href="<?php echo base_url(), 'supplier/2'; ?>">Hard Rock</a>
					<p>Featured property copy here.</p>
					<a class="learn-more dark" href="<?php echo base_url(), 'supplier/2'; ?>">Learn more...</a>
				</div>
			</article>
		</div>
		<div class="six columns omega">
			<article class="supplier">
				<a href="<?php echo base_url(), 'supplier/4'; ?>">
					<img src="<?php echo base_url(), 'assets/img/featured.jpg'; ?>" alt="Palace Resorts &amp; Le Blanc">
				</a>
				<div class="content clearfix">
					<a href="<?php echo base_url(), 'supplier/4'; ?>">Palace Resorts &amp; Le Blanc</a>
					<p>Featured property copy here.</p>
					<a class="learn-more dark" href="<?php echo base_url(), 'supplier/4'; ?>">Learn more...</a>
				</div>
			</article>
			<article class="supplier">
				<a href="<?php echo base_url(), 'supplier/3'; ?>">
					<img src="<?php echo base_url(), 'assets/img/featured.jpg'; ?>" alt="RIU Hotels &amp; Resorts">
				</a>
				<div class="content clearfix">
					<a href="<?php echo base_url(), 'supplier/3'; ?>">RIU Hotels &amp; Resorts</a>
					<p>Featured property copy here.</p>
					<a class="learn-more dark" href="<?php echo base_url(), 'supplier/3'; ?>">Learn more...</a>
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
				<a class="dark" href="<?php echo base_url(), 'supplier/6'; ?>">Iberostar Hotesl &amp; Resorts</a>
			</p>
		</div>
		
	</section>

<?php include 'footer.php'; ?>