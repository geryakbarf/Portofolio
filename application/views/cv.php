<!DOCTYPE html>
<html>

<?php $this->load->view('head.php', $judul) ?>

<body>
<?php $this->load->view('navbar.php') ?>
<main class="page cv-page">
	<section class="portfolio-block cv">
		<div class="container">
			<div class="work-experience group">
				<div class="heading">
					<h2 class="text-center">Pengalaman kerja</h2>
				</div>
				<?php
				foreach ($riwayat as $dr) {
					echo "<div class=\"item\">
					<div class=\"row\">
						<div class=\"col-md-6\">
							<h3>" . $dr->nama . "</h3>
							<h4 class=\"organization\">" . $dr->instansi . "</h4>
						</div>
						<div class=\"col-md-6\"><span class=\"period\">" . $dr->tanggal_mulai . " sampai " . $dr->tanggal_selesai . "</span></div>
					</div>
				</div>";
				}

				?>
			</div>
			<div class="education group">
				<div class="heading">
					<h2 class="text-center">Pendidikan</h2>
				</div>
				<?php
				foreach ($sekolah as $ds) {
					echo "<div class=\"item\">
					<div class=\"row\">
						<div class=\"col-md-6\">
							<h3>" . $ds->nama . "</h3>
							<h4 class=\"organization\">" . $ds->instansi . "</h4>
						</div>
						<div class=\"col-6\"><span class=\"period\">" . $ds->tanggal_mulai . " sampai " . $ds->tanggal_selesai . "</span></div>
					</div>
				</div>";
				}
				?>
			</div>
			<div class="group">
				<div class="skills portfolio-info-card">
					<h2>Kemampuan</h2>
					<?php
					foreach ($kemampuan as $dk) {
						echo "<h3>" . $dk->nama . "</h3>
					<div class=\"progress\">
						<div class=\"progress-bar\" aria-valuenow=\"100\" aria-valuemin=\"0\" aria-valuemax=\"100\"
							 style=\"width: " . $dk->level . ";\"><span class=\"sr-only\">" . $dk->level . "</span></div>
					</div>";
					}
					?>
				</div>
			</div>
		</div>
	</section>
</main>
<?php $this->load->view('footer.php') ?>
<script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url() ?>assets/bootstrap/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/pikaday.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/script.min.js"></script>

</body>

</html>
