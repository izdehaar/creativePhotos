<!-- HEADER START -->
<?php require "./required/header.php" ?>
<!-- HEADER END -->


<section class="breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="">
                    <span class="fa-2x fw-bold text-dark">Creative Photos</span><i class="fas fa-long-arrow-alt-right fa-lg mx-2 text-dark"></i><span class="fa-lg fw-bold text-dark">Terms & Conditions</span>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="">

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <?php $run = $mysqli->query("SELECT `content` FROM `contents` WHERE `slug` = 'terms-conditions' AND `isDeleted` = '0'");
                $row = $run->fetch_assoc();
                echo $row['content'];
                ?>
            </div>
        </div>
    </div>
</section>



<!-- FOOTER START -->
<?php require "./required/footer.php" ?>
<!-- FOOTER END -->