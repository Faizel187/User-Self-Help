<?php

$title = 'Office Articles';
$content = '';
$code = "";

require_once "Modal/config.php";
$catno = $_GET['catno'];
$run = "SELECT solno, soltitle, soldesc, solcreated FROM solution WHERE catno = '$catno'";
$result = mysqli_query($conn, $run);
if (mysqli_num_rows($result) > 0) {
    while ($row = $result->fetch_assoc()) {
        $desc = $row["soldesc"];
        $title = $row["soltitle"];
        $solno = $row["solno"];

        $code .= '
        <div class="col-lg-4 col-md-6">
        <a href="viewarticle.php?solno =' . $solno . '" class="popular-item">
            <div class="popular-thumb">
                <i class="flaticon-file"></i>
            </div>
            <div class="popular-content">
                <span class="info">' . $row["soltitle"] . '</span>
                <p>' . $row["soldesc"] . '</p>
            </div>
        </a>
    </div>
        ';
    }
}
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

            ' . $code . '

        </div>
    </section>

';

include 'Template.php'

?>
