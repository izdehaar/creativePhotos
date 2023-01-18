		<!-- HEADER START -->
		<?php require "./required/header.php" ?>
		<!-- HEADER END -->



		<section class="breadcrumb">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="">
							<span class="fa-2x fw-bold text-dark">Creative Photos</span><i class="fas fa-long-arrow-alt-right fa-lg mx-2 text-dark"></i><span class="fa-lg fw-bold text-dark">Albums</span>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- gallery-section  -->
		<div class="container-fluid">
			<div class="album-section">
				<div class="text-center py-3">
					<p class="fa-2x text-primary fw-bold">Albums</p>
				</div>
				<div class="row">
					<?php if (isset($_GET['cat'])) {
						$cat = $_GET['cat'];
						$sql = "SELECT `slug`,`name` FROM `sub_categories` WHERE `category_id` = '(SELECT `id` FROM `categories` WHERE `slug` = \"$cat\")'";
						$sql = "SELECT `slug`,`name` FROM `sub_categories` WHERE `category_id` = '1'";
						$run = $mysqli->query($sql);
					?>
						<div class="col-lg-2">
							<div class="">
								<ul class="list-unstyled">
									<p class="fa-lg fw-bold text-center pt-3">Sub Categories</p>
									<?php if ($run && $run->num_rows > 0) {
										while ($row = $run->fetch_object()) { ?>
											<li class="py-3 ps-3"><i class="fas fa-chevron-right me-2 "></i><a class="fa-lg text-dark" href="album.php?subcat=<?= $row->slug ?>"><?= $row->name ?></a></li>
									<?php }
									} else {
										echo "<li class='py-3 ps-3'>Coming soon</li>";
									} ?>
								</ul>
							</div>
						</div>
						<div class="col-lg-10 col-md-12 col-sm-12">
						<?php } else { ?> <div class="col-lg-12 col-md-12 col-sm-12"> <?php } ?>

							<section class="gallery-section pinterest-style full">
								<?php if (isset($_GET['cat'])) {
									$cat = $_GET['cat'];
									$sql = "SELECT * FROM `photos` WHERE `category` = (SELECT `id` FROM `categories` WHERE `slug` = '$cat')";
								} elseif (isset($_GET['subcat'])) {
									$subcat = $_GET['subcat'];
									$sql = "SELECT * FROM `photos` WHERE `category` = (SELECT `category_id` FROM `sub_categories` WHERE `slug` = '$subcat')";
								} else {
									$sql = "SELECT `slug`,`photos`,`heading` FROM `photos` WHERE `isDeleted` = '0'";
								}
								?>
								<div class="gallery-box iso-call">
									<?php
									$run = $mysqli->query($sql);
									if ($run && $run->num_rows > 0) {
										while ($row = $run->fetch_object()) {
									?>
											<div class="gallery-post">
												<div class="inner-gallery-post">
													<img src="./assets/images/photos/<?= $row->photos ?>" alt="<?=$row->heading?>">
													<div class="hover-box">
														<h3 class="text-white"><?=$row->heading?></h3>
													</div>
												</div>
											</div>
									<?php
										}
									} else {
										echo "<span class='text-dark text-center my-3 display-2'>No photos yet</span>";
									}
									?>
								</div>



							</section>
							</div>
						</div>
				</div>
			</div>
			<!-- End gallery section -->


			<!-- FOOTER START -->
			<?php require "./required/footer.php" ?>
			<!-- FOOTER END -->