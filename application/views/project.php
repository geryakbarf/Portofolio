<!DOCTYPE html>
<html>

<?php $this->load->view('head.php', $judul) ?>

<body>
<?php $this->load->view('navbar.php') ?>
<main class="page projects-page">
	<section class="portfolio-block projects-cards">
		<div class="container">
			<div class="heading">
				<h2>Project saya</h2>
			</div>
			<div class="row">
				<?php
				foreach ($project as $data) {

					echo "<div class=\"col-md-6 col-lg-4\">
						<div class=\"card border-0\">	<img class=\"card-img-top scale-on-hover\"
																	src=\"" . base_url() . $data->gambar . "\"
																	alt=\"Card Image\"></a>
							<div class=\"card-body\">
								<h6>" . $data->nama . "</a></h6>
								<p class=\"text-muted card-text\">" . $data->detail . "</p>
							</div>
						</div>
					</div>";

				}
				?>
			</div>
		</div>
	</section>
</main>
<?php $this->load->view('footer.php') ?>
<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/pikaday.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/script.min.js"></script>
</body>

</html>
