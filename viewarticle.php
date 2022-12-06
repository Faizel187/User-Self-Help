<script type="text/javascript">
  function myFunction(path) {
    document.getElementById('myIframe').src = path;
  }
  </script>


<?php

require_once "Modal/config.php";
$info = '';
$solno = $_GET['solno'];
$get = "SELECT solno, soldesc, catno, soltitle, solcreated, sollocation FROM solution WHERE solno = '$solno'";
$results = mysqli_query($conn, $get);

if (mysqli_num_rows($results) > 0) {
    while ($rw = $results->fetch_assoc()) {
        $soltitle = $rw['soltitle'];
        $solcreated = $rw['solcreated'];
        $sollocation = $rw['sollocation'];
        $soldesc = $rw['soldesc'];
        $catno = $rw['catno'];
        $info = '
        <h3 class="title">' . $soltitle . '</h3>
        <h6>' . $soldesc . '</h6><br>

        ';

    }
}
$data = '';

$fetch = "SELECT soltitle, solno, soldesc FROM solution WHERE catno = '$catno' LIMIT 3";
$r = mysqli_query($conn, $fetch);
if (mysqli_num_rows($r) > 0) {
    while ($rww = $r->fetch_array()) {
        $data .= '
        <div class="col-lg-12 col-md-6">
        <a href="viewarticle.php?solno=' . $rww["solno"] . '" class="popular-item">
            <div class="popular-thumb">
                <i class="flaticon-file"></i>
            </div>
            <div class="popular-content">
                <span class="info">' . $rww["soltitle"] . '</span>
                <p>' . mb_strimwidth($rww["soldesc"], 0, 40, "...") . '</p>

            </div>
        </a>
    </div>

     ';
    }
}
$title = 'Nkgwete IT Solutions | Help Centere';
$pdf = "../assets/images/faq/" . $sollocation;
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
                    <iframe id="myIframe" src="content/' . $pdf . '#toolbar=0&navpanes=0&scrollbar=0" frameborder="0" style="overflow:hidden;height:750px;width:100%;position:relative;top:0px;left:0px;right:0px;bottom:0px;"></iframe>


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
                                <button name ="yes"><a href="#0" name="yes"  class="call-button" onclick="response()" style="background-color: #8aca38">Yes</a><button>
                                <a href="#0" name="no"class="call-button" onclick="response()" style="background-color: #00B2f2">No</a>
</form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <h5 class="title my-4">Suggested Articles</h5>
                <div class="row justify-content-center mb-20-none">

' . $data . '

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