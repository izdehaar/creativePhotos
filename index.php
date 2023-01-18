<!-- HEADER START -->
<?php require "./required/header.php" ?>
<!-- HEADER END -->

<!-- CAROUSEL START -->
<section class="mt-3 pt-5">
	<div class="sliderTemplates owl-carousel">
			<!-- <img class="img-fluid" src="./assets/images/about/about.webp" alt="Template1"> -->
			<?php $run = $mysqli->query("SELECT `link` FROM `youtube_videos` WHERE `isDeleted` = '0'");
			if ($run && $run->num_rows > 0) {
				while ($row = $run->fetch_object()) {
			?>
					<div class="card mx-1">
						<iframe height="400" class="w-100" src="<?= $row->link ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
					</div>
			<?php
				}
			}
			?>
	</div>
</section>
<!-- CAROUSEL END -->

<!-- photos-section  -->
<section class="photos-section masonry padding-top-5">

	<div class="text-center pb-4">
		<h3>Categories</h3>
	</div>

	<section class="gallery-section pinterest-style full ">
		<div class="gallery-box iso-call col4">
			<?php
			$run = $mysqli->query("SELECT * FROM `categories` WHERE `isDeleted` = '0'");
			while ($row = $run->fetch_object()) {
			?>
				<div class="gallery-post" role="button" onclick="window.location.href = 'album.php?cat=<?= $row->slug ?>';">
					<div class="inner-gallery-post bg-success" style="height: 350px;">
						<img src="./assets/images/categories/<?= $row->image ?>" class="h-100 w-100" alt="">
						<div class="hover-box">
							<h3 class="text-white"><?= $row->name ?></h3>
						</div>
					</div>
				</div>
			<?php
			}
			?>
		</div>
	</section>
</section>
<!-- End portfolio section -->


<!-- FOOTER START -->
<?php require "./required/footer.php" ?>
<!-- FOOTER END -->