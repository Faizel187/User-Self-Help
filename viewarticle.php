<?php

$title = 'Nkgwete IT Solutions | Help Centere';
$content = '

<!--============= Banner Section Starts Here =============-->
<section class="banner-1 bg_img" data-background="assets/images/banner/banner-6.jpg">
    <div class="container">
        <div class="banner-content cl-white">
            <h1 class="title">Self-Help</h1>
            <p>Guide</p>
        </div>
    </div>
</section>
<!--============= Banner Section Ends Here =============-->


<!--============= Knowledge Single Section Starts Here =============-->
<section class="knowledge-single-section padding-bottom padding-top oh">
    <div class="container">
        <div class="row mb-70">
            <div class="col-xl-8 col-lg-7 mb-10">
                <div class="knowledge-single">
                    <div class="knowledge-header">
                        <h3 class="title">How to add multiple organizations</h3>
                        <ul class="knowledge-meta">
                            <li>Created: <a href="#0">Jul 14, 2020</a></li>
                            <li>Updated: <a href="#0">Sep 19, 2022</a></li>
                        </ul>
                    </div>

                    <!-- SHOW DOCUMENT CONTENT HERE -->
                    <iframe src="content/POLL023.pdf#toolbar=1&navpanes=0&scrollbar=0" frameborder="0" style="overflow:hidden;height:750px;width:100%;position:relative;top:0px;left:0px;right:0px;bottom:0px;"></iframe>
                </div>
            </div>
        
<!--BeGIN RIGHT SIDE-->

            <div class="col-xl-4 col-lg-5 mb-10">
                <div class="row">

                    <div class="col-lg-12 col-md-6">
                        <div class="knowledge-widget">
                            <div class="call-to-page">
                                <h5 class="title">Is this Article Helpful?</h5>
                                <p>Content Feedback</p>
                                <div id="response">
                                <a href="#0" class="call-button" onclick="response()" style="background-color: #8aca38">Yes</a>
                                <a href="#0" class="call-button" onclick="response()" style="background-color: #00B2f2">No</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <h5 class="title my-4">Suggested Articles</h5>
                <div class="row justify-content-center mb-20-none">
                    <div class="col-lg-12 col-md-6">
                        <a href="How to Add signature on PDF file.pdf" class="popular-item">
                            <div class="popular-thumb">
                                <i class="flaticon-file"></i>
                            </div>
                            <div class="popular-content">
                                <span class="info">Digital Signature</span>
                                <p>How to add signature on PDF file</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-12 col-md-6">
                        <a href="NODDY GUIDE TO WFH  Telecommuting March 2020_FINAL.pdf" class="popular-item">
                            <div class="popular-thumb">
                                <i class="flaticon-file"></i>
                            </div>
                            <div class="popular-content">
                                <span class="info">Remote Work</span>
                                <p>ESKOM - Work from Home (Remote Telecommuting)</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-12 col-md-6">
                        <a href="Changing your password on the Self Service Portal.docx" class="popular-item">
                            <div class="popular-thumb">
                                <i class="flaticon-file"></i>
                            </div>
                            <div class="popular-content">
                                <span class="info">For Companies</span>
                                <p>How to withdraw money from your account</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--============= Knowledge Single Section Ends Here =============-->
';



include 'Template.php'

?>

<script>
    function response(){
        document.getElementById("response").innerHTML = "Thank you for your response!"
    }
</script>