		</div>
		<footer class="footer">
			<div class="row">
				<div class="col-md footer-items left-footer">
					<h3>PRODUCTS</h3>
					<ul>
						<?php if (isset($category)) {
						foreach ($category as $categories) :?>
						<li><a href="<?= site_url('categories/'. $categories['id_category'].'-'.$categories['name'])?>"  class="link-footer"><?= ucfirst($categories['name']);?></a></li>
						<?php endforeach;
						}?>
					</ul>
				</div>
				<div class="col-md footer-items mid-footer">
					<h3>ABOUT US</h3>
					<p>Sed quid est quod in hac causa maxime homines admirentur et reprehendant meum consilium, cum ego idem antea multa decreverim.</p>
				</div>
				<div class="col-md footer-items right-footer">
					<h3>CONTACT US</h3>
					<div class="contact-info"><p><a href="mailto:peter.giromagny@me.com" class="link-footer">peter.giromagny@me.com</a></p></div>
					<div class="contact-info"><p><a href="tel:+33682056052" class="link-footer">06.82.05.60.52</a></p></div>
				</div>
			</div>
			<div id="entertainement">
				<div class="row">
					<div class="col-md"><p style="text-align: left">Designed by Fimbu himself</p></div>
					<div class="col-md">
						<p style="text-align: right;">
							<em>&copy; 2019</em>
						</p>
					</div>
				</div>
			</div>
		</footer>
		<script src="<?php echo base_url(); ?>assets/js/script.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/jquery-3.4.1.min.js"></script>
		</body>
</html>
