<?php
$title = 'Nkgwete IT Solutions | Help Centere';
$content = '
 <!--============= Banner Section Starts Here =============-->
 <section class="banner-1 bg_img" data-background="assets/images/banner/banner-3.jpg">
     <div class="container">
         <div class="banner-content cl-white">
            <h1 class="title">TIPS AND TRICKS</h1>
            <p>tips and tricks from our technicians</p>
         </div>
    </div>
 </section>
<!--============= Banner Section Ends Here =============-->
 <!--============= Category Section Starts Here =============-->
    <section class="category-section padding-top padding-bottom">
        <div class="container">
            <div class="row mb-30-none justify-content-center">
                <div class="col-12">
                    <div class="cate-single-item">
                        <h4 class="title">Most Useful Productivity Website</h4>
                        <p>STEP1: in outlook select file->options->add-ins->manage,select "disabled items",and then go </p>
                        <p>STEP2: if you see teams listed under "disabled items select it , and then select Enable "</p>
                        <p>STEP3: Restart outlook and confirm if the add-in is working</p>
                        <div class="cate-author" id="response">
                            <div class="thumb">
                                <a onclick="response()"><img src="assets/images/cate/like.png" alt="cate"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="cate-single-item">
                        <h4 class="title">Helpful Windows Shortcuts</h4>
                            <ol style="list-style-type: square">
                                <li>Alt+Tab: Switch apps</li>
                                <li>Win+D: Show or hide the desktop</li>
                                <li>Ctrl+Shift+Esc: Open the Task Manager</li>
                                <li>Win+X: Open the hidden menu</li>
                                <li><a href="windowShortcuts.php">Click here to view more<a></li>
                            </ol>
                        <div class="cate-author">
                        <div class="thumb">
                        <a href="#"><img src="assets/images/cate/like.png" alt="cate"></a>
                    </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="cate-single-item">
                        <h4 class="title">Useful Teams Shortcuts</h4>
                        <ol style="list-style-type: square">
                                <li>Ctrl+Shift+C - Start an audio call</li>
                                <li>Ctrl + shift + M - Mute/unmute yourself</li>
                                <li>Ctrl+Shift+Esc: Open the Task Manager</li>
                                <li>Ctrl+Shift+D - Decline call</li>
                                <li><a href="#">Click here to view more<a></li>
                            </ol>
                        <div class="cate-author">
                        <div class="thumb">
                        <a href="#"><img src="assets/images/cate/like.png" alt="cate"></a>
                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============= Category Section Ends Here =============-->
';
include 'Template.php'
?>

<script>
    function response(){
        document.getElementById("response").innerHTML = "Thank you for your response!"
    }
</script>