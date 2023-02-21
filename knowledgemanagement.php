<?php
$title = 'Nkgwete IT Solutions | Help Centere';
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
        <form class="border rounded p-4 m-1">
            <h1>File Upload</h1>
            <div class="mb-3">
                <div class="col-auto mb-4">
                    <select class="form-select mb-2" name="categoryselect" aria-label="Default select example">
                        <option selected>Choose Category</option>
                        <option value="Option 1">Option 1</option>
                        <option value="Option 2">Option 2</option>
                        <option value="Option 3">Option 3</option>
                    </select>
                </div>
                <div class="col-auto mb-4">
                    <label for="inputTitle" class="visually-hidden">Title</label>
                    <input type="text" class="form-control" id="inputTitle" placeholder="Enter Article Title">
                </div>
                <div class="col-auto mb-4">
                    <label for="fileinput" class="visually-hidden">Please select the file you want to upload</label>
                    <input style="line-height: 1;" type="file" class="form-control" id="fileinput" aria-describedby="emailHelp">
                </div>
                <div class="col-auto mb-4">
                    <label for="descriptiontextarea" class="form-label">Enter Description: <sub>please add &lt;br&gt; for a new line</sub></label>
                    <textarea class="form-control" id="descriptiontextarea" rows="3"></textarea>
                </div>
            </div>
            <button type="submit" id="submit" class="btn btn-primary">Capture Article</button>
        </form>
        </div>
    </section>
    <!--============= Category Section Ends Here =============-->
';
include 'Template.php';
