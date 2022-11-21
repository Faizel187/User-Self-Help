<?php

$title = 'Office Articles';
$content = '';

require_once "Modal/config.php";
$catno = $_GET['catno'];
$run = "SELECT solno, soltitle, soldesc, solcreated FROM solution WHERE catno = '$catno' ORDER BY solno ASC";
$result = mysqli_query($conn, $run);
if (mysqli_num_rows($result) > 0) {
    while ($row = $result->fetch_assoc()) {
        $content = '
<!--============= Banner Section Starts Here =============-->
<div class="hero-section bg_img" data-background="assets/images/banner/short-banner.jpg">
    <div class="container">
        <div class="banner-content cl-white">
            <p>Microsoft 365 TroubleShooting</p>
        </div>
    </div>
</div>
<!--============= Banner Section Ends Here =============-->
    <section class="popular-section padding-top padding-bottom section-bg-2">
        <div class="container">
            <div class="section-header-2">
                <div class="left-side">
                    <h2 class="title">Office 365 articles </h2>
                    <p>Discover the best of Deskoto with our Featured Articles category!</p>
                </div>
                <a href="viewarticle.php" class="load-more small">View All Articles</a>
            </div>
            <div class="row justify-content-center mb-30-none">
            <div class="col-lg-4 col-md-6">
                <a href="viewarticle.php" class="popular-item">
                    <div class="popular-thumb">
                        <i class="flaticon-file"></i>
                    </div>
                    <div class="popular-content">
                        <span class="info">' . $row["soltitle"] . '</span>
                        <p>' . $row["soldesc"] . '</p>
                    </div>
                </a>
            </div>

        </div>
    </section>

';
    }
}

include 'Template.php'

?>
