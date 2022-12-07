<?php
//===================================================================================
//==================beginning of  backend================================================
require_once "Modal/config.php";
$data = '';
$sql = "SELECT arename FROM area";
$result = mysqli_query($conn, $sql);
$faq = array();
if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) 
  {

    array_push($faq, $row["arename"]);
   // $data = ;
    //echo $row["arename"];
  }
} 
else 
{
  echo "0 results";
}


mysqli_close($conn);
/*$pull = 'SELECT areno, arename FROM area ORDER BY areno';
$res = $conn->query($pull);
if(mysqli_num_rows($res)>0){
     while($r = mysqli_fetch_assoc($res)){
    $data = $data . '
    <ul id="faq-menu">
    <li class="nav-item">
        <a class="nav-link" href="#company">'.$r["arename"].'</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#freelancer">'.$r["arename"].'</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#account">'.$r["arename"].'</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#pricing">'.$r["arename"].'</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#tec">'.$r["arename"].'</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#security">'.$r["arename"].'</a>
    </li>
</ul>
    ';
     }
}
*/
//==================end of backend================================================
//=============================================================================
$title = 'Nkgwete IT Solutions | Help Centere';
$content = '
<!--============= Banner Section Starts Here =============-->
<section class="banner-1 bg_img" data-background="assets/images/banner/banner-3.jpg">
    <div class="container">
        <div class="banner-content cl-white">
            <h1 class="title">Frequently Asked Questions</h1>
            <p>Common Questions and Answers</p>
        </div>
    </div>
</section>
<!--============= Banner Section Ends Here =============-->
    <!--============= Form Section Starts Here =============-->
    <div class="form-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                </div>
            </div>
        </div>
    </div>
    <!--============= Form Section Ends Here =============-->
<!--============= Faqs Section Starts Here =============-->
<section class="faq-section padding-top padding-bottom">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-4">
                <aside class="sticky-menu">
                    <div class="faq-menu bg_img mb-30" data-background="assets/images/faq/faq-menu.png">
                    <ul id="faq-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="#company">3rd Party</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#freelancer">Hardware</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#account">Software</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#pricing">General</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tec">Info</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#security">Info 2</a>
                    </li>
                    </ul>
                    </div>
                    <div class="faq-video">
                            <img src="assets/images/faq/video.png" alt="faq">
                    </div>
                </aside>
            </div>
            <div class="col-lg-8 col-xl-7">
                <article class="mt-70 mt-lg-0">
                    <div class="faq--wrapper" id="company">
                        <br>
                        <br>
                        <h3 class="main-title">3rd Party Repairs</h3>
                        <div class="faq--area">
                            <div class="faq--item">
                                <div class="faq-title">
                                    <h6 class="title">How does the 3rd Party Repairs Process Work?</h6>
                                    <span class="icon"></span>
                                </div>
                                <div class="faq-content">
                                    <p> How does the 3rd Party Repairs Process Work, Information goes here</p>
                                </div>
                            </div>
                            <div class="faq--item">
                                <div class="faq-title">
                                    <h6 class="title">How Long Does 3rd Party Repairs Take</h6>
                                    <span class="icon"></span>
                                </div>
                                <div class="faq-content">
                                    <p>Between one and two weeks</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="faq--wrapper" id="freelancer">
                        <br>
                        <br>
                        <h3 class="main-title">Processes</h3>
                        <div class="faq--area">
                            <div class="faq--item">
                                <div class="faq-title">
                                    <h6 class="title">How does the Cabling Process Work?</h6>
                                    <span class="icon"></span>
                                </div>
                                <div class="faq-content">
                                    <p>How does the Cabling Process Work? - Information</p>
                                </div>
                            </div>
                            <div class="faq--item">
                                <div class="faq-title">
                                    <h6 class="title">What problem does Deskoto solve?</h6>
                                    <span class="icon"></span>
                                </div>
                                <div class="faq-content">
                                    <p>A successful marketing plan relies heavily on the pulling-power of advertising copy. Writing result-oriented ad copy is difficult, as it must appeal to, entice, and convince consumers to take action. There is no magic formula to write perfect ad copy.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="faq--wrapper" id="account">
                        <br>
                        <br>
                        <h3 class="main-title">Software</h3>
                        <div class="faq--area">
                            <div class="faq--item">
                                <div class="faq-title">
                                    <h6 class="title">How do I get new Software installed on my device?</h6>
                                    <span class="icon"></span>
                                </div>
                                <div class="faq-content">
                                    <p>A successful marketing plan relies heavily on the pulling-power of advertising copy. Writing result-oriented ad copy is difficult, as it must appeal to, entice, and convince consumers to take action. There is no magic formula to write perfect ad copy.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="faq--wrapper" id="pricing">
                        <br>
                        <br>
                        <h3 class="main-title">Account</h3>
                        <div class="faq--area">
                            <div class="faq--item">
                                <div class="faq-title">
                                    <h6 class="title">How much does Deskoto cost?</h6>
                                    <span class="icon"></span>
                                </div>
                                <div class="faq-content">
                                    <p>A successful marketing plan relies heavily on the pulling-power of advertising copy. Writing result-oriented ad copy is difficult, as it must appeal to, entice, and convince consumers to take action. There is no magic formula to write perfect ad copy.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="faq--wrapper" id="tec">
                        <br>
                        <br>
                        <h3 class="main-title">Security</h3>
                        <div class="faq--area">
                            <div class="faq--item">
                                <div class="faq-title">
                                    <h6 class="title">How can I edit my personal information?</h6>
                                    <span class="icon"></span>
                                </div>
                                <div class="faq-content">
                                    <p>A successful marketing plan relies heavily on the pulling-power of advertising copy. Writing result-oriented ad copy is difficult, as it must appeal to, entice, and convince consumers to take action. There is no magic formula to write perfect ad copy.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="faq--wrapper" id="security">
                        <br>
                        <br>
                        <h3 class="main-title">General</h3>
                        <div class="faq--area">
                            <div class="faq--item">
                                <div class="faq-title">
                                    <h6 class="title">How do I switch to a different price plan?</h6>
                                    <span class="icon"></span>
                                </div>
                                <div class="faq-content">
                                    <p>A successful marketing plan relies heavily on the pulling-power of advertising copy. Writing result-oriented ad copy is difficult, as it must appeal to, entice, and convince consumers to take action. There is no magic formula to write perfect ad copy.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>
<!--============= Faqs Section Ends Here =============-->
';
include 'Template.php'
?>
