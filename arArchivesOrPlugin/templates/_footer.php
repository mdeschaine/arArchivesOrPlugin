


<!--<div id="footer">
<?php echo get_component_slot('footer') ?>
  <div class="container">
       <div id="review">
				<table>
				<tr>
				<td><div class="logofooter"><?php echo link_to(image_tag('/plugins/arArchivesOrPlugin/images/foot-logo.png'), 'http://ohs.org', array('rel' => 'ohs')) ?></div></td>
				<td style="width: 50px;"></td>
				<td>
				<b><p>Oregon Historical Society</p>
				<p>1200 SW Park Ave.</p>
				<p>Portland, OR 97205</p></b>
				</td>
				<td style="width: 50px;"></td>
				<td>
				<p><b>Library Hours:</b> </p>
				<p>Tuesdays: 1pm – 5pm </p>
				<p>Wednesday – Saturday: 10am – 5pm</p>
				</td>
				<td style="width: 50px;"></td>
				<td><ul id="footer-nav" class="nav nav-pills">
					<li><?php echo link_to(__('About'), array('module' => 'staticpage', 'slug' => 'about')) ?></li>
					<li><?php echo link_to(__('Copyright'), array('module' => 'staticpage', 'slug' => 'copyright-2')) ?></li>
					<li><?php echo link_to(__('Terms of Service'), array('module' => 'staticpage', 'slug' => 'terms')) ?></li>
					<li><?php echo link_to(__('Contact Us'), array('module' => 'staticpage', 'slug' => 'contact')) ?></li>
				</ul></td>
				<td style="width: 50px;"></td>
				<td>Made possible by <br />
				<br />
				<?php echo link_to(image_tag('/plugins/arArchivesOrPlugin/images/logo-collins.png', array('alt' => __('Collins'))), 'http://172.30.200.90/support', array('rel' => 'Collins')) ?></td>
				</tr>
				</table>
		</div>
	</div>
</div>-->

<footer class="foot">
<div class="ohsrow">
<header class="foot-signoff">
<a name="footer" id="footer"></a><h1 class="foot-signoff__title">Experience Oregon History</h1>
<p class="foot-signoff__message">The Oregon Historical Society is dedicated to making Oregon's long, rich history visible and accessible to all. For more than a century, the Oregon Historical Society has served as the state's collective memory, preserving a vast collection of artifacts, photographs, maps, manuscript materials, books, films, and oral histories. Our research library, museum, digital platform, educational programming, and historical journal make Oregon's history open and accessible to all. We exist because history is powerful, and because a history as deep and rich as Oregon's cannot be contained within a single story or point of view.</p>
</header>
</div>
<div class="ohsrow">
<div class="foot__left-side">
<div class="foot-contact">
<h3 class="foot__section-title">Contact Us</h3>
<p>Oregon Historical Society <br>1200 SW Park Ave <br>Portland, OR 97205</p>
<p><a href="tel:+15032221741">503.306.5240</a><br> <a href="mailto:libreference@ohs.org ">libreference@ohs.org</a><br> <a href="http://ohs.org/contact.cfm" target="_blank">Staff Directory</a></p>
</div>
<div class="foot-support">
<h3 class="foot__section-title">Resources</h3>
<ul>
	<li><?php echo link_to(__('About'), array('module' => 'staticpage', 'slug' => 'about')) ?></li>
	<li><?php echo link_to(__('Copyright'), array('module' => 'staticpage', 'slug' => 'copyright-2')) ?></li>
	<li><?php echo link_to(__('Terms of Service'), array('module' => 'staticpage', 'slug' => 'terms')) ?></li>
	<li><?php echo link_to(__('Contact Us'), array('module' => 'staticpage', 'slug' => 'contact')) ?></li>
</ul>
</div>
<div class="foot-hours">
<a name="hours" id="hours"></a><h3 class="foot__section-title">Library Hours</h3>
<p><span class="foot-hours__times">Tuesdays:
<br>1pm – 5pm
<br>Wednesday – Saturday:
<br>10am – 5pm</span></p></div>
<div class="foot-resources">
<h3 class="foot__section-title">Made Possible By:</h3>
<p style="margin-top: 15px;"><?php echo link_to(image_tag('/plugins/arArchivesOrPlugin/images/logo-collins.png', array('alt' => __('Collins'))), 'http://www.collinsfoundation.org/', array('rel' => 'Collins', 'target' => '_blank')) ?></p>
</div>
</div>
<div class="foot__right-side">
<div class="foot-newsletter">
<h3 class="foot__section-title">Newsletter</h3>
<p>Want to keep up with the latest news from The Oregon Historical Society? Sign up to receive our newsletter!</p>
<form method="post" id="signup" name="signup" action="https://app.e2ma.net/app2/audience/signup/1780482/32549/">
<input type="hidden" name="prev_member_email" id="id_prev_member_email">
<input type="hidden" name="source" id="id_source">
<input type="hidden" name="group_704293" value="704293" id="id_group_704293">
<input type="hidden" name="prev_member_email" value="">
<div class="input-fancy-lockup input-fancy-lockup--foot">
<span class="input-fancy input-fancy--email">
<input class="input-fancy__field input-fancy__field--email" type="text" id="id_email" name="email">
<label class="input-fancy__label input-fancy__label--email" for="email">
<span class="input-fancy__label-content input-fancy__label-content--search">Enter your email</span>
</label>
<input type="submit" value="Sign Up" name="Submit" class="input-fancy-lockup__submit" id="foot_newsletter_submit">
</span>
</div>
</form>
</div>
<div class="foot-social">
<h3 class="foot__section-title">Follow Us</h3>
<ul class="social-icons">
<li class="social-icons__item"><a class="social-icons__link" title="Facebook" href="https://www.facebook.com/oregonhistory" target="_blank"><svg viewBox="0 0 100 100" class="icon-fbook"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-fbook"></use></svg></a><span class="screen-reader">Facebook</span></li>
<li class="social-icons__item"><a class="social-icons__link" title="Twitter" href="https://twitter.com/orhist" target="_blank"><svg viewBox="0 0 100 100" class="icon-twitter"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-twitter"></use></svg></a><span class="screen-reader">Twitter</span></li>
<li class="social-icons__item"><a class="social-icons__link" title="Instagram" href="https://www.instagram.com/oregonhistoricalsociety/?hl=en" target="_blank"><svg viewBox="0 0 100 100" class="icon-pinterest"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-instagram"></use></svg></a><span class="screen-reader">Instagram</span></li>
<li class="social-icons__item"><a class="social-icons__link" title="YouTube" href="http://www.youtube.com/channel/UCeCtHcPsdEys360N-qyPUPA" target="_blank"><svg viewBox="0 0 100 100" class="icon-youtube"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-youtube"></use></svg></a><span class="screen-reader">YouTube</span></li>
<li class="social-icons__item"><a class="social-icons__link" title="Pinterest" href="https://www.pinterest.com/orhist/" target="_blank"><svg viewBox="0 0 100 100" class="icon-pinterest"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-pinterest"></use></svg></a><span class="screen-reader">Pinterest</span></li>
<li class="social-icons__item"><a class="social-icons__link" title="Google Plus" href="https://plus.google.com/+oregonhistory/posts" target="_blank"><svg viewBox="0 0 100 100" class="icon-google-plus"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-google-plus"></use></svg></a><span class="screen-reader">Google Plus</span></li>
<li class="social-icons__item"><a class="social-icons__link" title="Tumblr" href="http://ohsresearchlibrary.tumblr.com/" target="_blank"><svg viewBox="0 0 100 100" class="icon-tumblr"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-tumblr"></use></svg></a><span class="screen-reader">Tumblr</span></li>
</ul>
</div>
</div>
</div>
<div class="ohsrow foot-footer">
<p class="foot__legal"><a class="foot-footer__link" href="http://ohs.org/contact.cfm" target="_blank">Contact OHS</a> <a class="foot-footer__link" href="http://ohs.org/privacy-policy.cfm" target="_blank">Privacy Policy</a> </p>
<p class="foot__copyright">© Copyright 2017 Oregon Historical Society</p>
</div>
</footer>