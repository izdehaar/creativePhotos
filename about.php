		<!-- HEADER START -->
		<?php require "./required/header.php" ?>
		<!-- HEADER END -->




		<section class="breadcrumb">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="">
							<span class="fa-2x fw-bold text-dark">Creative Photos</span><i class="fas fa-long-arrow-alt-right fa-lg mx-2 text-dark"></i><span class="fa-lg fw-bold text-dark">About</span>
						</div>
					</div>
				</div>
			</div>
		</section>



		<!-- about-me-section2  -->
		<section class="about-me-section2">
			<div class="text-center py-3">
				<p class="fa-2x text-primary fw-bold">About Us</p>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-12">
						<?php $run = $mysqli->query("SELECT `content` FROM `contents` WHERE `title` = 'About us' AND `isDeleted` = '0'");
						if ($run && $run->num_rows > 0) {
							$about = $run->fetch_object()->content;
							echo $about;
						}
						?>
					</div>
				</div>
			</div>
		</section>
		<!-- End about-me section2 -->

		<!-- gallery-section -->
		<section class="gallery-section">
			<div class="container">
				<?php $sql = "SELECT * FROM `photos` WHERE `isDeleted` = '0' LIMIT 8";
				$run = $mysqli->query($sql);
				if ($run && $run->num_rows > 0) { ?>
					<h2 class="title-about-page">RECENT from our Gallery</h2>

					<div class="gallery-box iso-call col4">
						<?php
						while ($row = $run->fetch_object()) { ?>
							<div class="gallery-post">
								<img class="img-fluid rounded" src="./assets/images/photos/<?= $row->photos ?>" alt="">
								<div class="hover-box">
									<h2><a href="./assets/images/photos/<?= $row->photos ?>" class="image-popup"><?= $row->heading ?></a></h2>
								</div>
							</div>
					<?php
						}
					}
					?>
					</div>

			</div>
		</section>
		<!-- End gallery section -->



		<!-- FOOTER START -->
		<?php require "./required/footer.php" ?>
		<!-- FOOTER END -->