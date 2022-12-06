<?php
require_once "Modal/config.php";
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

$title = 'Nkgwete IT Solutions | Help Centere';
$content = '
<!--============= Banner Section Starts Here =============-->
<section class="banner-2 bg_img" data-background="assets/images/banner/banner.jpg">
   <div class="container">
       <div class="banner-content-2">
           <h1 class="title cl-white">How Can We Help You?</h1>
           <p class=" cl-white">Looking for a solution? Search through our Help Center.</p>
        <!--   <form  class="search-form round">
               <input type="text" placeholder="Start typing your search…">
               <button type="submit"><i class="flaticon-search"></i> <span class="d-none d-sm-inline-block">Search</span></button>
           </form> -->
       </div>
   </div>
</section>
<!--============= Banner Section Ends Here =============-->

  <!--============= How Search Section Starts Here =============-->
  <div class="how-search-section padding-bottom mt--93">
   <div class="container">
       <div class="row mb-30-none justify-content-center">
           <div class="col-sm-10 col-md-6 col-lg-4">
               <div class="how-search-item no-border">
                   <div class="thumb">
                       <i class="fa fa-envelope" style="font-size:60px;color:#00b2f2"></i>
                   </div>
                   <div class="content">
                       <h4 class="title"><a href="mailto:ITCARE@eskom.co.za">Log Call via Email</a></h4>
                       <p><a href="mailto:ITCARE@eskom.co.za">ITCARE@eskom.co.za</a></p>
                   </div>
               </div>
           </div>
           <div class="col-sm-10 col-md-6 col-lg-4">
               <div class="how-search-item no-border">
                   <div class="thumb">
                       <i class="fa fa-phone" style="font-size:60px;color:#00b2f2"></i>
                   </div>
                   <div class="content">
                       <h4 class="title"><a href="tel:0860724365">Call the Service Desk</a></h4>
                       <p><a href="tel:0860724365">0860 724 365</a></p>
                   </div>
               </div>
           </div>
           <div class="col-sm-10 col-md-6 col-lg-4">
               <div class="how-search-item no-border">
                   <div class="thumb">
                       <i class="fa fa-info-circle" style="font-size:60px;color:#00b2f2"></i>
                   </div>
                   <div class="content">
                       <h4 class="title"><a href="https://bcx-myit.onbmc.com/dwp/app/?user_domain=eskom">Can`t find anything?</a></h4>
                       <p><a href="https://bcx-myit.onbmc.com/dwp/app/?user_domain=eskom" target="_BLANK">Click Here</a> for More</p>
                   </div>
               </div>
           </div>
       </div>
   </div>
</div>
<!--============= How Search Section Ends Here =============-->


<!--============= Knowledge Section Starts Here =============-->
<!--
<section class="knowledge-section padding-bottom">
   <div class="container">
       <div class="section-header">
           <h2 class="title">Knowledge Base</h2>
           <p>Explore How-To`s and learn best practices from our knowledge base.</p>
       </div>
       <div class="row justify-content-center mb-30-none">
           <div class="col-lg-6 col-md-10">
               <div class="knowledge-item">
                   <div class="knowledge-thumb">
                       <img src="assets/images/knowledge/know1.png" alt="knowledge">
                   </div>
                   <div class="knowledge-content">
                       <h4 class="title"><a href="#0">Get started</a></h4>
                       <p>Set up your account, configure support channels, customize your portal to reflect your brand and more. </p>
                   </div>
               </div>
           </div>
           <div class="col-lg-6 col-md-10">
               <div class="knowledge-item">
                   <div class="knowledge-thumb">
                       <img src="assets/images/knowledge/know2.png" alt="knowledge">
                   </div>
                   <div class="knowledge-content">
                       <h4 class="title"><a href="#0">Configuring Automations</a></h4>
                       <p>Set up your account, configure support channels, customize your portal to reflect your brand and more. </p>
                   </div>
               </div>
           </div>
           <div class="col-lg-6 col-md-10">
               <div class="knowledge-item">
                   <div class="knowledge-thumb">
                       <img src="assets/images/knowledge/know3.png" alt="knowledge">
                   </div>
                   <div class="knowledge-content">
                       <h4 class="title"><a href="#0">Customer Portal Setup</a></h4>
                       <p>Set up your account, configure support channels, customize your portal to reflect your brand and more. </p>
                   </div>
               </div>
           </div>
           <div class="col-lg-6 col-md-10">
               <div class="knowledge-item">
                   <div class="knowledge-thumb">
                       <img src="assets/images/knowledge/know4.png" alt="knowledge">
                   </div>
                   <div class="knowledge-content">
                       <h4 class="title"><a href="#0">Advanced Configurations</a></h4>
                       <p>Set up your account, configure support channels, customize your portal to reflect your brand and more. </p>
                   </div>
               </div>
           </div>
       </div>
       <div class="load-wrapper">
           <a href="#0" class="load-more">View All Categories</a>
       </div>
   </div>
</section> -->
<!--============= Knowledge Section Ends Here =============-->


<!--============= Popular Section Starts Here =============-->
<section class="popular-section padding-top padding-bottom section-bg-2">
<div class="container">
   <div class="section-header-2">
       <div class="left-side">
           <h2 class="title">Popular articles </h2>
           <p>Discover the most viewed Articles</p>
       </div>
       <a href="viewarticle.php" class="load-more small">View All Articles</a>
   </div>
   <div class="row justify-content-center mb-30-none">
' . $articles . '
   </div>
</div>
</section>
<!--============= Popular Section Ends Here =============-->
';

include 'Template.php'

?>
