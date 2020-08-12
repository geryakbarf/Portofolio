<!DOCTYPE html>
<html>
<?php $this->load->view('head.php', $judul) ?>

<body>
<?php $this->load->view('navbar.php') ?>
<main class="page lanidng-page">
	<section class="portfolio-block block-intro">
		<div class="container">
			<div class="avatar"
				 style="background-image:url(&quot;<?php echo base_url() ?>assets/img/avatars/avatar.jpg&quot;);"></div>
			<div class="about-me">
				<?php
				foreach ($identitas as $data) {
					?>
					<center><p><?php echo $data->nama; ?><br>
							<?php echo $data->alamat; ?></p></center>
					<?php
				}
				?>
				<p><?php echo $data->introduction ?></p><a class="btn btn-outline-primary"
														   role="button" href="<?php echo site_url('/cv/index/') ?>">Lihat
					CV
					Saya</a></div>
		</div>
	</section>
	<section class="portfolio-block photography">
		<div class="container">
			<div class="d-flex justify-content-center align-items-center content">
				<h2>Kumpulan Project Saya</h2>
			</div>
			<div class="row no-gutters">
				<?php
				foreach ($project as $dp) {
					echo "  <div class=\"col-md-6 col-lg-4\">
 <div class=\"card border-0\"><img class=\"card-img-top scale-on-hover\" src=\"" . base_url() . $dp->gambar . "\" alt=\"Card Image\"></a>
                            <div class=\"card-body\">
                                <h6>" . $dp->nama . "</a></h6>
                                <p class=\"text-muted card-text\">" . $dp->detail . "</p>
                            </div>
                        </div>
                        </div>";
				}
				?>
			</div>
		</div>
	</section>
	<section class="portfolio-block call-to-action border-bottom">
		<div class="container">
			<div class="d-flex justify-content-center align-items-center content">
				<h3>Ingin Tahu Seputar Project Saya ?&nbsp;</h3>
				<a href="<?php echo site_url('/project/index/') ?>">
					<button class="btn btn-outline-primary btn-lg" type="button">Lihat Project Saya</button>
				</a>
			</div>
		</div>
	</section>
	<section class="portfolio-block skills">
		<div class="container">
			<div class="heading">
				<h2>Kemampuan saya</h2>
				<div class="about-me" style="padding-top: 16px;">
					<p style="padding-bottom: 16px;font-size: 20px;">Ingin mengetahui apa saja kemampuan saya ?</p><a
							class="btn btn-outline-primary" role="button" href="<?php echo site_url('/cv/index/') ?>">Lihat Kemampuan Saya</a></div>
			</div>
		</div>
	</section>
</main>
<?php $this->load->view('footer.php') ?>
</body>

</html>
