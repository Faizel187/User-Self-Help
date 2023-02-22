<?php
$title = 'Nkgwete IT Solutions | Help Centere';
$opt = '';
function insert(){
    include 'modal/config.php';
    if(isset($_POST['submit'])){
        $faq = $_POST['faqarea'];
        $title = $_POST['title'];
        $comm = $_POST['comm'];



        $put = "INSERT INTO faq(faqtitle, faqcontent) VALUES ('$title', '$comm')";
        return mysqli_query($conn,$put);
    }
}

 if(insert()){
    ?>
    <script>
        window.alert("FAQ added successfully");
        window.location.href="faqupload";
    </script>

    <?php 
 }

 function getVal(){
    include 'modal/config.php';
    $sel = "SELECT * FROM area";
    return mysqli_query($conn, $sel);
 }



$content = '
 <!--============= Banner Section Starts Here =============-->
 <section class="banner-1 bg_img" data-background="assets/images/banner/banner-3.jpg">
     <div class="container">
         <div class="banner-content cl-white">
            <h1 class="title">Knowledge Management</h1>
            <p>File Capture</p>
         </div>
    </div>
 </section>
<!--============= Banner Section Ends Here =============-->
<!--============= Category Section Starts Here =============-->
    <section class="category-section padding-top padding-bottom">
        <div class="container">
        <form class="border rounded p-4 m-1" action="#" method="post">
            <h1>File Upload</h1>
            <select class="form-select mb-2" name="faqarea" aria-label="Default select example">
                <option selected>Select FAQ Area</option>
                <option value="Option 1">Option 1</option>
                <option value="Option 2">Option 2</option>
                <option value="Option 3">Option 3</option>
              </select>
            <div class="form-floating mb-3">
                <label for="inputTitle" class="visually-hidden">Title</label>
                <input type="text" name="title" class="form-control" id="inputTitle" placeholder="Enter Article Title">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Enter Comment: <sub>please add &lt;br&gt; for a new line</sub></label>
                <textarea class="form-control" name="comm" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <button type="submit" id="submit" name="submit" class="btn btn-primary">Capture FAQ</button>
        </form>
        </div>
    </section>
    <!--============= Category Section Ends Here =============-->
';
include 'Template.php';
