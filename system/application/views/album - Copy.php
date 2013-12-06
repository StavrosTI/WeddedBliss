<?php include 'header.php'; ?>

  <div class="book_wrapper"> 
    <a id="next_page_button" onclick="_gaq.push(['_trackEvent', 'Photo Album', 'Scroll Right', '<% Response.Write(agencyName); %>']);"></a>
    <a id="prev_page_button" onclick="_gaq.push(['_trackEvent', 'Photo Album', 'Scroll Left', '<% Response.Write(agencyName); %>']);"></a>
    <div id="loading" class="loading"> Loading pages...</div>
    <div id="mybook" style="display: none;">
      <div class="b-load">
        <div>
            <img alt="" class="albumFormat" style="z-index:1;" src="<?php echo base_url(), 'assets/img/album/left_bg.jpg'; ?>">
        </div>
        <div>
            <span id="albumTitle" runat="server"></span>
            <img alt="" class="albumFormat" style="z-index:1;" src="<?php echo base_url(), 'assets/img/album/inside_cover.jpg'; ?>">
        </div>
        <div>
          <div class="TIalbum">
            <p style="font-size: 13px;"><span style="font-size: 56px; margin-right:-11px; margin-left:-7px; color: #7b2682;">W</span>ith all of the stresses of a modern day wedding, it is no wonder that destination weddings are on the rise. The Caribbean and Mexico are among the top choices for destination weddings, vow renewals and honeymoons. Imagine saying your “I do’s” on white sand beaches with an unbeatable tropical backdrop. These spots offer a cost-effective, stress free option for the start of your lifelong adventure.</p>
          </div>
        </div>
        <div> <img alt="" class="albumFormat" src="<?php echo base_url(), 'assets/img/album/excellence/excellence1.jpg'; ?>"> </div>
        <div> <img alt="" class="albumFormat" src="<?php echo base_url(), 'assets/img/album/excellence/excellence2.jpg'; ?>"></div>
        <div> <img alt="" class="albumFormat" src="<?php echo base_url(), 'assets/img/album/excellence/excellence3.jpg'; ?>"> </div>
        <div> <img alt="" class="albumFormat" src="<?php echo base_url(), 'assets/img/album/excellence/excellence4.jpg'; ?>"> </div>
        <div> <img alt="" class="albumFormat" src="<?php echo base_url(), 'assets/img/album/hardrock/hardrock1.jpg'; ?>"> </div>
        <div> <img alt="" class="albumFormat" src="<?php echo base_url(), 'assets/img/album/hardrock/hardrock2.jpg'; ?>"> </div>
        <div> <img alt="" class="albumFormat" src="<?php echo base_url(), 'assets/img/album/hardrock/hardrock3.jpg'; ?>"> </div>
        <div> <img alt="" class="albumFormat" src="<?php echo base_url(), 'assets/img/album/hardrock/hardrock4b.jpg'; ?>"> </div>
        <div> <img alt="" class="albumFormat" src="<?php echo base_url(), 'assets/img/album/karisma/karisma1.jpg'; ?>"> </div>
        <div> <img alt="" class="albumFormat" src="<?php echo base_url(), 'assets/img/album/karisma/karisma2.jpg'; ?>"> </div>
        <div> <img alt="" class="albumFormat" src="<?php echo base_url(), 'assets/img/album/karisma/karisma3.jpg'; ?>"> </div>
        <div> <img alt="" class="albumFormat" src="<?php echo base_url(), 'assets/img/album/karisma/karisma4.jpg'; ?>"> </div>
        <div> <img alt="" class="albumFormat" src="<?php echo base_url(), 'assets/img/album/palace/palace1.jpg'; ?>"> </div>
        <div> <img alt="" class="albumFormat" src="<?php echo base_url(), 'assets/img/album/palace/palace2.jpg'; ?>"> </div>
        <div> <img alt="" class="albumFormat" src="<?php echo base_url(), 'assets/img/album/palace/palace3.jpg'; ?>"> </div>
        <div> <img alt="" class="albumFormat" src="<?php echo base_url(), 'assets/img/album/palace/palace4b.jpg'; ?>"> </div>
        <div> <img alt="" class="albumFormat" src="<?php echo base_url(), 'assets/img/album/velas/velas1.jpg'; ?>"> </div>
        <div> <img alt="" class="albumFormat" src="<?php echo base_url(), 'assets/img/album/velas/velas2.jpg'; ?>"> </div>
        <div> <img alt="" class="albumFormat" src="<?php echo base_url(), 'assets/img/album/velas/velas3.jpg'; ?>"> </div>
        <div> <img alt="" class="albumFormat" src="<?php echo base_url(), 'assets/img/album/velas/velas4.jpg'; ?>"> </div>
        <div> <img alt="" class="albumFormat" src="<?php echo base_url(), 'assets/img/album/Bahia/Bahia1.jpg'; ?>"> </div>
        <div> <img alt="" class="albumFormat" src="<?php echo base_url(), 'assets/img/album/Bahia/Bahia2.jpg'; ?>"> </div>
        <div> <img alt="" class="albumFormat" src="<?php echo base_url(), 'assets/img/album/RIU/RIU1.jpg'; ?>"> </div>
        <div> <img alt="" class="albumFormat" src="<?php echo base_url(), 'assets/img/album/RIU/RIU2.jpg'; ?>"> </div>
        <div> <img alt="" class="albumFormat" src="<?php echo base_url(), 'assets/img/album/Barcelo/Barcelo1.jpg'; ?>"> </div>
        <div> <img alt="" class="albumFormat" src="<?php echo base_url(), 'assets/img/album/Barcelo/Barcelo2.jpg'; ?>"> </div>
        <div> <img alt="" class="albumFormat" src="<?php echo base_url(), 'assets/img/album/Palladium/Palladium1.jpg'; ?>"> </div>
        <div> <img alt="" class="albumFormat" src="<?php echo base_url(), 'assets/img/album/Palladium/Palladium2.jpg'; ?>"> </div>
        <div> <img alt="" class="albumFormat" src="<?php echo base_url(), 'assets/img/album/Real/Real1.jpg'; ?>"> </div>
        <div> <img alt="" class="albumFormat" src="<?php echo base_url(), 'assets/img/album/Real/Real2.jpg'; ?>"> </div>
        <div class="TIalbum" >
            <p style="text-align: center;"><span style="font-size: 22px; margin-right:-11px; margin-left:-7px; color: #7b2682;">Find your own 'Wedded Bliss'</span><br /><br />
            Mark this important milestone with the destination wedding of a lifetime and a honeymoon you’ll never forget. Contact your travel agent today to get on your way to Wedded Bliss.</p>  
        </div>
           
      </div>
    </div>
  </div>
		
<div class="branding-box">
	<?php include 'branding.php'; ?>
</div>

  <script type="text/javascript">
        $(function () {
            var $mybook = $('#mybook');
            var $bttn_next = $('#next_page_button');
            var $bttn_prev = $('#prev_page_button');
            var $loading = $('#loading');
            var $mybook_images = $mybook.find('img');
            var cnt_images = $mybook_images.length;
            var loaded = 0;
            //preload all the images in the book,
            //and then call the booklet plugin

            $mybook_images.each(function () {
                var $img = $(this);
                var source = $img.attr('src');
                $('<img/>').load(function () {
                    ++loaded;
                    if (loaded == cnt_images) {
                        $loading.hide();
                        $bttn_next.show();
                        $bttn_prev.show();
                        $mybook.show().booklet({
                            name: null,                             // name of the booklet to display in the document title bar
                            width: 800,                             // container width
                            height: 500,                            // container height
                            speed: 700,                             // speed of the transition between pages
                            direction: 'LTR',                       // direction of the overall content organization, default LTR, left to right, can be RTL for languages which read right to left
                            startingPage: 0,                        // index of the first page to be displayed
                            easing: 'easeInOutQuad',                // easing method for complete transition
                            easeIn: 'easeInQuad',                   // easing method for first half of transition
                            easeOut: 'easeOutQuad',                 // easing method for second half of transition

                            closed: false,                           // start with the book "closed", will add empty pages to beginning and end of book
                            closedFrontTitle: null,                 // used with "closed", "menu" and "pageSelector", determines title of blank starting page
                            closedFrontChapter: null,               // used with "closed", "menu" and "chapterSelector", determines chapter name of blank starting page
                            closedBackTitle: null,                  // used with "closed", "menu" and "pageSelector", determines chapter name of blank ending page
                            closedBackChapter: null,                // used with "closed", "menu" and "chapterSelector", determines chapter name of blank ending page
                            covers: false,                           // used with "closed", makes first and last pages into covers, without page numbers (if enabled)
                            autoCenter: false,                      // for centering the album on first page.  Does not work with the custom background used here.

                            pagePadding: 10,                        // padding for each page wrapper
                            pageNumbers: false,                     // display page numbers on each page

                            hovers: true,                           // enables preview pageturn hover animation, shows a small preview of previous or next page on hover
                            overlays: false,                        // enables navigation using a page sized overlay, when enabled links inside the content will not be clickable
                            tabs: false,                            // adds tabs along the top of the pages
                            tabWidth: 60,                           // set the width of the tabs
                            tabHeight: 20,                          // set the height of the tabs
                            arrows: false,                          // adds arrows overlayed over the book edges
                            cursor: 'pointer',                      // cursor css setting for side bar areas

                            hash: false,                            // enables navigation using a hash string, ex: #/page/1 for page 1, will affect all booklets with 'hash' enabled
                            keyboard: true,                         // enables navigation with arrow keys (left: previous, right: next)
                            next: $bttn_next,          			    // selector for element to use as click trigger for next page
                            prev: $bttn_prev,          			    // selector for element to use as click trigger for previous page

                            menu: null,                             // selector for element to use as the menu area, required for 'pageSelector'
                            pageSelector: false,                    // enables navigation with a dropdown menu of pages, requires 'menu'
                            chapterSelector: false,                 // enables navigation with a dropdown menu of chapters, determined by the "rel" attribute, requires 'menu'

                            shadows: true,                          // display shadows on page animations
                            shadowTopFwdWidth: 166,                 // shadow width for top forward anim
                            shadowTopBackWidth: 166,                // shadow width for top back anim
                            shadowBtmWidth: 50,                     // shadow width for bottom shadow

                            before: function () { },                // callback invoked before each page turn animation
                            after: function () { }                  // callback invoked after each page turn animation
                        });
                    }
                }).attr('src', source);
            });

        });
    </script> 


<?php include 'footer.php'; ?>