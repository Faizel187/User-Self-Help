<?php
/////////////////////////////////////////////////////////////////////////////////////////
//Back-End

$output = '';
require_once "Modal/config.php";

$sql = "SELECT catno, catname, catdesc, caticon FROM category ORDER BY catno";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while ($row = mysqli_fetch_assoc($result)) {
        $output = $output . '
    <div class="col-12">
        <a class="col" href="office.php?catno=' . $row["catno"] . '">
            <div class="bill-item">
                <div class="bill-thumb">
                    <img src="' . $row["caticon"] . '" alt="bill">
                </div>
                <div class="bill-content">
                    <h3 class="title">' . $row["catname"] . '</h3>
                    <p>' . $row["catdesc"] . '</p>
                </div>
            </div>
        </a>
    </div>
    ';
    }
} else {
    ?>
        <script>
            window.alert("Failed to get list of Knowledge Categories\nContact System Admin");
            window.close();
        </script>
    <?php
}

$articles = '';
$no = rand(1, 4);
$pick = "SELECT soltitle, solno, soldesc FROM solution WHERE catno = '$no' LIMIT 3";
$r = mysqli_query($conn, $pick);
if (mysqli_num_rows($r) > 0) {
    while ($line = $r->fetch_array()) {
        $articles .= '


    <div class="col-lg-4 col-md-6">
    <a href="viewarticle.php?solno=' . $line["solno"] . '" class="popular-item">
        <div class="popular-thumb">
            <i class="flaticon-file"></i>
        </div>
        <div class="popular-content">
        <span class="info">' . $line["soltitle"] . '</span>
        <p>' . mb_strimwidth($line["soldesc"], 0, 40, "...") . '</p>
        </div>
    </a>
</div>

     ';
    }
}

mysqli_close($conn);

/////////////////////////////////////////////////////////////////////////////////////////
$title = 'Nkgwete IT Solutions | Help Centere';
$content = '
<!--============= Banner Section Starts Here =============-->
<section class="banner-2 bg_img" data-background="assets/images/banner/banner-2.jpg">
    <div class="container">
        <div class="banner-content-2">
            <h1 class="title cl-white">We are here to help!</h1>
            <p class=" cl-white">Have questions? Search through our Help Center.</p>
        </div>
    </div>
</section>
<!--============= Banner Section Ends Here =============-->
<!--============= How Section Two Starts Here =============-->
<div class="how-search-section padding-bottom mt--93">
    <div class="container">
        <div class="row mx-lg-0 mb-lg-0 mb--30 justify-content-center">
            <div class="col-sm-10 col-md-6 col-lg-4 p-lg-0">
                <div class="how-item-2">
                    <div class="thumb">
                        <img src="assets/images/how/how01.png" alt="how">
                    </div>
                    <div class="content">
                        <h4 class="title"><a href="#0">Submit a request</a></h4>
                        <p>Submit a new support ticket</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-10 col-md-6 col-lg-4 p-lg-0">
                <div class="how-item-2 shadow-style">
                    <div class="thumb">
                        <img src="assets/images/how/how02.png" alt="how">
                    </div>
                    <div class="content">
                        <h4 class="title"><a href="#0">Articles</a></h4>
                        <p>Find answers to your question </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-10 col-md-6 col-lg-4 p-lg-0">
                <div class="how-item-2">
                    <div class="thumb">
                        <img src="assets/images/how/how03.png" alt="how">
                    </div>
                    <div class="content">
                        <h4 class="title"><a href="#0">Ticket</a></h4>
                        <p>Login or Signup to access your support tickets</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--============= How Section Two Ends Here =============-->
<!--============= Billing Section Starts Here =============-->
<section class="billing-section padding-bottom">
    <div class="container">
        <div class="section-header">
            <h2 class="title">Knowledge Base</h2>
            <p>Explore How-To`s and learn best practices from our knowledge base.</p>
        </div>
        <div class="row justify-content-center mb-30-none">
            ' . $output . '
        </div>
    </div>
</section>
<!--============= Billing Section Ends Here =============-->
<!--============= Popular Section Starts Here =============-->
<section class="popular-section padding-top padding-bottom section-bg-2">
    <div class="container">
        <div class="section-header-2">
            <div class="left-side">
                <h2 class="title">Popular articles </h2>
                <p>Discover the best of Deskoto with our Featured Articles category!</p>
            </div>
            <a href="knowledge.php" class="load-more small">View All Articles</a>
        </div>
' . $articles . '
        </div>
    </div>
</section>
<!--============= Popular Section Ends Here =============-->
';
include 'Template.php'
?>