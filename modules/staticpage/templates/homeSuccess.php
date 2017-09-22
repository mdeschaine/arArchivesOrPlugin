</div>
<div id="homepage-hero" class="row" title="View of Gresham and Mt. Hood from Mt. Tabor, Portland - ca.1905.
Kiser Photo Collection, Org Lot 140, Box 4, Folder 41.">
  <div class="container">
  <?php $cacheKey = 'homepage-nav-'.$sf_user->getCulture() ?>
  <?php if (!cache($cacheKey)): ?>
    <div class="span3" id="homepage-nav">
      <h2><?php echo __('Browse by') ?></h2>
      <ul>
        <?php $browseMenu = QubitMenu::getById(QubitMenu::BROWSE_ID) ?>
        <?php if ($browseMenu->hasChildren()): ?>
          <?php foreach ($browseMenu->getChildren() as $item): ?>
            <li>
              <a href="<?php echo url_for($item->getPath(array('getUrl' => true, 'resolveAlias' => true))) ?>">
                <?php echo esc_specialchars($item->getLabel(array('cultureFallback' => true))) ?>
              </a>
            </li>
          <?php endforeach; ?>
        <?php endif; ?>
      </ul>
    </div>
    <?php cache_save($cacheKey) ?>
  <?php endif; ?>


<div id="welcome-message__inner">
	<h1 id="welcome-message">Oregon Historical Society Digital Collections</h1>
</div>


 <div class="span4" id="intro">


	<h3>Providing Broad Access</h3>
    <p>The Oregon Historical Society is committed to providing broad access to our collections for teaching, learning, and research. Our websites, catalog records, finding aids, and digital images enhance scholarship and promote use of both digital and physical objects. A critical component of our mission is to “inspire curiosity about all the people, places, and events that have shaped Oregon,” and providing free and open access to our collections is key to executing that mission.</p>

  </div>

</div>
</div>
<div class="container">
<div id="homepage" class="row">

  <div class="span7">
    <?php echo get_component('default', 'popular', array('limit' => 10, 'sf_cache_key' => $sf_user->getCulture())) ?>
  </div>
  <div class="span8" id="virtual-exhibit">
    <a href="/reuniting-finley-and-bohlman">
      <h3>
        <?php echo __('Partnership') ?>
        <span class="title">Reuniting Finley and Bohlman</span>
        <span class="small">Oregon Historical Society and Oregon State University</span>
      </h3>
      <div>&nbsp;</div>
    </a>
  </div>
    <div class="span4">
  	    <section id="cta">
            <h1 class="module__hed"><a href="http://ohs.org/research-and-library/" target="_blank">Visit Our Research Library</a></h1>
            <a class="more-link--large" href="http://ohs.org/research-and-library/" target="_blank"><!--[if gte IE 9]><!--><svg viewBox='0 0 100 100' class='icon-chevron-right-large'><use xlink:href='#icon-chevron-right'></use></svg><!--<![endif]--></a>
        </section>

	  </div>
</div>
</div>
<div class="container">
<div id="slideshow">
  <div class="slideshow-container">

  <div id="slide1"class="mySlides">
    <a href="/us-ohy-org-lot-1368">
    <h3>
		<?php echo __('Featured Collection') ?>
		<div class="title">Oregon Journal Photographic Negatives</div>
		<div class="small">Baseball</div>
		</h3>
	</a>
  </div>
  <div id="slide2" class="mySlides">
  <a href="/us-ohy-org-lot-93">
    <h3>
		<?php echo __('Featured Collection') ?>
		<div class="title">Carleton E. Watkins photographs, 1861-1885</div>
		<div class="small">Stereographs, 1861-1873</div>
		</h3>
	</a>
  </div>

  <div id="slide3" class="mySlides">
    <a href="/us-ohy-org-lot-140">
    <h3>
		<?php echo __('Featured Collection') ?>
		<div class="title">Kiser Photo Co. Photographs</div>
		<div class="small">View of Crater Lake, circa 1907 (Hand Colored)</div>
		</h3>
	</a>
  </div>

  <div id="slide4"class="mySlides">
    <a href="/us-ohy-mss-114">
    <h3>
		<?php echo __('Featured Collection') ?>
		<div class="title">Joel Palmer Papers</div>
		<div class="small">Treaty, Walla Walla and Wasco Tribes, 1855 June 25</div>
		</h3>
	</a>
  </div>

  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>

  <div id="controls">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
  <span class="dot" onclick="currentSlide(4)"></span>
  </div>
  </div>



<script language='javascript'>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
</script>
</div>
</div>
