<script type="text/javascript">
  function myFunction(path) {
    document.getElementById('myIframe').src = path;
  }
  </script>


<?php

require_once "Modal/config.php";
$info = '';
$solno = $_GET['solno'];
$get = "SELECT soltitle, solcreated, sollocation FROM solution WHERE solno = '$solno'";
$results = mysqli_query($conn, $get);

if (mysqli_num_rows($results) > 0) {
    while ($rw = $results->fetch_assoc()) {
        $soltitle = $rw['soltitle'];
        $solcreated = $rw['solcreated'];
        $sollocation = $rw['sollocation'];

        $info = '
        <h3 class="title">' . $soltitle . '</h3>

        ';

    }
}

$title = 'Nkgwete IT Solutions | Help Centere';
$pdf = "POLL023.pdf";
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
                        ' . $info . '
                        <ul class="knowledge-meta">
                            <li>Created: <a href="#0">' . $solcreated . '</a></li>

                        </ul>
                    </div>

                    <!-- SHOW DOCUMENT CONTENT HERE -->
                    <iframe id="myIframe" src="content/' . $pdf . '#toolbar=1&navpanes=0&scrollbar=0" frameborder="0" style="overflow:hidden;height:750px;width:100%;position:relative;top:0px;left:0px;right:0px;bottom:0px;"></iframe>
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
                                <form action="#" method="post">
                                <a href="#0" name="yes"  class="call-button" onclick="response()" style="background-color: #8aca38">Yes</a>
                                <a href="#0" name="no"class="call-button" onclick="response()" style="background-color: #00B2f2">No</a>
</form>
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
<?php
if (isset($_POST['yes'])) {
    $run = "INSERT INTO feedback (solno, feeresult) VALUES ('$solno','Yes')";
    mysqli_query($conn, $run);
} else if (isset($_POST['no'])) {
    $run = "INSERT INTO feedback (solno, feeresult) VALUES ('$solno','No')";
    mysqli_query($conn, $run);
}
?>