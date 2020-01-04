		</div>
		<footer class="container">
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
		<!-- jQuery CDN - Slim version (=without AJAX) -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<!-- Popper.JS -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
		<!-- Bootstrap JS -->
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
		<!-- jQuery Custom Scroller CDN -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>


		</body>
</html>
