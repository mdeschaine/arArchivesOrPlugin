


<div id="footer">
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
					<li><?php echo link_to(__('Contact us'), array('module' => 'staticpage', 'slug' => 'contact')) ?></li>
				</ul></td>	
				<td style="width: 50px;"></td>
				<td>Made possible by <br />
				<br />
				<?php echo link_to(image_tag('/plugins/arArchivesOrPlugin/images/logo-collins.png', array('alt' => __('Collins'))), 'http://digitalcollections.ohs.org/support', array('rel' => 'Collins')) ?></td>
				</tr>
				</table>
		</div>
	</div>
</div>


